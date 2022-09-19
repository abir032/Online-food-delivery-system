-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 06:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `password`) VALUES
(1, 'Abir32', 'nasimpartho');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `description`, `price`, `discount`, `image`) VALUES
(4, 'Pizza', 'Pizza is another menu favorite that can be served plain with cheese and tomato sauce or topped with a variety of items. Traditional toppings include, pepperoni, sausage, and vegetables; while more trendy toppings include buffalo chicken, french fries, and salad.</p><p>( For those with more expensive tastes)', 540, 0, 'dish6.jpg'),
(5, 'Pretzel', '', 300, 0, 'dish7.jpg'),
(6, 'Pizza Italiano', 'Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients.', 600, 10, 'dish10.jpg'),
(7, 'Fish Cake & Salade', 'Thai-style fish cakes with herbal salad made with Tilapia, cooked in coconut oil  and served with a flavorful shredded salad with fresh lime, mint, cilantro and basil. Itâ€™s a flavor explosion!', 700, 10, 'dish10.jpg'),
(8, 'McDonalds', ' McDonalds isnâ€™t the only restaurant concept to offer all day breakfast. 2018 breakfast food trends are a mash-up of morning classics (think IHOP) meets food truck street foods. Look for ethnic additions like chorizo and chimichurri or potato masala and Punjabi samaos to add flavor and flare to breakfast menus.', 300, 10, 'dish11.jpg'),
(9, 'Blizzard Cake', 'Certain foods become more about who you eat them with than how they taste (or nutrition, of course). For me, Blizzard Cake is about sitting and chatting between delicious bites of soft serve swirled with treats (usually Oreo for me). Itâ€™s one of the best parts of summer. ', 400, 10, 'dish4.jpg'),
(10, 'Frosty', 'To come to terms with your existence in a capitalist society is to accept that nothing is good, fast, and cheap. Well, almost nothing. You can have two, but not all threeâ€”unless you buy a Frosty.', 160, 0, 'dish2.jpg'),
(12, 'Chicken Quesadilla', ' Traditional toppings include, pepperoni, sausage, and vegetables; while more trendy toppings include buffalo chicken, french fries, and salad.</p><p>( For those with more expensive tastes)', 200, 10, 'dish3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `food_id` int(11) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `c_name`, `quantity`, `total_price`, `food_id`, `contact_no`, `address`, `d_t`) VALUES
(3, 1, 'Tanvir Hassan', 2, 720.00, 9, 564335, 'satkhira', '2019-08-20 13:12:35'),
(5, 1, 'Tanvir Hassan', 3, 1620.00, 4, 1795424587, 'bonossre', '2019-08-20 13:12:35'),
(6, 1, 'Tanvir Hassan', 1, 540.00, 4, 564335, 'maliibug', '2019-08-20 13:12:35'),
(9, 1, 'Tanvir Hassan', 5, 2700.00, 4, 1795424587, 'bonossre', '0000-00-00 00:00:00'),
(10, 1, 'Tanvir Hassan', 3, 1620.00, 4, 1795424587, 'bonossre', '08/20/19-1:41 pm'),
(12, 1, 'Tanvir Hassan', 5, 1350.00, 8, 1795424587, 'bonossre', '08/20/19-2:10 pm'),
(13, 2, 'Fahim Faiz Abir', 3, 1080.00, 9, 1795424587, 'bonossre', '08/20/19-3:34 pm'),
(14, 2, 'Fahim Faiz Abir', 3, 900.00, 5, 1795424587, 'bonossre', '08/21/19-3:21 pm'),
(15, 2, 'Fahim Faiz Abir', 3, 1620.00, 4, 1795424587, 'bonossre', '08/21/19-4:07 pm'),
(16, 2, 'Fahim Faiz Abir', 3, 900.00, 5, 1795424587, 'bonossre', '08/21/19-4:07 pm'),
(17, 2, 'Fahim Faiz Abir', 3, 1620.00, 4, 1795424587, 'bonossre', '08/21/19-4:09 pm'),
(18, 2, 'Fahim Faiz Abir', 3, 1620.00, 4, 1795424587, 'bonossre', '08/21/19-4:09 pm'),
(19, 1, 'Tanvir Hassan', 3, 1620.00, 4, 1795424587, 'banassre,b block,R5,H21', '08/21/19-6:35 pm'),
(20, 2, 'Fahim Faiz Abir', 3, 1620.00, 4, 1795424587, 'bonossre', '08/22/19-2:08 am'),
(21, 2, 'Fahim Faiz Abir', 3, 1620.00, 4, 1795424587, 'bonossre', '08/22/19-2:09 am'),
(22, 2, 'Fahim Faiz Abir', 3, 900.00, 5, 1795424587, 'bonossre', '08/22/19-2:14 am'),
(23, 2, 'Fahim Faiz Abir', 3, 900.00, 5, 1795424587, 'bonossre', '08/22/19-2:36 am'),
(24, 1, 'Tanvir Hassan', 2, 1080.00, 4, 4523, 'bonossre', '08/23/19-10:24 pm');

-- --------------------------------------------------------

--
-- Table structure for table `order_foods`
--

CREATE TABLE `order_foods` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `d_t` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_foods`
--

INSERT INTO `order_foods` (`id`, `food_id`, `food_name`, `quantity`, `price`, `d_t`) VALUES
(8, 4, 'Pizza', 3, 1620, '08/20/19-1:58 pm'),
(9, 5, 'Pretzel', 3, 900, '08/22/19-2:38 am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`, `email`) VALUES
(1, 'tanvir12', '5db85fe4d7c285f5b49749b7a411daf6', 'Tanvir Hassan', 'tanvir@gmail.com'),
(2, 'abir32', 'f6888390f4bab6624bd7acf7ab300395', 'Fahim Faiz Abir', 'fahimfaizabir25@gmail.com'),
(3, 'Nasim73', '5171cd170a8e204b7709d3819b599051', 'Nasim Bahadur', 'nasimbahadur97@gmail.com'),
(4, 'Atul12', '7522d28ad772d1eef7b200ebddcd08ce', 'Ashikur Rahman Khan', 'Ashikurrahmankhan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_ibfk_1` (`food_id`);

--
-- Indexes for table `order_foods`
--
ALTER TABLE `order_foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_foods`
--
ALTER TABLE `order_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_foods`
--
ALTER TABLE `order_foods`
  ADD CONSTRAINT `order_foods_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
