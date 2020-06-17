<?php 
include "header.php";

//mendapatkan id produk dari url
$id_dosen = $_GET["id"];

//query ambil data
$ambil = $db->query("SELECT * FROM dosen WHERE id='$id_dosen'");
$detail = $ambil->fetch_assoc();

?>

	<div class="flex-container">
	<section class="konten" style="margin-top: 20px; ">
		<div class="panel col-md-10 col-md-offset-1" style="padding: 10px; background-color: #fff1d2" >
			<div class="row">
				
				<div class="col-md-3">
					<h2><?php echo $detail["nama"]; ?></h2>
				
					<br>
					<h5>Request Janji Temu ? </h5>
					<form method="post">
						<div class="form-group">
							<div class="input-group">
								<input type="number" min="1" class="form-control" name="jumlah" value="0" max="<?php echo $detail['stok_produk'] ?>">
								<div class="input-group-btn">
									<button class="btn btn-primary" name="beli">Beli</button>
								</div>
							</div>
						</div>
					</form>

					<?php 

					if (isset($_POST["beli"]))
					{
						//mendapatkan jumlah yang di imput
						$jumlah = $_POST["jumlah"];
						//masukan di keranjang belanja
						$_SESSION["keranjang"][$id_dosen] = $jumlah;

						echo "<script>alert('Produk Telah di Tambahkan ke keranjang Belanja');</script>";
						echo "<script>location='pesanonline.php';</script>";

					}
					 ?>

					<p><?php echo $detail["deskripsi_produk"]; ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->

<?php include "footer.php"; ?>

</div>
</body>
</html>