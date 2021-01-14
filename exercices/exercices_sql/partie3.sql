--EXERCICE 1
--Dans la base de données webDevelopment, ajouter à la table languages une colonne versions (VARCHAR).

USE `webDevelopment`;
ALTER TABLE `languages`
ADD COLUMN `versions` VARCHAR(30);


--EXERCICE 2
--Dans la base de données webDevelopment, ajouter à la table frameworks une colonne version (INT).

USE `webDevelopment`;
ALTER TABLE `frameworks`
ADD COLUMN `version` INT;


--EXERCICE 3
--Dans la base de données webDevelopment, dans la table languages renommer la colonne versions en version.

USE `webDevelopment`;
ALTER TABLE `languages`
CHANGE `versions` `version` VARCHAR(30);


--EXERCICE 4
--Dans la base de données webDevelopment, dans la table frameworks, renommer la colonne name en framework.

USE `webDevelopment`;
ALTER TABLE `frameworks`
CHANGE `name` `framework` VARCHAR(30);


--EXERCICE 5
--Dans la base webDevelopment dans la table frameworks changer le type de la colonne version en varchar(10)
ALTER TABLE `frameworks`
MODIFY `version` VARCHAR(10);

--EXERCICE TP
--Dans la base codex, dans la table clients :

--supprimer la colonne secondPhoneNumbeR
--renommer la colonne firstPhoneNumber en phoneNumber
--changer le type de la colonne phoneNumber en VARCHAR
--ajouter les colonnes zipCode(VARCHAR) et city(VARCHAR)

USE `codex`;
ALTER TABLE `clients`
DROP COLUMN `secondPhoneNumber`,
CHANGE `firstPhoneNumber` `phoneNumber` VARCHAR(10),
ADD COLUMN `zipCode` VARCHAR(5),
ADD COLUMN `city` VARCHAR(50);
    