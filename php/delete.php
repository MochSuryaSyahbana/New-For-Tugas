<?php
	include "koneksi.php";
	$no_ktp=$_GET['no_ktp'];
	$query="DELETE FROM tb_penjual WHERE no_ktp='$no_ktp'";
	$hasil=mysqli_query($koneksi,$query);
	if ($hasil){
?>
<script langunage="javascript">document.location.href="tampil.php";</script>
<?php
	}else{
	echo "Gagal Hapus Data";
}
?>