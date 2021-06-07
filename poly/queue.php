<?php 
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

else{
    require 'functions.php';
    $id_user = $_SESSION["id_user"];
    $datenow = getTime();
    var_dump($datenow);
    
    
  
    
        
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
   

    
    if($_SESSION['dalam_antrian']==1)
        {
            header('Location: dashboard.php');
        }

    if(isset($_POST["bpjs"], $_POST["nama-antre"], $_POST["nim-antre"], $_POST["needs"], $_POST["date"]))
        {
            $no = $_POST["bpjs"];
            $nama = $_POST['nama-antre'];
            $nim  = $_POST['nim-antre'];
            $needs = $_POST['needs'];
            $date =  $_POST['date'];
            
            
            $querynourut = "SELECT urut_antrian FROM antrian where tanggal ='$date' order by urut_antrian desc limit 1;";
                $query1nourut = mysqli_query($conn,$querynourut);
                    $query2nourut = mysqli_fetch_assoc($query1nourut);
                        if(mysqli_num_rows($query1nourut)==0)
                            {
                                $nourut = 1;
                                
                            }
                        else
                            {
                                $nourut = $query2nourut["urut_antrian"];
                                $nourut = $nourut + 1;
                            }

                          
            $query = " INSERT into antrian (id_user,no_rm_bpjs_kis,nama,nim,keperluan,tanggal,urut_antrian,waktu_daftar) VALUES ('$id_user','$no','$nama','$nim','$needs','$date','$nourut','$datenow') ";
            $update = " UPDATE user SET dalam_antrian ='1' WHERE id_user ='$id_user' ";
            

            $_SESSION['dalam_antrian'] = 1;

            mysqli_query($conn,$query);
            mysqli_query($conn, $update);
            header('Location: dashboard.php');

        }
    function SubmitAntrian()
    {
       
    }

}

?>
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
            Appointment
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

    <!-- Main Menu -->
    
    <div class="main-menu">
        <div class="antrian-container">
            <form action="" method="POST">
                <div class="bpjs">
                    <label for="bpjs">Nomor RM / BPJS / KIS</label>
                    <input type="text" name="bpjs" required>
                </div>
                <div class="nama-antrian">
                    <label for="nama-antre">Nama</label>
                    <input type="text" name="nama-antre" required>
                </div>
                <div class="nim-antrian">
                    <label for="nim-antre">NIM</label>
                    <input type="text" name="nim-antre" required>
                </div>
                <div class="keperluan">
                    <label for="needs">Keperluan</label>
                    <input type="text" name="needs" required>
                </div>
                <div class="tanggal">
                    <label for="date">Pilih Tanggal</label>
                    <input type="date" name="date" required>
                </div>
            <button type="submit" class="submit-antrian">SUBMIT</button>
            </form>
        </div>
    </div>
</body>
</html>