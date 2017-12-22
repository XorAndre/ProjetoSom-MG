-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Dez-2017 às 14:16
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetosom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accesses`
--

CREATE TABLE `accesses` (
  `id` int(11) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `param` varchar(50) DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `accesses`
--

INSERT INTO `accesses` (`id`, `controller`, `action`, `param`, `data`) VALUES
(1, 'Accesses', 'index', 'asdasdsa', '2017-12-22 11:42:24'),
(2, 'Accesses', 'index', NULL, '2017-12-22 11:43:16'),
(3, 'Accesses', 'index', NULL, '2017-12-22 11:47:09'),
(4, 'Pages', 'display', 'home', '2017-12-22 11:49:38'),
(5, 'Pages', 'display', 'home', '2017-12-22 11:51:45'),
(6, 'Pages', 'display', 'home', '2017-12-20 11:58:40'),
(7, 'Pages', 'display', 'home', '2017-12-22 11:58:53'),
(8, 'Pages', 'display', 'home', '2017-12-23 11:59:02'),
(9, 'Pages', 'display', 'home', '2017-12-22 12:00:40'),
(10, 'Pages', 'display', 'home', '2017-12-22 12:02:10'),
(11, 'Pages', 'display', 'home', '2017-12-22 12:03:47'),
(12, 'Pages', 'display', 'home', '2017-12-22 12:04:13'),
(13, 'Pages', 'display', 'home', '2017-12-22 12:05:07'),
(14, 'Pages', 'display', 'home', '2017-12-22 12:06:20'),
(15, 'Pages', 'display', 'home', '2017-12-22 12:06:42'),
(16, 'Pages', 'display', 'home', '2017-12-22 12:06:45'),
(17, 'Pages', 'display', 'home', '2017-12-22 12:11:02'),
(18, 'Pages', 'display', 'home', '2017-12-22 12:11:59'),
(19, 'Pages', 'display', 'home', '2017-12-22 12:13:12'),
(20, 'Pages', 'display', 'home', '2017-12-22 12:14:21'),
(21, 'Pages', 'display', 'home', '2017-12-22 12:14:48'),
(22, 'Pages', 'display', 'home', '2017-12-22 12:14:53'),
(23, 'Pages', 'display', 'home', '2017-12-22 12:14:55'),
(24, 'Pages', 'display', 'home', '2017-12-22 12:15:26'),
(25, 'Pages', 'display', 'home', '2017-12-22 12:17:00'),
(26, 'Pages', 'display', 'home', '2017-12-22 12:17:57'),
(27, 'Pages', 'display', 'home', '2017-12-22 12:21:31'),
(28, 'Pages', 'display', 'home', '2017-12-22 12:21:45'),
(29, 'Pages', 'display', 'home', '2017-12-22 12:21:58'),
(30, 'Pages', 'display', 'home', '2017-12-22 12:22:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendas`
--

CREATE TABLE `agendas` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `albums`
--

INSERT INTO `albums` (`id`, `data`, `nome`) VALUES
(1, '2017-01-20', 'Primerio teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galleries_images`
--

CREATE TABLE `galleries_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `title`) VALUES
(1, 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `path`, `name`) VALUES
(2, 'webroot\\files\\Images\\15137961191513796119', '855523_1.jpg'),
(3, 'webroot\\files\\Images\\15137964311513796431', '855523_1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `image_id`, `nome`, `email`) VALUES
(2, 'admin', '$2y$10$zRDTCWN5LeqPmhzV8VKcz.Yh7EuAIbZQuByuI0EMjgaqACTOiYuCq', 1, 1, 'Guilherme Magno', 'routmagno@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries_images`
--
ALTER TABLE `galleries_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries_images`
--
ALTER TABLE `galleries_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
