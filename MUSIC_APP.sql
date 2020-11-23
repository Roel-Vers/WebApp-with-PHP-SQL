-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 12:41 PM
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
-- Database: `MUSIC.APP`
--

-- --------------------------------------------------------

--
-- Table structure for table `Albums`
--

CREATE TABLE `Albums` (
  `AlbumID` int(20) NOT NULL,
  `ArtistID` int(11) NOT NULL,
  `ATitle` varchar(25) NOT NULL,
  `Year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Albums`
--

INSERT INTO `Albums` (`AlbumID`, `ArtistID`, `ATitle`, `Year`) VALUES
(1, 1, 'Divide', 2017),
(2, 2, 'End of an Era', 2006),
(3, 3, 'My Way', 1969),
(4, 4, 'The Sweet Escape', 2006),
(5, 5, 'Gun N\' Roses', 1988),
(6, 6, 'Come Away With Me', 2002);

-- --------------------------------------------------------

--
-- Table structure for table `Artist`
--

CREATE TABLE `Artist` (
  `ArtistID` int(11) NOT NULL,
  `GenreID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Artist`
--

INSERT INTO `Artist` (`ArtistID`, `GenreID`, `Name`, `Country`) VALUES
(1, 1, 'Ed Sheeran', 'Britain'),
(2, 2, 'Nightwish', 'Finland'),
(3, 3, 'Frank Sinatra', 'America'),
(4, 1, 'Gwen Stefani', 'America'),
(5, 2, 'Gun N\' Roses', 'America'),
(6, 3, 'Norah Jones', 'America');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`CategoryID`, `Name`) VALUES
(1, 'Event'),
(2, 'Party'),
(3, 'Leisure');

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `GenreID` int(11) NOT NULL,
  `GName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`GenreID`, `GName`) VALUES
(1, 'Pop'),
(2, 'Rock'),
(3, 'Jazz');

-- --------------------------------------------------------

--
-- Table structure for table `Songs`
--

CREATE TABLE `Songs` (
  `SongID` int(20) NOT NULL,
  `GenreID` int(20) NOT NULL,
  `AlbumID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `STitle` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Songs`
--

INSERT INTO `Songs` (`SongID`, `GenreID`, `AlbumID`, `CategoryID`, `STitle`) VALUES
(1, 1, 1, 3, 'Erase'),
(2, 1, 1, 2, 'Shape of you'),
(3, 1, 1, 1, 'Perfect'),
(4, 1, 1, 2, 'Barcelona'),
(5, 1, 1, 1, 'Supermarket Flowers'),
(6, 1, 1, 1, 'New Man'),
(7, 2, 2, 3, 'Sleeping Sun'),
(8, 2, 2, 2, 'Nemo'),
(9, 2, 2, 2, 'The Siren'),
(10, 2, 2, 2, 'Wish I Had An Angle'),
(11, 2, 2, 2, 'Over The Hills and Far Away'),
(12, 2, 2, 3, 'Bless The Child'),
(13, 3, 3, 1, 'My Way'),
(14, 3, 3, 1, 'All My Tomorrows'),
(15, 3, 3, 2, 'Didn\'t We?'),
(16, 3, 3, 2, 'For Once in My Life'),
(17, 3, 3, 2, 'Mrs.Robinson'),
(18, 3, 3, 3, 'Watch What Happens'),
(19, 1, 4, 3, 'Wind It Up'),
(20, 1, 4, 3, 'The Sweet Escape'),
(21, 1, 4, 3, 'Early Winter'),
(22, 1, 4, 2, 'Yummy'),
(23, 1, 4, 2, 'U Started It'),
(24, 1, 4, 2, 'Orange County Girl'),
(25, 2, 5, 2, 'It\'s So Easy'),
(26, 2, 5, 2, 'Shadow of Your Life'),
(27, 2, 5, 3, 'Move To The City'),
(28, 2, 5, 3, 'Knocking on Heaven\'s Door'),
(29, 2, 5, 2, 'Whole Lotta Rosie'),
(30, 2, 5, 2, 'Sweet Child O\' Mine'),
(31, 3, 6, 1, 'Don\'t Know Why'),
(32, 3, 6, 2, 'Turn Me On'),
(33, 3, 6, 2, 'Nightingale'),
(34, 3, 6, 1, 'Come Away With Me'),
(35, 3, 6, 1, 'Lonestar'),
(36, 3, 6, 1, 'Seven Years'),
(37, 1, 1, 3, 'Song 1');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `User`, `Email`, `Password`) VALUES
(123, 'Admin', 'admin.acc@gmail.com', 'PhP2311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Albums`
--
ALTER TABLE `Albums`
  ADD PRIMARY KEY (`AlbumID`);

--
-- Indexes for table `Artist`
--
ALTER TABLE `Artist`
  ADD PRIMARY KEY (`ArtistID`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indexes for table `Songs`
--
ALTER TABLE `Songs`
  ADD PRIMARY KEY (`SongID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Songs`
--
ALTER TABLE `Songs`
  MODIFY `SongID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
