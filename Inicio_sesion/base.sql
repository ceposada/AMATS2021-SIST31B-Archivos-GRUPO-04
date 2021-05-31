
CREATE DATABASE inicio_sesion;
USE inicio_sesion;


CREATE TABLE usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT,
	usuario VARCHAR(100) NOT NULL,
	nombres VARCHAR(100) NOT NULL,
	apellidos VARCHAR(100) NOT NULL,
	passwrd VARCHAR (254) NOT NULL,
	edad VARCHAR(10) NULL,
	sexo VARCHAR(10) NOT NULL,
	PRIMARY KEY (idUsuario) 
)

SELECT * FROM usuario WHERE usuario = "carlos123" AND passwrd = "posada123";

INSERT INTO usuario (usuario,nombres,apellidos,passwrd,edad,sexo) 
VALUES ('enrique123','Enrique Carlos','Posada Grande','posada123','18','m')