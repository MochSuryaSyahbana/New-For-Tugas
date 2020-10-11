<?php
	include "koneksi.php";
	$no_ktp	=$_GET["no_ktp"];
	$query	="SELECT*FROM tb_penjual WHERE no_ktp='$no_ktp'";
	$hasil	=mysqli_query($koneksi,$query);
	$data	=mysqli_fetch_array($hasil);
	?>
<table border="1">
	<tr><td>No_KTP</td><td>:</td><td><?php echo $data['no_ktp']?></td></tr>
	<tr><td>Nama</td><td>:</td><td><?php echo $data['nama']?></td></tr>
	<tr><td>Umur</td><td>:</td><td><?php echo $data['umur']?></td></tr>
	<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $data['jeniskelamin']?></td></tr>
	<tr><td>TTL</td><td>:</td><td><?php echo $data['tanggal']?></td></tr>
	<tr><td>Alamat</td><td>:</td><td><?php echo $data['alamat']?></td></tr>
	<tr><td>No,HP</td><td>:</td><td><?php echo $data['nohp']?></td></tr>
	<tr><td>Email</td><td>:</td><td><?php echo $data['email']?></td></tr>
	<tr><td>Jenis</td><td>:</td><td><?php echo $data['jenis']?></td></tr>
	<tr><td>kategori</td><td>:</td><td><?php echo $data['kategori']?></td></tr>
</table>