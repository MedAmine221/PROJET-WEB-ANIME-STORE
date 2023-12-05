-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 11:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aminestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `nb` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `price`, `nb`) VALUES
('one piece sticker 4', 3, 1),
('naruto Keychain naruto pack 1', 20, 1),
('one piece sticker 1', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`email`, `password`) VALUES
('example@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(256) NOT NULL DEFAULT 'Aren''t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you''ll have a phisical reminder to look back on. if you know, you know.',
  `image_path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `type`, `price`, `description`, `image_path`) VALUES
('one piece t-shirt luffy 1', 't-shirt', 40, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/T-shirts/One_Piece_t_shirt_0.jpg'),
('naruto Keychain naruto pack 1', 'keychain', 20, 'Aren\'t some of the best memories the ones made out\r\n                    of impulsivity? Not only will get to rock this simple,\r\n                    comfortable but you\'ll have a phisical reminder to look back on.\r\n                    if you know, you know.', 'img/products/Keychains/naruto_0.jpg'),
('one piece sticker 4', 'sticker', 3, 'Aren\'t some of the best memories the ones made out\r\n                    of impulsivity? Not only will get to rock this simple,\r\n                    comfortable but you\'ll have a phisical reminder to look back on.\r\n                    if you know, you know.', 'img/products/Stickers/one_piece_3.jpg'),
('one piece sticker 1', 'sticker', 2, 'Aren\'t some of the best memories the ones made out\r\n                    of impulsivity? Not only will get to rock this simple,\r\n                    comfortable but you\'ll have a phisical reminder to look back on.\r\n                    if you know, you know.', 'img/products/Stickers/one_piece_0.jpg'),
('one piece t-shirt brothers', 't-shirt', 60, 'img/products/T-shirts/One_Piece_t_shirt_1.jpg', 'img/products/T-shirts/One_Piece_t_shirt_1.jpg'),
('anime t-shirt 2', 't-shirt', 60, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/T-shirts/anime_1.jpg'),
('anime t-shirt 2', 't-shirt', 60, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/T-shirts/anime_1.jpg'),
('anime t-shirt 1', 't-shirt', 60, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/T-shirts/anime_0.jpg'),
('naruto poster uchiha sasuke', 'poster', 25, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Posters/naruto_0.jpg'),
('one piece poster lan of wano a', 'poster', 28, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Posters/one_piece_0.jpg'),
('one piece poster lan of wano a', 'poster', 28, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Posters/one_piece_0.jpg'),
('jujutsu kaisen poster jujutsu ', 'poster', 30, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Posters/jujutsu_kaisen_0.jpg'),
('one piece sticker 2', 'sticker', 4, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Stickers/one_piece_1.jpg'),
('one piece sticker 3', 'sticker', 3, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Stickers/one_piece_2.jpg'),
('naruto hoodie 1', 'hoodie', 50, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Hoodies/naruto_0.png'),
('jujutsu kaisen hoodie 1', 'hoodie', 50, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Hoodies/jujutsu_kaisen.jfif'),
('one piece hoodie 1', 'hoodie', 50, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Hoodies/one_piece_.0.jpg'),
('naruto figurine naruto shippud', 'figurine', 90, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Figurines/naruto_0.jpg'),
('one piece figurine shanks', 'figurine', 150, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Figurines/one_piece_2.jpg'),
('jujutsu kaisen figurine gojo s', 'figurine', 60, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Figurines/jujutsu_kaisen_0.jpg'),
('demon slayer figurine 1', 'figurine', 50, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Figurines/demon_slayer_0.jpg'),
('naruto Keychain naruto pack 2', 'keychain', 30, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Keychains/naruto_6.jpg'),
('one piece Keychain one piece p', 'keychain', 15, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Keychains/One_Piece_7.jpg'),
('one piece Keychain one piece d', 'keychain', 10, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Keychains/One_Piece_2.jpeg'),
('naruto mug akatsuki clouds', 'mug', 16, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Mugs/akatsuki-clouds.webp'),
('jujutsu kaisen mug gojo satoru', 'mug', 26, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Mugs/jujutsu-kaisen.webp'),
('one piece mug luffy 1', 'mug', 10, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Mugs/one_piece_1.webp'),
('yu-gi-oh mug yu-gi-oh 1', 'mug', 19, 'Aren\'t some of the best memories the ones made out of impulsivity? Not only will get to rock this simple, comfortable, and low profile short sleeve t-shirt but you\'ll have a phisical reminder to look back on. if you know, you know.', 'img/products/Mugs/yu-gi-oh.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
