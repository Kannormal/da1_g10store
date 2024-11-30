-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for g10_store
CREATE DATABASE IF NOT EXISTS `g10_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `g10_store`;

-- Dumping structure for table g10_store.account
CREATE TABLE IF NOT EXISTS `account` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.account: ~3 rows (approximately)
INSERT INTO `account` (`ID`, `user_name`, `name`, `password`, `email`, `phone`, `image_src`, `role`, `location`, `created_at`, `updated_at`) VALUES
	(1, 'banned client', 'full name 1', '123432', 'hamlo1@gmail.com', '0987876567', 'ảnh 1', 1, 'location 1', '2024-11-14', '2024-11-14'),
	(2, 'normal client', 'client 2', 'cli348', 'vanminh@gmail.com', '0375429843', 'ảnh 2', 2, 'location 3', '2024-11-14', '2024-11-14'),
	(3, 'admin1', 'admin1', '123456admin', 'hoctap@gmail.com', '0634982486', 'ảnh 3', 3, 'location 2', '2024-11-14', '2024-11-14');

-- Dumping structure for table g10_store.article
CREATE TABLE IF NOT EXISTS `article` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `account_id` int NOT NULL,
  `content` text NOT NULL,
  `status` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_articles_account` (`account_id`),
  KEY `fk_articles_article_categories` (`category_id`),
  CONSTRAINT `fk_articles_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_articles_article_categories` FOREIGN KEY (`category_id`) REFERENCES `article_categories` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.article: ~3 rows (approximately)
INSERT INTO `article` (`ID`, `name`, `short`, `account_id`, `content`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, 'bài viết 1', 'tóm tắt 1', 2, 'nội dung 1', 1, '2024-11-14', '2024-11-14', 1),
	(2, 'Bài viết 2', 'tóm tắt 2', 3, 'Nội dung 2', 1, '2024-11-14', '2024-11-14', 2),
	(3, 'bài viết 3', 'tóm tắt 3', 3, 'nội dung 3', 0, '2024-11-14', '2024-11-14', 1);

-- Dumping structure for table g10_store.article_categories
CREATE TABLE IF NOT EXISTS `article_categories` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.article_categories: ~2 rows (approximately)
INSERT INTO `article_categories` (`ID`, `name`, `image_src`, `status`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'điện tử', 'ảnh 1', 1, 'Nói về đồ điện tử', '2024-11-14', '2024-11-14'),
	(2, 'Ứng dụng', 'ảnh 2', 1, 'Nói về những ứng dụng đang nổi', '2024-11-14', '2024-11-14');

-- Dumping structure for table g10_store.article_comments
CREATE TABLE IF NOT EXISTS `article_comments` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `article_id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_articles_comments_account` (`account_id`),
  KEY `fk_articles_comments_articles` (`article_id`),
  CONSTRAINT `fk_articles_comments_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_articles_comments_articles` FOREIGN KEY (`article_id`) REFERENCES `article` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.article_comments: ~3 rows (approximately)
INSERT INTO `article_comments` (`ID`, `account_id`, `article_id`, `content`, `created_at`, `update_at`, `status`) VALUES
	(1, 1, 1, 'bình luận 1', '2024-11-14', '2024-11-14', 0),
	(2, 2, 2, 'bình luận 2', '2024-11-14', '2024-11-14', 1),
	(3, 2, 3, 'bình luận 3', '2024-11-14', '2024-11-14', 1);

