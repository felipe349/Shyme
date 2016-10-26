<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
require_once 'Grupo.php';
require_once 'Moeda.php';
class Perfil extends CI_Controller {

	
	public function index()
	{
         $moeda = new Moeda(); //ATUALIZACAO DE MOEDAS
         $moeda->atMoeda();    // LALALA
            if(isset($_SESSION['id'])){
                $this->load->helper('url');
           //     if($_SESSION['primeira']==1){
        //       echo "bem-vindo";
          //      }
                $db = new Conn();
                $grupo = new Grupo();
                $data['grupoPrimario']= $grupo->listarGruposPrimarios($_SESSION['id']);
                $data['grupoSecundario']= $grupo->listarGruposSecundarios($_SESSION['id']);
                $data['postPerfil']= $db->listarPostagemPerfil($_SESSION['id']);

                if(isset($_GET['nmgrupo']) && isset($_GET['dsgrupo']) && isset($_GET['privacidade'])){
                    $db->criarGrupo($_GET['dsgrupo'],$_SESSION['id'],$$_GET['nmgrupo'],$$_GET['privacidade']);
                }
                if(isset($_GET['gp']) && isset($_GET['gs'])){
                    $db->trocarPrioridadeGrupo($_SESSION['id'],$_GET['gp'],$_GET['gs']);
                }
                $this->load->view('perfil',$data);
	} else{
            header('Location:Login');
        }
}
}
