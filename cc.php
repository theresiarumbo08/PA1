<?php
include_once "header.php";
  
?>    	<br><br>


        <div class="container">
            <div class="card mt-5">

                <div class="card-body">	
                <div>
            <a href="excel.php" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Export Excel</a><br/>
            </div>
            <br>
                	<a href="dashboard_mahasiswa.php " class="btn btn-info">Kembali</a>
                    <br/>
                    <br/>
                
                    <form action="cari.php" method="get" style="margin-top: 40px;">
                        <input type="text" name="keyword" class="form-control" placeholder="Cari...">
                        <button class="btn btn-primary" style="width: 80px; height: 50px;">Cari</button>	
                    </form>
	

                    <!-- <form action="" method="get">
                        <label>Cari :</label>
                        <input type="text" name="cari">
                        <input type="submit" value="Cari">
                    </form> -->
                    
                    <?php 
                    // if(isset($_GET['cari'])){
                    //     $cari = $_GET['cari'];
                    //     echo "<b>Hasil pencarian : ".$cari."</b>";
                    // }
                    ?>
 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
            
                                <th>Id Dosen</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Agama</th>
                                <th>Jenis Kelamin</th>
                            </tr>

                            <?php 

                            // if(isset($_GET['cari'])){
                            //     $cari = $_GET['cari'];
                            //     $data1 = mysqli_query("select * from dosen where nama like '%".$cari."%'");				
                            // }else{
                            //     $data1 = mysqli_query("select * from dosen");		
                            // }
                            
                                ?>

                        </thead>
                        <tbody>
                            <!-- @foreach($surat as $s) -->
                            <?php
                            $dosen = getAllJanji();
                            
                            while($data = mysqli_fetch_array($dosen)){
                            		
                                    

                            
                            ?>
                            <tr>
                            
                            <td><a href="detailDosen.php?id=<?=$data['id']?>"> <?=$data['id']?></td></a>
                            
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['agama'] ?></td>
                            <td><?php echo $data['jenis_kelamin'] ?></td>
                          
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
</body>
</html>