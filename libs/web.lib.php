<?php

/**
 * librari website
 *
 */
class Web {

  // database object
  var $pdo = null;
  // smarty template objek
  var $tpl = null;
  // pesan error
  var $error = null;

  /* set database seting */
  // PDO tipe database
  var $dbtype = 'mysql';
  // PDO nama database
  var $dbname = 'sda_db';
  // PDO host database
  var $dbhost = 'localhost';
  // PDO username database
  var $dbuser = 'root';
  // PDO password database 
  var $dbpass = '';


  /**
  * class konstruktor
  */
  function __construct() {

    // instanisasi pdo objek
    try {
      $dsn = "{$this->dbtype}:host={$this->dbhost};dbname={$this->dbname}";
      $this->pdo =  new PDO($dsn,$this->dbuser,$this->dbpass);
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      die();
    }	

    // instanisasi template objek
    $this->tpl = new Web_Smarty;

  }
  
  
  //================================================ MODUL SET TEMPLATE ==========================================
  
  function getTemplate(){
  	try {
		$sql = "SELECT * FROM templates WHERE aktif ='Y'";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();		
		$result = $stmt->fetch();
		global $template;
		$template  = $result[3];
		$this->tpl->assign('style',"templates/".$template."/css");
		$this->tpl->assign('js',"templates/".$template."/js");
		$this->tpl->assign('images',"templates/".$template."/images");
		$this->tpl->assign('fontawesome',"templates/".$template."/font-awesome/css");
		$this->tpl->assign('carousel',"templates/".$template."/carouselengine");
		$this->tpl->assign('source',"templates/".$template."/source");
		$this->tpl->assign('datatable',"templates/".$template."/advanced-datatable");
		
		
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
  //================================================ MODUL IDENTITAS WEBSITE ==========================================
  
  function getIdentitas(){
  	try {
		$sql = "SELECT * FROM identitas WHERE id_identitas =' 1'";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();		
		$result = $stmt->fetch();
		$this->tpl->assign('identitas_nama_website',$result[1]);
		$this->tpl->assign('identitas_alamat_website',$result[2]);
		$this->tpl->assign('identitas_meta_deskripsi',$result[3]);
		$this->tpl->assign('identitas_meta_keyword',$result[4]);
		$this->tpl->assign('identitas_alamat_kantor',$result[5]);
		$this->tpl->assign('identitas_email',$result[6]);
		$this->tpl->assign('identitas_telp',$result[7]);
		$this->tpl->assign('identitas_fb',$result[8]);
		$this->tpl->assign('identitas_twitter',$result[9]);
		
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }

  
  // =============================================== MODUL TOP MENU ===================================================
  
  // getMainMenu
  function getMainMenu(){
  	try {
      foreach($this->pdo->query(
        "select * from  mainmenu where aktif='Y' order by posisi") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // displayMainMenu
  function displayMainMenu($mainmenu = array()) {
    $this->tpl->assign('mainmenu', $mainmenu);

  }
  
  // getSubMenu
  function getSubMenu(){
  	try {
      foreach($this->pdo->query(
        "select * from  submenu where aktif='Y' order by posisi_sub") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // displaySubMenu
  function displaySubMenu($submenu= array()) {
    $this->tpl->assign('submenu', $submenu);

  }
   
  
  // =============================================== MODUL BERITA =====================================================

  // mengambil data berita
  function getEntriBeritaTerkini() {
    try {
      foreach($this->pdo->query(
        "select * from berita order by id_berita DESC LIMIT 3") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan berita dalam bentuk array
  function displayDataBerita($databerita = array()) {
    $this->tpl->assign('databerita', $databerita);

  }
  
  function getBeritaLainnya() {
    try {
      foreach($this->pdo->query(
        "select * from berita order by rand() limit 10") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  function displayBeritaLainnya($beritalainnya = array()) {
    $this->tpl->assign('beritalainnya', $beritalainnya);

  }
  
  // mengambil data berita
  function getCariBerita() {
    try {
      foreach($this->pdo->query(
        "select * from berita WHERE judul LIKE '%$_GET[cari]%'") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan berita dalam bentuk array
  function displayCariBerita($cariberita = array()) {
    $this->tpl->assign('cariberita', $cariberita);

  }
  
  // tampilkan arsip berita dengan paging 
  function getArsipBerita(){
	// Tentukan Limit dan Posisi Paging
	$limit = 20;
	$next = $_GET['next'];
	if (empty ($next) ) {
		$posisi = 0;
		$next = 1;
	}
	else {
		$posisi = ($next - 1) * $limit;
	}
	// Select Berita berdasarkan $posisi dan $limit
	try {
      foreach($this->pdo->query(
        "select * from berita order by id_berita DESC LIMIT $posisi, $limit") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  
  // tampilkan arsip berita dalam bentuk array
  function displayArsipBerita($arsipberita = array()) {
    $this->tpl->assign('arsipberita', $arsipberita);
  }
  
  // Get Detail Berita
  function getDetailBerita(){
  	try {
		$sql = "SELECT * FROM berita WHERE id_berita = :id";
		$get = $_GET['id'];
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id',$result[0]);
		$this->tpl->assign('judul',$result[3]);
		$this->tpl->assign('hari',$result[7]);
		$this->tpl->assign('tgl',$result[8]);
		$this->tpl->assign('isi_berita',$result[6]);
		$this->tpl->assign('gambar_berita',$result[10]);
		$this->tpl->assign('tag',$result[12]);
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
  
   // =============================================== MODUL KEGIATAN SDA =====================================================

  // Get Program by tahun
  function getProgramTahun(){
  	try {
		$get = $_GET['tahun'];
		$keg = $_GET['kegiatan'];
		$no = 1;
		if($get =="" AND $keg == ""){
		$sql = "SELECT * FROM v_program_kegiatan_sda ORDER BY nama_program ASC";}
		elseif($get !="" AND $keg == ""){
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE tahun=:tahun AND aktif='Y'";}
		elseif($get == "" AND $keg != ""){
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE kategori='$keg' AND aktif='Y'";}
		elseif($get != "" AND $keg != ""){
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE tahun=:tahun AND kategori='$keg' AND aktif='Y'";}
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(':tahun',$get);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('no'=>$no,
							 'id_program'=>$result[0],
							 'kategori'=>$result[1],
							 'nama_program'=>$result[2],
							 'tahun'=>$result[3],
							 'id_kegiatan'=>$result[5],
							 'pekerjaan'=>$result[6],
							 'lokasi'=>$result[7],
							 'rekanan'=>$result[8],
							 'nilai_kontrak'=>$result[9],
							 'foto'=>$result[10]);
							
							 $no++;
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
  // tampilkan kegiatan dalam bentuk array
  function displayProgramTahun($dataprogram = array()) {
    $this->tpl->assign('dataprogram', $dataprogram);
  }
   

  
  // Get Progres by bulan
  function getKegiatanTahun(){
  	try {
		$program = "$_POST[program]";
		$pekerjaan = "$_POST[pekerjaan]";
		$lokasi = "$_POST[lokasi]";
		$thn = $_GET['tahun'];
		$keg = $_GET['kegiatan'];
		$no = 1;
		if ($program != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE id_program=$program";
		}
		if ($pekerjaan != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE pekerjaan LIKE '%$pekerjaan%' AND tahun=$thn";
		}
		if ($lokasi != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE lokasi LIKE '%$lokasi%' AND tahun=$thn";
		}
		if ($lokasi != "" AND $keg != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE lokasi LIKE '%$lokasi%' AND tahun=$thn AND kategori='$keg'";
		}
		if ($program != "" AND $pekeerjaan != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE id_program=$program AND pekerjaan LIKE '%$pekerjaan%'";
		}
		if ($program != "" AND $lokasi != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE id_program=$program AND lokasi LIKE '%$lokasi%'";
		}
		if ($pekerjaan != "" AND $lokasi != "") {
		$sql = "SELECT * FROM v_program_kegiatan_sda WHERE pekerjaan LIKE '%$pekerjaan%' AND lokasi LIKE '%$lokasi%'";
		}
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('no'=>$no,
							 'id_program'=>$result[0],
							 'kategori'=>$result[1],
							 'nama_program'=>$result[2],
							 'tahun'=>$result[3],
							 'id_kegiatan'=>$result[5],
							 'pekerjaan'=>$result[6],
							 'lokasi'=>$result[7],
							 'rekanan'=>$result[8],
							 'nilai_kontrak'=>$result[9],
							 'foto'=>$result[10]);
							
							 $no++;
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
  // tampilkan kegiatan dalam bentuk array
  function displayKegiatanTahun($datakegiatan = array()) {
    $this->tpl->assign('datakegiatan', $datakegiatan);
  }
    
  // Get Detail Kegiatan
  function getDetailKegiatan(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE id_kegiatan = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id',$result[3]);
		$this->tpl->assign('nama_program',$result[1]);
		$this->tpl->assign('tahun',$result[2]);
		$this->tpl->assign('pekerjaan',$result[4]);
		$this->tpl->assign('lokasi',$result[5]);
		$this->tpl->assign('rekanan',$result[6]);
		$this->tpl->assign('kontrak',$result[8]);
		$this->tpl->assign('foto',$result[9]);
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
     // =============================================== MODUL PRASARANA SDA =====================================================

  // Get Prasarana by id
  function getJarIrigasi(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM v_jar_irigasi ORDER BY id_jaringan ASC";	
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_jaringan'=>$result[0],
							 'kode_jaringan'=>$result[1],
							 'nama_jaringan'=>$result[2],
							 'lokasi_jaringan'=>$result[3],
							 'luas_jaringan'=>$result[4],
							 'booklet_jaringan'=>$result[5],
							 'id_detail'=>$result[6],
							 'tahun'=>$result[7],
							 'tnh_primer'=>$result[8],
							 'linning_primer'=>$result[9],
							 'tnh_sekunder'=>$result[10],
							 'linning_sekunder'=>$result[11],
							 'sp'=>$result[12],
							 'bs'=>$result[13],
							 'bp'=>$result[14],
							 'keterangan'=>$result[15]
							 );
		} 
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
   // tampilkan kegiatan dalam bentuk array
  function displayJaringanIrigasi($datairigasi = array()) {
    $this->tpl->assign('datairigasi', $datairigasi);
  }
  
  // Get Prasarana by id
  function getBendungan(){
  	try {
		$get = $_GET['id'];
		if ($get == 2){
		$sql = "SELECT * FROM bendungan WHERE kode_bendung LIKE '%B.%' ORDER BY nama ASC";
		}
		elseif ($get == 3){
		$sql = "SELECT * FROM bendungan WHERE kode_bendung LIKE '%BD.%' ORDER BY nama ASC";
		}
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_bendung'=>$result[0],
							 'kode_bendung'=>$result[1],
							 'nama'=>$result[2],
							 'sungai'=>$result[3],
							 'das'=>$result[4],
							 'ws'=>$result[5],
							 'kota'=>$result[6],
							 'kecamatan'=>$result[7],
							 'desa'=>$result[8],
							 'thn_bangun'=>$result[9],
							 'thn_selesai'=>$result[10],
							 'thn_rehab'=>$result[11],
							 'tipe'=>$result[12],
							 'tinggi'=>$result[13],
							 'lebar'=>$result[14],
							 'panjang'=>$result[15],
							 'kapasitas'=>$result[16],
							 'pemanfaatan'=>$result[17],
							 'luas_catcment'=>$result[18],
							 'pengelola'=>$result[19],
							 'keterangan'=>$result[20],
							 'booklet'=>$result[21]
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayBendungan($databendungan = array()) {
    $this->tpl->assign('databendungan', $databendungan);
  }
  
  // Get Prasarana by id
  function getAirBaku(){
  	try {
		$get = $_GET['id'];
		if ($get == 4){
		$sql = "SELECT * FROM air_baku WHERE jenis='Bendungan'";
		}
		elseif ($get == 5){
		$sql = "SELECT * FROM air_baku WHERE jenis='Sumur Dalam'";
		}
		elseif ($get == 6){
		$sql = "SELECT * FROM air_baku WHERE jenis='Embung'";
		}
		elseif ($get == 7){
		$sql = "SELECT * FROM air_baku WHERE jenis='Bendung'";
		}
		elseif ($get == 8){
		$sqlrawapantai = "SELECT * FROM rawa_pantai WHERE jenis_rawapantai='R'";
		}
		elseif ($get == 9){
		$sqlrawapantai = "SELECT * FROM rawa_pantai WHERE jenis_rawapantai='P'";
		}
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_airbaku'=>$result[0],
							 'kode_airbaku'=>$result[1],
							 'jenis'=>$result[2],
							 'nama'=>$result[3],
							 'sungai'=>$result[4],
							 'das'=>$result[5],
							 'ws'=>$result[6],
							 'kota'=>$result[7],
							 'kecamatan'=>$result[8],
							 'desa'=>$result[9],
							 'thn_bangun'=>$result[10],
							 'thn_selesai'=>$result[11],
							 'thn_rehab'=>$result[12],
							 'tipe'=>$result[13],
							 'tinggi'=>$result[14],
							 'lebar'=>$result[16],
							 'panjang'=>$result[15],
							 'kedalaman'=>$result[17],
							 'kapasitas'=>$result[18],
							 'pemanfaatan'=>$result[20],
							 'luas_catcment'=>$result[19],
							 'pengelola'=>$result[21],
							 'keterangan'=>$result[22],
							 'booklet'=>$result[23],
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayAirBaku($dataairbaku = array()) {
    $this->tpl->assign('dataairbaku', $dataairbaku);
  }
  
  // Get Prasarana by id
  function getRawaPantai(){
  	try {
		$get = $_GET['id'];
		if ($get == 8){
		$sql = "SELECT * FROM rawa_pantai WHERE jenis_rawapantai='R'";
		}
		elseif ($get == 9){
		$sql = "SELECT * FROM rawa_pantai WHERE jenis_rawapantai='P'";
		}
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_rawapantai'=>$result[0],
							 'kode_rawapantai'=>$result[1],
							 'jenis_rawapantai'=>$result[2],
							 'nama'=>$result[3],
							 'kota'=>$result[4],
							 'kecamatan'=>$result[5],
							 'desa'=>$result[6],
							 'luas_rawa'=>$result[7],
							 'jenis_rawa'=>$result[8],
							 'thn_pelaksanaan'=>$result[9],
							 'tipe'=>$result[10],
							 'panjang'=>$result[11],
							 'keterangan'=>$result[12],
							 'booklet'=>$result[13]
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayRawaPantai($datarawapantai = array()) {
    $this->tpl->assign('datarawapantai', $datarawapantai);
  }
  
   // Get Prasarana by id
  function getSpb(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM v_spb";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_sistem'=>$result[0],
							 'kode_sistem'=>$result[1],
							 'nama'=>$result[2],
							 'kota'=>$result[3],
							 'booklet'=>$result[4],
							 'id_detail'=>$result[5],
							 'thn_pelaksanaan'=>$result[6],
							 'normalisasi'=>$result[7],
							 'pasanganbatu'=>$result[8],
							 'beton'=>$result[9],
							 'sheetpile'=>$result[10]
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displaySpb($dataspb = array()) {
    $this->tpl->assign('dataspb', $dataspb);
  }
  
   // Get Prasarana by id
  function getBendali(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM bendali";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_bendali'=>$result[0],
							 'kode_bendali'=>$result[1],
							 'nama'=>$result[3],
							 'sungai'=>$result[4],
							 'das'=>$result[5],
							 'ws'=>$result[6],
							 'kota'=>$result[7],
							 'kecamatan'=>$result[8],
							 'desa'=>$result[9],
							 'thn_bangun'=>$result[10],
							 'thn_selesai'=>$result[11],
							 'thn_rehab'=>$result[12],
							 'tipe'=>$result[13],
							 'tinggi'=>$result[14],
							 'panjang'=>$result[15],
							 'kapasitas'=>$result[16],
							 'keterangan'=>$result[17],
							 'booklet'=>$result[18]
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayBendali($databendali = array()) {
    $this->tpl->assign('databendali', $databendali);
  }
  
   // Get Prasarana by id
  function getPolder(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM Polder";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_polder'=>$result[0],
							 'kode_polder'=>$result[1],
							 'nama'=>$result[2],
							 'kota'=>$result[3],
							 'kecamatan'=>$result[4],
							 'desa'=>$result[5],
							 'thn_bangun'=>$result[6],
							 'thn_selesai'=>$result[7],
							 'thn_rehab'=>$result[8],
							 'luas'=>$result[9],
							 'kapasitas'=>$result[10],
							 'keterangan'=>$result[11],
							 'booklet'=>$result[12]
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayPolder($datapolder = array()) {
    $this->tpl->assign('datapolder', $datapolder);
  }
  
     // =============================================== MODUL HIDROLOGI SDA =====================================================
 
  function getDas(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM das";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_das'=>$result[0],
							 'kode_das'=>$result[1],
							 'nama'=>$result[2],
							 'panjang'=>$result[3],
							 'luas'=>$result[4],
							 'booklet'=>$result[5]
							 
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayDas($datadas = array()) {
    $this->tpl->assign('datadas', $datadas);
  }
  
  function getHidrologi(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM hidrologi";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_hidrologi'=>$result[0],
							 'kode_pos'=>$result[1],
							 'nama_pos'=>$result[2],
							 'das'=>$result[3],
							 'ws'=>$result[4],
							 'kota'=>$result[5],
							 'kecamatan'=>$result[6],
							 'desa'=>$result[7],
							 'thn_bangun'=>$result[8],
							 'thn_rehab'=>$result[9],
							 'x'=>$result[10],
							 'y'=>$result[11],
							 'elevasi'=>$result[12],
							 'booklet'=>$result[13]
							 
							 );
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
    // tampilkan kegiatan dalam bentuk array
  function displayHidrologi($datadas = array()) {
    $this->tpl->assign('datahidro', $datadas);
  }
  
    // =============================================== MODUL PROGRES KEGIATAN SDA =====================================================

  // Get Progres by bulan
  function getProgresBulan(){
  	try {
		$get = $_GET['bulan'];
		$thn = date("Y");
		$program = "$_POST[program]";
		$pekerjaan = "$_POST[pekerjaan]";
		$lokasi = "$_POST[lokasi]";
		$no = 1;
		if($get != ""){
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE bulan=$get AND tahun=$thn";
		}
		if ($program != "") {
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE bulan=$get AND tahun=$thn AND id_program=$program";
		}
		if ($pekerjaan != "") {
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE bulan=$get AND tahun=$thn AND pekerjaan LIKE '%$pekerjaan%'";
		}
		if ($lokasi != "") {
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE bulan=$get AND tahun=$thn AND lokasi LIKE '%$lokasi%'";
		}
		if ($pekerjaan != "" AND $lokasi != "") {
		$sql = "SELECT * FROM v_kegiatan_progres_sda WHERE bulan=$get AND tahun=$thn AND pekerjaan LIKE '%$pekerjaan%' AND lokasi LIKE '%$lokasi%'";
		}
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('no'=>$no,
							 'id_program'=>$result[0],
							 'nama_program'=>$result[1],
							 'tahun'=>$result[2],
							 'id_kegiatan'=>$result[3],
							 'pekerjaan'=>$result[4],
							 'lokasi'=>$result[5],
							 'rekanan'=>$result[6],
							 'volume'=>$result[7],
							 'nilai_kontrak'=>$result[8],
							 'id_progres'=>$result[10],
							 'bulan'=>$result[11],
							 'rencana'=>$result[12],
							 'realisasi'=>$result[13],
							 'deviasi'=>$result[14],
							 'keuangan'=>$result[15]);
							 $no++;
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
  // tampilkan kegiatan dalam bentuk array
  function displayProgresBulan($dataprogres = array()) {
    $this->tpl->assign('dataprogres', $dataprogres);
  }
  
    // Get Program by tahun berjalan
  function getProgram(){
  	try {
		$thn = date("Y");
		$sql = "SELECT * FROM program_kegiatan WHERE tahun=:tahun";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(':tahun',$thn);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_program'=>$result[0],
							 'nama_program'=>$result[2],
							 'tahun'=>$result[2]);
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
  // tampilkan kegiatan dalam bentuk array
  function displayProgram($dataprogramberjalan = array()) {
    $this->tpl->assign('dataprogramberjalan', $dataprogramberjalan);
  }

   
    // =============================================== MODUL ARTIKEL =====================================================

  // mengambil data artikel
  function getEntriArtikelTerkini() {
    try {
      foreach($this->pdo->query(
        "select * from artikel order by id_artikel DESC LIMIT 3") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan artikel dalam bentuk array
  function displayDataArtikel($dataartikel = array()) {
    $this->tpl->assign('dataartikel', $dataartikel);

  }
  
  function getArtikelLainnya() {
    try {
      foreach($this->pdo->query(
        "select * from artikel order by rand() limit 10") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  function displayArtikelLainnya($artikellainnya = array()) {
    $this->tpl->assign('artikellainnya', $artikellainnya);

  }
  
  // tampilkan arsip artikel dengan paging 
  function getArsipArtikel(){
	// Tentukan Limit dan Posisi Paging
	$limit = 20;
	$next = $_GET['next'];
	if (empty ($next) ) {
		$posisi = 0;
		$next = 1;
	}
	else {
		$posisi = ($next - 1) * $limit;
	}
	// Select Artikel berdasarkan $posisi dan $limit
	try {
      foreach($this->pdo->query(
        "select * from artikel order by id_artikel DESC LIMIT $posisi, $limit") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  
  // tampilkan arsip artikel dalam bentuk array
  function displayArsipArtikel($arsipartikel = array()) {
    $this->tpl->assign('arsipartikel', $arsipartikel);
  }
  
  // Get Detail Artikel
  function getDetailArtikel(){
  	try {
		$sql = "SELECT * FROM artikel WHERE id_artikel = :id";
		$get = $_GET['id'];
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id',$result[0]);
		$this->tpl->assign('judul',$result[3]);
		$this->tpl->assign('tgl',$result[6]);
		$this->tpl->assign('isi_artikel',$result[5]);
		$this->tpl->assign('gambar_artikel',$result[8]);
		$this->tpl->assign('tag',$result[10]);
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
	  
  // =============================================== MODUL AGENDA =====================================================
  
  // mengambil data agenda
  function getEntriAgenda() {
    try {
      foreach($this->pdo->query(
        "select * from agenda order by id_agenda DESC LIMIT 5") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan agenda dalam bentuk array
  function displayDataAgenda($dataagenda = array()) {
    $this->tpl->assign('dataagenda', $dataagenda);
  }
  
  
  // Get Detail Agenda
  function getDetailAgenda(){
  	try {
		$sql = "SELECT * FROM agenda WHERE id_agenda = :id";
		$get = $_GET['id'];
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id',$result[0]);
		$this->tpl->assign('tema_agenda',$result[1]);
		$this->tpl->assign('tema_seo_agenda',$result[2]);
		$this->tpl->assign('isi_agenda',$result[3]);
		$this->tpl->assign('tempat_agenda',$result[4]);
		$this->tpl->assign('pengirim_agenda',$result[5]);
		$this->tpl->assign('jam_agenda',$result[9]);
		$this->tpl->assign('tgl_mulai_agenda',$result[6]);
		$this->tpl->assign('tgl_selesai_agenda',$result[7]);
		
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
	
	// Menampilkan arsip agenda
  function getArsipAgenda(){
	$limit = 20;
	$next = $_GET['next'];
	if (empty ($next) ) {
		$posisi = 0;
		$next = 1;
	}
	else {
		$posisi = ($next - 1) * $limit;
	}
	try {
      foreach($this->pdo->query(
        "select * from agenda order by id_agenda DESC LIMIT $posisi, $limit") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  function displayArsipAgenda($arsipagenda = array()) {
    $this->tpl->assign('arsipagenda', $arsipagenda);
  }
  
  
  // =============================================== MODUL ALBUM FOTO =====================================================
  
  // get album
  function getAlbumFoto() {
    try {
      foreach($this->pdo->query(
        "select * from album WHERE id_kat ='$_GET[id]' order by id_album DESC") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // display album
  function displayAlbumFoto($album = array()) {
    $this->tpl->assign('album', $album);
  }
  
  
  // Get Detail Album
  function getDetailAlbum(){
  	try {
		$get = $_GET['id'];
		$sql = "SELECT * FROM gallery WHERE id_album=:id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(':id',$get);
		$stmt->execute();
		
		while($result =$stmt->fetch()){
			$data[] = array ('id_gallery'=>$result[0],
							 'jdl_gallery'=>$result[2],
							 'gbr_gallery'=>$result[5],
							 'ket_gallery'=>$result[4]);
		}
	  
 					
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
			return false;
	}
	return $data;
  }
  
  // tampilkan foto terbaru dalam bentuk array
  function displayDetailAlbum($DetailAlbum = array()) {
    $this->tpl->assign('detailalbum', $DetailAlbum);
  }
    
  // =============================================== MODUL HALAMAN STATIS ============================================
  
  
  // Get Halaman Statis
  function getHalamanStatis(){
  	try {
		$sql = "SELECT * FROM halamanstatis WHERE id_halaman = :id";
		$get = $_GET['id'];
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id_halaman_statis',$result[0]);
		$this->tpl->assign('judul_halaman_statis',$result[1]);
		$this->tpl->assign('judul_halaman_seo_statis',$result[2]);
		$this->tpl->assign('isi_halaman_statis',$result[3]);
		$this->tpl->assign('gambar_halaman_statis',$result[5]);
		
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
   // =============================================== MODUL HALAMAN SLIDE ============================================
  
  
  // Get Halaman Statis
  function getHalamanSlider(){
  	try {
		$sql = "SELECT * FROM slider WHERE id_slider = :id";
		$get = $_GET['id'];
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindParam(":id",$get);
		$stmt->execute();
		
		$result = $stmt->fetch();
		$this->tpl->assign('id_slider',$result[0]);
		$this->tpl->assign('tgl_slider',$result[1]);
		$this->tpl->assign('judul',$result[2]);
		$this->tpl->assign('link',$result[4]);
		$this->tpl->assign('deskripsi',$result[3]);
		$this->tpl->assign('gambar',$result[5]);
		
	}
	catch(PDOException $e)
	{
			echo"Error".$e->getmessage();
	}
  }
  
  
  // =============================================== MODUL SLIDER =====================================================
  
  // mengambil slider
  function getSlider() {
    try {
      foreach($this->pdo->query(
        "select * from slider where aktif='Y' order by id_slider DESC LIMIT 5") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan slider
  function displaySlider($slider = array()) {
    $this->tpl->assign('slider', $slider);
  }
  
    // =============================================== MODUL KATEGORI ALBUM =====================================================
  
  // mengambil slider
  function getKategoriFoto() {
    try {
      foreach($this->pdo->query(
        "select * from kat_album where aktif='Y' order by id_kat_album DESC LIMIT 10") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan slider
  function displayKategoriFoto($kategorifoto = array()) {
    $this->tpl->assign('kategorifoto', $kategorifoto);
  }
  
  //================================================= MODUL DOWNLOAD ==================================================
  
  // mengambil file download
  function getDownload() {
    try {
      foreach($this->pdo->query(
        "select * from download order by id_download DESC") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan download
  function displayDownload($download = array()) {
    $this->tpl->assign('download', $download);
  }
  
  //================================================= MODUL BUKUTAMU ==================================================
  
    // mengambil file buku tamu
  function getBukutamu() {
    try {
      foreach($this->pdo->query(
        "select * from bukutamu order by id_bukutamu DESC LIMIT 5") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan buku tamu
  function displayBukutamu($bukutamu = array()) {
    $this->tpl->assign('bukutamu', $bukutamu);
  }
 //================================================= Info Anda ==================================================
  
    // mengambil file buku tamu
  function getInfoAnda() {
    try {
      foreach($this->pdo->query(
        "select * from bukutamu order by id_bukutamu DESC LIMIT 5") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    } 	
    return $rows;
  }
  
  // tampilkan buku tamu
  function displayInfoAnda($infoanda = array()) {
    $this->tpl->assign('bukutamu', $infoanda);
  }
}




?>