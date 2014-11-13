<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>{$identitas_nama_website}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="{$style}/layout.css" type="text/css" />
<link href="{$style}/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{$style}/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="{$style}/style.css" rel="stylesheet" type="text/css">
<link href="{$style}/m-styles.min.css" rel="stylesheet" type="text/css">
<link href="{$style}/js-image-slider.css" rel="stylesheet" type="text/css">
<link href="{$style}/slider.css" rel="stylesheet" type="text/css" />
<link href="{$fontawesome}/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{$datatable}/media/css/demo_page.css" rel="stylesheet" />
<link href="{$datatable}/media/css/demo_table_jui.css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="{$datatable}/media/js/jquery.js"></script>
<link href="{$style}/accord.css" rel="stylesheet" type="text/css">
 <script src='{$js}/accord.js'></script>
<script src="{$js}/menu_jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="{$source}/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="{$source}/jquery.fancybox.css?v=2.1.5" media="screen" />
<script src="{$js}/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{$js}/jquery.min.js"></script>

<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("dataair.php", function(json) {
       
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'containerair',
                    type: 'column',
                    
                },
                title: {
                    text: 'Perbandingan Kebutuhan dan Ketersediaan Air 2011',
                    x: -20 //center
                },
                subtitle: {
                    text: 'SDA PU KALIMANTAN TIMUR',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Jumlah'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: json
            });
        });
   
    });
   
});
        </script>

<script src="{$js}/highcharts.js"></script>
  <script src="{$js}/modules/exporting.js"></script>
  
</head>
<body>
<div class="container">
	<div class="row">
    <div class="span12">
    <img src="{$images}/header.jpg" />
    </div>
    <div class="clear"></div>
		<div class="span12">
       
			<div>
              <ul class="nav">
              <li><a href="index.php"><i class="icon-home icon-large"></i> Home</a></li>
               <li><a href="#">Profil <i class="icon-chevron-down"></i></a>
              <ul>
                <li><a href="page-1-sejarah.html">Sejarah</a></li>
                <li><a href="page-5-visi-dan-misi.html">Visi & Misi</a></li>
                <li><a href="page-21-tugas-dan-fungsi.html">Tugas & Fungsi</a></li>
                <li><a href="page-2-struktur-organisasi.html">Struktur Organisasi</a></li>
                <li><a href="page-4-program-kerja.html">Program Kerja</a></li>
              </ul>
              </li>
              <li><a href="">Kegiatan <i class="icon-chevron-down"></i></a>
              <ul>
              	<li><a href="page-22-dewan-sumber-daya-air.html">Dewan Sumber Daya Air</a></li>
                <li><a href="kinerja.html">Kinerja Kegiatan</a></li>
                <li><a href="progres.html">Progres Kegiatan</a></li>
              </ul>
              </li>
        	 <li><a href="http://117.54.11.71/flexviewers/geospasial" target="_blank">Geospasial Data</a></li>
             <li><a href="pustaka.html">Pustaka</a></li>
             <li><a href="kontak-kami.html">Kontak</a></li>
			 <li><a href="lapor.html">Info Anda</a></li>
			 <li><a href="air.html">Neraca Air</a></li>
             
             <li class="search"><form action="search.php">
                  <i class="icon-search icon-large"></i><input type="text" name="cari" />
                  </form>
              </li>	                
                 
          </ul> 
        </div>
		</div>
	</div>