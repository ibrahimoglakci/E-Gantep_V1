-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Nis 2022, 09:02:46
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `adminpanel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aktivite`
--

CREATE TABLE `aktivite` (
  `ID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `activity` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `aktivite`
--

INSERT INTO `aktivite` (`ID`, `userID`, `activity`, `type`, `date`) VALUES
(1, 1, '<span>Profil bilgilerinizi</span> güncellediniz.', 'onay', '2021-11-17 00:30:16'),
(2, 1, '<span>Hesap</span> şifrenizi değiştirdiniz.', 'sifre', '2021-11-17 00:41:05'),
(3, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-16 22:41:38'),
(4, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-16 22:41:39'),
(5, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-16 22:41:41'),
(6, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-16 22:41:44'),
(7, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 00:55:23'),
(8, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 00:55:31'),
(9, 1, '<span>Profil bilgilerinizi</span> güncellediniz.', 'onay', '2021-11-17 00:55:48'),
(10, 1, '<span>Hesap</span> şifrenizi değiştirdiniz.', 'sifre', '2021-11-17 01:06:47'),
(11, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:38:03'),
(12, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:39:33'),
(13, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:39:39'),
(14, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:39:40'),
(15, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:39:50'),
(16, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:40:00'),
(17, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:40:11'),
(18, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:40:16'),
(19, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:40:18'),
(20, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:40:24'),
(21, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:40:26'),
(22, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:40:33'),
(23, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:40:39'),
(24, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:50:17'),
(25, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:51:30'),
(26, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:54:14'),
(27, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:54:33'),
(28, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:56:09'),
(29, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:57:52'),
(30, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:58:52'),
(31, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 14:59:31'),
(32, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 14:59:37'),
(33, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:05:53'),
(34, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:05:54'),
(35, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:05:56'),
(36, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:05:57'),
(37, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:15:12'),
(38, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:15:13'),
(39, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:15:15'),
(40, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:15:16'),
(41, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:15:45'),
(42, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:15:46'),
(43, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:13'),
(44, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:14'),
(45, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:14'),
(46, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:15'),
(47, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:18'),
(48, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:18'),
(49, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:29'),
(50, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:30'),
(51, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:32'),
(52, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:33'),
(53, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:34'),
(54, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:34'),
(55, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:46'),
(56, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:47'),
(57, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:48'),
(58, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:16:48'),
(59, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:16:56'),
(60, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:17:00'),
(61, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:17:58'),
(62, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:18:02'),
(63, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:20:46'),
(64, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:21:13'),
(65, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:01'),
(66, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:22'),
(67, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:32'),
(68, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:33'),
(69, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:33'),
(70, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:34'),
(71, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:34'),
(72, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:35'),
(73, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:47'),
(74, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:48'),
(75, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:48'),
(76, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:48'),
(77, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:49'),
(78, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:49'),
(79, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:50'),
(80, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:23:50'),
(81, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:23:55'),
(82, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:24:31'),
(83, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:24:31'),
(84, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:24:32'),
(85, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:24:32'),
(86, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:24:32'),
(87, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:24:33'),
(88, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:24:33'),
(89, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:24:33'),
(90, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:24:34'),
(91, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:24:34'),
(92, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:27:05'),
(93, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:27:07'),
(94, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:27:16'),
(95, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:27:24'),
(96, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:27:29'),
(97, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:27:30'),
(98, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:28:16'),
(99, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:28:18'),
(100, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:28:35'),
(101, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:28:36'),
(102, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:28:38'),
(103, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:28:40'),
(104, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:28:40'),
(105, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:28:47'),
(106, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:28:48'),
(107, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:28:49'),
(108, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:29:00'),
(109, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:29:02'),
(110, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:30:31'),
(111, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:30:32'),
(112, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:32:30'),
(113, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:32:32'),
(114, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:32:52'),
(115, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:32:53'),
(116, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:32:58'),
(117, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:32:59'),
(118, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:36:38'),
(119, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:36:39'),
(120, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:37:08'),
(121, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:37:13'),
(122, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:38:15'),
(123, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:38:16'),
(124, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:38:18'),
(125, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:38:18'),
(126, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:38:19'),
(127, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:38:20'),
(128, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:38:20'),
(129, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:38:21'),
(130, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:39:10'),
(131, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:39:14'),
(132, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:39:16'),
(133, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:39:20'),
(134, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:39:21'),
(135, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:39:28'),
(136, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:39:29'),
(137, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:39:41'),
(138, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:39:43'),
(139, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:42:15'),
(140, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:42:24'),
(141, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:42:27'),
(142, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:43:38'),
(143, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:43:41'),
(144, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:45:45'),
(145, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:45:47'),
(146, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:45:48'),
(147, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:45:49'),
(148, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:46:15'),
(149, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:46:25'),
(150, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:47:42'),
(151, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:47:44'),
(152, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:47:45'),
(153, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:47:46'),
(154, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:47:59'),
(155, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:48:05'),
(156, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:48:06'),
(157, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:48:12'),
(158, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:48:13'),
(159, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:48:15'),
(160, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:48:17'),
(161, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:57:37'),
(162, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:57:44'),
(163, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:57:45'),
(164, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 15:57:47'),
(165, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 15:57:48'),
(166, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:00:04'),
(167, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:04:03'),
(168, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:04:05'),
(169, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:04:44'),
(170, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:04:46'),
(171, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:04:46'),
(172, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:04:47'),
(173, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:04:47'),
(174, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:04:48'),
(175, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:06:17'),
(176, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:06:19'),
(177, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:06:19'),
(178, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:06:20'),
(179, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:06:21'),
(180, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:06:22'),
(181, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:06:22'),
(182, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:06:23'),
(183, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:07:36'),
(184, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:07:37'),
(185, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:08'),
(186, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:09'),
(187, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:11'),
(188, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:12'),
(189, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:16'),
(190, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:26'),
(191, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:27'),
(192, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:43'),
(193, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:51'),
(194, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:51'),
(195, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:52'),
(196, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:53'),
(197, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:53'),
(198, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:53'),
(199, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:54'),
(200, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:56'),
(201, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:57'),
(202, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:57'),
(203, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:13:58'),
(204, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:13:58'),
(205, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:14:06'),
(206, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:14:07'),
(207, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:14:08'),
(208, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:14:09'),
(209, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:14:10'),
(210, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:14:10'),
(211, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:14:12'),
(212, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:14:13'),
(213, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:14:26'),
(214, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:17:36'),
(215, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:17:38'),
(216, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:17:44'),
(217, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:17:46'),
(218, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:17:48'),
(219, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:17:57'),
(220, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 16:17:59'),
(221, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:17:59'),
(222, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 16:18:04'),
(223, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 21:05:50'),
(224, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:05:51'),
(225, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-17 21:07:40'),
(226, 1, '<span>fwqwqfwqf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:07:41'),
(227, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:16:19'),
(228, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:16:20'),
(229, 1, '<span>wqfwqfwqdad</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:18:57'),
(230, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-17 21:18:58'),
(231, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-17 22:44:58'),
(232, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-17 22:45:49'),
(233, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-18 01:13:32'),
(234, 1, '<span>Davada mükemmel fırsat</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-18 01:13:33'),
(235, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-18 13:57:28'),
(236, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-18 13:57:30'),
(237, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-18 13:57:31'),
(238, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-18 13:57:33'),
(239, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-21 19:16:37'),
(240, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-21 19:16:39'),
(241, 1, '<span>asfadfasf</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-21 19:16:46'),
(242, 1, '<span>asfadfasf</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-21 19:16:47'),
(243, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-22 08:22:17'),
(244, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-22 08:22:18'),
(245, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-23 15:13:30'),
(246, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-23 15:15:05'),
(247, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-23 15:16:04'),
(248, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 09:55:33'),
(249, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 09:55:34'),
(250, 1, '<span>Profil bilgilerinizi</span> güncellediniz.', 'onay', '2021-11-24 09:56:15'),
(251, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 09:57:00'),
(252, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-24 08:01:38'),
(253, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:28'),
(254, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:30'),
(255, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:41'),
(256, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:43'),
(257, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:44'),
(258, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:44'),
(259, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:44'),
(260, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:44'),
(261, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:44'),
(262, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:44'),
(263, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:44'),
(264, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:44'),
(265, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:49'),
(266, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:50'),
(267, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:50'),
(268, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:50'),
(269, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:50'),
(270, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:51'),
(271, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:51'),
(272, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:51'),
(273, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:51'),
(274, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:04:51'),
(275, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:51'),
(276, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:04:59'),
(277, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:00'),
(278, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:00'),
(279, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:01'),
(280, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:01'),
(281, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:01'),
(282, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:01'),
(283, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:01'),
(284, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:01'),
(285, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:01'),
(286, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:02'),
(287, 1, '<span>bmbhöjblön</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-11-24 10:05:03'),
(288, 1, '<span>bmbhöjblön</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-11-24 10:05:04'),
(289, 1, '<span>deneme kullanıcı</span> adlı kişi sizin referanslınız ile sitemize üye oldu. Katkınız için teşekkür ederiz.', 'referans', '2021-11-27 21:02:28'),
(290, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-30 15:29:09'),
(291, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-30 16:43:51'),
(292, 1, '<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.', 'onay', '2021-11-30 16:50:04'),
(293, 1, '<span>Profil bilgilerinizi</span> güncellediniz.', 'onay', '2021-11-30 19:16:11'),
(294, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-05 22:09:54'),
(295, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-05 22:09:54'),
(296, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-05 22:09:55'),
(297, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-05 22:09:56'),
(298, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:30'),
(299, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:31'),
(300, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:32'),
(301, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:33'),
(302, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:38'),
(303, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:39'),
(304, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:40'),
(305, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:40'),
(306, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:41'),
(307, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:41'),
(308, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:41'),
(309, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:41'),
(310, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:42'),
(311, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:43'),
(312, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:43'),
(313, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:43'),
(314, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:44'),
(315, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:44'),
(316, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:44'),
(317, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:44'),
(318, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:44'),
(319, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:44'),
(320, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:45'),
(321, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:45'),
(322, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:47'),
(323, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:48'),
(324, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:49'),
(325, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-13 10:45:49'),
(326, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:50'),
(327, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-13 10:45:50'),
(328, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:58:56'),
(329, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:58:59'),
(330, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:13'),
(331, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:14'),
(332, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:15'),
(333, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:15'),
(334, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:16'),
(335, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:17'),
(336, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:17'),
(337, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:17'),
(338, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:17'),
(339, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:17'),
(340, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:17'),
(341, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:17'),
(342, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:22'),
(343, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:26'),
(344, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:28'),
(345, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:32'),
(346, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:33'),
(347, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:35'),
(348, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:42'),
(349, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:50'),
(350, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:51'),
(351, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:58'),
(352, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-20 23:59:59'),
(353, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-20 23:59:59'),
(354, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:00'),
(355, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:01'),
(356, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:01'),
(357, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:02'),
(358, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:03'),
(359, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:08'),
(360, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:08'),
(361, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:09'),
(362, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:10'),
(363, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:10'),
(364, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:11'),
(365, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:11'),
(366, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:12'),
(367, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:12'),
(368, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:00:13'),
(369, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:13'),
(370, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:00:18'),
(371, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:01:44'),
(372, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:01:52'),
(373, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-21 00:02:14'),
(374, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-21 00:02:16'),
(375, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 11:26:10'),
(376, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 11:26:26'),
(377, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 11:26:29'),
(378, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:01'),
(379, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:30'),
(380, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:18:31'),
(381, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:32'),
(382, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:32'),
(383, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:18:33'),
(384, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:33'),
(385, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:18:33'),
(386, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:18:33'),
(387, 1, '<span>Yeni bir ilan</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:18:33'),
(388, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:18:44'),
(389, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:19:24'),
(390, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:19:25'),
(391, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:19:25'),
(392, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:19:26'),
(393, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:20:24'),
(394, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 12:20:29'),
(395, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 12:20:49'),
(396, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 13:08:25'),
(397, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 13:08:25'),
(398, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 13:13:12'),
(399, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 13:13:12'),
(400, 1, '<span>annen</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2021-12-29 13:13:13'),
(401, 1, '<span>annen</span> adlı ilanı favoriye eklediniz.', 'favori', '2021-12-29 13:13:13'),
(402, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2022-01-01 21:57:33'),
(403, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriye eklediniz.', 'favori', '2022-01-01 21:57:34'),
(404, 1, '<span>wgqgqweqwd</span> adlı ilanı favoriden kaldırdınız.', 'unfavori', '2022-01-01 21:57:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `avukatlar`
--

CREATE TABLE `avukatlar` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `avukatlar`
--

INSERT INTO `avukatlar` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `yildiz`, `state`, `rownumber`, `date`) VALUES
(1, 'AKILLAR HUKUK BÜROSU', 'akillar-hukuk-burosu', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz.</span><br></p>', NULL, '0532 167 09 13', 'Çukur Mah. Dr. Mecit Barlas Cad. 6 Suburcu İş Merkezi Kat:2 Şahinbey 27010, Gaziantep', 'av.abdulkadirakillar@gmail.com', '37.19533036474533', '37.42007070968164', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz.', 0, 1, 1, '2021-10-31'),
(2, 'Ertuğrul Şimşek', 'ertugrul-simsek', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0533 161 71 21', 'Çukur Mah. İsmail Say Sk. Ömer Yetkin İş Merkezi, Çukur, D:Kat:4 Daire:14, 27000 Şahinbey/Gaziantep', 'ertugrul.simsek@gmail.com', '37.0624674', '37.3811928', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 2, '2021-10-31'),
(3, 'Onur İldokuz', 'onur-ildokuz', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0541 565 27 17', 'Mücahitler Mahallesi 43 nolu sokak Mehmet Karagülle İş Merkezi 2/34, Mücahitler, 27000 Şehitkamil/Gaziantep', 'onur.ildokuz@gmail.com', '37.076871', '37.3639673', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 3, '2021-10-31'),
(4, 'Harun Kahraman', 'harun-kahraman', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 321 08 05', 'Emek, 22035 Nolu Sok. Orkide Apt. No:3 D:7, 27590 Şehitkamil/Gaziantep', 'harun.kahraman@gmail.com', '37.09314', '37.373271', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 4, '2021-10-31'),
(5, 'Uğur Kahraman', 'ugur-kahraman', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, 'eklenecek', 'Fatih Mah, Fevzi Çakmak Blv. No:13, 27010 Şehitkamil/Gaziantep,', 'ugur.kahraman@gmail.com', '37.0623864', '37.3640018', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 5, '2021-10-31'),
(6, 'Halil Hakan Arslan', 'halil-hakan-arslan', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 232 34 55', 'Çukur, Güllüoğlu Sok. Büdeyri İş Hanı No:4 D:16, 27010 Şahinbey/Gaziantep', 'halil.hakan.arslan@gmail.com', '37.062309', '37.380541', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 6, '2021-10-31'),
(7, 'Ceren Emre', 'ceren-emre', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0553 393 86 42', 'İncili Pınar, 27090 Şehitkamil/Gaziantep', 'ceren.emre@gmail.com', '37.0698793', '37.3750656', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 7, '2021-10-31'),
(8, 'Öztürkmen Hukuk Bürosu', 'ozturkmen-hukuk-burosu', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 220 63 76', 'Tışlaki, Hürriyet Cad./ibrahim Söylemez Sok. Halit Sarı İş Merkezi No:2 D:32, 27400 Şahinbey/Gaziantep', 'ozturkmen@gmail.com', '37.065604', '37.3862803', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 8, '2021-10-31'),
(9, 'Atilla Kasapoğlu Avukatlık Bürosu', 'atilla-kasapoglu-avukatlik-burosu', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 221 16 19', 'Çukur, Dr. Mecit Barlas Cad. Suburcu İş Merkezi D:12, 27010 Şahinbey/Gaziantep', 'atilla@gmail.com', '37.063107', '37.380399', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 9, '2021-10-31'),
(10, 'H. Kenan Kocager', 'h-kenan-kocager', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 322 20 32', 'Ulus, 72038. Sk. No:14, 27090 Şehitkamil/Gaziantep, Turkey', 'kenan@gmail.com', '37.0622', '37.380351', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 10, '2021-10-31'),
(11, 'Adalet Çınğı', 'adalet-cingi', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 322 27 40', 'Fatih Mahallesi 22013 Nolu Sokak No:1 Güllüoğlu Apt.K:5, Fatih, D:10, 27060 Şehitkamil/Gaziantep', 'adalet@gmail.com', '37.0861027', '37.3510922', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 11, '2021-10-31'),
(12, 'Ahmet Bozbaş', 'ahmet-bozbas', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0507 343 51 49', 'Fatih Mahallesi Kamuran Yılmazer Caddesi Soysüren Plaza Kat:2 Daire:10, Fatih, 27060 Şehitkamil/Gaziantep', 'ahmet.bozbas@gmail.com', '37.0853758', '37.3499772', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 12, '2021-10-31'),
(13, 'Emine Sevil Koyuncu', 'emine-sevil-koyuncu', 4, '<p><span style=\\\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-style: italic;\\\">Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz</span><br></p>', NULL, '0342 321 37 27', 'Fatih Mahallesi Fevzi Çakmak Bulvarı No:145 (Adliye Tramvay Karşısı) Kat: 1 No: 6, Fatih, 27060 Şehitkamil/Gaziantep,', 'wqdk@gmail.com', '37.085672', '37.3509376', 'Gaziantep Avukatlar, Avukatlar, HUKUK BÜROSU, BÜRO, DAVA, Boşanma, Avukat, Avukatlar', 'Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 0, 1, 13, '2021-10-31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayakkabivederimagazalari`
--

CREATE TABLE `ayakkabivederimagazalari` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgisayarinternet`
--

CREATE TABLE `bilgisayarinternet` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`ID`, `title`, `seflink`, `category`, `kategori`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `likes`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'E-Gaziantep Sitesi Nedir? Ne işe yarar?', 'e-gaziantep-sitesi-nedir-ne-ise-yarar', 3, 'Rehber', '<p></p><p>E-Gaziantep sitesi bir rehber sitesidir. Burada&nbsp;<span style=\\\"font-weight: bolder;\\\"><span style=\\\"background-color: rgb(181, 99, 8);\\\">Gaziantep</span>&nbsp;</span>ile ilgili tüm her şeyi bulabilirsiniz. Turistik yerlerden tutun çeşitli mağazalara kadar bütün detaylarıyla sitede mevcuttur.</p><p>Sitemizin amacı&nbsp;<span style=\\\"font-weight: bolder;\\\"><span style=\\\"background-color: rgb(181, 99, 8);\\\">Gaziantep</span>&nbsp;&nbsp;</span>şehrini olarak önce Türkiyede daha sonra da Dünyada tanınan bir şehir haline getirmektir. Tabi ki önce kendi ülkemizde başlamak istedik :)&nbsp;</p><p>Merak ettiğiniz bütün her şeyi sitede bulabilir ve ayrıca bulamadığınız bir şeyi&nbsp; <a href=\\\"iletisim\\\" target=\\\"_blank\\\">iletişim</a>&nbsp;kısmından bize sorabilirsiniz.</p><p><br></p><p><br></p><h3 style=\\\"font-family: \\\" source=\\\"\\\" sans=\\\"\\\" pro\\\",=\\\"\\\" -apple-system,=\\\"\\\" blinkmacsystemfont,=\\\"\\\" \\\"segoe=\\\"\\\" ui\\\",=\\\"\\\" roboto,=\\\"\\\" \\\"helvetica=\\\"\\\" neue\\\",=\\\"\\\" arial,=\\\"\\\" sans-serif,=\\\"\\\" \\\"apple=\\\"\\\" color=\\\"\\\" emoji\\\",=\\\"\\\" ui=\\\"\\\" symbol\\\";=\\\"\\\" color:=\\\"\\\" rgb(0,=\\\"\\\" 0,=\\\"\\\" 0);\\\"=\\\"\\\">Sağlıklı Günler Dileriz.</h3><p><br></p><h2 style=\\\"font-family: \\\" source=\\\"\\\" sans=\\\"\\\" pro\\\",=\\\"\\\" -apple-system,=\\\"\\\" blinkmacsystemfont,=\\\"\\\" \\\"segoe=\\\"\\\" ui\\\",=\\\"\\\" roboto,=\\\"\\\" \\\"helvetica=\\\"\\\" neue\\\",=\\\"\\\" arial,=\\\"\\\" sans-serif,=\\\"\\\" \\\"apple=\\\"\\\" color=\\\"\\\" emoji\\\",=\\\"\\\" ui=\\\"\\\" symbol\\\";=\\\"\\\" color:=\\\"\\\" rgb(0,=\\\"\\\" 0,=\\\"\\\" 0);\\\"=\\\"\\\"><span style=\\\"font-weight: bolder;\\\">TeamSoft Devs Ekibi</span></h2><p></p>', '1617f02d762d55.jpg', 'TeamSoft Devs', 'Karataş mh 548.sk no:3 Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '0', '0', 0, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Şahinbey Avukatlar, Boşanma Davaları, Ceza Davaları, Tazminat Davaları, İdari Davalar, İş Davaları, Sigorta Hukuku Davaları, Miras Davaları, Taşınmaz Davaları, İcra ve İflas Hukuku Hizmeti Vermekteyiz', 1, 1, '2021-10-31'),
(2, 'Siteye nasıl ilan eklerim? Ne yapmalıyım?', 'siteye-nasil-ilan-eklerim-ne-yapmaliyim', 3, 'Rehber', '<p>Sitemize ilan eklemek mi istiyorsun. Bu oldukça basit. Yapmanız gereken tek şey bize bir e-posta göndermek. </p><h4><b>Peki nasıl e-posta göndereceğim?</b></h4><p>E-posta göndermek için ister iletişim kısmından, isterseniz bilgi@e-gantep.com e-posta adresine gönderebilirsiniz.</p><h4><b>E-posta adresine ne göndereceğim?</b></h4><p>E-posta adresinin Konu(Başlık) kısmına \\\"İlan Başvuru\\\" yazıp Body(Mesaj) kısmına ise \\\"Şirket(veya şahıs) ismi,  Adres, Telefon, Sektör(Eğlence,Avukat vb.), E-posta adresi\\\" bilgilerinizi yazarak gönderin.</p><h4><b>İlanımı ekledim peki nasıl panoya ilan veririm?</b></h4><p>E-Gaziantep panosuna ilan verebilmek için krediye ihtiyacınız var. Bütün şirket ve şahıslar kendi hesaplarına kredi alarak panoya ilan/reklam verebilirler.</p><h4><b>Her şey güzel de nasıl kredi alacağım?</b></h4><p>Kredi alabilmek için de önce üyeliğinizin olması gerekir. Eğer üye iseniz bize e-posta veya telefon yoluyla ulaşıp kredi satın alabilirsiniz.</p><p><br></p>', '1617f084b41809.jpg', 'TeamSoft Devs', 'Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '0', '0', 0, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 1, 2, '2021-10-31'),
(3, 'Gaziantep\'te üniversite okumak istiyorum, Üniversiteler iyi midir?', 'gaziantep-te-universite-okumak-istiyorum-universiteler-iyi-midir', 3, 'Eğitim', '<p><font color=\\\"#c0392b\\\">Gaziantep\'te üniversite okumak istiyorsanız gerçekten sizin adınıza mutlu oluruz. Gaziantep ilimizdeki üniversiteler; gerek hocalar bakımından, gerek çevre bakımından gerçekten Türkiye\'nin sayılı üniversiteleridir. Üniversiteler hakkında detaylı bilgiler için ana sayfada </font><font color=\\\"#ffd663\\\">Üniversiteler </font><font color=\\\"#c0392b\\\">kısmından daha fazla bilgi alabilirsiniz.</font></p>', '1617f0aa1816e6.jpg', 'TeamSoft Devs', 'Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '0', '0', 0, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 1, 3, '2021-10-31'),
(4, 'Gaziantep\'te üniversite okumak istiyorum, Üniversiteler iyi midir?', 'qwdwqfqsdvsdvsdgsdfsdfdsfsdfsdfsdfsdffqwhashashadsvsdsgsdvxcvgaziantep-te-universite-okumak-istiyorum-universiteler-iyi-midir', 3, 'Eğitim', '<p><font color=\\\"#c0392b\\\">Gaziantep\'te üniversite okumak istiyorsanız gerçekten sizin adınıza mutlu oluruz. Gaziantep ilimizdeki üniversiteler; gerek hocalar bakımından, gerek çevre bakımından gerçekten Türkiye\'nin sayılı üniversiteleridir. Üniversiteler hakkında detaylı bilgiler için ana sayfada </font><font color=\\\"#ffd663\\\">Üniversiteler </font><font color=\\\"#c0392b\\\">kısmından daha fazla bilgi alabilirsiniz.</font></p>', NULL, 'TeamSoft Devs', 'Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', 'fqfqf', 'wqfqfq', NULL, 'fwqqwfwqf', 'qwfqwfqwf', 1, 4, '2021-11-01'),
(5, 'Siteye nasıl ilan eklerim? Ne yapmalıyım?', 'siteye-nasil-ilan-eklerim-ne-yapmaliyim', 3, 'Rehber', '<p><font color=\\\"#c0392b\\\">Gaziantep\'te üniversite okumak istiyorsanız gerçekten sizin adınıza mutlu oluruz. Gaziantep ilimizdeki üniversiteler; gerek hocalar bakımından, gerek çevre bakımından gerçekten Türkiye\'nin sayılı üniversiteleridir. Üniversiteler hakkında detaylı bilgiler için ana sayfada </font><font color=\\\"#ffd663\\\">Üniversiteler </font><font color=\\\"#c0392b\\\">kısmından daha fazla bilgi alabilirsiniz.</font></p>', NULL, 'TeamSoft Devs', 'Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '37.076871', '37.3639673', NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Kaliteli T-shirtler için sitemize bakabilirsiniz.', 1, 5, '2021-11-01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogyorum`
--

CREATE TABLE `blogyorum` (
  `ID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `blogID` int(11) DEFAULT NULL,
  `yorum` text DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blogyorum`
--

INSERT INTO `blogyorum` (`ID`, `userID`, `blogID`, `yorum`, `state`, `date`) VALUES
(1, 1, 1, 'asgqwgqwqwdqwd', 1, '2021-12-20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `tables` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` int(11) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`ID`, `title`, `seflink`, `tables`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(2, 'Rehber', 'rehber', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(3, 'Blog', 'blog', 'module', NULL, 5, 1, NULL, '2021-10-06'),
(4, 'Avukatlar', 'avukatlar', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(5, 'Eğitim', 'egitim', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(6, 'Ev ve İşyeri İhtiyaçları', 'evveisyeriihtiyaclari', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(7, 'Giyim Tekstil', 'giyimtekstil', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(8, 'Kırtasiye Kopyalama', 'kirtasiyekopyalama', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(9, 'Mücevher ve Takı', 'mucevhervetaki', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(10, 'Organizasyon Hediyelik', 'organizasyonhediyelik', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(11, 'Sağlık', 'saglik', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(12, 'Yiyecek Gıda', 'yiyecekgida', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(13, 'Ayakkabı ve Deri Mağazaları', 'ayakkabivederimagazalari', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(14, 'Elektronik', 'elektronik', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(15, 'Finansal Hizmetler', 'finansalhizmetler', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(16, 'Hobi Spor', 'hobispor', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(17, 'Kargo ve Nakliyat', 'kargovenakliyat', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(18, 'Mimarlar ve Mühendisler', 'mimarlarvemuhendisler', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(19, 'Otomotiv Ulaşım', 'otomotivulasim', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(20, 'Tarım', 'tarim', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(21, 'Bilgisayar İnternet', 'bilgisayarinternet', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(22, 'Emlakçılar', 'emlakcilar', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(23, 'Güzellik ve Bakım', 'guzellikvebakim', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(24, 'İnşaat Yapı', 'insaatyapi', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(25, 'Kurumlar', 'kurumlar', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(26, 'Mobilya ve Ev Tekstili', 'mobilyaveevtekstili', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(27, 'Reklam Basım Yayıncılık', 'reklambasimyayincilik', 'module', NULL, NULL, 1, NULL, '2021-10-06'),
(28, 'Popüler Mekanlar', 'populermekanlar', 'module', NULL, NULL, 1, NULL, '2021-11-10'),
(29, 'Reklamlar', 'reklamlar', 'module', NULL, NULL, 1, NULL, '2021-11-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elektronik`
--

CREATE TABLE `elektronik` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emlakcilar`
--

CREATE TABLE `emlakcilar` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evveisyeriihtiyaclari`
--

CREATE TABLE `evveisyeriihtiyaclari` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `evveisyeriihtiyaclari`
--

INSERT INTO `evveisyeriihtiyaclari` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `yildiz`, `state`, `rownumber`, `date`) VALUES
(1, 'Uğurlu Çeyiz', 'ugurlu-ceyiz', 6, '<p>Uğurlu Çeyiz Gaziantep\\\'in en meşhuru</p>', NULL, '05380293758', 'Karataş mh 548.sk no:3 Şahinbey/Gaziantep', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Uğurlu Çeyiz', 0, 1, 1, '2021-10-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriilanlar`
--

CREATE TABLE `favoriilanlar` (
  `ID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `ilanID` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `favoriilanlar`
--

INSERT INTO `favoriilanlar` (`ID`, `userID`, `ilanID`, `date`) VALUES
(69, 1, 13, '2021-12-29'),
(77, 1, 1, '2021-12-29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favorimekanlar`
--

CREATE TABLE `favorimekanlar` (
  `ID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `mekanID` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `finansalhizmetler`
--

CREATE TABLE `finansalhizmetler` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giyimtekstil`
--

CREATE TABLE `giyimtekstil` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `giyimtekstil`
--

INSERT INTO `giyimtekstil` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `yildiz`, `state`, `rownumber`, `date`) VALUES
(1, 'Lc Waikiki', 'lc-waikiki', 7, '<p>Lc Waikiki</p>', NULL, '05380293758', 'Gaziantep/Turkey', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Lc Waikiki', 0, 1, 1, '2021-10-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `guzellikvebakim`
--

CREATE TABLE `guzellikvebakim` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 1, '<h2 style=\\\"margin: 20px 0px; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-size: 1.2rem; text-align: justify;\\\">Nedir?</h2><p style=\\\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;\\\">E-Gaziantep, Gaziantep ve çevresine ait Gaziantep rehberi ile başlayan bir projedir. Gaziantep rehberi, e-gaziantep\\\'in sadece bir kısmını oluşturur, Son Dakika Gaziantep Haberleri ise Gaziantep hakkında haber yayınlayan ulusal veya yerel sitelerden toplanarak, kaynakları gösterilerek yayınlanır.</p><p style=\\\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;\\\"><br></p><h2 style=\\\"margin: 20px 0px; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-size: 1.2rem; text-align: justify;\\\">Kim Yapar?</h2><p style=\\\"font-family: Roboto, sans-serif; text-align: justify;\\\"><font color=\\\"#333333\\\">E-Gaziantep web sitesi, Gaziantep&nbsp;</font><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem;\\\">ve çevresinde web tasarım ve internet hizmetleri veren&nbsp;</span><a class=\\\"kirmizi\\\" target=\\\"_blank\\\" href=\\\"http://www.bilya.net/\\\" rel=\\\"noopener noreferrer\\\" style=\\\"color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-size: 1rem; touch-action: manipulation;\\\">T</a><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem;\\\">eamSoft Devs ekibi tarafından hazırlanmıştır. TeamSoft Devs Web Tasarım\\\'ın oluşturacağı&nbsp;</span><span style=\\\"font-weight: bolder; font-size: 1rem;\\\"><span style=\\\"background-color: rgb(255, 255, 0);\\\">e-gaziantep</span><font color=\\\"#333333\\\">&nbsp;</font></span><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem;\\\">sisteminin ilk sitesi www.e-gaziantep.com\\\'dur. Gaziantep ve çevresinde internet sayfası, web tasarımı, kurumsal kimlik logo gibi internet ve multimedya hizmetleri için&nbsp;</span><a href=\\\"http://www.bilya.net/\\\" target=\\\"_blank\\\" class=\\\"kirmizi\\\" rel=\\\"noopener noreferrer\\\" style=\\\"color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-size: 1rem; touch-action: manipulation;\\\">bilya.net</a><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem;\\\">&nbsp;web sitesini ziyaret edebilirsiniz. Bize ulaşmak için&nbsp;</span><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem; font-weight: bolder;\\\">0538 029 3758&nbsp;</span><span style=\\\"color: rgb(51, 51, 51); font-size: 1rem;\\\">telefonunu kullanabilirsiniz.</span></p><p style=\\\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;\\\"><br></p><h2 style=\\\"margin: 20px 0px; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-size: 1.2rem; text-align: justify;\\\">Neden Yapar?</h2><p style=\\\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;\\\">E-Gaziantep\\\'i neden yaptık? Cevap basit: İhtiyacımız var! Gaziantepliyiz, Gaziantep\\\'te yaşıyoruz, işimiz gücümüz internet, bir firma arıyoruz, bulamıyoruz, bulsak bile sadece tel veya adres ile tam bir bilgi alamıyoruz, alamıyorduk. E-Gaziantep&nbsp;her Gazianteplinin ihtiyacını karşılayan bir site olma misyonu ile Gaziantep ve çevresinde tüm ihtiyaçların internet çözümlerini barındırıyor ve bundan sonra gelişerek barındıracak.</p>', NULL, '', '', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'E-Gaziantep Rehberi ve Hakkımızda', 1, 1, '2021-10-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hobispor`
--

CREATE TABLE `hobispor` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanyorumlar`
--

CREATE TABLE `ilanyorumlar` (
  `ID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `ilanID` int(11) DEFAULT NULL,
  `toID` int(11) DEFAULT NULL,
  `puan` int(11) DEFAULT NULL,
  `yorum` text DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ilanyorumlar`
--

INSERT INTO `ilanyorumlar` (`ID`, `userID`, `ilanID`, `toID`, `puan`, `yorum`, `state`, `date`) VALUES
(1, 1, 2, 1, 3, 'wfqfqwdqwd', 1, '2021-11-15'),
(2, 1, 2, 1, 5, 'asfasfasdasd', 1, '2021-11-15'),
(3, 1, 1, 1, 5, 'Efsane amk', 1, '2021-11-15'),
(4, 2, 3, 1, 2, 'Süper sistem', 1, '2021-11-15'),
(5, 1, 2, 1, 4, 'Gayet güzel bir mekan başarılı.', 1, '2021-11-16'),
(6, 1, 2, 1, 1, '1234', 1, '2021-11-24'),
(7, 1, 2, 1, 3, 'hello', 1, '2021-11-30'),
(8, 1, 1, 1, 5, 'Senin yapacağın sitenin alnından öperim. Eline Sağlık', 1, '2022-01-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `insaatyapi`
--

CREATE TABLE `insaatyapi` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargovenakliyat`
--

CREATE TABLE `kargovenakliyat` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kirtasiyekopyalama`
--

CREATE TABLE `kirtasiyekopyalama` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(11) NOT NULL,
  `isimsoyisim` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `showemail` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `smscode` int(100) DEFAULT NULL,
  `smsstate` int(11) DEFAULT NULL,
  `gorev` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `panotime` int(11) DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `followers` int(100) DEFAULT NULL,
  `viewers` int(100) DEFAULT NULL,
  `puan` int(11) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `referans_kod` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp(),
  `state` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `isimsoyisim`, `seflink`, `email`, `showemail`, `website`, `password`, `telefon`, `smscode`, `smsstate`, `gorev`, `yildiz`, `panotime`, `adress`, `skills`, `notes`, `twitter`, `facebook`, `instagram`, `let`, `lng`, `image`, `followers`, `viewers`, `puan`, `verification_code`, `email_verified_at`, `referans_kod`, `status`, `online`, `last_seen`, `state`, `date`) VALUES
(1, 'İbrahim Halil Oğlakcı', 'ibrahim-halil-oglakci', 'teamplayzibrahim@gmail.com', 'bilgi@e-gantep.com', 'e-gantep.com', '25f9e794323b453885f5181f1b624d0b', '05380293758', 625138, 2, 'ADMIN', 5, 99, 'Yeşilevler mahallesi 77103 sk', 'ADMIN', 'Harika bir developer', 'https://twitter.com/oglakcibey', NULL, 'https://instagram.com/ibrahim.oglakci', NULL, NULL, 'g.png', 0, 5, 2, '345216', '2021-10-21 00:00:00', 666666, 'ALTIN', NULL, '2021-11-18 14:12:47', 1, '2021-11-11'),
(2, 'Mecit Ersen Yılmaz', 'mecit-ersen-yilmaz', 'asdasd@gmail.com', NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', '05380293758', NULL, NULL, 'ADMIN', NULL, 99, 'qwqwfqwfqwe', 'Admin', 'Harika bir tasarımcı', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 100, '192941', '2021-10-31 00:00:00', NULL, NULL, NULL, '2021-11-18 14:12:47', 1, '2021-11-11'),
(3, 'Halil Haydar Ay', 'halil-haydar-ay', 'halilhaydaray@gmail.com', NULL, NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '266884', '2021-11-25 00:00:00', 932832, 'KULLANICI', NULL, '2021-11-25 19:19:04', 1, '2021-11-25'),
(4, 'deneme kullanıcı', 'deneme kullanıcı', 'asdasdasfasf@gmail.com', NULL, NULL, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '537111', '2021-11-27 21:02:53', 562624, 'KULLANICI', NULL, '2021-11-27 21:02:27', 1, '2021-11-27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumlar`
--

CREATE TABLE `kurumlar` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mimarlarvemuhendisler`
--

CREATE TABLE `mimarlarvemuhendisler` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mobilyaveevtekstili`
--

CREATE TABLE `mobilyaveevtekstili` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modules`
--

CREATE TABLE `modules` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tables` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `modules`
--

INSERT INTO `modules` (`ID`, `title`, `tables`, `state`, `date`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 1, '2021-10-06'),
(2, 'Rehber', 'rehber', 1, '2021-10-06'),
(3, 'Blog', 'blog', 1, '2021-10-06'),
(4, 'Avukatlar', 'avukatlar', 1, '2021-10-06'),
(5, 'Eğitim', 'egitim', 1, '2021-10-06'),
(6, 'Ev ve İşyeri İhtiyaçları', 'evveisyeriihtiyaclari', 1, '2021-10-06'),
(7, 'Giyim Tekstil', 'giyimtekstil', 1, '2021-10-06'),
(8, 'Kırtasiye Kopyalama', 'kirtasiyekopyalama', 1, '2021-10-06'),
(9, 'Mücevher ve Takı', 'mucevhervetaki', 1, '2021-10-06'),
(10, 'Organizasyon Hediyelik', 'organizasyonhediyelik', 1, '2021-10-06'),
(11, 'Sağlık', 'saglik', 1, '2021-10-06'),
(12, 'Yiyecek Gıda', 'yiyecekgida', 1, '2021-10-06'),
(13, 'Ayakkabı ve Deri Mağazaları', 'ayakkabivederimagazalari', 1, '2021-10-06'),
(14, 'Elektronik', 'elektronik', 1, '2021-10-06'),
(15, 'Finansal Hizmetler', 'finansalhizmetler', 1, '2021-10-06'),
(16, 'Hobi Spor', 'hobispor', 1, '2021-10-06'),
(17, 'Kargo ve Nakliyat', 'kargovenakliyat', 1, '2021-10-06'),
(18, 'Mimarlar ve Mühendisler', 'mimarlarvemuhendisler', 1, '2021-10-06'),
(19, 'Otomotiv Ulaşım', 'otomotivulasim', 1, '2021-10-06'),
(20, 'Tarım', 'tarim', 1, '2021-10-06'),
(21, 'Bilgisayar İnternet', 'bilgisayarinternet', 1, '2021-10-06'),
(22, 'Emlakçılar', 'emlakcilar', 1, '2021-10-06'),
(23, 'Güzellik ve Bakım', 'guzellikvebakim', 1, '2021-10-06'),
(24, 'İnşaat Yapı', 'insaatyapi', 1, '2021-10-06'),
(25, 'Kurumlar', 'kurumlar', 1, '2021-10-06'),
(26, 'Mobilya ve Ev Tekstili', 'mobilyaveevtekstili', 1, '2021-10-06'),
(27, 'Reklam Basım Yayıncılık', 'reklambasimyayincilik', 1, '2021-10-06'),
(28, 'Popüler Mekanlar', 'populermekanlar', 1, '2021-11-10'),
(29, 'Reklamlar', 'reklamlar', 1, '2021-11-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mucevhervetaki`
--

CREATE TABLE `mucevhervetaki` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `organizasyonhediyelik`
--

CREATE TABLE `organizasyonhediyelik` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otomotivulasim`
--

CREATE TABLE `otomotivulasim` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pano`
--

CREATE TABLE `pano` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `seflink` varchar(500) DEFAULT NULL,
  `onlinestate` int(11) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `yildiz` int(11) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `kredikart` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `parkyeri` varchar(255) DEFAULT NULL,
  `engelliyeri` varchar(255) DEFAULT NULL,
  `hayvandurum` varchar(255) DEFAULT NULL,
  `alkol` varchar(255) DEFAULT NULL,
  `openedtime` varchar(255) DEFAULT NULL,
  `openeddays` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `endtime` date DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `pano`
--

INSERT INTO `pano` (`ID`, `title`, `text`, `seflink`, `onlinestate`, `fiyat`, `yildiz`, `rank`, `name`, `kredikart`, `wifi`, `parkyeri`, `engelliyeri`, `hayvandurum`, `alkol`, `openedtime`, `openeddays`, `image`, `endtime`, `state`, `date`) VALUES
(1, 'annen', 'annen', 'wqfwqfwqdad', 1, '100.90', 2, 'Avukatlar', 'İbrahim Halil Oğlakcı', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-30', 2, '2021-11-14'),
(2, 'wgqgqweqwd', 'sgasgqhqwhqwhash', 'wgqgqweqwd', 0, '55.45', 4, 'ADMIN', 'İbrahim Halil Oğlakcı', 'true', 'true', 'true', 'true', 'true', NULL, '08:30 - 21:00', 'Hafta içi ve Cumartesi günü', NULL, '2021-11-29', 2, '2021-11-15'),
(4, 'Davada mükemmel fırsat', 'Her davada %10 indirim', 'davada-mukemmel-firsat', NULL, NULL, 0, 'Avukatlar', 'Halil Haydar Ay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-11-11'),
(6, 'asfadfasf', 'asfasfasd', 'asfadfasf', NULL, NULL, 0, 'Avukatlar', 'Halil Haydar Ay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-11-11'),
(7, 'fwqwqfwqf', 'qwfqfqwfwq', 'fwqwqfwqf', NULL, NULL, 0, 'Avukatlar', 'Halil Haydar Ay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-11-11'),
(13, 'Yeni bir ilan', 'her şey çok iyi', 'yeni-bir-ilan', NULL, NULL, 0, 'Avukatlar', 'İbrahim Halil Oğlakcı', 'false', 'true', 'true', 'false', 'true', 'true', '09:30 - 00:00', 'Hafta içi ve Hafta Sonu Her gün', NULL, NULL, 2, '2021-11-30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `populermekanlar`
--

CREATE TABLE `populermekanlar` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `onlinestate` int(11) NOT NULL,
  `yildiz` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `populermekanlar`
--

INSERT INTO `populermekanlar` (`ID`, `title`, `seflink`, `category`, `text`, `onlinestate`, `yildiz`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'sfawfqf', 'sfawfqf', 28, '<p>wqfqfqf</p>', 1, 3, NULL, '05380293758', 'Çukur Mah. İsmail Say Sk. Ömer Yetkin İş Merkezi, Çukur, D:Kat:4 Daire:14, 27000 Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '36.7858308', '37.3811928', 'qwfwqf', 'Şahinbey', 1, 1, '2021-11-10'),
(2, 'Anan', 'anan', 28, '<p>qwrqwfqwdf</p>', 0, 4, NULL, '05380293758', 'Karataş mh 548.sk no:3 Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '36.7858308', '37.42007070968164', 'Alışveriş Merkezi', 'Şehitkamil', 1, 2, '2021-11-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `ID` int(11) NOT NULL,
  `uyeID` int(11) DEFAULT NULL,
  `uyeolunanID` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`ID`, `uyeID`, `uyeolunanID`, `date`) VALUES
(1, 4, 1, '2021-11-27 18:02:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rehber`
--

CREATE TABLE `rehber` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `rehber`
--

INSERT INTO `rehber` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'Avukatlar', 'avukatlar', 2, '', '16170999a3b3c2.png', 'fas fa-gavel', '', '', '', '', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Avukatlar', 1, 1, '2021-10-21'),
(2, 'Eğitim', 'egitim', 2, '', '1617ecaaca37a0.png', 'fas fa-user-graduate', '', '', '', '', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Eğitim', 1, 2, '2021-10-31'),
(3, 'Ev ve İşyeri İhtiyaçları', 'ev-ve-isyeri-ihtiyaclari', 2, '', '1615da84ce7a97.jpg', 'fas fa-home', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Ev ve İşyeri İhtiyaçları', 1, 3, '2021-10-06'),
(4, 'Giyim Tekstil', 'giyim-tekstil', 2, '', NULL, 'fas fa-tshirt', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Giyim Tekstil', 1, 4, '2021-10-06'),
(5, 'Kırtasiye Kopyalama', 'kirtasiye-kopyalama', 2, '', NULL, 'fas fa-pencil-ruler', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Kırtasiye Kopyalama', 1, 5, '2021-10-06'),
(6, 'Mücevher ve Takı', 'mucevher-ve-taki', 2, '', NULL, 'fas fa-gem', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Mücevher ve Takı', 1, 6, '2021-10-06'),
(7, 'Organizasyon Hediyelik', 'organizasyon-hediyelik', 2, '', NULL, 'fas fa-gift', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Organizasyon Hediyelik', 1, 7, '2021-10-06'),
(8, 'Sağlık', 'saglik', 2, '', NULL, 'fas fa-heartbeat', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Sağlık', 1, 8, '2021-10-06'),
(9, 'Yiyecek Gıda', 'yiyecek-gida', 2, '', NULL, 'fas fa-pizza-slice', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Yiyecek Gıda', 1, 9, '2021-10-06'),
(10, 'Ayakkabı ve Deri Mağazaları', 'ayakkabi-ve-deri-magazalari', 2, '', NULL, 'fas fa-shoe-prints', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Ayakkabı ve Deri Mağazaları', 1, 10, '2021-10-06'),
(11, 'Elektronik', 'elektronik', 2, '', NULL, 'fas fa-charging-station', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Elektronik', 1, 11, '2021-10-06'),
(12, 'Finansal Hizmetler', 'finansal-hizmetler', 2, '', NULL, 'fas fa-money-bill-wave-alt', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Finansal Hizmetler', 1, 12, '2021-10-06'),
(13, 'Hobi Spor', 'hobi-spor', 2, '', NULL, 'fas fa-futbol', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Hobi Spor', 1, 13, '2021-10-06'),
(14, 'Kargo ve Nakliyat', 'kargo-ve-nakliyat', 2, '', NULL, 'fas fa-truck-moving', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Kargo ve Nakliyat', 1, 14, '2021-10-06'),
(15, 'Mimarlar ve Mühendisler', 'mimarlar-ve-muhendisler', 2, '', NULL, 'fas fa-pencil-alt', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Mimarlar ve Mühendisler', 1, 15, '2021-10-06'),
(16, 'Otomotiv Ulaşım', 'otomotiv-ulasim', 2, '', NULL, 'fas fa-car', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Otomotiv Ulaşım', 1, 16, '2021-10-06'),
(17, 'Tarım', 'tarim', 2, '', NULL, 'fas fa-tractor', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Tarım', 1, 17, '2021-10-06'),
(18, 'Bilgisayar İnternet', 'bilgisayar-internet', 2, '', NULL, 'fas fa-laptop', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Bilgisayar İnternet', 1, 18, '2021-10-06'),
(19, 'Emlakçılar', 'emlakcilar', 2, '', NULL, 'fas fa-laptop-house', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Emlakçılar', 1, 19, '2021-10-06'),
(20, 'Güzellik ve Bakım', 'guzellik-ve-bakim', 2, '', NULL, 'fas fa-cut', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Güzellik ve Bakım', 1, 20, '2021-10-06'),
(21, 'İnşaat Yapı', 'insaat-yapi', 2, '', NULL, 'fas fa-building', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'İnşaat Yapı', 1, 21, '2021-10-06'),
(22, 'Kurumlar', 'kurumlar', 2, '', NULL, 'fas fa-university', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Kurumlar', 1, 22, '2021-10-06'),
(23, 'Mobilya ve Ev Tekstili', 'mobilya-ve-ev-tekstili', 2, '', NULL, 'fas fa-couch', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Mobilya ve Ev Tekstili', 1, 23, '2021-10-06'),
(24, 'Reklam Basım Yayıncılık', 'reklam-basim-yayincilik', 2, '', NULL, 'fas fa-newspaper', '', NULL, NULL, NULL, 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Reklam Basım Yayıncılık', 1, 24, '2021-10-06'),
(25, 'Eğlence', 'eglence', 2, '<p>...</p>', NULL, 'fas fa-music', '', '', '', '', 'E-Gaziantep Reklam gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğit', 'Eğlence Bar', 1, 25, '2021-10-17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklambasimyayincilik`
--

CREATE TABLE `reklambasimyayincilik` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE `reklamlar` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reklamlar`
--

INSERT INTO `reklamlar` (`ID`, `title`, `seflink`, `category`, `text`, `image`, `phone`, `adress`, `email`, `let`, `lng`, `seo`, `description`, `state`, `rownumber`, `date`) VALUES
(1, 'Gaziantep Pide ve Lahmacun Salonu', 'gaziantep-pide-ve-lahmacun-salonu', 29, 'Gaziantepin En iyi yeri.', NULL, '05380293758', 'Şahinbey/Gaziantep', 'teamplayzibrahim@gmail.com', '37.09314', '37.3639673', 'gasdasgasdasdsafasf', 'Kaliteli T-shirtler için sitemize bakabilirsiniz.', 1, 1, '2021-11-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `ID` int(11) NOT NULL,
  `pano` varchar(255) DEFAULT NULL,
  `KID` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`ID`, `pano`, `KID`, `image`, `date`) VALUES
(1, 'ilan', 2, '1619270eb347df.png', '2021-11-15'),
(2, 'ilan', 2, '1619270eb46f10.png', '2021-11-15'),
(3, 'ilan', 2, '1619270eb752d3.png', '2021-11-15'),
(4, 'ilan', 2, '1619270eb9aad9.png', '2021-11-15'),
(5, 'ilan', 2, '1619270ebb9b16.png', '2021-11-15'),
(6, 'ilan', 2, '1619270ebc6cc1.png', '2021-11-15'),
(7, 'ilan', 2, '1619270ebd8997.png', '2021-11-15'),
(8, 'ilan', 2, '1619270ebe6f58.png', '2021-11-15'),
(9, 'ilan', 1, '1619271009107c.png', '2021-11-15'),
(10, 'ilan', 1, '161927100be84d.png', '2021-11-15'),
(11, 'ilan', 1, '16192710115e36.png', '2021-11-15'),
(12, 'ilan', 1, '1619271012ebe9.png', '2021-11-15'),
(13, 'ilan', 1, '1619271015dbb3.png', '2021-11-15'),
(14, 'ilan', 1, '16192710172f32.png', '2021-11-15'),
(15, 'ilan', 2, '16192a30011c1a.png', '2021-11-15'),
(16, 'ilan', 2, '16192a3002913b.png', '2021-11-15'),
(17, 'ilan', 2, '16192a30040383.png', '2021-11-15'),
(19, 'ilan', 8, '1619de3c84015d.png', '2021-11-24'),
(20, 'ilan', 8, '1619de3c85e338.png', '2021-11-24'),
(21, 'ilan', 8, '1619de3c87d08b.png', '2021-11-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saglik`
--

CREATE TABLE `saglik` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `title` varchar(160) DEFAULT NULL,
  `seo` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`ID`, `title`, `seo`, `description`, `phone`, `mail`, `adress`, `fax`, `url`) VALUES
(1, 'Anasayfa | E-Gaziantep', 'E-Gaziantep Reklam dürümcü aktar gaziantep, eczane nöbetçi eczaneler tarım finansal hizmetler spor kafe cafe ihtiyaç restorant ayakkabı deri mağaza alışveriş merkezi  Avukat indirim tarım mobilya kuaför güzellik bakım emlak emlakçı bilgisayar internet yiyecek gıda eğitim hobi spor elektronik telefon tablet online alışveriş shop dükkan', 'AdminPanel for all Website', '+905380293758', 'bilgi@e-gantep.com', 'Manavgat/Antalya Türkiye', '111111111111111', 'http://localhost/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarim`
--

CREATE TABLE `tarim` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `password`, `mail`, `image`, `date`) VALUES
(1, 'İbrahim Oğlakcı', 'ibrahim', '827ccb0eea8a706c4c34a16891f84e7b', 'teamplayzibrahim@gmail.com', '1615c4ef23b1ae.png', '2021-10-05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yiyecekgida`
--

CREATE TABLE `yiyecekgida` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seflink` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `let` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 0,
  `state` int(5) DEFAULT NULL,
  `rownumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aktivite`
--
ALTER TABLE `aktivite`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `avukatlar`
--
ALTER TABLE `avukatlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ayakkabivederimagazalari`
--
ALTER TABLE `ayakkabivederimagazalari`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `bilgisayarinternet`
--
ALTER TABLE `bilgisayarinternet`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `blogyorum`
--
ALTER TABLE `blogyorum`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `emlakcilar`
--
ALTER TABLE `emlakcilar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `evveisyeriihtiyaclari`
--
ALTER TABLE `evveisyeriihtiyaclari`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `favoriilanlar`
--
ALTER TABLE `favoriilanlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `favorimekanlar`
--
ALTER TABLE `favorimekanlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `finansalhizmetler`
--
ALTER TABLE `finansalhizmetler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `giyimtekstil`
--
ALTER TABLE `giyimtekstil`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `guzellikvebakim`
--
ALTER TABLE `guzellikvebakim`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `hobispor`
--
ALTER TABLE `hobispor`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ilanyorumlar`
--
ALTER TABLE `ilanyorumlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `insaatyapi`
--
ALTER TABLE `insaatyapi`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kargovenakliyat`
--
ALTER TABLE `kargovenakliyat`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kirtasiyekopyalama`
--
ALTER TABLE `kirtasiyekopyalama`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kurumlar`
--
ALTER TABLE `kurumlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mimarlarvemuhendisler`
--
ALTER TABLE `mimarlarvemuhendisler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mobilyaveevtekstili`
--
ALTER TABLE `mobilyaveevtekstili`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mucevhervetaki`
--
ALTER TABLE `mucevhervetaki`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `organizasyonhediyelik`
--
ALTER TABLE `organizasyonhediyelik`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `otomotivulasim`
--
ALTER TABLE `otomotivulasim`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `pano`
--
ALTER TABLE `pano`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `populermekanlar`
--
ALTER TABLE `populermekanlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `rehber`
--
ALTER TABLE `rehber`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `reklambasimyayincilik`
--
ALTER TABLE `reklambasimyayincilik`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `reklamlar`
--
ALTER TABLE `reklamlar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `saglik`
--
ALTER TABLE `saglik`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `tarim`
--
ALTER TABLE `tarim`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `yiyecekgida`
--
ALTER TABLE `yiyecekgida`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aktivite`
--
ALTER TABLE `aktivite`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Tablo için AUTO_INCREMENT değeri `avukatlar`
--
ALTER TABLE `avukatlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `ayakkabivederimagazalari`
--
ALTER TABLE `ayakkabivederimagazalari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `bilgisayarinternet`
--
ALTER TABLE `bilgisayarinternet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `blogyorum`
--
ALTER TABLE `blogyorum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `emlakcilar`
--
ALTER TABLE `emlakcilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `evveisyeriihtiyaclari`
--
ALTER TABLE `evveisyeriihtiyaclari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `favoriilanlar`
--
ALTER TABLE `favoriilanlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `favorimekanlar`
--
ALTER TABLE `favorimekanlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `finansalhizmetler`
--
ALTER TABLE `finansalhizmetler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `giyimtekstil`
--
ALTER TABLE `giyimtekstil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `guzellikvebakim`
--
ALTER TABLE `guzellikvebakim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hobispor`
--
ALTER TABLE `hobispor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ilanyorumlar`
--
ALTER TABLE `ilanyorumlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `insaatyapi`
--
ALTER TABLE `insaatyapi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kargovenakliyat`
--
ALTER TABLE `kargovenakliyat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kirtasiyekopyalama`
--
ALTER TABLE `kirtasiyekopyalama`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kurumlar`
--
ALTER TABLE `kurumlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mimarlarvemuhendisler`
--
ALTER TABLE `mimarlarvemuhendisler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mobilyaveevtekstili`
--
ALTER TABLE `mobilyaveevtekstili`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `modules`
--
ALTER TABLE `modules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `mucevhervetaki`
--
ALTER TABLE `mucevhervetaki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `organizasyonhediyelik`
--
ALTER TABLE `organizasyonhediyelik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `otomotivulasim`
--
ALTER TABLE `otomotivulasim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pano`
--
ALTER TABLE `pano`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `populermekanlar`
--
ALTER TABLE `populermekanlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `rehber`
--
ALTER TABLE `rehber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `reklambasimyayincilik`
--
ALTER TABLE `reklambasimyayincilik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reklamlar`
--
ALTER TABLE `reklamlar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `saglik`
--
ALTER TABLE `saglik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tarim`
--
ALTER TABLE `tarim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yiyecekgida`
--
ALTER TABLE `yiyecekgida`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
