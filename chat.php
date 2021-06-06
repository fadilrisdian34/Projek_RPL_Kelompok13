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
            Chat Konsultasi
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
    <div class="main-menu">
        <div class="chat-page-container">
            <div class="dokter doc-one">
                <div class="fill-1">
                    <img src="./assets/doctor-icon-1.png" alt="doc-1">
                    <h3>Dr. Kim</h3>
                    <p>Dokter Umum</p>
                </div>
            </div>
            <div class="dokter doc-two">
                <div class="fill-2">
                    <img src="./assets/doctor-icon-2.png" alt="doc-2">
                    <h3>Dr. Joon</h3>
                    <p>Dokter Spesialis Gigi</p>
                </div>
            </div>
            <div class="dokter doc-three">
                <div class="fill-3">
                    <img src="./assets/doctor-icon-3.png" alt="doc-3">
                    <h3>Dr. Choi</h3>
                    <p>Dokter Spesialis Mata</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>