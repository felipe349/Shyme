<?php

require_once 'Conn.php';

/**
 * Description of GrupoManual
 *
 * @author vinicius
 */
class GrupoManual extends Grupo {
    
    /*
     * Método que altera o tipo de acesso ao grupo, tornando ele privado caso
     * o mesmo seja público ou público, se o mesmo for privado.
     * @param Código do administrador;
     * @param2 Código do grupo.
     * @return Mensagem de sucesso ou falha (Pode ser modificado depois).
     */
    public function alterarAcesso($cdAdmGrupo, $cdGrupo)
    {
        $conn = new Conn;
        $result = $conn->updateAccess($cdAdmGrupo, $cdGrupo);
        if($result->rowCount() !== 0){
            echo "Grupo alterado com sucesso!";
        }else{
            echo "Erro no banco de dados";
        }
    }
    /*
     * Método que adiciona um membro ao grupo de acordo com o código informado.
     * @param2 Código do grupo
     * @param3 Código do usuário
     * Exibe uma mensagem de sucesso.
     */
    public function adicionarMembro($cdGrupo, $cdUsuario) 
    {
        $conn = new Conn;
        $result = $conn->addMembers($cdGrupo, $cdUsuario);
        if ($result->rowCount() !== 0) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro no banco de dados.";
        }
    }

    /*
     * Método que exclui um grupo de acordo com o código do grupo e do
     * administrador do grupo.
     * @param Código do administrador.
     * @param2 Código do grupo.
     * @return Mensagem de sucesso ou erro; (pode ser alterado mais tarde)
     */
    public function excluirGrupo($cdAdmGrupo, $cdGrupo) 
    {
        $conn = new Conn;
        $result = $conn->deleteGroup($cdAdmGrupo, $cdGrupo);
        $count = $result->rowCount();
        if ($count !== 0) {
            echo "Grupo excluído com sucesso!";
        } else {
            echo "Ops, algo errado aconteceu!";
        }
    }
    
    /*
     * Método que verifica se o usuário, através do código informado, é 
     * administrador daquele grupo;
     * @param Código do administrador
     * @param2 Código do grupo
     * @return Retorna true em caso o administrador seja o adm daquele grupo.
     */
    public function verificarAdministrador($cdAdmGrupo, $cdGrupo)
    {
        $conn = new Conn;
        $result = $conn->selectAdm($cdAdmGrupo, $cdGrupo);
        if($result->rowCount()!==0){
            return true;
        }else{
            return false;
        }
    }
    
    /*
     * Método que renomeia o nome do grupo.
     * @param Código do administrador
     * @param2 Código do grupo
     * @param3 Nome do grupo
     */
    public function renomearGrupo($cdAdmGrupo, $cdGrupo, $nmGrupo)
    {
        $conn = new Conn;
        $result = $conn->updateGroupName($cdAdmGrupo, $cdGrupo, $nmGrupo);
        if($result->rowCount() !== 0){
            echo "Nome atualizado com sucesso!";
        }else{
            echo "Erro no banco de dados.";
        }
    }
    
    /*
     * Método que altera a descrição do usuário
     * @param Código do administrador;
     * @param2 Código do grupo;
     * @param3 Descrição do grupo;
     * @return Mensagem de sucesso ou falha.
     */
    public function alterarDescricaoGrupo($cdAdmGrupo, $cdGrupo, $dsGrupo)
    {
        $conn = new Conn;
        $result = $conn->updateGroupDescription($cdAdmGrupo, $cdGrupo, $dsGrupo);
        if($result->rowCount() !== 0){
            echo "Descrição atualizada com sucesso!";
        }else{
            echo "Erro no banco de dados.";
        }
    }
    
    /*
     * Método que exclui um membro do grupo de acordo com o código informado.
     * @param Código do grupo;
     * @param2 Código do usuário;
     * @return Mensagem de sucesso ou falha (Pode ser retirada depois).
     */
    public function excluirMembro($cdGrupo, $cdUsuario)
    {
        $conn = new Conn;
        $result = $conn->deleteMember($cdGrupo, $cdUsuario);
        if($result->rowCount() !== 0){
            echo "Membro excluído com sucesso!";
        }else{
            echo "Erro no banco de dados";
        }
    }
    
    /*
     * Método que altera a imagem do grupo.
     * @param Código do administrador;
     * @param2 Código do grupo;
     * @param3 Nome(caminho) da imagem
     * @return Retorna uma mensagem em caso de sucesso ou erro.
     */ 
    public function alterarImagemGrupo($cdAdmGrupo, $cdGrupo, $imgGrupo)
    {
        $conn = new Conn;
        $result = $conn->updateImage($cdAdmGrupo, $cdGrupo, $imgGrupo);
        if($result->rowCount() !== 0){
            echo "Imagem alterada com sucesso!";
        }else{
            echo "Erro no banco de dados";
        }
    }
}