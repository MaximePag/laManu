--EXERCICE 1
--Dans la table languages, supprimer toutes les lignes parlant de HTML.

USE `webdevelopment`;
DELETE FROM `languages` 
WHERE `language`= 'html';


--EXERCICE 2
--Dans la table frameworks, modifier toutes les lignes ayant le framework Symfony par Symfony2.
USE `webdevelopment`;
UPDATE `frameworks` 
SET `framework` = 'Symfony2' 
WHERE `framework` = 'Symfony';


--EXERCICE 3
--Dans la table languages, modifier la ligne du langage JavaScript version 5 par la version 5.1.

USE `webdevelopment`;
UPDATE `languages` 
SET `version` = 'version 5.1' 
WHERE `language` = 'JavaScript' AND `version` = 'version 5';

