-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2014 at 08:43 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp4_prog_web`
--
CREATE DATABASE IF NOT EXISTS `tp4_prog_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tp4_prog_web`;

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `Departement_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant De Department',
  `Nom_Departement` varchar(55) NOT NULL COMMENT 'Nom Du Departement',
  `Chef_Department` varchar(33) DEFAULT NULL COMMENT 'Chef De Departement',
  PRIMARY KEY (`Departement_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`Departement_ID`, `Nom_Departement`, `Chef_Department`) VALUES
(1, 'Informatique', 'Pr. BOUETOU BOUETOU Thomas'),
(2, 'Genie Civile Et Urbanisme', 'Jean GCU'),
(3, 'Genie Electrique et Telecommunications', 'Jean GEL'),
(4, 'Genie Mecanique et Industrielle', 'Jean GM'),
(5, 'Mathematiques et Sciences Physiques', 'Pr. Jean GWET ');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `Etudiant_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant De L''Etudiant',
  `Matricule_Etudiant` varchar(11) NOT NULL,
  `Nom_Etudiant` varchar(22) NOT NULL COMMENT 'Nom De L''Etudiant',
  `Prenom_Etudiant` varchar(22) NOT NULL COMMENT 'Prenom De L''Etudiant',
  `Promotion_ID` int(11) NOT NULL,
  `Departement_ID` int(11) NOT NULL,
  `Photo` varchar(22) NOT NULL COMMENT 'Photo De L''Etudiant',
  `Description` varchar(400) NOT NULL,
  PRIMARY KEY (`Etudiant_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`Etudiant_ID`, `Matricule_Etudiant`, `Nom_Etudiant`, `Prenom_Etudiant`, `Promotion_ID`, `Departement_ID`, `Photo`, `Description`) VALUES
(1, '0', 'Feuyan', 'Audric', 1, 1, 'feuyan.jpg', 'Un esprit dynamique, feroce et pouvant s''adapter a tout environement de travail. M. Feuyan est un homme avec un future assuree.'),
(2, '0', 'Ndonna', 'Yacynth', 1, 1, 'ndonna.jpg', 'Le GSA De l''ENSP M. a fait ses preuves en representant l''ENSP a Accra en Aout 2015'),
(3, '11', 'Akamba', 'Jean', 2, 1, 'Akamba.jpg', ''),
(4, '12', 'Bayoi', 'Michel', 2, 1, 'bayoi.jpg', ''),
(5, '12P212', 'Billang', 'Alex', 2, 2, 'billang.jpg', ''),
(6, '12P543', 'Binelli', 'Mark', 2, 2, 'binelli.jpg', ''),
(7, '12P333', 'Djouaka', 'Kinfack', 2, 3, 'djouaka.jpg', ''),
(8, '10P433', 'Djoubissie', 'Olama', 2, 3, 'djoubissie.jpg', ''),
(10, '11P434', 'Djouonste', 'Alex', 1, 1, 'DJOUONTSE.JPG', 'Salaud, Aime les beignets haricots, aime deranger, aime Tioukou Tioukou.'),
(11, '11P231', 'Fomekong', 'Foris', 1, 3, 'fomekong.jpg', 'Noyeur, Generateur D''idee, Deployeur au CIMI, Puissant.'),
(12, '11P324', 'Nanda', 'Edward', 1, 2, 'nanda.jpg', 'Franc parleur, bon codeur front end.'),
(13, '11P222', 'Nziatcha', 'Aurelien', 1, 4, 'nziatcha.jpg', 'Drole !'),
(14, '11P245', 'Ngnawe', 'Jonas', 1, 5, 'ngnawe.png', 'Gentil');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `Promotion_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificateur de Promotion',
  `Nom_Promotion` varchar(50) NOT NULL COMMENT 'Nom De La Promotion',
  `Chef_De_Promotion` varchar(30) DEFAULT NULL COMMENT 'Chef De La Promotion',
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`Promotion_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`Promotion_ID`, `Nom_Promotion`, `Chef_De_Promotion`, `Description`) VALUES
(1, '2016', 'Tchamani Moise', ''),
(2, '2017', 'Jean Doe', ''),
(3, '2018', 'TTT', '                                                \r\n                                    A N BBDFDF        ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
