-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 06:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemerintah`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isi` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `gambar`, `judul`, `isi`) VALUES
(42, 'pelatih-persib-bandung-luis-milla_169.jpeg', 'Dua Rekrutan Anyar Persib Curi Perhatian Luis Milla  ', 'Bandung - Persib Bandung melakoni laga uji coba melawan Persib U-21 di Stadion Sidolig. Dua pemain anyar Persib yakni I Putu Gede dan Ryan Kurnia dimainkan dalam laga tesebut. Persib menang telak 3-0 pada laga uji coba yang digelar, Jumat (9/6/2023) sore. Febri Hariyadi mencetak satu gol. Kemudian, Ciro Alves berhasil membuat brace.  Baca artikel detikjabar, &quot;Dua Rekrutan Anyar Persib Curi Perhatian Luis Milla&quot; selengkapnya https://www.detik.com/jabar/sepakbola/d-6765056/dua-rekrutan-anyar-persib-curi-perhatian-luis-milla.  Download Apps Detikcom Sekarang https://apps.detik.com/detik/'),
(43, 'bripka-andri-hermawan-anggota-polres-subang_169.jpeg', 'Bripka Andri, Polisi Bersuara Merdu dari Subang  Baca artikel detikjabar', 'Subang - Saat itu, waktu menunjukkan salat Zuhur. Lantunan suara merdu azan pun lantas terdengar berkumandang di Alun-alun Kecamatan Sagalaherang, Kabupaten Subang, Jawa Barat.\r\nSiapa sangka, pemilik suara merdu tersebut bukan warga biasa, melainkan seorang anggota kepolisian dari Polsek Sagalaherang, Polres Subang. Dia adalah Bripka Andri Hermawan yang bertugas menjadi Bhabinkamtibmas di Desa Curugagung, Subang.\r\n\r\nBaca artikel detikjabar, &quot;Bripka Andri, Polisi Bersuara Merdu dari Subang&quot; selengkapnya https://www.detik.com/jabar/berita/d-6765116/bripka-andri-polisi-bersuara-merdu-dari-subang.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/'),
(44, 'pelaku-perdagangan-orang-modus-penyalur-tenaga-kerja-di-garut-bakal-dihukum-berat-bar.jpg', 'Pelaku Perdagangan Orang Modus Penyalur Tenaga Kerja di Garut Bakal Dihukum Berat ', 'GARUT - Hukuman berat berupa penjara selama 15 tahun menanti penyalur tenaga kerja ilegal di Kabupaten Garut. Tak main-main, polisi mengklasifikasikan penyaluran tenaga kerja ilegal sebagai tindak pidana perdagangan orang (TPPO). Kapolres Garut AKBP Rio Wahyu Anggoro menyebut para pelaku penyalur tenaga kerja ilegal akan dijerat Pasal 297 KUHP dan UU No 21 Tahun 2007 tentang pemberantasan TPPO. &quot;Pelaku TPPO akan dikenakan Pasal 297 KUHP dan UU Nomor 21 Tahun 2007, hukuman penjara 15 tahun,&quot; kata AKBP Rio Wahyu Anggoro, Kamis (8/6/2023). Menurutnya aksi penyaluran tenaga kerja ilegal kembali marak terjadi di Kabupaten Garut. Dia pun mengungkap sejumlah modus yang digunakan para pelaku untuk menipu korbannya.\r\n\r\n'),
(45, 'pembukaan-rakernas-pdip-1_169.jpeg', 'Ganjar Bicara Mendalam dengan Jokowi: Saya Bisa Akses Semua  Baca artikel CNN Indonesia', 'Surabaya, CNN Indonesia -- Bakal calon presiden (bacapres) Ganjar Pranowo merasa beruntung bisa dekat dengan Presiden Joko Widodo. Ia mengaku bisa berbicara dengan Jokowi secara mendalam baru-baru ini.\r\nHal itu dikatakan Ganjar di hadapan para relawan saat menghadiri Rakernas II Sahabat Ganjar di Dyandra Convention Center, Surabaya, Sabtu (10/6).\r\n\r\nBaca artikel CNN Indonesia &quot;Ganjar Bicara Mendalam dengan Jokowi: Saya Bisa Akses Semua&quot; selengkapnya di sini: https://www.cnnindonesia.com/nasional/20230610202023-617-960180/ganjar-bicara-mendalam-dengan-jokowi-saya-bisa-akses-semua.\r\n\r\nDownload Apps CNN Indonesia sekarang https://app.cnnindonesia.com/'),
(46, 'kepala-bnn-komjen-petrus-reinhard-golose_169.jpeg', 'Heboh Bunker di UNM, BNN Sebut Prevalensi Narkoba di Kampus Tinggi  ', 'Jakarta - Badan Narkotika Nasional (BNN) turut menanggapi penemuan bunker narkoba yang sempat menyimpan 3 kilogram sabu lengkap dengan catatan transaksi jual belinya di Universitas Negeri Makassar (UNM), Makassar, Sulawesi Selatan (Sulsel). Dia mengatakan bahwa tingkat prevalensi di kampus cukup tinggi.\r\n&quot;Sudah saya katakan bahwa tingkat prevalensi cukup tinggi untuk di kampus. Mahasiswa dan pelajar dari 2019 itu hanya 1,10, kemudian naik menjadi 1,35. Walaupun masih di bawah daripada prevalensi nasional 1,95%, tetapi sudah dan apalagi prevalensi dunia 5,5%,&quot; kata Kepala BNN Komjen Petrus Reinhard Golose, kepada wartawan di Gereja Immanuel, Jakarta Pusat, Sabtu (10/6/2023).\r\n\r\nSalah satu yang menjadi bukti bahwa apabila pihaknya mendatangi kampus, selalu ada yang pernah menggunakan narkoba. Itu yang menjadi tugasnya saat ini untuk meminimalisir peredaran narkoba\r\n\r\nBaca artikel detiknews, &quot;Heboh Bunker di UNM, BNN Sebut Prevalensi Narkoba di Kampus Tinggi&quot; selengkapnya https://news.detik.com/berita/d-6766050/heboh-bunker-di-unm-bnn-sebut-prevalensi-narkoba-di-kampus-tinggi.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/'),
(47, '1204437_720.jpg', 'Demokrat Sambut Baik Pertemuan Puan dengan AHY: Pertama Kali Secara Resmi Setelah Hampir 20 Tahun', 'TEMPO.CO, Jakarta - Ketua Badan Pemenangan Pemilihan Umum (Bappilu) Partai Demokrat Andi Arief menyebut partainya menyambut baik rencana pertemuan Ketua Umum Agus Harimurti Yudhoyono atau AHY dengan Ketua DPP Partai Demokrasi Indonesia Perjuangan (PDIP) Puan Maharani. Jika persamuhan Demokrat dengan PDIP jadi digelar, Andi menyebut itu jadi momen pertama kalinya kedua partai bertemu secara resmi sejak 2004 alias 20 tahun yang lalu.\r\n\r\nMenurut Andi, pertemuan AHY dengan Puan ini diharapkan bisa menunjukkan adanya perubahan politik terhadap generasi baru. Bukan hanya Demokrat dengan PDIP, dia melanjutkan, melainkan juga berlaku kepada partai-partai lainnya mengingat tantangan bangsa ke depan mesti dihadapi bersama.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'jerry', '$2y$10$AsHh2o92ln4o2xtvYmna7Ok4OkU5ja8fvtu/0iFxzcobSbm04jfZm', ''),
(2, 'kaka', '$2y$10$e6vhUYjhX9dePiKf11gPlet4JdhQJ.Xwrvi2853P6PZnIGuL3skBm', ''),
(3, 'caca', '$2y$10$5iNM36LzrV6QTkywthkCLOP/zRAR7jzUvqnmuLZBQIIYJAYq1vfcK', ''),
(6, 'a', '$2y$10$qaSpjPmd3FxHeJouI3haD.LIrZ8cFpQK8YGI99i7AwvWHaQtG9qhq', 'user'),
(7, 'admin', '$2y$10$NKEywM/019G.sHTAtmbr3OU2Q6Us1vgmXg/r9pvjxvqtZnTNwulPm', 'admin'),
(8, 'jjj', '$2y$10$Gi4Yk4eamnnZrS/an22EDOUyXiCtXUwaVe.s9/L5QX6YbrLV4oJDW', 'user'),
(9, 'jjj', '$2y$10$R/AtNwADuZ.agepoXvUe8u.cECd3g6aGD.t6j5TGtGIeqWBC.ZunC', 'user'),
(10, 'oo', '$2y$10$PMJxZicPtgpacYtcaz.Tm.eQy5pIVOlpkBvZOtzadO4ex8JGrjaDq', 'user'),
(11, 'ccc', '$2y$10$JMGKxwsrhuGrMYP8xgv6guTG/1sF4lruuXUKmR5hVW0nWPblSYk5m', 'user'),
(12, 'kkk', '$2y$10$qE0.jL1Ja3OWTuScSgCH5uJ1DI1OTgGrwPzNmAhJH.GqAwYtV5lPS', 'user'),
(13, 'aa', '$2y$10$.pAcMHKQ6vBhSded1QimAuyoNCjnXm/RUeIODE1bp5RYzNbktifR.', 'user'),
(14, 'dd', '$2y$10$xhqyqn1vCMQ8uiu4f9ToAuJK4mv/pF/8s0A3wdoDQVBLU7yl0PXl2', 'user'),
(15, 'sss', '$2y$10$O64o1mQsvJJDu1/LGH4BwexfIdqd4pWuagrVW2lOEZ7ILbP2.7D/m', 'user'),
(16, 'bbb', '$2y$10$cSCE/QEc7G/PlUBQA8bFru/LA26G4/bZGqeAFUjh6niZeYuGjw0/i', 'user'),
(17, 'vvv', '$2y$10$KK.av3Dn/j/Pr5ji2U1GOevaGyUE.FZgVyoAdfZOL.4q5SHZLxIu.', 'user'),
(18, 'ccccc', '$2y$10$jmhwxebaK7j0bIQMsSN.Gu9BmK4TBm2MjFoxuiK4n05CaAn5E.iae', 'user'),
(19, 'nnn', '$2y$10$DjxGYxUYAaZo4qXyLTsiyuINrZOFYs8SGSlGltaO2IJi9ZOQqN9Ue', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
