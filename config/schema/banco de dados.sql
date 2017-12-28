-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Dez-2017 às 18:24
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
(1, 'Pages', 'adminHome', NULL, '2017-12-28 15:46:15'),
(2, 'Users', 'login', NULL, '2017-12-28 15:46:15'),
(3, 'Images', 'user.png', NULL, '2017-12-28 15:46:16'),
(4, 'Images', '6.png', NULL, '2017-12-28 15:46:16'),
(5, 'Images', '3.jpg', NULL, '2017-12-28 15:46:16'),
(6, 'Users', 'login', NULL, '2017-12-28 15:46:22'),
(7, 'Pages', 'adminHome', NULL, '2017-12-28 15:46:22'),
(8, 'Pages', 'images', '1.png', '2017-12-28 15:46:22'),
(9, 'Images', 'search.png', NULL, '2017-12-28 15:46:23'),
(10, 'Pages', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 15:46:23'),
(11, 'News', 'index', NULL, '2017-12-28 16:10:59'),
(12, 'Pages', 'home', NULL, '2017-12-28 16:11:20'),
(13, 'Pages', 'adminHome', NULL, '2017-12-28 16:11:24'),
(14, 'Users', 'login', NULL, '2017-12-28 16:11:25'),
(15, 'Images', '6.png', NULL, '2017-12-28 16:11:25'),
(16, 'Images', 'user.png', NULL, '2017-12-28 16:11:25'),
(17, 'Images', '3.jpg', NULL, '2017-12-28 16:11:26'),
(18, 'Users', 'login', NULL, '2017-12-28 16:11:29'),
(19, 'Pages', 'adminHome', NULL, '2017-12-28 16:11:29'),
(20, 'Pages', 'images', '1.png', '2017-12-28 16:11:29'),
(21, 'Images', 'search.png', NULL, '2017-12-28 16:11:30'),
(22, 'Pages', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:11:30'),
(23, 'Pages', 'adminHome', NULL, '2017-12-28 16:12:13'),
(24, 'Pages', 'images', '1.png', '2017-12-28 16:12:13'),
(25, 'Pages', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:13'),
(26, 'Images', 'search.png', NULL, '2017-12-28 16:12:14'),
(27, 'News', 'adminIndex', NULL, '2017-12-28 16:12:15'),
(28, 'News', 'images', '1.png', '2017-12-28 16:12:16'),
(29, 'Images', 'search.png', NULL, '2017-12-28 16:12:16'),
(30, 'News', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:16'),
(31, 'Galleries', 'adminIndex', NULL, '2017-12-28 16:12:21'),
(32, 'Galleries', 'images', '1.png', '2017-12-28 16:12:21'),
(33, 'Galleries', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:21'),
(34, 'Images', 'search.png', NULL, '2017-12-28 16:12:22'),
(35, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:12:23'),
(36, 'Galleries', 'adminIndex', NULL, '2017-12-28 16:12:26'),
(37, 'Galleries', 'images', '1.png', '2017-12-28 16:12:26'),
(38, 'Galleries', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:27'),
(39, 'Images', 'search.png', NULL, '2017-12-28 16:12:27'),
(40, 'Galleries', 'adminIndex', NULL, '2017-12-28 16:12:54'),
(41, 'Galleries', 'images', '1.png', '2017-12-28 16:12:54'),
(42, 'Images', 'search.png', NULL, '2017-12-28 16:12:55'),
(43, 'Galleries', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:55'),
(44, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:12:58'),
(45, 'Focuses', 'images', '1.png', '2017-12-28 16:12:58'),
(46, 'Images', 'search.png', NULL, '2017-12-28 16:12:58'),
(47, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:12:58'),
(48, 'Albums', 'adminIndex', NULL, '2017-12-28 16:13:01'),
(49, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:13:04'),
(50, 'Focuses', 'images', '1.png', '2017-12-28 16:13:04'),
(51, 'Images', 'search.png', NULL, '2017-12-28 16:13:05'),
(52, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:13:05'),
(53, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:13:30'),
(54, 'Focuses', 'images', '1.png', '2017-12-28 16:13:31'),
(55, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:13:31'),
(56, 'Images', 'search.png', NULL, '2017-12-28 16:13:31'),
(57, 'Pages', 'home', NULL, '2017-12-28 16:13:33'),
(58, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:13:36'),
(59, 'Focuses', 'images', '1.png', '2017-12-28 16:13:36'),
(60, 'Images', 'search.png', NULL, '2017-12-28 16:13:36'),
(61, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:13:37'),
(62, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:13:51'),
(63, 'Focuses', 'images', '1.png', '2017-12-28 16:13:51'),
(64, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:13:52'),
(65, 'Images', 'search.png', NULL, '2017-12-28 16:13:52'),
(66, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:14:11'),
(67, 'Focuses', 'images', '1.png', '2017-12-28 16:14:11'),
(68, 'Images', 'search.png', NULL, '2017-12-28 16:14:11'),
(69, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:14:12'),
(70, 'Videos', 'adminIndex', NULL, '2017-12-28 16:14:20'),
(71, 'Videos', 'adminIndex', NULL, '2017-12-28 16:14:38'),
(72, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:14:39'),
(73, 'Focuses', 'images', '1.png', '2017-12-28 16:14:39'),
(74, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:14:40'),
(75, 'Images', 'search.png', NULL, '2017-12-28 16:14:40'),
(76, 'Focuses', 'adminIndex', NULL, '2017-12-28 16:24:37'),
(77, 'Focuses', 'images', '1.png', '2017-12-28 16:24:37'),
(78, 'Focuses', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:24:38'),
(79, 'Images', 'search.png', NULL, '2017-12-28 16:24:38'),
(80, 'Pages', 'home', NULL, '2017-12-28 16:24:39'),
(81, 'Pages', 'adminHome', NULL, '2017-12-28 16:27:50'),
(82, 'Pages', 'images', '1.png', '2017-12-28 16:27:51'),
(83, 'Pages', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:27:51'),
(84, 'Images', 'search.png', NULL, '2017-12-28 16:27:52'),
(85, 'Places', 'add', NULL, '2017-12-28 16:33:15'),
(86, 'Places', 'images', '1.png', '2017-12-28 16:33:16'),
(87, 'Images', 'search.png', NULL, '2017-12-28 16:33:16'),
(88, 'Places', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:33:17'),
(89, 'Places', 'add', NULL, '2017-12-28 16:33:20'),
(90, 'Places', 'index', NULL, '2017-12-28 16:33:21'),
(91, 'Images', '1.png', NULL, '2017-12-28 16:33:21'),
(92, 'Images', 'search.png', NULL, '2017-12-28 16:33:21'),
(93, 'Places', 'add', NULL, '2017-12-28 16:33:23'),
(94, 'Places', 'images', '1.png', '2017-12-28 16:33:23'),
(95, 'Places', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:33:23'),
(96, 'Images', 'search.png', NULL, '2017-12-28 16:33:24'),
(97, 'Places', 'add', NULL, '2017-12-28 16:33:26'),
(98, 'Places', 'index', NULL, '2017-12-28 16:33:26'),
(99, 'Images', '1.png', NULL, '2017-12-28 16:33:27'),
(100, 'Images', 'search.png', NULL, '2017-12-28 16:33:27'),
(101, 'Banners', 'add', NULL, '2017-12-28 16:33:28'),
(102, 'Banners', 'add', NULL, '2017-12-28 16:33:43'),
(103, 'Banners', 'images', '1.png', '2017-12-28 16:33:43'),
(104, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:33:44'),
(105, 'Images', 'search.png', NULL, '2017-12-28 16:33:44'),
(106, 'Banners', 'add', NULL, '2017-12-28 16:34:11'),
(107, 'Banners', 'images', '1.png', '2017-12-28 16:34:11'),
(108, 'Images', 'search.png', NULL, '2017-12-28 16:34:12'),
(109, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 16:34:12'),
(110, 'Banners', 'add', NULL, '2017-12-28 16:34:24'),
(111, 'Banners', 'add', NULL, '2017-12-28 16:34:58'),
(112, 'Banners', 'add', NULL, '2017-12-28 16:35:58'),
(113, 'Banners', 'index', NULL, '2017-12-28 16:35:59'),
(114, 'Images', '1.png', NULL, '2017-12-28 16:35:59'),
(115, 'Images', 'search.png', NULL, '2017-12-28 16:35:59'),
(116, 'Banners', 'index', NULL, '2017-12-28 16:45:26'),
(117, 'Images', '1.png', NULL, '2017-12-28 16:45:27'),
(118, 'Images', 'search.png', NULL, '2017-12-28 16:45:27'),
(119, 'Pages', 'home', NULL, '2017-12-28 16:45:27'),
(120, 'Pages', 'home', NULL, '2017-12-28 16:45:28'),
(121, 'Pages', 'home', NULL, '2017-12-28 16:45:36'),
(122, 'Pages', 'home', NULL, '2017-12-28 16:48:32'),
(123, 'Pages', 'home', NULL, '2017-12-28 16:48:41'),
(124, 'Pages', 'home', NULL, '2017-12-28 16:51:39'),
(125, 'Pages', 'home', NULL, '2017-12-28 16:52:12'),
(126, 'Pages', 'home', NULL, '2017-12-28 16:52:19'),
(127, 'Pages', 'home', NULL, '2017-12-28 16:52:57'),
(128, 'Pages', 'home', NULL, '2017-12-28 16:54:14'),
(129, 'Pages', 'home', NULL, '2017-12-28 16:54:34'),
(130, 'Pages', 'home', NULL, '2017-12-28 16:54:48'),
(131, 'Pages', 'home', NULL, '2017-12-28 16:54:57'),
(132, 'Pages', 'home', NULL, '2017-12-28 16:55:20'),
(133, 'Pages', 'home', NULL, '2017-12-28 16:56:07'),
(134, 'Pages', 'home', NULL, '2017-12-28 16:56:20'),
(135, 'Pages', 'home', NULL, '2017-12-28 16:56:30'),
(136, 'Pages', 'home', NULL, '2017-12-28 16:58:35'),
(137, 'Pages', 'home', NULL, '2017-12-28 17:02:12'),
(138, 'Banners', 'add', NULL, '2017-12-28 17:03:17'),
(139, 'Banners', 'images', '1.png', '2017-12-28 17:03:18'),
(140, 'Images', 'search.png', NULL, '2017-12-28 17:03:18'),
(141, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:03:18'),
(142, 'Banners', 'add', NULL, '2017-12-28 17:03:28'),
(143, 'Banners', 'index', NULL, '2017-12-28 17:03:29'),
(144, 'Images', '1.png', NULL, '2017-12-28 17:03:29'),
(145, 'Images', 'search.png', NULL, '2017-12-28 17:03:30'),
(146, 'Pages', 'home', NULL, '2017-12-28 17:03:40'),
(147, 'Banners', 'index', NULL, '2017-12-28 17:04:03'),
(148, 'Images', '1.png', NULL, '2017-12-28 17:04:03'),
(149, 'Images', 'search.png', NULL, '2017-12-28 17:04:04'),
(150, 'Banners', 'delete', '1', '2017-12-28 17:04:07'),
(151, 'Banners', 'index', NULL, '2017-12-28 17:04:08'),
(152, 'Images', '1.png', NULL, '2017-12-28 17:04:09'),
(153, 'Images', 'search.png', NULL, '2017-12-28 17:04:09'),
(154, 'Banners', 'delete', '2', '2017-12-28 17:04:12'),
(155, 'Banners', 'index', NULL, '2017-12-28 17:04:12'),
(156, 'Images', '1.png', NULL, '2017-12-28 17:04:12'),
(157, 'Images', 'search.png', NULL, '2017-12-28 17:04:13'),
(158, 'Banners', 'add', NULL, '2017-12-28 17:04:14'),
(159, 'Banners', 'images', '1.png', '2017-12-28 17:04:14'),
(160, 'Images', 'search.png', NULL, '2017-12-28 17:04:15'),
(161, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:04:15'),
(162, 'Banners', 'add', NULL, '2017-12-28 17:04:18'),
(163, 'Banners', 'index', NULL, '2017-12-28 17:04:19'),
(164, 'Images', '1.png', NULL, '2017-12-28 17:04:20'),
(165, 'Images', 'search.png', NULL, '2017-12-28 17:04:20'),
(166, 'Pages', 'home', NULL, '2017-12-28 17:04:21'),
(167, 'Banners', 'add', NULL, '2017-12-28 17:05:20'),
(168, 'Banners', 'images', '1.png', '2017-12-28 17:05:21'),
(169, 'Images', 'search.png', NULL, '2017-12-28 17:05:21'),
(170, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:05:21'),
(171, 'Banners', 'add', NULL, '2017-12-28 17:05:33'),
(172, 'Banners', 'images', '1.png', '2017-12-28 17:05:34'),
(173, 'Images', 'search.png', NULL, '2017-12-28 17:05:34'),
(174, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:05:34'),
(175, 'Banners', 'add', NULL, '2017-12-28 17:05:46'),
(176, 'Banners', 'index', NULL, '2017-12-28 17:05:46'),
(177, 'Images', '1.png', NULL, '2017-12-28 17:05:47'),
(178, 'Images', 'search.png', NULL, '2017-12-28 17:05:47'),
(179, 'Banners', 'add', NULL, '2017-12-28 17:05:49'),
(180, 'Banners', 'images', '1.png', '2017-12-28 17:05:49'),
(181, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:05:49'),
(182, 'Images', 'search.png', NULL, '2017-12-28 17:05:49'),
(183, 'Banners', 'add', NULL, '2017-12-28 17:05:55'),
(184, 'Banners', 'index', NULL, '2017-12-28 17:05:56'),
(185, 'Images', '1.png', NULL, '2017-12-28 17:05:56'),
(186, 'Images', 'search.png', NULL, '2017-12-28 17:05:56'),
(187, 'Pages', 'home', NULL, '2017-12-28 17:05:57'),
(188, 'Banners', 'add', NULL, '2017-12-28 17:06:49'),
(189, 'Banners', 'images', '1.png', '2017-12-28 17:06:50'),
(190, 'Images', 'search.png', NULL, '2017-12-28 17:06:50'),
(191, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:06:50'),
(192, 'Banners', 'add', NULL, '2017-12-28 17:06:56'),
(193, 'Banners', 'index', NULL, '2017-12-28 17:06:56'),
(194, 'Images', '1.png', NULL, '2017-12-28 17:06:57'),
(195, 'Images', 'search.png', NULL, '2017-12-28 17:06:57'),
(196, 'Pages', 'home', NULL, '2017-12-28 17:07:00'),
(197, 'Banners', 'add', NULL, '2017-12-28 17:07:55'),
(198, 'Banners', 'images', '1.png', '2017-12-28 17:07:56'),
(199, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:07:56'),
(200, 'Images', 'search.png', NULL, '2017-12-28 17:07:56'),
(201, 'Banners', 'add', NULL, '2017-12-28 17:08:01'),
(202, 'Banners', 'index', NULL, '2017-12-28 17:08:01'),
(203, 'Images', '1.png', NULL, '2017-12-28 17:08:02'),
(204, 'Images', 'search.png', NULL, '2017-12-28 17:08:02'),
(205, 'Pages', 'home', NULL, '2017-12-28 17:08:03'),
(206, 'Pages', 'home', NULL, '2017-12-28 17:08:58'),
(207, 'Banners', 'index', NULL, '2017-12-28 17:09:40'),
(208, 'Images', '1.png', NULL, '2017-12-28 17:09:41'),
(209, 'Images', 'search.png', NULL, '2017-12-28 17:09:41'),
(210, 'Banners', 'delete', '7', '2017-12-28 17:09:50'),
(211, 'Banners', 'index', NULL, '2017-12-28 17:09:50'),
(212, 'Images', '1.png', NULL, '2017-12-28 17:09:50'),
(213, 'Images', 'search.png', NULL, '2017-12-28 17:09:51'),
(214, 'Pages', 'home', NULL, '2017-12-28 17:09:51'),
(215, 'Pages', 'home', NULL, '2017-12-28 17:10:56'),
(216, 'Pages', 'home', NULL, '2017-12-28 17:11:17'),
(217, 'Pages', 'home', NULL, '2017-12-28 17:11:28'),
(218, 'Pages', 'home', NULL, '2017-12-28 17:11:43'),
(219, 'Pages', 'home', NULL, '2017-12-28 17:11:57'),
(220, 'Pages', 'home', NULL, '2017-12-28 17:12:35'),
(221, 'Banners', 'add', NULL, '2017-12-28 17:13:03'),
(222, 'Banners', 'images', '1.png', '2017-12-28 17:13:04'),
(223, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:13:04'),
(224, 'Images', 'search.png', NULL, '2017-12-28 17:13:04'),
(225, 'Banners', 'add', NULL, '2017-12-28 17:13:13'),
(226, 'Banners', 'index', NULL, '2017-12-28 17:13:14'),
(227, 'Images', '1.png', NULL, '2017-12-28 17:13:14'),
(228, 'Images', 'search.png', NULL, '2017-12-28 17:13:15'),
(229, 'Pages', 'home', NULL, '2017-12-28 17:13:16'),
(230, 'Banners', 'add', NULL, '2017-12-28 17:14:59'),
(231, 'Banners', 'images', '1.png', '2017-12-28 17:14:59'),
(232, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:15:00'),
(233, 'Images', 'search.png', NULL, '2017-12-28 17:15:00'),
(234, 'Banners', 'index', NULL, '2017-12-28 17:15:01'),
(235, 'Banners', 'images', '1.png', '2017-12-28 17:15:01'),
(236, 'Images', 'search.png', NULL, '2017-12-28 17:15:02'),
(237, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:15:02'),
(238, 'Banners', 'index', NULL, '2017-12-28 17:15:20'),
(239, 'Banners', 'images', '1.png', '2017-12-28 17:15:21'),
(240, 'Images', 'search.png', NULL, '2017-12-28 17:15:21'),
(241, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:15:21'),
(242, 'Banners', 'index', NULL, '2017-12-28 17:16:07'),
(243, 'Banners', 'images', '1.png', '2017-12-28 17:16:07'),
(244, 'Images', 'search.png', NULL, '2017-12-28 17:16:07'),
(245, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:16:08'),
(246, 'Banners', 'index', NULL, '2017-12-28 17:16:28'),
(247, 'Banners', 'images', '1.png', '2017-12-28 17:16:29'),
(248, 'Images', 'search.png', NULL, '2017-12-28 17:16:29'),
(249, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:16:29'),
(250, 'Banners', 'index', NULL, '2017-12-28 17:16:35'),
(251, 'Banners', 'images', '1.png', '2017-12-28 17:16:35'),
(252, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:16:35'),
(253, 'Images', 'search.png', NULL, '2017-12-28 17:16:36'),
(254, 'Banners', 'index', NULL, '2017-12-28 17:16:59'),
(255, 'Banners', 'images', '1.png', '2017-12-28 17:17:00'),
(256, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:17:00'),
(257, 'Images', 'search.png', NULL, '2017-12-28 17:17:00'),
(258, 'Banners', 'index', NULL, '2017-12-28 17:17:12'),
(259, 'Banners', 'images', '1.png', '2017-12-28 17:17:12'),
(260, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:17:12'),
(261, 'Images', 'search.png', NULL, '2017-12-28 17:17:13'),
(262, 'Banners', 'index', NULL, '2017-12-28 17:17:43'),
(263, 'Banners', 'images', '1.png', '2017-12-28 17:17:43'),
(264, 'Images', 'search.png', NULL, '2017-12-28 17:17:44'),
(265, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:17:44'),
(266, 'Banners', 'index', NULL, '2017-12-28 17:17:57'),
(267, 'Banners', 'images', '1.png', '2017-12-28 17:17:58'),
(268, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:17:58'),
(269, 'Images', 'search.png', NULL, '2017-12-28 17:17:58'),
(270, 'Banners', 'add', NULL, '2017-12-28 17:18:57'),
(271, 'Banners', 'images', '1.png', '2017-12-28 17:18:57'),
(272, 'Images', 'search.png', NULL, '2017-12-28 17:18:58'),
(273, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:18:58'),
(274, 'Banners', 'add', NULL, '2017-12-28 17:19:13'),
(275, 'Banners', 'images', '1.png', '2017-12-28 17:19:13'),
(276, 'Images', 'search.png', NULL, '2017-12-28 17:19:13'),
(277, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:19:14'),
(278, 'Banners', 'add', NULL, '2017-12-28 17:19:23'),
(279, 'Banners', 'images', '1.png', '2017-12-28 17:19:24'),
(280, 'Images', 'search.png', NULL, '2017-12-28 17:19:24'),
(281, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:19:24'),
(282, 'Banners', 'add', NULL, '2017-12-28 17:19:32'),
(283, 'Banners', 'images', '1.png', '2017-12-28 17:19:33'),
(284, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:19:33'),
(285, 'Images', 'search.png', NULL, '2017-12-28 17:19:33'),
(286, 'Banners', 'add', NULL, '2017-12-28 17:20:03'),
(287, 'Banners', 'index', NULL, '2017-12-28 17:20:04'),
(288, 'Images', '1.png', NULL, '2017-12-28 17:20:04'),
(289, 'Images', 'search.png', NULL, '2017-12-28 17:20:05'),
(290, 'Banners', 'delete', '9', '2017-12-28 17:20:29'),
(291, 'Banners', 'index', NULL, '2017-12-28 17:20:30'),
(292, 'Images', '1.png', NULL, '2017-12-28 17:20:30'),
(293, 'Images', 'search.png', NULL, '2017-12-28 17:20:30'),
(294, 'Banners', 'index', NULL, '2017-12-28 17:20:48'),
(295, 'Images', '1.png', NULL, '2017-12-28 17:20:48'),
(296, 'Images', 'search.png', NULL, '2017-12-28 17:20:48'),
(297, 'Banners', 'add', NULL, '2017-12-28 17:20:51'),
(298, 'Banners', 'images', '1.png', '2017-12-28 17:20:52'),
(299, 'Banners', 'img', 'thumbnail-be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:20:52'),
(300, 'Images', 'search.png', NULL, '2017-12-28 17:20:52'),
(301, 'Banners', 'add', NULL, '2017-12-28 17:21:01'),
(302, 'Banners', 'index', NULL, '2017-12-28 17:21:01'),
(303, 'Images', '1.png', NULL, '2017-12-28 17:21:02'),
(304, 'Images', 'search.png', NULL, '2017-12-28 17:21:02'),
(305, 'Banners', 'index', NULL, '2017-12-28 17:21:38'),
(306, 'Images', '1.png', NULL, '2017-12-28 17:21:39'),
(307, 'Images', 'search.png', NULL, '2017-12-28 17:21:39'),
(308, 'Banners', 'index', NULL, '2017-12-28 17:21:41'),
(309, 'Images', '1.png', NULL, '2017-12-28 17:21:42'),
(310, 'Images', 'search.png', NULL, '2017-12-28 17:21:42'),
(311, 'Banners', 'index', NULL, '2017-12-28 17:22:10'),
(312, 'Images', '1.png', NULL, '2017-12-28 17:22:10'),
(313, 'Images', 'search.png', NULL, '2017-12-28 17:22:11'),
(314, 'Banners', 'index', NULL, '2017-12-28 17:22:28'),
(315, 'Images', '1.png', NULL, '2017-12-28 17:22:29'),
(316, 'Images', 'search.png', NULL, '2017-12-28 17:22:29'),
(317, 'Pages', 'home', NULL, '2017-12-28 17:22:33'),
(318, 'Pages', 'home', NULL, '2017-12-28 17:23:25'),
(319, 'Pages', 'home', NULL, '2017-12-28 17:23:30'),
(320, 'Pages', 'home', NULL, '2017-12-28 17:23:39'),
(321, 'Focuses', 'view', '3', '2017-12-28 17:23:43'),
(322, 'Focuses', 'view', 'logo_sommg.png', '2017-12-28 17:23:43'),
(323, 'Pages', 'home', NULL, '2017-12-28 17:23:45');

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
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `albums`
--

INSERT INTO `albums` (`id`, `data`, `nome`) VALUES
(54, '2017-12-25 15:16:28', 'Titulo com 3 arquivos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `valor` double(10,2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `valor`, `name`, `data`, `path`, `place_id`) VALUES
(3, 555.00, '98163959-816b-4345-8aa7-7ec38b2ff5aa.jpg', '2017-12-28 17:04:00', 'webroot\\img\\Banners\\', 1),
(4, 50.00, 'images.jpg', '2017-12-28 17:05:00', 'webroot\\img\\Banners\\', 1),
(5, 55.00, '855523_1.jpg', '2017-12-28 17:05:00', 'webroot\\img\\Banners\\', 2),
(6, 123.00, '98163959-816b-4345-8aa7-7ec38b2ff5aa.jpg', '2017-12-28 17:06:00', 'webroot\\img\\Banners\\', 1),
(8, 1231.00, 'be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg', '2017-12-28 17:13:00', 'webroot\\img\\Banners\\', 2),
(10, 150.00, 'horario.PNG', '2017-12-28 17:21:01', 'webroot\\img\\Banners\\', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Rebaixado'),
(2, 'Som Automotivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(200) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'asdfsadf', 'routmagno@gmail.com', 'asdfasdf', 'fsdfsadfsadfsadf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `focuses`
--

CREATE TABLE `focuses` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `detalhes` text NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `focuses`
--

INSERT INTO `focuses` (`id`, `nome`, `data`, `category_id`, `detalhes`, `image_id`) VALUES
(3, 'Carro bonito', '2017-12-27 17:05:14', 1, 'de rebaixamento', 60);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galleries`
--

INSERT INTO `galleries` (`id`, `image_id`, `data`, `title`, `text`) VALUES
(12, 55, '2017-12-27 16:41:32', 'kkkk', 'kkkkkkkkkkkkkkkkk'),
(13, 61, '2017-12-28 13:04:50', 'titulo 2', 'a'),
(14, 63, '2017-12-28 13:05:12', 'titulo 23', 'a'),
(15, 66, '2017-12-28 13:14:39', 'te', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galleries_images`
--

CREATE TABLE `galleries_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galleries_images`
--

INSERT INTO `galleries_images` (`id`, `gallery_id`, `image_id`) VALUES
(16, 12, 56),
(17, 14, 62),
(18, 14, 64),
(19, 15, 67);

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
(1, 'ADMIN'),
(2, 'EDITOR');

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
(30, 'webroot\\img\\Images\\15142030021514203002', 'be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg'),
(32, 'webroot\\img\\Images\\15142075621514207562', 'AABrXFUPRwHnF45wCkgE29W_sUbYEu0fqq9CErC5uJc.png'),
(44, 'webroot\\img\\Images\\15143915521514391552', 'AABrXFUPRwHnF45wCkgE29W_sUbYEu0fqq9CErC5uJc.png'),
(55, 'webroot\\img\\Images\\15143928921514392892', '855523_1.jpg'),
(56, 'webroot\\img\\Images\\15143928921514392892', '98163959-816b-4345-8aa7-7ec38b2ff5aa.jpg'),
(60, 'webroot\\img\\Images\\15143943131514394313', 'loja-equipadora-ws--sound-loja-de-som-automotivo-loja-de-acessorios-automotivos-jardim-rochdale-osasco-2120-9484.jpg'),
(61, 'webroot\\img\\Images\\15144662901514466290', '855523_1.jpg'),
(62, 'webroot\\img\\Images\\15144662901514466290', '98163959-816b-4345-8aa7-7ec38b2ff5aa.jpg'),
(63, 'webroot\\img\\Images\\15144663121514466312', 'be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg'),
(64, 'webroot\\img\\Images\\15144663121514466312', 'AABrXFUPRwHnF45wCkgE29W_sUbYEu0fqq9CErC5uJc.png'),
(65, 'webroot\\img\\Images\\15144666501514466650', '98163959-816b-4345-8aa7-7ec38b2ff5aa.jpg'),
(66, 'webroot\\img\\Images\\15144668791514466879', 'loja-equipadora-ws--sound-loja-de-som-automotivo-loja-de-acessorios-automotivos-jardim-rochdale-osasco-2120-9484.jpg'),
(67, 'webroot\\img\\Images\\15144668791514466879', 'be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg'),
(68, 'webroot\\img\\Images\\15144673971514467397', 'be6142aa-f24b-4c0d-a5a7-3e35da352a1f.jpg'),
(69, 'webroot\\img\\Images\\15144700161514470016', '855523_1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `image_id`, `data`) VALUES
(4, 'Nova noticia', 'Essa nova noticia é um teste que eu fiz com uma foto que gosto', 44, '2017-12-27 16:19:12'),
(5, 'teste', 'asdas', 65, '2017-12-28 13:10:50'),
(6, 'teste outbound', 'teste outbound', 68, '2017-12-28 13:23:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `places`
--

INSERT INTO `places` (`id`, `name`) VALUES
(1, 'topo'),
(2, 'lateral');

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

--
-- Extraindo dados da tabela `songs`
--

INSERT INTO `songs` (`id`, `name`, `path`, `album_id`, `file`) VALUES
(25, '99', 'webroot\\files\\Songs\\54', 54, '01.mp3'),
(26, '88', 'webroot\\files\\Songs\\54', 54, '02.mp3'),
(27, '05.mp3', 'webroot\\files\\Songs\\54', 54, '05.mp3');

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
(2, 'admin', '$2y$10$zRDTCWN5LeqPmhzV8VKcz.Yh7EuAIbZQuByuI0EMjgaqACTOiYuCq', 1, 30, 'Guilherme Magno', 'routmagno@gmail.com'),
(3, 'rout', '$2y$10$GrZnPij/0QRNE4fZQUWz8.GXX/VzqRmhSLlzaJIaP1NpdItdwnQKK', 1, 30, 'Guilherme Magno Moura Cardoso', 'routmagno1@gmail.com'),
(4, 'asdasd', '$2y$10$zQTm/guthi6xqRNCoK1mtuzIw535SCy26LKNlnPO5E6xCErgFy4Ii', 1, 30, 'asdasd', 'asdasda@asdasdsa.com'),
(6, 'teste', '$2y$10$LTKSatW5orM8rtrGlARfq.chbkg4TRsR7q6ExYiMiHvC8JVr8klZC', 1, 32, '\'teste', 'routmagno523@gmail.com'),
(7, 'davidson', '$2y$10$omCqFOH9LsjRXagVFsyF6.UG3fAFIJzsiWh9WugFp8ikh7QoIIqSW', 1, 69, 'davidson', 'davidson@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `title`, `url`, `text`) VALUES
(2, 'asdass', '7fNAVW4Otks', 'asdasd');

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
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `focuses`
--
ALTER TABLE `focuses`
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
-- Indexes for table `places`
--
ALTER TABLE `places`
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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `focuses`
--
ALTER TABLE `focuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `galleries_images`
--
ALTER TABLE `galleries_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
