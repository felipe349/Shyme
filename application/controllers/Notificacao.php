<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
require_once 'Grupo.php';
class Notificacao extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
        $this->load->view('notificacao');          
}
}
