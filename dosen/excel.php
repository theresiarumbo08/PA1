<?php
include "config.php";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=janji_temu.xls");
 
												
		
			?>
	  
      <h3>Excel - List Janji Temu</h3>
    <table>
	
			<tr>
			
			 <td width="0px">Tanggal : <?php echo date("d-m-Y") ?></td>  
			 
			 
		 </tr>
	</table>	
		 
		<table bordered="1">  
			<thead bgcolor="eeeeee" align="center">
			<tr bgcolor="eeeeee" >
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Request</th>
            <th>Jam Awal Pertemuan</th>
            <th>Jam Akhir Pertemuan</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
			  </tr>
			</thead>
			<tbody>
	 	
					
		</tbody>

		</div>
    </div>
</div>
            <?php   

            $q=mysqli_query($db,"SELECT * FROM tb_janji")or die('Error223');   

            $c=0;
                while($row=mysqli_fetch_array($q) )
                {

                    $s=$row['tanggal'];
                    $t1=$row['waktu_awal'];
                    $t2=$row['waktu_akhir'];
                    $k=$row['keterangan'];
                    $status=$row['status']; 


            $q12=mysqli_query($db,"SELECT * FROM user" )or die('Error231');
            while($row=mysqli_fetch_array($q12) ){
            {
                $name=$row['nama_depan'];
                }
                }

            $c++;
            echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td>
            <td>'.$name.'</td>
            <td>'.$s.'</td>
            <td>'.$t1.'</td>
            <td>'.$t2.'</td>
            <td>'.$k.'</td>';
            ?>
                <td>
                    <?php
                    if( $status == 0){
                        echo "<button type='button' class='btn btn-warning'>Menunggu</button>";
                    }
                    else if( $status == 1){
                        echo "<button type='button' class='btn btn-success'>Diterima</button>";
                    }
                    else if( $status == 9){
                        echo "<button type='button' class='btn btn-danger'>Ditolak</button>";
                    }
                    ?>
                    
                </td>
                    <td>
                    <?php
                    if( $status == 0){

                    ?>
                    <a href="editSurat.php?id=<?=$data['id']?>" class="btn btn-info">Edit</a>
                    <?php
                    }
                    else echo "Tidak Bisa Edit"; 
                    ?>
                    </td>
                
</tr>
<?php
}
?>
  </table>   