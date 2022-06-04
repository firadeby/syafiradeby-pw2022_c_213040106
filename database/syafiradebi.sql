-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2022 pada 10.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syafiradebi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(300) NOT NULL,
  `username_admin` varchar(300) NOT NULL,
  `password_admin` varchar(300) NOT NULL,
  `email_admin` varchar(300) NOT NULL,
  `foto_admin` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`, `foto_admin`) VALUES
(1, 'Syafira Debi Sanjaya', 'adminsyafira', '$2y$10$Vm6gOS0ARoPP5/k5i4hud.yBuU8NF1fXYk1Z46IDDX27qrCrjpp/m', 'syafiradebi@gmail.com', '6294741186c26.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_materi`
--

CREATE TABLE `kategori_materi` (
  `id_ktgr` int(11) NOT NULL,
  `nama_ktgr` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_materi`
--

INSERT INTO `kategori_materi` (`id_ktgr`, `nama_ktgr`) VALUES
(1, 'Sejarah Indonesia'),
(2, 'Sejarah Dunia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_mtr` int(11) NOT NULL,
  `id_ktgr` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_up` date NOT NULL DEFAULT current_timestamp(),
  `gambar_mtr` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_mtr`, `id_ktgr`, `judul`, `isi`, `tanggal_up`, `gambar_mtr`) VALUES
