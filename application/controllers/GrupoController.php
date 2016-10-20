<?php
session_start();
require_once 'Grupo.php';
require_once 'Usuario.php';
require_once 'Conn.php';

class GrupoController extends CI_Controller
{
  /*  public function index()
    {
        if(isset($_SESSION['id'])){
            $grupo = new Grupo;
            $result = $grupo->listarGrupos($_SESSION['id']);
            $data['list_group'] = $result;
            $this->load->view('grupo', $data);
            
            if(count($_GET)>0){
                $cdGrupo = isset($_GET['cdGrupo']) ? $_GET['cdGrupo'] : '';
                $membros = $grupo->listarMembros($cdGrupo);
            }
        }else{
            header("Location: Login");
        }
    }*/
    
}

