-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 06:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gungdan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `id_balasan` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `penjawab` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_member`
--

CREATE TABLE `tabel_member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_member`
--

INSERT INTO `tabel_member` (`id_member`, `username`, `password`, `nama_lengkap`, `email`, `jenis_kelamin`, `avatar`, `tgl_daftar`) VALUES
(1, 'test', '$2y$10$Mh5JfMpDd.DQ5XPOulHIF.Dc2qznLo.FVByRw0V7oUZ7k8RObjxKW', 'test member', 'test@test.com', 'Laki - Laki', 'gambar/9bbfbb9a41a221559afc.png', '2021-02-07'),
(4, 'test2', '$2y$10$02rC3nzQisr5a4ScpSsD5eVL4YX8AVVMzGIbLZscSCnjAATi0gMMK', 'test member 2', 'test@test.com', 'Laki - Laki', 'gambar/843f16744a5292287efd.png', '2021-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_topik`
--

CREATE TABLE `tabel_topik` (
  `id_topik` int(11) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(255) NOT NULL,
  `total_balasan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita_terkini`
--

CREATE TABLE `tb_berita_terkini` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `uploader` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_penelitian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembangan`
--

CREATE TABLE `tb_pengembangan` (
  `id_pengembangan` int(11) NOT NULL,
  `nama_pengembangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_pengembangan` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produkpenelitian`
--

CREATE TABLE `tb_produkpenelitian` (
  `id_produkpenelitian` int(11) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `nama_penilitian` varchar(255) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `uploader` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id_balasan`),
  ADD KEY `FK_id_topik_KomentarTopik` (`id_topik`);

--
-- Indexes for table `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tabel_topik`
--
ALTER TABLE `tabel_topik`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indexes for table `tb_berita_terkini`
--
ALTER TABLE `tb_berita_terkini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `FK_uploader_GaleryLogin` (`uploader`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_id_pengembangan_ProdukPengembangan` (`id_pengembangan`),
  ADD KEY `FK_id_admin_ProdukPengembangan` (`id_admin`) USING BTREE;

--
-- Indexes for table `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  ADD PRIMARY KEY (`id_produkpenelitian`) USING BTREE,
  ADD KEY `FK_id_penelitian_ProdukpenelitianPenelitian` (`id_penelitian`) USING BTREE,
  ADD KEY `FK_uploader_ProdukpenelitianLogin` (`uploader`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_member`
--
ALTER TABLE `tabel_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_topik`
--
ALTER TABLE `tabel_topik`
  MODIFY `id_topik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita_terkini`
--
ALTER TABLE `tb_berita_terkini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  MODIFY `id_pengembangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  MODIFY `id_produkpenelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD CONSTRAINT `tabel_komentar_ibfk_1` FOREIGN KEY (`id_topik`) REFERENCES `tabel_topik` (`id_topik`);

--
-- Constraints for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD CONSTRAINT `tb_galery_ibfk_1` FOREIGN KEY (`uploader`) REFERENCES `tb_login` (`id`);

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_pengembangan`) REFERENCES `tb_pengembangan` (`id_pengembangan`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tb_login` (`id`);

--
-- Constraints for table `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  ADD CONSTRAINT `tb_produkpenelitian_ibfk_1` FOREIGN KEY (`id_penelitian`) REFERENCES `tb_penelitian` (`id_penelitian`),
  ADD CONSTRAINT `tb_produkpenelitian_ibfk_2` FOREIGN KEY (`uploader`) REFERENCES `tb_login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
