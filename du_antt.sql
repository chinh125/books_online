-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 05:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_antt`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `release_time` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_book` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `release_time`, `image`, `description_book`, `quantity`, `cate_id`, `author_name`, `created_at`, `updated_at`) VALUES
(1, 'Số đỏ', '46000', 2014, 'images/1698207546so-do_4.jpg.webp', 'Nhân vật chính của Số đỏ là Xuân từ chỗ là một kẻ bị coi là hạ lưu, bỗng nhảy lên tầng lớp danh giá của xã hội nhờ trào lưu Âu hóa của giới tiểu tư sản Hà Nội khi đó.', 50, 1, 'Vũ Trọng Phụng', '2023-10-24 14:19:06', '2023-10-24 14:19:06'),
(2, 'Tớ biết tự giác', '65000', 2022, 'images/16984073588935244875751.jpg', 'Em đã biết cách dọn dẹp phòng ngủ thật sạch chưa? Cách xử lí các thiết bị điện trong nhà? Cách làm các món ăn cơ bản? Hay là cách sắp xếp quần áo trong tủ?', 50, 3, 'Mai Ngọc Ánh & Hồng Nga', '2023-10-26 21:49:18', '2023-10-26 21:49:18'),
(3, 'Truyện Kể Chúc Bé Ngủ Ngon - Vui Vẻ', '69000', 2022, 'images/16984104558935227348319.jpg', 'Đắm chìm vào những điều kỳ diệu, khám phá những câu chuyện thần tiên được yêu thích nhất vòng quanh thế giới cùng tranh minh họa đầy màu sắc là nội dung của bộ sách “Truyện kể chúc bé ngủ ngon”', 50, 3, 'Ngân Hà', '2023-10-27 05:40:56', '2023-10-27 05:40:56'),
(4, '365 CHUYỆN KỂ TRƯỚC GIỜ ĐI NGỦ', '62000', 2019, 'images/1700401185image.jpg', '365 Chuyện Kể Trước Giờ Đi Ngủ - Những Câu Chuyện Phát Triển Chỉ Số Thông Minh IQ 2 - Những câu chuyện có nội dung hay, nhân vật lại vô cùng gần gũi', 50, 3, 'Phạm Nhàn', '2023-11-19 06:39:45', '2023-11-19 06:39:45'),
(5, 'Chuyện Con Mèo Dạy Hải Âu Bay', '36750', 2019, 'images/1700401289image_188285.jpg', 'Cô hải âu Kengah bị nhấn chìm trong váng dầu – thứ chất thải nguy hiểm mà những con người xấu xa bí mật đổ ra đại dương.', 50, 3, 'Luis Sepúlveda', '2023-11-19 06:41:29', '2023-11-19 06:41:47'),
(6, 'BỐ NGỒI CÙNG CON, NHÉ!', '96000', 2018, 'images/17004022819BN8NN5A.jpg', 'Một ghi chép đầy tình yêu thương về hành trình làm bố của nhà báo sắc sảo Phạm Gia Hiền.', 50, 1, 'Phạm Gia Hiền', '2023-11-19 06:58:01', '2023-11-19 06:58:01'),
(7, 'ĐẠI NAM DỊ TRUYỆN', '110000', 2019, 'images/1700402379851XKKOJ.jpg', 'Năm Cảnh Hưng thứ bốn mươi ba, huyện Cốc Dương, trấn Sơn Tây, đêm rằm tháng Bảy. Một gã phù thủy đang lập trận thu nạp âm binh giữa bãi chôn người.', 50, 1, 'Phan Cuồng', '2023-11-19 06:59:39', '2023-11-19 06:59:39'),
(8, 'CÓ MỘT PHỐ VỪA ĐI QUA PHỐ', '70000', 2019, 'images/1700402499KYER3OV8.jpg', 'Đinh Vũ Hoàng Nguyên mất rạng sáng 23 tháng Ba năm 2012, đúng sinh nhật lần thứ 38. Chàng nhà thơ này chưa có thơ xuất bản, nhà văn này không có truyện ngắn đăng báo, họa sĩ này chưa có triển lãm cá nhân.', 50000, 1, 'Đinh Vũ Hoàng Nguyên', '2023-11-19 07:01:39', '2023-11-19 07:01:39'),
(9, 'TỤC NGỮ PHONG DAO', '150000', 2021, 'images/1700403128G13ZDV5U.jpg', 'Việc biên soạn, sưu tầm các bài ca dao, tục ngữ in thành sách được ghi nhận sớm nhất ở Việt Nam từ khoảng cuối thế kỷ 17.', 50, 1, 'Ôn Như Nguyễn Văn Ngọc', '2023-11-19 07:12:08', '2023-11-19 07:12:08'),
(10, 'TRỞ LẠI BABYLON TUYỂN TẬP TRUYỆN NGẮN ANH - MỸ', '120000', 2021, 'images/1700403263VAJX67TP.jpg', 'Tuyển tập truyện ngắn của mười tên tuổi lớn trong nền văn học Anh - Mỹ, những người có thể coi là một đỉnh cao, tỏa bóng và để lại ảnh hưởng lên rất nhiều thế hệ nhà văn sau', 50, 2, 'Ernest Hemingway , H.G.Wells', '2023-11-19 07:14:23', '2023-11-19 07:46:27'),
(11, 'CUỘC ĐỜI VÀ SỐ PHẬN', '300000', 2019, 'images/1700403430DZAS3YZS.jpg', 'Xoay quanh trận Stalingrad, trận chiến mang tính bước ngoặt trong Thế chiến Hai, Cuộc đời và Số phận muốn nắm bắt tinh thần của một thời đại bão tố mà nước Nga trải qua.', 50, 2, 'Vasily Semyonovich Grossman', '2023-11-19 07:17:10', '2023-11-19 07:17:10'),
(12, 'MOMO (MICHAEL ENDE)', '80000', 2019, 'images/1700404045OSWXECG1.jpg', 'Cuốn tiểu thuyết mang màu sắc ngụ ngôn và cổ tích tuyệt diệu của Michael Ende đã thành công trên khắp thế giới, trở thành thánh thư của cả một thế hệ.', 50, 2, 'Michael Ende', '2023-11-19 07:27:25', '2023-11-19 07:27:25'),
(13, 'TÂM HỒN CAO THƯỢNG (BÌA CỨNG)', '180000', 2019, 'images/17004041567QBCRMMF.jpg', 'Triệu triệu con em, tất cả cùng học hỏi, cũng những điều ấy qua hàng trăm thể thức khác nhau. Hãy hình dung cái tổ kiến học sinh hàng trăm dân tộc rộng khắp, cái công cuộc vận động bất tận con đang dự phần ấy để mà tự nhủ', 50, 2, 'Edmondo De Amicis', '2023-11-19 07:29:16', '2023-11-19 07:29:16'),
(14, 'TRÁI TIM CỦA BRUTUS', '110000', 2019, 'images/1700404230ZVBYI4J8.jpg', 'Trái tim của Brutus được nhà xuất bản Kobunsha xuất bản lần đầu năm 1989, và năm 2011 được chuyển thể thành phim truyền hình do diễn viên Fujiwara Tatsuya thủ vai chính.', 50, 2, 'Higashino Keigo', '2023-11-19 07:30:30', '2023-11-19 07:30:30'),
(15, 'Cambridge IELTS 18 Academic - With Answer + Audio', '230000', 2021, 'images/1700404773b_a-18aca-1_1.jpg', 'Bộ sách IELTS được thiết kế chuẩn theo cấu trúc bài thi thực tế, sử dụng được cho cả hai hình thức thi là IELTS General và Academic', 50, 4, 'Nhiều Tác Giả', '2023-11-19 07:39:33', '2023-11-19 07:39:33'),
(16, 'Cambridge IELTS 17 Academic With Answers (Savina)', '210000', 2019, 'images/17004052959781009320948.jpg', 'Cambridge IELTS 17 – Cuốn sách thứ 17 trong bộ sách huyền thoại', 50, 4, 'Cambridge', '2023-11-19 07:48:15', '2023-11-19 07:48:15'),
(17, 'Cambridge Ielts 16 Academic With Answers (Savina)', '230000', 2018, 'images/17004054189781009195119.jpg', 'Bộ sách được thiết kế chuẩn theo cấu trúc bài thi thực tế, sử dụng được cho cả hai hình thức thi là IELTS General và Academic. Cấu trúc của mỗi quyển sách có chưa 4 bài test cơ bản theo chuẩn format đề thật, và độ khó tăng dần theo từng cấp độ.', 50, 4, 'Cambridge', '2023-11-19 07:50:18', '2023-11-19 07:55:39'),
(18, 'Cambridge Ielts 15 Academic With Answers (Savina)', '165000', 2018, 'images/1700405510image_216005.jpg', 'Cambridge IELTS từ nhà xuất bản Cambridge, với 2 phiên bản Academic và General Training đã chính thức lên kệ tại Công ty Cổ phần Sách Việt Nam. Với đầy đủ 4 kỹ năng listening, reading, writing, speaking cùng với answer keys.', 50, 4, 'Cambridge', '2023-11-19 07:51:50', '2023-11-19 07:54:30'),
(19, 'Cambridge Ielts 14 Academic With Answers (Savina)', '150000', 2017, 'images/1700405567image_195509_1_13050.jpg', 'Cambridge IELTS 14 sẽ cung cấp những kiến thức đầy đủ từ cấu trúc bài thi, các modul cần thiết, bài mẫu hay các kĩ năng cần thiết giúp bạn có thể sẵn sàng bước vào kì thi IELTS với những trải nghiệm tốt nhất, sát với thực tế nhất.', 50, 4, 'Cambridge', '2023-11-19 07:52:47', '2023-11-19 07:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Sách văn học Việt Nam', NULL, NULL),
(2, 'Sách văn học nước ngoài', NULL, NULL),
(3, 'Sách thiếu nhi', NULL, NULL),
(4, 'Sách ngoại ngữ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(67, '2023_09_21_013119_create_authors_table', 1),
(74, '2014_10_12_000000_create_users_table', 2),
(75, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(76, '2019_08_19_000000_create_failed_jobs_table', 2),
(77, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(78, '2023_09_20_112311_create_categories_table', 2),
(79, '2023_09_25_011818_create_books_table', 2),
(80, '2023_09_25_012621_create_views_table', 2),
(81, '2023_09_25_013054_create_user_table', 2),
(82, '2023_09_25_015248_create_promo_code_table', 2),
(83, '2023_09_25_015306_create_orders_table', 2),
(84, '2023_09_25_015330_create_order_details_table', 2),
(85, '2023_11_04_150403_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payyments` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `promo_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_code`
--

CREATE TABLE `promo_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promo_code` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `code_payyment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo_code`
--

INSERT INTO `promo_code` (`id`, `promo_code`, `event`, `start_date`, `end_date`, `code_payyment`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 'Mua sách', '2023-11-02', '2023-11-09', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `email`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(21, 'admin', '$2y$10$x7YS1dfcXA9fuOu6YPKXEOHdJXuKZmd0o.GS9yBD6rjChvBYCmYbW', 'chinh2584@gmail.com', 0, 0, NULL, '2023-11-04 05:45:33', '2023-11-04 05:45:33'),
(22, 'chinhnguyen', '$2y$10$RwE8HDnpbuPDIuijP9pBi.8GcDJS7z8DqxIu9TXsQNtDo.7vTLvle', 'hcnguen55@gmail.com', 0, 1, NULL, '2023-11-04 05:57:37', '2023-11-04 05:57:37'),
(23, 'chinh251', '$2y$10$N4gEFBgadFrm1oUF8kysA.MCKCIW7mKUCYTkj3ukCoItNziTvDzU.', 'chinh2584@gmail.com', 0, 1, NULL, '2023-11-16 12:51:29', '2023-11-16 12:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_book_id_foreign` (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_book_id_foreign` (`book_id`),
  ADD KEY `order_details_promo_id_foreign` (`promo_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_book_id_foreign` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_code`
--
ALTER TABLE `promo_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_promo_id_foreign` FOREIGN KEY (`promo_id`) REFERENCES `promo_code` (`id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
