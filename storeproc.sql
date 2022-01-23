/*PROCEDIMIENTO ALMACENADO PARA CONTROLAR A LOS USUARIO*/
/*ULIMAS CONEXIONES, ACTUALIZAR CONTRASEñA O REINICIAR SU CUENTA*/
USE `reuniones_elim`;	
DROP procedure IF EXISTS `sp_usuarios`;

USE `reuniones_elim`;
DROP procedure IF EXISTS `reuniones_elim`.`sp_usuarios`;
;

DELIMITER $$
USE `reuniones_elim`$$
CREATE PROCEDURE `sp_usuarios`(
	IN per_id_usuario INT,
	IN opc1 int,/*actualizar contraseña de usuario*/
		IN contra_new  VARCHAR(100),
	IN opc2 INT,/*controla la actividad del usuario, es decir ultima conexion*/
	IN opc3 INT, /*reinicia la cuenta del usuario*/
    IN opc4 INT /*Desactivar cuenta o bannearla*/
)
BEGIN
	if opc1 = 1 then/* FUNCIONA ACTUALIZAR CONTRASEñA DE USUARIO*/
		UPDATE per_persona 
			SET per_password = SHA1(contra_new),
            per_actualizacion = 1,
			per_fecha_actualizacion = NOW()
            WHERE per_id = per_id_usuario;
	elseif opc2 = 1 then /* FUNCIONA CONTROLAR LA ACTIVIDAD DEL USUARIO*/
		UPDATE per_persona 
				SET per_ultima_conexion = NOW()
				WHERE per_id = per_id_usuario;	
	elseif opc3 = 1 then /* FUNCIONA REINICIAR CUENTA DE USUARIO*/
		UPDATE per_persona 
			SET per_password = SHA1(contra_new),
            per_actualizacion = 0
            WHERE per_id = per_id_usuario;	
	elseif opc4 = 1 then /*FUNCIONA BANEAR O DESBANEAR USUARIOS*/
	
	SET @v1 := (select per_estado from per_persona where per_id = per_id_usuario);
	SELECT @v1;
		UPDATE per_persona 
			SET per_estado =  if(@v1= 1, 0,1)
            WHERE per_id = per_id_usuario;	
	end if;
END$$

DELIMITER ;
;



