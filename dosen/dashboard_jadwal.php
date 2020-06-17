<?php
include_once "header.php";
?>    
	<br><br>

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
                <div class="card-header text-center">
                    Permintaan Janji Temu</a>
                </div>
                <div class="card-body">	
                	<a href="listJanjiTemu.php " class="btn btn-info">Lihat Semua Janji Temu</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            	<th>Id Mahasiswa Perequest</th>
                                <th>Tanggal Request</th>
                                <th>Jam Awal</th>
                                <th>Jam Akhir</th>
                                <th>Keterangan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @foreach($surat as $s) -->
                            <?php
                            $janji = getJanjiTemuD($_SESSION['id']);
                
                            
                            while($data = mysqli_fetch_array($janji, MYSQLI_ASSOC)){
                            	if ($data['status'] == 0) {
                            
                            ?>
                            <tr>
                            	<td><a href="detailMahasiswa.php?id=<?=$data['mhs_id']?>"> <?=$data['mhs_id']?></td></a>
                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['waktu_awal']?></td>
                                <td><?=$data['waktu_akhir']?></td>
                                <td><?=$data['keterangan']?></td>
         
                                <td>
                                    <a href="function/updateReq.php?id=<?=$data['id']?>&stat=1" class="btn btn-success">Terima</a>
                                    <a href="function/updateReq.php?id=<?=$data['id']?>&stat=9" class="btn btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <?php
                        	}
                        }
                            ?>
                            <!-- @endforeach -->
                            	<br/>
                              </div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                      </div>
                  </div>
   <footer style="position:absolute;
   bottom:0;
   width:100%;
   height:60px;">

<div class="card-text text-center footer-copyright py-3 bg-dark text-white">
  <div >
   <a href=""> Kelompok-PA1    </a>
  </div>
</div>

</footer>
	<!--Akhir Body-->
	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>