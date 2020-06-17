<?php
    require ("config.php");
    session_start();

        $sql = "SELECT * from user where level='dosen' ";
        $query = mysqli_query($db, $sql); 

        $sql1 = "SELECT * from user where level='mahasiswa' ";
        $query1 = mysqli_query($db, $sql1);

        if(isset($_SESSION["username"])){
          session_destroy();
          }
?>

<?php
 include('header.php');

?>

        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-tachometer-alt mr-2">DASHBOARD</i></h3><hr>
          
          <div class="row text-white">
            <div class="card bg-success ml-3" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-graduate mr- 2"></i>
                </div>
                <h5 class="card-title">Jumlah Mahasiswa</h5>
                <div class="display-4"><?php echo mysqli_num_rows($query) ?></div>
                <a href=" "><p class="card-text text-white">Lihat Detail >><i class="fas  fa-angel-double-right ml-2"></i></p></a>
              </div>
            </div>

            <div class="card bg-info ml-5" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-chalkboard-teacher mr-2"></i>
                </div>
                <h5 class="card-title">Jumlah dosen</h5>
                <div class="display-4"><?php echo mysqli_num_rows($query1)?></div>
                <a href=" "><p class="card-text text-white">Lihat Detail >> <i class="fas  fa-angel-double-right ml-2"></i></p></a>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="card ml-3 text-white text-center" style="width: 18rem;">
              <div class="card-header bg-danger display-4 pt-4 pb-4" >
                <i class="fab fa-instagram"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-danger">Instagram</h5>
                <a href="#" class="btn btn-danger">FOLLOW </a>
              </div>
            </div>


            <div class="card ml-5 text-white text-center" style="width: 18rem;">
              <div class="card-header bg-danger display-4 pt-4 pb-4" >
                <i class="fab fa-twitter"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-danger">Twitter</h5>
                <a href="#" class="btn btn-danger">FOLLOW </a>
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