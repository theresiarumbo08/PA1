<?php

include_once("header.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    $waktu_akhir = $_POST['waktu_akhir'];
    $tanggal = $_POST['tanggal'];
    $kegiatan = $_POST['kegiatan'];
    $gedung = $_POST['gedung'];

    
    // buat query update
    $sql = "UPDATE tb_jadwal SET hari='$hari', waktu='$waktu', waktu_akhir='$waktu_akhir', tanggal='$tanggal', kegiatan='$kegiatan', gedung='$gedung' WHERE id=$id ";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: dashboard_list_meeting.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>


