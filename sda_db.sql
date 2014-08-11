-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 04:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(5) NOT NULL AUTO_INCREMENT,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `album_seo`, `gbr_album`, `aktif`) VALUES
(1, 'Koleksi Flora', 'koleksi-flora', '165802DSCN1137_kecil.jpg', 'Y'),
(2, 'Koleksi Fauna', 'koleksi-fauna', '230255DSCN1136_kecil.jpg', 'Y'),
(3, 'Musim Kayu', 'musim-kayu', '208923DSCN1143.JPG', 'Y'),
(4, 'Bendung', 'bendung', '391845Picture2.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `username`, `judul`, `judul_seo`, `isi_artikel`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`) VALUES
(3, 19, 'admin', 'Kelembagaan Pengelolaan Sumber Daya Air', 'kelembagaan-pengelolaan-sumber-daya-air', '<p>Dua per tiga bagian dari wilayah ini terdiri \r\ndari unsur air, dan sepertiga lainnya merupakan unsur darat atau tanah \r\nyang terdapat di permukaan laut (air). Kedua unsur inilah yang membentuk\r\n pengertian Ã¢â‚¬Â tanah airÃ¢â‚¬Â bagi Negara Kesatuan Republik Indonesia (NKRI).\r\n Atas dasar pandangan ini, istilah tanah air menggambarkan unsur air dan\r\n tanah sebagai istilah negara yang kita warisi dari nenek moyang sejak \r\ndahulu kala sebelum datangnya zaman penjajah.</p><div class="isi_artikel">\r\n                        \r\n<p>\r\nPengertian tanah air sebagai pengertian yang mandiri, secara \r\nkonsepsional dikembangkan dalam wujud Ã¢â‚¬Ëœwawasan nusantaraÃ¢â‚¬Â yang kemudian \r\nditerima sebagai konsep hukum baik dalam ketentuan perundang-undangan \r\nnasional maupun dalam Konvensi Hukum Laut Internasional III (UNCLOS \r\nIII)..</p>\r\n<p>\r\nPengelolan sumber daya air, sebagaimana kebijakaan-kebijakaan pemerintah\r\n lainnya, tidak lepas dari perkembangan yang terjadi pada tatanan \r\npemerintah kita yang sejalan dengan pasal 33 ayat (3) UUD 1945, yang \r\nmenyatakan bahwa sumber daya air dikuasai negara dan dipergunakan untuk \r\nsebesar-besarnya kemakmuran rakyat secara adil.</p>\r\n<p>\r\nAtas penguasaan sumber daya air oleh negara untuk menjamin hak setiap \r\norang untuk mendapatkan air bagi pemenuhan kebutuhan pokok sehari-hari \r\ndan melakukan pengaturan hak atas air.</p>\r\n<p>\r\nTerbitnya UU No.22 Tahun 1999 jo UU No. 32 Tahun 2004 tentang Pemerintah\r\n Daerah, telah memberikan pemerintah daerah untuk memiliki kewenangan \r\nyang diberikan pemerintah pusat dalam pengelolaan sumber daya alam dan \r\nlingkungan, khususnya pengaturan sumber daya air.</p>\r\n<p>\r\nPemerintah Pusat menetapkan suatu kebijakan khusus dalam pengelolaan \r\nsumber daya air dengan pengaturan yang dibagi berdasarkan wilayah \r\ntertentu mengingat sirklus air yang tidak dapat ditentukan oleh manusia \r\ndan meliputi suatu jalur siklus yang sangat luas. Oleh karena itu, meski\r\n pun air secara umum termasuk bagian dari pada sumber daya alam yang \r\npengaturannya telah didelegasikan kepada daerah, berdasarkan sifat dan \r\nkondisi dari air itu sendiri.</p>\r\n<p>\r\nPasal 1 angka 5 UU No. 11 Tahun 1974 tentang Perairan, bahwa pengairan \r\nadalah suatu bidang pembinaan atas air, sumber-sumber air, termasuk \r\nkekayaan alam bukan hewani yang terkandung di dalamnya, baik yang \r\nalamiah maupun yang telah diusahakan oleh manusia. Untuk kewenangan \r\ndiatur pada pasal 3 ayat (2) yang menekankan pada pembinaan air dan \r\nsumber-sumber lain. Secara umum kewenangan pengelolaan bidang perairan \r\ndalam UU tersebut ada pada pemerintah pusat dan dapat dilimpahkan kepada\r\n pemerintah daerah, namun UU No.11 Tahun 1974 tidak memberikan \r\nkewenangan kepada pemerintah daerah. Kewenangan pemerintah daerah dapat \r\nditafsir pada Peraturan Pemeritah No. 23 Tahun 1982 tentang Irigasi.</p>\r\n<p>\r\nTerbitnya UU No. 7 Tahun 2004 tentang Sumber Daya Air, menggantikan UU \r\nNo.11 Tahun 1974 yang tidak berlaku lagi. Kelembagaan pengelolaan sumber\r\n daya air dalam pada pasal 1 ayat (7) UU No. 7 Tahun 2004 menyatakan \r\nbahwa: pengelolan sumber daya air adalah upaya merancanakan, \r\nmelaksanakan, memantau, dan pendayagunakan sumber daya air, dan \r\npengendalian daya rusak air.</p>\r\n<p>\r\nDalam UU sumber daya air, pengelolaan sumber daya air berdasarkan asas \r\nkelestarian, keseimbangan, kemanfaatan umum, keterpaduan dan keserasian,\r\n keadilan, kemandirian, serta trasparansi dan akuntabilitas ( pasal 2).</p>\r\n<p>\r\nKewenangan pengelolaan sumber daya air dan tanggunjawab, di atur dalam \r\npasal 13- 19 UU No.7 Tahun 2004. Secara umum Undang-undang sumber daya \r\nair ini, pemerintah daerah diberi kewenangan untuk pengelolan sumber \r\ndaya air dalam kerangka normatif, pada kenyataannya masih tergantung \r\npada pemerintah pusat. Lebih dari itu, secara organisatoris dalam \r\nrangka melakukan pengelolaan sumber daya air telah ditetapkan Keputusan \r\nPresiden No. 123 Tahun 2001 tentang Tim Koordinasi Pengelolaan Sumber \r\nDaya Air, sebagaimana dirubah dengan Keputusan Presiden No.83 Tahun \r\n2002.</p>\r\n<p>\r\nKe depan, kelembagaan yang sudah di atur dalam Undang-undang sumber daya\r\n air, harus jelas fungsi dan peruntukannya dalam pengelolaan sumber daya\r\n air, khususnya pada pengelolaan ditingkat daerah.</p> ', '2013-11-30', '09:51:09', '', 1, ''),
(4, 0, 'admin', 'Mengenal Pengelolaan Sumber Daya Air', 'mengenal-pengelolaan-sumber-daya-air', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/darajat3.gif" style="float:left; height:362px; width:554px" />Air memegang peranan penting dalam sejarah peradaban manusia. Hal ini terbukti dari kilasan sejarah manusia, bahwa peradaban manusia dimulai dari selalu berasal dari delta sungai seperti peradaban sungai Huangho di Cina, peradaban sungai Nil di Mesir, peradaban Mesopotamia di delta Sungai Tigris, Irak dan lainnya. Hal tersebut terus berlanjut hingga sekarang dan kelak di masa depan.&nbsp;<br />\r\n<br />\r\nNamun, bagaimana masa depan sumber daya air di kemudian hari? Setidaknya ada empat skenario, yang pertama &ldquo;<em>Business as usual</em>&rdquo;, dimana sumber daya air yang tersedia tidak bisa mengimbangi ledakan populasi dunia sehingga terjadi bencana dan wabah penyakit akibat kurangnya sumber daya air. Dalam skenario kedua, &ldquo;<em>Technologies save the day</em>&rdquo;, kemajuan teknologi seperti teknologi desalinasi, hidrologi recycle, pengubahan bentuk oksigen dan hidrogen menjadi air dan macam-macam teknologi baru lainnya dalam pengelolaan sumber daya air mampu mencukupi kebutuhan dunia.&nbsp;<br />\r\n<br />\r\nSkenario terburuk adalah &ldquo;<em>Global warming floods the world</em>&rdquo;, pemanasan global menyebabkan melelehnya es di kutub sehingga timbul banjir besar yang menenggelamkan sebagian besar dunia. Skenario terakhir adalah kebutuhan sumber daya air kelak akan dicukupi dengan &ldquo;penambangan&rdquo; air (es) dari angkasa luar seperti dari asteroid, bulan, planet dan lainnya<br />\r\n<br />\r\nBeberapa skenario tersebut tercantum dalam buku karya Thomas V. Cech yang berjudul &ldquo;<em>Principles of Water Resources : History, Development, Management and Policy</em>&rdquo;. Buku ini terbilang cukup komprehensif dalam membahas bidang sumber daya air dari berbagai pendekatan dan disiplin ilmu. Mulai dari bab pengantar yang menarik, buku ini juga diisi berbagai isu kebijakan dan contoh-contoh dari pengelolaan sumber daya air di masa lalu dan sekarang. Para pembaca juga akan mengetahui bagaimana faktor teknologi dan geografi mempengaruhi kebijakan publik dalam pengelolaan sumber daya, mempelajari proyek-proyek irigasi, berbagai badan pengelola sumber daya air, lingkungan, polusi air dan banyak lagi serta dilengkapi juga oleh glosarium, foto dan chart.&nbsp;<br />\r\n<br />\r\nBeberapa kelebihan dari buku ini adalah bagian isu kebijakan, studi kasus, dan esai dari penulis tamu tentang contoh-contoh kasus dari berbagai belahan dunia yang menarik, dan mempunyai keterkaitan yang kuat dengan isi buku. Format 2 kolomnya yang enak dibaca dan beberapa bahan rujukan berupa bacaan, video, website yang ada di tiap bab sangat memudahkan bagi yang ingin mengkaji lebih dalam lagi. Satu kelemahan buku ini adalah isi buku, termasuk gambar-gambar yang ada, hanya tersedia format dalam hitam putih.Sebagai rujukan, ini adalah buku yang ideal bagi mahasiswa tingkat lanjut, praktisi dan juga profesional dari bidang sumber daya air dan bidang lain yang terkait.</p>\r\n', '2013-12-03', '02:05:45', '', 1, ''),
(5, 0, 'admin', 'Pemanfaatan Sumber Daya Air Secara Bijak', 'pemanfaatan-sumber-daya-air-secara-bijak', '<p>Sumber daya air adalah air, sumber air. dan daya air yang terkandung di dalamnya. Sumber air adalah tempat atau wadah air alami dan/atau buatan yang terdapat pada, di atas, ataupun di bawah permukaan tanah (<strong>UU No. 7 Tahun 2004</strong>).</p>\r\n\r\n<p>Dalam proses perjalanannya sumber daya air dimanfaatkan untuk berhagai macam keperluan. Daya air dipakai untuk energi misalnya pembangkit listrik tenaga air (<strong>PLTA</strong>). Mata air dipakai sebagai salah satu sumber air, demikian pula waduk dipakai sebagai wadah air yang dimanfaatkan untuk berbagai keperluan. Air Baku digunakan untuk irigasi, air bersih dipakai untuk keperluan dumestik dan non-domestik. Secara alami air dipakai oleh tumbuhan (flora) dan binatang (fauna) untuk melangsungkan kehidupannya. Dan adapun kebijakan di dalam pengelolaan air yaitu</p>\r\n\r\n<p><strong>Kebijakan Konservasi Sumber Daya Air</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mewujudkan sinergi dan mencegah konflik antarwilayah dan antarsektor dalam rangka memperkokoh ketahanan nasional, persatuan dan kesatuan bangsa, serta memperhatikan kebutuhan generasi sekarang dan akan datang.</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mendorong proses pengelolaan SDA berdasarkan wilayah sungai yang terpadu antarwilayah dan antarsektor dengan memperhatikan kepentingan nasional, provinsi, dan kabupaten/kota.</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyeimbangkan upaya konservasi dan pendayagunaan sumber daya air agar terwujud kemanfaatan air yang berkelanjutan bagi kesejahteraan seluruh rakyat baik pada generasi sekarang maupun akan datang.</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyelaraskan fungsi sosial, lingkungan hidup, dan ekonomi sumber daya air untuk menjamin pemenuhan kebutuhan pokok setiap orang dan mengoptimalkan nilai ekonomi air dengan memperhatikan upaya pelestariannya.</p>\r\n\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memperbaiki dan mengembangkan sistem pembiayaan yang menerapkan prinsip penerima manfaat dan pencemar menanggung biaya jasa pengelolaan SDA dengan mempertimbangkan kondisi sosial ekonomi masyarakat sehingga pengelolaan SDA dapat dilakukan secara efektif, efisien, berkeadilan, dan berkelanjutan.</p>\r\n\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengembangkan sistem kelembagaan pengelolaan SDA menuju terciptanya pemisahan fungsi pengaturan, pelaksanaan, pengoperasian &amp; pemeliharaan, pemanfaatan, dan koordinasi dgn tetap menjaga sinergi antarfungsi.</p>\r\n\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan efektivitas penegakan hukum atas peraturan perundang-undangan sumber daya air.</p>\r\n\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan kesadaran masyarakat dalam melindungi SDA.</p>\r\n\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penyesuaian kelembagaan pengelola sumber daya air dalam rangka desentralisasi dan otonomi daerah.</p>\r\n\r\n<p>10.&nbsp;&nbsp;Pembentukan dewan sumber daya air sebagai wadah koordinasi dan konsultasi para pemilik kepentingan dalam pengelolaan sumber daya air.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kebijakan Pendayagunaan Sumber Daya Air</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyediakan air yang memenuhi persyaratan kualitas dan kuantitas sesuai dengan ruang dan waktu secara berkelanjutan untuk memenuhi kebutuhan pokok kehidupan sehari-hari sebagai prioritas.</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan efektivitas dan efisiensi penyediaan serta penggunaan air irigasi dengan lebih mengutamakan kegiatan operasi dan pemeliharaan, optimalisasi, rehabilitasi, dan peningkatan kinerja sistem irigasi yang ada daripada pembangunan baru.</p>\r\n\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mendorong pengembangan irigasi dan rawa dalam rangka mendukung produktivitas usaha tani untuk meningkatkan produksi pertanian dalam rangka ketahanan pangan nasional dan mensejahterakan masyarakat khususnya petani.</p>\r\n\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Melaksanakan pendayagunaan SDA untuk mendukung perkembangan ekonomi secara efektif dan efisien dengan mempertimbangkan kepentingan antarsektor, antarwilayah, dan dampak jangka panjang.</p>\r\n\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menerapkan prinsip penerima manfaat menanggung biaya jasa pengelolaan sumber daya air, kecuali untuk kebutuhan pokok sehari-hari dan pertanian rakyat untuk mendorong penghematan penggunaan air dan meningkatkan kinerja pengelolaan sumber daya air.</p>\r\n\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan peran dunia usaha dalam pengusahaan sumber daya air dengan tetap mengutamakan kepentingan publik.</p>\r\n', '2013-12-03', '02:07:20', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(4, 'Fresh Book', 'http://freshbooks.com', 'freshbook.jpg', '2009-02-05'),
(7, 'Cinema 21', 'http://21cineplex.com', 'cinema21.jpg', '2008-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `username`, `judul`, `judul_seo`, `headline`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`) VALUES
(1, 22, 'admin', 'Harapan Kapolri pada Kabareskrim Baru: Berantas Korupsi!', 'harapan-kapolri-pada-kabareskrim-baru-berantas-korupsi', 'Y', '<p><strong>Jakarta</strong>&nbsp;- Kapolri Jenderal Sutarman memiliki segudang harapan pada Kapolda Jabar Irjen Suhardi Aliyus yang ditunjuk menjadi Kabareskrim Polri. Salah satu harapannya yakni Suhardi dapat memberantas korupsi dengan baik.<br />\r\n&quot;Memberantas korupsi dengan baik, mampu meningkatkan kerja penanganan korupsi dan pemberantas tindak kriminalitas lain dan pembinaan dari reserse sampai tingkat daerah,&quot; ujar Kapolri kepada wartawan sebelum membuka Rakor Pengawasan Polri/Kompolnas di Hotel Bidakara, Jl Gatot Subroto, Jakarta, Senin (25/11/2013).<br />\r\nKapolri mengatakan, kapan Suhardi dilantik, masih menunggu jadwal yang sedang disusun. Begitu juga dengan pelantikan Irwasum Irjen Anton Bahrul Alam.&nbsp;<br />\r\nKapolri memiliki pertimbangan sendiri atas penunjukan Suhardi. Kapolri melihat Suhardi dari integritas.&nbsp;<br />\r\n&quot;Saya tidak lihat junior-senior. Dari semua calon dia yang punya integritas,&quot; kata mantan Kapolda Metro Jaya ini.<br />\r\nSuhardi merupakan lulusan Akpol angkatan 1985 yang relatif masih muda. Karena itulah salah satu alasan Kapolri memilih Suhardi menjadi orang nomor 3 di Polri ini.&nbsp;&quot;Dia masih enerjik dan muda, punya integritas,&quot; puji Kapolri.</p>\r\n', 'Senin', '2013-11-25', '10:31:21', '73102303_suhardi.jpg', 1, ''),
(2, 19, 'admin', 'Microsoft akan Satukan Tiga', 'microsoft-akan-satukan-tiga', 'Y', '<p><strong>Jakarta</strong>&nbsp;- Saat menyebut sistem operasi milik Microsoft, raksasa software ini punya tiga nama &lsquo;jendela&rsquo; yang harus dijelaskan. Ke depannya, Microsoft ingin ketiga jenis OS Windows besutannya ini tinggal dalam &#39;satu atap&#39;.&nbsp;<br />\r\n<br />\r\nKetiga jenis OS Windows itu, yang pertama ialah versi reguler Windows yang didesain untuk prosesor Intel atau AMD di laptop dan komputer. Kedua, mereka juga punya Windows RT yang khusus dipakai perangkat berbasis ARM. Terakhir, ada Windows Phone yang diperuntukkan bagi smartphone.&nbsp;<br />\r\n<br />\r\nMicrosoft pun menyadari, penamaan OS kerap menimbulkan kebingungan konsumen. Itu sebabnya, perusahaan yang berpusat di Redmond, Wahington, AS, ini ingin membuat OS-nya bisa dikenal dalam satu wadah saja.&nbsp;<br />\r\n<br />\r\nIndikasi ini tertangkap dalam pernyataan Executive VP Devices and Studios Microsoft, Julie Larson-Green. Menurutnya, seperti dikutip dari&nbsp;<em>Ubergizmo,</em>&nbsp;Senin (25/11/2013), suatu hari nanti Microsoft tak akan lagi punya tiga versi Windows, melainkan menyatukan ketiganya dalan satu brand.&nbsp;<br />\r\n<br />\r\n&quot;Kami punya Windows Phone, kami punya Windows RT dan ada full Windows. Kami tidak akan memiliki ketiganya. Kami juga berpendapat ada lebih banyak OS yang tidak berisiko terhadap daya tahan baterai atau keamanan. Namun itu mengorbankan fleksibilitas. Kami meyakini visi dan arah tersebut dan kami sedang melanjutkannya,&quot; ujarnya.<br />\r\n<br />\r\nBaru-baru ini, di kantor pusatnya Microsoft melakukan reorganisasi dengan menggabungkan tim Windows Phone dan Windows 8. Hal ini kemungkinan akan berdampak pada kemudahan membuat aplikasi bagi para developer, satu aplikasi untuk semua platform Windows.&nbsp;<br />\r\n<br />\r\n&quot;Kalau sekarang, package untuk Windows Phone dan Windows 8 itu beda. Developer codingnya sekali untuk logic codenya, kemudian dia bikin user interface Windows Phone dia compile dan package untuk disubmit ke Windows Phone Store,&quot; kata Technical Evangelist Microsoft Indonesia Norman Sasono, beberapa waktu lalu.&nbsp;<br />\r\n<br />\r\nMeski demikian, Norman mengaku tidak bisa memastikan kapan hal ini terwujud. Dia tidak menjelaskan lebih detail. &quot;Kita belum ada konfirmasi apakah (ketiga OS Windows) ini akan jadi satu platform. Arahnya kita sih ke sana, tapi itu kan perlu waktu,&quot; tutupnya.<br />\r\n&nbsp;</p>\r\n', 'Senin', '2013-11-25', '14:21:57', '51153072740.jpg', 1, 'amerika,google,komputer'),
(4, 0, 'admin', 'Rembuk Rakyat - Mengatasi Masalah Banjir di Kota Samarinda', 'rembuk-rakyat--mengatasi-masalah-banjir-di-kota-samarinda', 'N', '<p><strong>Topik</strong> :</p>\r\n\r\n<p>Penanggulangan banjir di Kota Samarinda harus dilihat secara menyeluruh dari hulu sampai ke hilir, <strong>apakah pendekatan fisik (<em>structural approach</em>), sudah bersinergi dengan pendekatan non fisik (<em>non-structural approach</em>), serta memperhatikan lingkungan yang menyediakan ruang lebih luas bagi munculnya partisipasi masyarakat.</strong> Dengan kata lain bahwa kebijakan penanggulangan banjir yang bersifat fisik, harus diimbangi dengan langkah-langkah non-fisik dan lingkungan, sehingga peran masyarakat dan <em>stakeholder</em> lainnya diberi tempat yang sesuai&nbsp; sehingga hasilnya lebih optimal.</p>\r\n\r\n<p><strong>Tema</strong>:</p>\r\n\r\n<p>&ldquo;Sinergitas Penanggulangan Banjir Di Kota Samarinda Berbasis Pendekatan Struktural, Non Struktural Dan Lingkungan&rdquo; .</p>\r\n\r\n<p><strong>Tujuan Rembuk Banjir ini adalah</strong>:</p>\r\n\r\n<ol>\r\n	<li>Mempertemukan para pakar dan narasumber serta &nbsp;<em>stakeholder</em> yang terkait dengan rencana penanggulangan banjir di Kota Samarinda.</li>\r\n	<li>Mengidentifikasi potensi, permasalahan, dan sumberdaya dalam penanggulangan banjir di Kota Samarinda.</li>\r\n	<li>Mengembangan&nbsp; model sinergitas penanggulangan banjir di Kota Samarinda melalui pendekatan struktural, non struktural dan lingkungan.</li>\r\n</ol>\r\n\r\n<p><strong>Adapun sasaran dari diselenggarakannya Rembuk Banjir ini adalah</strong>:</p>\r\n\r\n<p>&nbsp;\r\n<ol>\r\n	<li>Terwujudnya sinergi seluruh <em>stakeholder </em>yang mendukung rencana penanggulangan banjir di Kota Samarinda.</li>\r\n	<li>Dihasilkannya <strong>roadmap</strong> atau pemetaan potensi, pemasalahan, dan sumberdaya &nbsp;yang ada di Kota Samarinda yang mendukung penanggulangan Banjir.</li>\r\n	<li>Diperolehnya model penanganan banjir Kota Samarinda secara komprehensif, dengan berbagai pendekatan dari hulu sampai ke hilir</li>\r\n</ol>\r\n</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tanggal</strong> : 01 April 2014<br />\r\n<strong>Tempat</strong> : Folder Air Hitam<br />\r\n<strong>Pukul</strong> : 08.00 Wita s.d. selesai</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>sumber: http://litbang.kaltimprov.go.id</em></p>\r\n', 'Selasa', '2014-04-01', '11:52:08', '', 1, ''),
(5, 0, 'admin', 'Rembuk Rakyat Bahas Soal Banjir Samarinda ', 'rembuk-rakyat-bahas-soal-banjir-samarinda-', 'Y', '<p><strong>SAMARINDA -</strong> Mendukung Pemkot Samarinda dalam menangani permasalahan banjir yang selalu melanda warga, Pemprov Kaltim bersama Pemkot Samarinda menggelar rembuk rakyat untuk mengatasi persoalan banjir di Samarinda, yang digelar Selasa hari ini (1/4) di Polder Air Hitam Samarinda.</p>\r\n\r\n<p>Rembuk ini mengundang seluruh elemen warga Samarinda, mulai dari akademisi, lurah, camat hingga Lembaga Swadaya Masyarakat (LSM). Bahkan, perwakilan dari LSM akan diberi amanah untuk menjadi tim perumus, sebagai upaya mempercepat mengatasi banjir di daerah ini.</p>\r\n\r\n<p>&ldquo;Kami berharap rembuk ini dapat menghasilkan solusi untuk penanganan banjir di Samarinda. Karena itu, anggota LSM juga kami libatkan untuk menjadi tim perumus, yakni Nil Makinuddin dari The Nature Conservancy dan Kahar Al Bahri dari Jatam (Jaringan Advokasi Tambang). Konsep-konsep cemerlang mereka diharapkan bisa memberikan solusi untuk penanganan banjir di Samarinda,&rdquo; kata Kepala Balitbangda Kaltim Hj Halda Arsyad, Sabtu&nbsp; (29/3).&nbsp;</p>\r\n\r\n<p>Konsep dan ide dari seluruh komponen masyarakat sangat diharapkan agar persoalan banjir di ibukota provinsi ini bisa segera diatasi. Konsep dan ide itu tentunya juga sangat diharapkan dari para penggiat LSM yang selama ini selalu memberikan pendapat kritis kepada pemerintah.</p>\r\n\r\n<p>Menurut dia, dari rembuk tersebut, semua lurah dan camat se-Samarinda yang wilayahnya menjadi langganan banjir dapat menyampaikan saran dan kritik dalam kegiatan ini, sehingga Pemkot dan Pemprov Kaltim merespon langsung saran yang disampaikan.</p>\r\n\r\n<p>&ldquo;Sesuai arahan Gubernur Awang Faroek Ishak, diminta agar seluruh lurah, camat se-Samarinda hadir dalam acara tersebut. Termasuk LSM-LSM yang selalu kritis memberi pandangan. Pemerintah akan mendengar langsung apa saran dan solusi yang mereka inginkan,&quot; jelasnya.</p>\r\n\r\n<p>Secara khusus acara akan digelar di Polder Air Hitam, sehingga tidak terbatas lagi ruang antara pejabat dan masyarakat. Semua akan duduk bersama untuk membahas persoalan yang sama, persoalan banjir di Samarinda. Gubernur Awang Faroek adalah sipemilik saran agar acara ini tidak digelar di Lamin Etam atau di gedung-gedung megah, agar rembuk ini benar-benar milik rakyat.&nbsp;</p>\r\n\r\n<p>&ldquo;Kami berharap rakyat mau duduk bersama untuk mencari solusi terbaik dari permasalahan banjir &nbsp;di Ibukota Provinsi Kaltim ini&rdquo; jelasnya<strong>. (jay/sul/es/hmsprov)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>sumber: http://www.kaltimprov.go.id</em></p>\r\n', 'Selasa', '2014-04-01', '11:54:22', '', 1, ''),
(8, 0, 'admin', 'Kolokium Bidang Sumber Daya Air ', 'kolokium-bidang-sumber-daya-air-', 'Y', '<p><strong>Informasi lebih lengkap:</strong>&nbsp; http://www.pu.go.id/pengumuman/show/1028</p>\r\n\r\n<p><img alt="" src="http://kolokium.pusair-pu.go.id/images/stories/post%20fornt%20final.png" style="height:2642px; width:3136px" /></p>\r\n', 'Selasa', '2014-04-01', '12:07:34', '5slide_5.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `codesheads` tinyint(2) NOT NULL DEFAULT '0',
  `codescodes` tinyint(2) NOT NULL DEFAULT '0',
  `codesdesc1` varchar(50) DEFAULT NULL,
  `codesdesc2` varchar(50) DEFAULT NULL,
  `codesstats` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codesheads`,`codescodes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`codesheads`, `codescodes`, `codesdesc1`, `codesdesc2`, `codesstats`) VALUES
(1, 0, 'Jenis Kejadian', '', ''),
(1, 1, 'Aman', '', ''),
(1, 2, 'Banjir', '', ''),
(1, 3, 'Tergenang', '', ''),
(2, 0, 'Ketinggian Air', '', ''),
(2, 1, 'Kering', '', ''),
(2, 2, '0-20 cm', '', ''),
(2, 3, '20-40 cm', '', ''),
(2, 4, '40-60 cm', '', ''),
(2, 5, '60-80 cm', '', ''),
(2, 6, '80-100 cm', '', ''),
(2, 7, 'Lebih Dari 100cm', '', ''),
(3, 0, 'Cuaca Lokasi', '', ''),
(3, 1, 'Hujan Ringan', '', ''),
(3, 2, 'Hujan Sedang', '', ''),
(3, 3, 'Hujan Deras', '', ''),
(3, 4, 'Hujan Sangat Deras', '', ''),
(3, 5, 'Berawan', '', ''),
(3, 6, 'Cerah', '', ''),
(4, 0, 'Situasi Lalulintas', '', ''),
(4, 1, 'Lancar', '', ''),
(4, 2, 'Tersendat', '', ''),
(4, 3, 'Padat Merayap', '', ''),
(4, 4, 'Macet Total', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `das`
--

CREATE TABLE IF NOT EXISTS `das` (
  `kode_das` varchar(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `luas` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_das`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `judul`, `nama_file`, `tgl_posting`, `hits`) VALUES
(3, 'Membuat Shopping Cart dengan PHP', 'shopping cart.pdf', '2009-02-17', 3),
(5, 'Skrip Captcha', 'captcha.rar', '2009-02-06', 2),
(1, 'Kalender Tahun 2009', 'kalender2009.rar', '2009-02-06', 10),
(8, 'Wallpaper PHP', 'PHP_weapon.jpg', '2009-10-28', 3),
(9, 'Slide  Pemrograman VBA Excell', 'Excell_VBA.ppt', '2009-11-03', 11);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(5) NOT NULL AUTO_INCREMENT,
  `id_album` int(5) NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album`, `jdl_gallery`, `gallery_seo`, `keterangan`, `gbr_gallery`) VALUES
(1, 1, 'Foto 1', 'foto-1', '', '13763DSCN1137_kecil.jpg'),
(2, 1, 'Foto 2', 'foto-2', '', '698791DSCN1136_kecil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE IF NOT EXISTS `halamanstatis` (
  `id_halaman` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `judul_seo` varchar(225) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `set_feature` enum('Y','N') NOT NULL DEFAULT 'N',
  `order_feature` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `judul_seo`, `isi_halaman`, `tgl_posting`, `gambar`, `set_feature`, `order_feature`) VALUES
(1, 'Sejarah', 'sejarah', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/pu_kcl.jpg" style="float:left; height:200px; margin:5px; width:356px" />Bidang Sumber Daya Air merupakan salah satu bidang dalam Struktur Organisasi Dinas Pekerjaan Umum Provinsi Kalimantan Timur. Secara resmi dinas ini terbentuk berdasarkan Peraturan Daerah Provinsi Kalimantan Timur No.8 Tahun 2008, tentang Organisasi dan Tata Kerja Dinas Daerah Provinsi Kalimantan Timur, Pasal 39 ayat (1) d.</p>\r\n\r\n<p>Bidang Sumber Daya Air membawahi tiga unit kerja&nbsp; tingkat seksi, yaitu :</p>\r\n\r\n<ul style="margin-left:400px">\r\n	<li>Seksi Irigasi</li>\r\n	<li>Seksi Sungai, Danau, dan Waduk, sertaâ€‹â€‹</li>\r\n	<li>Air Baku, Rawa, dan Pantai.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam melaksanakan tugas-tugasnya, berdasarkan Peraturan Gubernur Kalimantan Timur No. 45 tahun 2008 tentang Penjabaran Tugas Pokok, Fungsi dan Tata Kerja Dinas Daerah Provinsi Kalimantan Timur, Bidang Sumber Daya Air mempunyai tugas pokok melaksanakan penyiapan bahan kebijakan, koordinasi, pembinaan, bimbingan serta pengendalian teknis Sumber Daya Air.</p>\r\n\r\n<p style="margin-left:27.0pt">Ada 3 landasan yang menjadi dasar hukum pelaksanaan tugas Bidang Sumber Daya Air, yaitu landasan <em>struktura</em>l, <em>strategis</em>, dan <em>operasional</em> yang dirinci sebagai&nbsp; berikut.</p>\r\n\r\n<p style="margin-left:45.0pt"><strong>a.&nbsp; Landasan Struktural</strong></p>\r\n\r\n<p style="margin-left:1.0in">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UU No. 32 tahun 2004 tentang Pemerintah Daerah</p>\r\n\r\n<p style="margin-left:1.0in">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PP No. 41 tahun 2007 tentang Organisasi Perangkat Daerah</p>\r\n\r\n<p style="margin-left:1.0in">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perda No. 43 tahun 2008 tentang&nbsp; Tugas Pokok, Fungsi, dan Tata Kerja Sekretariat Daerah Provinsi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="margin-left:45.0pt"><strong>b.&nbsp;&nbsp; Landasan Strategis</strong></p>\r\n\r\n<p style="margin-left:63.0pt">1)&nbsp;&nbsp; UU No. 7 tahun 2004 tentang Sumber Daya Air</p>\r\n\r\n<p style="margin-left:63.0pt">2)&nbsp;&nbsp; UU No. 42 tahun 2008 tentang Tata Ruang</p>\r\n\r\n<p style="margin-left:63.0pt">3)&nbsp;&nbsp; PP No. 20 tahun 2006 tentang Irigasi</p>\r\n\r\n<p style="margin-left:63.0pt">4)&nbsp;&nbsp; PP No. 42 tahun 2008 tentang Pengelolaan Sumber Daya Air</p>\r\n\r\n<p style="margin-left:45.0pt"><strong>c.&nbsp;&nbsp; Landasan Operasional</strong></p>\r\n\r\n<p style="margin-left:63.0pt">1)&nbsp;&nbsp; PP No. 28 tentang Usaha dan Peran Masyarakat Jasa Konstruksi</p>\r\n\r\n<p style="margin-left:63.0pt">2)&nbsp;&nbsp; PP No. 29 tentang Penyelenggaraan Jasa Konstruksi</p>\r\n\r\n<p style="margin-left:63.0pt">3)&nbsp;&nbsp; UU No. 18 tahun 2003 tentang Jasa Konstruksi</p>\r\n\r\n<p style="margin-left:63.0pt">4)&nbsp;&nbsp; Keputusan Presiden&nbsp; No.80 tahun 2003 (Beserta Perubahannya) tentang Pengadaan Barang dan Jasa Pemerintah</p>\r\n\r\n<p style="margin-left:63.0pt">5)&nbsp;&nbsp; Dokumen Kontrak</p>\r\n', '2013-11-25', '', 'N', 0),
(2, 'Struktur Organisasi', 'struktur-organisasi', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/Untitled.png" style="height:460px; width:819px" /></p>\r\n', '2013-11-25', '', 'N', 0),
(3, 'Kepengurusan KRUS', 'kepengurusan-krus', '<p>Kepengurusan KRUS</p>\r\n', '2013-11-25', '', 'N', 0),
(4, 'Program Kerja', 'program-kerja', '<h3><strong>Program dan Sasaran Bidang Sumber Daya Air</strong></h3>\r\n\r\n<ol>\r\n	<li>Program pengembangan jaringan irigasi, rawa, dan jaringan pengairan lainnya<br />\r\n	Sasaran : Pengembangan areal-areal potensi daerah irigasi sehingga areal irigasi yang produktif menjadi luas, terwujudnya swasembada pangan di provinsi KalimantanTimur</li>\r\n	<li>Proram pengelolaan dan penyediaan air baku<br />\r\n	Sasaran : Menyediakan &amp; mengelola air baku terutama pada daerah potensi rawan air untuk kepentingan hajat orang banyak</li>\r\n	<li>Proram pengembangan dan pengelolaan sungai, danau, dan sumber daya air lainnya<br />\r\n	Sasaran : Mengembangkan, mengelola dan mengkonservasi sungai, danau dan sumber daya air dengan memperhatikan keseimbangan dan keselarasan dengan alam</li>\r\n	<li>Program pengendalian banjir<br />\r\n	Sasaran : Mengendalikan, mengelola daerah-daerah potensi banjir agar bermanfaat bagi manuasia dan lingkungan</li>\r\n</ol>\r\n', '2013-11-25', '', 'N', 0),
(5, 'Visi dan Misi', 'visi-dan-misi', '<p><strong>Visi</strong> : Terwujudnya kemanfaatan Sumber Daya Air yang berkelanjutan untuk sebesar-besarnya kemakmuran rakyat</p>\r\n\r\n<p><strong>Misi</strong> : Menyediakan pembangunan infrastruktur sumber daya air guna mendukung ketahanan penyediaan pangan dan pendayagunaan sumber daya air untuk kesejahteraan rakyat.</p>\r\n\r\n<p><strong>Tujuan</strong> : Mendukung infrastruktur penunjang guna terwujudnya daerah irigasi, infrastruktur penyediaan air baku, infrastruktur konservasi penunjang sumber daya air, dan infrastruktur pengendali banjir pada wilayah-wilayah rawan banjir dan pengaman pantai</p>\r\n\r\n<p><strong>Sasaran</strong> : Terwujudnya pembangunan infrastuktur sumber daya air dan upaya rehabilitasi kawasan kritis daerah tangkapan sungai dan danau, serta tereduksi daerah kawasan banjir.</p>\r\n', '2013-11-25', '', 'N', 0),
(24, 'WS. Berau Kelay', 'ws-berau-kelay', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/brukelay.png" style="float:left; height:162px; width:350px" /></p>\r\n', '2013-12-06', '', 'N', 0),
(25, 'Ws. Kandilo', 'ws-kandilo', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/kndlo.png" style="float:left; height:162px; width:350px" /></p>\r\n', '2013-12-06', '', 'N', 0),
(26, 'Konservasi Danau', 'konservasi-danau', '<p>Konservasi Danau</p>\r\n', '2013-12-07', '', 'N', 0),
(27, 'Konservasi Waduk', 'konservasi-waduk', '<p>Konservasi Waduk</p>\r\n', '2013-12-07', '', 'N', 0),
(23, 'Wilayah Sungai', 'wilayah-sungai', '<p><img alt="" src="/sda/elfinder/php/../../assets/files/ws.png" style="height:488px; width:658px" /></p>\r\n\r\n<p style="margin-left:30.05pt">Berdasarkan Keputusan Presiden Republik Indonesia Nomor 12 Tahun 2012, tentang Penetapan Wilayah Sungai di Indonesia,&nbsp; pada Provinsi Kalimantan Timur ditetapkan 6 (enam) <em>Wilayah Sungai (WS)</em>. Tabel berikut menunjukkan keenam Wilayah Sungai dimaksud, beserta luas wilayah, dan banyaknya <em>Daerah Aliran Sungai (DAS)</em> pada masing-masing wilayah sungai.</p>\r\n\r\n<p style="margin-left:30.05pt"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tabel IV-1 :&nbsp; Wilayah Sungai, Luas, dan Banyaknya DAS</strong></p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" style="width:584px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:30px; width:48px">\r\n			<p>No.</p>\r\n			</td>\r\n			<td style="height:30px; width:176px">\r\n			<p>Nama Wilayah Sungai</p>\r\n			</td>\r\n			<td style="height:30px; width:150px">\r\n			<p>Luas WS</p>\r\n\r\n			<p>(km2)</p>\r\n			</td>\r\n			<td style="height:30px; width:210px">\r\n			<p>Banyaknya</p>\r\n\r\n			<p>Daerah Aliran Sungai</p>\r\n\r\n			<p>(DAS)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Sesayap</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>31.572</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>19</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Kayan</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>35.456</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>9</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Berau-Kelay</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>17.936</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>15</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Karangan</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>15.745</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>43</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Mahakam</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>86.024</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>12</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:26px; width:48px">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style="height:26px; width:176px">\r\n			<p>Kandilo</p>\r\n			</td>\r\n			<td style="height:26px; width:150px">\r\n			<p>12.196</p>\r\n			</td>\r\n			<td style="height:26px; width:210px">\r\n			<p>9</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="margin-left:30.05pt">WS Sesayap bersifat <em>Lintas Negara</em>,&nbsp; karena wilayah sungai ini berbatasan langsung dengan negara lain, dalam hal ini dengan Negara Malaysia. Wilayah-wilayah sungai Kayan, Berau-Kelai, Karangan, dan &nbsp;WS Kandilo bersifat <em>Lintas Kabupaten/Kota</em>. Khusus WS Mahakam ditetapkan sebagai wilayah sungai yang bersifat <em>Strategis Nasional</em>.</p>\r\n\r\n<p style="margin-left:30.05pt">Kewenangan pengelolaan dua wilayah sungai, yaitu WS Sesayap karena bersifat lintas negara dan WS Mahakam karena bersifat strategis nasional, berada pada Pemerintah Pusat. Wilayah-wilayah sungai lainnya, WS Kayan, WS Berau-Kelay, WS Karangan, dan WS Kandilo yang karena sifatnya lintas kabupaten/kota, wewenang pengelolaannya berada pada Pemerintah Provinsi Kalimantan Timur.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Wilayah Sungai Sesayap<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/sesayap.png" style="height:373px; width:500px" /></li>\r\n	<li>Wilayah Sungai Kayan<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/kayan.png" style="height:373px; width:500px" /></li>\r\n	<li>Wiayah Sungai Berau-Kelay<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/berau.png" style="height:373px; width:500px" /></li>\r\n	<li>Wilayah Sungai Karangan<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/karanga.png" style="height:373px; width:500px" /></li>\r\n	<li>Wilayah Sungai Mahakam<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/mahakam.png" style="height:373px; width:500px" /></li>\r\n	<li>Wilayah Sungai Kendilo<br />\r\n	<img alt="" src="/sda/elfinder/php/../../assets/files/Untitled2.png" style="height:373px; width:500px" /></li>\r\n</ul>\r\n', '2013-12-06', '', 'N', 0),
(21, 'Tugas dan Fungsi', 'tugas-dan-fungsi', '<p>Bidang Sumber Daya Air melaksanakan sebagian tugas Kepala Dinas Pekerjaan Umum di Bidang Sumber Daya air dan bertanggung jawab kepada Kepala Dinas.</p>\r\n\r\n<p>Untuk menyelenggarakan tugas sebagaimana dimaksud, Bidang Sumber Daya Air mempunyai fungsi :</p>\r\n\r\n<ul style="margin-left:40px">\r\n	<li>Penyiapan bahan perumusan kebijakan perencanaan irigasi, sungai, danau dan wadauk serta air tawar, rawa dan pantai;</li>\r\n	<li>Penyiapan bahan koordinasi perencanaan irigasi, sungai, danau dan waduk serta air baku, rawa dan pantai;&nbsp;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan irigasi;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan sungai, danau dan waduk;&nbsp;</li>\r\n	<li>Penyiapan bahan pembinaan, bimbingan, pengendalian dan pengaturan teknis pembangunan serta pengelolaan sumber daya air baku, rawa dan pantai;&nbsp;</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh atasan sesuai dengan bidang tugas dan fungsinya.&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>\r\n	<h3><strong>Seksi Irigasi</strong>&nbsp;</h3>\r\n\r\n	<p><strong>Tugas Pokok</strong> : Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Pengembangan Peningkatan Jaringan Irigasi-irigasi; Informasi Paket Pengadaan Kegiatan; Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Kegiatan Fisik dan Keuangan; Laporan.</p>\r\n	</li>\r\n	<li>\r\n	<h3><strong>Seksi Sungai, Danau dan Waduk</strong></h3>\r\n\r\n	<p><strong>Tugas Pokok </strong>:&nbsp;Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Banjir; Konservasi Sungai, Waduk dan Danau; Penyediaan Penggunaan Sumber Daya Air; Informasi Paket Pengadaan Kegiatan; Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Kegiatan dan Keuangan; Laporan.</p>\r\n	</li>\r\n	<li>\r\n	<h3><strong>Seksi Air baku, Rawa dan Pantai</strong></h3>\r\n\r\n	<p><strong>Tugas Pokok</strong> : Penyiapan dan Pengumpulan Bahan Koordinasi, Pembinaan, Pengelolaan, Pengawasan; Pengendalian Program Pengebangan Air Baku daerah rawa; Pengamanan Pantai; Informasi Paket Pengadaan Kegiatan; Pelaksanaan Kegiatan; Realisasi Pelaksanaan Fisik dan Keuangan; Laporan.</p>\r\n	</li>\r\n</ol>\r\n', '2013-12-03', '', 'N', 0),
(22, 'Dewan Sumber Daya Air', 'dewan-sumber-daya-air', '<p>Dewan Sumber Daya Air adalah wadah untuk koordinasi antar instansi/lembaga pengelola sumber daya air. Kelembagaan pengelola sumber daya air sesuai dengan fungsinya yang berperan sebagai pengatur (<em>regulator</em>), pelaksana (<em>operato</em>r), pengembang (<em>developer</em>), pengguna (<em>user</em>) serta masyarakat (<em>public</em>), didudukkan dalam satu wadah koordinasi seperti digambarkan pada bagan di bawah ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Bagan 3-1 :&nbsp; Dewan Sumber Daya Air Sebagai Wadah&nbsp; Koordinasi</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berdasarkan Surat Keputusan Gubernur Provinsi Kalimatan Timur Nomor 610/K693/2009, tanggal 15 Desember 2009, telah ditetapkan Dewan Sumber Daya Air Provinsi Kalimantan Timur. Pembentukan dewan ini adalah perwujudan dari amanat undang-undang dalam hal ini UU No.7 tahun 2004 tentang Sumber Daya Air, Pasal 14, 85, dan 86.</p>\r\n\r\n<p>Orang-orang yang duduk sebagai anggota terdiri dari 18 orang unsur pemerintah dan 18 orang unsur non-pemerintah, jumlah yang seimbang atas dasar prinsip keterwakilan.&nbsp; Dewan sumber daya air provinsi ini bersifat non-struktural diangkat dan berada di bawah dan bertanggung jawab kepada gubernur.&nbsp;</p>\r\n', '2013-12-06', '', 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Ariawan', 'ariawan@gmail.com', 'Mohon Informasi', 'Mohon informasi mengenai buku yang diterbitkan oleh Lokomedia.', '2008-02-10'),
(4, 'lukman', 'lukman@hakim', 'Request Code', 'Tolong dunk ..', '2009-02-25'),
(8, 'lukman', 'lukman@bukulokomedia.com', 'kontak kami', 'tes modul hubungi kami', '2010-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `alamat_website`, `meta_deskripsi`, `meta_keyword`, `alamat_kantor`, `email`, `telp`, `fb`, `twitter`, `favicon`) VALUES
(1, 'Website PU-Bidang SDA', 'http://localhost/krs', 'Dinas PU Povinsi Kaltim Bidang Sumber Daya Air', 'PU Kaltim,PU Prov Kaltim,PU Kaltim Bidang SDA,WEB SDA Kaltim,Dinas Pekerjaan Umum Provinsi Kalimantan Timur Bidang Sumber Daya Air', 'JL. TENGKAWANG NO.1 GEDUNG A LANTAI 1 Samarinda', 'info@websda.com', '0541-276246', 'https://www.facebook.com/harrywebdesigner', 'https://twitter.com/harrysuherman', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(19, 'Teknologi', 'teknologi', 'Y'),
(2, 'Olahraga', 'olahraga', 'Y'),
(22, 'Politik', 'politik', 'Y'),
(23, 'Hiburan', 'hiburan', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lapol`
--

CREATE TABLE IF NOT EXISTS `lapol` (
  `lapolident` tinyint(2) NOT NULL AUTO_INCREMENT,
  `lapolnames` varchar(50) DEFAULT NULL,
  `lapoladdrs` varchar(500) DEFAULT NULL,
  `lapoltimes` datetime DEFAULT NULL,
  `lapoljenkj` varchar(20) DEFAULT NULL,
  `lapolktair` varchar(20) DEFAULT NULL,
  `lapolcuaca` varchar(20) DEFAULT NULL,
  `lapollalin` varchar(20) DEFAULT NULL,
  `lapollocat` varchar(500) DEFAULT NULL,
  `lapoldescr` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`lapolident`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lapol`
--

INSERT INTO `lapol` (`lapolident`, `lapolnames`, `lapoladdrs`, `lapoltimes`, `lapoljenkj`, `lapolktair`, `lapolcuaca`, `lapollalin`, `lapollocat`, `lapoldescr`) VALUES
(8, 'Agung Nugroho', ' Jl. Karang Pola no IV\r\nJati Padang,\r\nPasar Minggu,\r\nJakarta Selatan', '0000-00-00 00:00:00', 'Banjir', '80 - 100 cm', 'Hujan Sangat Deras', 'Macet Total', 'Di Depan Pejaten Village.', 'Banjir besar ada korban luka ringan 13 orang.'),
(9, 'edo cahyo', ' Depkk', '0000-00-00 00:00:00', 'Tergenang', '40 > 60 cm', 'Hujan Ringan', 'Macet Total', 'Jln raya keadilan', 'Hujan ringan selama 5 jam'),
(10, 'Agung Nugroho 2', ' Tes input di emulator', '0000-00-00 00:00:00', 'Banjir', '40 > 60 cm', 'Berawan', 'Padat Merayap', 'test emulator', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id_main` int(5) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `posisi` int(3) NOT NULL,
  PRIMARY KEY (`id_main`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id_main`, `nama_menu`, `link`, `aktif`, `posisi`) VALUES
(1, 'Home', 'http://localhost/krs', 'Y', 1),
(2, 'Profil', 'page.php', 'Y', 2),
(3, 'Foto Kegiatan', 'album.php', 'Y', 3),
(4, 'Berita', 'berita.php', 'Y', 4),
(5, 'INFO ANDA', 'lapor.php', 'Y', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', '?module=user', '', '', 'N', 'user', 'Y', 1, ''),
(18, 'Berita', '?module=berita', '', '', 'Y', 'user', 'Y', 6, 'semua-berita.html'),
(19, 'Banner', '?module=banner', '', '', 'Y', 'admin', 'Y', 9, ''),
(37, 'Profil', '?module=profil', '<b>Bukulokomedia.com</b> merupakan website resmi dari penerbit Lokomedia yang bermarkas di Jl. Arwana No.24 Minomartani Yogyakarta 55581. Dirintis pertama kali oleh Lukmanul Hakim pada tanggal 14 Maret 2008.<br><br>Produk unggulan dari penerbit Lokomedia adalah buku-buku serta aksesoris bertema PHP (<span style="font-weight: bold; font-style: italic;">PHP: Hypertext Preprocessor</span>) yang merupakan pemrograman Internet paling handal saat ini.\r\n', 'gedungku.jpg', 'N', 'admin', 'N', 3, 'profil-kami.html'),
(10, 'Manajemen Modul', '?module=modul', '', '', 'N', 'admin', 'Y', 2, ''),
(31, 'Kategori', '?module=kategori', '', '', 'Y', 'admin', 'Y', 5, ''),
(33, 'Poling', '?module=poling', '', '', 'Y', 'admin', 'Y', 10, ''),
(34, 'Tag (Label)', '?module=tag', '', '', 'N', 'admin', 'Y', 7, ''),
(35, 'Komentar', '?module=komentar', '', '', 'Y', 'admin', 'Y', 8, ''),
(36, 'Download', '?module=download', '', '', 'Y', 'admin', 'Y', 11, 'semua-download.html'),
(40, 'Hubungi Kami', '?module=hubungi', '', '', 'Y', 'admin', 'Y', 12, 'hubungi-kami.html'),
(41, 'Agenda', ' ?module=agenda', '', '', 'Y', 'user', 'Y', 31, 'semua-agenda.html'),
(42, 'Shoutbox', '?module=shoutbox', '', '', 'Y', 'admin', 'Y', 13, ''),
(43, 'Album', '?module=album', '', '', 'N', 'admin', 'Y', 14, ''),
(44, 'Galeri Foto', '?module=galerifoto', '', '', 'Y', 'admin', 'Y', 15, ''),
(45, 'Templates', '?module=templates', '', '', 'N', 'admin', 'Y', 16, ''),
(46, 'Kata Jelek', '?module=katajelek', '', '', 'N', 'admin', 'Y', 17, ''),
(47, 'RSS', '-', '', '', 'Y', 'admin', 'N', 18, ''),
(48, 'YM', '-', '', '', 'Y', 'admin', 'N', 19, ''),
(49, 'Indeks Berita', '-', '', '', 'Y', 'admin', 'N', 20, ''),
(50, 'Kalender', '-', '', '', 'Y', 'admin', 'N', 21, ''),
(51, 'Statistik User', '-', '', '', 'Y', 'admin', 'N', 22, ''),
(52, 'Pencarian', '-', '', '', 'Y', 'admin', 'N', 23, ''),
(53, 'Berita Teratas', '-', '', '', 'Y', 'admin', 'N', 24, ''),
(54, 'Arsip Berita', '-', '', '', 'Y', 'admin', 'N', 25, ''),
(55, 'Berita Sebelumnya', '-', '', '', 'Y', 'admin', 'N', 26, ''),
(60, 'Sekilas Info', '?module=sekilasinfo', '', '', 'Y', 'admin', 'Y', 13, ''),
(57, 'Menu Utama', '?module=menuutama', '', '', 'Y', 'admin', 'Y', 28, ''),
(58, 'Sub Menu', '?module=submenu', '', '', 'Y', 'admin', 'Y', 29, ''),
(59, 'Halaman Statis', '?module=halamanstatis', '', '', 'Y', 'admin', 'Y', 30, ''),
(61, 'Identitas Website', '?module=identitas', '', '', 'N', 'admin', 'Y', 4, ''),
(62, 'lapor', '?module=lapor', '', '', 'Y', 'admin', 'Y', 32, '');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id_sub` int(5) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `posisi_sub` int(3) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `link_sub`, `id_main`, `posisi_sub`, `aktif`) VALUES
(2, 'Sejarah', '', 2, 0, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `tag_seo`, `count`) VALUES
(1, 'Palestina', 'palestina', 7),
(2, 'Gaza', 'gaza', 11),
(9, 'Tenis', 'tenis', 5),
(10, 'Sepakbola', 'sepakbola', 7),
(8, 'Laskar Pelangi', 'laskar-pelangi', 2),
(11, 'Amerika', 'amerika', 18),
(12, 'George Bush', 'george-bush', 3),
(13, 'Browser', 'browser', 9),
(14, 'Google', 'google', 3),
(15, 'Israel', 'israel', 5),
(16, 'Komputer', 'komputer', 24),
(17, 'Film', 'film', 9),
(19, 'Mobil', 'mobil', 0),
(21, 'Gayus', 'gayus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id_templates` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_templates`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `pembuat`, `folder`, `aktif`) VALUES
(1, 'Standar', 'Lukmanul Hakim', 'templates/standar', 'N'),
(2, 'Building', 'Lukmanul Hakim', 'templates/building', 'N'),
(3, 'eL jQuery', 'Lukmanul Hakim', 'templates/eljquery', 'N'),
(4, 'eL jQuery versi 2', 'Lukmanul Hakim', 'templates/eljquery2', 'N'),
(5, 'Ayo Versi 1', 'Harry SUherman', 'krs', 'N'),
(7, 'Sandbox', 'Ahmad Nugraha', 'templates/sandbox', 'N'),
(8, 'Just Simple Blue', 'Dian Pamungkas', 'templates/blue', 'N'),
(10, 'Poeji', 'Puji Kartono', 'templates/poeji', 'N'),
(11, 'photofolio', 'Harry SUherman', 'templates/photofolio', 'N'),
(12, 'BY Versi 1', 'Angger W', 'sda', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@detik.com', '08238923848', 'admin', 'N', 'raio2ddgidp93j0tjlsguk0fv0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
