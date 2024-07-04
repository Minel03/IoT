-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 03:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iotf`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `id` int(20) NOT NULL,
  `studentnumber` int(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `year` int(20) NOT NULL,
  `schoolyear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`id`, `studentnumber`, `course`, `year`, `schoolyear`) VALUES
(1, 2021001, '1', 1, '2019 - 2020'),
(2, 2021002, '2', 1, '2019 - 2020'),
(3, 2021003, '3', 1, '2019 - 2020'),
(4, 2021004, '1', 1, '2019 - 2020'),
(5, 2021005, '2', 1, '2019 - 2020'),
(6, 2021006, '3', 1, '2019 - 2020'),
(7, 2021007, '1', 1, '2019 - 2020'),
(8, 2021008, '2', 1, '2019 - 2020'),
(11, 2021011, '1', 1, '2019 - 2020'),
(12, 2021012, '2', 1, '2020 - 2021'),
(13, 2021001, '1', 2, '2020 - 2021'),
(14, 2021002, '2', 2, '2020 - 2021'),
(15, 2021003, '3', 2, '2020 - 2021'),
(16, 2021004, '1', 2, '2020 - 2021'),
(17, 2021005, '2', 2, '2020 - 2021'),
(18, 2021006, '3', 2, '2020 - 2021'),
(19, 2021007, '1', 2, '2020 - 2021'),
(20, 2021008, '2', 2, '2020 - 2021'),
(21, 2021001, '1', 3, '2021 - 2022'),
(22, 2021002, '2', 3, '2021 - 2022'),
(23, 2021013, '2', 2, '2021 - 2022'),
(30, 2021014, '1', 1, '2020 - 2021'),
(31, 2021015, '2', 1, '2020 - 2021'),
(32, 2021016, '3', 1, '2020 - 2021'),
(33, 2021017, '1', 1, '2020 - 2021'),
(34, 2021018, '2', 1, '2020 - 2021'),
(35, 2021019, '3', 1, '2020 - 2021'),
(36, 2021020, '3', 1, '2020 - 2021'),
(37, 2021021, '1', 1, '2020 - 2021'),
(38, 2021022, '1', 1, '2021 - 2022'),
(39, 2021023, '1', 1, '2021 - 2022'),
(40, 2021024, '1', 1, '2021 - 2022'),
(41, 2021025, '3', 1, '2021 - 2022'),
(42, 2021026, '1', 1, '2021 - 2022'),
(44, 2021028, '2', 1, '2021 - 2022'),
(45, 2021029, '1', 1, '2021 - 2022'),
(47, 2021011, '1', 2, '2021 - 2022'),
(48, 2021012, '2', 2, '2021 - 2022'),
(49, 2021014, '1', 2, '2021 - 2022'),
(50, 2021015, '2', 2, '2021 - 2022'),
(51, 2021003, '3', 3, '2021 - 2022'),
(52, 2021004, '1', 3, '2021 - 2022'),
(53, 2021005, '2', 3, '2021 - 2022'),
(54, 2021006, '3', 3, '2021 - 2022'),
(55, 2021007, '1', 3, '2021 - 2022'),
(56, 2021008, '2', 3, '2021 - 2022'),
(57, 2021002, '2', 4, '2022 - 2023'),
(60, 2021003, '3', 4, '2022 - 2023'),
(61, 2021004, '1', 4, '2022 - 2023'),
(62, 2021005, '2', 4, '2022 - 2023'),
(63, 2021006, '3', 4, '2022 - 2023'),
(64, 2021007, '1', 4, '2022 - 2023'),
(65, 2021008, '2', 4, '2022 - 2023'),
(66, 2021016, '3', 2, '2021 - 2022'),
(67, 2021017, '1', 2, '2021 - 2022'),
(68, 2021018, '2', 2, '2021 - 2022'),
(69, 2021019, '3', 2, '2021 - 2022'),
(70, 2021020, '3', 2, '2021 - 2022'),
(71, 2021021, '1', 2, '2021 - 2022'),
(72, 2021011, '1', 3, '2022 - 2023'),
(73, 2021012, '2', 3, '2022 - 2023'),
(74, 2021014, '1', 3, '2022 - 2023'),
(75, 2021015, '2', 3, '2022 - 2023'),
(76, 2021016, '3', 3, '2022 - 2023'),
(77, 2021017, '1', 3, '2022 - 2023'),
(78, 2021018, '2', 3, '2022 - 2023'),
(79, 2021019, '3', 3, '2022 - 2023'),
(80, 2021020, '3', 3, '2022 - 2023'),
(81, 2021021, '1', 3, '2022 - 2023'),
(82, 2021022, '1', 2, '2022 - 2023'),
(83, 2021023, '1', 2, '2022 - 2023'),
(84, 2021024, '1', 2, '2022 - 2023'),
(85, 2021025, '3', 2, '2022 - 2023'),
(86, 2021026, '1', 2, '2022 - 2023'),
(88, 2021028, '2', 2, '2022 - 2023'),
(89, 2021029, '1', 2, '2022 - 2023'),
(91, 2021031, '3', 1, '2021 - 2022'),
(92, 2021032, '2', 1, '2021 - 2022'),
(94, 2021001, '1', 4, '2022 - 2023');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `start` int(20) NOT NULL,
  `end` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`start`, `end`) VALUES
