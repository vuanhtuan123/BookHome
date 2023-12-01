/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : webbansacsh

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 30/11/2023 23:31:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `qty` int NOT NULL
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (34, 18, 2, 1);
INSERT INTO `cart` VALUES (35, 22, 2, 1);
INSERT INTO `cart` VALUES (77, 22, 5, 1);
INSERT INTO `cart` VALUES (76, 22, 5, 1);
INSERT INTO `cart` VALUES (89, 27, 0, 1);

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `product_id` int NULL DEFAULT NULL,
  `quantity` int NULL DEFAULT 1,
  `date` date NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` tinyint NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES (6, 1, 28, 5, '2023-11-30', '123', '2121', '33232', 1);
INSERT INTO `carts` VALUES (10, 1, 28, 3, '2023-11-30', 'abc', '123', '123', 1);
INSERT INTO `carts` VALUES (11, 1, 28, 2, '2023-11-30', '123', '123', '123', 1);
INSERT INTO `carts` VALUES (15, 1, 28, 2, '2023-11-30', 'test', '123', '123', 1);

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 42 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1, 22, 'Rất hay', '2023-11-19');
INSERT INTO `comment` VALUES (2, 22, 'Tuyệt', '2023-11-19');
INSERT INTO `comment` VALUES (13, 22, 'Hay lắm bạn ơi', '2023-11-19');
INSERT INTO `comment` VALUES (36, 25, 'hshssak', '2023-11-20');
INSERT INTO `comment` VALUES (37, 25, 'hshssak', '2023-11-20');
INSERT INTO `comment` VALUES (19, 22, 'dc rroif', '2023-11-19');
INSERT INTO `comment` VALUES (20, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (21, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (22, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (23, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (24, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (25, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (26, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (27, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (28, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (29, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (30, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (31, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (32, 18, 'moi', '2023-11-19');
INSERT INTO `comment` VALUES (33, 18, 'moi\n', '2023-11-19');
INSERT INTO `comment` VALUES (34, 18, 'cũ', '2023-11-19');
INSERT INTO `comment` VALUES (35, 22, 'moi', '2023-11-20');
INSERT INTO `comment` VALUES (38, 26, 'tesst', '2023-11-26');
INSERT INTO `comment` VALUES (39, 26, 'tesst', '2023-11-26');
INSERT INTO `comment` VALUES (40, 26, 'tesst', '2023-11-26');
INSERT INTO `comment` VALUES (41, 26, 'tesst', '2023-11-26');

-- ----------------------------
-- Table structure for danhmuc
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE `danhmuc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of danhmuc
-- ----------------------------
INSERT INTO `danhmuc` VALUES (15, 'sách', 0, 0);
INSERT INTO `danhmuc` VALUES (30, 'sách giáo khoa', 0, 0);
INSERT INTO `danhmuc` VALUES (32, 'truyện', 0, 0);

