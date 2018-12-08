-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 10 月 23 日 15:01
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phpoachengji`
--

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'a', 'a', '超级管理员', '2016-10-06 21:58:14'),
(5, 'b', 'b', '老师', '2016-10-25 16:42:40');

-- --------------------------------------------------------

--
-- 表的结构 `chengji`
--

CREATE TABLE IF NOT EXISTS `chengji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xuehao` varchar(50) DEFAULT NULL,
  `kemu` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `banji` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `cx` varchar(10) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=28 ;

--
-- 导出表中的数据 `chengji`
--

INSERT INTO `chengji` (`id`, `xuehao`, `kemu`, `xingming`, `banji`, `addtime`, `issh`, `cx`, `s2`, `s1`) VALUES
(27, '223420000', '15666666', '冷香', '是', '2016-10-06 21:58:14', '否', NULL, '100', '稍等');

-- --------------------------------------------------------

--
-- 表的结构 `kechengxinxi`
--

CREATE TABLE IF NOT EXISTS `kechengxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(50) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `jianjie` text,
  `dianhua` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `kechengxinxi`
--

INSERT INTO `kechengxinxi` (`id`, `bianhao`, `mingcheng`, `leibie`, `tupian`, `jianjie`, `dianhua`, `faburen`, `addtime`) VALUES
(19, '002', '计算机课程', '李德', 'uploadfile/8.jpg', '     介绍', '02323-232323', '管理员', '2016-10-06 21:58:14');

-- --------------------------------------------------------

--
-- 表的结构 `xinwentongzhi`
--

CREATE TABLE IF NOT EXISTS `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `s1` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `s2` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `xinwentongzhi`
--

INSERT INTO `xinwentongzhi` (`id`, `biaoti`, `leibie`, `neirong`, `tianjiaren`, `addtime`, `shouyetupian`, `dianjilv`, `s1`, `s2`) VALUES
(1, '《高度代数》', '课程信息', '  高度代数', 'c', '2016-10-11 10:23:12', '', 1, NULL, NULL),
(2, '新闻公告新闻公告', '新闻公告', '  新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告', 'c', '2016-10-11 10:23:19', '', 1, NULL, NULL),
(3, '44', '奖优公告', '  44', '4', '2016-10-01 00:14:57', '', 1, NULL, NULL),
(4, '重要通知', '重要通知', '  重要通知', 'b', '2016-10-01 00:51:10', '', 1, NULL, NULL),
(5, '12', '记事本', '  222', 'a', '2016-10-22 14:37:21', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `quanxian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `cx` varchar(10) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `s1` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=29 ;

--
-- 导出表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `quanxian`, `addtime`, `issh`, `cx`, `s2`, `s1`) VALUES
(27, 'b', 'b', '冷香', '男', ' 上海', ' 2323@qq.com', '学生', '2016-10-06 21:58:14', '否', NULL, '计算机2班', ''),
(28, 'c', 'c', 'c', '男', '上海', 'ccc', '老师', '2016-10-22 13:19:58', '否', NULL, '计算机2班', 'c');
