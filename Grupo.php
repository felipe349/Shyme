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
                echo "<script>var r = confirm('Deseja mesmo sair do grupo?!');</script>";
                   $r = "<script>document.write(r);</script>";
                   if($r == true){ 
                        $a =  $db1->sairGrupo($_GET['id'],$_SESSION['id']);
                        if($a->rowCount() !== 0){
                        header("Location:Perfil");
                        }
                   }else{
                    header("Location:Grupo?id=".$_GET['id']."&pg=2");
                   }
              
            }

            if(isset($_GET['excluirGrupo'])){
                $db1 = new Conn();
                 echo "<script>var r = confirm('Deseja mesmo sair do grupo?!');</script>";
                   $r = "<script>document.write(r);</script>";
                   if($r == true){ 
                        $a = $db1->excluirGrupo($_GET['id']);
                        if($a->rowCount() !== 0){
                        header("Location:Perfil");
                        }else{
                            header("Location:Grupo?id=".$_GET['id']."&pg=2");
                           }
                   }else{
                    header("Location:Grupo?id=".$_GET['id']."&pg=2");
                   }
                
            }
            if(isset($_GET['download'])){
                $db1 = new Conn();
                $id = $_GET['download'];
                   $key = 'AIzaSyDc59gUfRRQppfkFKItGCkdx28iFQCYTb8';
                   $link = 'https://www.googleapis.com/drive/v3/files/'.$id.'?alt=media&key='.$key;
                   echo "<script>var r = confirm('deseja fazer o download?');</script>";
                   $r = "<script>document.write(r);</script>";
                   if($r == true){
                    header("Location: ".$link);
                   }else{
                    echo 'n';
                   }
                   
            }

            if(isset($_GET['remover'])){
                $idpost = $_GET['remover'];
                $idgru = $_GET['id'];
                $db1 = new Conn();
                
                echo "<script>var r = confirm('Deseja mesmo excluir essa postagem?!');</script>";
                   $r = "<script>document.write(r);</script>";
                   if($r == true){
                    $db1->excluirPostagem($idpost);
                    header("Location:Grupo?id= ".$idgru);
                   }else{
                    header("Location:Grupo?id= ".$idgru);
                   }
                

            }
            if(isset($_GET['removerMembro'])){
                echo $_GET['removerMembro'];
                $db1 = new Conn();
                echo "<script>var r = confirm('Deseja mesmo exclui-lo?!');</script>";
                   $r = "<script>document.write(r);</script>";
                   if($r == true){
                    $db1->excluirMembro($_GET['id'],$_GET['removerMembro']);
                    header("Location:Grupo?id=".$_GET['id']."&pg=2");
                   }else{
                    header("Location:Grupo?id=".$_GET['id']."&pg=2");
                   }

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
                    $tpPost = "";
                    $texto = $_POST['txt_content_post'];
                    $idGrupo = $_GET['id'];
                    $idAluno = $_SESSION['id']; 
                    $pg = $db->verificarPrioridadeGrupo($_SESSION['id'],$_GET['id']);
                    foreach ($pg as $p){
                        if($p['PRIORIDADE_GRUPO'] == 1){
                            $tpPost = 32;
                        }else{
                            $tpPost = 33;
                        }
                    }    
                    $moeda = $db->verificarMoeda($_SESSION['id'],$tpPost);  
                    if($moeda->rowCount() > 0){
                        $ponto = $db->atualizarMoedaPonto($idAluno);
                            foreach ($ponto as $pontos) {
                                $_SESSION['points'] = $pontos['QT_PONTO'];
                                $_SESSION['moeda'] = $pontos['VL_MOEDA'];
                            }   
                        $db->adicionarComunicado($prioridade, $idAluno, $texto, $idGrupo, $imagem,$tpPost);
                        header("Refresh:0");
                    }else {
                             echo "<script>alert('Você não tem moedas o suficiente :(');</script>";
                        }
                }

                if(isset($_POST['duvida'])){
                    $prioridade = 1;
                    $imagem = "";
                    $texto = $_POST['txt_content_post'];
                    $arquivo = "";
                    $idGrupo = $_GET['id'];
                    $idAluno = $_SESSION['id']; 
                    //Adiciona duvida
                    $pg = $db->verificarPrioridadeGrupo($_SESSION['id'],$_GET['id']);
                    foreach ($pg as $p){
                        if($p['PRIORIDADE_GRUPO'] == 1){
                            $tpPost = 26;
                        }else{
                            $tpPost = 27;
                        }
                    }    
                    $verificar = $db->verificarDuvidaDia($idAluno,$idGrupo);
                        if($verificar->rowCount()==0){   
                        $moeda = $db->verificarMoeda($_SESSION['id'],$tpPost);  
                        if($moeda->rowCount() > 0){   
                        $ponto = $db->atualizarMoedaPonto($idAluno);
                            foreach ($ponto as $pontos) {
                                $_SESSION['points'] = $pontos['QT_PONTO'];
                                $_SESSION['moeda'] = $pontos['VL_MOEDA'];
                                $db->adicionarDuvida($prioridade, $idAluno, $texto, $idGrupo, $imagem);
                                 header("Refresh:0");
                            }    
                         }else {
                             echo "<script>alert('Você não tem moedas o suficiente :(');</script>";
                            } 
                        }else {
                             echo "<script>alert('Você já postou uma dúvida hoje!');</script>";
                        }     
            }
        }
            //Pesquisar a aluno para adicionar 
            


            if(isset($_GET['dsgru']) && isset($_GET['nomegru'])){
                $db = new Conn();
                $db->alterarInfoGrupo($_GET['id'],$_GET['dsgru'],$_GET['nomegru']);
            }
            if(isset($_POST['addmembro'])){
                $db = new Conn();
                $result = $db->verificarMembro($_GET['id'], $_POST['addmembro']);
                if ($result->rowCount() !== 0) {
                    echo "Adicionado com sucesso!";
                } else {
                    echo "Erro no banco de dados.";
                }
            }
            if(isset($_POST['cdadm'])){
                $db = new Conn();
                $result = $db->nomearAdm( $_POST['cdadm'],$_GET['id']);
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