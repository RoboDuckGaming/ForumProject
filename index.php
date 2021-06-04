<?php
//check for error codes
$error=0;
if(isset($_GET['error']))
    $error = $_GET['error'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="#">
</head>
<body>
<div id="frm">
    <form action="inlogProcess.php" method="post">
        <p>
            <label>Username:</label>
        <input type="text" id="user" name="user"/>
        </p>
        <p>
        <label>Password:</label>
        <input type="password" id="pass" name="pass"/>
        </p>
        <p>
        <input type="submit" id="btn" value="Sign in" />
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