-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 19, 2023 at 12:04 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(122) NOT NULL,
  `email` varchar(122) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `message` mediumtext NOT NULL,
  `IsChecked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `orderId`, `message`, `IsChecked`) VALUES
(10, 'John Wick', 'john@w.com', 22, 'Missing items...', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passwordreset`
--

CREATE TABLE `passwordreset` (
  `id` int(11) NOT NULL,
  `userid` int(14) NOT NULL,
  `cpassword` varchar(16) NOT NULL,
  `npassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `posted_on` varchar(120) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `price` double(5,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `posted_by`, `posted_on`, `title`, `description`, `image_url`, `price`, `stock`) VALUES
(1, 1, '2023-05-18', 'Pet food', 'Nutritious and delicious pet food for happy, healthy pets. Treat them right with our high-quality recipes.', 'https://w7.pngwing.com/pngs/176/405/png-transparent-dog-food-dog-biscuit-pedigree-petfoods-dog-food-animals-beef.png', 79.00, 2355),
(4, 2, '2023-05-17', 'Pet toy', 'Unleash the fun with our irresistible pet toys. Designed for joy and built to last.', 'https://image.pngaaa.com/628/3402628-middle.png', 8.00, 1770),
(6, 1, '2023-05-16', 'Pet Health and Wellness Products', 'Enhance your pet\'s health and happiness with our top-notch wellness products. From supplements to grooming essentials, we\'ve got you covered.', 'https://cdn.shopify.com/s/files/1/0684/2253/3428/products/Untitleddesign-2022-11-29T211719.950.png?v=1669736849&width=533', 150.00, 509),
(7, 1, '2023-05-15', 'Pet accessories', 'Style meets comfort in our pet accessories. Explore our collection for fashionable and functional items your pet will love.', 'https://www.top-n-tails.co.uk/wp-content/uploads/2020/08/pet-accessories-on-a-floor.png', 15.00, 1908),
(8, 13, '2023-05-14', 'Pet medication', 'Keep your pet healthy with our trusted medications. Vet-approved solutions for their well-being', 'https://www.petsdrugmart.ca/Files/ProductImage_Normal/7948570_MOZIQPETS.PNG', 230.00, 809);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` varchar(320) NOT NULL,
  `product_types` varchar(255) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `registered_on` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `email`, `phone_number`, `address`, `product_types`, `isActive`, `registered_on`) VALUES
(1, 'OnlineMarket Sdn Bhd', 'support@osm.com', '012234224', 'Bukit Jalil, WP, Malaysia', 'Pet toys, pet accessories', 1, '2023-05-10'),
(2, 'Aeon Sdn Bhd', 'aeon@mail.com', '01231231', 'Kinta City, Klang', 'Pet food, pet treat', 1, '2023-05-11'),
(13, 'Test Company Ptd Ltd', 'test@company.com', '0127452749', 'Jalan Permai', 'Pet health and wellness products, pet medicine', 1, '2023-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_rating`
--

CREATE TABLE `supplier_rating` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_rating`
--

INSERT INTO `supplier_rating` (`id`, `order_id`, `supplier_id`, `rating`) VALUES
(17, 23, 1, 5),
(18, 25, 1, 2),
(19, 26, 2, 4),
(20, 24, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phonenum` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `phonenum`, `email`, `gender`, `password`, `user_type`) VALUES
(1, 'Supplier', 'User', '0123456789', 't@t.com', 'M', 'hey', 2),
(2, 'Supplier', 'User2', '0123453453', 't1@t.com', 'M', 'hey', 2),
(3, 'Admin', 'User', '0123123123', 't2@t.com', 'M', 'hey', 1),
(13, 'Supplier', 'User3', '0123466789', 'wad@ef.com', 'M', 'qwe', 2),
(14, 'John', 'Wick', '0123758339', 'john@w.com', 'M', 'qwe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `paid` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `user_id`, `product_id`, `qtn`, `delivery`, `shipping_address`, `paid`) VALUES
(23, 14, 1, 6, 'Delivery', 'Taman Permai', 84.00),
(24, 14, 8, 42, 'Delivery', 'Taman Permai', 289.80),
(25, 14, 7, 6, 'Delivery', 'Taman Permai', 43.20),
(26, 14, 4, 5, 'Delivery', 'Taman Permai', 75.00),
(27, 14, 4, 15, 'Delivery', 'Taman Berjaya', 225.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwordreset`
--
ALTER TABLE `passwordreset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_rating`
--
ALTER TABLE `supplier_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_idfk` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passwordreset`
--
ALTER TABLE `passwordreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier_rating`
--
ALTER TABLE `supplier_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passwordreset`
--
ALTER TABLE `passwordreset`
  ADD CONSTRAINT `FK` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `posted_by` FOREIGN KEY (`posted_by`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id`) REFERENCES `users` (`userid`);

--
-- Constraints for table `supplier_rating`
--
ALTER TABLE `supplier_rating`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `user_orders` (`id`),
  ADD CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_idfk` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
