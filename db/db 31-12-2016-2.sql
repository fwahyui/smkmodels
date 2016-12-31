/*
SQLyog Ultimate v9.62 
MySQL - 5.6.24 : Database - dbspp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `KODEBUKU` int(11) NOT NULL AUTO_INCREMENT,
  `PAKETBUKU` varchar(50) DEFAULT NULL,
  `TAHUNAJARAN` varchar(10) DEFAULT NULL,
  `SEMESTER` varchar(11) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `Kode_jur` int(11) DEFAULT NULL,
  `GRADE` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`KODEBUKU`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`KODEBUKU`,`PAKETBUKU`,`TAHUNAJARAN`,`SEMESTER`,`HARGA`,`Kode_jur`,`GRADE`) values (2,'Paket Kelas 11','2016/2017','Ganjil',232000,1,'11'),(3,'Pkaet Ganjil Kelas 10','2016/2017','Ganjil',200000,2,'10');

/*Table structure for table `danainfaq` */

DROP TABLE IF EXISTS `danainfaq`;

CREATE TABLE `danainfaq` (
  `kodedanainfaq` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_Jur` int(11) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Gelombang` varchar(15) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodedanainfaq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `danainfaq` */

/*Table structure for table `du` */

DROP TABLE IF EXISTS `du`;

CREATE TABLE `du` (
  `kodedu` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Rician` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`kodedu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `du` */

insert  into `du`(`kodedu`,`Nama`,`TahunAjaran`,`Nominal`,`Rician`) values (1,'seragam,spp,infaq','2012',1200000,'0');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `NIP` varchar(50) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `NoHP` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`NIP`,`Nama`,`Alamat`,`NoHP`) values ('1','Andini Setyowati','Banyuwangi','081819181918'),('1234','Rara','Licin raya','123123123'),('2','Fitrian Wahyu Ilahi','Banyuwangi','01290198412');

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `KODE_JUR` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JUR` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KODE_JUR`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`KODE_JUR`,`NAMA_JUR`) values (1,'RPL'),(2,'TKJ'),(3,'TKR'),(5,'UPW'),(6,'Surabaya Jakarta');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `Grade` varchar(5) DEFAULT NULL,
  `Kelas` varchar(50) DEFAULT NULL,
  `JumlahMurid` int(11) DEFAULT NULL,
  `walikelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`idkelas`,`Grade`,`Kelas`,`JumlahMurid`,`walikelas`) values (1,'7','VII A',30,'1'),(2,'7','VII B',30,'2'),(3,'7','VII C',30,'1234'),(4,'7','VII D',30,'1234'),(5,'8','VIII A',25,'2');

/*Table structure for table `kelasdetil` */

DROP TABLE IF EXISTS `kelasdetil`;

CREATE TABLE `kelasdetil` (
  `idkelas` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `tahunajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`idkelas`,`nis`,`tahunajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelasdetil` */

insert  into `kelasdetil`(`idkelas`,`nis`,`tahunajaran`) values (1,'1','2015/2016'),(1,'1','2016/2017'),(1,'2','2015/2016'),(2,'2','2016/2017'),(3,'3','2016/2017'),(5,'4','2016/2017');

/*Table structure for table `prakerin` */

DROP TABLE IF EXISTS `prakerin`;

