<?php
include_once "header.php";
?>    	<br><br>

<div class="col-md-10 p-5 pt-2">
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
        <div class="container">
            <div class="card mt-5">

                <div class="card-body">	
                <div>
            <a href="excel.php" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Export Excel</a><br/>
            </div>
            <br>
                	<a href="dashboard_jadwal.php " class="btn btn-info">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal Request</th>
                                <th>Jam Awal Temu</th>
                                <th>Jam Akhir Temu</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @foreach($surat as $s) -->
                            <?php
                            $janji = getAllJanji();
                            
                            while($data = mysqli_fetch_array($janji, MYSQLI_ASSOC)){
                            		
                            	

                            
                            ?>
                            <tr>
                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['waktu_awal']?></td>
                                <td><?=$data['waktu_akhir']?></td>
                                <td><?=$data['keterangan']?></td>
         
                                <td>
                                	<?php
                                		if($data['status'] == 0){
                                			echo "Tindakan belum ada";
                                		}
                                		else if($data['status'] == 1){
                                			echo "Disetujui";
                                		}
                                		else if($data['status'] == 9){
                                			echo "ditolak";
                                		}
                                	?>
                                </td>
                            </tr>
                            <?php
                        	}
                        
                            ?>
                            <!-- @endforeach -->
                            	<br/>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

	<!--Akhir Body-->
	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>