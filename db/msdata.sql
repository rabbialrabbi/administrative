-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: dbo
-- Source Schemata: dbo
-- Created: Tue Mar  3 18:05:45 2020
-- Workbench Version: 8.0.17
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema dbo
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbo` ;
CREATE SCHEMA IF NOT EXISTS `dbo` ;

-- ----------------------------------------------------------------------------
-- Table dbo.Ada_Division
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbo`.`Ada_Division` (
  `DivisionId` INT NOT NULL,
  `DivisionCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `DivisionNameEnglish` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DivisionNameBangla` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DivisionImage1` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DivisionImage2` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `Note` LONGTEXT NOT NULL,
  `RecordStatus` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `RecordVersion` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `UserAccess` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `AccessDate` DATETIME NOT NULL,
  PRIMARY KEY (`DivisionCode`));

-- ----------------------------------------------------------------------------
-- Table dbo.Ada_District
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbo`.`Ada_District` (
  `DistrictId` INT NOT NULL,
  `DivisionCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictNameEnglish` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictNameBangla` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictImage1` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictImage2` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `Note` LONGTEXT NOT NULL,
  `RecordStatus` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `RecordVersion` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `UserAccess` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `AccessDate` DATETIME NOT NULL,
  PRIMARY KEY (`DivisionCode`, `DistrictCode`),
  CONSTRAINT `FK_Ada_District_Ada_Division`
    FOREIGN KEY (`DivisionCode`)
    REFERENCES `dbo`.`Ada_Division` (`DivisionCode`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
SET FOREIGN_KEY_CHECKS = 1;
