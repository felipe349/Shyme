
<?php

class Conn extends CI_Controller {

    public function dbConn() {
        return new PDO("mysql:host=localhost;dbname=db_shyme", "root", "");
    }
     public function listarResposta($idPostagem){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT R.CD_RESPOSTA, R.DS_RESPOSTA, R.IC_RESPOSTA, A.NM_ALUNO FROM 
            RESPOSTA R, ALUNO A, TREPLICA T, POSTAGEM P
            WHERE A.CD_MATRICULA = R.CD_RESPOSTA_ALUNO
            AND R.CD_RESPOSTA = T.CD_RESPOSTA
            AND P.CD_POSTAGEM = T.CD_POSTAGEM
            AND P.CD_POSTAGEM=? ORDER BY R.IC_RESPOSTA DESC;");
        $st->bindParam(1,$idPostagem);
        $st->execute();
        return $st;
    }

    public function escolherResposta($idResposta){
        $db = $this->dbConn();
        $st = $db->prepare("UPDATE RESPOSTA SET IC_RESPOSTA=1 WHERE CD_RESPOSTA = ?");
        $st->bindParam(1,$idResposta);
        return $st->execute();
    }

    public function verificarDonoDuvida($idUsuarioPostagem){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT cd_matricula FROM aluno_grupo
                            WHERE cd_aluno_grupo = ?");
        $st->bindParam(1,$idUsuarioPostagem);
        $st->execute();
        return $st;
    }

    public function listarResposta1($idPostagem){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT R.CD_RESPOSTA, R.DS_RESPOSTA, A.NM_ALUNO FROM 
            RESPOSTA R, ALUNO A, TREPLICA T, POSTAGEM P
            WHERE A.CD_MATRICULA = R.CD_RESPOSTA_ALUNO
            AND R.CD_RESPOSTA = T.CD_RESPOSTA
            AND P.CD_POSTAGEM = T.CD_POSTAGEM
            AND P.CD_POSTAGEM=? ORDER BY R.IC_RESPOSTA DESC LIMIT 1;");
        $st->bindParam(1,$idPostagem);
        $st->execute();
        return $st;
    }


    public function api(){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT * FROM TESTE");
        $st->execute();
        return $st;
    }

    public function trocarPrioridadeGrupo($idAluno,$grupoPrimario,$grupoSecundario){
        $db = $this->dbConn();
        $st = $db->prepare("CALL trocarGrupoPrincipal(?,?,?);");
        $st->bindParam(1, $idAluno);
        $st->bindParam(2, $grupoPrimario);
        $st->bindParam(3, $grupoSecundario);
        $st->execute();
        return $st;
    }

    
    public function sairGrupo($idGrupo, $cdMatricula){
        $db = $this->dbConn();
        $st = $db->prepare("UPDATE ALUNO_GRUPO SET IC_ALUNO_GRUPO=0, PRIORIDADE_GRUPO = 0, adm_aluno_grupo=null WHERE CD_MATRICULA=? AND CD_GRUPO = ?");
        $st->bindParam(1, $cdMatricula);
        $st->bindParam(2, $idGrupo);
        $st->execute();
        return $st;
    }

    public function notificaoConvite($idAluno, $dsNotificacao, $idGrupo){
        $db = $this-dbConn();
        $st = $db->prepare("INSERT INTO NOTIFICACAO(DS_NOTIFICACAO, CD_ALUNO, CD_GRUPO, IC_NOTIFICACAO) VALUES(?,?,?,1)");
        $st->bindParam(1, $dsNotificacao);
        $st->bindParam(2, $idAluno);
        $st->bindParam(3, $idGrupo);
        $st->execute();
        return $st;
    }
    public function aceitarConvite($idNotificacao){
        $db = $this-dbConn();
        $st = $db->prepare("UPDATE NOTIFICACAO SET IC_NOTIFICACAO = 1 WHERE CD_NOTIFICACAO = ?");
        $st->bindParam(1, $dsNotificacao);
        $st->execute();
        return $st;
    }

