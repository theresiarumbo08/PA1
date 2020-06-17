
<?php
 include('header.php');

?>
      
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-tachometer-alt mr-2">Data Mahasiswa</i></h3><hr>
        
          <table class="table table-striped">
             <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Kelas</th>
              <th scope="col">Prodi</th>
              <th scope="col">Angkatan</th>

            </tr>
            </thead>

             <tbody>
        <?php
        $sql = "SELECT * from mhs";
        $query = mysqli_query($db, $sql); ?>
        <?php
        while($user = mysqli_fetch_array($query)){
        ?>
        
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['nama'] ?></td>
                <td><?php echo $user['jenis_kelamin']?></td>
                <td><?php echo $user['kelas'] ?></td>
                <td><?php echo $user['prodi'] ?></td>
                <td><?php echo $user['angkatan'] ?></td>

          </tr>
            <?php $user['id']++; } ?>     
    </tbody>
  </table>
 
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/admin.js"></script>
  </body>
</html>