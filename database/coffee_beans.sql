-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2023 at 02:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_beans`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` char(17) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `subcity` varchar(50) NOT NULL,
  `woreda` int NOT NULL,
  `house_no` varchar(25) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstName`, `lastName`, `email`, `password`, `phone`, `gender`, `city`, `subcity`, `woreda`, `house_no`, `payment_method`) VALUES
(1, 'Yafet', 'Feleke', 'yafetema15@gmail.com', '$2y$10$hZYPNqMjkTob.giYwseifeLN.K5tIvk/viA0fX8Dv75ren9XAiFf6', '+251929344295', 'male', 'Addis Ababa', 'Bole', 8, 'new', 'telebirr'),
(14, 'Eyob', 'Feleke', 'eyobema18@gmail.com', '$2y$10$1X/ybFleFefjxtcZSDeJ9e1SGU6bviEMt2JzrWnvaOYf08BvmIfUO', '+251947901154', 'male', 'Addis Ababa', 'Leki kura', 3, 'new', 'cbe birr'),
(22, 'Feven', 'Feleke', 'fevenabebe@gmail.com', '$2y$10$tKd146S45WFOQF5sQ/.KMO5ObOEaI0MS4CmopJ0kskeEIl4TIxD8q', '+251911001122', 'female', 'Addis Ababa', 'Nifas Silk-Lafto', 10, '419', 'visa card');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

DROP TABLE IF EXISTS `daily`;
CREATE TABLE IF NOT EXISTS `daily` (
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prod_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `prod_id`) VALUES
(1, 88),
(2, 90),
(3, 97),
(4, 100),
(5, 107),
(6, 109),
(9, 91),
(10, 95);

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

DROP TABLE IF EXISTS `new_arrivals`;
CREATE TABLE IF NOT EXISTS `new_arrivals` (
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subcategory` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img_uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `subcategory`, `description`, `price`, `img_uri`) VALUES
(88, 'Boca java espresso', 'roasted', 'dark_roast', 'Boca java expresso coffee dark roast', '1200.00', 'Boca-java-boca-espresso-whole-bean-coffee-dark-roast.jpeg'),
(89, 'Boyers organic coffee', 'roasted', 'medium_roast', 'Boyers organic medium roasted coffee', '1230.23', 'Boyers-coffee-organic-costa-rica-Hounduras-medium-roast-whole-bean-coffee.png'),
(90, 'Colombian coffee', 'roasted', 'light_roast', 'Colombian supremo light roasted coffee', '1000.00', 'colombian-supremo-bag-2021-square_720x.jpg'),
(91, 'Fire dep', 'roasted', 'dark_roast', 'Fire department dark roast coffee ground', '1322.12', 'dark-roast-coffee-ground-coffee-made-by-fire-department-coffee.jpeg'),
(92, 'Decaf coffee', 'roasted', 'medium_roast', 'Decaf dark sumatra bag', '902.23', 'decaf-dark-sumatra-bag-2021-square_720x.jpg'),
(93, 'Eight oclock coffee', 'roasted', 'dark_roast', 'Eight oclock dark Italian expresso coffee', '1403.48', 'Eight-oclock-dark-italian-expresso-dark-roast-whole-bean-coffee.jpeg'),
(94, 'Eight oclock coffee', 'roasted', 'medium_roast', 'Eight oclock Italian medium roasted', '1350.00', 'Eight-o-clock-the-original-medium-roasted-whole-bean.jpeg'),
(95, 'Grand parade', 'unroasted', 'robusta', 'Grand parade Kenya unroasted bean', '1000.00', 'grand-parade-coffee-kenya-AA-nyeri-unroasted-green-coffee-beans.png'),
(96, 'Grand parade', 'ethiopian', 'robusta', 'Grand parade organic ethiopian unroasted', '1200.00', 'grand-parade-coffee-orgranics-ethiopian-sidama-unroasted-green-coffee-beans.png'),
(97, 'Grand parade', 'unroasted', 'arabica', 'Grand parade organic Colombian unroasted', '1320.00', 'grand-parade-coffee-origanic-colombia-supermo-unroasted-green-coffee-beans.png'),
(98, 'Hawaii coffee', 'roasted', 'medium_roast', 'Hawaii coffee royal kona ', '1221.00', 'hawaii-coffee-royal-kona-coffee.jpeg'),
(99, 'Hazelnut coffee', 'roasted', 'light_roast', 'Hazelnut coffee light roasted', '900.00', 'hazelnut-bag-2021-square_720x.jpg'),
(100, 'Italian rspresso', 'roasted', 'dark_roast', 'Italian dark roasted espresso ', '1333.99', 'italian-roast-espresso-bag-2021-square_720x.jpg'),
(101, 'Java coffee', 'unroasted', 'arabica', 'Java orgranic unroasted beans', '1234.45', 'java-the-orgranic-coffee-whole-unroasted-beans.jpeg'),
(102, 'Keffa coffee', 'roasted', 'light_roast', 'Keffa coffee lions pride light roast', '1200.00', 'keffa-coffee-lions-pride-coffee-light-roast.jpeg'),
(103, 'Keffa coffee', 'roasted', 'medium_roast', 'Keffa coffee Rwanda medium roast ', '1232.00', 'Keffa-coffee-rwanda-risse-coffee-medium-roast.jpeg'),
(104, 'May blend', 'roasted', 'light_roast', 'May blend light roast coffee ', '1212.00', 'may-roasters-blend-bag-2022-square_720x.jpg'),
(105, 'Pablos coffee', 'roasted', 'dark_roast', 'Pablos pride guatemalan dark roast', '1542.00', 'pablos-pride-guatemalan-whole-bean-coffee-medum-dark-roast.jpeg'),
(106, 'Papa nicholas coffee', 'unroasted', 'arabica', 'Papa nicholas coffee hawaiian coffee', '1342.83', 'papa-nicholas-coffee-hawaiian-island-blend-whole-bean.jpeg'),
(107, 'Papa nicholas coffee', 'unroasted', 'arabica', 'Papa nicholas colombian supremo unroasted', '1022.00', 'papa-nicholas-colombian-supremo-unroasted-coffee.jpeg'),
(108, 'Peets coffee', 'roasted', 'dark_roast', 'Peets coffee major dickason ', '1423.00', 'Peets-coffee-major-dickason-blend-dark-roast-whole-bean-coffee.jpeg'),
(109, 'Peru organic coffee', 'unroasted', 'arabica', 'Peru organic green unroasted coffee', '1333.00', 'peru-organic-green-unroasted-coffee-beans.jpeg'),
(110, 'Starbucks coffee', 'roasted', 'medium_roast', 'Starbucks arabica medium roasted beans', '1834.00', 'starbucks-arabica-beans-breakfast-blend-medium-roast-whole-bean-coffee.jpeg'),
(111, 'Starbucks coffee', 'roasted', 'dark_roast', 'Starbucks arabica dark roasted beans', '1822.28', 'starbucks-arabica-beans-french-blend-dark-roast-whole-bean-coffee.jpeg'),
(112, 'Costrica coffee', 'roasted', 'medium_roast', 'Costrica medium roasted coffee beans', '1324.00', 'the-coffee-bean-and-tea-leaf-costa-rica-medium-whole-bean-coffee.jpeg'),
(113, 'Santos coffee', 'unroasted', 'arabica', 'Unroasted Brazilian santos beans', '902.00', 'unroasted-brazilian-santos-5lb-burlap-2022-square_720x.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
