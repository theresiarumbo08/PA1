<?php
require("config.php");

if(isset($_POST['daftar'])){


    $namadepan = $_POST['nama_depan'];
    $namabelakang = $_POST['nama_belakang'];
    $tanggallahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];
    $notelepon = $_POST['no_telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $agama = $_POST['agama'];
    $level = $_POST['level'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, no_telepon, username, password, agama,level, email) VALUE ('$namadepan', '$namabelakang', '$tanggallahir', '$jk', $notelepon, '$username', '$password', '$agama','$level','$email')";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
       
        header('Location:./dashboard_dosen.php?status=sukses');
    } else {
      
        header('Location:./dashboard_dosen.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>  