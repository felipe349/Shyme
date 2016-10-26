<?php
header('Content-type: application/json');
require_once 'Grupo.php';
require_once 'Usuario.php';
require_once 'GrupoManual.php';

class SearchControl extends CI_Controller 
{

    public function index() 
    {
        $user = new Usuario;
        $grupo = new Grupo;

        $pesquisa = isset($_POST['q']) ? $_POST['q'] : '';
        $tipo = isset($_POST['qType']) ? $_POST['qType'] : '';
        
        switch ($tipo){
          case "grupo":
              $result = $grupo->pesquisarGrupo($pesquisa);
              break;
          case "usuario":
              $result = $user->pesquisarPessoas($pesquisa);
              break;
          case "usuario_grupo":
              $cdGrupo = isset($_GET['id']) ? $_GET['id'] : '';             
              $membroGrupo = new Grupo;
              $result = $membroGrupo->pesquisarMembros($cdGrupo, $pesquisa);
              break;
          default :
              $resultado = $user->pesquisarPessoas($pesquisa);
              $resultado2 = $grupoManual->pesquisarGrupo($pesquisa);
              $result = array_merge($resultado, $resultado2);
        }
        if(count($result) !== 0){
            echo json_encode($result);
        }else{
            $result = null;
            echo json_encode($result);
        }
    }
}