-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 08:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cek`
--

CREATE TABLE `cek` (
  `id` int(11) NOT NULL,
  `kd_pasien` varchar(12) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cek`
--

INSERT INTO `cek` (`id`, `kd_pasien`, `id_gejala`, `status`) VALUES
(1, 'PSN-IZlx1d7Q', 1, '1'),
(2, 'PSN-IZlx1d7Q', 2, '1'),
(3, 'PSN-IZlx1d7Q', 3, '0'),
(4, 'PSN-IZlx1d7Q', 4, '0'),
(5, 'PSN-IZlx1d7Q', 5, '0'),
(6, 'PSN-IZlx1d7Q', 6, '0'),
(7, 'PSN-IZlx1d7Q', 7, '0'),
(8, 'PSN-IZlx1d7Q', 8, '0'),
(9, 'PSN-IZlx1d7Q', 9, '0'),
(10, 'PSN-IZlx1d7Q', 10, '0'),
(11, 'PSN-IZlx1d7Q', 11, '0'),
(12, 'PSN-IZlx1d7Q', 12, '0'),
(13, 'PSN-IZlx1d7Q', 13, '0'),
(14, 'PSN-IZlx1d7Q', 14, '0'),
(15, 'PSN-IZlx1d7Q', 15, '0'),
(16, 'PSN-IZlx1d7Q', 16, '0'),
(17, 'PSN-IZlx1d7Q', 17, '0'),
(18, 'PSN-IZlx1d7Q', 18, '0'),
(19, 'PSN-IZlx1d7Q', 19, '0'),
(20, 'PSN-IZlx1d7Q', 20, '0'),
(21, 'PSN-IZlx1d7Q', 21, '0'),
(22, 'PSN-IZlx1d7Q', 22, '0'),
(23, 'PSN-IZlx1d7Q', 23, '0'),
(24, 'PSN-IZlx1d7Q', 24, '0'),
(25, 'PSN-IZlx1d7Q', 25, '0'),
(26, 'PSN-IZlx1d7Q', 26, '0'),
(27, 'PSN-IZlx1d7Q', 27, '0'),
(28, 'PSN-IZlx1d7Q', 28, '0'),
(29, 'PSN-IZlx1d7Q', 29, '0'),
(30, 'PSN-IZlx1d7Q', 30, '0'),
(31, 'PSN-IZlx1d7Q', 31, '0'),
(32, 'PSN-IZlx1d7Q', 32, '0'),
(33, 'PSN-IZlx1d7Q', 33, '0'),
(34, 'PSN-IZlx1d7Q', 34, '0'),
(35, 'PSN-IZlx1d7Q', 35, '0'),
(36, 'PSN-IZlx1d7Q', 36, '0'),
(37, 'PSN-IZlx1d7Q', 37, '0'),
(38, 'PSN-IZlx1d7Q', 38, '0'),
(39, 'PSN-IZlx1d7Q', 39, '0'),
(40, 'PSN-IZlx1d7Q', 40, '0'),
(41, 'PSN-IZlx1d7Q', 41, '0'),
(42, 'PSN-na6yCz8i', 1, '1'),
(43, 'PSN-na6yCz8i', 2, '1'),
(44, 'PSN-na6yCz8i', 3, '0'),
(45, 'PSN-na6yCz8i', 4, '0'),
(46, 'PSN-na6yCz8i', 5, '0'),
(47, 'PSN-na6yCz8i', 6, '0'),
(48, 'PSN-na6yCz8i', 7, '0'),
(49, 'PSN-na6yCz8i', 8, '0'),
(50, 'PSN-na6yCz8i', 9, '0'),
(51, 'PSN-na6yCz8i', 10, '0'),
(52, 'PSN-na6yCz8i', 11, '0'),
(53, 'PSN-na6yCz8i', 12, '0'),
(54, 'PSN-na6yCz8i', 13, '0'),
(55, 'PSN-na6yCz8i', 14, '0'),
(56, 'PSN-na6yCz8i', 15, '0'),
(57, 'PSN-na6yCz8i', 16, '0'),
(58, 'PSN-na6yCz8i', 17, '0'),
(59, 'PSN-na6yCz8i', 18, '0'),
(60, 'PSN-na6yCz8i', 19, '0'),
(61, 'PSN-na6yCz8i', 20, '0'),
(62, 'PSN-na6yCz8i', 21, '0'),
(63, 'PSN-na6yCz8i', 22, '0'),
(64, 'PSN-na6yCz8i', 23, '0'),
(65, 'PSN-na6yCz8i', 24, '0'),
(66, 'PSN-na6yCz8i', 25, '0'),
(67, 'PSN-na6yCz8i', 26, '0'),
(68, 'PSN-na6yCz8i', 27, '0'),
(69, 'PSN-na6yCz8i', 28, '0'),
(70, 'PSN-na6yCz8i', 29, '0'),
(71, 'PSN-na6yCz8i', 30, '0'),
(72, 'PSN-na6yCz8i', 31, '0'),
(73, 'PSN-na6yCz8i', 32, '0'),
(74, 'PSN-na6yCz8i', 33, '0'),
(75, 'PSN-na6yCz8i', 34, '0'),
(76, 'PSN-na6yCz8i', 35, '0'),
(77, 'PSN-na6yCz8i', 36, '0'),
(78, 'PSN-na6yCz8i', 37, '0'),
(79, 'PSN-na6yCz8i', 38, '0'),
(80, 'PSN-na6yCz8i', 39, '0'),
(81, 'PSN-na6yCz8i', 40, '0'),
(82, 'PSN-na6yCz8i', 41, '0'),
(83, 'PSN-IZlx1d7Q', 1, '1'),
(84, 'PSN-IZlx1d7Q', 2, '1'),
(85, 'PSN-IZlx1d7Q', 3, '0'),
(86, 'PSN-IZlx1d7Q', 4, '0'),
(87, 'PSN-IZlx1d7Q', 5, '0'),
(88, 'PSN-IZlx1d7Q', 6, '0'),
(89, 'PSN-IZlx1d7Q', 7, '0'),
(90, 'PSN-IZlx1d7Q', 8, '0'),
(91, 'PSN-IZlx1d7Q', 9, '0'),
(92, 'PSN-IZlx1d7Q', 10, '0'),
(93, 'PSN-IZlx1d7Q', 11, '0'),
(94, 'PSN-IZlx1d7Q', 12, '0'),
(95, 'PSN-IZlx1d7Q', 13, '0'),
(96, 'PSN-IZlx1d7Q', 14, '0'),
(97, 'PSN-IZlx1d7Q', 15, '0'),
(98, 'PSN-IZlx1d7Q', 16, '0'),
(99, 'PSN-IZlx1d7Q', 17, '0'),
(100, 'PSN-IZlx1d7Q', 18, '0'),
(101, 'PSN-IZlx1d7Q', 19, '0'),
(102, 'PSN-IZlx1d7Q', 20, '0'),
(103, 'PSN-IZlx1d7Q', 21, '0'),
(104, 'PSN-IZlx1d7Q', 22, '0'),
(105, 'PSN-IZlx1d7Q', 23, '0'),
(106, 'PSN-IZlx1d7Q', 24, '0'),
(107, 'PSN-IZlx1d7Q', 25, '0'),
(108, 'PSN-IZlx1d7Q', 26, '0'),
(109, 'PSN-IZlx1d7Q', 27, '0'),
(110, 'PSN-IZlx1d7Q', 28, '0'),
(111, 'PSN-IZlx1d7Q', 29, '0'),
(112, 'PSN-IZlx1d7Q', 30, '0'),
(113, 'PSN-IZlx1d7Q', 31, '0'),
(114, 'PSN-IZlx1d7Q', 32, '0'),
(115, 'PSN-IZlx1d7Q', 33, '0'),
(116, 'PSN-IZlx1d7Q', 34, '0'),
(117, 'PSN-IZlx1d7Q', 35, '0'),
(118, 'PSN-IZlx1d7Q', 36, '0'),
(119, 'PSN-IZlx1d7Q', 37, '0'),
(120, 'PSN-IZlx1d7Q', 38, '0'),
(121, 'PSN-IZlx1d7Q', 39, '0'),
(122, 'PSN-IZlx1d7Q', 40, '0'),
(123, 'PSN-IZlx1d7Q', 41, '0'),
(124, 'PSN-IZlx1d7Q', 1, '1'),
(125, 'PSN-IZlx1d7Q', 2, '1'),
(126, 'PSN-IZlx1d7Q', 3, '0'),
(127, 'PSN-IZlx1d7Q', 4, '0'),
(128, 'PSN-IZlx1d7Q', 5, '0'),
(129, 'PSN-IZlx1d7Q', 6, '0'),
(130, 'PSN-IZlx1d7Q', 7, '0'),
(131, 'PSN-IZlx1d7Q', 8, '0'),
(132, 'PSN-IZlx1d7Q', 9, '0'),
(133, 'PSN-IZlx1d7Q', 10, '0'),
(134, 'PSN-IZlx1d7Q', 11, '0'),
(135, 'PSN-IZlx1d7Q', 12, '0'),
(136, 'PSN-IZlx1d7Q', 13, '0'),
(137, 'PSN-IZlx1d7Q', 14, '0'),
(138, 'PSN-IZlx1d7Q', 15, '0'),
(139, 'PSN-IZlx1d7Q', 16, '0'),
(140, 'PSN-IZlx1d7Q', 17, '0'),
(141, 'PSN-IZlx1d7Q', 18, '0'),
(142, 'PSN-IZlx1d7Q', 19, '0'),
(143, 'PSN-IZlx1d7Q', 20, '0'),
(144, 'PSN-IZlx1d7Q', 21, '0'),
(145, 'PSN-IZlx1d7Q', 22, '0'),
(146, 'PSN-IZlx1d7Q', 23, '0'),
(147, 'PSN-IZlx1d7Q', 24, '0'),
(148, 'PSN-IZlx1d7Q', 25, '0'),
(149, 'PSN-IZlx1d7Q', 26, '0'),
(150, 'PSN-IZlx1d7Q', 27, '0'),
(151, 'PSN-IZlx1d7Q', 28, '0'),
(152, 'PSN-IZlx1d7Q', 29, '0'),
(153, 'PSN-IZlx1d7Q', 30, '0'),
(154, 'PSN-IZlx1d7Q', 31, '0'),
(155, 'PSN-IZlx1d7Q', 32, '0'),
(156, 'PSN-IZlx1d7Q', 33, '0'),
(157, 'PSN-IZlx1d7Q', 34, '0'),
(158, 'PSN-IZlx1d7Q', 35, '0'),
(159, 'PSN-IZlx1d7Q', 36, '0'),
(160, 'PSN-IZlx1d7Q', 37, '0'),
(161, 'PSN-IZlx1d7Q', 38, '0'),
(162, 'PSN-IZlx1d7Q', 39, '0'),
(163, 'PSN-IZlx1d7Q', 40, '0'),
(164, 'PSN-IZlx1d7Q', 41, '0');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(255) NOT NULL,
  `id_pemeriksaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `id_gejala`, `id_pemeriksaan`) VALUES
(1, '1,2', 'RDKt010'),
(2, '2,3,7,1', 'LBIm002');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_pegawai`, `id_poli`) VALUES
(2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
(1, 'nyeri perut'),
(2, 'mual, dan muntah'),
(3, 'cedera kepala'),
(4, 'batuk berdahak'),
(5, 'demam'),
(6, 'menggigil'),
(7, 'kehamilan'),
(8, 'kesulitan bernapas'),
(9, 'cedera tangan /kaki'),
(10, 'cedera tulang belakang'),
(11, 'keluarnya cairan berdarah dari puting'),
(12, 'kehamilan'),
(13, 'kulit atau mata menguning'),
(14, 'mual'),
(15, 'sakit perut'),
(16, 'kelelahan'),
(17, 'perut buncit'),
(18, 'kehilangan selera makan'),
(19, 'ketidakseimbangan air-elektrolit'),
(20, 'tekanan darah tinggi'),
(21, 'kencing manis'),
(22, 'selalu dehidrasi'),
(23, 'kulit pucat'),
(24, 'sesak napas'),
(25, 'pusing'),
(26, 'detak jantung cepat'),
(27, 'keringat berlebih'),
(28, 'sensitif terhadap panas atau merasa dingin'),
(29, 'alergi'),
(30, 'alergi pada ternggorokan'),
(31, 'benjolan yang tidak normal'),
(32, 'kesulitan buang air kecil'),
(33, 'nafsu makan menurun'),
(34, 'sakit perut bagian kanan bawah'),
(35, 'ketidaknyamanan saat buang air besar atau ketika duduk'),
(36, 'sakit perut bagian kanan atas atau punggung'),
(37, 'sakit tenggorokan'),
(38, 'sulit menelan'),
(39, 'cedera hidung'),
(40, 'Gangguan pendengaran'),
(41, 'telinga terasa sakit atau nyeri');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `kd_pasien` varchar(25) NOT NULL,
  `id_periksa` varchar(255) NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') NOT NULL DEFAULT 'Belum Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `kd_pasien`, `id_periksa`, `keterangan`) VALUES
