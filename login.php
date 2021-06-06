<?php 
session_start();
require 'functions.php';

if(isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST["login"]) > 0) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    //username check
    if (mysqli_num_rows($result) === 1) { //mysqli_num_rows is for checking the available return data, 1 means there is inputed username in db
        //password check
        $row = mysqli_fetch_assoc($result); // take one data (inputed uname) from db
        if(password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            header("Location: dashboard.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poly.</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="assets/ipb-logo.png">
</head>
<body>
    <div class="container">
        <div class="login-left-side">
            <img src="./assets/ipb-logo.png" alt="ipb-logo">
            <div class="marks">
                <h1>POLY</h1>
                <h5>Clinic For IPB University</h5>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-title">
                <h2>Login</h2>
                <hr class="solid">
            </div>
            <div class="login-fill">
                <form action="" method="POST">
                    <div class="uname">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"required>
                    </div>
                    <div class="pass">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"required>
                    </div>
                    <?php if(isset($error)) :?>
                        <div class="wrong-login-data">
                            <p>Username / Password is Incorrect</p>
                        </div>
                    <?php endif ?>                
                    <button type="submit" name="login">LOGIN</button>
                </form>
            <div class="new-user">
                <label for="new-here" class="new-here">New Here?</label>
                <a href="regist.php">Create Account</a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>