-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2020 pada 04.09
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jajalv3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambars`
--

INSERT INTO `gambars` (`id`, `user_id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, '1579344489_asal-mula-meme_02.jpg', 'admin', '2020-01-18 03:48:09', '2020-01-18 03:48:09'),
(6, 3, '1580010174_IMG_20190626_120144.jpg', 'M Faisal Asrozy', '2020-01-25 20:42:54', '2020-01-25 20:42:54'),
(7, 1, '1580110372+bukti+IMG-20191108-WA0008.jpg', '5+bukti+M Faisal Asrozy', '2020-01-27 00:32:53', '2020-01-27 00:32:53'),
(8, 3, '1580111427sg.png', '5', '2020-01-27 00:50:27', '2020-01-27 00:50:27'),
(9, 3, '1580116059760253130p.jpg', '7', '2020-01-27 02:07:39', '2020-01-27 02:07:39'),
(10, 3, '1580116501_bukti_1.JPG', '2', '2020-01-27 02:15:01', '2020-01-27 02:15:01'),
(12, 5, '1580705602_24-512.png', 'Irfan Amrizal Pribadi', '2020-02-02 21:53:22', '2020-02-02 21:53:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopembayarans`
--

CREATE TABLE `infopembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jenispembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `membayar` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyetor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infopembayarans`
--

INSERT INTO `infopembayarans` (`id`, `user_id`, `jenispembayaran_id`, `membayar`, `penyetor`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '10000', 'M Faisal Asrozy', '2020-01-27 00:50:27', '2020-01-27 00:50:27'),
(3, 3, 2, '4000', 'M Faisal Asrozy', '2020-01-27 02:15:01', '2020-01-27 02:15:01'),
(5, 3, 3, '10000', 'M Faisal Asrozy', '2020-01-28 20:44:21', '2020-01-28 20:44:21'),
(7, 5, 2, '400000', 'Irfan Amrizal Pribadi', '2020-02-02 21:55:59', '2020-02-02 21:55:59'),
(8, 5, 5, '1000000', 'Irfan Amrizal Pribadi', '2020-02-03 19:57:01', '2020-02-03 19:57:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispembayaran`
--

CREATE TABLE `jenispembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenispembayaran` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalpembayaran` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenispembayaran`
--

INSERT INTO `jenispembayaran` (`id`, `jenispembayaran`, `totalpembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Pendaftaran', '600000', '2020-01-18 17:00:00', '2020-01-18 17:00:00'),
(2, 'Regristrasi Awal', '800000', '2020-01-18 17:00:00', '2020-01-18 17:00:00'),
(3, 'Her-Regristrasi Semester', '150000', '2020-01-18 17:00:00', '2020-01-19 01:28:43'),
(4, 'SPP Semester', '2000000', '2020-01-18 17:00:00', '2020-01-18 17:00:00'),
(5, 'DPP', '3500000', '2020-01-18 17:00:00', '2020-01-18 17:00:00'),
(6, 'UAS', '100000', '2020-01-18 17:00:00', '2020-01-18 17:00:00'),
(7, 'Biaya SKS', '5000', '2020-01-18 17:00:00', '2020-01-18 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_05_023947_create_gambars_table', 1),
(5, '2020_01_18_082509_create_jenispembayaran_table', 1),
(10, '2020_01_18_083110_create_infopembayarans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `kelas`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '000000000', 'VIP', 'admin@admin.com', 1, NULL, '$2y$10$HrbuX1Vla.MxAJDjzFVV5O2MTMngM2e5AKPZt0Ukb3JZRalOBeUUm', NULL, '2020-01-18 03:47:17', '2020-01-18 03:47:17'),
(3, 'M Faisal Asrozy', '17104410056', 'Teknik Informatika B', 'faisalasrozy@gmail.com', 0, NULL, '$2y$10$avMH1gbr1pBp2S.bC9h/yuUo0RxOprAKCAZqd7plV0H8ANHJ6ikSK', NULL, '2020-01-25 20:42:54', '2020-01-25 20:42:54'),
(5, 'Irfan Amrizal Pribadi', '17104410064', 'Teknik Informatika B', 'pribadii241@gmail.com', 0, NULL, '$2y$10$aULbnc0p9dCU6ZSzVvjW3.s4yTZ2AOy8wwTfcA/tpvL1nWxUBuun6', NULL, '2020-02-02 21:53:22', '2020-02-02 21:53:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambars_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `infopembayarans`
--
ALTER TABLE `infopembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infopembayarans_user_id_foreign` (`user_id`),
  ADD KEY `infopembayarans_jenispembayaran_id_foreign` (`jenispembayaran_id`);

--
-- Indeks untuk tabel `jenispembayaran`
--
ALTER TABLE `jenispembayaran`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `infopembayarans`
--
ALTER TABLE `infopembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jenispembayaran`
--
ALTER TABLE `jenispembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD CONSTRAINT `gambars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `infopembayarans`
--
ALTER TABLE `infopembayarans`
  ADD CONSTRAINT `infopembayarans_jenispembayaran_id_foreign` FOREIGN KEY (`jenispembayaran_id`) REFERENCES `jenispembayaran` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `infopembayarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
