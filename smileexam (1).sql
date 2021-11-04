-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 08:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smileexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'martinagirgis@yahoo.com', NULL, '$2y$10$PRBVWk9Z.qEGHym1AUJR.uhQSunAVHtY3YNwS5mfdDpihUuzT365e', '1.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buplisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_questions`
--

CREATE TABLE `exam_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `hints`
--

CREATE TABLE `hints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hints`
--

INSERT INTO `hints` (`id`, `description`, `media_id`, `created_at`, `updated_at`) VALUES
(8, '12', 13, '2021-10-29 02:02:10', '2021-10-29 02:02:10'),
(9, '122222', 21, '2021-10-29 02:02:42', '2021-10-29 12:02:30'),
(10, '12', NULL, '2021-10-29 04:27:15', '2021-10-29 04:27:15'),
(11, '12', NULL, '2021-10-29 11:44:12', '2021-10-29 11:44:12'),
(12, '12', NULL, '2021-10-29 11:53:15', '2021-10-29 11:53:15'),
(13, '1234', 26, '2021-10-29 12:54:55', '2021-10-29 12:55:14'),
(14, NULL, NULL, '2021-10-29 13:02:45', '2021-10-29 13:10:58'),
(15, 'نوووووووووووووووووووووت', 34, '2021-11-03 08:37:06', '2021-11-03 08:37:06'),
(16, 'نوووووووووووووووووووووت', 35, '2021-11-03 08:39:43', '2021-11-03 08:39:43'),
(17, 'نوووووووووووووووووووووت', 36, '2021-11-03 08:46:18', '2021-11-03 08:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `subjects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `degree`, `email`, `email_verified_at`, `password`, `media_id`, `subjects`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'martina girgis said', 'master', 'martinagirgis@yahoo.com', NULL, '12341234', 30, '1', NULL, '2021-11-02 20:34:30', '2021-11-02 20:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `media_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'new lesson1', 'new lesson1', 'new lesson1', 'new lesson1', 3, 1, '2021-10-28 19:44:13', '2021-10-28 19:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `table_name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'image', 'subjects', '1635456963_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-28 19:36:03', '2021-10-28 19:36:03'),
(2, 'image', 'lessons', '1635457408_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-28 19:43:28', '2021-10-28 19:43:28'),
(3, 'image', 'lessons', '1635457453_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-28 19:44:13', '2021-10-28 19:44:13'),
(4, 'image', 'lessons', '1635467118_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-28 22:25:18', '2021-10-28 22:25:18'),
(5, 'image', 'lessons', '1635467144_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-28 22:25:44', '2021-10-28 22:25:44'),
(6, 'image', 'lessons', '1635467177_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-28 22:26:17', '2021-10-28 22:26:17'),
(7, 'image', 'questions', '1635479898_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 01:58:18', '2021-10-29 01:58:18'),
(8, 'image', 'questions', '1635479942_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 01:59:02', '2021-10-29 01:59:02'),
(10, 'image', 'hints', '1635480005_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:00:05', '2021-10-29 02:00:05'),
(11, 'image', 'hints', '1635480076_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:01:16', '2021-10-29 02:01:16'),
(13, 'image', 'hints', '1635480130_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:02:10', '2021-10-29 02:02:10'),
(14, 'image', 'questions', '1635480130_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:02:10', '2021-10-29 02:02:10'),
(15, 'image', 'hints', '1635480162_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:02:42', '2021-10-29 02:02:42'),
(16, 'image', 'questions', '1635480162_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 02:02:42', '2021-10-29 02:02:42'),
(17, 'image', 'questions', '1635480182_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 02:03:02', '2021-10-29 02:03:02'),
(18, 'image', 'questions', '1635480216_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 02:03:36', '2021-10-29 02:03:36'),
(19, 'image', 'hints', '1635515861_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 11:57:41', '2021-10-29 11:57:41'),
(20, 'image', 'questions', '1635515884_210567804_2347682638709524_1501649210416369358_n.jpg', '2021-10-29 11:58:04', '2021-10-29 11:58:04'),
(21, 'image', 'hints', '1635516150_210567804_2347682638709524_1501649210416369358_n.jpg', '2021-10-29 12:02:30', '2021-10-29 12:02:30'),
(22, 'image', 'questions', '1635516204_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 12:03:24', '2021-10-29 12:03:24'),
(23, 'image', 'questions', '1635516662_209439242_2347682635376191_796910248111631557_n.jpg', '2021-10-29 12:11:02', '2021-10-29 12:11:02'),
(24, 'image', 'questions', '1635518575_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 12:42:55', '2021-10-29 12:42:55'),
(26, 'image', 'hints', '1635519314_72682801_109045173848330_6121582849372979200_n.jpg', '2021-10-29 12:55:14', '2021-10-29 12:55:14'),
(27, 'image', 'instructors', '1635891959_22.png', '2021-11-02 20:25:59', '2021-11-02 20:25:59'),
(28, 'image', 'instructors', '1635892051_22.png', '2021-11-02 20:27:31', '2021-11-02 20:27:31'),
(29, 'image', 'instructors', '1635892265_22.png', '2021-11-02 20:31:05', '2021-11-02 20:31:05'),
(30, 'image', 'instructors', '1635892470_22.png', '2021-11-02 20:34:30', '2021-11-02 20:34:30'),
(31, 'image', 'students', '1635892630_2.jpg', '2021-11-02 20:37:10', '2021-11-02 20:37:10'),
(32, 'image', 'students', '1635892698_2.jpg', '2021-11-02 20:38:18', '2021-11-02 20:38:18'),
(33, 'image', 'subjects', '1635893076_logo.png', '2021-11-02 20:44:36', '2021-11-02 20:44:36'),
(34, 'image', 'hints', '1635935826_2.jpg', '2021-11-03 08:37:06', '2021-11-03 08:37:06'),
(35, 'image', 'hints', '1635935983_2.jpg', '2021-11-03 08:39:43', '2021-11-03 08:39:43'),
(36, 'image', 'hints', '1635936378_2.jpg', '2021-11-03 08:46:18', '2021-11-03 08:46:18');

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
(4, '2021_10_16_134336_create_media_table', 1),
(5, '2021_10_16_150128_create_tags_table', 1),
(6, '2021_10_16_150130_create_subjects_table', 1),
(7, '2021_10_16_150131_create_sections_table', 1),
(8, '2021_10_16_150139_create_lessons_table', 1),
(9, '2021_10_16_150234_create_hints_table', 1),
(10, '2021_10_16_150235_create_questions_table', 1),
(11, '2021_10_16_150246_create_exams_table', 1),
(12, '2021_10_26_135931_create_exam_questions_table', 1),
(13, '2021_10_26_140304_create_user_subjects_table', 1),
(14, '2021_10_27_095229_create_admins_table', 1),
(18, '2021_10_28_171027_add_fcm_token_column_to_users_table', 1),
(19, '2021_10_27_095253_create_instructors_table', 2),
(20, '2021_10_27_191625_create_students_table', 2),
(21, '2021_11_03_191239_create_blogs_table', 3);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `media_id` bigint(20) UNSIGNED DEFAULT NULL,
  `answers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_bank` int(11) NOT NULL,
  `hint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `body`, `number`, `media_id`, `answers`, `right_answer`, `question_bank`, `hint_id`, `section`, `created_at`, `updated_at`) VALUES
