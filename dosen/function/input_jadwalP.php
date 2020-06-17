<?php
require_once "functions.php";
session_start();

buatJadwal($_SESSION['id'], $_POST['tanggal'], $_POST['waktu'], $_POST['kegiatan']);
header('location: ../jadwal.php');
?>