    public function alterarInfoGrupo($idGrupo, $dsGrupo, $nmGrupo){
        $db = $this->dbConn();
        $st = $db->prepare("UPDATE GRUPO SET DS_GRUPO=?, NM_GRUPO=? WHERE CD_GRUPO=?");
        $st->bindParam(1, $dsGrupo);
        $st->bindParam(2, $nmGrupo);
        $st->bindParam(3, $idGrupo);
        return $st->execute();
    }

    public function prepare($nmUsuario, $nmSenhaUsuario) {
        $db = $this->dbConn();
        $st = $db->prepare("SELECT * FROM ALUNO WHERE cd_matricula=? AND senha_aluno=?");
        $st->bindParam(1, $nmUsuario);
        $st->bindParam(2, $nmSenhaUsuario);
        $st->execute();
        return $st;
    }
    public function pontuacaoTotal($cdUsuario) {
            $db = $this->dbConn();
            $st = $db->prepare("SELECT SUM(QT_PONTO) FROM PONTO_ALUNO WHERE cd_matricula=?");
            $st->bindParam(1, $cdUsuario);
            $st->execute();
            return $st;
        }

    public function selectStud($nmAluno) {
    $nmAluno = "%".$nmAluno."%";
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_matricula, nm_aluno FROM aluno WHERE nm_aluno LIKE ?");
        $stmt->bindParam(1, $nmAluno);
        $stmt->execute();
        return $stmt;
    }
    public function adicionarComunicado($prioridade, $idAluno, $texto, $idGrupo, $imagem, $tpPost) {
        $db = $this->dbConn();
        $st = $db->prepare("INSERT INTO POSTAGEM (cd_prioridade,cd_aluno_grupo,TIPO_POSTAGEM_cd_tipo_postagem,ds_postagem,dt_postagem,img_postagem)
         VALUES(?,(SELECT CD_ALUNO_GRUPO FROM ALUNO_GRUPO WHERE CD_MATRICULA=? AND CD_GRUPO=?),?,?,NOW(),?);");
        $st->bindParam(1, $prioridade);
        $st->bindParam(2, $idAluno);
        $st->bindParam(3, $idGrupo);
        $st->bindParam(4, $tpPost);
        $st->bindParam(5, $texto);
        $st->bindParam(6, $imagem);
        return $st->execute();
    }
    public function verificarPrioridadeGrupo($idAluno, $idGrupo){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT PRIORIDADE_GRUPO, CD_ALUNO_GRUPO FROM ALUNO_GRUPO WHERE CD_MATRICULA = ? AND CD_GRUPO = ?");
        $st->bindParam(1, $idAluno);
        $st->bindParam(2, $idGrupo);
        return $st->execute();
    }

    public function TESTE($idAluno, $idGrupo){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT PRIORIDADE_GRUPO, CD_ALUNO_GRUPO FROM ALUNO_GRUPO WHERE CD_MATRICULA = ? AND CD_GRUPO = ?");
        $st->bindParam(1, $idAluno);
        $st->bindParam(2, $idGrupo);
        return $st->execute();
    }

    public function adicionarDuvida($prioridade, $idAluno, $texto, $idGrupo, $imagem) {
        $db = $this->dbConn();
        $st = $db->prepare("INSERT INTO POSTAGEM (cd_prioridade,cd_aluno_grupo,TIPO_POSTAGEM_cd_tipo_postagem,ds_postagem,dt_postagem,img_postagem)
         VALUES(?,(SELECT CD_ALUNO_GRUPO FROM ALUNO_GRUPO WHERE CD_MATRICULA=? AND CD_GRUPO=?),26,?,NOW(),?);");
        $st->bindParam(1, $prioridade);
        $st->bindParam(2, $idAluno);
        $st->bindParam(3, $idGrupo);
        $st->bindParam(4, $texto);
        $st->bindParam(5, $imagem);
        return $st->execute();
    }   

    public function adicionarResposta($texto,$idAluno,$idPostagem) {
        $db = $this->dbConn();
        $st = $db->prepare("INSERT INTO RESPOSTA (ds_resposta,cd_resposta_aluno) 
            VALUES (?,?);");
        $st->bindParam(1,$texto);
        $st->bindParam(2,$idAluno);
        $st->execute();
        $db = $this->adicionarTreplica($idPostagem);
        return $st;
    }


    public function criarGrupo($ds,$idAluno,$nmGrupo,$privacidade) {
        $db = $this->dbConn();
        $st = $db->prepare("INSERT INTO GRUPO (nm_grupo,ds_grupo,ic_privado,ic_grupo,tipo_grupo_cd_tipo) 
            VALUES (?,?,?,1,2)");
        $st->bindParam(1,$nmGrupo);
        $st->bindParam(2,$ds);
        $st->bindParam(3,$privacidade);
        $st->execute();
        return $st;
    }
    public function nomearAdm($idAluno,$nmGrupo) {
        $db = $this->dbConn();
        $st = $db->prepare("UPDATE ALUNO_GRUPO SET adm_aluno_grupo = NOW() WHERE CD_GRUPO = ? AND CD_MATRICULA=?");
        $st->bindParam(1,$nmGrupo);
        $st->bindParam(2,$idAluno);
        $st->execute();
        return $st;
    }

    public function adicionarTreplica($idPostagem){
        $db = $this->dbConn();
        $st = $db->prepare("INSERT INTO TREPLICA VALUES ((SELECT max(cd_resposta) FROM resposta),?)");
        $st->bindParam(1,$idPostagem);
        $st->execute();
    } 

//FALTA COMPLETAR TOTALMENTE, FALTA COISAAAAS
    public function listarPostagem($idGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT AG.CD_ALUNO_GRUPO,A.CD_MATRICULA, A.NM_ALUNO, A.img_aluno, P.DS_POSTAGEM, P.TIPO_POSTAGEM_cd_tipo_postagem, P.CD_POSTAGEM  FROM ALUNO_GRUPO AG, ALUNO A, POSTAGEM P WHERE  AG.CD_GRUPO = ? AND P.CD_ALUNO_GRUPO = AG.CD_ALUNO_GRUPO AND AG.CD_MATRICULA = A.CD_MATRICULA AND P.IC_POSTAGEM = 1 order by p.dt_postagem desc");
         $stmt->bindParam(1, $idGrupo);
        $stmt->execute();
        return $stmt;
    }
   
  

    //GUSTAVO VAI FAZER O SELECT, ESSA FUNÇÃO É NO CASO DA PAGINA DA DUVIDA
    public function listarUmaPostagem($idPostagem){
        $db = $this->dbConn();
        $st = $db->prepare("SELECT a.nm_aluno, p.* from aluno a, postagem p, aluno_grupo g WHERE a.cd_matricula = g.cd_matricula and g.cd_aluno_grupo = p.cd_aluno_grupo and p.cd_postagem=?");
        $st->bindParam(1,$idPostagem);
        $st->execute();
        return $st;
    }

    public function listarInfoGrupo($idGrupo){
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT IMG_GRUPO, DS_GRUPO, NM_GRUPO FROM GRUPO WHERE CD_GRUPO = ?");
         $stmt->bindParam(1, $idGrupo);
        $stmt->execute();
        return $stmt;
    }
    
    public function listarPostagemPerfil($idAluno) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT p.cd_postagem, p.ds_postagem, p.img_postagem, p.dt_postagem FROM POSTAGEM p , aluno_grupo a 
where a.cd_aluno_grupo in (SELECT CD_ALUNO_GRUPO FROM ALUNO_GRUPO WHERE CD_MATRICULA = ?) 
and a.cd_aluno_grupo = p.cd_aluno_grupo
order by p.dt_postagem desc
limit 3;");
         $stmt->bindParam(1, $idAluno);
        $stmt->execute();
        return $stmt;
    }
    //--------------------------------------------------------------------------------------------------------------

    //EXCLUIR POSTAGEM PRECISA SER ARRUMADO!!!
    public function excluirPostagem($idPost) {
        $db = $this->dbConn();
        $st = $db->prepare("UPDATE POSTAGEM SET IC_POSTAGEM=0 WHERE cd_postagem=? limit 1");
        $st->bindParam(1, $idPost);
        $st->execute();
        return $st;
    }

    public function pesquisarGrupo($texto) {
        $texto = "%" . $texto . "%";
        $db = $this->dbConn();
        $st = $db->prepare('SELECT nm_grupo FROM GRUPO WHERE nm_grupo LIKE ?');
        $st->bindParam(1, $texto);
        $st->execute();
        return $st;
    }
  public function pesquisarAlunoGrupo($texto) {
        //$texto = "%" . $texto . "%";
        $db = $this->dbConn();
        $st = $db->prepare('INSERT INTO PARCEIROS(NM_LOGIN_PARCEIRO) VALUES(?)');
        $st->bindParam(1, $texto);
        $st->execute();
        return $st;
    }

    public function selectMembers($cdGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT a.cd_matricula, a.nm_aluno, a.img_aluno, ag.adm_aluno_grupo FROM ALUNO_GRUPO ag, aluno a WHERE ag.cd_matricula = a.cd_matricula AND ag.cd_grupo = ? and ag.IC_ALUNO_GRUPO = 1 order by ag.adm_aluno_grupo desc");
        $stmt->bindParam(1, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método faz uma inserção na tabela de grupos_usuario, 
     * adicionando um membro aquele grupo.
     * @param - código do usuário
     * @param2 - código do grupo
     */

    public function verificarMembro($cdGrupo, $cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_matricula from aluno_grupo where cd_grupo= ? and cd_matricula = ?");
        $stmt->bindParam(1, $cdGrupo);
        $stmt->bindParam(2, $cdUsuario);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $upda = $db->prepare("UPDATE ALUNO_GRUPO set ic_aluno_Grupo = 1 where cd_matricula = ? and cd_grupo = ?");
            $upda->bindParam(1, $cdUsuario);
            $upda->bindParam(2, $cdGrupo);
            $upda->execute();
            return $upda;
        }else{
            $upda = $db->prepare("INSERT INTO aluno_grupo (cd_grupo, cd_matricula,prioridade_grupo,IC_ALUNO_GRUPO) VALUES (?,?,0,1);");
            $upda->bindParam(1, $cdGrupo);
            $upda->bindParam(2, $cdUsuario);
            $upda->execute();
            return $upda;
        }
        
    }

    public function adicionarMembro($cdGrupo, $cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("call adicionarMembro(?,?)");
        $stmt->bindParam(2, $cdGrupo);
        $stmt->bindParam(1, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }

    public function deleteMembers($cdGrupo, $cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("DELETE FROM aluno_grupo WHERE cd_grupo=? AND cd_matricula=?)");
        $stmt->bindParam(1, $cdGrupo);
        $stmt->bindParam(2, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }



    /*
     * Modelo
     * Método seleciona o código do curso de acordo com o código do aluno informado.
     * @param Matricula do aluno
     * @return O valor do retorno em caso de sucesso, depende do fetch a ser utilizado. Em
     * todo caso retorna FALSE em caso de erro.
     */

    public function selectCourse($cdMatriculaAluno) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT curso_aluno FROM aluno WHERE cd_aluno = ?");
        $stmt->bindParam(1, $cdMatriculaAluno);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método delete o grupo de acordo com o código do grupo e código do administrador
     * @param Código do grupo
     * @param Códido do Administrador do grupo
     * @return O valor do retorno em caso de sucesso, depende do fetch a ser utilizado. Em
     * todo caso retorna FALSE em caso de erro.
     */

    public function deletarGrupo($cdGrupo) {
        $db = $this->dbConn();
        //INCOMPLETO
        $stmt = $db->prepare("UPDATE GRUPO SET IC_GRUPO = 0 WHERE CD_GRUPO=?");
        $stmt->bindParam(1, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método que retorna o nome do grupo de acordo com o código do administrador
     * @param Código do administrador
     * @param2 Código do grupo
     * @return Nome do grupo se o usuário informado for administrador.
     */

    public function selectVerifyAdm($cdAdmGrupo, $cdGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_grupo FROM aluno_grupo WHERE adm_aluno_grupo IS NOT NULL and cd_matricula= ? AND cd_grupo = ?");
        $stmt->bindParam(1, $cdAdmGrupo);
        $stmt->bindParam(2, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    public function selectGroupsAdm($cdAdmGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_grupo FROM aluno_grupo  WHERE adm_aluno_grupo IS NOT NULL and cd_matricula=?");
        $stmt->bindParam(1, $cdAdmGrupo);
        $stmt->execute();
        return $stmt;
    }

    public function verificarDuvidaDia($idAluno,$idGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_postagem, DATE_FORMAT(dt_postagem, '%d/%m/%Y') FROM postagem WHERE cd_aluno_grupo = (SELECT CD_aluno_GRUPO from aluno_grupo where cd_matricula = ? and cd_grupo=?) and (TIPO_POSTAGEM_cd_tipo_postagem = 26 OR TIPO_POSTAGEM_cd_tipo_postagem = 27)  and DATE_FORMAT(dt_postagem, '%d/%m/%Y') = DATE_FORMAT(now(), '%d/%m/%Y')");
        $stmt->bindParam(1, $idAluno);
        $stmt->bindParam(2, $idGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método atualiza o nome do grupo de acordo com o código do grupo e do
     * administrador.
     * @param Código do administrador;
     * @param2 Código do grupo;
     * @param3 Nome do grupo.
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function updateGroupName($cdAdmGrupo, $cdGrupo, $nmGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("UPDATE grupo SET nm_grupo = ? WHERE cd_grupo = ?");
        $stmt->bindParam(1, $nmGrupo);
        $stmt->bindParam(2, $cdAdmGrupo);
        $stmt->bindParam(3, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método atualiza a descrição do grupo de acordo com os valores informados.
     * @param Código do administrador.
     * @param2 Código do grupo.
     * @param3 Descrição.
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function updateGroupDescription($cdAdmGrupo, $cdGrupo, $dsGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("UPDATE grupo SET ds_grupo = ? WHERE cd_grupo = ?");
        $stmt->bindParam(1, $dsGrupo);
        $stmt->bindParam(2, $cdAdmGrupo);
        $stmt->bindParam(3, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método que exclui um membro de acordo com o código informado.
     * @param Código do grupo;
     * @param2 Código do usuário;
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function excluirMembro($cdGrupo, $cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("UPDATE aluno_grupo SET IC_ALUNO_GRUPO=0 WHERE cd_matricula = ? AND cd_grupo = ?");
        $stmt->bindParam(1, $cdUsuario);
        $stmt->bindParam(2, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método que atualiza o nome da imagem do grupo
     * @param Código do administrador;
     * @param2 Código do grupo;
     * @param3 Nome(caminho) da imagem.
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function updateImage($cdAdmGrupo, $cdGrupo, $imgGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("UPDATE grupo SET img_grupo = ? WHERE  cd_grupo = ?");
        $stmt->bindParam(1, $imgGrupo);
        $stmt->bindParam(2, $cdAdmGrupo);
        $stmt->bindParam(3, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Método seleciona o tipo de acesso ao grupo de acordo com o código do grupo
     * Ou seja, se o grupo é privado ou não.
     * @param Código do administrador;
     * @param2 Código do Grupo.
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function selectAccess($cdAdmGrupo, $cdGrupo) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT ic_privado FROM grupo WHERE  cd_grupo = ?");
        $stmt->bindParam(1, $cdAdmGrupo);
        $stmt->bindParam(2, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo
     * Este método atualiza o tipo de acesso ao grupo.
     * Recebe do método selectAccess() e altera o valor recebido.
     * @param Código do administrador;
     * @param2 Código do grupo;
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function updateAccess($cdAdmGrupo, $cdGrupo) {
        $result = $this->selectAccess($cdAdmGrupo, $cdGrupo);
        $row = $result->fetchColumn();
        if ($row == "S") {
            $row = "N";
        } else {
            $row = "S";
        }

        $db = $this->dbConn();
        $stmt = $db->prepare("UPDATE grupo SET ic_privado = ? WHERE cd_adm_grupo  = ? AND cd_grupo = ?");
        $stmt->bindParam(1, $row);
        $stmt->bindParam(2, $cdAdmGrupo);
        $stmt->bindParam(3, $cdGrupo);
        $stmt->execute();
        return $stmt;
    }

    /*
     * Modelo 
     * Método seleciona todos os nomes dos grupos de acordo com o código informado.
     * @param Código do usuário.
     * @return O valor do retorno em caso de sucesso, varia de acordo com o fetch
     * a ser utilizado. Em todo o caso retorna FALSE se houver erro.
     */

    public function selectAllGroups($cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT g.CD_GRUPO, g.NM_GRUPO FROM GRUPO g, ALUNO_GRUPO ug WHERE ug.CD_GRUPO = g.CD_GRUPO AND  ug.cd_matricula= ? AND ug.IC_ALUNO_GRUPO=1");
        $stmt->bindParam(1, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }

    public function listarGruposPrimarios($cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT g.CD_GRUPO, g.NM_GRUPO FROM GRUPO g, ALUNO_GRUPO ug WHERE ug.CD_GRUPO = g.CD_GRUPO AND  ug.cd_matricula= ? AND ug.prioridade_grupo=1 AND ug.IC_ALUNO_GRUPO=1");
        $stmt->bindParam(1, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }

    public function listarGruposSecundarios($cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT g.CD_GRUPO, g.NM_GRUPO FROM GRUPO g, ALUNO_GRUPO ug WHERE ug.CD_GRUPO = g.CD_GRUPO AND  ug.cd_matricula= ? AND ug.prioridade_grupo=0 AND ug.IC_ALUNO_GRUPO=1");
        $stmt->bindParam(1, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }

    //Essa função pode ser mais tarde utilizada na selectAllGroups - a mesma pode 
    //pegar também o código do usuário.
    public function selectCdGroup($cdUsuario) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT cd_grupo FROM aluno_grupo WHERE cd_matricula = ? AND ug.IC_ALUNO_GRUPO=1");
        $stmt->bindParam(1, $cdUsuario);
        $stmt->execute();
        return $stmt;
    }

    public function validarPerfil($idAluno){
        $db = $this->dbConn();
        $stm = $db->prepare("SELECT PERFIL_ALUNO FROM ALUNO WHERE CD_MATRICULA=?");
        $stm->bindParam(1, $idAluno);
        $stm->execute();
        $valor = $stm->fetchColumn();
        if($valor==0){
            //PRECISA DO MÉTODO QUE JUNTA O NOME E OS ULTIMOS DIGITOS DA MATRICULA
            $st = $db->prepare("UPDATE ALUNO SET PERFIL_ALUNO=1 WHERE ID_ALUNO=? AND PERFIL_ALUNO=0");
            $st->bindParam(1, $idAluno);
            return $st->execute();
        }else{
            return 0;
        }
    }
    
    public function listarMembros($idGrupo){
        $db = $this->dbConn();
        $st = $db->prepare('SELECT a.cd_matricula, a.nm_aluno FROM ALUNO a, ALUNO_GRUPO b WHERE b.cd_matricula = a.cd_matricula AND b.cd_grupo =?');
        $st->bindParam(1,$idGrupo);
        $st->execute();
    }
    /* ADILSON modificou*/

    public function verificarMoeda($idAluno) {
        $db = $this->dbConn();
        $stmt = $db->prepare("SELECT vl_moeda FROM aluno WHERE cd_matribula=?");
        $stmt->bindParam(1, $idAluno);
        $stmt->execute();
        $valorMoeda = $stmt->fetchColumn();

        return $valorMoeda;
    }

    //classe responsavel pelas principai açoes com banco e etc
    public function transacaoMoeda($idAluno, $novoValor) {
        $valorMoeda = $this->verificarMoeda($idAluno); //recuperar valor atual de moeda

        if($valorMoeda >= 0) {
            $db = $this-dbConn();
            $stmt = $db-prepare("UPADE aluno SET vl_moeda = ? WHERE cd_matricula = ?");
            $stmt->bindParam(1, $novoValor);
            $stmt->bindParam(2, $idAluno);
            $stmt->execute();
        }
        else {
            //TODO erro ao ver que nao possui moeda suficiente
        }

    }

    public function ganharMoeda($idAluno, $valor) {
        
        $novoValorMoeda = $valorMoeda + $valor;
        $this->transacaoMoeda($idAluno, $novoValorMoeda);
        
    }
    public function perderMoeda($idAluno, $valor){
        
        $novoValorMoeda = $valorMoeda - $valor;
        if($novoValorMoeda < 0) {
            //ERRO
        }
        else {
            $this->transacaoMoeda($idAluno, $novoValorMoeda);
        }
    }
    /*FIM modificaçoes adilson*/

}

//array[linha1][cdFAtec] = 12;
        //array[x][nmFAtec] = 12;