-- Dumping structure for table g10_store.article_images
CREATE TABLE IF NOT EXISTS `article_images` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `article_id` int NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_articles_images_articles` (`article_id`),
  CONSTRAINT `fk_articles_images_articles` FOREIGN KEY (`article_id`) REFERENCES `article` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.article_images: ~4 rows (approximately)
INSERT INTO `article_images` (`ID`, `article_id`, `image_src`, `created_at`, `updated_at`) VALUES
	(1, 1, 'arnh 1', '2024-11-14', '2024-11-14'),
	(2, 1, 'ảnh 2', '2024-11-14', '2024-11-14'),
	(3, 2, 'ảnh 3', '2024-11-14', '2024-11-14'),
	(4, 3, 'ảnh 4', '2024-11-14', '2024-11-14');

-- Dumping structure for table g10_store.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_cart_account` (`account_id`),
  CONSTRAINT `fk_cart_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.cart: ~3 rows (approximately)
INSERT INTO `cart` (`ID`, `account_id`, `created_at`, `update_at`) VALUES
	(1, 1, '2024-11-14', '2024-11-14'),
	(2, 3, '2024-11-14', '2024-11-14'),
	(3, 2, '2024-11-14', '2024-11-14');

-- Dumping structure for table g10_store.cart_items
CREATE TABLE IF NOT EXISTS `cart_items` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `added_at` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_cart_item_cart` (`cart_id`),
  KEY `fk_cart_item_product` (`product_id`),
  CONSTRAINT `fk_cart_item_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_cart_item_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.cart_items: ~3 rows (approximately)
INSERT INTO `cart_items` (`ID`, `cart_id`, `product_id`, `quantity`, `added_at`) VALUES
	(1, 2, 2, 1, '2024-11-14'),
	(2, 2, 1, 1, '2024-11-14'),
	(3, 3, 1, 10, '2024-11-14');

-- Dumping structure for table g10_store.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` text NOT NULL,
  `image_src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.categories: ~2 rows (approximately)
INSERT INTO `categories` (`ID`, `cate_name`, `type`, `image_src`, `status`, `description`) VALUES
	(1, 'Điện thoại', '1', 'ảnh 1', 1, 'Những chiếc điện thoại'),
	(2, 'Smartphone', '2', 'ảnh 2', 1, 'Những chiếc điện thoại thông minh');

-- Dumping structure for table g10_store.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `status` int NOT NULL,
  `payment_method` int NOT NULL,
  `shiping_address` varchar(255) NOT NULL,
  `total` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_orders_account` (`account_id`),
  CONSTRAINT `fk_orders_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.orders: ~2 rows (approximately)
INSERT INTO `orders` (`ID`, `account_id`, `status`, `payment_method`, `shiping_address`, `total`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 2, 'dịa chỉ một', 2987000, '2024-11-14', '2024-11-14'),
	(2, 2, 1, 1, 'dịa chỉ 2', 234123, '2024-11-14', '2024-11-14');

-- Dumping structure for table g10_store.orders_items
CREATE TABLE IF NOT EXISTS `orders_items` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_order_tiems_order` (`order_id`),
  KEY `fk_order_tiems_product` (`product_id`),
  CONSTRAINT `fk_order_tiems_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_order_tiems_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.orders_items: ~3 rows (approximately)
INSERT INTO `orders_items` (`ID`, `order_id`, `product_id`, `price`, `quantity`, `total`) VALUES
	(1, 2, 1, 3456, 100, 345600),
	(2, 2, 2, 11000, 10, 110000),
	(3, 1, 2, 9870, 2, 19740);

-- Dumping structure for table g10_store.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `category_id` int NOT NULL,
  `status` int NOT NULL,
  `cate_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `fk_product_category` (`category_id`),
  CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.products: ~2 rows (approximately)
INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `category_id`, `status`, `cate_name`) VALUES
	(1, 'Điện thoại iphone', 'img/logo.png', 50000000, 245, 'Điện thoại oppo', 1, 1, ''),
	(2, 'Điện thoại 2', 'img/iphone16.png', 7000000, 431, 'Điện thoại Samsung', 2, 1, '');

-- Dumping structure for table g10_store.product_comments
CREATE TABLE IF NOT EXISTS `product_comments` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rate` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_product_comment_product` (`product_id`),
  KEY `fk_product_comment_account` (`account_id`),
  CONSTRAINT `fk_product_comment_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_product_comment_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.product_comments: ~3 rows (approximately)
INSERT INTO `product_comments` (`ID`, `account_id`, `product_id`, `rate`, `description`, `created_at`, `updated_at`, `status`) VALUES
	(1, 1, 1, 3, 'bình luận 1', '2024-11-14', '2024-11-14', 1),
	(2, 3, 2, 2, 'bình luận 2', '2024-11-14', '2024-11-14', 1),
	(3, 2, 2, 5, 'bình luận 3', '2024-11-14', '2024-11-14', 1);

-- Dumping structure for table g10_store.product_images
CREATE TABLE IF NOT EXISTS `product_images` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_product_images_product` (`product_id`),
  CONSTRAINT `fk_product_images_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table g10_store.product_images: ~3 rows (approximately)
INSERT INTO `product_images` (`ID`, `product_id`, `image_src`, `created_at`, `updated_at`) VALUES
	(1, 1, 'ảnh1', '2024-11-14', '2024-11-14'),
	(2, 1, 'ảnh2', '2024-11-14', '2024-11-14'),
	(3, 2, 'ảnh 1', '2024-11-14', '2024-11-14');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
