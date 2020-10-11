<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sanggar Nusantara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/as.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Sanggar Nusantara</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about">News</a></li>
          <li><a href="#services">Shop</a></li>
          <li><a href="#team">Sanggar</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container kotak_login" >
		<p class="tulisan_login"><b>Pendaftaran Penjual</b></p>
	<form method="POST" action="">
	<table border="0">
	<tr>
		<td class="tulisan_login1">No.KTP</td>
		<td>:</td>
		<td><input type="text" name="no_ktp"> </td>
	</tr>
	<tr>
		<td class="tulisan_login1">Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"> </td>
	</tr>
		<td class="tulisan_login1">Umur</td>
		<td>:</td>
		<td><input type="text" name="umur"> </td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">Jenis Kelamin</td>
		<td>:</td>
		<td class="tulisan_login1">
		<input type="radio" name="jeniskelamin" value="Laki-Laki" >Laki-Laki
		<input type="radio" name="jeniskelamin" value="Perempuan" >Perempuan
		</td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">TTL</td>
		<td>:</td>
		<td><input type="text" name="tanggal"> </td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"> </td>
	</tr>
	<tr>
		<td class="tulisan_login1">No.HP</td>
		<td>:</td>
		<td><input type="text" name="nohp"> </td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">Email</td>
		<td>:</td>
		<td><input type="text" name="email"> </td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">Jenis Penjualan</td>
		<td>:</td>
		<td>
		<select name="jenis">
		<option value="barang" >Barang</option>
		<option value="jasa">Jasa</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td class="tulisan_login1">Kategori barang</td>
		<td>:</td>
		<td class="tulisan_login1">
		<input type="checkbox" name="kategori[]" value="Aksesoris ">Aksesoris<br>
		<input type="checkbox" name="kategori[]" value="Busana ">Busana<br>
		<input type="checkbox" name="kategori[]" value="Peralatan ">Peralatan<br>
		</td>
	</tr>
	<tr>
	<td> </td>
	<td> </td>
	<td> </td>
	</tr>
	<tr>
		<td class="tulisan_login1"><input type="submit" name="submit" value="Submit"></td>
		<td></td>
		<td class="tulisan_login1"><input type="reset" name="reset" value="Reset"></td>
	</tr>
	</table>
	</form>
	<?php
	
		include "koneksi.php";
		@$no_ktp=$_POST['no_ktp'];
		@$nama=$_POST['nama'];
		@$umur=$_POST['umur'];
		@$jeniskelamin=$_POST['jeniskelamin'];
		@$tanggal=$_POST['tanggal'];
		@$alamat=$_POST['alamat'];
		@$nohp=$_POST['nohp'];
		@$email=$_POST['email'];
		@$jenis=$_POST['jenis'];
		@$kategori=$_POST['kategori'];
		@$a=implode($_POST['kategori']);
		@$kirim=$_POST['submit'];
		@$query="INSERT INTO tb_penjual (no_ktp,nama,umur,jeniskelamin,tanggal,alamat,nohp,email,jenis,kategori) VALUES ('$no_ktp','$nama','$umur','$jeniskelamin','$tanggal','$alamat','$nohp','$email','$jenis','$a')";
		
		if($kirim){
		$hasil=mysqli_query($koneksi,$query);
		echo "data berhasil disimpan";
		echo "<a href='tampil.php'>Lihat Data</a>";
		}
	?>		
    </div>
  </section><!-- #hero -->

  <main id="main">

  </main>

  
  <a href="#" class="back-to-top"><i cl ass="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
<?php
	echo "<a href='insert.php'>Daftar</a>";
?>