/*
SQLyog Ultimate v8.32 
MySQL - 5.5.27 : Database - sda_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sda_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sda_db`;

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `agenda` */

insert  into `agenda`(`id_agenda`,`tema`,`tema_seo`,`isi_agenda`,`tempat`,`pengirim`,`tgl_mulai`,`tgl_selesai`,`tgl_posting`,`jam`,`username`) values (30,'Seminar \"Membangun Portal Berita ala Detik.com\"','seminar-membangun-portal-berita-ala-detikcom','Seminar ini akan membahas tentang konsep, proses, dan implementasi dalam membangun portal berita sekelas detik.com.<br>','Lab. Universitas Atmajaya Yogyakarta','HMJ TI (081843092580)','2009-03-14','2009-03-14','2009-01-31','11.00 s/d 13.00 WIB','admin'),(31,'Bedah Buku \"Membongkar Trik Rahasia Master PHP\"','bedah-buku-membongkar-trik-rahasia-master-php','Acara bedah buku terbaru dari Lukmanul Hakim yang berjudul Membongkar Trik Rahasia Para Master PHP.\r\n','Toko Buku Gramedia Sudirman','Enda (08192839849)','2009-10-29','2009-10-30','2009-01-31','08.00 s/d 12.00 WIB','joko'),(29,'Workshop \"3 Hari Menjadi Master PHP\"','workshop-3-hari-menjadi-master-php','Workshop ini bertujuan untuk bla .. bla .. bla<br>','Jogja Expo Center','Adi (081893274848)','2009-02-21','2009-02-23','2009-01-31','15.00 s/d Selesai','sinto'),(36,'Workshop VBA Programming for Excel','workshop-vba-programming-for-excel','Tes\r\n','Lab. Pusat Komputer UII','Aci (08189320984)','2009-10-29','2009-10-29','2009-10-26','09.00 s/d Selesai','wiro'),(38,'Workshop Kolaborasi PHP dan jQuery','workshop-kolaborasi-php-dan-jquery','Materinya mengenai cara mengkolaborasikan pemrograman PHP dan jQuery\r\n','Hotel Santika Yogyakarta','Rendy (08787768768)','2010-01-15','2010-01-15','2010-01-15','09.00 s/d 16.00 WIB','admin');

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL AUTO_INCREMENT,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `album` */

insert  into `album`(`id_album`,`jdl_album`,`album_seo`,`gbr_album`,`aktif`) values (1,'Koleksi Flora','koleksi-flora','165802DSCN1137_kecil.jpg','Y'),(2,'Koleksi Fauna','koleksi-fauna','230255DSCN1136_kecil.jpg','Y'),(3,'Musim Kayu','musim-kayu','208923DSCN1143.JPG','Y');

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `artikel` */

