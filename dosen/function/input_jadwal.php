<?php
require_once "functions.php";
session_start();

buatJadwalM($_SESSION['id'], $_POST['hari'], $_POST['waktu'], $_POST['waktu_akhir'],$_POST['tanggal'],$_POST['kegiatan'],$_POST['gedung']);
header('location: ../jadwal.php');
?>