-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2024 pada 08.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion-store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_admin`
--

CREATE TABLE `akses_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akses_admin`
--

INSERT INTO `akses_admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'gani', '202cb962ac59075b964b07152d234b70', 'owner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `img_cart` varchar(50) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `no_pesanan` varchar(100) NOT NULL,
  `tanggal_pesan` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` int(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_jln` varchar(50) NOT NULL,
  `alamat_blok` varchar(50) NOT NULL,
  `pengiriman` varchar(50) NOT NULL,
  `total_bayar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `no_pesanan`, `tanggal_pesan`, `status`, `nama`, `telp`, `alamat`, `alamat_jln`, `alamat_blok`, `pengiriman`, `total_bayar`) VALUES
(11, '202407172332157', '2024-07-18 06:32:16', 'Completed', 'daassadsa', 12313, 'semarang', 'czxcxz', 'zxcz', 'Kargo', 146700),
(12, '202407172342555', '2024-07-18 06:42:55', 'Completed', 'gani maulana', 2147483647, 'kota banjar - jawa barat', 'randegan', 'rawa onom', 'Hemat', 128853),
(13, '202407180557354', '2024-07-18 12:57:35', 'Processing', 'gani', 2147483647, 'Kota Banjar', 'randegan', 'rawa onom', 'Hemat', 128853),
(14, '202407180613535', '2024-07-18 13:13:53', 'Completed', 'gani ', 2147483647, 'Jawa Barat', 'Banjar', 'Randegan', 'Hemat', 48951);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `komen`) VALUES
(1, 'gani', 'maulanag980@gmail.com', 'jhdghjsgfeywurwy'),
(2, 'ssss', 'ssss@gmail.com', 'tqytrtyfdhflkj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(50) NOT NULL,
  `nm_kategori` varchar(255) NOT NULL,
  `img_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `img_kategori`) VALUES
