-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 08:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `meal_types`
--

CREATE TABLE `meal_types` (
  `meal_type_name` varchar(150) NOT NULL,
  `meal_type_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_types`
--

INSERT INTO `meal_types` (`meal_type_name`, `meal_type_id`, `date_deleted`) VALUES
('supe', 1, NULL),
('dessert', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(150) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_image`, `product_id`) VALUES
('kiselo mlqko', NULL, 1),
('krastavica', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `recipies_products_quantities_units`
--

CREATE TABLE `recipies_products_quantities_units` (
  `recipe_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` float(5,2) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipies_products_quantities_units`
--

INSERT INTO `recipies_products_quantities_units` (`recipe_id`, `product_id`, `quantity`, `unit_id`, `id`) VALUES
(1, 1, 2.00, 3, 1),
(1, 2, 1.00, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `repcipe`
--

CREATE TABLE `repcipe` (
  `recipe_name` varchar(250) NOT NULL,
  `recipe_descr` text NOT NULL,
  `prep_time` int(11) NOT NULL,
  `meal_type_id` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `date_modefied` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repcipe`
--

INSERT INTO `repcipe` (`recipe_name`, `recipe_descr`, `prep_time`, `meal_type_id`, `date_added`, `date_modefied`, `date_deleted`, `recipe_id`) VALUES
('tarator', 'description', 5, 1, '2021-10-25', '2021-11-01 13:41:35', NULL, 1),
('chocolate muffins', 'desc.', 30, 2, '2021-10-25', '2021-11-04 11:57:17', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `unit_names` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_names`, `date_deleted`) VALUES
(1, 'kilograms', NULL),
(2, 'miligrams', NULL),
(3, 'br', NULL),
(4, 'litre', NULL),
(5, 'mililitre', NULL),
(6, 'ton', '2021-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal_types`
--
ALTER TABLE `meal_types`
  ADD PRIMARY KEY (`meal_type_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recipies_products_quantities_units`
--
ALTER TABLE `recipies_products_quantities_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `repcipe`
--
ALTER TABLE `repcipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `meal_type_id` (`meal_type_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal_types`
--
ALTER TABLE `meal_types`
  MODIFY `meal_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipies_products_quantities_units`
--
ALTER TABLE `recipies_products_quantities_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `repcipe`
--
ALTER TABLE `repcipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipies_products_quantities_units`
--
ALTER TABLE `recipies_products_quantities_units`
  ADD CONSTRAINT `recipies_products_quantities_units_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `repcipe` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `recipies_products_quantities_units_ibfk_3` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `recipies_products_quantities_units_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
