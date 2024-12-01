-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 01, 2024 lúc 03:07 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `g10_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ID` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID`, `user_name`, `name`, `password`, `email`, `phone`, `image_src`, `role`, `location`, `created_at`, `updated_at`) VALUES
(1, 'banned client', 'full name 1', '123432', 'hamlo1@gmail.com', '0987876567', 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', 1, 'location 1', '2024-11-14', '2024-11-14'),
(2, 'normal client', 'client 2', 'cli348', 'vanminh@gmail.com', '0375429843', 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', 2, 'location 3', '2024-11-14', '2024-11-14'),
(3, 'admin1', 'admin1', '123456admin', 'hoctap@gmail.com', '0634982486', 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', 3, 'location 2', '2024-11-14', '2024-11-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `short` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_id` int NOT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` int NOT NULL,
  `category_id` int NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`ID`, `name`, `short`, `account_id`, `image_src`, `content`, `status`, `category_id`, `created_at`, `update_at`) VALUES
(1, 'bài viết 1', 'tóm tắt 1                        ', 2, 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', 'nội dung 1                        ', 0, 1, '2024-11-15', '2024-11-29'),
(2, 'Bài viết 255', '                                                        tóm tắt 22222                                                ', 3, 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', '                                                        Nội dung 22222                                                ', 0, 2, '2024-11-15', '2024-11-15'),
(3, '3 cách khắc phục lỗi iOS 18 hao pin siêu đơn giản mà 90% người dùng iPhone chưa biết đến', '                            iOS 18, phiên bản hệ điều hành mới nhất từ Apple, mang đến nhiều tính năng hấp dẫn và cải tiến vượt trội. Bài viết này sẽ cung cấp cho bạn cách khắc phục lỗi iOS 18 hao pin, giúp bạn tận hưởng trọn vẹn những trải nghiệm tuyệt vời trên chiếc điện thoại iPhone của mình.                                                                                                                   ', 2, 'img/z4174484918644_471492c578197c6d71197c36a71cbf19.jpg', '                                                                                    1. Bật chế độ tiết kiệm pin\r\nBật chế độ tiết kiệm pin trên iOS 18 là một giải pháp nhanh chóng và hiệu quả để giảm tình trạng hao pin. Khi kích hoạt, chế độ này sẽ tự động điều chỉnh các hoạt động nền, độ sáng màn hình, tốc độ làm mới và một số tính năng khác để tiết kiệm năng lượng. Mặc dù có thể làm giảm hiệu suất thiết bị đôi chút, nhưng chế độ tiết kiệm pin sẽ giúp kéo dài thời gian sử dụng pin đáng kể, đặc biệt hữu ích trong những tình huống cần thiết.                 \r\nHãy xem việc bật chế độ này như một \"phao cứu sinh\" tạm thời để duy trì hoạt động của iPhone khi pin yếu, đồng thời tìm hiểu nguyên nhân và các giải pháp khác để khắc phục triệt để vấn đề hao pin trên iOS 18. Truy cậpvào mục Cài đặt > Chọn Pin > Tiến hành Bật chế độ nguồn điện thấp lên nhé.\r\n                        ', 1, 1, '2024-11-15', '2024-12-01'),
(4, 'bai viet 25', '                            baiviet25                        ', 2, 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', '                            baiviet25                        ', 1, 1, '2024-11-15', '2024-12-01'),
(5, 'Bài viết 255', 'qưer', 3, 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', 'qưert', 1, 2, '2024-11-29', '2024-11-29'),
(6, 'Điệ thoại 5', '                            qưert                                                ', 2, 'img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg', '                            qưerty                                                ', 1, 1, '2024-12-01', '2024-12-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_categories`
--

