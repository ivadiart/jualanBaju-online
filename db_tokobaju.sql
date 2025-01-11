-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2025 at 01:01 AM
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
-- Database: `db_tokobaju`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_admin`
--

CREATE TABLE `akses_admin` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akses_admin`
--

INSERT INTO `akses_admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'agus', '202cb962ac59075b964b07152d234b70', 'owner'),
(9, 'agus', '12345678', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `img_cart` varchar(50) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `qty` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int NOT NULL,
  `no_pesanan` varchar(100) NOT NULL,
  `tanggal_pesan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` int NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_jln` varchar(50) NOT NULL,
  `alamat_blok` varchar(50) NOT NULL,
  `pengiriman` varchar(50) NOT NULL,
  `total_bayar` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `no_pesanan`, `tanggal_pesan`, `status`, `nama`, `telp`, `alamat`, `alamat_jln`, `alamat_blok`, `pengiriman`, `total_bayar`) VALUES
(11, '202407172332157', '2024-07-18 06:32:16', 'Completed', 'daassadsa', 12313, 'semarang', 'czxcxz', 'zxcz', 'Kargo', 146700),
(12, '202407172342555', '2024-07-18 06:42:55', 'Completed', 'gani maulana', 2147483647, 'kota banjar - jawa barat', 'randegan', 'rawa onom', 'Hemat', 128853),
(13, '202407180557354', '2024-07-18 12:57:35', 'Processing', 'gani', 2147483647, 'Kota Banjar', 'randegan', 'rawa onom', 'Hemat', 128853),
(14, '202407180613535', '2024-07-18 13:13:53', 'Completed', 'gani ', 2147483647, 'Jawa Barat', 'Banjar', 'Randegan', 'Hemat', 48951),
(15, '202412271114005', '2024-12-27 18:14:00', 'Processing', '', 0, '', '', '', 'Reguler', 48951);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `komen` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `komen`) VALUES
(1, 'gani', 'maulanag980@gmail.com', 'jhdghjsgfeywurwy'),
(2, 'ssss', 'ssss@gmail.com', 'tqytrtyfdhflkj');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nm_kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img_kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `img_kategori`) VALUES
(1, 'Celana', 'celana-1.jpeg'),
(2, 'Hoodie/Sweatshirt', 'hoodie-1.jpeg'),
(3, 'Pakaian', 'pakaian-1.jpeg'),
(6, 'Sepatu & Sandal', 'sepatu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id_user`, `username`, `email`, `password`) VALUES
(3, 'gani', 'gani@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'sari', 'purnamasari@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nm_produk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nm_brand` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `desc_produk` text COLLATE utf8mb4_general_ci NOT NULL,
  `spesifikasi_produk` text COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
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
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'maulanag980@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_admin`
--
ALTER TABLE `akses_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_admin`
--
ALTER TABLE `akses_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
