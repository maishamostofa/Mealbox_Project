-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mealbox3`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `unique_id`, `username`, `email`, `phone`, `address`, `image`, `password`, `status`) VALUES
(1, 1295110267, 'Mitra', 'chitra.banik.cse@ulab.edu.bd', 0, '', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now'),
(3, 1225693689, 'Ritu', 'linia.jannat.cse@ulab.edu.bd', 0, '', './images/received_423727181564301.jpeg', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(4, 883294772, 'Towhid', 'towhid.hassan.cse@ulab.edu.bd', 0, '', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(9, 489929076, 'Prima', 'maisha.mostofa.cse@ulab.edu.bd', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', '', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now'),
(10, 558006890, 'm', 'mm@email.com', 2147483647, 'qwe', './images/received_416033615889610.jpeg', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_data`
--

CREATE TABLE `buyer_data` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(2) NOT NULL,
  `order_id` int(15) NOT NULL,
  `delivery_man` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_data`
--

INSERT INTO `buyer_data` (`id`, `unique_id`, `username`, `fullname`, `phone`, `address`, `cash`, `order_date`, `food_item`, `seller_name`, `total_quantity`, `unit_price`, `total_price`, `order_status`, `status`, `order_id`, `delivery_man`) VALUES
(1, 489929076, 'Prima', 'pri', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', 'cash', '2022-01-30 03:26:04', 'Phirni', 'Chitra Kitchen', 1, 140.00, 140.00, 'Delivered', 0, 1, 'blue'),
(5, 489929076, 'Prima', 'qw', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', 'cash', '2022-01-30 06:03:21', 'Lemon Poppyseed Cake', 'Chitra Kitchen', 1, 180.00, 180.00, 'Delivered', 0, 11, 'blue'),
(6, 489929076, 'Prima', 'qw', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', 'cash', '2022-01-30 06:03:20', 'Apple Cinnamon Cake', 'Chitra Kitchen', 1, 200.00, 200.00, 'Delivered', 0, 10, 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_order`
--

