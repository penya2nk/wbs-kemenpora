-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2018 at 01:12 AM
-- Server version: 5.5.54
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemenp0r_repo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_laporan_web`
--

CREATE TABLE `bukti_laporan_web` (
  `id` int(11) UNSIGNED NOT NULL,
  `laporanWebID` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) DEFAULT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_extension` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bukti_laporan_web`
--

INSERT INTO `bukti_laporan_web` (`id`, `laporanWebID`, `file_name`, `file_size`, `mime_type`, `file_extension`, `created_at`, `updated_at`) VALUES
(1, 1, '26042018032809_Ucapan_selamat2.pdf', 71364, 'application/pdf', '', '2018-04-25 20:28:09', '2018-04-25 20:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noUrut` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `noUrut`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Mengapa saya harus melaporkan dugaan pelanggaran ?', 'Agar KEMENPORA dapat menyelenggarakan pemerintahan yang bersih dan bebas dari KKN. Dengan melaporkan dugaan pelanggaran, anda dapat meningkatkan transparansi dalam penyelenggaraan pemerintah dan pelayanan kepada masyarakat yang terus lebih baik.', 1, 1, '2017-06-19 10:00:00', '2017-09-24 04:28:34'),
(2, 'Bisakah saya memilih untuk tidak memberitahukan identitas ?', 'Anda dianjurkan untuk memberikan data diri yang sekurang-kurangnya adalah alamat/nomor telepon/handphone/faksmili/email. Namun, itu semua terserah pada pilihan anda, apakah anda memilih untuk mengungkapkan identitas anda atau tidak. Ada kalanya identitas anda mungkin akan terlihat oleh KEMENPORA  dari informasi yang dilaporkan. Identitas pelapor akan dirahasiakan oleh KEMENPORA, kecuali jika pelapor memilih untuk mengungkapkannya. Namun pelapor dapat tetap memilih untuk tidak mengungkapkan identitasnya. Setiap upaya yang layak dilakukan dan diperbolehkan oleh hukum akan dijalankan agar identitas pelapor tidak terungkap.', 2, 1, '2017-06-20 01:24:21', '2017-09-24 04:29:03'),
(3, 'Apa yang terjadi jika saya melakukan panggilan ?', 'Panggilan telepon ke KEMENPORA tidak direkam dan kami tidak memakai fasilitas ID pemanggil yang dapat mengidentifikasi panggilan. Anda tidak akan diminta untuk memberikan nama anda, kecuali bila anda yang ingin mengungkapkan identitas anda. Laporan anda akan dikenal hanya dengan nomor referensi, kecuali anda memilih untuk memberikan nama dan identitas kepada KEMENPORA.', 3, 1, '2017-06-20 01:32:59', '2017-09-24 04:29:27'),
(4, 'Dugaan pelanggaran apa yang harus saya laporkan ?', 'Anda bisa melaporkan berbagai dugaan pelanggaran yang dilakukan pegawai KEMENPORA terutama terkait seperti dugaan korupsi yang berpotensi merugikan negara, Benturan Kepentingan, Gratifikasi dan pengaduan masyarakat lainnya di Lingkungan Kementerian Pemuda dan Olah Raga.', 4, 1, '2017-06-20 01:53:31', '2017-09-24 04:29:40'),
(5, 'Apa yang perlu saya beritahu kepada KEMENPORA ?', 'Setiap dugaan pelanggaran yang anda laporkan akan diminta keterangan detil yang dipandu oleh aplikasi WBS-KEMENPORA ataupun oleh operator yang bertugas.  Keterangan itu diperlukan untuk memperjelas laporan anda, minimal anda dapat siapkan informasi terkait Siapa, Kapan, Dimana dan Bagaimana. \nAkan lebih baik bila anda mempunyai bukti otentik yang dapat anda lampirkan bersama laporan anda.', 5, 1, '2017-06-20 01:54:04', '2017-09-24 04:30:00'),
(6, 'Dugaan pelanggaran apa yang harus saya laporkan?', 'Berikanlah informasi selengkap mungkin kepada WBS-KEMENPORA apabila anda melaporkan suatu dugaan pelanggaran. Contohnya seperti:\n				                    <ul class=\"list-round-arrow main-text\">\n										<li class=\"padding-top-15\">Nama orang yang terlibat/terlapor</li>\n										<li class=\"padding-top-15\">Nama saksi</li>\n										<li class=\"padding-top-15\">Tanggal, waktu dan lokasi kejadian;</li>\n										<li class=\"padding-top-15\">Kronologi kejadian;</li>\n										<li class=\"padding-top-15\">Bukti-bukti atas kejadian yang dilaporkan (apabila ada);</li>\n										<li class=\"padding-top-15\">Jumlah kerugian (apabila ada);</li>\n										<li class=\"padding-top-15\">Frekuensi kejadian;</li>\n                                                                                </ul>\n', 6, 1, '2017-06-20 01:54:38', '2017-09-24 04:31:59'),
(7, 'Bagaimana jika saya mencurigai sesuatu dugaan pelanggaran tapi saya tidak yakin ?', 'Kebanyakan kasus yang dilaporkan adalah temuan dari orang-orang yang jujur dan peduli yang pada awalnya tidak yakin akan fakta yang mereka temukan. Hal ini biasa terjadi. Kami tidak mengharapkan anda untuk mengetahui setiap rincian kejadian. Melaporkan apa yang anda ketahui sudah lebih dari cukup.', 7, 1, '2017-06-20 01:56:55', '2017-09-24 04:33:29'),
(8, 'Setelah saya membuat laporan, apakah saya akan terlibat?', 'Anda tidak perlu terlibat setelah anda membuat laporan atas suatu dugaan pelanggaran. Namun jika anda mempunyai informasi baru atau tambahan, atau anda ingin membuat perubahan pada laporan anda sebelumnya, anda dapat menghubungi kami dan menyebutkan nomor referensi yang telah diberikan pada awal anda melakukan panggilan.', 8, 1, '2017-06-20 01:57:16', '2017-09-24 04:33:52'),
(9, 'Setelah dugaan pelanggaran dilaporkan, dalam jangka waktu berapa lamakah Tim Penanganan Laporan akan dihubungi?', 'WBS-KEMENPORA akan mengirimkan laporan yang diterima kepada Tim Penanganan Laporan  yang telah ditunjuk dalam waktu 1 (satu) hari kerja setelah laporan diterima. Tetapi jika anda melaporkan sesuatu yang membahayakan hidup, kami akan menghubungi Tim tersebut dengan segera.', 9, 1, '2017-06-20 01:57:41', '2017-09-24 04:34:16'),
(10, 'Apakah saya akan mendapat penghargaan setiap melakukan pelaporan?', 'Tidak ada bentuk penghargaan khusus yang akan diberikan dengan membuat laporan dugaan pelanggaran ke WBS-KEMENPORA.', 10, 1, '2017-06-20 01:58:02', '2017-09-24 04:34:42'),
(11, 'Berapa kali saya boleh melapor dalam WBS-KEMENPORA?', 'Tidak ada batasan laporan di WBS-KEMENPORA, setiap kali anda merasa adanya dugaan pelanggaran.', 11, 1, '2017-06-20 01:58:20', '2017-09-24 04:37:13'),
(12, 'Apakah penegak hukum akan diberitahu mengenai laporan yang dibuat ke WBS-KEMENPORA?', 'Informasi yang dilaporkan diberikan kepada Tim Penangangan Laporan KEMENPORA yang bertanggungjawab untuk menindaklanjuti dugaan pelanggaran. Tim tersebut akan memutuskan tindakan lanjutan yang akan dilakukan, Tim tersebut mungkin akan melaporkan ke penegak hukum, jika merasa perlu. Penanganan sesuai dengan aturan yang ada di organisasi KEMENPORA.', 12, 1, '2017-06-20 01:58:39', '2017-09-24 04:37:43'),
(13, 'Apakah akan ada proses penyelidikan setelah laporan dibuat ?', 'Dilakukannya proses penyelidikan akan tergantung pada berbagai faktor seperti informasi yang diberikan, rincian kejadian, dokumentasi dan kebijakan KEMENPORA. Tim Penanganan Laporan  akan memutuskan tindakan lanjut yang diperlukan ketika mereka menerima laporan.', 13, 1, '2017-06-20 01:58:56', '2017-09-24 04:38:01'),
(14, 'Informasi pribadi apa yang akan dikumpulkan oleh WBS-KEMENPORA tentang anda atau orang lain?', 'Waktu anda melakukan panggilan ke WBS-KEMENPORA, kami akan mengumpulkan informasi tentang pelaporan dan orang-orang yang dilaporkan oleh pelapor.', 14, 1, '2017-06-20 01:59:15', '2017-09-24 04:38:27'),
(15, 'Bagaimana WBS-KEMENPORA menggunakan atau mengungkapkan informasi pribadi yang didapat?', 'WBS-KEMENPORA akan mempertimbangkan cara yang paling tepat untuk menggunakan atau mengungkapkan informasi pribadi yang diberikan kepadanya selama dapat membantu tindakan lanjut dugaan pelanggaran yang dilaporkannya.', 15, 1, '2017-06-20 01:59:34', '2017-09-24 04:38:48'),
(16, 'Apa yang terjadi kemudian?', 'Setelah laporan diterima maka dalam waktu 1 hari akan diteruskan oleh Tim Penerima Laporan kepada APIP, dimana laporan tersebut akan ditelaah kemudian ditindalanjuti sesuai dengan jalur yang telah ditetapkan sampai dengan turun keputusan jelas dari laporan anda.\nSetiap status laporan yang diproses akan diinformasikan kemajuan statusnya kepada pelapor melalui Aplikasi WBS-KEMENPORA. Pelapor wajib mendaftarkan email jika ingin memantau status kemajuan laporan yang dikirimkan.', 16, 1, '2017-06-20 01:59:55', '2017-09-24 04:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_laporan`
--

CREATE TABLE `kategori_laporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_laporan`
--

INSERT INTO `kategori_laporan` (`id`, `kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Dugaan Penyuapan', 'a.	Menyuap dengan memberi atau menjanjikan sesuatu kepada Pegawai KEMENPORA dengan maksud tertentu yang bertentangan dengan kewajibannya;\nb.	Menyuap dengan memberi sesuatu atau berhubungan dengan sesuatu kepada Pegawai KEMENPORA dengan maksud tertentu;\nc.	Memberi dan menerima hadiah kepada Pegawai KEMENPORA karena jabatannya atau tugasnya;\nPegawai KEMENPORA menerima suap;', '2016-11-18 03:57:30', '2017-11-19 09:17:10'),
(2, 'Dugaan Pemerasan/Pungutan liar', 'a.	Pegawai KEMENPORA yang melakukan perbuatan pemerasan/Pungutan liar sesama Pegawai KEMENPORA.\nPegawai KEMENPORA yang melakukan perbuatan pemerasan/Pungutan liar terhadap pihak lain.', '2016-11-18 03:57:30', '2017-11-19 09:16:42'),
(3, 'Dugaan Gratifikasi', 'Pegawai KEMENPORA yang menerima gratifikasi dan tidak lapor ke Unit Pengendalian Gratifikasi (UPG)/KPK yang sudah melewati batas waktu yang ditetapkan.', '2016-11-18 03:57:30', '2017-11-19 09:16:02'),
(4, 'Dugaan Kecurangan', 'a.	Pegawai KEMENPORA melakukan kecurangan dalam pertanggungjawaban kegiatan seperti: mark up kuitansi, memalsukan stempel/tanda tangan, meminjam nama Pegawai KEMENPORA lain dalam suatu kegiatan.\nPegawai KEMENPORA terlibat secara fiktif dalam suatu kegiatan.', '2016-11-18 03:57:30', '2017-11-19 09:16:12'),
(5, 'Dugaan Potensi Kerugian Negara', 'a.	Perbuatan melawan hukum untuk memperkaya diri atau orang lain yang dapat merugikan keuangan negara.\nb.	Menyalahgunakan kewenangan untuk menguntungkan diri atau orang lain yang dapat merugikan keuangan negara.', '2016-11-18 03:57:30', '2017-06-20 02:01:12'),
(6, 'Dugaan Pelayanan masyarakat', 'Keluhan terhadap pelayanan masyarakat yang diselenggarakan oleh KEMENPORA.', '2016-11-18 03:57:30', '2017-11-19 09:16:34'),
(7, 'Dugaan Benturan Kepentingan', 'Pegawai KEMENPORA turut serta dalam pengadaan barang/jasa yang diurusnya.\n	Pegawai KEMENPORA karena tugasnya berpotensi benturan kepentingan.', '2016-11-18 03:57:30', '2017-11-19 09:15:54'),
(8, 'Dugaan Penyalahgunaan wewenang / jabatan', 'a.	Pegawai KEMENPORA menyalahgunakan uang atau membiarkan penyalahgunaan uang;\nb.	Pegawai KEMENPORA memalsukan bukti untuk pemeriksaan administrasi;\nc.	Pegawai KEMENPORA menghancurkan bukti;\nd.	Pegawai KEMENPORA membiarkan orang lain merusakkan bukti;\nPegawai KEMENPORA membantu orang lain merusakkan bukti.', '2016-11-18 03:57:30', '2017-11-19 09:16:53'),
(9, 'Dugaan Pelanggaran kode etik/Aturan kepegawaian', 'a.	Pegawai KEMENPORA membocorkan informasi Instansi, seperti mengenai anggaran, penawaran dari pemasok, dan lainnya kepada orang-orang lain yang tidak berwenang.\nPegawai KEMENPORA melakukan tindakan yang melanggar ketentuan dan peraturan Instansi.', NULL, '2017-11-19 09:16:26'),
(10, 'Dugaan Ketatalaksanaan', 'a.	Pegawai KEMENPORA menjalankan tugas mereka diluar kebijakan-kebijakan, anggaran dasar, prosedur dan instruksi yang telah dibuat.\nPegawai KEMENPORA melakukan tindakan yang melanggar hukum dan perundangan Negara.', '2017-06-20 02:04:36', '2017-11-19 09:16:19'),
(11, 'Lain - Lain', 'Ketegori lain yang belum disebutkan diatas', '2017-07-05 21:43:39', '2017-07-06 18:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_laporan`
--

CREATE TABLE `konfirmasi_laporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `laporanUuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `tipeKonfirmasi` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `konfirmasi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `linkKonfirmasi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `konfirmasi_laporan`
--

INSERT INTO `konfirmasi_laporan` (`id`, `laporanUuid`, `userId`, `tipeKonfirmasi`, `konfirmasi`, `created_at`, `updated_at`, `linkKonfirmasi`) VALUES
(1, '2b3d8fd0-48c7-11e8-a1b5-53889e0b5df3', 3, '3', 'Tolong tambahkan bukti yang lebih mendukung', '2018-04-25 20:51:20', '2018-04-25 20:51:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_lain`
--

CREATE TABLE `laporan_lain` (
  `id` int(10) UNSIGNED NOT NULL,
  `deskripsiSingkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `kategoriLaporan` int(10) UNSIGNED NOT NULL,
  `question1` longtext COLLATE utf8_unicode_ci,
  `question2` longtext COLLATE utf8_unicode_ci,
  `question3` longtext COLLATE utf8_unicode_ci,
  `question4` longtext COLLATE utf8_unicode_ci,
  `question5` longtext COLLATE utf8_unicode_ci,
  `question6` longtext COLLATE utf8_unicode_ci,
  `question7` longtext COLLATE utf8_unicode_ci,
  `question8` longtext COLLATE utf8_unicode_ci,
  `question9` longtext COLLATE utf8_unicode_ci,
  `question10` longtext COLLATE utf8_unicode_ci,
  `question11` longtext COLLATE utf8_unicode_ci,
  `question12` longtext COLLATE utf8_unicode_ci,
  `kategoriPengirim` int(11) NOT NULL,
  `statusId` int(10) UNSIGNED NOT NULL,
  `jalurId` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handphoneNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identityNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggalDikirim` datetime DEFAULT NULL,
  `uploadFile` longtext COLLATE utf8_unicode_ci,
  `noRegistrasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `spam` longtext COLLATE utf8_unicode_ci,
  `noteSpi` longtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laporan_lain`
--

INSERT INTO `laporan_lain` (`id`, `deskripsiSingkat`, `deskripsi`, `kategoriLaporan`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `kategoriPengirim`, `statusId`, `jalurId`, `email`, `fullname`, `address`, `phoneNumber`, `handphoneNumber`, `identityNumber`, `tanggalDikirim`, `uploadFile`, `noRegistrasi`, `created_at`, `updated_at`, `uuid`, `spam`, `noteSpi`) VALUES
(1, 'test', 'test', 2, '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 2, '', 'asdasdasd', '', '123123123', '', '', NULL, NULL, '260418072823', '2018-04-26 00:28:23', '2018-04-26 00:28:23', 'bab5f440-48e8-11e8-af71-192bd859b3e2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_web`
--

CREATE TABLE `laporan_web` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `deskripsiSingkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `kategoriLaporan` int(10) UNSIGNED NOT NULL,
  `question1` longtext COLLATE utf8_unicode_ci,
  `question2` longtext COLLATE utf8_unicode_ci,
  `question3` longtext COLLATE utf8_unicode_ci,
  `question4` longtext COLLATE utf8_unicode_ci,
  `question5` longtext COLLATE utf8_unicode_ci,
  `question6` longtext COLLATE utf8_unicode_ci,
  `question7` longtext COLLATE utf8_unicode_ci,
  `question8` longtext COLLATE utf8_unicode_ci,
  `question9` longtext COLLATE utf8_unicode_ci,
  `question10` longtext COLLATE utf8_unicode_ci,
  `question11` longtext COLLATE utf8_unicode_ci,
  `question12` longtext COLLATE utf8_unicode_ci,
  `kategoriPengirim` int(11) NOT NULL COMMENT 'mengenai informasi pribadi',
  `statusId` int(10) UNSIGNED NOT NULL,
  `tanggalDikirim` datetime DEFAULT NULL,
  `noRegistrasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `spam` longtext COLLATE utf8_unicode_ci,
  `noteSpi` longtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laporan_web`
--

INSERT INTO `laporan_web` (`id`, `userId`, `deskripsiSingkat`, `deskripsi`, `kategoriLaporan`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `kategoriPengirim`, `statusId`, `tanggalDikirim`, `noRegistrasi`, `created_at`, `updated_at`, `uuid`, `spam`, `noteSpi`) VALUES
(1, 425, 'Gratifikasi di Biro A', 'pemberian hadiah kepada kepala biro A', 3, '2018/04/25 10:25', 'pa budi kepala biro A', 'ya, ibu Ani', 'ya, Saya sendiri', '', '', '', '3 kali', 'ya', 'tidak', 'belum ', 'tidak', 1, 6, '2018-04-26 03:52:04', '260418032809', '2018-04-25 20:28:09', '2018-04-25 21:00:58', '2b3d8fd0-48c7-11e8-a1b5-53889e0b5df3', NULL, 'keputusan'),
(2, 429, 'rekayasa lelang', 'kecurangan lelang ', 4, '', '', '', '', '', '', '', '', '', '', '', '', 1, 3, '2018-04-26 04:35:17', '260418042727', '2018-04-25 21:27:27', '2018-04-25 21:35:17', '73c2f130-48cf-11e8-8af2-7724a71f1f6e', NULL, NULL),
(3, 430, 'tes pelaporan', 'tes pelaporan', 2, '', '', '', '', '', '', '', '', '', '', '', '', 2, 6, '2018-04-26 04:35:02', '260418043105', '2018-04-25 21:31:05', '2018-04-25 21:46:23', 'f5b56620-48cf-11e8-9831-3f011033be11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_jalur_laporan`
--

CREATE TABLE `master_jalur_laporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `jalur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_jalur_laporan`
--

INSERT INTO `master_jalur_laporan` (`id`, `jalur`, `created_at`, `updated_at`) VALUES
(1, 'Website', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(2, 'Telepon', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(3, 'SMS', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(4, 'Fax', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(5, 'Email', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(6, 'Kirim Surat', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(7, 'Lainnya', '2016-11-18 03:57:30', '2016-11-18 03:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `master_status_laporan`
--

CREATE TABLE `master_status_laporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_status_laporan`
--

INSERT INTO `master_status_laporan` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Menunggu', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(2, 'Tidak Diteruskan', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(3, 'Diteruskan', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(4, 'Sedang Diproses', '2016-11-18 03:57:30', '2016-12-27 13:26:04'),
(5, 'Tidak Terbukti', '2016-11-18 03:57:30', '2016-12-27 13:26:04'),
(6, 'Selesai', '2016-11-18 03:57:30', '2016-12-27 13:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '2014_10_10_075319_create_roles_tables', 1),
(80, '2014_10_12_000000_create_users_table', 1),
(81, '2014_10_12_100000_create_password_resets_table', 1),
(82, '2016_10_14_031603_create_master_status_laporan_table', 1),
(83, '2016_10_14_031631_create_master_jalur_laporan_table', 1),
(84, '2016_10_14_140901_create_kategori_laporan_table', 1),
(85, '2016_10_14_160934_create_laporan_web_table', 1),
(86, '2016_10_17_064726_create_laporan_lain_table', 1),
(87, '2016_11_16_153741_add_field_uuid_to_laporan_web', 1),
(88, '2016_11_16_153749_add_field_uuid_to_laporan_lain', 1),
(89, '2016_11_16_154225_create_table_konfirmasi_laporan', 1),
(90, '2016_11_17_142450_add_field_linkKonfirmasi_to_kategori_laporan', 1),
(91, '2016_12_27_143649_add_field_spam_to_laporan_web', 2),
(92, '2016_12_27_143807_add_field_spam_to_laporan_lain', 2),
(93, '2016_12_27_143922_add_field_note_spi_to_laporan_web', 2),
(94, '2016_12_27_143931_add_field_note_spi_to_laporan_lain', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hary.purnomo87@gmail.com', 'e8b4812788926ba1879ce6e0917380f953413c731981386e73838137bd3b10b6', '2018-04-09 22:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Member', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(2, 'Sekretariat WBS', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(3, 'Tim Pelaksana WBS', '2016-11-18 03:57:30', '2016-11-18 03:57:30'),
(4, 'Super Administrator', '2016-11-18 03:57:30', '2016-11-18 03:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nip` varchar(22) COLLATE utf8_unicode_ci DEFAULT NULL,
  `golongan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan` text COLLATE utf8_unicode_ci,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `handphoneNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identityNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roleId` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `nip`, `golongan`, `jabatan`, `address`, `phoneNumber`, `handphoneNumber`, `identityNumber`, `roleId`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'sekretariat@kemenpora.go.id', '$2y$10$8D3xQrYRtoCmpgC.JJmn6uFIieHViUkkoPOe5HkgPMzQkDe3W0216', 'Sekretariat WBS', NULL, NULL, NULL, 'Jl. Swadaya No. 1', '0218839993', '08919191999', '8585858585858', 2, 'MloYiMoz9rF1jxcpQiBs4kkOW6566eKyI9wv3UmGJnkRogOw1FMYb6FKZ6B5', '2016-11-14 07:35:47', '2018-04-26 00:29:07'),
(4, 'timpelaksana@kemenpora.go.id', '$2y$10$8D3xQrYRtoCmpgC.JJmn6uFIieHViUkkoPOe5HkgPMzQkDe3W0216', 'Tim Pelaksana WBS', NULL, NULL, NULL, 'Jl. Akbar No. 1', '02199991111', '08784949494', '77717111111', 3, 'g4b2Um9OzQysGaSYmtlm6fc8o05P2eQqPHOczHcMmUBFnxkAW7f7YNqSoQq1', '2016-11-14 07:35:47', '2018-05-11 01:44:26'),
(5, 'superadmin@kemenpora.go.id', '$2y$10$8D3xQrYRtoCmpgC.JJmn6uFIieHViUkkoPOe5HkgPMzQkDe3W0216', 'Super Admin WBS', NULL, NULL, NULL, 'Jl. Adamant No. 1', '02188887711', '089919191', '494081294819', 4, 'jYUb7imnLatXF1lS8VgImaYhzp96eEXEXZSqbMOANZVfOvgHAZQpGI4yfPG7', '2016-11-14 07:35:47', '2018-05-11 01:07:18'),
(420, 'asti@gmail.com', '$2y$10$YNtKSwRYIUvVUkA4BVqB1OYpc5VB2vJA0YdYaITsyfTZ98liXPGRO', 'asti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-12-03 20:15:33', '2017-12-03 20:15:33'),
(423, 'hary.purnomo87@gmail.com', '$2y$10$9ztFNF75BU/OUG5pQHbWleBiALofaMmld.cTCemDPdzyCeXQZWCuS', 'hary purnomo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'e2ugSWLCHY7lTnHS0IVlwD6kH3Wh8oExBaLvHbOxw28B3CymHQUmfglpNy7n', '2018-04-25 09:47:11', '2018-04-25 19:53:02'),
(21, '', '$2y$10$EVH8Fmg/Vid0JXHUw6VUhO5xlOGv8ArEbbo8HJKz0JhsYFOgdY0SG', 'User Internal', '196012011986031112', 'III/d', 'Staf Subbagian Mutasi dan Jabatan Fungsional', '', '', '', '', 1, '7IsBdLsyrHPU76Lfpj96GQbbV4fWhKOHxoiAZE0FzcXsYKdyTQfNRocS0vSy', '2017-06-12 02:31:56', '2018-04-25 21:08:26'),
(424, 'audrey.hasaniy@gmail.com', '$2y$10$QLouyZepiZ5.jYlT9l5fsu8uWbxt3m1D3iG7LQ30ZlC91Rap8S7.S', 'Audry Ahmad Jahid Hasani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '6s1xBx9k5w4BvoMoBgO6wGuLJl3axSH2hOOwSYYJ0ffygaRoT3iVDfULxkW5', '2018-04-25 20:12:09', '2018-04-25 20:35:27'),
(425, 'agus1302@gmail.com', '$2y$10$q9alU2kABXSIAuYrerFpDeBcjtEY2pzRcyVp9O.JERQ0QgE7MlnFW', 'Agus Rachmanto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'AcE56PsWmICXbTAScfV0VHsfiJKkGPf8ZKjBQjqfDUF9d1VGlS4tW5koQInm', '2018-04-25 20:20:58', '2018-04-25 20:37:59'),
(426, 'rama_saputra2001@yahoo.com', '$2y$10$VuNBpQrwmSAatH/C6TFLEObM3ATWSockC/X.BxUp6ezkQ7fDamP.K', 'Fanny R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'J54jPUeMpU0stZunzEX6fKzyrxogwoPSqSTqsSY11Mg3t8ER7SGdKKyjEdoc', '2018-04-25 20:21:58', '2018-04-25 21:06:55'),
(427, 'syam.sriono@gmail.com', '$2y$10$vXVg1f.d7/KJ5/4uhtlvl./SV5kji/m1uKR11MX0AyTXnQLZ2fGCa', 'Syam Sriono', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-04-25 20:24:08', '2018-04-25 20:24:08'),
(428, 'okky.maulana@gmail.com', '$2y$10$onhOPSySqBPL/GRQe4saL.pdKcM6ADfEzxocCW3uw5kGojwECgeRm', 'Okky Maulana', NULL, NULL, NULL, 'Cibubur', '', '087782287789', NULL, 1, 'TMNZrgpIP8dIdrlsdlJvHteu67kCapyueX4PjDMjpQ7eLuXoeaPOTgYvvAUJ', '2018-04-25 21:07:40', '2018-04-25 21:12:23'),
(429, 'sulardisetiyo@rocketmail.com', '$2y$10$mutJmwe11modQ/GMieDBl.qPKndZ1wnXu32wNrYux7hHySAnu3kRu', 'sulardi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'B0EGJG7nBRpj6qVfL6vv5xmPCkf7YwkEByDcACNYxpqxdVvlqrYxZrRjEvx4', '2018-04-25 21:22:10', '2018-04-25 21:28:07'),
(430, 'angga.cipta@gmail.com', '$2y$10$xDudbZDG2l/5931MyL8OkeZUzQYBIBngVYCFmLtLPK1L38ZVUmn3a', 'angga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'xaSRNY3LjC7KNG3ZHTOEwDBOUN8eVTG3AcYQqa47aA3XhiMPJp1gSEgy6Vk8', '2018-04-25 21:24:11', '2018-04-25 21:34:16'),
(431, 'adhika.trisnadp@gmail.com', '$2y$10$9m4D4Bhu2JUnQQUPcqZFX.XX9Kj.IDfdnKQys8iStHGfPyAuva4SG', 'Adhika Trisna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '71qjUSMZM86Bea85JipFHQfeqKrNAIkGxx0I2JwF1GyD6nX8ybajBLff3YsA', '2018-05-07 00:28:08', '2018-05-08 02:23:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_laporan_web`
--
ALTER TABLE `bukti_laporan_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_nourut_unique` (`noUrut`);

--
-- Indexes for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_laporan`
--
ALTER TABLE `konfirmasi_laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konfirmasi_laporan_userid_foreign` (`userId`);

--
-- Indexes for table `laporan_lain`
--
ALTER TABLE `laporan_lain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laporan_lain_uuid_unique` (`uuid`),
  ADD KEY `laporan_lain_kategorilaporan_foreign` (`kategoriLaporan`),
  ADD KEY `laporan_lain_statusid_foreign` (`statusId`),
  ADD KEY `laporan_lain_jalurid_foreign` (`jalurId`);

--
-- Indexes for table `laporan_web`
--
ALTER TABLE `laporan_web`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laporan_web_uuid_unique` (`uuid`),
  ADD KEY `laporan_web_userid_foreign` (`userId`),
  ADD KEY `laporan_web_kategorilaporan_foreign` (`kategoriLaporan`),
  ADD KEY `laporan_web_statusid_foreign` (`statusId`);

--
-- Indexes for table `master_jalur_laporan`
--
ALTER TABLE `master_jalur_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_status_laporan`
--
ALTER TABLE `master_status_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `users_roleid_foreign` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_laporan_web`
--
ALTER TABLE `bukti_laporan_web`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `konfirmasi_laporan`
--
ALTER TABLE `konfirmasi_laporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan_lain`
--
ALTER TABLE `laporan_lain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan_web`
--
ALTER TABLE `laporan_web`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_jalur_laporan`
--
ALTER TABLE `master_jalur_laporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_status_laporan`
--
ALTER TABLE `master_status_laporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
