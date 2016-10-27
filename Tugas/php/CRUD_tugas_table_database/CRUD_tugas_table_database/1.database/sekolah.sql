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

-- Dumping database structure for sekolah
CREATE DATABASE IF NOT EXISTS `sekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sekolah`;


-- Dumping structure for table sekolah.kelamin
CREATE TABLE IF NOT EXISTS `kelamin` (
  `id_kelamin` varchar(50) DEFAULT NULL,
  `nama_kelamin` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.kelamin: 2 rows
DELETE FROM `kelamin`;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` (`id_kelamin`, `nama_kelamin`) VALUES
	('1', 'Laki'),
	('2', 'Cewe');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;


-- Dumping structure for table sekolah.kota
CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` varchar(50) DEFAULT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.kota: 3 rows
DELETE FROM `kota`;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
	('kt1', 'Blitar'),
	('kt2', 'Blitar'),
	('kt3', 'Madrid');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;


-- Dumping structure for table sekolah.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` varchar(50) DEFAULT NULL,
  `nama_pelajaran` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.mapel: 3 rows
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_pelajaran`) VALUES
	('m1', 'php'),
	('m2', 'html'),
	('m3', 'c++');
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;


-- Dumping structure for table sekolah.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` varchar(255) DEFAULT NULL,
  `nilai_` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.nilai: 3 rows
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `nilai_`) VALUES
	('n1', '87'),
	('n2', '89'),
	('n3', '86');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table sekolah.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `id_mapel` varchar(255) DEFAULT NULL,
  `nilai_siswa` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.siswa: 3 rows
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `jenis_kelamin`, `id_mapel`, `nilai_siswa`) VALUES
	('s1', 'Dawir', 'kt1', '1', 'm1', 'n3'),
	('s2', 'Wirda', 'kt2', '2', 'm2', 'n1'),
	('s3', 'Eka', 'kt3', '2', 'm3', 'n2');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