(1, 'PSN-na6yCz8i', 'RDKt010', 'Belum Lunas'),
(2, 'PSN-na6yCz8i', 'LBIm002', 'Belum Lunas'),
(3, 'PSN-IZlx1d7Q', 'RDKt010', 'Belum Lunas'),
(4, 'PSN-IZlx1d7Q', 'LBIm002', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_kel` int(11) NOT NULL,
  `kd_pasien` varchar(12) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_dokter`
-- (See below for the actual view)
--
CREATE TABLE `list_dokter` (
`ID` int(11)
,`Nama` varchar(255)
,`Jk` enum('laki-laki','perempuan')
,`No_hp` varchar(15)
,`Poli` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_user`
-- (See below for the actual view)
--
CREATE TABLE `list_user` (
`ID` int(11)
,`Nama` varchar(255)
,`Username` varchar(255)
,`Password` varchar(255)
,`Jk` enum('laki-laki','perempuan')
,`Alamat` varchar(100)
,`tgl` date
,`no_hp` varchar(15)
,`Level` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(255) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stock`) VALUES
('BTL001', 'ALBOTHYL 5ML', 'BOTOL', 20000, 12),
('BTL002', 'ALBOTHYL 10 ML', 'BOTOL', 31000, 50),
('TBL001', 'AMBROXOL TAB', 'TABLET', 1000, 32),
('TBL002', 'AMLODIPIN TAB 5 MG', 'TABLET', 1500, 55);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` varchar(12) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('islam','kristen','hindu','buddha') NOT NULL,
  `umur` int(11) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `bpjs` enum('1','0') NOT NULL,
  `ktp` varchar(150) NOT NULL DEFAULT '0',
  `telepon` varchar(15) NOT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_regis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama_lengkap`, `jk`, `tgl_lahir`, `agama`, `umur`, `nama_ortu`, `gol_darah`, `bpjs`, `ktp`, `telepon`, `id_poli`, `alamat`, `tgl_regis`) VALUES
