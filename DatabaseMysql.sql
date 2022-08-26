-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2022 at 03:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cvsystem`
--
CREATE DATABASE `cvsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cvsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `directory` varchar(5000) NOT NULL,
  `filename` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `uid`, `type`, `directory`, `filename`) VALUES
(20, 1, 'pdf', '../userasset/1/certpdf/ACT3-SIGANAY-EUNICE-D..pdf', 'ACT3-SIGANAY-EUNICE-D..pdf'),
(23, 1, 'img', '../userasset/1/certimage/editable-certificate-template-f4c8c7303c1ba2f677c987d55cdfb971_screen.jpg', 'editable-certificate-template-f4c8c7303c1ba2f677c987d55cdfb971_screen.jpg'),
(24, 1, 'pdf', '../userasset/1/certpdf/addressing.pdf', 'addressing.pdf'),
(26, 2, 'img', '../userasset/2/certimage/editable-certificate-template-f4c8c7303c1ba2f677c987d55cdfb971_screen.jpg', 'editable-certificate-template-f4c8c7303c1ba2f677c987d55cdfb971_screen.jpg'),
(32, 20, 'pdf', '../userasset/20/certpdf/Paderes-Arachellanie-B.-ASSESSMENTS.pdf', 'Paderes-Arachellanie-B.-ASSESSMENTS.pdf'),
(33, 20, 'img', '../userasset/20/certimage/2x2 Nieve.jpg', '2x2 Nieve.jpg'),
(34, 2, 'pdf', '../userasset/2/certpdf/ACT%231 - NIEVE, JOSHUA H.pdf', 'ACT#1 - NIEVE, JOSHUA H.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `college`) VALUES
(1, 'College of Accountancy and Finance (CAF)'),
(2, 'College of Architecture, Design and the Built Environment (CADBE, formerly the College of Architecture and Fine Arts)'),
(3, 'College of Arts and Letters (CAL)'),
(4, 'College of Business Administration (CBA)'),
(5, 'College of Communication (COC)'),
(6, 'College of Computer and Information Sciences (CCIS)'),
(7, 'College of Education (COED)'),
(8, 'College of Engineering (CE)'),
(9, 'College of Human Kinetics (CHK)'),
(10, 'College of Law (CL)'),
(11, 'College of Political Science and Public Administration (CPSPA)'),
(12, 'College of Social Sciences and Development (CSSD)'),
(13, 'College of Science (CS)'),
(14, 'College of Tourism, Hospitality and Transportation Management (CTHTM)'),
(15, 'Institue of Technology');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `college`, `course`) VALUES
(9, 'College of Accountancy and Finance (CAF)', 'Bachelor of Science in Accountancy (BSA)'),
(10, 'College of Accountancy and Finance (CAF)', 'Bachelor of Science in Management Accounting (BSMA)'),
(11, 'College of Accountancy and Finance (CAF)', 'Bachelor of Science in Business Administration Major in Financial Management (BSBAFM)'),
(12, 'College of Architecture, Design and the Built Environment (CADBE, formerly the College of Architecture and Fine Arts)', 'Bachelor of Science in Architecture (BS-ARCHI)'),
(13, 'College of Architecture, Design and the Built Environment (CADBE, formerly the College of Architecture and Fine Arts)', 'Bachelor of Science in Interior Design (BSID)'),
(14, 'College of Arts and Letters (CAL)', 'Bachelor of Arts in English Language Studies (formerly Bachelor of Arts in English) (ABELS)'),
(15, 'College of Arts and Letters (CAL)', 'Bachelor of Arts in Filipinology (ABF)'),
(16, 'College of Arts and Letters (CAL)', 'Bachelor of Arts in Literary and Cultural Studies (ABLCS)'),
(17, 'College of Arts and Letters (CAL)', 'Bachelor of Arts in Philosophy (AB-PHILO)'),
(18, 'College of Arts and Letters (CAL)', 'Bachelor of Performing Arts major in Theater Arts (formerly BA Theater Arts) (BPEA)'),
(19, 'College of Business Administration (CBA)', 'Doctor in Business Administration (DBA)'),
(20, 'College of Business Administration (CBA)', 'Master in Business Administration (MBA)'),
(21, 'College of Business Administration (CBA)', 'Bachelor of Science in Business Administration major in Human Resource Management (formerly Bachelor of Science in Human Resource Development Management) (BSBAHRM)'),
(22, 'College of Business Administration (CBA)', 'Bachelor of Science in Business Administration major in Marketing Management (BSBA-MM)'),
(23, 'College of Business Administration (CBA)', 'Bachelor of Science in Entrepreneurship (BSENTREP)'),
(24, 'College of Business Administration (CBA)', 'Bachelor of Science in Office Administration (BSOA)'),
(25, 'College of Communication (COC)', 'Bachelor in Advertising and Public Relations (BADPR)'),
(26, 'College of Communication (COC)', 'Bachelor of Arts in Broadcasting (BA Broadcasting)'),
(27, 'College of Communication (COC)', 'Bachelor of Arts in Communication Research (BACR)'),
(28, 'College of Communication (COC)', 'Bachelor of Arts in Journalism (BAJ)'),
(29, 'College of Computer and Information Sciences (CCIS)', 'Bachelor of Science in Computer Science (BSCS)'),
(30, 'College of Computer and Information Sciences (CCIS)', 'Bachelor of Science in Information Technology (BSIT)'),
(31, 'College of Education (COED)', 'Doctor in Educational Management'),
(32, 'College of Education (COED)', 'Master in Business Education'),
(33, 'College of Education (COED)', 'Master in Educational Management'),
(34, 'College of Education (COED)', 'Master in Library and Information Science'),
(35, 'College of Education (COED)', 'Master in Physical Education and Sports'),
(36, 'College of Education (COED)', 'Master of Arts in Education major in Teaching in the Challenged Areas (MAED-TCA)'),
(37, 'College of Education (COED)', 'Master of Arts in English Language Teaching'),
(38, 'College of Education (COED)', 'Master of Science in Mathematics Education'),
(39, 'College of Education (COED)', 'Post Baccalaureate Diploma in Alternative Learning System (PB-DALS)'),
(40, 'College of Education (COED)', 'Post Baccalaureate in Teacher Education'),
(41, 'College of Education (COED)', 'Bachelor in Elementary Education (BEED)'),
(42, 'College of Education (COED)', 'Bachelor in Library and Information Science (BLIS)'),
(43, 'College of Education (COED)', 'Bachelor of Technology and Livelihood Education (BTLED) majors in Home Economics, Industrial Arts and ICT'),
(44, 'College of Education (COED)', 'Bachelor of Early Childhood Education (BECED)'),
(45, 'College of Education (COED)', 'Bachelor of Secondary Education major in English (BSEDEN)'),
(46, 'College of Education (COED)', 'Bachelor of Secondary Education major in Filipino (BSEDFL)'),
(47, 'College of Education (COED)', 'Bachelor of Secondary Education major in Mathematics (BSEDMT)'),
(48, 'College of Education (COED)', 'Bachelor of Secondary Education major in Science (BSEDSC)'),
(49, 'College of Education (COED)', 'Bachelor of Secondary Education major in Social Studies (BSEDSS)'),
(50, 'College of Education (COED)', 'Bachelor of Technical Vocational Education major in Food Service Management (BTVEDFSM)'),
(51, 'College of Engineering (CE)', 'Bachelor of Science in Civil Engineering (BSCE)'),
(52, 'College of Engineering (CE)', 'Bachelor of Science in Computer Engineering (BSCpE)'),
(53, 'College of Engineering (CE)', 'Bachelor of Science in Electrical Engineering (BSEE)'),
(54, 'College of Engineering (CE)', 'Bachelor of Science in Electronics Engineering (BSECE)'),
(55, 'College of Engineering (CE)', 'Bachelor of Science in Industrial Engineering (BSIE)'),
(56, 'College of Engineering (CE)', 'Bachelor of Science in Mechanical Engineering (BSME)'),
(57, 'College of Engineering (CE)', 'Bachelor of Science in Railway Engineering (formerly Bachelor of Science in Railway Engineering and Management) (BSRE)'),
(58, 'College of Human Kinetics (CHK)', 'Bachelor of Physical Education (BPE)'),
(59, 'College of Human Kinetics (CHK)', 'Bachelor of Science in Exercises and Sports (BSESS)'),
(60, 'College of Law (CL)', 'Juris Doctor (JD)'),
(61, 'College of Political Science and Public Administration (CPSPA)', 'Bachelor of Public Administration (BPA)'),
(62, 'College of Political Science and Public Administration (CPSPA)', 'Bachelor of Arts in International Studies (BAIS)'),
(63, 'College of Political Science and Public Administration (CPSPA)', 'Bachelor of Arts in Political Economy (BAPE)'),
(64, 'College of Political Science and Public Administration (CPSPA)', 'Bachelor of Arts in Political Science (formerly Bachelor in Political Science) (BAPS)'),
(65, 'College of Social Sciences and Development (CSSD)', 'Bachelor of Arts in History (BAH)'),
(66, 'College of Social Sciences and Development (CSSD)', 'Bachelor of Arts in Sociology (formerly Bachelor of Science in Sociology) (BAS)'),
(67, 'College of Social Sciences and Development (CSSD)', 'Bachelor of Science in Cooperatives (formerly Bachelor in Cooperatives) (BSC)'),
(68, 'College of Social Sciences and Development (CSSD)', 'Bachelor of Science in Economics (BSE)'),
(69, 'College of Social Sciences and Development (CSSD)', 'Bachelor of Science in Psychology (BSPSY)'),
(70, 'College of Science (CS)', 'Bachelor of Science Food Technology (BSFT)'),
(71, 'College of Science (CS)', 'Bachelor of Science in Applied Mathematics (BSAPMATH)'),
(72, 'College of Science (CS)', 'Bachelor of Science in Biology (BSBIO)'),
(73, 'College of Science (CS)', 'Bachelor of Science in Chemistry (BSCHEM)'),
(74, 'College of Science (CS)', 'Bachelor of Science in Mathematics (BSMATH)'),
(75, 'College of Science (CS)', 'Bachelor of Science in Nutrition and Dietetics (BSND)'),
(76, 'College of Science (CS)', 'Bachelor of Science in Physics (BSPHY)'),
(77, 'College of Science (CS)', 'Bachelor of Science in Statistics (formerly Bachelor in Applied Statistics) (BSSTAT)'),
(78, 'College of Tourism, Hospitality and Transportation Management (CTHTM)', 'Bachelor of Science in Hospitality Management (BSHM)'),
(79, 'College of Tourism, Hospitality and Transportation Management (CTHTM)', 'Bachelor of Science in Tourism Management (BSTM)'),
(80, 'College of Tourism, Hospitality and Transportation Management (CTHTM)', 'Bachelor of Science in Transportation Management (formerly Bachelor in Transportation Management) (BSTRM)'),
(81, 'Institue of Technology', 'Diploma in Civil Engineering Technology (DCvET)'),
(82, 'Institue of Technology', 'Diploma in Computer Engineering Technology (DCET)'),
(83, 'Institue of Technology', 'Diploma in Electrical Engineering Technology (DEET)'),
(84, 'Institue of Technology', 'Diploma in Electronics Engineering Technology (DECET)'),
(85, 'Institue of Technology', 'Diploma in Information Communication Technology (DICT)'),
(86, 'Institue of Technology', 'Diploma in Mechanical Engineering Technology (DMET)'),
(87, 'Institue of Technology', 'Diploma in Office Management Technology (DOMT)'),
(88, 'Institue of Technology', 'Diploma in Railway Engineering Technology (DRET)');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `courselevel` varchar(100) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `uid`, `courselevel`, `schoolname`, `country`, `year`) VALUES
(1, 1, 'Primary Education', 'Sabaw Sabaw Elementary School', 'Philippines', '2018-2019'),
(2, 1, 'Secondary Education', 'Sabaw Sabaw Elementary School', 'Philippines', '2019-2020'),
(3, 1, 'BS in Computer Engineering', 'Sabaw Sabaw College', 'Philippines', '2020-2021'),
(4, 1, 'Masters in Computer Engineering', 'Sabaw Sabaw College', 'Philippines', '2021-2022'),
(5, 2, 'Primary Education', 'H. Bautista Elementary School', 'Philippines', '2006-2012'),
(6, 2, 'Secondary Education', 'Parang HIgh School', 'Philippines', '2012-2018'),
(7, 2, 'BS in Computer Engineering', 'Polytechnic University of the Philippines', 'Philippines', '2018-present'),
(8, 3, 'Primary Education', 'Sabaw Sabaw Elementary School', 'Dubai', '2006-2012'),
(9, 3, '3', 'High na HIgh School', 'Philippines', '2012-2018'),
(10, 3, 'BS in Computer Engineering', 'Polytechnic University of the Philippines', 'Philippines', '2018-2022'),
(11, 4, 'Primary Education', 'International School Manila', 'Philippines', '2006-2012'),
(12, 4, 'Secondary Education', 'Ateneo de Manila Univeristy', 'Philippines', '2012-2018'),
(13, 4, 'BS in Computer Engineering', 'La Salle Green Hills', 'Philippines', '2018-2020'),
(14, 4, 'Masters in Computer Engineering', 'University of Oxford', 'Oxford', '2020-2021'),
(15, 4, 'Doctorate in Computer Engineering', 'Stanford University', 'California', '2021-2022'),
(16, 5, 'Primary Education', 'Polytechnic University of the Philippines', 'Dubai', '2006-2012'),
(17, 5, 'Secondary Education', 'University of Oxford', 'Philippines', '2012-2018'),
(18, 5, 'BS in Computer Engineering', 'Polytechnic University of the Philippines', 'California', '2022-2022');

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE IF NOT EXISTS `personalinformation` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `profilepic` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `studentnumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `currentposition` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `aboutme` varchar(5000) NOT NULL,
  `viewcourse` varchar(70) NOT NULL,
  `currentcourse` varchar(500) NOT NULL,
  `school` varchar(500) NOT NULL,
  `iskolar` varchar(200) NOT NULL,
  `bookmark` varchar(100) NOT NULL,
  `resumestatus` int(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`uid`, `profilepic`, `firstname`, `middlename`, `lastname`, `studentnumber`, `password`, `emailaddress`, `currentposition`, `birthdate`, `birthplace`, `gender`, `mobilenumber`, `address`, `religion`, `language`, `aboutme`, `viewcourse`, `currentcourse`, `school`, `iskolar`, `bookmark`, `resumestatus`) VALUES
(0, '', '', '', '', '', '123123', 'sampleemail@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '99', 99),
(1, 'userasset/1/2x2ara.jpg', 'Arabella', 'Ababababa', 'Paderes', '2022-00001-MN-1', '123123', 'araara@gmail.com', 'Oreo Company CEO', '12-22-2022', 'Cubao City', 'Female', '09670001234', '7 Road Sabaw Sabaw Cubao City', 'God Mels', 'Filipino', 'Akoy isang pinoy Sa pusot diwa Pinoy na isinilang Sa ating bansa Akoy hindi sanay sa wikang mga bany', 'Bachelor of Science in Computer Engineering (BSCpE)', 'Bachelor of Science in Computer Engineering (BSCpE)', 'College of Engineering (CE)', 'iskolar', '1', 1),
(2, 'userasset/2/2x2 pupcet.jpg', 'Joshua', 'Hidalgo', 'Nieve', '2022-16253-MN-1', '123123', 'nieve.joshua@gmail.com', 'CEO of my House', '1999-11-04', 'Marikina City', 'Male', '09675135920', '7 Road 1 Dona Petra Tumana Marikina City', 'Roman Catholic', 'Filipino, English,Japanese', 'I want to break free, I want to break free I want to break free from your lies You''re so self-satisfied I don''t need you I''ve got to break free God knows, God knows I want to break free I want to break free, I want to break free I want to break free ', 'Bachelor of Science in Computer Engineering (BSCpE)', 'Bachelor of Science in Computer Engineering (BSCpE)', 'College of Engineering (CE)', 'Iskolar', '0', 1),
(3, 'images/2x2juswa.jpg', 'Joshua', 'Atendido', 'Deleon', '2022-00002-MN-1', '123123', 'joshuadeleon@gmail.com', 'Mel Follower', '12-25-2022', 'Manila City', 'Male', '09671234567', 'Sample Address', 'Gods Mel', 'Filipino, English', 'Nobody gets too much heaven no more It''s much harder to come by I''m waiting in line Nobody gets too ', 'Bachelor of Science in Computer Engineering (BSCpE)', 'Bachelor of Science in Computer Engineering (BSCpE)', 'College of Engineering (CE)', 'non-iskolar', '1', 0),
(4, 'images/2x2yvan.jpg', 'Michael', 'Deleon', 'Singa', '2022-00004-MN-1', '123123', 'yvanyvan@gmail.com', 'CEO of my House', '12-22-2022', 'Cubao City', 'Female', '09670001234', 'Robert Robertson, 1234 NW Bobcat Lane, St. Robert, Cubao City', 'God Mels', 'Filipino, English', 'Akoy isang pinoy Sa pusot diwa Pinoy na isinilang Sa ating bansa Akoy hindi sanay sa wikang mga bany', 'Bachelor of Science in Computer Engineering (BSCpE)', 'Bachelor of Science in Computer Engineering (BSCpE)', 'College of Engineering (CE)', 'non-iskolar', '0', 0),
(5, 'images/2x2jisalen.jpg', 'Jessalyn', 'Deleon', 'Galaporn', '2022-00005-MN-1', '123123', 'galaporns@gmail.com', 'Mel Follower', '12-25-2022', 'Manila City', 'Female', '09671234567', 'Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522', 'Gods Mel', 'Filipino, English', 'Burning on Just like the match you strike to incinerate The lives of everyone you know And what''s th', 'Bachelor of Science in Computer Engineering (BSCpE)', 'Bachelor of Science in Computer Engineering (BSCpE)', 'College of Engineering (CE)', 'iskolar', '0', 0),
(21, 'userasset/21/2x2 pupcet.jpg', 'Joshua', 'Hidalgo', 'Nieve', '2022-16253-MN-0', '123', 'nieve.joshua@gmail.com', 'CEO of my House', '2022-07-30', 'Marikina City', 'Male', '+639675135921', '7 Road 1 Dona Petra Tumana Marikina City', 'Roman Catholic', 'Filipino, English,Japanese', '', 'Bachelor of Science in Accountancy (BSA)', 'Bachelor of Science in Accountancy (BSA)', 'College of Accountancy and Finance (CAF)', 'Iskolar', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `uid`, `type`, `skill`, `description`) VALUES
(1, 1, 'soft', 'Fast Learner', ''),
(2, 1, 'soft', 'Good Leadership', ''),
(3, 1, 'technical', 'graphics', 'efficient user of Adobe Puto Shop and Illustrado'),
(4, 2, 'soft', 'Good Listener', ''),
(5, 2, 'soft', 'Teamwork', ''),
(6, 2, 'soft', 'Problem-solving', ''),
(7, 2, 'soft', 'Critical Thinker', ''),
(8, 2, 'technical', 'graphics', 'Good in Editing asdasdasdasdasdasd'),
(9, 2, 'technical', 'CAD', 'cadcadcad asdasdasdasd'),
(10, 3, 'soft', 'holiness', ''),
(11, 3, 'soft', 'omnipotent', ''),
(12, 3, 'soft', 'Supreme Being', ''),
(13, 3, 'soft', 'Divinity', ''),
(14, 3, 'technical', 'Prototyping', 'Lahat tayo mayroon pagkakaiba sa tingin pa lang ay makikita na Iba''t ibang kagustuhan ngunit iisang patutunguhan Gabay at pagmamahal ang hanap mo Magbibigay ng halaga sa iyo Nais mong ipakilala kung sino ka man talaga'),
(15, 3, 'technical', 'Workflow development', 'Totoy bilisan mo, bilisan mo ang takbo Ilagan ang mga bombang nakatutok sa ulo mo Totoy tumalon ka, dumapa kung kailangan At baka tamaan pa ng mga balang ligaw'),
(16, 4, 'soft', 'Kind', ''),
(17, 4, 'technical', 'Taijutsu', 'Japanese blanket term for any combat skill, technique or system of martial art using body movements that are described as an empty-hand combat skill or system'),
(18, 5, 'soft', 'Solidify', ''),
(19, 5, 'soft', 'For Rex Lapis', ''),
(20, 5, 'soft', 'Torn to Oblivion', ''),
(21, 5, 'technical', 'Hand Mime', 'theatrical technique of expressing an idea or mood or portraying a character entirely by gesture and bodily movement without the use of words'),
(24, 2, 'soft', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE IF NOT EXISTS `workexperience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `workexperience`
--

