-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2019 at 04:09 PM
-- Server version: 10.1.29-MariaDB-6+b1
-- PHP Version: 7.2.4-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inception`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 'fsdfs', '1', '2019-05-16 21:52:46', '2019-05-16 21:52:46'),
(2, 'fsdfsdf', 'sdfsdfsdf', '1', '2019-05-16 21:52:51', '2019-05-16 21:52:51'),
(3, 'asdasdasd', 'asdasdasd', '1', '2019-05-16 21:53:50', '2019-05-16 21:53:50'),
(4, 'asdasd', 'asddasdasd', '1', '2019-05-16 21:53:57', '2019-05-16 21:53:57'),
(5, 'dsfsd', 'fsdfsdfsdf', '1', '2019-05-16 21:54:12', '2019-05-16 21:54:12'),
(6, 'asdasd', 'asdasdasd', '1', '2019-05-16 21:55:00', '2019-05-16 21:55:00'),
(7, 'asdasd', 'asdasdasd', '0', '2019-05-16 21:55:15', '2019-05-16 22:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(6, 'gfhrtry', 'nader@gmail.com', 'kjlgerrt', 'wertwertwer', '0', '2019-03-14 22:00:00', '2019-03-16 12:13:03'),
(8, 'gfhrtry', 'nader@gmail.com', 'kjlgerrt', 'wertwertwer', '1', '2019-03-14 22:00:00', '2019-03-16 10:24:30'),
(9, 'nader', 'nader@admin.com', 'wresdfsdfsdf', 'sdasdasd', '0', '2019-03-19 21:33:37', '2019-03-19 21:33:37'),
(10, 'dsadas', 'admin@gmail.com', 'sfsdfsdf', 'werwer', '0', '2019-03-30 03:23:38', '2019-03-30 03:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pivot_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `pivot_id`, `type`, `created_at`, `updated_at`) VALUES
(3, '/images/service/Beach_by_Samuel_Scrimshaw1552522419.jpg', 19, 'service', '2019-03-13 22:13:39', '2019-03-13 22:13:39'),
(9, '/images/service/Aurora1552522600.jpg', 22, 'service', '2019-03-13 22:16:40', '2019-03-13 22:16:40'),
(11, '/images/service/Dew_by_Aaron_Burden1552612293.jpg', 21, 'service', '2019-03-14 23:11:33', '2019-03-14 23:11:33'),
(13, '/images/setting/Hummingbird_by_Shu_Le1552665787.jpg', 7, 'setting', '2019-03-15 14:03:07', '2019-03-15 14:03:07'),
(14, '/images/setting/Reflection_of_the_Kanas_Lake_by_Wang_Jinyu1552667610.jpg', 8, 'setting', '2019-03-15 14:33:30', '2019-03-15 14:33:30'),
(15, '/images/setting/Reflection_of_the_Kanas_Lake_by_Wang_Jinyu1552667663.jpg', 9, 'setting', '2019-03-15 14:34:23', '2019-03-15 14:34:23'),
(16, '/images/setting/Aurora1552667696.jpg', 10, 'setting', '2019-03-15 14:34:56', '2019-03-15 14:34:56'),
(18, '/images/user/Aurora1552678885.jpg', 6, 'user', '2019-03-15 17:41:25', '2019-03-15 17:41:25'),
(44, '/images/page/home11552948408.jpg', 2, 'page', '2019-03-18 20:33:28', '2019-03-18 20:33:28'),
(45, '/images/team/team-31552949277.jpg', 3, 'team', '2019-03-18 20:47:57', '2019-03-18 20:47:57'),
(46, '/images/team/team-11552949331.jpg', 4, 'team', '2019-03-18 20:48:51', '2019-03-18 20:48:51'),
(49, '/images/slider/1-115529439811552949988.jpg', 3, 'slider', '2019-03-18 20:59:48', '2019-03-18 20:59:48'),
(50, '/images/page/home115529478761552950006.jpg', 3, 'page', '2019-03-18 21:00:06', '2019-03-18 21:00:06'),
(54, '/images/page/Depositphotos_24653263_original1553032297.jpg', 1, 'page', '2019-03-19 19:51:37', '2019-03-19 19:51:37'),
(55, '/images/testimonial/image-141553117915.jpg', 3, 'testimonial', '2019-03-20 19:38:35', '2019-03-20 19:38:35'),
(56, '/images/testimonial/image-21553118032.jpg', 2, 'testimonial', '2019-03-20 19:40:32', '2019-03-20 19:40:32'),
(57, '/images/testimonial/1-1170x7311553118094.jpg', 4, 'testimonial', '2019-03-20 19:41:34', '2019-03-20 19:41:34'),
(59, '/images/testimonial/image-101553118174.jpg', 5, 'testimonial', '2019-03-20 19:42:54', '2019-03-20 19:42:54'),
(60, '/images/user/team-21553124773.jpg', 7, 'user', '2019-03-21 04:32:53', '2019-03-21 04:32:53'),
(61, '/images/user/team-21553124941.jpg', 1, 'user', '2019-03-21 04:35:41', '2019-03-21 04:35:41'),
(68, '/images/slider/215529438991556126032.jpg', 4, 'slider', '2019-04-24 22:13:52', '2019-04-24 22:13:52'),
(72, '/images/setting/409b570d-4795-4893-9d79-238329ecd7ab1556128425.jpeg', 13, 'setting', '2019-04-24 22:53:45', '2019-04-24 22:53:45'),
(73, '/images/setting/409b570d-4795-4893-9d79-238329ecd7ab1556128443.jpeg', 14, 'setting', '2019-04-24 22:54:03', '2019-04-24 22:54:03'),
(74, '/images/team/INCEPTION LOGO NEW ONE1556128794.jpg', 5, 'team', '2019-04-24 22:59:54', '2019-04-24 22:59:54'),
(75, '/images/slider/Beach_by_Samuel_Scrimshaw1557694962.jpg', 5, 'slider', '2019-05-12 19:02:42', '2019-05-12 19:02:42'),
(76, '/images/page/Depositphotos_24653263_original15530322971557698153.jpg', 4, 'page', '2019-05-12 19:55:53', '2019-05-12 19:55:53'),
(78, '/images/service/Dandelion_by_Paul_Talbot15528655551557700498.jpg', 30, 'service', '2019-05-12 20:34:58', '2019-05-12 20:34:58'),
(79, '/images/service/Dandelion_by_Paul_Talbot15528655551557700602.jpg', 27, 'service', '2019-05-12 20:36:42', '2019-05-12 20:36:42'),
(81, '/images/client/image-21558050830.jpg', 3, 'client', '2019-05-16 21:53:50', '2019-05-16 21:53:50'),
(82, '/images/client/image-21558050837.jpg', 4, 'client', '2019-05-16 21:53:57', '2019-05-16 21:53:57'),
(83, '/images/client/image-21558050852.jpg', 5, 'client', '2019-05-16 21:54:12', '2019-05-16 21:54:12'),
(84, '/images/client/image-21558050878.jpg', 2, 'client', '2019-05-16 21:54:38', '2019-05-16 21:54:38'),
(85, '/images/client/image-21558050890.jpg', 1, 'client', '2019-05-16 21:54:50', '2019-05-16 21:54:50'),
(86, '/images/client/image-21558050900.jpg', 6, 'client', '2019-05-16 21:55:00', '2019-05-16 21:55:00'),
(87, '/images/client/image-21558050915.jpg', 7, 'client', '2019-05-16 21:55:15', '2019-05-16 21:55:15');

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
(2, '2014_10_12_000000_create_contacts_table', 2),
(3, '2014_10_12_000000_create_images_table', 3),
(4, '2014_10_12_000000_create_pages_table', 3),
(5, '2014_10_12_000000_create_service_table', 3),
(6, '2014_10_12_000000_create_setting_table', 3),
(7, '2014_10_12_000000_create_teams_table', 4),
(8, '2014_10_12_000000_create_testimonials_table', 4),
(9, '2014_10_12_000000_create_slider_table', 5),
(10, '2014_10_12_000000_create_clients_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `key`, `title`, `subtitle`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'about', 'About Us', NULL, '“Heinrich Story”', '<p>We are a group of individuals who believe in the power of human minds. &nbsp;Our brains are responsible for heart beats, body functions, conscious /unconscious thoughts; and ideas that make a difference. We decided to convey our experience in training and development. Start a new journey of exploring human potential and push their brain limits. We are passionate and eager to drive change in organizations through their people. &nbsp;Our Philosophy is, &ldquo;to help humans share knowledge and absorb others&rsquo; experiences.&rdquo;</p>\r\n\r\n<p>5 W&rsquo;s about us</p>\r\n\r\n<p>We <strong>customize</strong> training programs</p>\r\n\r\n<p>We are <strong>qualified</strong> and distinguished</p>\r\n\r\n<p>We create <strong>fun</strong></p>\r\n\r\n<p>We have diverse <strong>experience</strong></p>\r\n\r\n<p>We <strong>believe</strong> in what we do</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our vision</p>\r\n\r\n<p>&ldquo;To explore the real potential of every mind.&rdquo;</p>\r\n\r\n<p>&ldquo;Helping people believe they can push their mind limits and make a change.&rdquo;</p>\r\n\r\n<p>Our Mission</p>\r\n\r\n<p>&ldquo;We customize content, create environment and change people.&rdquo;</p>\r\n\r\n<p>You can add &ldquo;Personally, and Professionally. &ldquo;</p>\r\n\r\n<p>Our Values</p>\r\n\r\n<p><strong>Commitment: <em>We have a cause. </em></strong></p>\r\n\r\n<p><strong>Passion<em>: We love what we do.</em></strong></p>\r\n\r\n<p><strong>Diversity:<em> We offer different solutions.</em></strong></p>\r\n\r\n<p><strong>Customer Oriented:<em> We listen to our customers voices.</em></strong></p>', '2019-03-17 22:00:00', '2019-04-24 23:22:03'),
(2, 'team', 'OUR TEAM', 'OUR TEAM', 'Helping You Put Systems in Place that Work', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '2019-03-17 22:00:00', '2019-03-18 20:40:10'),
(3, 'mission', 'mission', 'Terry M. White - President', 'desc mission', '<h2>Focus on Your Mission<br />\r\nWhile We Focus on Our HR</h2>', '2019-03-17 22:00:00', '2019-03-18 21:17:03'),
(4, 'core_service', 'Core Services', 'Services', '“ STRONGER CALIBERS MAKE STRONGER ORGANIZATIONS.”', '<p>We offer comprehensive employment services such as payroll and benefits administration, HR management, and assistance with employer compliance.</p>\r\n\r\n<p>With Our Company as your strategic HR partner, you can focus on developing your products, services and employees, instead of HR.</p>', '2019-03-17 22:00:00', '2019-04-25 00:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `content`, `status`, `logo`, `created_at`, `updated_at`) VALUES
(23, 'Compensation Consulting', 'Compensation Consulting', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', 'fa fa-briefcase', '2019-03-18 21:04:31', '2019-03-18 21:04:31'),
(24, 'Corporate Ethics Program', 'Corporate Ethics Program', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', 'fa fa-firefox', '2019-03-18 21:05:11', '2019-03-18 21:05:11'),
(25, 'Leadership Training', 'Leadership Training', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', 'fa fa-map', '2019-03-18 21:05:34', '2019-03-18 21:05:57'),
(26, 'Talent Acquisition', 'Talent Acquisition', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', 'fa fa-chrome', '2019-03-18 21:06:42', '2019-03-18 21:06:42'),
(27, 'Talent Acquisition', 'Talent Acquisition', '<p>Talent Acquisition</p>', '1', 'fa fa-contao', '2019-03-18 21:07:41', '2019-03-18 21:07:41'),
(28, 'Talent Acquisition', 'XYZ', '<p>XYZ</p>', '0', 'fa fa-hourglass-1', '2019-03-18 21:07:53', '2019-04-24 22:49:49'),
(29, 'Training', 'Training cources', '<p>Talent Acquisition</p>', '0', 'fa fa-wechat', '2019-03-18 21:08:05', '2019-04-24 22:01:59'),
(30, 'service', 'service', '<p>service</p>', '1', 'fa fa-clone', '2019-05-12 20:30:26', '2019-05-12 20:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('text','image') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(12, 'title', 'heinrich', 'text', '2019-03-18 21:34:10', '2019-03-18 21:34:10'),
(13, 'logo', '/images/setting/409b570d-4795-4893-9d79-238329ecd7ab1556128425.jpeg', 'image', '2019-03-18 21:34:49', '2019-04-24 22:53:45'),
(14, 'favicon', '/images/setting/409b570d-4795-4893-9d79-238329ecd7ab1556128443.jpeg', 'image', '2019-03-18 21:35:30', '2019-04-24 22:54:03'),
(15, 'phone-number', '+3 833 211 32', 'text', '2019-03-18 21:36:14', '2019-03-18 21:36:14'),
(16, 'facebook', 'http://www.facebook.com', 'text', '2019-03-18 21:36:31', '2019-03-18 21:36:31'),
(17, 'twitter', 'http://www.twitter.com', 'text', '2019-03-18 21:37:09', '2019-03-18 21:37:09'),
(18, 'linkedin', 'http://www.linkedin.com', 'text', '2019-03-18 21:37:32', '2019-03-18 21:37:32'),
(19, 'copy-right', 'nevdia.com ©. All rights reserved.', 'text', '2019-03-18 21:38:04', '2019-03-18 21:38:04'),
(20, 'email', 'info@hradviser.com', 'text', '2019-03-18 21:38:18', '2019-03-18 21:38:18'),
(21, 'address', '123, New Lenox Chicago,  IL 60606', 'text', '2019-03-18 21:38:29', '2019-03-18 21:38:29'),
(22, 'google-plus', 'http://www.google.com', 'text', '2019-03-18 21:38:59', '2019-03-18 21:38:59'),
(23, 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220895.54613341336!2d31.560814851566885!3d30.10870601187831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145817082ea84f41%3A0xe065af2151e21386!2z2YXYt9in2LEg2KfZhNmC2KfZh9ix2Kkg2KfZhNiv2YjZhNmK!5e0!3m2!1sar!2seg!4v1553035316609\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'text', '2019-03-19 20:42:37', '2019-03-19 20:42:37'),
(26, 'meta-auther', 'heinrich', 'text', '2019-03-20 20:04:04', '2019-03-20 20:04:04'),
(27, 'meta-description', 'heinrich', 'text', '2019-03-20 20:04:20', '2019-03-20 20:04:20'),
(28, 'meta-keywords', 'heinrich', 'text', '2019-03-20 20:04:35', '2019-03-20 20:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_title` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `second_title`, `subtitle`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Human Resource 2', 'Solution Partner 2', 'your strategic 2', 'http://www.nevdia.com', '1', '2019-03-18 19:18:19', '2019-05-12 19:02:01'),
(4, 'INCEPTION 1', 'The Work Place 1', 'Expert Knowledge 1', '//www.nevdia.com', '1', '2019-03-18 19:19:41', '2019-05-12 19:01:47'),
(5, 'sdfsf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '1', '2019-05-12 19:02:42', '2019-05-12 19:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Asmaa Haitham', 'Commercial Manager', '<p>Nunc consectetur eros nec tortor consectetur faucibus. Nullam sagittis purus sed odio mattis, eu lobortis risus pharetra. Pellentesque ut purus id mi euismod. consectetur. Praesent nisl neque, pretium quis ornare eu, aliquam vitae ipsum.</p>\r\n\r\n<p>Cras molestie eu mauris ut lacinia. Duis faucibus metus ante. Fusce imperdiet libero et enim ultrices vehicula. Praesent pharetra varius leo,a placerat nulla eleifend eget at odio at magna imperdiet euismod.</p>', '1', '2019-03-18 20:47:57', '2019-04-24 22:09:01'),
(4, 'AMANDA SMITH', 'HR Advisor', '<p>Nunc consectetur eros nec tortor consectetur faucibus. Nullam sagittis purus sed odio mattis, eu lobortis risus pharetra. Pellentesque ut purus id mi euismod. consectetur. Praesent nisl neque, pretium quis ornare eu, aliquam vitae ipsum.</p>\r\n\r\n<p>Cras molestie eu mauris ut lacinia. Duis faucibus metus ante. Fusce imperdiet libero et enim ultrices vehicula. Praesent pharetra varius leo,a placerat nulla eleifend eget at odio at magna imperdiet euismod.</p>', '1', '2019-03-18 20:48:51', '2019-03-18 20:48:51'),
(5, 'EDWARD WILEY', 'HR Advisor', '<p>Nunc consectetur eros nec tortor consectetur faucibus. Nullam sagittis purus sed odio mattis, eu lobortis risus pharetra. Pellentesque ut purus id mi euismod. consectetur. Praesent nisl neque, pretium quis ornare eu, aliquam vitae ipsum.</p>\r\n\r\n<p>Cras molestie eu mauris ut lacinia. Duis faucibus metus ante. Fusce imperdiet libero et enim ultrices vehicula. Praesent pharetra varius leo,a placerat nulla eleifend eget at odio at magna imperdiet euismod.</p>', '1', '2019-03-18 20:49:32', '2019-04-24 22:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `person`, `person_title`, `company`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Developing Performance Goals and Standards', 'test10', 'test11', 'test12', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', '2019-03-16 22:20:38', '2019-05-16 20:20:54'),
(3, 'Essential Skills of Communicating', 'test7', 'test8', 'test9', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsu', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', '2019-03-16 22:20:56', '2019-05-16 20:20:32'),
(4, 'Best Background Check Service for Small Businesses', 'test4', 'test5', 'test6', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', '2019-03-20 19:41:34', '2019-05-16 20:20:13'),
(5, 'Skills, Capabilities & Characteristic Assessment', 'test1', 'test2', 'test3', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam', '<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>\r\n\r\n<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', '1', '2019-03-20 19:42:18', '2019-05-16 20:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `phone_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nader ahmed a', '123654', 'nader@gmail.com', NULL, '$2y$10$prGJ.Ltdwc2zn5xrgg.4muYG5kKrL3ojS1u.reiQUV3cF7irmDkqC', NULL, '2019-03-02 21:57:39', '2019-03-21 04:35:41'),
(2, 'nader ahmed', '784512sadasd', 'nader@admin.com', NULL, '$2y$10$vqlb.MDnJFgCIObKzCbPJuuKdXTuKVlBCtkDHL1menIG8DeCCBKmK', NULL, '2019-03-03 19:31:53', '2019-03-16 11:18:50'),
(5, 'dsadas', 'xcvxcvxc', 'admin@gmasdil.com', NULL, '$2y$10$jdEkKYvS0.O5umLgk0I.BOyREG5XsFHC4SvwoCBSXk2EVds0wzw1C', NULL, '2019-03-15 17:40:20', '2019-03-15 17:40:20'),
(6, 'dsadas', 'xcvxcvxcweewr', 'sdaasdasd@sdf.com', NULL, '$2y$10$c4Go8mCd/qBlAElmQR67a.BcdsqeZO9vT9acdA2Ro4nkkc1Oi4voy', NULL, '2019-03-15 17:41:25', '2019-03-15 17:41:25'),
(7, 'nevdia', '123654789', 'info@nevdia.com', NULL, '$2y$10$OsYO6KfOF7F5o7wfE/joeuJSbS5tFIOSNwhV8yi/vOoKe8r2yMoja', NULL, '2019-03-21 04:05:13', '2019-03-21 04:32:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_pivot_id_index` (`pivot_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
