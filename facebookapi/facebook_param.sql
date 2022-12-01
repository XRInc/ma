-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2021-07-22 09:56:03
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr132bo-a`
--

-- --------------------------------------------------------

--
-- 表的结构 `facebook_param`
--

CREATE TABLE `facebook_param` (
  `f_id` int(8) NOT NULL,
  `f_title` text NOT NULL,
  `f_key` varchar(255) NOT NULL,
  `f_value` text NOT NULL,
  `f_group_id` int(11) NOT NULL,
  `f_added` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `sort_order` int(3) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `facebook_param`
--

INSERT INTO `facebook_param` (`f_id`, `f_title`, `f_key`, `f_value`, `f_group_id`, `f_added`, `sort_order`, `type`) VALUES
(1, 'facebook pixel像素编号', 'pixel_id', '1885369368304354', 1, '0001-01-01 00:00:00', 1, 0),
(2, 'facebook token访问令牌', 'facebook_token', 'EAArarkoEWIEBAKih0QzjLHhQSwagJ2R1TNtCfwNwgpvWMGCFAMkBPb9iu9cK44MfO5xWnXXA2eKIZCpFy6cOBJ0iTHenAdsAtwFilWPK4ViddWKTiU8ICqyhk9EjybLYaRRxvG8v0vqjWKtQEUZAn9bQExg4Az8gVR7KwCodnxXhgQ7I6w', 1, '0001-01-01 00:00:00', 2, 1),
(3, 'facebook webhook在线聊天令牌', 'hubVerifyToken', 'brkj930290477531776', 1, '0001-01-01 00:00:00', 3, 0),
(4, 'facebook token在线聊天访问令牌', 'facebook_accessToken', 'EAANOGCFzgoABAGRiVvlCJXnZBZCMHJ6UOxlbQc9z74rz5kGGtt2fcJhfqKQvT8xe9E8LkAZBPaCSXm6Aw0zhUCvYHokSouUWIswVt1CiqJblR8mdoNo8Y5hzDw5ES3cYPFRCMSsfsiNxjMHgz71L6FN68kH5yT8wc7sCShZAl1gO7NKzw8uspKUis3W70OxwSneB1TiRQQZDZD', 1, '0001-01-01 00:00:00', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facebook_param`
--
ALTER TABLE `facebook_param`
  ADD PRIMARY KEY (`f_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `facebook_param`
--
ALTER TABLE `facebook_param`
  MODIFY `f_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
