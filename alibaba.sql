-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2025 at 06:50 PM
-- Server version: 10.6.23-MariaDB-cll-lve
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fortress_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'admin',
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `firstname`, `lastname`, `username`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`, `last_login`, `profile_image`, `remember_token`) VALUES
(1, 'Admin', 'Manager', 'admin', 'fortresswavebuy@gmail.com', 'admin1234', 'admin', 'active', '2025-02-07 04:46:09', '2025-06-17 21:01:15', '2025-06-17 21:01:15', NULL, '08efe93d5f363f9c2b95088e4de3afe25fea9f3617bdd85efc7d315809d0b1d7');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `order_note` varchar(255) DEFAULT NULL,
  `estimated_delivery` varchar(255) NOT NULL,
  `delivery_fee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `processing_fee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `admin_id`, `class_id`, `store_name`, `name`, `email`, `phone`, `address_1`, `address_2`, `city`, `state`, `country`, `postcode`, `order_note`, `estimated_delivery`, `delivery_fee`, `processing_fee`, `tax`, `total_amount`, `payment_method`, `created_at`) VALUES
(53, '544887', 1, 45, 'Jo Valerie Nuvole', 'Robert Sphar ', '', '+17242314538', '409.W Greene Street Carmichaels Pa 15320', '', 'Carmichaels', 'Pennsylvania', 'United States ', '15320', '', '2025-03-08T13:30', 160.00, 10.00, 40.00, 1410.00, 'card', '2025-03-01 02:35:56'),
(55, '77685', 1, 94, 'Jo Valerie Nuvole', ' Leonard Hochstein', '', '+13059268973', '42 star island Dr, Miami Beach FL 33139 USA.', '', 'Miami ', 'FLORIDA', 'United States ', '33139', '', '2025-03-07T13:00', 290.00, 10.00, 50.00, 2550.00, 'card', '2025-03-01 09:47:40'),
(58, '88745', 1, 67, 'Jo Valerie Nuvole China', 'Quicktouch verdun', '', '+14384922409', '4242 Avenue Lebrun, Montréal (Québec) CANADA H1K 3H1', 'CANADA', ' Montréal', 'Québec', 'CANADA', 'H1K 3H1', '', '2025-03-14T15:24', 50.00, 0.00, 50.00, 7800.00, 'card', '2025-03-03 15:25:06'),
(59, '298463', 1, 29, 'ROSE GLOBAL MED SUPPLY', 'Ngone Diop', '', '774446880', '142 E Orange Ct. Parkville, MD 21234 USA.', '', 'Parkville', 'Maryland', 'United States', '21234', '', '2025-03-14T09:51', 200.00, 0.00, 50.00, 7614.99, 'card', '2025-03-04 09:51:50'),
(66, '65430', 1, 101, 'ROSE GLOBAL MED SUPPLY', 'John Hryshchuk (Advanced Ultrasound Systems)', '', '+19186282831', ' 9522 E 47th Pl, Tulsa, OK 74145 USA', '', 'Oklahoma ', 'Tulsa', 'UNITED STATES', '21234 ', '', '2025-03-14T14:19', 200.00, 0.00, 50.00, 8215.00, 'card', '2025-03-04 10:24:49'),
(67, '65542', 1, 103, 'ROSE GLOBAL MED SUPPLY', ' Tawanda Mhute', '', '+263773370161', 'Westend Clinic Extension, Suite 3 7 Baines Avenue, Harare, Zimbabwe.', '', 'Harare', 'Harare', 'Zimbabwe', ' 0023', '', '2025-03-14T10:36', 40.00, 0.00, 15.00, 755.00, 'card', '2025-03-04 10:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `product_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `variation` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`product_id`, `class_id`, `product_name`, `description`, `category`, `variation`, `price`, `discount_price`, `quantity`, `image`, `created_at`, `updated_at`, `created_by`) VALUES
(28, 45, 'Yamaha Tmax 560', '', ' motorcycle', 'Color:red/blue-10.5CM', 600.00, 0.00, 2, '67c2718ee1c19.jpeg', '2025-03-01 02:31:42', '2025-03-01 02:31:42', 1),
(30, 94, '2023 VESPA ELECTRIC 70 Km/h Electrics Scooter', '', 'ELECTRIC SCOOTER', 'Color:SILVER-10.5CM', 2200.00, 0.00, 1, '67c2d763ddd55.jpg', '2025-03-01 09:46:11', '2025-03-01 09:46:11', 1),
(38, 67, 'PLAY STATION 4 CONTROLLERS', '', 'CONTROLLERS', 'Color:BLACK/WHITE-10.5CM', 14.50, 0.00, 200, '67c5c99cc9977.jpeg', '2025-03-03 15:24:12', '2025-03-03 15:24:12', 1),
(39, 67, 'PLAY STATION 5 CONTROLLERS', '', 'CONTROLLERS', 'Color:BLACK/WHITE-10.5CM', 20.00, 0.00, 240, '67c5c9b46d4a8.jpeg', '2025-03-03 15:24:36', '2025-03-03 15:24:36', 1),
(41, 29, 'AiRTouch Portable X-ray, Vet & Humans with Charged battery', '', 'Therapy Unit', 'Color:WHITE-10.5CM', 800.00, 0.00, 1, '67c6ca492bef0.jpeg', '2025-03-04 09:39:21', '2025-03-04 09:39:21', 1),
(42, 29, 'Philips X8-2T - TEE Probe', '', 'Therapy Unit', 'Color:WHITE-10.5CM', 4000.00, 0.00, 1, '67c6cc2aecb08.jpeg', '2025-03-04 09:47:22', '2025-03-04 09:47:22', 1),
(43, 29, 'Philips X5-1c Probe', '', 'Therapy Unit', 'Color:WHITE-10.5CM', 2564.99, 0.00, 1, '67c6cc60d1279.jpeg', '2025-03-04 09:48:16', '2025-03-04 09:48:16', 1),
(45, 19, 'Compact Touch ophthalmic ultrasound A-scans B-scans tachymeter', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 700.00, 0.00, 1, '67c6ce220a213.jpeg', '2025-03-04 09:55:46', '2025-03-04 09:55:46', 1),
(46, 79, 'Compact Touch ophthalmic ultrasound A-scans B-scans tachymeter', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 700.00, 0.00, 1, '67c6cf9399d0e.jpeg', '2025-03-04 10:01:55', '2025-03-04 10:01:55', 1),
(47, 101, 'Philips X8-2T - TEE Probe', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 4000.00, 0.00, 1, '67c6d28fd74d0.jpeg', '2025-03-04 10:14:39', '2025-03-04 10:14:39', 1),
(48, 101, 'Philips X5-1c', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 2565.00, 0.00, 1, '67c6d2c0f3855.jpeg', '2025-03-04 10:15:28', '2025-03-04 10:15:28', 1),
(49, 101, 'Sonosite RP19x Phased Array Probes', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 700.00, 0.00, 2, '67c6d31153bb8.jpeg', '2025-03-04 10:16:49', '2025-03-04 10:41:03', 1),
(50, 103, 'Compact Touch ophthalmic ultrasound A-scans B-scans pachymeter', '', 'Therapy Unit', 'Color:SILVER-10.5CM', 700.00, 0.00, 1, '67c6d702e42ab.jpeg', '2025-03-04 10:33:38', '2025-03-04 10:33:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `amount`, `transaction_id`, `status`, `created_at`) VALUES
(1, 'Kelvin Klein', '', '+1-7314478234', 70.00, 'Bqjtvktiw3qig2cGB0tQaVUFL4SZY', 'COMPLETED', '2025-02-17 01:17:28'),
(2, 'Kelvin Klein', '', '+1-7314478234', 70.00, 'r3d60TyRiqZ76cPCNRqY0atHqdLZY', 'COMPLETED', '2025-02-17 01:24:34'),
(3, 'Kelvin Klein', '', '+1-7314478234', 70.00, 'JaZPaZrbcJLheLglh9sU6N2IzLaZY', 'COMPLETED', '2025-02-17 01:26:27'),
(4, 'Chukwuemeka', 'geniojoe@gmail.com', '0852484689', 200.00, 'lElSMz26n6Hi7KF0qJzHQI5U6NJZY', 'COMPLETED', '2025-02-17 01:51:33'),
(5, 'Kelvin Klein', '', '+1-7314478234', 70.00, '1IF5h4ieLpBV8bQBn8TMIPZIK7CZY', 'COMPLETED', '2025-02-17 01:52:29'),
(6, 'Kelvin Klein', '', '+1-7314478234', 70.00, 'fPCt6osg5Fk3kcu4MW5vWqfjnKIZY', 'COMPLETED', '2025-02-17 01:52:31'),
(7, 'Sam', '', '+1-7326384964,', 2915.00, 'D9kxp1vvPKFivQOmJJL4fdmYgzeZY', 'COMPLETED', '2025-02-17 03:21:10'),
(8, 'Sam', '', '+1-7326384964,', 2915.00, '7DBHmn3C75bXaUKEDwS4PVvlkiRZY', 'COMPLETED', '2025-02-17 11:36:00'),
(9, 'uzor ogbonna', 'bluemerchandiseglobal@gmail.com', '8123074338', 4.00, 'tqOuS6SZlYPbQtCjUgYKdclKyqfZY', 'COMPLETED', '2025-02-17 12:59:24'),
(10, 'uzor ogbonna', 'bluemerchandiseglobal@gmail.com', '8123074338', 4.00, 'fPsQ9wHhPrMqRw5PpJM7yOlVZ3OZY', 'FAILED', '2025-02-17 12:59:27'),
(11, 'uzor ogbonna', 'ansadil274@gmail.com', '+447466263446', 3.00, 'TrZeTX3eO3vkUEI3pBNvjjJvLVIZY', 'COMPLETED', '2025-02-20 09:38:14'),
(12, 'Ralf Middendorf', 'r.middendorf@mirag-tec.de', '+49 15114458888', 1050.00, 'HlXZpXrkFDcC6xDmAJlrVTKpiBEZY', 'COMPLETED', '2025-02-25 16:47:19'),
(13, 'Ngone Diop', '', '+221774446880', 855.00, 'FWa0KqGyUZ7J31WKcJBAnXywXFWZY', 'FAILED', '2025-02-28 13:42:53'),
(14, 'Ngone Diop', '', '+221774446880', 855.00, 'v9DUOcJsNJZh9cZqlBB1QCnrPhEZY', 'FAILED', '2025-02-28 13:43:28'),
(15, 'Ngone Diop', '', '+221774446880', 855.00, 'NeaDSE91qLKUzlOUnbrhSo0wvx8YY', 'FAILED', '2025-02-28 13:44:08'),
(16, 'Ngone Diop', '', '+221774446880', 855.00, 'PHskjWhGY9VCaejhBGp42TKWcHRZY', 'FAILED', '2025-02-28 13:44:11'),
(17, 'Ngone Diop', '', '+221774446880', 855.00, 'Zi38nasRoNjXOpGYdwHyBpWzKfQZY', 'FAILED', '2025-02-28 13:44:12'),
(18, 'Ngone Diop', '', '+221774446880', 855.00, 'hKzVvJqyyWj7FiQCgJ5MOARJ8CgZY', 'FAILED', '2025-02-28 13:47:46'),
(19, 'Ngone Diop', '', '+221774446880', 855.00, 'bpWQ6i1pybQ1ZzYhie5mdUIO5HVZY', 'FAILED', '2025-02-28 13:47:50'),
(20, 'Robert Sphar ', '', '+17242314538', 1410.00, 'BgiRQWQuUeDtynA68Xq6Ert2XWOZY', 'COMPLETED', '2025-03-03 01:27:01'),
(21, 'Robert Sphar ', '', '+17242314538', 1410.00, 'hiJgiLfgrvYptCJidzhKWvG9hTEZY', 'FAILED', '2025-03-03 01:27:03'),
(22, 'John Hryshchuk (Advanced Ultrasound Systems)', '', '+19186282831', 8215.00, 'BUSWRij8Yg9yJMfgnOKsvDu8XVfZY', 'FAILED', '2025-03-04 16:10:27'),
(23, 'John Hryshchuk (Advanced Ultrasound Systems)', '', '+19186282831', 8215.00, '5OlQ79LD8gnfVpmYlsLpuo1kaPfZY', 'FAILED', '2025-03-04 16:10:27'),
(24, 'John Hryshchuk (Advanced Ultrasound Systems)', '', '+19186282831', 8215.00, 'Jgc19PYfwJJ2Tl5NccK053lWrhMZY', 'COMPLETED', '2025-03-04 16:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `info_id` varchar(50) NOT NULL DEFAULT '0123abc',
  `store_name` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `site_support_email` varchar(100) NOT NULL,
  `site_phone` varchar(20) NOT NULL,
  `head_office` varchar(255) NOT NULL,
  `store_link` varchar(255) NOT NULL,
  `pay_now_link` varchar(255) NOT NULL DEFAULT '',
  `currency` varchar(50) NOT NULL DEFAULT 'USD',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`info_id`, `store_name`, `contact_name`, `site_support_email`, `site_phone`, `head_office`, `store_link`, `pay_now_link`, `currency`, `created_at`) VALUES
('0123abc', 'ROSE GLOBAL MED SUPPLY.', 'DENINIS RAY', 'info.roseglobalmedicalsupplyco@gmail.com', '+8617161320615', '529 Berry Ave, hayward, California, United States Of America.', 'https://sale.alibaba.com/p/dfijb0mab/index.html?spm=a2700.product_home_l0.history.product_3&wx_navbar_transparent=true&path=/p/dfijb0mab/index.html&ncms_spm=a27aq.27095423&prefetchKey=met', '', 'USD', '2025-02-16 00:40:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `idx_product_search` (`product_name`,`category`);
ALTER TABLE `order_products` ADD FULLTEXT KEY `idx_product_description` (`description`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD UNIQUE KEY `info_id` (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admins` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
