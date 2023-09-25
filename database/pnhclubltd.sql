-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 12:58 PM
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
-- Database: `pnhclubltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_sections`
--

CREATE TABLE `about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_description` longtext DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `about_image_additional` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sections`
--

INSERT INTO `about_sections` (`id`, `about_title`, `about_description`, `about_image`, `about_image_additional`, `created_at`, `updated_at`) VALUES
(1, 'Most Fitness Routines Fail Due To Lack Of Results', '<p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The point of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look like readable English.</p><ul><li>The International Boxing Federation</li><li>World Boxing Association</li><li>World Boxing Council</li><li>World Boxing Organization</li><li>Expanding Range Of Female Boxers</li><li>Including Two World Champions</li><li>Delivers Al Haymon’s Series</li><li>Its Fights Are Available Through</li></ul>', 'about/images/20230923103431.jpg', 'about/images/20230923110130.jpg', NULL, '2023-09-23 05:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog_controllers`
--

CREATE TABLE `blog_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `blog_view_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_controllers`
--

INSERT INTO `blog_controllers` (`id`, `title`, `slug`, `image`, `description`, `blog_view_image`, `created_at`, `updated_at`) VALUES
(1, 'The Best Effective Strategies And Tips From Everyone', 'the-best-effective-strategies-and-tips-from-everyone', 'blog_images/1695466310.jpg', '<h2><strong>The Best Effective Strategies And Tips From Everyone</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking its the a using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delenit dolor quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru molid est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', 'blog_images/1695550270_view.jpg', '2023-09-23 04:51:50', '2023-09-24 04:20:05'),
(2, 'The Best Effective Strategies And Tips From Everyone', 'the-best-effective-strategies-and-tips-from-everyone', 'blog_images/1695466310.jpg', '<h2><strong>The Best Effective Strategies And Tips From Everyone</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking its the a using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delenit dolor quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru molid est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', 'blog_images/1695550258_view.jpg', '2023-09-23 04:51:50', '2023-09-24 04:20:01'),
(3, 'The Best Effective Strategies And Tips From Everyone', 'the-best-effective-strategies-and-tips-from-everyone', 'blog_images/1695466310.jpg', '<h2><strong>The Best Effective Strategies And Tips From Everyone</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking its the a using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delenit dolor quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru molid est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', 'blog_images/1695550251_view.jpg', '2023-09-23 04:51:50', '2023-09-24 04:19:57'),
(4, 'The Best Effective Strategies And Tips From Everyone', 'the-best-effective-strategies-and-tips-from-everyone', 'blog_images/1695466310.jpg', '<h2><strong>The Best Effective Strategies And Tips From Everyone</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking its the a using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delenit dolor quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru molid est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p><p>&nbsp;</p>', 'blog_images/1695550235_view.jpg', '2023-09-23 04:51:50', '2023-09-24 04:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'World', 'admin@app.com', '1617326716', 'Hello', 'fdgdfgfdg', '2023-09-23 03:54:06', '2023-09-23 03:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkdein_link` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `favicon`, `phone`, `email`, `facebook_link`, `twitter_link`, `instagram_link`, `linkdein_link`, `address`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1695456442.png', 'uploads/1695456442.png', '01750114128', 'riad@gmail.com', '#', '#', '#', '#', 'Dhaka', NULL, '2023-09-23 02:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_sections`
--

CREATE TABLE `home_about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abouttitle` varchar(255) DEFAULT NULL,
  `aboutdesc` varchar(255) DEFAULT NULL,
  `aboutstatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_sections`
--

