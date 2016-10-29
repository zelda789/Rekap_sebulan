-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.1.41 - Source distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cendana
DROP DATABASE IF EXISTS `cendana`;
CREATE DATABASE IF NOT EXISTS `cendana` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cendana`;


-- Dumping structure for table cendana.kelamin
DROP TABLE IF EXISTS `kelamin`;
CREATE TABLE IF NOT EXISTS `kelamin` (
  `id_kelamin` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.kelamin: 2 rows
DELETE FROM `kelamin`;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` (`id_kelamin`, `nama`) VALUES
	(1, 'laki-laki'),
	(2, 'perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;


-- Dumping structure for table cendana.kota
DROP TABLE IF EXISTS `kota`;
CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(255) DEFAULT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.kota: 4 rows
DELETE FROM `kota`;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
	(1, 'Blitar'),
	(2, 'Malang'),
	(3, 'Nganjuk'),
	(4, 'Tulungagung');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;


-- Dumping structure for table cendana.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.login: 1 rows
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`, `password`) VALUES
	('admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;


-- Dumping structure for table cendana.pegawai
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `kota_asal` int(11) DEFAULT NULL,
  `jenis_kelamin` int(1) DEFAULT NULL,
  `id_posisi` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.pegawai: 2 rows
DELETE FROM `pegawai`;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id_pegawai`, `nama`, `telp`, `kota_asal`, `jenis_kelamin`, `id_posisi`, `status`) VALUES
	('1', 'Dody', '084739285729', 1, 1, '1', NULL),
	('2', 'Anthony', '084673928475', 2, 1, '2', NULL),
	('e2694b9693bf1deed664b3ba5acaa3b6', 'Redikatok', '0857927481047', 2, 1, '4', NULL),
	('a14a7a784832aa0887b5923d2290271c', 'Samsul Huda', '0857492759267', 3, 1, '4', NULL),
	('25d7aa0a88c508fc1f3a1665f957e0ee', 'Choirul Ikhsan', '0857493758295', 1, 1, '1', NULL),
	('b2169c14040af764205df3af82fc20e4', 'Arista', '085749365892', 1, 2, '5', NULL);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;


-- Dumping structure for table cendana.posisi
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE IF NOT EXISTS `posisi` (
  `id_posisi` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.posisi: 5 rows
DELETE FROM `posisi`;
/*!40000 ALTER TABLE `posisi` DISABLE KEYS */;
INSERT INTO `posisi` (`id_posisi`, `nama`) VALUES
	('2', 'Management'),
	('4', 'IT'),
	('5', 'HRD'),
	('3', 'Keuangan'),
	('1', 'Produk');
/*!40000 ALTER TABLE `posisi` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
