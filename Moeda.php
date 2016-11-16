<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
require_once 'Conn.php';
class Moeda extends CI_Controller {

	
	public function atMoeda()
	{
        $db = new Conn();
        $res = $db->atualizarMoeda();
        $moeda = $res->fetch();
        $_SESSION['moeda'] = $moeda['vl_moeda'];
    }
}
