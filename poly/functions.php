<?php 
// connect to database
$conn = mysqli_connect("localhost", "root", "", "poly");

// function for retrieve data from table

function getTime()
    {
        date_default_timezone_set("Asia/Jakarta");
           print  date("Y-m-d H:i:s");
          
    }

function returnTime()
    {
        date_default_timezone_set("Asia/Jakarta");
        return date("Y-m-d H:i:s");
    }

   


  

    
function returnDate()
{
    date_default_timezone_set("Asia/Jakarta");
    return date("Y-m-d");
}



    function GetNoAntri($conn,$id_user)
    {

    $querynourut = "SELECT urut_antrian FROM antrian where id_user ='$id_user' ";
    $query1nourut = mysqli_query($conn,$querynourut);
     $query2nourut = mysqli_fetch_assoc($query1nourut);
      $nourut = $query2nourut['urut_antrian'];
       
      if($nourut==NULL)
        {
           print  "Ambil No Antri";
        }
      return $nourut;

    }

    

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    }



function register($input) {
    global $conn;

    $username = strtolower(stripslashes($input["username"]));
    $password = mysqli_real_escape_string($conn, $input["password"]);
    $confirm = mysqli_real_escape_string($conn, $input["confpassword"]);

    // check if username has been existed or not
    $tobeChecked = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($tobeChecked)) {
        echo "<script>
            alert('Username already exist.');
        </script>";

        return false;
    }


    // confirm password similar
    if($password !== $confirm) {
        echo "<script>
                alert('Password is not match.');    
            </script>";
        return false;
    }

    // encrpyt user password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // send data to database
    mysqli_query($conn, "INSERT INTO user VALUES('', 
                        '$username', '$password',0)");

    return mysqli_affected_rows($conn);

}



?>