<?php
session_start();
require_once 'Conn.php';


class Usuario extends CI_Controller {
   
    
   private $nmUsuario;
   private $nmEmailUsuario;
   private $cdUsuario;
   private $telUsuario;
   private $nmSenhaUsuario;
   public $i = 0;
   
    
    public function modificarSenha($nmSenhaUsuario){
      
    }

    public function logarConta($nmUsuario,$nmSenhaUsuario){
        $valor = new Conn();
        $valorPreparado = $valor->prepare($nmUsuario, $nmSenhaUsuario);
        if($valorPreparado->rowCount()==1){
            $row = $valorPreparado->fetch();
            $_SESSION["id"] = $row['cd_matricula'];
            $_SESSION["nome"] = $row['nm_aluno'];
            $_SESSION["curso"] = $row['curso_aluno'];
            $_SESSION["imagem"] = $row['img_aluno'];
            $_SESSION["moeda"] = $row['vl_moeda'];
            $_SESSION["primeira"] = 0;
            $_SESSION["grupoAdm"] = 0;
            $valorPreparadoadm = $valor->selectGroupsAdm($_SESSION['id']);
            if($valorPreparadoadm->rowCount()>0){
                $_SESSION["grupoAdm"] = 1;
            }
            return 1;
        } else {
            return 0;
        }
    }
    
    public function criarPerfil($idAluno){
        $db = new Conn();
        if($db->validarPerfil($idAluno)==1){
            $_SESSION['primeira'] = 1;
            return 1;
        } else {
            return 0;
        }
    }

    public function pesquisarPessoas($nmAluno){
        $conn = new Conn;
        $result = $conn->selectStud($nmAluno);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    // GETTTERS
   /* public function __get($atrib){
          return $this->$atrib;
      }
    
    public function __set($atrib, $value){
          $this->$atrib = $value;
      }*/
}
