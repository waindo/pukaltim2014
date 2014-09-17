<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("sda_db", $con);

$sth = mysql_query("SELECT jumlah FROM keb_air");
$rows = array();
$rows['name'] = 'Total Kebutuhan Air';
while($r = mysql_fetch_array($sth)) {
    $rows['data'][] = $r['jumlah'];
}
$sth1 = mysql_query("SELECT jumlah FROM debit_air");
$rows1 = array();
$rows1['name'] = 'Total Ketersedian Air';
while($r1 = mysql_fetch_array($sth1)) {
    $rows1['data'][] = $r1['jumlah'];
}



$result = array();
array_push($result,$rows);
array_push($result,$rows1);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>