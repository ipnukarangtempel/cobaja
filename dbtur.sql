-- phpMyAdmin SQL Dump
-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 27, 2021 at 11:06 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.1
-- 
-- Database: `dbtur`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `berita`
-- 

CREATE TABLE `berita` (
  `ID_berita` varchar(5) collate latin1_general_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `sinopsis` text collate latin1_general_ci NOT NULL,
  `judul` text collate latin1_general_ci NOT NULL,
  `isi` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID_berita`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `berita`
-- 

INSERT INTO `berita` VALUES ('B-001', '2007-02-01 13:21:11', 'Demi menggairahkan kembali dunia pariwisata horor yang sempat terpuruk pemerintah Indonesia lewat menteri Kebudayaan dan Pariwisata, meresmikan sebuah slogan baru untuk pariwisata horor, bertajuk "Urban is My Life"', 'Urban is My Life', 'Demi menggairahkan kembali dunia pariwisata horor yang sempat terpuruk Pemerintah Indonesia lewat menteri Kebudayaan dan Pariwisata, meresmikan sebuah slogan baru untuk promosi pariwisata Bali, bertajuk " Urban is My Life". Slogan ini ditujukan untuk memperbaiki citra Horor sebagai destinasi pariwisata yang sempat terancam dengan ulah oknum yang tak bertanggung jawab, \r\nSlogan baru ini juga mengangkat Urban, dengan tidak hanya menjual keindahan alam yang ada, namun lebih menitikberatkan pada kehidupan sehari masyarakat Bali yang dilandasi dengan konsep Tri Hita Karana. ');
INSERT INTO `berita` VALUES ('B-002', '2007-02-07 13:05:34', 'Berdasarkan data kedatangan (arrival) di Bandara Ngurah Rai, kunjungan wisatwan ke Bali awal tahun 2007 mengalami peningkatan yang cukup signifikan dibanding tahun sebelumnya.', 'Peningkatan Kunjungan Wisatawan ke Bali', 'Berdasarkan data kedatangan (arrival) di Bandara Ngurah Rai, kunjungan wisatwan ke Bali awal tahun 2007 mengalami peningkatan yang cukup signifikan dibanding tahun sebelumnya. Hal ini lebih banyak disebabkan mulai tumbuh kepercayaan terhadap bali sebagai destiansi pariwisata.\r\nMusim dingin di Eropa dan beberapa belahan dunia, juga membawa efek peningkatan yang cukup tajam bagi kedatangan wisatawan.');
INSERT INTO `berita` VALUES ('B-000', '2007-02-08 15:13:25', 'Pemerintah Australia mengeluarkan travel warning sehubungan dengan adanya DBD.', 'Travel Warning pemerintah Asutralia', 'Demam Berdarah dangue telah mewabah di Berbagai daerah di Indonesia. Sehubungan hal ini pemerintah autralia mengeluarkan travel warning "Not go to Indonesia on this month"');

-- --------------------------------------------------------

-- 
-- Table structure for table `booking`
-- 

CREATE TABLE `booking` (
  `kode_booking` bigint(5) NOT NULL auto_increment,
  `tanggal` datetime NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(70) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `telepon` varchar(30) collate latin1_general_ci NOT NULL,
  `kode_paket` varchar(5) collate latin1_general_ci NOT NULL,
  `jumlah_orang` bigint(20) NOT NULL,
  `Note` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kode_booking`),
  UNIQUE KEY `kode_booking` (`kode_booking`),
  KEY `kode_booking_2` (`kode_booking`),
  KEY `kode_booking_3` (`kode_booking`),
  FULLTEXT KEY `Note` (`Note`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=93 ;

-- 
-- Dumping data for table `booking`
-- 

INSERT INTO `booking` VALUES (1, '2007-02-07 00:00:00', 'Diana nasution', 'Jakarta ', 'jakmania@yahoo.com', '081338024287', 'T-001', 3, 'pesan tempat ya...');
INSERT INTO `booking` VALUES (92, '2007-02-09 09:38:01', 'Jennifer Ansiton', 'Hollywood', 'jen_an@yahoo.co.us', '67890152', 'T-009', 2, 'if we bring our children, what about the fee? is there any discount? ');
INSERT INTO `booking` VALUES (91, '2007-02-08 15:36:03', 'Franz Beckenbauer', 'Berlin', 'fb@yahoo.co.de', '99999', 'T-008', 5, 'auf wederschahen');

-- --------------------------------------------------------

-- 
-- Table structure for table `kontak`
-- 

CREATE TABLE `kontak` (
  `no` bigint(20) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `komentar` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `kontak`
-- 

INSERT INTO `kontak` VALUES (2, 'Agnes', 'Jakarta', 'Agnes_monica@yhaoo.com', 'Agnes mau datang ke bali...\r\nbisa kasi paket yang lain ga??');

-- --------------------------------------------------------

-- 
-- Table structure for table `paket_tur`
-- 

CREATE TABLE `paket_tur` (
  `Kode_paket` varchar(5) collate latin1_general_ci NOT NULL,
  `Nama` varchar(45) collate latin1_general_ci NOT NULL,
  `Deskripsi` text collate latin1_general_ci NOT NULL,
  `Harga` bigint(50) NOT NULL,
  `gambar` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Kode_paket`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `paket_tur`
-- 

INSERT INTO `paket_tur` VALUES ('T-001', 'Rumah Pengabdi Setan', 'Menggandeng komunitas Ghost Photography Community, Sociotraveler Indonesia mengajak kamu yang penasaran ingin melihat langsung rumah tua di Pengalengan, Bandung yang jadi lokasi syuting Pengabdi Setan.\r\n\r\nDengan biaya paket tur sebesar Rp475.000 per orang, para peserta akan dibawa untuk merasakan langsung sensasi horor rumah Pengabdi Setan. Dan di akhir tur, peserta juga akan mendapatkan tutorial memotret makhluk halus dari kawan-kawan Ghost Photography Community.\r\n\r\nTur Misteri Pengabdi Setan ini sudah dimulai pada Sabtu. Dan berlangsung dari pukul 12.00 (siang) sampai 02.00 dini hari.', 475000, 'pengabdi_setan.png');
INSERT INTO `paket_tur` VALUES ('T-012', 'Rumah Watu Kunti', 'Komunitas Semarangker Tour. Lewat paket tur yang ditawarkan, Semarangker mengajak wisatawan untuk ikut menelusuri salah satu tempat yang dianggap angker di Semarang, yakni Hutan Tinjomoyo.\r\n\r\nDi lokasi tersebut terdapat sebuah batu besar yang disebut oleh masyarakat setempat sebagai Watu Kunti. Lokasi di mana Watu Kunti berada dipercaya warga dihuni oleh banyak kuntilanak maupun makhluk halus lainnya.\r\n\r\nWisatawan tak perlu khawatir, paket wisata ini sekadar memfasilitasi mereka untuk jalan-jalan menelusuri tempat yang dianggap angker. Pihak Semarangker pun menegaskan, mereka tak melakukan mediasi, pemanggilan atau ritual apapun yang berhubungan dengan pemanggilan makhluk halus.\r\n\r\nNah bagi kamu yang tertarik untuk menguji adrenalin, paket wisata angker bisa menjadi pilihan. Cukup membayar biaya pendaftaran sebesar Rp100.000 per orang, kamu sudah bisa mengikuti tur. Wisata akan dimulai pada pukul 22.30-01.00 WIB, dan peserta akan didampingi oleh kru, pawang, paramedis, dan juga petugas keamanan.', 100000, 'watu_kunti.png');
INSERT INTO `paket_tur` VALUES ('T-008', 'Mistis Urbandung', 'Tur Urbandung Legend dilakukan dengan berkeliling ke tempat-tempat historis yang terkesan mistis dengan berjalan kaki. Ada macam-macam tempat yang menjadi tujuan tur ini. Mulai dari Taman Belitung samping SMA 3 dan 5, Gedung Sabau bekas Departemen Peperangan, hingga Gedung Jaarbeur yang konon cukup angker.\r\n\r\nSelain itu, ada Tugu Patung Pastur di Jalan Ambon, St Aloysius yang konon dijaga oleh anjing kasat mata, serta Rumah Ambulance Bahureksa yang menurut kabar sering menyala di malam hari meski tak ada pengemudinya.\r\n\r\nWisata Urbandung Legend biasanya diadakan sebulan sekali tergantung permintaan dari peserta. Dengan satu grup berisikan 7 sampai 10 orang, kamu sudah dapat menikmati wisata ini dengan biaya Rp250 ribu untuk satu grup.\r\n\r\nTur akan dimulai pada pukul 9 atau 10 malam hingga akhirnya selesai. Selain itu Urbandung Legend juga diadakan setahun sekali untuk event sosial.', 250000, 'underbandung.png');
INSERT INTO `paket_tur` VALUES ('T-005', 'Tanah Lot Tour', 'Menikmati sunset di Tanah Lot, dengan hidangan kopi hangat dan pisang goreng', 40000, 'tanah lot.jpg');
INSERT INTO `paket_tur` VALUES ('T-016', 'Papua tour', 'Mengunjungi lembah baliem dan suku yang ada pada daerah tersebut. Berangkat dari Denpasar. Harga sudah termasuk akomodasi, transpor, breakfast dan dinner.', 3000000, 'papua.jpg');
INSERT INTO `paket_tur` VALUES ('T-056', 'Lombok tour', '2 hari di Lombok\r\nSengigi, Rinjani,Banyumulek.\r\nHarga sudah termasuk transport,penginapan di Hotel bintang 3, BF & Dinner.', 2500000, 'lombok.jpg');
INSERT INTO `paket_tur` VALUES ('T-988', 'Pedesaan tour', 'Menikmati suasana desa dan pemandangan yang masih asli ', 150000, 'sawah.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `UserId` int(3) NOT NULL auto_increment,
  `UserName` varchar(50) collate latin1_general_ci default NULL,
  `Password` varchar(50) collate latin1_general_ci default NULL,
  `NamaLengkap` varchar(50) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`UserId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'adhie', 'green1981', 'Ketut Adhie');
INSERT INTO `user` VALUES (2, 'bjoe', 'badboy81', 'Billie Joe Amstrong');
INSERT INTO `user` VALUES (3, 'admin', 'admin', 'Ketut Kiwil ');
INSERT INTO `user` VALUES (4, 'admin', 'admin', 'Admin Tersayang');