(2019, 2020),
(2020, 2021),
(2021, 2022),
(2022, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `placeofbirth` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `guardianname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `age`, `gender`, `birthday`, `address`, `placeofbirth`, `fathername`, `mothername`, `guardianname`) VALUES
(2021001, 'Miguel R. Santos', 23, 'Male', '2001-11-20', '789 Tanzang Luma Imus, Cavite', 'Imus', 'Antonio S. Santos', 'Sofia R. Santos', 'Antonio S. Santos'),
(2021002, 'Juan S. Dela Cruz', 22, 'Male', '2001-08-15', '123 San Antonio Dasmarinas, Cavite ', 'Dasmarinas', 'Pedro C. Dela Cruz', 'Maria S. Dela Cruz', 'Maria S. Dela Cruz'),
(2021003, 'Maria G. Reyes', 24, 'Female', '2001-05-02', '456 Molino Bacoor, Cavite', 'Bacoor', 'Jose P. Reyes', 'Ana G. Reyes', 'Ana G. Reyes'),
(2021004, 'Simon X. Balala', 23, 'Male', '2001-09-30', '369 Banilad Imus, Cavite', 'Imus', 'Francisco H. Balala', 'Samantha X. Balala', 'Francisco H. Balala'),
(2021005, 'Jose P. Cruz', 23, 'Male', '2001-09-30', '222 Poblacion Kawit, Cavite', 'Kawit', 'Ricardo D. Cruz', 'Carmen P. Cruz', 'Ricardo D. Cruz'),
(2021006, 'Anna H. Lim', 24, 'Female', '2001-01-08', '111 Panapaan Bacoor, Cavite', 'Bacoor', 'Richard C. Lim', 'Patricia H. Lim', 'Richard C. Lim'),
(2021007, 'Angela R. Santos', 24, 'Female', '2001-01-08', '404 Bucal Maragondon, Cavite', 'Maragondon', 'Joseph B. Santos', 'Rosario R. Santos', 'Rosario R. Santos'),
(2021008, 'Mateo Gabriel G. Dela Cruz', 24, 'Male', '2001-04-15', '180 Mambog 3 Bacoor, Cavite', 'Bacoor', 'Ogie M. Dela Cruz', 'Sofia G. Dela Cruz', 'Sofia G. Dela Cruz'),
(2021011, 'Andrei T. Aquino', 23, 'Male', '2002-01-21', '384 Tanzang Luma 2 Imus, Cavite', 'Imus', 'Ignacio I. Santos', 'Esperanza T. Aquino', 'Ignacio I. Santos'),
(2021012, 'Isabella L. Gonzales', 22, 'Female', '2002-12-16', '52 San Vicente Silang, Cavite', 'Silang', 'Simeon J. Gonzales', 'Guadalupe L. Gonzales', 'Simeon J. Gonzales'),
(2021014, 'Miguel R. Santos', 21, 'Male', '2002-11-20', '789 Tanzang Luma, Imus , Cavite', 'Imus , Cavite', 'Antonio Santos', 'Sofia Rolle', 'Julia Cristine Tadeo'),
(2021015, 'Ray Y. Rolle', 21, 'Male', '2002-11-21', 'Asama Homes, Indang, Cavite', 'Imus, Cavite', 'Apollo Y. Rolle', 'Noella Y. Rolle', 'Zandrine Canete'),
(2021016, 'Zizi C. Niebres', 21, 'Female', '2002-04-21', 'Molino 4, Bacoor, Cavite', 'Tanza, Cavite', 'Mark Joven l. Niebres', 'Zandrine C. Niebres', 'Irish Diane Iniego'),
(2021017, 'Mizzy C. Niebres', 21, 'Female', '2002-01-01', 'Molino 4, Bacoor, Cavite', 'Maragondon, Cavite', 'Mark Joven L. Niebres', 'Zandrine C. Niebres', 'Irish Diane Iniego'),
(2021018, 'Andrei T. Aquino', 21, 'Male', '2002-05-14', 'Bucal 2, Maragondon, Cavite', 'Maragondon, Cavite', 'Darry M. Aquino', 'Mycel R. Aquino', 'Kepweng L. Wangwang'),
(2021019, 'Jacob Ethan D. Gonzales', 21, 'Male', '2002-04-21', 'San Vicente, Silang, Cavite', 'Silang, Cavite', 'Liam G. Gonzales', 'Marilyn H. Gonzales', 'Maria Lourdes G. Gonzales'),
(2021020, 'Lorenzo Jose L. Manalo', 21, 'Male', '2002-06-08', 'Bagtas , Tanza, Cavite', 'Tanza, Cavite', 'Joseph  J. Manalo', 'Queen L. Manalo', 'Queen L. Manalo'),
(2021021, 'Zion Williamson R. Bonza Jr. the 4th', 20, 'Male', '2003-05-07', 'Buhay na Tubig, Imus , Cavite', 'Imus, Cavite', 'John Vincent J. Bonza', 'Marian R. Bonza', 'Adrian L. Nueva'),
(2021022, 'Sofia Grace R. Del Rosario', 19, 'Female', '2003-04-15', 'Tanza-Trece Road, General Trias, Cavite', 'General Trias, Cavite', 'Armando R. Del Rosario', 'Lourdes R. Del Rosario', 'Karlos M. Garcia'),
(2021023, 'Mateo Enrique D. Cruz', 19, 'Male', '2003-04-15', 'Paliparan 2, Dasmarinas, Cavite', 'Dasmarinas, Cavite', 'Arlando E. Cruz', 'Ermita D. Cruz', 'Joshua B. Bumanglag'),
(2021024, 'Jolina Q. Inucensio', 1, 'Female', '2002-04-09', 'Aniban 2 , Tanza , Cavite', 'Tanza , Cavite', 'Nicanor P. Inucensio', 'Angel Q. Inucensio', 'Hans Christian Bartolome'),
(2021025, 'Rafael L. Costancio', 1, 'Male', '2002-07-21', 'San Jose, Silang, Cavite', 'Silang, Cavite', 'Rogelio H. Costancio', 'Weller L. Costancio', 'Rain M. Libelo'),
(2021026, 'Mia Isabella T. Xavier', 1, 'Female', '2002-12-31', 'Salawag, Dasmarinas, Cavite', 'Dasmarinas, Cavite', 'Lamberto O. Xavier', 'Mimi T. Xavier', 'Zyrille L. Egay'),
(2021028, 'Jemaica L. Landicho', 1, 'Male', '2002-05-12', 'Maliksi 3, Dasmarinas , Cavite', 'Dasmarinas , Cavite', 'Ignacio P. Landicho', 'Gloria L. Landicho', 'Gloria L. Landicho'),
(2021029, 'Mark D. Ceregal', 1, 'Male', '2002-04-05', 'Paliparan 2, Kawit, Cavite', 'Kawit, Cavite', 'Jerome L. Ceregal', 'Luningning D. Ceregal', 'Justine G. Pagasartonga'),
(2021031, 'Kushina P. Kronen', 18, 'Female', '2003-01-01', '15 Chatoville Tanza, Cavite', 'Tanza, Cavite', 'Katsuki O. Kronen', 'Kushiki P. Kronen', 'Kushiki P. Kronen'),
(2021032, 'Condo M. Inium', 18, 'Male', '2003-02-02', 'Biwas Tanza, Cavite', 'Tanza, Cavite', 'Apart L. Inium', 'Board M. Inium', 'Apart L. Inium');

-- --------------------------------------------------------

--
-- Table structure for table `subject_code`
--

CREATE TABLE `subject_code` (
  `id` int(20) NOT NULL,
  `enrolled_students_id` int(20) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_code`
--

INSERT INTO `subject_code` (`id`, `enrolled_students_id`, `code`) VALUES
(1, 1, 'MIT'),
(2, 1, 'NF'),
(3, 1, 'P'),
(4, 1, 'FIT1'),
(5, 2, 'MIT'),
(6, 2, 'NF'),
(7, 2, 'P'),
(8, 2, 'FIT1'),
(9, 3, 'MIT'),
(10, 3, 'NF'),
(11, 3, 'P'),
(12, 3, 'FIT1'),
(13, 4, 'MIT'),
(14, 4, 'NF'),
(15, 4, 'P'),
(16, 4, 'FIT1'),
(17, 5, 'MIT'),
(18, 5, 'NF'),
(19, 5, 'P'),
(20, 5, 'FIT1'),
(21, 6, 'MIT'),
(22, 6, 'NF'),
(23, 6, 'P'),
(24, 6, 'FIT1'),
(25, 7, 'MIT'),
(26, 7, 'NF'),
(27, 7, 'P'),
(28, 7, 'FIT1'),
(29, 8, 'MIT'),
(30, 8, 'NF'),
(31, 8, 'P'),
(32, 8, 'FIT1'),
(33, 9, 'MIT'),
(34, 9, 'NF'),
(35, 9, 'P'),
(36, 9, 'FIT1'),
(37, 10, 'MIT'),
(38, 10, 'NF'),
(39, 10, 'P'),
(40, 10, 'FIT1'),
(41, 11, 'MIT'),
(42, 11, 'NF'),
(43, 11, 'P'),
(44, 11, 'FIT1'),
(45, 12, 'MIT'),
(46, 12, 'NF'),
(47, 12, 'P'),
(48, 12, 'FIT1'),
(49, 13, 'OOP'),
(50, 13, 'NS'),
(51, 13, 'UTS'),
(52, 13, 'FIT2'),
(53, 14, 'OOP'),
(54, 14, 'SE'),
(55, 14, 'D'),
(56, 14, 'FIT2'),
(57, 15, 'DSD'),
(59, 15, 'E'),
(60, 15, 'FIT2'),
(61, 16, 'OOP'),
(62, 16, 'NS'),
(63, 16, 'UTS'),
(64, 16, 'FIT2'),
(65, 17, 'OOP'),
(66, 17, 'SE'),
(67, 17, 'D'),
(68, 17, 'FIT2'),
(69, 18, 'DSD'),
(70, 18, 'OS'),
(71, 18, 'E'),
(72, 18, 'FIT2'),
(73, 19, 'OOP'),
(74, 19, 'NS'),
(75, 19, 'UTS'),
(76, 19, 'FIT2'),
(77, 20, 'OOP'),
(78, 20, 'SE'),
(79, 20, 'D'),
(80, 20, 'FIT2'),
(81, 21, 'OOP'),
(82, 21, 'NS'),
(83, 21, 'UTS'),
(84, 21, 'FIT2'),
(85, 22, 'ADSA'),
(86, 22, 'CG'),
(87, 22, 'GS'),
(88, 22, 'FIT3'),
(93, 24, 'DSD'),
(94, 24, 'OS'),
(95, 24, 'E'),
(96, 24, 'FIT2'),
(97, 25, 'OOP'),
(98, 25, 'NS'),
(99, 25, 'UTS'),
(100, 25, 'FIT2'),
(101, 26, 'ADSA'),
(102, 26, 'CG'),
(103, 26, 'GS'),
(104, 26, 'FIT3'),
(105, 27, 'CNP'),
(106, 27, 'RA'),
(107, 27, 'MS'),
(108, 27, 'FIT3'),
(109, 28, 'DA'),
(110, 28, 'CS'),
(111, 28, 'CW'),
(112, 28, 'FIT3  '),
(117, 30, 'MIT'),
(118, 30, 'NF'),
(119, 30, 'P'),
(120, 30, 'FIT1'),
(121, 31, 'IP'),
(122, 31, 'DM'),
(123, 31, 'E'),
(124, 31, 'FIT1'),
(125, 32, 'IP'),
(126, 32, 'CA'),
(127, 32, 'AA'),
(128, 32, 'FIT1'),
(129, 33, 'MIT'),
(130, 33, 'NF'),
(131, 33, 'P'),
(132, 33, 'FIT1'),
(133, 34, 'IP'),
(134, 34, 'DM'),
(135, 34, 'E'),
(136, 34, 'FIT1'),
(137, 35, 'IP'),
(138, 35, 'CA'),
(139, 35, 'AA'),
(140, 35, 'FIT1'),
(141, 36, 'IP'),
(142, 36, 'CA'),
(143, 36, 'AA'),
(144, 36, 'FIT1'),
(145, 37, 'MIT'),
(146, 37, 'NF'),
(147, 37, 'P'),
(148, 37, 'FIT1'),
(149, 38, 'MIT'),
(150, 38, 'NF'),
(151, 38, 'P'),
(152, 38, 'FIT1'),
(153, 39, 'MIT'),
(154, 39, 'NF'),
(155, 39, 'P'),
(156, 39, 'FIT1'),
(157, 40, 'MIT'),
(158, 40, 'NF'),
(159, 40, 'P'),
(160, 40, 'FIT1'),
(161, 41, 'IP'),
(162, 41, 'CA'),
(163, 41, 'AA'),
(164, 41, 'FIT1'),
(165, 42, 'MIT'),
(166, 42, 'NF'),
(167, 42, 'P'),
(168, 42, 'FIT1'),
(169, 43, 'IP'),
(170, 43, 'CA'),
(171, 43, 'AA'),
(172, 43, 'FIT1'),
(173, 44, 'IP'),
(174, 44, 'DM'),
(175, 44, 'E'),
(176, 44, 'FIT1'),
(177, 45, 'MIT'),
(178, 45, 'NF'),
(179, 45, 'P'),
(180, 45, 'FIT1'),
(181, 46, 'IP'),
(182, 46, 'CA'),
(183, 46, 'AA'),
(184, 46, 'FIT1'),
(185, 47, 'OOP'),
(186, 47, 'NS'),
(187, 47, 'UTS'),
(188, 47, 'FIT2'),
(189, 48, 'OOP'),
(190, 48, 'SE'),
(191, 48, 'D'),
(192, 48, 'FIT2'),
(193, 49, 'OOP'),
(194, 49, 'NS'),
(195, 49, 'UTS'),
(196, 49, 'FIT2'),
(197, 50, 'OOP'),
(198, 50, 'SE'),
(199, 50, 'D'),
(200, 50, 'FIT2'),
(201, 51, 'CNP'),
(202, 51, 'RA'),
(203, 51, 'MS'),
(204, 51, 'FIT3'),
(205, 52, 'DA'),
(206, 52, 'CS'),
(207, 52, 'CW'),
(208, 52, 'FIT3  '),
(209, 53, 'ADSA'),
(210, 53, 'CG'),
(211, 53, 'GS'),
(212, 53, 'FIT3'),
(213, 54, 'CNP'),
(214, 54, 'RA'),
(215, 54, 'MS'),
(216, 54, 'FIT3'),
(217, 55, 'DA'),
(218, 55, 'CS'),
(219, 55, 'CW'),
(220, 55, 'FIT3  '),
(221, 56, 'ADSA'),
(222, 56, 'CG'),
(223, 56, 'GS'),
(224, 56, 'FIT3'),
(225, 100, 'CNS'),
(226, 100, 'SECP'),
(227, 100, 'RW'),
(228, 100, 'FIT4'),
(229, 101, 'HSC'),
(230, 101, 'AR'),
(231, 101, 'NM'),
(232, 101, 'FIT4'),
(233, 102, 'BDA'),
(234, 102, 'MWS'),
(235, 102, 'SPI'),
(236, 102, 'FIT4'),
(237, 103, 'HSC'),
(238, 103, 'AR'),
(239, 103, 'NM'),
(240, 103, 'FIT4'),
(241, 104, 'BDA'),
(242, 104, 'MWS'),
(243, 104, 'SPI'),
(244, 104, 'FIT4'),
(245, 105, 'CNS'),
(246, 105, 'SECP'),
(247, 105, 'RW'),
(248, 105, 'FIT4'),
(249, 106, 'HSC'),
(250, 106, 'AR'),
(251, 106, 'NM'),
(252, 106, 'FIT4'),
(253, 107, 'BDA'),
(254, 107, 'MWS'),
(255, 107, 'SPI'),
(256, 107, 'FIT4'),
(257, 108, 'CNS'),
(258, 108, 'SECP'),
(259, 108, 'RW'),
(260, 108, 'FIT4'),
(261, 66, 'DSD'),
(262, 66, 'OS'),
(263, 66, 'E'),
(264, 66, 'FIT2'),
(265, 67, 'OOP'),
(266, 67, 'NS'),
(267, 67, 'UTS'),
(268, 67, 'FIT2'),
(269, 68, 'OOP'),
(270, 68, 'SE'),
(271, 68, 'D'),
(272, 68, 'FIT2'),
(273, 69, 'DSD'),
(274, 69, 'OS'),
(275, 69, 'E'),
(276, 69, 'FIT2'),
(277, 70, 'DSD'),
(278, 70, 'OS'),
(279, 70, 'E'),
(280, 70, 'FIT2'),
(281, 71, 'OOP'),
(282, 71, 'NS'),
(283, 71, 'UTS'),
(284, 71, 'FIT2'),
(285, 72, 'DA'),
(286, 72, 'CS'),
(287, 72, 'CW'),
(288, 72, 'FIT3  '),
(289, 73, 'ADSA'),
(290, 73, 'CG'),
(291, 73, 'GS'),
(292, 73, 'FIT3'),
(293, 74, 'DA'),
(294, 74, 'CS'),
(295, 74, 'CW'),
(296, 74, 'FIT3  '),
(297, 75, 'ADSA'),
(298, 75, 'CG'),
(299, 75, 'GS'),
(300, 75, 'FIT3'),
(301, 76, 'CNP'),
(302, 76, 'RA'),
(303, 76, 'MS'),
(304, 76, 'FIT3'),
(305, 77, 'DA'),
(306, 77, 'CS'),
(307, 77, 'CW'),
(308, 77, 'FIT3  '),
(309, 78, 'ADSA'),
(310, 78, 'CG'),
(311, 78, 'GS'),
(312, 78, 'FIT3'),
(313, 79, 'CNP'),
(314, 79, 'RA'),
(315, 79, 'MS'),
(316, 79, 'FIT3'),
(317, 80, 'CNP'),
(318, 80, 'RA'),
(319, 80, 'MS'),
(320, 80, 'FIT3'),
(321, 81, 'DA'),
(322, 81, 'CS'),
(323, 81, 'CW'),
(324, 81, 'FIT3  '),
(325, 82, 'OOP'),
(326, 82, 'NS'),
(327, 82, 'UTS'),
(328, 82, 'FIT2'),
(329, 83, 'OOP'),
(330, 83, 'NS'),
(331, 83, 'UTS'),
(332, 83, 'FIT2'),
(333, 84, 'OOP'),
(334, 84, 'NS'),
(335, 84, 'UTS'),
(336, 84, 'FIT2'),
(337, 85, 'DSD'),
(338, 85, 'OS'),
(339, 85, 'E'),
(340, 85, 'FIT2'),
(341, 86, 'OOP'),
(342, 86, 'NS'),
(343, 86, 'UTS'),
(344, 86, 'FIT2'),
(349, 88, 'OOP'),
(350, 88, 'SE'),
(351, 88, 'D'),
(352, 88, 'FIT2'),
(353, 89, 'OOP'),
(354, 89, 'NS'),
(355, 89, 'UTS'),
(356, 89, 'FIT2'),
(361, 91, 'IP'),
(362, 91, 'CA'),
(363, 91, 'AA'),
(364, 91, 'FIT1'),
(365, 92, 'IP'),
(366, 92, 'DM'),
(367, 92, 'E'),
(368, 92, 'FIT1'),
(369, 9, 'MS'),
(370, 9, 'HSC'),
(375, 84, 'CW'),
(376, 84, 'BDA'),
(377, 84, 'FIT3'),
(378, 84, 'MWS'),
(379, 94, 'BDA'),
(380, 94, 'MWS'),
(381, 94, 'SPI'),
(382, 94, 'FIT4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `userpassword`) VALUES
('admin', '$2y$10$MIqAozpfjZJQsXQmVG0Q1./yIuiB5v9yKxU6lsBSZBHz4Quc3GMwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_code`
--
ALTER TABLE `subject_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021033;

--
-- AUTO_INCREMENT for table `subject_code`
--
ALTER TABLE `subject_code`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
