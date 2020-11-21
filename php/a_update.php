<?php

require_once 'db.php';
$con = createdb();

if ($_POST) {
    $id = $_POST['pet_id'];
    $name = $_POST["pet_name"];
    $img = $_POST["pet_img"];
    $size = $_POST["pet_size"];
    $species = $_POST["pet_species"];
    $animal = $_POST["pet_animal"];
    $age = $_POST["pet_age"];
    $location = $_POST["pet_location"];
    $price = $_POST["pet_price"];
    $description = $_POST["pet_description"];

    $sql = "UPDATE `pets` SET `pet_id`='$id',`pet_img`='$img',`pet_size`='$size',`pet_name`='$name',`pet_animal`='$animal',`pet_species`='$species',`pet_age`='$age',`pet_description`='$description',`pet_location`='$location',`pet_price`='$price'  WHERE pet_id = '$id'";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        echo "success <br> <a href='../index.php'>Back to Home</a>";
    } else {
        echo "error" . mysqli_error($GLOBALS['con']);
    }
}