insert  into `artikel`(`id_artikel`,`id_kategori`,`username`,`judul`,`judul_seo`,`isi_artikel`,`tanggal`,`jam`,`gambar`,`dibaca`,`tag`) values (3,19,'admin','Kelembagaan Pengelolaan Sumber Daya Air','kelembagaan-pengelolaan-sumber-daya-air','<p>Dua per tiga bagian dari wilayah ini terdiri \r\ndari unsur air, dan sepertiga lainnya merupakan unsur darat atau tanah \r\nyang terdapat di permukaan laut (air). Kedua unsur inilah yang membentuk\r\n pengertian Ã¢â‚¬Â tanah airÃ¢â‚¬Â bagi Negara Kesatuan Republik Indonesia (NKRI).\r\n Atas dasar pandangan ini, istilah tanah air menggambarkan unsur air dan\r\n tanah sebagai istilah negara yang kita warisi dari nenek moyang sejak \r\ndahulu kala sebelum datangnya zaman penjajah.</p><div class=\"isi_artikel\">\r\n                        \r\n<p>\r\nPengertian tanah air sebagai pengertian yang mandiri, secara \r\nkonsepsional dikembangkan dalam wujud Ã¢â‚¬Ëœwawasan nusantaraÃ¢â‚¬Â yang kemudian \r\nditerima sebagai konsep hukum baik dalam ketentuan perundang-undangan \r\nnasional maupun dalam Konvensi Hukum Laut Internasional III (UNCLOS \r\nIII)..</p>\r\n<p>\r\nPengelolan sumber daya air, sebagaimana kebijakaan-kebijakaan pemerintah\r\n lainnya, tidak lepas dari perkembangan yang terjadi pada tatanan \r\npemerintah kita yang sejalan dengan pasal 33 ayat (3) UUD 1945, yang \r\nmenyatakan bahwa sumber daya air dikuasai negara dan dipergunakan untuk \r\nsebesar-besarnya kemakmuran rakyat secara adil.</p>\r\n<p>\r\nAtas penguasaan sumber daya air oleh negara untuk menjamin hak setiap \r\norang untuk mendapatkan air bagi pemenuhan kebutuhan pokok sehari-hari \r\ndan melakukan pengaturan hak atas air.</p>\r\n<p>\r\nTerbitnya UU No.22 Tahun 1999 jo UU No. 32 Tahun 2004 tentang Pemerintah\r\n Daerah, telah memberikan pemerintah daerah untuk memiliki kewenangan \r\nyang diberikan pemerintah pusat dalam pengelolaan sumber daya alam dan \r\nlingkungan, khususnya pengaturan sumber daya air.</p>\r\n<p>\r\nPemerintah Pusat menetapkan suatu kebijakan khusus dalam pengelolaan \r\nsumber daya air dengan pengaturan yang dibagi berdasarkan wilayah \r\ntertentu mengingat sirklus air yang tidak dapat ditentukan oleh manusia \r\ndan meliputi suatu jalur siklus yang sangat luas. Oleh karena itu, meski\r\n pun air secara umum termasuk bagian dari pada sumber daya alam yang \r\npengaturannya telah didelegasikan kepada daerah, berdasarkan sifat dan \r\nkondisi dari air itu sendiri.</p>\r\n<p>\r\nPasal 1 angka 5 UU No. 11 Tahun 1974 tentang Perairan, bahwa pengairan \r\nadalah suatu bidang pembinaan atas air, sumber-sumber air, termasuk \r\nkekayaan alam bukan hewani yang terkandung di dalamnya, baik yang \r\nalamiah maupun yang telah diusahakan oleh manusia. Untuk kewenangan \r\ndiatur pada pasal 3 ayat (2) yang menekankan pada pembinaan air dan \r\nsumber-sumber lain. Secara umum kewenangan pengelolaan bidang perairan \r\ndalam UU tersebut ada pada pemerintah pusat dan dapat dilimpahkan kepada\r\n pemerintah daerah, namun UU No.11 Tahun 1974 tidak memberikan \r\nkewenangan kepada pemerintah daerah. Kewenangan pemerintah daerah dapat \r\nditafsir pada Peraturan Pemeritah No. 23 Tahun 1982 tentang Irigasi.</p>\r\n<p>\r\nTerbitnya UU No. 7 Tahun 2004 tentang Sumber Daya Air, menggantikan UU \r\nNo.11 Tahun 1974 yang tidak berlaku lagi. Kelembagaan pengelolaan sumber\r\n daya air dalam pada pasal 1 ayat (7) UU No. 7 Tahun 2004 menyatakan \r\nbahwa: pengelolan sumber daya air adalah upaya merancanakan, \r\nmelaksanakan, memantau, dan pendayagunakan sumber daya air, dan \r\npengendalian daya rusak air.</p>\r\n<p>\r\nDalam UU sumber daya air, pengelolaan sumber daya air berdasarkan asas \r\nkelestarian, keseimbangan, kemanfaatan umum, keterpaduan dan keserasian,\r\n keadilan, kemandirian, serta trasparansi dan akuntabilitas ( pasal 2).</p>\r\n<p>\r\nKewenangan pengelolaan sumber daya air dan tanggunjawab, di atur dalam \r\npasal 13- 19 UU No.7 Tahun 2004. Secara umum Undang-undang sumber daya \r\nair ini, pemerintah daerah diberi kewenangan untuk pengelolan sumber \r\ndaya air dalam kerangka normatif, pada kenyataannya masih tergantung \r\npada pemerintah pusat. Lebih dari itu, secara organisatoris dalam \r\nrangka melakukan pengelolaan sumber daya air telah ditetapkan Keputusan \r\nPresiden No. 123 Tahun 2001 tentang Tim Koordinasi Pengelolaan Sumber \r\nDaya Air, sebagaimana dirubah dengan Keputusan Presiden No.83 Tahun \r\n2002.</p>\r\n<p>\r\nKe depan, kelembagaan yang sudah di atur dalam Undang-undang sumber daya\r\n air, harus jelas fungsi dan peruntukannya dalam pengelolaan sumber daya\r\n air, khususnya pada pengelolaan ditingkat daerah.</p> ','2013-11-30','09:51:09','',1,''),(4,0,'admin','Mengenal Pengelolaan Sumber Daya Air','mengenal-pengelolaan-sumber-daya-air','<p><img alt=\"\" src=\"/sda/elfinder/php/../../assets/files/darajat3.gif\" style=\"float:left; height:362px; width:554px\" />Air memegang peranan penting dalam sejarah peradaban manusia. Hal ini terbukti dari kilasan sejarah manusia, bahwa peradaban manusia dimulai dari selalu berasal dari delta sungai seperti peradaban sungai Huangho di Cina, peradaban sungai Nil di Mesir, peradaban Mesopotamia di delta Sungai Tigris, Irak dan lainnya. Hal tersebut terus berlanjut hingga sekarang dan kelak di masa depan.&nbsp;<br />\r\n<br />\r\nNamun, bagaimana masa depan sumber daya air di kemudian hari? Setidaknya ada empat skenario, yang pertama &ldquo;<em>Business as usual</em>&rdquo;, dimana sumber daya air yang tersedia tidak bisa mengimbangi ledakan populasi dunia sehingga terjadi bencana dan wabah penyakit akibat kurangnya sumber daya air. Dalam skenario kedua, &ldquo;<em>Technologies save the day</em>&rdquo;, kemajuan teknologi seperti teknologi desalinasi, hidrologi recycle, pengubahan bentuk oksigen dan hidrogen menjadi air dan macam-macam teknologi baru lainnya dalam pengelolaan sumber daya air mampu mencukupi kebutuhan dunia.&nbsp;<br />\r\n<br />\r\nSkenario terburuk adalah &ldquo;<em>Global warming floods the world</em>&rdquo;, pemanasan global menyebabkan melelehnya es di kutub sehingga timbul banjir besar yang menenggelamkan sebagian besar dunia. Skenario terakhir adalah kebutuhan sumber daya air kelak akan dicukupi dengan &ldquo;penambangan&rdquo; air (es) dari angkasa luar seperti dari asteroid, bulan, planet dan lainnya<br />\r\n<br />\r\nBeberapa skenario tersebut tercantum dalam buku karya Thomas V. Cech yang berjudul &ldquo;<em>Principles of Water Resources : History, Development, Management and Policy</em>&rdquo;. Buku ini terbilang cukup komprehensif dalam membahas bidang sumber daya air dari berbagai pendekatan dan disiplin ilmu. Mulai dari bab pengantar yang menarik, buku ini juga diisi berbagai isu kebijakan dan contoh-contoh dari pengelolaan sumber daya air di masa lalu dan sekarang. Para pembaca juga akan mengetahui bagaimana faktor teknologi dan geografi mempengaruhi kebijakan publik dalam pengelolaan sumber daya, mempelajari proyek-proyek irigasi, berbagai badan pengelola sumber daya air, lingkungan, polusi air dan banyak lagi serta dilengkapi juga oleh glosarium, foto dan chart.&nbsp;<br />\r\n<br />\r\nBeberapa kelebihan dari buku ini adalah bagian isu kebijakan, studi kasus, dan esai dari penulis tamu tentang contoh-contoh kasus dari berbagai belahan dunia yang menarik, dan mempunyai keterkaitan yang kuat dengan isi buku. Format 2 kolomnya yang enak dibaca dan beberapa bahan rujukan berupa bacaan, video, website yang ada di tiap bab sangat memudahkan bagi yang ingin mengkaji lebih dalam lagi. Satu kelemahan buku ini adalah isi buku, termasuk gambar-gambar yang ada, hanya tersedia format dalam hitam putih.Sebagai rujukan, ini adalah buku yang ideal bagi mahasiswa tingkat lanjut, praktisi dan juga profesional dari bidang sumber daya air dan bidang lain yang terkait.</p>\r\n','2013-12-03','02:05:45','',1,''),(5,0,'admin','Pemanfaatan Sumber Daya Air Secara Bijak','pemanfaatan-sumber-daya-air-secara-bijak','<p>Sumber daya air adalah air, sumber air. dan daya air yang terkandung di dalamnya. Sumber air adalah tempat atau wadah air alami dan/atau buatan yang terdapat pada, di atas, ataupun di bawah permukaan tanah (<strong>UU No. 7 Tahun 2004</strong>).</p>\r\n\r\n<p>Dalam proses perjalanannya sumber daya air dimanfaatkan untuk berhagai macam keperluan. Daya air dipakai untuk energi misalnya pembangkit listrik tenaga air (<strong>PLTA</strong>). Mata air dipakai sebagai salah satu sumber air, demikian pula waduk dipakai sebagai wadah air yang dimanfaatkan untuk berbagai keperluan. Air Baku digunakan untuk irigasi, air bersih dipakai untuk keperluan dumestik dan non-domestik. Secara alami air dipakai oleh tumbuhan (flora) dan binatang (fauna) untuk melangsungkan kehidupannya. Dan adapun kebijakan di dalam pengelolaan air yaitu</p>\r\n\r\n<p><strong>Kebijakan Konservasi Sumber Daya Air</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mewujudkan sinergi dan mencegah konflik antarwilayah dan antarsektor dalam rangka memperkokoh ketahanan nasional, persatuan dan kesatuan bangsa, serta memperhatikan kebutuhan generasi sekarang dan akan datang.</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mendorong proses pengelolaan SDA berdasarkan wilayah sungai yang terpadu antarwilayah dan antarsektor dengan memperhatikan kepentingan nasional, provinsi, dan kabupaten/kota.</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyeimbangkan upaya konservasi dan pendayagunaan sumber daya air agar terwujud kemanfaatan air yang berkelanjutan bagi kesejahteraan seluruh rakyat baik pada generasi sekarang maupun akan datang.</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyelaraskan fungsi sosial, lingkungan hidup, dan ekonomi sumber daya air untuk menjamin pemenuhan kebutuhan pokok setiap orang dan mengoptimalkan nilai ekonomi air dengan memperhatikan upaya pelestariannya.</p>\r\n\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memperbaiki dan mengembangkan sistem pembiayaan yang menerapkan prinsip penerima manfaat dan pencemar menanggung biaya jasa pengelolaan SDA dengan mempertimbangkan kondisi sosial ekonomi masyarakat sehingga pengelolaan SDA dapat dilakukan secara efektif, efisien, berkeadilan, dan berkelanjutan.</p>\r\n\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengembangkan sistem kelembagaan pengelolaan SDA menuju terciptanya pemisahan fungsi pengaturan, pelaksanaan, pengoperasian &amp; pemeliharaan, pemanfaatan, dan koordinasi dgn tetap menjaga sinergi antarfungsi.</p>\r\n\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan efektivitas penegakan hukum atas peraturan perundang-undangan sumber daya air.</p>\r\n\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan kesadaran masyarakat dalam melindungi SDA.</p>\r\n\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penyesuaian kelembagaan pengelola sumber daya air dalam rangka desentralisasi dan otonomi daerah.</p>\r\n\r\n<p>10.&nbsp;&nbsp;Pembentukan dewan sumber daya air sebagai wadah koordinasi dan konsultasi para pemilik kepentingan dalam pengelolaan sumber daya air.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kebijakan Pendayagunaan Sumber Daya Air</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyediakan air yang memenuhi persyaratan kualitas dan kuantitas sesuai dengan ruang dan waktu secara berkelanjutan untuk memenuhi kebutuhan pokok kehidupan sehari-hari sebagai prioritas.</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan efektivitas dan efisiensi penyediaan serta penggunaan air irigasi dengan lebih mengutamakan kegiatan operasi dan pemeliharaan, optimalisasi, rehabilitasi, dan peningkatan kinerja sistem irigasi yang ada daripada pembangunan baru.</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mendorong pengembangan irigasi dan rawa dalam rangka mendukung produktivitas usaha tani untuk meningkatkan produksi pertanian dalam rangka ketahanan pangan nasional dan mensejahterakan masyarakat khususnya petani.</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Melaksanakan pendayagunaan SDA untuk mendukung perkembangan ekonomi secara efektif dan efisien dengan mempertimbangkan kepentingan antarsektor, antarwilayah, dan dampak jangka panjang.</p>\r\n\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menerapkan prinsip penerima manfaat menanggung biaya jasa pengelolaan sumber daya air, kecuali untuk kebutuhan pokok sehari-hari dan pertanian rakyat untuk mendorong penghematan penggunaan air dan meningkatkan kinerja pengelolaan sumber daya air.</p>\r\n\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan peran dunia usaha dalam pengusahaan sumber daya air dengan tetap mengutamakan kepentingan publik.</p>\r\n','2013-12-03','02:07:20','',1,'');

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `banner` */

