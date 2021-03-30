CREATE DATABASE IF NOT EXISTS capadb;
USE capadb;

CREATE TABLE `usuario` (
`id` INT NOT NULL AUTO_INCREMENT,
`usuario_escuela` BOOL NOT NULL,
`nombre` TEXT(50) NOT NULL,
`apellidos` TEXT(50) NOT NULL,
`correo` TEXT(50) NOT NULL,
`contra` TEXT(50) NOT NULL,
`avatar` BLOB NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE `curso`(
`id` INT NOT NULL AUTO_INCREMENT,
`nameCurso` TEXT(50) NOT NULL,
`costo` DOUBLE NOT NULL,
`descripcion` TEXT(250) NOT NULL,
`img` BLOB NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE `subCategoria`(
`id` INT NOT NULL AUTO_INCREMENT,
`categoriaNombre` TEXT(50),
`categoriaPadre` INT NOT NULL,
FOREIGN KEY(`id`) REFERENCES `categoria`(`id`),
PRIMARY KEY(`id`)
);

CREATE TABLE `categoria`(
`id` INT NOT NULL AUTO_INCREMENT,
`categoria` TEXT(50) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE `categoriaCurso`(
`id` INT NOT NULL AUTO_INCREMENT,
`categoria` INT NOT NULL,
`curso` INT NOT NULL,
FOREIGN KEY (`categoria`) REFERENCES `subcategoria`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY(`id`)
);

CREATE TABLE `nivel`(
`id` INT NOT NULL AUTO_INCREMENT,
`nivel` TEXT(50) NOT NULL,
`curso` INT NOT NULL,
`costo` DOUBLE NOT NULL,
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARy KEY (`id`)
);

CREATE TABLE `video`(
`id` INT NOT NULL AUTO_INCREMENT,
`nivel` INT NOT NULL,
`video` BLOB NOT NULL,
FOREIGN KEY (`nivel`) REFERENCES `nivel`(`id`),
PRIMARy KEY (`id`)
);

CREATE TABLE `comentarioVideo`(
`id` INT NOT NULL AUTO_INCREMENT,
`comentario` TEXT(250) NOT NULL,
`usuario` INT NOT NULL,
`video` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`video`) REFERENCES `video`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `comentarioCurso`(
`id` INT NOT NULL AUTO_INCREMENT,
`comentario` TEXT(250) NOT NULL,
`usaurio` INT NOT NULL,
`curso` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `Historial`(
`id` INT NOT NULL AUTO_INCREMENT,
`curso` INT NOT NUll,
`usuario` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `carrito`(
`id` INT NOT NULL AUTO_INCREMENT,
`curso` INT NOT NUll,
`nivel` INT NOT NULL,
`usuario` INT NOT NULL,
FOREIGN KEY (`nivel`) REFERENCES `nivel`(`id`),
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`curso`) REFERENCES `curso`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `chatPrivado`(
`id` INT NOT NULL AUTO_INCREMENT,
`mensaje` TEXT(250) NOT NULL,
`usuario1` INT NOT NULL,
`usuario2` INT NOT NULL,
FOREIGN KEY (`usuario1`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`usuario2`) REFERENCES `usuario`(`id`),
PRIMARY KEY (`id`)
);

CREATE TABLE `progresoVideo`(
`id` INT NOT NULL AUTO_INCREMENT,
`video` INT NOT NULL,
`segundos` INT NOT NULL,
`usuario` INT NOT NULL,
FOREIGN KEY (`usuario`) REFERENCES `usuario`(`id`),
FOREIGN KEY (`video`) REFERENCES `video`(`id`),
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