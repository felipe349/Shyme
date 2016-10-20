<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
require_once 'Conn.php';
class Duvida extends CI_Controller {
    
    public function index()
    {       
        $db = new Conn();
        $data['resultadoP'] = $db->listarUmaPostagem($_GET['id']); 
        $st = $db->listarUmaPostagem($_GET['id']);  
        $this->load->helper('url');
        $this->load->view('sub_pags/duvida',$data);
    }
}
