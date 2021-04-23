DELIMITER //
CREATE PROCEDURE SP_AltaCurso
(
IN _nameCurso TEXT(50),
IN _descripcion TEXT(50),
IN _img BLOB ,
IN _costo DOUBLE
 )
BEGIN

INSERT INTO `curso`(`nameCurso`,`descripcion`,`img`,`costo`) 
VALUES (_nameCurso,_descripcion,_img,_costo);

END//

DELIMITER //
CREATE PROCEDURE SP_UpdatePerfil
(
IN _id INT,
IN _nombre TEXT(50),
IN _apellido Text(50),
IN _correo TEXT(50),
IN _contra TEXT(50),
IN _avatar BLOB 

 )
BEGIN

UPDATE `usuario` SET `nombre` = _nombre, `apellido` = _apellido, `correo` = _correo, `contra` = _contra, `avatar` = _avatar 
WHERE `id` = _id;

END//



DELIMITER //
CREATE  PROCEDURE `SP_AltaUsuario`(
IN _nombre TEXT(50),
IN _correo TEXT(50),
IN _contra TEXT(50),
IN _usuario_escuela BOOL

 )
BEGIN

INSERT INTO `usuario`(`nombre`,`correo`,`contra`,`usuario_escuela`) 
VALUES (_usuario,_correo,_contra,_usuario_escuela);

END



DELIMITER //
CREATE PROCEDURE `SP_Login`(IN _correo TEXT(50), IN _contra TEXT(50) )
BEGIN

SELECT `usuario`, `id`, `usuario_escuela`,`nombre`,`correo`,`contra`,`avatar`,`apellido` FROM `usuario`
 WHERE `correo` = _correo 
 AND `contra` = _contra;

END 


