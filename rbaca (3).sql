-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 09.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbaca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telp_anggota` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `no_telp_anggota`, `alamat`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'beni suryadi', 'L', '0123', 'bjn', '2020-12-18 04:15:43', '2020-10-23 07:45:12', NULL),
(2, 'Arum', 'P', '0123456', 'jalan panglima polim perumda blok z no 9', '2020-10-28 14:35:50', '2020-10-27 11:27:28', NULL),
(3, 'Regita Rahma', 'P', '0987867', 'Mojokerto', '2020-10-27 11:27:51', '2020-10-27 11:27:47', '2020-10-27 04:27:51'),
(4, 'Regita Rahma', 'P', '0897654', 'Mojokerto', '2020-10-28 14:35:34', '2020-10-28 14:35:34', NULL),
(5, 'arum ii', 'L', '098786798', 'bjn', '2020-10-31 08:07:38', '2020-10-31 08:07:21', '2020-10-31 01:07:38'),
(6, 'kusuma arum', 'L', '09878679876', 'perumda', '2020-10-31 08:49:03', '2020-10-31 08:48:42', '2020-10-31 01:49:03'),
(7, 'soobin choi', 'L', '089765488', 'korea', '2020-10-31 09:12:40', '2020-10-31 09:12:14', '2020-10-31 02:12:40'),
(8, 'Kai Kamal', 'L', '089', 'Seoul', '2020-11-29 09:16:12', '2020-11-29 09:16:12', NULL),
(10, 'Soobin', 'L', '079', 'Seoul', '2020-11-29 09:23:21', '2020-11-29 09:23:21', NULL),
(12, 'MOa', 'L', '089', 'seoul', '2020-11-29 09:33:31', '2020-11-29 09:33:31', NULL),
(13, 'Lala', 'P', '019', 'Sidoarjo', '2020-11-29 10:14:00', '2020-11-29 10:14:00', NULL),
(14, 'Arummii', 'P', '0179', 'Bojonegoro', '2020-11-29 12:54:10', '2020-11-29 12:54:10', NULL),
(15, 'yeonjun', 'L', '089787', 'seoul', '2020-12-02 03:14:10', '2020-12-02 03:14:10', NULL),
(16, 'Kai Kamal Huening', 'L', '0897867', 'Seoul', '2020-12-05 13:04:35', '2020-12-05 13:04:35', NULL),
(17, 'Ratna', 'P', '087677675', 'Surabaya', '2020-12-09 13:21:00', '2020-12-09 13:21:00', NULL),
(20, 'pita', 'P', '0976', 'bjn', '2020-12-09 06:37:44', '2020-12-09 06:37:44', NULL),
(22, 'Lila', 'P', '08987', 'Bojonegoro', '2020-12-16 01:53:40', '2020-12-16 01:53:40', NULL),
(23, 'opik', 'L', '078786', 'Malang', '2020-12-16 01:57:07', '2020-12-16 01:57:07', NULL),
(24, 'kusuma', 'P', '688687', 'Bojonegoro', '2020-12-16 02:25:56', '2020-12-16 02:25:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` char(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis_buku`, `penerbit`, `tahun_terbit`, `stok`, `id_rak`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'SEMANGAT BARU', 'ARUM', 'BINTANG', '2019', 12, 6, '2020-10-24 01:14:55', '2020-10-23 15:28:49', NULL),
(2, 'New Life', 'Hana', 'Bintang Terang', '2019', 10, 6, '2020-11-27 15:45:10', '2020-10-28 14:36:27', NULL),
(3, 'Rentang Kisah', 'Gita Savitri', 'Mizan', '2019', 12, 7, '2020-10-31 03:27:26', '2020-10-31 03:27:26', NULL),
(4, 'Cinta Suci', 'Putri', 'Bintang Terang', '2019', 13, 6, '2020-10-31 08:13:03', '2020-10-31 08:12:38', '2020-10-31 01:13:03'),
(5, 'Harry Potter', 'ARUM JATI', 'Bintang Terang', '2012', 10, 6, '2020-10-31 08:51:16', '2020-10-31 08:50:50', '2020-10-31 01:51:16'),
(6, 'upin ipin durian runtuh', 'adas', 'BINTANG', '2020', 10, 7, '2020-10-31 09:14:41', '2020-10-31 09:14:16', '2020-10-31 02:14:41'),
(7, 'Cara Menghitung Gaya Gravitasi Bumi', 'Isac Newton', 'Gramedia', '2019', 10, 7, '2020-11-27 15:44:55', '2020-11-27 15:44:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2020_10_28_144828_create_users_table', 1),
(2, '2020_10_28_144845_create_password_resets_table', 1),
(3, '2020_10_28_144909_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `status_pinjam` tinyint(1) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `id_anggota`, `id_buku`, `id_petugas`, `status_pinjam`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, '2020-10-22', '2020-10-24', 1, 1, 1, 0, '2020-10-24 20:03:39', '2020-10-24 20:03:39', NULL),
(2, '2020-10-26', '2020-10-29', 2, 2, 2, 0, '2020-10-25 11:59:17', '2020-10-25 11:59:17', NULL),
(3, '2020-10-26', '2020-10-30', 1, 1, 1, 0, '2020-10-27 10:08:29', '2020-10-27 10:08:29', '2020-10-30 04:46:59'),
(4, '2020-10-29', '2020-11-05', 4, 3, 3, 0, '2020-10-31 15:42:02', '2020-10-31 15:42:02', '2020-10-31 01:43:50'),
(5, '2020-10-27', '2020-10-31', 4, 3, 1, 0, '2020-10-31 15:53:12', '2020-10-31 15:53:12', '2020-10-31 01:53:54'),
(6, '2020-10-27', '2020-10-31', 2, 2, 3, 0, '2020-10-31 16:16:30', '2020-10-31 16:16:30', '2020-10-31 02:17:03'),
(7, '2020-12-23', '2020-12-30', 8, 7, 8, 1, '2020-12-23 10:51:27', '2020-12-23 10:51:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tanggal_pengembalian`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 1, '2020-10-24', '2020-10-24 04:09:31', '2020-10-24 04:09:31', NULL),
(2, 2, '2020-10-29', '2020-10-31 08:44:52', '2020-10-31 08:44:32', '2020-10-31 01:44:52'),
(3, 3, '2020-10-31', '2020-10-31 08:54:57', '2020-10-31 08:54:32', '2020-10-31 01:54:57'),
(4, 4, '2020-10-31', '2020-10-31 09:18:11', '2020-10-31 09:17:48', '2020-10-31 02:18:11'),
(5, 7, '2020-12-23', '2020-12-23 04:16:40', '2020-12-23 04:16:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_telp_petugas` varchar(13) NOT NULL,
  `alamat_petugas` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jabatan`, `no_telp_petugas`, `alamat_petugas`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Arum Jati', 'Pustakwan I', '09876', 'Mojokerto', '2020-10-24 01:08:49', '2020-10-23 06:09:49', NULL),
(2, 'Gita', 'Kepala Perpus', '0876543456', 'Mojokerto', '2020-10-28 14:36:11', '2020-10-28 14:36:03', NULL),
(3, 'Rahma', 'Pustakwan', '0876543', 'Mojokerto', '2020-10-30 11:39:24', '2020-10-30 11:39:24', NULL),
(4, 'Gita', 'Pustakwan I', '0876543', 'Mojokerto', '2020-10-30 11:46:32', '2020-10-30 11:42:48', '2020-10-30 04:46:32'),
(5, 'Rahmawati', 'Pustakwan', '0876543456', 'Mojokerto', '2020-10-31 08:11:41', '2020-10-31 08:11:13', '2020-10-31 01:11:41'),
(6, 'daniel', 'Kepala Perpus', '0876543456', 'Mojokerto kab', '2020-10-31 08:50:02', '2020-10-31 08:49:38', '2020-10-31 01:50:02'),
(7, 'yohan kim', 'Kepala Perpus', '0876543456', 'korea', '2020-10-31 09:13:35', '2020-10-31 09:13:13', '2020-10-31 02:13:35'),
(8, 'rima', 'Pustakwan', '0876543456', 'Mojokerto', '2020-12-20 08:05:05', '2020-12-20 08:05:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(50) DEFAULT NULL,
  `lokasi_rak` varchar(50) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`, `lokasi_rak`, `updated_at`, `created_at`, `deleted_at`) VALUES
