<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'proyek');
	global $db;
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}


	function exeQuery($query){
		global $db;
		$stat = mysqli_query($db, $query);

		return $stat;
	}

	function closeConn()
	{
		global $db;
		$stat = mysqli_close($db);
		return 
		$stat;
	}
	function getMahasiswa($id){
		$query = "SELECT * FROM mhs where id=$id";
		$mhs = execQ($query);
		return $mhs;
	}
	
	function getDosen($id){
		$query = "SELECT * FROM dosen where dosen_id=$id";
		$dosen = execQ($query);
		return $dosen;
	}

	function getDosenAkun($id){
		$query = "SELECT * FROM dosen where id=$id";
		$dosen = execQ($query);
		return $dosen;
	}

	function UpdateRequest($id, $stat){
		$sql = "UPDATE tb_janji SET status=$stat where id=$id";
		exeQuery($sql);
	}


	function getAllJanji()
	{
		$sql = "SELECT * FROM tb_janji";
		$data = exeQuery($sql);
		return $data;
	}

	function getAllJadwal()
	{
		$sql = "SELECT * FROM tb_jadwal";
		$data = exeQuery($sql);
		return $data;
	}

	function buatJadwal($idD, $hari, $waktu, $waktu_akhir, $tanggal, $kegiatan, $gedung){
		$tanggal = date('Y-m-d');
		$sql = "INSERT INTO tb_jadwal_pribadi VALUES('', $idD, '$hari', '$waktu', '$waktu_akhir', '$tanggal', '$kegiatan', '$gedung')";
		exeQuery($sql);
	}

	function buatJadwalM($idDd, $hari, $waktu, $waktu2, $tanggal, $kegiatan, $gedung){
		$tanggal = date('Y-m-d');
		$sql = "INSERT INTO tb_jadwal VALUES('', $idDd, '$hari', '$waktu', '$waktu2','$tanggal','$kegiatan', '$gedung')";
		exeQuery($sql);
	}

	function execQ($query){
		global $db;
		$res = mysqli_query($db, $query);
		return $res;		
	}
	