CREATE TABLE `prakerin` (
  `kodeprakerin` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_jur` int(11) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kodeprakerin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `prakerin` */

insert  into `prakerin`(`kodeprakerin`,`Kode_jur`,`TahunAjaran`,`Biaya`,`Keterangan`) values (1,1,'2016/2017',450,'Prakerin EUI');

/*Table structure for table `semester` */

DROP TABLE IF EXISTS `semester`;

CREATE TABLE `semester` (
  `KodeSemester` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_jur` int(11) DEFAULT NULL,
  `Grade` varchar(5) DEFAULT NULL,
  `Nama` varchar(10) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  PRIMARY KEY (`KodeSemester`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `semester` */

insert  into `semester`(`KodeSemester`,`Kode_jur`,`Grade`,`Nama`,`TahunAjaran`,`Biaya`) values (2,1,'X','Njajan','2016/2017',50000),(4,5,'10','wqe','2016/2017',10000000);

/*Table structure for table `seragam` */

DROP TABLE IF EXISTS `seragam`;

CREATE TABLE `seragam` (
  `KodeSeragam` int(11) NOT NULL AUTO_INCREMENT,
  `NamaSeragam` varchar(50) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Kode_Jur` int(11) DEFAULT NULL,
  `JenisKelamin` varchar(10) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`KodeSeragam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seragam` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `KODE_SISWA` int(11) NOT NULL AUTO_INCREMENT,
  `NIS` varchar(20) DEFAULT NULL,
  `KODE_JUR` int(11) NOT NULL,
  `NO_INDUK` varchar(20) DEFAULT NULL,
  `NAMA_SISWA` varchar(50) DEFAULT NULL,
  `ALAMAT_SISWA` varchar(100) DEFAULT NULL,
  `NOHP_SISWA` varchar(15) DEFAULT NULL,
  `THN_ANGK` int(11) DEFAULT NULL,
  `NAMA_JURSIS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KODE_SISWA`),
  KEY `FK_MENEMPATI` (`KODE_JUR`),
  CONSTRAINT `FK_MENEMPATI` FOREIGN KEY (`KODE_JUR`) REFERENCES `jurusan` (`KODE_JUR`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`KODE_SISWA`,`NIS`,`KODE_JUR`,`NO_INDUK`,`NAMA_SISWA`,`ALAMAT_SISWA`,`NOHP_SISWA`,`THN_ANGK`,`NAMA_JURSIS`) values (2,'1',1,'34234','EKA','AAAAAAAAAAAAAAAAAAAAAAAAAAA','0892781362763',2017,'RPL'),(3,'2',5,'90989','JKHHJ','UUUUUUUUUU','09898979896',2018,NULL),(4,'3',3,'908392','EKA','KOSAD','08989687567',2019,'RPL'),(5,'4',3,'12312','SADAD','DSADSD','0892781362763',2012,'TKR');

/*Table structure for table `spp` */

DROP TABLE IF EXISTS `spp`;

CREATE TABLE `spp` (
  `kodespp` int(11) NOT NULL AUTO_INCREMENT,
  `TahunAjaran` varchar(40) DEFAULT NULL,
  `Kelas` varchar(11) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`kodespp`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `spp` */

insert  into `spp`(`kodespp`,`TahunAjaran`,`Kelas`,`Nominal`) values (2,'2016/2017','11',75000),(9,'2016/2017','10',55000),(10,'2016/2017','10',120000);

/*Table structure for table `tahunjar` */

DROP TABLE IF EXISTS `tahunjar`;

CREATE TABLE `tahunjar` (
  `TahunAkademik` varchar(20) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`TahunAkademik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tahunjar` */

insert  into `tahunjar`(`TahunAkademik`,`Status`) values ('2015/2016','Tidak Aktif'),('2016/2017','Aktif');

/*Table structure for table `tbuser` */

DROP TABLE IF EXISTS `tbuser`;

CREATE TABLE `tbuser` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) DEFAULT NULL,
  `Hak` varchar(100) DEFAULT NULL,
  `NamaUser` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`Username`,`Pass`,`Hak`,`NamaUser`) values ('1','1','Wali Kelas','Ihda Falikatun Nisa'),('111','111','Siswa','Yulius Caesar'),('2','2','Guru','Sule Sutisnak'),('admin','admin','admin','Andini Setyowati');

/*Table structure for table `ukk` */

DROP TABLE IF EXISTS `ukk`;

CREATE TABLE `ukk` (
  `KodeUkk` int(11) NOT NULL AUTO_INCREMENT,
  `NamaUkk` varchar(50) DEFAULT NULL,
  `TahunAjaran` varchar(11) DEFAULT NULL,
  `Kode_Jur` int(11) DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  PRIMARY KEY (`KodeUkk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ukk` */

/*Table structure for table `unas` */

DROP TABLE IF EXISTS `unas`;

CREATE TABLE `unas` (
  `KodeUnas` int(11) NOT NULL AUTO_INCREMENT,
  `TahunAjaran` varchar(15) DEFAULT NULL,
  `Kode_Jur` int(11) DEFAULT NULL,
  `NamaUnas` varchar(50) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`KodeUnas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `unas` */

/*Table structure for table `uts` */

DROP TABLE IF EXISTS `uts`;

CREATE TABLE `uts` (
  `KODEUTS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMAUTS` varchar(20) DEFAULT NULL,
  `TahunAjaran` int(11) DEFAULT NULL,
  `Kode_Jur` int(11) DEFAULT NULL,
  `Grade` varchar(10) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`KODEUTS`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `uts` */

insert  into `uts`(`KODEUTS`,`NAMAUTS`,`TahunAjaran`,`Kode_Jur`,`Grade`,`Nominal`) values (1,'GNJIL',2014,0,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
