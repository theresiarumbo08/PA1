
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
			<li class="breadcrumb-item active" aria-current="page">Jadwal Pribadi</li>
		  </ol>
		</nav>
	</div>

   <div class="col-md-10 p-5 pt-2">
            <div class="card mt-5">
                <div class="card-body">
                    <a href="jadwal.php" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="function/input_jadwalP.php">

                    <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal" type="date" class="form-control"/>

                        </div>

                        <div class="form-group">
                            <label>Jam</label>
                            <input name="waktu" type="time" class="form-control"/>

                        </div>
                    	


                        <div class="form-group">
                            <label>Kegiatan</label>
                            <input name="kegiatan" type="text" class="form-control"/>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>
        
        
        

  <?php
    include('footer.php');
  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/admin.js"></script>
  </body>
</html>