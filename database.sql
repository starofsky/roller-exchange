-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2018 at 04:21 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `exchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `keys_settings` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `values_settings` text COLLATE utf8_unicode_ci NOT NULL,
  `globals` int(1) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `keys_settings`, `values_settings`, `globals`, `language`) VALUES
(1, 'api_server', '', 1, ''),
(2, 'api_name', '', 1, ''),
(3, 'api_key', '', 1, ''),
(4, 'http_auth', '', 1, ''),
(5, 'http_user', '', 1, ''),
(6, 'http_pass', '', 1, ''),
(7, 'ssl_verify_peer', '', 1, ''),
(8, 'ssl_cainfo', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `symbol`
--

CREATE TABLE `symbol` (
  `id` int(10) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `base` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `symbol`
--

INSERT INTO `symbol` (`id`, `icon`, `name`, `symbol`, `base`, `status`) VALUES
(1, '', 'Ethereum', 'ETH', 'BTC', 0),
(2, '/uploads/coind.png', 'Roller', 'ROL', 'BTC', 1),
(3, '/uploads/coind.png', 'Roller', 'ROL', 'USDT', 0),
(4, '/uploads/coind.png', 'Roller', 'ROL', 'ETH', 0),
(5, '/uploads/coind.png', 'Ethereum Classic', 'ETC', 'BTC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symbol`
--
ALTER TABLE `symbol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `symbol`
--
ALTER TABLE `symbol`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;