<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Conn.php';
require_once 'Usuario.php';

class Grupo extends CI_Controller{
    
    private $nmGrupo;
    private $cdGrupo;
    private $cdMembros;
    private $dsGrupo;
    private $cdAdmGrupo;
    private $cdUsuario;
    
    public function listarMembros($cdGrupo)
    {
        $conn = new Conn;
        $stmt = $conn->selectMembers($cdGrupo);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
     public function listarGrupos($cdUsuario)
    {
        $conn = new Conn;
        $stmt = $conn->selectAllGroups($cdUsuario);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

     public function listarInfoGrupos($cdGrupo)
    {
        $conn = new Conn;
        $stmt = $conn->listarInfoGrupo($cdGrupo);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function listarGruposPrimarios($cdUsuario)
    {
        $conn = new Conn;
        $stmt = $conn->listarGruposPrimarios($cdUsuario);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
     public function listarGruposSecundarios($cdUsuario)
    {
        $conn = new Conn;
        $stmt = $conn->listarGruposSecundarios($cdUsuario);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function adicionarMembro($cdGrupo, $cdUsuario){
        $conn = new Conn;
        $result = $conn->adicionarMembro($cdGrupo, $cdUsuario);
        if ($result->rowCount() !== 0) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro no banco de dados.";
        }
    }



public function index(){
         if(isset($_SESSION['id'])){
            $conn = new Conn();
            $grupoAdmVer = 0;
            if($_SESSION['grupoAdm'] == 1){
                $verifyAdm = $conn->selectVerifyAdm($_SESSION['id'],$_GET['id']);
                if($verifyAdm->rowCount()>0){
                    $grupoAdmVer = 1;
                }else{
                    $grupoAdmVer = 0;
                }
            }

            if(isset($_GET['sairGrupo'])){
                $db1 = new Conn();
                echo $_GET['id'].$_SESSION['id'];
                $db1->sairGrupo($_GET['id'],$_SESSION['id']);
            }

            if(isset($_GET['excluirGrupo'])){
                $db1 = new Conn();
                $db1->excluirGrupo($_GET['id']);
            }

            if(isset($_GET['remover'])){
                echo $_GET['remover'];
                $db1 = new Conn();
                $db1->excluirPostagem($_GET['remover']);
                             header("Location : Grupo?id= ".$_GET['id']);

            }
            if(isset($_GET['removerMembro'])){
                echo $_GET['removerMembro'];
                $db1 = new Conn();
                $db1->excluirMembro($_GET['id'],$_GET['removerMembro']);
                             header("Location : Grupo?id= ".$_GET['id']);

            }
            if(isset($_GET['pg'])){
               if($_GET['pg']==2){
                    $grupo = new Grupo();
                    $data['membros']= $grupo->listarMembros($_GET['id']);
                    $data['info']= $grupo->listarInfoGrupos($_GET['id']);

                    $this->load->helper('url');
                    if($grupoAdmVer == 1){
                        $this->load->view('grupo-membro-adm',$data);                
                    }else{
                        $this->load->view('grupo-membro',$data);
                    }
                        
                }
            } else{
                $db = new Conn();
                $grupo = new Grupo();
                $data['resultado']= $grupo->listarGrupos($_SESSION['id']);
                $data['resultadoP'] = $db->listarPostagem($_GET['id']);
                $rP = $db->listarPostagem($_GET['id']);
                $i = 0;
                foreach($rP as $resP){
                    if($resP['TIPO_POSTAGEM_cd_tipo_postagem'] == 26){
                        $numeroD[$i] = $resP['CD_POSTAGEM'];
                        $i++;
                    }
                }
                    $i = 0;
                    if(isset($numeroD)){
                        foreach($numeroD as $nD){
                            $data['resultadoR'][$i] = $db->listarResposta1($nD);
                            $i++;
                    }
                }
            
                /*$data[0]['resultadoE'] = 13;
                $data[1]['resultadoE'] = 113;
                echo "<script>alert(".$data[0]['resultadoE'].");</script>";*/
                $this->load->helper('url');
                if($grupoAdmVer == 1){
                    $this->load->view('grupo-adm',$data);                
                }else{
                    $this->load->view('grupo',$data);
                }
                
                if(isset($_POST['comunicado'])){
                    $prioridade = 1;
                    $imagem = "";
                    $texto = $_POST['txt_content_post'];
                    $arquivo = "";
                    $idGrupo = $_GET['id'];
                    $idAluno = $_SESSION['id']; 
                    //Adiciona comunicado
                         $db->adicionarComunicado($prioridade, $idAluno, $texto, $idGrupo, $imagem);
                         header("Refresh:0");
                }

                if(isset($_POST['duvida'])){
                    $prioridade = 1;
                    $imagem = "";
                    $texto = $_POST['txt_content_post'];
                    $arquivo = "";
                    $idGrupo = $_GET['id'];
                    $idAluno = $_SESSION['id']; 
                    //Adiciona duvida
                    $verificar = $db->verificarDuvidaDia($idAluno,$idGrupo);
                        if($verificar->rowCount()==0){                
                            $db->adicionarDuvida($prioridade, $idAluno, $texto, $idGrupo, $imagem);
                             header("Refresh:0");
                         } else {
                             echo "<script>alert('Você já postou uma dúvida hoje!');</script>";
                        }
                }

                     
                
            }
            //Pesquisar a aluno para adicionar 
            


            if(isset($_GET['dsgru']) && isset($_GET['nomegru'])){
                $db = new Conn();
                $db->alterarInfoGrupo($_GET['id'],$_GET['dsgru'],$_GET['nomegru']);
            }
            if(isset($_POST['q'])){
                $db = new Conn();
                $result = $db->adicionarMembro($_GET['id'], $_POST['q']);
                if ($result->rowCount() !== 0) {
                    echo "Adicionado com sucesso!";
                } else {
                    echo "Erro no banco de dados.";
                }
            }
            if(isset($_POST['cdadm'])){
                $db = new Conn();
                $result = $db->nomearAdm($_GET['id'], $_POST['cdadm']);
                if ($result->rowCount() !== 0) {
                    echo "Adicionado com sucesso!";
                } else {
                    echo "Erro no banco de dados.";
                }
            }

                /*
                    $db->pesquisarAlunoGrupo($_GET['q']);
                    $data['membrosPesquisados'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $this->load->helper('url');
                    $this->load->view('add-membro',$data);
                */
                     
        } 
        else {
                header('Location:Login');
            }
    }


    public function index2($cdUsuario, $cdGrupo){ 
        adicionarMembro($cdGrupo, $cdUsuario);
    }
    
    public function index3($cdUsuario, $cdGrupo){
        tornarAdministrador($cdUsuario, $cdGrupo);
    }
}