(6, 'Enslikopedia', 'Timur', '2020-11-27 21:39:58', '2020-11-27 21:39:58', NULL),
(7, 'Science', 'Barat', '2020-11-27 21:40:57', '2020-11-27 21:40:57', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nama_roles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'petugas'),
(2, 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `roles`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anggota', 'Kusuma Arum Jati', 'kusuma@gmail.com', NULL, '$2y$10$b7c0MOUJV8IaYtU9US/QduvuZ6kdvrKwpOlAtBaBzuu371OC8o76q', NULL, '2020-12-17 20:47:43', '2020-12-17 20:47:43'),
(4, 'anggota', 'Regita Rahma', 'regita@gmail.com', NULL, '$2y$10$wVdz5h4PV7AqUjqNilzxU.XmCywxJfJx8O27UNDiQIVv0Ux3dwPze', NULL, '2020-12-18 03:47:43', '2020-12-18 03:47:43'),
(5, 'petugas', 'rima', 'rima@gmail.com', NULL, '$2y$10$vJL8MXyVXb0HzQVOIKnI7Opwdn8Qarr5/eViDKayuL.68RExO5GC2', NULL, '2020-12-18 03:49:48', '2020-12-18 03:49:48'),
(6, 'anggota', 'Charista Gabyla', 'geboy@gmail.com', NULL, '$2y$10$vPQvv9m8gRkvpcT5d.c9muMaAAx9MR5vb22/djilBBy5wfVT5wyKC', NULL, '2020-12-19 05:54:45', '2020-12-19 05:54:45'),
(7, 'anggota', 'Choi Yeonjun', 'yeonjun@gmail.com', NULL, '$2y$10$FfgXVHHe3OX1SeNeuKYczOnuzBifeQnJI0aNaalyM5zkeEqB.0s0.', NULL, '2020-12-19 06:50:57', '2020-12-19 06:50:57'),
(8, 'petugas', 'Gita', 'gita@gmail.com', NULL, '$2y$10$WagGzUqsHMHaykJi8vzu8OhDktxVJ69tpSIuA7kTuc1PnFp/WzDJe', NULL, '2020-12-19 07:31:42', '2020-12-19 07:31:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

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
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `id_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `id_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
