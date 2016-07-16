-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016-07-16 16:25:09
-- 服务器版本: 5.5.47-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `twtmall2016`
--

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_category`
--

CREATE TABLE IF NOT EXISTS `twtmall_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_id` (`category_id`),
  UNIQUE KEY `category_id_2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- 转存表中的数据 `twtmall_category`
--

INSERT INTO `twtmall_category` (`id`, `name`, `class`, `category_id`) VALUES
(49, '校园代步', 'icon-xiaoyuandaibu', 1),
(50, '手机', 'icon-shouji', 2),
(51, '电脑', 'icon-diannao', 3),
(52, '图书教材', 'icon-tushujiaocai', 4),
(53, '数码配件', 'icon-shumapeijian', 5),
(54, '数码', 'icon-shuma', 6),
(55, '电器', 'icon-dianqi', 7),
(56, '运动健身', 'icon-yundongjianshen', 8),
(57, '衣物伞帽', 'icon-yiwusanmao', 9),
(58, '租赁', 'icon-zulin', 10),
(59, '生活娱乐', 'icon-shenghuoyule', 11),
(60, '其他', 'icon-qita', 12);

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_category_s`
--

CREATE TABLE IF NOT EXISTS `twtmall_category_s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `b_id` int(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `twtmall_category_s`
--

INSERT INTO `twtmall_category_s` (`id`, `name`, `b_id`, `category_id`) VALUES
(1, '全部', 1, 1),
(2, '自行车', 1, 2),
(3, '电动车', 1, 3),
(4, '全部', 2, 4),
(5, '苹果', 2, 5),
(6, 'Android', 2, 6),
(7, '全部', 3, 7),
(8, '笔记本', 3, 8),
(9, '台式', 3, 9),
(10, '全部', 4, 10),
(11, '教材', 4, 11),
(12, '托福', 4, 12),
(13, '雅思', 4, 13),
(14, 'GRE', 4, 14),
(15, '课外书', 4, 15),
(16, '其他', 4, 16),
(17, '全部', 5, 17),
(18, '耳机', 5, 18),
(19, '鼠标', 5, 19),
(20, '键盘', 5, 20),
(21, 'U盘', 5, 21),
(22, '充电宝', 5, 22),
(23, '其他', 5, 23),
(24, '全部', 6, 24),
(25, '相机', 6, 25),
(26, '游戏机', 6, 26),
(27, '全部', 7, 27),
(28, '电扇', 7, 28),
(29, '电水壶', 7, 29),
(30, '电吹风', 7, 30),
(31, '洗衣机', 7, 31),
(32, '空调', 7, 32),
(33, '台灯', 7, 33),
(34, '其他', 7, 34),
(35, '全部', 8, 35),
(36, '篮球', 8, 36),
(37, '足球', 8, 37),
(38, '球拍', 8, 38),
(39, '哑铃', 8, 39),
(40, '其他', 8, 40),
(41, '全部', 9, 41),
(42, '衣物伞帽', 9, 42),
(43, '上衣', 9, 43),
(44, '裤子', 9, 44),
(45, '背包', 9, 45),
(46, '雨伞', 9, 46),
(47, '鞋', 9, 47),
(48, '帽子', 9, 48),
(49, '其他', 9, 49),
(50, '全部', 10, 50),
(51, '租房', 10, 51),
(52, '服装', 10, 52),
(53, '道具', 10, 53),
(54, '其他', 10, 54),
(55, '全部', 11, 55),
(56, '乐器', 11, 56),
(57, '日常用品', 11, 57),
(58, '虚拟账号', 11, 58),
(59, '会员卡', 11, 59),
(60, '化妆品', 11, 60),
(61, '全部', 12, 61),
(62, '其他', 12, 62);

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_collection`
--

CREATE TABLE IF NOT EXISTS `twtmall_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `g_id` int(20) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_comment`
--

CREATE TABLE IF NOT EXISTS `twtmall_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `content` varchar(512) NOT NULL,
  `g_id` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `twtname` varchar(255) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_goods`
--

CREATE TABLE IF NOT EXISTS `twtmall_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `category_s_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(512) NOT NULL,
  `campus` varchar(1) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `bargain` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `view` int(20) NOT NULL,
  `show` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `twtmall_goods`
--

INSERT INTO `twtmall_goods` (`id`, `uid`, `category_id`, `category_s_id`, `name`, `detail`, `campus`, `location`, `price`, `bargain`, `status`, `exchange`, `phone`, `wechat`, `qq`, `imgurl`, `time`, `view`, `show`) VALUES
(2, 3, 1, 1, 'das', 'das', '2', 'sad', 34, 2, 1, 'asd', '2147483647', '15822376171', '694835920', '195', '2016-07-16 12:45:32', 0, 0),
(3, 3, 1, 1, 'das', 'asdasdasdasd', '2', 'sad', 34, 2, 1, 'asd', '2147483647', '15822376171', '694835920', '195', '2016-07-16 12:47:29', 0, 0),
(4, 3, 1, 1, 'dasdasd', 'dasdasd', '2', 'dasdas', 1312, 0, 1, '', '2147483647', '15822376171', '694835920', '196', '2016-07-16 12:52:52', 0, 0),
(5, 3, 1, 1, 'dasdd', 'asdad', '2', 'asdasd', 13123, 0, 1, '', '2147483647', '15822376171', '694835920', '197', '2016-07-16 12:58:08', 0, 0),
(6, 3, 4, 15, 'adsas', 'adsdasdas', '2', 'asdasdad', 31231, 2, 1, '', '2147483647', '15822376171', '694835920', '198,199,200', '2016-07-16 13:52:04', 0, 0),
(7, 3, 4, 12, 'ceshi', 'cs', '2', 'cssc', 3123, 2, 0, '', '2147483647', '15822376171', '694835920', '201', '2016-07-16 14:15:12', 0, 1),
(8, 3, 3, 9, 'dasda', 'dasdas', '2', 'dasdad', 31231, 2, 8, '', 'fsdfgsdf', '', '0', '202', '2016-07-16 14:31:30', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_img`
--

CREATE TABLE IF NOT EXISTS `twtmall_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=211 ;

--
-- 转存表中的数据 `twtmall_img`
--

INSERT INTO `twtmall_img` (`id`, `uid`, `time`, `url`) VALUES
(1, 4, '2016-07-15 17:55:26', '/goods/20160715/5788b30ec674c.jpg'),
(2, 4, '2016-07-15 17:56:41', '/goods/20160715/5788b359eb68e.jpg'),
(3, 4, '2016-07-15 17:56:53', '/goods/20160715/5788b365c135b.jpg'),
(4, 4, '2016-07-15 17:57:33', '/goods/20160715/5788b38d2330d.jpg'),
(5, 4, '2016-07-15 17:59:52', '/goods/20160715/5788b418912ae.jpg'),
(6, 4, '2016-07-15 18:01:56', '/goods/20160715/5788b494325d0.jpg'),
(7, 4, '2016-07-15 18:02:30', '/goods/20160715/5788b4b6a35f8.jpg'),
(8, 3, '2016-07-15 18:02:36', '/goods/20160715/5788b4bcd9516.jpg'),
(9, 3, '2016-07-15 18:03:11', '/goods/20160715/5788b4df6acd6.jpg'),
(10, 3, '2016-07-15 18:04:24', '/goods/20160715/5788b527eb095.jpg'),
(11, 4, '2016-07-15 18:04:45', '/goods/20160715/5788b53d9d2d7.jpg'),
(12, 4, '2016-07-15 18:05:14', '/goods/20160715/5788b55a55f1c.jpg'),
(13, 4, '2016-07-15 18:06:02', '/goods/20160715/5788b58a447ab.jpg'),
(14, 3, '2016-07-15 18:07:30', '/goods/20160715/5788b5e268fc1.jpg'),
(15, 3, '2016-07-15 18:23:57', '/goods/20160715/5788b9bd26704.jpg'),
(16, 3, '2016-07-15 18:24:19', '/goods/20160715/5788b9d3f099f.jpg'),
(17, 3, '2016-07-15 18:40:58', '/goods/20160715/5788bdba6a1d9.jpg'),
(18, 3, '2016-07-15 19:20:03', '/goods/20160715/5788c6e340758.jpg'),
(19, 3, '2016-07-15 19:20:58', '/goods/20160715/5788c71a1bbd5.jpg'),
(20, 3, '2016-07-15 19:22:20', '/goods/20160715/5788c76c0175c.jpg'),
(21, 3, '2016-07-15 19:24:08', '/goods/20160715/5788c7d8b45f5.jpg'),
(22, 3, '2016-07-15 19:24:26', '/goods/20160715/5788c7eaab11d.jpg'),
(23, 3, '2016-07-15 19:25:11', '/goods/20160715/5788c81746964.jpg'),
(24, 3, '2016-07-15 19:26:01', '/goods/20160715/5788c8498e470.jpg'),
(25, 3, '2016-07-15 19:28:26', '/goods/20160715/5788c8daac227.jpg'),
(26, 3, '2016-07-15 19:41:19', '/goods/20160715/5788cbdf22a78.jpg'),
(27, 3, '2016-07-15 19:43:22', '/goods/20160715/5788cc5a15cfe.jpg'),
(28, 3, '2016-07-15 19:45:27', '/goods/20160715/5788ccd726c1f.jpg'),
(29, 3, '2016-07-15 19:46:41', '/goods/20160715/5788cd2160d7e.jpg'),
(30, 3, '2016-07-15 19:46:59', '/goods/20160715/5788cd33c111c.jpg'),
(31, 3, '2016-07-15 19:50:03', '/goods/20160715/5788cdeb42c85.jpg'),
(32, 3, '2016-07-15 19:50:29', '/goods/20160715/5788ce055efbe.jpg'),
(33, 3, '2016-07-15 19:50:42', '/goods/20160715/5788ce12cd160.jpg'),
(34, 3, '2016-07-15 19:55:39', '/goods/20160715/5788cf3b82f49.jpg'),
(35, 3, '2016-07-15 19:56:41', '/goods/20160715/5788cf7981b59.jpg'),
(36, 3, '2016-07-15 19:57:36', '/goods/20160715/5788cfb093835.jpg'),
(37, 3, '2016-07-15 19:59:30', '/goods/20160715/5788d02299bf9.jpg'),
(38, 3, '2016-07-15 19:59:54', '/goods/20160715/5788d03a8f6f3.jpg'),
(39, 3, '2016-07-15 20:01:39', '/goods/20160715/5788d0a3ad0c4.jpg'),
(40, 3, '2016-07-15 20:08:18', '/goods/20160715/5788d2324f002.jpg'),
(41, 3, '2016-07-15 20:08:23', '/goods/20160715/5788d23707410.jpg'),
(42, 3, '2016-07-15 20:09:24', '/goods/20160715/5788d27425a35.jpg'),
(43, 3, '2016-07-15 20:09:41', '/goods/20160715/5788d28595b88.jpg'),
(44, 3, '2016-07-15 20:10:03', '/goods/20160715/5788d29b34fe0.jpg'),
(45, 3, '2016-07-15 20:11:31', '/goods/20160715/5788d2f38a56e.jpg'),
(46, 3, '2016-07-15 20:11:50', '/goods/20160715/5788d306adb04.jpg'),
(47, 3, '2016-07-15 20:12:02', '/goods/20160715/5788d3128f1f1.jpg'),
(48, 3, '2016-07-15 21:29:18', '/goods/20160715/5788e52e3d484.jpg'),
(49, 3, '2016-07-15 21:31:09', '/goods/20160715/5788e59d5ca97.jpg'),
(50, 3, '2016-07-15 21:39:22', '/goods/20160715/5788e78a07235.jpg'),
(51, 3, '2016-07-15 21:39:37', '/goods/20160715/5788e799be122.jpg'),
(52, 3, '2016-07-15 21:42:28', '/goods/20160715/5788e8443e266.jpg'),
(53, 3, '2016-07-15 21:45:02', '/goods/20160715/5788e8de1d936.jpg'),
(54, 3, '2016-07-15 21:45:13', '/goods/20160715/5788e8e95e1dd.jpg'),
(55, 3, '2016-07-15 21:51:53', '/goods/20160715/5788ea79d0268.jpg'),
(56, 3, '2016-07-15 21:52:37', '/goods/20160715/5788eaa559ab1.jpg'),
(57, 3, '2016-07-15 22:05:46', '/goods/20160715/5788edba27cf5.jpg'),
(58, 3, '2016-07-15 22:06:09', '/goods/20160715/5788edd1dc909.jpg'),
(59, 3, '2016-07-15 22:17:21', '/goods/20160715/5788f071bc768.jpg'),
(60, 3, '2016-07-15 22:18:16', '/goods/20160715/5788f0a89357f.jpg'),
(61, 3, '2016-07-15 22:18:36', '/goods/20160715/5788f0bc65a4e.jpg'),
(62, 3, '2016-07-15 22:20:45', '/goods/20160715/5788f13dd649e.jpg'),
(63, 3, '2016-07-15 22:21:20', '/goods/20160715/5788f160ba573.jpg'),
(64, 4, '2016-07-15 22:22:41', '/goods/20160715/5788f1b1f3997.jpg'),
(65, 4, '2016-07-15 22:23:02', '/goods/20160715/5788f1c637755.jpg'),
(66, 3, '2016-07-15 22:29:24', '/goods/20160715/5788f344dc3aa.jpg'),
(67, 3, '2016-07-15 22:49:09', '/goods/20160715/5788f7e5cc27a.jpg'),
(68, 3, '2016-07-15 23:45:48', '/goods/20160715/5789052c9480c.jpg'),
(69, 3, '2016-07-16 00:00:29', '/goods/20160716/5789089d4af87.jpg'),
(70, 3, '2016-07-16 00:01:10', '/goods/20160716/578908c61bf95.jpg'),
(71, 3, '2016-07-16 00:03:12', '/goods/20160716/57890940a1339.jpg'),
(72, 3, '2016-07-16 00:07:37', '/goods/20160716/57890a49598ac.jpg'),
(73, 3, '2016-07-16 00:11:04', '/goods/20160716/57890b1849c08.jpg'),
(74, 3, '2016-07-16 00:11:33', '/goods/20160716/57890b351c03c.jpg'),
(75, 3, '2016-07-16 00:17:14', '/goods/20160716/57890c89cadd2.jpg'),
(76, 3, '2016-07-16 00:18:32', '/goods/20160716/57890cd836cca.jpg'),
(77, 3, '2016-07-16 00:20:23', '/goods/20160716/57890d475a8ec.jpg'),
(78, 3, '2016-07-16 00:27:27', '/goods/20160716/57890eeec46e2.jpg'),
(79, 3, '2016-07-16 00:35:22', '/goods/20160716/578910ca3293e.jpg'),
(80, 3, '2016-07-16 00:35:38', '/goods/20160716/578910da2c7fb.jpg'),
(81, 3, '2016-07-16 00:36:23', '/goods/20160716/57891106e2fa8.jpg'),
(82, 3, '2016-07-16 00:37:08', '/goods/20160716/57891134ba318.jpg'),
(83, 3, '2016-07-16 00:38:09', '/goods/20160716/57891171b00e8.jpg'),
(84, 3, '2016-07-16 00:40:08', '/goods/20160716/578911e8bd966.jpg'),
(85, 3, '2016-07-16 00:40:44', '/goods/20160716/5789120cba150.jpg'),
(86, 3, '2016-07-16 00:43:28', '/goods/20160716/578912b0589a7.jpg'),
(87, 3, '2016-07-16 00:44:33', '/goods/20160716/578912f11a277.jpg'),
(88, 3, '2016-07-16 00:45:06', '/goods/20160716/57891312b06d3.jpg'),
(89, 3, '2016-07-16 00:45:21', '/goods/20160716/578913218a1ad.jpg'),
(90, 3, '2016-07-16 00:47:21', '/goods/20160716/57891398c9c47.jpg'),
(91, 3, '2016-07-16 00:47:57', '/goods/20160716/578913bd01486.jpg'),
(92, 3, '2016-07-16 00:49:44', '/goods/20160716/57891427c1c3b.jpg'),
(93, 3, '2016-07-16 00:50:01', '/goods/20160716/5789143968fc6.jpg'),
(94, 3, '2016-07-16 00:53:09', '/goods/20160716/578914f4dc2cf.jpg'),
(95, 3, '2016-07-16 00:54:17', '/goods/20160716/57891538e69a6.jpg'),
(96, 3, '2016-07-16 01:00:49', '/goods/20160716/578916c1bc1d8.jpg'),
(97, 3, '2016-07-16 01:00:58', '/goods/20160716/578916caaeba7.jpg'),
(98, 3, '2016-07-16 01:01:12', '/goods/20160716/578916d81f010.jpg'),
(99, 3, '2016-07-16 01:01:28', '/goods/20160716/578916e79f09e.jpg'),
(100, 3, '2016-07-16 01:02:43', '/goods/20160716/57891732aac7f.jpg'),
(101, 3, '2016-07-16 01:02:56', '/goods/20160716/578917400be09.jpg'),
(102, 3, '2016-07-16 01:03:09', '/goods/20160716/5789174d30726.jpg'),
(103, 3, '2016-07-16 01:03:24', '/goods/20160716/5789175c45f2c.jpg'),
(104, 3, '2016-07-16 01:04:53', '/goods/20160716/578917b50b104.jpg'),
(105, 3, '2016-07-16 01:04:57', '/goods/20160716/578917b962274.jpg'),
(106, 3, '2016-07-16 01:05:01', '/goods/20160716/578917bd482de.jpg'),
(107, 3, '2016-07-16 01:05:20', '/goods/20160716/578917d029bd3.jpg'),
(108, 3, '2016-07-16 01:08:38', '/goods/20160716/578918966a45a.jpg'),
(109, 3, '2016-07-16 01:08:42', '/goods/20160716/5789189a3b1b8.jpg'),
(110, 3, '2016-07-16 01:08:46', '/goods/20160716/5789189e3fa2a.jpg'),
(111, 3, '2016-07-16 01:08:49', '/goods/20160716/578918a117d26.jpg'),
(112, 3, '2016-07-16 01:09:13', '/goods/20160716/578918b9233b5.jpg'),
(113, 3, '2016-07-16 01:09:17', '/goods/20160716/578918bd3eac9.jpg'),
(114, 3, '2016-07-16 01:09:22', '/goods/20160716/578918c21dff3.jpg'),
(115, 3, '2016-07-16 01:09:24', '/goods/20160716/578918c4778f5.jpg'),
(116, 3, '2016-07-16 01:20:57', '/goods/20160716/57891b79298de.jpg'),
(117, 3, '2016-07-16 01:21:29', '/goods/20160716/57891b98efe09.jpg'),
(118, 3, '2016-07-16 01:22:03', '/goods/20160716/57891bbbf2167.jpg'),
(119, 3, '2016-07-16 01:24:14', '/goods/20160716/57891c3e208d1.jpg'),
(120, 3, '2016-07-16 01:24:22', '/goods/20160716/57891c46585a6.jpg'),
(121, 3, '2016-07-16 01:24:37', '/goods/20160716/57891c556e7b5.jpg'),
(122, 3, '2016-07-16 01:24:40', '/goods/20160716/57891c582c035.jpg'),
(123, 3, '2016-07-16 01:25:50', '/goods/20160716/57891c9e38703.jpg'),
(124, 3, '2016-07-16 01:26:05', '/goods/20160716/57891cad14846.jpg'),
(125, 3, '2016-07-16 01:26:37', '/goods/20160716/57891ccd55c98.jpg'),
(126, 3, '2016-07-16 01:30:13', '/goods/20160716/57891da5ebe77.jpg'),
(127, 3, '2016-07-16 01:32:20', '/goods/20160716/57891e243336e.jpg'),
(128, 3, '2016-07-16 01:32:43', '/goods/20160716/57891e3b27dc6.jpg'),
(129, 3, '2016-07-16 01:32:46', '/goods/20160716/57891e3e74e4b.jpg'),
(130, 3, '2016-07-16 01:32:48', '/goods/20160716/57891e40929f8.jpg'),
(131, 3, '2016-07-16 01:33:06', '/goods/20160716/57891e525dd3c.jpg'),
(132, 3, '2016-07-16 01:34:15', '/goods/20160716/57891e9791235.jpg'),
(133, 3, '2016-07-16 01:35:06', '/goods/20160716/57891eca2ae05.jpg'),
(134, 3, '2016-07-16 01:36:01', '/goods/20160716/57891f012f7ee.jpg'),
(135, 3, '2016-07-16 01:37:08', '/goods/20160716/57891f44df980.jpg'),
(136, 3, '2016-07-16 01:37:38', '/goods/20160716/57891f622043a.jpg'),
(137, 3, '2016-07-16 01:37:41', '/goods/20160716/57891f6578016.jpg'),
(138, 3, '2016-07-16 01:37:44', '/goods/20160716/57891f68ce8f4.jpg'),
(139, 3, '2016-07-16 01:38:43', '/goods/20160716/57891fa3aa6c6.jpg'),
(140, 3, '2016-07-16 01:38:46', '/goods/20160716/57891fa5e31e3.jpg'),
(141, 3, '2016-07-16 01:38:48', '/goods/20160716/57891fa814762.jpg'),
(142, 3, '2016-07-16 01:39:24', '/goods/20160716/57891fccc2ba6.jpg'),
(143, 3, '2016-07-16 01:39:26', '/goods/20160716/57891fceb4f05.jpg'),
(144, 3, '2016-07-16 01:39:29', '/goods/20160716/57891fd1aeac4.jpg'),
(145, 3, '2016-07-16 01:40:05', '/goods/20160716/57891ff5bb55b.jpg'),
(146, 3, '2016-07-16 01:40:07', '/goods/20160716/57891ff7b5f45.jpg'),
(147, 3, '2016-07-16 01:40:48', '/goods/20160716/578920204b571.jpg'),
(148, 3, '2016-07-16 01:40:50', '/goods/20160716/578920220906c.jpg'),
(149, 3, '2016-07-16 01:41:07', '/goods/20160716/578920330a6f2.jpg'),
(150, 3, '2016-07-16 01:42:08', '/goods/20160716/5789207025a2f.jpg'),
(151, 3, '2016-07-16 01:42:10', '/goods/20160716/578920722362f.jpg'),
(152, 3, '2016-07-16 01:42:12', '/goods/20160716/578920741cf8d.jpg'),
(153, 3, '2016-07-16 01:42:15', '/goods/20160716/578920779a958.jpg'),
(154, 3, '2016-07-16 01:43:05', '/goods/20160716/578920a9223a8.jpg'),
(155, 3, '2016-07-16 01:43:11', '/goods/20160716/578920aee9133.jpg'),
(156, 3, '2016-07-16 01:43:14', '/goods/20160716/578920b1e7373.jpg'),
(157, 3, '2016-07-16 01:43:16', '/goods/20160716/578920b446a3b.jpg'),
(158, 3, '2016-07-16 01:43:21', '/goods/20160716/578920b9bd235.jpg'),
(159, 3, '2016-07-16 01:43:24', '/goods/20160716/578920bc1f80c.jpg'),
(160, 3, '2016-07-16 01:44:08', '/goods/20160716/578920e8108f9.jpg'),
(161, 3, '2016-07-16 01:44:18', '/goods/20160716/578920f2d3a3a.jpg'),
(162, 3, '2016-07-16 01:44:28', '/goods/20160716/578920fc061b5.jpg'),
(163, 3, '2016-07-16 01:44:35', '/goods/20160716/57892103a58d4.jpg'),
(164, 3, '2016-07-16 01:44:51', '/goods/20160716/5789211308e78.jpg'),
(165, 3, '2016-07-16 01:45:03', '/goods/20160716/5789211f55e60.jpg'),
(166, 3, '2016-07-16 01:45:16', '/goods/20160716/5789212ce2da0.jpg'),
(167, 3, '2016-07-16 01:47:08', '/goods/20160716/5789219c7f1e2.jpg'),
(168, 3, '2016-07-16 02:04:04', '/goods/20160716/57892593d8144.jpg'),
(169, 3, '2016-07-16 02:04:27', '/goods/20160716/578925ab17bb4.jpg'),
(170, 3, '2016-07-16 02:04:41', '/goods/20160716/578925b959c7e.jpg'),
(171, 3, '2016-07-16 02:04:56', '/goods/20160716/578925c8107ea.jpg'),
(172, 3, '2016-07-16 02:08:51', '/goods/20160716/578926b36c832.jpg'),
(173, 3, '2016-07-16 03:47:07', '/goods/20160716/57893dbb88643.jpg'),
(174, 3, '2016-07-16 03:47:29', '/goods/20160716/57893dd145487.jpg'),
(175, 3, '2016-07-16 03:47:49', '/goods/20160716/57893de506f45.jpg'),
(176, 3, '2016-07-16 03:48:14', '/goods/20160716/57893dfda0dea.jpg'),
(177, 3, '2016-07-16 03:50:28', '/goods/20160716/57893e84596d9.jpg'),
(178, 3, '2016-07-16 03:51:03', '/goods/20160716/57893ea70bc92.jpg'),
(179, 3, '2016-07-16 03:52:12', '/goods/20160716/57893eebdf15c.jpg'),
(180, 3, '2016-07-16 03:52:34', '/goods/20160716/57893f01bf828.jpg'),
(181, 3, '2016-07-16 03:55:38', '/goods/20160716/57893fba3e941.jpg'),
(182, 3, '2016-07-16 11:24:39', '/goods/20160716/5789a8f78794c.jpg'),
(183, 3, '2016-07-16 11:27:23', '/goods/20160716/5789a99b9fa74.jpg'),
(184, 3, '2016-07-16 11:30:16', '/goods/20160716/5789aa488df63.jpg'),
(185, 3, '2016-07-16 11:43:33', '/goods/20160716/5789ad65b7d6a.jpg'),
(186, 3, '2016-07-16 11:45:29', '/goods/20160716/5789add97c531.jpg'),
(187, 3, '2016-07-16 12:07:37', '/goods/20160716/5789b3097e5fc.jpg'),
(188, 3, '2016-07-16 12:07:40', '/goods/20160716/5789b30cafac0.jpg'),
(189, 3, '2016-07-16 12:07:42', '/goods/20160716/5789b30edbacc.jpg'),
(190, 3, '2016-07-16 12:07:49', '/goods/20160716/5789b31584e3c.jpg'),
(191, 3, '2016-07-16 12:09:26', '/goods/20160716/5789b376dcbe1.jpg'),
(192, 3, '2016-07-16 12:09:34', '/goods/20160716/5789b37eac5f7.jpg'),
(193, 3, '2016-07-16 12:09:37', '/goods/20160716/5789b38192f07.jpg'),
(194, 3, '2016-07-16 12:09:42', '/goods/20160716/5789b3860235f.jpg'),
(195, 3, '2016-07-16 12:45:01', '/goods/20160716/5789bbcd19498.jpg'),
(196, 3, '2016-07-16 12:51:19', '/goods/20160716/5789bd47c9db5.jpg'),
(197, 3, '2016-07-16 12:57:51', '/goods/20160716/5789becf601f3.jpg'),
(198, 3, '2016-07-16 13:51:25', '/goods/20160716/5789cb5d5b538.jpg'),
(199, 3, '2016-07-16 13:51:29', '/goods/20160716/5789cb6127759.jpg'),
(200, 3, '2016-07-16 13:51:31', '/goods/20160716/5789cb63bccd9.jpg'),
(201, 3, '2016-07-16 14:14:45', '/goods/20160716/5789d0d5472ae.jpg'),
(202, 3, '2016-07-16 14:30:39', '/goods/20160716/5789d48ec3434.jpg'),
(203, 3, '2016-07-16 14:48:53', '/goods/20160716/5789d8d5ae762.jpg'),
(204, 3, '2016-07-16 14:55:42', '/goods/20160716/5789da6e3747f.jpg'),
(205, 3, '2016-07-16 15:07:30', '/goods/20160716/5789dd32503e6.jpg'),
(206, 3, '2016-07-16 15:09:08', '/goods/20160716/5789dd9482514.jpg'),
(207, 3, '2016-07-16 15:11:21', '/goods/20160716/5789de18cd44f.jpg'),
(208, 3, '2016-07-16 15:12:27', '/goods/20160716/5789de5aef643.jpg'),
(209, 3, '2016-07-16 15:13:01', '/goods/20160716/5789de7d3a919.jpg'),
(210, 3, '2016-07-16 15:14:01', '/goods/20160716/5789deb8ec4f1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_needs`
--

CREATE TABLE IF NOT EXISTS `twtmall_needs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `category_s_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(512) NOT NULL,
  `campus` varchar(1) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `exchange` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `show` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `twtmall_needs`
--

INSERT INTO `twtmall_needs` (`id`, `uid`, `category_id`, `category_s_id`, `name`, `detail`, `campus`, `location`, `price`, `exchange`, `phone`, `qq`, `wechat`, `time`, `show`) VALUES
(2, 3, 1, 3, 'dadasd', 'dasdasdsasd', '2', 'sdasdadasd', 3123124, 'dasdasdas', '2147483647', '694835920', '15822376171', '2016-07-16 14:19:29', 1),
(3, 3, 6, 26, 'fgsdgs', 'fsdfsdf', '1', 'fsdfsd', 4234, 'fsdfsd', '2147483647', '694835920', '15822376171', '2016-07-16 14:20:44', 1),
(4, 3, 1, 3, 'dasasfas', 'dasdass', '2', 'dasdasd', 5242, '', '2147483647', '694835920', '15822376171', '2016-07-16 14:22:00', 1),
(5, 3, 1, 1, 'fasfd', 'dasdasd', '2', 'asda', 43, 'dasdasda', 'dasdasd', '0', '', '2016-07-16 14:33:05', 1);

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_praise`
--

CREATE TABLE IF NOT EXISTS `twtmall_praise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `sid` int(20) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_reply`
--

CREATE TABLE IF NOT EXISTS `twtmall_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `g_id` int(20) NOT NULL,
  `content` varchar(512) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `twtname` varchar(255) NOT NULL,
  `s_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_trade`
--

CREATE TABLE IF NOT EXISTS `twtmall_trade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `seller_id` int(20) NOT NULL,
  `g_id` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `twtmall_user`
--

CREATE TABLE IF NOT EXISTS `twtmall_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `twtid` int(255) NOT NULL,
  `campus` varchar(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `stunumber` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `imgurl` int(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `twtmall_user`
--

INSERT INTO `twtmall_user` (`id`, `twtid`, `campus`, `username`, `realname`, `stunumber`, `phone`, `wechat`, `qq`, `imgurl`, `token`, `email`) VALUES
(3, 0, '2', 'y694835920', '', '3015218104', '15822376171', '15822376171', '694835920', 72, 'O6ZGishCKcfOuwbGygBIzNIoRUVlBGKnOXuiRLWahSy5PtmDxQ0cpBlHVxrgmx4yLVocCQg7mBmhJSnyZnP7QI1mhQSgnLF9hPzp', '694835920@qq.com'),
(4, 0, '2', '461062411', '', '3015218101', '123456789', '', '', 64, '15brFC0ArWuvktSPiEAJ7Zin8GoLfH2olifW4CkqRksRVt4uzB70lEeWQK4g1VwFKPdRZ3rbkrRlZxN4GqnRqBMt7etc9H7QY54X', '461062411@qq.com'),
(5, 0, '2', 'yangff', '', '3015218102', '', '', '', 0, '9ezsCl1rtFWNCsrUHJeyipnXmlZXszNyFjgONaqP7ULWQkg71X6QpJh7dmMDSz2KJt2HawCUW7zn2FrxBRToUNsKzyX5pPsbhLHA', 'nerosoft@outlook.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
