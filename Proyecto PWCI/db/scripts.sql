CREATE DATABASE IF NOT EXISTS pwciDB;
USE pwciDB;

CREATE TABLE `usuario` (
`id` int NOT NULL AUTO_INCREMENT,
`usuario_escuela` BOOL NOT NULL,
`nombre` CHAR(50) NOT NULL,
`apellidos` CHAR(50) NOT NULL,
`correo` CHAR(50) NOT NULL,
`contra` CHAR(50) NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE `curso`();

CREATE TABLE `nivel`();

CREATE TABLE `video`();

CREATE TABLE `comentario`();

CREATE TABLE ``();