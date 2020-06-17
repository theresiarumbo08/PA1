<?php
session_start();
require_once "functions.php";

	updateReq($_POST['id'],  $_POST['dosen_id'], $_POST['tanggal'], $_POST['waktu_awal'], $_POST['waktu_akhir'], $_POST['keterangan']);
	header('location: ../addRequest.php');
?>