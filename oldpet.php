<?php

ob_start();
session_start();
require_once "./php/db_connect.php";
require_once "./php/component.php";
require_once "./php/operation.php";

// if session is not set this will redirect to login page

if (!isset($_SESSION['user']) && (!isset($_SESSION['admin']))) {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>