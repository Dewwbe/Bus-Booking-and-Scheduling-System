-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookabus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Departure` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Adults` int(11) NOT NULL,
  `Children` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Departure`, `Destination`, `Date`, `Time`, `Adults`, `Children`, `Count`, `Amount`) VALUES
('Colombo', 'Negombo', '2023-06-13', '00:00:03', 5, 1, 6, 0),
('input', 'input', '0000-00-00', '00:00:00', 3, 0, 3, 22),
('input', 'input', '0000-00-00', '00:00:00', 8, 10, 18, 222200),
('Colombo', 'Negombo', '2023-07-01', '00:00:00', 1, 1, 2, 0),
('Colombo', 'Negombo', '2023-07-01', '00:00:00', 1, 1, 2, 0),
('Colombo', 'Negombo', '2023-07-01', '00:00:00', 1, 1, 2, 0),
('Colombo', 'Negombo', '2023-07-01', '00:00:00', 1, 1, 2, 3343),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 750),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 3, 1, 4, 3343),
('Nuwara Eliya', 'Galle', '2023-06-15', '12:58:00', 1, 1, 2, 0),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 0),
('Nuwara Eliya', 'Negombo', '2023-07-01', '13:29:00', 1, 0, 1, 3000),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 500),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 0, 1, 1, 500),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 2, 0, 2, 500),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 500),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 2, 3, 500),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 750),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 750),
('input', 'input', '2023-06-22', '16:30:00', 1, 1, 2, 0),
('Colombo', 'Negombo', '2023-07-01', '07:00:00', 1, 1, 2, 750),
('', '', '0000-00-00', '00:00:00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Email` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `RouteID` int(10) NOT NULL,
  `Departure` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalTime` time NOT NULL,
  `Seats` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`RouteID`, `Departure`, `Destination`, `Date`, `DepartureTime`, `ArrivalTime`, `Seats`, `Type`, `Amount`) VALUES
(1, 'Colombo', 'Negombo', '2023-07-01', '07:00:00', '09:00:00', 25, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-01', '17:00:00', '19:00:00', 30, 'A/C', 600),
(1, 'Colombo', 'Negombo', '2023-07-01', '17:30:00', '19:30:00', 27, 'Non-A/C', 500),
(2, 'Negombo', 'Colombo', '2023-07-01', '07:00:00', '09:00:00', 25, 'Non-A/C', 500),
(2, 'Negombo', 'Colombo', '2023-07-01', '17:00:00', '19:00:00', 30, 'A/C', 600),
(2, 'Negombo', 'Colombo', '2023-07-01', '17:30:00', '19:30:00', 27, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-02', '07:00:00', '09:00:00', 10, 'Non-A/C', 500),
(2, 'Negombo', 'Colombo', '2023-07-02', '17:00:00', '19:00:00', 27, 'A/C', 600),
(1, 'Colombo', 'Negombo', '2023-07-03', '17:30:00', '19:30:00', 30, 'Non-A/C', 500),
(2, 'Negombo', 'Colombo', '2023-07-03', '07:00:00', '09:00:00', 25, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-04', '17:00:00', '19:00:00', 15, 'A/C', 600),
(2, 'Negombo', 'Colombo', '2023-07-04', '07:00:00', '09:00:00', 22, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-05', '17:00:00', '19:00:00', 25, 'Non-A/C', 500),
(2, 'Negombo', 'Colombo', '2023-07-05', '07:00:00', '09:00:00', 15, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-06', '07:00:00', '09:00:00', 30, 'A/C', 600),
(2, 'Negombo', 'Colombo', '2023-07-06', '17:00:00', '19:00:00', 25, 'Non-A/C', 500),
(1, 'Colombo', 'Negombo', '2023-07-07', '17:30:00', '19:30:00', 15, 'A/C', 600),
(2, 'Negombo', 'Colombo', '2023-07-07', '17:30:00', '19:30:00', 27, 'Non-A/C', 500),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-01', '10:30:00', '16:30:00', 35, 'Non-A/C', 3000),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-01', '10:30:00', '16:30:00', 33, 'A/C', 3500),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-02', '10:30:00', '16:30:00', 30, 'Non-A/C', 3000),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-02', '10:30:00', '16:30:00', 35, 'Non-A/C', 3000),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-03', '10:30:00', '16:30:00', 35, 'Non-A/C', 3000),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-03', '10:30:00', '16:30:00', 31, 'Non-A/C', 3000),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-04', '10:30:00', '16:30:00', 31, 'A/C', 3500),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-05', '10:30:00', '16:30:00', 26, 'Non-A/C', 3000),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-06', '10:30:00', '16:30:00', 25, 'Non-A/C', 3000),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-06', '10:30:00', '16:30:00', 31, 'A/C', 3500),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-07', '10:30:00', '16:30:00', 35, 'Non-A/C', 3000),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-07', '10:30:00', '16:30:00', 27, 'Non-A/C', 3000),
(3, 'Colombo', 'Nuwara Eliya', '2023-07-05', '10:30:00', '16:30:00', 30, 'A/C', 3500),
(4, 'Nuwara Eliya', 'Colombo', '2023-07-04', '10:30:00', '16:30:00', 25, 'Non-A/C', 3000),
(5, 'Colombo', 'Galle', '2023-07-01', '10:30:00', '13:00:00', 27, 'Non-A/C', 2000),
(6, 'Galle', 'Colombo', '2023-07-01', '10:30:00', '13:00:00', 35, 'Non-A/C', 2000),
(5, 'Colombo', 'Galle', '2023-07-02', '10:30:00', '13:00:00', 22, 'A/C', 2500),
(6, 'Galle', 'Colombo', '2023-07-02', '10:30:00', '13:00:00', 35, 'Non-A/C', 2000),
(5, 'Colombo', 'Galle', '2023-07-03', '10:30:00', '13:00:00', 15, 'Non-A/C', 2000),
(6, 'Galle', 'Colombo', '2023-07-03', '10:30:00', '13:00:00', 30, 'Non-A/C', 2000),
(5, 'Colombo', 'Galle', '2023-07-04', '10:30:00', '13:00:00', 31, 'Non-A/C', 2000),
(6, 'Galle', 'Colombo', '2023-07-04', '10:30:00', '13:00:00', 27, 'A/C', 2500),
(5, 'Colombo', 'Galle', '2023-07-05', '10:30:00', '13:00:00', 35, 'Non-A/C', 2000),
(6, 'Galle', 'Colombo', '2023-07-05', '10:30:00', '13:00:00', 25, 'Non-A/C', 2000),
(5, 'Colombo', 'Galle', '2023-07-06', '10:30:00', '13:00:00', 30, 'A/C', 2500),
(6, 'Galle', 'Colombo', '2023-07-06', '10:30:00', '13:00:00', 31, 'Non-A/C', 2000),
(5, 'Colombo', 'Galle', '2023-07-07', '10:30:00', '13:00:00', 25, 'A/C', 2500),
(6, 'Galle', 'Colombo', '2023-07-07', '10:30:00', '13:00:00', 27, 'Non-A/C', 2000),
(7, 'Colombo', 'Trincomalee', '2023-07-01', '07:00:00', '13:00:00', 35, 'Non-A/C', 5000),
(8, 'Trincomalee', 'Colombo', '2023-07-01', '07:00:00', '13:00:00', 30, 'A/C', 6000),
(7, 'Colombo', 'Trincomalee', '2023-07-02', '07:00:00', '13:00:00', 25, 'Non-A/C', 5000),
(8, 'Trincomalee', 'Colombo', '2023-07-02', '07:00:00', '13:00:00', 31, 'Non-A/C', 5000),
(7, 'Colombo', 'Trincomalee', '2023-07-03', '07:00:00', '13:00:00', 35, 'Non-A/C', 5000),
(8, 'Trincomalee', 'Colombo', '2023-07-03', '07:00:00', '13:00:00', 31, 'A/C', 6000),
(7, 'Colombo', 'Trincomalee', '2023-07-04', '07:00:00', '13:00:00', 30, 'Non-A/C', 5000),
(8, 'Trincomalee', 'Colombo', '2023-07-04', '07:00:00', '13:00:00', 31, 'Non-A/C', 5000),
(7, 'Colombo', 'Trincomalee', '2023-07-05', '07:00:00', '13:00:00', 35, 'A/C', 6000),
(8, 'Trincomalee', 'Colombo', '2023-07-05', '07:00:00', '13:00:00', 25, 'Non-A/C', 5000),
(7, 'Colombo', 'Trincomalee', '2023-07-06', '07:00:00', '13:00:00', 30, 'Non-A/C', 5000),
(8, 'Trincomalee', 'Colombo', '2023-07-06', '07:00:00', '13:00:00', 31, 'Non-A/C', 5000),
(7, 'Colombo', 'Trincomalee', '2023-07-07', '07:00:00', '13:00:00', 27, 'A/C', 6000),
(8, 'Trincomalee', 'Colombo', '2023-07-07', '07:00:00', '13:00:00', 30, 'Non-A/C', 5000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-01', '07:00:00', '13:00:00', 25, 'Non-A/C', 3000),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-01', '07:00:00', '13:00:00', 31, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-02', '07:00:00', '13:00:00', 27, 'A/C', 3500),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-02', '07:00:00', '13:00:00', 30, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-03', '07:00:00', '13:00:00', 35, 'Non-A/C', 3000),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-03', '07:00:00', '13:00:00', 25, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-04', '07:00:00', '13:00:00', 30, 'A/C', 3500),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-04', '07:00:00', '13:00:00', 35, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-05', '07:00:00', '13:00:00', 25, 'Non-A/C', 3000),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-05', '07:00:00', '13:00:00', 30, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-06', '07:00:00', '13:00:00', 27, 'A/C', 3500),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-06', '07:00:00', '13:00:00', 35, 'Non-A/C', 3000),
(9, 'Negombo', 'Nuwara Eliya', '2023-07-07', '07:00:00', '13:00:00', 31, 'Non-A/C', 3000),
(10, 'Nuwara Eliya', 'Negombo', '2023-07-07', '07:00:00', '13:00:00', 25, 'A/C', 3500),
(11, 'Negombo', 'Galle', '2023-07-01', '10:00:00', '13:00:00', 25, 'Non-A/C', 2500),
(12, 'Galle', 'Negombo', '2023-07-01', '10:00:00', '13:00:00', 31, 'Non-A/C', 2500),
(11, 'Negombo', 'Galle', '2023-07-02', '10:00:00', '13:00:00', 27, 'A/C', 3000),
(12, 'Galle', 'Negombo', '2023-07-02', '10:00:00', '13:00:00', 35, 'Non-A/C', 2000),
(11, 'Negombo', 'Galle', '2023-07-03', '10:00:00', '13:00:00', 30, 'Non-A/C', 2500),
(12, 'Galle', 'Negombo', '2023-07-03', '10:00:00', '13:00:00', 25, 'Non-A/C', 2500),
(11, 'Negombo', 'Galle', '2023-07-04', '10:00:00', '13:00:00', 31, 'A/C', 3000),
(12, 'Galle', 'Negombo', '2023-07-04', '10:00:00', '13:00:00', 27, 'Non-A/C', 2500),
(11, 'Negombo', 'Galle', '2023-07-05', '10:00:00', '13:00:00', 35, 'Non-A/C', 2500),
(12, 'Galle', 'Negombo', '2023-07-05', '10:00:00', '13:00:00', 30, 'Non-A/C', 2500),
(11, 'Negombo', 'Galle', '2023-07-06', '10:00:00', '13:00:00', 31, 'A/C', 3000),
(12, 'Galle', 'Negombo', '2023-07-06', '10:00:00', '13:00:00', 30, 'Non-A/C', 2500),
(11, 'Negombo', 'Galle', '2023-07-07', '10:00:00', '13:00:00', 25, 'Non-A/C', 2500),
(12, 'Galle', 'Negombo', '2023-07-07', '10:00:00', '13:00:00', 31, 'A/C', 3000),
(13, 'Negombo', 'Trincomalee', '2023-07-01', '10:30:00', '16:00:00', 31, 'Non-A/C', 4500),
(14, 'Trincomalee', 'Negombo', '2023-07-01', '10:30:00', '16:00:00', 27, 'Non-A/C', 4500),
(13, 'Negombo', 'Trincomalee', '2023-07-02', '10:30:00', '16:00:00', 27, 'A/C', 5000),
(14, 'Trincomalee', 'Negombo', '2023-07-02', '10:30:00', '16:00:00', 35, 'Non-A/C', 5000),
(13, 'Negombo', 'Trincomalee', '2023-07-03', '10:30:00', '16:00:00', 30, 'Non-A/C', 4500),
(14, 'Trincomalee', 'Negombo', '2023-07-03', '10:30:00', '16:00:00', 25, 'Non-A/C', 4500),
(13, 'Negombo', 'Trincomalee', '2023-07-04', '10:30:00', '16:00:00', 31, 'A/C', 5000),
(14, 'Trincomalee', 'Negombo', '2023-07-04', '10:30:00', '16:00:00', 27, 'Non-A/C', 4500),
(13, 'Negombo', 'Trincomalee', '2023-07-05', '10:30:00', '16:00:00', 35, 'Non-A/C', 4500),
(14, 'Trincomalee', 'Negombo', '2023-07-05', '10:30:00', '16:00:00', 30, 'Non-A/C', 4500),
(13, 'Negombo', 'Trincomalee', '2023-07-06', '10:30:00', '16:00:00', 30, 'A/C', 5000),
(14, 'Trincomalee', 'Negombo', '2023-07-06', '10:30:00', '16:00:00', 25, 'Non-A/C', 4500),
(13, 'Negombo', 'Trincomalee', '2023-07-07', '10:30:00', '16:00:00', 35, 'Non-A/C', 4500),
(14, 'Trincomalee', 'Negombo', '2023-07-07', '10:30:00', '16:00:00', 31, 'A/C', 5000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-01', '10:30:00', '16:00:00', 30, 'Non-A/C', 3000),
(16, 'Galle', 'Nuwara Eliya', '2023-07-01', '10:30:00', '16:00:00', 25, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-02', '10:30:00', '16:00:00', 35, 'A/C', 3500),
(16, 'Galle', 'Nuwara Eliya', '2023-07-02', '10:30:00', '16:00:00', 31, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-03', '10:30:00', '16:00:00', 27, 'Non-A/C', 3000),
(16, 'Galle', 'Nuwara Eliya', '2023-07-03', '10:30:00', '16:00:00', 15, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-04', '10:30:00', '16:00:00', 30, 'A/C', 3500),
(16, 'Galle', 'Nuwara Eliya', '2023-07-04', '10:30:00', '16:00:00', 25, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-05', '10:30:00', '16:00:00', 35, 'Non-A/C', 3000),
(16, 'Nuwara Eliya', 'Galle', '2023-07-05', '10:30:00', '16:00:00', 31, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-06', '10:30:00', '16:00:00', 27, 'A/C', 3500),
(16, 'Galle', 'Nuwara Eliya', '2023-07-06', '10:30:00', '16:00:00', 15, 'Non-A/C', 3000),
(15, 'Nuwara Eliya', 'Galle', '2023-07-07', '10:30:00', '16:00:00', 30, 'Non-A/C', 3000),
(16, 'Galle', 'Nuwara Eliya', '2023-07-07', '10:30:00', '16:00:00', 25, 'A/C', 3500),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-01', '10:00:00', '17:30:00', 35, 'Non-A/C', 5000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-01', '10:00:00', '17:30:00', 31, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-02', '10:00:00', '17:30:00', 27, 'A/C', 6000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-02', '10:00:00', '17:30:00', 15, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-03', '10:00:00', '17:30:00', 30, 'Non-A/C', 5000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-03', '10:00:00', '17:30:00', 25, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-04', '10:00:00', '17:30:00', 35, 'A/C', 6000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-04', '10:00:00', '17:30:00', 31, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-05', '10:00:00', '17:30:00', 27, 'Non-A/C', 5000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-05', '10:00:00', '17:30:00', 15, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-06', '10:00:00', '17:30:00', 30, 'A/C', 6000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-06', '10:00:00', '17:30:00', 25, 'Non-A/C', 5000),
(17, 'Nuwara Eliya', 'Trincomalee', '2023-07-07', '10:00:00', '17:30:00', 35, 'Non-A/C', 5000),
(18, 'Trincomalee', 'Nuwara Eliya', '2023-07-07', '10:00:00', '17:30:00', 31, 'A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-01', '10:00:00', '17:30:00', 27, 'Non-A/C', 6000),
(20, 'Trincomalee', 'Galle', '2023-07-01', '10:00:00', '17:30:00', 15, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-02', '10:00:00', '17:30:00', 30, 'A/C', 7000),
(20, 'Trincomalee', 'Galle', '2023-07-02', '10:00:00', '17:30:00', 25, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-03', '10:00:00', '17:30:00', 35, 'Non-A/C', 6000),
(20, 'Trincomalee', 'Galle', '2023-07-03', '10:00:00', '17:30:00', 31, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-04', '10:00:00', '17:30:00', 27, 'A/C', 7000),
(20, 'Trincomalee', 'Galle', '2023-07-04', '10:00:00', '17:30:00', 15, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-05', '10:00:00', '17:30:00', 30, 'Non-A/C', 6000),
(20, 'Trincomalee', 'Galle', '2023-07-05', '10:00:00', '17:30:00', 25, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-06', '10:00:00', '17:30:00', 35, 'A/C', 7000),
(20, 'Trincomalee', 'Galle', '2023-07-06', '10:00:00', '17:30:00', 31, 'Non-A/C', 6000),
(19, 'Galle', 'Trincomalee', '2023-07-07', '10:00:00', '17:30:00', 27, 'Non-A/C', 6000),
(20, 'Trincomalee', 'Galle', '2023-07-07', '10:00:00', '17:30:00', 15, 'A/C', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `specialtours`
--

CREATE TABLE `specialtours` (
  `Departure` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ArrivalDate` date NOT NULL,
  `BusCount` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialtours`
--

INSERT INTO `specialtours` (`Departure`, `Destination`, `DepartureDate`, `ArrivalDate`, `BusCount`, `Type`) VALUES
('qq', 'q', '2023-06-22', '2023-06-24', 1, 'A/C');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `Name`, `Email`, `ContactNo`, `Password`, `DOB`, `Address`, `Gender`) VALUES
(6485, 'Cha', 'abc@gmail.com', 766557161, 'Zxcvbnm890', '0000-00-00', '', ''),
(1234, 'Chathurka Mohottala', 'chathurka16@gmail.com', 123, '123', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