('PSN-F4hQm6p8', 'wsdfwe', 'pria', '2019-01-02', 'islam', 12, '', 'A', '1', '234324', '12432432', 1, 'sgrg', '2019-01-21 18:34:31'),
('PSN-IZlx1d7Q', 'Aslan', 'pria', '1997-07-16', 'islam', 21, 'BPK', 'AB', '1', '0981029321923', '085234898323', 2, 'ksjdhaskjdhaksjdhakjsdh', '0000-00-00 00:00:00'),
('PSN-na6yCz8i', 'imran Nur', 'pria', '2013-01-17', 'islam', 12, 'barulla', 'B', '0', '98203982', '093387', 4, 'batua', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_poli`
--

CREATE TABLE `pasien_poli` (
  `id` int(11) NOT NULL,
  `kd_pasien` varchar(12) NOT NULL,
  `id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jk`, `alamat`, `tgl_lahir`, `no_hp`) VALUES
(1, 'nasrul', 'laki-laki', 'jalan batua Raya X', '1997-10-16', '085396340954'),
(3, 'imran', 'laki-laki', 'dayak', '1997-01-09', '09583927342'),
(4, 'adhi', 'laki-laki', 'borong raya', '1997-05-08', '08577283642'),
(5, 'rauf', 'laki-laki', 'sunga saddang', '1997-10-09', '095644523'),
(6, 'faisal', 'laki-laki', 'batua', '1996-05-09', '08573424'),
(7, 'rizqa', 'perempuan', 'batua Raya', '2018-12-23', '084723884'),
(8, 'queen', 'perempuan', 'maros', '1997-01-21', '08573682746');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_periksa` varchar(255) NOT NULL,
  `nama_pemeriksaan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_poli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_periksa`, `nama_pemeriksaan`, `harga`, `id_poli`) VALUES
