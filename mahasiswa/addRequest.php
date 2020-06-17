<?php
include "header.php";
?>
	<br><br>



     <div class="col-md-10 p-5 pt-2">
        
           
            <div class="card mt-5">
                <div class="card-header text-center">
                    List Janji Temu</a>
                </div>
                <div class="card-body">
                    <a href="tambahReq.php" class="btn btn-success">Request Janji Temu</a>
                    <a href="excel.php" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Export Excel</a><br/>
                    <br/>

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Akun Dosen</th>
                                <th>Tanggal Request</th>
                                <th>Jam Awal Pertemuan</th>
                                <th>Jam Akhir Pertemuan</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                            <?php

                            $janji = getJanjiTemu($_SESSION['id']);
                            $c=0;
                            while($data = mysqli_fetch_array($janji, MYSQLI_ASSOC)){
                                $c++;
                                ?>
                                
                                <?php 
                                echo '<td>'.$c.'</td>';
                                ?>
                                <td><a href="detailDosen.php?id=<?=$data['dosen_id']?>"> <?=$data['dosen_id']?></td></a>
                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['waktu_awal']?></td>
                                <td><?=$data['waktu_akhir']?></td>
                                <td><?=$data['keterangan']?></td>

                                <td>
                                	<?php
                                	if( $data['status'] == 0){
                                		echo "<button type='button' class='btn btn-warning'>Menunggu</button>";
                                	}
                                	else if( $data['status'] == 1){
                                		echo "<button type='button' class='btn btn-success'>Diterima</button>";
                                	}
                                	else if( $data['status'] == 9){
                                		echo "<button type='button' class='btn btn-danger'>Ditolak</button>";
                                	}
                                	?>
                               		
                                </td>
                                    <td>
                                	<?php
                                	if( $data['status'] == 0){

                                	?>
                                    <a href="editReq.php?id=<?=$data['id']?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
                                    <a href="hapus.php?id=<?=$data['id']?>"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i></a>
                                    <?php
                                	}
                                	else echo "Tidak Bisa Edit"; 
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
                         <?php
            include "footer.php";
        ?>
      

	<!--Akhir Body-->
	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
  

</script>
   
</body>
</html>