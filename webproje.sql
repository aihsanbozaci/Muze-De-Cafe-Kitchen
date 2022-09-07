-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 May 2022, 01:22:11
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizdaresimyukleme`
--

CREATE TABLE `hakkimizdaresimyukleme` (
  `resim_id` int(11) NOT NULL,
  `resim` text NOT NULL,
  `resimaciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizdaresimyukleme`
--

INSERT INTO `hakkimizdaresimyukleme` (`resim_id`, `resim`, `resimaciklama`) VALUES
(2, '../uploads/as7882.jpg', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimresimyukleme`
--

CREATE TABLE `iletisimresimyukleme` (
  `resim_id` int(11) NOT NULL,
  `resim` text NOT NULL,
  `resimaciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisimresimyukleme`
--

INSERT INTO `iletisimresimyukleme` (`resim_id`, `resim`, `resimaciklama`) VALUES
(4, '../uploads/rt9869.jpg', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `menu_sira` int(255) NOT NULL,
  `menu_durum` int(255) NOT NULL,
  `menu_renk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ad`, `menu_url`, `menu_sira`, `menu_durum`, `menu_renk`) VALUES
(1, 'Anasayfa', '#index', 0, 1, 0),
(2, 'İletişim', '#iletisim', 1, 1, 0),
(3, 'Hakkımızda', '#hakkimizda', 2, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimyukleme`
--

CREATE TABLE `resimyukleme` (
  `resim_id` int(11) NOT NULL,
  `resim` text NOT NULL,
  `resimaciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slideryukleme`
--

CREATE TABLE `slideryukleme` (
  `resim_id` int(11) NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slideryukleme`
--

INSERT INTO `slideryukleme` (`resim_id`, `resim`) VALUES
(22, '../../uploads/slider/rt5292.jpg'),
(33, '../../uploads/slider/fg660.jpg'),
(34, '../../uploads/slider/rt6317.jpg'),
(35, '../../uploads/slider/as3567.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slideryukleme2`
--

CREATE TABLE `slideryukleme2` (
  `resim_id` int(11) NOT NULL,
  `resim2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slideryukleme2`
--

INSERT INTO `slideryukleme2` (`resim_id`, `resim2`) VALUES
(1, '../../uploads/slider/as1261.jpg'),
(2, '../../uploads/slider/rt7731.jpg'),
(3, '../../uploads/slider/fg86.jpg'),
(4, '../../uploads/slider/as5944.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slideryukleme3`
--

CREATE TABLE `slideryukleme3` (
  `resim_id` int(11) NOT NULL,
  `resim3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slideryukleme3`
--

INSERT INTO `slideryukleme3` (`resim_id`, `resim3`) VALUES
(1, '../../uploads/slider/fg8906.jpg'),
(2, '../../uploads/slider/yu957.jpg'),
(3, '../../uploads/slider/rt973.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri`
--

CREATE TABLE `veri` (
  `id` int(11) NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `veri`
--

INSERT INTO `veri` (`id`, `icerik`) VALUES
(1, '<p>&nbsp;</p>\r\n\r\n<h1><strong>İşletmemiz Hakkında&nbsp;</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yıllardan beri &uuml;st&uuml;n ortamı ve personel kalitesiyle m&uuml;şterilerine kesintisiz hizmet sunan M&uuml;ze de Caf&eacute; Kitchen, aynı vizyonunu ilk g&uuml;nk&uuml; gibi s&uuml;rd&uuml;rmektedir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>İşletmemiz verimli vakit ge&ccedil;irme, eğlence, &ouml;zel g&uuml;nler, yemek, i&ccedil;ecek gibi hizmetleri sunmaktadır. İsteğe bağlı olarak &ouml;nceden rezervasyon yapma imkanı mevcuttur.</p>\r\n\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri_hakkimizda`
--

CREATE TABLE `veri_hakkimizda` (
  `id` int(11) NOT NULL,
  `icerik` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `veri_hakkimizda`
--

INSERT INTO `veri_hakkimizda` (`id`, `icerik`) VALUES
(1, '<b>İşletmemiz Hakkında</b> \r\n<br>\r\n<br>\r\n \r\nYıllardan beri üstün ortamı ve personel kalitesiyle müşterilerine kesintisiz hizmet sunan Müze de Café Kitchen, aynı vizyonunu ilk günkü gibi sürdürmektedir.\r\n<br>\r\n<br>\r\n <br>\r\n\r\nİşletmemiz verimli vakit geçirme, eğlence, özel günler, yemek, içecek gibi hizmetleri sunmaktadır. İsteğe bağlı olarak önceden rezervasyon yapma imkanı mevcuttur.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri_iletisim`
--

CREATE TABLE `veri_iletisim` (
  `id` int(11) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `veri_iletisim`
--

INSERT INTO `veri_iletisim` (`id`, `icerik`) VALUES
(1, '<h1><strong>Bizi Ziyaret Edin..</strong></h1>\r\n\r\n<p> </p>\r\n\r\n<p>Akarbaşı Mah. Atatürk Bulvarı</p>\r\n\r\n<p>Müze Sk. No:64 D:Z1</p>\r\n\r\n<p>Odunpazarı/Eskişehir</p>\r\n\r\n<p>Telefon: 0(535) 535 3535 / Mail: info@muzedecafe.com</p>\r\n\r\n<p>                       </p>\r\n\r\n<p><a href=\"https://www.google.com/maps/place/M%C3%BCze+de+Cafe+Kitchen/@39.7660056,30.5133914,15z/data=!4m2!3m1!1s0x0:0xc0ed8d665bdcdf4b?sa=X&ved=2ahUKEwik5ee3nrf2AhUHQvEDHacfCwsQ_BJ6BAgxEAU\">Yol tarifi alın </a></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hakkimizdaresimyukleme`
--
ALTER TABLE `hakkimizdaresimyukleme`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `iletisimresimyukleme`
--
ALTER TABLE `iletisimresimyukleme`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `resimyukleme`
--
ALTER TABLE `resimyukleme`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `slideryukleme`
--
ALTER TABLE `slideryukleme`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `slideryukleme2`
--
ALTER TABLE `slideryukleme2`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `slideryukleme3`
--
ALTER TABLE `slideryukleme3`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `veri`
--
ALTER TABLE `veri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veri_hakkimizda`
--
ALTER TABLE `veri_hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veri_iletisim`
--
ALTER TABLE `veri_iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizdaresimyukleme`
--
ALTER TABLE `hakkimizdaresimyukleme`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimresimyukleme`
--
ALTER TABLE `iletisimresimyukleme`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `resimyukleme`
--
ALTER TABLE `resimyukleme`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `slideryukleme`
--
ALTER TABLE `slideryukleme`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `slideryukleme2`
--
ALTER TABLE `slideryukleme2`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `slideryukleme3`
--
ALTER TABLE `slideryukleme3`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `veri`
--
ALTER TABLE `veri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `veri_hakkimizda`
--
ALTER TABLE `veri_hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `veri_iletisim`
--
ALTER TABLE `veri_iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
