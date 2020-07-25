-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 02:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_bruno_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_bruno_petadoption` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr11_bruno_petadoption`;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `type` enum('small','large','senior') NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `img`, `address`, `zip_code`, `city`, `age`, `type`, `name`, `description`, `hobbies`) VALUES
(1, 'img/sjalpaca.jpg', 'Kettenbrückengasse 1', 1010, 'Vienna', 1, 'large', 'Alpaca', 'A nice animal that will brings you good wool during the winter', 'moutaineering, skiiing'),
(2, 'img/sjparrot.jpg', 'Kettenbrückengasse 2', 1020, 'Vienna', 2, 'large', 'Parrot', ' A really practical animal to repeat the things your husband is not listening to. ', 'singing, repeating'),
(3, 'img/sjflamingo.jpg', 'Kettenbrückengasse 3', 1030, 'Vienna', 3, 'large', 'Flamingo', 'One of the most beautiful animal that will ask you care and patience', 'eating, swimming'),
(4, 'img/sjseagull.jpg', 'Kettenbrückengasse 4', 1040, 'Vienna', 4, 'large', 'Seagull', 'A rare type of pet that will impress you by her ability to fly', 'flying, swimming, fishing'),
(5, 'img/ljbird.jpg', 'Kettenbrückengasse 5', 1050, 'Vienna', 4, 'small', 'Bird', 'A classical bird that will bring joy in your household', 'flying, biking'),
(6, 'img/ljcat.jpg', 'Kettenbrückengasse 6', 1060, 'Vienna', 5, 'small', 'Cat', 'You will never regret adopting this nice cat where you will a lot play with him', 'climbing, dancing'),
(7, 'img/ljdog.jpg', 'Kettenbrückengasse 7', 1070, 'Vienna', 6, 'small', 'Dog', 'Running will be a big pleasure with him', 'running, singing'),
(8, 'img/ljrabbit.jpg', 'Kettenbrückengasse 8', 1080, 'Vienna', 7, 'small', 'Rabbit', 'Watching a rabbit and stroking him will relax you after a hard day of coding', 'running, eating'),
(9, 'img/sslama.jpg', 'Kettenbrückengasse 9', 1090, 'Vienna', 9, 'senior', 'Lama', 'Going in the mountain will be the best experience ever', 'moutaineering, eating'),
(10, 'img/sspeafowl.jpg', 'Kettenbrückengasse 10', 1100, 'Vienna', 10, 'senior', 'Peafowl', 'Watching this beautiful animal will brings you a sense of joy', 'polldancing'),
(11, 'img/lschicken.jpg', 'Kettenbrückengasse 11', 1110, 'Vienna', 11, 'senior', 'Chicken', 'Having chicken walking into your yard will change your life', 'walking, eating'),
(12, 'img/lsdog.jpg', 'Kettenbrückengasse 12', 1120, 'Vienna', 12, 'senior', 'Dog', 'This dog is for fast runner looking for some challenges', 'running, boxing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `UserLastname` varchar(255) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('admin','user','superadmin') NOT NULL DEFAULT 'user',
  `fk_petid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `UserLastname`, `userEmail`, `userPass`, `status`, `fk_petid`) VALUES
(4, 'User', 'User', 'user@user.at', 'e606e38b0d8c19b24cf0ee3808183162ea7cd63ff7912dbb22b5e803286b4446', 'user', 3),
(5, 'Bruno', 'Mairey', 'c@c.at', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user', 4),
(6, 'Admin', 'Admin', 'admin@admin.at', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'admin', 5),
(7, 'Julien', 'Mairey', 'j@j.at', '179b714063a70212c139c07b2817c723d6a5af43fe087d88f7514fc6e6981835', 'user', 6),
(8, 'superadmin', 'superadmin', 'superadmin@admin.at', 'e34f92a20532a873cb3184398070b4b82a8fa29cf48572c203dc5f0fa6158231', 'superadmin', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD KEY `fk_petid` (`fk_petid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_petid`) REFERENCES `pets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
