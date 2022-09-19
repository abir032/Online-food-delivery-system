-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 10:00 AM
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
(3, 'Chicken Quesadilla', 'Go to the Google search bar and start typing â€œWhat is the sauce in theâ€â€”then let it hang. The very first suggestion is â€œTaco Bell quesadilla,â€ a cheesy creation with a tangy yet spicy sauce. ', 200, 10, 'dish3.jpg'),
(4, 'Pizza', 'Pizza is another menu favorite that can be served plain with cheese and tomato sauce or topped with a variety of items. Traditional toppings include, pepperoni, sausage, and vegetables; while more trendy toppings include buffalo chicken, french fries, and salad.</p><p>( For those with more expensive tastes)', 540, 0, 'dish6.jpg'),
(5, 'Pretzel', '', 300, 0, 'dish7.jpg'),
(6, 'Pizza Italiano', 'Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients.', 600, 10, 'dish10.jpg'),
(7, 'Fish Cake & Salade', 'Thai-style fish cakes with herbal salad made with Tilapia, cooked in coconut oil  and served with a flavorful shredded salad with fresh lime, mint, cilantro and basil. Itâ€™s a flavor explosion!', 700, 10, 'dish10.jpg'),
(8, 'McDonalds', ' McDonalds isnâ€™t the only restaurant concept to offer all day breakfast. 2018 breakfast food trends are a mash-up of morning classics (think IHOP) meets food truck street foods. Look for ethnic additions like chorizo and chimichurri or potato masala and Punjabi samaos to add flavor and flare to breakfast menus.', 300, 10, 'dish11.jpg'),
(9, 'Blizzard Cake', 'Certain foods become more about who you eat them with than how they taste (or nutrition, of course). For me, Blizzard Cake is about sitting and chatting between delicious bites of soft serve swirled with treats (usually Oreo for me). Itâ€™s one of the best parts of summer. ', 400, 10, 'dish4.jpg');

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
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `c_name`, `quantity`, `total_price`, `food_id`, `contact_no`, `address`) VALUES
(1, 1, 'Tanvir Hassan', 2, 400.00, 3, 1795424587, 'bonossre'),
(2, 1, 'Tanvir Hassan', 1, 300.00, 5, 1795424587, 'bonossre'),
(3, 1, 'Tanvir Hassan', 2, 720.00, 9, 564335, 'satkhira'),
(4, 1, 'Tanvir Hassan', 3, 540.00, 3, 4523, 'satkhira'),
(5, 1, 'Tanvir Hassan', 3, 1620.00, 4, 1795424587, 'bonossre'),
(6, 1, 'Tanvir Hassan', 1, 540.00, 4, 564335, 'maliibug'),
(7, 1, 'Tanvir Hassan', 3, 1620.00, 4, 1795424587, 'bonossre');

-- --------------------------------------------------------

--
-- Table structure for table `order_foods`
--

CREATE TABLE `order_foods` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_foods`
--

INSERT INTO `order_foods` (`id`, `food_id`, `food_name`, `quantity`, `price`) VALUES
(1, 3, 'Chicken Quesadilla', 2, 360),
(3, 4, 'Pizza', 1, 540),
(4, 3, 'Chicken Quesadilla', 3, 540),
(5, 5, 'Pretzel', 1, 300),
(6, 5, 'Pretzel', 1, 300);

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
(1, 'tanvir12', '5db85fe4d7c285f5b49749b7a411daf6', 'Tanvir Hassan', 'tanvir@gmail.com');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_foods`
--
ALTER TABLE `order_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
