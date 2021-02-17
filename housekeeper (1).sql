-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 08.22
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housekeeper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` char(1) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `nama`, `jekel`, `ttl`, `alamat`, `telp`, `pekerjaan`, `keterangan`) VALUES
(1, 'Jungkook', 'L', '1997-02-03', 'Seoul', '09872345671', 'Penyanyi', 'Golden Maknae'),
(2, 'Budi P', 'L', '1990-09-08', 'Padang, Sumatera Barat', '081234567822', 'Pedagang', 'Butuh Housekeeper'),
(3, 'Isfatil', 'P', '1988-07-08', 'Solok', '083545646654', 'Pedagang', 'Butuh Babysitter'),
(4, 'Mia Marvel', 'P', '1986-04-05', 'Padang Panjang', '089765786512', 'Pengusaha', 'Butuh Babysitter'),
(5, 'Zahri H', 'P', '1999-01-01', 'Solok', '089561855684', 'Mahasiswa', 'Butuh Laundry Rumahan'),
(6, 'Alfiyah Eka', 'P', '1996-09-09', 'Dhamasraya', '089726374625', 'Akuntan', 'Butuh Housekeeper'),
(7, 'Egi Susanto', 'L', '1990-09-09', 'Padang Panjang', '0813246789', 'Wiraswasta', 'Butuh Housekeeper'),
(8, 'yiojoi', 'o', '1999-09-09', 'jhvkjlk', '09865', 'hygytyi', 'vhfddr'),
(9, 'bjkjh', 'P', '1999-09-09', 'ty', '367', 'vtrty', 'xsewe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `housekeeper`
--

CREATE TABLE `housekeeper` (
  `idhousekeeper` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` varchar(100) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `review` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `housekeeper`
--

INSERT INTO `housekeeper` (`idhousekeeper`, `nama`, `jekel`, `layanan`, `ttl`, `alamat`, `pendidikan`, `keterangan`, `pengalaman`, `status`, `review`, `file`) VALUES
(1, 'Jenny', 'Perempuuan', '1', '0000-00-00', 'Padang', 'SMA', 'Gigih dan bekerja keras', '5 tahun bekerja sebagai babysitter', '1', '', ''),
(2, 'Bik Man', 'Perempuan', '2', '0000-00-00', 'Bukittinggi', 'SMK', 'Punya sertifikat mengasuh', '2 tahun bekerja di Paud', '2', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `housepoint`
--

CREATE TABLE `housepoint` (
  `idreview` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `idlayanan` int(11) NOT NULL,
  `jenislayanan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`idlayanan`, `jenislayanan`, `harga`) VALUES
(1, 'Babysitter', 50000),
(2, 'Housekeeper', 78888),
(3, 'Laundry', 98988),
(6, 'gi', 78),
(7, 'joi', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `idreview` varchar(10) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `bintang` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idstatus`, `status`) VALUES
(1, 'Booking'),
(2, 'Available'),
(3, 'Suspend'),
(5, 'yuy'),
(6, 'ioi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` varchar(100) NOT NULL,
  `idcustomer` varchar(100) NOT NULL,
  `idhousekeeper` varchar(100) NOT NULL,
  `idlayanan` varchar(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idcustomer`, `idhousekeeper`, `idlayanan`, `tanggal`, `keterangan`) VALUES
('T0001', '6', 'H002', '2', '89', 'gujg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indeks untuk tabel `housekeeper`
--
ALTER TABLE `housekeeper`
  ADD PRIMARY KEY (`idhousekeeper`);

--
-- Indeks untuk tabel `housepoint`
--
ALTER TABLE `housepoint`
  ADD PRIMARY KEY (`idreview`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idlayanan`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idreview`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `housekeeper`
--
ALTER TABLE `housekeeper`
  MODIFY `idhousekeeper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idlayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
