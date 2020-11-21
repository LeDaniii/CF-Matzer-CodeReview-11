<?php

require_once 'db.php';
$con = createdb();

if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST["title"];
    $img = $_POST["img"];
    $isbn = $_POST["isbn"];
    $description = $_POST["description"];
    $publish_date = $_POST["publish_date"];
    $type = $_POST["type"];
    $available = $_POST["available"];

    $sql = "UPDATE `media` SET `media_id`='$id',`media_title`='$title',`media_img`='$img', `media_isbn`='$isbn', `media_description`='$description', `media_publish_date`='$publish_date', `media_type`='$type', `media_available`='$available' WHERE media_id = '$id'";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        echo "success <br> <a href='../index.php'>Back to Home</a>";
    } else {
        echo "error" . mysqli_error($GLOBALS['con']);
    }
}