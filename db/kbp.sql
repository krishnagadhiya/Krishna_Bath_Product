-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registrations`
--

CREATE TABLE `admin_registrations` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registrations`
--

INSERT INTO `admin_registrations` (`admin_id`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'krishna', 'k@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Napkin Ring', '230310060812.png'),
(2, 'Soap Dish', '230310061224.png'),
(3, 'Towel', '230310061306.png'),
(4, 'Water Tap', '230310061602.png'),
(5, 'Shower', '230310061545.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `users_id`, `delivery_date`, `payment_method`, `total_amount`) VALUES
(1, 2, '2020-08-09', 'Cash', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orders_detail_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Round Ring', 1, '500', 'This is Round Ring.', '2303100617200.png'),
(2, 'Square Ring', 1, '600', 'This cake is Square Ring.', '2303100618170.png'),
(3, 'Round Dish', 2, '200', 'It is a Round Dish.', '2303100620190.png'),
(4, 'Square Dish', 2, '350', 'It is a Square Dish.', '2303100621050.jfif'),
(5, 'Towel Rack', 3, '150', 'This is a Towel Rack.', '2303100622310.png'),
(6, 'Towel', 3, '200', 'This is a Towel.', '2303100623250.png'),
(7, 'Water Tap', 4, '650', 'This is a Water Tap.', '2303100624250.png'),
(8, 'Water Tap', 4, '650', 'This a Water Tap.', '2303100624580.png'),
(9, 'Shower', 5, '325', 'This is a Shower.', '2303100626320.png'),
(10, 'Shower', 5, '300', 'This is a Shower.', '2303100627170.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `subject`, `review`) VALUES
(1, 'krishna', 'product', 'nice quality'),
(2, 'Dhruvi', 'product', 'Good quality'),
(3, 'Hinali', 'product', 'nice product quality i like this'),
(4, 'krishna', 'product', 'nice product quality');

-- --------------------------------------------------------

--
-- Table structure for table `users_registrations`
--

CREATE TABLE `users_registrations` (
  `users_id` int(11) NOT NULL,
  `users_username` varchar(100) NOT NULL,
  `users_email` varchar(150) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `users_mobile` varchar(50) NOT NULL,
  `users_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_registrations`
--

INSERT INTO `users_registrations` (`users_id`, `users_username`, `users_email`, `users_password`, `users_mobile`, `users_address`) VALUES
(1, 'krishna', 'k@gmail.com', '12345', '2147483647', 'this is address'),
(2, 'krupa', 'k@gmail.com', '11111', '9876543210', 'This is address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registrations`
--
ALTER TABLE `admin_registrations`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`orders_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_registrations`
--
ALTER TABLE `users_registrations`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registrations`
--
ALTER TABLE `admin_registrations`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `orders_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_registrations`
--
ALTER TABLE `users_registrations`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
