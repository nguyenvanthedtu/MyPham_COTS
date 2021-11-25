-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 01:55 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mypham_cots`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `IdBai` int(11) NOT NULL,
  `TieuDe` varchar(256) NOT NULL,
  `ChuyenMuc` varchar(256) NOT NULL,
  `NgayDang` date NOT NULL,
  `HinhAnh` varchar(256) NOT NULL,
  `NoiDung` text NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `TenDangNhap` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `IdBanner` int(11) NOT NULL,
  `TieuDe` varchar(256) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `HinhAnh` varchar(256) NOT NULL,
  `TenDangNhap` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `GiaGoc` decimal(10,0) NOT NULL,
  `TyLeKM` int(100) NOT NULL,
  `SoLuongMua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`MaHD`, `MaSP`, `TenKH`, `GiaGoc`, `TyLeKM`, `SoLuongMua`) VALUES
(19, 11, 'Nguyễn Đức Lý', '1', 0, 1),
(19, 13, 'a', '1', 0, 2),
(20, 14, 'a', '1', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `MaKM` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TyLeKM` int(11) NOT NULL,
  `GhiChu` text DEFAULT NULL,
  `SoLuongKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `MaDG` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `TenDangNhap` varchar(256) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayDG` date NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(100) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `TrangThai`) VALUES
(1, 'Kem trị mụn ', 1),
(2, 'Mỹ phẩm dưỡng da ', 1),
(8, 'Thuốc trị sẹo', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `TenDangNhap` varchar(256) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `NgayHD` date NOT NULL,
  `TrangThai` varchar(100) NOT NULL,
  `GhiChu` varchar(256) DEFAULT NULL,
  `HoTenNN` varchar(255) NOT NULL,
  `SoDienThoaiNN` varchar(20) NOT NULL,
  `DiaChiNN` varchar(255) NOT NULL,
  `MaNCC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`TenDangNhap`, `MaHD`, `NgayHD`, `TrangThai`, `GhiChu`, `HoTenNN`, `SoDienThoaiNN`, `DiaChiNN`, `MaNCC`) VALUES
('b', 19, '2021-11-22', 'Đã giao', NULL, 'a', 'a', 'a', 2),
('c', 20, '2021-11-22', 'Đã giao', NULL, '', 'a', 'a', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) NOT NULL,
  `TuNgay` date NOT NULL,
  `DenNgay` date NOT NULL,
  `TrangThai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `TuNgay`, `DenNgay`, `TrangThai`) VALUES
(19, 'a', '2021-11-22', '2021-11-23', 'Đang khuyến mãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitk`
--

