-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Mar 2024 pada 08.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bawon_auth`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `label`) VALUES
(14, 'direktur-utama', 'web', '2024-03-05 23:37:42', '2024-03-05 23:37:42', 'Direktur Utama'),
(15, 'direktur-umum', 'web', '2024-03-05 23:38:02', '2024-03-05 23:38:02', 'Direktur Umum & Kepatuhan'),
(16, 'pe', 'web', '2024-03-05 23:38:48', '2024-03-05 23:38:48', 'Pejabat Eksekutif'),
(17, 'pe-audit', 'web', '2024-03-05 23:40:53', '2024-03-05 23:40:53', 'PE AUDIT INTERN'),
(18, 'kadiv-operasional', 'web', '2024-03-05 23:41:29', '2024-03-05 23:41:29', 'Kepala Divisi Operasional'),
(19, 'kadiv-bisnis', 'web', '2024-03-05 23:41:53', '2024-03-05 23:41:53', 'Kepala Divisi Bisnis'),
(20, 'pengawas-audit', 'web', '2024-03-05 23:42:13', '2024-03-05 23:42:13', 'Pengawas Audit Intern'),
(21, 'kabag-sdm', 'web', '2024-03-05 23:42:51', '2024-03-05 23:42:51', 'Kabag Umum SDM IT'),
(22, 'kabag-analis', 'web', '2024-03-05 23:43:17', '2024-03-05 23:43:17', 'Kabag Analis'),
(23, 'kabag-administrasi', 'web', '2024-03-05 23:44:07', '2024-03-05 23:44:07', 'Kabag Administrasi Dan Akuntansi'),
(24, 'kabag-pelayanan', 'web', '2024-03-05 23:45:03', '2024-03-05 23:45:03', 'Kabag Pelayanan'),
(25, 'staf-apu-ppt', 'web', '2024-03-05 23:45:26', '2024-03-05 23:45:26', 'Staf APU PPT'),
(26, 'staf-kebutuhan', 'web', '2024-03-05 23:45:41', '2024-03-05 23:45:41', 'Staf Kebutuhan'),
(27, 'manager-area1', 'web', '2024-03-05 23:47:14', '2024-03-05 23:47:14', 'Manager Area Sukoharjo Leksono'),
(28, 'manager-area2', 'web', '2024-03-05 23:47:43', '2024-03-05 23:47:43', 'Manager Area Kalikajar Selomerto'),
(29, 'manager-area3', 'web', '2024-03-05 23:48:22', '2024-03-05 23:48:22', 'Manager Area Kepil Kalibawang'),
(30, 'manager-area4', 'web', '2024-03-05 23:49:31', '2024-03-05 23:49:31', 'Manager Area Kaliwiro Wadaslintang'),
(31, 'manager-area5', 'web', '2024-03-05 23:49:59', '2024-03-05 23:49:59', 'Manager Area Wonosobo Garung Kejajar'),
(32, 'manager-area6', 'web', '2024-03-05 23:50:26', '2024-03-05 23:50:26', 'Manager Area Mojotengah Watumalang'),
(33, 'marketing', 'web', '2024-03-05 23:50:48', '2024-03-05 23:50:48', 'Marketing'),
(34, 'cs-pusat', 'web', '2024-03-05 23:51:17', '2024-03-05 23:51:17', 'CS PUSAT'),
(35, 'teller-pusat', 'web', '2024-03-05 23:51:52', '2024-03-05 23:51:52', 'Teller Pusat'),
(36, 'kepala-kas', 'web', '2024-03-05 23:52:17', '2024-03-05 23:52:17', 'Kepala Kantor Kas'),
(37, 'teller-kas', 'web', '2024-03-05 23:52:34', '2024-03-05 23:52:34', 'Teller Kantor Kas'),
(38, 'administrasi-kredit', 'web', '2024-03-05 23:53:11', '2024-03-05 23:53:11', 'Administrasi Kredit'),
(39, 'akuntansi', 'web', '2024-03-05 23:53:23', '2024-03-05 23:53:23', 'Akuntansi'),
(40, 'administrasi-legal', 'web', '2024-03-05 23:53:46', '2024-03-05 23:53:46', 'Administrasi Legal Kredit'),
(41, 'administrasi-berkas', 'web', '2024-03-05 23:54:06', '2024-03-05 23:54:06', 'Administrasi Berkas Kredit'),
(42, 'analis-kredit', 'web', '2024-03-05 23:54:20', '2024-03-05 23:54:20', 'Analis Kredit'),
(43, 'staf-umum', 'web', '2024-03-05 23:54:30', '2024-03-05 23:54:30', 'Staf Umum'),
(44, 'staf-it', 'web', '2024-03-05 23:54:41', '2024-03-05 23:54:41', 'Staf IT'),
(45, 'sopir', 'web', '2024-03-05 23:54:50', '2024-03-05 23:54:50', 'Sopir'),
(46, 'ob', 'web', '2024-03-05 23:54:56', '2024-03-05 23:54:56', 'OB'),
(47, 'satpam', 'web', '2024-03-05 23:55:04', '2024-03-05 23:55:04', 'Satpam'),
(48, 'developer', 'web', '2024-03-06 00:01:37', '2024-03-06 00:01:37', 'Developer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
