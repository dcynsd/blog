/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : localhost:3306
 Source Schema         : blog

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 22/10/2020 10:08:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
BEGIN;
INSERT INTO `admin_menu` VALUES (1, 0, 1, 'Index', 'feather icon-bar-chart-2', '/', '2020-10-15 18:27:04', NULL);
INSERT INTO `admin_menu` VALUES (2, 0, 5, 'Admin', 'feather icon-settings', '', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (3, 2, 6, 'Users', '', 'auth/users', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (4, 2, 7, 'Roles', '', 'auth/roles', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (5, 2, 8, 'Permission', '', 'auth/permissions', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (6, 2, 9, 'Menu', '', 'auth/menu', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (7, 2, 10, 'Operation log', '', 'auth/logs', '2020-10-15 18:27:04', '2020-10-20 16:22:53');
INSERT INTO `admin_menu` VALUES (8, 0, 2, '文章管理', 'fa-book', 'posts', '2020-10-15 18:27:33', '2020-10-15 18:27:37');
INSERT INTO `admin_menu` VALUES (9, 0, 3, '友链管理', 'fa-link', 'links', '2020-10-20 15:11:45', '2020-10-20 16:23:00');
INSERT INTO `admin_menu` VALUES (10, 0, 4, '导航管理', 'fa-navicon', 'navigations', '2020-10-20 16:22:47', '2020-10-20 16:22:53');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
