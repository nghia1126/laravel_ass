/*
 Navicat Premium Data Transfer

 Source Server         : connection
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : ass_laravel

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 14/09/2022 14:46:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (1, 1, 31, 11, '2022-08-16 17:24:23', '2022-08-17 06:21:48');
INSERT INTO `cart` VALUES (2, 1, 32, 11, '2022-08-17 02:30:25', '2022-08-17 06:21:48');
INSERT INTO `cart` VALUES (3, 2, 32, 9, '2022-08-17 02:37:54', '2022-08-17 03:18:42');
INSERT INTO `cart` VALUES (4, 6, 32, 5, '2022-08-17 02:48:55', '2022-08-17 02:48:55');
INSERT INTO `cart` VALUES (5, 3, 32, 1, '2022-08-17 05:22:42', '2022-08-17 05:22:42');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Ghế', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (2, 'Tủ', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (3, 'Giường', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (4, 'Bàn', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (5, 'Đèn nội thất', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (14, 'tủ quần áo', '2022-08-16 15:56:57', '2022-08-16 15:56:57');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (6, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (7, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_07_27_052123_create_products_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_08_08_012133_create_sp_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_08_13_153808_create_category_table', 2);
INSERT INTO `migrations` VALUES (13, '2022_08_16_163108_create_cart_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Ghế sofa', 1, '5000000', 'images/products/_fLXyobYET74IB1gdTe21AoGwfcszMyapMCzYbwCq.png', 'Là một món đồ nội thất dành cho hai hay nhiều người cùng ngồi một lúc. Ghế gồm có phần mặt ngồi, tay vịn, tựa lưng được bọc một phần hoặc toàn bộ bằng da hay vải, dưới chỗ ngồi có lò xo và đệm.', '2022-08-13 16:29:48', '2022-08-16 07:14:22');
INSERT INTO `products` VALUES (2, 'Ghế tựa', 1, '2000000', 'images/products/_SQelF2RzxpA4155jhXTq8YEU6Yv82AlU2oQi02Pc.png', 'Mẫu ghế tựa thư giãn đẹp chính là nhân tố quan trọng giúp không gian phòng khách thêm đẹp, sang, đầy đủ và tạo ấn tượng trong mắt các vị khách, người thân, bạn bè khi ghé chơi nhà bạn.', '2022-08-16 07:20:23', '2022-08-16 07:31:01');
INSERT INTO `products` VALUES (3, 'Ghế bập bênh', 1, '4000000', 'images/products/Ghế bập bênh_NBBc2XZLo1SlZH0ZMyrwi7Jh6gaiO1wKwytbpl1o.png', 'Với cấu tạo khá đặc biệt, ngoài phần lưng tựa thì ghế thư giãn bập bênh còn có thanh gỗ/mây hay kim loại uốn cong dưới. Thiết kế này của ghế sẽ giúp cân bằng trọng lực', '2022-08-16 07:23:36', '2022-08-16 07:23:36');
INSERT INTO `products` VALUES (4, 'Ghế giám đốc', 1, '6000000', 'images/products/Ghế giám đốc_WvSZ99cgZlCEDZ1cyMjWqIkd1cx4UgBaI6eqjMlR.png', 'Chất liệu khung gỗ được tạo thành bởi gỗ Thông được nhập khẩu trực tiếp từ Mỹ. Đảm bảo độ bền cao khi có thể sử dụng 7-10 năm nếu bảo quản tốt. Ngoài ra, còn có thể chống chọi tốt mối mọt do đã được tẩm sấy công nghệ cao.', '2022-08-16 07:29:01', '2022-08-16 07:29:01');
INSERT INTO `products` VALUES (5, 'Son môi', 13, '112121', 'images/products/Son môi_cgSnidhjyY7mHsG16k36vxcNyvqgcRATE5tnopX1.jpg', 'rthththtrhtrhtrhtrhtrhtrhtrhtrhtrh', '2022-08-16 09:51:10', '2022-08-16 09:51:10');
INSERT INTO `products` VALUES (6, 'Giường đệm', 3, '5000000', 'images/products/_Pqz43ivbmSEjTvD1sQv4u5VY2ShPPXfbxUQtXiPr.png', 'Giường ngủ hiện đại có phần đầu giường làm kệ để đồ và phần tựa lưng tiện lợi. Thiết kế hiện đại, trẻ trung mang lại sự sang trọng cho không gian phòng ngủ của bạn', '2022-08-16 15:57:28', '2022-08-17 02:53:05');
INSERT INTO `products` VALUES (7, 'Giường ngủ Nhật Bản', 3, '12000000', 'images/products/Giường ngủ Nhật Bản_floXwtr1SFLAdyfxk2Fpqhzkoei9Tap02EKM0UG6.jpg', 'Giường ngủ bằng gỗ kiểu Nhật GHS-9234 có thiết kế mang đậm phong cách Nhật Bản, đơn giản tiện ích và không kém phần sang trọng. Giường ngủ bằng gỗ này có kết cấu chắc chắn, bề mặt mịn vì được phủ lớp melamine.', '2022-08-17 02:54:55', '2022-08-17 02:54:55');
INSERT INTO `products` VALUES (8, 'Giường ngủ hoàng gia', 3, '30000000', 'images/products/Giường ngủ hoàng gia_pp2jMYvfGQ8X9xmFFpS3HQdDaL4DB5goD1bnRq2B.jpg', 'Nếu bạn đang tìm kiếm một chiếc giường có thiết kế cực kỳ hoành tráng, sang trọng, cổ điển và đậm chất quý tộc thì những mẫu giường hoàng gia chắc chắn sẽ là một sự lựa chọn hàng đầu.', '2022-08-17 05:06:32', '2022-08-17 05:06:32');
INSERT INTO `products` VALUES (9, 'đèn nhỏ', 5, '300000', 'images/products/đèn nhỏ_Iu1yK9jOsqEbXxMzAC1q9EDC3usmponq76SWWW0t.png', 'đèn đẹp', '2022-08-17 05:07:32', '2022-08-17 05:07:32');

-- ----------------------------
-- Table structure for sp
-- ----------------------------
DROP TABLE IF EXISTS `sp`;
CREATE TABLE `sp`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sp
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` int UNSIGNED NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Albina Bergstrom', 'fhomenick@example.com', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CNmcYODHaC', 1, 'https://via.placeholder.com/100x100.png/00ff66?text=impedit', 0, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (3, 'Meggie Funk', 'mmante@example.net', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eJI9Qzx8wA', 0, 'https://via.placeholder.com/100x100.png/005577?text=sit', 1, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (4, 'Diana Zieme', 'reyna.maggio@example.org', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I9AECu6FkX', 0, 'https://via.placeholder.com/100x100.png/00cc44?text=deleniti', 2, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (5, 'Logan Carroll', 'bwitting@example.net', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9efKWnd5Sf', 1, 'https://via.placeholder.com/100x100.png/000022?text=sed', 0, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (7, 'Jasen Parker', 'kyle.altenwerth@example.org', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Czg2pUAfPX', 1, 'https://via.placeholder.com/100x100.png/00bbee?text=nam', 0, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (8, 'Edd Schamberger', 'haag.titus@example.net', '2022-08-08 05:13:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IvPSHk4hAG', 0, 'https://via.placeholder.com/100x100.png/001100?text=delectus', 0, '2022-08-08 05:13:34', '2022-08-08 05:13:34');
INSERT INTO `users` VALUES (15, 'nghĩa', 'n@gmail.com', NULL, '$2y$10$35OsCxwpzQ3sd6WE6cNaIuhuYgAlGb9VNG.LEstCrGtCHkbRk2iIO', NULL, 0, 'null', 0, '2022-08-10 05:02:48', '2022-08-10 05:02:48');
INSERT INTO `users` VALUES (25, 'Hollie Dibbert', 'cathrine21@example.org', '2022-08-13 15:43:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tqX9zItwxs', 1, 'https://via.placeholder.com/100x100.png/00ff33?text=saepe', 1, '2022-08-13 15:43:14', '2022-08-13 15:43:14');
INSERT INTO `users` VALUES (26, 'Ethelyn Beier DVM', 'cschuster@example.net', '2022-08-13 15:43:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7Ex6V2wDpa', 0, 'https://via.placeholder.com/100x100.png/00bbdd?text=non', 0, '2022-08-13 15:43:14', '2022-08-13 15:43:14');
INSERT INTO `users` VALUES (31, 'Sinthoi', 'a@gmail.com', NULL, '$2y$10$L95xCpTbFQM9yGoPIyeXkOTieNwAVPuEgkUK0uAQrn2wkL3qa4nd2', NULL, 1, 'null', 0, '2022-08-16 15:56:15', '2022-08-16 15:56:15');
INSERT INTO `users` VALUES (32, 'ok', 'ok@gmail.com', NULL, '$2y$10$k6qEoqe8Axu2d3HaSc7r..yeG9//X3srPQbVEdZs2/aoREafmeWU.', NULL, 1, 'null', 0, '2022-08-17 02:16:49', '2022-08-17 02:16:49');

SET FOREIGN_KEY_CHECKS = 1;
