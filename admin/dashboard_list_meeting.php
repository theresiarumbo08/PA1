
<?php
 include('header.php');

?>
        
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="far fa-list-alt mr-2"></i>Daftar Jadwal Mengajar Dosen</i></h3><hr>
          
          <a href="tambah_jadwal.php" class="btn btn-primary mb-4"><i class="fas fa-plus-square ml-2 p-2"></i>Tambah Jadwal</a>
          <table class="table table-striped">
             <thead>
            <tr>
    
              <th scope="col">Id Dosen</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Hari</th>
              <th scope="col">Jam</th>
              <th scope="col">Sampai Jam</th>
              <th scope="col">Kegiatan</th>
              <th scope="col">Gedung</th>
              <th colspan="3" scope="col">OPSI</th>
            </tr>
            </thead>

             <tbody>
        <?php
         $jadwal = getAllJadwal();
                            
         while($user = mysqli_fetch_array($jadwal, MYSQLI_ASSOC)){
          
         ?>
        
            <tr>
              
                <td><a href="detailDosen.php?id=<?=$user['dosen_id']?>"> <?=$user['dosen_id']?></td></a>
                <td><?php echo $user['tanggal'] ?></td>
                <td><?php echo $user['hari']?></td>
                <td><?php echo $user['waktu'] ?></td>
                <td><?php echo $user['waktu_akhir']?></td>
                <td><?php echo $user['kegiatan'] ?></td>
                <td><?php echo $user['gedung'] ?></td>
                
                <td><a href="form-editJadwal.php?id=<?php echo $user['id'] ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
                <td><a href="hapus.php?id=<?php echo $user['id'] ?>"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus"></i></a></td>
          </td>
          </tr>
            <?php $user['id']++; } ?>   
  
            </tbody>
                    </table>
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