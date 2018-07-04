CREATE DATABASE exam1;

USE exam1;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20),
    pass VARCHAR(20)
);-- SELECT * FROM usuario;

CREATE TABLE productos(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    stock INT,
    precio INT
);

INSERT INTO usuario VALUES(NULL, 'admin', 'admin');

DROP DATABASE exam1;