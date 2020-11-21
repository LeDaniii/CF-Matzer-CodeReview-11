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
    <div class="container my-5 text-center">
        <?php

require_once 'php/db.php';
$con = createdb();

if ($_GET["id"]) {
    $id = $_GET['id'];
    echo $id;

    $sql = "delete from pets where pet_id = $id";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        echo "<h3>deleted successfully</h3> <br>  <a href=\"index.php\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">Back to Homepage</a>";
    } else {
        echo "error" . mysqli_error($GLOBALS['con']);
    }
}
?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>