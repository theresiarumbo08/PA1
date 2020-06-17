<?php

include_once("config.php");

if(isset($_POST['simpan'])){
 
    $id = $_POST['id'];
    $namadepan = $_POST['nama_depan'];
    $namabelakang = $_POST['nama_belakang'];
    $tanggallahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];
    $notelepon = $_POST['no_telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
    $level = $_POST['level'];
    // buat query update
    $sql = "UPDATE user SET nama_depan='$namadepan', nama_belakang='$namabelakang', tanggal_lahir='$tanggallahir', jenis_kelamin='$jk', no_telepon='$notelepon', username='$username', password='$password', email='$email', agama='$agama', level='$level' WHERE id=$id ";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: dashboard_dosen.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>