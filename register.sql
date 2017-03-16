-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 08:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `registerno` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`registerno`, `name`, `dept`, `status`) VALUES
('UR14BT013', 'NEETU MANOJ', 'BIOTECHNOLOGY', 'REGISTERED'),
('UR14CE189', 'JOSHUA JOHN', 'CIVIL ENGINEERING', 'REGISTERED'),
('UR14CS004', 'Ms. SANYA PERMANAND', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS007', 'Mr. SAMUEL ROY', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS014', 'Ms. KIRUBA JEMI BRISKILLA  D', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS015', 'Ms. RONDI GLORY CHRISTINA', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS017', 'Ms. L MERCY CAROLINE', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS019', 'Mr. ASHIK D LIJO ', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS024', 'Ms. MAHIMA C', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS025', 'Mr. PON RAJESH M', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS035', 'Ms. CHRISTINA RAJAN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS037', 'Ms. A MARY NEOMI', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS039', 'Ms. GEORGIA P J', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS041', 'Ms. S MAHIMA', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS043', 'Ms. SONI SELINA MURMU', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS052', 'Ms. RISHITHA SRIVATSAVA ALLURU', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS055', 'Ms. SHARMILA N', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS056', 'Ms. KATAM BUELAH DEDEEPYA', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS058', 'Ms. KONAR MAHALAKSHMI CHELLAPP', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS062', 'Ms. VIDYA PRIYA DARCINI S', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS065', 'Ms. ABHINAYA VEMURI', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS071', 'UMANG', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS076', 'Ms. ERLIN ANGELA W', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS078', 'Ms. JENNIFER S', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS079', 'Ms. FAITH J B', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS081', 'Ms. RACHEL KIRUBA PAULIN P', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS082', 'Ms. SHIVANI J', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS085', 'Mr. GUTTIKONDA RATNA JESWANTH ', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS086', 'Ms. G LEEMA SHERLYN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS087', 'FEBIN VARUGHESE', 'COMPUTER SCIENCE AND ENGINEERING', 'REGISTERED'),
('UR14CS088', 'Ms. RENU SURESH GANVIR', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS089', 'Mr. VEERANALA NOEL SASIKANTH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS093', 'Mr. M DEEPAK', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS099', 'PAUL SANTHOSH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS102', 'Mr. GUDIPALLI VINEETH PRAKASH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS125', 'Ms. SHEMONA A V S', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS132', 'A. RAJARAJAN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS135', 'Ms. BETTY SUZANNA R', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS141', 'Ms. KAVYA DHARSHINI G', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS142', 'Mr. R SAMUEL ', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS143', 'Mr. UTKARSH SIDDHARTH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS146', 'Mr. NISHANTH RAJKUMAR', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS148', 'Mr. BENHUR ANKIT CHANDRA R', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS150', 'Mr. P RICHARD BARNABAS ', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS153', 'Mr. S JEROME GIDEON', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS179', 'D PAULWIN JEBA', 'COMPUTER SCIENCE AND ENGINEERING', 'REGISTERED'),
('UR14CS183', 'DANIEL .G', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS201', 'SOHA RAJU', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS202', 'Ms. JEENA JOSE', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS207', 'Ms. T RACHEL JAYA RAKHINI', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS208', 'Ms. CHELSA MONCY', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS212', 'SNEHA MARTIN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS216', 'Mr. STEPHEN M', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS220', 'J Jenitta', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS222', 'Ms. NAVODITA RICHARD HORO', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS224', 'SHEEBA ELIZABETH JOHN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS225', 'AKHILA SAIRAH NOBLE V', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS227', 'Mr. DANIEL MELCHIZEDEK AROCKIA', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS248', 'ANGEL WILLIAM', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS249', 'G. JOEL STARUKAR', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS251', 'TADEPALLI JESSIKA CHRISTEL', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS264', 'Mr. INGILELA SUSHANTH RATAN', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS285', 'Mr. BOBYJOHN L', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS288', 'BLESSY ELIZABETH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS292', 'Mr. YASHWANTH CH', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS295', 'Ms. DIVYA J', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS308', 'Ms. RACHEL JOY CHADALAVADA', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('ur14cs318', 'jeffy jabastin', 'B.Tech (Computer Science and Engineering', 'REGISTERED'),
('UR14CS328', 'Mr. JEDIDIAH JEYARAJ', 'B.Tech (Computer Science and Engineering', 'REGISTERED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`registerno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
