<?php

include_once("header.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $agama = $_POST['agama'];
    $password = $_POST['password'];
  
  

    $sql = "UPDATE user SET email='$email', nama_depan='$nama_depan', nama_belakang='$nama_belakang', tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',no_telepon='$no_telepon',agama='$agama', password='$password' WHERE id=$id ";

    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {

        header('Location: dashboard_dosen.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>


