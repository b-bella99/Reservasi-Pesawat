-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 04:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi_pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lili', 'cantik');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(5) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `notelp`, `gender`) VALUES
('C001', 'Aina Angelina', 'Jl. Kapas Situbondo', '081909090210', 'Laki-laki'),
('C002', 'Amirul Mu\'minin', 'Jl. Perahu Surabaya', '081223390876', 'Laki-laki'),
('C003', 'Bintang Cahya', 'Jl. Pang. Sudirman Malang', '087878403210', 'Perempuan'),
('C004', 'Citra Mustika', 'Jl. Danau Ranau Samarinda', '087091223221', 'Perempuan'),
('C005', 'Desta Nugroho', 'Jl. ByPass Sidoarjo', '081767677210', 'Laki-laki'),
('C006', 'Eko Setyawan', 'Jl. Komandan Madiun', '087091878211', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_customer` varchar(5) NOT NULL,
  `nmr_kursi` varchar(5) NOT NULL,
  `id_rute` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tanggal`, `id_customer`, `nmr_kursi`, `id_rute`) VALUES
('V0001', '2018-02-12', 'C001', 'A01', 'R101'),
('V0002', '2018-02-12', 'C002', 'A02', 'R101'),
('V0003', '2018-02-12', 'C003', 'B03', 'R101'),
('V0004', '2018-02-12', 'C004', 'D06', 'R101');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(5) NOT NULL,
  `rute_dari` varchar(15) NOT NULL,
  `rute_ke` varchar(15) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `rute_dari`, `rute_ke`, `jam_berangkat`, `jam_tiba`, `harga`) VALUES
('R101', 'Surabaya', 'Jakarta', '09:45:00', '10:15:00', 230000),
('R102', 'Jakarta', 'Surabaya', '06:15:00', '06:45:00', 225000),
('R103', 'Surabaya', 'Makassar', '09:10:00', '10:30:00', 720000),
('R104', 'Makassar', 'Surabaya', '16:00:00', '17:20:00', 810000),
('R105', 'Surabaya', 'Palembang', '07:30:00', '08:25:00', 1025000),
('R106', 'Palembang', 'Surabaya', '17:20:00', '18:15:00', 982000),
('R107', 'Surabaya', 'Balikpapan', '16:20:00', '17:15:00', 780000),
('R108', 'Balikpapan', 'Surabaya', '08:40:00', '09:35:00', 800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
