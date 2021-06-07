<?php  

require 'functions.php';


$query2 = "UPDATE  DOKTER set buka='1' where id_dokter=1";
mysqli_query($conn,$query2);

header('Location: dokter.php');

?>