
<?php
 include('header.php');

?>
        
        <div class="col-md-10 p-5 pt-2">
         

	<br>
<div class="container-fluid">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="dashboard_dosen.php">Home</a></li>
			<li class="breadcrumb-item"><a href="jadwal.php">Jadwal</a></li>
			<li class="breadcrumb-item active" aria-current="page">Jadwal Mengajar</li>
		  </ol>
		</nav>
	</div>

   <div class="col-md-10 p-5 pt-2">
            <div class="card mt-5">
                <div class="card-body">
                    <a href="jadwal.php" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="function/input_jadwal.php">

                    
            <div class="form-group">
              <label for="jadwal">Hari</label>
              <select class="custom-select" name="hari" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
              </select>
             
            </div>
           
            <div class="mb-3">
              <label for="waktu">Jam</label>
              <input type="time" name="waktu" class="form-control is-valid" id="validationServer01" required>
               
            </div>
            <div class="mb-3">
              <label for="waktu_akhir">Sampai Jam</label>
              <input type="time" name="waktu_akhir" class="form-control is-valid" id="validationServer01" required>
               
            </div>

            <div class="mb-3">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" class="form-control is-valid" id="validationServer01" required>
              
            </div>
            <div class="mb-3">
              <label for="kegiatan">kegiatan</label>
              <input type="text" name="kegiatan" class="form-control is-valid" id="validationServer01" required>
               
            </div>

            <div class="mb-3">
              <label for="gedung">Gedung</label>
              <input type="text" name="gedung" class="form-control is-valid" id="validationServer01" required>
               
            </div>
           
            <button type="submit" class="btn btn-secondary btn-lg btn-block" value="tambah">Tambah</button>
           

          </form>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php
    include 'footer.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/admin.js"></script>
  </body>
</html>