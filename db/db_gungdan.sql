-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2021 pada 03.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
-- Struktur dari tabel `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `id_balasan` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `penjawab` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_komentar`
--

INSERT INTO `tabel_komentar` (`id_balasan`, `id_topik`, `penjawab`, `isi`, `tanggal`) VALUES
(5, 3, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-02-13'),
(6, 3, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-02-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_member`
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
-- Dumping data untuk tabel `tabel_member`
--

INSERT INTO `tabel_member` (`id_member`, `username`, `password`, `nama_lengkap`, `email`, `jenis_kelamin`, `avatar`, `tgl_daftar`) VALUES
(6, 'test', '$2y$10$NdkIKE.i6YZCeFrgyQQexe9Xr.AbY7Mo//KKDMWUWygkcUS1lTiA6', 'Nama Lengkap Profile', 'test@test.com', 'Laki-Laki', 'gambar/c10486ef0df6e6b5fd20.JPG', '2021-02-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_topik`
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

--
-- Dumping data untuk tabel `tabel_topik`
--

INSERT INTO `tabel_topik` (`id_topik`, `pengirim`, `topik`, `isi`, `dilihat`, `total_balasan`, `tanggal`) VALUES
(3, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 17, 2, '2021-02-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita_terkini`
--

CREATE TABLE `tb_berita_terkini` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita_terkini`
--

INSERT INTO `tb_berita_terkini` (`id`, `nama_berita`, `isi_berita`, `gambar`) VALUES
(1, 'Peresmian Alat Peringatan Dini Tsunami Ina TEWS 2019 edited', '<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Denpasar, Rabu (11/12), Peresmian Alat Peringatan Dini Tsunami Ina TEWS (Indonesia Tsunami Early Warning System) </span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">oleh Menteri Riset dan Teknologi/Kepala BRIN Bambang PS Brodjonegoro dan Kepala BPPT Hammam Riza di kantor BTIKK (Balai Teknologi Industri Kreatif Keramik) Bali,</span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"> serta penyerahan souvenir barong yang dihasilkan oleh BTIKK (Balai Teknologi Industri Kreatif Keramik) dari kepala BPPT untuk diberikan kepada Menristek/kepala BRIN</span></p>\r\n<p>artikel lengkap&nbsp;<a href=\"https://www.bppt.go.id/layanan-informasi-publik/3798-bppt-luncurkan-alat-penditeksi-dini-tsunami\">BPPT INAtews</a></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/Boedjonegoro.JPG\" alt=\"\" width=\"962\" height=\"641\" /></span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/Hammam.JPG\" alt=\"\" width=\"966\" height=\"644\" /></span></p>\r\n<p><span style=\"color: #1c1e21; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://btikk.bppt.go.id/images/kunjungan-ke-produksi.jpeg\" alt=\"\" width=\"967\" height=\"725\" /></span></p>\r\n<p>edited</p>\r\n</body>\r\n</html>>>', 'gambar/554a5bda0de22f96fa39.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `uploader` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galery`
--

INSERT INTO `tb_galery` (`id_gambar`, `nama_gambar`, `uploader`, `tgl_upload`, `gambar`, `deskripsi`) VALUES
(11, 'test', 1, '2021-02-11', 'gambar/80cda391d70877d06f4b.JPG', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'test_admin', '$2y$10$3uQpghizjRQ/a8WysJPW0e2eajux3N7fiL10M20TMgD.CB/shSVQy', 'test admin edited');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_penelitian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`id_penelitian`, `nama_penelitian`) VALUES
(1, 'test kategori'),
(4, 'test kategori 2 edited');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengembangan`
--

CREATE TABLE `tb_pengembangan` (
  `id_pengembangan` int(11) NOT NULL,
  `nama_pengembangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengembangan`
--

INSERT INTO `tb_pengembangan` (`id_pengembangan`, `nama_pengembangan`) VALUES
(1, 'test kategori edited'),
(3, 'test kategori 2 edited');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_pengembangan` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produkpenelitian`
--

CREATE TABLE `tb_produkpenelitian` (
  `id_produkpenelitian` int(11) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `nama_penelitian` varchar(255) NOT NULL,
  `uploader` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produkpenelitian`
--

INSERT INTO `tb_produkpenelitian` (`id_produkpenelitian`, `id_penelitian`, `nama_penelitian`, `uploader`, `tgl_upload`, `gambar`, `deskripsi`) VALUES
(2, 4, 'test', 1, '2021-02-14', 'gambar/a730693662f18cfe6640.JPG', 'test test');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id_balasan`),
  ADD KEY `FK_id_topik_KomentarTopik` (`id_topik`);

--
-- Indeks untuk tabel `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tabel_topik`
--
ALTER TABLE `tabel_topik`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indeks untuk tabel `tb_berita_terkini`
--
ALTER TABLE `tb_berita_terkini`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `FK_uploader_GaleryLogin` (`uploader`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  ADD PRIMARY KEY (`id_pengembangan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_id_pengembangan_ProdukPengembangan` (`id_pengembangan`),
  ADD KEY `FK_id_admin_ProdukPengembangan` (`id_admin`) USING BTREE;

--
-- Indeks untuk tabel `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  ADD PRIMARY KEY (`id_produkpenelitian`) USING BTREE,
  ADD KEY `FK_id_penelitian_ProdukpenelitianPenelitian` (`id_penelitian`) USING BTREE,
  ADD KEY `FK_uploader_ProdukpenelitianLogin` (`uploader`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_member`
--
ALTER TABLE `tabel_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_topik`
--
ALTER TABLE `tabel_topik`
  MODIFY `id_topik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_berita_terkini`
--
ALTER TABLE `tb_berita_terkini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pengembangan`
--
ALTER TABLE `tb_pengembangan`
  MODIFY `id_pengembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  MODIFY `id_produkpenelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD CONSTRAINT `tabel_komentar_ibfk_1` FOREIGN KEY (`id_topik`) REFERENCES `tabel_topik` (`id_topik`);

--
-- Ketidakleluasaan untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD CONSTRAINT `tb_galery_ibfk_1` FOREIGN KEY (`uploader`) REFERENCES `tb_login` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_pengembangan`) REFERENCES `tb_pengembangan` (`id_pengembangan`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tb_login` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_produkpenelitian`
--
ALTER TABLE `tb_produkpenelitian`
  ADD CONSTRAINT `tb_produkpenelitian_ibfk_1` FOREIGN KEY (`id_penelitian`) REFERENCES `tb_penelitian` (`id_penelitian`),
  ADD CONSTRAINT `tb_produkpenelitian_ibfk_2` FOREIGN KEY (`uploader`) REFERENCES `tb_login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
