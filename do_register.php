<?php 

$NIK = $_POST['NIK'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];


//cek jika Nama telah tedaftar
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $fragment = explode("|", $value);
    if($NIK == $fragment['0']){
        $check = true;
    }
}

if($check){ //jika nik sudah terdaftar ?>
    <script type ="text/javascript">
        alert("Maaf, NIK telah terdaftar!!");
        window.location.assign('register.php');
    </script> 
<?php 
}
else{ //jika data tidak ditemukan, maka akan disimpan ke config.txt
    $format = "\n$NIK|$Nama_Lengkap";

    //buka dulu file nya
    $file = fopen('config.txt','a');
    fwrite($file,$format);

    //tutup file
    fclose($file);
?>
    <script type ="text/javascript">
        alert("!!! Pendaftaran berhasil!");
        window.location.assign('index.php');
    </script> 

<?php
}

