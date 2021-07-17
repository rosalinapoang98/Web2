-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 06:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_user`
--

CREATE TABLE `akses_user` (
  `id_akses` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses_user`
--

INSERT INTO `akses_user` (`id_akses`, `nama`, `ket`) VALUES
(1, 'admin', 'Administrator');


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `Provinsi` (
  `id_prov' int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Provinsi`
--

INSERT INTO `Provinsi` (`id_prov`, `nama`) VALUES
(1,'Aceh'),
(3, 'Sumatera Utara' ),
(4, 'Sumatera Barat'),
(5, 'Riau'),
(6, 'DKI Jakarat'),
(7, 'Banten'),
(8, 'Jawa Barat'),
(9, 'Jawa Tengah'),
(10, 'Jawa Timur'),
(11, 'Bali'),
(12, 'Nusatenggara Timur'),
(13, 'Nusa Tenggara Barat'),
(14, 'Kalimamtan Barat'),
(15, 'Kalimantan Timur'),
(4, 'Sulawesi Utara');
-- --------------------------------------------------------

--
-- Table structure for table `Kabupaten`
--

CREATE TABLE `Kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kabupaten`
--

INSERT INTO `harga` (`id_kab`, `nama`) VALUES
(1,'Tangerang'),
(3, 'Tangerang Selatan' ),
(4, 'Rangkas Bitung'),
(5, 'Serang'),
(6, 'Lebak');
(7, 'Ciputat');
-- --------------------------------------------------------

--
-- Table structure for table `Kecamatan`
--

CREATE TABLE `kategori_menu` (
  `id_kec` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kecamatan`
--

INSERT INTO `Kecamatan` (`id_kec`, `nama`) VALUES
(1, 'Pamulang'),
(2, 'Pamulang Barat'),
(3, 'Serpong'),
(4, 'BSD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y', 1),
(2, 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'Y', 2),
(3, 'kasir', 'c7911af3adbd12a035b289556d96470a', 'Y', 3),
(4, 'Pelanggan', 'c96041081de85714712a79319cb2be5f', 'Y', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_user`
--
ALTER TABLE `akses_user`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `Provinsi`
--
ALTER TABLE `Provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `Kabupaten`
--
ALTER TABLE `Kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `Kecamatan`
--
ALTER TABLE `Kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `Fakses`
--
ALTER TABLE `Fakses`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
