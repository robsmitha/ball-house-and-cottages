/*
Author:			This code was generated by DALGen version 1.1.0.0 available at https://github.com/H0r53/DALGen 
Date:			10/18/2018
Description:	Creates the contentitem table and respective stored procedures

*/


USE ballhouseandcottages;



-- ------------------------------------------------------------
-- Drop existing objects
-- ------------------------------------------------------------

DROP TABLE IF EXISTS `ballhouseandcottages`.`contentitem`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_Load`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_LoadAll`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_Add`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_Update`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_Delete`;
DROP PROCEDURE IF EXISTS `ballhouseandcottages`.`usp_contentitem_Search`;


-- ------------------------------------------------------------
-- Create table
-- ------------------------------------------------------------



CREATE TABLE `ballhouseandcottages`.`contentitem` (
Id INT AUTO_INCREMENT,
ContentGroupId INT,
Name VARCHAR(255),
Description VARCHAR(1024),
Content VARCHAR(2056),
CONSTRAINT pk_contentitem_Id PRIMARY KEY (Id),
CONSTRAINT fk_contentitem_ContentGroupId_contentgroup_Id FOREIGN KEY (ContentGroupId) REFERENCES contentgroup (Id)
);


-- ------------------------------------------------------------
-- Create default SCRUD sprocs for this table
-- ------------------------------------------------------------


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_Load`
(
	 IN paramId INT
)
BEGIN
	SELECT
		`contentitem`.`Id` AS `Id`,
		`contentitem`.`ContentGroupId` AS `ContentGroupId`,
		`contentitem`.`Name` AS `Name`,
		`contentitem`.`Description` AS `Description`,
		`contentitem`.`Content` AS `Content`
	FROM `contentitem`
	WHERE 		`contentitem`.`Id` = paramId;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_LoadAll`
()
BEGIN
	SELECT
		`contentitem`.`Id` AS `Id`,
		`contentitem`.`ContentGroupId` AS `ContentGroupId`,
		`contentitem`.`Name` AS `Name`,
		`contentitem`.`Description` AS `Description`,
		`contentitem`.`Content` AS `Content`
	FROM `contentitem`;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_Add`
(
	 IN paramContentGroupId INT,
	 IN paramName VARCHAR(255),
	 IN paramDescription VARCHAR(1024),
	 IN paramContent VARCHAR(2056)
)
BEGIN
	INSERT INTO `contentitem` (ContentGroupId,Name,Description,Content)
	VALUES (paramContentGroupId, paramName, paramDescription, paramContent);
	-- Return last inserted ID as result
	SELECT LAST_INSERT_ID() as id;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_Update`
(
	IN paramId INT,
	IN paramContentGroupId INT,
	IN paramName VARCHAR(255),
	IN paramDescription VARCHAR(1024),
	IN paramContent VARCHAR(2056)
)
BEGIN
	UPDATE `contentitem`
	SET ContentGroupId = paramContentGroupId
		,Name = paramName
		,Description = paramDescription
		,Content = paramContent
	WHERE		`contentitem`.`Id` = paramId;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_Delete`
(
	IN paramId INT
)
BEGIN
	DELETE FROM `contentitem`
	WHERE		`contentitem`.`Id` = paramId;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE `ballhouseandcottages`.`usp_contentitem_Search`
(
	IN paramId INT,
	IN paramContentGroupId INT,
	IN paramName VARCHAR(255),
	IN paramDescription VARCHAR(1024),
	IN paramContent VARCHAR(2056)
)
BEGIN
	SELECT
		`contentitem`.`Id` AS `Id`,
		`contentitem`.`ContentGroupId` AS `ContentGroupId`,
		`contentitem`.`Name` AS `Name`,
		`contentitem`.`Description` AS `Description`,
		`contentitem`.`Content` AS `Content`
	FROM `contentitem`
	WHERE
		COALESCE(contentitem.`Id`,0) = COALESCE(paramId,contentitem.`Id`,0)
		AND COALESCE(contentitem.`ContentGroupId`,0) = COALESCE(paramContentGroupId,contentitem.`ContentGroupId`,0)
		AND COALESCE(contentitem.`Name`,'') = COALESCE(paramName,contentitem.`Name`,'')
		AND COALESCE(contentitem.`Description`,'') = COALESCE(paramDescription,contentitem.`Description`,'')
		AND COALESCE(contentitem.`Content`,'') = COALESCE(paramContent,contentitem.`Content`,'');
END //
DELIMITER ;

