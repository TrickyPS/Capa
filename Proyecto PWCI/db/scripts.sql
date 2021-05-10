/*CREATE DATABASE IF NOT EXISTS capadb;
USE capadb;*/

CREATE TABLE `usuario` (
`id` INT NOT NULL AUTO_INCREMENT,
`usuario_escuela` BOOL NOT NULL,
`nombre` TEXT(50) NULL,
`correo` TEXT(50) NOT NULL,
`contra` TEXT(50) NOT NULL,
`avatar` MEDIUMBLOB NULL,
`create` datetime NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE `categoria`(
`id` INT NOT NULL AUTO_INCREMENT,
`nombre` TEXT(50) NOT NULL,
PRIMARY KEY (`id`)
);


CREATE TABLE `curso`(
`id` INT NOT NULL AUTO_INCREMENT,
`nameCurso` TEXT(50) NOT NULL,
`costo` DOUBLE NOT NULL,
`descripcion` TEXT(250) NOT NULL,
`img` MEDIUMBLOB NOT NULL,
`idUser` INT NOT NULL,
`categoria` INT NOT NULL,
`active` BOOL NOT NULL default 1,
FOREIGN KEY (`categoria`) REFERENCES `categoria`(`id`),
FOREIGN KEY (`idUser`) REFERENCES `usuario`(`id`),
PRIMARY KEY(`id`)
);


CREATE TABLE `nivel`(
`id` INT NOT NULL AUTO_INCREMENT,
`nombre` TEXT(50) NOT NULL,
`curso` INT NOT NULL,
`active` BOOL NOT NULL default 1,
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARy KEY (`id`)
);

CREATE TABLE `video`(
`id` INT NOT NULL AUTO_INCREMENT,
`titulo` TEXT(50) NOT NULL,
`nivel` INT NOT NULL,
`video` LONGBLOB NOT NULL,
`active` BOOL NOT NULL default 1,
FOREIGN KEY (`nivel`) REFERENCES `nivel`(`id`),
PRIMARy KEY (`id`)
);


CREATE TABLE `comentarioCurso`(
`id` INT NOT NULL AUTO_INCREMENT,
`comentario` TEXT(250) NOT NULL,
`estudiante` BOOL NOT NULL,
`usuario` INT NOT NULL,
`curso` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `historial`(
`id` INT NOT NULL AUTO_INCREMENT,
`curso` INT NOT NUll,
`usuario` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);



CREATE TABLE `ventas`(
`id` INT NOT NULL AUTO_INCREMENT,
`curso` INT NOT NUll,
`usuario` INT NOT NULL,
`create` datetime NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `chat`(
`id` INT NOT NULL AUTO_INCREMENT,
`mensaje` TEXT(250) NOT NULL,
`usuario` INT NOT NULL,
`curso` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);



CREATE TABLE `calificacion`(
`id` INT NOT NULL AUTO_INCREMENT,
`calificacion` INT NOT NULL ,
`usuario` INT NOT NULL,
`curso` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY(`id`)
);