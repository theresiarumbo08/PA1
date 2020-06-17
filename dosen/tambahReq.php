
<?php
 require ("config.php");
 
include('header.php');
?>	<br><br>

<div class="col-md-10 p-5 pt-2">
<div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    
                    <br/>
                    <br/>
                    
                    <form method="post" action="function/buatJanji.php">
                    <div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1">

                        
                    <div class="form-group">
                         <label>Id Dosen</label>
                            <input name="dosen_id" class="form-control" placeholder="Jam Awal Pertemuan"></input>

                        </div>

                         <div class="form-group">
                         <label>Jam Awal</label>
                            <input name="waktu_awal" class="form-control" placeholder="Jam Awal Pertemuan"></input>

                        </div>
                        <div class="form-group">
                         <label>Jam Akhir</label>
                            <input name="waktu_akhir" class="form-control" placeholder="Jam Akhir Pertemuan"></input>

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

        <?php
            include "footer.php";
        ?>

	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/script.js"></script>
    <script src="plugins/bootstrap-datepicker.js"></script>

   

       
</body>
</html>