CREATE TABLE `cancel_order` (
  `id` int(15) NOT NULL,
  `buyer_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `status` int(2) NOT NULL,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancel_order`
--

INSERT INTO `cancel_order` (`id`, `buyer_name`, `fullname`, `phone`, `address`, `cash`, `order_date`, `food_item`, `seller_name`, `total_quantity`, `unit_price`, `total_price`, `status`, `order_status`, `order_id`) VALUES
(2, 'Prima', 'qwerty', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', 'cash', '2022-01-30 05:39:38', 'Pabda Macher Jhaal', 'Chitra Kitchen', 2, 120.00, 240.00, 0, 'Cancelled', 8),
(3, 'Prima', 'yy', 1234567893, 'lalmatia, Mohammadpur, Dhaka-1207', 'cash', '2022-01-30 05:41:23', 'Homemade Gulabjamun', 'Chitra Kitchen', 1, 150.00, 150.00, 0, 'Cancelled', 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`) VALUES
(1, 1, 'Bakery'),
(2, 2, 'Bangla Cuisine'),
(3, 3, 'Chinese Cuisine'),
(4, 4, 'FastFood'),
(5, 5, 'Indian Cuisine'),
(6, 6, 'Light Snacks'),
(7, 7, 'Mughlai Cuisine'),
(8, 8, 'Noodles & Pasta'),
(9, 9, 'Salad'),
(10, 10, 'Soup'),
(11, 11, 'Starter'),
(12, 12, 'Sweetdish');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `chat_id` int(255) NOT NULL,
  `food_id` int(255) NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `buyer_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(8) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` varchar(140) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `username`, `phone`, `address`, `password`, `image`) VALUES
(2, 'blue', 333, 'dhaka', 'bfbe04c28f819d2fa626d886a2bb1597', './images/user_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `category_id`, `category_name`, `food_name`, `image`, `price`, `seller_name`) VALUES
(1, 12, 'Sweetdish', 'Balusha', './images/Badusha.jpg', 100.00, 'Chitra Kitchen'),
(2, 12, 'Sweetdish', 'Homemade Gulabjamun', './images/Homemade Golapjamon.jpg', 150.00, 'Chitra Kitchen'),
(3, 12, 'Sweetdish', 'Modak', './images/Modak.jpg', 120.00, 'Chitra Kitchen'),
(4, 12, 'Sweetdish', 'Phirni', './images/Phirni.webp', 140.00, 'Chitra Kitchen'),
(5, 12, 'Sweetdish', 'Shondesh', './images/Sandesh.JPG', 130.00, 'Chitra Kitchen'),
(6, 1, 'Bakery', 'Apple Cinnamon Cake', './images/Apple Chinnamon.jpg', 200.00, 'Chitra Kitchen'),
(7, 1, 'Bakery', 'Chocolate Hazelnut Cake', './images/Chocolate-hazelnut-cake.webp', 220.00, 'Chitra Kitchen'),
(8, 1, 'Bakery', 'Lemon Poppyseed Cake', './images/Lemon Popy Seed Cake.jpg', 180.00, 'Chitra Kitchen'),
(9, 2, 'Bangla Cuisine', 'Bangla Vog', './images/Bangla Vog.jpg', 350.00, 'Chitra Kitchen'),
(10, 2, 'Bangla Cuisine', 'Black Mutton Curry', './images/Black Mutton Curry.webp', 180.00, 'Chitra Kitchen'),
(11, 2, 'Bangla Cuisine', 'Goan Fish Curry', './images/Goan Fish Curry.jpg', 120.00, 'Chitra Kitchen'),
(12, 2, 'Bangla Cuisine', 'Labra Tarkari', './images/Labra Tarkari.jpg', 70.00, 'Chitra Kitchen'),
(13, 2, 'Bangla Cuisine', 'Pabda Macher Jhaal', './images/Pabda MacherJhaal.jpg', 120.00, 'Chitra Kitchen'),
(14, 12, 'Sweetdish', 'Gajar Halwa', './images/G ajar Ka Halwa.png', 100.00, 'Maisha Kitchen'),
(15, 12, 'Sweetdish', 'Ghevar', './images/Ghevar.webp', 90.00, 'Linia Kitchen'),
(16, 12, 'Sweetdish', 'Gujiya', './images/Gujiya.webp', 80.00, 'Sakib Kitchen'),
(17, 12, 'Sweetdish', 'Kheer Shondesh', './images/Khir Sandesh.JPG', 120.00, 'Maisha Kitchen'),
(18, 12, 'Sweetdish', 'Mohan Thaal', './images/Mohan thaal.jpg', 100.00, 'Maisha Kitchen'),
(19, 12, 'Sweetdish', 'Mishti Doi', './images/Mishti Doi.jpg', 200.00, 'Sakib Kitchen'),
(20, 12, 'Sweetdish', 'Pera Shondesh', './images/Mathura ke pede.webp', 150.00, 'Linia Kitchen'),
(21, 12, 'Sweetdish', 'Paprikan Roshogolla', './images/Paprikan roshogolla.jpg', 180.00, 'Sakib Kitchen'),
(22, 12, 'Sweetdish', 'Payesh', './images/Payesh.JPG', 140.00, 'Linia Kitchen'),
(23, 12, 'Sweetdish', 'Roshomalai', './images/Ras Malai.jpg', 210.00, 'Maisha Kitchen'),
(24, 12, 'Sweetdish', 'Rabri', './images/Rabri.webp', 170.00, 'Linia Kitchen'),
(25, 12, 'Sweetdish', 'Taler Bora', './images/Taler-Bora.jpg', 150.00, 'Sakib Kitchen'),
(26, 12, 'Sweetdish', 'Shrikhand', './images/Shrikhand.webp', 180.00, 'Maisha Kitchen'),
(27, 1, 'Bakery', 'Caramel and Vanilla Cheesecake', './images/Caramel and VanillaBean Chai Cheesecake.jpg', 600.00, 'Sakib Kitchen'),
(28, 1, 'Bakery', 'Homemade Brown Sugar Pop Tart', './images/Homemade Brown shuger pop tart.jpg', 350.00, 'Sakib Kitchen'),
(29, 1, 'Bakery', 'Blackberries Ricotta Toast', './images/Blackbarries Ricotta toast.jpg', 250.00, 'Maisha Kitchen'),
(30, 1, 'Bakery', 'Cupcakes (6pcs)', './images/Cupcake.jpg', 350.00, 'Maisha Kitchen'),
(31, 1, 'Bakery', 'Browned Butter Whole Orange Cake', './images/Browned Butter Whole Orange Cake.jpg', 500.00, 'Linia Kitchen'),
(32, 1, 'Bakery', 'Earl Grey and Blueberry Layer Cake', './images/Earl Grey and Blueberry Layer Cake.jpg', 650.00, 'Linia Kitchen'),
(33, 1, 'Bakery', 'Lemon Rhubrab Olive Bundt Cake', './images/Lemon Rhubrab Olive Bundt Cake.jpg', 500.00, 'Maisha Kitchen'),
(34, 1, 'Bakery', 'Vanilla Cupcakes (6pcs)', './images/perfect-vanilla-cupcakes-square.webp', 300.00, 'Linia Kitchen'),
(35, 1, 'Bakery', 'Rhubarb Lemon Bars', './images/Rhubrab lemon Bars.jpg', 300.00, 'Sakib Kitchen'),
(36, 7, 'Mughlai Cuisine', 'Biriyani', './images/Kolkata biryani..webp', 250.00, 'Maisha Kitchen'),
(37, 7, 'Mughlai Cuisine', 'Murg Mussalam', './images/Murg Mussalaam.jpg', 220.00, 'Maisha Kitchen'),
(38, 7, 'Mughlai Cuisine', 'Nargisi Kofta', './images/Nargisi Kofta.jpg', 150.00, 'Maisha Kitchen'),
(39, 7, 'Mughlai Cuisine', 'Keema Matar', './images/Keema Matar.jpg', 150.00, 'Linia Kitchen'),
(40, 7, 'Mughlai Cuisine', 'Murg Pasanda', './images/Murg Pasanda.jpg', 180.00, 'Linia Kitchen'),
(41, 7, 'Mughlai Cuisine', 'Reshmi Kabab', './images/Reshmi Kebab.gif', 190.00, 'Linia Kitchen'),
(42, 7, 'Mughlai Cuisine', 'Mughlai Paratha', './images/Mughlai Paratha.jpg', 160.00, 'Sakib Kitchen'),
(43, 7, 'Mughlai Cuisine', 'Mutton Rezala', './images/Mutton Rezala.webp', 220.00, 'Sakib Kitchen'),
(44, 7, 'Mughlai Cuisine', 'Mutton Kabab', './images/Tunde ke kabab..jpg', 180.00, 'Sakib Kitchen'),
(45, 2, 'Bangla Cuisine', 'Rui Macher Curry', './images/Bangla_fish-curry.jpg', 100.00, 'Maisha Kitchen'),
(46, 2, 'Bangla Cuisine', 'Chettinad Fish Stew', './images/Chettinad Fish stew.jpg', 110.00, 'Maisha Kitchen'),
(47, 2, 'Bangla Cuisine', 'Beef Curry', './images/Beef Curry .jpg', 190.00, 'Linia Kitchen'),
(48, 2, 'Bangla Cuisine', 'Chicken Masala', './images/Chicken Masala.jpg', 150.00, 'Linia Kitchen'),
(49, 2, 'Bangla Cuisine', 'Bhetki Macher Kaliya', './images/Bhetki Macher Kaliya.jpg', 130.00, 'Sakib Kitchen'),
(50, 2, 'Bangla Cuisine', 'Fish Curry', './images/Fish Curry.jpg', 100.00, 'Sakib Kitchen'),
(51, 2, 'Bangla Cuisine', 'Green Fish Curry', './images/Green Fish Curry.jpg', 120.00, 'Maisha Kitchen'),
(52, 2, 'Bangla Cuisine', 'Luchi Alur Dom', './images/Luchi Alurdom.jpg', 100.00, 'Maisha Kitchen'),
(53, 7, 'Mughlai Cuisine', 'Hydarabadi Biriyani', './images/Hydrabadi Biriyani.jpg', 300.00, 'Linia Kitchen'),
(54, 2, 'Bangla Cuisine', 'Mixed Labra', './images/Mixed Labra.jpg', 80.00, 'Linia Kitchen'),
(55, 2, 'Bangla Cuisine', 'Mejbani Beef Curry', './images/Indian-Beef-Curry.jpg', 200.00, 'Sakib Kitchen'),
(56, 2, 'Bangla Cuisine', 'Niramish Shobji', './images/Niramish Shobji.jpg', 70.00, 'Sakib Kitchen'),
(57, 7, 'Mughlai Cuisine', 'Kachri Keema', './images/Kachri Keema.jpg', 140.00, 'Chitra Kitchen'),
(58, 7, 'Mughlai Cuisine', 'Murg Kali Mirch', './images/Murg Kali Mirch.jpg', 160.00, 'Chitra Kitchen'),
(59, 7, 'Mughlai Cuisine', 'Chicken Chap', './images/Mutton Chicken Chap..jpg', 150.00, 'Chitra Kitchen'),
(61, 10, 'Soup', 'tomato soup', './images/soup1.jpg', 100.00, 'ty kitchen'),
(62, 4, 'FastFood', 'burger', './images/burger2.jpg', 100.00, 'qq kitchen'),
(63, 10, 'Soup', 'thai', './images/soup2.jpg', 120.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1133306449, 1000581460, 'hi'),
(2, 1133306449, 1295110267, 'hello'),
(3, 839923796, 558006890, 'hey'),
(4, 558006890, 839923796, 'hi'),
(5, 558006890, 839923796, 'hi'),
(6, 1133306449, 489929076, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `cr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `message`, `status`, `cr_date`) VALUES
(7, 'qw', 'qwerty', 1, '2022-01-28 05:22:25'),
(8, 'cvb', 'zxc', 1, '2022-01-28 05:25:19'),
(9, 'zzxc', 'qwer', 1, '2022-01-28 05:42:23'),
(10, 'zxcc', 'bnmj', 1, '2022-01-28 05:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `bid`) VALUES
(4, 'New Order', 'You have a new order please check', 1, 6),
(5, 'New Order', 'You have a new order please check', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `sellerid`, `buyerid`) VALUES
(8, 1, 1),
(7, 1, 1),
(6, 1, 2),
(9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE `order2` (
  `id` int(15) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `buyer_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `order_date` datetime NOT NULL,
  `food_item` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `order_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `delivery_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `unique_id`, `username`, `seller_name`, `phone`, `email`, `address`, `image`, `password`, `status`) VALUES
(1, 1133306449, 'Chitra', 'Chitra Kitchen', 1234567890, 'chitra.banik.cse@ulab.edu.bd', 'dhanmondi, Mohammadpur, Dhaka-1207', './images/10.jfif', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(2, 290415929, 'Maisha', 'Maisha Kitchen', 1234567891, 'maisha.mostofa.cse@ulab.edu.bd', 'lalmatia, Dhaka-1207', './images/5.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(3, 777545411, 'Linia', 'Linia Kitchen', 1234567892, 'linia.jannat.cse@ulab.edu.bd', 'lalmatia, Dhaka-1207', './images/8.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(4, 929644689, 'Sakib', 'Sakib Kitchen', 1234567893, 'towhid.hassan.cse@ulab.edu.bd', 'dhanmondi, Mohammadpur, Dhaka-1207', './images/7.jfif', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(8, 1298848681, 'mm', 'mm kitchen', 123, 'mm@email.com', 'dhanmondi, Mohammadpur, Dhaka-1207', './images/user_profile.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(9, 312056806, 'm', 'm kitchen', 1234, 'maisha@email.com', 'dhanmondi, Mohammadpur, Dhaka-1207', './images/user_profile.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(13, 1632265800, 't', 't kitchen', 67, 't@email.com', 'lalmatia, Mohammadpur, Dhaka-1207', './images/49.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(14, 1036160917, 'r', 'r ki', 55, 'ritu@email.com', 'rt', './images/48.png', '37c229f9c3e1f15b284338a311ab338b', 'Offline now'),
(15, 1508066820, 'j', 'j k', 77, 'j@j', 'jjj', './images/52.png', '7dfefea92a20fc099596fcef67abbcd3', 'Offline now'),
(16, 1038698447, 'ty', 'ty kitchen', 34567, 'ty@email.com', 'lalmatia, Mohammadpur, Dhaka-1207', './images/bakery7.webp', 'bfbe04c28f819d2fa626d886a2bb1597', 'Offline now'),
(17, 839923796, 'qq', 'qq kitchen', 789, 'qq@email.com', 'lalmatia, Dhaka-1207', './images/femaleteam1.png', 'bfbe04c28f819d2fa626d886a2bb1597', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `seller_data`
--

CREATE TABLE `seller_data` (
  `id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `seller_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `food_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_data`
--

INSERT INTO `seller_data` (`id`, `unique_id`, `username`, `seller_name`, `food_name`, `image`, `price`) VALUES
(1, 1133306449, 'Chitra', 'Chitra Kitchen', 'Balusha', './images/Badusha.jpg', 100.00),
(2, 1133306449, 'Chitra', 'Chitra Kitchen', 'Homemade Gulab Jamun', './images/Homemade Golapjamon.jpg', 150.00),
(3, 1133306449, 'Chitra', 'Chitra Kitchen', 'Modak', './images/Modak.jpg', 120.00),
(4, 1133306449, 'Chitra', 'Chitra Kitchen', 'Phirni', './images/Phirni.webp', 140.00),
(5, 1133306449, 'Chitra', 'Chitra Kitchen', 'Shondesh', './images/Sandesh.JPG', 130.00),
(6, 1133306449, 'Chitra', 'Chitra Kitchen', 'Apple Cinnamon Cake', './images/Apple Chinnamon.jpg', 200.00),
(7, 1133306449, 'Chitra', 'Chitra Kitchen', 'Chocolate Hazelnut Cake', './images/Chocolate-hazelnut-cake.webp', 220.00),
(8, 1133306449, 'Chitra', 'Chitra Kitchen', 'Lemon Poppyseed Cake', './images/Lemon Popy Seed Cake.jpg', 180.00),
(9, 1133306449, 'Chitra', 'Chitra Kitchen', 'Bangla Vog', './images/Bangla Vog.jpg', 350.00),
(10, 1133306449, 'Chitra', 'Chitra Kitchen', 'Black Mutton Curry', './images/Black Mutton Curry.webp', 180.00),
(11, 1133306449, 'Chitra', 'Chitra Kitchen', 'Goan Fish Curry', './images/Goan Fish Curry.jpg', 120.00),
(12, 1133306449, 'Chitra', 'Chitra Kitchen', 'Labra Tarkari', './images/Labra Tarkari.jpg', 70.00),
(13, 1133306449, 'Chitra', 'Chitra Kitchen', 'Pabda Macher Jhaal', './images/Pabda MacherJhaal.jpg', 120.00),
(14, 290415929, 'Maisha', 'Maisha Kitchen', 'Gajar Halwa', './images/G ajar Ka Halwa.png', 100.00),
(15, 777545411, 'Linia', 'Linia Kitchen', 'Ghevar', './images/Ghevar.webp', 90.00),
(16, 929644689, 'Sakib', 'Sakib Kitchen', 'Gujiya', './images/Gujiya.webp', 80.00),
(17, 290415929, 'Maisha', 'Maisha Kitchen', 'Kheer Shondesh', './images/Khir Sandesh.JPG', 120.00),
(18, 290415929, 'Maisha', 'Maisha Kitchen', 'Mohan Thaal', './images/Mohan thaal.jpg', 100.00),
(19, 929644689, 'Sakib', 'Sakib Kitchen', 'Mishti Doi', './images/Mishti Doi.jpg', 200.00),
(20, 777545411, 'Linia', 'Linia Kitchen', 'Pera Shondesh', './images/Mathura ke pede.webp', 150.00),
(21, 929644689, 'Sakib', 'Sakib Kitchen', 'Paprikan Roshogolla', './images/Paprikan roshogolla.jpg', 180.00),
(22, 777545411, 'Linia', 'Linia Kitchen', 'Payesh', './images/Payesh.JPG', 140.00),
(23, 290415929, 'Maisha', 'Maisha Kitchen', 'Roshomalai', './images/Ras Malai.jpg', 210.00),
(24, 777545411, 'Linia', 'Linia Kitchen', 'Rabri', './images/Rabri.webp', 170.00),
(25, 929644689, 'Sakib', 'Sakib Kitchen', 'Taler Bora', './images/Taler-Bora.jpg', 150.00),
(26, 290415929, 'Maisha', 'Maisha Kitchen', 'Shrikhand', './images/Shrikhand.webp', 180.00),
(27, 929644689, 'Sakib', 'Sakib Kitchen', 'Caramel and Vanilla Cheesecake', './images/Caramel and VanillaBean Chai Cheesecake.jpg', 600.00),
(28, 929644689, 'Sakib', 'Sakib Kitchen', 'Homemade Brown Sugar Pop Tart', './images/Homemade Brown shuger pop tart.jpg', 350.00),
(29, 290415929, 'Maisha', 'Maisha Kitchen', 'Blackberries Ricotta Toast', './images/Blackbarries Ricotta toast.jpg', 250.00),
(30, 290415929, 'Maisha', 'Maisha Kitchen', 'Cupcakes (6pcs)', './images/Cupcake.jpg', 350.00),
(31, 777545411, 'Linia', 'Linia Kitchen', 'Browned Butter Whole Orange Cake', './images/Browned Butter Whole Orange Cake.jpg', 500.00),
(32, 777545411, 'Linia', 'Linia Kitchen', 'Earl Grey and Blueberry Layer Cake', './images/Earl Grey and Blueberry Layer Cake.jpg', 650.00),
(33, 290415929, 'Maisha', 'Maisha Kitchen', 'Lemon Rhubrab Olive Bundt Cake', './images/Lemon Rhubrab Olive Bundt Cake.jpg', 500.00),
(34, 777545411, 'Linia', 'Linia Kitchen', 'Vanilla Cupcakes (6pcs)', './images/perfect-vanilla-cupcakes-square.webp', 300.00),
(35, 929644689, 'Sakib', 'Sakib Kitchen', 'Rhubarb Lemon Bars', './images/Rhubrab lemon Bars.jpg', 300.00),
(36, 290415929, 'Maisha', 'Maisha Kitchen', 'Biriyani', './images/Kolkata biryani..webp', 250.00),
(37, 290415929, 'Maisha', 'Maisha Kitchen', 'Murg Mussalam', './images/Murg Mussalaam.jpg', 220.00),
(38, 290415929, 'Maisha', 'Maisha Kitchen', 'Nargisi Kofta', './images/Nargisi Kofta.jpg', 150.00),
(39, 777545411, 'Linia', 'Linia Kitchen', 'Keema Matar', './images/Keema Matar.jpg', 150.00),
(40, 777545411, 'Linia', 'Linia Kitchen', 'Murg Pasanda', './images/Murg Pasanda.jpg', 180.00),
(41, 777545411, 'Linia', 'Linia Kitchen', 'Reshmi Kabab', './images/Reshmi Kebab.gif', 190.00),
(42, 929644689, 'Sakib', 'Sakib Kitchen', 'Mughlai Paratha', './images/Mughlai Paratha.jpg', 160.00),
(43, 929644689, 'Sakib', 'Sakib Kitchen', 'Mutton Rezala', './images/Mutton Rezala.webp', 220.00),
(44, 929644689, 'Sakib', 'Sakib Kitchen', 'Mutton Kabab', './images/Tunde ke kabab..jpg', 180.00),
(45, 290415929, 'Maisha', 'Maisha Kitchen', 'Rui Macher Curry', './images/Bangla_fish-curry.jpg', 100.00),
(46, 290415929, 'Maisha', 'Maisha Kitchen', 'Chettinad Fish Stew', './images/Chettinad Fish stew.jpg', 110.00),
(47, 777545411, 'Linia', 'Linia Kitchen', 'Beef Curry', './images/Beef Curry .jpg', 190.00),
(48, 777545411, 'Linia', 'Linia Kitchen', 'Chicken Masala', './images/Chicken Masala.jpg', 150.00),
(49, 929644689, 'Sakib', 'Sakib Kitchen', 'Bhetki Macher Kaliya', './images/Bhetki Macher Kaliya.jpg', 130.00),
(50, 929644689, 'Sakib', 'Sakib Kitchen', 'Fish Curry', './images/Fish Curry.jpg', 100.00),
(51, 290415929, 'Maisha', 'Maisha Kitchen', 'Green Fish Curry', './images/Green Fish Curry.jpg', 120.00),
(52, 290415929, 'Maisha', 'Maisha Kitchen', 'Luchi Alur Dom', './images/Luchi Alurdom.jpg', 100.00),
(53, 777545411, 'Linia', 'Linia Kitchen', 'Hydarabadi Biriyani', './images/Hydrabadi Biriyani.jpg', 300.00),
(54, 777545411, 'Linia', 'Linia Kitchen', 'Mixed Labra', './images/Mixed Labra.jpg', 80.00),
(55, 929644689, 'Sakib', 'Sakib Kitchen', 'Mejbani Beef Curry', './images/Indian-Beef-Curry.jpg', 200.00),
(56, 929644689, 'Sakib', 'Sakib Kitchen', 'Niramish Shobji', './images/Niramish Shobji.jpg', 70.00),
(57, 1133306449, 'Chitra', 'Chitra Kitchen', 'Kachri Keema', './images/Kachri Keema.jpg', 140.00),
(58, 1133306449, 'Chitra', 'Chitra Kitchen', 'Murg Kali Mirch', './images/Murg Kali Mirch.jpg', 160.00),
(59, 1133306449, 'Chitra', 'Chitra Kitchen', 'Chicken Chap', './images/Mutton Chicken Chap..jpg', 150.00),
(61, 1038698447, 'ty', 'ty kitchen', 'tomato soup', './images/soup1.jpg', 100.00),
(62, 839923796, 'qq', 'qq kitchen', 'burger', './images/burger2.jpg', 100.00),
(63, 1133306449, 'Chitra', '', 'thai', './images/soup2.jpg', 120.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_data`
--
ALTER TABLE `buyer_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`);

--
-- Indexes for table `cancel_order`
--
ALTER TABLE `cancel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `food_id` (`food_id`,`food_name`,`buyer_id`,`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`,`category_name`,`seller_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order2`
--
ALTER TABLE `order2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`,`seller_name`);

--
-- Indexes for table `seller_data`
--
ALTER TABLE `seller_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique_id` (`unique_id`,`username`,`seller_name`),
  ADD KEY `food_name` (`food_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buyer_data`
--
ALTER TABLE `buyer_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cancel_order`
--
ALTER TABLE `cancel_order`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `chat_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order2`
--
ALTER TABLE `order2`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seller_data`
--
ALTER TABLE `seller_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