insert  into `banner`(`id_banner`,`judul`,`url`,`gambar`,`tgl_posting`) values (4,'Fresh Book','http://freshbooks.com','freshbook.jpg','2009-02-05'),(7,'Cinema 21','http://21cineplex.com','cinema21.jpg','2008-02-09');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`id_kategori`,`username`,`judul`,`judul_seo`,`headline`,`isi_berita`,`hari`,`tanggal`,`jam`,`gambar`,`dibaca`,`tag`) values (1,22,'admin','Harapan Kapolri pada Kabareskrim Baru: Berantas Korupsi!','harapan-kapolri-pada-kabareskrim-baru-berantas-korupsi','Y','<p><strong>Jakarta</strong>&nbsp;- Kapolri Jenderal Sutarman memiliki segudang harapan pada Kapolda Jabar Irjen Suhardi Aliyus yang ditunjuk menjadi Kabareskrim Polri. Salah satu harapannya yakni Suhardi dapat memberantas korupsi dengan baik.<br />\r\n&quot;Memberantas korupsi dengan baik, mampu meningkatkan kerja penanganan korupsi dan pemberantas tindak kriminalitas lain dan pembinaan dari reserse sampai tingkat daerah,&quot; ujar Kapolri kepada wartawan sebelum membuka Rakor Pengawasan Polri/Kompolnas di Hotel Bidakara, Jl Gatot Subroto, Jakarta, Senin (25/11/2013).<br />\r\nKapolri mengatakan, kapan Suhardi dilantik, masih menunggu jadwal yang sedang disusun. Begitu juga dengan pelantikan Irwasum Irjen Anton Bahrul Alam.&nbsp;<br />\r\nKapolri memiliki pertimbangan sendiri atas penunjukan Suhardi. Kapolri melihat Suhardi dari integritas.&nbsp;<br />\r\n&quot;Saya tidak lihat junior-senior. Dari semua calon dia yang punya integritas,&quot; kata mantan Kapolda Metro Jaya ini.<br />\r\nSuhardi merupakan lulusan Akpol angkatan 1985 yang relatif masih muda. Karena itulah salah satu alasan Kapolri memilih Suhardi menjadi orang nomor 3 di Polri ini.&nbsp;&quot;Dia masih enerjik dan muda, punya integritas,&quot; puji Kapolri.</p>\r\n','Senin','2013-11-25','10:31:21','73102303_suhardi.jpg',1,''),(2,19,'admin','Microsoft akan Satukan Tiga','microsoft-akan-satukan-tiga','Y','<p><strong>Jakarta</strong>&nbsp;- Saat menyebut sistem operasi milik Microsoft, raksasa software ini punya tiga nama &lsquo;jendela&rsquo; yang harus dijelaskan. Ke depannya, Microsoft ingin ketiga jenis OS Windows besutannya ini tinggal dalam &#39;satu atap&#39;.&nbsp;<br />\r\n<br />\r\nKetiga jenis OS Windows itu, yang pertama ialah versi reguler Windows yang didesain untuk prosesor Intel atau AMD di laptop dan komputer. Kedua, mereka juga punya Windows RT yang khusus dipakai perangkat berbasis ARM. Terakhir, ada Windows Phone yang diperuntukkan bagi smartphone.&nbsp;<br />\r\n<br />\r\nMicrosoft pun menyadari, penamaan OS kerap menimbulkan kebingungan konsumen. Itu sebabnya, perusahaan yang berpusat di Redmond, Wahington, AS, ini ingin membuat OS-nya bisa dikenal dalam satu wadah saja.&nbsp;<br />\r\n<br />\r\nIndikasi ini tertangkap dalam pernyataan Executive VP Devices and Studios Microsoft, Julie Larson-Green. Menurutnya, seperti dikutip dari&nbsp;<em>Ubergizmo,</em>&nbsp;Senin (25/11/2013), suatu hari nanti Microsoft tak akan lagi punya tiga versi Windows, melainkan menyatukan ketiganya dalan satu brand.&nbsp;<br />\r\n<br />\r\n&quot;Kami punya Windows Phone, kami punya Windows RT dan ada full Windows. Kami tidak akan memiliki ketiganya. Kami juga berpendapat ada lebih banyak OS yang tidak berisiko terhadap daya tahan baterai atau keamanan. Namun itu mengorbankan fleksibilitas. Kami meyakini visi dan arah tersebut dan kami sedang melanjutkannya,&quot; ujarnya.<br />\r\n<br />\r\nBaru-baru ini, di kantor pusatnya Microsoft melakukan reorganisasi dengan menggabungkan tim Windows Phone dan Windows 8. Hal ini kemungkinan akan berdampak pada kemudahan membuat aplikasi bagi para developer, satu aplikasi untuk semua platform Windows.&nbsp;<br />\r\n<br />\r\n&quot;Kalau sekarang, package untuk Windows Phone dan Windows 8 itu beda. Developer codingnya sekali untuk logic codenya, kemudian dia bikin user interface Windows Phone dia compile dan package untuk disubmit ke Windows Phone Store,&quot; kata Technical Evangelist Microsoft Indonesia Norman Sasono, beberapa waktu lalu.&nbsp;<br />\r\n<br />\r\nMeski demikian, Norman mengaku tidak bisa memastikan kapan hal ini terwujud. Dia tidak menjelaskan lebih detail. &quot;Kita belum ada konfirmasi apakah (ketiga OS Windows) ini akan jadi satu platform. Arahnya kita sih ke sana, tapi itu kan perlu waktu,&quot; tutupnya.<br />\r\n&nbsp;</p>\r\n','Senin','2013-11-25','14:21:57','51153072740.jpg',1,'amerika,google,komputer');

/*Table structure for table `bukutamu` */

DROP TABLE IF EXISTS `bukutamu`;

