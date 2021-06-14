<?php
session_start();

if(!isset($_SESSION["username"]) && $_SESSION["status"]!="actief"){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: white;">

<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"rocketduckgaming");

$gameID = $_GET['gameID'];
$sql = "SELECT * FROM reviews WHERE reviewGameID = '$gameID';";

$result = mysqli_query($connect, $sql);
$resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }

   echo <<<plain
<table class="table table-dark table-secundary">
    <thead>
    <tr>
        <th scope="col">User ID</th>
        <th scope="col">Title</th>
        <th scope="col">Review</th>
    </tr>
    </thead>
    <tbody>
plain;


    foreach($data as $loopdata){
        $gameReviewID = $gameID;
        $userReviewID = $loopdata['userReviewID'];
        $reviewTitle = $loopdata['reviewTitle'];
        $reviewText = $loopdata['reviewText'];
        $username = $loopdata=['userName'];

       echo <<<invulling
        <tr>
        <th scope="row">$userReviewID</th>
        <td>$reviewTitle</td>
        <td>$reviewText</td>
        </tr>
        
        invulling;
    }

    echo <<<plain2
</tbody>
</table>
plain2;


?>

</body>
</html>
