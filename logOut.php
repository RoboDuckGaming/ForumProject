<?php
session_start();

$_SESSION['status'] = null;
$_SESSION['username'] = null;

header("location: index.php");