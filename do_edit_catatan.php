<?php 
session_start();
$NIK = $_SESSION['NIK'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$Lokasi =$_POST['Lokasi'];
$Suhu_Tubuh =$_POST['Suhu_Tubuh'];
$id_catatan=$_POST['id_catatan'];

$format = "\n$id_catatan|$NIK|$nama_lengkap|$tanggal|$jam|$Lokasi|$Suhu_Tubuh";

//buka file catatan.txt
$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; //mencati urutan baris ke berapa
    }
}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt',$data);
?>

<script type="text/javascript">
alert("Perubahan data berhasil");
window.location.assign('user.php');
</script> 