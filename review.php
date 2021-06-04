<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review</title>
</head>
<body>

<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");

$gameID = $_GET['gameID'];
$sql = "SELECT * FROM reviews WHERE reviewGameID = '$gameID';";

$result = mysqli_query($connect, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<strong>" . $row['reviewTitle'] . "</strong><br>";
        echo $row['reviewText'];
        echo "<hr><br>";
    }
}else {
    echo "Something went wrong";
}
?>
</body>
</html>
