<?php
session_start();

//connectie met database
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");

// username en wachtwoord ophalen uit het formulier in het bestand login.php
$username = $_POST['user'];
$password = $_POST['pass'];

// controle op lege velden

 if($username == "" && $password ==""){
     header("Location: login.php?error=1");
     die();
 }elseif($username == "") {
     header("Location: login.php?error=2");
     die();
 }elseif($password == ""){
     header("Location: login.php?error=3");
     die();
 }
// om sql injecties te voorkomen

$username = stripslashes($username);
$password = stripslashes($password);
$username  = mysqli_real_escape_string($connect,$username);
$password = mysqli_real_escape_string($connect, $password);




//Database bevragen
$result = mysqli_query($connect,"select * from users where userName = '$username' and userPassword = '$password'");

$row = mysqli_fetch_array ($result);

    if ($row['userName'] == $username && $row['userPassword'] == $password ){
        $_SESSION["status"] = "actief";
        $_SESSION["username"] = $username;
    header("location: index.php");
    }elseif($row['userName'] != $username || $row['userPassword'] != $password){
        header("location: login.php?error=4");
        die();
    }
    else {
        echo "something went wrong, please try again";
   }