INSERT INTO `home_about_sections` (`id`, `abouttitle`, `aboutdesc`, `aboutstatus`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Most Fitness Routines Fail Due To Lack Of Results', 'Show', NULL, '2023-09-23 04:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `home_blog_sections`
--

CREATE TABLE `home_blog_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_desc` varchar(255) DEFAULT NULL,
  `blogstatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_blog_sections`
--

INSERT INTO `home_blog_sections` (`id`, `blog_title`, `blog_desc`, `blogstatus`, `created_at`, `updated_at`) VALUES
(1, 'Daily News', 'Latest News And Articles', 'Show', NULL, '2023-09-23 04:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `home_contact_us_sections`
--

CREATE TABLE `home_contact_us_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `map_location` longtext NOT NULL,
  `short_description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contact_us_sections`
--

INSERT INTO `home_contact_us_sections` (`id`, `headline`, `title`, `map_location`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Get In Touch', 'Contact Us To Get Better Information', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.4018909009083!2d90.36839805452047!3d23.80430389250119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d154ff5095%3A0x914bd669ac3a2dab!2sPnH%20IT%20Solution!5e0!3m2!1sen!2sbd!4v1674900107293!5m2!1sen!2sbd', 'It is a long established fact that a reader will be distracted by the readable content page it when using Lorem Ipsum is that it normal distribution of a opposed it look English.', NULL, '2023-09-23 05:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `home_member_sections`
--

CREATE TABLE `home_member_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_title` varchar(255) DEFAULT NULL,
  `member_desc` varchar(255) DEFAULT NULL,
  `memberstatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_member_sections`
--

INSERT INTO `home_member_sections` (`id`, `member_title`, `member_desc`, `memberstatus`, `created_at`, `updated_at`) VALUES
(1, 'Our Members', 'Training With Our Experts', 'Show', NULL, '2023-09-23 04:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `home_meta_information`
--

CREATE TABLE `home_meta_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_meta_information`
--

INSERT INTO `home_meta_information` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AA', 'aAA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_portfolio_sections`
--

CREATE TABLE `home_portfolio_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `portfolio_desc` varchar(255) DEFAULT NULL,
  `portfoliostatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_portfolio_sections`
--

INSERT INTO `home_portfolio_sections` (`id`, `portfolio_title`, `portfolio_desc`, `portfoliostatus`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio', 'Will Help You Completely', 'Show', NULL, '2023-09-24 03:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `home_schedule_sections`
--

CREATE TABLE `home_schedule_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_title` varchar(255) DEFAULT NULL,
  `schedule_desc` varchar(255) DEFAULT NULL,
  `schedulestatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_schedule_sections`
--

INSERT INTO `home_schedule_sections` (`id`, `schedule_title`, `schedule_desc`, `schedulestatus`, `created_at`, `updated_at`) VALUES
(1, 'Schedule', 'Next Schedule', 'Show', NULL, '2023-09-23 04:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `home_service_sections`
--

CREATE TABLE `home_service_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicetitle` varchar(255) DEFAULT NULL,
  `shortdesc` varchar(255) DEFAULT NULL,
  `servicestatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_service_sections`
--

INSERT INTO `home_service_sections` (`id`, `servicetitle`, `shortdesc`, `servicestatus`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'Some Of Our Services', 'Show', NULL, '2023-09-23 04:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonial_sections`
--

CREATE TABLE `home_testimonial_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_title` varchar(255) DEFAULT NULL,
  `testimonial_desc` varchar(255) DEFAULT NULL,
  `testimonialstatus` varchar(255) NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonial_sections`
--

INSERT INTO `home_testimonial_sections` (`id`, `testimonial_title`, `testimonial_desc`, `testimonialstatus`, `created_at`, `updated_at`) VALUES
(1, 'Testimonials', 'See Reviews From Our Clients', 'Show', NULL, '2023-09-23 04:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `intro_videos`
--

CREATE TABLE `intro_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_description` longtext NOT NULL,
  `video_image` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intro_videos`
--

INSERT INTO `intro_videos` (`id`, `video_title`, `video_description`, `video_image`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Excellence Pro-Style Boxing Gloves You Are An Instructor', '<p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The point of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look like readable English.</p>', 'intro_videos/images/20230923103849.jpg', 'https://www.youtube.com/watch?v=J90DHgaGycM', '2023-09-23 04:38:49', '2023-09-23 04:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `member_sections`
--

CREATE TABLE `member_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `member_position` varchar(255) DEFAULT NULL,
  `member_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_sections`
--

INSERT INTO `member_sections` (`id`, `member_name`, `member_position`, `member_image`, `created_at`, `updated_at`) VALUES
(1, 'Norwood Turcotte', 'Boxing Trainer', 'member/images/20230923103526.jpg', '2023-09-23 04:35:26', '2023-09-23 04:35:26'),
(2, 'Katherine Schinner', 'Kickboxing Trainer', 'member/images/20230923103553.jpg', '2023-09-23 04:35:53', '2023-09-23 04:35:53'),
(3, 'Gonzalo Prosacco', 'Judo Trainer', 'member/images/20230923103628.jpg', '2023-09-23 04:36:28', '2023-09-23 04:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_19_054156_create_home_meta_information_table', 1),
(7, '2023_09_19_090126_create_home_service_sections_table', 1),
(8, '2023_09_19_102009_create_home_about_sections_table', 1),
(9, '2023_09_19_104841_create_home_schedule_sections_table', 1),
(10, '2023_09_19_110925_create_home_member_sections_table', 1),
(11, '2023_09_19_113643_create_home_portfolio_sections_table', 1),
(12, '2023_09_19_115231_create_home_testimonial_sections_table', 1),
(13, '2023_09_20_051536_create_home_blog_sections_table', 1),
(14, '2023_09_20_053731_create_slider_sections_table', 1),
(15, '2023_09_20_085521_create_service_sections_table', 1),
(16, '2023_09_20_093654_create_about_sections_table', 1),
(17, '2023_09_20_105004_create_member_sections_table', 1),
(18, '2023_09_20_112253_create_intro_videos_table', 1),
(19, '2023_09_20_120957_create_testimonials_table', 1),
(20, '2023_09_21_113145_create_blog_controllers_table', 1),
(21, '2023_09_23_062303_create_general_settings_table', 2),
(22, '2023_09_23_093458_create_contact_us_table', 3),
(25, '2023_09_23_100313_create_home_contact_us_sections_table', 4),
(30, '2023_09_24_052057_create_portfolios_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_category` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) NOT NULL,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `portfolio_image_view` varchar(255) DEFAULT NULL,
  `portfolio_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_category`, `slug`, `button_name`, `portfolio_image`, `portfolio_image_view`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(1, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26'),
(3, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26'),
(4, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26'),
(5, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26'),
(6, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26'),
(7, 'Boxing', 'boxing', 'See More', 'portfolio_images/1695547526.jpg', 'portfolio_images/1695547526_view.jpg', '<h2><strong>A Home-Made Gym Setup, Get Started Now</strong></h2><p>It is a long established fact that a reader will be distracted by the readable content page it when looking at its layout. The of using Lorem Ipsum is that it normal distribution of a letters, as opposed to using making it look English.</p><p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>', '2023-09-24 03:09:53', '2023-09-24 03:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_sections`
--

CREATE TABLE `service_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `service_icon_tag` varchar(255) DEFAULT NULL,
  `service_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_sections`
--

INSERT INTO `service_sections` (`id`, `service_title`, `service_icon_tag`, `service_description`, `created_at`, `updated_at`) VALUES
(1, 'Fully Equipped Facility', 'flaticon-boxer', '<p>Many desktop publishing packages and web page editors now use will uncover many web sites still in their infancy.</p>', '2023-09-23 04:21:14', '2023-09-23 04:21:14'),
(2, 'Protect Yourself', 'flaticon-boxing-gloves-1', '<p>Many desktop publishing packages and web page editors now use will uncover many web sites still in their infancy.</p>', '2023-09-23 04:21:55', '2023-09-23 04:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `slider_sections`
--

CREATE TABLE `slider_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `welcome_text` varchar(255) DEFAULT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_description` longtext DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `slider_profile_image` varchar(255) DEFAULT NULL,
  `slider_profile_button_name` varchar(255) DEFAULT NULL,
  `slider_profile_button_url` varchar(255) DEFAULT NULL,
  `slider_profile_short_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_sections`
--

INSERT INTO `slider_sections` (`id`, `welcome_text`, `slider_title`, `slider_description`, `slider_image`, `slider_profile_image`, `slider_profile_button_name`, `slider_profile_button_url`, `slider_profile_short_desc`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', 'slider_images/1695460043.jpg', '[\"profile_images\\/1695460043_631.png\",\"profile_images\\/1695460043_602.png\"]', 'Apply Now', '#', 'It is a long established fact that a reader will be distracted', '2023-09-23 03:07:23', '2023-09-23 03:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Martina Grady', 'Cardio Trainer', '<p>It is a long established fact that reader will be distracted page its when looking at its layout.</p>', '2023-09-23 04:42:02', '2023-09-23 04:42:02'),
(2, 'Martina Grady', 'Cardio Trainer', '<p>It is a long established fact that reader will be distracted page its when looking at its layout.</p>', '2023-09-23 04:43:26', '2023-09-23 04:43:26'),
(3, 'Martina Grady', 'Cardio Trainer', '<p>It is a long established fact that reader will be distracted page its when looking at its layout.</p>', '2023-09-23 04:43:43', '2023-09-23 04:43:43'),
(4, 'Martina Grady', 'Cardio Trainer', '<p>It is a long established fact that reader will be distracted page its when looking at its layout.</p>', '2023-09-23 04:43:26', '2023-09-23 04:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$p.n0o3bpY/r0/TUlxo50wuNvMID7brU6fobHI2e/Zgzuix5kwl/me', NULL, '2023-09-22 23:57:18', '2023-09-22 23:57:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_sections`
--
ALTER TABLE `about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_controllers`
--
ALTER TABLE `blog_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_sections`
--
ALTER TABLE `home_about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_blog_sections`
--
ALTER TABLE `home_blog_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contact_us_sections`
--
ALTER TABLE `home_contact_us_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_member_sections`
--
ALTER TABLE `home_member_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_meta_information`
--
ALTER TABLE `home_meta_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_portfolio_sections`
--
ALTER TABLE `home_portfolio_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_schedule_sections`
--
ALTER TABLE `home_schedule_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_service_sections`
--
ALTER TABLE `home_service_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_testimonial_sections`
--
ALTER TABLE `home_testimonial_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro_videos`
--
ALTER TABLE `intro_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_sections`
--
ALTER TABLE `member_sections`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_sections`
--
ALTER TABLE `service_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_sections`
--
ALTER TABLE `slider_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_sections`
--
ALTER TABLE `about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_controllers`
--
ALTER TABLE `blog_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_about_sections`
--
ALTER TABLE `home_about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_blog_sections`
--
ALTER TABLE `home_blog_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_contact_us_sections`
--
ALTER TABLE `home_contact_us_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_member_sections`
--
ALTER TABLE `home_member_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_meta_information`
--
ALTER TABLE `home_meta_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_portfolio_sections`
--
ALTER TABLE `home_portfolio_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_schedule_sections`
--
ALTER TABLE `home_schedule_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_service_sections`
--
ALTER TABLE `home_service_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_testimonial_sections`
--
ALTER TABLE `home_testimonial_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intro_videos`
--
ALTER TABLE `intro_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_sections`
--
ALTER TABLE `member_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_sections`
--
ALTER TABLE `service_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_sections`
--
ALTER TABLE `slider_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
