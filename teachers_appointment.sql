-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 12:47 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachers_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `acchivements`
--

CREATE TABLE `acchivements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acchivements`
--

INSERT INTO `acchivements` (`id`, `date`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '2019-11-21', 'test', 'test', '2019-11-20 22:58:47', '2019-11-20 22:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_requests`
--

CREATE TABLE `appointment_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_request_approves`
--

CREATE TABLE `appointment_request_approves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `std_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_request_approves`
--

INSERT INTO `appointment_request_approves` (`id`, `name`, `std_id`, `phone`, `email`, `problem`, `slot`, `created_at`, `updated_at`) VALUES
(1, 'Thanbir Tamim', '161-35-1451', '01717175888', 'sk.tamim56@gmail.com', 'no pb', '10:00', '2019-11-27 02:40:01', '2019-11-27 02:40:01'),
(2, 'test', 'test', '01717175888', 'sk.tamim56@gmail.com', 'xcvxcvx', '10:00', '2019-11-27 03:00:35', '2019-11-27 03:00:35'),
(3, 'test', 'test', '01717175888', 'sk.tamim56@gmail.com', 'okkkkkkkkkkkkk', '10:15', '2019-11-27 11:41:31', '2019-11-27 11:41:31'),
(4, 'test', 'test', '01730354476', 'test@gmail.com', 'test', '10:15', '2019-11-27 11:51:58', '2019-11-27 11:51:58'),
(5, 'Thanbir Tamim', '161-35-1451', '01717175888', 'sk.tamim56@gmail.com', 'Testttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', '11:30', '2019-11-27 12:08:31', '2019-11-27 12:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_request_declines`
--

CREATE TABLE `appointment_request_declines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `std_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_request_declines`
--

INSERT INTO `appointment_request_declines` (`id`, `name`, `std_id`, `phone`, `email`, `problem`, `slot`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '01717175888', 'sk.tamim56@gmail.com', 'test', '4:45', '2019-11-27 02:54:16', '2019-11-27 02:54:16'),
(2, 'test', 'test', '01752217800', 'test@gmail.com', 'test', '4:00', '2019-11-27 02:57:29', '2019-11-27 02:57:29'),
(3, 'test', 'test', '01717175888', 'tamimtamim1451@gmail.com', 'vgfdgb', '10:00', '2019-11-27 10:40:21', '2019-11-27 10:40:21'),
(4, 'fgf', 'fg', 'fg', 'apon@gmail.com', 'fgfg', '10:15', '2019-11-27 10:52:41', '2019-11-27 10:52:41'),
(5, 'test', 'test', 'test', 'test@gmail.com', 'dfdfg', '4:15', '2019-11-27 10:52:47', '2019-11-27 10:52:47'),
(6, 'test', 'test', '01717175888', 'test@gmail.com', 'sdfdf', '4:30', '2019-11-27 10:52:54', '2019-11-27 10:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(2, 'test', 'Test', 'https://www.youtube.com/', '2019-11-20 22:37:39', '2019-11-20 22:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `join_thesis_projects`
--

CREATE TABLE `join_thesis_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_11_20_121102_create_events_table', 1),
(10, '2019_11_20_121304_create_slide_shows_table', 1),
(11, '2019_11_20_121443_create_appointment_requests_table', 1),
(12, '2019_11_20_121545_create_teacher_messages_table', 1),
(13, '2019_11_20_121640_create_appointment_request_approves_table', 1),
(14, '2019_11_20_121654_create_appointment_request_declines_table', 1),
(15, '2019_11_20_121915_create_taken_courses_table', 1),
(16, '2019_11_20_121933_create_acchivements_table', 1),
(17, '2019_11_20_122051_create_recent_projects_table', 1),
(18, '2019_11_20_122141_create_thesis_project_students_table', 1),
(19, '2019_11_20_122230_create_notice_boards_table', 1),
(20, '2019_11_20_122251_create_professional_experiences_table', 1),
(21, '2019_11_20_125328_create_teacher_memberships_table', 1),
(22, '2019_11_22_092109_create_join_thesis_projects_table', 2),
(23, '2019_11_25_134647_create_teacher_routines_table', 3),
(24, '2019_11_26_044319_create_slot_occupies_table', 4),
(25, '2019_11_26_045050_create_slot_per_days_table', 5),
(26, '2019_11_27_050120_create_waiting_for_appointments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Department of Software Engineering', 'test', '2019-11-21 00:28:16', '2019-11-21 00:28:16'),
(2, 'CSE', 'n/a', '2019-11-21 09:14:59', '2019-11-21 09:14:59'),
(3, 'MCT', 'vvv', '2019-11-21 10:25:01', '2019-11-21 10:25:01'),
(4, 'test', 'a', '2019-11-21 10:29:02', '2019-11-21 10:29:02'),
(5, 'test2', 'a', '2019-11-21 10:29:10', '2019-11-21 10:29:10'),
(6, 'test3', 'a', '2019-11-21 10:29:16', '2019-11-21 10:29:16'),
(7, 'test4', 't', '2019-11-21 10:29:27', '2019-11-21 10:29:27'),
(8, 'test5', '5', '2019-11-21 10:29:44', '2019-11-21 10:29:44'),
(9, 'test6', '6', '2019-11-21 10:29:55', '2019-11-21 10:29:55'),
(10, 'test7', '7', '2019-11-21 10:30:10', '2019-11-21 10:30:10'),
(11, 'Department of Software Engineering', 'I am not able to take class', '2019-11-28 10:19:51', '2019-11-28 10:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_experiences`
--

CREATE TABLE `professional_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_experiences`
--

INSERT INTO `professional_experiences` (`id`, `skill`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2019-11-21 00:43:32', '2019-11-21 00:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `recent_projects`
--

CREATE TABLE `recent_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finish_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_projects`
--

INSERT INTO `recent_projects` (`id`, `name`, `members`, `description`, `start_time`, `finish_time`, `created_at`, `updated_at`, `type`) VALUES
(1, 'test', 'a; b', 'test', '2020-01-01', '2020-01-01', '2019-11-20 23:38:10', '2019-11-20 23:38:10', 'Thesis'),
(2, 'test2', 'a; b', NULL, '2020-01-01', '2020-01-01', '2019-11-20 23:38:46', '2019-11-20 23:38:46', 'Thesis'),
(3, 'test3', 'a; b', NULL, '2020-01-01', '2020-01-01', '2019-11-20 23:39:03', '2019-11-20 23:39:03', 'Project');

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_shows`
--

INSERT INTO `slide_shows` (`id`, `file`, `created_at`, `updated_at`) VALUES
(6, 'maruf4.jpg', '2019-11-28 09:22:24', '2019-11-28 09:22:24'),
(7, 'maruf5.jpg', '2019-11-28 09:22:58', '2019-11-28 09:22:58'),
(8, 'maruf7.jpg', '2019-11-28 09:23:11', '2019-11-28 09:23:11'),
(13, 'marufsir3.jpg', '2019-11-28 09:58:43', '2019-11-28 09:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `slot_occupies`
--

CREATE TABLE `slot_occupies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slot_per_days`
--

CREATE TABLE `slot_per_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot11` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot12` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot13` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot14` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot15` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot16` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot17` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot18` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot19` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot20` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot21` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot22` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot23` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot24` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot25` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot26` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot27` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot28` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot29` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot30` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot31` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot32` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot33` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot34` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot35` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot36` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_per_days`
--

INSERT INTO `slot_per_days` (`id`, `day`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `slot8`, `slot9`, `slot10`, `slot11`, `slot12`, `slot13`, `slot14`, `slot15`, `slot16`, `slot17`, `slot18`, `slot19`, `slot20`, `slot21`, `slot22`, `slot23`, `slot24`, `slot25`, `slot26`, `slot27`, `slot28`, `slot29`, `slot30`, `slot31`, `slot32`, `slot33`, `slot34`, `slot35`, `slot36`, `created_at`, `updated_at`) VALUES
(16, '1', NULL, NULL, NULL, NULL, NULL, NULL, '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-26 23:32:12', '2019-11-26 23:32:12'),
(17, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1:00', '1:15', '1:30', '1:45', '2:00', '2:15', '2:30', '2:45', '3:00', '3:15', '3:30', '3:45', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-26 23:32:45', '2019-11-26 23:32:45'),
(18, '3', NULL, NULL, NULL, NULL, NULL, NULL, '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '1:00', '1:15', '1:30', '1:45', '2:00', '2:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-26 23:33:00', '2019-11-26 23:33:00'),
(19, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-26 23:33:15', '2019-11-26 23:33:15'),
(20, '5', NULL, NULL, NULL, NULL, NULL, NULL, '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4:00', '4:15', '4:30', '4:45', '5:00', '5:15', '2019-11-26 23:33:28', '2019-11-26 23:33:28'),
(28, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 23:50:52', '2019-11-27 23:50:52'),
(29, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 23:51:06', '2019-11-27 23:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `taken_courses`
--

CREATE TABLE `taken_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taken_courses`
--

INSERT INTO `taken_courses` (`id`, `course_type`, `course_code`, `course_title`, `course_description`, `created_at`, `updated_at`) VALUES
(2, 'Undergraduate', 'SWE111', 'Introduction To Software Engineering', 'test', '2019-11-20 10:05:30', '2019-11-20 10:05:30'),
(3, 'Undergraduate', 'SWE112', 'Introduction To Software Engineering 2', 'test 2', '2019-11-20 10:14:08', '2019-11-20 10:14:08'),
(4, 'Graduate', 'SWE113', 'Introduction To Software Engineering3', 'test3', '2019-11-20 10:14:27', '2019-11-20 10:14:27'),
(6, 'Graduate', 'SWE114', 'Introduction To Software Engineering4', 'test', '2019-11-20 11:00:33', '2019-11-20 11:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_memberships`
--

CREATE TABLE `teacher_memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_memberships`
--

INSERT INTO `teacher_memberships` (`id`, `name`, `date`, `created_at`, `updated_at`) VALUES
(1, 'CSC', '2019-01-01', '2019-11-21 00:52:36', '2019-11-21 00:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_messages`
--

CREATE TABLE `teacher_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_messages`
--

INSERT INTO `teacher_messages` (`id`, `name`, `designation`, `department`, `university`, `message`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Md. Maruf Hassan', 'Assistant Professor', 'Department of Software Engineering', 'Daffodil International University', 'Text messages are used for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.', 'maruf.jpg', '2019-11-20 09:19:05', '2019-11-20 09:19:05'),
(2, 'Md. Maruf Hassan', 'Assistant Professor', 'Department of Software Engineering', 'Daffodil International University', 'Text messages are used for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.', 'marufsir6.jpg', '2019-11-28 09:24:43', '2019-11-28 09:24:43'),
(3, 'Md. Maruf Hassan', 'Assistant Professor', 'Department of Software Engineering', 'Daffodil International University', 'Text messages are used for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.', 'maruf.jpg', '2019-11-28 09:25:29', '2019-11-28 09:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_routines`
--

CREATE TABLE `teacher_routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_routines`
--

INSERT INTO `teacher_routines` (`id`, `day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `created_at`, `updated_at`) VALUES
(40, '1', 'SWE114D;505AB', 'Counselling', 'Counselling', 'SWE114D;505AB', 'SWE112D;605AB', NULL, '2019-11-26 23:32:12', '2019-11-26 23:32:12'),
(41, '2', 'SWE114D;505AB', 'SWE131D;405AB', 'SWE114D;505AB', 'Counselling', 'Counselling', NULL, '2019-11-26 23:32:45', '2019-11-26 23:32:45'),
(42, '3', 'SWE114D;505AB', 'Counselling', 'Counselling', 'Counselling', 'SWE112D;605AB', 'SWE112D;605AB', '2019-11-26 23:33:00', '2019-11-26 23:33:00'),
(43, '4', 'SWE114D;505AB', 'SWE131D;405AB', 'Counselling', 'SWE114D;505AB', 'SWE112D;605AB', 'SWE112D;605AB', '2019-11-26 23:33:15', '2019-11-26 23:33:15'),
(44, '5', 'SWE114D;505AB', 'Counselling', 'SWE114D;505AB', 'SWE114D;505AB', 'SWE112D;605AB', 'Counselling', '2019-11-26 23:33:28', '2019-11-26 23:33:28'),
(53, '7', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 23:50:51', '2019-11-27 23:50:51'),
(54, '6', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 23:51:06', '2019-11-27 23:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thesis_project_students`
--

CREATE TABLE `thesis_project_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_time` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thesis_project_students`
--

INSERT INTO `thesis_project_students` (`id`, `student_id`, `name`, `email`, `course_type`, `pt_title`, `created_at`, `updated_at`, `start_time`) VALUES
(1, '123', 'Tamim', 'sk.tamim56@gmail.com', 'Thesis', 'test', '2019-11-21 00:09:38', '2019-11-21 00:09:38', '2020-01-01'),
(3, '1235', 'Tamim', 'tamimthanbir@gmail.com', 'Project', 'test', '2019-11-21 00:10:05', '2019-11-21 00:10:05', '2020-01-01'),
(15, '123', 'Tamim', 'a@gmail.com', 'Thesis', 'test', '2019-11-22 04:25:15', '2019-11-22 04:25:15', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tamim', 'sk.tamim56@gmail.com', NULL, '$2y$10$Zp5FC7qvGYQcsHbSSCo7yO8VvL2WnC9g7OG0IHFhJNE0d9ROhDV6O', '31GdgmxuGtI96hJOq9ulJl8w7PvivdQfqPGpkf4qfxUsdE5HqFgdigYd6iux', '2019-11-20 08:10:43', '2019-11-20 08:10:43'),
(2, 'Md. Maruf Hassan', 'maruf.swe@diu.edu.bd', NULL, '$2y$10$rFwtx4TeTyg9JJi9E3oT0O1AbfLSwu66IYUVDX2JoB9c5Q9oxHvEy', NULL, '2019-11-28 10:26:08', '2019-11-28 10:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_for_appointments`
--

CREATE TABLE `waiting_for_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acchivements`
--
ALTER TABLE `acchivements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_request_approves`
--
ALTER TABLE `appointment_request_approves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_request_declines`
--
ALTER TABLE `appointment_request_declines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_thesis_projects`
--
ALTER TABLE `join_thesis_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `professional_experiences`
--
ALTER TABLE `professional_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_projects`
--
ALTER TABLE `recent_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_occupies`
--
ALTER TABLE `slot_occupies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slot_occupies_slot_unique` (`slot`);

--
-- Indexes for table `slot_per_days`
--
ALTER TABLE `slot_per_days`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day` (`day`);

--
-- Indexes for table `taken_courses`
--
ALTER TABLE `taken_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_memberships`
--
ALTER TABLE `teacher_memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_messages`
--
ALTER TABLE `teacher_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_routines`
--
ALTER TABLE `teacher_routines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_2` (`day`),
  ADD UNIQUE KEY `day_3` (`day`),
  ADD KEY `day` (`day`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis_project_students`
--
ALTER TABLE `thesis_project_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waiting_for_appointments`
--
ALTER TABLE `waiting_for_appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `waiting_for_appointments_slot_unique` (`slot`),
  ADD UNIQUE KEY `slot` (`slot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acchivements`
--
ALTER TABLE `acchivements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_request_approves`
--
ALTER TABLE `appointment_request_approves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment_request_declines`
--
ALTER TABLE `appointment_request_declines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `join_thesis_projects`
--
ALTER TABLE `join_thesis_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `professional_experiences`
--
ALTER TABLE `professional_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recent_projects`
--
ALTER TABLE `recent_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slot_occupies`
--
ALTER TABLE `slot_occupies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot_per_days`
--
ALTER TABLE `slot_per_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `taken_courses`
--
ALTER TABLE `taken_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_memberships`
--
ALTER TABLE `teacher_memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_messages`
--
ALTER TABLE `teacher_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher_routines`
--
ALTER TABLE `teacher_routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thesis_project_students`
--
ALTER TABLE `thesis_project_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waiting_for_appointments`
--
ALTER TABLE `waiting_for_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
