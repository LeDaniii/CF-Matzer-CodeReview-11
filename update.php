<?php

ob_start();
session_start();

require_once 'php/component.php';
require_once 'php/db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: register.php");
}

$con = createdb();

if ($_GET["id"]) {
    $id = $_GET["id"];

    $sql = "select * from pets where pet_id = $id";
    $result = mysqli_query($GLOBALS['con'], $sql);

    // $result = $GLOBALS['con']->query($sql) or die($GLOBALS['con']->error);
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
    <link rel="stylesheet" href="scss/style.css">
    <title>Title</title>
</head>

<body>
    <div class="container">
        <form class="col-8 m-auto bg-light p-3" action="php/a_update.php" method="POST">
            <h2>Edit Stuff!</h2>
            <input class="input-group py-2 my-2" type="hidden" name="pet_id" value="<?php echo $row['pet_id'] ?>">
            <h5>Name</h5>
            <input class="input-group py-2 my-2" type="" name="pet_name" value="<?php echo $row['pet_name'] ?>">
            <h5>Img</h5>
            <input class="input-group py-2 my-2" type="" name="pet_img" value="<?php echo $row['pet_img'] ?>">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text bg-success" for="inputGroupSelect01">Size</label>
                </div>
                <select class="custom-select" name="pet_size" id="">
                    <option selected>Choose!</option>
                    <option value="1">Large</option>
                    <option value="2">Medium</option>
                    <option value="3">Small</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text bg-success" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" name="pet_species" id="">
                    <option selected>Choose!</option>
                    <option value="1">Fish</option>
                    <option value="2">Dog</option>
                    <option value="3">Cat</option>
                    <option value="4">Rodent</option>
                    <option value="5">Horse</option>
                    <option value="6">Bird</option>
                    <option value="7">Reptile</option>
                </select>
            </div>
            <h5>Animal</h5>
            <input class="input-group py-2 my-2" type="text" name="pet_animal" value="<?php echo $row['pet_animal'] ?>">
            <h5>Age</h5>
            <input class="input-group py-2 my-2" type="text" name="pet_age" value="<?php echo $row['pet_age'] ?>">
            <h5>Location</h5>
            <input class="input-group py-2 my-2" type="text" name="pet_location"
                value="<?php echo $row['pet_location'] ?>">
            <h5>Price</h5>
            <input class="input-group py-2 my-2" type="text" name="pet_price" value="<?php echo $row['pet_price'] ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-success">Description</span>
                </div>
            </div>
            <textarea class="form-control" aria-label="With textarea" name=" pet_description" value="<?php echo $row['pet_description'] ?>
            "></textarea>
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