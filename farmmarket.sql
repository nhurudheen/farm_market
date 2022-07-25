-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 06:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `mem_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`mem_id`, `name`, `username`, `email`, `password`, `image_url`) VALUES
(3, 'FANIYI NURUDEEN', 'ADMIN1', 'ifaniyioluwapelumi@gmail.com', '32cacb2f994f6b42183a1300d9a3e8d6', ''),
(4, 'adesanya alex', 'admin2', 'adesanya@gmail.com', 'c84258e9c39059a89ab77d846ddab909', ''),
(5, 'TUNWASHE DANIEL', 'admin4', 'daniel2@yahoo.com', 'fc1ebc848e31e0a68e868432225e3c82', ''),
(6, 'ISREAL ISREAL', 'admin5', 'isreal@micrososftoutlook.com', '26a91342190d515231d7238b0c5438e1', ''),
(7, 'AJIBADE DAVID', 'admin6', 'ajibadeadmin6@yahoo.com', 'c6b853d6a7cc7ec49172937f68f446c8', ''),
(8, 'APPOLO KING', 'admin7', 'appolo_appolo@yahoo.com', '788073cefde4b240873e1f52f5371d7d', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `product_size` varchar(100) NOT NULL,
  `farmer_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `user_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_size`, `farmer_name`, `product_name`, `product_price`, `product_image`, `quantity`, `total_price`, `product_code`, `user_id`) VALUES
(61, 'LARGE', 'FANIYI FARMS', '10 Tubers of Yam', '9990.90', 'images/product/6682d4ec2b.jpg', '1', '9990.90', '8jaf5', '1'),
(62, 'SMALL', 'OYEBOLA KOLADE FARMS', 'CORN', '1000', 'images/product/5e088a4ada.png', '1', '1000', 'ek42l', '1'),
(63, 'SMALL', 'OYEBOLA KOLADE FARMS', 'Long Pepper', '300', 'images/product/e2762379a0.png', '1', '300', 'fes7o', '1');

-- --------------------------------------------------------

--
-- Table structure for table `farmersprofile`
--

