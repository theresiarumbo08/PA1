
<?php
 
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
                    
                    <br/>
                    <br/>
                    
                    <form method="post" action="function/buatJanji.php">
                    <div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1">

                    <div class="form-group">
                    <?php
                    $sql = "SELECT * from dosen";
                    $query = mysqli_query($db, $sql); ?>
                    <?php
                    $jadwal = mysqli_fetch_array($query);

                    
                    ?>
                         <div class="form-group">
                                    <label for="id">Id Akun Dosen</label>
                                    <div class="select-list">
                                        <select name="dosen_id" id="dosen_id" required>
                                            <option value="<?=$jadwal['id']?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            <option value="<?=$jadwal['id']++?>"> <?=$jadwal['id']?></option>
                                            
                                        </select>
                                    </div>
                                </div>


<!-- 
                                        <label>Dosen</label>
                                        <input class="form-control" type="text" name="id" value="<?=$jadwal['id']?>" required>
                                        
                                    </div> -->
                


                        <div class="form-group">
                         <label>Tanggal pertemuan</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="tanggal" required=""></input>

                        </div>


                         <div class="form-group">
                         <label>Jam Awal</label>
                            <input type="time" name="waktu_awal" class="form-control" placeholder="Jam Awal Pertemuan"></input>

                        </div>
                        <div class="form-group">
                         <label>Jam Akhir</label>
                            <input type="time" name="waktu_akhir" class="form-control" placeholder="Jam Akhir Pertemuan"></input>

                        </div>
                        <div class="form-group">
                         <label>Keterangan</label>
                            <input name="keterangan" class="form-control" placeholder="Keterangan"></input>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="addRequest.php" class="btn btn-primary">Kembali</a>
                        </div>
                        </div>
                        </table>
                        </div>
                        </div>
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