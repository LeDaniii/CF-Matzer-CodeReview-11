-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 03:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_matzer_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_matzer_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_matzer_petadoption`;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `pet_img` varchar(150) DEFAULT NULL,
  `pet_size` enum('Large','Medium','Small') DEFAULT NULL,
  `pet_name` varchar(30) DEFAULT NULL,
  `pet_animal` varchar(200) DEFAULT NULL,
  `pet_species` enum('Fish','Dog','Cat','Rodent','Horse','Bird','Reptile') DEFAULT NULL,
  `pet_age` int(11) DEFAULT NULL,
  `pet_description` varchar(500) DEFAULT NULL,
  `pet_location` varchar(200) DEFAULT NULL,
  `pet_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_img`, `pet_size`, `pet_name`, `pet_animal`, `pet_species`, `pet_age`, `pet_description`, `pet_location`, `pet_price`) VALUES
(5, 'https://i.insider.com/5ef39abd3f737017f94f3255?width=750&format=jpeg&auto=webp', 'Large', 'Lara', 'Golden Retriever', 'Dog', 8, 'Second best Dog in the world', 'Graz', 20),
(6, 'https://www.haustierratgeber.de/wp-content/uploads/2020/01/Flatcoated-Retriever.jpg', 'Large', 'Niko', 'Retriever Labrador', 'Dog', 4, 'Best Dog in the World', 'Feldbach', 999),
(7, 'https://pbs.twimg.com/profile_images/760440884571799552/oD2zpmEG.jpg', 'Medium', 'Luna', 'Labrador', 'Dog', 1, '6 super cute puppies available!', 'Graz', 50),
(8, 'https://i.pinimg.com/originals/d6/e2/28/d6e2289d8cd55dbfc133dbcecf0a4055.jpg', 'Small', 'Frank', 'Pug', 'Dog', 1, 'Supercute Pug breed ', 'Feldbach', 15),
(9, 'https://lh3.googleusercontent.com/aUdPoN7VJ01X-H9dVuhy4V9TR5S0Om7ql1q1kRtPl1kF-sMSQHhfTb-vaNG3AQWUVAqe61ndow=w640-h400-e365-rj-sc0x00ffffff', 'Large', 'Hulk', 'Tibetan Mastiff', 'Dog', 9, 'Wanna ride to war but you need something better than a horse?', 'Feldbach', 10),
(10, 'https://wattention.com/wp-content/uploads/2019/07/AKITA_SG4960.jpg', 'Medium', 'Umiko', 'Japanese Akita', 'Dog', 4, 'She likes everyone but not me :(', 'Graz', 60),
(11, 'https://cf.ltkcdn.net/cats/images/orig/242157-1902x1268-persian-kittens.jpg', 'Small', 'Several Kittens', 'Persian', 'Cat', 1, 'five kittens are way too much for my home', 'Graz', 80),
(12, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Britishblue.jpg/220px-Britishblue.jpg', 'Medium', 'Luna', 'British Shorthair', 'Cat', 9, 'She only drinks tea with milk!', 'Feldbach', 10),
(13, 'https://styla-prod-us.imgix.net/2fd66e77-334a-4d68-b9cb-74bdec103e1f/22707df4-a7fd-4e6d-b739-83e524d86774?auto=format%2Ccompress&w=1280&h=700&fit=orig', 'Medium', 'Lisa', 'Maine Coon', 'Cat', 9, 'She\'s a big boy', 'Feldbach', 25),
(14, 'https://geniusvets.s3.amazonaws.com/gv-cat-breeds/Birman-3.jpg', 'Medium', 'Elon', 'Birman', 'Cat', 4, 'The cleanest cat in this freaking world!', 'Graz', 120),
(15, 'https://images.saymedia-content.com/.image/t_share/MTczOTEzMTcxMzQ4Njk0MDgw/freshwater-angelfish-care-guide-facts-faq.jpg', 'Small', '100 pcs', 'Angelfish', 'Fish', 1, 'New breed every 6 months!', 'Graz', 2),
(16, 'https://www.tfhmagazine.com/-/media/Images/TFH2-NA/US/articles/413_trouble_free_dwarf_cichlids.jpg', 'Small', '200 pcs', 'Cichlids', 'Fish', 1, '...', 'Graz', 5),
(17, 'https://alchetron.com/cdn/lipizzan-3a383478-f3e6-4df7-8e1e-c11e6e3b4ec-resize-750.jpeg', 'Large', 'Rachel', 'Lipizzan', 'Horse', 12, 'Very intelligent, she stole my purse and bought food with it... I am broke now...', 'Leibnitz', 1200),
(18, 'https://scx2.b-cdn.net/gfx/news/2019/donkey.jpg', 'Large', 'Waffle', 'Donkey', 'Horse', 16, 'Look at him! He makes you smile every day! ', 'Feldbach', 250),
(19, 'https://s3-eu-west-1.amazonaws.com/iya-news-prod.inyourarea.co.uk/2020/11/The-Donkey-Sanctuary---Sidmouth-ii--The-Donkey-Sanctuary-.jpg', 'Large', 'Jenny', 'Donkey', 'Horse', 22, 'She warks more than me in a day!', 'Feldbach', 120),
(20, 'https://i.pinimg.com/originals/0d/3f/50/0d3f507974868a3be56d25424a7bf0a9.jpg', 'Small', 'Baby Donkeys', 'Donkey', 'Horse', 1, 'You can get them in one year, reservation starts now', 'Feldbach', 600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userEmail` varchar(50) DEFAULT NULL,
  `userPassword` varchar(200) DEFAULT NULL,
  `userType` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassword`, `userType`) VALUES
(1, 'Denise', 'smth@smth.smth', 'asdfasdf', 'user'),
(2, 'test', 'test@test.at', '37268335dd6931045bdcdf92623ff819a64244b53d0e746d438797349d4da578', NULL),
(3, 'Daniel', 'daniel@matzer.at', 'a47160e8e64cfed5deaaaec5f91ae39141b90a2ba3fe6b789ea206898bb034ad', 'admin'),
(4, 'Matzer', 'matzer@daniel.at', 'a47160e8e64cfed5deaaaec5f91ae39141b90a2ba3fe6b789ea206898bb034ad', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
