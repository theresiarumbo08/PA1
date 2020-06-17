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

	function salam($nama){
		$query1 = "SELECT * FROM mhs where nama=$nama";
		$mhs = execQ($query1);
		return $mhs;
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
		return $stat;
	}

	function getJanjiTemu($id)
	{
		$tanggal = date('Y-m-d');
		$sql = "SELECT * from tb_janji where mhs_id=$id";
		$data = exeQuery($sql);
		return $data;
	}


	
	function buatJanjiTemu($idM,$idD,$tanggal, $waktu_awal, $waktu_akhir, $keterangan){
		$tanggal = date('Y-m-d');
		$sql = "INSERT INTO tb_janji VALUES('', $idM,$idD,'$tanggal', '$waktu_awal', '$waktu_akhir', '$keterangan', '')";
		exeQuery($sql);
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


	function getJadwal($id){
		$query = "SELECT * FROM tb_jadwal where id=$id";
		$dosen = execQ($query);
		return $dosen;
	}
	
	function getAllJanji()
	{
		$sql = "SELECT * FROM dosen";
		$data = exeQuery($sql);
		return $data;
	}

	function getJanjibyId($id)
	{
		$sql = "SELECT * from tb_janji where id=$id";
		$data = exeQuery($sql);
		return $data;
	}
	function getOneJanjiById($id)
	{
		$sql = "SELECT * from tb_janji where id=$id";
		$data = exeQuery($sql);
		return $data;
	}

	function updateReq($id,$dosen_id,$tanggal, $jam_awal, $jam_akhir, $ket)
	{
	
		$sql = "UPDATE tb_janji SET dosen_id=$dosen_id tanggal='$tanggal', waktu_awal='$jam_awal', waktu_akhir='$jam_akhir', keterangan = '$ket'";
		exeQuery($sql);
	}

	function execQ($query){
		global $db;
		$res = mysqli_query($db, $query);
		return $res;		
	}
