-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 04:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Nama`, `Email`, `Password`) VALUES
(1, 'Febrie Zaeni Muchtar', 'febriezaenimuchtar@gmail.com', 'd16ed1592826ff85f6a61ebb41d23ec3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID` int(255) NOT NULL,
  `Nama_Barang` varchar(255) DEFAULT NULL,
  `Kategori` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Stock` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID`, `Nama_Barang`, `Kategori`, `Image`, `Stock`, `Status`) VALUES
(2, 'Vynns Akustik Elektrik Gitar Solid Spruce Top', 'Alat Musik', 'https://nuansamusik.com/cdn/shop/files/Vynn_sGA02skuwebrev.png?v=1693543897&width=713', '1', 'BEKAS'),
(77, 'Molten - Peralatan Olahraga Bola Basket', 'Peralatan Olahraga', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/5/13/6d837655-e584-4b7d-b397-f4131db0eca2.jpg', '5', 'BARU'),
(1212, 'Speaker Aubern Professional Portable Sound System', 'Sound System', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/109/MTA-144289396/br-m036969-09692_speaker-aubern-professional-portable-sound-system-be-12cx-be12cx_full01-f1bb71fa.jpg', '3', 'BEKAS'),
(200200, 'Antarestar - Tenda Camping 200 x 200', 'Camping, Tenda', 'https://antarestar.com/wp-content/smush-webp/2021/01/Tenda-Camping-200-x-200-1.png.webp', '11', 'BARU');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `ID` int(255) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`ID`, `Nama`, `Email`, `Password`) VALUES
(2, 'Afif Fadillah', 'afiffadillah@gmail.com', 'eec388fad3f2e481496e8ffcdafa0f1c'),
(7, 'Moch Rifki', 'rifkialhavidin@gmail.com', 'a8fc2f4cb2f73735659e4a7dab03b7de'),
(8, 'Abiseka Zara', 'abiseka@gmail.com', 'd815d523997019b54554e979c0fee341');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID` int(255) NOT NULL,
  `ID_Peminjam` int(255) DEFAULT NULL,
  `ID_Barang` int(255) DEFAULT NULL,
  `Jml_Barang` int(255) DEFAULT NULL,
  `Tgl_Pinjam` date DEFAULT NULL,
  `Tgl_Kembali` date DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID`, `ID_Peminjam`, `ID_Barang`, `Jml_Barang`, `Tgl_Pinjam`, `Tgl_Kembali`, `Status`, `Total`) VALUES
(8, 7, 1212, 1, '2024-05-29', '2024-05-30', 'BARU.', 1),
(15, 1, 77, 2, '2024-06-04', '0000-00-00', 'BARU', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_peminjam` (`ID_Peminjam`),
  ADD KEY `fk_barang` (`ID_Barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231231252;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
