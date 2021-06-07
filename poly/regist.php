<?php 
require 'functions.php';

if ( isset($_POST["sign-up"]) ) {
    if (register($_POST) > 0 ) {
        echo "<script>
            alert('Sign Up Success');
            window.location = 'login.php';
        </script>";
        
    }
    else {
        echo mysqli_error($conn);    
    }
    // header("Location: login.php");
}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Poly.</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="assets/ipb-logo.png">
    </head>
    <body>
        <div class="container">
            <div class="login-left-side">
                <img src="assets/ipb-logo.png" alt="ipb-logo">
                <div class="marks">
                    <h1>POLY</h1>
                    <h5>Clinic For IPB University</h5>
                </div>
            </div>
            <div class="login-right-side">
                <div class="create-account-title">
                    <h2>Create Account</h2>
                    <hr class="solid">
                </div>
                <div class="login-fill">
                    <form action="" method="post">
                        <div class="uname">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div>
                        <div class="pass">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>    
                        <div class="pass">
                            <label for="confpassword">Confirm Password</label>
                            <input type="password" name="confpassword" id="confpassword" required>
                        </div>                   
                        <button type="submit" name="sign-up">Sign Up</button>
                        <a href="login.php" style="display:block; margin-top: 15px; text-align: center; text-decoration: none; color: #0C0B8B">Back to Login</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>