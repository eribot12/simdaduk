-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2022 pada 15.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kec`
--

CREATE TABLE `master_kec` (
  `kode_kec` int(11) NOT NULL,
  `nama_kec` varchar(20) NOT NULL,
  `kode_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kel`
--

CREATE TABLE `master_kel` (
  `kode_kel` int(11) NOT NULL,
  `nama_kel` varchar(20) NOT NULL,
  `kode_kec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dokumen`
--

CREATE TABLE `tabel_dokumen` (
  `id_dokumen` int(20) NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_dokumen`
--

INSERT INTO `tabel_dokumen` (`id_dokumen`, `nama_dokumen`) VALUES
(1, 'F.1-01'),
(2, 'F.1-03'),
(3, 'Surat Keterangan Kelahiran dari Kelurahan'),
(4, 'F.1-05'),
(5, 'KK Lama'),
(6, 'Surat Pindah Datang'),
(7, 'Copy Ijazah'),
(8, 'Surat Kematian'),
(9, 'Copy Surat Nikah/Cerai'),
(10, 'Copy KTP'),
(11, 'Copy Akta Kelahiran'),
(12, 'F1.21'),
(13, 'Copy KK'),
(14, 'Copy Akta Lahir'),
(15, 'Surat Keterangan kehilangan'),
(16, 'KTP Rusak/Lama'),
(17, 'KIA Untuk Pemula'),
(18, 'KTP Ortu'),
(19, 'Pas Foto'),
(20, 'F.2-01'),
(21, 'F.2-02'),
(22, 'F.2-03'),
(23, 'F.2-04'),
(24, 'F.2-08'),
(25, 'F.2-09'),
(26, 'F.2-10'),
(27, 'F.2-11'),
(28, 'Copy KTP Ortu'),
(29, 'Copy KTP Saksi'),
(30, 'Copy Akta Nikah'),
(31, 'Surat Bidan'),
(32, 'F.2-28'),
(33, 'F.2-29'),
(34, 'F.2-30'),
(35, 'F.2-31'),
(36, 'F.2-32'),
(37, 'F.2-33'),
(38, 'F.2-34'),
(39, 'F.1-08'),
(40, 'F.1-09'),
(41, 'F.1-10'),
(42, 'KK'),
(43, 'KTP Asli'),
(44, 'Copy Akta Nikah/Cerai'),
(45, 'Surat Pemberkatan dari Pemuka Agama Asli'),
(46, 'Copy Surat Baptis/ Anggota Agama '),
(47, 'Copy Akta Kelahiran Legalisir'),
(48, 'Copy KTP kedua Mempelai dan Ortu. legalisir'),
(49, 'Copy KK Legalisir'),
(50, 'Surat Keterangan Sehat'),
(51, 'Pas Foto 4x6'),
(52, 'Copy Surat Nikah Ortu'),
(53, 'Blangko Perkawinan'),
(54, 'Copy KTP diperbesar 2x Kertas Folio'),
(55, 'Putusan Pengadilan (Legalisir)'),
(56, 'Akta Nikah Asli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengurusan`
--

CREATE TABLE `tabel_pengurusan` (
  `id_pengurusan` int(20) NOT NULL,
  `nama_pengurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pengurusan`
--

INSERT INTO `tabel_pengurusan` (`id_pengurusan`, `nama_pengurusan`) VALUES
(1, 'KK'),
(2, 'KTP'),
(3, 'KIA'),
(4, 'Akta Lahir'),
(5, 'Akta Mati'),
(6, 'SKPD'),
(7, 'Akta Perkawinan'),
(8, 'Akta Perceraian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_syaratpengurusan`
--

CREATE TABLE `tabel_syaratpengurusan` (
  `id` int(20) NOT NULL,
  `id_pengurusan` int(20) NOT NULL,
  `id_dokumen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_verifikasi`
--

CREATE TABLE `tabel_verifikasi` (
  `id_kendali` int(15) NOT NULL,
  `jenis_kepengurusan` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `dokumen_baru` varchar(20) NOT NULL,
  `penambahan_jiwa` varchar(20) NOT NULL,
  `perubahan_data` varchar(20) NOT NULL,
  `petugas_pelayanan` varchar(50) NOT NULL,
  `tgl_verif_pelayanan` date NOT NULL,
  `jam_verif_pelayanan` time NOT NULL,
  `status_verif_pelayanan` varchar(20) NOT NULL,
  `catatan_pelayanan` varchar(1000) NOT NULL,
  `kasi` varchar(50) NOT NULL,
  `tgl_verif_kasi` date NOT NULL,
  `jam_verif_kasi` time NOT NULL,
  `kasi2` varchar(50) NOT NULL,
  `tgl_verif_kasi2` date NOT NULL,
  `jam_verif_kasi2` time NOT NULL,
  `status_verif_kasi` varchar(20) NOT NULL,
  `catatan_kasi` varchar(100) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `tgl_verif_operator` date NOT NULL,
  `jam_verif_operator` time NOT NULL,
  `operator2` varchar(50) NOT NULL,
  `tgl_verif_operator2` date NOT NULL,
  `jam_verif_operator2` time NOT NULL,
  `status_verif_operator` varchar(20) NOT NULL,
  `catatan_operator` varchar(100) NOT NULL,
  `kabid` varchar(50) NOT NULL,
  `tgl_verif_kabid` date NOT NULL,
  `jam_verif_kabid` time NOT NULL,
  `status_verif_kabid` varchar(20) NOT NULL,
  `catatan_kabid` varchar(100) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `tgl_verif_petugas` date NOT NULL,
  `jam_verif_petugas` time NOT NULL,
  `petugas2` varchar(50) NOT NULL,
  `tgl_verif_petugas2` date NOT NULL,
  `jam_verif_petugas2` time NOT NULL,
  `status_verif_petugas` varchar(20) NOT NULL,
  `catatan_petugas` varchar(100) NOT NULL,
  `kepdinas` varchar(50) NOT NULL,
  `tgl_verif_kepdinas` date NOT NULL,
  `jam_verif_kepdinas` time NOT NULL,
  `status_verif_kepdinas` varchar(20) NOT NULL,
  `catatan_kepdinas` varchar(100) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `tgl_verif_pemohon` date NOT NULL,
  `jam_verif_pemohon` time NOT NULL,
  `status_verif_pemohon` varchar(20) NOT NULL,
  `catatan_pemohon` varchar(100) NOT NULL,
  `arsip` varchar(50) NOT NULL,
  `tgl_verif_arsip` date NOT NULL,
  `jam_verif_arsip` time NOT NULL,
  `status_verif_arsip` varchar(20) NOT NULL,
  `catatan_arsip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_verifikasi`
--

INSERT INTO `tabel_verifikasi` (`id_kendali`, `jenis_kepengurusan`, `nik`, `nama_pemohon`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelurahan`, `kecamatan`, `tgl_permohonan`, `dokumen_baru`, `penambahan_jiwa`, `perubahan_data`, `petugas_pelayanan`, `tgl_verif_pelayanan`, `jam_verif_pelayanan`, `status_verif_pelayanan`, `catatan_pelayanan`, `kasi`, `tgl_verif_kasi`, `jam_verif_kasi`, `kasi2`, `tgl_verif_kasi2`, `jam_verif_kasi2`, `status_verif_kasi`, `catatan_kasi`, `operator`, `tgl_verif_operator`, `jam_verif_operator`, `operator2`, `tgl_verif_operator2`, `jam_verif_operator2`, `status_verif_operator`, `catatan_operator`, `kabid`, `tgl_verif_kabid`, `jam_verif_kabid`, `status_verif_kabid`, `catatan_kabid`, `petugas`, `tgl_verif_petugas`, `jam_verif_petugas`, `petugas2`, `tgl_verif_petugas2`, `jam_verif_petugas2`, `status_verif_petugas`, `catatan_petugas`, `kepdinas`, `tgl_verif_kepdinas`, `jam_verif_kepdinas`, `status_verif_kepdinas`, `catatan_kepdinas`, `pemohon`, `tgl_verif_pemohon`, `jam_verif_pemohon`, `status_verif_pemohon`, `catatan_pemohon`, `arsip`, `tgl_verif_arsip`, `jam_verif_arsip`, `status_verif_arsip`, `catatan_arsip`) VALUES
(24, 'KTP', '64346', 'anna', 'Lamongan', '2022-03-26', 'PR', 'desa', 'kecamatan', '2022-03-25', '', '', '', '1', '2022-03-26', '19:55:00', 'Terverifikasi', 'catat', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(25, 'KK', '2147483647', 'eko', 'Lamongan', '2022-03-27', 'LK', 'desa', 'kecamatan', '2022-03-27', '', '', '', '1', '2022-03-27', '20:24:00', 'Terverifikasi', 'catat', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(26, 'KK', '2147483647', 'tum', 'jombang', '2022-03-27', 'LK', 'jombok', 'jombang', '2022-03-27', '', '', '', '1', '2022-03-27', '23:16:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(27, 'KTP', '2147483647', 'yaw', 'jombang', '2022-03-27', 'LK', 'jombok', 'jombang', '2022-03-27', '', '', '', '1', '2022-03-27', '23:27:00', 'Terverifikasi', 'catat', '1', '2022-03-27', '23:27:00', '', '0000-00-00', '00:00:00', 'Terverifikasi', 'c', '2', '2022-03-27', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '1', '2022-03-27', '23:27:00', '1', '2022-03-27', '23:27:00', 'Terverifikasi', 't', '', '0000-00-00', '00:00:00', '', '', 'tum', '2022-03-27', '23:28:00', 'Terverifikasi', 'a', '3', '2022-03-27', '00:20:22', 'Terverifikasi', 't'),
(28, 'KTP', '3517270900001', 'tims', 'jombang', '2022-03-27', 'PR', 'jombok', 'jombang', '2022-03-27', '', '', '', '2', '2022-03-27', '23:30:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(29, 'KK', '3517270900002', 'yoww', 'jombang', '1998-10-13', 'LK', 'jombok', 'jombang', '2022-04-06', '', '', '', '2', '2022-04-06', '22:26:00', 'Terverifikasi', 'catat', '2', '2022-04-06', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(30, 'KTP', '3517270900003', 'oi', 'jombang', '1990-06-07', 'PR', 'jombok', 'jombang', '2022-04-07', '', '', 'Perubahan', '1', '2022-04-07', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(31, 'KK', '351727090033', 'tum', 'jombang', '2022-04-08', 'LK', 'jombok', 'jombang', '2022-04-08', '', 'Penambahan', '', '1', '2022-04-08', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(32, 'KIA', '35172700077', 'fit', 'jombang', '2022-04-08', 'LK', 'jombok', 'jombang', '2022-04-08', '', 'Penambahan', '', '1', '2022-04-08', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(34, 'AKTA LAHIR', '3517270900098', 'ndre', 'jombang', '2022-04-09', 'LK', 'jombok', 'jombang', '2022-04-09', '', 'Penambahan', '', '1', '2022-04-09', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(35, 'AKTA MATI', '3517270900012', 'lai', 'jombang', '2022-04-09', 'PR', 'jombok', 'jombang', '2022-04-09', '', 'Penambahan', '', '1', '2022-04-09', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(36, 'SKPD', '3517270900034', 'zaghi', 'jombang', '2022-04-09', 'LK', 'jombok', 'jombang', '2022-04-09', 'Baru', '', '', '1', '2022-04-09', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(37, 'AKTA PERKAWINAN', '3517270900123', 'inzaghi', 'jombang', '2022-04-09', 'LK', 'jombok', 'jombang', '2022-04-09', '', 'Penambahan', '', '1', '2022-04-09', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', ''),
(38, 'AKTA PERCERAIAN', '3517270901234', 'ths', 'jombang', '2022-04-09', 'LK', 'jombok', 'jombang', '2022-04-09', 'Baru', '', '', '1', '2022-04-09', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '', '', '0000-00-00', '00:00:00', '', '', '- Pilih -', '0000-00-00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_verif_dokumen`
--

CREATE TABLE `tabel_verif_dokumen` (
  `id_kendali` int(15) NOT NULL,
  `id_dokumen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kk`, `id_pend`, `hubungan`) VALUES
(19, 7, 23, 'Istri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datang`
--

CREATE TABLE `tb_datang` (
  `id_datang` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `tgl_datang` date NOT NULL,
  `pelapor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datang`
--

INSERT INTO `tb_datang` (`id_datang`, `nik`, `nama_datang`, `jekel`, `tgl_datang`, `pelapor`) VALUES
(5, '6357672572552', 'Mbah Sri Rejo', 'LK', '1945-08-17', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(7, '12345678109987', 'Arif S', 'balong', '01', '03', 'Dawarblandong', 'Mojokerto', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id_lahir` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lahir`
--

INSERT INTO `tb_lahir` (`id_lahir`, `nama`, `tgl_lh`, `jekel`, `id_kk`) VALUES
(6, 'ABYAN RAFA AL FARIZI', '2022-03-02', 'LK', 7),
(7, 'Niklas Sule', '2022-03-01', 'LK', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mendu`
--

CREATE TABLE `tb_mendu` (
  `id_mendu` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_mendu` date NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mendu`
--

INSERT INTO `tb_mendu` (`id_mendu`, `id_pdd`, `tgl_mendu`, `sebab`) VALUES
(5, 25, '2021-08-09', 'Telat Makan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pdd`
--

CREATE TABLE `tb_pdd` (
  `id_pend` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pdd`
--

INSERT INTO `tb_pdd` (`id_pend`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`) VALUES
(22, '3517032208000001', 'Arif S', 'Mojokerto', '1999-02-22', 'LK', 'balong', '01', '03', 'Islam', 'Sudah', 'Wiraswasta', 'Ada'),
(23, '3517022309000002', 'Ilham ayu saputri', 'Madiun', '2000-02-23', 'PR', 'Wungu', '08', '03', 'Islam', 'Sudah', 'Ibu rumah tangga', 'Ada'),
(24, '3517270900098001', 'Tum', 'Jombang', '2006-09-27', 'LK', 'jombok', '01', '01', 'Islam', 'Belum', 'Mahasiswa', 'Pindah'),
(25, '3592894613961598', 'eri wandayanti', 'Mojokerto', '2006-09-22', 'PR', 'balong', '03', '02', 'Islam', 'Belum', 'Pelajar', 'Meninggal'),
(26, '3516173101010001', 'Muhamad Arif Saifudi', 'Mojokerto', '2001-01-31', 'LK', 'Banyulegi', '02', '09', 'Islam', 'Belum', 'Pengusaha Batu Bata', 'Ada'),
(27, '3516173101010001', 'Ilham Ainur', 'Madiun', '2001-05-08', 'LK', 'Munggu', '23', '6', 'Islam', 'Belum', 'Mahasiswa', 'Ada'),
(28, '3516173101010001', 'Ilham Ainur', 'Surabaya', '2015-02-09', 'LK', 'Munggu', '02', '6', 'Islam', 'Belum', 'Pengusaha Batu Bata', 'Ada'),
(32, '3516173101010001', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Ada'),
(33, '892', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Ada'),
(35, '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Ada'),
(36, '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Ada'),
(37, '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Admin','Kasi','Operator','Kabid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'LINDA MUTIARA DEWI', 'Admin1', 'Admin1', 'Admin'),
(3, 'RATNA WULANDARI', 'Admin2', 'Admin2', 'Admin'),
(5, 'KHURNIAWATI', 'Operator1', 'Operator1', 'Operator'),
(6, 'AKHMAD KHUSAIDI', 'Operator2', 'Operator2', 'Operator'),
(7, 'ARDINA PUSPITASARI', 'Operator3', 'OPerator3', 'Operator'),
(8, 'NIKEN WAHYU ZAKIA', 'Operator4', 'Operator4', 'Operator'),
(9, 'DEWI KUMALA SARI', 'Operator5', 'Operator5', 'Operator'),
(10, 'NUR KHANIFAH', 'Operator6', 'Operator6', 'Operator'),
(11, 'INTAN PRAWESTI', 'Operator7', 'Operator7', 'Operator'),
(12, 'MOCH. MANSUR', 'Operator8', 'Operator8', 'Operator'),
(13, 'MASBUKIN', 'Operator9', 'Operator9', 'Operator'),
(14, 'YULNATAN VIGANANTO', 'Operator10', 'Operator10', 'Operator'),
(15, 'MOH. AMRULLOH FAUZI', 'Operator11', 'Operator11', 'Operator'),
(17, 'SOEHARDIANI', 'Kasi1', 'Kasi1', 'Kasi'),
(18, 'SUTJIATI', 'Kasi2', 'Kasi2', 'Kasi'),
(19, 'SUSANA EKA JAYANTI', 'Kabid1', 'Kabid1', 'Kabid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pindah`
--

INSERT INTO `tb_pindah` (`id_pindah`, `id_pdd`, `tgl_pindah`, `alasan`) VALUES
(5, 24, '2021-09-09', 'Pindah Rumah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bagian` enum('Petugas','Operator','Kasi','Kabid','Kepala Dinas','Pelayanan','Arsip') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `verif_dokumen`
--

CREATE TABLE `verif_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_kendali` int(11) NOT NULL,
  `doc1` varchar(1) NOT NULL,
  `doc2` varchar(1) NOT NULL,
  `doc3` varchar(1) NOT NULL,
  `doc4` varchar(1) NOT NULL,
  `doc5` varchar(1) NOT NULL,
  `doc6` varchar(1) NOT NULL,
  `doc7` varchar(1) NOT NULL,
  `doc8` varchar(1) NOT NULL,
  `doc9` varchar(1) NOT NULL,
  `doc10` varchar(1) NOT NULL,
  `doc11` varchar(1) NOT NULL,
  `doc12` varchar(1) NOT NULL,
  `doc13` varchar(1) NOT NULL,
  `doc14` varchar(1) NOT NULL,
  `doc15` varchar(1) NOT NULL,
  `doc16` varchar(1) NOT NULL,
  `doc17` varchar(1) NOT NULL,
  `doc18` varchar(1) NOT NULL,
  `doc19` varchar(1) NOT NULL,
  `doc20` varchar(1) NOT NULL,
  `doc21` varchar(1) NOT NULL,
  `doc22` varchar(1) NOT NULL,
  `doc23` varchar(1) NOT NULL,
  `doc24` varchar(1) NOT NULL,
  `doc25` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `verif_dokumen`
--

INSERT INTO `verif_dokumen` (`id_dokumen`, `id_kendali`, `doc1`, `doc2`, `doc3`, `doc4`, `doc5`, `doc6`, `doc7`, `doc8`, `doc9`, `doc10`, `doc11`, `doc12`, `doc13`, `doc14`, `doc15`, `doc16`, `doc17`, `doc18`, `doc19`, `doc20`, `doc21`, `doc22`, `doc23`, `doc24`, `doc25`) VALUES
(3, 24, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 25, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 26, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 27, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 28, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 29, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 30, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 31, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 32, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 34, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 35, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 36, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 37, '', 'Y', '', '', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 38, '', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_kec`
--
ALTER TABLE `master_kec`
  ADD PRIMARY KEY (`kode_kec`);

--
-- Indeks untuk tabel `master_kel`
--
ALTER TABLE `master_kel`
  ADD PRIMARY KEY (`kode_kel`);

--
-- Indeks untuk tabel `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `tabel_pengurusan`
--
ALTER TABLE `tabel_pengurusan`
  ADD PRIMARY KEY (`id_pengurusan`);

--
-- Indeks untuk tabel `tabel_syaratpengurusan`
--
ALTER TABLE `tabel_syaratpengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_verifikasi`
--
ALTER TABLE `tabel_verifikasi`
  ADD PRIMARY KEY (`id_kendali`);

--
-- Indeks untuk tabel `tabel_verif_dokumen`
--
ALTER TABLE `tabel_verif_dokumen`
  ADD PRIMARY KEY (`id_kendali`);

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indeks untuk tabel `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indeks untuk tabel `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indeks untuk tabel `tb_pdd`
--
ALTER TABLE `tb_pdd`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_verifikasi`
--
ALTER TABLE `tabel_verifikasi`
  MODIFY `id_kendali` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_datang`
--
ALTER TABLE `tb_datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_lahir`
--
ALTER TABLE `tb_lahir`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_mendu`
--
ALTER TABLE `tb_mendu`
  MODIFY `id_mendu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pdd`
--
ALTER TABLE `tb_pdd`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD CONSTRAINT `tb_datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD CONSTRAINT `tb_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD CONSTRAINT `tb_mendu_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD CONSTRAINT `tb_pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