CREATE TABLE `loaitk` (
  `MaLoai` varchar(100) NOT NULL,
  `TenLoai` varchar(100) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitk`
--

INSERT INTO `loaitk` (`MaLoai`, `TenLoai`, `TrangThai`) VALUES
('AD', 'admin', 1),
('NCC', 'Nhà cung cấp', 1),
('US', 'user', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `TenDangNhap` varchar(256) NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(256) NOT NULL,
  `DiaChi` varchar(256) NOT NULL,
  `SDT` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`TenDangNhap`, `MaNCC`, `TenNCC`, `DiaChi`, `SDT`) VALUES
('nguyenducly2000@gmail.com', 2, 'Nguyễn Đức Lý', 'Quảng Nam', '0963700285'),
('a', 5, 'a', 'a', 'a'),
('nguyenvanthedtu@gmail.com', 6, 'Nguyễn Văn Thế', 'Huế', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhapxuat`
--

CREATE TABLE `nhapxuat` (
  `MaNhapXuat` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `GiaNhap` decimal(10,0) NOT NULL,
  `GiaXuat` decimal(10,0) NOT NULL,
  `SoLuongNhap` int(11) NOT NULL,
  `NgayApDung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhapxuat`
--

INSERT INTO `nhapxuat` (`MaNhapXuat`, `MaSP`, `GiaNhap`, `GiaXuat`, `SoLuongNhap`, `NgayApDung`) VALUES
(25, 6, '115000', '125000', 10, '2021-09-19'),
(38, 7, '800000', '850000', 8, '2021-10-13'),
(39, 8, '120000', '125000', 10, '2021-10-02'),
(40, 9, '330000', '370000', 10, '2021-10-02'),
(41, 10, '700000', '750000', 10, '2021-10-02'),
(42, 11, '900000', '950000', 10, '2021-10-02'),
(43, 12, '500000', '560000', 10, '2021-10-02'),
(44, 13, '1100000', '1200000', 10, '2021-10-02'),
(45, 14, '120000000', '125000000', 10, '2021-10-02'),
(46, 15, '600000', '650000', 10, '2021-10-02'),
(47, 16, '250000', '300000', 10, '2021-10-02'),
(48, 17, '320000', '400000', 10, '2021-10-02'),
(49, 18, '350000', '380000', 10, '2021-10-02'),
(50, 19, '360000', '400000', 10, '2021-10-02'),
(51, 20, '200000', '250000', 10, '2021-10-02'),
(52, 21, '350000', '380000', 10, '2021-10-02'),
(53, 22, '550000', '600000', 10, '2021-10-02'),
(54, 23, '350000', '370000', 10, '2021-10-02'),
(55, 24, '330000', '370000', 10, '2021-10-02'),
(56, 25, '1150000', '1200000', 10, '2021-10-02'),
(58, 26, '1000000', '1150000', 10, '2021-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `HinhAnh` varchar(100) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text NOT NULL,
  `SoLuongTon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaNCC`, `TenSP`, `DonGia`, `HinhAnh`, `MaDM`, `TrangThai`, `MoTa`, `SoLuongTon`) VALUES
(8, 2, 'COMBO MINI TRỊ MỤN SIÊU HIỆU QUẢ TRONG 7 NGÀY', '125000', 'product_8.png', 1, 1, 'Có Combo Mini Trị Mụn Siêu Hiệu Quả Trong 7 Ngày việc trị mụn trở nên đơn giản hơn . M.E.N.L.Y xin giới thiệu đến các bạn bộ Combo Mini Trị Mụn Siêu Hiệu Quả Chỉ Trong 7 Ngày được tách ra từ bộ trị mụn siêu quả với vóc dáng nhỏ bé, tiện lợi cho bạn khi mang theo bên người. Với thành phần 100% thiên nhiên an toàn cho da. M.E.N.L.Y tự hào là mỹ phẩm thiên nhiên đầu tiên tại Việt Nam ', 8),
(9, 2, 'KEM TRỊ MỤN MENLY', '370000', 'product_5.png', 1, 1, 'Sản phẩm được làm 100% từ thiên nhiên được nhập khẩu từ Anh Và Pháp vì vậy không gây kích ứng da , rất phù hợp với từng loại da mặt . Với công dụng làm trị mụn bọc , cám , đầu đen ,... . \" KEM TRỊ MỤN MENLY \" sẽ giúp bạn lấy lại vẻ đẹp trai và tự tin mọi người người xung quanh ', 8),
(10, 2, 'CẶP ĐÔI TRỊ MỤN BỌC - TRỨNG CÁ MENLY TỐT NHẤT', '750000', 'product_9.png', 1, 1, 'Mụn bọc hay trứng cá là vấn đề rất thường gặp ở nam và nữ tuổi trẻ và tuổi dậy thì. Mụn có thể từ mức độ nhẹ chỉ là mụn đầu đen đến những trường hợp mụn bọc, viêm tấy đỏ khắp mặt. Điều trị mụn không đơn giản, cần có sự tư vấn và điều trị từ các bác sĩ chuyên khoa da liễu. Ngoài ra, tuân thủ điều trị và kiên nhẫn cũng là một trong những yếu tố quan trọng góp phần mau lành bệnh. Mỹ phẩm cho nam xin giới thiệu với các bạn một đòng sản phẩm chuyên trị mụn bọc và mụn cám rất hiệu quả , đang được rất nhiều người sử dụng hiện nay .', 10),
(11, 2, 'BỘ TRỊ MỤN BỌC,TRỨNG CÁ XÓA THÂM MENLY', '950000', 'product_10.png', 1, 1, 'Đầu tiên, trước khi đọc bài viết này, Mỹ Phẩm Cho Nam xin có đôi điều với các bạn. Nếu bạn nào tự nghĩ rằng da mặt của mình là đẹp nhất quả đất rồi, da mặt mình lúc nào cũng căng mịn, chẳng bao giờ có mụn và chất nhờn, hay những vết sẹo mụn, sẹo thâm không tồn tại trên mặt. Nếu vậy THÌ các bạn không cần đọc bài viết này làm gì cả nhé. Vì nó không cần thiết.', 9),
(12, 2, 'COMBO SẠCH MỤN CÁM, ĐẦU ĐEN MENLY', '560000', 'product_6.png', 1, 1, 'Sản phẩm đầu tiên và cũng là sản phẩm không thể thiếu trong Combo này chính là Sữa Rửa Mặt MENLY. Đây là dòng sản phẩm được sản xuất với công thức độc quyền dành riêng cho làn da nam giới. Là dòng sữa rửa mặt KHÔNG BỌT đầu tiên cho nam giới tại Việt Nam với độ pH 6.0 đạt CHUẨN đảm bảo lấy sạch bụi bẩn, nhờn thừa nhưng vẫn tuyệt đối AN TOÀN cho da.\r\n\r\nSữa Rửa Mặt MENLY với các thành phần tinh túy kết hợp với nhau gồm: Tinh chất nha đam, Đất sét xanh Pháp, Tinh dầu trà xanh, Tinh dầu bạc hà và Tinh dầu vỏ bưởi…', 10),
(13, 2, 'COMBO DƯỠNG DA HOÀN HẢO TOÀN THÂN MENLY', '1200000', 'product_11.png', 2, 1, 'COMBO DƯỠNG DA HOÀN HẢO TOÀN THÂN M.E.N.L.Y tập hợp các sản phẩm dưỡng trắng cho mặt và cơ thể cực kỳ hiệu quả, 100% THIÊN NHIÊN nên an toàn cho mọi loại da.\r\n\r\nCung cấp dưỡng chất làm trắng da an toàn ( Anphal Arburin và AHA độc quyền) giúp nuôi dưỡng từ tế bào, giúp mang lại cho nam giới làn  trắng khỏe tự nhiên và nam tính nhất.\r\n\r\nKhông bắt nắng, không bào mòn da.', 10),
(14, 5, 'BỘ TỨ DƯỠNG DA SẠCH MỤN MENLY', '1250000', 'product_12.png', 2, 1, 'Sở hữu làn da trắng, sạch mụn không chỉ là mơ ước của riêng phái nữ. Hiểu được tâm lý này của các đấng mài râu, BỘ TỨ DƯỠNG DA SẠCH MỤN MENLY sẽ giúp anh em có được làn da như ý!\r\n\r\nSử dụng trọn bộ mỹ phẩm chăm sóc da bao gồm: Sữa rửa mặt MENY, Toner dưỡng ẩm MENLY, Serum dưỡng trắng MENLY và Kem trị mụn MENLY sẽ mang lại cho bạn những kết quả ngoài mức mong đợi. BỘ TỨ DƯỠNG TRẮNG DA SẠCH MỤN MENLY với chiết xuất từ thiên nhiên giúp làn da nam giới được nâng niu trọn vẹn. \r\n\r\nHãy nhanh tay đặt hàng để sở hữu cho mình BỘ TỨ DƯỠNG TRẮNG DA SẠCH MỤN MENLY - làn da sáng mịn trong tầm tay bạn!', 10),
(15, 2, 'COMBO DƯỠNG TRẮNG SẠCH DA MENLY', '650000', 'product_6.png', 2, 1, 'Mỗi ngày 2 lần sử dụng Sữa rửa mặt Menly, bạn sẽ cảm nhận làn da mềm mịn, sạch nhờn đồng thời nhờ đặc tính kháng khuẩn nên giúp ngừa mụn và làm giảm mụn hiệu quả.\r\n\r\nTiếp đó, Serum trắng da Menly sẽ làm mờ vết thâm sau khi mụn xẹp, ngăn ngừa viêm da và làm sáng da đều lên mỗi ngày.\r\n\r\nHãy nhanh tay đặt hàng để sở hữu cho mình COMBO DƯỠNG TRẮNG SẠCH MỤN MENLY - làn da sáng mịn trong tầm tay bạn!', 10),
(16, 2, 'SERUM DƯỠNG TRẮNG DA MENLY', '300000', 'product_3.png', 2, 1, 'Serum là dòng sản phẩm không còn xa lạ với chị em phụ nữ nữa. Tuy nhiên, ít người biết rằng, ngay cả nam giới cũng có thể sử dụng serum dưỡng trắng da cho nam để chăm sóc cho làn da của mình.\r\n\r\nChính vì thế mà sản phẩm Serum dưỡng trắng da MENLY dành riêng cho phái mạnh đã ra đời. Sản phẩm này không chỉ có thành phần hoạt chất tốt cho da mà còn có những công dụng vượt trội mà bạn không thể ngờ tới.\r\n\r\nSản phẩm serum này là một trong các sản phẩm đặc trưng của dòng mỹ phẩm thiên nhiên cao cấp đầu tiên cho nam tại Việt Nam, ưu việt vượt trội so với những dòng kem dưỡng trắng da cho nam giới hiện nay trên thị trường.\r\n\r\nTrong serum dưỡng trắng cho nam M.E.N.L.Y có chứa chủ yếu là Arbutin, Vitamin C-E. Đây đều là các hoạt chất giúp làm sáng da vô cùng an toàn. Không chỉ vậy, chúng còn có tác dụng làm mờ thâm nám, giúp da đều màu hơn và làm da trắng sáng một cách tự nhiên. Làn da của bạn sẽ được quan tâm và chăm sóc toàn diện, giúp các chàng trai có làn da trắng sáng khỏe mạnh, lấy lại tự tin khi giao tiếp cũng như gây ấn tượng với người đối diện.', 10),
(17, 2, 'SỮA TẮM THẢI ĐỘC MENLY ', '400000', 'product_2.png', 2, 1, 'Sữa tắm thải độc MENLY được chiết  xuất từ:\r\n\r\n- Aloe Vera Extract: cung cấp các Vitamin và dưỡng chất cần thiết cho da, duy trì độ ẩm, giúp da luôn mịn màng, mềm mại. \r\n- Calendula Hydrosol (Hydrosol từ Hoa Cúc Xu Xi): giàu flavonoids, giúp chống oxi hoa và ngăn ngừa lão hóa da, đồng thời Calendula Hydrosol còn chứa acid oleanolic giúp làm dịu da, chống kích ứng, giảm stress và bảo vệ da dưới tác hại của môi trường \r\n- Blend Tinh dầu Trị Liệu: kích thích tuần hoàn máu, hương thơm tự nhiên giúp thư giãn, giảm căng thẳng, mệt mỏi.\r\n- Khi sử dụng sản phẩm được 3 – 4 ngày, bạn sẽ có cảm giác như sạch da hơn, có mùi trà xanh và bạc hà thơm dễ chịu. Đặc biệt khi rửa xong da ko bị căng khô.', 10),
(18, 2, 'SỮA RỬA MẶT MENLY ', '380000', 'product_4.png', 2, 1, '- SỮA RỬA MẶT M.E.N.L.Y là dòng sản phẩm được sản xuất với công thức độc quyền danh riêng cho làn da nam giới. Đây là dòng sữa rửa mặt KHÔNG BỌT đầu tiên cho nam giới tại Việt Nam với độ pH 6.0 đạt CHUẨN đảm bảo lấy sạch bụi bẩn, nhờn thừa nhưng vẫn tuyệt đối AN TOÀN cho da\r\n- Với hương thơm tinh dầu nam tính vừa giúp làm sạch, vừa tạo cảm giác thư giãn trong quá trình massage, rửa mặt. Vì là sản phẩm hoàn toàn thiên nhiên nên bạn sẽ KHÔNG phải LO LẮNG về vấn đề ăn mòn da. Hàm lượng dưỡng chất và chiết xuất DỒI DÀO trong SỮA RỬA MẶT M.E.N.L.Y giúp nâng niu và bảo vệ làn da nam giới vượt trội.', 10),
(19, 2, 'KEM DƯỠNG TRẮNG BODY MENLY', '400000', 'product_1.png', 2, 1, '- Cải thiện sức khỏe làn da nam giới, giúp da mịn khỏe, săn chắc\r\n\r\n- Dưỡng da trắng sáng an toàn nhưng vẫn rất hiệu quả\r\n-  AHA : Hợp chất dưỡng trắng da cực kỳ hiệu quả. Tuy nhiên, hợp chất AHA của dòng sản phẩm MENLY đã được tinh chỉnh độc đáo để đảm bảo độ an toàn cao nhất và phù hợp nhất với làn da nam giới Việt.\r\n\r\n- Fermented Honey (Mật ong lên men): là hoạt chất có nguồn gốc hoàn toàn từ thiên nhiên, giúp tẩy tế bào chết nhẹ nhàng nhất, khiến da mềm mịn, gia tăng hiệu quả sản phẩm, cải thiện các khuyết điểm vốn có về màu da.\r\n\r\n- Hydrolyzed Collagen (Collagen Thủy phân): Là dòng Collagen cải tiến, có công dụng tuyệt vời giúp da khỏe mịn, tăng cường độ đàn hồi và kích thích tái tạo da mạnh mẽ.\r\n\r\n- Mulberry Extract (Chiết xuất dâu tằm): Giúp da mịn khỏe, là một trong 20 hợp chất thiên nhiên hiếm hoi được FDA Hoa Kỳ chứng nhận là đem lại công dụng sảng da khi sử dụng.', 10),
(20, 2, 'TONER SE KHÍT LỖ CHÂN LÔNG MENLY', '250000', 'product_13.png', 2, 1, 'Toner (xịt khoáng) được hiểu ở đây là thành phần nước có chứa các dưỡng chất hoặc các chất hoạt động, và tác dụng của toner phụ thuộc vào các loại dưỡng chất mà chúng chứa đựng. Toner được sử dụng sau khi rửa mặt, và được xem là yếu tố quyết định để bảo vệ và chăm sóc sâu cho làn da.\r\n\r\nDo đó, nếu bạn muốn se khít lỗ chân lông, hoặc kiểm soát lượng bã nhờn trên da, thì việc tạo cho mình một thói quen sử dụng toner là không thể bỏ qua. Bên cạnh đó, toner còn có tác dụng cân bằng độ ẩm sau khi rửa mặt, giúp da bạn trở nên rạng rỡ, và sáng khỏe. Sau khi sử dụng qua toner, da bạn sẽ được trả về với điều kiện lý tưởng nhất, để hấp thụ các dưỡng chất từ kem dưỡng, serum, hay thậm chí là tinh dầu mà bạn cần sử dụng sau đó.', 10),
(21, 2, 'KEM CHỐNG NẮNG NEUTROGENA SPF 55', '380000', 'product_14.png', 2, 1, '- Chống nắng hiệu quả nhất, bảo vệ bạn khỏi tia UVA UVB\r\n\r\n- Waterproof\r\n\r\n- Không bít lỗ chân lông', 10),
(22, 2, 'KEM DƯỠNG TRẮNG DA CAO CẤP VICTORIA', '600000', 'product_15.png', 2, 1, 'Loại bỏ những sắc tố đen.\r\nNgăn ngừa tia UV gây sạm da, chống nắng hiệu quả rất cao, làm phai vết nám mờ, tàn nhang đặc trị mụn, ngăn ngừa sự phát triển của mụn... làm mờ vết thâm do mụn để lại, làm se khít lỗ chân lông.\r\nLoại bỏ tế bào chết sản sinh tái tạo tế bào mới.\r\nLàm cho làn da săn chắc, chống lại hiện tượng da bị chảy xệ.\r\nPhục hồi làn da bị lão hóa, dưỡng ẩm giúp làm giảm vết nhăn, làm căng da mặt, làm da sạm trở nên trắng hồng tự nhiên, thích hợp làm kem lót nền trang điểm.', 10),
(23, 2, 'THUỐC TRỊ SẸO MỤN SCAR ESTHETIQUE', '370000', 'product_16.png', 8, 1, 'Kem trị sẹo Scar Esthetique tác dụng cải thiện và làm mờ với hầu hết các loại mới, dưới 5 năm, bao gồm: sẹo lõm, sẹo thâm do mụn, sẹo rỗ trên mặt.\r\n \r\nMỗi ngày bạn chỉ phải bỏ ra khoảng 5 phút và 2 lần thoa đều đặn để cải tạo làn da sẹo của mình. Nên nhớ, bạn chỉ nên dùng 1 lượng vừa đủ kem trị sẹo rồi thoa đều, mỏng lên vết sẹo, đồng thời nhẹ nhàng massage xung quanh vết sẹo. Bạn cũng có thể make up khi đang sử dụng kem trị sẹo Scar Esthetique.\r\n \r\nKem trị sẹo Scar Esthetique là dạng gel trong suốt, vì vậy nếu là sẹo trên mặt, bạn cũng không phải lo lắng vì vẫn có thể make up như bình thường. Sau khi thoa kem trị sẹo khoảng 30 phút, thời gian đủ để kem thẩm thấu vào vết sẹo và khô ráo, lúc này bạn có thể make up như bình thường được rồi đấy, yên tâm nhé.', 10),
(24, 2, 'THUỐC TRỊ SẸO REJUVASIL', '370000', 'product_17.png', 8, 1, 'Rejuvasil Có tác dụng ngừa sẹo sau phẫu thuật, sẹo bỏng, sẹo, thu nhỏ các vết sẹo cũ sẹo màu, sẹo phì đại.. mà Không cần đến sự can thiệp của các Bác Sỹ Phẫu thuật.', 10),
(25, 2, 'THUỐC TRỊ SẸO SCAR ESTHETIQUE 60ML', '1200000', 'product_18.png', 8, 1, '-  Công nghệ tiến bộ trong Scar Esthetique ngăn ngừa hiệu quả tối ưu với sẹo lõm, sẹo thâm do mụn …\r\n\r\n-  Kết quả nghiên cứu cho thấy Scar Esthetique đáp ứng tiêu chuẩn chất lượng TAQA.\r\n\r\n-  Không gây dị ứng.', 10),
(26, 2, 'COMBO TRỊ MỤN SIÊU HIỆU QUẢ MENLY ', '1150000', 'product_7.png', 1, 1, 'Sản phẩm đầu tiên và cũng là sản phẩm không thể thiếu trong Combo này chính là Sữa Rửa Mặt MENLY. Đây là dòng sản phẩm được sản xuất với công thức độc quyền dành riêng cho làn da nam giới. Là dòng sữa rửa mặt KHÔNG BỌT đầu tiên cho nam giới tại Việt Nam với độ pH 6.0 đạt CHUẨN đảm bảo lấy sạch bụi bẩn, nhờn thừa nhưng vẫn tuyệt đối AN TOÀN cho da.\r\n\r\nSữa Rửa Mặt MENLY với các thành phần tinh túy kết hợp với nhau gồm: Tinh chất nha đam, Đất sét xanh Pháp, Tinh dầu trà xanh, Tinh dầu bạc hà và Tinh dầu vỏ bưởi…', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(256) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `MaLoai` varchar(100) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `HoTen` varchar(256) NOT NULL,
  `GioiTinh` int(11) NOT NULL,
  `SoDienThoai` varchar(256) NOT NULL,
  `DiaChi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `Email`, `MatKhau`, `MaLoai`, `TrangThai`, `HoTen`, `GioiTinh`, `SoDienThoai`, `DiaChi`) VALUES
('a', 'a', 'a', 'NCC', 1, 'a', 1, 'a', 'a'),
('admin', '', '$2y$10$bsdiqHJ.g2QoWC/Gpee7Bua9/VCY5zwYLyol3Mex0GWIcHufEuTlO', 'AD', 1, 'Nguyễn Đức Lý', 1, '0963700285', 'Quảng Nam'),
('b', 'b', 'b', 'US', 1, 'b', 1, '1', 'b'),
('c', 'c', 'c', 'US', 1, 'c', 1, 'c', 'c'),
('nguyenducly2000@gmail.com', 'nguyenducly2000@gmail.com', '$2y$10$GuVVCaJa.5SGl96S83okbuY3NZISkR.goG9Svbl8cQ/xv/fAaXKhS', 'NCC', 1, 'Nguyễn Đức Lý', 1, '0963700285', 'Quảng Nam'),
('nguyenvanthedtu@gmail.com', 'nguyenvanthedtu@gmail.com', '$2y$10$FgJnweN0ZtWy0KmW8RBfqOqluI93NdXDEeav.ZkYV2TS8XxaLMjJu', 'NCC', 0, 'Nguyễn Văn Thế', 1, '0123456789', 'Huế');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`IdBai`),
  ADD KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`IdBanner`),
  ADD KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD PRIMARY KEY (`MaKM`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaDG`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `TenDangNhap` (`TenDangNhap`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `loaitk`
--
ALTER TABLE `loaitk`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`),
  ADD KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `nhapxuat`
--
ALTER TABLE `nhapxuat`
  ADD PRIMARY KEY (`MaNhapXuat`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaDM` (`MaDM`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `IdBai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `IdBanner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhapxuat`
--
ALTER TABLE `nhapxuat`
  MODIFY `MaNhapXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD CONSTRAINT `ctkhuyenmai_ibfk_1` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctkhuyenmai_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD CONSTRAINT `nhacungcap_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `nhapxuat` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaitk` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
