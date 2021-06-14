<?php
session_start();
include_once ("header.php");
//check for error codes
$error=0;
if(isset($_GET['error']))
    $error = $_GET['error'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="img/background.png">

<div id="frm"
     style="
        position: absolute;
        top: 35%;
        left: 37%;
        color: white;
        text-align: center;
        box-sizing: content-box;
        width: 300px;
        height: 115px;
        border: 24px solid black;">

    <form action="inlogProcess.php" method="post" style="background: black;">
        <p>
            <label>Username:</label>
        <input type="text" id="user" name="user"/>
        </p>
        <p>
        <label>Password:</label>
        <input type="password" id="pass" name="pass"/>
        </p>
        <p>
        <input type="submit" id="btn" value="Sign in"/>
        <input href="..." type="submit" id="btn" value="Sign up"/>
        </p>
    </form>
</div>
<?php
if($error == 1){
    echo "Please enter your username and password";
}
elseif($error == 2){
    echo "Please enter your username";
}elseif($error == 3){
    echo "Please enter your password";
}elseif($error == 4){
    echo "Incorrect username or password.";
}
?>

</body>
</html>