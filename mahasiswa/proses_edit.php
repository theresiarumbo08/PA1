<?php
session_start();
require_once "function/functions.php";

if(isset($_POST['simpan'])){

 $id = $_POST['id'];
 $email = $_POST['email'];
 $nama_depan = $_POST['nama_depan'];
 $nama_belakang = $_POST['nama_belakang'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $jk = $_POST['jenis_kelamin'];
 $no_telepon = $_POST['no_telepon'];
 $agama = $_POST['agama'];

 $sql = "UPDATE user SET email='$email', nama_depan='$nama_depan',nama_belakang='$nama_belakang',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jk', no_telepon=$no_telepon, agama='$agama'";

 $query = mysqli_query($db, $sql);

 if( $query ) {

 header('Location: dashboard_mahasiswa.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
}
else {
 die("Akses dilarang...");
}

?>