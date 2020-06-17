<?php
session_start();
require_once "functions.php";
echo $_GET['stat'];
UpdateRequest($_GET['id'], $_GET['stat']);
header('location: ../dashboard_jadwal.php');
?>