-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 12, 2023 lúc 01:34 PM
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
-- Cơ sở dữ liệu: `suruchi-12-12-2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `author` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `view` int NOT NULL,
  `idloai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `author`, `date`, `title`, `content`, `img`, `view`, `idloai`) VALUES
(1, 'HuuNghia', '2023-10-10', 'NHỮNG KIỂU ÁO NAM THỂ HIỆN PHONG CÁCH CÁ NHÂN CỦA RIÊNG BẠN', '<h3>Áo thun - Sự lựa chọn đơn giản, nhưng không hề nhàm chán</h3><br>Áo thun là một trong những kiểu áo nam phổ biến và không thể thiếu trong tủ đồ của bất kỳ chàng trai nào. Bài viết này sẽ giới thiệu về những kiểu áo thun nam đa dạng, từ áo thun cổ tròn cổ V, áo thun in hình đến áo thun sọc ngang hay áo thun trơn. Mỗi kiểu áo thun mang đến một phong cách riêng, giúp bạn thể hiện cá tính và sự tự tin của mình.<br><br><h3>Áo khoác jean - Sự lựa chọn thời trang vừa trẻ trung vừa lịch lãm</h3><br>Nội dung: Áo khoác jean là một trong những item không thể thiếu trong tủ đồ của các chàng trai. Bài viết này sẽ giới thiệu về những kiểu áo khoác jean nam phổ biến như áo khoác jean dài, áo khoác jean biker, áo khoác jean dài với dây kéo... Bên cạnh việc tạo nên phong cách trẻ trung và cá tính, áo khoác jean còn mang đến sự lịch lãm và thời trang cho người mặc.<h3>Áo bomber - Phong cách đậm chất thể thao và cá tính</h3><br>Áo bomber là một trong những kiểu áo nam thể hiện phong cách thể thao và cá tính. Bài viết này sẽ giới thiệu về các kiểu áo bomber nam đa dạng, từ áo bomber trơn đơn giản đến áo bomber in họa tiết độc đáo. Áo bomber không chỉ làm tôn lên vẻ nam tính mà còn mang đến sự thoải mái và năng động cho người mặc.<br><br><h3>Áo hoodie - Sự kết hợp hoàn hảo giữa thể thao và phong cách đường phố</h3><br>Áo hoodie là một trong những kiểu áo nam phổ biến và được yêu thích. Bài viết này sẽ giới thiệu về những kiểu áo hoodie nam đa dạng, từ áo hoodie cổ tròn, áo hoodie có nón đến áo hoodie có khóa kéo. Áo hoodie không chỉ mang đến sự thoải mái và ấm áp mà còn tạo nên phong cách đường phố thời thượng và cá tính.<br><br><h3>Chọn áo nam phù hợp với từng dịp và phong cách</h3><br>Bài viết này sẽ cung cấp cho bạn những gợi ý về cách chọn áo nam phù hợp với từng dịp và phong cách cá nhân. Từ áo thun thông thường cho cuộc hẹn hò, áo khoác jean lịch lãm cho công việc đến áo hoodie thể thao cho các hoạt động ngoài trời. Bạn sẽ tìm thấy thông tin hữu ích để tạo nên phong cách riêng và tự tin trong việc lựa chọn áo nam.', 'tintuc1.jpg', 15, 2),
(2, 'NguyenHuynh', '2023-10-19', 'TƯƠNG LAI THỜI TRANG: \"KHI CÔNG NGHỆ, BỀN VŨNG VÀ CÁ NHÂN HÓA GẶP GỠ\"', '<h3>Tự động thời trang đang là xu hướng đáng chú ý trong thời trang hiện nay.</h3><br> Với sự phát triển nhanh chóng của công nghệ và sự phổ biến của truyền thông xã hội, người tiêu dùng có xu hướng tìm kiếm những trải nghiệm mới mẻ và tiện ích cao hơn khi mua sắm.<br>Sự kết hợp giữa công nghệ và thời trang mang đến những tiện ích đáng kinh ngạc cho người sử dụng. Các công nghệ tiên tiến được tích hợp vào các sản phẩm thời trang, như quần áo có thể điều chỉnh ánh sáng, giữ ấm hoặc làm mát cơ thể. Ngoài ra, các phụ kiện thông minh như đồng hồ, kính mát hay túi xách cũng được kết nối với điện thoại thông minh và mang đến những tính năng độc đáo như đo nhịp tim, theo dõi hoạt động và gọi điện thoại.<br>Hơn nữa, các khái niệm bền vững và thân thiện với môi trường ngày càng được chú trọng trong ngành công nghiệp thời trang. Các nhãn hiệu thời trang lớn và cả những thương hiệu mới nổi đều đang đẩy mạnh sử dụng vật liệu tái chế, thực hiện quá trình sản xuất bền vững và chú trọng đến việc giảm thiểu tác động đến môi trường.<br>Xu hướng thời trang cá nhân cũng đang ngày càng phát triển. Người tiêu dùng muốn thể hiện cá nhân do đó họ chú trọng tới việc lựa chọn trang phục, phụ kiện và phong cách riêng của mình. Các nguồn cảm hứng và xu hướng mới được tạo nên từ các nền văn hóa, nghệ thuật và các cộng đồng trực tuyến, tạo ra sự đa dạng và phong cách độc đáo trong lĩnh vực thời trang.<br>Sự phổ biến của thương mại điện tử cũng đang thay đổi cách chúng ta mua sắm thời trang.Việc mua sắm trực tuyến giúp tạo ra sự thuận tiện và lựa chọn đa dạng hơn cho người tiêu dùng. Người mua có thể tìm kiếm và so sánh giá cả từ các thương hiệu khác nhau trong vài cú nhấp chuột, đồng thời còn có thể mua sắm từ bất kỳ đâu và bất kỳ khi nào.<br>Như vậy, thời trang hiện nay đang dần trở thành một ngành công nghiệp phát triển và đa dạng, mang đến nhiều lựa chọn cho người tiêu dùng. Công nghệ, bền vững, cá nhân hóa và sự phổ biến của thương mại điện tử đều đóng vai trò quan trọng trong việc thay đổi cách chúng ta tiếp cận với thời trang và xác định xu hướng trong tương lai.', 'tintuc2.jpg', 32, 2),
(3, 'MinhDuong', '2023-11-09', 'THỜI TRANG GIỚI TRẺ HIỆN NAY: \"SỰ PHÁ CÁCH VÀ SỰ THỂ HIỆN BẢN THÂN\"', '<h3>Thời trang luôn là một phần quan trọng trong cuộc sống của giới trẻ, và hiện nay, thế hệ trẻ đã thể hiện một sự phá cách đáng chú ý trong phong cách và xu hướng thời trang của họ.</h3> <br>Với sự ảnh hưởng của truyền thông xã hội và nền văn hóa đa dạng, họ đang tạo ra những xu hướng mới, mang đến cái nhìn mới mẻ và cá nhân trong lĩnh vực thời trang.<br>Một trong những xu hướng chính trong thời trang giới trẻ hiện nay là \"shabby chic\" - phong cách hỗn hợp giữa tinh tế và hoang dại. Giới trẻ sử dụng các phụ kiện vintage hoặc tái chế kết hợp với những trang phục hiện đại để tạo ra sự độc đáo và sáng tạo. Đồng thời, phong cách streetwear và urban cũng ngày càng được lòng giới trẻ với sự kết hợp giữa những phụ kiện thể thao và trang phục cao cấp, tạo nên sự phá cách và thoải mái.<br>Bên cạnh đó, xu hướng sử dụng vật liệu bền vững trong thời trang đang trở thành một trào lưu lớn trong giới trẻ. Người tiêu dùng trẻ hướng tới các thương hiệu thân thiện với môi trường, sử dụng vải tái chế, hữu cơ hoặc vật liệu tái sinh. Họ coi đây là một cách góp phần giảm thiểu tác động tiêu cực của ngành công nghiệp thời trang đến môi trường.<br>Trong giai đoạn này, giới trẻ cũng tỏ ra quan tâm đến việc thể hiện bản thân thông qua phong cách cá nhân. Họ yêu thích mặc những trang phục độc đáo, không giống ai, phản ánh cá thể và sứ mệnh của mình. Việc tạo dựng hình ảnh cá nhân thông qua thời trang đã trở thành một phần quan trọng trong cuộc sống và sự tự tin của giới trẻ.<br>Thời trang giới trẻ hiện nay không chỉ là về phong cách mà còn là về sự không giới hạn, sáng tạo và thể hiện bản thân. Những xu hướng mới và cái nhìn độc đáo của giới trẻ đang thúc đẩy ngành công nghiệp thời trang tiến lên phía trước, mang đến sự đa dạng và sự phá cách.', 'tintuc3.jpg', 8, 2),
(4, 'ThachPhat', '2023-11-12', 'THỜI TRANG GIỚI TRẺ: \"TỰ DO SÁNG TẠO VÀ PHONG CÁCH ĐỘC ĐÁO\"', '<h3>Thời trang không chỉ là một cách để che lấp cơ thể mà còn là một phương tiện để thể hiện cá nhân và phong cách của mỗi người.</h3><br>Đặc biệt, trong giới trẻ hiện nay, việc sáng tạo và tự do biểu đạt bản thân thông qua thời trang đã trở thành một trào lưu phổ biến, mang đến những phong cách độc đáo và nổi bật.<br>Một điểm đặc biệt của thời trang giới trẻ hiện nay là sự phá cách và không giới hạn trong việc lựa chọn trang phục. Giới trẻ không ngại thể hiện sự độc đáo qua việc kết hợp các phong cách khác nhau, từ trang phục vintage đến streetwear hiện đại. Họ không sợ thử nghiệm với những trang phục độc đáo và không theo quy chuẩn, tạo ra những phong cách thú vị và sáng tạo.<br>Một trong những xu hướng phổ biến của thời trang giới trẻ là việc tái chế và sử dụng lại những trang phục cũ. Thay vì mua sắm những trang phục mới, giới trẻ thích khám phá và tận dụng những món đồ đã có sẵn trong tủ đồ của mình. Họ có thể tạo ra những bộ trang phục độc đáo và thú vị bằng cách kết hợp lại các mảnh ghép từ những trang phục khác nhau, tạo nên sự bắt mắt và cá nhân hóa.<br>Cùng với đó, giới trẻ hiện nay cũng đặt sự chú trọng đến sự bền vững trong thời trang. Họ quan tâm đến nguồn gốc và phương pháp sản xuất của nhãn hiệu thời trang mà họ chọn, và ưu tiên sử dụng các vật liệu hữu cơ, tái chế và không gây hại cho môi trường. Điều này cho thấy một trách nhiệm tích cực đối với việc xây dựng một ngành công nghiệp thời trang bền vững và tôn trọng môi trường.<br>Ngoài ra, trên các mạng xã hội và nền tảng trực tuyến, giới trẻ cũng sử dụng thời trang để tạo dựng hình ảnh cá nhân và giao tiếp với cộng đồng. Các blogger và influencers thời trang nổi tiếng đã tạo ra những trào lưu và xu hướng mới, góp phần lan truyền những ý tưởng sáng tạo và phong cách cá nhân trong giới trẻ.<br>Trong tương lai, thời trang giới trẻ dường như sẽ tiếp tục thay đổi và phát triển theo sự tiến bộ của thời đại. Sự tự do sáng tạo và phong cách độc đáo sẽ tiếp tục là điểm nhấn trong thế giới thời trang. Giới trẻ sẽ tiếp tục tạo ra những xu hướng mới và sáng tạo, thể hiện sự cá nhân qua phong cách thời trang của mình, và đóng góp vào sự phong phú và đa dạng của ngành công nghiệp này.', 'tintuc4.jpg', 20, 1),
(5, 'NgocTran', '2023-11-15', 'CÁCH CHĂM SÓC VÀ BẢO QUẢN ÁO THỜI TRANG ĐỂ KÉO DÀI TUỔI THỌ', '<h3>1. Làm thế nào để giặt và làm sạch áo kiểu một cách đúng cách?</h3><br>Trong phần này, chúng ta sẽ tìm hiểu về cách giặt và làm sạch áo kiểu sao cho đúng cách, tránh làm hỏng chất liệu và màu sắc của áo. Bài viết sẽ cung cấp các bước cơ bản để giặt áo kiểu, bao gồm lựa chọn loại detergent phù hợp, cách giặt tay và giặt máy đúng cách, và cách làm khô áo một cách an toàn.<br>1.1 Phân loại áo theo màu sắc và chất liệu: Tách áo trắng và áo màu để tránh việc áo màu bị phai màu. Ngoài ra, hãy đọc kỹ nhãn mác trên áo để biết cách giặt phù hợp với chất liệu áo.<br>1.2 Xử lý các vết bẩn: Trước khi giặt, hãy xử lý các vết bẩn như vết mực, mỡ, hay chất nhờn bằng cách sử dụng xà phòng rửa trước hoặc chất tẩy vết bẩn.<br>1.3 Chọn chế độ giặt phù hợp: Đặt máy giặt ở chế độ phù hợp với chất liệu và mức độ bẩn của áo. Nếu giặt bằng tay, hãy chọn nước giặt phù hợp và nhẹ nhàng xoa áo.<br>1.4 Sử dụng chất tẩy và chất làm mềm: Thêm chất tẩy và chất làm mềm vào nước giặt để làm sạch và làm mềm áo. Hãy đảm bảo sử dụng lượng chất tẩy và chất làm mềm phù hợp với khối lượng và chất liệu áo.<br>1.5 Phơi và là ủi áo: Sau khi giặt, phơi áo dưới ánh nắng mặt trời để khử trùng và làm khô tự nhiên. Khi ủi áo, hãy đảm bảo điều chỉnh nhiệt độ ủi phù hợp với chất liệu áo.<br><br><h3>2. Bảo quản áo thun: Những điều cần biết để áo luôn mới và bền đẹp</h3><br>Trong phần này, chúng ta sẽ tìm hiểu về cách bảo quản áo thun sao cho áo luôn mới, bền đẹp và không bị biến dạng. Bài viết sẽ đề cập đến cách giặt áo thun đúng cách để tránh co rút, lựa chọn phương pháp làm khô thích hợp, và cách ủi áo thun sao cho không làm hỏng chất liệu.<br>Đầu tiên, hãy đảm bảo rằng bạn đọc kỹ nhãn mác hướng dẫn giặt áo trên sản phẩm.<br>Áo thun thường được giặt bằng nước lạnh hoặc nước ấm để tránh co rút và mất màu. Ngoài ra, hạn chế việc sử dụng chất tẩy mạnh và chế phẩm tẩy trắng để tránh làm hỏng sợi vải. Khi phơi áo, hãy tránh ánh nắng mặt trời trực tiếp để tránh làm mất màu áo.<br>Cuối cùng, hãy lưu ý không ủi quá nhiều nhiệt độ lên áo thun để tránh làm biến dạng sợi vải. Hy vọng những thông tin này sẽ giúp bạn bảo quản áo thun một cách tốt nhất.<br><br><h3>3. Cách chăm sóc và bảo quản áo khoác cardigan, sweater và hoodie zip</h3><br>Trong phần này, chúng ta sẽ tìm hiểu về cách chăm sóc và bảo quản các loại áo khoác như cardigan, sweater và hoodie zip. Bài viết sẽ cung cấp các gợi ý về cách giặt, làm khô và bảo quản đúng cách để áo khoác luôn giữ được hình dáng ban đầu và không bị biến dạng.<br>1.1 Đọc kỹ nhãn mác: Đầu tiên, hãy đọc kỹ nhãn mác trên áo để biết cách giặt và bảo quản đúng cách. Mỗi loại áo có thể có yêu cầu khác nhau về nhiệt độ giặt, chất tẩy và phơi khô.<br>1.2 Giặt áo theo hướng dẫn: Áo khoác cardigan, sweater và hoodie zip thường được giặt bằng nước lạnh hoặc nước ấm. Hạn chế việc sử dụng chất tẩy mạnh và chế phẩm tẩy trắng để tránh làm hỏng sợi vải. Nếu có thể, hãy giặt áo bằng tay để tránh co rút và biến dạng.<br>1.3 Phơi khô áo: Khi phơi áo, hãy tránh ánh nắng mặt trời trực tiếp để tránh làm mất màu áo. Nếu áo có thể, hãy phơi áo trong bóng râm hoặc trong nhà. Hạn chế việc sử dụng máy sấy để tránh co rút và làm biến dạng áo.<br>1.4 Là ủi áo: Khi là ủi áo, hãy đặt nhiệt độ ủi phù hợp với loại vải của áo. Nếu cần, hãy sử dụng vật liệu trung gian như khăn ướt hoặc giấy bạc để tránh làm hỏng bề mặt áo.<br>\n', 'tintuc5.jpg', 5, 1),
(6, 'MinhThu', '2023-11-16', 'XU HƯỚNG THỜI TRANG ÁO NỮ HOT NHẤT MÙA NÀY - XU HƯỚNG MỚI\n', '<h3>1. Áo kiểu: Phong cách thời thượng cho nàng công sở</h3><br>Trong mùa này, áo kiểu đang trở thành một trong những xu hướng thời trang hot nhất cho nữ giới. Với thiết kế thanh lịch, tinh tế và phong cách đa dạng, áo kiểu là sự lựa chọn hoàn hảo cho nàng công sở. Từ áo kiểu cổ tròn đơn giản đến áo kiểu sơ mi phối nơ sang trọng, hãy khám phá những mẫu áo kiểu sành điệu để tạo nên phong cách riêng của bạn.<br><br><h3>2. Áo thun: Sự thoải mái và năng động cho những ngày hè</h3><br>Áo thun không chỉ là một item cơ bản trong tủ đồ của chúng ta, mà còn là xu hướng thời trang không thể thiếu trong mùa hè này. Với chất liệu thoáng mát và đa dạng về màu sắc và họa tiết, áo thun mang đến sự thoải mái và năng động cho những ngày nắng nóng. Hãy khám phá những mẫu áo thun trendy nhất để thể hiện phong cách cá nhân của bạn.<br><br><h3>3. Áo khoác: Giữ ấm và thời trang trong những ngày se lạnh</h3><br>Với sự biến đổi của thời tiết, áo khoác là một item không thể thiếu trong tủ đồ của bạn trong mùa này. Từ áo cardigan ấm áp, áo sweater trendy đến áo hoodie zip sành điệu, chúng đều mang đến sự ấm áp và phong cách cho những ngày se lạnh. Hãy chọn cho mình những mẫu áo khoác phù hợp với phong cách và cá nhân của bạn.<br><br><h3>4. Tự tin và quyến rũ với áo kiểu dáng ôm sát</h3><br>Áo kiểu dáng ôm sát đang trở thành xu hướng thời trang nổi bật cho nữ giới. Với thiết kế ôm sát vòng ngực và eo, áo kiểu dáng ôm sát giúp tôn lên những đường cong quyến rũ của bạn. Tự tin và quyến rũ là điều mà áo kiểu dáng ôm sát mang lại. Hãy tạo cho mình những set đồ thời trang đẳng cấp với áo kiểu dáng ôm sát.<br><br><h3>5. Phong cách năng động và trẻ trung với áo hoodie zip</h3><br>Áo hoodie zip là một item không thể thiếu trong tủ đồ của bạn nếu bạn yêu thích phong cách năng động và trẻ trung. Với thiết kế dễ dàng mix-match và khả năng giữ ấm tuyệt vời, áo hoodie zip là lựa chọn hoàn hảo cho những ngày thời tiết mát mẻ. Hãy khám phá những mẫu áo hoodie zip đa dạng về màu sắc và thiết kế để thể hiện phong cách cá nhân của bạn.', 'tintuc6.jpg', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb3_unicode_ci NOT NULL,
  `stt` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `img`, `stt`) VALUES
