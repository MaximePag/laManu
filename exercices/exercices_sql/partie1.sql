--EXERCICE 1
--Création d'une base de données commandes sql en majuscules.

CREATE DATABASE `languages`;


--EXERCICE 2
--Création base de données avec encodage UTF-8.

CREATE DATABASE `webDevelopment` 
CHARACTER SET 'utf8';


--EXERCICE 3
--Création base de données frameworks si elle n'existe pas avec encodage utf-8

CREATE DATABASE IF NOT EXISTS `frameworks` 
CHARACTER SET 'utf8';


--EXERCICE 4
--Création base de données languages si elle n'existe pas avec encodage utf-8

CREATE DATABASE IF NOT EXISTS `languages` 
CHARACTER SET 'utf8';


--EXERCICE 5
--Supprimer la base de données languages

DROP DATABASE `languages`;


--EXERCICE 6
--Supprimer la base de données frameworks si elle existe

DROP DATABASE IF EXISTS `frameworks`;


--EXERCICE 7
--Supprimer la base de données languages si elle existe

DROP DATABASE IF EXISTS `languages`;