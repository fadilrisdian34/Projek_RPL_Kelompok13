<?php 
session_start();
require 'functions.php';
require 'antrian.php';

if(!isset($_SESSION["login"]))
     {
        header("Location: login.php");
        exit;
    }

    else
    {
        
        $username = $_SESSION["username"];
        $id_user  = $_SESSION["id_user"];

       

        function GetNama($username)
        {
            print $username;
        }

    function GetID($id)
        {
            print $id;
        }
   

    }


        
    
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 


<script>
      // The function below will start the confirmation dialog
      function confirmAction() {
        let confirmAction = confirm("Apakah anda ingin benar membatalkan antrian?");
        if (confirmAction) {
          alert("Sukses");
          window.location.href = "batal.php?id_user="+<?php print $id_user?>;
        } else {
          alert("Baik");
        }
      }
    </script>


 
        <script type="text/javascript">
                $(document).ready(function() {
                setInterval(runningTime, 1000);
                });
                function runningTime() {
                $.ajax({
                    url: 'time.php',
                    success: function(data) {
                    $('#runningTime').html(data);
                    },
                });
                }
        </script>

    <script type="text/javascript">
                $(document).ready(function() {
                setInterval(currentAntrian, 1000);
                });
                function currentAntrian() {
                $.ajax({
                    url: 'antrian.php',
                    success: function(data) {
                    $('#currentAntrian').html(data);
                    },
                });
                }
        </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="assets/ipb-logo.png">
    <title>Poly.</title>
</head>
<body>
   
    <div class="top-left">
        <img src="./assets/ipb-logo.png" alt="ipb-logo">
        <p class="title">
            POLY
        </p>
        <p class="define">
            Clinic For IPB University
            
        </p>
        
    </div>
    <div class="top-right">
        <p class="page-title">
            Dashboard
        </p>
        <div class="logout-button">
            <a href="logout.php"> 
                <b> Logout </b>
            </a>
        </div>
    </div>
    <div class="horizontal-menu">
        <img src="./assets/ipb-logo.png" alt="profile">
        <div class="nama">
            <h2><?php getNama($username) ?></h2>
            <h6><?php getID($id_user) ?></h6>
        </div>
        <ul>
           
            <li><a href="dokter.php">Lihat Antrian</a></li>
            <li><a href="buka.php">Buka Antrian</a></li>
        </ul>
    </div>


    <?php      $query = mysqli_query($conn,"select * from antrian");
     if(mysqli_num_rows($query)==0) 
     echo "Belum Ada Antrean"  ;
     else { ?>
    <div style="margin-top:300px;margin-left:300px">
        <table style=" padding: 15px;">
            <tr style="background-color: #04AA6D;
                color: white;">
                <th>
                    Nama
                </th>
                <th>
                    Nim
                </th>
                <th>
                    Keperluan
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    Urut Antrian
                </th>
            </tr>
            
                
                <?php 
                $query = mysqli_query($conn,"select * from antrian");
                    while($data=mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                    <td>
                                        <?php echo $data['nama'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nim'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['keperluan']?>
                                    </td>
                                    <td>
                                        <?php echo $data['tanggal']?>
                                    </td>
                                    <td>
                                        <?php echo $data['urut_antrian']?>
                                    </td>
                            </tr>
                            <?php
                        }
                ?>
            
        </table>
    </div>

                    <?php } ?>
</body>
</html>