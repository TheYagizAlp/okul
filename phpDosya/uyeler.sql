-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Oca 2023, 07:44:58
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `school`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `userId` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `country` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `pfp` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`userId`, `username`, `email`, `country`, `pfp`, `status`) VALUES
(7, 'Sasuke', 'saske@sharingan.com', 'Konoha', '63be587e7ee2a.jpg', 0),
(8, 'Naruto', 'naruto@rasengan.com', 'Konoha', '63be5895ebb0a.jpg', 0),
(9, 'Gaara', 'gaara@ichibii.com', 'Sunagakure', '63be59b45822a.jpg', 0),
(10, 'Sakura', 'sakura@vasifsiz.com', 'Konoha', '63be59e8a499a.jpg', 0),
(11, 'Kankurō', 'kankuroo@kuklaci.com', 'Sunagakure', '63be5a635fa8c.jpg', 0),
(12, 'Itachi', 'itachi@karga.com', 'Konoha', '63be5aac64721.jpg', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`userId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
