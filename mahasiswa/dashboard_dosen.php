<?php
 include('header.php');

?>

<div class="col-md-10 p-5 pt-2">
<div class="container-fluid">
<div class="container">
        
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="far fa-list-alt mr-2"></i>Daftar Jadwal Mengajar Dosen</i></h3><hr>
          
       
          <table class="table table-striped">
             <thead>
            <tr>
              <th scope="col">Id Jadwal</th>
              <th scope="col">Id Akun Dosen</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Hari</th>
              <th scope="col">Jam</th>
              
              <th scope="col">Kegiatan</th>
              <th scope="col">Gedung</th>
             
            </tr>
            </thead>

             <tbody>
        <?php
        $sql = "SELECT * from tb_jadwal";
        $query = mysqli_query($db, $sql); 
        
        ?>
        
        <?php
       
        while($user = mysqli_fetch_array($query)){
        ?>
        
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><a href="detailDosen.php?id=<?=$user['dosen_id']?>"> <?=$user['dosen_id']?></td></a>
                
                <td><?php echo $user['tanggal'] ?></td>
                <td><?php echo $user['hari']?></td>
                <td><?php echo $user['waktu'] ?></td>
                <td><?php echo $user['kegiatan'] ?></td>
                <td><?php echo $user['gedung'] ?></td>
                
          </tr>
            <?php $user['id']++; } ?>   
  
            </tbody>
                    </table>
          <br>
          <br>


          <h3><i class="far fa-list-alt mr-2"></i>Jadwal Pribadi Dosen</i></h3><hr>
          
          <br>
          <table class="table table-striped">
             <thead>
            <tr>
              <th scope="col">Id Jadwal</th>
              <th scope="col">Id Akun Dosen</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam</th>
              <th scope="col">Kegiatan</th>
            </tr>
            </thead>

             <tbody>
        <?php
        $sql = "SELECT * from tb_jadwal_pribadi";
        $query = mysqli_query($db, $sql); ?>
        <?php
        while($jadwal = mysqli_fetch_array($query)){
        ?>
        
            <tr>
               
                <td><?php echo $jadwal['id'] ?></td>
                <td><a href="detailDosen.php?id=<?=$jadwal['dosen_id']?>"> <?=$jadwal['dosen_id']?></td></a>
                
                <td><?php echo $jadwal['tanggal'] ?></td>
             
                <td><?php echo $jadwal['waktu'] ?></td>
                <td><?php echo $jadwal['kegiatan'] ?></td>
            
                
          </tr>
            <?php $jadwal['id']++; } ?>   
  
            </tbody>
                    </table>
                </div>
            </div>
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

