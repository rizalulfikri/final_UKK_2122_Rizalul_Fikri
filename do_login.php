<?php 

$NIK = $_POST['NIK'];
$Nama_Lengkap = $_POST['Nama_Lengkap'];

$format = "$NIK|$Nama_Lengkap";
$file = file('config.txt',FILE_IGNORE_NEW_LINES);

if(in_array($format, $file)){ // Jika data ditemukan
    session_start();
    $_SESSION['NIK'] = $NIK;
    $_SESSION['Nama_Lengkap'] = $Nama_Lengkap;

    header('location:user.php');

 
}else{ // jika data tidak ditemukan ?>
    <script type ="text/javascript">
        alert("!!! NIK atau Nama Lengkap anda salah!");
        window.location.assign('index.php');
    </script> 
    <?php
}

