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
        <div class="queue-info">
            <h1>Antrian Saat Ini:</h1>
            <label for="queue-num" class="queue-number">05</label>
            <label for="keterangan" class="keterangan">Nomor Antrian Anda:</label>
        </div>
        <div class="chat-konsul">
            <button class="chat-konsul-btn" onclick="location.href='chat.php'">
                    <img src="" alt="chat-konsul-icon">
                    <label for="chat-konsul-label">Chat Konsultasi</label>
            </button>
        </div>
        <div class="pesan-antrian">
            <button class="pesan-antrian-btn" onclick="location.href='queue.php'">
                <img src="" alt="pesan-antrian-icon">
                <label for="pesan-antrian-label">Pesan Antrian</label>
            </button>
        </div>
    </div>
</body>
</html>