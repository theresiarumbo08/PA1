<?php
include "header.php";

?>

	<div class="container">
	
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
                <a href="tambahReq.php" class="btn btn-success">Request Janji Temu</a>
                	<a href="dataDosen.php " class="btn btn-success">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            	<th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Agama</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            $dos = getDosenAkun($_GET['id']);
                            
                            while($data = mysqli_fetch_array($dos, MYSQLI_ASSOC)){
                            	
                            
                            ?>
                            <tr>
                            	
                                <td><?=$data['nama']?></td>
                                <td><?=$data['jenis_kelamin']?></td>
                                <td><?=$data['email']?></td>
                                <td><?=$data['agama']?></td>
         					

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
        </div>

        <?php
            include "footer.php";
        ?>

	<!--Akhir Body-->
	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>