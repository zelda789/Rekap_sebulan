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

-- Dumping database structure for blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `blog`;


-- Dumping structure for table blog.tb_artikel
CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `id_artikel` int(11) DEFAULT NULL,
  `tgl_upload` varchar(255) DEFAULT NULL,
  `judul_artikel` varchar(255) DEFAULT NULL,
  `gambar_artikel` varchar(255) DEFAULT NULL,
  `isi_artikel` varchar(255) DEFAULT NULL,
  `jumlah_view` varchar(255) DEFAULT NULL,
  `id_kategori` varchar(255) DEFAULT NULL,
  `id_author` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table blog.tb_artikel: 3 rows
DELETE FROM `tb_artikel`;
/*!40000 ALTER TABLE `tb_artikel` DISABLE KEYS */;
INSERT INTO `tb_artikel` (`id_artikel`, `tgl_upload`, `judul_artikel`, `gambar_artikel`, `isi_artikel`, `jumlah_view`, `id_kategori`, `id_author`, `keyword`) VALUES
	(1, '30 september 2016', 'William Kidd', 'william-kidd.jpg', 'A stylish Scotsman who had been a leading citizen of New York City, actively involved in the building of Trinity Church, Captain Kidd began his career as a privateer, originally commissioned to rid the seas of pirates', '1', NULL, NULL, NULL),
	(2, '30 september 2016', 'Edward Teach', 'edward-teach.jpg', 'Though there have been more successful pirates, Blackbeard is one of the best-known and widely-feared of his time. He commanded four ships and had a pirate army of 300 at the height of his career, and defeated the famous warship, HMS “Scarborough” in sea-', '5', NULL, NULL, NULL),
	(3, '30 september 2016', 'Anne Bonney', 'anne-bonny.jpg', 'Having traveled to the New World with her family, Anne fell in love and married a poor sailor named James Bonny. But when she grew increasingly disappointed by her husband’s lack of valor, she began seeking out the company of many different men in Nassau.', '4', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tb_artikel` ENABLE KEYS */;


-- Dumping structure for table blog.tb_author
CREATE TABLE IF NOT EXISTS `tb_author` (
  `id_author` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foro` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table blog.tb_author: 3 rows
DELETE FROM `tb_author`;
/*!40000 ALTER TABLE `tb_author` DISABLE KEYS */;
INSERT INTO `tb_author` (`id_author`, `nama`, `deskripsi`, `foro`) VALUES
	(1, 'jan', NULL, NULL),
	(2, 'jin', NULL, NULL),
	(3, 'jun', NULL, NULL);
/*!40000 ALTER TABLE `tb_author` ENABLE KEYS */;


-- Dumping structure for table blog.tb_kategori
CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table blog.tb_kategori: 2 rows
DELETE FROM `tb_kategori`;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, NULL),
	(2, NULL);
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;


-- Dumping structure for table blog.tb_komentar
CREATE TABLE IF NOT EXISTS `tb_komentar` (
  `id_komentar` int(11) DEFAULT NULL,
  `id_artikel` varchar(255) DEFAULT NULL,
  `konten` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table blog.tb_komentar: 2 rows
DELETE FROM `tb_komentar`;
/*!40000 ALTER TABLE `tb_komentar` DISABLE KEYS */;
INSERT INTO `tb_komentar` (`id_komentar`, `id_artikel`, `konten`, `nama`) VALUES
	(1, NULL, NULL, NULL),
	(2, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tb_komentar` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
