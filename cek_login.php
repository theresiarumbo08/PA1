
<?php
	session_start();
	// require_once "function/config.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect('localhost', 'root', '', 'proyek');
	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'" ;
	$data = mysqli_query($con, $sql);
	$hasil = mysqli_fetch_assoc($data);
	
	if ($hasil > 0) {
		$_SESSION['id'] = $hasil['id'];
		$_SESSION['nama_depan'] = $hasil['nama_depan'];
		$_SESSION['nama_belakang'] = $hasil['nama_belakang'];
		$_SESSION['tanggal_lahir'] = $hasil['tanggal_lahir'];

		$_SESSION['jenis_kelamin'] = $hasil['jenis_kelamin'];
		$_SESSION['no_telepon'] = $hasil['no_telepon'];
		$_SESSION['username'] = $hasil['username'];
		$_SESSION['email'] = $hasil['email'];
		$_SESSION['agama'] = $hasil['agama'];
		$_SESSION['mhs_id'] = $hasil['mhs_id'];
		$_SESSION['dosen_id'] = $hasil['dosen_id'];
		$_SESSION['level'] = $hasil['level'];
		

		header('location: index.php');
	}
	else {
		header('location: login.php?login=false');
	}

	mysqli_close($con);
	// header('location: login.php');
?>