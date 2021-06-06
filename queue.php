<?php 
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
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
            <h2>Rakhe</h2>
            <h6>G6418018</h6>
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
        </div>
    </div>
</body>
</html>