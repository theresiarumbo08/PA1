<?php


include "header.php";

?>


<div class="col-md-10 p-5 pt-2">
            <div class="card mt-5">
                <div class="card-body">	
                	<a href="dashboard_jadwal.php " class="btn btn-success">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            	<th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelas</th>
                                <th>Prodi</th>
                                <th>Angkatan</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php
                            $mhs = getOneMahasiswa($_GET['id']);
                            
                            while($data = mysqli_fetch_array($mhs, MYSQLI_ASSOC)){
                            	
                            ?>
                            <tr>
                            	
                                <td><?=$data['nama']?></td>
                                <td><?=$data['jenis_kelamin']?></td>
                                <td><?=$data['kelas']?></td>
                                <td><?=$data['prodi']?></td>
         						<td><?=$data['angkatan']?></td>

                            </tr>
                            <?php
                        	}
                        
                            ?>
                            <!-- @endforeach -->
                            	<br/>
                            </div>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
 

        <?php
        include('footer.php');
        ?>
	
</body>
</html>