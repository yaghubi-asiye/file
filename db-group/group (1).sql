-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2020 at 04:54 AM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `demo` text NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` char(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `product_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(3, 4, 7, 12750, '0', '2020-04-20 04:42:07', '2020-04-20 04:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `chid` int(11) NOT NULL DEFAULT '0',
  `fa_name` varchar(100) NOT NULL,
  `en_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `chid`, `fa_name`, `en_name`, `created_at`, `updated_at`, `image`) VALUES
(7, 0, 'آموزشی', 'Education', '2020-03-25 12:13:19', '2020-03-25 12:13:19', 'uploads/1585154599-education.png'),
(8, 7, 'برنامه‌نویسی', 'Programming', '2020-03-25 12:15:31', '2020-03-25 12:41:25', 'uploads/1585156285-programming.jpeg'),
(9, 7, 'آشپزی', 'Cooking', '2020-04-01 10:40:59', '2020-04-01 10:40:59', 'uploads/1585753859-cooking.jpeg'),
(10, 0, 'سرگرمی', 'hobby', '2020-04-04 13:41:52', '2020-04-04 13:41:52', 'uploads/1586023912-hobby.jpeg'),
(11, 10, 'بازی', 'game', '2020-04-04 13:43:00', '2020-04-04 13:43:00', 'uploads/1586023980-game.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentable_id`, `commentable_type`, `user_id`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(12, 7, 'App\\Product', 4, '0', 'بسیارعالی', '2020-04-20 05:30:07', '2020-04-20 05:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'asiye', 'asiye@gmail.com', 'پشتیبانی', 'پشتیبانیپشتیبانیپشتیبانیپشتیبانیپشتیبانیپشتیبانی', '2020-04-20 06:35:39', '2020-04-20 06:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` char(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factor_product`
--

CREATE TABLE `factor_product` (
  `factor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `fa_name` varchar(100) NOT NULL,
  `en_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `fa_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'زن', 'female', '2020-03-25 20:15:24', NULL),
(2, 'مرد', 'male', '2020-03-25 20:15:24', NULL);

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
(4, '2020_04_14_183557_create_ratings_table', 2),
(5, '2020_04_14_183957_create_ratings_table', 3),
(6, '2020_04_14_195429_create_comments_table', 4),
(7, '2020_04_15_153623_create_ratings_table', 5),
(8, '2020_04_20_093759_create_ratings_table', 6),
(9, '2020_04_20_104206_create_contacts_table', 7),
(10, '2020_04_20_114253_create_tags_table', 8),
(11, '2020_04_20_114822_create_taggables_table', 9);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `factor_id` int(11) NOT NULL,
  `trackingcode` int(11) NOT NULL,
  `status` char(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `fa_name` varchar(100) NOT NULL,
  `en_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `fa_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'لیست محصولات', 'product_list', '2020-03-25 07:37:21', '2020-03-25 07:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'علم و صنعت', '2020-03-25 14:44:13', '2020-03-25 14:44:13'),
(2, 'نشر چشمه', '2020-04-01 15:54:40', '2020-04-01 15:54:40'),
(3, 'نشر علم', '2020-04-01 15:54:51', '2020-04-01 15:54:51'),
(4, 'مسعود کازرونی', '2020-04-04 05:58:57', '2020-04-04 05:58:57'),
(5, 'محمدباقر منصوری', '2020-04-04 10:00:57', '2020-04-04 10:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  `special` char(1) DEFAULT '0',
  `sales_number` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) DEFAULT '0',
  `image` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `body` text,
  `download_number` int(11) DEFAULT '0',
  `click_number` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `producer_id`, `category_id`, `type_id`, `price`, `status`, `special`, `sales_number`, `discount`, `image`, `file`, `body`, `download_number`, `click_number`, `created_at`, `updated_at`) VALUES
(6, 'کتاب آموزش آشپزی', 4, 9, 1, 10000, '1', '1', 5, 10, 'images/1585997893-khoresht.jpg', 'files/1585997893-cooking.pdf', 'در این کتاب آموزشی پخت بیش از ۲۰ نوع خورش توضیح داده شده است .', 3, 0, '2020-04-04 14:44:22', '2020-04-04 06:28:13'),
(7, 'آموزش جاوا', 1, 8, 1, 15000, '1', '1', 0, 15, 'images/1586010792-java1.jpg', 'files/1586010792-java1.pdf', '<p>کتابی برای آموزش پله پله جاوا</p>', 0, 0, '2020-04-04 14:44:19', '2020-04-04 10:03:12'),
(8, 'آموزش ++C', 4, 8, 1, 15000, '1', '0', 0, 15, 'images/1586010851-cpp.jpg', 'files/1586010851-cpp-pro.pdf', '<p>کتابی برای آموزش پله پله سی&zwnj;پلاس&zwnj;پلاس</p>', 0, 0, '2020-04-04 10:04:11', '2020-04-04 10:04:11'),
(9, 'محصول جدید', 2, 8, 1, 3000000, '1', '0', 0, 22, 'images/1587384658-1.jpeg', 'files/1587384658-asiye.sql', '<h2 style=\"font-style:italic;\">rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</h2>', 0, 0, '2020-04-20 07:40:58', '2020-04-20 07:40:58'),
(10, 'محصول جدید', 1, 8, 1, 242000, '1', '0', 0, 22, 'images/1587385395-2.jpeg', 'files/1587385395-group.sql', '<p>dddddddddddddddddddddddddddddddd</p>', 0, 0, '2020-04-20 07:53:16', '2020-04-20 07:53:16'),
(11, 'محصول جدید', 1, 8, 1, 242000, '1', '0', 0, 22, 'images/1587385462-2.jpeg', 'files/1587385462-group.sql', '<p>dddddddddddddddddddddddddddddddd</p>', 0, 0, '2020-04-20 07:54:22', '2020-04-20 07:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(1, '2020-04-20 05:29:03', '2020-04-20 05:29:03', 3, 'App\\Product', 7, 4),
(2, '2020-04-20 05:29:47', '2020-04-20 05:29:47', 3, 'App\\Product', 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `fa_name` varchar(100) DEFAULT NULL,
  `en_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `fa_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'کاربر', 'User', '2020-03-25 11:14:16', '2020-03-25 06:44:16'),
(2, 'ادمین', 'Admin', '2020-03-25 06:42:40', '2020-03-25 06:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 1),
(1, 6),
(1, 7),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sliderparents`
--

CREATE TABLE `sliderparents` (
  `id` int(11) NOT NULL,
  `fa_name` varchar(100) DEFAULT NULL,
  `en_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliderparents`
--

INSERT INTO `sliderparents` (`id`, `fa_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'اسلایدر فرانت', 'front slider', '2020-04-01 18:44:48', '2020-04-01 14:14:48'),
(2, 'اسلایدر بنر', 'banner slider', '2020-04-01 14:17:24', '2020-04-01 14:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `sliderparent_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `url`, `sliderparent_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, '#', 1, 'اسلایدر ۱', 'uploads/1585769780-slider1.jpg', '2020-04-01 15:06:20', '2020-04-01 15:06:20'),
(2, '#', 1, 'اسلایدر ۲', 'uploads/1585769885-slider2.jpg', '2020-04-01 15:08:05', '2020-04-01 15:08:05'),
(3, '#', 1, 'اسلایدر 3', 'uploads/1585769954-slider3.jpg', '2020-04-01 15:09:14', '2020-04-01 15:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'App\\Product', NULL, NULL),
(2, 3, 6, 'App\\Product', NULL, NULL),
(3, 2, 7, 'App\\Product', NULL, NULL),
(4, 3, 7, 'App\\Product', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'برنامه', '2020-04-20 07:46:53', '2020-04-20 07:46:53'),
(3, 'برنامه نویسی', '2020-04-20 07:47:04', '2020-04-20 07:47:04'),
(4, 'اشپزی', NULL, NULL),
(5, 'اموزشی', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pdf', '2020-04-04 10:56:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender_id`, `lastlogin`) VALUES
(1, 'Batool', 'batool@yahoo.com', NULL, '$2y$10$Z.PKmpOcVmssYOnUd872NuABiFX.LC.8wXKdCr0sNN4oi2BDx73DG', 'Cd9ViNhQydwUnCzHMPeAy6eCp0l1NpxPDCy5lrrLF0yH3hvWbgZw1ftzDaGr', '2020-03-25 06:13:12', '2020-03-25 06:13:12', 1, NULL),
(4, 'asiye', 'asiye@gmail.com', NULL, '$2y$10$O/u6saoPtCCQvdZk3ELJouaClzjfqHsqc43nWgY5K9fwr5sYjXq.6', NULL, '2020-04-05 02:28:49', '2020-04-05 02:28:49', NULL, NULL),
(6, 'mahdis', 'mahdis@yahoo.com', NULL, '$2y$10$jtPPtsT/vMkWNerMdtM7uu9BUHL5lCsRlLiZqgjhIAUIbR668SDpW', NULL, '2020-03-25 07:05:36', '2020-03-25 07:05:36', NULL, NULL),
(7, 'نفیسه سعیدی', 'nafis@yahoo.com', NULL, '$2y$10$1mwMMOkN7MLmQ3iJGpVaEeAktrsA5Jc5PXCFbzq/rD6RWwVv5EGQG', NULL, '2020-04-04 16:13:37', '2020-04-04 16:13:37', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_users_0` (`user_id`),
  ADD KEY `fk_articles_files` (`file_id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_basket_products` (`product_id`),
  ADD KEY `fk_baskets_users_0` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_factors_users_0` (`user_id`);

--
-- Indexes for table `factor_product`
--
ALTER TABLE `factor_product`
  ADD KEY `fk_factor_product_factors` (`factor_id`),
  ADD KEY `fk_factor_product_products` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payments_factors` (`factor_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `fk_permission_role_roles` (`role_id`),
  ADD KEY `fk_permission_role_permissions` (`permission_id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categories` (`category_id`),
  ADD KEY `fk_products_producers` (`producer_id`),
  ADD KEY `fk_products_types` (`type_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `fk_role_user_roles` (`role_id`),
  ADD KEY `fk_role_user_users` (`user_id`);

--
-- Indexes for table `sliderparents`
--
ALTER TABLE `sliderparents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sliders_slider_parents` (`sliderparent_id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_users_genders` (`gender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `factors`
--
ALTER TABLE `factors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliderparents`
--
ALTER TABLE `sliderparents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_files` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_articles_users_0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `fk_basket_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_baskets_users_0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factors`
--
ALTER TABLE `factors`
  ADD CONSTRAINT `fk_factors_users_0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `factor_product`
--
ALTER TABLE `factor_product`
  ADD CONSTRAINT `fk_factor_product_factors` FOREIGN KEY (`factor_id`) REFERENCES `factors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_factor_product_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_factors` FOREIGN KEY (`factor_id`) REFERENCES `factors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `fk_permission_role_permissions` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_permission_role_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_products_producers` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_products_types` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_role_user_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_role_user_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `fk_sliders_slider_parents` FOREIGN KEY (`sliderparent_id`) REFERENCES `sliderparents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_genders` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
