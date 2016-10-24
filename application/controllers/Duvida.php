<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
require_once 'Conn.php';
class Duvida extends CI_Controller {
    
    public function index()
    {       
        $db = new Conn();
        $data['resultadoP'] = $db->listarUmaPostagem($_GET['id']);
        $data['resultadoR'] = $db->listarResposta($_GET['id']);
        $this->load->helper('url');
        $this->load->view('sub_pags/duvida',$data);

        if(isset($_POST['submitR'])){
        	$db->adicionarResposta($_POST['txt_content_post'],$_SESSION['id'],$_GET['id']);
        	header('Location:Duvida?id='.$_GET['id']);
        }
    }
}