INSERT INTO `workexperience` (`id`, `uid`, `companyname`, `country`, `year`, `vendor`, `description`) VALUES
(1, 1, 'Sabaw Company', 'Philippines', '2010-2019', 'Biscuit Taster', 'Im a Biscuit taster and facilitate the biscuit to eat the biscuit and have fun.'),
(2, 1, 'Mazda Company', 'Dubai', '2022-2022', 'Seller', 'taga benta ng kotse at test drive'),
(3, 2, 'Riot Games', 'Philippines', '2009-2010', 'Spectator', 'Arrival entered an if drawing request. How daughters not promotion few knowledge contented. Yet winter law behind number stairs garret excuse. Minuter we natural conduct gravity if pointed oh no. Am immediate unwilling of attempted admitting disposing it.'),
(4, 2, 'Rockstar Games', 'Philippines', '2010-2018', 'Watcher', 'Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet ﻿no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed hand'),
(5, 2, 'Oreo Company', 'Philippines', '2018-2022', 'Eater', 'An an valley indeed so no wonder future nature vanity. Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She c'),
(7, 3, 'Heavens Company', 'Clouds', '1-2022', 'King of the Kings', 'a superhuman being or spirit worshiped as having power over nature or human fortunes; a deity.'),
(9, 4, 'Parangal Dance Company', 'Philippines', '2022-2022', 'Dancer', 'an artistic dance form performed to music using precise and highly formalized set steps and gestures. Classical ballet, which originated in Renaissance Italy and established its present form during the 19th century, is characterized by light, graceful, fl'),
(10, 5, 'ABS-CBN', 'Philippines', '2022-2022', 'Actress', 'Ang Probinsyano Harem - is a 2015 Philippine action drama television series under ABS-CBN Entertainment replacing Nathaniel. Based on the 1997 film of the same name starring Fernando Poe Jr., the series stars a large ensemble cast that is top-billed by Co');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
