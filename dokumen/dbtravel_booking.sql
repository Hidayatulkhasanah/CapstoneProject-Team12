-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 10:35 AM
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
-- Database: `dbtravel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customers`
--

CREATE TABLE `tb_customers` (
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_customers`
--

INSERT INTO `tb_customers` (`customer_id`, `user_id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 111, 'Hidayatul ', 'Khasanah', '089630761046'),
(2, 222, 'Nura', 'Bella', '089765432122');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payments`
--

CREATE TABLE `tb_payments` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_payments`
--

INSERT INTO `tb_payments` (`payment_id`, `customer_id`, `payment_date`, `amount`) VALUES
(625, 2, '2023-11-13', 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reviews`
--

CREATE TABLE `tb_reviews` (
  `review_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reviews`
--

INSERT INTO `tb_reviews` (`review_id`, `customer_id`, `tour_id`, `rating`, `comment`) VALUES
(4212, 2, 1512, 5, 'cocok untuk healing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `ticket_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `ticket_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tickets`
--

INSERT INTO `tb_tickets` (`ticket_id`, `customer_id`, `tour_id`, `ticket_date`) VALUES
(6211, 2, 1512, '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tours`
--

CREATE TABLE `tb_tours` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tours`
--

INSERT INTO `tb_tours` (`tour_id`, `tour_name`, `destination`, `start_date`, `end_date`, `price`) VALUES
(1511, 'Situ Patenggang', ' Ciwidey (Jawa Barat)', '2023-11-12', '2023-11-15', 50000.00),
(1512, 'Taman Langit', 'Pangalengan (Jawa Barat)', '2023-11-13', '2023-11-14', 45000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `username`, `password`, `email`, `role`) VALUES
(111, 'Hidayatul Khasanah', 'Hida151117', 'hidayatulkhasanah760@gmail.com', 'admin'),
(222, 'Nurabella', 'Nurabella123', 'nurabella123@gmail.com', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tb_reviews`
--
ALTER TABLE `tb_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tb_tours`
--
ALTER TABLE `tb_tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_payments`
--
ALTER TABLE `tb_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=626;

--
-- AUTO_INCREMENT for table `tb_reviews`
--
ALTER TABLE `tb_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4213;

--
-- AUTO_INCREMENT for table `tb_tickets`
--
ALTER TABLE `tb_tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6212;

--
-- AUTO_INCREMENT for table `tb_tours`
--
ALTER TABLE `tb_tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1513;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD CONSTRAINT `tb_customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`);

--
-- Constraints for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD CONSTRAINT `tb_payments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tb_customers` (`customer_id`);

--
-- Constraints for table `tb_reviews`
--
ALTER TABLE `tb_reviews`
  ADD CONSTRAINT `tb_reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tb_customers` (`customer_id`),
  ADD CONSTRAINT `tb_reviews_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tb_tours` (`tour_id`);

--
-- Constraints for table `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD CONSTRAINT `tb_tickets_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tb_customers` (`customer_id`),
  ADD CONSTRAINT `tb_tickets_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tb_tours` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
