/*
Author:			This code was generated by DALGen version 1.1.0.0 available at https://github.com/H0r53/DALGen 
Date:			12/9/2017
Description:	Creates the role table and respective stored procedures

*/


USE ballhouseandcottages;



-- ------------------------------------------------------------
-- Drop existing objects
-- ------------------------------------------------------------

DROP TABLE IF EXISTS `ballhouseandcottages`.`role`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_Load`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_LoadAll`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_Add`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_Update`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_Delete`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_role_Search`;


-- ------------------------------------------------------------
-- Create table
-- ------------------------------------------------------------



CREATE TABLE `ballhouseandcottages`.`role` (
Id INT AUTO_INCREMENT,
Name VARCHAR(255),
Description VARCHAR(1025),
CONSTRAINT pk_role_Id PRIMARY KEY (Id)
);


-- ------------------------------------------------------------
-- Create default SCRUD sprocs for this table
-- ------------------------------------------------------------


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_Load`
(
	 IN paramId INT
)
BEGIN
	SELECT
		`role`.`Id` AS `Id`,
		`role`.`Name` AS `Name`,
		`role`.`Description` AS `Description`
	FROM `role`
	WHERE 		`role`.`Id` = paramId;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_LoadAll`
()
BEGIN
	SELECT
		`role`.`Id` AS `Id`,
		`role`.`Name` AS `Name`,
		`role`.`Description` AS `Description`
	FROM `role`;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_Add`
(
	 IN paramName VARCHAR(255),
	 IN paramDescription VARCHAR(1025)
)
BEGIN
	INSERT INTO `role` (Name,Description)
	VALUES (paramName, paramDescription);
	-- Return last inserted ID as result
	SELECT LAST_INSERT_ID() as id;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_Update`
(
	IN paramId INT,
	IN paramName VARCHAR(255),
	IN paramDescription VARCHAR(1025)
)
BEGIN
	UPDATE `role`
	SET Name = paramName
		,Description = paramDescription
	WHERE		`role`.`Id` = paramId;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_Delete`
(
	IN paramId INT
)
BEGIN
	DELETE FROM `role`
	WHERE		`role`.`Id` = paramId;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_role_Search`
(
	IN paramId INT,
	IN paramName VARCHAR(255),
	IN paramDescription VARCHAR(1025)
)
BEGIN
	SELECT
		`role`.`Id` AS `Id`,
		`role`.`Name` AS `Name`,
		`role`.`Description` AS `Description`
	FROM `role`
	WHERE
		COALESCE(role.`Id`,0) = COALESCE(paramId,role.`Id`,0)
		AND COALESCE(role.`Name`,'') = COALESCE(paramName,role.`Name`,'')
		AND COALESCE(role.`Description`,'') = COALESCE(paramDescription,role.`Description`,'');
END //
DELIMITER ;


