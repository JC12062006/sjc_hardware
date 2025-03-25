CREATE DATABASE sjc_hardware;

USE sjc_hardware;

-- Table utilisateur -- 

CREATE TABLE utilisateur(
id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR (255) NOT NULL,
prenom VARCHAR (255) NOT NULL,
email VARCHAR (255) NOT NULL UNIQUE,
tel VARCHAR (11) NOT NULL,
rôle BOOLEAN NOT NULL 1
);

-- Table demande --

CREATE TABLE demande(
id INT AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR (255) NOT NULL,
description_ VARCHAR (9999)
);

