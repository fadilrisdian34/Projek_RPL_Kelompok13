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
        <div class="chat-2-container">
            <div class="chat-input">
                <input type="text" name="input-chat" id="input-chat" placeholder="Enter Message">
                <button id="submit">Send</button>
            </div>
            <div class="my-chat">
                <img src="./assets/ipb-logo.png" alt="photo-student">
                <p>Hi! Sadly it's still dummy feature :(</p>
            </div>
            <div class="doc-chat">
                <img src="./assets/doctor-icon-1.png" alt="photo-doc">
                <p>Ok, no problem.</p>
            </div>
        </div>
        <div class="chat-2-side">
            <img src="./assets/doctor-icon-1.png" alt="doc-1-side-photo">
            <h1>Dr Kim</h1>
            <p>Dokter Umum</p>
            <button class="end-chat">Akhiri Konsultasi</button>
        </div>
    </div>
</body>
</html>