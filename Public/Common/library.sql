-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-28 09:22:07
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- 表的结构 `lib_book`
--

CREATE TABLE IF NOT EXISTS `lib_book` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author` varchar(10) NOT NULL,
  `sort` varchar(20) NOT NULL,
  `chubanshe` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `position` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lib_book`
--

INSERT INTO `lib_book` (`id`, `name`, `author`, `sort`, `chubanshe`, `code`, `position`) VALUES
(0, '数据结构', '谭浩强', '计算机科学与技术', '小阳光出版社', 'E001', '四楼一区'),
(1, '逐月之月', '小辣椒', '文学', '泛泰出版社', 'A002', '一楼一区'),
(2, '现代密码学', '小蜜蜂', '计算机科学与技术', '安徽大学出版社', '23478', '四楼一区'),
(3, '操作系统', '中中', '计算机科学与技术', '安徽大学出版社', '00563', '四楼一区'),
(4, '电路逻辑', '小小中', '电子信息工程', '人民出版社', '00278', '三楼一区'),
(12, '落叶缤纷的世界', '丁当', '文学', '人民出版社', '23678', '一楼一区'),
(34, 'css权威指南', '小跳蛙', '计算机科学与技术', '小荷兰出版社', '12789', '四楼一区'),
(45, '小跳蛙之荷兰弟', 'choloda', '文学', '小跳蛙出版社', 'A001', '一楼一区'),
(56, '电路障碍', '糖糖', '电子信息工程', '安徽大学出版社', '0987', '三楼一区');

-- --------------------------------------------------------

--
-- 表的结构 `lib_bookcate`
--

CREATE TABLE IF NOT EXISTS `lib_bookcate` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(40) NOT NULL,
  `cate_position` varchar(30) NOT NULL,
  `addtime` timestamp NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lib_bookcate`
--

INSERT INTO `lib_bookcate` (`cate_id`, `cate_name`, `cate_position`, `addtime`) VALUES
(2, '电子信息工程', '三楼一区', '2018-04-26 12:48:24'),
(4, '计算机科学与技术', '四楼一区', '2018-04-26 12:48:34'),
(5, '生命科学', '四楼二区', '2018-04-26 12:51:27'),
(7, '物理', '三楼三区', '2018-04-28 06:29:23'),
(9, '商学', '一楼三区', '2018-04-28 06:29:57'),
(11, '数学', '二楼三区', '2018-04-28 06:29:03'),
(22, '文学', '一楼一区', '2018-04-28 06:48:26'),
(23, '新闻传播', '二楼二区', '2018-04-28 06:28:09'),
(32, '艺术', '二楼一区', '2018-04-28 06:27:11');

-- --------------------------------------------------------

--
-- 表的结构 `lib_jieyuejilu`
--

CREATE TABLE IF NOT EXISTS `lib_jieyuejilu` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `yujiedays` int(4) NOT NULL,
  `jieyuedate` timestamp NOT NULL,
  `huanshudate` timestamp NOT NULL,
  `state` varchar(10) NOT NULL COMMENT '还书状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lib_jieyuejilu`
--

INSERT INTO `lib_jieyuejilu` (`id`, `name`, `bookname`, `yujiedays`, `jieyuedate`, `huanshudate`, `state`) VALUES
(41514039, '杨孟霖', '数据结构', 5, '2018-03-31 16:00:00', '2018-04-03 16:00:00', '已还'),
(41512030, '荷兰弟', '数据结构', 10, '2018-04-28 01:25:26', '2018-05-13 01:16:03', '已还'),
(41514030, '郁雪梅', '逐月之月', 10, '2018-04-17 16:00:00', '2018-04-26 16:00:00', '已还'),
(41513020, '银行bank', '幽兰', 30, '2018-04-26 16:00:00', '2018-05-12 10:29:14', '已还'),
(41514030, '郁雪梅', '论小蜘蛛的自我修养', 30, '2018-04-16 16:00:00', '2018-05-12 08:52:58', '已还'),
(41514030, '郁雪梅', '小蜘蛛--我不想离开', 10, '2018-05-12 10:14:02', '2018-05-12 10:14:55', '已还'),
(41512030, '荷兰弟', '钢铁侠爸爸', 5, '2018-05-12 11:37:07', '2018-05-13 01:02:48', '未还'),
(41512030, '荷兰弟', '漫威童工', 10, '2018-05-12 11:46:38', '2018-05-13 01:07:22', '未还'),
(41513020, '荷兰弟', '钢铁虫推', 0, '2018-05-13 16:00:00', '2018-05-23 16:00:00', '未还');

-- --------------------------------------------------------

--
-- 表的结构 `lib_user`
--

CREATE TABLE IF NOT EXISTS `lib_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_identity` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lib_user`
--

INSERT INTO `lib_user` (`user_id`, `user_name`, `user_password`, `user_identity`) VALUES
(0, '柏宇', 'c81e728d9d4c2f636f067f89cc14862c', '普通用户'),
(1, 'choloda', 'c4ca4238a0b923820dcc509a6f75849b', '管理员'),
(2, '郁雪梅', 'a87ff679a2f3e71d9181a67b7542122c', '普通用户'),
(4, '孟霖', 'a87ff679a2f3e71d9181a67b7542122c', '普通用户'),
(302, '振文', 'c4ca4238a0b923820dcc509a6f75849b', '普通用户'),
(41512030, '荷兰弟', 'c4ca4238a0b923820dcc509a6f75849b', '普通用户');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
