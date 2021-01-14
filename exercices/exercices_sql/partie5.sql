--EXERCICE 1
--Dans la table `languages`, afficher toutes les données de la table.

USE `webDevelopment`;
SELECT `id`, `language`, `version` 
FROM `languages`;


--EXERCICE 2
--Dans la table `languages`, afficher toutes les versions de PHP.

2 USE `webDevelopment`;
SELECT `version`
FROM `languages` WHERE `language` = 'PHP';


--EXERCICE 3
--Dans la table `languages`, afficher toutes les versions de PHP et de JavaScript.

USE `webDevelopment`;
SELECT `version`
FROM `languages` WHERE `language` = 'PHP' OR `language` ='Javascript';
--OU
SELECT `version` 
FROM `languages` WHERE `language` IN ('PHP','JavaScript')


--EXERCICE 4
--Dans la table `languages`, afficher toutes les lignes ayant pour id 3,5,7.

USE `webDevelopment`;
SELECT `id`, `language`, `version` 
FROM `languages` WHERE `id` IN (3,5,7);


--EXERCICE 5
--Dans la table languages, afficher les deux première entrées de JavaScript.

SELECT `language` 
FROM `languages` 
WHERE `language` = 'Javascript' 
LIMIT 2;


--EXERCICE 6
--Dans la table languages, afficher toutes les lignes qui ne sont pas du PHP.

SELECT `language` 
FROM `languages` 
WHERE `language` <> 'PHP';

--EXERCICE 7
--Dans la table languages, afficher toutes les données par ordre alphabétique.

SELECT `language`,`version` FROM `languages` ORDER BY `language` ASC;
