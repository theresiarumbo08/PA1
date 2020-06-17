<?php
 include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


 
<div class="col-md-10 p-5 pt-2">
<div class="card">
	<div class="card-header">
	Registrasi Akun	
	</div>
	<div class="card-body">
	<form action="proses-pendaftaran.php" method="POST">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Nama Depan</label>
				<div class="col-sm-10">
					<input type="text" name="nama_depan" placeholder="" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Nama Belakang</label>
				<div class="col-sm-10">
					<input type="text" name="nama_belakang" placeholder="" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Tanggal lahir</label>
				<div class="col-sm-10">
				<input type="text" class="form-input" name="tanggal_lahir" id="tanggal_lahir" placeholder="DD-MM-YYYY" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Jenis Kelamin</label>
				<div class="col-sm-10">
				<input type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" checked="checked" />
                        <label for="laki-laki">Laki-laki</label>
	
    	                <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" />
                        <label for="perempuan">Perempuan</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">No Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="no_telepon" class="form-control">
				</div>
			</div>

			<div class="input-group">
                            <label class="agama">Agama </label>
							<br>
                            <div class="rs-select2 js-select-simple select--no-search">
							<br>
								<select name="agama">
						
                                    <option disabled="disabled" selected="selected">Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Buddha</option>
                                    <option>Hindu</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

						<div class="input-group">
                            <label class="agama">Level </label>
							<br>
                            <div class="rs-select2 js-select-simple select--no-search">
							<br>
								<select name="level">
						
                                    <option disabled="disabled" selected="selected">level</option>
                                    <option>Dosen</option>
                                    <option>mahasiswa</option>

                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>


			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" placeholder="" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label text-left">Username</label>
				<div class="col-sm-10">
					<input type="text" name="username" placeholder="" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label  class="col-sm-4 col-form-label text-left" for="password">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-input" name="password" id="password"/>
				</div>
			</div>

			<button class="btn btn-primary float-right" name="daftar">
				<i class="fas fa-save"></i>
				Daftar
			</button>
		</form>
	</div>
</div>

</body>
</html>
