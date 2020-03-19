-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: ADA
-- Source Schemata: ADA
-- Created: Thu Mar 19 19:21:35 2020
-- Workbench Version: 8.0.17
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema ADA
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `ADA` ;
CREATE SCHEMA IF NOT EXISTS `ADA` ;

-- ----------------------------------------------------------------------------
-- Table ADA.Ada_Division
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ADA`.`Ada_Division` (
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
-- Table ADA.Ada_District
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ADA`.`Ada_District` (
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
    REFERENCES `ADA`.`Ada_Division` (`DivisionCode`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

-- ----------------------------------------------------------------------------
-- Table ADA.Ada_Upazila
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ADA`.`Ada_Upazila` (
  `UpazilaId` INT NOT NULL,
  `DivisionCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `DistrictCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `UpazilaCode` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `UpazilaNameEnglish` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `UpazilaNameBangla` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `UpazilaImage1` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `UpazilaImage2` VARCHAR(150) CHARACTER SET 'utf8mb4' NOT NULL,
  `Note` LONGTEXT NOT NULL,
  `RecordStatus` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `RecordVersion` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `UserAccess` VARCHAR(50) CHARACTER SET 'utf8mb4' NOT NULL,
  `AccessDate` DATETIME NOT NULL,
  PRIMARY KEY (`DivisionCode`, `DistrictCode`, `UpazilaCode`),
  CONSTRAINT `FK_Ada_Upazila_Ada_District`
    FOREIGN KEY (`DivisionCode` , `DistrictCode`)
    REFERENCES `ADA`.`Ada_District` (`DivisionCode` , `DistrictCode`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
SET FOREIGN_KEY_CHECKS = 1;
