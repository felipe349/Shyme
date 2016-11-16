<?php

require_once 'Conn.php';
/**
 * Description of GrupoCurso
 *
 * @author vinicius
 */

class GrupoCurso extends GrupoGeral{
    
    /*
     * Método que verifica o curso do aluno
     * @param Código da matricula do aluno
     * @return inteiro com o código do curso.
     */
    public function verificarCurso($cdMatriculaAluno)
    {
        $conn = new Conn;
        $result = $conn->selectCourse($cdMatriculaAluno);
        if($result->rowCount() !== 0){
            $row = $result->fetchColumn();
            return $row;
        }else{
            return "Nenhum curso encontrado";
        }
    }
}