CREATE TABLE `article_categories` (
  `ID` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `article_categories`
--

INSERT INTO `article_categories` (`ID`, `name`, `image_src`, `status`, `description`, `created_at`, `update_at`) VALUES
(1, 'điện tử', 'img/z4147668732450_9329651020a5c66460648f04d8aa4dd4.jpg', 1, 'Nói về đồ điện tử mới', '2024-11-15', '2024-11-29'),
(2, 'Ứng dụng', '', 1, 'Nói về những ứng dụng đang nổi', '2024-11-15', '2024-11-29'),
(3, 'Điệ thoại 56666', 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 0, 'Một babfi viết mới', '2024-11-15', '2024-11-29'),
(4, 'Điệ thoại 56', 'img/z4221560103669_06e681e3b7499ba84e8dea4159901646.jpg', 1, 'poiiuy', '2024-11-29', '2024-11-29'),
(5, 'Điệ thoại 6', 'img/z4221560103669_06e681e3b7499ba84e8dea4159901646.jpg', 1, 'qưerkjh', '2024-11-29', '2024-11-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_comments`
--

CREATE TABLE `article_comments` (
  `ID` int NOT NULL,
  `account_id` int NOT NULL,
  `article_id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `article_comments`
--

INSERT INTO `article_comments` (`ID`, `account_id`, `article_id`, `content`, `created_at`, `update_at`, `status`) VALUES
(1, 1, 1, 'bình luận 1', '2024-11-14', '2024-11-14', 1),
(2, 2, 2, 'bình luận 2', '2024-11-14', '2024-11-14', 1),
(3, 2, 3, 'bình luận 3', '2024-11-14', '2024-11-14', 1),
(4, 1, 1, 'qưer', '2024-12-01', '2024-12-01', 1),
(5, 3, 3, 'qqq', '2024-12-01', '2024-12-01', 1),
(6, 3, 5, 'assdf', '2024-12-01', '2024-12-01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_images`
--

CREATE TABLE `article_images` (
  `ID` int NOT NULL,
  `article_id` int NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `article_images`
--

INSERT INTO `article_images` (`ID`, `article_id`, `image_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/z4168773484710_32e71de54490bca2efd84e2bf63e624c.jpg', 1, '2024-11-14', '2024-12-01'),
(2, 1, 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 1, '2024-11-14', '2024-12-01'),
(3, 3, 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 1, '2024-11-14', '2024-12-01'),
(4, 1, 'img/z4168773484710_32e71de54490bca2efd84e2bf63e624c.jpg', 1, '2024-11-14', '2024-12-01'),
(5, 2, 'img/z4174484922213_28f67cb0ba66b95a052848206e0561a1.jpg', 1, '2024-11-30', '2024-11-30'),
(6, 1, 'img/z4140401790482_9e820235f6565e1c75a70e295e361d36.jpg', 1, '2024-12-01', '2024-12-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `ID` int NOT NULL,
  `account_id` int NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`ID`, `account_id`, `created_at`, `update_at`) VALUES
(1, 1, '2024-11-14', '2024-11-14'),
(2, 3, '2024-11-14', '2024-11-14'),
(3, 2, '2024-11-14', '2024-11-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `ID` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `added_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_items`
--

INSERT INTO `cart_items` (`ID`, `cart_id`, `product_id`, `quantity`, `added_at`) VALUES
(1, 2, 2, 1, '2024-11-14'),
(2, 2, 1, 1, '2024-11-14'),
(3, 3, 1, 10, '2024-11-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `ID` int NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` text NOT NULL,
  `image_src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`ID`, `cate_name`, `type`, `image_src`, `status`, `description`, `created_at`, `update_at`) VALUES
(1, 'Điện thoại', '1', 'img/z4140401797049_75af565c9f10062cc83012bf742d63f5.jpg', 1, 'Những chiếc điện thoại', '2024-11-15', '2024-11-29'),
(2, 'Smartphone', '2', 'img/z4145342262733_9c6b5aefc677d1d554cb52a3e382a4b6.jpg', 1, 'Những chiếc điện thoại thông minh', '2024-11-15', '2024-11-29'),
(3, 'Điệ thoại 566', '1', 'img/z4164000660078_1eeebfbee037853705ae943f24559581.jpg', 0, 'qưert566', '2024-11-15', '2024-11-29'),
(4, 'Điệ thoại 5', '1', 'img/z4163981159404_a21ba362d0050802076df69ea2289909.jpg', 0, 'qưertynew', '2024-11-15', '2024-11-29'),
(5, 'Điệ thoại 56', '1', 'img/z4268082269991_b85d03aa84e22e7b18e2848fb8230498.jpg', 0, 'ewwn', '2024-11-15', '2024-11-29'),
(6, 'Điệ thoại 6', '1', 'img/z4268082301681_fa16c636eeb5644a29e5dfa485844c7f.jpg', 1, 'lkjhg', '2024-11-29', '2024-11-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID` int NOT NULL,
  `account_id` int NOT NULL,
  `status` int NOT NULL,
  `payment_method` int NOT NULL,
  `shiping_address` varchar(255) NOT NULL,
  `total` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`ID`, `account_id`, `status`, `payment_method`, `shiping_address`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'dịa chỉ một', 2987000, '2024-11-14', '2024-11-14'),
(2, 2, 1, 1, 'dịa chỉ 2', 234123, '2024-11-14', '2024-11-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_items`
--

CREATE TABLE `orders_items` (
  `ID` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_items`
--

INSERT INTO `orders_items` (`ID`, `order_id`, `product_id`, `price`, `quantity`, `total`) VALUES
(1, 2, 1, 3456, 100, 345600),
(2, 2, 2, 11000, 10, 110000),
(3, 1, 2, 9870, 2, 19740);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `category_id` int NOT NULL,
  `status` int NOT NULL,
  `cate_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `description`, `category_id`, `status`, `cate_name`, `created_at`, `update_at`) VALUES
(1, 'Điện thoại iphone', 'img/z4140401797049_75af565c9f10062cc83012bf742d63f5.jpg', 50000000, 245, 'Điện thoại oppo', 2, 1, '', '2024-11-15', '2024-11-30'),
(2, 'Điện thoại 2', 'img/z4283316544301_ca6c285320f7be6d35fc75666cce416a.jpg', 7000000, 440, 'Điện thoại Samsung', 2, 1, '', '2024-11-15', '2024-11-15'),
(3, 'icon type', 'img/z4268082301681_fa16c636eeb5644a29e5dfa485844c7f.jpg', 1234, 23, 'qưertyn', 1, 1, NULL, '2024-11-15', '2024-11-29'),
(4, 'icon type', 'img/z4283316556650_541dda5cde2c2cbe94e37291cc024643.jpg', 123, 23, 'qưertyy', 1, 0, NULL, '2024-11-15', '2024-11-15'),
(5, 'Điệ thoại 2', 'img/z4221560103669_06e681e3b7499ba84e8dea4159901646.jpg', 1234, 12345, 'âddfaafa', 1, 1, NULL, '2024-11-15', '2024-11-15'),
(6, 'Điệ thoại 5', 'img/Capture.PNGcd1.PNG', 1234, 12345678, '1asdfgh', 1, 0, NULL, '2024-11-15', '2024-11-15'),
(7, 'Điệ thoại 5', 'img/Capture.PNG', 1234, 1234567, 'qưe', 1, 1, NULL, '2024-11-15', '2024-11-15'),
(8, 'Điệ thoại 56', 'img/Capture.PNG2.PNG', 123, 12345, '123456', 1, 1, NULL, '2024-11-15', '2024-11-15'),
(9, 'Điệ thoại 5', 'img/z4268083609867_713ce0a52003fc6d9d11ec54fc5ee164.jpg', 123, 12345678, '1234567890', 2, 0, NULL, '2024-11-15', '2024-11-15'),
(10, 'Điệ thoại 12345', 'img/z4268082288818_c32914b42f65f5c9ed9af1496f90b410.jpg', 1234567890, 1234567890, '12345678890', 1, 0, NULL, '2024-11-15', '2024-11-15'),
(11, 'Điệ thoại 56', 'img/z4145342262733_9c6b5aefc677d1d554cb52a3e382a4b6.jpg', 123, 12345, '123456', 1, 1, NULL, '2024-11-15', '2024-11-15'),
(12, 'Bài viết 255', 'img/Capture.PNGcd1.PNG', 123, 1234, '123456', 2, 1, NULL, '2024-11-15', '2024-11-15'),
(13, 'Bài viết 255', 'img/z4268082268701_ab374eb6fe268e0c10d72837e9678f04.jpg', 12355, 12344, 'qưerty', 1, 1, NULL, '2024-11-15', '2024-11-15'),
(14, 'Điệ thoại 5', 'img/z4268082283112_98de5386069be694e45e6f713604d172.jpg', 123, 12345, 'qưerty', 2, 1, NULL, '2024-11-29', '2024-11-29'),
(15, 'Điệ thoại 5', 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 1234, 123456, 'qưerty', 2, 1, NULL, '2024-11-29', '2024-11-29'),
(16, 'Điệ thoại 5', 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 1234, 123456, 'qưerty', 1, 1, NULL, '2024-11-29', '2024-11-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `ID` int NOT NULL,
  `account_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rate` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product_comments`
--

INSERT INTO `product_comments` (`ID`, `account_id`, `product_id`, `rate`, `description`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, 3, 'bình luận 1', '2024-11-14', '2024-11-14', 1),
(2, 3, 2, 2, 'bình luận 2', '2024-11-14', '2024-11-14', 1),
(3, 2, 2, 5, 'bình luận 3', '2024-11-14', '2024-11-14', 1),
(4, 1, 8, 3, 'qưertyu', NULL, NULL, 1),
(5, 2, 3, 3, 'qưert', NULL, NULL, 1),
(6, 1, 3, 1, 'qưertyu', NULL, NULL, 1),
(7, 2, 1, 4, 'qưerty', '2024-11-29', '2024-11-29', 1),
(8, 3, 1, 1, 'qqwww', '2024-12-01', '2024-12-01', 1),
(9, 3, 1, 2, 'Bình luận 2', '2024-12-01', '2024-12-01', 0),
(10, 3, 1, 1, '', '2024-12-01', '2024-12-01', 0),
(11, 3, 1, 1, '', '2024-12-01', '2024-12-01', 0),
(12, 3, 2, 3, 'sđf', '2024-12-01', '2024-12-01', 1),
(13, 3, 11, 1, 'qưer', '2024-12-01', '2024-12-01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `ID` int NOT NULL,
  `product_id` int NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`ID`, `product_id`, `image_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/z4140401795481_18f233cb8398a87f9863fd1d922f847b.jpg', 1, '2024-11-14', '2024-11-29'),
(2, 1, 'img/z4221560103669_06e681e3b7499ba84e8dea4159901646.jpg', 1, '2024-11-14', '2024-11-29'),
(3, 1, 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 0, '2024-11-14', '2024-11-29'),
(4, 1, 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 0, '2024-11-15', '2024-11-29'),
(5, 7, 'img/z4168773484710_32e71de54490bca2efd84e2bf63e624c.jpg', 0, '2024-11-29', '2024-11-29'),
(6, 1, 'img/z4174484922213_28f67cb0ba66b95a052848206e0561a1.jpg', 1, '2024-11-29', '2024-11-29'),
(7, 2, 'img/z4210619907719_bbff03f99f32b513df4b5df72d6ec89f.jpg', 1, '2024-11-30', '2024-11-30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_articles_account` (`account_id`),
  ADD KEY `fk_articles_article_categories` (`category_id`);

--
-- Chỉ mục cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_articles_comments_account` (`account_id`),
  ADD KEY `fk_articles_comments_articles` (`article_id`);

--
-- Chỉ mục cho bảng `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_articles_images_articles` (`article_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_cart_account` (`account_id`);

--
-- Chỉ mục cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_cart_item_cart` (`cart_id`),
  ADD KEY `fk_cart_item_product` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_orders_account` (`account_id`);

--
-- Chỉ mục cho bảng `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_order_tiems_order` (`order_id`),
  ADD KEY `fk_order_tiems_product` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_product_category` (`category_id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_product_comment_product` (`product_id`),
  ADD KEY `fk_product_comment_account` (`account_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_product_images_product` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `article_images`
--
ALTER TABLE `article_images`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_articles_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_articles_article_categories` FOREIGN KEY (`category_id`) REFERENCES `article_categories` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `article_comments`
--
ALTER TABLE `article_comments`
  ADD CONSTRAINT `fk_articles_comments_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_articles_comments_articles` FOREIGN KEY (`article_id`) REFERENCES `article` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `article_images`
--
ALTER TABLE `article_images`
  ADD CONSTRAINT `fk_articles_images_articles` FOREIGN KEY (`article_id`) REFERENCES `article` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `fk_cart_item_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_item_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `orders_items`
--
ALTER TABLE `orders_items`
  ADD CONSTRAINT `fk_order_tiems_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_order_tiems_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `fk_product_comment_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_product_comment_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_product_images_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