(13, 'ما هو اليوم الجديد الذي نلعب فيه كره القدم؟', 1, NULL, '1|2|3|4', '0', 1, NULL, 1, '2021-10-29 13:02:45', '2021-10-29 13:11:20'),
(15, 'ما هو لون السماء؟', 1, NULL, 'ازرق|اخضر|احمر|اصفر', '0', 1, 17, 3, '2021-11-03 08:46:18', '2021-11-03 08:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name_ar`, `name_en`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 1, '2021-10-28 19:36:16', '2021-10-28 19:36:16'),
(2, 'test', 'test', 1, '2021-10-28 22:36:52', '2021-10-28 22:36:52'),
(3, 'كورس 1', 'se c1', 2, '2021-11-02 20:54:01', '2021-11-02 20:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `media_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'martina girgis said', 'martinagirgis@yahoo.com', 'phone', NULL, '12341234', 32, NULL, '2021-11-02 20:37:10', '2021-11-02 20:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double DEFAULT NULL,
  `price` double NOT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `rate`, `price`, `tag_id`, `media_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', 0, 10, NULL, 1, '2021-10-28 19:36:03', '2021-10-28 19:36:03'),
(2, 'العنوان بالعربي 2', 'Title In English2', 'العنوان بالعربيالعنوان بالعربيالعنوان بالعربيالعنوان بالعربيالعنوان بالعربي', 'Title In English2Title In English2Title In English2Title In English2', 0, 800, NULL, 33, '2021-11-02 20:44:36', '2021-11-02 20:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `fcm_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `fcm_token`, `created_at`, `updated_at`) VALUES
(1, 'sad', 'sad@yahoo.com', NULL, '12341234', NULL, 'eJVocSIKid7I8ZmedvggMN:APA91bHeHYVHoRIPHJbgzVbUWRoz9QWj-iVcM3QG5ExFbH-31738mvQdZympT_ZSn_JBSHQIs4SBQ5MOsgcwdUmeqq58XLi8FGs79MZ2UEssWVch-QvN5DTDyoRnI57tEJdRxM2fWCIz', NULL, '2021-10-28 16:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_subjects`
--

CREATE TABLE `user_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_media_id_foreign` (`media_id`);

--
-- Indexes for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_questions_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_questions_question_id_foreign` (`question_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hints`
--
ALTER TABLE `hints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hints_media_id_foreign` (`media_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_email_unique` (`email`),
  ADD KEY `instructors_media_id_foreign` (`media_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_media_id_foreign` (`media_id`),
  ADD KEY `lessons_section_id_foreign` (`section_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_hint_id_foreign` (`hint_id`),
  ADD KEY `questions_media_id_foreign` (`media_id`),
  ADD KEY `section` (`section`) USING BTREE;

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_phone_unique` (`phone`),
  ADD KEY `students_media_id_foreign` (`media_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_tag_id_foreign` (`tag_id`),
  ADD KEY `subjects_media_id_foreign` (`media_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_subjects`
--
ALTER TABLE `user_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subjects_user_id_foreign` (`user_id`),
  ADD KEY `user_subjects_subject_id_foreign` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_questions`
--
ALTER TABLE `exam_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hints`
--
ALTER TABLE `hints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_subjects`
--
ALTER TABLE `user_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD CONSTRAINT `exam_questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `exam_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `hints`
--
ALTER TABLE `hints`
  ADD CONSTRAINT `hints_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `lessons_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_hint_id_foreign` FOREIGN KEY (`hint_id`) REFERENCES `hints` (`id`),
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`section`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `questions_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `subjects_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `user_subjects`
--
ALTER TABLE `user_subjects`
  ADD CONSTRAINT `user_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `user_subjects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
