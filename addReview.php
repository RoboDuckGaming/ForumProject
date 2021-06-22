<?php
session_start();
$gameID = $_SESSION['gameID'];

$reviewTitle = $_POST['reviewTitle'];
$reviewText = $_POST['reviewText'];

$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");

$sql2 = ("SELECT reviewGameTitle FROM reviews WHERE gameID = '$gameID';");

$result = mysqli_query($connect, $sql2);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}

$sql = ("INSERT INTO reviews (reviewID, reviewText, reviewTitle, reviewGameID, reviewGameTitle)
         VALUES('', '$reviewText', '$reviewTitle' , '$gameID' , '' ");
$run = mysqli_query($connect,$sql) or die(mysqli_error($connect));

if($run){
    echo "gelukt";
} else {
    echo "niet gelukt;";
}