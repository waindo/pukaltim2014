<?php

require('config/koneksi.php');

$user	= $_POST['username'];
$pass	= md5($_POST['password']);
	
$sql = mysql_query("SELECT * FROM users WHERE username = '$user' AND password = '$pass' AND blokir='N'");
$num_rows = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);
if ($num_rows > 0){
		session_start();
		$_SESSION['username'] = $data[username];
		$_SESSION['password'] = $data[password];
		$_SESSION['level'] = $data[level];
		$_SESSION['skpd'] = $data[id_skpd];
		$_SESSION['nama'] = $data[nama_lengkap];
		header('location: index.php');
}
else{
	include"error.php";
}
?>