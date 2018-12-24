-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 03:56 PM
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
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `id_periksa` varchar(255) NOT NULL,
  `id_obat` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') NOT NULL DEFAULT 'Belum Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(1) NOT NULL,
  `level` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`, `keterangan`) VALUES
(1, 'Admin', 'Akun Administrator untuk akses Full'),
(2, 'Pasien', 'Akun untuk user yang ingin periksa'),
(3, 'Kasir', 'Akun untuk pembayaran'),
(4, 'Perawat', 'Akun untuk setiap pegawai ruang pemeriksaan');

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
('BTL002', 'ALBOTHYL 10 ML', 'BOTOL', 31000, 43),
('BTL003', 'ALBI GURAH', 'BOTOL', 26500, 32),
('TBL001', 'AMBROXOL TAB', 'TABLET', 1000, 32),
('TBL002', 'AMLODIPIN TAB 5 MG', 'TABLET', 1500, 55);

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
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` varchar(255) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('islam','kristen','hindu','buddha') NOT NULL,
  `umur` int(11) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `bpjs` enum('1','0') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `pass`, `jk`, `tgl_lahir`, `agama`, `umur`, `nama_ortu`, `gol_darah`, `bpjs`, `telepon`, `alamat`, `id_level`) VALUES
(1, 'admin', 'Nasruddin', 'adfdaf', 'pria', '2018-12-20', 'islam', 31, 'IBU', 'A', '1', '324325', 'wfwrfr', 1),
(2, 'jamelel', 'JAMIL', '123', 'pria', '2018-12-19', 'islam', 21, 'basuki', 'A', '0', '098213123', 'dfasdasdasdasd  ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_periksa` (`id_periksa`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasir`
--
ALTER TABLE `kasir`
  ADD CONSTRAINT `kasir_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`),
  ADD CONSTRAINT `kasir_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `kasir_ibfk_3` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`),
  ADD CONSTRAINT `kasir_ibfk_4` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `kasir_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
