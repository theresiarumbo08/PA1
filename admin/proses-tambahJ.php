<?php

include "header.php";


if(isset($_POST['tambah'])){
   
    $id = $_POST['id'];
    $dosen_id = $_POST['dosen_id'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    $waktu2 = $_POST['waktu_akhir'];
    $tanggal = $_POST['tanggal'];
    $kegiatan = $_POST['kegiatan'];
    $gedung = $_POST['gedung'];

    $sql = "INSERT INTO tb_jadwal (dosen_id, hari, waktu,waktu_akhir, tanggal, kegiatan, gedung) VALUE ('$dosen_id', $hari', '$waktu','$waktu2', '$tanggal', '$kegiatan', '$gedung')";
    $query = mysqli_query($db, $sql);
    
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:dashboard_list_meeting.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:dashboard_list_meeting.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>  