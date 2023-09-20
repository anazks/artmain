-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 03:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `loginid` varchar(5) NOT NULL,
  `passwd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`loginid`, `passwd`) VALUES
('preet', 'preet123'),
('pruth', 'pruth123'),
('rach', 'rach123');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `AID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `phno` int(10) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `imgsrc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`AID`, `name`, `age`, `phno`, `gender`, `address`, `email`, `description`, `imgsrc`) VALUES
(204, 'Aleksandra', 25, 2147483647, 'Female', 'paris', 'alexandra@gmail.com', 'Aleksandra Savina Rozenvain was born in Kiev, Ukraine. Aleksandra would go on to obtain her fine art diploma in Kiev from the Fine Art School and Teachers College. From there, she worked in her field as a teacher and designer. She has traveled the world extensively with her husband, fellow artist Michael Rozenvain', 'https://images.unsplash.com/photo-1486413869840-a99ac0a4c031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGFydGlzdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(205, 'Camille', 25, 845309287, 'Female', 'paris', 'camille@gmail.com', 'Camille Pissaro was born July 10, 1830 on the beautiful island of Saint Thomas. As a young man Pissaro relocated to Paris when his parents sent him to boarding school. In the vibrant city, Pissaro began his appreciation and practice of art. Although he would return to Saint Thomas after his education was completed, his affinity for art continued and he utilized all of his spare time to continue drawing and painting.', 'https://images.unsplash.com/photo-1611244419377-b0a760c19719?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YXJ0aXN0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(206, 'David', 56, 745309287, 'Male', 'London', 'david@gmail.com', 'David V. Gonzales was born on February 3, 1971, on a U.S. Air Force Base in Wiesbaden, Germany. He grew up in Santa Fe, N.M. enjoying the benefits of belonging to a large and closely-knit extended family. His family has been well rooted in the area for 5 generations, which include many well-known artists,', 'https://images.unsplash.com/photo-1529066792305-5e4efa40fde9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0aXN0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(207, 'Rahid', 29, 845309287, 'Male', 'India', 'rahid@gmail.com', 'Camille Pissaro was born July 10, 1830 on the beautiful island of Saint Thomas. As a young man Pissaro relocated to Paris when his parents sent him to boarding school. In the vibrant city, Pissaro began his appreciation and practice of art. Although he would return to Saint Thomas after his education was completed, his affinity for art continued and he utilized all of his spare time to continue drawing and painting.', 'https://images.unsplash.com/photo-1568438397894-72318e6f8674?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGFydGlzdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
(209, 'El greco', 79, 1234567890, 'Male', 'paris', 'elgrec@gmail.com', 'Doménikos Theotokópoulos, most widely known as El Greco, was a Greek painter, sculptor and architect of the Spanish Renaissance.', 'http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcTGMYm1t2qZszPrt6ZYttQOSsibR3FOCdmr8VFYhTyEpLX0eAADzjMXSVLCTx-F');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `AWID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `price` double NOT NULL,
  `AID` int(5) DEFAULT NULL,
  `loginid` varchar(5) DEFAULT NULL,
  `imgsrc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`AWID`, `name`, `category`, `description`, `price`, `AID`, `loginid`, `imgsrc`) VALUES
(1242, 'Abstract 1', 'Abstract', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 204, 'preet', 'https://fidelitusgallery.com/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-01-at-5.55.44-PM-300x300.jpeg'),
(1243, 'Abstract 2', 'Abstract', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 204, 'preet', 'https://fidelitusgallery.com/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-01-at-5.55.43-PM-1-300x300.jpeg'),
(1244, 'Abstract 3', 'Abstract', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 34000, 204, 'preet', 'https://fidelitusgallery.com/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-01-at-5.55.43-PM-300x300.jpeg'),
(1245, 'Dhundi', 'Mythology', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 205, 'rach', 'https://fidelitusgallery.com/wp-content/uploads/2019/03/Dundi-8-36-x-48-300x300.jpg'),
(1246, 'Dharani Mandal', 'Mythology', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 205, 'rach', 'https://fidelitusgallery.com/wp-content/uploads/2021/05/Dharanimandala-48x36.-77K-300x300.jpg'),
(1247, 'Geetha Pradesha', 'Mythology', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 205, 'rach', 'https://fidelitusgallery.com/wp-content/uploads/2021/05/Geethopadesha-30x24.-25K-1-300x300.jpg'),
(1248, 'Nailed Women', 'Figurative', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 206, 'pruth', 'https://fidelitusgallery.com/wp-content/uploads/2019/01/nailed-women-48-x-60-300x300.jpg'),
(1249, 'Time Travel', 'Figurative', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45000, 206, 'pruth', 'https://fidelitusgallery.com/wp-content/uploads/2021/05/Time-Travel-72x60-1-300x300.jpg'),
(1250, 'Birds', 'Figurative', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45000, 206, 'pruth', 'https://fidelitusgallery.com/wp-content/uploads/2018/12/Birds-1-300x300.jpg'),
(1251, 'Flower Vase', 'Modern Art', 'An art gallery is a place where the world slows down. Minds wander. Beauty is everywhere. Around every corner is another epic adventure. In our four walled worlds, it happens to be more fun than most. \r\n\r\nWe began providing the world with fine art in 2007. We believe art should be fun. The art we co', 45, 204, 'preet', 'https://fidelitusgallery.com/wp-content/uploads/2021/05/Flower-waz-36x30.-40K-300x300.jpg'),
(1254, 'View of Toledo', 'Landscape', 'In this, his greatest surviving landscape, El Greco portrays the city he lived and worked in for most of his life. The painting belongs to the tradition of emblematic city views, rather than a faithful documentary description', 200000, 209, 'rach', 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/436575/1455894/main-image');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phno` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `name`, `phno`, `age`, `gender`, `address`, `email`) VALUES
(107, 'Harry', 2147483647, 19, 'Female', 'Tatarus', 'harry@gmail.com'),
(108, 'Rhea', 2147483647, 18, 'Female', 'Paris', 'rhea@gmail.com'),
(109, 'test', 2147483647, 21, 'Female', 'paris', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `email` varchar(100) DEFAULT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`email`, `passwd`) VALUES
('harry@gmail.com', 'd0d2b883ffe11676af7e678cf45a36fa'),
('rhea@gmail.com', 'e4bf6613f1d3d731a16a1aa7f846c02c'),
('test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` int(5) NOT NULL,
  `AWID` int(5) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `custID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OID`, `AWID`, `amount`, `custID`) VALUES
(37, 1249, 45000, 108),
(38, 1246, 45, 108),
(39, 1242, 45, 108),
(40, 1242, 45, 109),
(41, 1245, 45, 109);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`AWID`),
  ADD KEY `AID` (`AID`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`),
  ADD KEY `AWID` (`AWID`),
  ADD KEY `custID` (`custID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `AID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `AWID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`AID`) REFERENCES `artist` (`AID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artwork_ibfk_2` FOREIGN KEY (`loginid`) REFERENCES `admin` (`loginid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD CONSTRAINT `customer_login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`AWID`) REFERENCES `artwork` (`AWID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`custID`) REFERENCES `customer` (`custID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
