
<?php
 require ("config.php");
 
include('header.php');
?>	<br><br>



<div class="col-md-10 p-5 pt-2">
<div class="container-fluid">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="dashboard_mahasiswa.php">Home</a></li>
			<li class="breadcrumb-item"><a href="addRequest.php">Request Janji Temu</a></li>
			<li class="breadcrumb-item active" aria-current="page">Janji Temu</li>
		  </ol>
		</nav>
	</div>
<div class="container">

            <div class="card mt-5">
                <div class="card-body">
                <a href="addRequest.php" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <?php
                    	$surat = getOneSuratByID($_GET['id']);
						global $tanggal; 
						global $jam_awal;
						global $jam_akhir;
						global $ket;
                    	while($data = mysqli_fetch_array($surat, MYSQLI_ASSOC)){
                    		$tanggal = $data['tanggal'];
							$jam_awal = $data['waktu_awal'];
							$jam_akhir = $data['waktu_akhir'];
							$ket = $data['keterangan'];
                    	}
                    ?>

                    <form method="post" action="function/updateSurat.php">


                        <div class="form-group">
                            <label>Tanggal Request</label>
                            <input name="tanggal" class="form-control" type="date" value="<?=$tanggal?>"></input>

							<div class="form-group">
                            <label>Jam Awal</label>
                            <input name="waktu_awal" type="time" class="form-control" value="<?=$jam_awal?>"></input>
						
							<div class="form-group">
                            <label>Jam Akhir</label>
                            <input name="waktu_akhir" type="time" class="form-control" value="<?=$jam_akhir?>"></input>

							<div class="form-group">
                            <label>Keterangan</label>
                            <input name="keterangan" class="form-control" value="<?=$ket?>"></input>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
            </div>
        </div>
        </div>
        </div>

	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/script.js"></script>
    <script src="plugins/bootstrap-datepicker.js"></script>

    <?php
            include "footer.php";
        ?>
<script>
//options method for call datepicker
$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });

       
</body>
</html>