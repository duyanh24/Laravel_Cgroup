-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2019 lúc 07:54 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cgroup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`banner_id`, `created_at`, `updated_at`, `avatar`, `title`, `description`, `type`) VALUES
(3, '2019-01-09 20:29:12', '2019-01-15 01:36:45', '1547541405IMG_4563.png', 'CGroup Corporation', 'Được thành lập từ năm 2017, là một công ty trẻ với tiềm năng phát triển rất lớn, chúng tôi luôn hiểu rằng con người là yếu tố quyết định đối với sự thành công và phát triển của công ty. Tại Cgroup, sự nghiệp của các bạn sẽ đi lên cùng với chúng tôi.', 1),
(4, '2019-01-11 02:24:37', '2019-01-15 01:37:45', '1547541465Layer111.png', 'THAM GIA CGROUPTham gia CGroup nhé!', 'Được thành lập từ năm 2017, là một công ty trẻ với tiềm năng phát triển rất lớn, chúng tôi luôn hiểu rằng con người là yếu tố quyết định đối với sự thành công và phát triển của công ty. Tại Cgroup, sự', 2),
(5, '2019-01-14 23:50:25', '2019-01-15 01:39:04', '1547535025images (1).jpg', 'CGroup', 'Tập đoàn CGroup là một công ty trẻ với tiềm năng phát triển rất lớn đặc biệt với đội ngũ nhân sự trẻ trung và nhiệt huyết. Với mục tiêu xây dựng một hệ sinh thái giúp cho mọi người có những trải nhiệm tốt nhất CGroup chắc chắn sẽ khẳng định được mình trong tương lai. Bên cạnh đó tập đoàn CGroup còn có nhiều công ty thành viên như: Cphone, Ctech, Cedu, Ctogo, Ceco, Zikzak co-working space.', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`contact_id`, `created_at`, `updated_at`, `name`, `phone`, `email`, `content`) VALUES
(2, '2019-01-09 21:53:07', '2019-01-09 21:53:07', 'dsadsad', 'ádas', 'vng@gmail.com', 'đá'),
(3, '2019-01-09 21:58:43', '2019-01-09 21:58:43', 'sadsad', '2314123', 'admin@cgroupvn.com', 'sdefsd'),
(4, '2019-01-15 00:43:13', '2019-01-15 00:43:13', 'asdas d', 'ádsad', 'sadasd@gmail.com', 'sadas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `curriculum_vitae`
--

CREATE TABLE `curriculum_vitae` (
  `cv_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `curriculum_vitae`
--

INSERT INTO `curriculum_vitae` (`cv_id`, `created_at`, `updated_at`, `name`, `phone`, `position`, `email`, `file_cv`, `introduce`) VALUES
(2, '2019-01-16 00:47:13', '2019-01-16 00:47:13', 'ád', 'đâs', 'dá', 'dsadas', '1547624833images (2).jpg', 'đâsd'),
(3, '2019-01-16 00:48:20', '2019-01-16 00:48:20', 'dfgfd', 'dfg', 'dfg', 'dfgdfg', '1547624900images (2).jpg', 'dfgdfg'),
(4, '2019-01-16 00:48:52', '2019-01-16 00:48:52', 'dá', 'đá', 'đá', 'ádas', '1547624932hinh-anh-dep-10_044127763.jpg', 'ádasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduce`
--

CREATE TABLE `introduce` (
  `intro_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `introduce`
--

INSERT INTO `introduce` (`intro_id`, `created_at`, `updated_at`, `title`, `avatar`, `description`, `logo`, `link`) VALUES
(2, '2019-01-11 02:38:21', '2019-01-15 01:41:23', 'ZIKZAK', '1547199501hinh-anh-dep-10_044127763.jpg', 'Zikzak co-working space là không gian làm việc chung, một môi trường làm việc gắn kết, chia sẻ công việc và những ý tưởng nhưng mỗi thành viên vẫn độc lập trong các hoạt động của mình. Không giống như môi trường văn phòng truyền thống, các thành viên của mô hình Co-working space là những cá nhân đến từ những tổ chức khác nhau, ngành nghề khác nhau, nơi kết nối cộng đồng khởi nghiêp lại gần nhau hơn xây dựng 1 hệ sinh thái khởi nghiệp tuyệt vời.\r\nHãy đến với ZikZak thỏa sức sáng tạo, bùng nổ đam mê, kết nối khởi nghiệp', '15475416831543572377_505516502.png', 'ádasd'),
(3, '2019-01-11 02:38:39', '2019-01-15 01:41:16', 'CTOGO', '1547199519images (1).jpg', 'Bắt kịp xu thế hoạt động du lịch trải nghiệm ngày càng trở nên hấp dẫn, Ctogo được ra đời, đây là công ty chuyên booking các homestay tại Việt Nam và Đông Nam Á. Thông qua mô hình homestay sẽ liên kết với người bản xứ tạo ra những hoạt động vô cùng thú vị. Đây là loại hình du lịch khá phổ biến và rất được ưa chuộng hiện nay.\r\nMục tiêu chính của Ctogo là đem lại những trải nghiệm cuộc sống tốt nhất đến với khách hàng.', '15475416761543572356_467357042.png', 'sadsad'),
(4, '2019-01-11 02:38:54', '2019-01-15 01:41:09', 'CEDU', '1547199534images (2).jpg', 'Công ty CEDU với sứ mệnh \"Nâng cao giá trị tri thức, phục vụ hàng triệu người Việt Nam\", CEDU mang tới giải pháp đào tạo trực tuyến thiết thực cho các bạn học sinh, sinh viên và các doanh nghiệp.\r\nLà một trong những đơn vị đầu tiên tham gia lĩnh vực giáo dục trực tuyến, CEDU muốn xây dựng nền tảng chia sẻ kiến thức, nơi ai cũng có thể học cùng chuyên gia, mà lại hiểu quả, tiết kiếm chi phí.', '15475416691543572337_237621041.png', 'sadasd'),
(5, '2019-01-11 02:39:09', '2019-01-15 01:41:04', 'CTECH', '1547199549images (2).jpg', 'Tập đoàn CGROUP thành lập CTECH với mục tiêu trở thành một công ty hàng đầu về cung cấp các giải pháp kinh doanh trực tuyến. Với đội ngũ nhân sự dày dạn kinh nghiệm, chúng tôi tạo ra những sản phẩm cao cấp với phong cách hiện đại, tạo hiệu quả cao cho khách hàng, và nhằm đáp ứng nhu cầu không thể thiếu của khách hàng cho mục đích kinh doanh, giải trí, quảng cáo … của mỗi cá nhân, doanh nghiệp hay tổ chức.', '15475416641543572377_505516502.png', 'sadsadasd'),
(6, '2019-01-11 02:39:29', '2019-01-15 01:40:57', 'CPHONE', '1547199569tải xuống.jpg', 'CPhone là công ty hoạt động trong lĩnh vực sản xuất smartphone.\r\nCPhone Việt Nam luôn cam kết đem đến “giá trị tốt nhất” cho người dùng, thỏa mãn nhu cầu, niềm tin từ phía khách hàng: Với mức chi phí thấp nhất, công cụ hỗ trợ chuyên nghiệp bên cạnh dịch vụ chăm sóc khách hàng 24/7 nhiệt tình, tận tâm với khách hàng, không ngừng học hỏi và cải tiến chất lượng dịch vụ đảm bảo thỏa mãn nhu cầu của khách hàng.', '15475416571543572356_467357042.png', 'sadasd'),
(7, '2019-01-11 02:39:45', '2019-01-15 01:40:44', 'CEco', '1547199585images.jpg', 'CPhone là công ty hoạt động trong lĩnh vực sản xuất smartphone.\r\nCPhone Việt Nam luôn cam kết đem đến “giá trị tốt nhất” cho người dùng, thỏa mãn nhu cầu, niềm tin từ phía khách hàng: Với mức chi phí thấp nhất, công cụ hỗ trợ chuyên nghiệp bên cạnh dịch vụ chăm sóc khách hàng 24/7 nhiệt tình, tận tâm với khách hàng, không ngừng học hỏi và cải tiến chất lượng dịch vụ đảm bảo thỏa mãn nhu cầu của khách hàng.', '15475416441543572337_237621041.png', 'https://ceduvn.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_28_024339_create_news_table', 1),
(2, '2018_12_28_065449_create_setting_table', 2),
(5, '2018_12_28_072806_create_users_table', 3),
(6, '2019_01_10_023910_create_recruit_table', 4),
(7, '2019_01_10_030523_create_banner_table', 5),
(8, '2019_01_10_044006_create_contact_table', 6),
(9, '2019_01_11_064932_create_register_email_table', 7),
(10, '2019_01_11_070627_create_introduce_table', 8),
(11, '2019_01_11_073636_create_staff_table', 9),
(12, '2019_01_11_084824_create_curriculum_vitae_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `created_at`, `updated_at`, `title`, `content`, `avatar`, `slug`) VALUES
(30, '2019-01-16 23:50:35', '2019-01-16 23:50:35', 'Tạp chí Việt Nam Hội nhập ký hợp đồng hợp tác chiến lược về truyền thông với Tập đoàn CGroup', '<p>Ng&agrave;y 12/6/2018 tại trụ sở T&ograve;a soạn tạp ch&iacute; Việt Nam Hội nhập đ&atilde; diễn ra Lễ k&yacute; kết hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng giữa Tạp ch&iacute; Việt Nam Hội nhập v&agrave; Tập đo&agrave;n CGroup.</p>\r\n\r\n<p>Tham dự lễ k&yacute; kết,&nbsp;về ph&iacute;a T&ograve;a soạn tạp ch&iacute; Việt Nam Hội nhập c&oacute; Tổng Bi&ecirc;n tập Đo&agrave;n Mạnh Phương; Tổng thư k&yacute; T&ograve;a soạn Đặng Đ&igrave;nh Chấn; Trưởng Ban Việt Nam Hội nhập điện tử Trần Văn &Aacute;nh; Trưởng Ban Trị sự Phạm Văn Thủy... Về ph&iacute;a Tập đo&agrave;n CGroup&nbsp;c&oacute; Chủ tịch Hội đồng Quản trị ki&ecirc;m Tổng Gi&aacute;m đốc Đo&agrave;n C&ocirc;ng Chung.</p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/35301224_149313939267000_6999601823988318208_n.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/image2(1).JPG\" /></p>\r\n\r\n<p>Hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng giữa Tạp ch&iacute; Việt Nam Hội nhập v&agrave; Tập đo&agrave;n CGroup nhằm đổi mới to&agrave;n diện c&aacute;c c&ocirc;ng nghệ, c&ocirc;ng đoạn l&agrave;m b&aacute;o hiện đại từ tạp&nbsp;ch&iacute; in tới Việt Nam Hội nhập điện tử... nhằm kết nối v&agrave; tương t&aacute;c s&acirc;u rộng, lan tỏa hơn tới bạn đọc trong v&agrave; ngo&agrave;i nước.</p>\r\n\r\n<p>Tập đo&agrave;n CGroup l&agrave; một tập đo&agrave;n truyền th&ocirc;ng c&oacute; uy t&iacute;n v&agrave; kinh nghiệm tại Việt Nam đ&atilde; v&agrave; đang thực hiện c&oacute; hiệu quả c&aacute;c chương tr&igrave;nh hợp t&aacute;c truyền th&ocirc;ng với c&aacute;c cơ quan b&aacute;o ch&iacute; c&oacute; uy t&iacute;n.&nbsp;</p>\r\n\r\n<p>Tổng Bi&ecirc;n tập Tạp ch&iacute; Việt Nam Hội nhập Đo&agrave;n Mạnh Phương đ&atilde; khẳng định việc k&yacute; kết hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng với Tập đo&agrave;n CGroup thể hiện quyết t&acirc;m đổi mới to&agrave;n diện của Tạp ch&iacute; Việt Nam Hội nhập trong xu thế ph&aacute;t triển chung của b&aacute;o ch&iacute; v&agrave; truyền th&ocirc;ng hiện nay.</p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/image2%20(1).JPG\" /></p>\r\n\r\n<p>Chủ tịch Hội đồng Quản trị - Tổng Gi&aacute;m đốc Tập đo&agrave;n CGroup Đo&agrave;n C&ocirc;ng Chung cũng khẳng định việc hợp t&aacute;c với Tạp ch&iacute; Việt Nam Hội nhập cũng ch&iacute;nh l&agrave; cơ hội để Tập đo&agrave;n CGroup c&oacute; nhiều đ&oacute;ng g&oacute;p hơn cho sự ph&aacute;t triển của b&aacute;o ch&iacute; Việt Nam.</p>', '1547707835resized-1544411714_287718122.png', 'tap-chi-viet-nam-hoi-nhap-ky-hop-dong-hop-tac-chien-luoc-ve-truyen-thong-voi-tap-doan-cgroup'),
(31, '2019-01-16 23:51:21', '2019-01-16 23:51:21', 'Tạp chí Việt Nam Hội nhập ký hợp đồng hợp tác chiến lược về truyền thông với Tập đoàn CGroup 2', '<p>Ng&agrave;y 12/6/2018 tại trụ sở T&ograve;a soạn tạp ch&iacute; Việt Nam Hội nhập đ&atilde; diễn ra Lễ k&yacute; kết hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng giữa Tạp ch&iacute; Việt Nam Hội nhập v&agrave; Tập đo&agrave;n CGroup.</p>\r\n\r\n<p>Tham dự lễ k&yacute; kết,&nbsp;về ph&iacute;a T&ograve;a soạn tạp ch&iacute; Việt Nam Hội nhập c&oacute; Tổng Bi&ecirc;n tập Đo&agrave;n Mạnh Phương; Tổng thư k&yacute; T&ograve;a soạn Đặng Đ&igrave;nh Chấn; Trưởng Ban Việt Nam Hội nhập điện tử Trần Văn &Aacute;nh; Trưởng Ban Trị sự Phạm Văn Thủy... Về ph&iacute;a Tập đo&agrave;n CGroup&nbsp;c&oacute; Chủ tịch Hội đồng Quản trị ki&ecirc;m Tổng Gi&aacute;m đốc Đo&agrave;n C&ocirc;ng Chung.</p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/35301224_149313939267000_6999601823988318208_n.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/image2(1).JPG\" /></p>\r\n\r\n<p>Hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng giữa Tạp ch&iacute; Việt Nam Hội nhập v&agrave; Tập đo&agrave;n CGroup nhằm đổi mới to&agrave;n diện c&aacute;c c&ocirc;ng nghệ, c&ocirc;ng đoạn l&agrave;m b&aacute;o hiện đại từ tạp&nbsp;ch&iacute; in tới Việt Nam Hội nhập điện tử... nhằm kết nối v&agrave; tương t&aacute;c s&acirc;u rộng, lan tỏa hơn tới bạn đọc trong v&agrave; ngo&agrave;i nước.</p>\r\n\r\n<p>Tập đo&agrave;n CGroup l&agrave; một tập đo&agrave;n truyền th&ocirc;ng c&oacute; uy t&iacute;n v&agrave; kinh nghiệm tại Việt Nam đ&atilde; v&agrave; đang thực hiện c&oacute; hiệu quả c&aacute;c chương tr&igrave;nh hợp t&aacute;c truyền th&ocirc;ng với c&aacute;c cơ quan b&aacute;o ch&iacute; c&oacute; uy t&iacute;n.&nbsp;</p>\r\n\r\n<p>Tổng Bi&ecirc;n tập Tạp ch&iacute; Việt Nam Hội nhập Đo&agrave;n Mạnh Phương đ&atilde; khẳng định việc k&yacute; kết hợp đồng hợp t&aacute;c chiến lược về truyền th&ocirc;ng với Tập đo&agrave;n CGroup thể hiện quyết t&acirc;m đổi mới to&agrave;n diện của Tạp ch&iacute; Việt Nam Hội nhập trong xu thế ph&aacute;t triển chung của b&aacute;o ch&iacute; v&agrave; truyền th&ocirc;ng hiện nay.</p>\r\n\r\n<p><img alt=\"\" src=\"http://cgroupvn.com/anh/images/image2%20(1).JPG\" /></p>\r\n\r\n<p>Chủ tịch Hội đồng Quản trị - Tổng Gi&aacute;m đốc Tập đo&agrave;n CGroup Đo&agrave;n C&ocirc;ng Chung cũng khẳng định việc hợp t&aacute;c với Tạp ch&iacute; Việt Nam Hội nhập cũng ch&iacute;nh l&agrave; cơ hội để Tập đo&agrave;n CGroup c&oacute; nhiều đ&oacute;ng g&oacute;p hơn cho sự ph&aacute;t triển của b&aacute;o ch&iacute; Việt Nam.</p>', '1547707881resized-1544411511_621168986.png', 'tap-chi-viet-nam-hoi-nhap-ky-hop-dong-hop-tac-chien-luoc-ve-truyen-thong-voi-tap-doan-cgroup-2'),
(32, '2019-01-16 23:52:12', '2019-01-16 23:52:12', 'HÀNH TRÌNH KHÁM PHÁ', '<p>Khởi đầu lu&ocirc;n l&agrave; giai đoạn kh&oacute; khăn nhất với c&aacute;c startup. &Yacute; tưởng tốt l&agrave; kh&ocirc;ng đủ, họ cần một địa điểm để bắt đầu sự nghiệp kinh doanh của m&igrave;nh với nhiều lợi &iacute;ch thiết yếu c&ugrave;ng chi ph&iacute; tiết kiệm nhất c&oacute; thể.&nbsp;Đ&oacute; l&agrave; l&iacute; do tại sao m&agrave;&nbsp;Zikzak&nbsp;Co-working Space ra đời v&agrave; trở th&agrave;nh nơi l&iacute; tưởng cho rất nhiều startup để chắp c&aacute;nh cho những dự định m&igrave;nh.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng t&igrave;m hiểu những lợi &iacute;ch tuyệt vời của&nbsp;Co-working Space&nbsp;n&oacute;i chung v&agrave;&nbsp;Zikzak&nbsp;n&oacute;i ri&ecirc;ng v&agrave; nhanh ch&oacute;ng quyết định xem&nbsp;Zikzak&nbsp;c&oacute; phải l&agrave; nơi th&iacute;ch hợp để th&uacute;c đẩy startup của c&aacute;c bạn kh&ocirc;ng nh&eacute;.</p>\r\n\r\n<ol>\r\n	<li><strong>Kh&ocirc;ng gian khởi nghiệp</strong></li>\r\n</ol>\r\n\r\n<p>Một&nbsp;Co-working Space&nbsp;l&agrave; nơi m&agrave; bạn c&oacute; thể đến bất cứ l&uacute;c n&agrave;o, ngồi v&agrave;o b&agrave;n v&agrave; l&agrave;m việc trong một kh&ocirc;ng gian được thiết kế một c&aacute;ch tối ưu để bạn c&oacute; thể tập trung hết sức l&agrave;m việc với đầy đủ những trang thiết bị cần thiết từ b&agrave;n ghế, m&aacute;y in, giấy b&uacute;t hay ph&ograve;ng họp. B&ecirc;n cạnh đ&oacute;, tại&nbsp;Co-working Space&nbsp;c&ograve;n c&oacute; th&ecirc;m cả những dịch vụ về ăn vặt hay tr&agrave;, c&agrave; ph&ecirc; để tạo cho bạn cảm gi&aacute;c thoải m&aacute;i nhất, tạo điều kiện tối đa cho những &yacute; tưởng s&aacute;ng tạo được nảy mầm.</p>\r\n\r\n<ol>\r\n	<li><strong>Tăng sự hiệu quả của c&ocirc;ng việc</strong></li>\r\n</ol>\r\n\r\n<p>Theo như một nghi&ecirc;n cứu thực hiện bởi&nbsp;Office Vibe, 64% những nh&agrave; khởi nghiệp thấy ho&agrave;n th&agrave;nh c&ocirc;ng việc tốt hơn v&agrave; 68% số người được hỏi cho biết họ tập trung hơn khi l&agrave;m việc ở Co-working Space. Ấn tượng hơn nữa, 90% số người khởi nghiệp tự tin hơn khi thực hiện c&ocirc;ng việc của m&igrave;nh ở kh&ocirc;ng gian l&agrave;m việc chung. Co-working Space l&agrave; nơi m&agrave; mọi người theo đuổi &yacute; tưởng của m&igrave;nh đầy say m&ecirc; v&agrave; ở trong một m&ocirc;i trường như thế cũng sẽ tạo cho bạn một động lực lớn hơn để thực hiện c&ocirc;ng việc của m&igrave;nh.</p>\r\n\r\n<ol>\r\n	<li><strong>Mở rộng mạng lưới quan hệ</strong></li>\r\n</ol>\r\n\r\n<p>Khởi nghiệp hay tự kinh doanh kh&ocirc;ng c&oacute; nghĩa l&agrave; bạn sẽ phải l&agrave;m mọi thứ một m&igrave;nh. V&agrave; Co-working Space sẽ l&agrave; nơi l&iacute; tưởng để bạn c&oacute; cơ hội gặp gỡ những người c&oacute; nhiều nhiệt huyết l&agrave;m việc trong rất nhiều ng&agrave;nh nghề. Từ đ&oacute; bạn c&oacute; thể giao lưu học hỏi được rất nhiều điều từ những người giỏi tr&ecirc;n nhiều những lĩnh vực kh&aacute;c nhau. V&agrave; biết đ&acirc;u, bạn sẽ t&igrave;m được giải ph&aacute;p cho những kh&oacute; khăn của m&igrave;nh ngay khi bạn kh&ocirc;ng ngờ đến nhất.</p>\r\n\r\n<ol>\r\n	<li><strong>Tiết kiệm chi ph&iacute;</strong></li>\r\n</ol>\r\n\r\n<p>Nếu như bạn muốn c&oacute; một văn ph&ograve;ng để tiện cho việc giao dịch, c&oacute; lẽ bạn cũng đ&atilde; t&iacute;nh đến những chi ph&iacute; k&egrave;m theo đ&oacute; như tiền thu&ecirc; mặt bằng, trang bị cơ sở vật chất v&agrave; phải chi trả nhiều loại ho&aacute; đơn kh&aacute;c nữa. Đ&oacute; thực sự l&agrave; một kh&oacute; khăn kh&ocirc;ng hề nhỏ với những người mới bắt đầu kinh doanh. Co-working Space sẽ giải quyết tất cả những vấn đề đ&oacute;. Với Co-working Space, bạn c&oacute; thể thu&ecirc; văn ph&ograve;ng đại diện với gi&aacute; th&agrave;nh rất rẻ m&agrave; vẫn đảm bảo đầy đủ c&aacute;c chức năng cần thiết. Th&ecirc;m v&agrave;o đ&oacute;, bạn cũng c&oacute; thể thu&ecirc; v&agrave; sử dụng kh&ocirc;ng gian l&agrave;m việc chung một c&aacute;ch linh động tuỳ thuộc v&agrave;o nhu cầu của m&igrave;nh.</p>\r\n\r\n<p>Nếu như bạn l&agrave; một doanh nghiệp muốn t&igrave;m cho m&igrave;nh một Co-working Space th&iacute;ch hợp, hay chỉ đơn giản l&agrave; muốn t&igrave;m hiểu th&ecirc;m về kh&ocirc;ng gian l&agrave;m việc chung, h&atilde;y đến với&nbsp;Zik Zak Co-working Spaceđể được tư vấn v&agrave; nhận được những chương tr&igrave;nh khuyến m&atilde;i hấp dẫn nhất.</p>', '1547707931resized-1545729472_850246850.jpeg', 'hanh-trinh-kham-pha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruit`
--

CREATE TABLE `recruit` (
  `recruit_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_thuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruit`
--

INSERT INTO `recruit` (`recruit_id`, `created_at`, `updated_at`, `title`, `content`, `avatar`, `hinh_thuc`, `address`, `position`, `salary`, `deadline`, `slug`) VALUES
(2, '2019-01-11 02:59:11', '2019-01-11 02:59:22', 'tint tức mới', '3243235', '1547200762images (1).jpg', 'ádsad', 'ádsad', 'DSF54654', '12312', '213123', 'tint-tuc-moi'),
(3, '2019-01-15 00:41:38', '2019-01-15 00:41:38', 'u tố quyết định đối với sự thành công và phát triển của công', 'sdfsdfsdfsdf', 'cgroup-backend.png', 'dsf dsf', 'sdf sdf sd', 'fsd  fsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'u-to-quyet-dinh-doi-voi-su-thanh-cong-va-phat-trien-cua-cong'),
(4, '2019-01-15 01:59:13', '2019-01-15 01:59:13', 'sa', '<p>sự nghiệp kinh doanh của m&igrave;nh với nhiều lợi &iacute;ch thiết yếu c&ugrave;ng chi ph&iacute; tiết kiệm nhất c&oacute; thể.&nbsp;Đ&oacute; l&agrave; l&iacute; do tại sao m&agrave;&nbsp;Zikzak&nbsp;Co-working Space ra đời v&agrave; trở th&agrave;nh nơi l&iacute; tưởng cho rất nhiều startup để chắp c&aacute;nh cho những dự định m&igrave;nh.</p>\r\n\r\n<p>H&atilde;y c&ugrave;ng t&igrave;m hiểu những lợi &iacute;ch tuyệt vời của&nbsp;Co-working Space&nbsp;n&oacute;i chung v&agrave;&nbsp;Zikzak&nbsp;n&oacute;i ri&ecirc;ng v&agrave; nhanh ch&oacute;ng quyết định xem&nbsp;Zikzak&nbsp;c&oacute; phải l&agrave; nơi th&iacute;ch hợp để th&uacute;c đẩy startup của c&aacute;c bạn kh&ocirc;ng nh&eacute;.</p>\r\n\r\n<ol>\r\n	<li><strong>Kh&ocirc;ng gian khởi nghiệp</strong></li>\r\n</ol>\r\n\r\n<p>Một&nbsp;Co-working Space&nbsp;l&agrave; nơi m&agrave; bạn c&oacute; thể đến bất cứ l&uacute;c n&agrave;o, ngồi v&agrave;o b&agrave;n v&agrave; l&agrave;m việc trong một kh&ocirc;ng gian được thiết kế một c&aacute;ch tối ưu để bạn c&oacute; thể tập trung hết sức l&agrave;m việc với đầy đủ những trang thiết bị cần thiết từ b&agrave;n ghế, m&aacute;y in, giấy b&uacute;t hay ph&ograve;ng họp. B&ecirc;n cạnh đ&oacute;, tại&nbsp;Co-working Space&nbsp;c&ograve;n c&oacute; th&ecirc;m cả những dịch vụ về ăn vặt hay tr&agrave;, c&agrave; ph&ecirc; để tạo cho bạn cảm gi&aacute;c thoải m&aacute;i nhất, tạo điều kiện tối đa cho những &yacute; tưởng s&aacute;ng tạo được nảy mầm.</p>\r\n\r\n<ol>\r\n	<li><strong>Tăng sự hiệu quả của c&ocirc;ng việc</strong></li>\r\n</ol>\r\n\r\n<p>Theo như một nghi&ecirc;n cứu thực hiện bởi&nbsp;Office Vibe, 64% những nh&agrave; khởi nghiệp thấy ho&agrave;n th&agrave;nh c&ocirc;ng việc tốt hơn v&agrave; 68% số người được hỏi cho biết họ tập trung hơn khi <img alt=\"\" src=\"http://localhost:8080/local/storage/app/public/images/images/images.jpg\" style=\"height:179px; width:281px\" />l&agrave;m việc ở Co-working Space. Ấn tượng hơn nữa, 90% số người khởi nghiệp tự tin hơn khi thực hiện c&ocirc;ng việc của m&igrave;nh ở kh&ocirc;ng gian l&agrave;m việc chung. Co-working Space l&agrave; nơi m&agrave; mọi người theo đuổi &yacute; tưởng của m&igrave;nh đầy say m&ecirc; v&agrave; ở trong một m&ocirc;i trường như thế cũng sẽ tạo cho bạn một động lực lớn hơn để thực hiện c&ocirc;ng việc của m&igrave;nh.</p>\r\n\r\n<ol>\r\n	<li><strong>Mở rộng mạng lưới quan hệ</strong></li>\r\n</ol>', 'cgroup-backend.png', 'sadsad', 'sad', 'ádsa', 'dsad', 'sad sad', 'sa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_email`
--

CREATE TABLE `register_email` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_email`
--

INSERT INTO `register_email` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'sadasd@gmail.com', '2019-01-11 00:05:25', '2019-01-11 00:05:25'),
(3, 'sadasd@gmail.com', '2019-01-15 00:43:16', '2019-01-15 00:43:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_hcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_hn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_hcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_hn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinh_do` text COLLATE utf8mb4_unicode_ci,
  `vi_do` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`setting_id`, `created_at`, `updated_at`, `email`, `hotline`, `telegram`, `google`, `facebook`, `copyright`, `phone_hcm`, `phone_hn`, `address_hcm`, `address_hn`, `kinh_do`, `vi_do`) VALUES
(1, NULL, '2019-01-15 02:24:49', 'hr@cgroupvn.com', '0888-790-111', 'https://ceduvn.com', NULL, NULL, 'CÔNG TY CỔ PHẦN TẬP ĐOÀN CGROUP. MSDN: 0315056158', '028 2269 1777', '024 7302 8366', 'Cphone Building, 456 Xo Viet Nghe Tinh street, 25 Ward , Binh Thanh district, Ho Chi Minh city', 'Floor 5, Diamond Flower Building, No 1 Hoang Dao Thuy, Thanh Xuan, Hanoi', '105.8036385', '21.0059115');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`staff_id`, `created_at`, `updated_at`, `name`, `avatar`, `position`) VALUES
(1, '2019-01-11 00:51:13', '2019-01-11 00:51:13', 'FDGFDG', '1547193073hinh-nen-full-hd-1080-phong-canh-thien-nhien-dep-2_022858418.jpg', 'FDGDFG'),
(2, '2019-01-14 23:54:05', '2019-01-14 23:54:05', 'asds á d', '1547535245images (2).jpg', 'sad sad sa ád');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'sadsad', 'admin@cgroupvn.com', 'sadsad', '$2y$10$ZFSAz3WDgf1PbQBqo6SI9.M7nhyrPKUv5a62MmacwxECUeJbFEUjy', '2', 'H8KrnCT44qTwTD8iTMCiGpgi11SgtLSRtihxAIcmpErj7494bw17knkQKZQx', '2018-12-28 01:14:36', '2019-01-11 01:17:02'),
(4, NULL, 'hr@cgroupvn.com', NULL, '$2y$10$/PwSdRa9rOaoz7upzKPuquoMbCOIfBDfEnNSx1OhWnxGxoLbHMQYm', '2', NULL, '2018-12-28 01:15:05', '2018-12-28 01:15:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `curriculum_vitae`
--
ALTER TABLE `curriculum_vitae`
  ADD PRIMARY KEY (`cv_id`);

--
-- Chỉ mục cho bảng `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`intro_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `recruit`
--
ALTER TABLE `recruit`
  ADD PRIMARY KEY (`recruit_id`);

--
-- Chỉ mục cho bảng `register_email`
--
ALTER TABLE `register_email`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `curriculum_vitae`
--
ALTER TABLE `curriculum_vitae`
  MODIFY `cv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `introduce`
--
ALTER TABLE `introduce`
  MODIFY `intro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `recruit`
--
ALTER TABLE `recruit`
  MODIFY `recruit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `register_email`
--
ALTER TABLE `register_email`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