(1, 'Tin mới', 'pd24.jpg', 1),
(2, 'Thông tin hữu ích', 'pd4.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `idpro` int NOT NULL,
  `price` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `price`, `name`, `img`, `soluong`, `thanhtien`, `idbill`) VALUES
(67, 24, 125000, 'Áo thun nam  Routine', 'pd15.jpg', 1, 125000, 36),
(68, 7, 177000, 'Áo kiểu trễ vai xanh', 'pd7.jpg', 1, 177000, 37),
(69, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 37),
(70, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 38),
(71, 24, 125000, 'Áo thun nam  Routine', 'pd15.jpg', 1, 125000, 39),
(72, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 4, 580000, 40),
(94, 3, 209000, 'Áo kiểu tay dài ', 'pd3.jpg', 1, 209000, 63),
(95, 7, 177000, 'Áo kiểu trễ vai xanh', 'pd7.jpg', 1, 177000, 63),
(98, 3, 209000, 'Áo kiểu tay dài ', 'pd3.jpg', 1, 209000, 66),
(99, 1, 189000, 'Áo Sơ Mi Voan Dài Tay', 'pd1.jpg', 1, 189000, 67),
(100, 2, 179000, 'Áo sơ mi thắt nơ ', 'pd2.jpg', 2, 179000, 68),
(101, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 3, 135000, 68),
(102, 6, 182000, 'Áo Len Tăm Cổ Vuông', 'pd6.jpg', 1, 182000, 68),
(103, 1, 189000, 'Áo Sơ Mi Voan Dài Tay', 'pd1.jpg', 1, 189000, 68),
(104, 16, 265000, 'Áo Khoác Cadigan Nữ Hồng ', 'pd17.jpg', 1, 265000, 69),
(105, 18, 225000, 'Áo Khoác nỉ ', 'pd19.jpg', 1, 225000, 69),
(106, 24, 125000, 'Áo thun nam  Routine', 'pd15.jpg', 1, 125000, 70),
(107, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 1, 265000, 70),
(108, 5, 145000, 'Áo 2 dây babydoll cột nơ ', 'pd5.jpg', 5, 725000, 70),
(109, 8, 158000, 'Áo sơ mi mỏng thời trang', 'pd8.jpg', 1, 158000, 71),
(110, 11, 135000, 'Áo Thun Tay Lỡ Unisex ', 'pd11.jpg', 1, 135000, 71),
(111, 12, 130000, 'Áo Thun Levents ', 'pd12.jpg', 1, 130000, 71),
(112, 10, 139000, 'Áo Thun Meow Tee ', 'pd10.jpg', 1, 139000, 71),
(113, 3, 209000, 'Áo kiểu tay dài ', 'pd3.jpg', 1, 209000, 71),
(114, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 72),
(115, 2, 179000, 'Áo sơ mi thắt nơ ', 'pd2.jpg', 1, 179000, 72),
(116, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 72),
(117, 6, 182000, 'Áo Len Tăm Cổ Vuông', 'pd6.jpg', 1, 182000, 73),
(118, 11, 135000, 'Áo Thun Tay Lỡ Unisex ', 'pd11.jpg', 1, 135000, 74),
(119, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 74),
(120, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 1, 265000, 74),
(121, 16, 265000, 'Áo Khoác Cadigan Nữ Hồng ', 'pd17.jpg', 1, 265000, 75),
(122, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 75),
(123, 2, 179000, 'Áo sơ mi thắt nơ ', 'pd2.jpg', 1, 179000, 75),
(124, 8, 158000, 'Áo sơ mi mỏng thời trang', 'pd8.jpg', 1, 158000, 76),
(125, 24, 125000, 'Áo thun nam  Routine', 'pd15.jpg', 1, 125000, 77),
(126, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 1, 265000, 77),
(127, 14, 130000, 'Áo Thun Unisex Tay Lỡ ', 'pd14.jpg', 1, 130000, 77),
(128, 13, 112000, 'Áo Thun Nam Cổ Tròn ', 'pd13.jpg', 1, 112000, 78),
(129, 7, 177000, 'Áo kiểu trễ vai xanh', 'pd7.jpg', 1, 177000, 79),
(130, 6, 182000, 'Áo Len Tăm Cổ Vuông', 'pd6.jpg', 1, 182000, 79),
(131, 20, 256000, 'Áo khoác demin Nhật Bản', 'pd21.jpg', 1, 256000, 80),
(132, 4, 160000, 'Áo Kiểu Tay Dài Cổ Vuông ', 'pd4.jpg', 1, 160000, 81),
(133, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 82),
(134, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 7, 1855000, 82),
(135, 6, 182000, 'Áo Len Tăm Cổ Vuông', 'pd6.jpg', 1, 182000, 82),
(136, 13, 112000, 'Áo Thun Nam Cổ Tròn ', 'pd13.jpg', 7, 784000, 83),
(137, 6, 182000, 'Áo Len Tăm Cổ Vuông', 'pd6.jpg', 3, 546000, 83),
(138, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 83),
(139, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 84),
(140, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 1, 265000, 84),
(141, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 85),
(142, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 85),
(143, 8, 158000, 'Áo sơ mi mỏng thời trang', 'pd8.jpg', 1, 158000, 86),
(144, 2, 179000, 'Áo sơ mi thắt nơ ', 'pd2.jpg', 1, 179000, 86),
(145, 14, 130000, 'Áo Thun Unisex Tay Lỡ ', 'pd14.jpg', 1, 130000, 87),
(146, 9, 135000, 'Áo phông trắng freesize ', 'pd9.jpg', 1, 135000, 87),
(147, 2, 179000, 'Áo sơ mi thắt nơ ', 'pd2.jpg', 1, 179000, 87),
(148, 23, 259000, 'Áo khoác da dáng Bomber', 'pd24.jpg', 1, 259000, 88),
(149, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 10, 1450000, 89),
(150, 21, 265000, 'Áo Jean Nam Nữ form rộng', 'pd22.jpg', 1, 265000, 89),
(151, 15, 145000, 'Áo thun nam nữ Unisex', 'pd16.jpg', 1, 145000, 90),
(152, 8, 158000, 'Áo sơ mi mỏng thời trang', 'pd8.jpg', 1, 158000, 91),
(153, 5, 145000, 'Áo 2 dây babydoll cột nơ ', 'pd5.jpg', 8, 1160000, 92);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb3_unicode_ci NOT NULL,
  `stt` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `stt`) VALUES
