drop database if exists PetShop;

create database PetShop;
use PetShop;



CREATE TABLE Cidade (
    id_cidade INT PRIMARY KEY AUTO_INCREMENT,
    nomecidade VARCHAR(100),
    estado CHAR(2)
);
CREATE TABLE Cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cep VARCHAR(100),
    id_cidade integer,
    FOREIGN KEY (id_cidade) REFERENCES Cidade (id_cidade)
);
CREATE TABLE Animal (
	id_animal INT PRIMARY KEY AUTO_INCREMENT,
    nome_animal VARCHAR(100),
    especie VARCHAR(100),
    raca VARCHAR(100),
    dataa VARCHAR(100),
    ativo bool,
    id integer,animal
    FOREIGN KEY (id) REFERENCES Cliente (id)
    );

