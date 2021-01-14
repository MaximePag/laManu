--EXERCICE 1
--Afficher tous les frameworks associés à leurs langages. Si un langage n'a pas de framework l'afficher aussi.

SELECT `lan`.`name` AS `languageName`, `fra`.`name` AS `frameworkName`
FROM `languages` AS `lan`
LEFT JOIN `frameworks` AS `fra`
ON `fra`.`languagesId` = `lan`.`id`;


--EXERCICE 2
--Afficher tous les frameworks associés à leurs langages. Si un langage n'a pas de framework ne pas l'afficher.

SELECT `lan`.`name` AS `languageName`, `fra`.`name` AS `frameworkName`
FROM `languages` AS `lan`
INNER JOIN `frameworks` AS `fra`
ON `fra`.`languagesId` = `lan`.`id`;


--EXERCICE 3
--Afficher le nombre de framework qu'a un langage.

SELECT `lan`.`name`, COUNT(`fra`.`id`) AS `numberFrameworks`
FROM `languages` AS `lan`
LEFT JOIN `frameworks` AS `fra`
ON `fra`.`languagesId` = `lan`.`id`
GROUP BY `lan`.`name`;


--EXERCICE 4
--Afficher les langages ayant plus de 3 frameworks.

SELECT `lan` . `name`, COUNT(`fra`.`languagesId`) AS `numberOfFramework`
FROM `languages` AS `lan`
LEFT JOIN `frameworks` AS `fra`
ON `lan` . `id` = `fra` . `languagesId`
GROUP BY `fra`.`languagesId` 
HAVING `numberOfFramework` > 3;