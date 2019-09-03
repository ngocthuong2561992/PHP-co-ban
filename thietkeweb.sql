/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : thietkeweb

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 04/09/2019 02:06:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tblbaiviet
-- ----------------------------
DROP TABLE IF EXISTS `tblbaiviet`;
CREATE TABLE `tblbaiviet`  (
  `id` int(11) NOT NULL,
  `danhmucbaiviet` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `tomtat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbldanhmucbaiviet
-- ----------------------------
DROP TABLE IF EXISTS `tbldanhmucbaiviet`;
CREATE TABLE `tbldanhmucbaiviet`  (
  `id` int(11) NOT NULL,
  `danhmucbaiviet` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `menu` int(255) NULL DEFAULT NULL,
  `home` int(255) NULL DEFAULT NULL,
  `ordernum` int(10) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbllienhe
-- ----------------------------
DROP TABLE IF EXISTS `tbllienhe`;
CREATE TABLE `tbllienhe`  (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `dienthoai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL,
  `ngaydang` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tblslider
-- ----------------------------
DROP TABLE IF EXISTS `tblslider`;
CREATE TABLE `tblslider`  (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `anh_thumb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `ordernum` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tblsupports
-- ----------------------------
DROP TABLE IF EXISTS `tblsupports`;
CREATE TABLE `tblsupports`  (
  `id` int(11) NOT NULL,
  `yahoo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `skyper` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tblthongtincongty
-- ----------------------------
DROP TABLE IF EXISTS `tblthongtincongty`;
CREATE TABLE `tblthongtincongty`  (
  `id` int(11) NOT NULL,
  `tencongty` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `diachi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `dienthoai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `hotline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tblvideo
-- ----------------------------
DROP TABLE IF EXISTS `tblvideo`;
CREATE TABLE `tblvideo`  (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL DEFAULT NULL,
  `ordernum` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
