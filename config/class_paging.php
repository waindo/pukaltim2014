<?php
// class paging untuk halaman administrator
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=1>First</a></li> 
                    <li><a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$prev>Prev</a></li>";
}
else{ 
	$link_halaman .= "<< First | < Prev | ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i>$i</a> | ";
  }
	  $angka .= " <b>$halaman_aktif</b> | ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i>$i</a> | ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... | <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman>$jmlhalaman</a> | " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$next>Next ></a> | 
                     <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman>Last >></a> ";
}
else{
	$link_halaman .= " Next > | Last >>";
}
return $link_halaman;
}
}


// class paging untuk halaman administrator (pencarian berita)
class Paging9{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=1&kata=$_GET[kata]><< First</a> | 
                    <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$prev&kata=$_GET[kata]>< Prev</a> | ";
}
else{ 
	$link_halaman .= "<< First | < Prev | ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i&kata=$_GET[kata]>$i</a> | ";
  }
	  $angka .= " <b>$halaman_aktif</b> | ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$i&kata=$_GET[kata]>$i</a> | ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... | <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman&kata=$_GET[kata]>$jmlhalaman</a> | " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$next&kata=$_GET[kata]>Next ></a> | 
                     <a href=$_SERVER[PHP_SELF]?module=$_GET[module]&halaman=$jmlhalaman&kata=$_GET[kata]>Last >></a> ";
}
else{
	$link_halaman .= " Next > | Last >>";
}
return $link_halaman;
}
}



