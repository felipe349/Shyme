
DELIMITER $$
CREATE TRIGGER sairGrupo AFTER UPDATE ON ALUNO_GRUPO
FOR EACH ROW
BEGIN
	IF NEW.IC_ALUNO_GRUPO = 0 then
    call inativarPostagens(NEW.CD_ALUNO_GRUPO);
    end if;

END $$




DELIMITER $$

CREATE PROCEDURE inativarPostagens(IN cdaluno INT)
BEGIN
	UPDATE POSTAGEM SET IC_POSTAGEM=0 WHERE CD_ALUNO_GRUPO = cdaluno;
END $$
DELIMITER ;

delimiter $$
CREATE TRIGGER excluirGrupo AFTER UPDATE ON GRUPO
FOR EACH ROW
BEGIN
	IF NEW.IC_GRUPO = 0 then
    UPDATE ALUNO_GRUPO SET IC_ALUNO_GRUPO=1, PRIORIDADE_GRUPO = 1 WHERE CD_GRUPO = NEW.CD_GRUPO;
    end if;

END $$


DELIMITER $$

CREATE  PROCEDURE `adicionarMembro`(in aluno int(11), in grupo int(10))
begin
declare cd_aluno int(11);
declare cd_grupo int(10);
SELECT cd_aluno = count(*) from aluno_grupo
where cd_matricula = aluno and cd_grupo = grupo;

if (cd_aluno > 0)
then
	update aluno_grupo set ic_aluno_Grupo = 1 where cd_matricula = aluno and cd_grupo = grupo;
else
	INSERT INTO aluno_grupo (cd_grupo, cd_matricula,prioridade_grupo,IC_ALUNO_GRUPO) VALUES (grupo,aluno,0,1);
end if;
end $$

DELIMITER $$

CREATE PROCEDURE `atribuirMoeda`(IN vlMoeda INT, IN icPost int, IN cdAluno INT)
BEGIN 
declare moedanew,moedant, ponto int;
set moedant = (SELECT VL_MOEDA FROM ALUNO WHERE CD_MATRICULA =  cdAluno);
	UPDATE aluno SET vl_moeda = CASE 
	WHEN icPost = 0 THEN vl_moeda-vlMoeda 
	WHEN icPost = 1 THEN vl_moeda+vlMoeda 
	ELSE vl_moeda 
	END 
    WHERE cd_matricula = cdAluno;
set moedanew = (SELECT VL_MOEDA FROM ALUNO WHERE CD_MATRICULA =  cdAluno); 
   
	IF moedanew > moedant
    then
    set ponto = moedanew - moedant;
    call atribuirPontuacao(ponto,cdAluno);
    END IF;
END $$

DELIMITER $$

CREATE PROCEDURE `atribuirPontuacao`(IN ponto int, IN cdAluno INT)
BEGIN 
INSERT INTO PONTO_ALUNO VALUES(cdAluno,ponto,now());
END $$

DELIMITER $$

CREATE  PROCEDURE `trocarGrupoPrincipal`(IN aluno INT, IN grupoPrimario INT, IN grupoSecundario INT)
BEGIN
	UPDATE ALUNO_GRUPO SET prioridade_grupo = CASE
		WHEN CD_MATRICULA = aluno AND CD_GRUPO = grupoPrimario AND PRIORIDADE_GRUPO = 0 THEN 1
		WHEN CD_MATRICULA = aluno AND CD_GRUPO = grupoPrimario AND PRIORIDADE_GRUPO = 1 THEN 0
		WHEN CD_MATRICULA = aluno AND CD_GRUPO = grupoSecundario AND PRIORIDADE_GRUPO = 0 THEN 1
		WHEN CD_MATRICULA = aluno AND CD_GRUPO = grupoSecundario AND PRIORIDADE_GRUPO = 1 THEN 0
        ELSE PRIORIDADE_GRUPO
        END;
END $$

DELIMITER $$

CREATE  PROCEDURE `verificarMoeda`(IN tp INT,  IN cdAluno INT)
BEGIN
declare moeda,tpmoeda,icpost int;

set tpmoeda = (SELECT T.VL_TIPO_POSTAGEM FROM ALUNO A, TIPO_POSTAGEM T
WHERE T.CD_TIPO_POSTAGEM = tp AND A.CD_MATRICULA = cdAluno);

set moeda = (SELECT A.VL_MOEDA FROM ALUNO A, TIPO_POSTAGEM T
WHERE T.CD_TIPO_POSTAGEM = tp AND A.CD_MATRICULA = cdAluno);

set icpost = (SELECT T.IC_TIPO_POSTAGEM FROM ALUNO A, TIPO_POSTAGEM T
WHERE T.CD_TIPO_POSTAGEM = tp AND A.CD_MATRICULA = cdAluno);


 IF(moeda >= tpmoeda)
THEN
 CALL atribuirMoeda(tpmoeda,icpost,cdAluno);

END IF; 
END $$

