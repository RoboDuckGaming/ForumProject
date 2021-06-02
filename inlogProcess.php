<?php
// waarden ophalen uit het formulier in het bestand reserved.php
$username = $_POST['user'];
$password = $_POST['pass'];
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"reserveren");
// om mysql-injectie te voorkomen
$username = stripslashes($username);
$password = stripslashes($password);
$username  = mysqli_real_escape_string( $connect,$username);
$password = mysqli_real_escape_string($connect, $password);

// maak verbinding met de server en selecteer database


//query the database for user
$result = mysqli_query($connect,"select * from user where username = '$username' and password = '$password'");
    $row = mysqli_fetch_array ($result);
    if ($row['username'] == $username && $row['password'] == $password ){
    echo "login successful!!! Welcome ".$row['username'];
    } else {
    echo "failed to login!";
    }
    
    ?>
    
