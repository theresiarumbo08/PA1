
<?php
 include('header.php');

?>
<?php
if (isset($_GET['status'])) {
	if($_GET['status'] == 'true'){
		?>
		<script>
			alert('Akun berhasil ditambahkan');
		</script>
		<?php
  }	
  else{
    ?>
    <script>
			alert('Akun berhasil ditambahkan');
		</script>
    <?php
  }
}
?>
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Akun Dosen</i></h3><hr>
          
          <a href="pendaftaran.php" class="btn btn-primary mb-4"><i class="fas fa-plus-square ml-2 p-2"></i>Daftar Akun Dosen</a>
          <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Depan</th>
              <th scope="col">Nama Belakang</th>
              <th scope="col">Tanggal lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Email</th>
              <th scope="col">Agama</th>
              <th scope="col">Level</th>
              <th colspan="3" scope="col">aksi</th>
            </tr>
            </thead>

             <tbody>
        <?php
        $sql = "SELECT * from user where level='dosen' ";
        $query = mysqli_query($db, $sql); ?>
        <?php
        while($user = mysqli_fetch_array($query)){
        ?>
        
            <tr class="table-info">
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['nama_depan'] ?></td>
                <td><?php echo $user['nama_belakang']?></td>
                <td><?php echo $user['tanggal_lahir'] ?></td>
                <td><?php echo $user['jenis_kelamin'] ?></td>
                <td><?php echo $user['no_telepon'] ?></td>
            
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['agama'] ?></td>
                <td><?php echo $user['level'] ?></td>
                <td><a href="form-edit.php?id=<?php echo $user['id'] ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
                <td><a href="hapusAkun.php?id=<?php echo $user['id'] ?>"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i></a></td>
          </td>
          </tr>
            <?php $user['id']++; } ?>     
    </tbody>
    </div>
    
  </table>
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
</php>