(1, 1, 'Asal-Usul Pancasila', 'Setiap tanggal 1 Juni diperingati sebagai hari lahirnya Pancasila, yang merupakan dasar negara bangsa Indonesia. Masih ada beberapa hal yang menarik untuk dibahas mengenai Pancasila. Seperti siapa yang menjadi pelopor Pancasila? Kenapa dinamakan Pancasila? Sebenarnya apa makna dari Pancasila? Berikut ulasan yang harus kamu ketahui mengenai Pancasila.\r\n\r\n \r\n\r\nKonon katanya, sekitar tahun 1934-1938 di dekat pohon sukun yang berdiri menghadap ke laut adalah tempat yang digunakan Bung Karno untuk merenung. Para saksi sejarah menuturkan, bahwa yang direnungkan oleh Bung Karno adalah Pancasila. Kemudian di Ende, Flores, Bung Karno  merumuskan ide-ide besar yang diperoleh termasuk ideologi Pancasila.\r\n\r\n \r\n\r\nDalam sebuah buku autobiografi Bung Karno, beliau mengatakan, “Di pulau Bunga yang sepi tidak berkawan aku telah menghabiskan waktu berjam-jam lamanya merenungkan di bawah pohon kayu. Ketika itu datang ilham yang diturunkan oleh Tuhan mengenai lima dasar falsafah hidup yang sekarang dikenal dengan Pancasila. Aku tidak mengatakan, bahwa aku menciptakan Pancasila. Apa yang kukerjakan hanyalah menggali tradisi kami jauh sampai ke dasarnya dan keluarlah aku dengan lima butir mutiara yang indah.”\r\n\r\n \r\n\r\nHal berikutnya adalah mengenai kata Pancasila. Awal mula kata ini terbentuk adalah dari sidang Badan Usaha-Usaha Persiapan Kemerdekaan Indonesia (BPUPKI) yang berlangsung dari tanggal 29 Mei sampai 1 Juni 1945. Kala itu, Bung Karno memberikan nama dari lima prinsip dasar negara dengan Panca Dharma. Tapi menurut beliau itu tidak tepat. Setelah dibantu oleh teman yang merupakan ahli bahasa, muncullah nama Pancasila. “Sila berarti asas atau dasar dan diatas kelima dasar itu kita mendirikan Negara Indonesia,” papar Bung Karno kala itu.\r\n\r\n \r\n\r\nMakna Pancasila sebagai dasar negara adalah sebagai pedoman bagi masyarakat dan seluruh bangsa Indonesia dalam kehidupan berbangsa dan bernegara. Pancasila juga merupakan sebuah landasan jika ada hambatan atau gangguan yang menyerang bangsa Indonesia agar tetap kokoh berdiri dalam menghadapi berbagai persoalan.\r\n\r\n \r\n\r\nBung Karno menolak untuk disebut sebagai penemu Pancasila. Baginya, nilai-nilai yang ada di Pancasila sudah ada dan hidup di bumi dan merupakan tradisi bangsa Indonesia. (IO)\r\n\r\n \r\n\r\nSumber :\r\n\r\nhttp://www.berdikarionline.com/asal-usul-pancasila/\r\n\r\nhttps://news.detik.com/berita/3223139/cerita-bung-karno-soal-asal-mula-nama-pancasila ', '2022-05-28', '6295d44d6ea15.jpg'),
(5, 1, 'Sejarah Bandung', 'Sekitar akhir tahun 1808/awal tahun 1809, Bupati beserta sejumlah rakyatnya pindah dari Krapyak mendekati lahan bakal ibukota baru. Mula-mula Bupati tinggal di Cikalintu (daerah Cipaganti), kemudian pindah ke Balubur Hilir, selanjutnya pindah lagi ke Kampung Bogor (Kebon Kawung, pada lahan Gedung Pakuan sekarang). Bupati memimpin sejumlah rakyatnya, termasuk penduduk Kampung Balubur Hilir, membuka hutan pada lahan bakal ibukota (daerah Cikapundung hilir). Tidak diketahui secara pasti, berapa lama Kota Bandung dibangun. Akan tetapi, Kota itu dibangun bukan atas prakarsa Daendels, melainkan atas prakarsa Bupati Bandung, bahkan pembangunan kota itu dipimpin langsung oleh Bupati. Dengan kata lain Bupati R.A. Wiranatakusumah II adalah pendiri (The Founding Father) Kota Bandung.\r\nKota Bandung tidak berdiri bersamaan dengan pembentukan Kabupaten Bandung. Kota itu dibangun dengan tenggang waktu sangat jauh setelah Kabupaten Bandung berdiri. Kabupaten Bandung dibentuk pada sekitar pertengahan abad ke-17 Masehi, dengan Bupati pertama Tumenggung Wirangunangun. Ia memerintah Kabupaten Bandung beribukota di Krapyak (sekarang Dayeuhkolot), kira-kira 11 kilometer ke arah selatan dari pusat Kota Bandung sekarang. Ketika Kabupaten Bandung dipimpin oleh Bupati ke-6, yakni R.A. Wiranatakusumah II (1794-1829) yang dijiluki &quot;Dalem Kaum&quot;, kekuasaan di Nusantara beralih dari Kompeni kepada Pemerintah Hindia Belanda, dengan Gubernur Jenderal pertama Herman Willem Daendels (1808-1811). Untuk kelancaran menjalankan tugasnya di Pulau Jawa, Daendels membangun Jalan Raya Pos (Groote Poshweg) dari Anyer di ujung Jawa Barat ke Panarukan di ujung Jawa Timur (± 1000 kilometer). Pembangunan jalan raya itu dilakukan oleh rakyat pribumi di bawah pimpinan bupati daerah masing-masing.\r\n\r\nDi daerah Bandung khususnya dan daerah Priangan umumnya, Jalan Raya Pos mulai dibangun pertengahan tahun 1808, dengan memperbaiki dan memperlebar jalan yang telah ada. Di daerah Bandung sekarang, jalan raya itu adalah Jalan Jendral Sudirman – Jalan Asia Afrika - Jalan A. Yani, berlanjut ke Sumedang dan seterusnya. Untuk kelancaran pembangunan jalan raya, dan agar pejabat pemerintah kolonial mudah mendatangi kantor bupati, Daendels melalui Surat Tanggal 25 Mei 1810 meminta Bupati Bandung dan Bupati Parakanmuncang untuk memindahkan ibukota kabupaten, masing-masing ke daerah Cikapundung dan Andawadak (Tanjungsari) mendekati Jalan Raya Pos.\r\n\r\nRupanya Daendels tidak mengetahui, bahwa jauh sebelum surat itu keluar, Bupati Bandung sudah merencanakan untuk memindahkan ibukota Kabupaten Bandung, bahkan telah menemukan tempat yang cukup baik dan strategis bagi pusat pemerintahan.\r\n\r\nTempat yang dipilih adalah lahan kosong berupa hutan, terletak di tepi barat Sungai Cikapundung, tepi selatan Jalan Raya Pos yang sedang dibangun (pusat Kota Bandung sekarang). Alasan pemindahan ibukota itu antara lain, Krapyak tidak strategis sebagai pusat pemerintahan, karena terletak di sisi selatan daerah Bandung dan sering dilanda banjir bila musim hujan.\r\n\r\nSekitar akhir tahun 1808/awal tahun 1809, Bupati beserta sejumlah rakyatnya pindah dari Krapyak mendekati lahan bakal ibukota baru. Mula-mula Bupati tinggal di Cikalintu (daerah Cipaganti), kemudian pindah ke Balubur Hilir, selanjutnya pindah lagi ke Kampung Bogor (Kebon Kawung, pada lahan Gedung Pakuan sekarang). Bupati memimpin sejumlah rakyatnya, termasuk penduduk Kampung Balubur Hilir, membuka hutan pada lahan bakal ibukota (daerah Cikapundung hilir). Tidak diketahui secara pasti, berapa lama Kota Bandung dibangun. Akan tetapi, Kota itu dibangun bukan atas prakarsa Daendels, melainkan atas prakarsa Bupati Bandung, bahkan pembangunan kota itu dipimpin langsung oleh Bupati. Dengan kata lain Bupati R.A. Wiranatakusumah II adalah pendiri (The Founding Father) Kota Bandung. Kota Bandung diresmikan sebagai ibukota baru Kabupaten Bandung dengan besluit (surat kelulusan) Tanggal 25 September 1810. Hal ini berarti, selama belum ditemukan sumber lain yang menunjukan fakta lebih akurat mengenai berdirinya Kota Bandung, maka tanggal 25 September 1810 dapat dipertanggungjawabkan validitasnya sebagai &quot;Hari Jadi Kota Bandung&quot;.', '2022-05-30', '6295d5291dbd1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(300) NOT NULL,
  `username_pengguna` varchar(300) NOT NULL,
  `pasword_pengguna` varchar(300) NOT NULL,
  `email_pengguna` varchar(300) NOT NULL,
  `foto_pengguna` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username_pengguna`, `pasword_pengguna`, `email_pengguna`, `foto_pengguna`) VALUES
(1, 'Syafira Debi Sanjaya', 'usersyafira', '$2y$10$InfBatruy9tpTl910hUsoOETcEyxwkl9.BuZ1Fff7CXfT3lHG2f3G', 'syafiradebi@gmail.com', '629476bc6d664.png'),
(2, 'M Rizki Haikal', 'rizki123', '$2y$10$rccBL6eHAQ.6UqJvQPxM.O6b5.98Lhm/QQHWr4upNWtRsqbmsHQuW', 'mrizki@gmail.com', '6294af8011a52.jpg'),
(3, 'Satrio Adijaya', 'satrio90', '$2y$10$QbRaA.a7P.H47ofFZ2JSYOleXKqF5XhpzVlaXpU9f2DCbfVCVgFNu', 'satrio@gmail.com', '6294d8e6867c4.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  ADD PRIMARY KEY (`id_ktgr`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_mtr`),
  ADD KEY `kategori` (`id_ktgr`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  MODIFY `id_ktgr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_mtr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_ktgr`) REFERENCES `kategori_materi` (`id_ktgr`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
