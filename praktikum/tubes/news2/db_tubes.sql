-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2022 pada 08.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(244) NOT NULL,
  `isi` text NOT NULL,
  `jenis` varchar(244) NOT NULL,
  `author` varchar(244) NOT NULL,
  `tahun` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `isi`, `jenis`, `author`, `tahun`, `gambar`) VALUES
(8, 'Kompetisi Web Company Design', 'Kompetisi Web Company Design ini diselenggarakan oleh PT Sinergi Merah Putih dengan total hadiah kurang lebih 1.500.000 rupiah.\r\nsetiap desain yang dipilih oleh industri, pembuat desain akan mendapatkan imbalan dari proses jual beli dengan harga 500.000 rupiah.\r\nsemua desain peserta yang memenuhi kualifikasi akan dipasarkan, desain peserta dipasarkan dalam bentuk katalog / etalase.\r\nKompetisi ini dimulai dari kualifikasi, penilaian dan penjurian, lalu diperoleh 1 pemenang', 'Pendidikan', 'PT Sinergi Merah Putih', 2022, 'g1.jpeg'),
(9, 'ENGLISH COMPETENCY TEST', 'English Competency Test ini diselenggarakan oleh Pusat Bahasa pada tanggal 29 Januari 2022 pada pukul 08.00 - 11.00 WIB.\r\nSetelah anda registrasi akun anda, mohon untuk menyimpan token yang anda peroleh dengan baik, karena token tersebut akan dipergunakan selamanya,\r\nterutama untuk keperluan login pada sistem ECT. jika anda melupakan token yang diperoleh, silahkan menghubungi Unit Pusat Bahasa.', 'Pendidikan', 'Pusat Bahasa', 2022, 'g2.jpeg'),
(10, 'PENDAFTARAN BEASISWA BAZNAS TELAH DIBUKA', 'Hallo ITTPizen 😉\r\nKamu mau mendaftar beasiswa Baznas? Pendaftaran beasiswa ini udah dibuka loh. Apa aja sih persyaratan yang dibutuhin buat daftar beasiswanya. Yuk cek postingan di atas !!!\r\n\r\nPeserta mengunduh semua formulir pendaftaran dan melengkapinya pada tautan. Pengajuan dari pihak kampus untuk beasiswa Baznas setiap 2 minggu sekali.\r\nTautan Formulir:\r\nbit.ly/FormBeasiswaBaznas-ITTP\r\n\r\nKHUSUS DOMISILI BANYUMAS\r\n\r\nDokumen yang diserahkan bersifat hardcopy dan dijilid sesuai urutan lalu diserahkan di Kemahasiswaan IT Telkom Purwokerto Ruang Rek-407 Gedung Rektorat pada jam kerja. Jangan lupa lengkapi semua dokumennya ya 🙌', 'Pendidikan', 'Bu Ira ', 2022, '61f790e352750.jpeg'),
(11, 'ITTP Road to PIMNAS 2022', 'Semangat Pagi!\r\nSehubungan dengan diadakannya Program Kreativitas Mahasiswa (PKM) 2022, berikut adalah Timeline Kegiatannya: \r\n- 20 November 2021 : Solialisasi dan Pelatihan \r\n- 10 Januari 2022: Batas Akhir Pendaftaran\r\n- 16 Januari 2022: Pendampingan PKM \r\n- Maret 2022 : Submit PKM\r\n\r\nBerikut Syarat Lomba dan Benefit: \r\nSyarat: \r\n- Draf/naskah PKM sesuai dengan pedoman - Setiap tim, terdiri dari 3 mahasiswa angkatan berbeda \r\n- PKM yang dilombakan PKM-RE, PKM-K, PKM-GT, PKM-PI, PKM-KC, PKM-GFK\r\n\r\n Benefit:\r\n- 3 Terbaik akan memperoleh reward + pendampingan. \r\n- 50 Judul Terbaik akan mengikuti pendampingan intensif untuk submit ke nasional.', 'Pendidikan', 'Selamat Berlomba', 2022, '61f7918fd1dd1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(1, '1234', '$2y$10$Y4QSHF6SSaopld5leDm9L.NAy9FuyPu8hfW9u1SvvF4MjG2Ka6l/C'),
(2, 'admin', '$2y$10$C/Osgzk1dFD42H9IwiaX0Oec6cfgWcfbLsFLChuxhK.YsAJwBhxtK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
