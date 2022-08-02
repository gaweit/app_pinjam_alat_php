-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2022 pada 09.44
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pemin_alat`
--
CREATE DATABASE IF NOT EXISTS `pemin_alat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pemin_alat`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `password`, `kelas`, `no_hp`) VALUES
(1, 'Novia Tri Sagita', '12345', '10-ATP2-0053630496', '085271272223'),
(2, 'Suci Indriyani', '12345', '11-ATPH2-0056107252', '082383397423'),
(3, 'Wahyudi Susilo', '12345', '12-APKJ2-9977936169', '081375642234'),
(4, 'Gading Syahputra', '12345', '11-ATPH2-0002308060', '082367789743'),
(5, 'Sutrisno', '12345', '11-ATPH1-0010645608', '085276890987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_brg` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_brg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `kode_barang`, `jenis_brg`, `stok_brg`, `foto`) VALUES
(1, 'Dodos Kelapa Sawit', 'DKS1 - DKS6', '0', '6', 'Dodos.jpg'),
(2, 'Egrek Sawit', 'ES01 - ES07', '0', '7', 'Egrek.jpg'),
(3, 'Parang', 'P001 - P010', '0', '10', 'Parang.jpg'),
(4, 'Kampak', 'K001 - K011', '0', '11', 'Kampak.jpg'),
(5, 'Tojok Sawit', 'TS01 - TS09', '2', '9', 'Tojok.jpg'),
(6, 'Tajak', 'T001 - T010', '1', '10', 'Tajak.jpg'),
(7, 'Angkong', 'A001 - A006', '1', '6', 'Angkong.jpg'),
(8, 'Kep Elektrik', 'KE01 - KE05', '2', '5', 'Kep Elektrik.jpg'),
(9, 'Kep Semprot Solo', 'KS01 - KS06', '1', '6', 'Kep Solo.jpg'),
(10, 'Cangkul', 'C001 - C008', '0', '8', 'Cangkul.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT,
  `id_brg` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `kode_brg` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `deadline` date NOT NULL,
  `jumlah` int(8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `penerima` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `denda` int(20) NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_brg` (`id_brg`,`id_anggota`),
  KEY `id_peminjam` (`id_anggota`),
  KEY `id_anggota` (`id_anggota`),
  KEY `id_brg_2` (`id_brg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=143 ;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_brg`, `id_anggota`, `kode_brg`, `tgl_pinjam`, `tgl_kembali`, `deadline`, `jumlah`, `status`, `penerima`, `denda`) VALUES
(84, 10, 1, 'C001', '2022-07-25', '2022-07-27', '2022-07-27', 1, 1, 'Kepala Gudang', 6000),
(85, 1, 2, 'DKS1', '2022-07-25', '2022-07-29', '2022-07-27', 2, 1, 'Staff Gudang', 0),
(87, 2, 1, 'ES03', '2022-08-01', '2022-08-04', '2022-08-03', 1, 0, '', 0),
(133, 2, 4, 'DKS4', '2022-08-02', '0000-00-00', '2022-08-04', 0, 0, '', 0),
(135, 6, 5, 'T001', '2022-08-02', '0000-00-00', '2022-08-04', 0, 0, '', 0),
(140, 4, 2, 'K001', '2022-08-02', '0000-00-00', '2022-08-04', 0, 0, '', 0),
(142, 3, 1, 'P003', '2022-08-02', '0000-00-00', '2022-08-04', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_brg` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `penerima` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_brg` (`id_brg`,`id_anggota`),
  KEY `id_peminjaman` (`id_peminjaman`),
  KEY `id_peminjam` (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_brg`, `id_anggota`, `id_peminjaman`, `tgl_kembali`, `penerima`) VALUES
(47, 1, 2, 85, '2022-07-27', 'Staff Gudang'),
(49, 2, 1, 87, '2022-08-01', 'Terlambat'),
(50, 10, 1, 84, '2022-08-02', 'Kepala Gudang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
