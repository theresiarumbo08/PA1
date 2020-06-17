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

    <title>ADMIN</title>
  </head>
  <body>
  

        <nav class="navbar  navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang<i class="fas  mr-5">....    </i> <b>Web Information</b> </a>
        

        <div class="icon ml-10">
            <h5>  
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="surat masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifikasi"></i>
                <a href="../logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out">Log Out</i></a>
            </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-4 mb-5 ">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_utama.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Dosen</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_jadwal.php"><i class="fas fa-calendar-alt mr-2"></i>Janji Temu</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard_list_meeting.php"><i class="far fa-list-alt mr-2"></i>Input Jadwal</a><hr class=bg-secondary>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="detailJadwal.php"><i class="far fa-list-alt mr-2"></i>Lihat Jadwal</a><hr class=bg-secondary>
              </li>
              
            </ul>
        </div>