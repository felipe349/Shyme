<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
class Teste extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
        $this->load->view('sub_pags/duvida.php');
    }
}
