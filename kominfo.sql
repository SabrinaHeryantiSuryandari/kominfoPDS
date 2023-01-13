-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Jan 2023 pada 07.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengadaan_id` bigint(20) UNSIGNED NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` bigint(20) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` bigint(20) NOT NULL,
  `jumlah_harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `pengadaan_id`, `barang`, `jumlah_barang`, `satuan`, `harga_satuan`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Komputer', 3, 'Buah', 10000000, 30000000, '2022-12-12 00:51:44', '2022-12-12 00:53:19'),
(2, 2, 'Nasi Padang', 50, 'Buah', 100000, 5000000, '2022-12-12 00:53:55', '2022-12-12 00:53:55'),
(3, 3, 'Kursi', 1000, 'Buah', 20000000, 20000000000, '2022-12-12 13:09:36', '2022-12-12 13:09:36'),
(4, 2, 'Nasi Uduk', 10, 'Buah', 50000, 500000, '2022-12-21 15:06:53', '2022-12-21 15:06:53'),
(5, 4, 'Komputer', 10, 'Buah', 10000000, 100000000, '2022-12-21 15:11:09', '2022-12-21 15:11:09'),
(6, 5, 'Toner Printer Tinta Printer Epson L-1300', 2, 'Buah', 1245000, 2490000, '2022-12-29 08:13:24', '2022-12-29 08:13:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengadaan_id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alokasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_tgl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `pengadaan_id`, `kegiatan`, `alokasi`, `tanggal`, `nomor`, `deskripsi_tgl`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nota Dinas dari KPA ke PPK', 1, '0000-00-00', '123.9', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2022-12-12 00:55:02', '2022-12-21 15:15:43'),
(3, 5, 'Nota Dinas dari KPA ke PPK', 1, '2022-12-10', '654.1', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2022-12-29 08:15:18', '2022-12-29 08:15:18'),
(4, 5, 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)', 1, '2023-01-10', '654.2', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:06:24', '2023-01-09 08:06:24'),
(5, 5, 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa', 1, '2023-01-10', '654.3', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:07:05', '2023-01-09 08:07:05'),
(6, 5, 'Pakta Integritas', 1, '2023-01-10', '654.4', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:10:02', '2023-01-09 08:10:02'),
(7, 5, 'Surat Pernyataan Minat', 1, '2023-01-10', '654.5', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:10:52', '2023-01-09 08:10:52'),
(8, 5, 'Pemasukan Dokumen Kualifikasi', 1, '2023-01-10', '654.6', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:14:25', '2023-01-09 08:14:25'),
(9, 5, 'Daftar Hadir Pengembalian Dokumen Prakualifikasi', 1, '2023-01-10', '654.7', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:14:56', '2023-01-09 08:14:56'),
(10, 5, 'BA. Evaluasi Dokumen Prakualifikasi', 1, '2023-01-10', '654.8', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:15:28', '2023-01-09 08:15:28'),
(11, 5, 'Lampiran BA. Evaluasi Dokumen Prakualifikasi', 1, '2023-01-10', '654.9', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:15:58', '2023-01-09 08:15:58'),
(12, 5, 'Surat Undangan Permintaan Penawaran Harga', 1, '2023-01-10', '654.10', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:17:06', '2023-01-09 08:17:06'),
(13, 5, 'BA. Penjelasan Pekerjaan', 1, '2023-01-10', '654.11', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:18:31', '2023-01-09 08:18:31'),
(14, 5, 'Pemasukan Penawaran', 1, '2023-01-10', '654.12', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:40:55', '2023-01-09 08:40:55'),
(15, 5, 'BA. Pembukaan Penawaran', 1, '2023-01-10', '654.13', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:41:35', '2023-01-09 08:41:35'),
(16, 5, 'Surat Undangan Klarifikasi/Negosiasi', 1, '2023-01-10', '654.14', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:43:26', '2023-01-09 08:43:26'),
(17, 5, 'BA. Klarifikasi/Negosiasi', 1, '2023-01-10', '654.15', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:43:51', '2023-01-09 08:43:51'),
(18, 5, 'Lampiran BA. Klarifikasi/Negosiasi', 1, '2023-01-10', '654.16', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:44:19', '2023-01-09 08:44:19'),
(19, 5, 'BA. Hasil Pengadaan Langsung', 1, '2023-01-10', '654.17', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:44:52', '2023-01-09 08:44:52'),
(20, 5, 'Nota Dinas dari Pejabat Pengadaan ke PPK', 1, '2023-01-10', '654.18', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:45:34', '2023-01-09 08:45:34'),
(21, 5, 'Penetapan Penyedia Jasa', 1, '2023-01-10', '654.19', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:50:29', '2023-01-09 08:50:29'),
(22, 5, 'Penunjukan Penyedia Barang/Jasa', 1, '2023-01-10', '654.20', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:50:59', '2023-01-09 08:50:59'),
(23, 5, 'Kuitansi Kontrak', 1, '2023-01-10', '654.21', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:57:40', '2023-01-09 08:57:40'),
(24, 5, 'Surat Perintah Kerja', 1, '2023-01-10', '654.22', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 08:59:55', '2023-01-09 08:59:55'),
(25, 5, 'Surat Perintah Mulai Kerja (SPMK)', 1, '2023-01-10', '654.23', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:00:20', '2023-01-09 09:00:20'),
(26, 5, 'BA. Serah Terima Hasil Pekerjaan', 1, '2023-01-10', '654.24', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:03:57', '2023-01-09 09:03:57'),
(27, 5, 'Laporan Proses Pengadaan Barang/Jasa', 1, '2023-01-10', '654.25', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:04:27', '2023-01-09 09:04:27'),
(28, 5, 'BA. Penyerahan Barang/Jasa', 1, '2023-01-10', '654.26', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:36:10', '2023-01-09 09:36:10'),
(29, 5, 'BA. Hasil Pemeriksaan Administratif', 1, '2023-01-10', '654.27', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:36:45', '2023-01-09 09:36:45'),
(30, 5, 'BA. Hasil Pembayaran', 1, '2023-01-10', '654.28', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:37:28', '2023-01-09 09:37:28'),
(31, 5, 'Intruksi Kepada Peserta Pengadaan (IKPP)', 1, '2023-01-10', '654.29', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:38:57', '2023-01-09 09:38:57'),
(32, 5, 'Term Of Refference (TOR)', 1, '2023-01-10', '654.30', 'Tannggal Sepuluh Bulan Desember Tahun Dua Ribu Dua Puluh Dua', '2023-01-09 09:39:24', '2023-01-09 09:39:24');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_13_051532_create_pelaksana_table', 1),
(6, '2022_10_14_051248_create_pengadaan_table', 1),
(7, '2022_10_14_502189_create_jadwal_table', 1),
(8, '2022_10_17_063834_create_barang_table', 1),
(9, '2022_10_20_011218_create_pejabat_table', 1),
(10, '2022_12_07_150227_barang_trigger', 1);

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
-- Struktur dari tabel `pejabats`
--

CREATE TABLE `pejabats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_sk` date NOT NULL,
  `nomor_sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuasa_pengguna_anggaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_kuasa_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat_pembuatan_komitmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pejabat_komitmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat_pengadaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pejabat_pengadaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_bpp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengurus_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pengurus_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pejabats`
--

INSERT INTO `pejabats` (`id`, `tanggal_sk`, `nomor_sk`, `kuasa_pengguna_anggaran`, `nip_kuasa_pengguna`, `pejabat_pembuatan_komitmen`, `nip_pejabat_komitmen`, `pejabat_pengadaan`, `nip_pejabat_pengadaan`, `bpp`, `nip_bpp`, `pengurus_barang`, `nip_pengurus_barang`, `created_at`, `updated_at`) VALUES
(1, '2022-12-22', '188/19/114.1/2022', 'Dra. Ec. NIRMALA DEWI, MM', '19650909 199403 2 006', 'I WAYAN RUDY ARTHA, S.Kom', '19770517 200901 1 005', 'ADI KURNIAWAN.S.Kom.,M.Kom', '19890618 201403 1 002', 'SISCA AGUSTIA PUTRI, S.Sos', '19850120 201001 2 016', 'AGUS SUNARYO', '19660717 201001 1 003', '2022-12-12 00:33:56', '2022-12-21 10:22:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksanas`
--

CREATE TABLE `pelaksanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pt_pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelaksanas`
--

INSERT INTO `pelaksanas` (`id`, `pt_pelaksana`, `alamat`, `kota`, `nama_pelaksana`, `jabatan_pelaksana`, `npwp`, `tlp`, `created_at`, `updated_at`) VALUES
(1, 'PT. Platinum', 'Jalan Ikip Gunung Anyar', 'Surabaya', 'Heri Kurnniawan', 'Direktur', '048201022211', '085381212098', '2022-12-12 00:46:10', '2022-12-12 00:46:10'),
(2, 'PT. ABC', 'Jalan Magersari Indah', 'Mojokerto', 'Lastri Oliv', 'Direktur', '098201022211', '085667312044', '2022-12-12 00:47:30', '2022-12-12 00:47:30'),
(3, 'CV. Prima', 'Jalan Raya Margorejo', 'Surabaya', 'Desi Nobel', 'Direktur', '048201022211', '08523359667', '2022-12-12 13:05:38', '2022-12-12 13:05:38'),
(4, 'CV PATRIA NUGRAHA', 'JL. Kanwa No. 22-A', 'Surabaya', 'MANUHUTU ARMAND FX', 'Direktur', '01.510.544.8-609.00', '(031) 56823295', '2022-12-21 13:27:08', '2022-12-21 15:26:58'),
(7, 'PT. Vision', 'Jalan Raya Margorejo', 'Surabaya', 'Vivi Lidya', 'Direktur', '048201022211', '081274310191', '2022-12-29 06:59:59', '2022-12-29 06:59:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaans`
--

CREATE TABLE `pengadaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelaksana_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pengadaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_hps` bigint(20) NOT NULL,
  `deskripsi_hps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_penawaran` bigint(20) NOT NULL,
  `deskripsi_penawaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_negosiasi` bigint(20) NOT NULL,
  `deskripsi_negosiasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengadaans`
--

INSERT INTO `pengadaans` (`id`, `pelaksana_id`, `jenis_pengadaan`, `kode_rekening`, `total_hps`, `deskripsi_hps`, `harga_penawaran`, `deskripsi_penawaran`, `nilai_negosiasi`, `deskripsi_negosiasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Barang Kantor', '093726123391', 30000000, 'Tiga Puluh Juta Rupiah', 31000000, 'Tiga Puluh Satu Juta Rupiah', 25000000, 'Dua Puluh Lima Juta Rupiah', '2022-12-12 00:49:15', '2022-12-12 13:09:02'),
(2, 2, 'Makan Siang', '093726184391', 5000000, 'Lima Juta Rupiah', 5000000, 'Lima Juta Rupiah', 5000000, 'Lima Juta Rupiah', '2022-12-12 00:50:14', '2022-12-12 13:08:45'),
(3, 3, 'Barang Perusahaan', '0987568844', 10000000, 'Sepuluh Juta Rupiah', 10000000, 'Sepuluh Juta Rupiah', 10000000, 'Sepuluh Juta Rupiah', '2022-12-12 13:08:13', '2022-12-12 13:08:13'),
(4, 4, 'Barang kantor', '09476632888', 100000000, 'Seratus Juta Rupiah', 100000000, 'Seratus Juta Rupiah', 55000000, 'Lima Puluh Lima Juta', '2022-12-21 15:09:42', '2022-12-21 15:09:42'),
(5, 4, 'Belanja Alat/Bahan Kapasitas Kelembagaan  Statistik Sektoral', '2.20.02.1.01.5.1.02.01.01.0029', 5688750, 'Lima Juta Enam Ratus Delapan Puluh Delapan Ribu Tujuh Ratus Lima Puluh Rupiah', 5611050, 'Lima Juta Enam Ratus Sebelas Ribu Lima Puluh Rupiah', 5611050, 'Lima Juta Enam Ratus Sebelas Ribu Lima Puluh Rupiah', '2022-12-29 08:08:51', '2022-12-29 08:08:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `triggers`
--

CREATE TABLE `triggers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `triggers`
--

INSERT INTO `triggers` (`id`, `hash`, `created_at`, `updated_at`) VALUES
(1, '19ipJOSBXqkGwu7B0aH2Dar326m3ax21Mobg63bo', '2022-12-12 00:51:44', '2022-12-12 00:51:44'),
(2, '19ipJOSBXqkGwu7B0aH2Dar326m3ax21Mobg63bo', '2022-12-12 00:52:04', '2022-12-12 00:52:04'),
(3, '19ipJOSBXqkGwu7B0aH2Dar326m3ax21Mobg63bo', '2022-12-12 00:53:19', '2022-12-12 00:53:19'),
(4, '19ipJOSBXqkGwu7B0aH2Dar326m3ax21Mobg63bo', '2022-12-12 00:53:55', '2022-12-12 00:53:55'),
(5, '5BafN7jKYfFmRGIhLPYP40FHLBabQRN8fMd1feBb', '2022-12-12 12:45:05', '2022-12-12 12:45:05'),
(6, '5BafN7jKYfFmRGIhLPYP40FHLBabQRN8fMd1feBb', '2022-12-12 12:57:19', '2022-12-12 12:57:19'),
(7, '5BafN7jKYfFmRGIhLPYP40FHLBabQRN8fMd1feBb', '2022-12-12 13:09:36', '2022-12-12 13:09:36'),
(8, 'oJgJT58MzsjF8SdhnqBNqf44ObeOrZQArEZ2Wr00', '2022-12-21 15:06:53', '2022-12-21 15:06:53'),
(9, 'oJgJT58MzsjF8SdhnqBNqf44ObeOrZQArEZ2Wr00', '2022-12-21 15:11:09', '2022-12-21 15:11:09'),
(10, 'KWIZx6dLe5sJ3I63Ew5XbOe53li7kvHyv8HmUcdH', '2022-12-29 08:13:24', '2022-12-29 08:13:24');

--
-- Trigger `triggers`
--
DELIMITER $$
CREATE TRIGGER `jumlah_harga` AFTER INSERT ON `triggers` FOR EACH ROW UPDATE barangs SET jumlah_harga = jumlah_barang*harga_satuan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ADMIN', 'admin@example.com', '2022-12-15 06:00:23', '$2y$10$.MmMyDN3UocN0A4F6T1KYOONenQnEqCRsfJFWNEEVSwhYPUrKbzly', 'dl9Nn6KOHZqGo6rDdDyTDFkr21ByajtYUmbVQZIJa5UtFdJXYYgAcTpfJjmX', '2022-12-15 06:00:23', '2022-12-15 06:00:23'),
(3, 'Admin2', 'admin2@example.com', NULL, '$2y$10$ZVh/jwbfFM13Pmp2mMTEIuXSaxVhI288xP/eWc805B0f.66vooTIW', NULL, '2022-12-29 08:17:40', '2022-12-29 08:17:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_pengadaan_id_foreign` (`pengadaan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_pengadaan_id_foreign` (`pengadaan_id`);

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
-- Indeks untuk tabel `pejabats`
--
ALTER TABLE `pejabats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelaksanas`
--
ALTER TABLE `pelaksanas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengadaans_pelaksana_id_foreign` (`pelaksana_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `triggers`
--
ALTER TABLE `triggers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelaksanas`
--
ALTER TABLE `pelaksanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `triggers`
--
ALTER TABLE `triggers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_pengadaan_id_foreign` FOREIGN KEY (`pengadaan_id`) REFERENCES `pengadaans` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_pengadaan_id_foreign` FOREIGN KEY (`pengadaan_id`) REFERENCES `pengadaans` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD CONSTRAINT `pengadaans_pelaksana_id_foreign` FOREIGN KEY (`pelaksana_id`) REFERENCES `pelaksanas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
