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

CREATE TABLE IF NOT EXISTS demande (
    id_demande INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT NOT NULL,
    id_type INT NOT NULL,
    description TEXT,
    date_demande DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_type) REFERENCES type(id_type)
);

-- Table type --
CREATE TABLE type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO type (libelle) VALUES ("montage");
INSERT INTO type (libelle) VALUES ("réparation");