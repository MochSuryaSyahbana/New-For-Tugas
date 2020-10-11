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
		@$query="Update INTO tb_penjual (no_ktp,nama,umur,jeniskelamin,tanggal,alamat,nohp,email,jenis,kategori) VALUES ('$no_ktp','$nama','$umur','$jeniskelamin','$tanggal','$alamat','$nohp','$email','$jenis','$a')";
		
			if($hasil){
	header('location:tampil.php');
	}else{
		echo "Gagal Update data";
		echo mysqli_error()	;
	}
	?>