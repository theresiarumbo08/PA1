<?php
include "header.php";


$id = $_SESSION['id'];


$sql = "SELECT * FROM user where id=$id";
$query = mysqli_query($db, $sql);

?>
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-calendar-alt mr-2"></i>Jadwal</i></h3><hr>
         
          <form class="was-validated" action="editDataPribadi.php" method="POST">

          <?php  while($data=mysqli_fetch_array($query)) {     ?>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>

            <div class="form-group">
                           
                           <label class="email">Email</label>
                           <input class="input--style-4" type="text" name="email" value="<?php echo $data['email'] ?>" />
                     
               </div>
               <div class="form-group">
                 
                           <label class="nama_depan">Nama Depan</label>
                           <input type="text" name="nama_depan" value="<?php echo $data['nama_depan'] ?>" />
                 
                   </div>
               
                   <div class="form-group">
                           <label class="nama_belakang">Nama Belakang</label>
                           <input  type="text" name="nama_belakang" value="<?php echo $data['nama_belakang'] ?>" />
                
               </div>

               <div class="form-group">
                           <label class="tanggal_lahir">Tanggal Lahir</label>
                           <input  type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" />
                    
               </div>

               <div class="form-group">
                           <label class="jenis_kelamin">Jenis Kelamin</label>
                           <?php $jk = $data['jenis_kelamin']; ?>
                           <div class="p-t-10">
                               <label class="radio-container m-r-45">Laki-laki
                                   <input type="radio" checked="checked" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == ' Laki-laki') ? "checked": "" ?> />
                                   <span class="checkmark"></span>
                               </label>
                               <label class="radio-container">Perempuan
                                   <input type="radio" checked="checked" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?> />
                                   <span class="checkmark"></span>
                               </label>
                           </div>
                       
                   </div>

                   <div class="form-group">
                           <label class="no_telepon">No Telepon</label>
                           <input  type="text" name="no_telepon" value="<?php echo $data['no_telepon'] ?>" />
               
               </div>

               <div class="form-group">
                           <label class="agama">Agama</label>
                           <input  type="text" name="agama" value="<?php echo $data['agama'] ?>" />
                 
               </div>
               
            
               <div class="form-group">
                           <label class="password">Password</label>
                           <input  type="text" name="password" value="<?php echo $data['password'] ?>" />
                 
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