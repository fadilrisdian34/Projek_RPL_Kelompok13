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
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="chat.php">Chat Konsultasi</a></li>
            <li><a href="queue.php">Pesan Antrian</a></li>
        </ul>
    </div>
    <div class="main-menu">
        <div class="queue-info">
            <h1>Antrian Saat Ini</h1>
          
            <label for="keterangan" class="keterangan">Nomor Antrian Anda: <?php print GetNoAntri($conn,$id_user)?> </label>
            <label style="margin-top:310px;margin-left:20px;font-size:10px">Waktu Sekarang       :  </label>
            <label id="runningTime" style="margin-top:310px;margin-left:125px;font-size:10px"> </label>
            <label style="margin-top:330px;margin-left:20px;font-size:10px">Antrian Selanjutnya : <?php getSelanjutnya($conn)?></label>
            <div id="currentAntrian"></div>
        </div>
       
        <div class="chat-konsul">
            <button class="chat-konsul-btn" onclick="location.href='chat.php'">
                    
                    <label for="chat-konsul-label">Chat Konsultasi</label>
            </button>
        </div>
        <div class="pesan-antrian">
            <button class="pesan-antrian-btn" onclick="location.href='queue.php'">
                
                <label for="pesan-antrian-label">Pesan Antrian</label>
            </button>
        </div>
        <?php if(isset($_SESSION['dalam_antrian']))
                if($_SESSION['dalam_antrian']==1)
        { ?>
        <div class="batal">
            <button class="batal-btn" onclick="confirmAction()">
                <label >Batalkan Antrian</label>
            </button>
        </div>

        <?php } ?>
    </div>
</body>
</html>