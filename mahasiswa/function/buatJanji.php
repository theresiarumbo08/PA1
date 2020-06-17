<?php
require_once "functions.php";
session_start();

buatJanjiTemu($_SESSION['id'], $_POST['dosen_id'],$_POST['tanggal'], $_POST['waktu_awal'],$_POST['waktu_akhir'],$_POST['keterangan']);
header('location: ../addRequest.php');
?>
