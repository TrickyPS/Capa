DELIMITER //
CREATE PROCEDURE SP_Login(IN _usuario TEXT(50), IN _contra TEXT(50) )
BEGIN

SELECT `usuario` FROM `usuario`
 WHERE `usuario` = _usuario 
 AND `contra` = _contra;

END//

DELIMITER //
CREATE PROCEDURE SP_AltaUsuario
(
IN _usuario TEXT(50),
IN _contra TEXT(50),
IN _usuairo_escuela BOOL,
IN _correo TEXT(50)
 )
BEGIN

INSERT INTO `usuario`(`usuario`,`correo`,`contra`,`usuario_escuela`) 
VALUES (_usuario,_correo,_contra,_usuario_escuela);

END//

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


