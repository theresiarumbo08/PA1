<?php 


include "header.php"; 

// //mendapatkan id produk dari url
// $id = $_GET["dosen_id"];

//query ambil data

// $ambil = $db->query("SELECT * FROM dosen");
// $detail = $ambil->fetch_assoc();

?>

<div class="col-md-10 p-5 pt-2">
<div class="container-fluid">
<div class="container">

<div class="card mt-5">
    <div class="card-body">


	<section class="konten" style="margin-top: 20px; ">

		<div>
			<div class="row">
				 <table border="0" width="100%">
				<div class="col-md-3">

				<?php
				$janji = getDosen($_GET['id']);

				while($data = mysqli_fetch_array($janji, MYSQLI_ASSOC)){
					
				?>
					<td><?php echo $data["nama"]; ?></td>
					

					<td>Email : <?php echo $data['email']; ?></td>
                    
					<td><?php echo $data["agama"]; ?></td>
                    <td><?php echo $data["jenis_kelamin"]; ?></td>
				</div>
			</div>
		</div>

		
					<form method="post">
						<div class="form-group">
							
								<div class="input-group-btn">
									<button class="btn btn-primary" name="request">Request Janji Temu</button>
								</div>
							</div>
						</div>
					</form>

					<?php 

					if (isset($_POST["request"]))
					{
						
						$nama = $_POST["nama"];
						
						$_SESSION["dosen_id"][$id] = $nama;

						echo "<script>alert('Masuk ke Halaman Tambah Request!');</script>";
						echo "<script>location='tambahReq.php';</script>";

					}
					 ?>
					 <?php } ?>

					</table>
					</div>
					</div>
	</section>

					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>


<?php include "footer.php"; ?>

</div>

</body>
</html>