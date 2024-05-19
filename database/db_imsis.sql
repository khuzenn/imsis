-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 07:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_imsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2e841f28491f4b7c492930fb6c09b8a1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1554634874, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:4:\"iiky\";s:6:\"status\";s:1:\"1\";s:5:\"roles\";a:1:{i:0;a:4:{s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:5:\"admin\";s:4:\"full\";s:13:\"Administrator\";s:7:\"default\";s:1:\"0\";}}s:12:\"user_profile\";a:13:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"Tintapuccino CMS\";s:6:\"gender\";s:1:\"m\";s:13:\"tanggal_lahir\";s:10:\"0000-00-00\";s:6:\"alamat\";s:0:\"\";s:4:\"kota\";s:0:\"\";s:12:\"tentang_saya\";s:0:\"\";s:4:\"foto\";s:12:\"no_image.jpg\";s:3:\"dob\";s:10:\"0000-00-00\";s:7:\"country\";s:0:\"\";s:8:\"timezone\";s:0:\"\";s:7:\"website\";s:0:\"\";s:8:\"modified\";s:19:\"2018-07-17 22:15:44\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_menu_parent` int(11) NOT NULL,
  `nama_menu` varchar(70) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `kategori` enum('Controller','Link') NOT NULL,
  `href` varchar(100) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `sort` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_menu_parent`, `nama_menu`, `icon`, `kategori`, `href`, `status`, `sort`) VALUES
(1, 7, 'Pengaturan Pengguna', 'fal fa-circle', 'Controller', '', 'Y', '1'),
(2, 1, 'Pengaturan Pengguna', '', 'Controller', 'Usersmanagement', 'Y', '1'),
(3, 1, 'Pengaturan Hak Akses', '', 'Controller', 'Roles', 'Y', '2'),
(6, 7, 'Pengaturan Menu', 'fal fa-circle', 'Controller', 'Menu', 'Y', '2'),
(7, 0, 'Pengaturan', 'fal fa-cogs', 'Controller', '', 'Y', '2'),
(8, 1, 'Pengaturan Modul', '', 'Controller', 'Permission', 'Y', '3'),
(9, 0, 'Dashboard', 'fal fa-home', 'Controller', 'Dashboard', 'Y', '1'),
(10, 0, 'Data Master', 'fal fa-table', 'Controller', '', 'Y', '3'),
(11, 10, 'Data Kategori Produk', '', 'Controller', 'kategori-produk', 'Y', '1'),
(12, 10, 'Data Produk', '', 'Controller', 'produk', 'Y', '2'),
(13, 10, 'Data Segmen', '', 'Controller', 'segmen', 'Y', '3'),
(14, 10, 'Data Lini Bisnis', '', 'Controller', 'lini-bisnis', 'Y', '4'),
(15, 10, 'Data KBLI', '', 'Controller', 'KBLI', 'Y', '5'),
(16, 10, 'Data Kastemer', '', 'Controller', 'kastemer', 'Y', '6'),
(17, 18, 'Target Capaian AM', '', 'Controller', 'target-am', 'Y', '1'),
(18, 0, 'Target Capaian AM', 'fal fa-crosshairs', 'Controller', '', 'Y', '4'),
(19, 18, 'List Target Capaian AM', '', 'Controller', 'list-target-am', 'Y', '2'),
(20, 0, 'Produk Kami', 'fal fa-box', 'Controller', 'produk-public', 'Y', '2');

-- --------------------------------------------------------

--
-- Table structure for table `overrides`
--

CREATE TABLE `overrides` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` smallint(5) UNSIGNED NOT NULL,
  `allow` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` smallint(5) UNSIGNED NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission`, `description`, `parent`, `sort`) VALUES
