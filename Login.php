<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Usuario.php';
class Login extends CI_Controller {

	
	public function index()
	{
            if(isset($_SESSION['id'])){
                header('Location:Perfil');
            }
            
                $this->load->helper('url');
		$this->load->view('login');
                if(isset($_POST['submit'])){
                    $Usuario = new Usuario();
                    if($Usuario->logarConta($_POST['txt_login'],$_POST['txt_senha'])==1){
                        $Usuario->criarPerfil($_SESSION['id']);
                        header('Location:Perfil');
                }else{
                    echo "Usuário ou senha errado(s)";
                }
        }}
}