(1, 'Celana', 'celana-1.jpeg'),
(2, 'Hoodie/Sweatshirt', 'hoodie-1.jpeg'),
(3, 'Pakaian', 'pakaian-1.jpeg'),
(6, 'Sepatuu', '1720289667_63428bd55e76d8ac9b39.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`id_user`, `username`, `email`, `password`) VALUES
(3, 'gani', 'gani@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(50) NOT NULL,
  `nm_produk` varchar(255) NOT NULL,
  `nm_brand` varchar(255) NOT NULL,
  `desc_produk` text NOT NULL,
  `spesifikasi_produk` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nm_produk`, `nm_brand`, `desc_produk`, `spesifikasi_produk`, `kategori`, `harga`, `picture`) VALUES
(3, 'SWEATER AV HOODIE LAKI LAKI BELUDRU, PUTIH, HITAM MUSIM DINGIN BERKERUDUNG REMAJA MEMAKAI VERSI VCRL', 'Kidzafira addorable', 'Sweater Pria Deas Off White Beludru Panas Musim Gugur Berkerudung Dingin Remaja Memakai Versi VCRL\r\n\r\nDetail ukuran sweater pria :\r\n▪Size L (Lingkar 108cm panjang 65cm lengan 60cm)\r\n▪Size XL (Lingkar 112cm panjang 65cm lengan 62cm)\r\n▪Size XXL (Lingkar 115cm panjang 65cm lengan 64cm)\r\n', 'Gaya : Street Style, Casual\r\nUkuran Jumbo : Ya\r\nNegara Asal : Indonesia\r\nPanjang Lengan : Lengan Panjang\r\nMotif : Print\r\nMusim : Segala musim\r\nBahan : FLEECE\r\nDikirim Dari : KAB. BANDUNG', 'Hoodie/Sweatshirt', '47001', 'hoodie-1.jpeg'),
(4, 'Hoodie flecce keren Metal Silent Hoodie pria', 'Fitri Fashion', 'poqijdhuencbhf\r\nasadafdad', '', 'Hoodie/Sweatshirt', '48000', 'hoodie-9.jpeg'),
(5, '', '', 'Tidak Perlu Tanya Stock ya Ka Silahkan Langsung Klik Tombol BELI Aja ya ! Karena Kita Menggunakan REAL STOCK Gudang Kita Jadi Silahkan Pilih Variasi Yang Tersedia.\r\n   \r\nMaterial : Fleece \r\nSize : M, L , XL Dan XXL       \r\nDetail Size :      \r\n                     Size M : P 62cm  x L  51cm ; Panjang Tangan 58cm \r\n                     Size L : P 65cm  x L  54cm ; Panjang Tangan 61cm\r\n                     Size XL : P 70cm  x L  58cm ; Panjang Tangan 64cm  \r\n                     Size XXL : P 74cm  x L  62cm ; Panjang Tangan 67cm\r\n              * Toleransi Ukuran  Kurang Lebih 1-2 cm\r\nModel  : Hoodie Model Kekinian Bisa Pria / Wanita', '', 'Hoodie/Sweatshirt', '50000', '48834cae27224095a35b7347cc83d25e.jpeg'),
(6, 'CELANA PANJANG PRIA Slim fit Panjang Kerja kantor Santai Liburan Cowok Gentleman Boy size 27 - 38', 'Bintang.store.id', 'Ready warna \r\nKrem 27-38\r\nBlack 27-38\r\nMocca 27-38\r\nGrey /Abu 27-38\r\n\r\nBahan : katun twill Stretch (melar/elastis).', 'Panjang Celana : Panjang\r\nGaya : Street Style\r\nBahan : Chino\r\nNegara Asal : Indonesia\r\nMotif : Polos\r\nTipe Bawahan : Slim Fit\r\nUkuran Jumbo : Tidak\r\nTinggi Pinggang : Low Waist\r\nDikirim Dari : KOTA BEKASI', 'Celana', '54000', 'celana-1.jpeg'),
(7, 'Kemeja Flanel Pria Lengan Panjang Motif Kotak Kotak Kwalitas Premium Flanel Terbaru 2022 pria lengan panjang distro kasual santai', 'vivelas', 'KEMEJA FLANEL\r\nBahan : KAIN FLANEL\r\nSize chart\r\nM (lebar dada 50 * panjang 70)\r\nL (lebar dada 52 * panjang 72)\r\nXL (lebar dada 54 * panjang 74)\r\n\r\nNote \r\n\r\n\r\n\"UNTUK MENGHINDARI KEKOSONGAN BARANG, TANYAKAN KETERSEDIAN STOCK TERLEBIH DAHULU MELALUI DISKUSI PRODUCK/PESAN YANG ADA DI Shopee \"', '', 'Pakaian', '46000', 'pakaian.jpeg'),
(11, 'celana pria cargo panjang terbaik celana panjang cargo dan celanan pendek', 'jantes93', 'Ready warna \r\nKrem 27-38\r\nBlack 27-38\r\nMocca 27-38\r\nGrey /Abu 27-38\r\nArmy 27-38\r\n \r\nNOTE: untuk warna bisa tulis d catatan pesanan ya kaka makasih kaka \r\n\r\nBahan : katun twill non stretch (tidak melar) halus lembut tebal dan tidak berbulu', '', 'Celana', '65000', '3c64f3cedaaf61d1b71ac106c6cd1ec3.jpeg'),
(12, 'KAOS DISTRO 3SECOND BAJU KAOS PRIA PAKAIAN PRIA', 'grosirdistro11', '*MATERIAL*\r\nBAHAN COTTON COMBED 30s \r\nSABLON FULL PLASTISOL \r\nHANGTAG LABEL TEMBUS \r\nACCECORIES LENGKAP \r\n\r\nTERSEDIA SIZE L DAN XL \r\nSIZE L (LXP) = 51CM X 70CM\r\nSIZE XL (LXP) = 54CM X 72CM', 'ssss', 'Pakaian', '44000', 'id-11134207-7r98y-lt66zmo2o7xw6f.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'maulanag980@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses_admin`
--
ALTER TABLE `akses_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses_admin`
--
ALTER TABLE `akses_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
