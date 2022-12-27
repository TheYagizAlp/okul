-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2022, 09:16:27
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
-- Veritabanı: `sinav`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorusler`
--

CREATE TABLE `gorusler` (
  `id` int(11) NOT NULL,
  `isim` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `gorus` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(32) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gorusler`
--

INSERT INTO `gorusler` (`id`, `isim`, `email`, `gorus`, `tarih`) VALUES
(12, 'Yağız Alp Sürmeneli', 'alplersurmeneli@gmail.com', 'Bu bir görüştür.', '27-12-2022');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gorusler`
--
ALTER TABLE `gorusler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gorusler`
--
ALTER TABLE `gorusler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
