-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 02:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `AreaId` bigint(20) NOT NULL,
  `DivisionCode` bigint(20) UNSIGNED NOT NULL,
  `DistrictCode` bigint(20) UNSIGNED NOT NULL,
  `UpazilaCode` bigint(20) UNSIGNED NOT NULL,
  `AreaTypeCode` bigint(20) UNSIGNED NOT NULL,
  `AreaCode` bigint(20) UNSIGNED NOT NULL,
  `Area_Dept_Code1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Area_Dept_Code2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AreaNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AreaNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AreaImage1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AreaImage2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_area`
--

INSERT INTO `ada_area` (`AreaId`, `DivisionCode`, `DistrictCode`, `UpazilaCode`, `AreaTypeCode`, `AreaCode`, `Area_Dept_Code1`, `Area_Dept_Code2`, `AreaNameEnglish`, `AreaNameBangla`, `AreaImage1`, `AreaImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(10, 40, 41, 61, 20, 5, '2100', '2100', 'BAGHER PARA Grameen', 'বাঘারপাড়া গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(8, 40, 41, 61, 10, 8, '1900', '1900', 'BENAPOLE Pourashava', 'বেনাপোল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(18, 30, 35, 43, 10, 10, '2800', '2800', 'KASHIANI Pourashava', 'কাশিয়ানী পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(28, 30, 93, 19, 10, 12, '3800', '3800', 'BHUAPUR Pourashava', 'ভূঞাপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(11, 40, 41, 61, 20, 13, '2200', '2200', 'CHAUGACHHA Grameen', 'চৌগাছা গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(6, 40, 41, 61, 10, 16, '1600', '1600', 'JESSORE Pourashava', 'যশোর সদর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(17, 30, 35, 32, 10, 25, '1800', '1800', 'GOPALGANJ SADAR Pourashava', 'গোপালগঞ্জ সদর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(12, 40, 41, 61, 20, 33, '2300', '2300', 'JHIKARGACHHA Grameen', 'ঝিকরগাছা গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(5, 40, 41, 61, 10, 37, '1500', '1500', 'KESHABPUR Pourashava', 'কেশবপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(19, 30, 35, 51, 10, 50, '2900', '2900', 'KOTALIPARA Pourashava', 'কোটালিপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(33, 30, 93, 47, 10, 62, '4300', '4300', 'KALIHATI Pourashava', 'কালিহাতি পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(20, 30, 35, 58, 10, 65, '3000', '3000', 'MUKSUDPUR Pourashava', 'মুকসুদপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(7, 40, 41, 61, 10, 66, '1700', '1700', 'MANIRAMPUR Pourashava', 'মনিরামপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(35, 30, 93, 66, 10, 70, '4500', '4500', 'MIRZAPUR Pourashava', 'মির্জাপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(21, 30, 35, 91, 10, 75, '3100', '3100', 'TUNGIPARA Pourashava', 'টুঙ্গিপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(37, 30, 93, 85, 10, 80, '4700', '4700', 'SAKHIPUR Pourashava', 'সখীপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(16, 40, 41, 61, 20, 81, '2700', '2700', 'BENAPOLE Grameen', 'বেনাপোল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(9, 40, 41, 61, 20, 83, '2000', '2000', 'Abhaynagar Grameen', 'অভয়নগর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(38, 30, 93, 95, 10, 87, '4800', '4800', 'TANGAIL SADAR Pourashava', 'টাঙ্গাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(23, 30, 35, 43, 20, 101, '3300', '3300', 'KASHIANI Grameen', 'কাশিয়ানী গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(27, 30, 93, 9, 10, 102, '3700', '3700', 'BASAIL Pourashava', 'বাসাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(29, 30, 93, 23, 10, 103, '3900', '3900', 'DELDUAR Pourashava', 'দেলদুয়ার পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(36, 30, 93, 76, 10, 104, '4600', '4600', 'NAGARPUR Pourashava', 'নাগরপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(39, 30, 93, 9, 20, 105, '4900', '4900', 'BASAIL Grameen', 'বাসাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(41, 30, 93, 23, 20, 106, '5100', '5100', 'DELDUAR Grameen', 'দেলদুয়ার গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(48, 30, 93, 76, 20, 107, '5800', '5800', 'NAGARPUR Grameen', 'নাগরপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(40, 30, 93, 19, 20, 121, '5000', '5000', 'BHUAPUR Grameen', 'ভূঞাপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(3, 40, 41, 61, 10, 133, '1300', '1300', 'CHAUGACHHA Pourashava', 'চৌগাছা পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(14, 40, 41, 61, 20, 161, '2500', '2500', 'JESSORE Grameen', 'যশোর সদর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(22, 30, 35, 32, 20, 251, '3200', '3200', 'GOPALGANJ SADAR Grameen', 'গোপালগঞ্জ সদর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(30, 30, 93, 25, 10, 252, '4000', '4000', 'DHANBARI Pourashava', 'ধনবাড়ী পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(42, 30, 93, 25, 20, 253, '5200', '5200', 'DHANBARI Grameen', 'ধনবাড়ী গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(301, 101, 201, 301, 70, 301, '', '', 'Area Test', 'Area Test', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-06-09 08:47:15'),
(4, 40, 41, 61, 10, 333, '1400', '1400', 'JHIKARGACHHA Pourashava', 'ঝিকরগাছা পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(13, 40, 41, 61, 20, 371, '2400', '2400', 'KESHABPUR Grameen', 'কেশবপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(31, 30, 93, 28, 10, 372, '4100', '4100', 'GHATAIL Pourashava', 'ঘাটাইল পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(43, 30, 93, 28, 20, 373, '5300', '5300', 'GHATAIL Grameen', 'ঘাটাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(24, 30, 35, 51, 20, 501, '3400', '3400', 'KOTALIPARA Grameen', 'কোটালিপাড়া গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(32, 30, 93, 38, 10, 502, '4200', '4200', 'GOPALPUR Pourashava', 'গোপালপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(44, 30, 93, 38, 20, 503, '5400', '5400', 'GOPALPUR Grameen', 'গোপালপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(508, 101, 201, 301, 20, 508, '', '', 'Area Test', 'Area Test', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-30 01:08:12'),
(2, 40, 41, 61, 10, 555, '1200', '1200', 'BAGHER PARA Pourashava', 'বাঘারপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(506, 101, 201, 301, 20, 605, '', '', 'Area Test 2', 'Area Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-31 00:59:22'),
(45, 30, 93, 47, 20, 621, '5500', '5500', 'KALIHATI Grameen', 'কালিহাতি গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(25, 30, 35, 58, 20, 651, '3500', '3500', 'MUKSUDPUR Grameen', 'মুকসুদপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(15, 40, 41, 61, 20, 666, '2600', '2600', 'MANIRAMPUR Grameen', 'মনিরামপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:25'),
(47, 30, 93, 66, 20, 701, '5700', '5700', 'MIRZAPUR Grameen', 'মির্জাপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(26, 30, 35, 91, 20, 751, '3600', '3600', 'TUNGIPARA Grameen', 'টুঙ্গিপাড়া গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(34, 30, 93, 57, 10, 752, '4400', '4400', 'MADHUPUR Pourashava', 'মধুপুর পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:26'),
(46, 30, 93, 57, 20, 753, '5600', '5600', 'MADHUPUR Grameen', 'মধুপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(49, 30, 93, 85, 20, 801, '5900', '5900', 'SAKHIPUR Grameen', 'সখীপুর গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27'),
(1, 40, 41, 61, 10, 811, '1100', '1100', 'NOAPARA Pourashava', 'নোয়াপাড়া পৌরসভা', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(50, 30, 93, 95, 20, 871, '6000', '6000', 'TANGAIL SADAR Grameen', 'টাঙ্গাইল গ্রামীণ', 'Note', 'Image Path1', 'Image Path2', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `ada_area_type`
--

CREATE TABLE `ada_area_type` (
  `AreaTypeId` bigint(20) NOT NULL,
  `AreaTypeCode` bigint(20) UNSIGNED NOT NULL,
  `AreaTypeNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AreaTypeNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_area_type`
--

INSERT INTO `ada_area_type` (`AreaTypeId`, `AreaTypeCode`, `AreaTypeNameEnglish`, `AreaTypeNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, 10, 'Paurashava - Urban', 'পৌরসভা / শহুরে', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(2, 20, 'Rural', 'গ্রামীণ', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(3, 30, 'City Corporation', 'সিটি কর্পোরেশন', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(4, 40, 'Upazila Parishad', 'উপজেলা পরিষদ ', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(5, 50, 'Cantonment', 'সেনানিবাস', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(6, 60, 'Depopulated', 'মানবহীন', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(7, 70, 'Others', ' অন্যান্য ', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `ada_codelist`
--

CREATE TABLE `ada_codelist` (
  `CodeListId` bigint(20) NOT NULL,
  `CodeListCode` bigint(20) UNSIGNED NOT NULL,
  `CodeListNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CodeListNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_codelist`
--

INSERT INTO `ada_codelist` (`CodeListId`, `CodeListCode`, `CodeListNameEnglish`, `CodeListNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, 1, 'Privilege', 'অনুমতি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(2, 2, 'Record Status', 'রেকর্ড স্ট্যাটাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(3, 3, 'Record Version', 'রেকর্ড  ভার্সন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(4, 4, 'Mobile App', 'মোবাইল অ্যাপ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(5, 5, 'Paurasava Category', 'পৌরসভা কেটাগরী', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(6, 6, 'Recipient Type', 'পৌরসভা কেটাগরী', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(7, 7, 'Gateway', 'গেটওয়ে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(8, 8, 'Mobile App - Agro Officer', 'মোবাইল অ্যাপ - এসএসএও', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(9, 9, 'Mobile App - Farmer', 'মোবাইল অ্যাপ - কৃষক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(10, 10, 'Advisory Status', 'অ্যাডভাইসরি স্ট্যাটাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:28'),
(11, 11, 'Venu', 'অনুষ্ঠান স্থল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(12, 12, 'Determine the applicability of weather advice', 'আবহাওয়া বিষয়ক প্রাপ্ত পরামর্শগুলোর উপযোগিতা নির্ধারণ করুন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(13, 13, 'How have you benefited from using this advice?', 'আপনি কিভাবে এই পরামর্শটি ব্যবহার করে উপকৃত হয়েছেন ?', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(14, 14, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(15, 15, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(16, 16, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(17, 17, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(18, 18, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(19, 19, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(20, 20, 'G', 'জি ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `ada_district`
--

CREATE TABLE `ada_district` (
  `DistrictId` bigint(20) NOT NULL,
  `DivisionCode` bigint(20) UNSIGNED NOT NULL,
  `DistrictCode` bigint(20) UNSIGNED NOT NULL,
  `DistrictNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DistrictNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DistrictImage1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DistrictImage2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_district`
--

INSERT INTO `ada_district` (`DistrictId`, `DivisionCode`, `DistrictCode`, `DistrictNameEnglish`, `DistrictNameBangla`, `DistrictImage1`, `DistrictImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(31, 40, 1, 'BAGERHAT', 'বাগেরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(7, 20, 3, 'BANDARBA', 'বান্দরবন', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(1, 10, 4, 'BARGUNA', 'বরগুনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(2, 10, 6, 'BARISAL', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(3, 10, 9, 'BHOLA', 'ভোলা ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(41, 50, 10, 'BOGRA', 'বগুড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(8, 20, 12, 'BRAHMANBARIA', 'ব্রাহ্মণবাড়িয়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(9, 20, 13, 'CHANDPUR', 'চাঁদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(10, 20, 15, 'CHITTAGONG', 'চট্টগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(32, 40, 18, 'CHUADANGA', 'চুয়াডাঙ্গা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(11, 20, 19, 'COMILLA', 'কুমিল্লা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(12, 20, 22, 'COXS BAZAR', 'কক্সবাজার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(18, 30, 26, 'DHAKA', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(49, 55, 27, 'DINAJPUR', 'দিনাজপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(19, 30, 29, 'FARIDPUR', 'ফরিদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(13, 20, 30, 'FENI', 'ফেনী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(50, 55, 32, 'GAIBANDHA', 'গাইবান্ধা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(20, 30, 33, 'GAZIPUR', 'গাজীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(21, 30, 35, 'GOPALGANJ', 'গোপালগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(57, 60, 36, 'HABIGANJ', 'হবিগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(42, 50, 38, 'JOYPURHAT', 'জয়পুরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(61, 70, 39, 'JAMALPUR', 'জামালপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(33, 40, 41, 'JESSORE', 'যশোর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(4, 10, 42, 'JHALOKATI', 'ঝালকাঠি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(34, 40, 44, 'JHENAIDAH', 'ঝিনাইদহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(14, 20, 46, 'KHAGRACHHARI', 'খাগড়াছড়ি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(35, 40, 47, 'KHULNA', 'খুলনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(22, 30, 48, 'KISHOREGONJ', 'কিশরগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(51, 55, 49, 'KURIGRAM', 'কুড়িগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(36, 40, 50, 'KUSHTIA', 'কুষ্টিয়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(15, 20, 51, 'LAKSHMIPUR', 'লক্ষ্মীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(52, 55, 52, 'LALMONIRHAT', 'লালমনিরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(23, 30, 54, 'MADARIPUR', 'মাদারীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(37, 40, 55, 'MAGURA', 'মাগুরা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(24, 30, 56, 'MANIKGANJ', 'মানিকগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(38, 40, 57, 'MEHERPUR', 'মেহেরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(58, 60, 58, 'MAULVIBAZAR', 'মৌলভীবাজার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(25, 30, 59, 'MUNSHIGANJ', 'মুন্সিগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(64, 70, 61, 'MYMENSINGH', 'ময়মনসিংহ ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(43, 50, 64, 'NAOGAO', 'নওগাঁ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(39, 40, 65, 'NARAIL', 'নড়াইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(26, 30, 67, 'NARAYANGANJ', 'নারায়ণগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(27, 30, 68, 'NARSINGDI', 'নরসিংদি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(44, 50, 69, 'NATORE', 'নাটোর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(45, 50, 70, 'CHAPAI NABABGANJ', 'চাঁপাইনবাবগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(63, 70, 72, 'NETRAKONA', 'নেত্রকোনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(53, 55, 73, 'NILPHAMARI', 'নীলফামারী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(16, 20, 75, 'NOAKHALI', 'নোয়াখালী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(46, 50, 76, 'PABNA', 'পাবনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(54, 55, 77, 'PANCHAGARH', 'পঞ্চগড়', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(5, 10, 78, 'PATUAKHALI', 'পটুয়াখালী ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(6, 10, 79, 'PIROJPUR', 'পিরোজপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(47, 50, 81, 'RAJSHAHI', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(28, 30, 82, 'RAJBARI', 'রাজবাড়ী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(17, 20, 84, 'RANGAMATI', 'রাঙামাটি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(55, 55, 85, 'RANGPUR', 'রংপুর ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(29, 30, 86, 'SHARIATPUR', 'শরীয়তপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(40, 40, 87, 'SATKHIRA', 'সাতক্ষীরা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:20'),
(48, 50, 88, 'SIRAJGANJ', 'সিরাজগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(62, 70, 89, 'SHERPUR', 'শেরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(59, 60, 90, 'SUNAMGANJ', 'সুনামগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(60, 60, 91, 'SYLHET', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(30, 30, 93, 'TANGAIL', 'টাঙ্গাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:19'),
(56, 55, 94, 'THAKURGAO', 'ঠাকুরগাঁও', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:21'),
(201, 101, 201, 'District Test', 'District Test', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-28 15:09:13'),
(202, 101, 202, 'District Test 2', 'District Test 2', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-29 09:17:35'),
(203, 101, 203, 'District Test 2', 'District Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-29 09:19:37'),
(204, 101, 204, 'District Test 2', 'District Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-30 01:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `ada_division`
--

CREATE TABLE `ada_division` (
  `DivisionId` bigint(20) NOT NULL,
  `DivisionCode` bigint(20) UNSIGNED NOT NULL,
  `DivisionNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DivisionNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DivisionImage1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DivisionImage2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_division`
--

INSERT INTO `ada_division` (`DivisionId`, `DivisionCode`, `DivisionNameEnglish`, `DivisionNameBangla`, `DivisionImage1`, `DivisionImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(51, 0, 'exercitation', 'Edit Changed', 'Default', 'Default', 'Debitis exercitation', 'Corporis est ut qui', 'Et voluptates sit q', 'Default', '2021-06-10 02:08:12'),
(1, 10, 'Barisal', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(16, 16, 'Laborum Est incidun', 'Illo aut Nam veritat', 'Default', 'Default', 'Unde velit et rerum', 'Quis rerum omnis aut', 'Recusandae Nemo dig', 'Default', '2021-04-02 13:51:57'),
(17, 17, 'Division', 'বিভাগ নাম (বাংলা)', 'Default', 'Default', 'নোট', 'রেকর্ড স্ট্যাটাস', 'dsf', 'Default', '2021-06-04 14:53:57'),
(18, 18, 'Ut unde quo quis qui', 'Facilis voluptatibus', 'Default', 'Default', 'Sit ipsam modi tempo', 'Exercitation sit pl', 'Modi magni sed non n', 'Default', '2021-04-02 17:31:07'),
(19, 19, 'Nostrum molestias po', 'Eos voluptates alias', 'Default', 'Default', 'Saepe occaecat dolor', 'Magna soluta atque s', 'Sit rerum eu except', 'Default', '2021-04-02 17:32:55'),
(2, 20, 'Chittagong', 'চটগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(3, 30, 'Dhaka', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(4, 40, 'Khulna', 'খুলনা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2021-04-02 17:49:23'),
(5, 50, 'Rajshahi', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(53, 53, 'NewDivision', 'Test Edit', 'Default', 'Default', 'Test', 'Test', 'Test', 'Default', '2021-06-10 02:09:49'),
(6, 55, 'Rangpur', 'রংপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(7, 60, 'Sylhet', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(8, 70, 'Mymensingh', 'ময়মনসিংহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:18'),
(101, 101, 'Test 5', 'Test', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2021-04-04 16:03:24'),
(102, 102, 'Test 2', 'Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-24 11:06:32'),
(103, 103, 'Test 2', 'Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-24 11:06:47'),
(201, 201, 'TestEnglish', 'TestBangla', 'Default', 'Default', 'This is the note', 'রেকর্ড স্ট্যাটাস', 'রেকর্ড ভার্সন', 'Default', '2021-04-10 06:48:38'),
(212, 212, 'DivisionNameEnglish', 'বিভাগ নাম (বাংলা)', 'Default', 'Default', 'নোট', 'রেকর্ড স্ট্যাটাস', 'রেকর্ড ভার্সন', 'Default', '2021-04-10 06:57:08'),
(213, 213, 'sefsef', 'গ নাম (বাংলা)', 'Default', 'Default', 'sef', 'efwef', 'wefe', 'Default', '2021-04-10 07:04:44'),
(215, 215, 'Soluta', 'Eligendi eveniet pe', 'Default', 'Default', 'Cum autem neque elit', 'Deserunt eius in id', 'Dolore a possimus c', 'Default', '2021-04-10 16:26:52'),
(222, 222, 'Alias eveniet autem', 'Quia et consequuntur', 'Default', 'Default', 'Quos dolor vitae ver', 'Esse harum repellen', 'Blanditiis ipsam ut', 'Default', '2021-04-04 15:56:59'),
(331, 331, 'Culpa', 'Non sunt enim offici', 'Default', 'Default', 'Reprehenderit omnis', 'Quia perspiciatis a', 'Fugiat sed culpa q', 'Default', '2021-04-10 16:28:20'),
(1223, 1223, 'Magnam', 'AddDivision', 'Default', 'Default', 'Mollitia reprehender', 'Eos dolore repudian', 'Esse quis dolores do', 'Default', '2021-04-10 07:06:16'),
(1224, 1224, 'Reprehenderit', 'Molestias', 'Default', 'Default', 'Eveniet fugit dolo', 'Nisi esse soluta est', 'Debitis eveniet nos', 'Default', '2021-04-10 07:07:06'),
(1225, 1225, 'tempore', 'Magnam voluptate par', 'Default', 'Default', 'Facilis voluptas aut', 'At adipisicing cillu', 'Unde quas fuga Sit', 'Default', '2021-04-10 08:03:27'),
(1226, 1226, 'Ut', 'Odio et expedita acc', 'Default', 'Default', 'Ad dolorum temporibu', 'Lorem debitis quo od', 'Dolorum aspernatur e', 'Default', '2021-04-10 08:29:43'),
(1227, 1227, 'Temporibus', 'Culpa laudantium au', 'Default', 'Default', 'Do deleniti culpa au', 'Tenetur officia aut', 'Commodo veniam sed', 'Default', '2021-04-10 08:40:01'),
(1228, 1228, 'Earum', 'Enim provident vel', 'Default', 'Default', 'Illum ullamco ut qu', 'Non cumque suscipit', 'Omnis sit anim offi', 'Default', '2021-04-10 08:41:16'),
(1229, 1229, 'Ex', 'Reprehenderit', 'Default', 'Default', 'Consequuntur nulla v', 'Perspiciatis aliqua', 'Temporibus corporis', 'Default', '2021-04-10 08:43:10'),
(5435, 5435, 'Reiciendis', 'Nulla tempor corrupt', 'Default', 'Default', 'Laborum amet ex ex', 'Ratione omnis offici', 'Unde quaerat volupta', 'Default', '2021-04-10 16:51:58'),
(6581, 6581, 'Repudiandae', 'Est et officiis quia', 'Default', 'Default', 'Tempora fuga Dolor', 'Blanditiis eu eum es', 'Voluptatem eveniet', 'Default', '2021-04-10 16:48:04'),
(6854, 6854, 'Aliqua', 'Ea molestias reicien', 'Default', 'Default', 'Elit exercitation c', 'Quis culpa et et qu', 'Aut sit eum officia', 'Default', '2021-04-10 16:50:18'),
(35481, 35481, 'Repudiandae', 'Et eos earum reicien', 'Default', 'Default', 'Et rerum quam conseq', 'Dolorem adipisci ut', 'Nulla facilis deleni', 'Default', '2021-04-10 17:13:47'),
(54531, 54531, 'Quia', 'Voluptas id quis rec', 'Default', 'Default', 'Debitis voluptas dol', 'Aut dolore aliquip c', 'Enim aute corporis v', 'Default', '2021-04-10 17:12:52'),
(321455681, 321455681, 'Englishfive', 'বিভাগ নাম (বাংলা)', 'Default', 'Default', 'নোট', 'রেকর্ড স্ট্যাটাস', 'রেকর্ড ভার্সন', 'Default', '2021-04-10 16:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `ada_listitem`
--

CREATE TABLE `ada_listitem` (
  `ListItemId` bigint(20) NOT NULL,
  `CodeListCode` bigint(20) UNSIGNED NOT NULL,
  `ListItemCode` bigint(20) UNSIGNED NOT NULL,
  `ListItemNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ListItemNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_listitem`
--

INSERT INTO `ada_listitem` (`ListItemId`, `CodeListCode`, `ListItemCode`, `ListItemNameEnglish`, `ListItemNameBangla`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(1, 1, 1, 'View', 'ভিউ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(2, 1, 2, 'Add', 'অ্যাড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(3, 1, 3, 'Edit', 'এডিট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:29'),
(4, 1, 4, 'Update', 'আপডেট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(5, 1, 5, 'Delete', 'ডিলিট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(6, 1, 6, 'Download', 'ডাউনলোড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(7, 1, 7, 'Print', 'প্রিন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(8, 2, 8, 'Active', 'একটিভ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(9, 2, 9, 'Inactive', 'ইন একটিভ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(10, 2, 10, 'Archived', 'আর্কাইভড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(11, 3, 11, 'Create', 'প্রণয়ন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(12, 3, 12, 'Draft', 'ড্রাফ্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(13, 3, 13, 'Update', 'হালনাগাদ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(14, 3, 14, 'Review', 'পুনর্বিচার', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(15, 3, 15, 'Audite', 'নিরীক্ষা', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(16, 3, 16, 'Approve', 'অনুমোদন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(17, 4, 17, 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(18, 4, 18, 'Menu - 1', 'মেনু - ১', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(19, 4, 19, 'Menu - 2', 'মেনু - ২', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(20, 4, 20, 'Menu - 3', 'মেনু - ৩', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(21, 4, 21, 'Menu - 4', 'মেনু - ৪', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(22, 4, 22, 'Menu - 5', 'মেনু - ৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(23, 4, 23, 'Menu - 6', 'মেনু - ৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:30'),
(24, 5, 24, 'CC', 'সিসি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(25, 5, 25, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(26, 5, 26, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(27, 5, 27, 'C', 'সি ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(28, 6, 28, 'All Type', 'সকল ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(29, 6, 29, 'Farmer', 'কৃষক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(30, 6, 30, 'SAAO', 'এসএএও', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(31, 6, 31, 'Management', 'ব্যবস্থাপকবৃন্দ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(32, 6, 32, 'Recipient - 1', 'গ্রহীতা -১', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(33, 6, 33, 'Recipient - 2', 'গ্রহীতা -২', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(34, 6, 34, 'Recipient - 3', 'গ্রহীতা -৩', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(35, 6, 35, 'Recipient - 4', 'গ্রহীতা -৪', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(36, 6, 36, 'Recipient - 5', 'গ্রহীতা -৫', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(37, 6, 37, 'Recipient - 6', 'গ্রহীতা -৬', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(38, 7, 38, 'Text Message', 'টেক্সট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(39, 7, 39, 'Audio Message', 'ওডিও মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(40, 7, 40, 'Text Feedback', 'টেক্সট  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(41, 7, 41, 'Audio  Feedback', 'ওডিও  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(42, 7, 42, 'SDP', 'এসডিপি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(43, 7, 43, 'SDP Feedback', 'এসডিপি  ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(44, 8, 44, 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(45, 8, 45, 'Weather & Climate Extreme', 'প্রাকৃতিক দুর্যোগ সম্পর্কিত তথ্য', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(46, 8, 46, 'Training, Awareness & Campaign', 'ট্রেনিং সম্পর্কিত তথ্য', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(47, 8, 47, 'Message', 'ম্যাসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(48, 8, 48, 'Feedback', 'ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(49, 8, 49, 'Information', 'ইনফরমেসন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(50, 8, 50, 'Weather Forecast', 'আবহাওয়া পূর্বাভাস', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:31'),
(51, 9, 51, 'Registration', 'রেজিস্ট্রেশন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(52, 9, 52, 'Text Message', 'টেক্সট মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(53, 9, 53, 'Audio Message', 'ওডিও মেসেজ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(54, 9, 54, 'Crop Management', 'ফসল রক্ষণাবেক্ষণ পরামর্শ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(55, 9, 55, 'Harsh Climate Event', 'ফিডব্যাক', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(56, 9, 56, 'Training awareness and compaign', 'হারশ ক্লাইমেট ইভেন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(57, 9, 57, 'Training awareness and compaign', 'ট্রেনিং এওয়ারনেস এন্ড ক্যাম্পেইন', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(58, 10, 58, 'All', 'সকল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(59, 10, 59, 'Draft', 'ড্রাফ্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(60, 10, 60, 'Attached', 'এটাচড', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(61, 10, 61, 'Sent', 'সেন্ট', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(62, 10, 62, 'Achieved', 'আর্কাইভড ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(63, 11, 63, 'Farmer Field', 'কৃষকের আঙ্গিনা', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(64, 11, 64, 'Office Training Room', 'অফিস ট্রেনিং রুম', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(65, 11, 65, 'All', 'সকল', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(66, 12, 66, 'little', 'কম', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(67, 12, 67, 'Approximate', 'মোটামুটি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(68, 12, 68, 'Good', 'ভালো', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:32'),
(69, 12, 69, 'Excellent', 'চমৎকার', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(70, 13, 70, 'Through profitable marketing of crops', 'ফসলের লাভজনক বিপণনের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(71, 13, 71, 'By preventing damage to crops and other assets', 'ফসলের এবং অন্যান্য সম্পদের ক্ষতি প্রতিরোধের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(72, 13, 72, 'Through the use of accurate agricultural products', 'সঠিক পরিমাপের কৃষি উপকরণ ব্যবহারের মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(73, 13, 73, 'By reducing the production cost of the crop', 'ফসলের উৎপাদন খরচ কমানোর মাধ্যমে', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(74, 14, 74, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(75, 14, 75, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(76, 14, 76, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(77, 14, 77, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:33'),
(78, 14, 78, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(79, 14, 79, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(80, 14, 80, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(81, 15, 81, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(82, 15, 82, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(83, 15, 83, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(84, 15, 84, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(85, 15, 85, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:34'),
(86, 15, 86, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(87, 15, 87, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(88, 16, 88, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(89, 16, 89, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(90, 16, 90, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(91, 16, 91, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(92, 16, 92, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(93, 16, 93, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(94, 16, 94, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(95, 17, 95, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(96, 17, 96, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(97, 17, 97, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(98, 17, 98, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(99, 17, 99, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(100, 17, 100, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(101, 17, 101, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:35'),
(102, 18, 102, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(103, 18, 103, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(104, 18, 104, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(105, 18, 105, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(106, 18, 106, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(107, 18, 107, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(108, 18, 108, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(109, 19, 109, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(110, 19, 110, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(111, 19, 111, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(112, 19, 112, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(113, 19, 113, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(114, 19, 114, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(115, 19, 115, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(116, 20, 116, 'A', 'এ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(117, 20, 117, 'B', 'বি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(118, 20, 118, 'C', 'সি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(119, 20, 119, 'D', 'ডি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(120, 20, 120, 'E', 'ই', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:36'),
(121, 20, 121, 'F', 'এফ', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:37'),
(122, 20, 122, 'G', 'জি', 'NOTE', 'ACTIVE', 'DRAFT', '01-10-01-001', '2020-05-24 10:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `ada_upazila`
--

CREATE TABLE `ada_upazila` (
  `UpazilaId` bigint(20) NOT NULL,
  `DivisionCode` bigint(20) UNSIGNED NOT NULL,
  `DistrictCode` bigint(20) UNSIGNED NOT NULL,
  `UpazilaCode` bigint(20) UNSIGNED NOT NULL,
  `UpazilaNameEnglish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpazilaNameBangla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpazilaImage1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpazilaImage2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RecordVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccessDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ada_upazila`
--

INSERT INTO `ada_upazila` (`UpazilaId`, `DivisionCode`, `DistrictCode`, `UpazilaCode`, `UpazilaNameEnglish`, `UpazilaNameBangla`, `UpazilaImage1`, `UpazilaImage2`, `Note`, `RecordStatus`, `RecordVersion`, `UserAccess`, `AccessDate`) VALUES
(23, 40, 41, 4, 'ABHAYAGAR', 'অভয়নগর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(1, 10, 4, 9, 'AMTALI', 'আমতলী ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(25, 40, 41, 11, 'CHAUGACHHA', 'চৌগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(2, 10, 4, 19, 'BAMA', 'বামনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(26, 40, 41, 23, 'JHIKARGACHHA', 'ঝিকরগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(14, 30, 93, 25, 'DHABARI', 'ধনবাড়ী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(3, 10, 4, 28, 'BARGUA SADAR', 'বরগুনা সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(11, 30, 93, 29, 'BASAIL', 'বাসাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(6, 30, 35, 32, 'GOPALGAJ SADAR', 'গোপালগঞ্জ সদর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(16, 30, 93, 38, 'GOPALPUR', 'গোপালপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(7, 30, 35, 43, 'KASHIAI', 'কাশিয়ানী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(4, 40, 41, 47, 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-24 10:51:24'),
(15, 30, 93, 48, 'GHATAIL', 'ঘাটাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(8, 30, 35, 51, 'KOTALIPARA', 'কোটালিপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(18, 30, 93, 57, 'MADHUPUR', 'মধুপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(9, 30, 35, 58, 'MUKSUDPUR', 'মুকসুদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(29, 40, 41, 61, 'MAIRAMPUR', 'মনিরামপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(19, 30, 93, 66, 'MIRZAPUR', 'মির্জাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(4, 10, 4, 67, 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-24 10:51:22'),
(20, 30, 93, 76, 'AGARPUR', 'নাগরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(24, 40, 41, 79, 'BAGHER PARA', 'বাঘারপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(5, 10, 4, 85, 'PATHARGHATA', 'তালতলী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:22'),
(21, 30, 93, 86, 'SAKHIPUR', 'সখীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(30, 40, 41, 90, 'SHARSHA', 'শার্শা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(10, 30, 35, 91, 'TUGIPARA', 'টুঙ্গিপাড়া', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-24 10:51:23'),
(22, 30, 93, 95, 'TAGAIL SADAR', 'টাঙ্গাইল সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(12, 30, 93, 119, 'BHUAPUR', 'ভূঞাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(13, 30, 93, 233, 'DELDUAR', 'দেলদুয়ার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:23'),
(301, 101, 201, 301, 'Upazila Test', 'Upazila Test', 'Default', 'Default', 'Note', 'Inctive', 'Draft', 'Default', '2020-05-29 12:33:51'),
(302, 101, 201, 302, 'Upazila Test 2', 'Upazila Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-30 00:34:43'),
(303, 101, 201, 303, 'Upazila Test 2', 'Upazila Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-30 00:35:08'),
(304, 101, 201, 304, 'Upazila Test 2', 'Upazila Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-31 00:44:39'),
(305, 101, 201, 305, 'Upazila Test 2', 'Upazila Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-31 00:54:46'),
(306, 101, 201, 306, 'Upazila Test 2', 'Upazila Test 2', 'Default', 'Default', 'Note', 'Inactive', 'Draft', 'Default', '2020-05-31 00:57:00'),
(27, 40, 41, 388, 'KESHABPUR', 'কেশবপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2020-05-24 10:51:24'),
(4, 30, 93, 477, 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-05-24 10:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_29_134014_create_ada_division_table', 1),
(5, '2020_04_29_135734_create_ada_district_table', 1),
(6, '2020_04_29_163123_create_ada_upazila_table', 1),
(7, '2020_04_29_163810_create_ada_area_type_table', 1),
(8, '2020_04_29_163828_create_ada_area_table', 1),
(9, '2020_04_29_163852_create_ada_codelist_table', 1),
(10, '2020_04_29_163918_create_ada_listitem_table', 1),
(15, '2021_06_28_162952_create_roles_table', 2),
(16, '2021_06_28_163010_create_permissions_table', 2),
(17, '2021_06_28_163130_create_permission_role_table', 2),
(18, '2021_06_28_163136_create_role_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `status`, `for`, `created_at`, `updated_at`) VALUES
(1, 'Access', 'access', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(2, 'Create', 'create', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(3, 'Update', 'update', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(4, 'Show', 'show', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(5, 'Delete', 'delete', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(6, 'Status Change', 'status-change', '1', 'admin', '2021-06-28 20:37:04', '2021-06-28 20:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '1', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(2, 'Admin', 'admin', '1', '2021-06-28 20:37:04', '2021-06-28 20:37:04'),
(3, 'Manager', 'manager', '1', '2021-06-28 20:37:05', '2021-06-28 20:37:05'),
(4, 'Accountant', 'accountant', '1', '2021-06-28 20:37:05', '2021-06-28 20:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ApiUser', 'api_user@email.com', NULL, '$2y$10$fbk3dOE5eC2XFrq146NlVuE5.RXHAJdp/d0lJatrD2RzssuX5MyJ6', NULL, '2021-06-04 11:47:40', '2021-06-04 11:47:40'),
(2, 'rabbi', 'user@mail.com', NULL, '$2y$10$LCOYBos.emks3xyBwaJj9OA6Qqo3x9pyL3bsmw4dxEotUzLOTD9sS', NULL, '2021-06-04 22:44:47', '2021-06-04 22:44:47'),
(3, 'User 1', 'user1@g.com', NULL, '$2y$10$MT4ylGsttMJ0kQIlwC5h9uTLPOa4lAkC81DQl59p02j0n/45D//bK', NULL, '2021-06-05 11:15:16', '2021-06-05 11:15:16'),
(6, 'Rabbi', 'rabbi@g.com', NULL, '$2y$10$VYo3IRDUmfJfSYkAsaqRduh6gLNxGvi/O7MXf0lOrhVmmO66d8XHy', NULL, '2021-06-28 20:38:14', '2021-06-28 20:38:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ada_area`
--
ALTER TABLE `ada_area`
  ADD PRIMARY KEY (`AreaCode`),
  ADD KEY `ada_area_divisioncode_foreign` (`DivisionCode`),
  ADD KEY `ada_area_districtcode_foreign` (`DistrictCode`),
  ADD KEY `ada_area_upazilacode_foreign` (`UpazilaCode`),
  ADD KEY `ada_area_areatypecode_foreign` (`AreaTypeCode`);

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
  ADD PRIMARY KEY (`DistrictCode`),
  ADD KEY `ada_district_divisioncode_foreign` (`DivisionCode`);

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
  ADD KEY `ada_listitem_codelistcode_foreign` (`CodeListCode`);

--
-- Indexes for table `ada_upazila`
--
ALTER TABLE `ada_upazila`
  ADD PRIMARY KEY (`UpazilaCode`),
  ADD KEY `ada_upazila_divisioncode_foreign` (`DivisionCode`),
  ADD KEY `ada_upazila_districtcode_foreign` (`DistrictCode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ada_area`
--
ALTER TABLE `ada_area`
  ADD CONSTRAINT `ada_area_areatypecode_foreign` FOREIGN KEY (`AreaTypeCode`) REFERENCES `ada_area_type` (`AreaTypeCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ada_area_districtcode_foreign` FOREIGN KEY (`DistrictCode`) REFERENCES `ada_district` (`DistrictCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ada_area_divisioncode_foreign` FOREIGN KEY (`DivisionCode`) REFERENCES `ada_division` (`DivisionCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ada_area_upazilacode_foreign` FOREIGN KEY (`UpazilaCode`) REFERENCES `ada_upazila` (`UpazilaCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_district`
--
ALTER TABLE `ada_district`
  ADD CONSTRAINT `ada_district_divisioncode_foreign` FOREIGN KEY (`DivisionCode`) REFERENCES `ada_division` (`DivisionCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_listitem`
--
ALTER TABLE `ada_listitem`
  ADD CONSTRAINT `ada_listitem_codelistcode_foreign` FOREIGN KEY (`CodeListCode`) REFERENCES `ada_codelist` (`CodeListCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ada_upazila`
--
ALTER TABLE `ada_upazila`
  ADD CONSTRAINT `ada_upazila_districtcode_foreign` FOREIGN KEY (`DistrictCode`) REFERENCES `ada_district` (`DistrictCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ada_upazila_divisioncode_foreign` FOREIGN KEY (`DivisionCode`) REFERENCES `ada_division` (`DivisionCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