('LBHm001', 'Darah Lengkap', 200000, 2),
('LBIm001', 'Hepatitis', 190000, 2),
('LBIm002', 'Thyroid', 260000, 3),
('LBIm003', 'Imunoglobulin', 210000, 2),
('LBIm004', 'Hormon', 170000, 6),
('LBIm005', 'TORCH', 250000, 3),
('LBIm006', 'Tumor Marker ', 160000, 2),
('LBIm013', 'elektrolit', 150000, 2),
('LBKk001', 'Fungsi Hati ', 200000, 2),
('LBKk002', 'Lipid Profile ', 240000, 2),
('LBKk003', 'Fungsi Ginjal ', 200000, 2),
('LBKk004', 'Metabolisme Karbohidrat ', 290000, 2),
('OPDg002', 'Appendictomy Perforasi\r\n', 240000, 5),
('OPDg003', 'Colostomy\r\n', 160000, NULL),
('OPDg004', 'Illeustomy\r\n', 290000, NULL),
('OPDg005', 'Laparatomy\r\n', 260000, 5),
('OPDg006', 'Reseksi Usus\r\n', 190000, NULL),
('OPDg007', 'Herniocolectomy\r\n', 220000, NULL),
('OPDg008', 'Reseksi Hepar\r\n', 130000, NULL),
('OPDg009', 'Pankreatectomy lim', 240000, NULL),
('OPDg010', 'Cholesistectomy\r\n', 150000, NULL),
('OPMl001', 'Odontectomy\r\n', 180000, NULL),
('OPMl002', 'Orif\r\n', 210000, NULL),
('OPMl003', 'Insisi\r\n', 160000, NULL),
('OPMl004', 'Exsisi\r\n', 250000, NULL),
('OPMl005', 'Exterpatie\r\n', 160000, NULL),
('OPMt001', 'Pterigium\r\n', 210000, NULL),
('OPMt002', 'Granuloma\r\n', 230000, NULL),
('OPMt003', 'Tarsotomy\r\n', 190000, NULL),
('OPMt004', 'Corpus Kecil\r\n', 150000, NULL),
('OPMt005', 'Parasentesis\r\n', 250000, NULL),
('OPMt006', 'Scraping\r\n', 230000, NULL),
('OPMt007', 'Konjungtiva Flap\r\n', 180000, NULL),
('OPMt008', 'Jahit Palpebra\r\n', 220000, NULL),
('OPMt009', 'Katarak dengan IOL\r\n', 240000, NULL),
('OPMt010', 'Glaukoma\r\n', 150000, NULL),
('OPMt011', 'Trabeculectomy\r\n', 120000, NULL),
('OPMt012', 'Enukleasi Bulbi\r\n', 200000, NULL),
('OPMt013', 'Eviserasi Bulbi\r\n', 150000, NULL),
('OPMt014', 'Iris EXcisi dan Jahit Kornea\r\n', 250000, NULL),
('OPMt015', 'Ablasio Retina\r\n', 130000, NULL),
('OPMt016', 'Rekonstruksi\r\n', 260000, NULL),
('OPMt017', 'Vitrectomy\r\n', 120000, NULL),
('OPOg001', 'Sectio Caesaria', 150000, NULL),
('OPOg002', 'Sterilisasi', 230000, NULL),
('OPOg003', 'Kehamilan Ektopik Terganggu', 210000, NULL),
('OPOg004', 'Exterpatie Kista Vagina', 170000, NULL),
('OPOg005', 'Histerectomy', 180000, NULL),
('OPOg006', 'Histerectomy', 230000, NULL),
('OPOg007', 'Miomectomy', 190000, NULL),
('OPOk001', 'Excisi Tumor Jinak ( Lipoma Kecil )', 180000, NULL),
('OPOk002', 'Tumor Jinak Ganglion', 210000, NULL),
('OPOk003', 'Struma Lobectomy', 250000, NULL),
('OPOk004', 'Mastectomy', 250000, NULL),
('OPOk005', 'Multiple FAM', 160000, NULL),
('OPOk006', 'Radikal Mastectomy', 250000, NULL),
('OPOk007', 'Open Biopsi Mammae', 170000, NULL),
('OPOk008', 'Mammae Acesoir', 250000, NULL),
('OPOt001', 'ORIF', 190000, NULL),
('OPOt002', 'Reposisi Tertutup', 230000, NULL),
('OPOt003', 'Amputasi ekstremitas', 200000, NULL),
('OPOt004', 'Debridemen Osteomilitis', 160000, NULL),
('OPOt005', 'Ambil Implant/ Removel', 250000, NULL),
('OPOt006', 'Tendo Plastic Koreksi', 190000, NULL),
('OPOt007', 'THR', 220000, NULL),
('OPOt008', 'TKR', 170000, NULL),
('OPPl001', 'Labioplasty', 200000, NULL),
('OPPl002', 'Palatoplasty', 200000, NULL),
('OPPl003', 'Rekonstruksi Mammae', 230000, NULL),
('OPPl004', 'Polydaktili', 150000, NULL),
('OPPl005', 'STSG', 160000, NULL),
('OPPl006', 'Labioplasty Duplex', 240000, NULL),
('OPsas', 'we', 123123, NULL),
('OPSf001', 'Craniotomy ( perdarahan dan tumor )', 220000, NULL),
('OPSf002', 'Cranioplasty', 150000, NULL),
('OPSf003', 'Trepanasi', 220000, NULL),
('OPSf004', 'Koreksi Impresi Fraktur', 180000, NULL),
('OPSf005', 'Laminectomy', 260000, NULL),
('OPSf006', 'Overhecting', 190000, NULL),
('OPTh001', 'Tonsilectomy', 190000, NULL),
('OPTh002', 'Traceostomy', 150000, NULL),
('OPTh003', 'Reposisi Hidung Tertutup', 230000, NULL),
('OPTh004', 'CWL', 210000, NULL),
('OPTh005', 'Reposisi Hidung Terbuka', 260000, NULL),
('OPTh006', 'FESS', 240000, NULL),
('OPTh007', 'Thympanoplasty', 190000, NULL),
('OPTh008', 'Mastoidectomy', 250000, NULL),
('OPTh009', 'Rekonstruksi Hidung Terbuka', 220000, NULL),
('OPUm001', 'Appendictomy', 210000, NULL),
('OPUm002', 'Hernia', 170000, NULL),
('OPUm003', 'Haemorroidectomy', 230000, NULL),
('OPUm004', 'Colesistectomy', 260000, NULL),
('OPUm005', 'Prostatectomy', 160000, NULL),
('OPUm006', 'Circumsisi', 220000, NULL),
('OPUm007', 'Debridemen', 260000, NULL),
('OPUm008', 'Necrotomy', 220000, NULL),
('OPUm009', 'Amputasi jari', 180000, NULL),
('OPUm010', 'Reposisi Terbuka', 200000, NULL),
('OPUm011', 'Laparatomi', 170000, NULL),
('OPUr001', 'Varicolectomy', 190000, NULL),
('OPUr002', 'Hidrocolectomy', 210000, NULL),
('OPUr003', 'Cystoscopy', 250000, NULL),
('OPUr004', 'Biopsi Prostat', 210000, NULL),
('OPUr005', 'Uretrolitotomy', 260000, NULL),
('OPUr006', 'Pasang DJ Stain', 220000, NULL),
('OPUr007', 'Pyelolithotomy', 180000, NULL),
('OPUr008', 'TUR', 130000, NULL),
('OPUr009', 'Nephrectomy', 150000, NULL),
('OPUr010', 'Uretroplasty', 220000, NULL),
('OPUr011', 'Litotripsi', 120000, NULL),
('RDCg002', 'CT SCAN', 200000, NULL),
('RDCg003', 'MRI', 250000, NULL),
('RDKt001', 'Kelenjar Lakrimalis', 170000, NULL),
('RDKt002', 'Kelenjar Parotis', 230000, NULL),
('RDKt003', 'Barium Telan', 260000, NULL),
('RDKt004', 'Upper GI', 210000, NULL),
('RDKt005', 'Appendicogram', 180000, NULL),
('RDKt006', 'Colon In Loop', 230000, NULL),
('RDKt007', 'IVP (Intravena Pyelografi)', 180000, NULL),
('RDKt008', 'Retro Pyelografi', 270000, NULL),
('RDKt009', 'Pielocystografi', 240000, NULL),
('RDKt010', 'Cholangiografi', 270000, 2),
('RDNKt001', 'Kepala', 190000, NULL),
('RDNKt002', 'Thorax', 240000, NULL),
('RDNKt003', 'Abdomen', 160000, NULL),
('RDNKt004', 'Extremitas', 250000, NULL),
('RDNKt005', 'Vertebrae', 170000, NULL),
('RDNKt006', 'Mamografi', 280000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Poli Umum'),
(2, 'Poli Penyakit Dalam'),
(3, 'Poli THT'),
(4, 'Poli Saraf'),
(5, 'Poli Bedah'),
(6, 'Poli Kebidanan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pegawai`, `username`, `password`, `level`) VALUES
(1, 1, 'admin', 'admin', 0),
(2, 3, 'imran', 'rs123', 1),
(4, 6, 'Dr. faisal', 'drfaisal', 3),
(5, 7, 'pelayanan', 'pel123', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwdiagnosa`
-- (See below for the actual view)
--
CREATE TABLE `vwdiagnosa` (
`id` int(11)
,`id_gejala` varchar(255)
,`id_pemeriksaan` varchar(255)
,`nama_pemeriksaan` varchar(255)
,`harga` int(11)
,`id_poli` int(11)
,`nama_poli` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `list_dokter`
--
DROP TABLE IF EXISTS `list_dokter`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_dokter`  AS  select `dokter`.`id_pegawai` AS `ID`,`pegawai`.`nama` AS `Nama`,`pegawai`.`jk` AS `Jk`,`pegawai`.`no_hp` AS `No_hp`,`poli`.`nama_poli` AS `Poli` from ((`dokter` join `pegawai` on((`dokter`.`id_pegawai` = `pegawai`.`id_pegawai`))) join `poli` on((`dokter`.`id_poli` = `poli`.`id_poli`))) ;

-- --------------------------------------------------------

--
-- Structure for view `list_user`
--
DROP TABLE IF EXISTS `list_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_user`  AS  select `pegawai`.`id_pegawai` AS `ID`,`pegawai`.`nama` AS `Nama`,`user`.`username` AS `Username`,`user`.`password` AS `Password`,`pegawai`.`jk` AS `Jk`,`pegawai`.`alamat` AS `Alamat`,`pegawai`.`tgl_lahir` AS `tgl`,`pegawai`.`no_hp` AS `no_hp`,`user`.`level` AS `Level` from (`pegawai` join `user` on((`user`.`id_pegawai` = `pegawai`.`id_pegawai`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vwdiagnosa`
--
DROP TABLE IF EXISTS `vwdiagnosa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwdiagnosa`  AS  select `a`.`id` AS `id`,`a`.`id_gejala` AS `id_gejala`,`a`.`id_pemeriksaan` AS `id_pemeriksaan`,`b`.`nama_pemeriksaan` AS `nama_pemeriksaan`,`b`.`harga` AS `harga`,`c`.`id_poli` AS `id_poli`,`c`.`nama_poli` AS `nama_poli` from ((`diagnosa` `a` join `pemeriksaan` `b`) join `poli` `c`) where ((`a`.`id_pemeriksaan` = `b`.`id_periksa`) and (`c`.`id_poli` = `b`.`id_poli`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cek`
--
ALTER TABLE `cek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_pasien` (`kd_pasien`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_periksa` (`id_periksa`),
  ADD KEY `kasir_ibfk_5` (`kd_pasien`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_kel`),
  ADD KEY `keluhan_ibfk_1` (`id_gejala`),
  ADD KEY `kd_pasien` (`kd_pasien`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_pasien`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `pasien_poli`
--
ALTER TABLE `pasien_poli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_pasien` (`kd_pasien`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cek`
--
ALTER TABLE `cek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien_poli`
--
ALTER TABLE `pasien_poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cek`
--
ALTER TABLE `cek`
  ADD CONSTRAINT `cek_ibfk_1` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`),
  ADD CONSTRAINT `cek_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `dokter_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`);

--
-- Constraints for table `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kasir_ibfk_3` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kasir_ibfk_5` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`);

--
-- Constraints for table `pasien_poli`
--
ALTER TABLE `pasien_poli`
  ADD CONSTRAINT `pasien_poli_ibfk_1` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`),
  ADD CONSTRAINT `pasien_poli_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`);

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
