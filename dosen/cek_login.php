<?php 
// mengaktifkan session pada php
session_start();
if(isset($_SESSION["username"])){
	session_destroy();
	}

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// Validasi Login
if ($_POST){
	
	$queryuser = mysqli_query ($koneksi, "select * from user where username='$username' and password='$password'");
		
	$user = mysqli_fetch_array ($queryuser);
	
	if($user){
			if (password_verify($password, $user["password"])){
				
				$_SESSION["username"] 			= $user["Username"];
				$_SESSION["password"] 			= $user["Password"];
				$_SESSION["Login"] 				= true;
			}
		}
	}

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboard_utama.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="Dosen"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Dosen";
		// alihkan ke halaman dashboard pegawai
		header("location:dosen/dashboard_dosen.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard pengurus
		header("location:mahasiswa/dashboard_mahasiswa.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>