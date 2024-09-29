-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 14 Bulan Mei 2024 pada 17.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblabout`
--
-- Kesalahan membaca struktur untuk tabel dbbengkel.tblabout: #1932 - Table &#039;dbbengkel.tblabout&#039; doesn&#039;t exist in engine
-- Kesalahan membaca data untuk tabel dbbengkel.tblabout: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `dbbengkel`.`tblabout`&#039; at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblheader`
--

CREATE TABLE `tblheader` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subjudul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblheader`
--

INSERT INTO `tblheader` (`id`, `judul`, `subjudul`) VALUES
(1, 'Daniel Motor', 'Level Up Your Day!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblnavbar`
--

CREATE TABLE `tblnavbar` (
  `id` int(10) NOT NULL,
  `servis` varchar(100) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblnavbar`
--

INSERT INTO `tblnavbar` (`id`, `servis`, `produk`, `about`, `team`, `contact`, `logo`) VALUES
(1, 'SERVICE', 'PRODUCT', 'ABOUT', 'FEEDBACK', 'CONTACT', 'logodanielmotor.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblnews`
--

CREATE TABLE `tblnews` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblnews`
--

INSERT INTO `tblnews` (`id`, `judul`, `isi`) VALUES
(1, 'Apa itu Tune Up?', 'Tune up adalah proses pemeliharaan rutin pada kendaraan untuk memastikan mesinnya beroperasi secara optimal. Proses ini melibatkan sejumlah tindakan seperti penggantian busi, penggantian filter udara dan bahan bakar, penyetelan injeksi bahan bakar, pemeriksaan sistem pengapian, dan pengecekan komponen lainnya yang berpengaruh terhadap kinerja mesin. Tujuannya adalah untuk meningkatkan efisiensi bahan bakar, memperpanjang umur mesin, serta menjaga kinerja dan keandalan kendaraan. Tune up biasanya direkomendasikan oleh produsen kendaraan setiap beberapa ribu mil atau setahun sekali, tergantung pada kondisi penggunaan kendaraan.'),
(2, 'Apa itu Overhaul?', 'Overhaul adalah proses pemeliharaan yang menyeluruh pada sebuah mesin atau sistem untuk mengembalikan kondisinya ke dalam kondisi yang optimal atau mendekati kondisi baru. Proses ini sering dilakukan pada mesin atau sistem yang telah beroperasi dalam jangka waktu yang lama atau telah melewati batas pemakaian normalnya.Overhaul melibatkan inspeksi, perawatan, dan penggantian komponen-komponen yang telah aus atau rusak. Tujuan utamanya adalah untuk memperpanjang umur pakai mesin atau sistem tersebut, meningkatkan efisiensi, dan mengurangi risiko kerusakan atau kegagalan di masa mendatang.'),
(3, 'Apa itu Turun Mesin?', 'Turun mesin adalah proses mengeluarkan atau melepaskan mesin dari kendaraan untuk perbaikan, pemeliharaan, atau penggantian komponen yang memerlukan akses langsung ke bagian-bagian mesin yang sulit dijangkau saat mesin masih terpasang di dalam kendaraan. Proses ini umumnya dilakukan di bengkel oleh mekanik terlatih dan melibatkan pelepasan sejumlah komponen terkait, seperti transmisi, poros penggerak, sistem pendingin, dan sistem pembuangan, sebelum mesin benar-benar dapat dikeluarkan dari kendaraan. Proses ini umumnya dilakukan di bengkel oleh mekanik terlatih dan melibatkan pelepasan sejumlah komponen terkait, seperti transmisi, poros penggerak, sistem pendingin, dan sistem pembuangan, sebelum mesin benar-benar dapat dikeluarkan dari kendaraan. Turun mesin sering diperlukan untuk penanganan permasalahan yang kompleks atau untuk melakukan pekerjaan perbaikan dan pemeliharaan yang lebih dalam terhadap mesin kendaraan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblproduk`
--

CREATE TABLE `tblproduk` (
  `id` int(10) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `namaproduk1` varchar(100) NOT NULL,
  `harga1` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblproduk`
--

INSERT INTO `tblproduk` (`id`, `gambar1`, `namaproduk1`, `harga1`, `stock`) VALUES
(1, '8new.png', 'OLI MESIn', '70k', '90'),
(2, '7new.png', 'TRANSMITION OIL', '70K', '110'),
(3, 'bateraimobil.png', 'AKI MOBBIL', '520K', '100'),
(4, 'velk.png', 'Berbagai Velk', 'Mulai dari 1 juta', '85'),
(5, 'ban.png', 'BAN', '450K', '97'),
(6, 'busi1.png', 'BUSI MOBIL', '60K', '77');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblprodukmobil`
--

CREATE TABLE `tblprodukmobil` (
  `id` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblprodukmobil`
--

INSERT INTO `tblprodukmobil` (`id`, `gambar`, `produk`, `harga`) VALUES
(1, 'MAINT.png', 'Powering Tune Up', 'Rp.850.000'),
(2, 'PAKET COMPLETE TUNE UP.png', 'Paket complete T', 'Rp.1.550.000'),
(3, 'MAINT.png', 'Mintenance AC', 'Rp.550.000'),
(4, 'MAINT.png', 'Paket Lengkap Maintenance AC', 'Rp.1.000.000'),
(6, 'PAKET TUNE UP.png', 'Paket Tune UP', 'Rp.850.000'),
(7, 'MAINT.png', 'Maintenance Mesin', 'Rp.600.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblservis`
--

CREATE TABLE `tblservis` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subjudul` text NOT NULL,
  `gambar1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblservis`
--

INSERT INTO `tblservis` (`id`, `judul`, `subjudul`, `gambar1`) VALUES
(1, 'Tune-Up', 'Proses pemeliharaan pada kendaraan untuk memastikan bahwa mesinnya bekerja optimal. ', 'tuneup.jpg'),
(2, 'Overhaul', 'Membongkar mesin kendaraan untuk memperbaiki komponen didalam mesin yang mengalami kerusakan. ', 'overhaul.jpg'),
(3, 'Services kaki-kaki Mobil', 'Servis kaki-kaki mobil meliputi pemeriksaan dan perawatan suspensi, rem, dan sistem kemudi, sehingga memastikan bahwa semua komponen berfungsi dengan baik.', 'kakimobil.jpg'),
(4, 'Ganti Oli', 'Menyediakan oli mesin dan juga jasa ganti oli', 'gantioli.jpg'),
(7, 'Perbaikan Mesin', 'Ini mencakup diagnosis dan perbaikan berbagai masalah mesin seperti kebocoran, overheat, ketukan, atau masalah kinerja mesin lainnya. Ini juga mencakup perawatan seperti tuning ', 'overhaul.jpg'),
(8, 'Perbaikan Sistem Rem', 'Ini mencakup pemeriksaan dan perbaikan pada sistem rem, termasuk penggantian kampas rem, cakram rem, silinder rem, atau perbaikan sistem hidrolik rem.', 'tuneup.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltentang`
--

CREATE TABLE `tbltentang` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subjudul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbltentang`
--

INSERT INTO `tbltentang` (`id`, `judul`, `subjudul`, `gambar`, `tentang`) VALUES
(1, 'About', 'Tentang Daniel Motor', 'daniel.jpg', 'Daniel Motor adalah \r\nbengkel mobil yang terletak di pusat kota dengan reputasi yang kuat dalam memberikan layanan perbaikan dan perawatan kendaraan bermotor. Didirikan oleh Daniel Smith, seorang mekanik berpengalaman dengan lebih dari 15 tahun di industri otomotif, bengkel ini telah melayani pelanggan setia sejak tahun 2005. Keunggulan Daniel Motor terletak pada kombinasi antara keahlian teknis yang tinggi dan pelayanan pelanggan yang ramah.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltestimoni`
--

CREATE TABLE `tbltestimoni` (
  `id` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbltestimoni`
--

INSERT INTO `tbltestimoni` (`id`, `gambar`, `nama`, `ulasan`) VALUES
(1, 'orang1.jpg', 'Alexa', '\"Saya telah menggunakan jasa Daniel Motor untuk servis mobil saya selama beberapa tahun terakhir dan saya sangat puas dengan kualitas pelayanan mereka. Mekaniknya sangat terampil dan profesional, mereka selalu melakukan pekerjaan dengan teliti dan tepat waktu. Harga yang mereka tawarkan juga sangat bersaing, membuat saya merasa bahwa saya mendapatkan nilai yang sangat baik untuk uang saya.\"'),
(2, 'orang4.jpg', 'Abisam', '\"Daniel Motor adalah bengkel mobil yang dapat diandalkan. Saya telah mengalami beberapa masalah dengan mobil saya dan setiap kali saya membawanya ke sana, mereka selalu menangani perbaikan dengan cepat dan efisien. Stafnya juga sangat ramah dan membantu, mereka selalu menjelaskan dengan jelas apa yang perlu diperbaiki dan mengapa. Saya sangat merekomendasikan bengkel ini kepada siapa pun yang membutuhkan layanan perbaikan mobil yang handal.\"'),
(3, 'orang3.jpg', 'Dedi Suryadi', '\"Pengalaman saya dengan Daniel Motor sangat memuaskan. Mereka tidak hanya ahli dalam melakukan perbaikan rutin, tetapi juga mampu menangani masalah yang lebih kompleks dengan baik. Saya sangat menghargai transparansi mereka dalam memberikan perkiraan biaya dan waktu perbaikan yang realistis. Setiap kunjungan ke bengkel ini selalu berakhir dengan hasil yang memuaskan dan mobil saya kembali berjalan dengan baik. Mereka adalah pilihan terbaik bagi saya ketika datang ke masalah mobil.\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblulasan`
--

CREATE TABLE `tblulasan` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblulasan`
--

INSERT INTO `tblulasan` (`id`, `email`, `nama`, `ulasan`) VALUES
(1, 'Abisam@gmail.com', 'ABI', 'menawarkan pelayanan luar biasa dengan staf yang ramah dan profesional. Mereka memberikan estimasi biaya yang jelas sebelum memulai pekerjaan dan memberikan pembaruan berkala selama proses perbaikan. '),
(2, 'Alexa@gmail.com', 'alexa', 'menawarkan pelayanan luar biasa dengan staf yang ramah dan profesional. Mereka memberikan estimasi biaya yang jelas sebelum memulai pekerjaan dan memberikan pembaruan berkala selama proses perbaikan. '),
(3, 'Kanjeng@gmail.com', 'kanjeng', 'Kualitas pekerjaan mereka sangat baik, menggunakan suku cadang berkualitas tinggi dan dilakukan oleh teknisi terlatih. Garansi yang diberikan juga menunjukkan kepercayaan mereka terhadap kualitas layanan mereka. '),
(4, 'Obito@gmail.com', 'obito', 'sangad bagus'),
(6, 'Ariq@gmail.com', 'ariq', 'pelayanannya sangat ramah'),
(7, 'Ariq@gmail.com', 'ariq', 'pelayanannya sangat ramah'),
(8, 'Ariana@gmail.com', 'Ariana', 'kurang bagus ah'),
(9, 'Ariana@gmail.com', 'Ariana', 'kurang bagus ah'),
(10, 'rin@gmail.com', 'rin', 'bagus kok'),
(11, 'ama@gmail.com', 'ama', 'keren'),
(12, 'iki@gmail.com', 'iki', 'hello world'),
(13, 'iki@gmail.com', 'iki', 'hello world'),
(14, 'iki@gmail.com', 'iki', 'hello world'),
(15, 'maulana@gmail.com', 'ucup', 'kok kuraang'),
(16, 'kentung@gmail.com', 'iki', 'test'),
(19, 'bagas@gmail.com', 'Bagas', 'pelaynannya keren'),
(20, 'fadlan@gmail.com', 'fadlan gamteng', 'bengkel ini bagus sekali'),
(21, 'abisam@hazim', 'abi', 'bengkel bagus\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`) VALUES
(1, 'Abisam', '$2y$10$w4ho/jcmUrdRQDLNoc0B0O33UTIhXIPOKT29iWwJxRbifk86m9eAK'),
(2, 'Umaru', '$2y$10$GcXGoI0WfJJJUk0FskkL3O8qS.MZFz3HV7GV94ASLFkai5.190vH2'),
(3, 'Alexa', '$2y$10$enZ2AU/cdAuPdQ9w1QoxrOHK4QrSEIzF4DJ2Yh9187KPxbXvfyU/i'),
(4, 'qawy', '$2y$10$iMCOfzuu7ORd2SjiMeF6quwM44vi9CFDRHrftbM/hAW1AL6g3KR7i'),
(5, 'Rafa', '$2y$10$Dt6LmzsRUle87SiixzcS7uDv3C3kxnCI6Ch9tCd99Mg1cwSpsprDS'),
(6, 'Fiqri', '$2y$10$Faa/fOjnRdwaBCBGsxTFVOarP669pqoW2bdL429glgFTK/xSgO5Mm'),
(7, 'Raisha', '$2y$10$f2LwyohUPtq0ThtslTQbSeUXm0quZXFrv6RL7y4H32sZKUxdzJJnG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblwhy`
--

CREATE TABLE `tblwhy` (
  `id` int(10) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `why` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblwhy`
--

INSERT INTO `tblwhy` (`id`, `icon`, `judul`, `why`) VALUES
(1, 'clock.svg', 'Pengalaman', 'Menunjukkan kepercayaan dan kepuasan pelanggan yang telah dibangun selama bertahun-tahun.'),
(2, 'like.svg', 'Kualitas Layanan', 'Kami berkomitmen untuk memberikan layanan berkualitas tinggi kepada pelanggan kami. '),
(3, 'home.svg', 'Tempat yang Nyaman', 'Daniel Motor terletak di pusat kota, sehingga mudah diakses dari berbagai lokasi.'),
(4, 'fasilitas1.svg', 'Fasilitas Nyaman', 'Bengkel tersebut menyediakan fasilitas tunggu yang nyaman bagi pelanggan yang memilih untuk menunggu sambil kendaraan mereka diperbaiki.'),
(5, 'pengerjaan.svg', 'Estimasi Kilat', 'Pengerjaan cepat, montir kami selalu memproriataskan ketepatan waktu pengerjaan untuk kepuasan costumer '),
(6, 'sukucadang.svg', 'Ketersediaan Suku Cadang', 'Memiliki akses yang baik ke berbagai suku cadang, baik yang orisinal maupun aftermarket, yang diperlukan untuk memperbaiki mobil dengan efisien.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblheader`
--
ALTER TABLE `tblheader`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblnavbar`
--
ALTER TABLE `tblnavbar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblproduk`
--
ALTER TABLE `tblproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblprodukmobil`
--
ALTER TABLE `tblprodukmobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblservis`
--
ALTER TABLE `tblservis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbltentang`
--
ALTER TABLE `tbltentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbltestimoni`
--
ALTER TABLE `tbltestimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblulasan`
--
ALTER TABLE `tblulasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblwhy`
--
ALTER TABLE `tblwhy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblheader`
--
ALTER TABLE `tblheader`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblnavbar`
--
ALTER TABLE `tblnavbar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tblproduk`
--
ALTER TABLE `tblproduk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tblprodukmobil`
--
ALTER TABLE `tblprodukmobil`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tblservis`
--
ALTER TABLE `tblservis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbltentang`
--
ALTER TABLE `tbltentang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbltestimoni`
--
ALTER TABLE `tbltestimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tblulasan`
--
ALTER TABLE `tblulasan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblwhy`
--
ALTER TABLE `tblwhy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
