-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 04:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikiplant`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_auth`, `tanggal`, `nama`, `email`, `password`, `status`) VALUES
(1, '2021-10-05', 'rahman', 'man@gmail.com', '$2y$10$2eNTAkbdwhKyU6ZqWCJ0RO32PxOKrWgnykDgTxMdgkPT/MXrtsJGq', 'superadmin'),
(2, '2021-10-07', 'raman', 'raman@gmail.com', '$2y$10$Peh6bSrpt6UlZ7W6u6ruTOdq/1Br9Ze8ceBAR4p4qy/px7h8HTKPW', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `status` enum('ON','OFF') NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `banner`, `status`, `gambar`) VALUES
(3, 'Bunga', 'ON', 'slider5.jpg'),
(4, 'Daun Hijau', 'ON', 'slider3.jpg'),
(5, 'Pemandangan', 'OFF', 'slider4.jpg'),
(6, 'Nyoba', 'ON', '106-600x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug_judul` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_auth`, `id_kategori`, `judul`, `slug_judul`, `tanggal_post`, `penulis`, `status`, `gambar`, `content`) VALUES
(11, 1, 6, 'Jenis Tanaman Yang Tumbuh Tinggi', 'jenis-tanaman-yang-tumbuh-tinggi', '2021-09-29 10:13:14', 'Rahman', 'publish', '666-600x400.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu eros condimentum, aliquet est sit amet, mattis elit. Donec vitae eleifend massa. Phasellus laoreet vestibulum leo. Aliquam nec mollis nisl. Maecenas varius aliquam ipsum, a sagittis neque hendrerit eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut viverra massa vitae odio tincidunt semper. Praesent suscipit, leo in faucibus tempor, sem elit tempor sapien, sit amet viverra justo metus sit amet libero. Maecenas quam elit, ultrices sit amet tortor a, rhoncus tincidunt tortor. In bibendum nec urna ac sodales. Curabitur tempor lectus eu leo aliquet, non luctus tortor vehicula. Pellentesque sodales ante ac massa pulvinar dignissim. Pellentesque purus purus, convallis non purus id, venenatis vulputate mauris. Morbi consectetur porta turpis, facilisis egestas dolor tincidunt ac. Donec vitae tortor at nunc lacinia venenatis. Nam in eleifend lectus.</p>\r\n\r\n<p>Sed vehicula vel mauris lobortis pulvinar. Curabitur sollicitudin neque in faucibus ultricies. Vivamus varius lectus id neque sagittis, vel bibendum mauris pharetra. Nam consequat elit quis neque viverra, eget pulvinar arcu tristique. Pellentesque accumsan leo sem, id ullamcorper elit dignissim sed. Phasellus quis tellus ligula. Cras vel enim varius, semper urna eget, aliquam nisi. Maecenas posuere erat sed justo eleifend lobortis. Aenean maximus, felis a venenatis mattis, velit quam malesuada lacus, quis egestas risus nunc at urna. Proin quis ligula sit amet nisi rhoncus dignissim eget vel elit. Etiam eget mollis mi.</p>\r\n\r\n<p>Aenean lorem quam, cursus nec leo et, faucibus hendrerit ligula. Praesent et justo molestie, fermentum nibh ullamcorper, condimentum odio. Sed sit amet orci sagittis, fermentum neque nec, pharetra ex. Nunc in purus ultrices, condimentum est eu, egestas lectus. Integer molestie hendrerit neque, vel porttitor massa pellentesque vitae. Nullam eget libero vel sem accumsan pharetra vel id arcu. Nulla convallis tortor nec erat vehicula, in ullamcorper dolor rhoncus. Aliquam tincidunt mattis eros ac lacinia. Proin ipsum metus, mollis ut augue at, finibus accumsan nisi. Sed luctus in diam sit amet eleifend. Curabitur semper rhoncus ante, a interdum sem tristique sit amet. Nunc porta tempor tempor. Maecenas ac fermentum nibh.</p>\r\n\r\n<p>In sit amet vestibulum felis. Donec nec felis ac nibh posuere feugiat. Aliquam pulvinar nunc lectus, et cursus ligula facilisis sed. Aliquam vel blandit dolor. Donec sodales leo tortor, sit amet tincidunt turpis varius ac. Suspendisse a volutpat dolor, ut aliquam ante. Mauris sit amet eros elit. Vivamus dui elit, hendrerit ut ultricies id, faucibus vitae mauris. Suspendisse rutrum aliquet enim non laoreet. In rutrum est eu mauris fermentum, consectetur bibendum ipsum tempor. Donec ante elit, tempor id faucibus ut, placerat ut mi. Donec rhoncus quam dolor, eget condimentum ipsum ornare placerat.</p>\r\n\r\n<p>Suspendisse feugiat turpis a elit commodo, id posuere ante suscipit. Curabitur suscipit lacus ut elit pulvinar, et congue est luctus. Sed tempor condimentum accumsan. Nullam id congue diam. Vestibulum ullamcorper quam nec scelerisque cursus. Phasellus mollis risus quis nulla pretium molestie. Nulla posuere vehicula augue a ullamcorper. Donec interdum, elit quis tincidunt pharetra, arcu lorem fringilla urna, sit amet auctor mi leo in dui. Nunc egestas, mauris vitae pharetra viverra, diam arcu eleifend libero, a consectetur lorem enim a erat.</p>\r\n'),
(12, 1, 6, 'Pertumbuhan Ekonomi Di desa', 'pertumbuhan-ekonomi-di-desa', '2021-09-29 10:13:55', 'Rahman', 'publish', '292-600x400.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu eros condimentum, aliquet est sit amet, mattis elit. Donec vitae eleifend massa. Phasellus laoreet vestibulum leo. Aliquam nec mollis nisl. Maecenas varius aliquam ipsum, a sagittis neque hendrerit eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut viverra massa vitae odio tincidunt semper. Praesent suscipit, leo in faucibus tempor, sem elit tempor sapien, sit amet viverra justo metus sit amet libero. Maecenas quam elit, ultrices sit amet tortor a, rhoncus tincidunt tortor. In bibendum nec urna ac sodales. Curabitur tempor lectus eu leo aliquet, non luctus tortor vehicula. Pellentesque sodales ante ac massa pulvinar dignissim. Pellentesque purus purus, convallis non purus id, venenatis vulputate mauris. Morbi consectetur porta turpis, facilisis egestas dolor tincidunt ac. Donec vitae tortor at nunc lacinia venenatis. Nam in eleifend lectus.</p>\r\n\r\n<p>Sed vehicula vel mauris lobortis pulvinar. Curabitur sollicitudin neque in faucibus ultricies. Vivamus varius lectus id neque sagittis, vel bibendum mauris pharetra. Nam consequat elit quis neque viverra, eget pulvinar arcu tristique. Pellentesque accumsan leo sem, id ullamcorper elit dignissim sed. Phasellus quis tellus ligula. Cras vel enim varius, semper urna eget, aliquam nisi. Maecenas posuere erat sed justo eleifend lobortis. Aenean maximus, felis a venenatis mattis, velit quam malesuada lacus, quis egestas risus nunc at urna. Proin quis ligula sit amet nisi rhoncus dignissim eget vel elit. Etiam eget mollis mi.</p>\r\n\r\n<p>Aenean lorem quam, cursus nec leo et, faucibus hendrerit ligula. Praesent et justo molestie, fermentum nibh ullamcorper, condimentum odio. Sed sit amet orci sagittis, fermentum neque nec, pharetra ex. Nunc in purus ultrices, condimentum est eu, egestas lectus. Integer molestie hendrerit neque, vel porttitor massa pellentesque vitae. Nullam eget libero vel sem accumsan pharetra vel id arcu. Nulla convallis tortor nec erat vehicula, in ullamcorper dolor rhoncus. Aliquam tincidunt mattis eros ac lacinia. Proin ipsum metus, mollis ut augue at, finibus accumsan nisi. Sed luctus in diam sit amet eleifend. Curabitur semper rhoncus ante, a interdum sem tristique sit amet. Nunc porta tempor tempor. Maecenas ac fermentum nibh.</p>\r\n\r\n<p>In sit amet vestibulum felis. Donec nec felis ac nibh posuere feugiat. Aliquam pulvinar nunc lectus, et cursus ligula facilisis sed. Aliquam vel blandit dolor. Donec sodales leo tortor, sit amet tincidunt turpis varius ac. Suspendisse a volutpat dolor, ut aliquam ante. Mauris sit amet eros elit. Vivamus dui elit, hendrerit ut ultricies id, faucibus vitae mauris. Suspendisse rutrum aliquet enim non laoreet. In rutrum est eu mauris fermentum, consectetur bibendum ipsum tempor. Donec ante elit, tempor id faucibus ut, placerat ut mi. Donec rhoncus quam dolor, eget condimentum ipsum ornare placerat.</p>\r\n\r\n<p>Suspendisse feugiat turpis a elit commodo, id posuere ante suscipit. Curabitur suscipit lacus ut elit pulvinar, et congue est luctus. Sed tempor condimentum accumsan. Nullam id congue diam. Vestibulum ullamcorper quam nec scelerisque cursus. Phasellus mollis risus quis nulla pretium molestie. Nulla posuere vehicula augue a ullamcorper. Donec interdum, elit quis tincidunt pharetra, arcu lorem fringilla urna, sit amet auctor mi leo in dui. Nunc egestas, mauris vitae pharetra viverra, diam arcu eleifend libero, a consectetur lorem enim a erat.</p>\r\n'),
(13, 1, 6, 'Bahan Pangan Yang Ditanam Para Petani Desa', 'bahan-pangan-yang-ditanam-para-petani-desa', '2021-09-29 10:14:47', 'Rahman', 'publish', '776-600x400.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu eros condimentum, aliquet est sit amet, mattis elit. Donec vitae eleifend massa. Phasellus laoreet vestibulum leo. Aliquam nec mollis nisl. Maecenas varius aliquam ipsum, a sagittis neque hendrerit eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut viverra massa vitae odio tincidunt semper. Praesent suscipit, leo in faucibus tempor, sem elit tempor sapien, sit amet viverra justo metus sit amet libero. Maecenas quam elit, ultrices sit amet tortor a, rhoncus tincidunt tortor. In bibendum nec urna ac sodales. Curabitur tempor lectus eu leo aliquet, non luctus tortor vehicula. Pellentesque sodales ante ac massa pulvinar dignissim. Pellentesque purus purus, convallis non purus id, venenatis vulputate mauris. Morbi consectetur porta turpis, facilisis egestas dolor tincidunt ac. Donec vitae tortor at nunc lacinia venenatis. Nam in eleifend lectus.</p>\r\n\r\n<p>Sed vehicula vel mauris lobortis pulvinar. Curabitur sollicitudin neque in faucibus ultricies. Vivamus varius lectus id neque sagittis, vel bibendum mauris pharetra. Nam consequat elit quis neque viverra, eget pulvinar arcu tristique. Pellentesque accumsan leo sem, id ullamcorper elit dignissim sed. Phasellus quis tellus ligula. Cras vel enim varius, semper urna eget, aliquam nisi. Maecenas posuere erat sed justo eleifend lobortis. Aenean maximus, felis a venenatis mattis, velit quam malesuada lacus, quis egestas risus nunc at urna. Proin quis ligula sit amet nisi rhoncus dignissim eget vel elit. Etiam eget mollis mi.</p>\r\n\r\n<p>Aenean lorem quam, cursus nec leo et, faucibus hendrerit ligula. Praesent et justo molestie, fermentum nibh ullamcorper, condimentum odio. Sed sit amet orci sagittis, fermentum neque nec, pharetra ex. Nunc in purus ultrices, condimentum est eu, egestas lectus. Integer molestie hendrerit neque, vel porttitor massa pellentesque vitae. Nullam eget libero vel sem accumsan pharetra vel id arcu. Nulla convallis tortor nec erat vehicula, in ullamcorper dolor rhoncus. Aliquam tincidunt mattis eros ac lacinia. Proin ipsum metus, mollis ut augue at, finibus accumsan nisi. Sed luctus in diam sit amet eleifend. Curabitur semper rhoncus ante, a interdum sem tristique sit amet. Nunc porta tempor tempor. Maecenas ac fermentum nibh.</p>\r\n\r\n<p>In sit amet vestibulum felis. Donec nec felis ac nibh posuere feugiat. Aliquam pulvinar nunc lectus, et cursus ligula facilisis sed. Aliquam vel blandit dolor. Donec sodales leo tortor, sit amet tincidunt turpis varius ac. Suspendisse a volutpat dolor, ut aliquam ante. Mauris sit amet eros elit. Vivamus dui elit, hendrerit ut ultricies id, faucibus vitae mauris. Suspendisse rutrum aliquet enim non laoreet. In rutrum est eu mauris fermentum, consectetur bibendum ipsum tempor. Donec ante elit, tempor id faucibus ut, placerat ut mi. Donec rhoncus quam dolor, eget condimentum ipsum ornare placerat.</p>\r\n\r\n<p>Suspendisse feugiat turpis a elit commodo, id posuere ante suscipit. Curabitur suscipit lacus ut elit pulvinar, et congue est luctus. Sed tempor condimentum accumsan. Nullam id congue diam. Vestibulum ullamcorper quam nec scelerisque cursus. Phasellus mollis risus quis nulla pretium molestie. Nulla posuere vehicula augue a ullamcorper. Donec interdum, elit quis tincidunt pharetra, arcu lorem fringilla urna, sit amet auctor mi leo in dui. Nunc egestas, mauris vitae pharetra viverra, diam arcu eleifend libero, a consectetur lorem enim a erat.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug_judul` varchar(255) NOT NULL,
  `isi_katalog` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_auth`, `tanggal_post`, `penulis`, `judul`, `slug_judul`, `isi_katalog`, `gambar`, `status`) VALUES
(9, 1, '2021-10-25 15:52:56', 'rahman', 'Bambu Gombong ', 'bambu-gombong', '<h3 style=\"text-align: justify;\">1. Klasifikasi</h3>\r\n<p>Klasifikasi Ilmiah :</p>\r\n<ul>\r\n<li><span style=\"font-weight: 400;\">Kingdom</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: Plantae&nbsp;</span></li>\r\n<li><span style=\"font-weight: 400;\">Divisi</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: M</span><span style=\"font-weight: 400;\">agnoliophyta</span></li>\r\n<li><span style=\"font-weight: 400;\">Sub Divisi</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: Angiospermae&nbsp;</span></li>\r\n<li><span style=\"font-weight: 400;\">Kelas</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: </span><span style=\"font-weight: 400;\">Liliopsida</span></li>\r\n<li><span style=\"font-weight: 400;\">Ordo</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: Poales&nbsp;</span></li>\r\n<li><span style=\"font-weight: 400;\">Famili</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: Poaceae&nbsp;</span></li>\r\n<li><span style=\"font-weight: 400;\">Genus</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: </span><a href=\"http://plantamor.com/species/under/gigantochloa\"><span style=\"font-weight: 400;\">Gigantochloa</span></a></li>\r\n<li><span style=\"font-weight: 400;\">Spesies</span><span style=\"font-weight: 400;\"> </span><span style=\"font-weight: 400;\">: </span><em><span style=\"font-weight: 400;\">Gigantochloa Kurz ex</span></em><span style=\"font-weight: 400;\"> Munro</span></li>\r\n</ul>\r\n<p><span style=\"font-weight: 400;\">Nama Binomial :</span></p>\r\n<ul>\r\n<li><span style=\"font-weight: 400;\"><em>Gigantochloa verticillata&nbsp;</em>(Willd.) Munro</span></li>\r\n</ul>\r\n<p><span style=\"font-weight: 400;\">Synonim :</span></p>\r\n<ul>\r\n<li><span style=\"font-weight: 400;\"><em>Gigantochloa pseudoarundinacea&nbsp;</em>(Steud.) Widjaja</span></li>\r\n</ul>\r\n<h3 style=\"text-align: justify;\">2. Persebaran</h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li><span style=\"font-weight: 400;\">Tumbuh tersebar di seluruh Pulau Jawa</span></li>\r\n</ul>\r\n<h3 style=\"text-align: justify;\">3. Persebaran</h3>\r\n<p><span style=\"font-weight: 400;\">Awi Gombong (sunda), bambu dabuk (bengkulu), pring gombong, pring andong, pring surat (jawa)</span></p>\r\n<h3 style=\"text-align: justify;\">4. Deskripsi</h3>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Bambu Andong (</span><em><span style=\"font-weight: 400;\">G. Pseudoarundinaceae</span></em><span style=\"font-weight: 400;\">) termasuk kedalam habitus bambu, dan memiliki rumpun simpodial, tegak dan padat. </span><strong>Rebung </strong><span style=\"font-weight: 400;\">hijau dengan garis-garis kuning yang tetutup bulu coklat sampai hitam. </span><strong>Buluh</strong><span style=\"font-weight: 400;\"> tingginya mencapai 7-30 m lurus. </span><strong>Percabangannya</strong><span style=\"font-weight: 400;\"> terletak jauh di permukaan tanah, satu cabang lateral lebih besar daripada cabang lainnya, dan ujungnya melengkung. Buluh muda tertutup bulu coklat, dan ketika tua gundul node bawah dengan akar udara vertikal dan buluh menjadi hijau dengan garis kuning, ruas panjangnya 40-45 cm (tekadang hingga 60 cm), berdiameter 5-13 cm, dinding tebalnya mencapai 20 mm. </span><strong>Pelepah buluh </strong><span style=\"font-weight: 400;\">tertutup bulu coklat, mudah luruh, kuping pelepah buluh seperti bingkai yang bergelombang: daun pelepah buluh terlekuk ba:ik, menyegitiga dengan pangkal menyempit. </span><strong>&nbsp;Daun </strong><span style=\"font-weight: 400;\">22-25 x 2,5-5,0 cm, gundul: kuping pelepah buluh seperti bingkai, tinggi 1 mm, gundul: ligula rata sampai menggerigi, tinggi 2 mm dengan bulu kejur yang halus.&nbsp; </span><strong>Perbungaan</strong><span style=\"font-weight: 400;\"> muncul pada batang yang tidak berdaun, panjangnya mencapai 75 cm, dengan kelompok pseudospikelet bergerombol terpisah 1-9 cm dan hingga 148 pseudospikelet dalam satu tandan: spikelet ovoid, subakut, panjang 7,5-10 mm, dengan 4 kuntum sempurna dan 1 kuntum steril. Kariopsis tidak diketahui.</span></p>\r\n<h3 style=\"text-align: justify;\"><br />5. Habitat</h3>\r\n<p><em><span style=\"font-weight: 400;\">G. pseudoarundinacea</span></em><span style=\"font-weight: 400;\"> tumbuh di daerah tropis diatas permukaan laut sampai ketinggian sekitar 1200 m, dengan curah hujan tahunan 2350-4200 mm, suhu rata-rata 20-32&deg;C dan kelembaban relatif rata-rata lebih dari 70%. Itu terjadi di tanah berpasir dan tanah aluvial</span></p>\r\n<h3 style=\"text-align: justify;\">6. Manfaat</h3>\r\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Bambu gombong banyak dimanfaatkan sebagai bahan bangunan, pipa air, membuat perlengkapan rumah tangga seperti furnitur, balai-balai, dan perkakas lain termasuk anyam-anyaman dan keranjang serta untuk membuat alat-alat musik tradisional. Dalam industri, buluhnya dipakai sebagai bahan baku sumpit dan tusuk gigi.</span></p>\r\n<h3 style=\"text-align: justify;\"><br />7. Budidaya</h3>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-weight: 400;\">G. pseudoarundinacea</span></em><span style=\"font-weight: 400;\"> hanya dapat diperbanyak secara vegetatif dengan rimpang, stek batang atau cabang.&nbsp;Stek dari rumpun berbunga harus dihindari karena akan mulai berbunga segera setelah tanam.&nbsp;Stek batang telah menunjukkan tingkat kelangsungan hidup hampir 100%.&nbsp;Di Indonesia, waktu terbaik untuk menanam adalah pada musim hujan dari bulan Desember hingga Maret.&nbsp;Jarak tanam yang direkomendasikan adalah 8 m &times; 8 m, dan daerah dengan curah hujan tinggi lebih disukai.</span></p>\r\n<p>&nbsp;</p>\r\n<h3 style=\"text-align: justify;\">8. Photo&nbsp;</h3>\r\n<p style=\"text-align: justify;\"><img src=\"http://localhost/wikiplant/assets/uploads/files/post-image-1635169769229.jpg\" alt=\"\" width=\"375\" height=\"250\" /> &nbsp; &nbsp; &nbsp;</p>\r\n<h3 style=\"text-align: justify;\"><br />9. Referensi</h3>\r\n<ul>\r\n<li><span style=\"font-weight: 400;\">Widjaja, Elizabeth. 2001. </span><em><span style=\"font-weight: 400;\">Identikit Jenis-Jenis Bambu Di Jawa</span></em><span style=\"font-weight: 400;\">. Bogor: Puslitbang Biologi</span></li>\r\n<li><span style=\"font-weight: 400;\"><a href=\"https://uses.plantnetproject.org/en/Gigantochloa_pseudoarundinacea_(PROSEA)\">plantnetproject.org</a> </span><span style=\"font-weight: 400;\">&nbsp;</span></li>\r\n<li><a title=\"Plantamor\" href=\"https://plantamor.com/species/info/gigantochloa/pseudoarundinacea\">plantamor.com</a></li>\r\n<li><a href=\"https://www.gbif.org/species/4107641\">gbif.org</a></li>\r\n</ul>', 'bamboo.jpg', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `namaweb` varchar(25) NOT NULL,
  `deskripsi_web` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(35) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `operasional` text NOT NULL,
  `tiket` text NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `google_maps` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `id_auth`, `namaweb`, `deskripsi_web`, `icon`, `email`, `no_telp`, `wa`, `operasional`, `tiket`, `fb`, `ig`, `twitter`, `yt`, `alamat`, `google_maps`, `tanggal`) VALUES
(1, 1, 'Bamboo WInden Park', '<p xss=removed>Sed vehicula vel mauris lobortis pulvinar. Curabitur sollicitudin neque in faucibus ultricies. Vivamus varius lectus id neque sagittis, vel bibendum mauris pharetra. Nam consequat elit quis neque viverra, eget pulvinar arcu tristique. Pellentesque accumsan leo sem, id ullamcorper elit dignissim sed. Phasellus quis tellus ligula.</p>\r\n<p xss=removed>Cras vel enim varius, semper urna eget, aliquam nisi. Maecenas posuere erat sed justo eleifend lobortis. Aenean maximus, felis a venenatis mattis, velit quam malesuada lacus, quis egestas risus nunc at urna. Proin quis ligula sit amet nisi rhoncus dignissim eget vel elit. Etiam eget mollis mi.</p>', 'logo.png', 'windenpark@gmail.com', '0811111111111', '08222222', '<p>Senin-minggu </p>\r\n<p>Pukul 10.00-17.00</p>', '<p>7500 sudah termasuk biaya</p>\r\n<p>parkir, kebersihan, keamanan dan suvenir yang terbuat dari bambu</p>', 'http://facebook.com/admin.com', 'http://instagram.com/admin.com', 'http://twiiter.com/admin.com', 'http://youtube.com/admin.com', '<p>SUKABUMI, JABAR, INDONESIA Kebonpedes Dimana mana</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31684.23561451245!2d106.94986876838837!3d-6.9466977287872504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684884712c656b:0xfcce302da8bcade7!2sKebonpedes, Sukabumi Regency, Jawa Barat!5e0!3m2!1sid!2sid!4v1633071301823!5m2!1sid!2sid', '2021-10-25 15:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `k_berita`
--

CREATE TABLE `k_berita` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `k_berita`
--

INSERT INTO `k_berita` (`id_kategori`, `kategori`, `slug_kategori`, `urutan`) VALUES
(6, 'Desa', 'desa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_auth`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_auth` (`id_auth`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`),
  ADD KEY `id_auth` (`id_auth`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`),
  ADD KEY `id_auth` (`id_auth`);

--
-- Indexes for table `k_berita`
--
ALTER TABLE `k_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `k_berita`
--
ALTER TABLE `k_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `k_berita` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD CONSTRAINT `konfigurasi_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
