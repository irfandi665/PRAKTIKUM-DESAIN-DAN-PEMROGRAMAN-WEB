-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2022 pada 06.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

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
(11, 'ITTP Road to PIMNAS 2022', 'Semangat Pagi!\r\nSehubungan dengan diadakannya Program Kreativitas Mahasiswa (PKM) 2022, berikut adalah Timeline Kegiatannya: \r\n- 20 November 2021 : Solialisasi dan Pelatihan \r\n- 10 Januari 2022: Batas Akhir Pendaftaran\r\n- 16 Januari 2022: Pendampingan PKM \r\n- Maret 2022 : Submit PKM\r\n\r\nBerikut Syarat Lomba dan Benefit: \r\nSyarat: \r\n- Draf/naskah PKM sesuai dengan pedoman - Setiap tim, terdiri dari 3 mahasiswa angkatan berbeda \r\n- PKM yang dilombakan PKM-RE, PKM-K, PKM-GT, PKM-PI, PKM-KC, PKM-GFK\r\n\r\n Benefit:\r\n- 3 Terbaik akan memperoleh reward + pendampingan. \r\n- 50 Judul Terbaik akan mengikuti pendampingan intensif untuk submit ke nasional.', 'Pendidikan', 'Selamat Berlomba', 2022, '61f7918fd1dd1.jpeg'),
(12, 'Kompetisi Olahraga', 'Ikuti dan Buktikan dalam,\r\nKOMPETISI OLAHRAGA\r\nDIES NATALIS ITTP\r\n\r\nKhusus Bagi Civitas Akademik ITTP\r\n\r\n📅 10 April 2021\r\n🕖 07.30 - selesai\r\n🏫 Gedung Rektorat\r\n\r\n==================\r\nZUMBA DANCE\r\nKuota : 20 org\r\nHadiah : 1.5 Juta\r\nPendaftaran : ittp.link/dance\r\n==================\r\nBADMINTON\r\nKuota : 16 tim (ganda putra/putri/campuran)\r\nHadiah : 2.25 Juta\r\nPendaftaran : ittp.link/badminton\r\n==================\r\nTENIS MEJA\r\nKuota : 16 orang (single putra/putri)\r\nHadiah : 1.5 Juta\r\nPendaftaran : ittp.link/tenismeja\r\n==================\r\nMOBILE LEGENDS\r\nKuota : 14 tim\r\nHadiah : 2.25 Juta\r\nPendaftaran : ittp.link/ML\r\n==================\r\nPRO EVOLUTION SOCCER 2021 (PS4)\r\nKuota : 36 orang \r\nHadiah : 1.5 Juta\r\nPendaftaran : ittp.link/PES\r\n==================\r\n\r\nDaftar Sekarang Juga ❗\r\nGRATIS\r\nPendaftaran DITUTUP sewaktu-waktu jika KUOTA PENUH\r\n\r\n1 orang hanya boleh mengikuti 1 jenis kompetisi olahraga\r\n\r\nInfo Selengkapnya :\r\nWA : wa.me/6281228307444 (Ira)\r\n\r\nSelalu Patuhi Protokol Kesehatan 😷 \r\ndan\r\nBangkit Bersama di Masa Pandemi Covid 19 Dengan Teknologi\r\n\r\n#BersamaKitaBisa', 'Olah Raga', 'Dies Natalis ITTP', 2021, '61fb6886f20ab.jpeg'),
(13, 'ALTERNATIVE', 'Buat masyarakat DKV ITTP dan sekitarnya bahkan buat seluruh masyarakat Purwokerto simak baik baik‼️\r\n\r\n✨ARTENATIVE✨\r\n\r\nAcara super keren dari HMDKV (CAYO) yang akan memeriahkan kota PURWOKERTO🔥\r\n\r\nAcara ARTENATIVE ini akan berlangsung di Gedung Sutedja PURWOKERTO✨\r\n\r\nLangsung aja nih buat kalian yang ingin memeriahkan secara langsung boleh banget beli tiketnya mulai dari skrng dengan harga sangat terjangkau mulai dari\r\n\r\nPresale: 10k\r\nOTS: 15k\r\n\r\nDan untuk pemesanan tiketnya bisa order di\r\n\r\nOrder Link\r\nbit.ly/PreSaleTiketArtenative\r\nAtau bisa hubungi\r\nCP: 082116093370 (Bidara Auliya)\r\n\r\nGausah lama lagi langsung aja catat tanggal mainnya\r\n🗓26 Februari 2022\r\n\r\n‼️JANGAN SAMPE KELEWATAN KEMERIAHAN ARTENATIVE YA‼️\r\n\r\n#HBD #HAJATBESARDKV #ARTENATIVE #HMDKV #HMDKVITTP #CAYO #CAYOITTP #DKV #DKVITTP #HAJAT #BESAR #DKV', 'Seni', 'HMDKV', 2022, '61fb6ba9016b1.jpeg'),
(14, 'Share Aspirations For Change', 'Halo Sobat Sistem Informasi! \r\n\r\nkami dari Departemen Advokasi sedang mengadakan Kegiatan Share To Advo dengan tema &quot; Share Aspirations For Change &quot; yang bertujuan untuk meningkatkan mutu kinerja HMSI periode 2021/2022. Karena itu, diharapkan kepada seluruh mahasiswa Sistem Informasi untuk mengisi kuisioner yang tertera dibawah ini:\r\nhttps://bit.ly/ShareToAdvo\r\n\r\nTerimakaksih☺️\r\n#salamadvocation😉', 'Politik', 'HMSI', 2022, '61fb6c910f479.jpeg'),
(15, 'KOMPETISI TECHNOLOGY EUPHORIA 2021', 'Keluarga Mahasiswa Fasilkom Universitas Sriwijaya secara resmi membuka Pendaftaran Kompetisi Technology Euphoria 2021!🎉\r\ndengan tema &quot;Technological Innovation Triggers the Development of the World to Match the Era and Core-Bussiness&quot;\r\n\r\nKompetisi apa saja yang ada di event Technology Euphoria 2021 kali ini? Yuk, simak informasinya!\r\n\r\nTerdapat 5 kompetisi berskala nasional yang dapat kamu ikuti, yaitu: \r\n1. Networking Competition\r\n2. Competitive Programming\r\n3. UI/UX Competition\r\n4. Bussines Plan\r\n5. Web Development\r\n\r\nWah, Sangat menarik bukan? Yuk,tunggu apalagi? segera daftarkan tim terbaikmu! Untuk informasi lainnya dapat dicek melalui website resmi kami ya!🙌🏻\r\n\r\nInformasi lebih lanjut :\r\n➡️Id Official Line: @oob5672z (use @)\r\n➡️Instagram: @technology.euphoria\r\n➡️Twitter: @techphoria20\r\n➡️Facebook Fanpage: Technology Euphoria\r\n➡️Website: technology-euphoria.com', 'Teknologi', 'Keluarga Mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya', 2021, '61fb6e1be27ed.jpeg');

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
(2, 'admin', '$2y$10$C/Osgzk1dFD42H9IwiaX0Oec6cfgWcfbLsFLChuxhK.YsAJwBhxtK'),
(3, 'firsto', '$2y$10$eQJ.Dct7QuzI1wvS.rR/Vu7bhp9o5ogrWZYbZrG7XpkwAKqjnOYP.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
