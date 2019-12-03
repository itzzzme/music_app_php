-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 06:22 AM
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
-- Database: `music`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_fav` (IN `song_id` INT(11), IN `user_id` INT(11))  NO SQL
DELETE from fav where song_id=song_id and user_id=user_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Album`
--

CREATE TABLE `Album` (
  `user_id` int(11) DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `album_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_user`
--

CREATE TABLE `deleted_user` (
  `del_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `fav_id` int(11) NOT NULL,
  `song_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`fav_id`, `song_id`, `user_id`) VALUES
(11, 9, 15);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `email`, `password`) VALUES
(2, '  abc', 'abc@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(3, '  qwerty', 'qwerty@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, '  k', 'k@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab'),
(5, '  swasthik', 's@gamil.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, '  swasthik', 'swa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, '  qwer', 'qwer@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, '  vi', 'vi@gmail.com', '43936b6d0473a5e241c1d39fab09bb5b9b6867ce'),
(10, 's', 's@gmail.com', 'lk'),
(13, '  v', 'v@gmail.com', '7a38d8cbd20d9932ba948efaa364bb62651d5ad4'),
(14, '  kavya1', 'kavya@gmail.com', '47de38fbdece0d484472919c37c107cfadb2ad00'),
(15, '  vish', 'vishal@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab');

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `regcopy` AFTER INSERT ON `register` FOR EACH ROW BEGIN
INSERT INTO register_copy VALUES(NEW.user_id,NEW.username,NEW.email,NEW.password,NOW(),NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `register_copy`
--

CREATE TABLE `register_copy` (
  `user_id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_copy`
--

INSERT INTO `register_copy` (`user_id`, `username`, `email`, `password`, `time`, `date`) VALUES
(1, '  vishal', 'vishal@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '00:00:00', '0000-00-00'),
(2, '  abc', 'abc@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '00:00:00', '0000-00-00'),
(3, '  qwerty', 'qwerty@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '00:00:00', '0000-00-00'),
(4, '  k', 'k@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '00:00:00', '0000-00-00'),
(5, '  swasthik', 's@gamil.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '00:00:00', '0000-00-00'),
(6, '  swasthik', 'swa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '00:00:00', '0000-00-00'),
(7, '  qwer', 'qwer@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '00:00:00', '0000-00-00'),
(8, '  vi', 'vi@gmail.com', '43936b6d0473a5e241c1d39fab09bb5b9b6867ce', '00:00:00', '0000-00-00'),
(9, '  vk', 'vb@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '00:00:00', '0000-00-00'),
(10, 's', 's@gmail.com', 'lk', '23:20:29', '2019-11-19'),
(11, '  g', 'g@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '21:12:01', '2019-11-21'),
(12, '  v', 'v@gmail.com', '7a38d8cbd20d9932ba948efaa364bb62651d5ad4', '22:45:51', '2019-11-28'),
(13, '  v', 'v@gmail.com', '7a38d8cbd20d9932ba948efaa364bb62651d5ad4', '23:36:38', '2019-11-28'),
(14, '  kavya1', 'kavya@gmail.com', '47de38fbdece0d484472919c37c107cfadb2ad00', '21:06:01', '2019-11-29'),
(15, '  vish', 'vishal@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '20:41:47', '2019-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `song_nmae` varchar(200) DEFAULT NULL,
  `song_type` varchar(200) DEFAULT NULL,
  `song_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `user_id`, `song_nmae`, `song_type`, `song_size`) VALUES
(1, 8, 'Akon_Lonely_Offiical_Video_.mp3', 'audio/mpeg', 6356670),
(8, 14, 'DSC_0660.JPG.jpeg', 'image/jpeg', 7563186),
(9, 15, 'Lauv_I_Like_Me_Better_Official_Audio_.mp3', 'audio/mp3', 4699671),
(10, 15, 'Enemies.mp3', 'audio/mp3', 7172982),
(11, 15, 'Akon_Lonely_Offiical_Video_.mp3', 'audio/mp3', 6356670);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `deleted_user`
--
ALTER TABLE `deleted_user`
  ADD PRIMARY KEY (`del_id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `register_copy`
--
ALTER TABLE `register_copy`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deleted_user`
--
ALTER TABLE `deleted_user`
  MODIFY `del_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register_copy`
--
ALTER TABLE `register_copy`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `Album_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
