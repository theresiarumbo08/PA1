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
	function getOneMahasiswa($id){
		$query = "SELECT * FROM mhs where mhs_id=$id";
		$mhs = execQ($query);
		return $mhs;
	}
	
	function UpdateRequest($id, $stat){
		$sql = "UPDATE tb_janji SET status=$stat where id=$id";
		exeQuery($sql);
	}

	function getOneJadwal($id){
		$sql = "SELECT * FROM tb_jadwal where dosen_id=$id";
		$data = exeQuery($sql);
		return $data;
	}

	
	function getOneJadwalP($idP){
		$sql = "SELECT * FROM tb_jadwal_pribadi where dosen_id=$idP";
		$data = exeQuery($sql);
		return $data;
	}

	function getJanjiTemuD($id)
	{
		$sql = "SELECT * from tb_janji where dosen_id=$id";
		$data = exeQuery($sql);
		return $data;
	}

	function getAllJanji()
	{
		$sql = "SELECT * FROM tb_janji";
		$data = exeQuery($sql);
		return $data;
	}
	function getDosen($id){
		$query = "SELECT * FROM dosen where dosen_id=$id";
		$dosen = execQ($query);
		return $dosen;
	}

	function buatJadwal($idD, $tanggal, $waktu, $kegiatan){
		$tanggal = date('Y-m-d');
		$sql = "INSERT INTO tb_jadwal_pribadi VALUES('', $idD, '$tanggal', '$waktu', '$kegiatan')";
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
	