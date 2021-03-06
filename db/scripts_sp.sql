CREATE DEFINER=`admin`@`%` PROCEDURE `SP_MensajeMaestro`(
IN _usuario INT
)
BEGIN
select DISTINCT 
 chat.curso as cursoC,
chat.usuario as usuarioC,
 usuario.nombre as nombre,
 usuario.id as idUser,
 curso.nameCurso as cursoName
 from chat LEFT JOIN usuario on chat.usuario = usuario.id
 LEFT JOIN curso ON curso.id = chat.curso
   where chat.to =_usuario;
END


DELIMITER //
CREATE DEFINER=`admin`@`%` PROCEDURE `SP_MensajeUsuario`(
IN _usuario INT,
IN _curso INT,
In _to INT
)
BEGIN
select chat.id as identificadorC,
 chat.comentario as comentarioC,
 chat.usuario as usuarioC,
chat.`to` as `to`,
 usuario.nombre as nombre,
 curso.nameCurso as nameCurso,
 DATE_FORMAT(chat.`create`, "%M %d %Y") as tiempo from chat 
 LEFT JOIN curso 
 ON chat.curso = curso.id 
 LEFT JOIN usuario on chat.`to` = usuario.id where chat.`to` = _to and chat.usuario = _usuario and chat.curso = _curso
 OR  chat.`to` = _usuario and chat.usuario = _to and chat.curso = _curso;
END//

DELIMITER //
CREATE DEFINER=`admin`@`%` PROCEDURE `SP_Mensaje`(
IN _comentario TEXT(150),
IN _curso INT,
IN _usuario INT,
IN _to INT
)
BEGIN
INSERT INTO `capadb`.`chat`(comentario,curso,usuario,`create`,`to`)VALUES(_comentario,_curso,_usuario,curdate(),_to);

END//





DELIMITER //
CREATE  PROCEDURE `SP_GetPuntuacion`(
IN _curso INT
 )
BEGIN

SELECT AVG(calificacion) As suma FROM calificacion WHERE curso = _curso;

END//

DELIMITER //
CREATE  PROCEDURE `SP_GetBest`(
 )
BEGIN

SELECT A.curso as curso,B.idUser as idUser, B.nameCurso as nameCurso, B.costo as costo, Count(curso) as total from historial A INNER JOIN  curso B ON A.curso = B.id GROUP BY curso ORDER BY total DESC LIMIT 2;

END//

DELIMITER //
CREATE  PROCEDURE `SP_Calificar`(
IN _usuario INT,
IN _curso INT,
IN _calificacion INT
 )
BEGIN

INSERT INTO calificacion(calificacion,usuario,curso) VALUES (_calificacion,_usuario,_curso);

END//


DELIMITER //
CREATE  PROCEDURE `SP_Comentar`(
IN _usuario INT,
IN _curso INT,
IN _mensaje TEXT(250)
 )
BEGIN

INSERT INTO comentario(usuario,curso,mensaje,`create`) VALUES (_usuario,_curso,_mensaje,curdate());
SELECT A.`mensaje` AS mensaje ,A.`usuario` AS usuario,A.`create` AS `create`, B.nombre AS nombre FROM comentario A INNER JOIN usuario B ON A.usuario = B.id
  WHERE `curso` = _curso;

END//



DELIMITER //
CREATE  PROCEDURE `SP_GetComentarios`(
IN _curso INT
 )
BEGIN

SELECT A.`mensaje` AS mensaje ,A.`usuario` AS usuario,A.`create` AS `create`, B.nombre AS nombre FROM comentario A INNER JOIN usuario B ON A.usuario = B.id
  WHERE `curso` = _curso;

END//

DELIMITER //
CREATE  PROCEDURE `SP_ValidateCurso`(
IN _curso INT,
IN _usuario INT
 )
BEGIN

SELECT `id` from `historial` WHERE `curso` = _curso AND `usuario` = _usuario;

END//

DELIMITER //
CREATE  PROCEDURE `SP_AltaProgress`(
IN _usuario INT,
IN _video INT
 )
BEGIN

INSERT INTO `progress`(`usuario`,`video`) VALUES (_usuario,_video);

END//





DELIMITER //
CREATE  PROCEDURE `SP_GetInfoVideo`(
IN _id INT
 )
BEGIN

SELECT `titulo`,`create` from `video` WHERE `id` = _id;

END//


DELIMITER //
CREATE  PROCEDURE `SP_Historial`(
IN _user INT
 )
BEGIN

SELECT DISTINCT C.nameCurso as curso, C.id AS id, C.descripcion AS descripcion, D.nombre AS categoria, C.`create` FROM historial A
INNER JOIN usuario B ON A.usuario = B.id
INNER JOIN curso C ON C.id = A.curso
INNER JOIN categoria D ON D.id = C.categoria
WHERE A.usuario = _user;

END//


DELIMITER //
CREATE  PROCEDURE `SP_GetAllCursos`(
IN _limit INT,
IN _to INT
 )
BEGIN

SELECT `id`,`nameCurso`, `costo`,`descripcion`, `idUser` FROM `curso` WHERE `active` = 1 ORDER BY `id`DESC Limit _limit , _to;

END//

DELIMITER //
CREATE  PROCEDURE `SP_AltaHistorial`(
IN _curso INT,
IN _usuario INT
 )
BEGIN

INSERT INTO historial (`curso`,`usuario`) VALUES (_curso,_usuario);

END//


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

INSERT INTO `video` (`nivel`,`video`,`titulo`,`create`) 
VALUES (_idNivel,_video,_titulo,curdate());

END//

DELIMITER //
CREATE  PROCEDURE `SP_GetVideo`(
IN _id INT
 )
BEGIN

SELECT `video` FROM `video` WHERE `id` = _id;

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

INSERT INTO `curso`(`nameCurso`,`descripcion`,`img`,`costo`,`idUser`,`categoria`,`create`) 
VALUES (_nameCurso,_descripcion,_img,_costo,_idUser,_categoria,curdate());

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
