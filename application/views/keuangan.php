<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Keuangan Mushola</title>
<link href="<?php echo base_url(); ?>assets2/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets2/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets2/css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets2/css/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets2/css/main.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets2/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets2/<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets2/<?php echo base_url(); ?>assets2/<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-57-precomposed.png">
<style type="text/css">
h1{
  font-family: sans-serif;
}
 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
</style>

</head>
<body>
<header class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a id="logo" class="pull-left" href="<?php echo base_url(); ?>"></a>
      <div class="nav-collapse  pull-right">
        <ul class="nav">
          <li ><a href="<?php echo base_url(); ?>">Beranda</a></li>
          <li><a href="<?php echo site_url('tentang'); ?>">Tentang Kami</a></li>
         <!--  <li><a href="<?php echo site_url('prayers'); ?>">Prayers</a></li> -->
          <li><a href="three-templates">Artikel</a></li>
          <li><a href="<?php echo site_url('Calendar'); ?>">Peminjaman</a>
          </li>
          <li class="active"><a href="<?php echo site_url('Keuangan'); ?>">Keuangan</a>
          
          <!-- <li><a href="<?php echo site_url('welcome'); ?>">Logout</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</header>

<br>
 <div class="container">
 	<br><br><br>
<center><h3>Laporan Keuangan Bulan Juni 2018</h3></center>
	<table cellspacing='0' align="center">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>Debet (+)</th>
				<th>Kredit (-)</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1 Juni 2018</td>
				<td>Saldo akhir bulan Mei</td>
				<td>Rp. 500.000,-</td>
				<td> - </td>
			</tr>
			<tr>
				<td>2 Juni 2018</td>
				<td>Keperluan Ta'jil Ramadhan</td>
				<td> - </td>
				<td>Rp. 400.000,-</td>
			</tr>
			<tr>
				<td>3 Juni 2018</td>
				<td>Kotak amal bulan oktober</td>
				<td>Rp. 300.000,-</td>
				<td> - </td>
			</tr>
			<tr>
				<td>4 Juni 2018</td>
				<td>Keperluan masjid</td>
				<td> - </td>
				<td>Rp. 200.000,-</td>
			</tr>
			<tr>
				<td colspan="2"><p align="center">Jumlah</p></td>
				<td>Rp. 800.000,- </td>
				<td>Rp. 600.000,-</td>
			</tr>
			<tr>
				<td colspan="2"><p align="center">Sisa Saldo</p></td>
				<td colspan="2">Rp. 200.000,-</td>
			</tr>
		</tbody>
	</table>

 </div>
<script src="<?php echo base_url(); ?>assets2/<?php echo base_url(); ?>assets2/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/<?php echo base_url(); ?>assets2/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/wow.min.js"></script>
</body>
</html>