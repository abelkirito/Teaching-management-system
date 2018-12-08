/*
Navicat MySQL Data Transfer

Source Server         : ws
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : system

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-12-08 03:28:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for allusers
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pwd` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cx` varchar(50) CHARACTER SET utf8 DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'a', 'a', '超级管理员', '2016-10-06 21:58:14');
INSERT INTO `allusers` VALUES ('5', 'b', 'b', '老师', '2016-10-25 16:42:40');

-- ----------------------------
-- Table structure for chengji
-- ----------------------------
DROP TABLE IF EXISTS `chengji`;
CREATE TABLE `chengji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xuehao` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kemu` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `xingming` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `banji` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) CHARACTER SET utf32 DEFAULT '否',
  `cx` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `s2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `s1` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of chengji
-- ----------------------------
INSERT INTO `chengji` VALUES ('27', '223420000', '15666666', '冷香', '是', '2016-10-06 21:58:14', '否', null, '100', '成绩', '语文');
INSERT INTO `chengji` VALUES ('28', '1313', '31313313', 'cx', null, '2018-11-03 10:31:04', '否', null, '122', '成绩', '高等数学');
INSERT INTO `chengji` VALUES ('29', '131313', '232323', '法国', null, '2018-11-03 10:32:15', '否', null, '96', '成绩', '线性代数');
INSERT INTO `chengji` VALUES ('30', '223420000', '2323', '冷香', null, '2018-11-03 10:51:53', '否', null, '99', '成绩', '计算机组成原理');
INSERT INTO `chengji` VALUES ('31', '223420000', '343434', '冷香', null, '2018-11-03 10:54:17', '否', null, '89', '成绩', '编译原理');
INSERT INTO `chengji` VALUES ('32', '223420000', '2', '冷香', null, '2018-11-03 10:54:58', '否', null, '91', '成绩', '数据结构');
INSERT INTO `chengji` VALUES ('33', '223420000', 'qw', '冷香', null, '2018-11-03 10:55:45', '否', null, '89', '成绩', '操作系统');
INSERT INTO `chengji` VALUES ('34', '223420000', '12', '冷香', null, '2018-11-03 10:56:25', '否', null, '86', '成绩', '计算机网络');

-- ----------------------------
-- Table structure for kechengxinxi
-- ----------------------------
DROP TABLE IF EXISTS `kechengxinxi`;
CREATE TABLE `kechengxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mingcheng` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tupian` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `jianjie` text CHARACTER SET utf8,
  `dianhua` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `faburen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of kechengxinxi
-- ----------------------------
INSERT INTO `kechengxinxi` VALUES ('19', '3111', '计算机课程', '李德', 'uploadfile/20181102091254738.jpg', '            本课程能够帮你更好的了解计算机组成及原理', '02323-232323', '管理员', '2016-10-06 21:58:14');
INSERT INTO `kechengxinxi` VALUES ('22', '1001', '操作系统', '王铮', 'uploadfile/20181102091348647.jpg', 'OS', '1331', 'a', '2018-11-02 16:13:48');
INSERT INTO `kechengxinxi` VALUES ('23', '13131', '333', '333', 'uploadfile/20181102091521935.jpg', '3333', '1313', 'a', '2018-11-02 16:15:21');
INSERT INTO `kechengxinxi` VALUES ('25', 'qwqwq', 'qwqw', 'qwqw', 'uploadfile/20181102091937691.jpg', 'qwqw', 'qw', 'a', '2018-11-02 16:19:37');
INSERT INTO `kechengxinxi` VALUES ('26', '1222', '1', '1', 'uploadfile/20181102093017840.jpg', ' 11212', '12', 'a', '2018-11-02 16:22:37');
INSERT INTO `kechengxinxi` VALUES ('27', '31', '23', '23', 'uploadfile/20181102093033148.jpg', '23', '23', 'a', '2018-11-02 16:30:33');
INSERT INTO `kechengxinxi` VALUES ('28', '133', '离散数学', 'cs', 'uploadfile/20181103033304813.jpg', ' 逻辑运算，范式与逻辑命题。', '1212', 'kirito', '2018-11-03 10:33:04');

-- ----------------------------
-- Table structure for xinwentongzhi
-- ----------------------------
DROP TABLE IF EXISTS `xinwentongzhi`;
CREATE TABLE `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `neirong` text CHARACTER SET utf8,
  `tianjiaren` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `s1` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `s2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of xinwentongzhi
-- ----------------------------
INSERT INTO `xinwentongzhi` VALUES ('1', '《高度代数》', '课程信息', '  高度代数', 'c', '2016-10-11 10:23:12', '', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('2', '新闻公告新闻公告', '新闻公告', '  新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告新闻公告', 'c', '2016-10-11 10:23:19', '', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('3', '44', '奖优公告', '  44', '4', '2016-10-01 00:14:57', '', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('4', '重要通知', '重要通知', '  重要通知', 'b', '2016-10-01 00:51:10', '', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('5', '12', '记事本', '  222', 'a', '2016-10-22 14:37:21', '', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('6', '奖学金', '奖惩信息', '22', '22', '2018-11-02 21:18:26', null, '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('7', '奖励', '奖惩信息', '33', '33', '2018-11-02 21:30:02', null, '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('8', '惩罚', '奖惩信息', '44', '44', '2018-11-02 21:30:22', null, '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('9', '损坏公物', '奖惩信息', '33', '33', '2018-11-02 21:30:40', null, '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('10', '创新大赛奖励', '奖惩信息', '      44      ', '44', '2018-11-02 21:31:06', 'uploadfile/20181103022031531.jpg', '1', null, null);
INSERT INTO `xinwentongzhi` VALUES ('15', 'test', '奖惩信息', '  奖励', 'kirito', '2018-11-03 09:41:58', 'uploadfile/20181103024158394.jpg', '1', null, null);

-- ----------------------------
-- Table structure for yonghuzhuce
-- ----------------------------
DROP TABLE IF EXISTS `yonghuzhuce`;
CREATE TABLE `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mima` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `xingming` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `xingbie` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `diqu` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `quanxian` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) CHARACTER SET utf8 DEFAULT '否',
  `cx` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `s2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `s1` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yonghuzhuce
-- ----------------------------
INSERT INTO `yonghuzhuce` VALUES ('28', 'c', 'a', 'cx', '男', '上海', 'ccc', '老师', '2016-10-22 13:19:58', '否', null, '计算机2班', 'c');
INSERT INTO `yonghuzhuce` VALUES ('29', 'ws', 'ws', '冷香', '男', '西安', 'c', '老师', '2018-11-02 09:50:21', '否', null, '计算机2班', '131');
INSERT INTO `yonghuzhuce` VALUES ('30', 'tx', 'tx', '冷香', '男', '北京', 'c', '学生', '2018-11-02 09:51:05', '否', null, null, null);
INSERT INTO `yonghuzhuce` VALUES ('31', 'xx', 'xx', 'xx', '男', '深圳', 'a', '学生', '2018-11-02 09:51:29', '否', null, null, null);
INSERT INTO `yonghuzhuce` VALUES ('32', 'up', 'up', 'up', '男', '南京', 'a', '学生', '2018-11-02 09:51:59', '否', null, null, null);
INSERT INTO `yonghuzhuce` VALUES ('33', 'aA', 'a', 'a', '女', '杭州', 'aaa', '学生', '2018-11-02 09:52:43', '否', null, null, null);
INSERT INTO `yonghuzhuce` VALUES ('34', 'cs', '133', 'b', '女', '厦门', 'aa', '学生', '2018-11-02 09:53:06', '否', null, '计科1', '1313131313');
INSERT INTO `yonghuzhuce` VALUES ('35', '31311', 'qwqwqw', 'az', '男', '上海', '3333', '老师', '2018-11-02 10:19:40', '否', null, '计科2', '131313');
INSERT INTO `yonghuzhuce` VALUES ('36', 'asas', '1212', 'sx', '男', '北京', 'asas', '学生', '2018-11-02 10:22:21', '否', null, 'sd', 'as');
INSERT INTO `yonghuzhuce` VALUES ('37', 'za', 'za', 'za', '男', '上海', 'za', '学生', '2018-11-02 10:44:27', '否', null, 'za', 'za');
INSERT INTO `yonghuzhuce` VALUES ('39', 'ab', 'aa', 'aa', '男', '上海', 'aa', '学生', '2018-11-02 10:49:49', '否', null, 'aa', 'aa');
INSERT INTO `yonghuzhuce` VALUES ('40', 'zq', 'zq', 'zqqqq', '男', '上海', 'zq', '老师', '2018-11-02 10:50:17', '否', null, 'zq', 'zq');
INSERT INTO `yonghuzhuce` VALUES ('41', 'az', 'az', 'az', '男', '上海', 'az', '老师', '2018-11-02 10:50:37', '否', null, 'az', 'az');
INSERT INTO `yonghuzhuce` VALUES ('42', 'zxx', 'zzxx', 'zxzx', '男', '北京', 'zxzxx', '老师', '2018-11-02 10:50:47', '否', null, 'zxzx', 'zxzx');
INSERT INTO `yonghuzhuce` VALUES ('43', 'fdfd', 'ffd', 'fd', '男', '上海', 'fd', '老师', '2018-11-02 10:50:53', '否', null, 'fd', 'df');
INSERT INTO `yonghuzhuce` VALUES ('44', 'xghhg', 'ghgh', 'ghgh', '男', '上海', 'ghgh', '老师', '2018-11-02 10:51:00', '否', null, 'ghgh', 'ghgh');
INSERT INTO `yonghuzhuce` VALUES ('45', 'krfk', 'ffdk', 'fff', '男', '北京', 'kf', '老师', '2018-11-02 10:51:10', '否', null, 'fk', 'kf');
INSERT INTO `yonghuzhuce` VALUES ('46', 'temp', 'rq', 'rq', '男', '上海', 'qrq', '学生', '2018-11-02 16:59:57', '否', null, 'qr', 'rqr');
INSERT INTO `yonghuzhuce` VALUES ('47', 'qwqw', 'qwqw', 'q', '男', '上海', 'w', '学生', '2018-11-02 17:07:42', '否', null, 'w', 'w');
