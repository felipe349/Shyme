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