-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `words`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`) VALUES
(44, 'najmus.sabir18@gmail.com', '$2y$10$ogoqgG0h5eFfAm76wh702evLRz0fsEiLXO5rkAtZ/rXssxWeY0J7u', 1),
(45, 'najmus.sabir38@gmail.com', '$2y$10$.A4G7n6tbAxUdxQhoYTFa.I3QnZWki/0EtF937w5BGxEVHKYDFtCW', 1),
(46, 'najmus@mazegeek.com', '$2y$10$b/Cu1MMvOPEKbntJdSh9B.l.g6c4Tg2E.qin15GjjWaf65KctCN2S', 1),
(47, 'sabir18@gmail.com', '$2y$10$Qq2fr9q4evbkMB9ppac2dO3PHDVYGS8Tp2MnlFf7XKBuBeDLRKPM.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `meaning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `user_id`, `word`, `meaning`) VALUES
(5, 44, 'awe-inspiringly', 'So impressively, spectacularly, or formidably as to arouse or inspire awe'),
(6, 44, 'awfulize', 'To class as awful or terrible'),
(7, 44, 'awesomesauce', 'Extremely good; excellent.'),
(8, 45, 'anti-suffragism', 'Opposition to the extension of the right to vote in political elections to women; the political movement dedicated to this'),
(10, 45, 'Awfulize', 'To class as awful or terrible'),
(11, 46, 'excerpt', 'a short extract from a film, broadcast, or piece of music or writing.'),
(12, 44, 'excerpt', 'Excerpt means the extraction of a word or dialogue or a text from something written in text version.'),
(13, 44, 'new', '????'),
(14, 47, 'bromance', 'It means when two very close friends joking,insulting,loving,laughing with each other without being annoyed.'),
(15, 47, 'Screen Time', 'Screen Time is a new word which means amount of hours you are spending on your mobile phone. This word has created by Psychriatists');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_words` (`user_id`,`word`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
