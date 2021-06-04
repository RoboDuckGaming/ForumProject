<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");
//Database connection


$test = "SELECT * FROM games";
$result = mysqli_query($connect, $test);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<strong>" . $row['gameTitle'] . "</strong>, " .  $row['gameDescription'] . "<br> <br>";
    }
}else {
    echo "Something went wrong";
}