(1, 'Áo kiểu ', 'pd1.jpg', 1),
(2, ' Áo thun', 'pd9.jpg', 2),
(3, 'Áo khoác', 'pd17.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `rating` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `iduser`, `idpro`, `content`, `date`, `time`, `rating`) VALUES
(95, 14, 1, 'Sản phẩm rất chât lượng, tôi rất hài lòng với sản phẩm này', '2023-12-01', '13:56:56', 5),
(96, 17, 1, 'Vải đẹp ok ', '2023-12-01', '13:59:50', 4),
(97, 18, 1, 'Sản phẩm khá tốt, chất liệu ổn, đã mua ở đây 5 lần và vẫn rất hài lòng!!', '2023-12-01', '14:00:45', 5),
(98, 20, 1, 'Nhân viên rất nhiệt tình, tôi sẽ mua thêm lần nữa!!', '2023-12-01', '14:01:47', 5),
(99, 19, 1, 'Hơi đẹp ', '2023-12-01', '14:08:51', 3),
(100, 21, 1, 'Đẹp quá tui muốn mua nó <3', '2023-12-01', '14:09:45', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `mahd` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nguoidat_ten` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_tel` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nguoidat_diachi` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8mb3_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `ship` int NOT NULL DEFAULT '30000',
  `voucher` int NOT NULL DEFAULT '0',
  `tongthanhtoan` int NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1: ck',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: Pending;\r\n2: Cofirm;\r\n3: Delivering;\r\n4: Complete;\r\n5: Delivering fail;\r\n6: Cancelled',
  `iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `mahd`, `date`, `time`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_tel`, `nguoidat_diachi`, `note`, `total`, `ship`, `voucher`, `tongthanhtoan`, `pttt`, `status`, `iduser`) VALUES
(36, 'Suruchi52', '2023-11-29', '18:02:41', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'ghjkhjk', 125000, 30000, 0, 155000, 1, 4, 14),
(37, 'Suruchi871', '2023-11-29', '19:34:08', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsfds', 322000, 30000, 0, 352000, 1, 4, 14),
(38, 'Suruchi868', '2023-11-29', '20:00:40', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdfdsf', 145000, 30000, 0, 175000, 1, 4, 14),
(39, 'Suruchi540', '2023-11-29', '20:02:56', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'dsds', 125000, 30000, 0, 155000, 1, 4, 14),
(40, 'Suruchi249', '2023-12-01', '20:51:48', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', '209 QL13, phường 26, Q.Bình Thạnh, TP.HCM', 'fdfsdfds', 580000, 30000, 0, 610000, 0, 1, 14),
(63, 'Suruchi715', '2023-12-01', '23:21:05', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', '209 QL13, phường 26, Q.Bình Thạnh, TP.HCM', 'dsds', 386000, 30000, 0, 416000, 0, 1, 14),
(64, 'Suruchi178', '2023-12-01', '23:21:22', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', '209 QL13, phường 26, Q.Bình Thạnh, TP.HCM', 'cxcxz', 189000, 30000, 0, 219000, 0, 1, 14),
(65, 'Suruchi303', '2023-12-01', '23:28:59', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', '209 QL13, phường 26, Q.Bình Thạnh, TP.HCM', 'dsds', 189000, 30000, 0, 219000, 0, 1, 14),
(66, 'Suruchi983', '2023-12-02', '00:12:15', 'Nguyễn Hữu Nghĩa', 'nguyenhuunghia089@gmail.com', '0377318275', '209 QL13, phường 26, Q.Bình Thạnh, TP.HCM', '', 209000, 30000, 0, 239000, 0, 1, 14),
(67, 'Suruchi628', '2023-12-02', '09:36:13', 'Phan Thị Minh Thư', 'thuptmps27457@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'xczzxc', 189000, 30000, 0, 219000, 0, 1, 17),
(68, 'Suruchi103', '2023-12-02', '09:37:31', 'Phan Thị Minh Thư', 'thuptmps27457@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'ddsads', 1134000, 30000, 0, 1164000, 0, 1, 17),
(69, 'Suruchi138', '2023-12-02', '09:37:59', 'Phan Thị Minh Thư', 'thuptmps27457@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'dsada', 490000, 30000, 0, 520000, 0, 1, 17),
(70, 'Suruchi1', '2023-12-02', '09:38:24', 'Phan Thị Minh Thư', 'thuptmps27457@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'ffs', 1115000, 30000, 0, 1145000, 0, 1, 17),
(71, 'Suruchi200', '2023-12-02', '09:38:52', 'Phan Thị Minh Thư', 'thuptmps27457@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdfsdf', 771000, 30000, 0, 801000, 0, 1, 17),
(72, 'Suruchi926', '2023-12-02', '09:39:47', 'Nguyễn Thị Ngọc Trân', 'tranntnps26576@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'czxcxz', 459000, 30000, 0, 489000, 0, 1, 18),
(73, 'Suruchi998', '2023-12-02', '09:39:59', 'Nguyễn Thị Ngọc Trân', 'tranntnps26576@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'vcvcx', 182000, 30000, 0, 212000, 0, 1, 18),
(74, 'Suruchi345', '2023-12-02', '09:40:14', 'Nguyễn Thị Ngọc Trân', 'tranntnps26576@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'zczc', 535000, 30000, 0, 565000, 0, 1, 18),
(75, 'Suruchi618', '2023-12-02', '09:40:34', 'Nguyễn Thị Ngọc Trân', 'tranntnps26576@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdfdsfs', 579000, 30000, 0, 609000, 0, 1, 18),
(76, 'Suruchi763', '2023-12-02', '09:40:47', 'Nguyễn Thị Ngọc Trân', 'tranntnps26576@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsfs', 158000, 30000, 0, 188000, 0, 1, 18),
(77, 'Suruchi879', '2023-12-02', '09:41:31', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsf', 520000, 30000, 0, 550000, 0, 1, 20),
(78, 'Suruchi215', '2023-12-02', '09:41:49', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', '', 112000, 30000, 0, 142000, 0, 1, 20),
(79, 'Suruchi219', '2023-12-02', '09:42:01', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'hjg', 359000, 30000, 0, 389000, 0, 1, 20),
(80, 'Suruchi980', '2023-12-02', '09:42:35', 'Nguyễn Huynh', 'huynhnps27711@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdfs', 256000, 30000, 0, 286000, 0, 1, 19),
(81, 'Suruchi671', '2023-12-02', '09:42:48', 'Nguyễn Huynh', 'huynhnps27711@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'dfs', 160000, 30000, 0, 190000, 0, 1, 19),
(82, 'Suruchi643', '2023-12-02', '09:43:07', 'Nguyễn Huynh', 'huynhnps27711@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsfdf', 2182000, 30000, 0, 2212000, 0, 1, 19),
(83, 'Suruchi532', '2023-12-02', '09:43:26', 'Nguyễn Huynh', 'huynhnps27711@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fsdfd', 1465000, 30000, 0, 1495000, 0, 1, 19),
(84, 'Suruchi341', '2023-12-02', '09:43:39', 'Nguyễn Huynh', 'huynhnps27711@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsf', 410000, 30000, 0, 440000, 0, 1, 19),
(85, 'Suruchi691', '2023-12-02', '09:44:27', 'Huỳnh Nguyễn Thạch Phát ', 'phathntps27741@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'vcvx', 280000, 30000, 0, 310000, 0, 1, 21),
(86, 'Suruchi70', '2023-12-02', '09:44:39', 'Huỳnh Nguyễn Thạch Phát ', 'phathntps27741@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'vcxv', 337000, 30000, 0, 367000, 0, 1, 21),
(87, 'Suruchi818', '2023-12-02', '09:44:57', 'Huỳnh Nguyễn Thạch Phát ', 'phathntps27741@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'vcx', 444000, 30000, 0, 474000, 0, 1, 21),
(88, 'Suruchi246', '2023-12-02', '09:45:25', 'Huỳnh Nguyễn Thạch Phát ', 'phathntps27741@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'cz', 259000, 30000, 0, 289000, 0, 1, 21),
(89, 'Suruchi685', '2023-12-02', '09:45:49', 'Huỳnh Nguyễn Thạch Phát ', 'phathntps27741@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'dfdfds', 1715000, 30000, 0, 1745000, 0, 1, 21),
(90, 'Suruchi767', '2023-12-02', '09:46:48', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'dfdsf', 145000, 30000, 0, 175000, 0, 1, 20),
(91, 'Suruchi538', '2023-12-02', '09:46:57', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fdsfsd', 158000, 30000, 0, 188000, 0, 1, 20),
(92, 'Suruchi961', '2023-12-02', '09:47:11', 'Trần Minh Dương', 'duongtmps27840@fpt.edu.vn', '0123456789', 'Đường Số 13, Tân Hưng Thuận, Quận 12, Hồ Chí Minh', 'fsfd', 1160000, 30000, 0, 1190000, 0, 1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `old_price` int NOT NULL DEFAULT '0',
  `img` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `describe1` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `describe2` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `view` int NOT NULL,
  `bestseller` tinyint(1) NOT NULL DEFAULT '0',
  `new` tinyint(1) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `old_price`, `img`, `describe1`, `describe2`, `view`, `bestseller`, `new`, `hot`, `iddm`) VALUES
(1, 'Áo Sơ Mi Voan Dài Tay', 189000, 225000, 'pd1.jpg', 'Áo sơ mi voan dài tay thắt eo là một lựa chọn hoàn hảo cho bạn gái muốn thể hiện sự đẳng cấp, gợi cảm và cá tính của mình.', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: voan mềm mại, nhẹ nhàng, thoáng mát và có khả năng chống tia UV, kháng khuẩn và bảo vệ da.<br>Kiểu dáng: dài tay.<br>Dáng: thắt eo, tạo nên sự nữ tính, duyên dáng và tôn dáng cho người mặc.<br>Màu sắc: trắng, đen.<br>Dịp: nhiều dịp khác nhau, như công sở, dạo phố, picnic, shopping, hẹn hò… và kết hợp được với nhiều loại quần, váy, giày dép khác.<br> Áo được làm từ chất liệu voan mềm mại, nhẹ nhàng, thoáng mát và có khả năng chống tia UV, kháng khuẩn và bảo vệ da.', 54, 0, 1, 1, 1),
(2, 'Áo sơ mi thắt nơ ', 179000, 215000, 'pd2.jpg', 'Chiếc áo sơ mi kiểu nữ, áo sơ mi thắt nơ bên cách điệu Ulzzang là một loại trang phục nữ mang phong cách Hàn Quốc, trẻ trung và năng động. ', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: cotton có độ co giãn và thấm hút tốt.<br>Kiểu dáng: cổ vuông, tay dài.<br>Điểm nhấn: nơ bên cạnh, thắt ở phần eo.Nơ được thiết kế với nhiều hình dạng.<br>Họa tiết: đơn sắc.<br>Màu sắc: be.<br>Dịp: nhiều dịp khác nhau, như đi học, đi làm, đi chơi, hẹn hò… và kết hợp được với nhiều loại quần, váy, giày dép khác.<br>Áo được làm từ chất liệu cotton có độ co giãn và thấm hút tốt.', 40, 0, 1, 0, 1),
(3, 'Áo kiểu tay dài ', 209000, 244000, 'pd3.jpg', 'Chiếc áo kiểu BH chất chiffon tay dài hoạ tiết hoa nữ tính là một loại trang phục nữ đẹp, thanh lịch và hiện đại. ', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: chiffon, một loại vải mỏng, nhẹ, mềm mại và thoáng mát. Chiffon có độ bền cao, không nhăn, không bai, không xù và có khả năng thấm hút tốt.<br>Kiểu dáng: BH, tức là có phần ngực được cắt may riêng biệt, tạo nên sự ôm sát, nâng đỡ và tôn lên vòng một của người mặc.<br> Hoạ tiết: hoa, mang lại sự tươi sáng, nữ tính và duyên dáng cho người mặc.<br>Màu sắc: hồng.<br>Dịp: nhiều dịp khác nhau, như đi làm, đi chơi, hẹn hò… và kết hợp được với nhiều loại quần, váy, giày dép khác. <br>Áo được làm từ chất liệu chiffon, một loại vải mỏng, nhẹ, mềm mại và thoáng mát. Áo có kiểu dáng BH, tức là có phần ngực được cắt may riêng biệt, tạo nên sự ôm sát, nâng đỡ và tôn lên vòng một của người mặc.', 204, 1, 0, 0, 1),
(4, 'Áo Kiểu Tay Dài Cổ Vuông ', 160000, 185000, 'pd4.jpg', 'Chiếc áo kiểu tay dài cổ vuông họa tiết hoa xinh xắn phong cách Hàn Quốc là một loại trang phục nữ đẹp, nữ tính và hiện đại. ', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: polyester, một loại vải nhân tạo có độ bền cao, không nhăn, không bai, không xù và có khả năng chống thấm nước.<br>Kiểu dáng: tay dài, cổ tim.<br>Hoạ tiết: hoa, mang lại sự tươi sáng, duyên dáng và lãng mạn cho người mặc.<br>Màu sắc: trắng.<br>Dịp: nhiều dịp khác nhau, như đi làm, đi chơi, hẹn hò… và kết hợp được với nhiều loại quần, váy, giày dép khác.<br>Áo được làm từ chất liệu polyester, một loại vải nhân tạo có độ bền cao, không nhăn, không bai, không xù và có khả năng chống thấm nước. Áo có họa tiết hoa, mang lại sự tươi sáng, duyên dáng và lãng mạn cho người mặc.', 62, 0, 0, 0, 1),
(5, 'Áo 2 dây babydoll cột nơ ', 145000, 159000, 'pd5.jpg', 'Chiếc áo 2 dây babydoll cột nơ vai phong cách tiểu thư công chúa là một loại trang phục nữ đáng yêu, nữ tính và lãng mạn.', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: cotton, mềm mại, thoáng mát và thấm hút tốt.<br>Kiểu dáng: babydoll, tức là có phần ngực ôm sát, phần eo và hông rộng và xòe ra, tạo nên sự nhẹ nhàng, bay bổng và tôn lên vòng một của người mặc.<br>Màu sắc: xanh dương.<br>Dịp: nhiều dịp khác nhau, như đi chơi, hẹn hò, dự tiệc… và kết hợp được với nhiều loại quần, váy, giày dép khác.<br> Áo được làm từ chất liệu vải cotton, mềm mại, thoáng mát và thấm hút tốt.<br> Áo có kiểu dáng babydoll, tức là có phần ngực ôm sát, phần eo và hông rộng và xòe ra, tạo nên sự nhẹ nhàng, bay bổng và tôn lên vòng một của người mặc.', 68, 0, 0, 0, 1),
(6, 'Áo Len Tăm Cổ Vuông', 182000, 199000, 'pd6.jpg', 'Chiếc áo len tăm cổ vuông là một loại trang phục nữ đẹp, sang trọng và hiện đại. Áo được làm từ chất liệu len tăm, một loại sợi len mỏng, nhẹ, mềm mại và ấm áp. Len tăm có độ bền cao, không nhăn, không bai, không xù và có khả năng thấm hút tốt.', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: len tăm, một loại sợi len mỏng, nhẹ, mềm mại và ấm áp.<br>Kiểu dáng: cổ vuông. Áo có tay dài, phối nút hoặc khuy ở phía trước.<br>Màu sắc: trắng.<br>Dịp: nhiều dịp khác nhau, như đi làm, đi chơi, hẹn hò… và kết hợp được với nhiều loại quần, váy, giày dép khác.', 122, 0, 1, 0, 1),
(7, 'Áo kiểu trễ vai xanh', 177000, 184000, 'pd7.jpg', 'Chiếc áo kiểu trễ vai xanh là một loại trang phục nữ đẹp, gợi cảm và thời trang. Áo có thiết kế cổ áo hở vai, tạo ra sự nữ tính và quyến rũ cho người mặc. ', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: sợi nhân tạo…<br>Kiểu dáng: cổ áo hở vai, tạo ra sự nữ tính và quyến rũ<br>cho người mặc. Áo có kiểu tay phồng, cột nơ.<br>Màu sắc: xanh, mang lại sự tươi sáng, thanh lịch và<br>hiện đại cho người mặc.<br>Dịp: nhiều dịp khác nhau, như đi làm, đi chơi, hẹn hò,<br>dự tiệc… và kết hợp được với nhiều loại quần, váy, giày dép khác', 165, 1, 0, 0, 1),
(8, 'Áo sơ mi mỏng thời trang', 158000, 169000, 'pd8.jpg', 'Chiếc áo sơ mi mỏng thời trang là một loại trang phục nữ đẹp, thanh lịch và hiện đại. ', 'THÔNG TIN SẢN PHẨM<br>Chất liệu: voan.<br>Kiểu dáng: cổ áo, tay áo và thân áo bằng vải mỏng, nhẹ, mềm mại và thoáng mát.<br>Hoạ tiết: kẻ sọc, chấm bi, hoa văn…<br>Màu sắc: nhiều màu sắc.<br>Dịp: nhiều dịp khác nhau, như đi làm, đi chơi, hẹn hò, dự tiệc… và kết hợp được với nhiều loại quần, váy, giày dép khác.<br>Áo có thiết kế cổ áo, tay áo và thân áo bằng vải mỏng, nhẹ, mềm mại và thoáng mát. Áo được làm từ loại vải voan. ', 95, 0, 0, 0, 1),
(9, 'Áo phông trắng freesize ', 135000, 164000, 'pd9.jpg', 'Chiếc áo phông trắng freesize phong cách trẻ trung năng động là một loại áo thun đơn giản nhưng có thể tạo ra nhiều phong cách thời trang khác nhau.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo phông trắng freesize phong cách trẻ trung năng động.<br>Chất liệu: Cotton 100%.<br> Màu sắc: Trắng.<br>Kích thước: Freesize.<br> Hình in: 3D, ngộ nghĩnh, cá tính.<br> Thiết kế: Cổ tròn, tay ngắn, dáng rộng Phong cách: Trẻ trung, năng động, cá tính.<br>Bạn có thể kết hợp chiếc áo này với nhiều loại quần, chân váy, áo khoác hay phụ kiện để thể hiện cá tính và sự năng động của mình.<br>Cách bảo quản: Giặt tay hoặc giặt máy ở chế độ nhẹ nhàng, không sử dụng chất tẩy, phơi trong bóng râm, ủi ở nhiệt độ thấp.', 115, 0, 1, 0, 2),
(10, 'Áo Thun Meow Tee ', 139000, 168000, 'pd10.jpg', 'Chiếc áo thun Meow Tee Nomography Unisex Form Rộng là một sản phẩm thời trang dành cho cả nam và nữ, mang phong cách năng động, cá tính và sáng tạo.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo Thun Meow Tee Nomography Unisex Form Rộng.<br>Chất liệu: Cotton 100%.<br> Màu sắc: Trắng.<br>Kích thước: Freesize.<br> Hình in: 3D, hiệu ứng trame nên các bạn sẽ không bị bung tróc.<br>Thiết kế: Cổ tròn, tay ngắn, dáng rộng.<br>Phong cách: Trẻ trung, năng động, cá tính.<br>Cách bảo quản: Giặt tay hoặc giặt máy ở chế độ nhẹ nhàng, không sử dụng chất tẩy, phơi trong bóng râm, ủi ở nhiệt độ thấp.', 165, 0, 0, 1, 2),
(11, 'Áo Thun Tay Lỡ Unisex ', 135000, 168000, 'pd11.jpg', 'Áo Thun Tay Lỡ Unisex ANGEL FALLING TEE 100% COTTON là một sản phẩm của HADES Brand, một thương hiệu thời trang đường phố nổi tiếng tại Việt Nam. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo Thun Tay Lỡ Unisex ANGEL FALLING TEE 100% COTTON<br>.Chất liệu: Cotton 100%.<br>Màu sắc: Trắng.<br>Hình in: Thiên thần đang rơi xuống.<br>Kiểu dáng: Tay lỡ, cổ tròn.<br>Đặc điểm: Co giãn 4 chiều, mềm mại, thoáng mát.<br>Phù hợp: Cả nam và nữ, mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.<br>Áo có thiết kế đơn giản nhưng độc đáo, với hình in một thiên thần đang rơi xuống trước nền đen.<br> Áo được làm từ chất liệu cotton 100%, co giãn 4 chiều, mềm mại và thoáng mát.', 124, 0, 0, 0, 2),
(12, 'Áo Thun Levents ', 130000, 165000, 'pd12.jpg', 'Áo Thun Levents 2Lip/ Cream là một sản phẩm áo thun thời trang. Áo có màu kem, với hình in hai đôi môi đỏ chót trên ngực trái.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo Thun Levents 2Lip/ Cream.<br>Chất liệu: Cotton 100%.<br>Màu sắc: Kem.<br>Hình in: Hai bông hoa đỏ chót.<br>Kiểu dáng: Tay lỡ, cổ tròn.<br>Đặc điểm: Dày dặn, thoáng mát, mềm mịn, không nhăn hay xù.<br>Phù hợp: Cả nam và nữ, mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br> Áo được làm từ chất liệu lì ven compact, một loại vải dày dặn, thoáng mát, mềm mịn và không bị nhăn hay xù.<br> Áo có kiểu dáng tay ngắn, cổ tròn, phù hợp cho cả nam và nữ.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 104, 0, 0, 0, 2),
(13, 'Áo Thun Nam Cổ Tròn ', 112000, 140000, 'pd13.jpg', 'Áo Thun Nam Cổ Tròn Màu Da Vải Cotton Co Giãn Trơn Basic Tay Ngắn Form Rộng là một loại áo thun nam đơn giản nhưng không kém phần thời trang. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo Thun Nam Cổ Tròn Màu Da Vải Cotton Co Giãn Trơn Basic Tay Ngắn Form Rộng.<br>Chất liệu: Cotton 100%.<br>Màu sắc: Da.<br>Hình in: Trơn.<br>Kiểu dáng:  Cổ tròn, tay ngắn, form rộng (oversize).<br>Đặc điểm: Mềm mại, thoáng mát, co giãn 2 chiều, thấm hút mồ hôi tốt.<br>Phù hợp: Cả nam và nữ, mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br>Áo có màu da, với chất liệu vải cotton 100% mềm mại, thoáng mát, co giãn 2 chiều và thấm hút mồ hôi tốt. Áo có kiểu dáng cổ tròn, tay ngắn, form rộng (oversize), phù hợp cho cả nam và nữ, dễ dàng kết hợp với nhiều loại quần áo khác nhau.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 89, 0, 0, 0, 2),
(14, 'Áo Thun Unisex Tay Lỡ ', 130000, 145000, 'pd14.jpg', 'Áo Thun Unisex Tay Lỡ Form Rộng Nam Nữ là một loại áo thun thời trang phù hợp cho cả nam và nữ, có kiểu dáng tay lỡ, cổ tròn, form rộng (oversize), mang đến một phong cách cá tính, năng động và dễ phối đồ.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo Thun Unisex Tay Lỡ Form Rộng Nam Nữ.<br>Chất liệu: Cotton 100%.<br>Màu sắc: Da.<br>Hình in: Trơn.<br>Kiểu dáng:  Cổ tròn, tay ngắn, form rộng (oversize).<br>Đặc điểm: Mềm mại, thoáng mát, co giãn 2 chiều, thấm hút mồ hôi tốt.<br>Phù hợp:  Áo thun tay lỡ unisex phù hợp cho cả nam và nữ, có thể mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 144, 0, 0, 0, 2),
(15, 'Áo thun nam nữ Unisex', 145000, 165000, 'pd16.jpg', 'Áo thun nam unisex màu da là một loại áo thun dành cho cả nam và nữ, có chất liệu vải nan, một loại vải có khả năng kháng khuẩn, chống nắng và thấm hút mồ hôi tốt.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo thun nam nữ Unisex.<br>Chất liệu: Cotton 100%.<br>Màu sắc: Da.<br>Hình in: Hình thành phố.<br>Kiểu dáng:  Tay ngắn, cổ tròn, form rộng.<br>Đặc điểm: Mềm mại, thoáng mát, co giãn 2 chiều,thấm hút mồ hôi tốt.<br>Phù hợp:  Áo thun tay lỡ unisex phù hợp cho cả nam và nữ, có thể mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br>Áo thun nan unisex màu da là một item thời trang phù hợp cho mọi mùa, mọi dịp, mang đến cho bạn một phong cách trẻ trung, năng động và thoải mái.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 65, 1, 0, 0, 2),
(16, 'Áo Khoác Cadigan Nữ Hồng ', 265000, 286000, 'pd17.jpg', 'Áo Khoác Cadigan Nữ Hoạ Tiết Quả Trám To Màu Hồng Chất Len Dài Tay Style Hàn Quốc là một loại áo khoác len dành cho nữ, có họa tiết quả trám to màu hồng trên nền trắng. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo Khoác Cadigan Nữ Màu Hồng Chất Len Dài Tay Style Hàn Quốc<br>Chất liệu: Len 100% <br>Màu sắc: Hồng<br>Hình in: Quả trám to trên nền trắng<br>Kiểu dáng:  Tay ngắn, cổ tròn, form rộng<br>Đặc điểm: Dày dặn, ấm áp, mềm mại<br>Kích thước: Freesize<br>Áo khoác len này có chất liệu len dày dặn, ấm áp và mềm mại.<br>Áo khoác len này có kiểu dáng cardigan, cài nút trước ngực, tay dài, cổ tròn, form rộng, phù hợp cho cả nam và nữ. Áo khoác len này có phong cách Hàn Quốc, mang đến cho bạn một vẻ ngoài trẻ trung, đáng yêu và thời trang.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm', 194, 1, 0, 0, 3),
(17, 'Áo len dài tay cún nhỏ ', 220000, 234000, 'pd18.jpg', 'Áo len dài tay cún nhỏ dễ thương là một loại áo len dành cho nữ, có hình in một chú cún nhỏ đáng yêu trên ngực. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo len dài tay cún nhỏ dễ thương<br>Chất liệu: Len 100% <br>Màu sắc: Trắng<br>Hình in: Nhiều chú cún nhỏ<br>Kiểu dáng: Tay ngắn, cổ tròn, form rộng<br>Đặc điểm: Dày dặn, ấm áp, mềm mại<br>Kích thước: Freesize<br>Áo len này có chất liệu len mềm mại, ấm áp và co giãn tốt.<br>Áo len này có phong cách dễ thương, nữ tính và thời trang.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 168, 0, 0, 1, 3),
(18, 'Áo Khoác nỉ ', 225000, 240000, 'pd19.jpg', 'Áo Khoác nỉ khoác kéo in chữ EVERYTIME màu xám form rộng unisex nam nữ là một loại áo khoác nỉ dành cho cả nam và nữ, có chất liệu nỉ mềm mại, ấm áp và co giãn tốt. Áo khoác nỉ này có màu xám, với hình in chữ EVERYTIME trên ngực trái.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo Khoác nỉ khoác kéo in chữ EVERYTIME.<br>Chất liệu: Nỉ 100%.<br>Màu sắc: Xám.<br>Hình in: Chữ EVERYTIME.<br>Kiểu dáng: Khoác kéo, tay dài, cổ tròn, form rộng, có mũ trùm đầu.<br>Đặc điểm: Mềm mại, ấm áp, co giãn tốt.<br>Kích thước: Freesize.<br>Áo khoác nỉ này có kiểu dáng khoác kéo, cài khóa trước ngực, tay dài, cổ tròn, form rộng, phù hợp cho cả nam và nữ.<br> Áo khoác nỉ này có phong cách thời trang, năng động và cá tính.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 177, 0, 0, 0, 3),
(19, 'Kẻ sọc Tweed Áo khoác', 275000, 298000, 'pd20.jpg', 'Kẻ sọc Tweed Áo khoác là một loại áo khoác thời trang quần áo cao cấp, chính hãng đến từ Việt Nam. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Kẻ sọc Tweed Áo khoác.<br>Chất liệu: Vải tweed.<br>Màu sắc: Hồng.<br>Hình in: Chữ EVERYTIME<br>Kiểu dáng: Áo khoác dài, cài nút trước ngực, tay dài, cổ tròn, form rộng.<br>Đặc điểm: Dày dặn, ấm áp, chống chịu thời tiết tốt, cổ điển nhưng vẫn sang trọng và thanh lịch.<br>Áo khoác này có chất liệu vải tweed, một loại vải được dệt từ sợi len lông cừu thô, dày dặn, ấm áp và chống chịu thời tiết tốt.<br>Áo khoác này có họa tiết kẻ sọc xước màu hồng và trắng, mang đến một nét cổ điển nhưng vẫn sang trọng và thanh lịch.<br> Áo khoác này có kiểu dáng áo khoác dài, cài nút trước ngực, tay dài, cổ tròn, form rộng, phù hợp cho cả nam và nữ. <br>Áo khoác này có phong cách thời trang Hàn Quốc, mang đến cho bạn một vẻ ngoài trẻ trung, năng động và cá tính<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 212, 1, 0, 0, 3),
(20, 'Áo khoác demin Nhật Bản', 256000, 273000, 'pd21.jpg', 'ÁO KHOÁC DENIM NHẬT BẢN là một loại áo khoác được làm từ vải denim, một loại vải bền, chắc và có khả năng chống chịu thời tiết tốt. ', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: ÁO KHOÁC DENIM NHẬT BẢN.<br>Chất liệu: Vải denim.<br>Màu sắc: Trắng.<br>Hình in: Trơn.<br>Kiểu dáng: cổ điển, cài nút trước ngực, tay dài, cổ tròn, form rộng, phù hợp cho cả nam và nữ<br>Đặc điểm: Dày dặn, ấm áp, chống chịu thời tiết tốt, cổ điển nhưng vẫn sang trọng và thanh lịch.<br>Áo khoác denim Nhật Bản có phong cách thời trang Hàn Quốc, mang đến cho bạn một vẻ ngoài trẻ trung, năng động và cá tính.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 185, 1, 0, 0, 3),
(21, 'Áo Jean Nam Nữ form rộng', 265000, 279000, 'pd22.jpg', 'Áo Jean Nam Nữ form rộng là một loại áo khoác được làm từ vải jean, một loại vải bền, chắc và có khả năng chống chịu thời tiết tốt.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo Jean Nam Nữ form rộng<br>Chất liệu: Vải jean 100% cotton<br>Màu sắc: Xanh<br>Kiểu dáng:Áo khoác dài, cài nút trước ngực, tay dài, cổ tròn, form rộng<br>Đặc điểm: Bền, chắc, chống chịu thời tiết tốt, phong cách Hàn Quốc<br>Áo jean nam nữ form rộng có phong cách thời trang Hàn Quốc, mang đến cho bạn một vẻ ngoài trẻ trung, năng động và cá tính.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 128, 0, 1, 0, 3),
(22, 'Áo hoodie New York', 215000, 235000, 'pd23.jpg', 'Áo hoodie nỉ ngoại in chữ New York là một loại áo khoác nỉ có mũ trùm đầu, cài khóa trước ngực, tay dài, form rộng, phù hợp cho cả nam và nữ.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo hoodie Nỉ ngoại in chữ New York.<br>Chất liệu: Nỉ ngoại 100% cotton.<br>Màu sắc: Xám.<br>Kiểu dáng: Khoác kéo, tay dài, cổ tròn, form rộng, có mũ trùm đầu.<br>Đặc điểm:  Mềm mại, ấm áp, co giãn tốtÁo hoodie nỉ ngoại in chữ New York có chất liệu nỉ ngoại, một loại nỉ được nhập khẩu từ nước ngoài, có độ mềm mại, ấm áp và co giãn tốt.<br> Áo hoodie nỉ ngoại in chữ New York có màu sắc đa dạng.<br> Áo hoodie nỉ ngoại in chữ New York có hình in chữ New York trên ngực, mang đến một nét thời trang, năng động và cá tính.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm', 105, 0, 0, 0, 3),
(23, 'Áo khoác da dáng Bomber', 259000, 278000, 'pd24.jpg', 'Áo khoác da dáng Bomber lót lông cừu siêu ấm dáng Over phong cách Ulzang là một loại áo khoác nam được thiết kế theo phong cách Hàn Quốc.', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm: Áo khoác da dáng Bomber.<br>Chất liệu: Da lộn hoặc da trơn bên ngoài, lông cừu bên trong.<br>Màu sắc: Đen.<br>Kiểu dáng: Bomber, cổ cao, tay dài, khóa kéo, hai túi hông, bo dệt RIB 4X4, dáng over, phong cách ulzzang.<br>Đặc điểm: có khả năng chống nhăn nhàu, bong tróc và cản gió. Lớp lót bên trong là lông cừu mềm mại, giữ nhiệt tốt và sinh nhiệt giúp bảo vệ cơ thể khỏi thời tiết lạnh sâu.<br>Áo khoác có dáng over, rộng rãi và thoải mái, tạo nên phong cách ulzzang thể hiện sự trẻ trung, năng động và cá tính.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 199, 0, 0, 1, 3),
(24, 'Áo thun nam  Routine', 125000, 136000, 'pd15.jpg', 'Áo thun tay nam ngắn in hình Routine là một thương hiệu quần áo cao cấp, chính hãng đến từ Việt Nam', 'THÔNG TIN SẢN PHẨM<br>Tên sản phẩm:  Áo thun tay nam ngắn in hình Routine.<br>Chất liệu: Cotton 100%.<br>Màu sắc: Đen.<br>Hình in: Hình thành phố.<br>Kiểu dáng:  Tay ngắn, cổ tròn, form regular<br>Đặc điểm: Mềm mại, thoáng mát, co giãn 2 chiều, thấm hút mồ hôi tốt.<br>Phù hợp:  Áo thun tay lỡ unisex phù hợp cho cả nam và nữ, có thể mặc đi chơi, đi làm, hay thể hiện cá tính và phong cách riêng.<br>Kích thước: Freesize.<br>Cách bảo quản: Giặt tay hoặc máy ở nhiệt độ thấp, không sử dụng chất tẩy, phơi trong bóng râm.', 123, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `address` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `img`, `address`, `email`, `sdt`, `role`) VALUES
(63, 'admin', 'admin123@@', 'Admin Admin', 'Minions-1657511850-1187-1657511889.jpg', '33/33', 'admin@gmail.com', '0987654321', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dmtt_tt` (`idloai`);

--
-- Chỉ mục cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_cart` (`idpro`),
  ADD KEY `fk_hd_cart` (`idbill`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_bl` (`iduser`),
  ADD KEY `fk_sp_bl` (`idpro`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_hd` (`iduser`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dm_sp` (`iddm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_dmtt_tt` FOREIGN KEY (`idloai`) REFERENCES `blog_category` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_hd_cart` FOREIGN KEY (`idbill`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_cart` FOREIGN KEY (`idpro`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_kh_bl` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_sp_bl` FOREIGN KEY (`idpro`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_kh_hd` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_dm_sp` FOREIGN KEY (`iddm`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