-- ----------------------------
-- Table structure for giohang
-- ----------------------------
DROP TABLE IF EXISTS `giohang`;
CREATE TABLE `giohang`  (
  `idGioHang` int NOT NULL AUTO_INCREMENT,
  `idTaiKhoan` int NOT NULL,
  PRIMARY KEY (`idGioHang`) USING BTREE,
  UNIQUE INDEX `idTaiKhoan`(`idTaiKhoan` ASC) USING BTREE,
  CONSTRAINT `fk_giohang_taikhoan` FOREIGN KEY (`idTaiKhoan`) REFERENCES `taikhoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of giohang
-- ----------------------------

-- ----------------------------
-- Table structure for order_items
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `product_id` int NULL DEFAULT NULL,
  `order_id` int NULL DEFAULT NULL,
  `quantity` int NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_items
-- ----------------------------
INSERT INTO `order_items` VALUES (1, 1, 26, 1, 9, '2023-11-27', '123', '12345', '123');
INSERT INTO `order_items` VALUES (2, 1, 25, 1, 2, '2023-11-28', '123', '12345', '123');
INSERT INTO `order_items` VALUES (3, 1, 23, 1, 4, '2023-11-28', '123', '12345', '123');
INSERT INTO `order_items` VALUES (7, 1, 22, 2, 1, '2023-11-27', '123', '12345', '123');
INSERT INTO `order_items` VALUES (8, 1, 22, 3, 2, '2023-11-26', '123', '12345', '123');
INSERT INTO `order_items` VALUES (9, 1, 23, 3, 1, '2023-11-26', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (10, 1, 26, 4, 7, '2023-11-26', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (11, 1, 26, 5, 3, '2023-11-26', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (12, 1, 26, 6, 8, '2023-11-26', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (13, 1, 26, 7, 1, '2023-11-26', '1', '1', '1');
INSERT INTO `order_items` VALUES (14, 1, 26, 8, 2, '2023-11-29', '1', '1', '1');
INSERT INTO `order_items` VALUES (15, 1, 23, 9, 1, '2023-11-29', '1', '1', '1');
INSERT INTO `order_items` VALUES (16, 1, 22, 10, 4, '2023-11-29', '1', '1', '1');
INSERT INTO `order_items` VALUES (17, 1, 28, 10, 5, '2023-11-29', '1', '1', '1');
INSERT INTO `order_items` VALUES (18, 1, 28, 11, 5, '2023-11-30', '123', '12345', '1');
INSERT INTO `order_items` VALUES (19, 1, 28, 12, 5, '2023-11-30', '123', '12345', '123');
INSERT INTO `order_items` VALUES (20, 1, 28, 12, 3, '2023-11-30', '123', '12345', '123');
INSERT INTO `order_items` VALUES (21, 1, 28, 12, 2, '2023-11-30', '123', '12345', '123');
INSERT INTO `order_items` VALUES (22, 1, 28, 12, 1, '2023-11-30', '123', '12345', '123');
INSERT INTO `order_items` VALUES (23, 1, 28, 13, 5, '2023-11-30', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (24, 1, 28, 13, 3, '2023-11-30', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (25, 1, 28, 13, 2, '2023-11-30', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (26, 1, 23, 13, 1, '2023-11-30', 'test', 'test', 'test');
INSERT INTO `order_items` VALUES (27, 1, 22, 14, 1, '2023-11-30', 'test', 'test', '123');

-- ----------------------------
-- Table structure for sanpham
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  `view` int NOT NULL DEFAULT 0,
  `mota` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `iddm` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ik_sanpham_danhmuc`(`iddm` ASC) USING BTREE,
  CONSTRAINT `ik_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO `sanpham` VALUES (22, 'conan', 2147483647, 'img_7523.jpg', 10, 'cũ', 32);
INSERT INTO `sanpham` VALUES (23, 'sách', 100000, 'image_195509_1_22278.jpg', 0, '', 15);
INSERT INTO `sanpham` VALUES (25, 'sách tiếng anh', 200000, 'image_193948.jpg', 10, 'mới', 32);
INSERT INTO `sanpham` VALUES (26, 'văn', 20000, '9780099590088.jpg', 0, 'cu', 32);
INSERT INTO `sanpham` VALUES (28, 'sách', 100000, 'image (1).png', 0, '123124343', 32);

-- ----------------------------
-- Table structure for taikhoan
-- ----------------------------
DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE `taikhoan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of taikhoan
-- ----------------------------
INSERT INTO `taikhoan` VALUES (1, 'test', '123', 'test@gmail.com', 'adfaefwweaf', '0132456789', 0);
INSERT INTO `taikhoan` VALUES (2, 'admin', '123', 'admin@gmail.com', 'test', '123', 1);
INSERT INTO `taikhoan` VALUES (3, '123', '123', NULL, NULL, NULL, 0);

SET FOREIGN_KEY_CHECKS = 1;
