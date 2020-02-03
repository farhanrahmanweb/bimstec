-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 12:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimstec`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'BIMSTEC Document', 'bimstec-document', '2020-01-05 07:25:57', '2020-01-09 04:40:56'),
(2, 'Core BIMSTEC Forum', 'core-bimstec-forum', '2020-01-06 02:49:21', '2020-01-09 04:40:36'),
(3, 'Global Category', 'global-category', '2020-01-09 04:41:50', '2020-01-09 04:41:50'),
(4, 'Priority of Sector Area', 'priority-of-sector-area', '2020-01-09 04:42:07', '2020-01-09 04:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_date` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `subcategory_id`, `title`, `description`, `document_date`, `year`, `file`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'First Test Document', 'hello document list', '2020-01-16', 2020, 'first-test-document-2020-01-09-5e1708c7e4000.pdf', 1, '2020-01-09 05:04:40', '2020-01-09 06:03:42'),
(2, 2, 2, 'New doc', 'new doc', '2020-02-11', 2020, 'new-doc-2020-02-01-5e35d860509b9.pdf', 1, '2020-02-01 13:58:24', '2020-02-01 13:58:24'),
(3, 1, 6, 'New DOOC', 'DETALS', '2019-03-14', 2020, 'new-dooc-2020-02-01-5e35daa9185b0.pdf', 1, '2020-02-01 14:08:09', '2020-02-01 14:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_description`, `event_start_date`, `event_end_date`, `event_location`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'New Events', '<p>Lorem Ipsum</p>', '2020-02-13', '2020-01-03', 'Dhaka', 1, '2020-02-01 13:41:33', '2020-02-02 01:43:21');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_date` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `gallery_date`, `year`, `is_publish`, `created_at`, `updated_at`) VALUES
(16, 'Inaugural Ceremony of the BIMSTEC Secretariat, Dhaka on 13th September, 2014', '2014-09-13', 2020, 1, '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(17, 'Photo Gallery (SG)', '2020-02-02', 2020, 1, '2020-02-02 02:17:25', '2020-02-02 02:17:25');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_02_061901_create_roles_table', 1),
(5, '2020_01_02_123000_create_events_table', 1),
(6, '2020_01_05_090748_create_sliders_table', 1),
(7, '2020_01_05_114256_create_categories_table', 1),
(8, '2020_01_06_064631_create_documents_table', 1),
(9, '2020_01_06_120302_create_videos_table', 1),
(10, '2020_01_07_055329_create_photos_table', 1),
(11, '2020_01_07_060829_create_galleries_table', 1),
(12, '2020_01_08_121427_create_news_table', 1),
(13, '2020_01_09_063601_create_subcategories_table', 1),
(14, '2020_01_15_183919_create_secretaries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@bimstec.com', '$2y$10$4TCXhZfbSRA1//Ax8Z01gexRuCWO7aQDfKCzv7ie6VyiLc/xjvwgK', '2020-01-02 04:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` int(11) NOT NULL DEFAULT 0,
  `event_id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gallery',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `gallery_id`, `event_id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(15, 0, 1, 'event', '2020-02-02-5e367d998c50f1580629401.jpg', '2020-02-02 01:43:21', '2020-02-02 01:43:21'),
(16, 16, 0, 'gallery', '2020-02-02-5e368522191f21580631330.jpg', '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(17, 16, 0, 'gallery', '2020-02-02-5e3685224d3671580631330.jpg', '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(18, 16, 0, 'gallery', '2020-02-02-5e3685226f96a1580631330.jpg', '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(19, 16, 0, 'gallery', '2020-02-02-5e368522990511580631330.jpg', '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(20, 16, 0, 'gallery', '2020-02-02-5e368522c03ed1580631330.jpg', '2020-02-02 02:15:30', '2020-02-02 02:15:30'),
(21, 17, 0, 'gallery', '2020-02-02-5e3685957c0ed1580631445.jpg', '2020-02-02 02:17:25', '2020-02-02 02:17:25'),
(22, 17, 0, 'gallery', '2020-02-02-5e3685959c7fe1580631445.jpg', '2020-02-02 02:17:25', '2020-02-02 02:17:25'),
(23, 17, 0, 'gallery', '2020-02-02-5e368595b98ad1580631445.jpg', '2020-02-02 02:17:25', '2020-02-02 02:17:25'),
(24, 17, 0, 'gallery', '2020-02-02-5e368595d79da1580631445.jpg', '2020-02-02 02:17:26', '2020-02-02 02:17:26'),
(25, 17, 0, 'gallery', '2020-02-02-5e368596040281580631446.jpg', '2020-02-02 02:17:26', '2020-02-02 02:17:26'),
(26, 17, 0, 'gallery', '2020-02-02-5e368596200011580631446.jpg', '2020-02-02 02:17:26', '2020-02-02 02:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Editor', 'editor', NULL, NULL),
(3, 'Member', 'member', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secretaries`
--

INSERT INTO `secretaries` (`id`, `title`, `description`, `type`, `date`, `file`, `is_publish`, `created_at`, `updated_at`) VALUES
(4, 'Inaugural Ceremony of the BIMSTEC Secretariat, Dhaka on 13th September, 2014', NULL, 'statement', '2020-02-06', '2020-02-02-5e368ea7bad6f.jpg', 1, '2020-02-02 01:49:08', '2020-02-02 02:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `link`, `image`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'BIMSTEC', 'The Secretary General of BIMSTEC, H.E. M Shahidul Islam paid tribute at the Mujibnagar Mausoleum, Mujibnagar, Meherpur on 12 January 2020.', '#', '-2020-02-02-5e3673f5f3321.jpg', 1, '2020-02-01 13:49:16', '2020-02-02 01:02:14'),
(2, 'BIMSTEC', 'Mr. A F M Fakhrul Islam Munshi, President, Bangladesh Agro-processors Association (BAPA) met H.E. M. Shahidul Islam, Secretary General of BIMSTEC on 20 January 2020 at the BIMSTEC Secretariat.', '#', '-2020-02-02-5e367308eb92e.jpg', 1, '2020-02-01 13:55:40', '2020-02-02 00:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Summit', 'summit', '2020-01-09 02:16:48', '2020-01-09 04:43:43'),
(2, 2, 'Ministerial Meeting', 'ministerial-meeting', '2020-01-09 04:43:53', '2020-01-09 04:43:53'),
(3, 2, 'Sectoral Ministerial Meeting', 'sectoral-ministerial-meeting', '2020-01-09 04:44:15', '2020-01-09 04:44:15'),
(4, 2, 'Senior Official Meeting', 'senior-official-meeting', '2020-01-09 04:44:40', '2020-01-09 04:44:40'),
(5, 2, 'BPWC', 'bpwc', '2020-01-09 04:45:04', '2020-01-09 04:45:04'),
(6, 1, 'Bangkok Declaration', 'bangkok-declaration', '2020-01-09 04:46:15', '2020-01-09 04:46:15'),
(7, 1, 'MoA', 'moa', '2020-01-09 04:46:59', '2020-01-09 04:46:59'),
(9, 1, 'Administrative Rules', 'administrative-rules', '2020-01-09 04:50:53', '2020-01-09 04:50:53'),
(10, 1, 'BIMSTEC Charter', 'bimstec-charter', '2020-01-09 04:53:33', '2020-01-09 04:53:33'),
(11, 1, 'BTILS', 'btils', '2020-01-09 04:54:48', '2020-01-09 04:54:48'),
(12, 1, 'BIMSTEC Master Plan', 'bimstec-master-plan', '2020-01-09 04:55:06', '2020-01-09 04:55:06'),
(13, 3, 'Declaration', 'declaration', '2020-01-09 04:56:20', '2020-01-09 04:56:20'),
(14, 3, 'Joint Statement', 'joint-statement', '2020-01-09 04:57:03', '2020-01-09 04:57:03'),
(15, 3, 'Speech', 'speech', '2020-01-09 04:57:21', '2020-01-09 04:57:21'),
(16, 3, 'Report', 'report', '2020-01-09 04:57:41', '2020-01-09 04:57:41'),
(17, 3, 'Agenda', 'agenda', '2020-01-09 04:58:20', '2020-01-09 04:58:20'),
(18, 3, 'Concept Note', 'concept-note', '2020-01-09 04:58:35', '2020-01-09 04:58:35'),
(19, 3, 'Information Note', 'information-note', '2020-01-09 04:58:58', '2020-01-09 04:58:58'),
(20, 3, 'Programme', 'programme', '2020-01-09 04:59:12', '2020-01-09 04:59:12'),
(21, 3, 'Registration Form', 'registration-form', '2020-01-09 04:59:26', '2020-01-09 04:59:26'),
(22, 3, 'Others', 'others', '2020-01-09 04:59:38', '2020-01-09 04:59:38'),
(23, 4, 'Trade & Investment', 'trade-investment', '2020-01-09 05:00:20', '2020-01-09 05:00:31'),
(24, 4, 'Technology', 'technology', '2020-01-09 05:00:47', '2020-01-09 05:00:47'),
(25, 4, 'Agricultural', 'agricultural', '2020-01-09 05:01:13', '2020-01-09 05:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr. Admin', 'admin@bimstec.com', NULL, '$2y$10$LQLYgErzJdKuQHVxMn9yzO/d.zm/WFOxIE8PmN/uFOnjXQDtu6T8G', 'default.png', 'bnvNK51EeIkoWeqgbxtKBtlLhM19OOGzV3hdohCzDSn1jwiHj2MX9wC7tOFV', NULL, NULL),
(2, 2, 'Mr. Editor', 'editor@bimstec.com', NULL, '$2y$10$ti5Aa3wF/3csyHSPRURCs.4ORXy4i1ob7uNU3mDZow108j0vHqZ9G', 'default.png', 'Ygk9bQp1UTeQGju06ftbIee6ZFsNtUdxXCKcwVazjvxRCbourFhM2bPEuT7K', NULL, NULL),
(3, 3, 'Mr. Member', 'member@bimstec.com', NULL, '$2y$10$kKVmfSxegXAUq5Mc5xPyku0QDGDWKbbXZand/7SovReJo0bWp4v8S', 'default.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video_url`, `year`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'Inaugural Ceremony of the BIMSTEC Secretariat 2015', 'jIY2lRxN1Fk', NULL, 1, '2020-01-06 07:00:53', '2020-02-02 02:12:51'),
(5, 'Welcome Remarks by Ambassador M Shahidul Islam, Secretary General of BIMSTEC', 'shBcJJTox3s', NULL, 1, '2020-02-02 02:13:06', '2020-02-02 02:13:06'),
(6, 'Address by His Excellency Professor Dr Chop Lal Bhusal, Ambassador of Nepal', '5Gy8H0jnvuY', NULL, 1, '2020-02-02 02:13:26', '2020-02-02 02:13:26'),
(7, 'Inaugural Session of the 4th BIMSTEC Summit in Kathmandu, Nepal', 'x1_Mq-BIkrM', NULL, 0, '2020-02-02 02:14:03', '2020-02-02 02:14:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