(2, 'Menu', 'Menu Management', NULL, NULL),
(3, 'Permission', 'Permission Management', NULL, NULL),
(4, 'Roles', 'Role Management', NULL, NULL),
(5, 'Usersmanagement', 'User Management', NULL, NULL),
(6, 'Dashboard', 'Dashboard', NULL, NULL),
(7, 'kategori-produk', 'Kategori Produk', NULL, NULL),
(8, 'produk', 'Produk', NULL, NULL),
(9, 'segmen', 'Segmen', NULL, NULL),
(10, 'lini-bisnis', 'Lini Bisnis', NULL, NULL),
(11, 'KBLI', 'KBLI', NULL, NULL),
(12, 'kastemer', 'Kastemer', NULL, NULL),
(13, 'target-am', 'Target Capaian AM', NULL, NULL),
(14, 'list-target-am', 'List Target Capaian AM', NULL, NULL),
(15, 'produk-public', 'Produk User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`, `full`, `default`) VALUES
(1, 'Admin', 'Administrator', 0),
(2, 'User', 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `permission_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_channeling`
--

CREATE TABLE `tb_channeling` (
  `id_channeling` int(11) NOT NULL,
  `channel` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kastemer`
--

CREATE TABLE `tb_kastemer` (
  `id_kastemer` int(11) NOT NULL,
  `id_segmen` int(11) DEFAULT NULL,
  `kastemer` varchar(255) DEFAULT NULL,
  `email_kastemer` varchar(255) DEFAULT NULL,
  `no_tlp_kastemer` varchar(15) DEFAULT NULL,
  `tgl_berdiri_kastemer` date DEFAULT NULL,
  `alamat_kastemer` text DEFAULT NULL,
  `nama_pic` varchar(255) DEFAULT NULL,
  `tgl_lahir_pic` date DEFAULT NULL,
  `jabatan_pic` varchar(255) DEFAULT NULL,
  `no_hp_pic` varchar(15) DEFAULT NULL,
  `email_pic` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_kastemer`
--

INSERT INTO `tb_kastemer` (`id_kastemer`, `id_segmen`, `kastemer`, `email_kastemer`, `no_tlp_kastemer`, `tgl_berdiri_kastemer`, `alamat_kastemer`, `nama_pic`, `tgl_lahir_pic`, `jabatan_pic`, `no_hp_pic`, `email_pic`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Telkom Akses', 'corcomta@telkomakses.co.id', '', '0000-00-00', 'Jl. Letjen S. Parman No.Kav 8, RT.1/RW.7, Tomang, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440', '', '0000-00-00', '', '', '', '1', '2022-04-21 09:50:56', '2022-04-21 13:55:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kastemer_kbli`
--

CREATE TABLE `tb_kastemer_kbli` (
  `id_kastemer_kbli` int(11) NOT NULL,
  `id_kastemer` int(11) DEFAULT NULL,
  `id_kbli` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_kastemer_kbli`
--

INSERT INTO `tb_kastemer_kbli` (`id_kastemer_kbli`, `id_kastemer`, `id_kbli`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 10, '1', '2022-04-21 13:55:39', '2022-04-21 13:55:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kastemer_vip`
--

CREATE TABLE `tb_kastemer_vip` (
  `id_kastemer_vip` int(11) NOT NULL,
  `id_kastemer` int(11) DEFAULT NULL,
  `nama_vip` varchar(255) DEFAULT NULL,
  `tgl_lahir_vip` date DEFAULT NULL,
  `jabatan_vip` varchar(255) DEFAULT NULL,
  `email_vip` varchar(255) DEFAULT NULL,
  `no_tlp_vip` varchar(15) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_produk`
--

CREATE TABLE `tb_kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `kategori_produk` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_kategori_produk`
--

INSERT INTO `tb_kategori_produk` (`id_kategori_produk`, `kategori_produk`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Produk Genuine', '1', '2022-02-14 15:08:46', '2022-03-22 06:57:01', NULL),
(2, 'Produk Partnership\r\n', '1', '2022-02-14 15:08:46', '2022-02-14 15:08:46', NULL),
(3, 'Produk Afiliasi\r\n', '1', '2022-02-14 15:08:46', '2022-02-14 15:08:46', NULL),
(4, 'Solusi\r\n', '1', '2022-02-14 15:08:46', '2022-02-14 15:08:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kbli`
--

CREATE TABLE `tb_kbli` (
  `id_kbli` int(11) NOT NULL,
  `kbli` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_kbli`
--

INSERT INTO `tb_kbli` (`id_kbli`, `kbli`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pertanian, Kehutanan, dan Perikanan', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(2, 'Pertambangan dan Penggalian', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(3, 'Industri Pengolahan', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(4, 'Listrik, Gas, Uap Air, dan Udara', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(5, 'Treatment Air, Limbah, Sampah', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(6, 'Konstruksi', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(7, 'Perdagangan Besar dan Eceran', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(8, 'Transportasi dan Pergudangan', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(9, 'Penyediaan Akomodasi dan Makan Minum', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(10, 'Informasi dan Komunikasi', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(11, 'Keuangan dan Asuransi', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(12, 'Real Estat', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(13, 'Profesional, Ilmiah dan Teknis', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(14, 'Penyewaan, Ketenagakerjaan, Agen Perjalanan', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(15, 'Pemerintahan, Pertahanan dan Jaminan Sosial', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(16, 'Pendidikan', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(17, 'Kesehatan dan Sosial', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(18, 'Kesenian, Hiburan dan Rekreasi', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(19, 'Jasa Lainnya', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(20, 'Rumah Tangga', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL),
(21, 'Badan Internasional', NULL, '2022-02-14 11:33:18', '2022-02-14 11:33:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lini_bisnis`
--

CREATE TABLE `tb_lini_bisnis` (
  `id_lini_bisnis` int(11) NOT NULL,
  `lini_bisnis` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_lini_bisnis`
--

INSERT INTO `tb_lini_bisnis` (`id_lini_bisnis`, `lini_bisnis`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manufacture', '1', '2022-02-14 11:37:04', '2022-03-08 02:47:06', NULL),
(2, 'Manage Service', '1', '2022-02-14 11:37:04', '2022-02-14 11:37:04', NULL),
(3, 'Digital Service', '1', '2022-02-14 11:37:04', '2022-02-14 11:37:04', NULL),
(4, 'System Integrator', '1', '2022-02-14 11:37:04', '2022-02-14 11:37:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori_produk` int(11) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `thumbnail_full_name` varchar(255) DEFAULT NULL,
  `thumbnail_type` varchar(255) DEFAULT NULL,
  `thumbnail_size` double DEFAULT NULL,
  `file_brosur` varchar(255) DEFAULT NULL,
  `file_brosur_full_name` varchar(255) DEFAULT NULL,
  `file_brosur_type` varchar(25) DEFAULT NULL,
  `file_brosur_size` varchar(15) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori_produk`, `produk`, `thumbnail`, `thumbnail_full_name`, `thumbnail_type`, `thumbnail_size`, `file_brosur`, `file_brosur_full_name`, `file_brosur_type`, `file_brosur_size`, `harga`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Identik DL02', 'iDentik-1.jpg', 'iDentik-1', 'image/jpeg', 223.31, NULL, NULL, NULL, NULL, '8900000', '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(2, 1, 'Identik TL01', 'Identik-TL01-2.jpeg', 'Identik-TL01-2', NULL, NULL, NULL, NULL, NULL, NULL, '8900000', '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_image`
--

CREATE TABLE `tb_produk_image` (
  `id_produk_image` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `image_produk` varchar(255) DEFAULT NULL,
  `image_produk_full_name` varchar(255) DEFAULT NULL,
  `image_produk_type` varchar(25) DEFAULT NULL,
  `image_produk_size` varchar(15) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_produk_image`
--

INSERT INTO `tb_produk_image` (`id_produk_image`, `id_produk`, `image_produk`, `image_produk_full_name`, `image_produk_type`, `image_produk_size`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'iDentik-1.jpg', 'iDentik-1', 'image/jpeg', '223.31', '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_kbli`
--

CREATE TABLE `tb_produk_kbli` (
  `id_produk_kbli` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_kbli` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_produk_kbli`
--

INSERT INTO `tb_produk_kbli` (`id_produk_kbli`, `id_produk`, `id_kbli`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(2, 1, 17, '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(3, 1, 11, '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(4, 1, 15, '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(5, 1, 9, '1', '2022-04-21 04:48:56', '2022-04-21 04:48:56', NULL),
(24, 2, 10, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL),
(25, 2, 17, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL),
(26, 2, 11, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL),
(27, 2, 15, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL),
(28, 2, 16, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL),
(29, 2, 8, '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_presentasi`
--

CREATE TABLE `tb_produk_presentasi` (
  `id_produk_presentasi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `file_presentasi` varchar(255) DEFAULT NULL,
  `file_presentasi_full_name` varchar(255) DEFAULT NULL,
  `file_presentasi_type` varchar(25) DEFAULT NULL,
  `file_presentasi_size` varchar(15) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_produk_presentasi`
--

INSERT INTO `tb_produk_presentasi` (`id_produk_presentasi`, `id_produk`, `file_presentasi`, `file_presentasi_full_name`, `file_presentasi_type`, `file_presentasi_size`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'My_Creative_CV_by_Slidesgo.pptx', 'My_Creative_CV_by_Slidesgo', 'application/vnd.openxmlfo', '1384.16', '1', '2022-04-21 09:28:53', '2022-04-21 09:28:53', NULL),
(2, 2, 'My_Creative_CV_by_Slidesgo1.pptx', 'My_Creative_CV_by_Slidesgo1', 'application/vnd.openxmlfo', '1384.16', '1', '2022-04-21 09:31:01', '2022-04-21 09:31:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_youtube`
--

CREATE TABLE `tb_produk_youtube` (
  `id_produk_youtube` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `link_youtube` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_produk_youtube`
--

INSERT INTO `tb_produk_youtube` (`id_produk_youtube`, `id_produk`, `link_youtube`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'https://www.youtube.com/embed/wAp-bkgW2x0', '1', '2022-04-21 09:32:44', '2022-04-21 09:32:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_segmen`
--

CREATE TABLE `tb_segmen` (
  `id_segmen` int(11) NOT NULL,
  `segmen` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_segmen`
--

INSERT INTO `tb_segmen` (`id_segmen`, `segmen`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Telco & Celco', '1', '2022-02-14 11:58:25', '2022-03-08 02:53:31', NULL),
(2, 'Tower Provider', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(3, 'PLN & Group', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(4, 'Central Government', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(5, 'Local Government', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(6, 'Banking', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(7, 'Finance', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(8, 'BUMN', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(9, 'Rumah Sakit ', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(10, 'Hotel', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL),
(11, 'Other', '1', '2022-02-14 11:58:25', '2022-02-14 11:58:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_channel`
--

CREATE TABLE `tb_status_channel` (
  `id_status_channel` int(11) NOT NULL,
  `status_channel` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_status_channel`
--

INSERT INTO `tb_status_channel` (`id_status_channel`, `status_channel`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Agen\r\n', NULL, '2022-02-14 15:56:26', '2022-02-14 15:56:26', NULL),
(2, 'Distributor\r\n', NULL, '2022-02-14 15:56:26', '2022-02-14 15:56:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_target_am`
--

CREATE TABLE `tb_target_am` (
  `id_target_am` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_lini_bisnis` int(11) DEFAULT NULL,
  `id_segmen` int(11) DEFAULT NULL,
  `id_kastemer` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `volume` varchar(50) DEFAULT NULL,
  `target_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_target_am`
--

INSERT INTO `tb_target_am` (`id_target_am`, `id_users`, `id_lini_bisnis`, `id_segmen`, `id_kastemer`, `id_produk`, `unit_price`, `volume`, `target_price`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 1, '900000.00', '5', '50000000.00', '1', '2022-02-18 15:45:56', '2022-02-18 15:45:58', NULL),
(2, 1, 1, 1, 2, 1, '500000.00', '3', '10000000.00', '1', '2022-02-18 15:46:46', '2022-02-18 15:46:46', NULL),
(3, 1, 1, 1, 3, 1, '250000.00', '5', '15000000.00', '1', '2022-02-18 15:46:46', '2022-02-18 15:46:46', NULL),
(4, 1, 2, 2, 3, 3, '500000.00', '10', '10000000.00', '1', '2022-02-18 15:46:46', '2022-02-18 15:46:46', NULL),
(5, 1, 3, 4, 3, 5, '1000.00', '2', '2000.00', '1', '2022-02-28 19:23:53', '2022-02-28 19:23:53', NULL),
(6, 1, 4, 4, 5, 5, '2000.00', '2', '4000.00', '1', '2022-02-28 19:26:57', '2022-02-28 19:26:57', NULL),
(7, 1, 2, 2, 2, 5, '1000.00', '2', '2000.00', '1', '2022-02-28 19:27:20', '2022-02-28 19:27:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` char(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL COMMENT 'For acct approval.',
  `meta` varchar(2000) COLLATE utf8_unicode_ci DEFAULT '',
  `last_ip` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `approved`, `meta`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'iiky', '$2a$08$UgW69S6DojhLcVHg0KwmJer9ZzIRzBLUCpsEJEJCofwmvAkTvNrZi', 'admin@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, '', '127.0.0.1', '2022-07-05 19:14:23', '2018-02-24 15:26:07', '2022-07-05 17:14:23'),
(2, 'mahathir.muhammad', '$2a$08$EsdzUNbnzUaeqiYqLsa7wOTktqfil7VGGkNf1UsUu3fRCKZIMF4jO', 'mahathir.muhammad@inti.co.id', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:17:\"mahathir.muhammad\";}', '::1', '2022-07-05 19:03:19', '2022-02-18 03:53:40', '2022-07-05 17:03:19'),
(3, 'mszahran', '$2a$08$kukgqTjIvtbsl3.ULfWRtu5R2L019nSJa4BvmNWMQB8lJZ2mj7igG', 'muhamadzahran32@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:24:\"MUHAMMAD SYAIBANI ZAHRAN\";}', '127.0.0.1', '0000-00-00 00:00:00', '2022-03-01 10:47:28', '2022-03-31 09:05:32'),
(4, 'mszahran089', '$2a$08$ygab6ICqIF9mcqW9L0YgeucYGMkauhyw36qui1JrThjsxvQuMz95S', 'muhamadzahran@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:24:\"MUHAMMAD SYAIBANI ZAHRAN\";}', '127.0.0.1', '0000-00-00 00:00:00', '2022-03-01 10:48:51', '2022-03-31 09:05:34'),
(5, 'setyo.utoro', '$2a$08$VKERYPMsDZDxdyNQxLTZuu2ZHq2uF.e2Nsy0kiAPYooD1JdPhRaru', 'setyo.utoro@inti.co.id', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:11:\"setyo.utoro\";}', '::1', '2022-07-05 19:07:01', '2022-03-09 10:41:50', '2022-07-05 17:07:01'),
(6, 'bjiomaruz', '$2a$08$RlrCVOeESMwY1O41kQ2zoO6NW2H9OL2PEAFUPw4LVE9NNGxDjvzaG', 'setyo.utoro27@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:14:\"Shnta Maharani\";}', '10.20.161.238', '0000-00-00 00:00:00', '2022-03-10 15:50:16', '2022-03-31 09:05:36'),
(7, 'widodo', '$2a$08$GbbdxhUFXWl2Xt4SvIFUferX1s2oHPa7JoA1NHFPyjt.9.NK9kUwm', 'widodo@inti.co.id', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:1:{s:4:\"name\";s:6:\"widodo\";}', '172.16.10.1', '2022-03-13 23:25:53', '2022-03-13 23:25:53', '2022-03-13 16:25:53'),
(8, 'zahran123', '$2a$10$0tLvA6S0eU2AG.b1KfuGHOg.cpT4fNF.mHJdIClhAJ5VqeG85aZpq', 'dani.anwar555@gmail.com', 1, 1, NULL, NULL, NULL, NULL, NULL, 1, '', '127.0.0.1', '0000-00-00 00:00:00', '2022-04-01 12:05:15', '2022-04-04 04:12:49'),
(9, 'intiguest', '$2a$10$ywAlq5hrF8FcCMjPvFfmWeuDah.dtNhdKkqX12ihKvuqI8zsn.of6', 'guest@gmail.com', 0, 0, NULL, NULL, NULL, NULL, '64230200adb987bdf29141aa526e1d0d', 1, '', '127.0.0.1', '0000-00-00 00:00:00', '2022-04-20 08:49:20', '2022-04-20 06:49:20'),
(10, 'userguest', '$2a$10$KR6Vy751Ks26Y2cSPWAmXOa5UOkwa6jOH7Ea0eHM.5hHaBY.IvQ7u', 'intiguest@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, '', '127.0.0.1', '0000-00-00 00:00:00', '2022-04-20 08:54:39', '2022-04-20 06:54:39'),
(11, 'test', '$2a$10$RV8122nXgNO4zAogioXbbO4S5ONcKDOoVAoQ7SyGRACNOAVlCGGkm', 'test@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, '', '127.0.0.1', '0000-00-00 00:00:00', '2022-04-20 08:57:07', '2022-04-20 06:57:07'),
(12, 'jajang', '$2a$10$K7yhYZHAKcJuaxzrQFhCIOeXF7Z0fC6vnPumcGoFwbj0FeMp3/WzW', 'jajang@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:2:{s:4:\"foto\";s:13:\"625fafc1a2aef\";s:4:\"name\";s:12:\"Jajang Herdi\";}', '127.0.0.1', '0000-00-00 00:00:00', '2022-04-20 09:01:21', '2022-04-20 07:01:21'),
(13, 'admin123', '$2a$10$gtANPNMiG2UEL9fPbbJaBOKY1juVGP8PhYCKJWuV6yYIuz29qJF7W', 'mraihanarif666@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, 'a:2:{s:4:\"foto\";s:13:\"62c4714b325a0\";s:4:\"name\";s:11:\"Raihan Arif\";}', '127.0.0.1', '2022-07-05 19:15:21', '2022-07-05 19:13:47', '2022-07-05 17:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('bbecaa5ab748280b48db65737ee04f49', 7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', '172.16.10.1', '2022-03-13 16:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nipeg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `gender` char(1) COLLATE utf8_unicode_ci DEFAULT '',
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tentang_saya` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no_image.jpg',
  `dob` date NOT NULL,
  `country` char(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `timezone` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `nipeg`, `name`, `gender`, `tanggal_lahir`, `alamat`, `kota`, `tentang_saya`, `foto`, `dob`, `country`, `timezone`, `website`, `modified`) VALUES
(1, NULL, 'Administrator', 'P', '1999-08-25', 'Perumahan Taman Bunga Cilame', '', '', '624a63afc50c2.jpg', '0000-00-00', '', '', '', '2022-04-04 03:19:11'),
(2, NULL, 'mahathir.muhammad', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-02-18 02:53:40'),
(3, NULL, 'MUHAMMAD SYAIBANI ZAHRAN', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-03-31 09:05:32'),
(4, NULL, 'MUHAMMAD SYAIBANI ZAHRAN', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-03-31 09:05:34'),
(5, NULL, 'setyo.utoro', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-03-09 03:41:51'),
(6, NULL, 'Shnta Maharani', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-03-31 09:05:36'),
(7, NULL, 'widodo', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-03-13 16:25:53'),
(8, NULL, 'Dani Anwar', NULL, '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-04-04 04:12:49'),
(10, NULL, '', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-04-20 06:54:39'),
(11, NULL, '', '', '0000-00-00', '', '', '', 'no_image.jpg', '0000-00-00', '', '', '', '2022-04-20 06:57:07'),
(12, NULL, 'Jajang Herdi', '', '0000-00-00', '', '', '', '625fafc1a2aef', '0000-00-00', '', '', '', '2022-04-20 07:01:21'),
(13, NULL, 'Raihan Arif', '', '0000-00-00', '', '', '', '62c4714b325a0', '0000-00-00', '', '', '', '2022-07-05 17:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `views_kastemer`
-- (See below for the actual view)
--
CREATE TABLE `views_kastemer` (
`id_kastemer` int(11)
,`id_segmen` int(11)
,`kastemer` varchar(255)
,`tgl_berdiri_kastemer` date
,`email_kastemer` varchar(255)
,`no_tlp_kastemer` varchar(15)
,`alamat_kastemer` text
,`nama_pic` varchar(255)
,`tgl_lahir_pic` date
,`jabatan_pic` varchar(255)
,`email_pic` varchar(255)
,`no_hp_pic` varchar(15)
,`segmen` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `views_produk`
-- (See below for the actual view)
--
CREATE TABLE `views_produk` (
`id_produk` int(11)
,`id_kategori_produk` int(11)
,`produk` varchar(255)
,`thumbnail` varchar(255)
,`thumbnail_full_name` varchar(255)
,`kategori_produk` varchar(255)
,`file_brosur` varchar(255)
,`file_brosur_full_name` varchar(255)
,`file_brosur_type` varchar(25)
,`file_brosur_size` varchar(15)
,`harga` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `views_target_am`
-- (See below for the actual view)
--
CREATE TABLE `views_target_am` (
`id_target_am` int(11)
,`id_users` int(11)
,`id_lini_bisnis` int(11)
,`id_segmen` int(11)
,`id_kastemer` int(11)
,`id_produk` int(11)
,`id_kategori_produk` int(11)
,`name` varchar(255)
,`lini_bisnis` varchar(255)
,`segmen` varchar(255)
,`kastemer` varchar(255)
,`produk` varchar(255)
,`kategori_produk` varchar(255)
,`unit_price` decimal(10,2)
,`volume` varchar(50)
,`target_price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Structure for view `views_kastemer`
--
DROP TABLE IF EXISTS `views_kastemer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `views_kastemer`  AS SELECT `tb_kastemer`.`id_kastemer` AS `id_kastemer`, `tb_kastemer`.`id_segmen` AS `id_segmen`, `tb_kastemer`.`kastemer` AS `kastemer`, `tb_kastemer`.`tgl_berdiri_kastemer` AS `tgl_berdiri_kastemer`, `tb_kastemer`.`email_kastemer` AS `email_kastemer`, `tb_kastemer`.`no_tlp_kastemer` AS `no_tlp_kastemer`, `tb_kastemer`.`alamat_kastemer` AS `alamat_kastemer`, `tb_kastemer`.`nama_pic` AS `nama_pic`, `tb_kastemer`.`tgl_lahir_pic` AS `tgl_lahir_pic`, `tb_kastemer`.`jabatan_pic` AS `jabatan_pic`, `tb_kastemer`.`email_pic` AS `email_pic`, `tb_kastemer`.`no_hp_pic` AS `no_hp_pic`, `tb_segmen`.`segmen` AS `segmen` FROM (`tb_kastemer` left join `tb_segmen` on(`tb_segmen`.`id_segmen` = `tb_kastemer`.`id_segmen`)) WHERE `tb_kastemer`.`deleted_at` is null ORDER BY `tb_kastemer`.`id_kastemer` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `views_produk`
--
DROP TABLE IF EXISTS `views_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `views_produk`  AS SELECT `tb_produk`.`id_produk` AS `id_produk`, `tb_produk`.`id_kategori_produk` AS `id_kategori_produk`, `tb_produk`.`produk` AS `produk`, `tb_produk`.`thumbnail` AS `thumbnail`, `tb_produk`.`thumbnail_full_name` AS `thumbnail_full_name`, `tb_kategori_produk`.`kategori_produk` AS `kategori_produk`, `tb_produk`.`file_brosur` AS `file_brosur`, `tb_produk`.`file_brosur_full_name` AS `file_brosur_full_name`, `tb_produk`.`file_brosur_type` AS `file_brosur_type`, `tb_produk`.`file_brosur_size` AS `file_brosur_size`, `tb_produk`.`harga` AS `harga` FROM (`tb_produk` left join `tb_kategori_produk` on(`tb_kategori_produk`.`id_kategori_produk` = `tb_produk`.`id_kategori_produk`)) WHERE `tb_produk`.`deleted_at` is null ORDER BY `tb_produk`.`id_produk` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `views_target_am`
--
DROP TABLE IF EXISTS `views_target_am`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `views_target_am`  AS SELECT `tb_target_am`.`id_target_am` AS `id_target_am`, `tb_target_am`.`id_users` AS `id_users`, `tb_target_am`.`id_lini_bisnis` AS `id_lini_bisnis`, `tb_target_am`.`id_segmen` AS `id_segmen`, `tb_target_am`.`id_kastemer` AS `id_kastemer`, `tb_target_am`.`id_produk` AS `id_produk`, `views_produk`.`id_kategori_produk` AS `id_kategori_produk`, `user_profiles`.`name` AS `name`, `tb_lini_bisnis`.`lini_bisnis` AS `lini_bisnis`, `tb_segmen`.`segmen` AS `segmen`, `views_kastemer`.`kastemer` AS `kastemer`, `views_produk`.`produk` AS `produk`, `tb_kategori_produk`.`kategori_produk` AS `kategori_produk`, `tb_target_am`.`unit_price` AS `unit_price`, `tb_target_am`.`volume` AS `volume`, `tb_target_am`.`target_price` AS `target_price` FROM (((((((`tb_target_am` left join `users` on(`users`.`id` = `tb_target_am`.`id_users`)) left join `user_profiles` on(`user_profiles`.`id` = `users`.`id`)) left join `tb_lini_bisnis` on(`tb_lini_bisnis`.`id_lini_bisnis` = `tb_target_am`.`id_lini_bisnis`)) left join `tb_segmen` on(`tb_segmen`.`id_segmen` = `tb_target_am`.`id_segmen`)) left join `views_kastemer` on(`views_kastemer`.`id_kastemer` = `tb_target_am`.`id_kastemer`)) left join `views_produk` on(`views_produk`.`id_produk` = `tb_target_am`.`id_produk`)) left join `tb_kategori_produk` on(`tb_kategori_produk`.`id_kategori_produk` = `views_produk`.`id_kategori_produk`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`) USING BTREE;

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`) USING BTREE;

--
-- Indexes for table `overrides`
--
ALTER TABLE `overrides`
  ADD PRIMARY KEY (`user_id`,`permission_id`) USING BTREE,
  ADD KEY `user_id1_idx` (`user_id`) USING BTREE,
  ADD KEY `permissions_id1_idx` (`permission_id`) USING BTREE;

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`) USING BTREE,
  ADD UNIQUE KEY `permission_UNIQUE` (`permission`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`) USING BTREE,
  ADD UNIQUE KEY `role_UNIQUE` (`role`) USING BTREE;

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`) USING BTREE,
  ADD KEY `role_id2_idx` (`role_id`) USING BTREE,
  ADD KEY `permission_id2_idx` (`permission_id`) USING BTREE;

--
-- Indexes for table `tb_channeling`
--
ALTER TABLE `tb_channeling`
  ADD PRIMARY KEY (`id_channeling`) USING BTREE;

--
-- Indexes for table `tb_kastemer`
--
ALTER TABLE `tb_kastemer`
  ADD PRIMARY KEY (`id_kastemer`) USING BTREE;

--
-- Indexes for table `tb_kastemer_kbli`
--
ALTER TABLE `tb_kastemer_kbli`
  ADD PRIMARY KEY (`id_kastemer_kbli`) USING BTREE;

--
-- Indexes for table `tb_kastemer_vip`
--
ALTER TABLE `tb_kastemer_vip`
  ADD PRIMARY KEY (`id_kastemer_vip`) USING BTREE;

--
-- Indexes for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`) USING BTREE;

--
-- Indexes for table `tb_kbli`
--
ALTER TABLE `tb_kbli`
  ADD PRIMARY KEY (`id_kbli`) USING BTREE;

--
-- Indexes for table `tb_lini_bisnis`
--
ALTER TABLE `tb_lini_bisnis`
  ADD PRIMARY KEY (`id_lini_bisnis`) USING BTREE;

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`) USING BTREE;

--
-- Indexes for table `tb_produk_image`
--
ALTER TABLE `tb_produk_image`
  ADD PRIMARY KEY (`id_produk_image`) USING BTREE;

--
-- Indexes for table `tb_produk_kbli`
--
ALTER TABLE `tb_produk_kbli`
  ADD PRIMARY KEY (`id_produk_kbli`) USING BTREE;

--
-- Indexes for table `tb_produk_presentasi`
--
ALTER TABLE `tb_produk_presentasi`
  ADD PRIMARY KEY (`id_produk_presentasi`) USING BTREE;

--
-- Indexes for table `tb_produk_youtube`
--
ALTER TABLE `tb_produk_youtube`
  ADD PRIMARY KEY (`id_produk_youtube`) USING BTREE;

--
-- Indexes for table `tb_segmen`
--
ALTER TABLE `tb_segmen`
  ADD PRIMARY KEY (`id_segmen`) USING BTREE;

--
-- Indexes for table `tb_status_channel`
--
ALTER TABLE `tb_status_channel`
  ADD PRIMARY KEY (`id_status_channel`) USING BTREE;

--
-- Indexes for table `tb_target_am`
--
ALTER TABLE `tb_target_am`
  ADD PRIMARY KEY (`id_target_am`) USING BTREE,
  ADD KEY `for_id_lini_bisnis` (`id_lini_bisnis`) USING BTREE,
  ADD KEY `for_id_segmen` (`id_segmen`) USING BTREE,
  ADD KEY `for_id_kastemer` (`id_kastemer`) USING BTREE,
  ADD KEY `for_id_produk` (`id_produk`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username_UNIQUE` (`username`) USING BTREE,
  ADD UNIQUE KEY `email_UNIQUE` (`email`) USING BTREE;

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`) USING BTREE;

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`) USING BTREE,
  ADD KEY `user_id2_idx` (`user_id`) USING BTREE,
  ADD KEY `role_id1_idx` (`role_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_channeling`
--
ALTER TABLE `tb_channeling`
  MODIFY `id_channeling` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kastemer`
--
ALTER TABLE `tb_kastemer`
  MODIFY `id_kastemer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kastemer_kbli`
--
ALTER TABLE `tb_kastemer_kbli`
  MODIFY `id_kastemer_kbli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kastemer_vip`
--
ALTER TABLE `tb_kastemer_vip`
  MODIFY `id_kastemer_vip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_kbli`
--
ALTER TABLE `tb_kbli`
  MODIFY `id_kbli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_lini_bisnis`
--
ALTER TABLE `tb_lini_bisnis`
  MODIFY `id_lini_bisnis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_produk_image`
--
ALTER TABLE `tb_produk_image`
  MODIFY `id_produk_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk_kbli`
--
ALTER TABLE `tb_produk_kbli`
  MODIFY `id_produk_kbli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_produk_presentasi`
--
ALTER TABLE `tb_produk_presentasi`
  MODIFY `id_produk_presentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_produk_youtube`
--
ALTER TABLE `tb_produk_youtube`
  MODIFY `id_produk_youtube` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_segmen`
--
ALTER TABLE `tb_segmen`
  MODIFY `id_segmen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_status_channel`
--
ALTER TABLE `tb_status_channel`
  MODIFY `id_status_channel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_target_am`
--
ALTER TABLE `tb_target_am`
  MODIFY `id_target_am` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `overrides`
--
ALTER TABLE `overrides`
  ADD CONSTRAINT `permission_id1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `permission_id2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `role_id2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tb_target_am`
--
ALTER TABLE `tb_target_am`
  ADD CONSTRAINT `for_id_kastemer` FOREIGN KEY (`id_kastemer`) REFERENCES `tb_kastemer` (`id_kastemer`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `for_id_lini_bisnis` FOREIGN KEY (`id_lini_bisnis`) REFERENCES `tb_lini_bisnis` (`id_lini_bisnis`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `for_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `for_id_segmen` FOREIGN KEY (`id_segmen`) REFERENCES `tb_segmen` (`id_segmen`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `role_id1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
