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

        $resId = $db->listarUmaPostagem($_GET['id']); //Pegando o ALUNO_GRUPO para
        $resId2 = $resId->fetch(PDO::FETCH_ASSOC);    // verificar se o Usuario é o dono da Pergunta
        
        $donoDuvida = $db->verificarDonoDuvida($resId2['cd_aluno_grupo']); //Usando o Aluno Grupo para 
        $idAluno = $donoDuvida->fetch(PDO::FETCH_ASSOC); // descobrir o CD_MATRICULA de quem postou

        if($idAluno['cd_matricula'] == $_SESSION['id']){  //Verificando se o CD_MATRICULA bate com quem ta logado
            $data['dono'] = 1;
        } else {
            $data['dono'] = 0;
        }

        $verEscolha = $db->listarResposta($_GET['id']); //Pega lista de resultados da Resposta
        foreach($verEscolha as $ver){                   //Para verificar se uma delas ja foi
            if($ver['IC_RESPOSTA'] == 1){               //Escolhida como resposta definitiva
                $data['escolha'] = 1;                   //Se for o caso, armazena numa variavel
                break;                                  //E envia pra view
            } else {
                $data['escolha'] = 0;
            }
        }
        
        $this->load->helper('url');
        $this->load->view('sub_pags/duvida',$data);

        if(isset($_POST['submitR'])){
        	$db->adicionarResposta($_POST['txt_content_post'],$_SESSION['id'],$_GET['id']);
        	header('Location:Duvida?id='.$_GET['id']);
        }

        if(isset($_POST['escolher'])){
           $idResp = $_POST['id'];
           $db->escolherResposta($idResp);
           header('Refresh:0');
        }
    }
}
