CREATE DATABASE IF NOT EXISTS base_datos;

USE base_datos;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    contrasena VARCHAR(255)
);

INSERT INTO usuarios(username, contrasena)
VALUES ('admin', '12345');
