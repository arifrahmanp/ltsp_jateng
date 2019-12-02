-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarcipta`
--

CREATE TABLE `daftarcipta` (
  `id_cipta` int(11) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `no_pendaftaran` varchar(10) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `formulir` varchar(100) NOT NULL,
  `contohcipta` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `pernyataan` varchar(100) NOT NULL,
  `pengalihan` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarcipta`
--

INSERT INTO `daftarcipta` (`id_cipta`, `namalengkap`, `nik`, `alamat`, `no_telepon`, `jenis_layanan`, `no_pendaftaran`, `ktp`, `akta`, `formulir`, `contohcipta`, `npwp`, `pernyataan`, `pengalihan`, `status1`, `keterangan`) VALUES
(1, 'arif rahman pradana', '3374112706920003', 'Jl Keruing X 44A', '+6285640809251', 'Hak Cipta', 'HAKCIPTA00', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', 'Belum Terverifikasi', ''),
(2, 'arif rahman pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Hak Cipta', 'CIPTA001', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', 'Belum Terverifikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftardi`
--

CREATE TABLE `daftardi` (
  `id_di` int(11) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `no_pendaftaran` varchar(10) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `gambardi` varchar(100) NOT NULL,
  `uraiandi` varchar(100) NOT NULL,
  `suratpernyataan` varchar(100) NOT NULL,
  `pengalihanhak` varchar(100) NOT NULL,
  `buktiprioritas` varchar(100) NOT NULL,
  `kuasa` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftardi`
--

INSERT INTO `daftardi` (`id_di`, `namalengkap`, `nik`, `alamat`, `no_telepon`, `jenis_layanan`, `no_pendaftaran`, `ktp`, `akta`, `gambardi`, `uraiandi`, `suratpernyataan`, `pengalihanhak`, `buktiprioritas`, `kuasa`, `status1`, `keterangan`) VALUES
(6, 'arif rahman pradana', '3374112706920003', 'Jl Keruing X 44A', '+6285640809251', 'Desain Industri', 'DESIN001', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', '1 (12).jpg', 'Belum Terverifikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftarmerek`
--

CREATE TABLE `daftarmerek` (
  `id_merek` int(11) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `no_pendaftaran` varchar(10) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `form` varchar(100) NOT NULL,
  `etiket` varchar(100) NOT NULL,
  `kuasa` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarmerek`
--

INSERT INTO `daftarmerek` (`id_merek`, `namalengkap`, `nik`, `alamat`, `no_telepon`, `jenis_layanan`, `no_pendaftaran`, `ktp`, `akta`, `ttd`, `form`, `etiket`, `kuasa`, `status1`, `keterangan`) VALUES
(27, 'Arif Rahman Pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Merek', 'MEREK001', '1 (28).jpg', '1 (16).jpg', '1 (18).jpg', '1 (32).jpg', '1 (35).jpg', '', 'Belum Terverifikasi', ''),
(28, 'Arif Rahman Pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Merek', 'MEREK002', '1 (1).jpg', '1 (16).jpg', '1 (23).jpg', '1 (22).jpg', '1 (12).jpg', '', 'Belum Terverifikasi', ''),
(29, 'Arif Rahman Pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Merek', 'MEREK003', '7 (2).jpg', '1 (1).jpg', '1 (12).jpg', '1 (15).jpg', '1 (24).jpg', '', 'Belum Terverifikasi', ''),
(30, 'Arif Rahman Pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Merek', 'MEREK004', '1 (1).jpg', '1 (3).jpg', '1 (1).jpg', '1 (3).jpg', '1 (28).jpg', '', 'Belum Terverifikasi', ''),
(31, 'Ardian fajar oktatriantoro', '3374111910990003', 'Jl Keruing X 44A', '+6285640809251', 'Merek', 'MEREK005', '1 (17).jpg', '1 (19).jpg', '1 (13).jpg', '1 (34).jpg', '1 (17).jpg', '', 'Belum Terverifikasi', ''),
(32, 'Arif Rahman Pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Merek', 'MEREK006', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '', 'Belum Terverifikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftarpaten`
--

CREATE TABLE `daftarpaten` (
  `id_paten` int(11) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `no_pendaftaran` varchar(10) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `abstrak` varchar(100) NOT NULL,
  `terjemahan` varchar(100) NOT NULL,
  `kuasa` varchar(100) NOT NULL,
  `formulir` varchar(100) NOT NULL,
  `pengalihan` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarpaten`
--

INSERT INTO `daftarpaten` (`id_paten`, `namalengkap`, `nik`, `alamat`, `no_telepon`, `jenis_layanan`, `no_pendaftaran`, `ktp`, `akta`, `deskripsi`, `abstrak`, `terjemahan`, `kuasa`, `formulir`, `pengalihan`, `status1`, `keterangan`) VALUES
(1, 'arif rahman pradana', '3374112706920003', 'Jl Keruing X', '+6285640809251', 'Paten', 'PATEN001', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', '1 (1).jpg', 'Belum Terverifikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id_antrian` int(100) NOT NULL,
  `no_antrian` varchar(11) NOT NULL,
  `jenis_pemohon` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `pelayanan` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_antrian`
--

INSERT INTO `tb_antrian` (`id_antrian`, `no_antrian`, `jenis_pemohon`, `nik`, `nama`, `email`, `perusahaan`, `telepon`, `pelayanan`, `jumlah`, `tanggal`) VALUES
(1, 'JATENG001', 'perorangan', '3374112706920003', 'Arif Rahman Pradana', 'arifrahmanpradana@gmail.com', 'Kanwil Kemenkumham Jawa Tengah', '+6285640809251', 'Kekayaan Intelektual', 5, '24/10/2019'),
(2, 'JATENG001', 'perorangan', '3374112706920003', 'Arif Rahman Pradana', 'arifrahmanpradana@gmail.com', 'Kanwil Kemenkumham Jawa Tengah', '+6285640809251', 'Pemasyarakatan', 5, '22/10/2019'),
(3, 'JATENG002', 'perorangan', '3374112706920003', 'Arif Rahman Pradana', 'arifrahmanpradana@gmail.com', 'Kanwil Jateng', '+6285640809251', 'Keimigrasian', 1, '21/10/2019'),
(4, 'JATENG003', 'perorangan', '3374112706920003', 'Arif Rahman Pradana', 'arifrahmanpradana@gmail.com', 'Kanwil Kemenkumham Jawa Tengah', '+6285640809251', 'Kekayaan Intelektual', 5, '28/10/2019'),
(5, 'JATENG004', 'perorangan', '3374112706920003', 'Arif Rahman Pradana', 'arifrahmanpradana@gmail.com', 'Kanwil Kemenkumham Jawa Tengah', '+6285640809251', 'Kekayaan Intelektual', 4, '31/10/2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'ADMIN', 'admin', '9b378a74282758aaef4a66f83accc2cf', 'admin'),
(2, 'Regha', 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarcipta`
--
ALTER TABLE `daftarcipta`
  ADD PRIMARY KEY (`id_cipta`);

--
-- Indexes for table `daftardi`
--
ALTER TABLE `daftardi`
  ADD PRIMARY KEY (`id_di`);

--
-- Indexes for table `daftarmerek`
--
ALTER TABLE `daftarmerek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `daftarpaten`
--
ALTER TABLE `daftarpaten`
  ADD PRIMARY KEY (`id_paten`);

--
-- Indexes for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarcipta`
--
ALTER TABLE `daftarcipta`
  MODIFY `id_cipta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daftardi`
--
ALTER TABLE `daftardi`
  MODIFY `id_di` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `daftarmerek`
--
ALTER TABLE `daftarmerek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `daftarpaten`
--
ALTER TABLE `daftarpaten`
  MODIFY `id_paten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id_antrian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
