--EXERCICE 1
--Dans la base de données webDevelopment, créer la table languages avec les colonnes :

--     id (type INT, auto-incrémenté, clé primaire)
--     language (type VARCHAR)

CREATE TABLE `languages`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `language` VARCHAR(50) NOT NULL
)ENGINE=InnoDB;


--EXERCICE 2
--Dans la base de données webDevelopment, créer la table tools avec les colonnes suivantes :

    -- id (type INT, auto-incrémenté, clé primaire)
    -- tool (type VARCHAR)

CREATE TABLE `tools`(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `tool` VARCHAR(50) NOT NULL
)ENGINE=InnoDB;


--EXERCICE 3
-- Dans la base de données webDevelopment, créer la table frameworks avec les colonnes suivantes :

--     id (type INT, auto-incrémenté, clé primaire)
--     name (type VARCHAR)

CREATE TABLE `frameworks` (
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR(40) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;


--EXERCICE 4
-- Dans la base de données webDevelopment, créer la table libraries avec les colonnes suivantes :

--     id (type INT, auto-incrémenté, clé primaire)
--     library (type VARCHAR)

CREATE TABLE `libraries` (
    `id` INT AUTO_INCREMENT,
    `library` VARCHAR(40) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB; 


--EXERCICE 5
-- Dans la base de données webDevelopment, créer la table ide avec les colonnes suivantes :

--     id (type INT, auto-incrémenté, clé primaire)
--     ideName (type VARCHAR)

USE `webDevelopment`;
CREATE TABLE `ide` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ideName` VARCHAR(30) NOT NULL
) ENGINE=InnoDB;


--EXERCICE 6
-- Dans la base de données webDevelopment, créer, si elle n'existe pas, la table frameworks avec les colonnes suivantes :

--     id (type INT, auto-incrémenté, clé primaire)
--     name (type VARCHAR)

USE `webDevelopment`;
CREATE TABLE IF NOT EXISTS `frameworks` (
    `id` INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB;


--EXERCICE 7
--Supprimer la table tools si elle existe.

USE `webDevelopment`;
DROP TABLE IF EXISTS `tools`;


--EXERCICES 8
--Supprimer la table libraries

USE `webDevelopment`;
DROP TABLE `libraries`;


--EXERCICES 9
--Supprimer la table ide

USE `webDevelopment`;
DROP TABLE `ide`;


--EXERCICE TP
-- Créer la base codex. Y créer une table clients qui aura comme colonnes :

-- Colonne 	Type 	Attributs
-- id
-- 	INT 	Auto-incrémenté, clé primaire
-- lastname 	VARCHAR 	
-- firstname 	VARCHAR 	
-- birthDate 	DATE 	
-- address 	VARCHAR 	
-- firstPhoneNumber 	INT 	
-- secondPhoneNumber 	INT 	
-- mail 	VARCHAR

CREATE DATABASE `codex`
CHARACTER SET 'utf8'; 
USE `codex`; 
CREATE TABLE `clients` ( 
    `id` INT AUTO_INCREMENT,
    `lastname` VARCHAR(50) NOT NULL,
    `firstname` VARCHAR(50) NOT NULL,
    `birthDate` DATE NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `firstPhoneNumber` INT NOT NULL,
    `secondPhoneNumber` INT NOT NULL,
    `mail` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;