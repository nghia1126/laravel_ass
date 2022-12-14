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
INSERT INTO `category` VALUES (1, 'Gh???', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (2, 'T???', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (3, 'Gi?????ng', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (4, 'B??n', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (5, '????n n???i th???t', '2022-08-13 15:44:04', '2022-08-13 15:44:04');
INSERT INTO `category` VALUES (14, 't??? qu???n ??o', '2022-08-16 15:56:57', '2022-08-16 15:56:57');

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
INSERT INTO `products` VALUES (1, 'Gh??? sofa', 1, '5000000', 'images/products/_fLXyobYET74IB1gdTe21AoGwfcszMyapMCzYbwCq.png', 'L?? m???t m??n ????? n???i th???t d??nh cho hai hay nhi???u ng?????i c??ng ng???i m???t l??c. Gh??? g???m c?? ph???n m???t ng???i, tay v???n, t???a l??ng ???????c b???c m???t ph???n ho???c to??n b??? b???ng da hay v???i, d?????i ch??? ng???i c?? l?? xo v?? ?????m.', '2022-08-13 16:29:48', '2022-08-16 07:14:22');
INSERT INTO `products` VALUES (2, 'Gh??? t???a', 1, '2000000', 'images/products/_SQelF2RzxpA4155jhXTq8YEU6Yv82AlU2oQi02Pc.png', 'M???u gh??? t???a th?? gi??n ?????p ch??nh l?? nh??n t??? quan tr???ng gi??p kh??ng gian ph??ng kh??ch th??m ?????p, sang, ?????y ????? v?? t???o ???n t?????ng trong m???t c??c v??? kh??ch, ng?????i th??n, b???n b?? khi gh?? ch??i nh?? b???n.', '2022-08-16 07:20:23', '2022-08-16 07:31:01');
INSERT INTO `products` VALUES (3, 'Gh??? b???p b??nh', 1, '4000000', 'images/products/Gh??? b???p b??nh_NBBc2XZLo1SlZH0ZMyrwi7Jh6gaiO1wKwytbpl1o.png', 'V???i c???u t???o kh?? ?????c bi???t, ngo??i ph???n l??ng t???a th?? gh??? th?? gi??n b???p b??nh c??n c?? thanh g???/m??y hay kim lo???i u???n cong d?????i. Thi???t k??? n??y c???a gh??? s??? gi??p c??n b???ng tr???ng l???c', '2022-08-16 07:23:36', '2022-08-16 07:23:36');
INSERT INTO `products` VALUES (4, 'Gh??? gi??m ?????c', 1, '6000000', 'images/products/Gh??? gi??m ?????c_WvSZ99cgZlCEDZ1cyMjWqIkd1cx4UgBaI6eqjMlR.png', 'Ch???t li???u khung g??? ???????c t???o th??nh b???i g??? Th??ng ???????c nh???p kh???u tr???c ti???p t??? M???. ?????m b???o ????? b???n cao khi c?? th??? s??? d???ng 7-10 n??m n???u b???o qu???n t???t. Ngo??i ra, c??n c?? th??? ch???ng ch???i t???t m???i m???t do ???? ???????c t???m s???y c??ng ngh??? cao.', '2022-08-16 07:29:01', '2022-08-16 07:29:01');
INSERT INTO `products` VALUES (5, 'Son m??i', 13, '112121', 'images/products/Son m??i_cgSnidhjyY7mHsG16k36vxcNyvqgcRATE5tnopX1.jpg', 'rthththtrhtrhtrhtrhtrhtrhtrhtrhtrh', '2022-08-16 09:51:10', '2022-08-16 09:51:10');
INSERT INTO `products` VALUES (6, 'Gi?????ng ?????m', 3, '5000000', 'images/products/_Pqz43ivbmSEjTvD1sQv4u5VY2ShPPXfbxUQtXiPr.png', 'Gi?????ng ng??? hi???n ?????i c?? ph???n ?????u gi?????ng l??m k??? ????? ????? v?? ph???n t???a l??ng ti???n l???i. Thi???t k??? hi???n ?????i, tr??? trung mang l???i s??? sang tr???ng cho kh??ng gian ph??ng ng??? c???a b???n', '2022-08-16 15:57:28', '2022-08-17 02:53:05');
INSERT INTO `products` VALUES (7, 'Gi?????ng ng??? Nh???t B???n', 3, '12000000', 'images/products/Gi?????ng ng??? Nh???t B???n_floXwtr1SFLAdyfxk2Fpqhzkoei9Tap02EKM0UG6.jpg', 'Gi?????ng ng??? b???ng g??? ki???u Nh???t GHS-9234 c?? thi???t k??? mang ?????m phong c??ch Nh???t B???n, ????n gi???n ti???n ??ch v?? kh??ng k??m ph???n sang tr???ng. Gi?????ng ng??? b???ng g??? n??y c?? k???t c???u ch???c ch???n, b??? m???t m???n v?? ???????c ph??? l???p melamine.', '2022-08-17 02:54:55', '2022-08-17 02:54:55');
INSERT INTO `products` VALUES (8, 'Gi?????ng ng??? ho??ng gia', 3, '30000000', 'images/products/Gi?????ng ng??? ho??ng gia_pp2jMYvfGQ8X9xmFFpS3HQdDaL4DB5goD1bnRq2B.jpg', 'N???u b???n ??ang t??m ki???m m???t chi???c gi?????ng c?? thi???t k??? c???c k??? ho??nh tr??ng, sang tr???ng, c??? ??i???n v?? ?????m ch???t qu?? t???c th?? nh???ng m???u gi?????ng ho??ng gia ch???c ch???n s??? l?? m???t s??? l???a ch???n h??ng ?????u.', '2022-08-17 05:06:32', '2022-08-17 05:06:32');
INSERT INTO `products` VALUES (9, '????n nh???', 5, '300000', 'images/products/????n nh???_Iu1yK9jOsqEbXxMzAC1q9EDC3usmponq76SWWW0t.png', '????n ?????p', '2022-08-17 05:07:32', '2022-08-17 05:07:32');

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
INSERT INTO `users` VALUES (15, 'ngh??a', 'n@gmail.com', NULL, '$2y$10$35OsCxwpzQ3sd6WE6cNaIuhuYgAlGb9VNG.LEstCrGtCHkbRk2iIO', NULL, 0, 'null', 0, '2022-08-10 05:02:48', '2022-08-10 05:02:48');
INSERT INTO `users` VALUES (25, 'Hollie Dibbert', 'cathrine21@example.org', '2022-08-13 15:43:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tqX9zItwxs', 1, 'https://via.placeholder.com/100x100.png/00ff33?text=saepe', 1, '2022-08-13 15:43:14', '2022-08-13 15:43:14');
INSERT INTO `users` VALUES (26, 'Ethelyn Beier DVM', 'cschuster@example.net', '2022-08-13 15:43:14', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7Ex6V2wDpa', 0, 'https://via.placeholder.com/100x100.png/00bbdd?text=non', 0, '2022-08-13 15:43:14', '2022-08-13 15:43:14');
INSERT INTO `users` VALUES (31, 'Sinthoi', 'a@gmail.com', NULL, '$2y$10$L95xCpTbFQM9yGoPIyeXkOTieNwAVPuEgkUK0uAQrn2wkL3qa4nd2', NULL, 1, 'null', 0, '2022-08-16 15:56:15', '2022-08-16 15:56:15');
INSERT INTO `users` VALUES (32, 'ok', 'ok@gmail.com', NULL, '$2y$10$k6qEoqe8Axu2d3HaSc7r..yeG9//X3srPQbVEdZs2/aoREafmeWU.', NULL, 1, 'null', 0, '2022-08-17 02:16:49', '2022-08-17 02:16:49');

SET FOREIGN_KEY_CHECKS = 1;
