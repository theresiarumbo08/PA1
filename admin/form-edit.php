<?php

    include("config.php");


$id = $_GET['id'];


$sql = "SELECT * FROM user WHERE id=".$id;
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
            <label for="nama_depan">Nama Depan: </label>
            <input type="text" name="nama_depan" placeholder="nama Depan" value="<?php echo $user['nama_depan'] ?>" />
        </p>
        <p>
            <label for="nama_belakang">Nama Belakang: </label>
            <input type="text" name="nama_belakang" placeholder="nama Belakang" value="<?php echo $user['nama_belakang'] ?>" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $user['tanggal_lahir'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $user['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
         <p>
            <label for="no_telepon">No Telepon: </label>
            <input type="text" name="no_telepon" placeholder="no_telepon" value="<?php echo $user['no_telepon'] ?>" />
        </p>
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username" value="<?php echo $user['username'] ?>" />
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="text" name="password" placeholder="password" value="<?php echo $user['password'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Email" value="<?php echo $user['email'] ?>" />
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $user['agama']; ?>
            <select name="agama">   
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label for="level">Level: </label>
            <?php $level = $user['level']; ?>
            <select name="level">   
                <option <?php echo ($level == 'Dosen') ? "selected": "" ?>>Dosen</option>
                <option <?php echo ($level == 'Mahasiswa') ? "selected": "" ?>>Mahasiswa</option>
            </select>
        </p>
        

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>

<?php }?>

</body>
</html>