-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2022, 18:48:35
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayiphayvanilani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `id` int(11) NOT NULL,
  `cins` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `nerede_kayboldugu` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yara_izi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tasma` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yas` int(11) NOT NULL,
  `resim_ismi` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lutfen_arayiniz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ilanlar`
--

INSERT INTO `ilanlar` (`id`, `cins`, `nerede_kayboldugu`, `yara_izi`, `tasma`, `yas`, `resim_ismi`, `lutfen_arayiniz`) VALUES
(38, 'kangal', 'Bartın Yalı Parkı', 'yok', 'kahverengi', 1, '53914683.jpg', 534123456),
(39, 'Van Kedisi', 'Balamba Tabiat Parkı', 'yok', 'yok', 2, '95393494.jpg', 512123457),
(40, 'Golden', 'Polis Karakolu Arkası', 'yok', 'kahverengi', 4, '55859643.jpg', 540123567),
(42, 'Scottish Fold', 'Bartın Devlet Hastanesi ', 'yok', 'yeşil', 3, '98141806.jpg', 545236789);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
