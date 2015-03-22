-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 01:46 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp7_prog_web`
--
CREATE DATABASE IF NOT EXISTS `tp7_prog_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tp7_prog_web`;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `Etudiant_ID` int(12) NOT NULL AUTO_INCREMENT COMMENT 'Identifiaction De L''Etudiant',
  `Matricule` varchar(23) NOT NULL COMMENT 'Matricule De L''Etudiant',
  `Nom` varchar(33) NOT NULL COMMENT 'Nom De L''Etudiant',
  `Prenom` varchar(33) NOT NULL COMMENT 'Prenom De L''Etudiant',
  `Telephone` varchar(77) NOT NULL DEFAULT 'Indisponible',
  `Email` varchar(77) NOT NULL DEFAULT 'Indisponible',
  `Promotion` varchar(12) NOT NULL DEFAULT '2016' COMMENT 'Promotion De L''Etudiant',
  `Presentation` varchar(500) NOT NULL DEFAULT 'Aucune Presentation' COMMENT 'Presentation(Description) De L''Etudiant',
  `CV` varchar(122) NOT NULL COMMENT 'Liens vers le CV De L''Etudiant',
  `Photo` varchar(122) NOT NULL COMMENT 'Nom Du Fichier Photo De L''Etudiant',
  `Social` varchar(132) NOT NULL COMMENT 'Liencs vers social media',
  `Espace` varchar(132) NOT NULL COMMENT 'Liens vers l''espace de l''etudiant sur polytechnique.cm',
  PRIMARY KEY (`Etudiant_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`Etudiant_ID`, `Matricule`, `Nom`, `Prenom`, `Telephone`, `Email`, `Promotion`, `Presentation`, `CV`, `Photo`, `Social`, `Espace`) VALUES
