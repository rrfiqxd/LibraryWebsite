-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 14.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarynew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`, `role`) VALUES
(1, 'mrofiqfadil@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjam`
--

CREATE TABLE `data_peminjam` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_peminjam`
--

INSERT INTO `data_peminjam` (`id`, `nama_buku`, `nis`, `tgl_pinjam`, `nama_peminjam`, `kode`) VALUES
(13, 'Shojo Nozaki 10', 'hikaaa', '3', 'hilkiaaaa', ''),
(45, 'Coding CI', '12345', '7 Hari', 'M.Rofiq Fadilah', '6458e4bc042ef'),
(46, 'The Detectiv', '13243', '12 Hari', 'Hilkia Farel Azaria', '6458ecde1baa8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_peminjam` int(11) NOT NULL,
  `hari1` varchar(255) NOT NULL,
  `hari3` varchar(255) NOT NULL,
  `hari7` varchar(255) NOT NULL,
  `hari14` varchar(255) NOT NULL,
  `hari_pinjam` varchar(100) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `NIS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `jenis_buku` varchar(100) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi` text NOT NULL,
  `penerbit` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto_produk`, `jenis_buku`, `tanggal_upload`, `deskripsi`, `penerbit`) VALUES
(185, 'Blue Lock ', '1307cqmyns8h8ztmwhjcbnrvcf.jpg', 'Komik', '2023-05-08 11:37:07', 'Blue Lock adalah serial manga Jepang yang ditulis oleh Muneyuki Kaneshiro dan diilustrasikan oleh Yusuke Nomura. Blue Lock sendiri adalah sebuah fasilitas yang dibangun oleh pemerintahan Jepang guna menemukan dan mengembangkan 1 striker yang akan menjadi bintang timnas jepang sekaligus super star di dunia sepakbola kelak.', 'Muneyuki hiro'),
(186, 'Black Clover 21', '1318jfabktaenfacyjatsfnkge.jpg', 'Komik', '2023-05-08 11:41:22', ' Black Clover adalah serial manga Jepang yang ditulis dan diilustrasikan oleh Yuki Tabata. Komik ini telah diserialisasikan di majalah Weekly Shonen Jump Shueisha sejak 16 Februari 2015. Volume pertama manga Black Clover diterbitkan pada tanggal 4 Juni 2015. Komik Black Clover terbagi menjadi 32 volume per April 2022.\r\n\r\n', 'Yuki TABATA'),
(187, 'Dragon Ball ', '1324722010661_cover_Dragon_Ball_Super_15.jpg', 'Komik', '2023-05-08 11:47:24', 'Goku berhasil menyudutkan Moro dengan ultra instinct yang telah disempurnakan. Namun, Moro juga mendapatkan ultra instinct dari kemampuan Merus yang tersimpan di tangan kirinya yang sudah putus. Bagaimanakah nasib Koku di hadapan kekuatan dewa tersebut!? badasss!!', 'Akita Toriyama'),
(188, 'The Detectiv', '1333zb9sfgesctchgxf3iu4kie.jpg', 'Komik', '2023-05-08 11:49:33', 'Kuroba You adalah seorang detektif sadis yang menikmati tidak lebih dari menghancurkan targetnya secara emosional dan psikologis melalui penalaran deduktifnya. Toiro Arata adalah anak laki-laki naif dan sedikit masokis yang ditipu oleh Anda untuk menjadi asistennya, atau budaknya.', 'Yen Hioka'),
(189, 'Coding CI', '1429ID_CJBD2018MTH08CJBD (2).jpg', 'Teknologi', '2023-05-08 12:01:29', 'CodeIgniter merupakan salah satu kerangka kerja yang sangat mudah dipahami, dan merupakan salah satu alasan mengapa para pengembang website menjadikannya sangat populer dan dicari. Buku ini membahas secara sederhana tentang dasar-dasar coding untuk proyeksi aplikasi dengan CodeIgniter.', 'Heru Sulistiono'),
(190, 'Micro Python', '14469786020488240_Fun_Coding_wi.jpg', 'Teknologi', '2023-05-08 12:03:46', 'Dengan bahasa yang sederhana, contoh pengaplikasian, analogi, dan penjelasan yang ada pada setiap baris, Anda akan mudah menguasai MicroPython secara cepat. Selain itu, buku ini juga memberikan pengetahuan tentang elektronika dasar yang mendorong pembaca untuk memulai project DIY Electronics (Do it Yourself).\r\n', 'Andi Dinata'),
(191, 'Bahasa Jepang', '14419786026183125C_9786026183125.jpg', 'Bahasa', '2023-05-08 12:07:06', 'Buku ini adalah landasan awal pembaca dalam mengenal pola kalimat bahasa Jepang, seiring dengan proses pembelajaran berlangsung, pembaca dapat mempersiapkan diri untuk menerima materi bahasa Jepang lanjutan. Untuk menambah kosakata dan pengayaan kalimat, materi juga berisi latihan-latihan soal', 'Setiawan Agung'),
(192, 'Motivasi Steve', '1454INSPIRASI__MOTIVASI_STEVE_JOBS.jpg', 'Motivasi', '2023-05-08 12:16:54', 'Rasanya tidak ada yang tak mengenal nama Steve Jobs, sesosok laki-laki yang sukses mewujudkan Apple sebagai pemimpin pasar dunia teknologi. Namun, sebenarnya banyak hal yang masih tidak diketahui publik mengenai Steve Jobs. Yang banyak dibicarakan hanyalah mengenai keberhasilannya.', 'Irma El-mira'),
(193, 'Sejarah Eropa', '1457Asal_Usul_Peradaban_Dan_Sejarah_Eropa (1).jpg', 'Sejarah', '2023-05-08 12:18:57', 'Benua Eropa merupakan benua terkecil nomor 2 setelah Australia. Namun, benua ini menyimpan banyak sejarah tentang peradaban dunia. Bahkan, benua Eropa memiliki sebutan sebagai benua tertua karena banyak bukti dan pendapat yang menyebutkan bahwa di sinilah peradaban manusia mulai berkembang', 'Amir Ubaidillah'),
(194, 'Jaya Singasari', '14259786025805943_Sejarah-Kejayaan-Singhasari.jpg', 'Sejarah', '2023-05-08 12:22:25', 'Sejarah Kerajaan Singasari terkait erat dengan sosok Ken Angrok (1222–1247) yang mendirikan Wangsa Rajasa dan Kerajaan Tumapel. Berdasarkan keterangan dalam Prasasti Kudadu, nama resmi Kerajaan Singasari adalah Kerajaan Tumapel. Nama Tumapel juga muncul dalam berita Tiongkok dari Dinasti Yuan', 'Sri Wintala'),
(196, 'Faith of god', '1446atazra2v6tty5gcnybhkzi__w149_hauto.png', 'Agama', '2023-05-08 12:26:46', 'mengingat semua ayat yang menunjukkan bahwa kita memiliki iman Tuhan, mengapa tidak setiap orang Kristen mempercayainya? Alasan nomor satu mengapa hal ini tidak dimengerti dan dipercaya secara umum adalah karena jenis iman Allah ini ada di dalam roh kita yang dilahirkan kembali dan bukan di dalam daging kita.', 'Andrew Womack'),
(197, 'SBK Kelas 12', '1408208098483.jpg', 'Seni', '2023-05-08 12:30:08', 'Dalam buku pelajaran Seni Budaya kelas 12 ini, sebagai peserta didik, kamu akan menemukan 4 bidang seni, yaitu seni rupa, musik, tari, dan teater. Materi pembelajaran Seni Budaya ini walaupun sebagian besar berisi pembelajaran keterampilan praktik berkarya seni, wawasan apresiasi dan kritik seni.', 'Kemendikbud');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `role`) VALUES
(16, 'rofiq@ggaming.io', 'mm', 0),
(17, 'leonskannedy@Gmail.com', '2', 0),
(18, 'yahah@gmail.com', 'aa', 0),
(19, 'rofiq@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_peminjam`
--
ALTER TABLE `data_peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
