-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-01-29 14:05:13
-- 服务器版本： 5.5.27
-- PHP Version: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xiaozu`
--

-- --------------------------------------------------------

--
-- 表的结构 `cw_admin`
--

CREATE TABLE IF NOT EXISTS `cw_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `pass_word` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cw_admin`
--

INSERT INTO `cw_admin` (`id`, `admin_name`, `pass_word`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- 表的结构 `cw_advertisement`
--

CREATE TABLE IF NOT EXISTS `cw_advertisement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cw_advertisement`
--

INSERT INTO `cw_advertisement` (`id`, `main`) VALUES
(1, 'adfasdfasdf');

-- --------------------------------------------------------

--
-- 表的结构 `cw_article`
--

CREATE TABLE IF NOT EXISTS `cw_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `title` varchar(50) DEFAULT NULL,
  `content` text NOT NULL COMMENT '文章内容',
  `dateline` int(10) unsigned NOT NULL COMMENT '添加时间',
  `author_id` int(10) unsigned NOT NULL,
  `is_best` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `cw_article`
--

INSERT INTO `cw_article` (`id`, `title`, `content`, `dateline`, `author_id`, `is_best`) VALUES
(44, '二二二二二二二二二二二二二', '二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二二', 1453730589, 2, NULL),
(45, '三三三三三三三三三三三', '三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三三', 1453730607, 3, NULL),
(46, '四四四四四四四四四四四四四四四四四四四四', '四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四四', 1453730636, 4, NULL),
(47, '五五五五五五五五五五五五五五', '五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五五', 1453730655, 5, NULL),
(48, '漆黑uqgeiqgheiqhgi', 'qnoiqhjeoqhoqhdoqhdoqhdqodh', 1453731163, 6, NULL),
(49, '888巴拉巴拉巴拉巴拉巴拉巴拉', '特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容特别多的内容', 1453871809, 888, NULL),
(50, '222', '222222', 1453960257, 2, NULL),
(51, '333', '333333', 1453960266, 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `cw_article_status`
--

CREATE TABLE IF NOT EXISTS `cw_article_status` (
  `article_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `cw_article_status`
--

INSERT INTO `cw_article_status` (`article_id`, `status`, `id`) VALUES
(44, 0, 23),
(45, 1, 24),
(46, 0, 25),
(47, 1, 26),
(48, 1, 27),
(49, 0, 28),
(50, 1, 29),
(51, 1, 30);

-- --------------------------------------------------------

--
-- 表的结构 `cw_avatar`
--

CREATE TABLE IF NOT EXISTS `cw_avatar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '头像ID',
  `avatar_url` varchar(255) NOT NULL COMMENT '头像地址',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户ID',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- 转存表中的数据 `cw_avatar`
--

INSERT INTO `cw_avatar` (`id`, `avatar_url`, `user_id`, `status`) VALUES
(4, './Public/Uploads/avatar/2016-01-29/56aa4ee7594c2.jpg', 2, 1),
(8, './Public/uploads/picture/2016-01-29/weitongguo.jpg', 7, 1),
(11, './Public/uploads/picture/2016-01-29/weitongguo.jpg', 5, 0),
(77, './Public/Uploads/avatar/2016-01-29/56aa4ee7594c2.jpg', 22, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cw_avatar_status`
--

CREATE TABLE IF NOT EXISTS `cw_avatar_status` (
  `avatar_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '头像ID',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cw_comment`
--

CREATE TABLE IF NOT EXISTS `cw_comment` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `user_id` mediumint(8) unsigned NOT NULL COMMENT '发表评论的用户id',
  `atc_id` mediumint(8) unsigned NOT NULL COMMENT '评论对象id',
  `dateline` int(10) unsigned NOT NULL COMMENT '评论时间',
  `message` text NOT NULL COMMENT '评论内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cw_link`
--

CREATE TABLE IF NOT EXISTS `cw_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(100) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_logo` varchar(255) CHARACTER SET utf8mb4 NOT NULL COMMENT 'logo',
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cw_link`
--

INSERT INTO `cw_link` (`link_id`, `link_name`, `link_url`, `link_logo`) VALUES
(1, 'qwe221', 'eqe123131', './Public/uploads/logo/2016-01-28/56aa39dd50a9d.jpg'),
(2, '121', '331231', './Public/uploads/logo/2016-01-28/56aa39f16e5a2.jpg'),
(3, '33323', '3454', './Public/uploads/logo/2016-01-28/56aa3a03f0bc0.jpg'),
(4, '6654', '6546', './Public/uploads/logo/2016-01-28/56aa3a120ccab.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `cw_maininfo`
--

CREATE TABLE IF NOT EXISTS `cw_maininfo` (
  `site_name` varchar(50) NOT NULL COMMENT '网站名称',
  `site_url` varchar(50) NOT NULL COMMENT '网站地址',
  `site_path` varchar(255) NOT NULL COMMENT '安装目录',
  `site_title` varchar(255) NOT NULL COMMENT '网站标题',
  `site_keywords` varchar(255) NOT NULL COMMENT '关键字',
  `site_desc` tinytext NOT NULL COMMENT '网站描述',
  `site_email` varchar(255) NOT NULL COMMENT '站长email',
  `site_icp` varchar(255) NOT NULL COMMENT '网站ICP备案号',
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cw_maininfo`
--

INSERT INTO `cw_maininfo` (`site_name`, `site_url`, `site_path`, `site_title`, `site_keywords`, `site_desc`, `site_email`, `site_icp`, `id`) VALUES
('宠物缘', 'www.cwyuan.com', '/', '宠物缘 狗狗秀', '宠物展示 宠物领养 ', '巴拉巴拉巴拉巴拉巴拉巴拉', '631836@qeq.com', 'awdawda', 1);

-- --------------------------------------------------------

--
-- 表的结构 `cw_message`
--

CREATE TABLE IF NOT EXISTS `cw_message` (
  `mes_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `type` enum('文章') DEFAULT NULL,
  `receiver` varchar(20) NOT NULL,
  `biaoti` varchar(100) NOT NULL,
  `shijian` datetime NOT NULL,
  `wenzhang` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`mes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `cw_message`
--

INSERT INTO `cw_message` (`mes_id`, `sender`, `type`, `receiver`, `biaoti`, `shijian`, `wenzhang`) VALUES
(2, '设定', '文章', 'vfdzdf', '电饭煲', '2016-01-27 12:47:34', '阿骨打'),
(3, '俄方', '文章', 'vasdxzvdsfbsdfbv', '第三个', '2016-01-27 12:48:01', '是'),
(4, '现实的', '文章', 'vzdfgf', '个', '2016-01-27 12:48:38', '是FDSAD');

-- --------------------------------------------------------

--
-- 表的结构 `cw_news`
--

CREATE TABLE IF NOT EXISTS `cw_news` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) DEFAULT NULL,
  `admin_id` tinyint(4) DEFAULT NULL COMMENT ' 管理员ID',
  `pubtime` int(11) DEFAULT NULL,
  `readtimes` tinyint(3) unsigned DEFAULT NULL,
  `commenttimes` tinyint(3) unsigned DEFAULT NULL,
  `newpic` varchar(50) DEFAULT NULL,
  `content` text,
  `source` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `cw_news`
--

INSERT INTO `cw_news` (`id`, `title`, `admin_id`, `pubtime`, `readtimes`, `commenttimes`, `newpic`, `content`, `source`) VALUES
(15, 'title1', 1, 1453994136, 1, 1, './Public/Uploads/news/2016-01-28/56aa32f061db5.jpg', '巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴\r\n巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉\r\n巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉\r\n巴拉巴拉巴拉巴拉拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉', 'aiudbaiudaidhaoi'),
(16, 'title2', 1, 1453994480, 1, 12, './Public/Uploads/news/2016-01-28/56aa31f043ba5.jpg', 'adasdadadada nsaj 那从哪四次你杀错纳斯吹牛', 'adasdasdasd'),
(17, '祭祀的阿萨德飞洒', 1, 1453994514, 1, 3, './Public/Uploads/news/2016-01-28/56aa321242d1c.jpg', '啊大神大神大神大神的飞洒发生的啊撒大大说的', '阿萨德飞洒发生'),
(19, '123123', 1, 1453994801, 1, 6, './Public/Uploads/news/2016-01-28/56aa3331332fc.jpg', '阿萨德撒大大大', '啊大大说的大大的');

-- --------------------------------------------------------

--
-- 表的结构 `cw_news_comment`
--

CREATE TABLE IF NOT EXISTS `cw_news_comment` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `message` varchar(3) DEFAULT NULL,
  `dateline` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cw_pet`
--

CREATE TABLE IF NOT EXISTS `cw_pet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '宠物ID',
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(50) DEFAULT NULL COMMENT '宠物品种',
  `pet_age` tinyint(3) unsigned DEFAULT NULL,
  `pet_desc` varchar(255) DEFAULT NULL COMMENT '宠物简介',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cw_picture`
--

CREATE TABLE IF NOT EXISTS `cw_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic_url` varchar(255) NOT NULL COMMENT '图片地址',
  `is_best` mediumint(9) DEFAULT '0' COMMENT '被赞次数',
  `pic_desc` text COMMENT '图片表述',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户ID',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cw_picture`
--

INSERT INTO `cw_picture` (`id`, `pic_url`, `is_best`, `pic_desc`, `user_id`, `status`) VALUES
(4, './Public/Uploads/picture/2016-01-29/56aa5303ba2c3.jpg', 0, '2222222', 22, 0),
(5, './Public/Uploads/picture/2016-01-29/56aa531dd2fa3.jpg', 0, '23', 33, 0),
(6, './Public/Uploads/picture/2016-01-29/56aa53309c391.jpg', 0, '4444444444', 333, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cw_pshow`
--

CREATE TABLE IF NOT EXISTS `cw_pshow` (
  `mes_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `type` enum('照片') DEFAULT NULL,
  `receiver` varchar(20) NOT NULL,
  `biaoti` varchar(100) NOT NULL,
  `shijian` datetime NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cw_pshow`
--

INSERT INTO `cw_pshow` (`mes_id`, `sender`, `type`, `receiver`, `biaoti`, `shijian`, `img`) VALUES
(1, '老三', '照片', '老大', '今天天气', '2016-01-28 00:00:00', 'tiantian');

-- --------------------------------------------------------

--
-- 表的结构 `cw_user`
--

CREATE TABLE IF NOT EXISTS `cw_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(32) NOT NULL,
  `gender` tinyint(1) unsigned NOT NULL,
  `age` int(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_time` int(10) unsigned NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `cw_user`
--

INSERT INTO `cw_user` (`user_id`, `user_name`, `pass_word`, `gender`, `age`, `address`, `phone_num`, `email`, `reg_time`) VALUES
(1, '周周', 'e10adc3949ba59abbe56e057f20f883e', 1, 35, '台北', '18800000000', 'jay@163.com', 1453700735),
(2, '阿杰', 'e10adc3949ba59abbe56e057f20f883e', 1, 22, '广州', '18800001110', 'ajie@163.com', 1453701279),
(3, '菜菜', 'e10adc3949ba59abbe56e057f20f883e', 1, 19, '武汉', '18800002200', 'caicai@163.com', 1453701279),
(4, '大明', 'e10adc3949ba59abbe56e057f20f883e', 1, 35, '济南', '18800300300', 'daming@163.com', 1453701279),
(5, '小屁', 'e10adc3949ba59abbe56e057f20f883e', 1, 26, '天津', '18804440000', 'xiaopi@163.com', 1453701279),
(6, '三胖', 'e10adc3949ba59abbe56e057f20f883e', 1, 44, '台北', '18800994000', 'sanpang@163.com', 1453701279),
(8, '孙越', 'e10adc3949ba59abbe56e057f20f883e', 0, 30, '北京', '18800666000', 'sunyue@163.com', 1453701279),
(10, '小四', 'e10adc3949ba59abbe56e057f20f883e', 0, 28, '长春', '18800082600', 'caoheyang@163.com', 1453701279),
(12, '小宁', 'e10adc3949ba59abbe56e057f20f883e', 0, 21, '杭州', '18800008485', 'xiaoning@163.com', 1453701279),
(13, '菲菲', 'e10adc3949ba59abbe56e057f20f883e', 0, 26, '长沙', '18800835200', 'feifei@163.com', 1453701279),
(14, '小兔子', 'e10adc3949ba59abbe56e057f20f883e', 0, 17, '泉州', '18800484200', 'tuzi@163.com', 1453701279);

-- --------------------------------------------------------

--
-- 表的结构 `cw_vshow`
--

CREATE TABLE IF NOT EXISTS `cw_vshow` (
  `mes_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `type` enum('视频') DEFAULT NULL,
  `receiver` varchar(20) NOT NULL,
  `biaoti` varchar(100) NOT NULL,
  `shijian` datetime NOT NULL,
  `video` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `cw_vshow`
--

INSERT INTO `cw_vshow` (`mes_id`, `sender`, `type`, `receiver`, `biaoti`, `shijian`, `video`) VALUES
(1, '小小', '视频', '小二', '今天', '2016-01-28 19:59:51', '今天');

-- --------------------------------------------------------

--
-- 表的结构 `cw_word`
--

CREATE TABLE IF NOT EXISTS `cw_word` (
  `id` int(10) NOT NULL,
  `word` text COMMENT '不良词汇',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='词语过滤表';

--
-- 转存表中的数据 `cw_word`
--

INSERT INTO `cw_word` (`id`, `word`) VALUES
(1, '二B,,');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
