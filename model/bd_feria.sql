CREATE DATABASE bd_feria;
USE bd_feria;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombreUsuario VARCHAR(50),
    pass VARCHAR(15)
); -- DROP TABLE usuario;

INSERT INTO usuario VALUES(NULL, 'placeholder', 'placeholder');