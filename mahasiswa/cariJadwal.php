<?php include "header.php"; ?>
<?php 
$keyword = $_GET["keyword"];

$semuadata = array();
$ambil = $db->query("SELECT * FROM tb_jadwal WHERE dosen_id LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

?>

<body>
	
<div class="col-md-10 p-5 pt-2">
        
           
		<div class="card mt-5">
	<div class="flex-container">
	<br>
	<div class="card-body">
	<table class="table table-bordered table-hover table-striped">
                      
<div class="container">


	<p>Hasil Pencarian : <?php echo $keyword ?></p>


	<?php

	
	?>
	<div class="row">
	<button  name="tambah"><a href="tambahReq.php" class="btn btn-success">Request Janji Temu</a></button>
	<a href="lihatJadwal.php" class="btn btn-primary">Kembali</a>
		<?php foreach ($semuadata as $key => $value): ?>
	
                <tr>
					<th>ID Jadwal</th>
                	<th>ID Dosen</th>
                    <th>Tanggal</th>
                	<th>Hari</th>
                	<th>Jam</th>
                	<th>Kegiatan</th>
                	<th>Gedung</th>
                              
                </tr>
          
			<tbody>
		<div class="col-md-3">
		
			<div>
				<a href="detail.php?id=<?php  echo $value["id"]; ?>" class="btn btn-default" >

				<div>
				<td><?php echo $value['dosen_id'] ?></td>
				</div>
				
				<div class="caprion">
					<td><?php echo $value["hari"] ?></td>
					
				</div>

				<div class="caprion">
					<td><?php echo $value["waktu"] ?></td>
					
				</div>

				<div class="caprion">
					<td><?php echo $value["waktu_akhir"] ?></td>
					
				</div>

				<div class="caprion">
					<td><?php echo $value["tanggal"] ?></td>
					
				</div>
                <div class="caprion">
					<td><?php echo $value["kegiatan"] ?></td>
					
				</div>

                <div class="caprion">
					<td><?php echo $value["gedung"] ?></td>
					
				</div>
				</a>
				</div>
			</div>
		</div>
		</div>
		</div>	
		
		</table>
				<?php endforeach ?>
				<a href="lihatJadwal.php" class="btn btn-primary">Lihat Jadwal</a>
	
			</div>
		</div>

    
                </div>
            </div>
			</div>
		</div>
		</div>

<!-- footer -->

<?php include "footer.php"; ?>

</div>
</body>
</html>