CREATE TABLE `farmersprofile` (
  `id` int(100) NOT NULL,
  `farm_name` varchar(100) NOT NULL,
  `ceo_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area_of_specialization` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmersprofile`
--

INSERT INTO `farmersprofile` (`id`, `farm_name`, `ceo_name`, `address`, `phoneno`, `email`, `area_of_specialization`, `image`) VALUES
(1, 'FANIYI FARMS', 'DEEN and sons', 'House 2, Off Balogun Block, Aare Alaasa,', '08183670885', 'ifaniyioluwapelumi@gmail.com', 'Cash Crops, Food Crops and Vegetables', 'images/farmersprofile/d513ae2f79.jpg'),
(5, 'TINUBU FARMS', 'adenike moronfolu', 'House 2, Off Balogun Block, Aare Alaasa,', '08183670885', 'ghostmodeanonymous@yahoo.com', 'Rice', 'images/farmersprofile/856eb77471.jpg'),
(6, 'OYEBOLA KOLADE FARMS', 'Oyebola kolade', 'House 2, Off Balogun Block, Aare Alaasa,', '08183670885', 'ifaniyioluwapelumi@gmail.com', 'They Specialize in all variety', 'images/farmersprofile/e5a28413a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `products` varchar(1000) NOT NULL,
  `grand_total` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `pending` varchar(100) NOT NULL,
  `shipped` varchar(100) NOT NULL,
  `deliverystatus` varchar(100) NOT NULL,
  `pendingdate` varchar(100) NOT NULL,
  `shippeddate` varchar(100) NOT NULL,
  `deliverydate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_no`, `firstname`, `lastname`, `address`, `phoneno`, `email`, `products`, `grand_total`, `date`, `pending`, `shipped`, `deliverystatus`, `pendingdate`, `shippeddate`, `deliverydate`) VALUES
(1, '2', 'cy14r', 'Adeagbo', 'Oluwashemilorey Damilare', 'Camp, Abeokuta', '081836708854', 'shey@gmail.com', '1Â Â LARGEÂ Â Ewura YamÂ Â from Â FANIYI FARMS<li><a>1Â Â SMALLÂ Â TomatoÂ Â from Â OYEBOLA KOLADE FARMS<li><a>1Â Â LARGEÂ Â CoffeeÂ Â from Â FANIYI FARMS', '1440', 'Thu, 22 Apr 21 10:55:08 +0200', 'Your Item has been Confirmed', 'The item has been shipped by DHL SERVER, Order will arrive in next 5 days', '', '2021-04-23', '2021-04-30', ''),
(3, '2', 'bseid', 'Adeagbo', 'Oluwashemilorey Damilare', 'Camp, Abeokuta', '081836708854', 'shey@gmail.com', '1Â Â MEDIUMÂ Â CucumberÂ Â from Â FANIYI FARMS', '200', 'Thu, 22 Apr 21 13:02:21 +0200', '', '', '', '', '', ''),
(4, '3', 'm4n3g', 'Daniel', 'Tunwashe', 'charity hostel', '08150806635', 'dtunwashe@yahoo.com', '1Â Â SMALLÂ Â CocoaÂ Â from Â FANIYI FARMS<li><a>5Â Â MEDIUMÂ Â RiceÂ Â from Â FANIYI FARMS<li><a>1Â Â MEDIUMÂ Â PotatoÂ Â from Â FANIYI FARMS<li><a>1Â Â MEDIUMÂ Â CabbageÂ Â from Â OYEBOLA KOLADE FARMS', '24050', 'Sun, 25 Apr 21 15:38:49 +0200', 'Your Item has been Confirmed', 'The item has been shipped by DHL SERVER, Order will arrive in next 5 days', 'Yiu item has been delivered. Thanks ', '2021-04-23', '2021-04-30', '2021-04-30'),
(5, '2', 'e47sa', 'Adeagbo', 'Oluwashemilorey Damilare', 'Camp, Abeokuta', '081836708854', 'shey@gmail.com', '1Â Â SMALLÂ Â Long PepperÂ Â from Â OYEBOLA KOLADE FARMS', '300', 'Tue, 27 Apr 21 07:34:19 +0200', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `farm_name` varchar(100) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `formerprice` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `receive_date` varchar(100) NOT NULL,
  `expiry_date` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `farm_name`, `product_code`, `product_name`, `category`, `price`, `formerprice`, `size`, `quantity`, `receive_date`, `expiry_date`, `product_category`, `description`, `image`) VALUES
(8, 'OYEBOLA KOLADE FARMS', 'eanrw', 'YAM', 'TUBERS', '2000', '5000', 'MEDIUM', '10 TUBERS', 'Thu, 18 Mar 21 11:04:12 +0100', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/d66f8d66ae.png'),
(9, 'FANIYI FARMS', 'neu1v', 'Cassava', 'TUBERS', '3000', '6000', 'LARGE', '1000 Tons', 'Thu, 18 Mar 21 11:05:09 +0100', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/eece017a34.png'),
(10, 'TINUBU FARMS', 'njtwh', 'Wheat', 'GRAIN', '800', '2000', 'MEDIUM', '20 Bags', 'Thu, 18 Mar 21 11:05:54 +0100', '2021-03-10', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/4ea2a819fd.png'),
(11, 'TINUBU FARMS', 'apjrl', 'Fresh Carrot', 'VEGETABLES', '20', '100', 'LARGE', '5 basket available', 'Thu, 18 Mar 21 11:10:12 +0100', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/deabf20068.png'),
(12, 'OYEBOLA KOLADE FARMS', 'ek42l', 'CORN', 'GRAIN', '1000', '2500', 'SMALL', '25', 'Sun, 04 Apr 21 22:16:38 +0200', '2021-03-04', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/5e088a4ada.png'),
(13, 'FANIYI FARMS', 'f8vlx', 'Cucumber', 'VEGETABLES', '200', '300', 'MEDIUM', '25', 'Sun, 04 Apr 21 22:18:29 +0200', '2021-06-11', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/de9dc3a210.png'),
(14, 'OYEBOLA KOLADE FARMS', 'islor', 'Cabbage', 'VEGETABLES', '200', '500', 'MEDIUM', '100', 'Sun, 04 Apr 21 22:20:15 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/6009f7a869.png'),
(15, 'FANIYI FARMS', 'f5gy2', 'Coffee', 'GRAIN', '1000', '2000', 'LARGE', '100', 'Sun, 04 Apr 21 22:23:58 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/299202f54f.png'),
(16, 'TINUBU FARMS', '8ovfn', 'Groundnut', 'SEAFOODS', '30', '600', 'LARGE', '100', 'Sun, 04 Apr 21 22:27:09 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/3eccfdbf0b.png'),
(17, 'FANIYI FARMS', 'fso2p', 'Onions', 'VEGETABLES', '20', '50', 'SMALL', '300', 'Sun, 04 Apr 21 22:28:09 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/e41c55614b.png'),
(18, 'FANIYI FARMS', 'qaclw', 'Potato', 'TUBERS', '350', '500', 'MEDIUM', '200', 'Sun, 04 Apr 21 22:30:11 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/86b0f92c99.png'),
(19, 'OYEBOLA KOLADE FARMS', '2o334', 'Tomato', 'FRUIT', '50', '100', 'SMALL', '200', 'Sun, 04 Apr 21 22:31:07 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/da787f9cd8.png'),
(20, 'TINUBU FARMS', 'm9m2f', 'Green Beans', 'VEGETABLES', '300', '500', 'MEDIUM', '200', 'Sun, 04 Apr 21 22:32:58 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/41f7d1eaa3.png'),
(21, 'OYEBOLA KOLADE FARMS', 'fes7o', 'Long Pepper', 'CASHCROPS&OTHERS', '300', '600', 'SMALL', '2000', 'Sun, 04 Apr 21 22:33:42 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/e2762379a0.png'),
(22, 'FANIYI FARMS', '3eyun', 'Rice', 'GRAIN', '700', '1000', 'MEDIUM', '222', 'Sun, 04 Apr 21 22:35:49 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure\r\n								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/87f28bf392.jpg'),
(23, 'FANIYI FARMS', 'mbglh', 'Cocoa', 'CASHCROPS&OTHERS', '20000', '50000', 'SMALL', '1000', 'Sun, 04 Apr 21 22:36:30 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure\r\n								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/be1bf092c9.jpg'),
(24, 'FANIYI FARMS', 'b9yst', 'Ewura Yam', 'TUBERS', '390', '5000', 'LARGE', '20', 'Sun, 04 Apr 21 22:37:30 +0200', '', 'singleproduct', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure\r\n								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/product/579990c034.png'),
(26, 'FANIYI FARMS', '8jaf5', '10 Tubers of Yam', 'TUBERS', '9990.90', '15000', 'LARGE', '100', 'Thu, 08 Apr 21 09:26:28 +0200', '', 'bulkproduct', 'This is a bulk products, <br >\r\nUser Can purchase this products at a lesser price. <br >\r\nThe cost of buying a single yam is 1500 which ten tubers in 15000 but purchasing in bulk will be sold out at the rate of 9990.90', 'images/product/6682d4ec2b.jpg'),
(27, 'TINUBU FARMS', 'hltsq', 'Vegetables', 'VEGETABLES', '1000', '3000', 'MEDIUM', 'Bulk', 'Tue, 27 Apr 21 11:05:50 +0200', '2021-04-29', 'bulkproduct', 'User can now get group of vegetables at Bulk Purchase.', 'images/product/b75c0d7a0b.png'),
(28, 'OYEBOLA KOLADE FARMS', '95ufq', 'Egg', 'others', '20000', '40000', 'MEDIUM', '10 Create of Egg', 'Tue, 27 Apr 21 11:10:45 +0200', '', 'bulkproduct', '10 Create of Egg can now be purchase for 2000 per create due to Bulk Purchase. <br > \r\nIt cost 4000 per create at a single product. <br>\r\nA price slash of 2000 is reduce at bulk purchase', 'images/product/112b0f6584.png'),
(29, 'OYEBOLA KOLADE FARMS', '9n2bg', 'Fish', 'SEAFOODS', '5000', '10000', 'LARGE', '2', 'Tue, 27 Apr 21 11:14:37 +0200', '', 'bulkproduct', 'Fish is available at Bulk Sales', 'images/product/eaa7b4ac81.png'),
(30, 'FANIYI FARMS', '9uir8', 'Cereals', 'CEREALS', '5000', '5999.99', 'LARGE', '7', 'Tue, 27 Apr 21 11:17:50 +0200', '', 'bulkproduct', 'Cereals is available for bulk purchase', 'images/product/9dd06abc60.png'),
(31, 'TINUBU FARMS', 'tg25h', 'Combo Sales', 'FRUIT', '10000', '12000', 'LARGE', '6', 'Tue, 27 Apr 21 11:23:11 +0200', '2021-04-30', 'bulkproduct', 'Get our combo deals and get access to wide variety of fruits and vegetables at an affordable rate.', 'images/product/87e138666f.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `firstname`, `email`, `password`, `address`, `phoneno`, `lastname`) VALUES
(1, 'FANIYI', 'ifaniyioluwapelumi@gmail.com', '521d32d1c80c68a6f81688b0f2415aaf', 'House 2, Off Balogun Block, Aare Alaasa,', '+2348117614246', 'Oluwapelumi'),
(2, 'Adeagbo', 'shey@gmail.com', '33a600721d41ed072f2d26aabb8c9826', 'Camp, Abeokuta', '081836708854', 'Oluwashemilorey Damilare'),
(3, 'Daniel', 'dtunwashe@yahoo.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'charity hostel', '08150806635', 'Tunwashe'),
(4, 'Appolo', 'apolo@gmail.com', '4a35f27d3b042fbb6080ac40deb93f79', 'House 2, Apoolo Street, Camp, Apata, Ibadan.', '039849494940', 'King');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `farmersprofile`
--
ALTER TABLE `farmersprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `mem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `farmersprofile`
--
ALTER TABLE `farmersprofile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