(1, '11P001', 'FODOUP KAMDEM', 'Christian', '+237678132186', 'fodoup@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p001', 'fodoup.png', 'www.facebook.com/fodoup', 'www.polytechnique.cm/espace_etudiant/11p001'),
(2, '11P002', 'DJIEUFACK TSAMBANG', 'Laryce Murelle', '+237678081008/+237676100722', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p002', 'djieufack.png', 'www.facebook.com/djieufack', 'www.polytechnique.cm/espace_etudiant/11p002'),
(3, '11P003', 'TEGUIA TABUGUIA', 'Bertrand', '+237676915434', 'btegus@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p003', 'teguia.png', 'www.facebook.com/teguia', 'www.polytechnique.cm/espace_etudiant/11p003'),
(4, '11P004', 'GBOUZABO', 'Nathan', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p004', 'default.png', 'www.facebook.com/gbouzabo', 'www.polytechnique.cm/espace_etudiant/11p004'),
(5, '11P005', 'NGOM YEM', 'Christian', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p005', 'ngom.png', 'www.facebook.com/ngom', 'www.polytechnique.cm/espace_etudiant/11p005'),
(6, '11P006', 'AMIR', 'Amadou', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p006', 'default.png', 'www.facebook.com/amir', 'www.poytechnique.cm/espace_etudiant/11p006'),
(7, '11P007', 'Kuitchee', 'Esaie', '+237694190712', 'esaiekuitche@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p007', 'kuitche.png', 'www.facebook.com/kuitche', 'www.polytechnique.cm/espace_etudiant/11p007'),
(8, '11P008', 'NDONNA', 'Yacynth Bolan', '+237678470942', 'yacinth@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/', 'ndonna.png', 'www.facebook.com', 'www.polytechnique.cm/espace_etudiant'),
(9, '11P009', 'TONYE LISSOUCK', 'Pierre Nicholas Eric', '+237679103986', 'erictonyelissouck@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p009', 'tonye.png', 'www.facebook.com/tonye', 'www.polytechnique.cm/espace_etudiant/11p009'),
(10, '11P010', 'TADZOTSA TIOMELA', 'Hyacinthe', '+237690313959/+237670713973', 'hyacinthetadzotsa@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/', 'tadzotsa.png', 'www.facebook.com', 'www.polytechnique.cm/espace_etudiant'),
(11, '11P011', 'TELLA', 'Duplex Rostand', '+237676172155', 'rostanttella@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p011', 'mbock.png', 'www.facebook.com/tella', 'www.polytechnique.cm/espace_etudiant/11p011'),
(12, '11P012', 'KENFACK', 'Patrick Raoul', '+237698085075', 'kenfackpatricraoul@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p012', 'default.png', 'www.facebook.com/kenfack', 'www.polytechnique.cm/espace_etudiant/11p012'),
(13, '11P013', 'ABDOU RAMANOU', 'Madi', '+237671956125/+237697834056', 'madiabdou73@yahoo.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p013', 'abdou.png', 'www.facebook.com/abdou', 'www.polytechnique.cm/espace_etudiant/11p013'),
(14, '11p014', 'DOGMO NGUEPI', 'Joel Sinclair', '+237696726409', 'joelsinclair2001@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p014', 'dogmo.png', 'www.facebook.com/dogmo', 'www.polytechnique.cm/espace_etudiant/11p014'),
(15, '11P015', 'NGNAWE', 'Jonas', '+237670182246', 'ngnawejonas@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p015', 'ngnawe.png', 'www.facebook.com/ngnawe', 'www.polytechnique.cm/espace_etudiant/11p013'),
(16, '11P016', 'TABUE', 'Romeo', '+237690260770', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p016', 'tabue.png', 'www.facebook.com/tabue', 'www.polytechnique.cm/espace_etudiant/11p016'),
(17, '11P017', 'FEUYAN CHUO', 'Audric Caudin', '+237694827637', 'audricfeuyan@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p017', 'feuyan.png', 'www.facebook.com/feuyan', 'www.polytechnique.cm/espace_etudiant/11p017'),
(18, '11P018', 'WAPET', 'Patrick Lavoisier', '+237676662357/+237699756942', 'lwapet@yahoo.ca', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p018', 'default.png', 'www.facebook.com/wapet', 'www.polytechnique.cm/espace_etudiant/11p018'),
(19, '11P248', 'ZAFACK', 'Billy Ruffin', '+237670878666', 'billyrzafack@yahoo.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/zafack', 'zafack.png', 'www.facebook.com/zafack', 'www.polytechnique.cm/espace_etudiant/11p248'),
(20, '11P020', 'TOMFEU BONDJA', 'Peres Latri', '+237670124221', 'ptomfeu@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p020', 'default.png', 'www.facebook.com/tomfeu', 'www.polytechnique.cm/espace_etudiant/11p020/'),
(21, '11P021', 'TANGHA', '', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p021', 'tangha.png', 'www.facebook.com/tangha', 'www.polytechnique.cm/espace_etudiant/11p021/'),
(22, '11P022', 'HATMANN', 'Ulrich', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p022', 'default.png', 'www.facebook.com/ulrich', 'www.polytechnique.cm/espace_etudiant/11p022/'),
(23, '11P023', 'OLONGO', 'Jefferson', 'Indisponible', 'Indisponible', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p023', 'default.png', 'www.facebook.com/olongo', 'www.polytechnique.cm/espace_etudiant/11p023'),
(24, '11P036', 'MBOCK BASSEG', 'Arnie Franck', '+237693528053', 'frankmbock@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p036', 'mbock.png', 'www.facebook.com/mbock', 'www.polytechnique.cm/espace_etudiant/11p036'),
(25, '11P024', 'TUENO FOTSO', 'Steve Jeffrey', '+237676571728', 'stuenofotso@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p024', 'default.png', 'www.facebook.com/', 'www.polytechnique.cm/espace_etudiant/11p024'),
(26, '11P025', 'DOGMEKANG KASSAP', 'Joel', '+237670530812', 'guijoe20.10@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p025', 'default.png', 'www.facebook.com/', 'www.polytechnique.cm/espace_etudiant/22p025'),
(27, '11P026', 'MOUAFFO KENFACK', 'Reine Vanessa', '+237675596184/+237698538458', 'reinemouaffo@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p026', 'mouaffo.png', 'www.facebook.com/', 'www.polytechnique.cm/espace_etudiant/11p026'),
(28, '11P027', 'TEGANTCHOUANG TEUKAP', 'Gael Boris', '+237676406253', 'teukapmaths@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p027', 'tegantchouang.png', 'www.facebook.com/tegantchouang', 'www.polytechnique.cm/espace_etudiant/11p027'),
(29, '11P028', 'TINDJOU TATODJI', 'Stephane', '+237699699247/+237673896613', 'tatodjistephane@yahoo.fr/stephanetatodji@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/tindjou/11p028', 'default.png', 'www.facebook.com/tindjou', 'www.polytechnique.cm/espace_etudiant/11p028'),
(30, '11P029', 'FOMEKONG TEKATSOP', 'Evaris', '+237678181114/+237695547656', 'evarisfomekong@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p029', 'fomekong.png', 'www.facebook.com/fomekong', 'www.polytechnique.cm/espace_etudiant/11p029'),
(31, '11P030', 'NANDA SIME', 'Claude Edward', '+237696870700', 'nscedward@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p030', 'nanda.png', 'www.facebook.com/nanda', 'www.polytechnique.cm/espace_etudiant/11p030'),
(32, '11P031', 'NFOTABONG ', 'Franck Quentin', '+237694823859', 'franckquentinnfotabong@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p031', 'default.png', 'www.facebook.com/nfotabong', 'www.polytechnique.cm/espace_etudiant/'),
(33, '11P032', 'DJOUONSTE', 'Alex Joresse', '+237676627826/+237690680828', 'djouontse_alex16@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p032', 'djouonste.png', 'www.facebook.com/djouonste', 'www.polytechnique.cm/espace_etudiant/11p032'),
(34, '11P033', 'NZIATCHA NOUWEDOUI', 'Aurelien', '+237695829860/+237673820051', 'aureliennziatcha@yahoo.fr', '2016', 'Aucune Presentation', 'www.polytechnique.com/cv/11p033', 'nziatcha.png', 'www.facebook.com/nziatcha', 'www.polytechnique.com/espace_etudiant/11p033'),
(35, '11P034', 'ATIBITA', 'Jonas Adrien', 'adrienweb@yahoo.fr', '+237695829860/+237673820051', '2016', 'Aucune Presentation', 'www.polytechnique.com/cv/11p034', 'atibita.png', 'www.facebook.com/atibita', 'www.polytechnique.com/espace_etudiant/11p034'),
(36, '11P035', 'JIEUCHIEU', 'Kameni Florentin', '+237674501865', 'jkflorex@gmail.com', '2016', 'Aucune Presentation', 'www.polytechnique.cm/cv/11p035', 'default.png', 'www.facebook.com/jieuchieu', 'www.polytechnique.cm/espace_etudiant/11p035');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
