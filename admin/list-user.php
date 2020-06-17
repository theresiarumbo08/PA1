<?php
    require ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="body">
    <header> 
        <h3>Calon Mahasiswa yang sudah mendaftar </h3>
    </header>

    <nav>
        <a href = "form-daftar.php"> [+] Tambah Baru</a>
    </nav>
    <br>
    <table border = "1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>No Telepn</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Agama</th>
            <th>Level</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "select * from user";
        $query = mysqli_query($db, $sql);
        while($user = mysqli_fetch_array($query))
        {
            echo "<tr>";
                echo "<td>". $user['id']."</td>";
                echo "<td>". $user['nama_depan']."</td>";
                echo "<td>". $user['nama_belakang']."</td>";
                echo "<td>". $user['tanggal_lahir']."</td>";
                echo "<td>". $user['jenis_kelamin']."</td>";
                echo "<td>". $user['no_telepon']."</td>";
                echo "<td>". $user['username']."</td>";
                echo "<td>". $user['password']."</td>";
                echo "<td>". $user['email']."</td>";
                echo "<td>". $user['agama']."</td>";
                echo "<td>". $user['level']."</td>";
                echo "<td>";    
            echo "<a href='form-edit.php?id=".$user['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$user['id']."'>Hapus</a>";

            echo"</td>";

        
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p> Total: 
    <?php 
        echo mysqli_num_rows($query) 
    ?>
</body>
</html>