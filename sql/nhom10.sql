-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 08, 2022 lúc 02:57 PM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom10`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(2, 'OPPO'),
(1, 'Samsung'),
(3, 'Acer'),
(4, 'Asus'),
(5, 'Apple (Watch)'),
(6, 'anker'),
(7, 'logitech');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int NOT NULL,
  `type_id` int NOT NULL,
  `price` int NOT NULL,
  `pro_image` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Samsung Galaxy Z Fold3 5G 256GB', 1, 1, 23000000, '637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg', 'Không dừng lại ở một chiếc điện thoại thông minh cao cấp, mà nó còn bền bỉ và kết nối siêu tốc với 5G.1 Kế đến là màn hình tràn viền lớn với trải nghiệm gập mở độc nhất để bạn có thể giải trí và làm việc ở một cách hoàn hảo', 1, '2021-08-17 17:00:00'),
(2, 'Oppo Reno6 5G\r\n', 2, 1, 12990000, '637641009301320775_oppo-reno6-dd-bh2nam.jpg', 'Sẵn sàng bật tung cảm xúc cùng OPPO Reno6 5G, chiếc điện thoại sở hữu thiết kế đẳng cấp siêu mỏng nhẹ, camera chụp chân dung Bokeh Flare độc đáo và trên hết là kết nối mạng 5G siêu tốc, cùng bạn kết nối tương lai.', 1, '2021-07-09 17:00:00'),
(3, 'Acer Nitro Gaming AN515-57-51G6/i5-11400H\r\n', 3, 2, 23399000, '637624023473077758_acer-nitro-gaming-an515-57-den-rtx3050-dd-1.jpg', 'Acer Nitro Gaming AN515 57 51G6 đáp ứng hoàn hảo mọi yêu cầu của game thủ trong tầm giá rất tốt, từ thiết kế bền bỉ, bàn phím RGB cực chất cho đến cấu hình lý tưởng với bộ vi xử lý Intel thế hệ thứ 11 và card đồ họa RTX 30 series mới nhất.', 1, '2021-09-30 17:00:00'),
(4, 'Asus Vivobook E210KA-GJ031T/N4500\r\n', 4, 2, 7799000, '637324041483653612_asus-vivobook-e210ma-xanh-dd.jpg', 'ASUS VivoBook E210KA GJ031T là mẫu laptop nhỏ gọn bậc nhất trên thị trường hiện nay với màn hình chỉ 11,6 inch, tuy nhiên máy vẫn mang đến hiệu năng đủ để đáp ứng tốt các ứng dụng văn phòng và nhu cầu giải trí cơ bản. Đặc biệt, mức giá máy rất rẻ, phù hợp với các bạn học sinh, sinh viên.', 0, '2021-06-09 17:00:03'),
(5, 'Apple Watch SE GPS 40mm viền nhôm dây cao su\r\n', 5, 3, 7999000, '637369907197319165_Apple Watch SE GPS 40mm dai dien.jpg', 'Màn hình Retina lớn viền mỏng tuyệt đẹp, trang bị những cảm biến tiên tiến và các tính năng sức khỏe hàng đầu, Apple Watch SE mang đến cho bạn nhiều hơn những gì bạn mong đợi trong một mức giá hấp dẫn.\r\n\r\n', 1, '2020-12-19 17:00:03'),
(6, 'Chuột có dây Logitech M100R', 7, 5, 88000, '636441071733256173_HASP-CHUOT-CO-DAY-LOGITECH-M100R-00403950-300.jpg', 'Các phím chức năng: nút bấm; con cuộn\r\nĐộ phân giải: 1600 dpi\r\nKết nối: USB\r\nKhoảng cách tối đa: 1.5 m\r\nLoại chuột: Có dây', 0, '2019-07-10 17:04:00'),
(7, 'Tai nghe Bluetooth nhét tai TWS Anker Soundcore Liberty Air 2 - A3910', 6, 4, 3000000, '637164094859385171_ak 2.jpg', 'Chất liệu: Nhựa\r\nCông suất: không công bố\r\nDòng máy tương thích 1: Smartphone\r\nDòng máy tương thích 2: Laptop\r\nDung lượng pin: 1.000mAh', 0, '2020-09-17 17:00:00'),
(8, 'OPPO A74 8GB-128GB', 2, 1, 8700000, '637575356138682692_oppo-a74-dd-1.jpg', 'Giải trí bất tận trên màn hình chấm O tuyệt đẹp của OPPO A74, nơi bạn sẽ không phải lo lắng về năng lượng khi với pin siêu khủng, sạc siêu nhanh, điện thoại luôn đồng hành cùng bạn trong mọi cuộc vui.', 0, '2021-04-08 17:00:00'),
(9, 'Chuột không dây Logitech M221', 7, 5, 319000, '637418984502900576_M221.jpg', 'Nhằm để giảm thiểu những sự phiền toái và giới hạn khoảng cách do chuột máy tính có dây thì chuột không dây Logitech M221 được ra đời. Với công nghệ không dây 2.4GHz, chuột Logitech M221 cho phép người dùng kết nối xa lên đến 10m.Độ bền cao cộng thêm sự ổn định cũng như tiết kiệm Pin giúp cho sản phẩm này là lựa chọn tốt cho chú chuột máy tính.', 0, '2021-12-16 17:00:00'),
(10, 'ACER Predator Gaming PH315-54-78W5/i7-11800H\r\n', 3, 2, 25000000, '637626626877470399_acer-predator-gaming-ph315-54-den-dd.jpg', 'Acer Predator Helios 300 PH315 tập hợp những vũ khí lợi hại nhất như bộ vi xử lý Intel Core i7 thế hệ thứ 11 card đồ họa rời RTX 30 series quạt tản nhiệt 3D AeroBlade thế hệ thứ 4 giúp bạn cầm chắc chiến thắng trong các trận chiến game căng thẳng', 1, '2021-02-01 18:00:00'),
(11, 'Chuột không dây Logitech M221 ', 7, 5, 319000, '637418984502900576_M221.jpg', 'Nhằm để giảm thiểu những sự phiền toái và giới hạn khoảng cách do chuột máy tính có dây thì chuột không dây Logitech M221 được ra đời. Với công nghệ không dây 2.4GHz, chuột Logitech M221 cho phép người dùng kết nối xa lên đến 10m.\r\nĐộ bền cao cộng thêm sự ổn định cũng như tiết kiệm Pin giúp cho sản phẩm này là lựa chọn tốt cho chú chuột máy tính.', 0, '2021-12-16 17:00:00'),
(12, 'Tai nghe AirPods Pro', 8, 4, 5499000, '637094271122983378_HASP-00629662-dd.jpg', 'Đặc điểm nổi bật\r\nAirPods Pro sẽ đưa bạn chìm vào không gian âm nhạc sâu lắng và đem tới trải nghiệm giải trí ưu việt chưa từng có trên dòng tai nghe không dây Apple. Những nâng cấp mạnh mẽ về thiết kế và công nghệ giúp tai nghe AirPods Pro trở thành thiết bị nghe nhạc chuyên nghiệp thực thụ.', 1, '2021-12-17 03:12:56'),
(13, 'Samsung Galaxy S20+ ', 1, 1, 16990000, '637503636824959109_ss-s20-plus-dd.jpg', 'Siêu phẩm Samsung Galaxy S20 Plus đã xuất hiện. Thể hiện đẳng cấp đích thực với thiết kế cao cấp, màn hình lớn đẹp tuyệt mỹ, 5 camera chuyên nghiệp và hiệu suất đáng kinh ngạc.Thiết kế đỉnh cao, ấn tượng trong từng đường nét\r\nĐược hoàn thiện từ chất liệu kính và kim loại cao cấp, liền lạc hoàn hảo cả 3 phần mặt trước, khung viền, mặt sau, Samsung Galaxy S20+ mang đến cho bạn cảm giác cao cấp khác biệt khi cầm trên tay. Màn hình viền siêu mỏng, khung kim loại cứng cáp và mặt lưng bóng bẩy cùng những lựa chọn màu sắc thanh lịch tạo nên một kiệt tác thiết kế mà ai cũng phải ngước nhìn.', 0, '2021-12-16 17:02:35'),
(15, 'Tai nghe Beats Studio Buds', 8, 4, 3999000, '637654764645706321_apple-beats-studio-buds-dd.jpg', 'Đặc điểm nổi bật\r\nVới Beats Studio Buds, bạn sẽ có được trải nghiệm âm nhạc đỉnh cao trên một chiếc tai nghe không dây gọn nhẹ. Sản phẩm sử dụng công nghệ chống ồn chủ động ANC mới nhất, có khả năng tương tác linh hoạt với mọi thiết bị Apple và Android. Không chỉ khoác lên mình vẻ đẹp tinh xảo, Beats Studio Buds còn đem lại trải nghiệm đeo thoải mái hơn bất cứ tai nghe nhét tai nào khác.', 1, '2021-12-17 03:10:35'),
(14, 'Samsung Galaxy A72', 1, 1, 11490000, '637510730660770271_samsung-a72-tim-dd.jpg', 'Pin dung lượng khủng 5000mAh, bộ nhớ trong lên tới 256GB, khả năng thu phóng hình ảnh tới 30x và màn hình tuyệt mỹ, Samsung Galaxy A72 đã sẵn sàng để đưa bạn tới những trải nghiệm không giới hạn.Giải trí đỉnh cao trên màn hình Super AMOLED cao cấp\r\nTrên Galaxy A72, bạn sẽ được thưởng thức những hình ảnh ở một tầm cao mới với màn hình lớn 6,7 inch vô cực Infinity-O, tấm nền Super AMOLED cao cấp, độ sáng lên tới 800 nits, độ phân giải Full HD+ sắc nét. Hơn thế nữa, màn hình này còn trang bị công nghệ Eye Comfort Shield 2 bảo vệ mắt và đặc biệt là công nghệ Real Smooth cùng tấm nền 90Hz để mọi thao tác vuốt chạm đều mượt mà đáng kinh ngạc.', 0, '2021-12-17 03:16:44'),
(17, 'Nhom 10', 12, 1, 4000000, 'English for IT.rtf', 'ffqwfq', 0, '2021-12-17 04:12:13'),
(18, 'Nhom 10e', 12, 1, 0, '', 'ffqwfq', 0, '2021-12-17 04:13:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'điện thoại'),
(2, 'laptop'),
(3, 'Đồng hồ'),
(4, 'Tai nghe'),
(5, 'Chuột');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'user', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, 'user3', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wish_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sp_id` int DEFAULT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlist`
--

INSERT INTO `wishlist` (`wish_id`, `user_name`, `sp_id`) VALUES
(5, 'nguyenhb', NULL),
(4, 'user1', 2),
(6, 'nguyenhb', 1),
(7, 'nguyenhb', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
