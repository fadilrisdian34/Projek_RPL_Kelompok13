<?php 
session_start();
require 'functions.php';

$id_user = $_GET['id_user'];    
$date = returnDate();

$query = " select id_antrian from antrian where id_user='$id_user' and tanggal='$date'";
$data =  mysqli_fetch_array(mysqli_query($conn,$query));

$dataantrian = $data['id_antrian'];

$query = "Delete from antrian where id_antrian='$dataantrian'";
$query1 = "UPDATE antrian SET urut_antrian = urut_antrian-'1' WHERE tanggal = '$date'";


mysqli_query($conn,$query);
mysqli_query($conn,$query1);

$_SESSION['dalam_antrian']=0;

header("Location: dashboard.php");
?>