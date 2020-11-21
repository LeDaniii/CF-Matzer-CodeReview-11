<?php

require_once 'php/component.php';
require_once 'php/db.php';
$con = createdb();

if ($_GET["id"]) {
    $id = $_GET["id"];

    $sql = "select * from pets where pet_id = $id";
    $result = mysqli_query($GLOBALS['con'], $sql);

    $result = $GLOBALS['con']->query($sql) or die($GLOBALS['con']->error);
    // ^^^^^that one is awesome^^^^^^
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <div class="container">
        <form class="col-8 m-auto bg-light p-3" action="php/a_update.php" method="POST">
            <h2>Edit Stuff!</h2>
            <input class="input-group py-2 my-2" type="hidden" name="id" value="<?php echo $row['pet_id'] ?>">
            <h5>Name</h5>
            <input class="input-group py-2 my-2" type="" name="name" value="<?php echo $row['pet_name'] ?>">
            <h5>Img</h5>
            <input class="input-group py-2 my-2" type="" name="img" value="<?php echo $row['pet_img'] ?>">
            <h5>Title</h5>
            <input class="input-group py-2 my-2" type="text" name="isbn" value="<?php echo $row['media_isbn'] ?>">
            <h5>Title</h5>
            <input class="input-group py-2 my-2" type="text" name="description"
                value="<?php echo $row['media_description'] ?>">
            <h5>Title</h5>
            <input class="input-group py-2 my-2" type="text" name="publish_date"
                value="<?php echo $row['media_publish_date'] ?>">
            <h5>Title</h5>
            <input class="input-group py-2 my-2" type="text" name="type" value="<?php echo $row['media_type'] ?>">
            <h5>Title</h5>
            <input class="input-group py-2 my-2" type="text" name="available"
                value="<?php echo $row['media_available'] ?>">
            <button type="submit" class="btn btn-warning">Last Chance to think about!</button>
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true">Go Back</a>
        </form>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>