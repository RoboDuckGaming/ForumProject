<?php
session_start();
include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="row">
    <?php
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect,"rocketduckgaming");
    //Database connection

    $sql = "SELECT * FROM games";
    $result = mysqli_query($connect, $sql);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }

    foreach($data as $loopdata) {
        $gameID = $loopdata['gameID'];
        $gameTitle = $loopdata['gameTitle'];
        $gameDescription = $loopdata['gameDescription'];
        $img = $loopdata['gamePic'];
        echo <<<MYTAG
    <div class="col-lg-3">
        <div class="card text-black bg-secondary mb-3" style="width: 18rem;  border: 2px;">
            <img style="height: 12rem; width: 18rem; align-items: center;" src="$img" class="card-img-top" alt="card picture" >
            <div class="card-body">
                <h5 class="card-title">$gameTitle</h5>
                <p class="card-text">$gameDescription</p>
                <a href="review.php?gameID=$gameID" class="btn btn-primary">Reviews</a>
            </div>
        </div>
    </div>
MYTAG;
    }
    ?>
</body>
</html>
