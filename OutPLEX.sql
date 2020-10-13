/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : OutPLEX

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 13/10/2020 09:16:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agents
-- ----------------------------
DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent` varchar(255) DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agents
-- ----------------------------
BEGIN;
INSERT INTO `agents` VALUES (9, 'wwww444', 22, 1);
INSERT INTO `agents` VALUES (10, 'fdssdfds', 65, 1);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(150) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'chavez', '8df2081e1154e8e16a7e78e477c44949', 'Dionisio Chavez', 'Web Developer', 'dchavez');
INSERT INTO `users` VALUES (2, 'jrivera', 'c52331dd6fae697dbfa3954c00600b46', 'Joel Rivera', 'Database Admin', 'jrivera.jpg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
