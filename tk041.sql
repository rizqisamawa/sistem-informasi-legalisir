-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 03.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk041`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta`
--

CREATE TABLE `akta` (
  `id` int(11) NOT NULL,
  `id_ak` int(11) NOT NULL,
  `no_akta` varchar(255) NOT NULL,
  `anak_ke` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akta`
--

INSERT INTO `akta` (`id`, `id_ak`, `no_akta`, `anak_ke`, `created_at`, `updated_at`) VALUES
(1, 1, '140474/D/2011', '3', '2020-09-26 06:54:58', NULL),
(2, 2, '120370/D/2012', '1', '2020-09-26 06:54:58', NULL),
(3, 3, '160360/D/2013', '1', '2020-09-26 06:54:58', NULL),
(4, 4, '120460/A/2014', '1', '2020-09-26 06:54:58', NULL),
(5, 5, '120461/A/2014', '2', '2020-09-26 06:54:58', NULL),
(6, 6, '120462/A/2014', '1', '2020-09-26 06:54:58', NULL),
(7, 7, '110330/B/2014', '3', '2020-09-26 06:54:58', NULL),
(8, 8, '110331/B/2014', '3', '2020-09-26 06:54:58', NULL),
(9, 9, '110332/B/2014', '1', '2020-09-26 06:54:58', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_ak` int(11) NOT NULL,
  `kk_id` int(11) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `goldarah` varchar(255) NOT NULL,
  `stskawin` varchar(255) NOT NULL,
  `tglkawin` varchar(255) NOT NULL,
  `stskeluarga` varchar(255) NOT NULL,
  `warga` varchar(255) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_ak`, `kk_id`, `NIK`, `nama`, `kelamin`, `ttl`, `agama`, `pendidikan`, `pekerjaan`, `goldarah`, `stskawin`, `tglkawin`, `stskeluarga`, `warga`, `ayah`, `ibu`, `created_at`, `updated_at`) VALUES
(1, 1, '3525100307680001', 'SUWANDI', 'LAKI-LAKI', 'GRESIK,03-07-1968', 'ISLAM', 'SLTA/DERAJAT', 'KARYAWAN SWASTA', 'O', 'KAWIN BELUM TERCATAT', '-', 'KEPALA KELUARGA', 'WNI', 'TAMBAK', 'SARTI', '2020-09-26 06:53:53', '2020-09-26 07:00:25'),
(2, 1, '3525106312740005', 'ANIK PURWANTI', 'PEREMPUAN', 'PASURUAN,23-12-1974', 'ISLAM', 'SLTA/DERAJAT', 'MENGURUS RUMAH TANGGA', '-', 'KAWIN BELUM TERCATAT', '-', 'ISTRI', 'WNI', 'MUJIAMAN', 'SULIK', '2020-09-26 06:53:53', NULL),
(3, 1, '3525101106990003', 'MUHAMMAD RIZQI SAMAWA', 'LAKI-LAKI', 'GRESIK,11-06-1999', 'ISLAM', 'SLTP/DERAJAT', 'PELAJAR/MAHASISWA', 'O', '-', '-', 'ANAK', 'WNI', 'SUWANDI', 'ANIK PURWANTI', '2020-09-26 06:53:53', NULL),
(4, 2, '3525100307460001', 'SUPRIONO', 'LAKI-LAKI', 'GRESIK,10-10-1970', 'ISLAM', 'SLTP/DERAJAT', 'KARYAWAN SWASTA', 'A', 'KAWIN BELUM TERCATAT', '-', 'KEPALA KELUARGA', 'WNI', 'PETRUK', 'LOPTEY', '2020-09-26 06:53:53', NULL),
(5, 2, '3525100307460002', 'DELISYAH', 'PEREMPUAN', 'GRESIK,10-10-1972', 'ISLAM', 'SLTP/DERAJAT', 'GURU', 'B', 'KAWIN BELUM TERCATAT', '-', 'ISTRI', 'WNI', 'DEMI', 'DEWI', '2020-09-26 06:53:53', NULL),
(6, 2, '3525100307460003', 'REVITA PARAMITA PUTRI', 'PEREMPUAN', 'GRESIK,19-02-1999', 'ISLAM', 'SLTP/DERAJAT', 'PELAJAR/MAHASISWA', 'A', '-', '-', 'ANAK', 'WNI', 'SUPRIONO', 'DELISYAH', '2020-09-26 06:53:53', NULL),
(7, 3, '3525100304220001', 'SUBAGYO', 'LAKI-LAKI', 'GRESIK,06-02-1980', 'ISLAM', 'SLTP/DERAJAT', 'KARYAWAN SWASTA', 'O', 'KAWIN BELUM TERCATAT', '-', 'KEPALA KELUARGA', 'WNI', 'EDEN', 'PATRYANA', '2020-09-26 06:53:53', NULL),
(8, 3, '3525100304220002', 'NANA', 'PEREMPUAN', 'BANDUNG,22-02-1984', 'ISLAM', 'SLTP/DERAJAT', 'MENGURUS RUMAH TANGGA', 'A', 'KAWIN BELUM TERCATAT', '-', 'ISTRI', 'WNI', 'DAVID', 'LUJENG', '2020-09-26 06:53:53', NULL),
(9, 3, '3525100304220003', 'LIDA PUTRI NAMARWA', 'PEREMPUAN', 'GRESIK,11-12-1999', 'ISLAM', 'SLTP/DERAJAT', 'PELAJAR/MAHASISWA', 'A', '-', '-', 'ANAK', 'WNI', 'SUBAGYO', 'NANA', '2020-09-26 06:53:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nohp` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `nama`, `jenis`, `ns`, `keperluan`, `alamat`, `tanggal`, `nohp`, `created_at`, `updated_at`) VALUES
(1, 'MUHAMMAD RIZQI SAMAWA', 'KTP', '3525101106990003', 'Daftar TNI', 'Pongangan Rejo', '2020-09-16', '087744420037', '2020-09-15 21:21:42', '2020-09-24 02:33:14'),
(2, 'SUPRIONO', 'KK', '3525101211086222', 'Mengurus Tanah', 'PONGANGAN KRAJAN', '2020-09-16', '087799920037', '2020-09-15 21:24:25', '2020-09-24 02:32:59'),
(3, 'SUPRIONO', 'AKTA', '120460/A/2014', 'Mengurus Tanah', 'PONGANGAN KRAJAN', '2020-09-18', '087744426661', '2020-09-18 04:20:59', '2020-09-18 04:20:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
--

CREATE TABLE `kk` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_kk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`id`, `no_kk`, `nama_kk`, `alamat`, `rtrw`, `kodepos`, `desa`, `kecamatan`, `kota`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, '3525101211086111', 'SUWANDI', 'PONGANGAN REJO', '001/003', '61151', 'PONGANGAN', 'MANYAR', 'GRESIK', 'JAWA TIMUR', '2020-09-26 06:53:19', NULL),
(2, '3525101211086222', 'SUPRIONO', 'PONGANGAN KRAJAN', '002/004', '61241', 'PONGANGAN', 'MANYAR', 'GRESIK', 'JAWA TIMUR', '2020-09-26 06:53:19', NULL),
(3, '3525101211086333', 'SUBAGYO', 'PONGANGAN INDAH', '002/004', '61231', 'PONGANGAN', 'MANYAR', 'GRESIK', 'JAWA TIMUR', '2020-09-26 06:53:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id` int(11) NOT NULL,
  `namac` varchar(255) NOT NULL,
  `namap` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `namac`, `namap`, `keterangan`, `komentar`, `status`, `created_at`, `updated_at`) VALUES
