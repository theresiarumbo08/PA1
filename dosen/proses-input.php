
<?php

include "header.php";


if(isset($_POST['tambah'])){

    $id = $_POST['dosen_id'];

    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];
    $kegiatan = $_POST['kegiatan'];
    $gedung = $_POST['gedung'];
 

    $sql = "INSERT INTO tb_jadwal (hari, waktu, tanggal, kegiatan, gedung) VALUE ('$hari', '$waktu', '$tanggal', '$kegiatan', '$gedung')";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:jadwal.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:jadwal.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>  
