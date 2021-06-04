<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posts</title>
</head>
<body>

<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");
//Database connection

$sql = "SELECT * FROM games";
$result = mysqli_query($connect, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $gameID = $row['gameID'];
        echo "<strong>" . $row['gameTitle'] . "</strong>, ";
        echo $row['gameDescription'] . "<br>" . "<button onclick=window.location='review.php?gameID=$gameID'>Review</button>";
        echo "<hr> <br>";
    }
}else {
    echo "Something went wrong";
}
?>

</body>
</html>