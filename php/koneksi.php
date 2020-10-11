<?php
$host="localhost";
$user="root";
$pass="";
$db="sanggar";
$koneksi=mysqli_connect($host,$user,$pass);
$db_biodata=mysqli_select_db($koneksi,$db);
?>
