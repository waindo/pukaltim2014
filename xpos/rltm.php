<?PHP
header("Content-type: text/plain; charset=UTF-8");
if($do = iget("do")){
	include ("kon.php");
	$ss = intval($do);
	ambilsensor($do);
	mysql_close($koneksi);
}

function ambilsensor($st) {
    $tb = "sta".$st;
	$ss = intval($st);
	
	$query = "SELECT ch01, ch02, ch03, ch04, ch05, ch06, ch07, ch08 FROM staliststasiun WHERE id = '".$st."'";
	$qq = "SELECT * FROM ".$tb." ORDER BY time desc limit 0,1";
	$qs = "SELECT stasensor.nama, stasensor.satuan FROM stasensor_data, stasensor WHERE stasensor_data.sensorid = stasensor.id AND stasensor_data.staid = ".$ss." AND stasensor_data.ch = ";
	
	$res = @mysql_query($query);
	$ris = @mysql_query($qq);
	
    if (@mysql_num_rows($res) > 0 && @mysql_num_rows($ris) > 0) {
    	$riw = mysql_fetch_array ($ris, MYSQL_NUM);
		$row = mysql_fetch_array ($res, MYSQL_NUM);
		$as = explode(" ", $riw[0]);
		$bs = explode("-", $as[0]);
		$jam = explode(":", $as[1]);
		$tgl = $bs[2].'-'.$bs[1].'-'.$bs[0].' '.$jam[0].':'.$jam[1];
		$xx = "<b>Tanggal/Jam = ".$tgl." WITA</b><hr class='grey'/><ul class='bulletorange'>";
		for($i = 0; $i <= 7; $i++) {
			if ($row[$i] == 1) {
				$k = $i+1;
				$qi = $qs.$k;
				$rs = @mysql_query($qi); //
				if (mysql_num_rows($rs) > 0) {
					$rss = mysql_fetch_array ($rs, MYSQL_NUM);
					$xx .= "<li>".$rss[0]." : <b>".$riw[$i+1]." ".$rss[1]."</b></li>";
					mysql_free_result($rs);
				} else {
					$xx .= "<li>CH".$i." : <b>".$riw[$i+1]."</b></li>";
				}
				
			}
		}
		$xx .= "</ul>";
		print($xx);
		mysql_free_result($res);
		mysql_free_result($ris);
    }
}

function iget($a){
	global $_SERVER, $_GET;
	if(preg_match ("/\b".$a."\b/i", $_SERVER["QUERY_STRING"])) return $_GET[$a];
}
?>