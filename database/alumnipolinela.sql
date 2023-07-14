-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 10:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnipolinela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `idalumni` int(11) NOT NULL,
  `namaalumni` varchar(255) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tahunlulus` year(4) NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`idalumni`, `namaalumni`, `npm`, `jeniskelamin`, `ipk`, `jurusan`, `prodi`, `angkatan`, `tahunlulus`, `foto`, `email`, `created_at`) VALUES
(10, 'Feni Marlina', '21753014', 'Perempuan', '5', 'Teknik Sipil', 'D-III Teknik Mesin MR', '2021', '2023', '1688642208_a91a26d02db02652cc8c.jpg', 'fenimarlina2802@gmail.com', '0000-00-00 00:00:00'),
(11, 'Garnis Warningsiun', '21753015', 'Perempuan', '5', 'Bahasa Inggris', 'D-IV Manajemen Bisnis', '2021', '2023', '1688642297_e27ddc87f74dedfcf544.jpeg', 'garnisbaturaja123@gmail.com', '0000-00-00 00:00:00'),
(12, 'Neyla Sapta Utami', '21753025', 'Perempuan', '6', 'Administrasi Bisnis', 'D-III Administrasi Bisnis', '2021', '2023', '1688642391_acd65eabef2906072e36.jpeg', 'neylasapta@gmail.com', '0000-00-00 00:00:00'),
(13, 'Rifka Sisiliana', '21753030', 'Perempuan', '10', 'Manajemen Informatika', 'D-III Teknik Komputer', '2021', '2023', '1688642473_32fa310f32b2005c5582.jpeg', 'rifkasisiliana33@gmail.com', '0000-00-00 00:00:00'),
(14, 'Yolanda Agatha', '21753036', 'Perempuan', '20', 'Teknik Sipil', 'D-IV Usaha Perjalanan Wisata', '2021', '2023', '1688642768_9649f16db93178eda4fd.jpeg', 'yolanda18032004@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `infowisuda`
--

CREATE TABLE `infowisuda` (
  `idinfowisuda` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` text NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infowisuda`
--

INSERT INTO `infowisuda` (`idinfowisuda`, `judul`, `tanggal`, `deskripsi`, `foto`, `updated_at`, `created_at`) VALUES
(5, 'Polinela Gelar Wisuda Periode 27 November 2021 Secara Luring', '2021-07-05', '<p>Polinela, Senin (29/11/2021).Wisuda Tahun Akademik 2020/2021 periode 27 November 2021 diikuti 195 lulusan yang berlangsung secara luring di Gedung Serba Guna dan disiarkan melalui kanal Youtube Politeknik Negeri Lampung:&nbsp;<a href=\"https://youtu.be/YDB0npiuXb8\">https://youtu.be/YDB0npiuXb8</a>.</p>\r\n\r\n<p>Kelulusan pada wisuda periode ini merupakan yang ke 42 (empat puluh dua) sejak berdirinya Politeknik Negeri Lampung atau yang ke 32 (tiga puluh dua) kalinya bagi Politeknik Negeri Lampung setelah mandiri sebagai salah satu Perguruan Tinggi Negeri di bawah Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi yang berada di daerah Lampung. Dari 195 orang wisudawan berasal 33 orang Wisudawan dari 5 jurusan dan tersebar 5 Program Studi Sarjana Terapan (S1 Terapan) dan 162 orang wisudawan dari 11 Program Studi Program Studi Diploma III. Dengan dikukuhkan kelulusan mahasiswa periode 27 Novembr 2021 Tahun Akademik 2020/2021, maka menambah Jumlah Lulusan Sarjana Terapan (S1 Terapan) dan Ahli Madya (D3) Polinela dari tahun 1992 sampai saat ini, menjadi 9.843 orang.</p>\r\n\r\n<p>Dalam sambutannya, Direktur Polinela Dr.Ir.Sarono,M.Si menyampaikan bahwa saat ini dunia telah memasuki era 4.0 di masa Pandemi Covid-19 sehingga kehidupan berjalan kearah teknologi.&rdquo;Kondisi ini mengharuskan kami semua termasuk anda para wisudawan/i Polinela TA 2020/2021 untuk cepat beradaptasi dengan kondisi yang ada,&rdquo;jelasnya. Kemudian Wisudawan/ti yang selama perkuliahan dua tahun terakhir dimasa Pandemi Covid-19 sudah terbiasa perkuliahan, bimbingan maupun konsultasi secara dalam jaringan (daring).&rdquo;Jadi saya yakin Anda semua yang di wisuda saat ini sudah terampil, berdaya saing serta siap menjalani kehidupan berbasis teknologi&rdquo;, ucapnya.</p>\r\n\r\n<p>Dr. Ir. Sarono, M.Si. menyampaikan lima pesan untuk para wisudawan/ti yaitu : Pertama, Jagalah kesantunan kepada Allah,Orang Tua,Teman dan Alam Semesta; Kedua, Disiplin terhadap waktu dan lainnya;Ketiga, Jadilah Insan belajar sejati artinya teruslah belajar dari sumber manapun; Keempat, Jadilah Pribadi yang optimis dalam hidup; Kelima, Sandarkan pada Allah agar mampu mengarungi kehidupan secara optimal.</p>\r\n', '1688546878_0f71143b212b80d59884.jpg', '2023-07-05 08:47:58', '2023-07-05 08:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-05-16-075112', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1684290163, 1),
(2, '2023-05-16-144438', 'App\\Database\\Migrations\\Produk', 'default', 'App', 1684290163, 1),
(4, '2023-05-22-115400', 'App\\Database\\Migrations\\Pengguna', 'default', 'App', 1684756681, 2),
(7, '2023-05-30-070829', 'App\\Database\\Migrations\\Pembelian', 'default', 'App', 1685672493, 3),
(8, '2023-05-30-070852', 'App\\Database\\Migrations\\PembelianProduk', 'default', 'App', 1685672493, 3),
(9, '2023-05-30-070904', 'App\\Database\\Migrations\\Pembayaran', 'default', 'App', 1685672493, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama`, `email`, `password`, `nohp`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '085783996052', '2023-05-22 13:00:38', '2023-07-05 08:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`idalumni`);

--
-- Indexes for table `infowisuda`
--
ALTER TABLE `infowisuda`
  ADD PRIMARY KEY (`idinfowisuda`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `idalumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `infowisuda`
--
ALTER TABLE `infowisuda`
  MODIFY `idinfowisuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