(2, 'cek', 'Robin', 'KK 17', 'Berkas Siap Diarsipkan', 'SELESAI', '2020-10-23 09:49:00', '2020-10-25 20:04:00'),
(3, 'cek', 'Nami', 'KTP 17', '', 'PROSES', '2020-10-24 00:56:46', '2020-10-24 07:56:46'),
(4, 'cek', 'rizqi', 'ktp,kk,akta', 'selesai', 'SELESAI', '2020-11-03 23:55:33', '2020-11-04 06:56:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `id_ak` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `berlaku` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`id`, `id_ak`, `alamat`, `berlaku`, `created_at`, `updated_at`) VALUES
(1, 1, 'PONGANGAN REJO', 'SEUMUR HIDUP', NULL, '2020-09-26 06:56:36'),
(2, 2, 'PONGANGAN REJO', 'SEUMUR HIDUP', NULL, NULL),
(3, 3, 'PONGANGAN REJO', 'SEUMUR HIDUP', NULL, NULL),
(4, 4, 'PERUM PETRO', 'SEUMUR HIDUP', NULL, NULL),
(5, 5, 'PERUM PETRO', 'SEUMUR HIDUP', NULL, NULL),
(6, 6, 'PERUM PETRO', 'SEUMUR HIDUP', NULL, NULL),
(7, 7, 'BUNDER', 'SEUMUR HIDUP', NULL, NULL),
(8, 8, 'BUNDER', 'SEUMUR HIDUP', NULL, NULL),
(9, 9, 'BUNDER', 'SEUMUR HIDUP', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_23_034241_create_arsip_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$BG0sJ1T2dE26m4xU.U51ruo.RTU4.IUGWoE8E0gKSFr9LTLP/LoFm', '9YCrVpozkAdM72MJm3TgmbgoA822ZertITqSFbNmKF464PbrblRgtFHEGQ0R', '2020-09-15 21:03:16', '2020-09-15 21:03:16'),
(6, 'arsip', 'arsip', 'arsip@gmail.com', NULL, '$2y$10$axeYpK9G3UgP64p7FoD98OdmCpvV.hhosbnSsnZg.PHvITMBxmIyu', NULL, '2020-10-21 01:23:50', '2020-10-21 01:23:50'),
(8, 'cek', 'cek', 'cek@gmail.com', NULL, '$2y$10$mT2trEvOZvpvyglvt5EtQeO7bLTFYUDt6baKZXev66iG8WOJYiXnK', NULL, '2020-10-21 01:25:05', '2020-10-21 01:25:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_ak`);

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta`
--
ALTER TABLE `akta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_ak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
