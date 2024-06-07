-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 07:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `Sno` int(11) NOT NULL,
  `complaintId` varchar(20) DEFAULT NULL,
  `complaintFrom` varchar(20) DEFAULT NULL,
  `complaintTo` varchar(20) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Sno`, `complaintId`, `complaintFrom`, `complaintTo`, `reason`, `createdOn`, `modifiedOn`) VALUES
(1, 'C1607427119', 'E1607309708', 'D1607328233', 'Harrasement from authorities', '2020-12-08 05:01:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `Sno` int(11) NOT NULL,
  `cropId` text DEFAULT NULL,
  `cropName` varchar(50) DEFAULT NULL,
  `area` bigint(20) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL,
  `cropImagePath` text DEFAULT NULL,
  `createdOn` varchar(50) DEFAULT NULL,
  `modifiedOn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Sno` int(11) NOT NULL,
  `deptId` varchar(20) DEFAULT NULL,
  `deptName` varchar(50) DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Sno`, `deptId`, `deptName`, `createdOn`, `modifiedOn`) VALUES
(1, 'DPT1607264822', 'FPO', '2020-12-06 07:57:02', NULL),
(2, 'DPT1607562384', 'EPM', '2020-12-10 06:36:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_heads`
--

CREATE TABLE `dept_heads` (
  `Sno` int(11) NOT NULL,
  `deptHeadId` text DEFAULT NULL,
  `deptHeadName` varchar(50) DEFAULT NULL,
  `deptHeadEmail` varchar(100) DEFAULT NULL,
  `deptId` varchar(50) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `deptHeadMobNo` varchar(12) DEFAULT NULL,
  `deptHeadState` varchar(20) DEFAULT NULL,
  `deptHeadCity` varchar(20) DEFAULT NULL,
  `deptHeadAddr` text DEFAULT NULL,
  `picPath` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_heads`
--

INSERT INTO `dept_heads` (`Sno`, `deptHeadId`, `deptHeadName`, `deptHeadEmail`, `deptId`, `Password`, `deptHeadMobNo`, `deptHeadState`, `deptHeadCity`, `deptHeadAddr`, `picPath`, `createdOn`, `modifiedOn`) VALUES
(1, 'D1607328233', 'Sarath', 'gvnd.sarath1996@gmail.com', 'DPT1607264822', '$2y$10$CA/uww4JcAQ2iA/Wlkimn.lqJcGKycrP4e.IH3nP5ekQobyANcS.2', '9298807199', 'Andhra Pradesh', 'Vijayawada', 'Prasadampadu, Vijayawada', 'depthead-pics/16d29c0347a8d2a522aac7d0d35dbf7c.png', '2020-12-07 01:33:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Sno` int(11) NOT NULL,
  `empId` text DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `empEmail` varchar(100) DEFAULT NULL,
  `empMobNo` varchar(10) DEFAULT NULL,
  `deptId` varchar(20) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `empstate` varchar(50) DEFAULT NULL,
  `empCity` varchar(50) DEFAULT NULL,
  `empAddr` varchar(150) DEFAULT NULL,
  `picPath` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Sno`, `empId`, `empName`, `empEmail`, `empMobNo`, `deptId`, `Password`, `empstate`, `empCity`, `empAddr`, `picPath`, `createdOn`, `modifiedOn`) VALUES
(1, 'E1607309708', 'Sarath Gvnd', 'gvnd.sarath1996@gmail.com', '9491412788', 'DPT1607264822', '$2y$10$4NGxWaxZNt4p/LsL5ASc1OW1dMr7VwpUXh1jwY0LNdxYUUDg.yuxi', 'Andhra Pradesh', 'Vijayawada', 'Prasadampadu, Vijayawada', 'emp-pics/47e6e3e0f4d2b555f986b00f3eb7fec7.png', '2020-12-07 08:25:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fpos`
--

CREATE TABLE `fpos` (
  `Sno` int(11) NOT NULL,
  `fpoId` text DEFAULT NULL,
  `fpoName` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `createdOn` varchar(50) DEFAULT NULL,
  `modifiedOn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hrs`
--

CREATE TABLE `hrs` (
  `Sno` int(11) NOT NULL,
  `hrId` text DEFAULT NULL,
  `hrName` varchar(50) DEFAULT NULL,
  `hrEmail` varchar(100) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `hrMobNo` varchar(12) DEFAULT NULL,
  `hrState` varchar(20) DEFAULT NULL,
  `hrCity` varchar(20) DEFAULT NULL,
  `hrAddr` text DEFAULT NULL,
  `picPath` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrs`
--

INSERT INTO `hrs` (`Sno`, `hrId`, `hrName`, `hrEmail`, `Password`, `hrMobNo`, `hrState`, `hrCity`, `hrAddr`, `picPath`, `createdOn`, `modifiedOn`) VALUES
(1, 'HR1607333951', 'Sarath Golla', 'gvnd.sarath1996@gmail.com', '$2y$10$NL.A5nG4sVYpB3PBfIjaGu5W2KdZXGqL/FbolINjGyo6jWSm4AOOa', '9298807199', 'Andhra Pradesh', 'Vijayawada', 'Prasadampadu, Vijayawada', 'hr-pics/1ea6558ccce08ef8399495e3409c3894.png', '2020-12-07 03:09:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Sno` int(11) NOT NULL,
  `Id` varchar(100) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `loggedInDateTime` datetime DEFAULT NULL,
  `loggedOutDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Sno`, `Id`, `IP`, `loggedInDateTime`, `loggedOutDateTime`) VALUES
(1, 'superadmin.ems@feedorg.com', '::1', '2020-12-07 04:25:16', '2020-12-07 07:50:43'),
(2, 'HR1607333951', '::1', '2020-12-07 07:51:24', '2020-12-07 08:17:42'),
(3, 'superadmin.ems@feedorg.com', '::1', '2020-12-07 08:18:11', '2020-12-07 09:02:48'),
(4, 'HR1607333951', '::1', '2020-12-07 10:07:11', '2020-12-07 10:43:12'),
(5, 'superadmin.ems@feedorg.com', '::1', '2020-12-07 10:44:38', '2020-12-07 10:53:09'),
(6, 'HR1607333951', '::1', '2020-12-07 10:53:25', '2020-12-07 11:01:17'),
(7, 'D1607328233', '::1', '2020-12-07 11:02:38', '2020-12-08 12:06:21'),
(8, 'SB1607337537', '::1', '2020-12-08 12:06:43', '2020-12-08 12:07:22'),
(9, 'E1607309708', '::1', '2020-12-08 06:26:25', '2020-12-08 06:29:48'),
(10, 'superadmin.ems@feedorg.com', '::1', '2020-12-08 08:11:42', '2020-12-09 06:55:33'),
(11, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 06:22:01', '2020-12-09 06:55:33'),
(12, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 06:55:50', '2020-12-09 06:56:00'),
(13, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 06:57:15', '2020-12-09 07:08:11'),
(14, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 07:32:26', '2020-12-09 08:01:28'),
(15, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 08:02:55', '2020-12-09 08:03:52'),
(16, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 08:05:04', '2020-12-09 09:33:27'),
(17, 'superadmin.ems@feedorg.com', '::1', '2020-12-09 10:53:36', '2020-12-10 12:01:15'),
(18, 'superadmin.ems@feedorg.com', '::1', '2020-12-10 06:34:50', '2020-12-11 06:52:19'),
(19, 'superadmin.ems@feedorg.com', '::1', '2020-12-11 06:14:17', '2020-12-11 06:52:19'),
(20, 'HR1607333951', '::1', '2020-12-11 06:53:30', '2020-12-11 08:27:24'),
(21, 'superadmin.ems@feedorg.com', '::1', '2020-12-11 08:27:45', '2020-12-11 08:30:26'),
(22, 'HR1607333951', '::1', '2020-12-11 08:30:44', '2020-12-11 08:36:00'),
(23, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 10:01:15', '2020-12-12 10:01:31'),
(24, 'HR1607333951', '::1', '2020-12-12 10:01:46', '2020-12-12 01:13:29'),
(25, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 01:13:46', '2021-01-04 11:42:58'),
(26, 'HR1607333951', '::1', '2020-12-12 01:15:27', '2020-12-12 01:15:39'),
(27, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 01:21:54', '2020-12-12 01:25:17'),
(28, 'HR1607333951', '::1', '2020-12-12 01:25:59', '2020-12-12 02:46:24'),
(29, 'HR1607333951', '::1', '2020-12-12 03:23:22', '2020-12-12 04:03:28'),
(30, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 04:04:20', '2020-12-12 05:41:20'),
(31, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 04:43:36', '2020-12-12 05:41:20'),
(32, 'superadmin.ems@feedorg.com', '::1', '2020-12-12 05:42:25', '2020-12-12 05:43:20'),
(33, 'superadmin.ems@feedorg.com', '::1', '2020-12-14 11:12:34', '2020-12-14 02:38:41'),
(34, 'superadmin.ems@feedorg.com', '::1', '2020-12-15 10:01:49', '2020-12-15 11:43:54'),
(35, 'superadmin.ems@feedorg.com', '::1', '2020-12-15 11:44:33', '2020-12-15 01:07:52'),
(36, 'E1607309708', '::1', '2020-12-15 01:08:05', '2020-12-15 01:12:01'),
(37, 'E1607309708', '::1', '2020-12-15 01:12:30', '2020-12-15 01:19:57'),
(38, 'HR1607333951', '::1', '2020-12-15 01:20:07', '2020-12-15 01:26:52'),
(39, 'superadmin.ems@feedorg.com', '::1', '2020-12-30 01:08:52', '2020-12-30 02:33:20'),
(40, 'superadmin.ems@feedorg.com', '::1', '2020-12-30 04:27:59', '2020-12-30 04:29:23'),
(41, 'superadmin.ems@feedorg.com', '::1', '2020-12-30 04:28:02', '2020-12-30 04:29:23'),
(42, 'superadmin.ems@feedorg.com', '::1', '2020-12-30 04:30:50', '2020-12-30 04:41:31'),
(43, 'superadmin.ems@feedorg.com', '::1', '2020-12-30 04:44:14', '2020-12-30 05:38:50'),
(44, 'superadmin.ems@feedorg.com', '::1', '2020-12-31 09:40:52', '2020-12-31 10:14:41'),
(45, 'SB1607337537', '::1', '2020-12-31 10:25:22', '2020-12-31 10:41:09'),
(46, 'superadmin.ems@feedorg.com', '::1', '2020-12-31 10:33:07', '2020-12-31 01:24:11'),
(47, 'SB1607337537', '::1', '2020-12-31 10:49:36', '2020-12-31 10:50:38'),
(48, 'SB1607337537', '::1', '2020-12-31 10:52:02', '2020-12-31 11:19:59'),
(49, 'SB1607337537', '::1', '2020-12-31 11:21:44', '2020-12-31 11:41:57'),
(50, 'SB1607337537', '::1', '2020-12-31 11:43:35', '2020-12-31 12:02:23'),
(51, 'SB1607337537', '::1', '2020-12-31 12:04:18', '2020-12-31 01:00:36'),
(52, 'SB1607337537', '::1', '2020-12-31 01:00:51', '2020-12-31 01:23:55'),
(53, 'SB1607337537', '::1', '2020-12-31 01:59:06', '2020-12-31 03:27:28'),
(54, 'superadmin.ems@feedorg.com', '::1', '2020-12-31 03:20:48', '2020-12-31 05:43:05'),
(55, 'SB1607337537', '::1', '2020-12-31 03:29:44', '2020-12-31 04:16:10'),
(56, 'SB1607337537', '::1', '2020-12-31 04:16:26', '2020-12-31 04:26:57'),
(57, 'E1607309708', '::1', '2020-12-31 04:27:39', '2020-12-31 04:56:57'),
(58, 'E1607309708', '::1', '2020-12-31 05:01:13', '2020-12-31 05:31:22'),
(59, 'superadmin.ems@feedorg.com', '::1', '2020-12-31 05:32:00', '2020-12-31 06:05:55'),
(60, 'E1607309708', '::1', '2021-01-01 10:23:31', '2021-01-01 10:32:43'),
(61, 'D1607328233', '::1', '2021-01-01 10:33:20', '2021-01-01 10:57:52'),
(62, 'D1607328233', '::1', '2021-01-01 10:59:31', '2021-01-01 11:31:52'),
(63, 'D1607328233', '::1', '2021-01-01 11:33:56', '2021-01-01 11:42:05'),
(64, 'HR1607333951', '::1', '2021-01-01 11:42:21', '2021-01-01 11:55:25'),
(65, 'HR1607333951', '::1', '2021-01-01 11:58:26', '2021-01-01 12:06:35'),
(66, 'superadmin.ems@feedorg.com', '::1', '2021-01-01 12:06:58', '2021-01-01 12:31:49'),
(67, 'superadmin.ems@feedorg.com', '::1', '2021-01-01 12:33:00', '2021-01-01 12:40:41'),
(68, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 09:56:43', '2021-01-04 09:59:58'),
(69, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 09:59:22', '2021-01-04 09:59:58'),
(70, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 11:43:21', '2021-01-04 11:51:44'),
(71, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 11:52:43', '2021-01-04 11:53:47'),
(72, 'E1607309708', '::1', '2021-01-04 11:54:01', '2021-01-04 11:54:11'),
(73, 'D1607328233', '::1', '2021-01-04 11:56:49', '2021-01-04 11:57:32'),
(74, 'HR1607333951', '::1', '2021-01-04 11:57:47', '2021-01-04 11:58:05'),
(75, 'SB1607337537', '::1', '2021-01-04 11:58:19', '2021-01-04 11:58:42'),
(76, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 11:58:59', '2021-01-04 12:01:18'),
(77, 'SB1607337537', '::1', '2021-01-04 12:01:33', '2021-01-04 12:07:18'),
(78, 'SB1607337537', '::1', '2021-01-04 12:07:57', '2021-01-04 12:08:37'),
(79, 'E1607309708', '::1', '2021-01-04 12:08:52', '2021-01-04 12:39:05'),
(80, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 12:39:30', '2021-01-04 12:49:04'),
(81, 'E1607309708', '::1', '2021-01-04 12:49:18', '2021-01-04 12:50:27'),
(82, 'E1607309708', '::1', '2021-01-04 12:54:01', '2021-01-04 12:55:27'),
(83, 'superadmin.ems@feedorg.com', '::1', '2021-01-04 12:55:54', '2021-01-04 01:11:48'),
(84, 'E1607309708', '::1', '2021-01-04 01:12:00', '2021-01-04 01:47:13'),
(85, 'E1607309708', '::1', '2021-01-04 01:48:21', '2021-01-04 02:22:25'),
(86, 'E1607309708', '::1', '2021-01-04 03:36:17', '2021-01-04 03:44:30'),
(87, 'E1607309708', '::1', '2021-01-04 03:45:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Sno` int(11) NOT NULL,
  `messageId` varchar(20) DEFAULT NULL,
  `messageFrom` text DEFAULT NULL,
  `messageTo` text DEFAULT NULL,
  `replyTo` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `messageStatus` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Sno`, `messageId`, `messageFrom`, `messageTo`, `replyTo`, `subject`, `body`, `messageStatus`, `createdOn`, `modifiedOn`) VALUES
(2, 'M1607775189', 'superadmin.ems@feedorg.com', 'HR1607333951', NULL, 'Test Mail', 'Hello', '0', '2020-12-12 05:43:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Sno` int(11) NOT NULL,
  `notificationId` varchar(20) DEFAULT NULL,
  `notificationType` varchar(20) DEFAULT NULL,
  `notificationSubject` varchar(100) DEFAULT NULL,
  `notificationBody` varchar(200) DEFAULT NULL,
  `notificationFrom` text DEFAULT NULL,
  `notificationTo` text DEFAULT NULL,
  `notificationStatus` text DEFAULT NULL,
  `notifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Sno`, `notificationId`, `notificationType`, `notificationSubject`, `notificationBody`, `notificationFrom`, `notificationTo`, `notificationStatus`, `notifiedOn`) VALUES
(1, 'N1607771331', 'Emergency', 'Reminder about Holiday', 'Tomorrow is a holiday due to Bhaarath bandh', 'superadmin.ems@feedorg.com', 'E1607309708,D1607328233,HR1607333951', '0,0,0', '2020-12-12 04:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `subadmins`
--

CREATE TABLE `subadmins` (
  `Sno` int(11) NOT NULL,
  `sAdminId` text DEFAULT NULL,
  `sAdminName` varchar(50) DEFAULT NULL,
  `sAdminEmail` varchar(100) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `sAdminMobNo` varchar(12) DEFAULT NULL,
  `sAdminState` varchar(20) DEFAULT NULL,
  `sAdminCity` varchar(20) DEFAULT NULL,
  `sAdminAddr` text DEFAULT NULL,
  `picPath` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subadmins`
--

INSERT INTO `subadmins` (`Sno`, `sAdminId`, `sAdminName`, `sAdminEmail`, `Password`, `sAdminMobNo`, `sAdminState`, `sAdminCity`, `sAdminAddr`, `picPath`, `features`, `createdOn`, `modifiedOn`) VALUES
(1, 'SB1607337537', 'Sarath', 'gvnd.sarath1996@gmail.com', '$2y$10$G87SdsiaKUKyYG216wM6GuCmbcjHRs.qNzTiyiv/jiaIbKkSggcCu', '9298807199', 'Andhra Pradesh', 'Vijayawada', 'Prasadampadu, Vijayawada', 'sAdmin-pics/0a01665b11260d26de5589a987629e38.png', 'send-notifications,wage-payouts,add-employee,add-depthead,add-department,add-hr,manage-tasks,application-data', '2020-12-07 04:08:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `Sno` int(11) NOT NULL,
  `taskId` text DEFAULT NULL,
  `taskTitle` varchar(100) DEFAULT NULL,
  `taskDescription` text DEFAULT NULL,
  `documentPath` text DEFAULT NULL,
  `assignedBy` text DEFAULT NULL,
  `assignedTo` text DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `deadline` text DEFAULT NULL,
  `taskCreatedOn` datetime DEFAULT NULL,
  `taskModifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`Sno`, `taskId`, `taskTitle`, `taskDescription`, `documentPath`, `assignedBy`, `assignedTo`, `priority`, `deadline`, `taskCreatedOn`, `taskModifiedOn`) VALUES
(1, 'T1608017499', 'Sample Task', 'Sample task is for test', 'docs/16080174995fd8665b274126.47294878.pdf', 'superadmin.ems@feedorg.com', 'E1607309708', 3, '2020-12-16T13:01', '2020-12-15 01:01:39', NULL),
(4, 'T1609407649', 'Sample Task', 'Sample task description', 'docs/16094076495fed9ca1592085.06432096.pdf', 'SB1607337537', 'E1607309708', 1, '2021-01-01T15:10', '2020-12-31 03:10:49', NULL),
(6, 'T1609417704', 'Sample Task', 'Sample task description', 'docs/16094177045fedc3e8a70c50.70690068.pdf', 'superadmin.ems@feedorg.com', 'D1607328233,HR1607333951', 2, '2021-01-01T17:58', '2020-12-31 05:58:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_submissions`
--

CREATE TABLE `task_submissions` (
  `Sno` int(11) NOT NULL,
  `taskId` text DEFAULT NULL,
  `documentPath` text DEFAULT NULL,
  `submittedBy` text DEFAULT NULL,
  `submittedOn` datetime DEFAULT NULL,
  `modifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_submissions`
--

INSERT INTO `task_submissions` (`Sno`, `taskId`, `documentPath`, `submittedBy`, `submittedOn`, `modifiedOn`) VALUES
(2, 'T1608017499', 'docs/16094136385fedb4060f5e98.36220515.pdf', 'E1607309708', '2020-12-31 04:50:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wagelinks`
--

CREATE TABLE `wagelinks` (
  `Sno` int(11) NOT NULL,
  `payeeId` varchar(20) DEFAULT NULL,
  `referenceId` varchar(20) DEFAULT NULL,
  `payoutId` varchar(20) DEFAULT NULL,
  `payoutLink` text DEFAULT NULL,
  `amount` double(19,2) DEFAULT NULL,
  `linkExpiryDate` date DEFAULT NULL,
  `release_status` int(11) DEFAULT 0,
  `createdOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wagelinks`
--

INSERT INTO `wagelinks` (`Sno`, `payeeId`, `referenceId`, `payoutId`, `payoutLink`, `amount`, `linkExpiryDate`, `release_status`, `createdOn`) VALUES
(2, 'E1607309708', '22957', 'WP1607537547', 'https://csgr.am/d8ytf95', 472.00, '2020-12-14', 1, '2020-12-09 11:42:28'),
(3, 'HR1607333951', '23031', 'WP1607759093', 'https://csgr.am/86iiw6k', 12000.00, '2020-12-17', 1, '2020-12-12 01:14:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `dept_heads`
--
ALTER TABLE `dept_heads`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `fpos`
--
ALTER TABLE `fpos`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `hrs`
--
ALTER TABLE `hrs`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `subadmins`
--
ALTER TABLE `subadmins`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `task_submissions`
--
ALTER TABLE `task_submissions`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `wagelinks`
--
ALTER TABLE `wagelinks`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_heads`
--
ALTER TABLE `dept_heads`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fpos`
--
ALTER TABLE `fpos`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrs`
--
ALTER TABLE `hrs`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmins`
--
ALTER TABLE `subadmins`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task_submissions`
--
ALTER TABLE `task_submissions`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wagelinks`
--
ALTER TABLE `wagelinks`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
