-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 08:37 PM
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
-- Database: `laravelecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Dior', 'dior', 0, '2023-04-27 15:06:53', '2023-05-01 05:14:53', 10),
(5, 'chanel', 'chanel', 0, '2023-04-28 22:53:36', '2023-05-01 05:15:43', 9),
(6, 'Prada', 'prada', 0, '2023-04-28 22:53:55', '2023-05-01 05:15:51', 7),
(8, 'Zara', 'zara', 0, '2023-05-02 19:39:13', '2023-05-02 19:39:13', 7),
(9, 'Givenchy', 'givenchy', 0, '2023-05-02 22:02:37', '2023-05-16 09:03:42', 7);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorioes`
--

CREATE TABLE `categorioes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorioes`
--

INSERT INTO `categorioes` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Oriental', 'oriental', 'Oriental fragrance', 'uploads/category/1682816697.jpg', 'Oriental fragrance', 'Oriental fragrance', 'Oriental fragrance', 0, '2023-04-25 18:05:47', '2023-04-30 16:07:32'),
(7, 'Fruity/Sugary', 'fruitysugary', 'Fruity/Sugary Scents', 'uploads/category/1682816582.jpg', 'Fruity/Sugary Scents', 'Fruity/Sugary Scents', 'Fruity/Sugary Scents', 0, '2023-04-27 02:09:01', '2023-04-30 15:30:28'),
(9, 'Floral', 'floral', 'Floral perfumes', 'uploads/category/1682879573.jpg', 'Floral perfumes', 'Floral perfumes', 'Floral perfumes', 0, '2023-04-30 15:32:53', '2023-04-30 15:32:53'),
(10, 'Freshness', 'freshness', 'Freshness Scent', 'uploads/category/1682879724.jpg', 'Freshness Scent', 'Freshness Scent', 'Freshness Scent', 0, '2023-04-30 15:35:24', '2023-04-30 15:35:24');

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
(6, '2023_04_25_031009_add_details_to_users_table', 2),
(7, '2023_04_25_170621_create_categorioes_table', 3),
(8, '2023_04_27_041820_create_brands_table', 4),
(9, '2023_04_27_230527_create_products_table', 5),
(10, '2023_04_28_012508_create_product_images_table', 5),
(12, '2023_04_29_020752_create_colors_table', 6),
(13, '2023_04_29_032745_create_sliders_table', 7),
(14, '2023_05_01_080658_add_category_id_to_brands_table', 8),
(15, '2023_05_02_170609_create_wishlists_table', 9),
(16, '2023_05_02_192508_create_wishlists_table', 10),
(17, '2023_05_04_235811_create_carts_table', 11),
(18, '2023_05_06_200259_create_orders_table', 12),
(19, '2023_05_06_202522_create_order_items_table', 12),
(20, '2023_05_06_204054_create_order_items_table', 13),
(22, '2023_05_10_182624_create_settings_table', 14),
(23, '2023_05_12_004356_create_user_details_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `fullname`, `email`, `phone`, `pincode`, `address`, `status_message`, `payment_mode`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'blossom-QWfCfAXr8r', 'Admin', 'admin@gmail.com', '01211111111', '600600', 'Alexandria', 'in progress', 'Cash on Delivery', NULL, '2023-05-06 19:07:03', '2023-05-06 19:07:03'),
(2, 2, 'blossom-zvF43u2wIn', 'Admin', 'admin@gmail.com', '01212222222', '600600', 'Alexandria', 'in progress', 'Cash on Delivery', NULL, '2023-05-06 19:12:24', '2023-05-06 19:12:24'),
(3, 2, 'blossom-IqX3euASzi', 'Admin', 'admin@gmail.com', '01213333333', '333444', 'egypt', 'in progress', 'Cash on Delivery', NULL, '2023-05-06 22:21:46', '2023-05-06 22:21:46'),
(4, 2, 'blossom-LZYbKNlgn8', 'anne', 'admin@gmail.com', '1234567899', '858585', 'address', 'in progress', 'Cash on Delivery', NULL, '2023-05-06 22:36:59', '2023-05-06 22:36:59'),
(5, 2, 'blossom-EFwTye5OkU', 'chris', 'admin@gmail.com', '09364528719', '519643', 'address ADDRESS', 'in progress', 'Cash on Delivery', NULL, '2023-05-06 22:40:30', '2023-05-06 22:40:30'),
(6, 2, 'blossom-8ADOCCQMag', 'Admin', 'admin@gmail.com', '0000000000', '000000', 'alexandria', 'completed', 'Cash on Delivery', NULL, '2023-05-08 19:27:21', '2023-05-08 21:53:33'),
(7, 2, 'blossom-HMwl8nuaaa', 'sara', 'sara@gmail.com', '0000000000', '000000', 'alexandria', 'completed', 'Cash on Delivery', NULL, '2023-05-08 19:30:24', '2023-05-08 19:30:24'),
(8, 2, 'blossom-2Uo9n6vrHY', 'Admin', 'admin@gmail.com', '0000000000', '000000', 'alexandria', 'in progress', 'Cash on Delivery', NULL, '2023-05-08 19:35:33', '2023-05-08 19:35:33'),
(9, 2, 'blossom-M1nHBckqxD', 'sara', 'sara@gmail.com', '0000000000', '000000', 'alexandria', 'in progress', 'Cash on Delivery', NULL, '2023-05-08 19:38:11', '2023-05-08 19:38:11'),
(10, 2, 'blossom-tidoF70KIU', 'Christopher', 'admin@gmail.com', '01111111111', '123456', 'alex', 'in progress', 'Cash on Delivery', NULL, '2023-05-16 23:06:48', '2023-05-16 23:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 3, 450, '2023-05-06 19:07:03', '2023-05-06 19:07:03'),
(2, 1, 18, 4, 1000, '2023-05-06 19:07:03', '2023-05-06 19:07:03'),
(3, 1, 7, 1, 65, '2023-05-06 19:07:03', '2023-05-06 19:07:03'),
(4, 2, 15, 3, 450, '2023-05-06 19:12:24', '2023-05-06 19:12:24'),
(5, 2, 18, 4, 1000, '2023-05-06 19:12:24', '2023-05-06 19:12:24'),
(6, 2, 7, 1, 65, '2023-05-06 19:12:24', '2023-05-06 19:12:24'),
(7, 3, 16, 1, 200, '2023-05-06 22:21:46', '2023-05-06 22:21:46'),
(8, 3, 14, 1, 500, '2023-05-06 22:21:46', '2023-05-06 22:21:46'),
(9, 3, 18, 1, 1000, '2023-05-06 22:21:46', '2023-05-06 22:21:46'),
(10, 4, 7, 5, 65, '2023-05-06 22:36:59', '2023-05-06 22:36:59'),
(11, 4, 18, 2, 1000, '2023-05-06 22:36:59', '2023-05-06 22:36:59'),
(12, 5, 18, 8, 1000, '2023-05-06 22:40:30', '2023-05-06 22:40:30'),
(13, 6, 14, 1, 500, '2023-05-08 19:27:21', '2023-05-08 19:27:21'),
(14, 7, 14, 1, 500, '2023-05-08 19:30:24', '2023-05-08 19:30:24'),
(15, 8, 16, 1, 200, '2023-05-08 19:35:33', '2023-05-08 19:35:33'),
(16, 9, 16, 1, 200, '2023-05-08 19:38:11', '2023-05-08 19:38:11'),
(17, 10, 18, 2, 1000, '2023-05-16 23:06:48', '2023-05-16 23:06:48'),
(18, 10, 15, 1, 450, '2023-05-16 23:06:48', '2023-05-16 23:06:48');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=trending,0=not-trending',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `small_description`, `description`, `original_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(7, 7, 'Prada', 'prada', 'Prada', 'perfume', 'perfume', 70, 65, 15, 0, 0, 'perfume', 'perfume', 'perfume', '2023-04-28 12:30:31', '2023-05-06 22:36:59'),
(14, 9, 'Olympia', 'olympia', 'chanel', 'Olympia perfume', 'Olympia perfume', 600, 500, 48, 0, 0, 'Olympia perfume', 'Olympia perfume', 'Olympia perfume', '2023-05-02 17:59:26', '2023-05-08 19:30:24'),
(15, 7, 'Wonder Rose', 'wonder-rose', 'Zara', 'Wonder Rose', 'Wonder Rose', 500, 450, 19, 0, 0, 'Wonder Rose', 'Wonder Rose', 'Wonder Rose', '2023-05-02 19:40:23', '2023-05-16 23:06:48'),
(16, 1, 'Chance', 'chance', 'chanel', 'Chance', 'Chance', 230, 200, 28, 0, 0, 'Chance', 'Chance', 'Chance', '2023-05-02 19:52:25', '2023-05-08 19:38:11'),
(18, 7, 'Irresistible', 'irresistible', 'Givenchy', 'Irresistible perfume', 'Irresistible perfume', 1400, 1000, 88, 0, 0, 'Irresistible perfume', 'Irresistible perfume', 'Irresistible perfume', '2023-05-02 22:04:10', '2023-05-16 23:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(17, 14, 'uploads/products/16830611661.jpg', '2023-05-02 17:59:26', '2023-05-02 17:59:26'),
(18, 15, 'uploads/products/16830672231.jpg', '2023-05-02 19:40:23', '2023-05-02 19:40:23'),
(21, 16, 'uploads/products/16830679451.jpg', '2023-05-02 19:52:25', '2023-05-02 19:52:25'),
(22, 16, 'uploads/products/16830679452.jpg', '2023-05-02 19:52:25', '2023-05-02 19:52:25'),
(24, 18, 'uploads/products/16830758501.jpg', '2023-05-02 22:04:10', '2023-05-02 22:04:10'),
(25, 18, 'uploads/products/16830758502.jpg', '2023-05-02 22:04:10', '2023-05-02 22:04:10'),
(26, 7, 'uploads/products/16842392861.jpg', '2023-05-16 09:14:46', '2023-05-16 09:14:46'),
(27, 16, 'uploads/products/16842440511.jpg', '2023-05-16 10:34:11', '2023-05-16 10:34:11'),
(28, 16, 'uploads/products/16842440512.jpg', '2023-05-16 10:34:11', '2023-05-16 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_url`, `page_title`, `meta_keywords`, `meta_description`, `address`, `phone1`, `phone2`, `email1`, `email2`, `facebook`, `twitter`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Blossom', 'http://localhost:8000/', NULL, 'Perfumes website offer customers a convenient way to browse, compare, and purchase fragrances online. Discover a world of fragrances, including top-rated brands and exclusive releases, since the 1500s, to find your perfect scent.', 'Perfumes website offer customers a convenient way to browse, compare, and purchase fragrances online. Discover a world of fragrances, including top-rated brands and exclusive releases, since the 1500s, to find your perfect scent.', NULL, '01277537518', '01277537518', 'admin@gmail.com', 'admin@gmail.com', 'facebook.com', 'twitter.com', 'ensta', NULL, '2023-05-10 17:45:43', '2023-05-10 19:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '<span>Best Seller Perfumes </span> All in one place &amp; for YOU', 'We offer the best seller perfumes', 'uploads/sliders/1682817222.jpg', 0, '2023-04-29 12:34:18', '2023-04-30 12:22:54'),
(2, 'Best Trending Offers  And more', 'Trending offers from your favorite brands', 'uploads/sliders/1682816167.jpg', 0, '2023-04-29 14:13:27', '2023-04-30 12:21:09'),
(3, 'Best Products', 'Best Products', 'uploads/sliders/1682792041.jpg', 0, '2023-04-29 14:14:31', '2023-04-30 12:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin',
  `country` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`, `country`, `address`) VALUES
(1, 'rowan', '', 'rowan@gmail.com', NULL, '$2y$10$quoCbfyBloozVc0oRaRaFOVnflN/UXEYHotI7dfr.4TgcT0x9wLEu', NULL, '2023-04-24 22:08:09', '2023-04-24 22:08:09', 0, '', ''),
(2, 'Admin', '', 'admin@gmail.com', NULL, '$2y$10$pnDsUwxs1l5AFxcMQzu4BuZv85hlUv6p.i105rPUhOmwuRW6ZShki', NULL, '2023-04-25 02:03:29', '2023-04-25 02:03:29', 1, '', ''),
(3, 'sara', 'alaa', 'sara@gmail.com', NULL, '$2y$10$8.uGF4eSdjsuAFdZBcJ4me1Ko3LGFgj6uiZhpya87Thm77XOp.Vu2', NULL, '2023-05-02 11:30:25', '2023-05-02 11:30:25', 0, 'Egypt', ''),
(4, 'Esraa', '', 'esraa@gmail.com', NULL, '$2y$10$0TJsFPt0UYwJWpAUteEPDesbV65rgoTBmEWvfsqUSBWiwY7YrHL2S', NULL, '2023-05-02 12:35:42', '2023-05-02 12:35:42', 0, 'Egypt', ''),
(5, 'Rowan', 'lname', 'rosameh@gmail.com', NULL, '$2y$10$0h/WxbcvCI5vp.rYp7yNJe5YAycqVKhNWqeYS40WfGHWglRcnjovS', NULL, '2023-05-02 12:44:23', '2023-05-02 12:44:23', 0, 'Egypt', ''),
(6, 'Mariam', 'lname', 'mariam@gmail.com', NULL, '$2y$10$jb13RoNq69TNiWgZ8ru5f.H8dVowhCbYrqkbsBEmZrElcHzWFtpBS', NULL, '2023-05-02 12:46:33', '2023-05-02 12:46:33', 0, 'Egypt', ''),
(7, 'rowan', 'sameh', 'sameh@gmail.com', NULL, '$2y$10$thrCDtJV4fzKE1GogNiHDeiFxwJCaixPp4Xhpamborq.PBWYY9N0e', NULL, '2023-05-02 14:48:57', '2023-05-02 14:48:57', 0, 'Egypt', ''),
(8, 'esraa', 'mohamed', 'esraaadmin@gmail.com', NULL, '$2y$10$ikZFaLDiLo.VKuBpNSHeiO3xhlYD4Sl7O1vBBx6uxnhAhVuCXUlE2', NULL, '2023-05-09 04:48:53', '2023-05-09 04:48:53', 0, 'Egypt', ''),
(9, 'esraa', 'mohamed', 'esraamohamed@gmail.com', NULL, '$2y$10$.0sAzdkn2WQ/DxI8TDZV8uDhMFK7kZiUDV5Z7Z92Jko4swA8dZRYG', NULL, '2023-05-11 15:57:22', '2023-05-11 15:57:22', 1, 'Egypt', ''),
(10, 'sara', 'alaaeldin', 'saraeldin@gmail.com', NULL, '$2y$10$ASizX5HgwgBbd7YZkYwOL.KWPEQNY1/Ex2kxEaNOGEVKSfwmVjz/W', NULL, '2023-05-11 23:51:34', '2023-05-11 23:51:34', 0, 'egypt', ''),
(12, 'felix', 'chris', 'felix@gmail.com', NULL, '$2y$10$doWWnm/NJqgAISr2g/f14.s5XQNCHeUPwiIQwSrkYZcxwrycO/Xau', NULL, '2023-05-15 06:28:17', '2023-05-15 06:28:17', 0, 'Australia', 'Australia'),
(17, 'rowan', 'ebedy', 'rowane@gmail.com', NULL, '$2y$10$XzkmZNEfA0crIaotXvJnturAvYGeKC80BI6LLMSYtCVnY.JUEgHL6', NULL, '2023-05-16 22:05:44', '2023-05-16 22:05:44', 0, 'Egypt', 'egypt'),
(19, 'Chris', 'chris', 'christopher@gmail.com', NULL, '$2y$10$uROD0bgFKPc03bWlpOgKtOq1BumpqyJPqgcaVGrhkPpPD.FIgHOgm', NULL, '2023-05-16 22:26:13', '2023-05-16 22:26:13', 0, 'Australia', 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `phone`, `pin_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 10, '0000000000', '000000', 'alexandria', '2023-05-12 00:53:06', '2023-05-12 01:02:52'),
(2, 2, '1122334455', '123456', 'alex', '2023-05-16 21:36:35', '2023-05-16 21:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(17, 2, 15, '2023-05-04 23:06:18', '2023-05-04 23:06:18'),
(20, 2, 7, '2023-05-05 17:39:13', '2023-05-05 17:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorioes`
--
ALTER TABLE `categorioes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_user_id_unique` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categorioes`
--
ALTER TABLE `categorioes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categorioes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
