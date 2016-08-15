-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2014 at 12:06 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `kampus` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `foto`, `nama`, `alamat`, `jk`, `kampus`, `prodi`, `tahun`) VALUES
(1, 'jana.jpg', 'Janaria', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Negeri Yogyakarta', 'Pendidikan Teknik Elektronika', 2008),
(2, 'iwan.jpg', 'Irwan', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Pendidikan Biologi', 2008),
(3, 'kang.jpg', 'Kang Disman', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Teknik Informatika', 2008),
(4, 'ija.jpg', 'Rizal', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Muhamadiyah Yogyakarta', 'Perbankan Syariah', 2010),
(5, 'muki.jpg', 'Mukrin', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Muhamadiyah Yogyakarta', 'Ekonomi Manajemen', 2010),
(6, 'rusdin.jpg', 'Rusdin', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Pendidikan Kewarga Negaraan', 2010),
(7, 'ali.jpg', 'Aliaman', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Negeri Yogyakarta', 'Fisika', 2010),
(8, 'watu.jpg', 'La Watu', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Muhamadiyah Yogyakarta', 'Ekonomi Manajemen', 2010),
(9, 'nortin.jpg', 'Nortin', 'Bantul Yogyakarta', 'Wanita', 'Universitas Muhamadiyah Yogyakarta', 'Perbankan Syariah', 2011),
(10, 'neti.jpg', 'Juneti', 'Ng1/199 RT 10 RW 03 Ngampilan Yogyakarta', 'Wanita', 'Stikes Ahmad Yani', 'Kebidanan', 2011),
(11, 'mini.jpg', 'Suharmini', 'Ng1/199 RT 10 RW 03 Ngampilan Yogyakarta', 'Wanita', 'Stikes Ahmad Yani', 'Kebidanan', 2011),
(12, 'juni.jpg', 'Juniarti', 'Ng1/199 RT 10 RW 03 Ngampilan Yogyakarta', 'Wanita', 'Universitas Sarjanawiyata Tamansiswa', 'Pendidikan IPA', 2011),
(13, 'dede.jpg', 'Darman Sado', 'Kotagede Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Akuntansi', 2011),
(14, 'mada.jpg', 'Ramadhan', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Muhamadiyah Yogyakarta', 'Ilmu Hukum', 2012),
(15, 'karno.jpg', 'Dekarno', 'Kotagede Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Ilmu Hukum', 2012),
(16, 'roma.jpg', 'Irwanto', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Teknik Informatika', 2012),
(17, 'lagos.jpg', 'Inirwan', 'Kotagede Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Ilmu Hukum', 2012),
(18, 'toku.jpg', 'Sudiryanto', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Negeri Yogyakarta', 'Pendidikan Kimia', 2007),
(19, 'ani.jpg', 'Astiani Wahyuningsi', 'Bantul Yogyakarta', 'Wanita', 'Universitas Muhamadiyah Yogyakarta', 'Ilmu Keperawatan', 2009),
(20, 'ida.jpg', 'Farida', 'Bantul Yogyakarta', 'Wanita', 'Stikes Ahmad Yani', 'Kebidanan', 2013),
(21, 'asma.jpg', 'Asmayanti', 'Bantul Yogyakarta', 'Wanita', 'Stikes Ahmad Yani', 'Ilmu Keperawatan', 2013),
(22, 'indah.jpg', 'Indah Harfina', 'Bantul Yogyakarta', 'Wanita', 'Universitas Muhamadiyah Yogyakarta', 'Pertanian', 2013),
(23, 'astam.jpg', 'Astam', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Institut Sains & Teknologi Akprind', 'Teknik Mesin', 2014),
(24, 'meli.jpg', 'Meliano', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas PGRi Yogyakarta', 'Manajemen', 2014),
(25, 'arsi.jpg', 'La Ode Asrianto', 'Kotagede Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Ekonomi Pembangunan', 2014),
(26, 'trisna.jpg', 'Trisna', 'Jl. Veteran, Yogyakarta', 'Wanita', 'Universitas Ahmad Dahlan', 'Ilmu Hukum', 2014),
(27, 'himi.jpg', 'Muhaimin La Judi', 'Ng1/199 RT 09 RW 02 Ngampilan Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Ilmu Hukum', 2014),
(28, 'robi.jpg', 'La Dahlan', 'Warungboto Yogyakarta', 'Pria', 'Universitas Ahmad Dahlan', 'Fisika', 2014),
(29, 'yuli.jpg', 'Yulianti Lamentila', 'Bantul Yogyakarta', 'Wanita', 'Universitas Muhamadiyah Yogyakarta', 'Pendidikan Bahasa Inggris', 2014),
(30, 'ega.jpg', 'Ega Selvianti', 'Semarang', 'Wanita', 'Universitas Diponegoro', 'Penataan Kota', 2014),
(31, 'iin.jpg', 'Iin', 'Ng1/199 RT 10 RW 03 Ngampilan Yogyakarta', 'Wanita', 'SMA Muhammadiyah 5', 'IPA', 2014);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
