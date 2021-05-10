


DELIMITER //
CREATE  PROCEDURE `SP_AltaComentarioCursoEstudiante`(
IN _comentario TEXT(250),
IN _usuario INT,
IN _curso INT
 )
BEGIN

INSERT INTO `comentarioCurso` (`comentario`,`usuario`,`curso`,`estudiante`) 
VALUES (_comentario,_usuario,_curso,1);

END//



DELIMITER //
CREATE  PROCEDURE `SP_AltaComentarioCursoMaestro`(
IN _comentario TEXT(250),
IN _usuario INT,
IN _curso INT
 )
BEGIN

INSERT INTO `comentarioCurso` (`comentario`,`usuario`,`curso`,`estudiante`) 
VALUES (_comentario,_usuario,_curso,0);

END//

DELIMITER //
CREATE  PROCEDURE `SP_GetChatEstudiante`(
IN _usuario INT,
IN _curso INT
 )
BEGIN

SELECT a.comentario AS `comentario`, a.estudiante AS `estudiante`
FROM `comentarioCurso` a 
INNER JOIN `curso` b ON a.curso = b.id
WHERE a.usuario = _usuario AND a.curso = _curso;


END//

DELIMITER //
CREATE  PROCEDURE `SP_AltaVideo`(
IN _idNivel INT,
IN _video LONGBLOB,
IN _titulo TEXT(50)
 )
BEGIN

INSERT INTO `video` (`nivel`,`video`,`titulo`) 
VALUES (_idNivel,_video,_titulo);

END//

DELIMITER //
CREATE  PROCEDURE `SP_GetVideo`(
IN _id INT
 )
BEGIN

SELECT `title`,`video` FROM `video` WHERE `id` = _id;

END//

CREATE  PROCEDURE `SP_GetVideos`(
IN _idNivel INT
 )
BEGIN

SELECT `id`,`title` FROM `video` WHERE `id` = _idNivel;

END//


DELIMITER //
CREATE  PROCEDURE `SP_GetNivel`(
IN _idCurso INT
 )
BEGIN

SELECT `id`,`nombre` FROM `nivel` WHERE `curso` = _idCurso AND `active` = 1;

END//


DELIMITER //
CREATE  PROCEDURE `SP_AltaNivel`(
IN _nombre TEXT(50),
IN _curso INT
 )
BEGIN

INSERT INTO `nivel`(`nombre`,`curso`) 
VALUES (_nombre,_curso);

END//

DELIMITER //
CREATE  PROCEDURE `SP_DeleteNivel`(
IN _id INT
 )
BEGIN

UPDATE `nivel` SET `active` = 0 WHERE `id` = _id;
END//


DELIMITER //
CREATE  PROCEDURE `SP_UpdateCurso`(
IN _nameCurso TEXT(50),
IN _descripcion TEXT(250),
IN _costo DOUBLE,
IN _id INT,
IN _categoria INT
 )
BEGIN
UPDATE `curso` SET `nameCurso` = _nameCurso, `descripcion` = _descripcion, `costo` = _costo, `categoria` = _categoria WHERE `id` = _id;


END//

DELIMITER //
CREATE  PROCEDURE `SP_DeleteCurso`(
IN _id INT
 )
BEGIN
UPDATE `curso` SET `active` = 0 WHERE `id` = _id;


END//



DELIMITER //
CREATE PROCEDURE `SP_GetCategorias`(
 )
BEGIN

SELECT `id` , `nombre` FROM `categoria`;
END//

DELIMITER //
CREATE PROCEDURE `SP_GetCurso`(
IN _id INT
 )
BEGIN

SELECT `nameCurso`,`costo`,`descripcion`,`categoria`,`idUser` 
FROM `curso` WHERE `id` = _id ;
END//

DELIMITER //
CREATE PROCEDURE `SP_GetCursoImage`(
IN _id INT
 )
BEGIN

SELECT `img` FROM `curso` WHERE `id` = _id;
END//


DELIMITER //
CREATE PROCEDURE `SP_GetCursos`(
IN _id INT
 )
BEGIN

SELECT `id` , `nameCurso`,`costo`,`descripcion` FROM `curso` WHERE `idUser` = _id AND `active` =  1;
END//

DELIMITER //
CREATE  PROCEDURE `SP_AltaCurso`(
IN _nameCurso TEXT(50),
IN _descripcion TEXT(50),
IN _img MEDIUMBLOB ,
IN _costo DOUBLE,
IN _idUser INT,
IN _categoria INT
 )
BEGIN

INSERT INTO `curso`(`nameCurso`,`descripcion`,`img`,`costo`,`idUser`,`categoria`) 
VALUES (_nameCurso,_descripcion,_img,_costo,_idUser,_categoria);

END//

DELIMITER //
CREATE PROCEDURE `SP_AltaCategoria`(
IN _name TEXT(50)

 )
BEGIN

INSERT INTO `categoria`(`nombre`) 
VALUES (_name);

END//

DELIMITER //
CREATE PROCEDURE `SP_AltaUsuario`(
IN _nombre TEXT(50),
IN _correo TEXT(50),
IN _contra TEXT(50),
IN _usuario_escuela BOOL

 )
BEGIN

INSERT INTO `usuario`(`nombre`,`correo`,`contra`,`usuario_escuela`,`create`) 
VALUES (_nombre,_correo,_contra,_usuario_escuela,curdate());

END //

DELIMITER //
CREATE PROCEDURE `SP_GetAvatar`(
IN _id INT

 )
BEGIN

SELECT  `avatar` FROM `usuario`
 WHERE `id` = _id; 

END//

DELIMITER //
CREATE PROCEDURE `SP_Login`(IN _correo TEXT(50), IN _contra TEXT(50) )
BEGIN

SELECT  `id`, `usuario_escuela`,`nombre`,`correo`,`contra` FROM `usuario`
 WHERE `correo` = _correo 
 AND `contra` = _contra;

END//

DELIMITER //
CREATE PROCEDURE `SP_UpdatePerfil`(
IN _id INT,
IN _nombre TEXT(50),
IN _correo TEXT(50),
IN _contra TEXT(50),
IN _avatar MEDIUMBLOB 

 )
BEGIN

UPDATE `usuario` SET `nombre` = _nombre,`correo` = _correo, `contra` = _contra, `avatar` = _avatar 
WHERE `id` = _id;

SELECT  `id`, `usuario_escuela`,`nombre`,`correo`,`contra` FROM `usuario`
 WHERE `id` = _id; 

END//

DELIMITER //
CREATE PROCEDURE `SP_UpdatePerfilDatos`(
IN _id INT,
IN _nombre TEXT(50),
IN _correo TEXT(50),
IN _contra TEXT(50)


 )
BEGIN

UPDATE `usuario` SET `nombre` = _nombre,`correo` = _correo, `contra` = _contra
WHERE `id` = _id;

SELECT  `id`, `usuario_escuela`,`nombre`,`correo`,`contra` FROM `usuario`
 WHERE `id` = _id; 

END//
