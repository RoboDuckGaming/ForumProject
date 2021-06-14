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
<table class="table table-dark table-secundary">
    <thead>
    <tr>
        <th scope="col">User</th>
        <th scope="col">Title</th>
        <th scope="col">Review</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
    </tr>
    </tbody>
</table>

</body>
</html>
