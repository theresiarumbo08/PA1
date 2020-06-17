<?php

    

include('header.php');



$id = $_GET['id'];


$sql = "SELECT * FROM tb_jadwal where id=$id";
$query = mysqli_query($db, $sql);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Mahasiswa Baru | IT Del</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="body">

    <header>
        <h3>Formulir Edit Mahasiswa</h3>
    </header>
    <form action="proses-edit.php" method="POST">

        <?php  while($user=mysqli_fetch_array($query)) {     ?>
            
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
            <p>
            <label for="hari">Hari: </label>
            <?php $hari = $user['hari']; ?>
            <select name="hari">   
                <option <?php echo ($hari == 'Senin') ? "selected": "" ?>>Senin</option>
                <option <?php echo ($hari == 'Selasa') ? "selected": "" ?>>Selasa</option>
                <option <?php echo ($hari == 'Rabu') ? "selected": "" ?>>Rabu</option>
                <option <?php echo ($hari == 'Kamis') ? "selected": "" ?>>Kamis</option>
                <option <?php echo ($hari == 'Jumat') ? "selected": "" ?>>Jumat</option>
            </select>
        </p>
        <p>
            <label for="waktu">Jam : </label>
            <input type="time" name="waktu" value="<?php echo $user['waktu'] ?>" />
        </p>
        <p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal" value="<?php echo $user['tanggal'] ?>" />
        </p>
       
         <p>
            <label for="kegiatan">Kegiatan: </label>
            <input type="text" name="kegiatan" value="<?php echo $user['kegiatan'] ?>" />
        </p>
        <p>
            <label for="gedung">Gedung: </label>
            <input type="text" name="gedung" value="<?php echo $user['gedung'] ?>" />
        </p>
      
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>

<?php }?>

</body>
</html>