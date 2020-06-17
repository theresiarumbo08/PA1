<?php
include "header.php";


$id = $_GET['id'];


$sql = "SELECT * FROM tb_jadwal where id=$id";
$query = mysqli_query($db, $sql);

?>
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-calendar-alt mr-2"></i>Jadwal</i></h3><hr>
         
          <form class="was-validated" action="edit-jadwal.php" method="POST">

          <?php  while($user=mysqli_fetch_array($query)) {     ?>

            <input type="hidden" name="id" value="<?php echo $user['id'] ?>"/>

          <div class="form-group">
          <label for="hari">Hari: </label>
            <?php $hari = $user['hari']; ?>
            <select name="hari"  class="custom-select" required>   
                <option <?php echo ($hari == 'Senin') ? "selected": "" ?>>Senin</option>
                <option <?php echo ($hari == 'Selasa') ? "selected": "" ?>>Selasa</option>
                <option <?php echo ($hari == 'Rabu') ? "selected": "" ?>>Rabu</option>
                <option <?php echo ($hari == 'Kamis') ? "selected": "" ?>>Kamis</option>
                <option <?php echo ($hari == 'Jumat') ? "selected": "" ?>>Jumat</option>
            </select>
            </div>
         
           
            <div class="mb-3">
             
            <label for="waktu">Jam </label>
            <input type="time" name="waktu" class="form-control is-valid" id="validationServer01" value="<?php echo $user['waktu'] ?>" required/>
     
            </div>

            <div class="mb-3">
             
            <label for="waktu_akhir">Sampai Jam</label>
            <input type="time" name="waktu_akhir" class="form-control is-valid" id="validationServer01" value="<?php echo $user['waktu_akhir'] ?>" required/>
     
            </div>

            <div class="mb-3">
            
              <label for="tanggal">Tanggal </label>
            <input type="date" name="tanggal" class="form-control is-valid" id="validationServer01" value="<?php echo $user['tanggal'] ?>"  required/>
  
            </div>
            <div class="mb-3">
            
              <label for="kegiatan">Kegiatan </label>
            <input type="text" name="kegiatan" class="form-control is-valid" id="validationServer01" value="<?php echo $user['kegiatan'] ?>" required/>
 
            </div>
            <div class="mb-3">
        
              <label for="gedung">Gedung </label>
            <input type="text" name="gedung" class="form-control is-valid" id="validationServer01" value="<?php echo $user['gedung'] ?>" required/>
            </div>
         
            <input type="submit" value="Simpan" name="simpan" />
          <?php } ?>

          </form>

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