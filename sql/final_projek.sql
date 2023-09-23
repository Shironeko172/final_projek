SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `final_projek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `final_projek`;

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `merek` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `model` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_url` varchar(1000) NOT NULL,
  `gmbr` varchar(1000) NOT NULL,
  `rilis` varchar(255) NOT NULL,
  `progres` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `bandwidth` varchar(255) NOT NULL,
  `cd` varchar(255) NOT NULL,
  `cores` varchar(255) NOT NULL,
  `threads` varchar(255) NOT NULL,
  `clock_speed` varchar(255) NOT NULL,
  `RayTracing` varchar(255) NOT NULL,
  `cores_gpu` varchar(255) NOT NULL,
  `threads_gpu` varchar(255) NOT NULL,
  `clock_speed_gpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ports` varchar(255) DEFAULT NULL,
  `port2` varchar(255) DEFAULT NULL,
  `port3` varchar(255) DEFAULT NULL,
  `port4` varchar(255) DEFAULT NULL,
  `power` varchar(255) NOT NULL,
  `ethernet` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `bluetooth` varchar(255) NOT NULL,
  `diupgrade` varchar(255) NOT NULL,
  `diperluas` varchar(255) NOT NULL,
  `usbmemory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `data` (`id`, `merek`, `model`, `deskripsi`, `gambar_url`, `gmbr`, `rilis`, `progres`, `ukuran`, `berat`, `kapasitas`, `tipe`, `bandwidth`, `cd`, `cores`, `threads`, `clock_speed`, `RayTracing`, `cores_gpu`, `threads_gpu`, `clock_speed_gpu`, `ram`, `ports`, `port2`, `port3`, `port4`, `power`, `ethernet`, `wifi`, `bluetooth`, `diupgrade`, `diperluas`, `usbmemory`) VALUES
(1, 'PLAYSTATION', 'Playstation 1', 'PlayStation[a] (disingkat PS, umumnya dikenal sebagai PS1/PS one atau nama kodenya PSX) adalah konsol permainan video rumah yang dikembangkan dan dipasarkan oleh Sony Computer Entertainment. Ini dirilis di Jepang pada 3 Desember 1994, di Amerika Utara pada 9 September 1995, di Eropa pada 29 September 1995, dan di Australia pada 15 November 1995. Sebagai generasi kelima konsol, PlayStation terutama bersaing dengan Nintendo 64 dan Sega Saturn.', 'media/Playstation/ps1.jpg', 'media/Playstation/ps1-banner.jpg', 'December 1994', 'Maret 2006', '275 mm × 63.5 mm × 190 mm', '1.5 kg', '128 KB', 'Memory Cards', '—', 'Yes', '1 Core', '?', '33.9 MHz', 'No', '?', '?', '53 MHz', '2 Mb RAM', '1x Serial I/O ', '1x Parallel I/O (excluding SCPH 900x)', NULL, NULL, '15 W', '-', '-', '-', '-', 'Memory Cards', '-'),
(2, 'PLAYSTATION', 'Playstation 2', 'PlayStation 2 ( PS2 ) adalah konsol permainan video rumahan yang dikembangkan dan dipasarkan oleh Sony Interactive Entertainment . Ini pertama kali dirilis di Jepang pada tanggal 4 Maret 2000, di Amerika Utara pada tanggal 26 Oktober 2000, di Eropa pada tanggal 24 November 2000, dan di Australia pada tanggal 30 November 2000. Ini adalah penerus PlayStation asli , serta angsuran kedua di merek konsol PlayStation . Sebagai konsol generasi keenam , ia bersaing dengan GameCube milik Nintendo , milik SegaDreamcast , dan Microsoft Xbox . Ini adalah konsol video game terlaris sepanjang masa , telah terjual lebih dari 155 juta unit di seluruh dunia.', 'media/Playstation/ps2.jpeg', 'media/Playstation/ps2-banner.jpg', 'Maret 2000', 'October 2004', '302 mm × 78 mm × 183 mm', '2.2 kg', '8 MB Memory Card, 40 GB HDD', 'Memory Cards, HDD', '22-66 MB/s', 'Yes', '1 two-way superscalar in-order RISC CPU core	', '?', '294.9 MHz', 'No', '?', '?', '147 MHz', '32 MB RAM', '2x USB 1.1', '1x i.LINK (excluding SCPH 5000x)', NULL, NULL, '50 W', 'Dial-up or broadband with Adapter', '-', '-', 'Yes', 'Memory Cards', 'No'),
(3, 'PLAYSTATION', 'Playstation 3', 'PlayStation 3 ( PS3 ) adalah konsol permainan video rumahan yang dikembangkan dan dipasarkan oleh Sony Interactive Entertainment . Penerus PlayStation 2 , ini adalah bagian dari merek konsol PlayStation . Ini pertama kali dirilis pada 11 November 2006 di Jepang , [9] 17 November 2006 di Amerika Utara , dan 23 Maret 2007 di Eropa dan Australia . [10] [ 11] [12] PlayStation 3 bersaing terutama melawan Microsoft Xbox 360 dan NintendoWii sebagai bagian dari konsol video game generasi ketujuh .', 'media/Playstation/ps3.png', 'media/Playstation/ps3-banner.jpg', 'November 2006', 'October 2009', '325 mm × 98 mm × 274 mm', '4.99 kg', '20/60/80/160 GB', 'HDD', '50-100 MB/s', 'Yes', '1 PPE, 8 SPU', '?', '3.2 GHz', 'No', '?', '?', '550 MHz', '256 MB XDRAM', '4x USB 2.0', '2x USB 2.0', NULL, NULL, '380 W', 'Gigabit Ethernet', '802.11b/g Wi-Fi', 'Bluetooth 2.0', 'Yes', 'USB flash drive', 'Yes'),
(4, 'PLAYSTATION', 'Playstation 4', 'PlayStation 4 ( PS4 ) adalah konsol permainan video rumahan yang dikembangkan oleh Sony Interactive Entertainment . Diumumkan sebagai penerus PlayStation 3 pada bulan Februari 2013, diluncurkan pada tanggal 15 November 2013 di Amerika Utara, 29 November 2013 di Eropa, Amerika Selatan dan Australia, dan pada tanggal 22 Februari 2014 di Jepang. Sebuah konsol generasi kedelapan , bersaing dengan Microsoft Xbox One dan Nintendo Wii U dan Switch', 'media/Playstation/ps4.jpg', 'media/Playstation/ps4-banner.jpg', 'November 2013', 'September 2016', '275 mm × 53 mm × 305 mm', '2.5–2.8 kg', '500 GB or 1 TB', 'HDD', '50-100 MB/s', 'Yes', '8 Core', '8 Thread', '1.6 GHz', 'No', '18', '?', '800 MHz', '8 GB GDDR5', '1x AUX', '2x Front USB 3.0', '1x HDMI 2.0a', NULL, '165 W', 'Gigabit Ethernet', '4 (802.11n)', '2.1', 'Yes Up to 8 Tb', 'No', 'Yes (up to 8 TB)'),
(5, 'PLAYSTATION', 'PlayStation 4 Pro', 'PlayStation 4 ( PS4 ) adalah konsol permainan video rumahan yang dikembangkan oleh Sony Interactive Entertainment . Diumumkan sebagai penerus PlayStation 3 pada bulan Februari 2013, diluncurkan pada tanggal 15 November 2013 di Amerika Utara, 29 November 2013 di Eropa, Amerika Selatan dan Australia, dan pada tanggal 22 Februari 2014 di Jepang. Sebuah konsol generasi kedelapan , bersaing dengan Microsoft Xbox One dan Nintendo Wii U dan Switch .', 'media/Playstation/ps4-pro.jpg', 'media/Playstation/ps4-pro.jpg', 'November 2016', 'January 2021', '295 mm × 55 mm × 327 mm', '3.3 kg', '1 TB or 2 TB', 'HDD', '50-100 MB/s', 'Yes', '8', '8', '2.1 GHz', 'No', '36', '?', '911 MHz', '8 Gb GDDR5', '1x AUX', '3x USB 3.1', '1x HDMI 2.0b', NULL, '310 W', 'Gigabit Ethernet', 'Wifi 5', '4.0', 'Up To 8 TB', 'No', 'Up To 8 Tb'),
(6, 'PLAYSTATION', 'Playstation 5', 'PlayStation 5 ( PS5 ) adalah konsol permainan video rumahan yang dikembangkan oleh Sony Interactive Entertainment . Diumumkan sebagai penerus PlayStation 4 pada April 2019, diluncurkan pada 12 November 2020 di Australia, Jepang, Selandia Baru, Amerika Utara, dan Korea Selatan, dan dirilis di seluruh dunia satu minggu kemudian. PS5 merupakan bagian dari konsol video game generasi kesembilan , bersama dengan konsol Microsoft Xbox Series X/S , yang dirilis pada bulan yang sama.', 'media/Playstation/ps5.jpg', 'media/Playstation/ps5-banner.jpg', 'November 2020', 'Dalam Produksi', '390 mm × 104 mm × 260 mm', '3.9–4.5 kg', '825 GB', 'SSD', '5.5 GB/s', 'Yes', '8 Core', '16 Thread', '3.5 GHz', 'Yes', '36', '?', '2.23 GHz', ' 16 Gb GDDR6', '1x Front USB 2.0', '1x Front USB-C', '2x Back USB 3.1', '1x HDMI 2.1', '350 W', 'Gigabit Ethernet', '6 (802.11ax)', '5.1', 'No', 'Up To 4TB NVME 4.0', 'Up to 8TB dan cuma bisa main game PS4 dan PSVR secara langsung. game PS5 cuman bisa di simpan'),
(7, 'XBOX', 'XBOX Series X', 'Xbox Series X dan Series S (nama gabungannya adalah Xbox Series X/S[a]) adalah konsol permainan video mendatang yang dikembangkan oleh Microsoft. Kedua konsol dirilis pada 10 November 2020 sebagai generasi keempat dari konsol Xbox, sebagai penerus dari Xbox One.', 'media/Xbox/xboxx.png', 'media/Xbox/xboxx-banner.jpg', 'November 2020', 'Dalam Produksi', '301 mm × 151 mm × 151 mm', '4,4 kg', '500 Gb - 1Tb', 'NVME SSD', '2.4 GB/s raw, 4.8 GB/s compressed', 'Yes', '8 Core', '?', '3.8 GHz', 'Yes', '52 CUs', '?', '1.825 GHz', '10 GB GDDR6', NULL, NULL, NULL, NULL, '153 W', 'Gigabit Ethernet', '?', '?', '?', 'Kartu ekspansi 1-2 TB', 'Dukungan HDD eksternal USB 3.1'),
(8, 'XBOX', 'XBOX Series S', 'Xbox Series X dan Series S (nama gabungannya adalah Xbox Series X/S[a]) adalah konsol permainan video mendatang yang dikembangkan oleh Microsoft. Kedua konsol dirilis pada 10 November 2020 sebagai generasi keempat dari konsol Xbox, sebagai penerus dari Xbox One.', 'media/Xbox/xboxs.jpg', 'media/Xbox/xboxs-banner.jpg', 'November 2020', 'Dalam Produksi', '275 mm × 151 mm × 65 mm', '1,93 kg', '1 Tb', 'NVME SSD', '2.4 GB/s raw, 4.8 GB/s compressed', 'No', '8 Core', '?', '3.4 GHz', 'Yes', '20 CUs', '?', '1.565 GHz', '10 GB GDDR6', NULL, NULL, NULL, NULL, '74 W', 'Gigabit Ethernet', '?', '?', '?', 'Kartu ekspansi 1-2 TB', 'Dukungan HDD eksternal USB 3.1'),
(9, 'NINTENDO', 'Nintendo Switch', 'Nintendo Switch (ニンテンドースイッチ, Nintendō Suitchi) adalah konsol video game yang dirilis perusahaan Nintendo pada 3 Maret 2017. Konsol ini juga dikenal dengan codename NX pada pengembangannya. Konsol ini dijual seharga ¥32,023.87 pada tanggal perilisannya', 'media/Nintendo/nintendo.png', 'media/Nintendo/nintendo-banner.jpg', 'Maret 2017', '?', '4 inches high, 9.5 inches long, and 0.55 inches deep', '.71 lbs', '64 Gb', 'Micro Sd', '?', 'No', '?', '?', '?', '?', '?', '?', '?', '?', 'USB Type-C', '3.5mm 4-pole stereo ', 'Nintendo Switch game cards', 'Up To 1080p HDMI', ' 6 W TV Mode / 4 W Handled Mode', 'No', 'Wi-Fi IEEE 802.11', '4.1', 'No', 'microSDXC Up To 2 Tb', 'No');

DROP TABLE IF EXISTS `data_model`;
CREATE TABLE `data_model` (
  `id` int(11) NOT NULL,
  `merek` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `data_model` (`id`, `merek`) VALUES
(3, 'NINTENDO'),
(1, 'PLAYSTATION'),
(2, 'XBOX');


ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merek` (`merek`);

ALTER TABLE `data_model`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `merek` (`merek`);


ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `data_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`merek`) REFERENCES `data_model` (`merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
