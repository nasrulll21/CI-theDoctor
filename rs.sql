-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 03:49 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `id_periksa` varchar(255) NOT NULL,
  `id_obat` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') NOT NULL DEFAULT 'Belum Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama_lengkap`, `jk`, `tgl_lahir`, `agama`, `umur`, `nama_ortu`, `gol_darah`, `bpjs`, `ktp`, `telepon`, `alamat`) VALUES
('PSN-IZlx1d7Q', 'Aslan', 'pria', '1997-07-16', 'islam', 21, 'BPK', 'AB', '1', '0981029321923', '085234898323', 'ksjdhaskjdhaksjdhakjsdh'),
('PSN-na6yCz8i', 'imran Nur', 'pria', '2013-01-17', 'islam', 12, 'barulla', 'B', '0', '98203982', '093387', 'batua');

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
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_periksa`, `nama_pemeriksaan`, `harga`) VALUES
('LBHm001', 'Darah Lengkap', 200000),
('LBIm001', 'Hepatitis', 190000),
('LBIm002', 'Thyroid', 260000),
('LBIm003', 'Imunoglobulin', 210000),
('LBIm004', 'Hormon', 170000),
('LBIm005', 'TORCH', 250000),
('LBIm006', 'Tumor Marker ', 160000),
('LBIm007', 'Pemeriksaan Anti', 190000),
('LBIm008', 'Imuno-Serologi', 230000),
('LBIm009', 'Stain', 200000),
('LBIm010', 'Faeces', 220000),
('LBIm011', 'Narkoba Urine', 210000),
('LBIm012', 'Alcotest', 180000),
('LBIm013', 'elektrolit', 150000),
('LBKk001', 'Fungsi Hati ', 200000),
('LBKk002', 'Lipid Profile ', 240000),
('LBKk003', 'Fungsi Ginjal ', 200000),
('LBKk004', 'Metabolisme Karbohidrat ', 290000),
('nbvnv', 'poipo', 98090),
('OPDg001', 'Hernioraphy dengan Mess', 170000),
('OPDg002', 'Appendictomy Perforasi\r\n', 240000),
('OPDg003', 'Colostomy\r\n', 160000),
('OPDg004', 'Illeustomy\r\n', 290000),
('OPDg005', 'Laparatomy\r\n', 260000),
('OPDg006', 'Reseksi Usus\r\n', 190000),
('OPDg007', 'Herniocolectomy\r\n', 220000),
('OPDg008', 'Reseksi Hepar\r\n', 130000),
('OPDg009', 'Pankreatectomy lim', 240000),
('OPDg010', 'Cholesistectomy\r\n', 150000),
('OPMl001', 'Odontectomy\r\n', 180000),
('OPMl002', 'Orif\r\n', 210000),
('OPMl003', 'Insisi\r\n', 160000),
('OPMl004', 'Exsisi\r\n', 250000),
('OPMl005', 'Exterpatie\r\n', 160000),
('OPMt001', 'Pterigium\r\n', 210000),
('OPMt002', 'Granuloma\r\n', 230000),
('OPMt003', 'Tarsotomy\r\n', 190000),
('OPMt004', 'Corpus Kecil\r\n', 150000),
('OPMt005', 'Parasentesis\r\n', 250000),
('OPMt006', 'Scraping\r\n', 230000),
('OPMt007', 'Konjungtiva Flap\r\n', 180000),
('OPMt008', 'Jahit Palpebra\r\n', 220000),
('OPMt009', 'Katarak dengan IOL\r\n', 240000),
('OPMt010', 'Glaukoma\r\n', 150000),
('OPMt011', 'Trabeculectomy\r\n', 120000),
('OPMt012', 'Enukleasi Bulbi\r\n', 200000),
('OPMt013', 'Eviserasi Bulbi\r\n', 150000),
('OPMt014', 'Iris EXcisi dan Jahit Kornea\r\n', 250000),
('OPMt015', 'Ablasio Retina\r\n', 130000),
('OPMt016', 'Rekonstruksi\r\n', 260000),
('OPMt017', 'Vitrectomy\r\n', 120000),
('OPOg001', 'Sectio Caesaria', 150000),
('OPOg002', 'Sterilisasi', 230000),
('OPOg003', 'Kehamilan Ektopik Terganggu', 210000),
('OPOg004', 'Exterpatie Kista Vagina', 170000),
('OPOg005', 'Histerectomy', 180000),
('OPOg006', 'Histerectomy', 230000),
('OPOg007', 'Miomectomy', 190000),
('OPOk001', 'Excisi Tumor Jinak ( Lipoma Kecil )', 180000),
('OPOk002', 'Tumor Jinak Ganglion', 210000),
('OPOk003', 'Struma Lobectomy', 250000),
('OPOk004', 'Mastectomy', 250000),
('OPOk005', 'Multiple FAM', 160000),
('OPOk006', 'Radikal Mastectomy', 250000),
('OPOk007', 'Open Biopsi Mammae', 170000),
('OPOk008', 'Mammae Acesoir', 250000),
('OPOt001', 'ORIF', 190000),
('OPOt002', 'Reposisi Tertutup', 230000),
('OPOt003', 'Amputasi ekstremitas', 200000),
('OPOt004', 'Debridemen Osteomilitis', 160000),
('OPOt005', 'Ambil Implant/ Removel', 250000),
('OPOt006', 'Tendo Plastic Koreksi', 190000),
('OPOt007', 'THR', 220000),
('OPOt008', 'TKR', 170000),
('OPPl001', 'Labioplasty', 200000),
('OPPl002', 'Palatoplasty', 200000),
('OPPl003', 'Rekonstruksi Mammae', 230000),
('OPPl004', 'Polydaktili', 150000),
('OPPl005', 'STSG', 160000),
('OPPl006', 'Labioplasty Duplex', 240000),
('OPsas', 'we', 123123),
('OPSf001', 'Craniotomy ( perdarahan dan tumor )', 220000),
('OPSf002', 'Cranioplasty', 150000),
('OPSf003', 'Trepanasi', 220000),
('OPSf004', 'Koreksi Impresi Fraktur', 180000),
('OPSf005', 'Laminectomy', 260000),
('OPSf006', 'Overhecting', 190000),
('OPTh001', 'Tonsilectomy', 190000),
('OPTh002', 'Traceostomy', 150000),
('OPTh003', 'Reposisi Hidung Tertutup', 230000),
('OPTh004', 'CWL', 210000),
('OPTh005', 'Reposisi Hidung Terbuka', 260000),
('OPTh006', 'FESS', 240000),
('OPTh007', 'Thympanoplasty', 190000),
('OPTh008', 'Mastoidectomy', 250000),
('OPTh009', 'Rekonstruksi Hidung Terbuka', 220000),
('OPUm001', 'Appendictomy', 210000),
('OPUm002', 'Hernia', 170000),
('OPUm003', 'Haemorroidectomy', 230000),
('OPUm004', 'Colesistectomy', 260000),
('OPUm005', 'Prostatectomy', 160000),
('OPUm006', 'Circumsisi', 220000),
('OPUm007', 'Debridemen', 260000),
('OPUm008', 'Necrotomy', 220000),
('OPUm009', 'Amputasi jari', 180000),
('OPUm010', 'Reposisi Terbuka', 200000),
('OPUm011', 'Laparatomi', 170000),
('OPUr001', 'Varicolectomy', 190000),
('OPUr002', 'Hidrocolectomy', 210000),
('OPUr003', 'Cystoscopy', 250000),
('OPUr004', 'Biopsi Prostat', 210000),
('OPUr005', 'Uretrolitotomy', 260000),
('OPUr006', 'Pasang DJ Stain', 220000),
('OPUr007', 'Pyelolithotomy', 180000),
('OPUr008', 'TUR', 130000),
('OPUr009', 'Nephrectomy', 150000),
('OPUr010', 'Uretroplasty', 220000),
('OPUr011', 'Litotripsi', 120000),
('RDCg002', 'CT SCAN', 200000),
('RDCg003', 'MRI', 250000),
('RDKt001', 'Kelenjar Lakrimalis', 170000),
('RDKt002', 'Kelenjar Parotis', 230000),
('RDKt003', 'Barium Telan', 260000),
('RDKt004', 'Upper GI', 210000),
('RDKt005', 'Appendicogram', 180000),
('RDKt006', 'Colon In Loop', 230000),
('RDKt007', 'IVP (Intravena Pyelografi)', 180000),
('RDKt008', 'Retro Pyelografi', 270000),
('RDKt009', 'Pielocystografi', 240000),
('RDKt010', 'Cholangiografi', 270000),
('RDNKt001', 'Kepala', 190000),
('RDNKt002', 'Thorax', 240000),
('RDNKt003', 'Abdomen', 160000),
('RDNKt004', 'Extremitas', 250000),
('RDNKt005', 'Vertebrae', 170000),
('RDNKt006', 'Mamografi', 280000);

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
(1, 'Poli Umum');

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

--
-- Indexes for dumped tables
--

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
  ADD KEY `id_obat` (`id_obat`);

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
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`);

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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`),
  ADD CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `kasir_ibfk_3` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`),
  ADD CONSTRAINT `kasir_ibfk_4` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
