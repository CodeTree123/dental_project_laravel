-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 01:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `chife_complaint`
--

CREATE TABLE `chife_complaint` (
  `ID` int(50) NOT NULL,
  `C/C` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chife_complaint`
--

INSERT INTO `chife_complaint` (`ID`, `C/C`) VALUES
(1, 'Bad breath'),
(2, 'Bad smell'),
(3, 'Bleeding gum'),
(4, 'Broken filling'),
(5, 'Burning sensation'),
(6, 'Decayed tooth'),
(7, 'Dental checkup'),
(8, 'Dental decay'),
(9, 'Deposits in the teeth'),
(10, 'Discomfort'),
(11, 'Facial swelling'),
(12, 'Food impaction'),
(13, 'Forwardly placed front teeth'),
(14, 'Gum discoloration'),
(15, 'Gum enlargement'),
(16, 'Implant placement'),
(17, 'Intra-oral swelling'),
(18, 'Irregularly placed front teeth'),
(19, 'Missing tooth/teeth'),
(20, 'Mobile tooth'),
(21, 'Oral ulcer'),
(22, 'Pain'),
(23, 'Pain in the gum'),
(24, 'Routine check-up'),
(25, 'Sensitivity'),
(26, 'Swollen gum'),
(27, 'Temporomandibular joint disorder'),
(28, 'To improve the aesthetics of my teeth'),
(29, 'Tooth cleaning'),
(30, 'Tooth filling'),
(31, 'Tooth malaignment'),
(32, 'Tooth sensitivity'),
(33, 'Tooth whitening'),
(34, 'Toothache'),
(35, 'Unerupted upper fornt teeth'),
(36, 'Want to clean the teeth'),
(37, 'Want to fill the decayed tooth'),
(38, 'Want to replace the missing tooth'),
(39, 'Want to wear clip'),
(40, 'Wants to remove the tooth');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `ID` int(50) NOT NULL,
  `C/F` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`ID`, `C/F`) VALUES
(1, 'Abrassion'),
(2, 'Abscess'),
(3, 'Aesthetic'),
(4, 'Alveolar Bone Loss'),
(5, 'Apexification'),
(6, 'Apexogenesis'),
(7, 'Apical Abscess/Infection'),
(8, 'Attrition,Abrasion,Erosion'),
(9, 'Avulsed Tooth/Teeth'),
(10, 'Avulsion'),
(11, 'BDC'),
(12, 'BDR'),
(13, 'Biunderbass Canal'),
(14, 'Calculas With Gingibitis and Stain'),
(15, 'Caries'),
(16, 'Complete Endentulousness'),
(17, 'Cracked Tooth Syndrome'),
(18, 'Cyst'),
(19, 'Discharging Buccal Sinus'),
(20, 'Elective'),
(21, 'Fracutured Tooth/Root'),
(22, 'Grossly Carious Tooth'),
(23, 'Impaction'),
(24, 'Intra/Extra Oral Swelling'),
(25, 'Malalignment'),
(26, 'Missing Teeth'),
(27, 'Mobility'),
(28, 'MOD Caries'),
(29, 'Partial Edentuous'),
(30, 'Perforation Repair'),
(31, 'Pericoronitis'),
(32, 'Pwridontal Abscess'),
(33, 'Periodontitis'),
(34, 'Peri-radicular Pathosis'),
(35, 'Plaque, Calculus, Stain'),
(36, 'Pulp Polyp'),
(37, 'Pulpitis'),
(38, 'Restoration of Endodontically Treated Tooth'),
(39, 'Retained Deciduous'),
(40, 'Retained Primary Tooth'),
(41, 'Retainer'),
(42, 'Sealer'),
(43, 'Sensitivity'),
(44, 'Severe Mobility'),
(45, 'Spacing/Crowding');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_plans`
--

CREATE TABLE `treatment_plans` (
  `ID` int(50) NOT NULL,
  `T/P` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_plans`
--

INSERT INTO `treatment_plans` (`ID`, `T/P`) VALUES
(1, 'Restoration'),
(2, 'Pulpectomy'),
(3, 'Pulpotomy'),
(4, 'Extraction'),
(5, 'Operculectomy'),
(6, 'Abscess Drainage'),
(7, 'Cyst Enucleation'),
(8, 'Polishing'),
(9, 'Curettage with Scaler'),
(10, 'Scaling'),
(11, 'Apisectomy'),
(12, 'Abscess Drainage'),
(13, 'Orthodontic Tratment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chife_complaint`
--
ALTER TABLE `chife_complaint`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chife_complaint`
--
ALTER TABLE `chife_complaint`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `treatment_plans`
--
ALTER TABLE `treatment_plans`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
