CREATE DATABASE login;
use login;

CREATE TABLE users(
    idUser INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(225),
    email VARCHAR(225),
    senha INT(225),
    PRIMARY KEY (idUser)
);