-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 07:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada`
--

-- --------------------------------------------------------

--
-- Table structure for table `ada_area`
--

CREATE TABLE `ada_area` (
  `AreaId` int(11) NOT NULL,
  `DivisionCode` varchar(50) NOT NULL,
  `DistrictCode` varchar(50) NOT NULL,
  `UpazilaCode` varchar(50) NOT NULL,
  `AreaTypeCode` varchar(50) NOT NULL,
  `AreaCode` varchar(50) NOT NULL,
  `Area_Dept_Code1` varchar(50) NOT NULL,
  `Area_Dept_Code2` varchar(50) NOT NULL,
  `AreaNameEnglish` varchar(150) NOT NULL,
  `AreaNameBangla` varchar(150) NOT NULL,
  `AreaImage1` varchar(150) NOT NULL,
  `AreaImage2` varchar(150) NOT NULL,
  `Note` text NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_area`
--

INSERT INTO `ada_area` (`AreaId`, `DivisionCode`, `DistrictCode`, `UpazilaCode`, `AreaTypeCode`, `AreaCode`, `Area_Dept_Code1`, `Area_Dept_Code2`, `AreaNameEnglish`, `AreaNameBangla`, `AreaImage1`, `AreaImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(17, '30', '35', '32', '10', '25', '1800', '1800', 'GOPALGANJ SADAR Pourashava', 'গোপালগঞ্জ সদর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(22, '30', '35', '32', '20', '25', '3200', '3200', 'GOPALGANJ SADAR Grameen', 'গোপালগঞ্জ সদর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(18, '30', '35', '43', '10', '10', '2800', '2800', 'KASHIANI Pourashava', 'কাশিয়ানী পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(23, '30', '35', '43', '20', '10', '3300', '3300', 'KASHIANI Grameen', 'কাশিয়ানী গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(19, '30', '35', '51', '10', '50', '2900', '2900', 'KOTALIPARA Pourashava', 'কোটালিপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(24, '30', '35', '51', '20', '50', '3400', '3400', 'KOTALIPARA Grameen', 'কোটালিপাড়া গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(20, '30', '35', '58', '10', '65', '3000', '3000', 'MUKSUDPUR Pourashava', 'মুকসুদপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(25, '30', '35', '58', '20', '65', '3500', '3500', 'MUKSUDPUR Grameen', 'মুকসুদপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(21, '30', '35', '91', '10', '75', '3100', '3100', 'TUNGIPARA Pourashava', 'টুঙ্গিপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(26, '30', '35', '91', '20', '75', '3600', '3600', 'TUNGIPARA Grameen', 'টুঙ্গিপাড়া গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(28, '30', '93', '19', '10', '12', '3800', '3800', 'BHUAPUR Pourashava', 'ভূঞাপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(40, '30', '93', '19', '20', '12', '5000', '5000', 'BHUAPUR Grameen', 'ভূঞাপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(29, '30', '93', '23', '10', '10', '3900', '3900', 'DELDUAR Pourashava', 'দেলদুয়ার পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(41, '30', '93', '23', '20', '10', '5100', '5100', 'DELDUAR Grameen', 'দেলদুয়ার গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(30, '30', '93', '25', '10', '25', '4000', '4000', 'DHANBARI Pourashava', 'ধনবাড়ী পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(42, '30', '93', '25', '20', '25', '5200', '5200', 'DHANBARI Grameen', 'ধনবাড়ী গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(31, '30', '93', '28', '10', '37', '4100', '4100', 'GHATAIL Pourashava', 'ঘাটাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(43, '30', '93', '28', '20', '37', '5300', '5300', 'GHATAIL Grameen', 'ঘাটাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(32, '30', '93', '38', '10', '50', '4200', '4200', 'GOPALPUR Pourashava', 'গোপালপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(44, '30', '93', '38', '20', '50', '5400', '5400', 'GOPALPUR Grameen', 'গোপালপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(33, '30', '93', '47', '10', '62', '4300', '4300', 'KALIHATI Pourashava', 'কালিহাতি পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(45, '30', '93', '47', '20', '62', '5500', '5500', 'KALIHATI Grameen', 'কালিহাতি গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(34, '30', '93', '57', '10', '75', '4400', '4400', 'MADHUPUR Pourashava', 'মধুপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(46, '30', '93', '57', '20', '75', '5600', '5600', 'MADHUPUR Grameen', 'মধুপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(35, '30', '93', '66', '10', '70', '4500', '4500', 'MIRZAPUR Pourashava', 'মির্জাপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(47, '30', '93', '66', '20', '70', '5700', '5700', 'MIRZAPUR Grameen', 'মির্জাপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(36, '30', '93', '76', '10', '10', '4600', '4600', 'NAGARPUR Pourashava', 'নাগরপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(48, '30', '93', '76', '20', '10', '5800', '5800', 'NAGARPUR Grameen', 'নাগরপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(37, '30', '93', '85', '10', '80', '4700', '4700', 'SAKHIPUR Pourashava', 'সখীপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(49, '30', '93', '85', '20', '80', '5900', '5900', 'SAKHIPUR Grameen', 'সখীপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(27, '30', '93', '9', '10', '10', '3700', '3700', 'BASAIL Pourashava', 'বাসাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(39, '30', '93', '9', '20', '10', '4900', '4900', 'BASAIL Grameen', 'বাসাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(38, '30', '93', '95', '10', '87', '4800', '4800', 'TANGAIL SADAR Pourashava', 'টাঙ্গাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(50, '30', '93', '95', '20', '87', '6000', '6000', 'TANGAIL SADAR Grameen', 'টাঙ্গাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '40', '41', '61', '10', '13', '1300', '1300', 'CHAUGACHHA Pourashava', 'চৌগাছা পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '40', '41', '61', '10', '16', '1600', '1600', 'JESSORE Pourashava', 'যশোর সদর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '40', '41', '61', '10', '33', '1400', '1400', 'JHIKARGACHHA Pourashava', 'ঝিকরগাছা পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(5, '40', '41', '61', '10', '37', '1500', '1500', 'KESHABPUR Pourashava', 'কেশবপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(10, '40', '41', '61', '10', '5', '1200', '1200', 'BAGHER PARA Grameen', 'বাঘারপাড়া গ্রামীণ', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-19 05:06:49'),
(7, '40', '41', '61', '10', '66', '1700', '1700', 'MANIRAMPUR Pourashava', 'মনিরামপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(8, '40', '41', '61', '10', '8', '1900', '1900', 'BENAPOLE Pourashava', 'বেনাপোল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(1, '40', '41', '61', '10', '83', '1100', '1100', 'NOAPARA Pourashava', 'নোয়াপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(11, '40', '41', '61', '20', '13', '2200', '2200', 'CHAUGACHHA Grameen', 'চৌগাছা গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(14, '40', '41', '61', '20', '16', '2500', '2500', 'JESSORE Grameen', 'যশোর সদর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(12, '40', '41', '61', '20', '33', '2300', '2300', 'JHIKARGACHHA Grameen', 'ঝিকরগাছা গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(13, '40', '41', '61', '20', '37', '2400', '2400', 'KESHABPUR Grameen', 'কেশবপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(10, '40', '41', '61', '20', '5', '2100', '2100', 'BAGHER PARA Grameen', 'বাঘারপাড়া গ্রামীণ', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-19 05:06:49'),
(15, '40', '41', '61', '20', '66', '2600', '2600', 'MANIRAMPUR Grameen', 'মনিরামপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(16, '40', '41', '61', '20', '8', '2700', '2700', 'BENAPOLE Grameen', 'বেনাপোল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(9, '40', '41', '61', '20', '83', '2000', '2000', 'Abhaynagar Grameen', 'অভয়নগর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ada_area_type`
--

CREATE TABLE `ada_area_type` (
  `AreaTypeId` int(11) NOT NULL,
  `AreaTypeCode` varchar(50) NOT NULL,
  `AreaTypeNameEnglish` varchar(150) NOT NULL,
  `AreaTypeNameBangla` varchar(150) NOT NULL,
  `Note` text NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_area_type`
--

INSERT INTO `ada_area_type` (`AreaTypeId`, `AreaTypeCode`, `AreaTypeNameEnglish`, `AreaTypeNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, '10', 'Paurashava - Urban', 'পৌরসভা / শহুরে', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(2, '20', 'Rural', 'গ্রামীণ', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '30', 'City Corporation', 'সিটি কর্পোরেশন', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '40', 'Upazila Parishad', 'উপজেলা পরিষদ ', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(5, '50', 'Cantonment', 'সেনানিবাস', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '60', 'Depopulated', 'মানবহীন', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(7, '70', 'Others', 'অন্যান্য', 'Note', 'InActive', 'Draft', 'Default', '2020-04-06 20:00:17'),
(8, '8', 'Mars', 'মঙ্গল গ্রহ', 'Note', 'Inactive', 'Draft', 'Default', '2020-04-08 05:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `ada_codelist`
--

CREATE TABLE `ada_codelist` (
  `CodeListId` int(11) NOT NULL,
  `CodeListCode` varchar(50) NOT NULL,
  `CodeListNameEnglish` varchar(150) NOT NULL,
  `CodeListNameBangla` varchar(150) NOT NULL,
  `Note` text NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_codelist`
--

INSERT INTO `ada_codelist` (`CodeListId`, `CodeListCode`, `CodeListNameEnglish`, `CodeListNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, '1', 'Privilege', 'অনুমতি', 'NOTE', 'ACTIVE', 'DRAFT', 'Default', '2020-04-19 07:21:36'),
(10, '10', 'Advisory Status', 'অ্যাডভাইসরি স্ট্যাটাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(11, '11', 'Venu', 'অনুষ্ঠান স্থল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(12, '12', 'Determine the applicability of weather advice', 'আবহাওয়া বিষয়ক প্রাপ্ত পরামর্শগুলোর উপযোগিতা নির্ধারণ করুন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(13, '13', 'How have you benefited from using this advice?', 'আপনি কিভাবে এই পরামর্শটি ব্যবহার করে উপকৃত হয়েছেন ?', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(14, '14', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(15, '15', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(16, '16', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(17, '17', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(18, '18', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(19, '19', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(2, '2', 'Record Status', 'রেকর্ড স্ট্যাটাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(20, '20', 'G', 'জি ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '3', 'Record Version', 'রেকর্ড  ভার্সন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '4', 'Mobile App', 'মোবাইল অ্যাপ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(5, '5', 'Paurasava Category', 'পৌরসভা কেটাগরী', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '6', 'Recipient Type', 'পৌরসভা কেটাগরী', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(7, '7', 'Gateway', 'গেটওয়ে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(8, '8', 'Mobile App - Agro Officer', 'মোবাইল অ্যাপ - এসএসএও', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(9, '9', 'Mobile App - Farmer', 'মোবাইল অ্যাপ - কৃষক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ada_district`
--

CREATE TABLE `ada_district` (
  `DistrictId` int(11) NOT NULL,
  `DivisionCode` varchar(50) NOT NULL,
  `DistrictCode` varchar(50) NOT NULL,
  `DistrictNameEnglish` varchar(150) NOT NULL,
  `DistrictNameBangla` varchar(150) NOT NULL,
  `DistrictImage1` varchar(150) NOT NULL,
  `DistrictImage2` varchar(150) NOT NULL,
  `Note` longtext NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_district`
--

INSERT INTO `ada_district` (`DistrictId`, `DivisionCode`, `DistrictCode`, `DistrictNameEnglish`, `DistrictNameBangla`, `DistrictImage1`, `DistrictImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, '10', '4', 'BARGUA', 'বরগুনা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '10', '42', 'JHALOKATI', 'ঝালকাঠি', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(2, '10', '6', 'BARISAL', 'বরিশাল', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(5, '10', '78', 'PATUAKHALI', 'পটুয়াখালী ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '10', '79', 'PIROJPUR', 'পিরোজপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '10', '9', 'BHOLA', 'ভোলা ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(8, '20', '12', 'BRAHMABARIA', 'ব্রাহ্মণবাড়িয়া', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(9, '20', '13', 'CHADPUR', 'চাঁদপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(10, '20', '15', 'CHITTAGOG', 'চট্টগ্রাম', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(11, '20', '19', 'COMILLA', 'কুমিল্লা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(12, '20', '22', 'COXS BAZAR', 'কক্সবাজার', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(7, '20', '3', 'BADARBA', 'বান্দরবন', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(13, '20', '30', 'FEI', 'ফেনী', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(14, '20', '46', 'KHAGRACHHARI', 'খাগড়াছড়ি', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(15, '20', '51', 'LAKSHMIPUR', 'লক্ষ্মীপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(16, '20', '75', 'OAKHALI', 'নোয়াখালী', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(17, '20', '84', 'RAGAMATI', 'রাঙামাটি', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(18, '30', '26', 'DHAKA', 'ঢাকা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(19, '30', '29', 'FARIDPUR', 'ফরিদপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(20, '30', '33', 'GAZIPUR', 'গাজীপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(21, '30', '35', 'GOPALGAJ', 'গোপালগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(22, '30', '48', 'KISHOREGOJ', 'কিশরগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(23, '30', '54', 'MADARIPUR', 'মাদারীপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(24, '30', '56', 'MAIKGAJ', 'মানিকগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(25, '30', '59', 'MUSHIGAJ', 'মুন্সিগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(26, '30', '67', 'ARAYAGAJ', 'নারায়ণগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(27, '30', '68', 'ARSIGDI', 'নরসিংদি', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(28, '30', '82', 'RAJBARI', 'রাজবাড়ী', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(29, '30', '86', 'SHARIATPUR', 'শরীয়তপুর', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 13:11:13'),
(30, '30', '93', 'TAGAIL', 'টাঙ্গাইল', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 12:42:00'),
(31, '40', '1', 'BAGERHAT', 'বাগেরহাট', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(32, '40', '18', 'CHUADAGA', 'চুয়াডাঙ্গা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(33, '40', '41', 'JESSORE', 'যশোর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(34, '40', '44', 'JHEAIDAH', 'ঝিনাইদহ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(35, '40', '47', 'KHULA', 'খুলনা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(36, '40', '50', 'KUSHTIA', 'কুষ্টিয়া', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(37, '40', '55', 'MAGURA', 'মাগুরা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(38, '40', '57', 'MEHERPUR', 'মেহেরপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(39, '40', '65', 'ARAIL', 'নড়াইল', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(40, '40', '87', 'SATKHIRA', 'সাতক্ষীরা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(41, '50', '10', 'BOGRA', 'বগুড়া', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(42, '50', '38', 'JOYPURHAT', 'জয়পুরহাট', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(43, '50', '64', 'AOGAO', 'নওগাঁ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(44, '50', '69', 'ATORE', 'নাটোর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(45, '50', '70', 'CHAPAI ABABGAJ', 'চাঁপাইনবাবগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(46, '50', '76', 'PABA', 'পাবনা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(47, '50', '81', 'RAJSHAHI', 'রাজশাহী', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(48, '50', '88', 'SIRAJGAJ', 'সিরাজগঞ্জ', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 09:10:03'),
(49, '55', '27', 'DIAJPUR', 'দিনাজপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(50, '55', '32', 'GAIBADHA', 'গাইবান্ধা', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(51, '55', '49', 'KURIGRAM', 'কুড়িগ্রাম', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(52, '55', '52', 'LALMOIRHAT', 'লালমনিরহাট', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(53, '55', '73', 'ILPHAMARI', 'নীলফামারী', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(54, '55', '77', 'PACHAGARH', 'পঞ্চগড়', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(55, '55', '85', 'RAGPUR', 'রংপুর ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(56, '55', '94', 'THAKURGAO', 'ঠাকুরগাঁও', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(57, '60', '36', 'HABIGAJ', 'হবিগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(58, '60', '58', 'MAULVIBAZAR', 'মৌলভীবাজার', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(59, '60', '90', 'SUAMGAJ', 'সুনামগঞ্জ', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(60, '60', '91', 'SYLHET', 'সিলেট', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(61, '70', '39', 'JAMALPUR', 'জামালপুর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(64, '70', '61', 'MYMESIGH', 'ময়মনসিংহ', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 06:12:12'),
(63, '70', '72', 'ETRAKOA', 'নেত্রকোনা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 06:12:20'),
(62, '70', '89', 'SHERPUR', 'শেরপুর', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 06:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `ada_division`
--

CREATE TABLE `ada_division` (
  `DivisionId` int(11) NOT NULL,
  `DivisionCode` varchar(50) NOT NULL,
  `DivisionNameEnglish` varchar(150) NOT NULL,
  `DivisionNameBangla` varchar(150) NOT NULL,
  `DivisionImage1` varchar(150) NOT NULL,
  `DivisionImage2` varchar(150) NOT NULL,
  `Note` longtext NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_division`
--

INSERT INTO `ada_division` (`DivisionId`, `DivisionCode`, `DivisionNameEnglish`, `DivisionNameBangla`, `DivisionImage1`, `DivisionImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, '10', 'Barisal', 'বরিশাল', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:21:45'),
(2, '20', 'Chittagong', 'চটগ্রাম', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:22:03'),
(3, '30', 'Dhaka', 'ঢাকা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:24:35'),
(4, '40', 'Khulna', 'খুলনা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:24:54'),
(5, '50', 'Rajshahi', 'রাজশাহী', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:25:06'),
(6, '55', 'Rangpur', 'রংপুর', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:25:15'),
(7, '60', 'Sylhet', 'সিলেট', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:25:32'),
(8, '70', 'Mymensingh', 'ময়মনসিংহ', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-03-21 04:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `ada_listitem`
--

CREATE TABLE `ada_listitem` (
  `ListItemId` int(11) NOT NULL,
  `CodeListCode` varchar(50) NOT NULL,
  `ListItemCode` varchar(50) NOT NULL,
  `ListItemNameEnglish` varchar(150) NOT NULL,
  `ListItemNameBangla` varchar(150) NOT NULL,
  `Note` text NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_listitem`
--

INSERT INTO `ada_listitem` (`ListItemId`, `CodeListCode`, `ListItemCode`, `ListItemNameEnglish`, `ListItemNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, '1', '1', 'View', 'ভিউ', 'NOTE', 'ACTIVE', 'DRAFT', 'Default', '2020-04-19 14:24:10'),
(10, '2', '10', 'Archived', 'আর্কাইভড', 'NOTE', 'ACTIVE', 'DRAFT', 'Default', '2020-04-19 13:58:34'),
(100, '17', '100', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(101, '17', '101', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(102, '18', '102', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(103, '18', '103', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(104, '18', '104', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(105, '18', '105', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(106, '18', '106', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(107, '18', '107', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(108, '18', '108', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(109, '19', '109', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(11, '3', '11', 'Create', 'প্রণয়ন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(110, '19', '110', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(111, '19', '111', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(112, '19', '112', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(113, '19', '113', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(114, '19', '114', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(115, '19', '115', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(116, '20', '116', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(117, '20', '117', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(118, '20', '118', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(119, '20', '119', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(12, '3', '12', 'Draft', 'ড্রাফ্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(120, '20', '120', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(121, '20', '121', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(122, '20', '122', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(13, '3', '13', 'Update', 'হালনাগাদ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(14, '3', '14', 'Review', 'পুনর্বিচার', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(15, '3', '15', 'Audite', 'নিরীক্ষা', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(16, '3', '16', 'Approve', 'অনুমোদন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(17, '4', '17', 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(18, '4', '18', 'Menu - 1', 'মেনু - ১', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(19, '4', '19', 'Menu - 2', 'মেনু - ২', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(2, '1', '2', 'Add', 'অ্যাড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(20, '4', '20', 'Menu - 3', 'মেনু - ৩', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(21, '4', '21', 'Menu - 4', 'মেনু - ৪', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(22, '4', '22', 'Menu - 5', 'মেনু - ৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(23, '4', '23', 'Menu - 6', 'মেনু - ৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(24, '5', '24', 'CC', 'সিসি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(25, '5', '25', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(26, '5', '26', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(27, '5', '27', 'C', 'সি ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(28, '6', '28', 'All Type', 'সকল ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(29, '6', '29', 'Farmer', 'কৃষক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '1', '3', 'Edit', 'এডিট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(30, '6', '30', 'SAAO', 'এসএএও', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(31, '6', '31', 'Management', 'ব্যবস্থাপকবৃন্দ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(32, '6', '32', 'Recipient - 1', 'গ্রহীতা -১', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(33, '6', '33', 'Recipient - 2', 'গ্রহীতা -২', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(34, '6', '34', 'Recipient - 3', 'গ্রহীতা -৩', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(35, '6', '35', 'Recipient - 4', 'গ্রহীতা -৪', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(36, '6', '36', 'Recipient - 5', 'গ্রহীতা -৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(37, '6', '37', 'Recipient - 6', 'গ্রহীতা -৬', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(38, '7', '38', 'Text Message', 'টেক্সট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(39, '7', '39', 'Audio Message', 'ওডিও মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '1', '4', 'Update', 'আপডেট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(40, '7', '40', 'Text Feedback', 'টেক্সট  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(41, '7', '41', 'Audio  Feedback', 'ওডিও  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(42, '7', '42', 'SDP', 'এসডিপি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(43, '7', '43', 'SDP Feedback', 'এসডিপি  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(44, '8', '44', 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(45, '8', '45', 'Weather & Climate Extreme', 'প্রাকৃতিক দুর্যোগ সম্পর্কিত তথ্য', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(46, '8', '46', 'Training, Awareness & Campaign', 'ট্রেনিং সম্পর্কিত তথ্য', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(47, '8', '47', 'Message', 'ম্যাসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(48, '8', '48', 'Feedback', 'ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(49, '8', '49', 'Information', 'ইনফরমেসন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(5, '1', '5', 'Delete', 'ডিলিট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(50, '8', '50', 'Weather Forecast', 'আবহাওয়া পূর্বাভাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(51, '9', '51', 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(52, '9', '52', 'Text Message', 'টেক্সট মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(53, '9', '53', 'Audio Message', 'ওডিও মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(54, '9', '54', 'Crop Management', 'ফসল রক্ষণাবেক্ষণ পরামর্শ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(55, '9', '55', 'Harsh Climate Event', 'ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(56, '9', '56', 'Training awareness and compaign', 'হারশ ক্লাইমেট ইভেন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(57, '9', '57', 'Training awareness and compaign', 'ট্রেনিং এওয়ারনেস এন্ড ক্যাম্পেইন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(58, '10', '58', 'All', 'সকল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(59, '10', '59', 'Draft', 'ড্রাফ্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '1', '6', 'Download', 'ডাউনলোড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(60, '10', '60', 'Attached', 'এটাচড', 'NOTE', 'ACTIVE', 'DRAFT', 'Default', '2020-04-19 13:59:19'),
(61, '10', '61', 'Sent', 'সেন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(62, '10', '62', 'Achieved', 'আর্কাইভড ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(63, '11', '63', 'Farmer Field', 'কৃষকের আঙ্গিনা', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(64, '11', '64', 'Office Training Room', 'অফিস ট্রেনিং রুম', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(65, '11', '65', 'All', 'সকল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(66, '12', '66', 'little', 'কম', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(67, '12', '67', 'Approximate', 'মোটামুটি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(68, '12', '68', 'Good', 'ভালো', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(69, '12', '69', 'Excellent', 'চমৎকার', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(7, '1', '7', 'Print', 'প্রিন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(70, '13', '70', 'Through profitable marketing of crops', 'ফসলের লাভজনক বিপণনের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(71, '13', '71', 'By preventing damage to crops and other assets', 'ফসলের এবং অন্যান্য সম্পদের ক্ষতি প্রতিরোধের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(72, '13', '72', 'Through the use of accurate agricultural products', 'সঠিক পরিমাপের কৃষি উপকরণ ব্যবহারের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(73, '13', '73', 'By reducing the production cost of the crop', 'ফসলের উৎপাদন খরচ কমানোর মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(74, '14', '74', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(75, '14', '75', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(76, '14', '76', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(77, '14', '77', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(78, '14', '78', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(79, '14', '79', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(8, '2', '8', 'Active', 'একটিভ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(80, '14', '80', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(81, '15', '81', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(82, '15', '82', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(83, '15', '83', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(84, '15', '84', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(85, '15', '85', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(86, '15', '86', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(87, '15', '87', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(88, '16', '88', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(89, '16', '89', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(9, '2', '9', 'Inactive', 'ইন একটিভ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(90, '16', '90', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(91, '16', '91', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(92, '16', '92', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(93, '16', '93', 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(94, '16', '94', 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(95, '17', '95', 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(96, '17', '96', 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(97, '17', '97', 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(98, '17', '98', 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00'),
(99, '17', '99', 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ada_upazila`
--

CREATE TABLE `ada_upazila` (
  `UpazilaId` int(11) NOT NULL,
  `DivisionCode` varchar(50) NOT NULL,
  `DistrictCode` varchar(50) NOT NULL,
  `UpazilaCode` varchar(50) NOT NULL,
  `UpazilaNameEnglish` varchar(150) NOT NULL,
  `UpazilaNameBangla` varchar(150) NOT NULL,
  `UpazilaImage1` varchar(150) NOT NULL,
  `UpazilaImage2` varchar(150) NOT NULL,
  `Note` longtext NOT NULL,
  `RecordStatus` varchar(50) NOT NULL,
  `RecordVersion` varchar(50) NOT NULL,
  `UserAccess` varchar(50) NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ada_upazila`
--

INSERT INTO `ada_upazila` (`UpazilaId`, `DivisionCode`, `DistrictCode`, `UpazilaCode`, `UpazilaNameEnglish`, `UpazilaNameBangla`, `UpazilaImage1`, `UpazilaImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(2, '10', '4', '19', 'BAMA', 'বামনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(3, '10', '4', '28', 'BARGUA SADAR', 'বরগুনা সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '10', '4', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'),
(5, '10', '4', '85', 'PATHARGHATA', 'তালতলী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(1, '10', '4', '9', 'AMTALI', 'আমতলী ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(6, '30', '35', '32', 'GOPALGAJ SADAR', 'গোপালগঞ্জ সদর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(7, '30', '35', '43', 'KASHIAI', 'কাশিয়ানী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(8, '30', '35', '51', 'KOTALIPARA', 'কোটালিপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(9, '30', '35', '58', 'MUKSUDPUR', 'মুকসুদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(10, '30', '35', '91', 'TUGIPARA', 'টুঙ্গিপাড়া', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-04 09:59:09'),
(12, '30', '93', '19', 'BHUAPUR', 'ভূঞাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(13, '30', '93', '23', 'DELDUAR', 'দেলদুয়ার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(14, '30', '93', '25', 'DHABARI', 'ধনবাড়ী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(15, '30', '93', '28', 'GHATAIL', 'ঘাটাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(16, '30', '93', '38', 'GOPALPUR', 'গোপালপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '30', '93', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'),
(18, '30', '93', '57', 'MADHUPUR', 'মধুপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(19, '30', '93', '66', 'MIRZAPUR', 'মির্জাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(20, '30', '93', '76', 'AGARPUR', 'নাগরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(21, '30', '93', '85', 'SAKHIPUR', 'সখীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(11, '30', '93', '9', 'BASAIL', 'বাসাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(22, '30', '93', '95', 'TAGAIL SADAR', 'টাঙ্গাইল সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(25, '40', '41', '11', 'CHAUGACHHA', 'চৌগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(26, '40', '41', '23', 'JHIKARGACHHA', 'ঝিকরগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(27, '40', '41', '38', 'KESHABPUR', 'কেশবপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(23, '40', '41', '4', 'ABHAYAGAR', 'অভয়নগর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(4, '40', '41', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'),
(29, '40', '41', '61', 'MAIRAMPUR', 'মনিরামপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(24, '40', '41', '9', 'BAGHER PARA', 'বাঘারপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'),
(30, '40', '41', '90', 'SHARSHA', 'শার্শা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ada_area`
--
ALTER TABLE `ada_area`
  ADD PRIMARY KEY (`DivisionCode`,`DistrictCode`,`UpazilaCode`,`AreaTypeCode`,`AreaCode`),
  ADD KEY `AreaTypeCode` (`AreaTypeCode`);

--
-- Indexes for table `ada_area_type`
--
ALTER TABLE `ada_area_type`
  ADD PRIMARY KEY (`AreaTypeCode`);

--
-- Indexes for table `ada_codelist`
--
ALTER TABLE `ada_codelist`
  ADD PRIMARY KEY (`CodeListCode`);

--
-- Indexes for table `ada_district`
--
ALTER TABLE `ada_district`
  ADD PRIMARY KEY (`DivisionCode`,`DistrictCode`);

--
-- Indexes for table `ada_division`
--
ALTER TABLE `ada_division`
  ADD PRIMARY KEY (`DivisionCode`);

--
-- Indexes for table `ada_listitem`
--
ALTER TABLE `ada_listitem`
  ADD PRIMARY KEY (`ListItemCode`),
  ADD KEY `CodeListCode` (`CodeListCode`);

--
-- Indexes for table `ada_upazila`
--
ALTER TABLE `ada_upazila`
  ADD PRIMARY KEY (`DivisionCode`,`DistrictCode`,`UpazilaCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ada_area`
--
ALTER TABLE `ada_area`
  ADD CONSTRAINT `ada_area_ibfk_1` FOREIGN KEY (`DivisionCode`,`DistrictCode`,`UpazilaCode`) REFERENCES `ada_upazila` (`DivisionCode`, `DistrictCode`, `UpazilaCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ada_area_ibfk_2` FOREIGN KEY (`AreaTypeCode`) REFERENCES `ada_area_type` (`AreaTypeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_district`
--
ALTER TABLE `ada_district`
  ADD CONSTRAINT `FK_Ada_District_Ada_Division` FOREIGN KEY (`DivisionCode`) REFERENCES `ada_division` (`DivisionCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_listitem`
--
ALTER TABLE `ada_listitem`
  ADD CONSTRAINT `ada_listitem_ibfk_1` FOREIGN KEY (`CodeListCode`) REFERENCES `ada_codelist` (`CodeListCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_upazila`
--
ALTER TABLE `ada_upazila`
  ADD CONSTRAINT `FK_Ada_Upazila_Ada_District` FOREIGN KEY (`DivisionCode`,`DistrictCode`) REFERENCES `ada_district` (`DivisionCode`, `DistrictCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
