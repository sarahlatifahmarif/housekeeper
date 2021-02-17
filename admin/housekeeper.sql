-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 03.35
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

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
  `idcustomer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `nama`, `alamat`, `telp`, `pekerjaan`, `keterangan`) VALUES
('C001', 'Budi P', 'Padang, Sumatera Barat', '081234567822', 'Pedagang', 'Butuh Housekeeper'),
('C002', 'Isfatil', 'Solok', '083545646654', 'Pedagang', 'Butuh Babysitter'),
('C003', 'Arif H', 'Bukitinggi', '098279388298', 'Wiraswasta', 'Butuh Pengasuh'),
('C004', 'Mia Marvel', 'Padang Panjang', '089765786512', 'Pengusaha', 'Butuh Babysitter'),
('C005', 'Zahri H', 'Solok', '089561855684', 'Mahasiswa', 'Butuh Laundry Rumahan'),
('C006', 'Alfiyah Eka', 'Dhamasraya', '089726374625', 'Akuntan', 'Butuh Housekeeper');

-- --------------------------------------------------------

--
-- Struktur dari tabel `housekeeper`
--

CREATE TABLE `housekeeper` (
  `idhousekeeper` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` varchar(100) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `bayaran` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `housekeeper`
--

INSERT INTO `housekeeper` (`idhousekeeper`, `nama`, `jekel`, `layanan`, `umur`, `alamat`, `pendidikan`, `keterangan`, `pengalaman`, `bayaran`, `status`) VALUES
('H001', 'Jenny', 'Perempuuan', '1', '23', 'Padang', 'SMA', 'Gigih dan bekerja keras', '5 tahun bekerja sebagai babysitter', '100000', '1'),
('H002', 'Bik Man', 'Perempuan', '2', '37', 'Bukittinggi', 'SMK', 'Punya sertifikat mengasuh', '2 tahun bekerja di Paud', '150000', '2');

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
  `idlayanan` varchar(10) NOT NULL,
  `jenislayanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`idlayanan`, `jenislayanan`) VALUES
('1', 'BabySitter'),
('2', 'Housekeeper'),
('3', 'Laundry'),
('4', 'Complete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `idreview` varchar(10) NOT NULL,
  `idcustomer` varchar(10) NOT NULL,
  `idhousekeeper` varchar(10) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `bintang` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idstatus` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idstatus`, `status`) VALUES
('1', 'Booking'),
('2', 'Available');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` varchar(100) NOT NULL,
  `idcustomer` varchar(100) NOT NULL,
  `idhousekeeper` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
