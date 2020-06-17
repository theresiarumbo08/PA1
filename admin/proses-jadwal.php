<?php
require("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $jadwal = $_POST['jadwal'];
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['t anggal'];
    $kegiatan = $_POST['kegiatan'];
    $gedung = $_POST['gedung'];
    
    $sql = "INSERT INTO tb_jadwal (jadwal, nama, waktu, tanggal, kegiatan, gedung) VALUE ('$jadwal', '$nama', '$waktu', '$tanggal', '$kegiatan', '$gedung')";
    $query = mysqli_query($db, $sql);
    // if(!mysqli_query($db, $sql))
    // {
    //    echo "Error: " .mysqli_error($db);
    // }
    // else{
    //     echo "Data Inserted Successully!";
    // }
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:dashboard_jadwal.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:dashboard_jadwal.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>  