// class paging untuk halaman berita (menampilkan semua berita)
class Paging2{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halberita'])){
$posisi=0;
$_GET['halberita']=1;
}
else{
$posisi = ($_GET['halberita']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halberita-1.html'><< First</a></li>
                  <li><a href='halberita-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halberita-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halberita-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halberita-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halberita-$next.html>Next ></a></li>
<li><a href=halberita-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}

//paGING PENGUMUMAN
class PagingUmum{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halpengumuman'])){
$posisi=0;
$_GET['halpengumuman']=1;
}
else{
$posisi = ($_GET['halpengumuman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halpengumuman-1.html'><< First</a></li>
                  <li><a href='halpengumuman-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halpengumuman-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halpengumuman-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halpengumuman-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halpengumuman-$next.html>Next ></a></li>
<li><a href=halpengumuman-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


//PAGING ARTIKEL
class PagingArtikel{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halartikel'])){
$posisi=0;
$_GET['halartikel']=1;
}
else{
$posisi = ($_GET['halartikel']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halartikel-1.html'><< First</a></li>
                  <li><a href='halartikel-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halartikel-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halartikel-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halartikel-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halartikel-$next.html>Next ></a></li>
<li><a href=halartikel-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}



// class paging untuk halaman kategori (menampilkan berita per kategori)
class Paging3{
function cariPosisi($batas){
if(empty($_GET['halkategori'])){
	$posisi=0;
	$_GET['halkategori']=1;
}
else{
	$posisi = ($_GET['halkategori']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=halkategori-$_GET[id]-1.html><< First</a> | 
                    <a href=halkategori-$_GET[id]-$prev.html>< Prev</a> | ";
}
else{ 
	$link_halaman .= "<< First | < Prev | ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=halkategori-$_GET[id]-$i.html>$i</a> | ";
  }
	  $angka .= " <b>$halaman_aktif</b> | ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=halkategori-$_GET[id]-$i.html>$i</a> | ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... | <a href=halkategori-$_GET[id]-$jmlhalaman.html>$jmlhalaman</a> | " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=halkategori-$_GET[id]-$next.html>Next ></a> | 
                     <a href=halkategori-$_GET[id]-$jmlhalaman.html>Last >></a> ";
}
else{
	$link_halaman .= " Next > | Last >>";
}
return $link_halaman;
}
}


// class paging untuk halaman agenda (menampilkan semua agenda) 
class Paging4{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halagenda'])){
$posisi=0;
$_GET['halagenda']=1;
}
else{
$posisi = ($_GET['halagenda']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halagenda-1.html'><< First</a></li>
                  <li><a href='halagenda-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halagenda-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halagenda-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halagenda-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halagenda-$next.html>Next ></a></li>
<li><a href=halagenda-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


// class paging untuk halaman download (menampilkan semua download) 
class Paging5{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['haldownload'])){
$posisi=0;
$_GET['haldownload']=1;
}
else{
$posisi = ($_GET['haldownload']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='haldownload-1.html'><< First</a></li>
                  <li><a href='haldownload-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=haldownload-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=haldownload-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=haldownload-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=haldownload-$next.html>Next ></a></li>
<li><a href=haldownload-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


// class paging untuk halaman galeri foto
class Paging6{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halgaleri'])){
$posisi=0;
$_GET['halgaleri']=1;
}
else{
$posisi = ($_GET['halgaleri']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halgaleri-1.html'><< First</a></li>
                  <li><a href='halgaleri-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halgaleri-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halgaleri-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halgaleri-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halgaleri-$next.html>Next ></a></li>
<li><a href=halgaleri-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


// class paging untuk halaman komentar
class Paging7{
function cariPosisi($batas){
if(empty($_GET['halkomentar'])){
	$posisi=0;
	$_GET['halkomentar']=1;
}
else{
	$posisi = ($_GET['halkomentar']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=halkomentar-$_GET[id]-1.html><< First</a> | 
                    <a href=halkomentar-$_GET[id]-$prev.html>< Prev</a> | ";
}
else{ 
	$link_halaman .= "<< First | < Prev | ";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=halkomentar-$_GET[id]-$i.html>$i</a> | ";
  }
	  $angka .= " <b>$halaman_aktif</b> | ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=halkomentar-$_GET[id]-$i.html>$i</a> | ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... | <a href=halkomentar-$_GET[id]-$jmlhalaman.html>$jmlhalaman</a> | " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=halkomentar-$_GET[id]-$next.html>Next ></a> | 
                     <a href=halkomentar-$_GET[id]-$jmlhalaman.html>Last >></a> ";
}
else{
	$link_halaman .= " Next > | Last >>";
}
return $link_halaman;
}
}


// class paging untuk halaman video foto
class PagingVideo{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halvideo'])){
$posisi=0;
$_GET['halvideo']=1;
}
else{
$posisi = ($_GET['halvideo']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halvideo-1.html'><< First</a></li>
                  <li><a href='halvideo-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halvideo-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halvideo-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halvideo-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halvideo-$next.html>Next ></a></li>
<li><a href=halvideo-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


// class paging untuk halaman pegawai
class PagingPegawai{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halpegawai'])){
$posisi=0;
$_GET['halpegawai']=1;
}
else{
$posisi = ($_GET['halpegawai']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halpegawai-1.html'><< First</a></li>
                  <li><a href='halpegawai-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halpegawai-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halpegawai-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halpegawai-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halpegawai-$next.html>Next ></a></li>
<li><a href=halpegawai-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


// class paging untuk halaman regulasi
class PagingRegulasi{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halregulasi'])){
$posisi=0;
$_GET['halregulasi']=1;
}
else{
$posisi = ($_GET['halregulasi']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
$prev = $halaman_aktif-1;
$link_halaman .= "<li><a href='halregulasi-1.html'><< First</a></li>
                  <li><a href='halregulasi-$prev.html'>< Prev</a></li>";
}
else{
$link_halaman .= "<li class='active'><a href=#><< First</a></li>
<li class='active'><a href=#>< Prev</a></li> ";
}

// Link halaman 1,2,3, …
$angka = ($halaman_aktif > 3 ? "<li><a href=#>...</a></li>" : " ");
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
if ($i < 1)
continue;
$angka .= "<li><a href=halregulasi-$i.html>$i</a></li>  ";
}
$angka .= " <li class='active'><a href=#>$halaman_aktif</a></li>";

for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
if($i > $jmlhalaman)
break;
$angka .= "<li><a href=halregulasi-$i.html>$i</a></li> ";
}
$angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><a href=#>...</a></li><li><a href=halregulasi-$jmlhalaman.html>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last)
if($halaman_aktif < $jmlhalaman){
$next = $halaman_aktif+1;
$link_halaman .= "<li><a href=halregulasi-$next.html>Next ></a></li>
<li><a href=halregulasi-$jmlhalaman.html>Last >></a></li>";
}
else{
$link_halaman .= " <li class='active'><a href=#>Next ></a></li> <li class='active'><a href=#>Last >></a></li>";
}
return $link_halaman;
}
}


?>