CREATE TABLE `bukutamu` (
  `id_bukutamu` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `bukutamu` */

insert  into `bukutamu`(`id_bukutamu`,`nama`,`email`,`tgl`,`jam`,`pesan`) values (1,'Biro Pembangunan Daerah','okkyadha91@gmail.com','2013-11-26','20:41:56','    '),(2,'Gunawan Sugiono','okkyadha91@gmail.com','2013-11-26','20:42:15','    '),(3,'Gunawan Sugiono','okkyadha91@gmail.com','2013-11-26','20:42:44',' asasas   '),(4,'Biro Pembangunan Daerah','okkyadha91@gmail.com','2013-11-26','21:32:28',' asasas   '),(5,'AnggerW','wahyuangger@gmail.com','2013-12-03','14:56:50',' Testing  Buku  Tamu   ');

/*Table structure for table `data_sda` */

DROP TABLE IF EXISTS `data_sda`;

CREATE TABLE `data_sda` (
  `id_jaringan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jaringan` varchar(6) DEFAULT NULL,
  `nama_jaringan` varchar(100) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `luas_daerah` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_sda` */

/*Table structure for table `detail_data_sda` */

DROP TABLE IF EXISTS `detail_data_sda`;

CREATE TABLE `detail_data_sda` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_jaringan` int(11) NOT NULL,
  `tahun_pelaksanaan` varchar(5) DEFAULT NULL,
  `tnh_primer` float DEFAULT NULL,
  `linning_primer` float DEFAULT NULL,
  `tnh_sekunder` float DEFAULT NULL,
  `linning_sekunder` float DEFAULT NULL,
  `saluran_pembuangan` float DEFAULT NULL,
  `bgn_sadap` int(11) DEFAULT NULL,
  `bangun_pelengkap` int(11) DEFAULT NULL,
  `booklet` varchar(150) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_data_sda` */

/*Table structure for table `download` */

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `download` */

insert  into `download`(`id_download`,`judul`,`nama_file`,`tgl_posting`,`hits`) values (3,'Membuat Shopping Cart dengan PHP','shopping cart.pdf','2009-02-17',3),(5,'Skrip Captcha','captcha.rar','2009-02-06',2),(1,'Kalender Tahun 2009','kalender2009.rar','2009-02-06',9),(8,'Wallpaper PHP','PHP_weapon.jpg','2009-10-28',3),(9,'Slide  Pemrograman VBA Excell','Excell_VBA.ppt','2009-11-03',6);

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL AUTO_INCREMENT,
  `id_album` int(5) NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `gallery` */

insert  into `gallery`(`id_gallery`,`id_album`,`jdl_gallery`,`gallery_seo`,`keterangan`,`gbr_gallery`) values (1,1,'Foto 1','foto-1','','13763DSCN1137_kecil.jpg'),(2,1,'Foto 2','foto-2','','698791DSCN1136_kecil.jpg');

/*Table structure for table `halamanstatis` */

DROP TABLE IF EXISTS `halamanstatis`;

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `judul_seo` varchar(225) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `set_feature` enum('Y','N') NOT NULL DEFAULT 'N',
  `order_feature` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `halamanstatis` */

insert  into `halamanstatis`(`id_halaman`,`judul`,`judul_seo`,`isi_halaman`,`tgl_posting`,`gambar`,`set_feature`,`order_feature`) values (1,'Sejarah','sejarah','<p><img alt=\"\" src=\"/sda/elfinder/php/../../assets/files/pu_kcl.jpg\" style=\"float:left; height:200px; margin:5px; width:356px\" />Bidang Sumber Daya Air merupakan salah satu bidang dalam Struktur Organisasi Dinas Pekerjaan Umum Provinsi Kalimantan Timur. Secara resmi dinas ini terbentuk berdasarkan Peraturan Daerah Provinsi Kalimantan Timur No.8 Tahun 2008, tentang Organisasi dan Tata Kerja Dinas Daerah Provinsi Kalimantan Timur, Pasal 39 ayat (1) d.</p>\r\n\r\n<p>Bidang Sumber Daya Air membawahi tiga unit kerja&nbsp; tingkat seksi, yaitu :</p>\r\n\r\n<ul style=\"margin-left:400px\">\r\n	<li>Seksi Irigasi</li>\r\n	<li>Seksi Sungai, Danau, dan Waduk, sertaâ€‹â€‹</li>\r\n	<li>Air Baku, Rawa, dan Pantai.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam melaksanakan tugas-tugasnya, berdasarkan Peraturan Gubernur Kalimantan Timur No. 45 tahun 2008 tentang Penjabaran Tugas Pokok, Fungsi dan Tata Kerja Dinas Daerah Provinsi Kalimantan Timur, Bidang Sumber Daya Air mempunyai tugas pokok melaksanakan penyiapan bahan kebijakan, koordinasi, pembinaan, bimbingan serta pengendalian teknis Sumber Daya Air.</p>\r\n\r\n<p style=\"margin-left:27.0pt\">Ada 3 landasan yang menjadi dasar hukum pelaksanaan tugas Bidang Sumber Daya Air, yaitu landasan <em>struktura</em>l, <em>strategis</em>, dan <em>operasional</em> yang dirinci sebagai&nbsp; berikut.</p>\r\n\r\n<p style=\"margin-left:45.0pt\"><strong>a.&nbsp; Landasan Struktural</strong></p>\r\n\r\n<p style=\"margin-left:1.0in\">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UU No. 32 tahun 2004 tentang Pemerintah Daerah</p>\r\n\r\n<p style=\"margin-left:1.0in\">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PP No. 41 tahun 2007 tentang Organisasi Perangkat Daerah</p>\r\n\r\n<p style=\"margin-left:1.0in\">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perda No. 43 tahun 2008 tentang&nbsp; Tugas Pokok, Fungsi, dan Tata Kerja Sekretariat Daerah Provinsi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"margin-left:45.0pt\"><strong>b.&nbsp;&nbsp; Landasan Strategis</strong></p>\r\n\r\n<p style=\"margin-left:63.0pt\">1)&nbsp;&nbsp; UU No. 7 tahun 2004 tentang Sumber Daya Air</p>\r\n\r\n<p style=\"margin-left:63.0pt\">2)&nbsp;&nbsp; UU No. 42 tahun 2008 tentang Tata Ruang</p>\r\n\r\n<p style=\"margin-left:63.0pt\">3)&nbsp;&nbsp; PP No. 20 tahun 2006 tentang Irigasi</p>\r\n\r\n<p style=\"margin-left:63.0pt\">4)&nbsp;&nbsp; PP No. 42 tahun 2008 tentang Pengelolaan Sumber Daya Air</p>\r\n\r\n<p style=\"margin-left:45.0pt\"><strong>c.&nbsp;&nbsp; Landasan Operasional</strong></p>\r\n\r\n<p style=\"margin-left:63.0pt\">1)&nbsp;&nbsp; PP No. 28 tentang Usaha dan Peran Masyarakat Jasa Konstruksi</p>\r\n\r\n<p style=\"margin-left:63.0pt\">2)&nbsp;&nbsp; PP No. 29 tentang Penyelenggaraan Jasa Konstruksi</p>\r\n\r\n<p style=\"margin-left:63.0pt\">3)&nbsp;&nbsp; UU No. 18 tahun 2003 tentang Jasa Konstruksi</p>\r\n\r\n<p style=\"margin-left:63.0pt\">4)&nbsp;&nbsp; Keputusan Presiden&nbsp; No.80 tahun 2003 (Beserta Perubahannya) tentang Pengadaan Barang dan Jasa Pemerintah</p>\r\n\r\n<p style=\"margin-left:63.0pt\">5)&nbsp;&nbsp; Dokumen Kontrak</p>\r\n','2013-11-25','','N',0),(2,'Struktur Organisasi','struktur-organisasi','<p><img alt=\"\" src=\"/sda/elfinder/php/../../assets/files/Untitled.png\" style=\"height:460px; width:819px\" /></p>\r\n','2013-11-25','','N',0),(3,'Kepengurusan KRUS','kepengurusan-krus','<p>Kepengurusan KRUS</p>\r\n','2013-11-25','','N',0),(4,'Program Kerja','program-kerja','<h3><strong>Program dan Sasaran Bidang Sumber Daya Air</strong></h3>\r\n\r\n<ol>\r\n	<li>Program pengembangan jaringan irigasi, rawa, dan jaringan pengairan lainnya<br />\r\n	Sasaran : Pengembangan areal-areal potensi daerah irigasi sehingga areal irigasi yang produktif menjadi luas, terwujudnya swasembada pangan di provinsi KalimantanTimur</li>\r\n	<li>Proram pengelolaan dan penyediaan air baku<br />\r\n	Sasaran : Menyediakan &amp; mengelola air baku terutama pada daerah potensi rawan air untuk kepentingan hajat orang banyak</li>\r\n	<li>Proram pengembangan dan pengelolaan sungai, danau, dan sumber daya air lainnya<br />\r\n	Sasaran : Mengembangkan, mengelola dan mengkonservasi sungai, danau dan sumber daya air dengan memperhatikan keseimbangan dan keselarasan dengan alam</li>\r\n	<li>Program pengendalian banjir<br />\r\n	Sasaran : Mengendalikan, mengelola daerah-daerah potensi banjir agar bermanfaat bagi manuasia dan lingkungan</li>\r\n</ol>\r\n','2013-11-25','','N',0),(5,'Visi dan Misi','visi-dan-misi','<p><strong>Visi</strong> : Terwujudnya kemanfaatan Sumber Daya Air yang berkelanjutan untuk sebesar-besarnya kemakmuran rakyat</p>\r\n\r\n<p><strong>Misi</strong> : Menyediakan pembangunan infrastruktur sumber daya air guna mendukung ketahanan penyediaan pangan dan pendayagunaan sumber daya air untuk kesejahteraan rakyat.</p>\r\n\r\n<p><strong>Tujuan</strong> : Mendukung infrastruktur penunjang guna terwujudnya daerah irigasi, infrastruktur penyediaan air baku, infrastruktur konservasi penunjang sumber daya air, dan infrastruktur pengendali banjir pada wilayah-wilayah rawan banjir dan pengaman pantai</p>\r\n\r\n<p><strong>Sasaran</strong> : Terwujudnya pembangunan infrastuktur sumber daya air dan upaya rehabilitasi kawasan kritis daerah tangkapan sungai dan danau, serta tereduksi daerah kawasan banjir.</p>\r\n','2013-11-25','','N',0),(6,'Akomodasi','akomodasi','<p>Akomodasi</p>\r\n','2013-11-25','','N',0),(7,'Biaya','biaya','<p>Biaya</p>\r\n','2013-11-25','','N',0),(8,'Ruangan Pertemuan','ruangan-pertemuan','<p>Ruangan Pertemuan</p>\r\n','2013-11-25','','N',0),(9,'Panggung Terbuka','panggung-terbuka','<p>Panggung Terbuka</p>\r\n','2013-11-25','','N',0),(10,'Toko Sovenir','toko-sovenir','<p>Toko Sovenir</p>\r\n','2013-11-25','','N',0),(11,'Koleksi Flora','koleksi-flora','<p>Koleksi Flora</p>\r\n','2013-11-25','','N',0),(12,'Koleksi Fauna','koleksi-fauna','<p>Koleksi Flora</p>\r\n','2013-11-25','','N',0),(13,'Musim Kayu','musim-kayu','<p>Musim Kayu</p>\r\n','2013-11-25','','N',0),(14,'Penelitian','penelitian','<p><strong>DAFTAR PENELITIAN DI KRUS</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:650px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:36px; width:38px\">\r\n			<p><strong>NO</strong></p>\r\n			</td>\r\n			<td style=\"height:36px; width:586px\">\r\n			<p><strong>JUDUL PENELITIAN</strong></p>\r\n			</td>\r\n			<td style=\"height:36px; width:66px\">\r\n			<p><strong>TAHUN</strong></p>\r\n			</td>\r\n			<td style=\"height:36px; width:255px\">\r\n			<p><strong>PENELITI</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>1</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Pemupukan NPK dan Lebar Larikan yang Berbeda&nbsp; terhadap Pertumbuhan Tanaman Kapur (<em>Dryobalanops lanceolata </em>Burck) Tingkat Pancang di Hutan Pendidikan UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2000</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Eddy Superwandy</p>\r\n\r\n			<p>Dr.I.B.D.A.S. S</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>2</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kehadiran Jenis-Jenis Pionir setelah Lantai Hutan Dibersihkan pada Tapak hutan Sekunder Tua, Muda dan Semak Belukar di Hutan Pendidikan Universitas Mulawarman, Lempake, Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2001</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Jajang Tedi Kurniawan</p>\r\n\r\n			<p>Prof.Dr.Ir.Ariffien B, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>3</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Teknik dan Bentuk Penyiangan terhadap Pertumbuhan Tanaman <em>Pinus Merkusii</em> Jang et de iries di Hutan Pendidikan UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2001</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Ronald Sirait</p>\r\n\r\n			<p>Ir. Ripto Permono</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>4</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Hutan dalam Rangka Penatagunaan Hutan Pendidikan Universitas Mulawarman di Tanah Merah Lempake Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2001</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Sarwo Artiko</p>\r\n\r\n			<p>Dr. Djumali Marji, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>5</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Keanekaragaman Jenis Burung Pemakan Serangga di Hutan Pendidikan UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2001</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Istib Saroh</p>\r\n\r\n			<p>Dr. Chandradewana Boer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>6</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Keanekaragaman Jenis Burung dan Vegetasi pada Hutan Pendidikan UNMUL Lempake Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2001</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<ol>\r\n				<li>Junaidi&nbsp; M</li>\r\n			</ol>\r\n\r\n			<p>Dr. Chandradewana Boer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>7</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Prediksi Sedimentasi Edb DAS Perladangan Berdasarkan Pengukuran pada Sub DAS Hutan Bekas Kebakaran di Hutan Pendidikan Universitas Mulawarman Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2002</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Junda Tefwayo</p>\r\n\r\n			<p>Ir. Zainuddin Mohraga,M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>8</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Ketelitian dan Efisiensi Tiga Jenis Alat Ukur pada Pengukuran Diameter Pohon di Hutan Pendidikan UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2002</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Nur Salim</p>\r\n\r\n			<p>Ir. H. Oman Suherman, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>9</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kondisi Iklim Mikro pada Hutan Koleksi UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2002</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Abubakar Ernas</p>\r\n\r\n			<p>Ir. Sadeli Ilyas, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>10</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Infiltrasi pada beberapa Jenis Tanah dan Tipe Kelerengan di Kebun Raya Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2002</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Elisabeth</p>\r\n\r\n			<p>Dr. Ir. Sigit Hardiwinarto, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>11</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Pengembangan Pengelolaan Kawasan Wisata Kebun Raya Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2002</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Andini Anugrahaning</p>\r\n\r\n			<p>Dr.Ir.Marlon I Aipassa, M.Agr.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>12</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Tingkat Erobilitas Tanah pada Tekstur Tanah yang Berbeda di Areal Kebun Raya Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Dikman Sunindro</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>13</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tantang Penggunaan Dua Metode Pengukuran Erobilitas&nbsp; Tanah pada Tanah yang Berbeda Warna di Kebun Raya Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Shinta Permana Lestari</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>14</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Penyakit&nbsp; pada Tegakan Mahoni di Hutan Pendidikan Universitas Mulawarman Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Dwi Tristonia</p>\r\n\r\n			<p>Dr.Ir. Djumali Mardji, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>15</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Motivasi Masyarakat Berwisata ke Kebun Raya UNMUL Samarinda (KRUS).</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Shinta Margareta</p>\r\n\r\n			<p>Drs.J. Johanes Hangkueng, M.Si</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>16</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Hubungan Aliran Permukaan &amp; Erosi Sedimen pada Lahan Tebing yang Ditanami Rumput dengan Kondisi Tanah Berbeda di Kebun Raya UNMUL.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Asimah</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>17</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Penyusunan Model Pengenalan Etika Lingkungan Hidup sebagai Bagian dari Perkembangan Ekowisata di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Joned</p>\r\n\r\n			<p>Dr.Ir.H.Triyono Sudarmadji, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>18</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Karakteristik Kapasitas Infiltrasi pada Lahan Hutan tidak Terbakar , Hutan Bekas Terbakar, Semak Belukar dan Ladang di Hutan Pendidikan UNMUL Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Amin Yusuf</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>19</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengukuran Erosi Sedimen pada Daerah Berserah dan Tanpa Seresah pada Areal Hutan Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2003</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Selina Ali Matusin</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>20</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Penyakit pada Semai Kapur (<em>Dryobalanops lanceolata </em>Burck) di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Muhammad Iqror</p>\r\n\r\n			<p>Ir. R.E. Iskandar B, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>21</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Potensi Regenerasi Alam Jenis Ulin (<em>Eusideroxylon zwageri</em>&nbsp; T.et.B)di Kebun Raya Universitas Mulawarman Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Murjani Mansyur</p>\r\n\r\n			<p>Ir. Hj. Hastaniah, M.P</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>22</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Pembukaan Rumpang dan Pemupukan Urea terhadap Pertumbuhan Awal Tanaman Mahoni (<em>Swietenia macrophylla</em> King) di Hutan Pendidikan UNMUL Lempake Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Rusman Ohimas</p>\r\n\r\n			<p>Prof.Dr.Ir.Maman Sutisna, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>23</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Phenology Semai Ulin (<em>Eusideroxylon zwageri</em>&nbsp; T.et.B)dan Potensi Biji Bawah Pohon Induk di Kebun Raya Universitas Mulawarman Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Fatur Rahman</p>\r\n\r\n			<p>Dr. Sutedjo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>24</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Jenis-Jenis Tumbuhan Berkhasiat Obat di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Umul Nur Jannah</p>\r\n\r\n			<p>Dr. Sutedjo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>25</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Kebakaran Hutan terhadap Potensi Trubusan Ulin pada Areal Hutan Pendidikan UNMUL Lempake Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2004</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Vencencius Pambudi Utomo</p>\r\n\r\n			<p>Prof.Dr.Ir.B.D.A.S. Simarangkir, MA.Sc.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>26</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kajian tentang Peresapan Air pada Tekstur Tanah&nbsp; dan Penutupan Lahan Berbeda di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2005</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Izza Purnama Sari</p>\r\n\r\n			<p>Ir. Sri Sarminah, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>27</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Intersepsi&nbsp; Curah Hujan pada Pohon Mahang (<em>Macaranga gigantea)</em> Kelas Diameter 10 &ndash; 20 dan 30 cm di Kebun Pendidikan Kebun Raya UNMUL.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2005</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Aan Handriyani</p>\r\n\r\n			<p>Ir.H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>28</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Persepsi Masyarakat terhadap&nbsp; Perkembangan Kebun Raya UNMUL Samarinda (KRUS) Sebagai Kawasan Hutan Rekreasi</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2005</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Hendrawati</p>\r\n\r\n			<p>Ir. Setiawati, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>29</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Perbedaan Pengaruh Pupuk Majemuk Bentuk Tablet pada terhadap Laju Tumbuhan Awal Tanaman Gaharu di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Eko Purnomo</p>\r\n\r\n			<p>Prof.Sr. Ir. Maman Sutisna, M.Agr.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>30</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Uji&nbsp; Coba Rehabilitasi Lahan Tebing Rusak Secara Vegetatif&nbsp; di Kawasan Hutan Pendidikan Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Nor Hidayah</p>\r\n\r\n			<p>Ir. Sri Sarminah, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>31</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Tingkat Ketelitian Dua Alat Ukur Tinggi Pohon yang Berbeda pada Puspa (<em>Schima wallichii</em> korth) di Kebun Raya UNMUL Lempake Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Jerlita Kadang Allo</p>\r\n\r\n			<p>Ir. H. Oman Suherman, M.Sc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>32</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Ketelitian Alat Ukur Kelas Diameter yang Berbeda pada Pohon-Pohon Puspa (<em>Schima wallichii</em> Korth)</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Weny Lestari</p>\r\n\r\n			<p>Ir. H. Oman Suherman, M.Sc.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>33</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Profil Pohon Induk dan Refenerasi Pohon Gaharu (<em>Aquilaria malaccensis</em>&nbsp; Lamk dan <em>Aquilaria beccariana</em> Van Tiegh) di Kebun Raya UNMUL Samarinda (KRUS)</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Evie Dwi Fitrianti</p>\r\n\r\n			<p>Dr. Sutedjo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>34</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kajian Debit Limpasan Air Sungai pada Sub DAS Hutan Pendidikan Kebun Raya UNMUL Samarinda (KRUS) Lempake.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2006</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Endra Fibianto&nbsp;&nbsp; W</p>\r\n\r\n			<p>Ir. Sri Sarminah, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>35</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Observasi Jamur Mikro Tanah pada Lokasi yang Berbeda di Kebun Raya UNMUL Samarinda (KRUS)</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Sinamorata Manik</p>\r\n\r\n			<p>Ir. R.E.&nbsp; Iskandar&nbsp; Bimaatmaatmadja, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>36</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Pembersihan Lahan dan Pengerukan pada Kualitas Air Aliran Sungai Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Robert Yusuf</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>37</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Keanekaragaman Jenis Kupu-Kupu (<em>Rhopalocera</em>) pada Tipe Penutupan Lahan yang Berbeda di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Vemyola Pirade</p>\r\n\r\n			<p>Ir. R.E. Iskandar B, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>38</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Erosi Tanah Liat pada Hutan Sekunder dan Belukar Muda di Kawasan Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>M. Isa Mario</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>39</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Erosi pada Lahan dengan beberapa Teknik Penanaman di Kawasan Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Eko Yunianto&nbsp; N.R</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>40</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kehadiran Jenis 2x Jamur Makro Tanah pada Tiga Zona Penanaman yang Berbeda di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Hendra Palentik</p>\r\n\r\n			<p>Dr. Ir. Djumali Mardji, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>41</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Debit Limpasan Air Sungai pada Sub DAS Lempake di Kawasan Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Bunga Rossalia</p>\r\n\r\n			<p>Ir. H.Zainuddin Mohraga, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>42</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Erosi Tanah Berpasir pada Hutan Sekunder dan Belukar Muda di Kawasan Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Sunarsih</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M. Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>43</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Perbandingan Sidimen Terlarut pada Sub-sub DAS Lempake di Kawasan Kebun Raya Unmul Saamarinda di Wilayah Kota Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Anita Apriani</p>\r\n\r\n			<p>Prof. Dr. Marlon I. Aipassa</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>44</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Persepsi Masyarakat tentang Kawasan Konservasi di Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2007</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Wiwik Endang Widuri</p>\r\n\r\n			<p>Prof. Dr. Marlon I. Aipassa</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>45</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Kesesuaian Pakan Lebah Madu (Apis cerana F) di Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Irja Felanie</p>\r\n\r\n			<p>Harmonis. S.Hut,M.Sc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>46</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Pupuk dan Rumpang terhadap Pertumbuhan Tanaman Lingena (Dipterocarpus indicus Wild)</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Nirmala R. Hatuwe</p>\r\n\r\n			<p>Prof.Dr.H.Maman Sutisna</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>47</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Penyebaran Pohon Macaranga gigantea Reb.f.et.Zdl) Berdasarkan Topografi di kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Yuli Hadi Nurmansyah</p>\r\n\r\n			<p>Dr.Ir. Paulus Matius</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>48</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Distribusi Air Hujan pada Lantai Hutan Berdasarkan Intersepsi dan Infiltrasi pada Beberapa Pohon Gaharu(Aquilaria malaccensis Langk) di Hutan Pendidikan Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Ardan Fachrudin S.</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M. Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>49</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kajian Lengkap Hutan Kebun Raya UNMUL Samarinda (KRUS) dengan Menggunakan CitraIkonos</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Fauzi Rahman Smith</p>\r\n\r\n			<p>Heru Herlambang, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>50</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pemetaan Data Drainase Hutan Pendidikan Fakultas Kehutanan Kebun Raya UNMUL Samarinda dengan Sistem Informasi Geografi.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Chotijah</p>\r\n\r\n			<p>Heru Herlambang, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>51</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Jenis Mamalia Kecil di Kawasan Hutan Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Wijiani</p>\r\n\r\n			<p>Rustam, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>52</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Cek Dam terhadap Beban Endapan Layang pada Sub-Sub DAS Lempake di Kawasan Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Misdayanti</p>\r\n\r\n			<p>Prof.Dr.Ir.Marlon I Aipassa, M.Agr.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>53</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pengaruh Cek Dam terhadap Debit Limpasan Air Sungai pada Sub DAS Lempake di Kawasan Kebun Raya UNMUL&nbsp; Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Adis Hafsari</p>\r\n\r\n			<p>Prof.Dr.Ir.Marlon I Aipassa, M.Agr.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>54</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Jenis Amfibi Ordo Anura di Hutan Pendidikan dan Penelitian Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2008</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Hendra</p>\r\n\r\n			<p>An Rustam, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>55</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kondisi Pohon Induk dan Penyebaran Permudaan Alam Kayu Bawang <em>( Scorodocarpus borneensis</em> Beccarii) di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Egberta Helena</p>\r\n\r\n			<p>Ir. Rita Diana, M.A</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>56</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Pakan Kupu-Kupu Famili <em>Papilionidae </em>di Kebun Raya Unmul Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Andry P. Pasang</p>\r\n\r\n			<p>Ir. R.E.&nbsp; Iskandar&nbsp; Bimaatmaatmadja, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>57</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Perbandingan Kemampuan Dua Seri Alat GPS (Global Positioning System) dalam Penentuan Titik di Hutan Pendidikan dan Penelitian Fakultas Kehutanan Lempake Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Hariyanto</p>\r\n\r\n			<p>Heru Herlambang, MP.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>58</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Penelitian Pengukuran&nbsp; Volume Pohon dan Rumus Densin pada Tegakan Puspa di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Edy Wicaksono</p>\r\n\r\n			<p>Prof.Dr.Ir. Afif Ruchaemi, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>59</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Daiameter dan Bidang Dasar Tajuk pada Tegakan Puspa (<em>Schima wallichi</em>) di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Ahmad Romzi Amrullah</p>\r\n\r\n			<p>Prof.Dr.Ir. Afif Ruchaemi, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>60</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Ketelitian Pengukuran Volume Pohon dengan Rumus Pressler pada Tegakan&nbsp; Puspa di Kebun Raya UNMUL Samarind.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Temmy Rendra Hermawan</p>\r\n\r\n			<p>Prof.Dr.Ir. Afif Ruchaemi, M.Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>61</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Perubahan Penutupan Vegetasi&nbsp; di Hutan Pendidikan Fakultas Kehutanan Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Yulia Maharani&nbsp; S</p>\r\n\r\n			<p>Dr.Ir.H. Sumaryono, M.Sc.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>62</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kehadiran Vegetasi dKehadiran Vegetasi di Sekitar Kayu Bawang (<em>Scorodocarpus borneensis Beccarii</em>) di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Resmita Margasari</p>\r\n\r\n			<p>Ir. Hj. Hastaniah, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>63</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Tingkat Kesejahteraan Satwa di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Heppy Nanda Pujiastuti</p>\r\n\r\n			<p>Dr. Chandradewana Boer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>64</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Keragaman Jenis Capung Sub Ordo Anisoptera pada beberapa Tipe Habitat di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Maya Sari</p>\r\n\r\n			<p>Harmonis, M.Sc.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>65</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Mamalia Nokturnal di Area Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2009</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Dian Ayu Kurnia Jayanti</p>\r\n\r\n			<p>Albert Laston Manurung, M.For.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>66</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Inventarisasi Penyakit Tanaman Tiga Jenis <em>Dipterocarpaceae</em> Plot Percobaan di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2011</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Usat Efendi Lion</p>\r\n\r\n			<p>Ir. R.E. Iskandar B, MP.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>67</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Pertumbuhan Tanaman Trembesi (<em>Samanea saman</em>) Berdasarkan Perbedaan Pemberian Pupuk di Kebun Raya UNMUL Samarinda.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2012</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Herlan Matondang</p>\r\n\r\n			<p>Kiswanto, S.Hut, MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>68</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Kehadiran dan Profil Pohon Buah <em>Edible Fruits</em> Asli Kalimantan di Kebun Raya UNMUL.</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2012</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Danang Suto Budi</p>\r\n\r\n			<p>Ir. Rita Diana, MA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>69</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi Perubahan Sifat Fisik Air Sebelum dan Sesudah Penambangan Batubara di Sub-Sub DAS&nbsp; Lempake Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2013</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Ulfah</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M. Agr</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:38px\">\r\n			<p>70</p>\r\n			</td>\r\n			<td style=\"width:586px\">\r\n			<p>Studi tentang Sedimentasi pada Danau / Kolam Penampungan di Kebun Raya UNMUL Samarinda</p>\r\n			</td>\r\n			<td style=\"width:66px\">\r\n			<p>2013</p>\r\n			</td>\r\n			<td style=\"width:255px\">\r\n			<p>Sugiarni</p>\r\n\r\n			<p>Ir. H. Zainuddin Mohraga, M. Agr</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n','2013-11-25','','N',0),(15,'Konservasi','konservasi','<p>Konservasi</p>\r\n','2013-11-25','','N',0),(16,'Pendidikan','pendidikan','<p>Pendidikan</p>\r\n','2013-11-25','','N',0),(17,'Konsultasi','konsultasi','<p>Konsultasi</p>\r\n','2013-11-25','','N',0),(18,'Peneliti Kami','peneliti-kami','<p>Peneliti Kami</p>\r\n','2013-11-25','','N',0),(19,'Panggung Hiburan','panggung-hiburan','<p>Panggung Hiburan</p>\r\n','2013-11-25','','N',0),(20,'Fasilitas','fasilitas','','2013-11-25','','N',0),(21,'Tugas dan Fungsi','tugas-dan-fungsi','<p>Bidang Sumber Daya Air melaksanakan sebagian tugas Kepala Dinas Pekerjaan Umum di Bidang Sumber Daya air dan bertanggung jawab kepada Kepala Dinas.</p>\r\n\r\n<p>Untuk menyelenggarakan tugas sebagaimana dimaksud, Bidang Sumber Daya Air mempunyai fungsi :</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Penyiapan bahan perumusan kebijakan perencanaan irigasi, sungai, danau dan wadauk serta air tawar, rawa dan pantai;</li>\r\n	<li>Penyiapan bahan koordinasi perencanaan irigasi, sungai, danau dan waduk serta air baku, rawa dan pantai;&nbsp;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan irigasi;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan sungai, danau dan waduk;&nbsp;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan sumber daya air baku, rawa dan pantai;&nbsp;</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh atasan sesuai dengan bidang tugas dan fungsinya.&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>\r\n	<h3><strong>Seksi Irigasi</strong>&nbsp;</h3>\r\n\r\n	<p><strong>Tugas Pokok</strong> : Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Pengembangan Peningkatan Jaringan Irigasi-irigasi; Informasi Paket Pengadaan Kegiatan; Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Kegiatan Fisik dan Keuangan; Laporan.</p>\r\n	</li>\r\n	<li>\r\n	<h3><strong>Seksi Sungai, Danau dan Waduk</strong></h3>\r\n\r\n	<p><strong>Tugas Pokok </strong>:&nbsp;Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Banjir; Konservasi Sungai, Waduk dan Danau; Penyediaan Penggunaan Sumber Daya Air; Informasi Paket Pengadaan Kegiatan; Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Kegiatan dan Keuangan; Laporan.</p>\r\n	</li>\r\n	<li>\r\n	<h3><strong>Seksi Air baku, Rawa dan Pantai</strong></h3>\r\n\r\n	<p><strong>Tugas Pokok</strong> : Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Program Pengebangan Air Baku daerah rawa; Pengamanan Pantai; Informasi Paket Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Fisik dan Keuangan; Laporan.</p>\r\n	</li>\r\n</ol>\r\n','2013-12-03','','N',0);

/*Table structure for table `hubungi` */

DROP TABLE IF EXISTS `hubungi`;

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `hubungi` */

insert  into `hubungi`(`id_hubungi`,`nama`,`email`,`subjek`,`pesan`,`tanggal`) values (1,'Ariawan','ariawan@gmail.com','Mohon Informasi','Mohon informasi mengenai buku yang diterbitkan oleh Lokomedia.','2008-02-10'),(4,'lukman','lukman@hakim','Request Code','Tolong dunk ..','2009-02-25'),(8,'lukman','lukman@bukulokomedia.com','kontak kami','tes modul hubungi kami','2010-05-16');

/*Table structure for table `identitas` */

DROP TABLE IF EXISTS `identitas`;

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL AUTO_INCREMENT,
  `nama_website` varchar(100) NOT NULL,
  `alamat_website` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `alamat_kantor` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fb` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `identitas` */

insert  into `identitas`(`id_identitas`,`nama_website`,`alamat_website`,`meta_deskripsi`,`meta_keyword`,`alamat_kantor`,`email`,`telp`,`fb`,`twitter`,`favicon`) values (1,'Website PU-Bidang SDA','http://localhost/krs','Dinas PU Povinsi Kaltim Bidang Sumber Daya Air','PU Kaltim,PU Prov Kaltim,PU Kaltim Bidang SDA,WEB SDA Kaltim,Dinas Pekerjaan Umum Provinsi Kalimantan Timur Bidang Sumber Daya Air','JL. TENGKAWANG NO.1 GEDUNG A LANTAI 1 Samarinda','info@websda.com','0541-276246','https://www.facebook.com/harrywebdesigner','https://twitter.com/harrysuherman','favicon.ico');

/*Table structure for table `jenis` */

DROP TABLE IF EXISTS `jenis`;

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jenis` */

insert  into `jenis`(`id_jenis`,`jenis`) values (1,'Irigasi'),(2,'Air Baku'),(3,'Pantai'),(4,'Rawa'),(5,'pengendalian banjir & perbaikan sungai'),(6,'wilayah sungai'),(7,'neraca air'),(8,'DAS');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`,`kategori_seo`,`aktif`) values (19,'Teknologi','teknologi','Y'),(2,'Olahraga','olahraga','Y'),(22,'Politik','politik','Y'),(23,'Hiburan','hiburan','Y');

/*Table structure for table `kegiatan_sda` */

DROP TABLE IF EXISTS `kegiatan_sda`;

CREATE TABLE `kegiatan_sda` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(2) DEFAULT NULL,
  `program_kegiatan` varchar(150) DEFAULT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `pekerjaan` varchar(150) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `rekanan` varchar(100) DEFAULT NULL,
  `volume` float DEFAULT NULL,
  `nilai_kontrak` double DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan_sda` */

insert  into `kegiatan_sda`(`id_kegiatan`,`id_jenis`,`program_kegiatan`,`tahun`,`pekerjaan`,`lokasi`,`rekanan`,`volume`,`nilai_kontrak`,`foto`) values (2,1,'Pengembangan dan pengelolaan Jaringan Irigasi, Rawa dan Jaringan Pengairan Lainnya','2013','Rehabilitasi jaringan irigasi Teluk dalam','teluk dalam','CV. AW',1,658000000,NULL);

/*Table structure for table `mainmenu` */

DROP TABLE IF EXISTS `mainmenu`;

CREATE TABLE `mainmenu` (
  `id_main` int(5) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `posisi` int(3) NOT NULL,
  PRIMARY KEY (`id_main`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mainmenu` */

insert  into `mainmenu`(`id_main`,`nama_menu`,`link`,`aktif`,`posisi`) values (1,'Home','http://localhost/krs','Y',1),(2,'Profil','page.php','Y',2),(3,'Foto Kegiatan','album.php','Y',3),(4,'Berita','berita.php','Y',4);

/*Table structure for table `modul` */

DROP TABLE IF EXISTS `modul`;

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL AUTO_INCREMENT,
  `nama_modul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `static_content` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `modul` */

insert  into `modul`(`id_modul`,`nama_modul`,`link`,`static_content`,`gambar`,`publish`,`status`,`aktif`,`urutan`,`link_seo`) values (2,'Manajemen User','?module=user','','','N','user','Y',1,''),(18,'Berita','?module=berita','','','Y','user','Y',6,'semua-berita.html'),(19,'Banner','?module=banner','','','Y','admin','Y',9,''),(37,'Profil','?module=profil','<b>Bukulokomedia.com</b> merupakan website resmi dari penerbit Lokomedia yang bermarkas di Jl. Arwana No.24 Minomartani Yogyakarta 55581. Dirintis pertama kali oleh Lukmanul Hakim pada tanggal 14 Maret 2008.<br><br>Produk unggulan dari penerbit Lokomedia adalah buku-buku serta aksesoris bertema PHP (<span style=\"font-weight: bold; font-style: italic;\">PHP: Hypertext Preprocessor</span>) yang merupakan pemrograman Internet paling handal saat ini.\r\n','gedungku.jpg','N','admin','N',3,'profil-kami.html'),(10,'Manajemen Modul','?module=modul','','','N','admin','Y',2,''),(31,'Kategori','?module=kategori','','','Y','admin','Y',5,''),(33,'Poling','?module=poling','','','Y','admin','Y',10,''),(34,'Tag (Label)','?module=tag','','','N','admin','Y',7,''),(35,'Komentar','?module=komentar','','','Y','admin','Y',8,''),(36,'Download','?module=download','','','Y','admin','Y',11,'semua-download.html'),(40,'Hubungi Kami','?module=hubungi','','','Y','admin','Y',12,'hubungi-kami.html'),(41,'Agenda',' ?module=agenda','','','Y','user','Y',31,'semua-agenda.html'),(42,'Shoutbox','?module=shoutbox','','','Y','admin','Y',13,''),(43,'Album','?module=album','','','N','admin','Y',14,''),(44,'Galeri Foto','?module=galerifoto','','','Y','admin','Y',15,''),(45,'Templates','?module=templates','','','N','admin','Y',16,''),(46,'Kata Jelek','?module=katajelek','','','N','admin','Y',17,''),(47,'RSS','-','','','Y','admin','N',18,''),(48,'YM','-','','','Y','admin','N',19,''),(49,'Indeks Berita','-','','','Y','admin','N',20,''),(50,'Kalender','-','','','Y','admin','N',21,''),(51,'Statistik User','-','','','Y','admin','N',22,''),(52,'Pencarian','-','','','Y','admin','N',23,''),(53,'Berita Teratas','-','','','Y','admin','N',24,''),(54,'Arsip Berita','-','','','Y','admin','N',25,''),(55,'Berita Sebelumnya','-','','','Y','admin','N',26,''),(60,'Sekilas Info','?module=sekilasinfo','','','Y','admin','Y',13,''),(57,'Menu Utama','?module=menuutama','','','Y','admin','Y',28,''),(58,'Sub Menu','?module=submenu','','','Y','admin','Y',29,''),(59,'Halaman Statis','?module=halamanstatis','','','Y','admin','Y',30,''),(61,'Identitas Website','?module=identitas','','','N','admin','Y',4,'');

/*Table structure for table `progres_kegiatan_sda` */

DROP TABLE IF EXISTS `progres_kegiatan_sda`;

CREATE TABLE `progres_kegiatan_sda` (
  `id_progres` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `rencana` float DEFAULT NULL,
  `realisasi` float DEFAULT NULL,
  `deviasi` float DEFAULT NULL,
  `keuangan` float DEFAULT NULL,
  PRIMARY KEY (`id_progres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `progres_kegiatan_sda` */

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id_slider` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(75) NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`id_slider`,`judul`,`link`,`gambar`,`aktif`) values (4,'Air Terjun','semua-berita.html','slide_1.jpg','Y'),(5,'Irigasi','hal-penerbitan-sim-umum.html','slide_2.jpg','Y'),(6,'Sungai Mahakam','','slide_3.jpg','Y'),(7,'Waduk Manggar','','slide_4.jpg','Y'),(8,'Tanggul Benanga','','slide_5.jpg','Y');

/*Table structure for table `submenu` */

DROP TABLE IF EXISTS `submenu`;

CREATE TABLE `submenu` (
  `id_sub` int(5) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `posisi_sub` int(3) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `submenu` */

insert  into `submenu`(`id_sub`,`nama_sub`,`link_sub`,`id_main`,`posisi_sub`,`aktif`) values (2,'Sejarah','',2,0,'Y');

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `tag` */

insert  into `tag`(`id_tag`,`nama_tag`,`tag_seo`,`count`) values (1,'Palestina','palestina',7),(2,'Gaza','gaza',11),(9,'Tenis','tenis',5),(10,'Sepakbola','sepakbola',7),(8,'Laskar Pelangi','laskar-pelangi',2),(11,'Amerika','amerika',18),(12,'George Bush','george-bush',3),(13,'Browser','browser',9),(14,'Google','google',3),(15,'Israel','israel',5),(16,'Komputer','komputer',24),(17,'Film','film',9),(19,'Mobil','mobil',0),(21,'Gayus','gayus',2);

/*Table structure for table `templates` */

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_templates`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `templates` */

insert  into `templates`(`id_templates`,`judul`,`pembuat`,`folder`,`aktif`) values (1,'Standar','Lukmanul Hakim','templates/standar','N'),(2,'Building','Lukmanul Hakim','templates/building','N'),(3,'eL jQuery','Lukmanul Hakim','templates/eljquery','N'),(4,'eL jQuery versi 2','Lukmanul Hakim','templates/eljquery2','N'),(5,'Ayo Versi 1','Harry SUherman','krs','N'),(7,'Sandbox','Ahmad Nugraha','templates/sandbox','N'),(8,'Just Simple Blue','Dian Pamungkas','templates/blue','N'),(10,'Poeji','Puji Kartono','templates/poeji','N'),(11,'photofolio','Harry SUherman','templates/photofolio','N'),(12,'BY Versi 1','Angger W','sda','Y');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `users` */

insert  into `users`(`username`,`password`,`nama_lengkap`,`email`,`no_telp`,`level`,`blokir`,`id_session`) values ('admin','21232f297a57a5a743894a0e4a801fc3','Administrator','admin@detik.com','08238923848','admin','N','euqpce3t9kg74l5ogr77g6tao4');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
