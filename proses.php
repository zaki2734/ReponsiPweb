<!DOCTYPE html>
<html>
<head>
	<title>Responsi Pweb Semester 2</title>
	<style type="text/css">
	.border{
	background: #E0D8B0;
}
body{
	background:url(https://d2muumq9nnirye.cloudfront.net/store/imgs/rz_logo.png);
}

}
#header{
	width: 100%;
	float: left;
	height: 300px;
	
}
#menu{
	width: 100%;
	height: 60px;
	float: left;
	background-color: #1C0A00;
	text-align: right;
	color: white
}
#main-content{
	background-color: black;
	width: 100%;
	min-height: auto;
	font-size: 32;
}
#news{
	width: 100%;
	height: 100%;
	overflow: auto;
	float: left;
	background-color: white;
	font-size: 20;
}

#footer{
	width: 100%;
	height: 40px;
	float: left;
	background-color: #333333;
	text-align: center;
	color: orange
}
#content{
	margin:auto;
	width: 960px;
}
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
	</style>
</head>
<body>
<div id="content">
		<div><img src="https://cdn-3.tstatic.net/jualbeli/img/njajal/2017/4/Tak-Semua-SPBU-di-Indonesia-Punya-Pertamina--Kenali-Ciri-ciri-Perbedaan-Mana-Milik-Pemerintah-dan-Swasta-master-1031329609.jpg" width=" 960" height="300"></div>
		<div id="main-content">
			<p align="left"> <div class="dropdown">
 				 <button class="dropbtn">Menu</button>
 				 <div class="dropdown-content">
			     <a href="data.html">Formulir Pengisian Bensin</a>
   				 <a href="datapembeli.php">Data Pembelian Bensin</a>
  </div>
</div></font><</p>
		<div id="news">
			<p>
			<div class="border" >
				<?php
					if (isset($_POST['submit'])) {
						$nama=$_POST['nama'];
						$alamat=$_POST['alamat'];
						$nik=$_POST['nik'];
						$tgl=$_POST['tgl'];
						$bensin=$_POST['bensin'];
						$liter=$_POST['liter'];
						if ($bensin==1) {
							$total= 14000 * $liter;
						}
						if ($bensin==2) {
							$total= 10000 * $liter;
						}
						if ($bensin==3) {
							$total= 8000 * $liter;
						}
						echo "Nama : $nama <br>\n";
						echo "NIK : $nik<br>\n";
						echo "Alamat : $alamat<br>\n";
						echo "Tanggal Pembelian : $tgl<br>\n";
						echo "Jenis Bensin : $bensin<br>\n";
						echo "Jumlah Bensin Yang Dibelli : $liter<br>\n";
						echo "Total: $total<br>\n";
					echo "<head><title> Data Pembeli bensin </head> </title>";
					$fp= fopen("datapembeli.txt", "a+");
					fputs($fp, "$nama|$alamat|$nik|$tgl|$bensin|$liter|$total\n");
					fclose($fp);
					echo "Terimah Kasih Atas Partisipasi Formulir Pembelian Bensin Di RZ Store <br>";
					}
						
				?>
			</p>
		</div>
		</div>	
		</p>
		</div>
		<div id="footer">
			Zaki Pratomo_2100018461_I
		</div>
	<div>

</body>
</html>