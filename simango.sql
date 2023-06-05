-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 12.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simango`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejalas`
--

INSERT INTO `gejalas` (`id`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(4, 'Terdapat benang-benang jamur  berwarna putih kotor pada  batang?', '2023-06-05 02:18:36', '2023-06-05 02:18:36'),
(5, 'Batang terlihat mengelupas?', '2023-06-05 02:18:50', '2023-06-05 02:18:50'),
(6, 'Saat ini sedang musim hujan?', '2023-06-05 02:19:06', '2023-06-05 02:19:06'),
(7, 'Terdapat binatang berwarna  kuning pada buah?', '2023-06-05 02:19:33', '2023-06-05 02:19:33'),
(8, 'Terdapat bintik hitam pada buah?', '2023-06-05 02:19:56', '2023-06-05 02:19:56'),
(9, 'Daging buah mangga busuk?', '2023-06-05 02:20:18', '2023-06-05 02:20:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_hama`
--

CREATE TABLE `gejala_hama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hama_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala_hama`
--

INSERT INTO `gejala_hama` (`id`, `hama_id`, `gejala_id`, `created_at`, `updated_at`) VALUES
(3, 2, 7, '2023-06-05 02:25:33', '2023-06-05 02:25:33'),
(4, 2, 8, '2023-06-05 02:25:33', '2023-06-05 02:25:33'),
(5, 2, 9, '2023-06-05 02:25:33', '2023-06-05 02:25:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_hasil`
--

CREATE TABLE `gejala_hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hasil_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala_hasil`
--

INSERT INTO `gejala_hasil` (`id`, `hasil_id`, `gejala_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2023-06-05 02:26:08', '2023-06-05 02:26:08'),
(2, 1, 5, '2023-06-05 02:26:08', '2023-06-05 02:26:08'),
(3, 1, 6, '2023-06-05 02:26:08', '2023-06-05 02:26:08'),
(4, 2, 5, '2023-06-05 02:28:51', '2023-06-05 02:28:51'),
(5, 2, 6, '2023-06-05 02:28:51', '2023-06-05 02:28:51'),
(6, 2, 8, '2023-06-05 02:28:51', '2023-06-05 02:28:51'),
(7, 3, 6, '2023-06-05 02:29:10', '2023-06-05 02:29:10'),
(8, 3, 7, '2023-06-05 02:29:10', '2023-06-05 02:29:10'),
(9, 3, 8, '2023-06-05 02:29:10', '2023-06-05 02:29:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_hasil_hama`
--

CREATE TABLE `gejala_hasil_hama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hasil_hama_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala_hasil_hama`
--

INSERT INTO `gejala_hasil_hama` (`id`, `hasil_hama_id`, `gejala_id`, `created_at`, `updated_at`) VALUES
(3, 2, 7, '2023-06-05 02:26:19', '2023-06-05 02:26:19'),
(4, 2, 8, '2023-06-05 02:26:19', '2023-06-05 02:26:19'),
(5, 2, 9, '2023-06-05 02:26:19', '2023-06-05 02:26:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `penyakit_id`, `gejala_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '2023-06-05 02:20:47', '2023-06-05 02:20:47'),
(2, 2, 5, '2023-06-05 02:20:47', '2023-06-05 02:20:47'),
(3, 2, 6, '2023-06-05 02:20:47', '2023-06-05 02:20:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hamas`
--

CREATE TABLE `hamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_hama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi_hama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_obat` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hamas`
--

INSERT INTO `hamas` (`id`, `nama_hama`, `foto_hama`, `deskripsi_hama`, `solusi_hama`, `kode_obat`, `created_at`, `updated_at`) VALUES
(2, 'Lalat Buah (Dacus Dorsalis)', '230605092511.lalatbuah.jpg', 'Lalat buah merupakan spesies lalat buah dari daerah tropika. Lalat buah dari daerah tropika sebelumnya diidentifikasi sebagai Genus Dacus, kemudian diketahui merupakan kekeliruan identifikasi dari genus Bactrocera. Genus Dacus merupakan asli spesies dari Afrika dan biasanya berasosiasi dengan bunga dan buah dari jenis tanaman cucurbits (Cucurbitaceae) dan kulit buah tanaman kacang-kacangan.', 'pada penelitiannya lalat buah bisa di kendalikan dengan senyawa METIL EUGENOL. yang di dapatkan dari hasil sulingan daun cengkeh, selasih, kemangi, kayu manis, pala dll. Senyawa METIL EUGENOL juga efektif dalam penanggulangan hama tersebut.', 3, '2023-06-05 02:21:27', '2023-06-05 02:25:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasils`
--

CREATE TABLE `hasils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasils`
--

INSERT INTO `hasils` (`id`, `datetime`, `penyakit_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2023-06-05 09:26:08', 2, 3, '2023-06-05 02:26:08', '2023-06-05 02:26:08'),
(2, '2023-06-05 09:28:51', 2, 3, '2023-06-05 02:28:51', '2023-06-05 02:28:51'),
(3, '2023-06-05 09:29:10', 2, 3, '2023-06-05 02:29:10', '2023-06-05 02:29:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_hama`
--

CREATE TABLE `hasil_hama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `hama_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_hama`
--

INSERT INTO `hasil_hama` (`id`, `datetime`, `hama_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2023-06-05 09:26:19', 2, 3, '2023-06-05 02:26:19', '2023-06-05 02:26:19');

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
(1, '2014_04_03_064917_create_roles_table', 1),
(2, '2014_04_03_165506_create_obats_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_03_03_062846_create_penyakits_table', 1),
(8, '2023_03_03_062911_create_gejalas_table', 1),
(9, '2023_03_03_062924_create_hamas_table', 1),
(10, '2023_04_02_121738_gejala_penykait', 1),
(11, '2023_04_02_140932_gejala_hama', 1),
(12, '2023_04_03_062959_create_hasils_table', 1),
(13, '2023_06_04_045016_hasil_hama', 1),
(14, '2023_06_05_013030_gejala_hasil', 1),
(15, '2023_06_05_044845_gejala_hasil_hama', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_obat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `deskripsi_obat`, `harga_obat`, `created_at`, `updated_at`) VALUES
(2, 'Agrotop 350SC', 'merupakan fungisida sistemik dan zat pengatur tumbuh berbentuk pekatan yang larut dalam air berwarna kuning muda untuk mengendalikan penyakit', '230000', '2023-06-05 02:12:29', '2023-06-05 02:13:11'),
(3, 'BIOWASIL', 'BIOWASIL Adalah Pestisida Nabati yang dirancang untuk mengatasi BERBAGAI HAMA TANAMAN, baik itu hama pada tanaman hortikultura (seperti padi, cabe, paprika, tomat, selada, causin, sawi, brokoli, brungkol, phakcoy, mentimun, terong, kentang, ubi, dll.), tanaman buah (alpukat, rambutan, durian, jeruk, apel, buah naga, dll), tanaman keras (alba, jabon, jati, suren, dll.), tanaman perkebunan (teh, kopi, sawit, lada, tembakau, kakau, dll.) tanaman hisa/bunga, atau tanaman lainnya.', '50000', '2023-06-05 02:24:57', '2023-06-05 02:24:57');

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
-- Struktur dari tabel `penyakits`
--

CREATE TABLE `penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_obat` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakits`
--

INSERT INTO `penyakits` (`id`, `nama_penyakit`, `foto_penyakit`, `deskripsi_penyakit`, `solusi_penyakit`, `kode_obat`, `created_at`, `updated_at`) VALUES
(2, 'Busuk Akar (Rigidoporus Microporus)', '230605091249.akar_busuk.png', 'Penyakit ini menyerang permukaan akar. Permukaan akar akan berwarnahitam, pada permukaan akar terdapat benang-benang jamur berwarna putih kotor kemudian leher akar mengelupas kemudian akar busuk. Penyakit ini dapat menyebabkan kematian pada tanaman. Penyakit ini sering dijumpai pada saat musim hujan.', 'Kultur TeknisDengan membersihkan sisa tanaman (tunggul) dengan cara mekanis atau peracunan dan dengan cara menanam tanaman antagonis seperti : lidah mertua, kunyit, lengkuas, kencur, lempuyang, sambiloto dll, tanaman antagonis adalah tanaman yang ada disekitar kita dapat digunakan sebagai pencegahan/pengendalian JAP.', 2, '2023-06-05 02:11:15', '2023-06-05 02:20:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` enum('Admin','Pakar','pengguna') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-06-04 23:17:21', '2023-06-04 23:17:21'),
(2, 'Pakar', '2023-06-04 23:17:21', '2023-06-04 23:17:21'),
(3, 'pengguna', '2023-06-04 23:17:21', '2023-06-04 23:17:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `pekerjaan`, `telp`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Admin', '+62', '$2y$10$JNZY2Z8S2DDWWuwXMZAGY.Yc6/nV/U0Az/qlBI.T6XmAZpUbABwJa', 1, '2023-06-04 23:17:21', '2023-06-04 23:17:21'),
(2, 'Pakar', 'pakar@gmail.com', 'Pakar', '+62', '$2y$10$XZCbxkPBt2byZtU88guNFe9pTfxVJBBhbkP7HqElrvkmpjV8iUmO2', 2, '2023-06-04 23:17:21', '2023-06-04 23:17:21'),
(3, 'Pengguna', 'pengguna@gmail.com', 'Petani', '+62', '$2y$10$.672Zax6NpoFqXZzvISR5eHoQ64x4kUxtfwznZdR0jtUxWcj4D7sC', 3, '2023-06-04 23:17:21', '2023-06-04 23:17:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala_hama`
--
ALTER TABLE `gejala_hama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_hama_hama_id_foreign` (`hama_id`),
  ADD KEY `gejala_hama_gejala_id_foreign` (`gejala_id`);

--
-- Indeks untuk tabel `gejala_hasil`
--
ALTER TABLE `gejala_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_hasil_hasil_id_foreign` (`hasil_id`),
  ADD KEY `gejala_hasil_gejala_id_foreign` (`gejala_id`);

--
-- Indeks untuk tabel `gejala_hasil_hama`
--
ALTER TABLE `gejala_hasil_hama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_hasil_hama_hasil_hama_id_foreign` (`hasil_hama_id`),
  ADD KEY `gejala_hasil_hama_gejala_id_foreign` (`gejala_id`);

--
-- Indeks untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_penyakit_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `gejala_penyakit_gejala_id_foreign` (`gejala_id`);

--
-- Indeks untuk tabel `hamas`
--
ALTER TABLE `hamas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hamas_kode_obat_foreign` (`kode_obat`);

--
-- Indeks untuk tabel `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasils_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `hasils_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `hasil_hama`
--
ALTER TABLE `hasil_hama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_hama_hama_id_foreign` (`hama_id`),
  ADD KEY `hasil_hama_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakits_kode_obat_foreign` (`kode_obat`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `gejala_hama`
--
ALTER TABLE `gejala_hama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gejala_hasil`
--
ALTER TABLE `gejala_hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `gejala_hasil_hama`
--
ALTER TABLE `gejala_hasil_hama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hamas`
--
ALTER TABLE `hamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hasil_hama`
--
ALTER TABLE `hasil_hama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala_hama`
--
ALTER TABLE `gejala_hama`
  ADD CONSTRAINT `gejala_hama_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_hama_hama_id_foreign` FOREIGN KEY (`hama_id`) REFERENCES `hamas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_hasil`
--
ALTER TABLE `gejala_hasil`
  ADD CONSTRAINT `gejala_hasil_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_hasil_hasil_id_foreign` FOREIGN KEY (`hasil_id`) REFERENCES `hasils` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_hasil_hama`
--
ALTER TABLE `gejala_hasil_hama`
  ADD CONSTRAINT `gejala_hasil_hama_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_hasil_hama_hasil_hama_id_foreign` FOREIGN KEY (`hasil_hama_id`) REFERENCES `hasil_hama` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hamas`
--
ALTER TABLE `hamas`
  ADD CONSTRAINT `hamas_kode_obat_foreign` FOREIGN KEY (`kode_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasils`
--
ALTER TABLE `hasils`
  ADD CONSTRAINT `hasils_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_hama`
--
ALTER TABLE `hasil_hama`
  ADD CONSTRAINT `hasil_hama_hama_id_foreign` FOREIGN KEY (`hama_id`) REFERENCES `hamas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_hama_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penyakits`
--
ALTER TABLE `penyakits`
  ADD CONSTRAINT `penyakits_kode_obat_foreign` FOREIGN KEY (`kode_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
