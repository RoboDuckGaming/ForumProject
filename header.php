<?php
?>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="headerstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">RocketDuckGaming</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <?php
                if(!isset($_SESSION["username"]) && $_SESSION["status"]!="actief"){
                    $_SESSION["username"] = null;
                    $_SESSION["status"] = null;
                ?>
                <li class="nav-item">
                    <a class="nav-link .ms-auto" href="login.php">Log in</a>
                </li>
                <?php
                }elseif((isset($_SESSION["username"]) && $_SESSION["status"]="actief")){
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="logOut.php">Log out</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
