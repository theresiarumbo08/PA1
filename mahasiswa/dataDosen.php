<?php
include_once "header.php";
  
?>
<br>
<br>
<div class="col-md-10 p-5 pt-2">


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
    <br>
    <div class="flex-container">
        <section class="konten">
            <div class="container">
            <h4>Id Akun Dosen</h4>
                <br>
                <div class="row">
                
                    <?php $ambil = $db->query("SELECT * FROM dosen") ?>
                    
                    <?php while($dosen = $ambil->fetch_assoc()){ ?>
                    <div class="col-md-3" >
                        <div>
                        
                            <a href="detail.php?id=<?php echo $dosen["dosen_id"]; ?>">
                                
                            <div class="caption">
                                <?php echo $dosen['dosen_id']; ?>
                             
                            </div>

                            <div class="caption">
                                <?php echo $dosen['nama']; ?>

                             
                            </div>
                            
                        </a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>

</div>
    </div>
       </div>
            </div>
                </div>
<footer style="position:absolute;
   bottom:0;
   width:100%;
   height:60px;">

<div class="card-text text-center footer-copyright py-3 bg-dark text-white">
  <div >
   <a href=""> Kelompok-PA1    </a>
  </div>
</div>

</footer>

<!-- JQUERY SCRIPTS -->
    <script src="Admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="Admin/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="Admin/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="Admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="Admin/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="Admin/assets/js/custom.js"></script>
    
</body>
</html>
