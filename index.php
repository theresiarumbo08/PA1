<?php
	session_start();
	if(!isset($_SESSION['username'])){
			header("location: login.php");
	}
	echo $_SESSION['level'];

	if(isset($_SESSION['level'])){
		if ($_SESSION['level'] == 'admin') {
			header('location: admin/dashboard_utama.php');
		}
		if ($_SESSION['level'] == 'Dosen') {
			header('location: dosen/dashboard_dosen.php');
		}
		if ($_SESSION['level'] == 'mahasiswa') {
			header('location: mahasiswa/dashboard_mahasiswa.php');
		}
	}


	?>

