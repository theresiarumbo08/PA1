<?php

include_once("header.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $kegiatan = $_POST['kegiatan'];
  

    
    // buat query update
    $sql = "UPDATE tb_jadwal_pribadi SET tanggal='$tanggal', waktu='$waktu', kegiatan='$kegiatan' WHERE id=$id ";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {

        header('Location: dashboard_list_meeting.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>


