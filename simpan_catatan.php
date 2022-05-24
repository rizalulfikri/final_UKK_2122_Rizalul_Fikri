<?php 
session_start();
$NIK = $_SESSION['NIK'];
$Nama_Lengkap = $_SESSION['Nama_Lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$Lokasi=$_POST['Lokasi'];
$Suhu_Tubuh =$_POST['Suhu_Tubuh'];
$id_catatan=rand(1000,100000);


$format = "\n$id_catatan|$NIK|$Nama_Lengkap|$tanggal|$jam|$Lokasi|$Suhu_Tubuh";

//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data Catatan Peduli Diri berhasil ditambahkan");
window.location.assign('user.php');
</script>