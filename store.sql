-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_describe` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_status`, `product_image`, `product_describe`) VALUES
(1, '【稻荷。白面者。綠苔】', 1780, '期間限定', 'product-1.png', '稻荷神擁有農耕神的特質、現今日本商業時代， 商人們也傳承對狐狸的崇拜。若作物豐收，商業也必然興盛；因此傳統日本祭拜稻荷神，祈求財運亨通、興旺繁盛。他們不但認為稻米是財富的象徵， 更看好狐狸的聰明智慧、精於謀算，在日本是許多商社的祈福信仰。由於稻荷神豐富的包容性，成為信眾廣泛的福德之神。專門祭祀稻荷神的稻荷神社在日本各地相當普及。相傳伏見是狐狸的主要出沒地，著名的弘法大師空海在伏見尋找道場際 ，深入荒山遇到大霧、迷了路，繞來繞去怎樣也走不出去。正在危急之時，有一隻金色的狐狸突然現身引路，將空海大師救離深山。而後大師感念、便設立稻荷大社來紀念。日式古神道教傳說以金銀狐狸象徵日月，兼為陰陽兩道之象徵。'),
(2, '【四靈。朱雀】', 2780, '限量', 'product-2.png', '《四靈。朱雀 》南方天七宿火鳳，炎帝指道助登仙。朱雀，別稱朱鳥，天之四靈之一。是二十八宿中南方七宿的轉化，其身覆火焰，終日不熄。它是代表南方的神獸，代表色是紅色，在四象為太陽，於五行屬火，代表的季節是夏季、配屬炎帝。一說朱雀是引道的仙鳥《楚辭》中：「飛朱鳥使先驅兮，駕太一之象輿」就是說朱雀在前面引道，可助人成仙。'),
(3, '【冥犬。炎息】', 1780, '新品推出', 'product-2.png', '【冥犬。炎息】靜臥幽冥空深處，白牙冷冽盡忠守。刻耳柏洛斯、或譯為賽伯拉斯；希臘神話中看守冥界入口的惡犬，所以稱之為地獄犬。在希臘神話當中、刻耳柏洛斯住在冥河岸邊，替冥王哈帝斯看守冥界的大門。（逝者在進入冥界時要先乘坐船渡過冥河）刻耳柏洛斯允許每一個逝者的靈魂進入冥界，但不讓任何人出去。赫西俄德（古希臘詩人）在《神譜》中說此犬有50個頭，後來的一些藝術作品則大多表現它有3個頭，因此也有地獄三頭犬之名。另一方面刻耳柏洛斯也被視為《所羅門之鑰》收錄第24位的魔神納貝流士的原型。');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
