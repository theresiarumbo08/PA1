
<?php
 include('header.php');

?>

        <div class="col-md-10 p-5 pt-2">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Id_Dosen</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Agama</th>
              <th>Jenis Kelamin</th>
            </tr>
            </thead>

             <tbody>
        <?php
        $sql = "SELECT * from dosen";
        $query = mysqli_query($db, $sql); ?>
        <?php
        while($user = mysqli_fetch_array($query)){
        ?>
        
            <tr class="table-info">
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['nama'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['agama'] ?></td>
                <td><?php echo $user['jenis_kelamin'] ?></td>
               
          </td>
          </tr>
            <?php $user['id']++; } ?>     
                </div>

                        </tbody>
                    </table>
        


 
<div class="card mt-5">
    <div class="card-body">
          <h3><i class="fas fa-user-graduate mr-2"></i>Data Dosen</i></h3><hr>
          
          <a href="editData.php" class="btn btn-primary mb-4"><i class="fas fa-plus-square ml-2 p-2"></i>Edit Data Dosen</a>
          <div class="card mt-5">
                <div class="card-body">
               <tbody>

                <table border="0" width="100%">
                <?php
        $id = $_SESSION['id'];
        $sql = "SELECT * from user WHERE id = $id";
        $query = mysqli_query($db, $sql); 
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        ?>
        <?php
        while($user = mysqli_fetch_array($query)){
        ?>
			
        <tr>
					<td>Email</td>
					<td><?php echo $_SESSION['email'] = $user['email'] ?></td>
				</tr>
				<tr>
					<td>Nama Depan</td>
					<td><?php echo $_SESSION['nama_depan'] = $user['nama_depan'] ?></td>
        </tr>
        <tr>
					<td>Nama Belakang</td>
          <td><?php echo $_SESSION['nama_belakang'] = $user['nama_belakang']?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><?php  echo $_SESSION['tanggal_lahir'] = $user['tanggal_lahir'] ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
          <td><?php echo $_SESSION['jenis_kelamin'] = $user['jenis_kelamin'] ?></td>
				</tr>
				<tr>
					<td>No Telepon</td>
          <td><?php echo $_SESSION['no_telepon'] = $user['no_telepon'] ?></td>
				</tr>
				
				<tr>
					<td>Agama</td>
          <td><?php echo $_SESSION['agama'] = $user['agama'] ?></td>
        </tr>

        
        
        <?php } ?>
          </td>
          </tr>

    </tbody>

  </table>
  </div>
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
    <script type="text/javascript" src="../assets/js/admin.js"></script>
  </body>
</html>