-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2018 pada 17.13
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eufloria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dewim_sessions`
--

CREATE TABLE IF NOT EXISTS `dewim_sessions` (
  `session_id` varchar(1080) DEFAULT NULL,
  `ip_address` varchar(1215) DEFAULT NULL,
  `user_agent` varchar(3240) DEFAULT NULL,
  `last_activity` int(10) DEFAULT NULL,
  `user_data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dewim_sessions`
--

INSERT INTO `dewim_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('21f9662db120b89654a7224a8176d7e6', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 1545838237, ''),
('ee0736a3cc6eb0f9ff9a14edcd151d32', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 1545838336, ''),
('0c8781d518fdfd01f7a5adf358b51762', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 1545839215, 0x613a353a7b733a393a22757365725f64617461223b733a303a22223b733a383a2269645f7573657273223b733a313a2231223b733a31303a226e616d615f7573657273223b733a353a22446577696d223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a353a2267726f7570223b733a313a2231223b7d),
('79896f2d747ccb4889500edbf6d40e53', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36', 1545840293, 0x613a353a7b733a393a22757365725f64617461223b733a303a22223b733a383a2269645f7573657273223b733a313a2231223b733a31303a226e616d615f7573657273223b733a353a22446577696d223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a353a2267726f7570223b733a313a2231223b7d);

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_blog`
--

CREATE TABLE IF NOT EXISTS `d_blog` (
  `id_blog` int(5) NOT NULL,
  `id_users` int(5) DEFAULT NULL,
  `judul` varchar(3000) DEFAULT NULL,
  `konten` text,
  `gambar` varchar(500) DEFAULT NULL,
  `tgl_post` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_blog`
--

INSERT INTO `d_blog` (`id_blog`, `id_users`, `judul`, `konten`, `gambar`, `tgl_post`) VALUES
(13, 1, 'Tes Form Postingan Blog ', '<p></p><p>Ddhjasdhas dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa <br></p><p>Ddhjasdhas dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa </p><p>Ddhjasdhas dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa dhadhjkasd adhjkadjasd jksdhjkhas djhsdh djhadhas jdkhadhas kdjhadh askdhkasd kjhdadh askdhjksa <br></p><br><p></p>', '012343_974610_inter_fans.jpg', '25/05/2017'),
(14, 1, 'Tes Postingan On Front', '<p>khsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka \r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n&nbsp;</p><p>\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka \r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n&nbsp;\r\n\r\n<br></p><p>\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka \r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n&nbsp;\r\n\r\n<br></p><p>\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka \r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n&nbsp;\r\n\r\n<br></p><p>\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka \r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n\r\n\r\nkhsjkjkha sjkahjksha sjkahjksha jkshajkhs jkahjkhs kjashkjahs kjahsjkahs jkahsjkahsjka\r\n\r\n&nbsp;\r\n\r\n<br></p>', '2016-06-22_12.40c_.jpg', '25/05/2017'),
(15, 1, 'Mengerikan!!!, Kisah Pasangan Sejenis Yang Di Azab ', '<p>djhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg&nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd as \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg\r\n\r\ndghg\r\n\r\n</p><p>\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd as \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg\r\n\r\ndghg\r\n\r\n<br></p><p>\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd as \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg\r\n\r\ndghg\r\n\r\n<br></p><p>\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd as \r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg &nbsp;\r\n\r\ndjhsdhjgsd dhjsdjsd hjadghjasdgsa hjsdghjadgsa dhjadjdg sadgjsd sadgsd asdghdsd asdghg\r\n\r\ndghg\r\n\r\n<br></p>', '18122014(002).jpg', '25/05/2017'),
(16, 1, 'Tes Form Postingan Blog V.01', '<p>ghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihihjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihi <br></p><p></p><p>ghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihihjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihi <br></p><p></p><p>ghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihihjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giughjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giugghjgkhg jkggghhj hghjghjkgjkhg kjhgkjhgjhg hghjgjhgjhg hjgjhghjghj jhgjhgjh rteyrtyye tretrydhgdd duydiuyvuggu ihiohihklhugyf drsesrsrescrtvt rdtyghvtytd yfyyfyufuyf fyufyufyf yufuyfyu guiuigouhih uhijkbyufyufygu gyugu giug dfsfgsfdsgfs fdsfdsfds dsdfsfs gsgfsddfs fdsfdsfdsfgsd fsdfdsfdsdfgsyiuyiuhiohoihi <br></p><p><br><br></p><br><br><br><p></p><br><br><p></p><br><br><br><p></p><br><p><br><br></p><br><br><br><p></p>', 'hasto-kritik-kampus-berperan-tingkatkan-kualitas-partai.jpg', '27/05/2017'),
(17, 1, 'Tes Form Postingan Blog V.02', '<p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd</p><p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd</p><p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd<br></p>', '221513_88489_173633_572351_JKT2_Sidang_Paripurna_28_eca6.jpg', '27/05/2017'),
(18, 1, 'Jokowi Lagi Apa Sih', '<p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd</p><p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd</p><p>fdsfsdfsdf fjsdfhkjshdf sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd sdkfksjdfs dfjsdhfsd fsdjfshdf sdjkfsdjkf sdfjdsjkfhsd fsdjfkjsdhf sdfbjsdkbf sdjkfbsd fjsdbfsd fsd fsdjkfsd fjksd fjsd fdsjfsdjkfjsd fsdjkfjksdf sdjfnsjdf sdjfsdjfdsjnfjksd fsdjfnjsd fjsdnfs dfjsdfjs dfjsdjfnsd fsdjknfksndf sdfjnsdjkfsd fkjsd<br></p>', 'konsolidasi-kubu-ical-di-bali-golkar-merapat-ke-jokowi-jk.jpg', '27/05/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_ivoices`
--

CREATE TABLE IF NOT EXISTS `d_ivoices` (
  `invoice_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `stats` enum('paid','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_kategori`
--

CREATE TABLE IF NOT EXISTS `d_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_kategori`
--

INSERT INTO `d_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Atasan'),
(2, 'Bawahan'),
(3, 'Jaket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_komentar`
--

CREATE TABLE IF NOT EXISTS `d_komentar` (
  `id_komen` int(4) NOT NULL,
  `id_produk` int(4) DEFAULT NULL,
  `komen` text,
  `aktif` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_komentar`
--

INSERT INTO `d_komentar` (`id_komen`, `id_produk`, `komen`, `aktif`) VALUES
(1, 0, '', 'N'),
(2, 0, '', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_order`
--

CREATE TABLE IF NOT EXISTS `d_order` (
  `id_order` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_produk`
--

CREATE TABLE IF NOT EXISTS `d_produk` (
  `id_produk` int(5) NOT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `nama_produk` varchar(3000) DEFAULT NULL,
  `deskripsi` text,
  `harga` varchar(20) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `dilihat` int(5) DEFAULT '1',
  `diskon` int(4) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_produk`
--

INSERT INTO `d_produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `image`, `dilihat`, `diskon`) VALUES
(2, 1, 'Kurang Piknik nya', '<p>Terbuat dari kulit buaya darat jfkahfkjafafhajk fjhafhkasfhhfas fhiasfhas f hfkahfka khkjhasfh khkhfh kh hjkhjkh hkjfhasjkhfjkasf kjhaf askj fkjasf ksahf<br></p>', '60000', 'kurang_piknik.jpg', 111, 10),
(3, 1, 'Tes 2', '<p>dasdasdasd dsadasd dasdasd dasdasd <br></p>', '40000', 'lacur.jpg', 53, 0),
(4, 1, 'Tes 3', '<p>dfsdfsdf fsdfsdfsdf fsdfsdfsdf fsdfsdfsdf fsdfsdfsd fsdfsdfsd fsdfsdf <br></p>', '40000', 'marx_model.jpg', 28, 0),
(5, 2, 'Tes 4', '<p></p><p></p><p>fsdfsdffsdfsd fdsfsdf f<b>sdfsdfsdfsdfv&nbsp;</b>fsd<u>fsdfsdfs fsdfsdf</u> fdsdfsdf&nbsp;<small>fsdfsdfsdfsdfsdf</small></p><p></p><p></p>', '40000', 'php.jpg', 45, 0),
(6, 3, 'Tes 5', '<p>fdsfsdf fdsfsdf<br></p>', '40000', 'pacar.jpg', 27, 0),
(7, 2, 'Tes 6', '<p>fsdjhfjksd fjksdhfsdf kjfhsd fsdkj fdsjkhf jksdhf kjfdshfjs jshdf sdkjhf fkshdjfs d fskjdhfjksdf fsdjkhfjksdf fjsdhfj sd fhjskjdfd kjf fksdhjfjksdf skjdhfjsdf fsjdhfjksd fsjdhfjskdfh sdfkjhsdjkf fjksdhfjk sjdhfjksdh jfshdjkf sjdkhfjsd</p>', '60000', '2016-06-21_12.54_.16_1_.jpg', 67, 0),
(9, 1, 'Balad Kang Rana', '<p>hsajkhsjkahsa kjahjkshjaks jkahsjkahs jkashjkahsa jkashkjahskjahsjkah kajshkjahsjkahjksha kjashjkahsjka akjhskjahsjkah akjhsjkahsja kjahsjkah kjahsjk</p><p><br></p><p>Size: LSM</p><p>Material: COmbad cotton 30 s</p><p>width 50 cm</p><p>height 72</p>', '5000', 'ka_6.jpg', 14, 0),
(10, 1, 'Celana Jingjet jaman now', '<p>kdshkhdkshd jgjkgjkg gsdgsgd kjsgkjdgsjkdg kjsgkjdgskd jsgdjksgkdjs kjsgjdgsjd ksjgdkjsgkjdgs ksjgdjsgdjs kjsgdjsgdkjs sjgdjgsd sjgdjsgd sjgsjdgsjd jsgdjsgd sjdgsjd sjgdjsgd skjdgkjsgd skjgdkjsgd sjgdkjsg dkjsgdjkgs djgsjgdkjsgdsjgjdg ksjgdkjsgkd skjdgks dkjsgdjs sjgdjs gjd gsdgsjgd jsgjgds ksjgdjksgd sjks dsjgdjs jsgjdgs dgj skjgdkjsgdjksg dj sjkdgksgdj</p>', '100000', 'GIna.jpg', 42, 30),
(11, 1, 'sdsdd', '<p>dsdsdd</p>', '30000', '9462.jpg', 21, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_promo`
--

CREATE TABLE IF NOT EXISTS `d_promo` (
  `id_promo` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(500) NOT NULL,
  `status` enum('aktif','nonaktif') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_promo`
--

INSERT INTO `d_promo` (`id_promo`, `id_produk`, `nama_produk`, `status`) VALUES
(1, 2, 'Kurang Piknik Nya', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_setting`
--

CREATE TABLE IF NOT EXISTS `d_setting` (
  `id_setting` int(5) NOT NULL,
  `setting` varchar(400) DEFAULT NULL,
  `value` varchar(400) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_setting`
--

INSERT INTO `d_setting` (`id_setting`, `setting`, `value`) VALUES
(1, 'telp', '+6285797281273'),
(2, 'alamat', 'Wisma Tiara 1, No 8 Kuningan, Jawa Barat'),
(3, 'email', 'official@eufloria.com'),
(4, 'meta desription', 'hijab murah, hijab berkualitas, grosir hijab, produksi hijab, fashion muslimah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_slider`
--

CREATE TABLE IF NOT EXISTS `d_slider` (
  `id_slider` int(4) NOT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `alt` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_slider`
--

INSERT INTO `d_slider` (`id_slider`, `gambar`, `title`, `alt`) VALUES
(4, '20150406-airin-rachmi-diany.jpg', 'Men’s Fashion Test', 'fsdfsdf'),
(5, 'pic-mobile.jpg', 'Tes Anying', 'Tes Anying');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(10) NOT NULL,
  `nama_users` varchar(1350) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `username` varchar(675) DEFAULT NULL,
  `alamat` varchar(3000) DEFAULT NULL,
  `password` varchar(1620) DEFAULT NULL,
  `foto` varchar(2000) DEFAULT NULL,
  `group` int(1) DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `email`, `telp`, `username`, `alamat`, `password`, `foto`, `group`) VALUES
(1, 'Dewim', 'rendypermana153@gmail.com', '089324564', 'admin', 'jl cikadu', '21232f297a57a5a743894a0e4a801fc3', NULL, 1),
(2, 'Bob Marloni', NULL, NULL, 'bob', NULL, '9f9d51bc70ef21ca5c14f307980a29d8', NULL, 1),
(6, 'Gina Fujiariska', 'gina@fuji.com', '1', 'gina', 'jl jongjons', '7df27de84ed79a46d75c7c57ad00f76f', NULL, 2),
(7, 'Rendy Permana', 'rendy@mediawave.co.id', '1', 'rendy', 'jl Tarikolot', '61ac3d4a46f9945857026bced6b13a6f', NULL, 2),
(8, 'Tes Uing', 'akuu@gmail.com', '1', 'testing', 'akuuuu', 'ae2b1fca515949e5d54fb22b8ed95575', NULL, 2),
(9, 'testing 2', 'testing2@yahoo.com', '1', 'testing2', 'dsds', 'a119e534072584a0ea88cdea4664aecd', NULL, 2),
(10, 'Dewi Mulyatin', 'dewipermana666@gmail.com', '1', 'dmshop', 'ir juanda', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_blog`
--
ALTER TABLE `d_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `d_ivoices`
--
ALTER TABLE `d_ivoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `d_kategori`
--
ALTER TABLE `d_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `d_komentar`
--
ALTER TABLE `d_komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `d_order`
--
ALTER TABLE `d_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `d_produk`
--
ALTER TABLE `d_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `d_promo`
--
ALTER TABLE `d_promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `d_setting`
--
ALTER TABLE `d_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `d_slider`
--
ALTER TABLE `d_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_blog`
--
ALTER TABLE `d_blog`
  MODIFY `id_blog` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `d_ivoices`
--
ALTER TABLE `d_ivoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `d_kategori`
--
ALTER TABLE `d_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `d_komentar`
--
ALTER TABLE `d_komentar`
  MODIFY `id_komen` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `d_order`
--
ALTER TABLE `d_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `d_produk`
--
ALTER TABLE `d_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `d_promo`
--
ALTER TABLE `d_promo`
  MODIFY `id_promo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `d_setting`
--
ALTER TABLE `d_setting`
  MODIFY `id_setting` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `d_slider`
--
ALTER TABLE `d_slider`
  MODIFY `id_slider` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `d_blog`
--
ALTER TABLE `d_blog`
  ADD CONSTRAINT `d_blog_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `d_produk`
--
ALTER TABLE `d_produk`
  ADD CONSTRAINT `d_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `d_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `d_promo`
--
ALTER TABLE `d_promo`
  ADD CONSTRAINT `d_promo_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `d_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
