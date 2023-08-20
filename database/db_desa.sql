-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2023 pada 12.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `about_us`, `visi`, `misi`) VALUES
(1, 'Wilayah nagori naga soppa sendiri adalah bagian dari kerajaan Pematang Bandar tersebut yang merupakan wilayah partuanan (seperti provinsi) yang dipimpin oleh seorang Tuan (gelar yang diberikan oleh Pemerintah Belanda). Wilayah Naga Soppa ini bernama Partuanan Naga Soppa.wilayah kerajaan Pematang Bandar memiliki tanah yang subur sehingga rakyat bergantung hidup pada pertanian. \r\nMemiliki pertanian yang subur menjadi daya tarik belanda untuk mengembangkan pertanian yang dilakukan rakyat dan melakukan perjanjian kepada partuanan untuk melakukan jual beli hasil pertanian tersebut. Hal ini merupakan Monopoli dibidang Pertanian dan Perdagangan yang dilakukan oleh Pemerintah Kolonial belanda pada masa itu yang produknya meliputi Rami, Nena, dan sebahagian tanaman perkebunan. Hingga pada tahun 1945-an Indonesia merdeka, rakyat melakukan pemberontakan untuk menghabisi antek-antek belanda, bahkan mereka menghancurkan kerajaan mereka sendiri karena mereka menganggap bahwa partuanan termasuk antek-antek belanda. Rakyat menghancurkan apapun itu yang masih berhubungan dengan kerajaan bahkan arca atau prasasti sekalipun tidak disisakan oleh mereka. \r\nSetelah Indonesia Merdeka Nagori Naga Soppa merupakan satu kesatuan wilayah yang bernama “Kampung Naga Soppa” yang wilayahnya meliputi Desa Naga Jaya I sekarang, Naga Soppa sekarang, dan Naga Jaya II sekatrang , hingga pada era 1960-an berubah nama menjadi Kampung Naga Jaya yang berada di bawah kepeminmpinan “Kepala Kampung”. Hingga pada era 1970-an sebutan kampong, dusun, desa, kelurahan mengalami penertiban yang dilakukan oleh pemerintah pusat dan tersebutlah Nama “Desa Naga Jaya” dan sejak saat itu kata Naga Soppa hilang dari pemerintahan karena hanya berupa dusun/kampong kecil di dalam wilayah suatu desa.\r\nHingga pada 6 Juni tahun 2008 Desa/Nagori Naga Soppa memekarkan diri dari Naga Jaya I (yang sebelumnya pada tahun 2000 Naga Jaya II telah mekar terlebih dahulu) dengan wilayah yang lebih kecil dari apa yang pernah tercatat dalam sejarah. Dengan status desa pemekaran, naga soppa masih merupakan daerah binaan dari desa induk yang kemudian definitive sejak Mei 2011 ditandai dengan diselenggarakannya pemilihan Kepala Desa yang melahirkan seorang Kepala Desa Definitiv pertama. Selanjutnya pada tahun 2012, secara resmi Naga Soppa telah terdaftar di kemendagri dengan memperoleh nomor induk dan data kependudukan yang telah tersendiri dari dari desa sebelumnya dengan luas wilayah ada di kisaran 3.95 km2 dengan memiliki jumlah 554 kepala keluarga dan jumlah warga desa 1692 yg tercatat secarah resmi. \r\n', 'Menciptakan Nagori yang Tertib dan teratur, mandiri ,   aman dan nyaman serta menjalin komunikasi umum yang harmonis dengan masyarakat', '1. Menjalankan sistem pemerintahan nagori dengan tertib administrasi serta birokrasi yang berpihak kepada masyarakat \r\n2. Menggali semua sumber daya manusia dari seluruh tungkat nagori dan masyarakat dalam menjalankan roda pemerintahan \r\n3. Membangkitkan kembali semangat kerja sama dan gotong royong dalam menciptakan sistem keamana lingkungan dan menjaga serta melestarikan lingkungan hidup \r\n4. Menciptakan dan menjalin komunikasi yang baik, mudah, lancer dan harmonis antara pemerinatahn nagori dengan masyarakat dengan membuka jalur informasi dan pengaduan masyarakat baik secarah lisan maupun tulisan. Seperti: membuka sms interaktif, atau call center serta media lainnya. \r\n5. Memberdayakan seluruh kelembagaan nagori dan potensi-potensi yang belum berkembang dari seluruh masyarakat. Seperti: mengadakan pelatihan PKK, LPMN, ataupun pengkaderan bagi karang taruna, Remaja masjid dan lain sebagainya.\r\n6. Meningkatkan pemanfaatan yang positif dari teknologi informasi bagi generasi muda.\r\n7. Senantiasa memantau, memperhatikan dan turut serta meningkatkan Kesehatan masyarakat dengan menjalin Kerjasama dengan berbagai pihak terkait.\r\n8. Menampung dan menyalurkan produk-produk masyarakat dari segala sector mulai sector pertanian, perkebunan rakyar, peternakan, perikanan, teknologi tepat guna, teknologi informatika, maupun sektor-sektor lainnya.\r\n9. Menyokong segala rencana kerja dengan peningkatan infrastruktur nagori, serta sumber daya alam, dan sumber daya manusia.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `no_telepon`, `email`, `password`, `image`, `created_at`) VALUES
(1, 'admin', '33333232', 'admin@gmail.com', 'admin', 'default.jpg', '2020-12-05'),
(3, 'antony sinugian', '1233123', 'mycodingpersona@gmail.com', 'adminter', 'default.jpg', '2023-02-02'),
(4, 'Dimas Ganxx', '12333321233', 'sianu@gmail.com', 'admin', 'default.jpg', '2023-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `judul`, `isi`, `gambar`) VALUES
(6, 'Masjid nurul jadid ', 'Terletak di nagori naga soppa huta 3 naga bandar', 'Masjid_Nurul_Jadid.png'),
(7, 'Masjid As-Syafaat', 'Terletak di nagori naga soppa Huta 4 swembat ', 'Masjid As-Syafaat.png'),
(8, 'Masjid AL-yaqin ', 'Terletak di Nagori naga soppa Huta 5 Nagaharjo', 'Masjid_Al-Yaqin.png'),
(9, 'Perpustakaan Desa', '', 'perpustakaan.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` int(11) NOT NULL,
  `judul_website` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `judul_website`, `alamat`, `provinsi`, `email`, `no_telepon`) VALUES
(1, 'Nagori Naga Sopa ', 'Kabupaten Simalungun', 'Sumatera Utara', 'admin@gmail.com', '062308987987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul`, `isi`, `gambar`) VALUES
(9, 'Dinsum Yos', 'Menjual beberapa variant dimsum yang lezat. Rasa di jamin tidak mengecewakan   No telp &amp; wa : 085765036659', 'DinsumYos.jpg'),
(10, 'Ny.siswoyo cookies & cake ', 'Menjual berbagai macam bolu, kue kering, dan kue basah  No telp & wa : 081224623494 Fb : Ny. siswoyo', 'cookies & cake .jpg'),
(11, 'UP2K nagori Naga Soppa Huta 3 ', 'Menjual dodol singkong, dodol durian dan dodol tepung ketan   No telp & wa : 085362809641 Fb : Eliana Nainggolan ', 'Dodol.jpg'),
(12, 'O’donat ', 'Menjual donat dengan berbagai varian topping yang enak dan harga ramah dikantong  No. telp & wa : 082276906501', 'Donat.jpg'),
(13, 'UP2K nagori naga soppa Huta 2 ', 'Menjual kroket dengan isian sayur dan ayam suwir pedas  No. telp & wa : 081360082609  Fb : Tari kastiawati', 'Kroket.jpg'),
(14, 'UP2K nagori naga soppa huta 1', 'Menjual nastar dengan menggunakan tepung mokap (sari pati ubi) sehingga menghasilkan rasa yang unik.  No telp & wa : 082215252843  Fb : winda ayu ningrum', 'Nastar.jpg'),
(15, 'UP2K  nagori naga soppa Huta 4', 'Menjual bola-bola coklat yang terbuat dari tepung mokap (sari pati ubi) diisi dengan coklat yang lumer, sehingga menghasilkan sensasi yang unik  No telp & wa : 081374938714  Fb : susilawati ', 'Bola2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `status` enum('Kawin','Belum Kawin','Janda','Duda') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `status`) VALUES
(6, '123456789', 'Ali Subur, S.Kom.', 'Medan', '2023-07-05', 'Laki-Laki', 'Belum Kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkat`
--

CREATE TABLE `perangkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perangkat`
--

INSERT INTO `perangkat` (`id`, `nama`, `jabatan`, `pendidikan`, `keterangan`) VALUES
(5, 'Supiaman Damanik', 'Kepala Desa', 'SMA/SLTA', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pengirim` int(11) NOT NULL,
  `diajukan_tgl` varchar(255) NOT NULL,
  `status` enum('dikirim','diproses','selesai') NOT NULL DEFAULT 'dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
