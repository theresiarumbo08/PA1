<?php
session_start();
require_once "function/functions.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

    <title>Dosen-IT DEL</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang Dosen<i class="fas fa-th-list mr-4"></i> <b>Web Information</b> </a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
         
          
        </form>

        <div class="icon ml-4">
            <h5>  
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="surat masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifikasi"></i>
		        <a href="#" data-toggle="tooltip" aria-haspopup="true" aria-expanded="false">
		          <?=$_SESSION['username']?>
		        </a>
	
                <a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a>

            </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5 ">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_dosen.php"><i class="fas fa-tachometer-alt mr-2"></i>Home</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="jadwal.php"><i class="fas fa-user-graduate mr-2"></i>Jadwal</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="input_jadwal.php"><i class="fas fa-calendar-alt mr-2"></i>Input Jadwal</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_jadwal.php"><i class="fas fa-calendar-alt mr-2"></i>Janji Temu</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_list_meeting.php"><i class="far fa-list-alt mr-2"></i>List Janji Temu</a>
              </li>
              
              
            </ul>
        </div>
