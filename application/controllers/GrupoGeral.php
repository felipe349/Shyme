<?php

require_once 'Conn.php';

class GrupoGeral extends Grupo{
    
    /*
     * Método que adiciona o usuário ao grupo da Instituição - Grupo automático
     * @param Código do grupo a ser adicionado.
     * @param Código do usuário que será adicionado ao grupo
     * O grupo já está predefinido nesta classe, linha 18 - valor definido no construtor.
     * @return - Void - retorna apenas uma mensagem de sucesso ou não (pode ser retirado depois).
     */
    public function adicionarMembroAutomatico($cdGrupo, $cdUsuario)
    {
        $conn = new Conn;
        $result = $conn->addMembers($cdGrupo, $cdUsuario);
        if($result){
            echo "Adicionado!";
        }else{
            echo "Não adicionado!";
        }
    }
}
