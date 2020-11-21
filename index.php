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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <button type="button" class="btn btn-success offset-10 my-2" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@getbootstrap"><i class="fas fa-plus-square"></i> Add New Pets</button>


    <form class="fixed-bottom" action="" method="post">
        <a href="logout.php?logout" class="btn btn-danger btn-lg active offset-10 my-5  text-white" role="button"
            aria-pressed="true">Logout <i class="fas fa-sign-out-alt"></i></a>
        <?php buttonElement("btn-read", "btn btn-primary offset-10 mb-2", "<i class='fas fa-sync'></i> Load", "read", "dat-toggle='tooltip' data-placement='bottom' title='read'")?>
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title " id="exampleModalLabel">Add only really big dogs pls...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="py-2">
                            <?php inputElement("", "Id", "pet_id", "", "none")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement("<i class='fas fa-file-signature'></i>", "Name", "pet_name", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-camera"></i>', "Img", "pet_img", "", "")?>
                        </div>
                        <!-- <div class="py-2">
                            <?php inputElement('<i class="fas fa-expand-alt"></i>', "Size", "pet_size", "", "")?>
                        </div> -->
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
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-paw"></i>', "Animal", "pet_animal", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="far fa-heart"></i>', "Age", "pet_age", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-location-arrow"></i>', "Location", "pet_location", "", "")?>
                        </div>
                        <div class="py-2">
                            <?php inputElement('<i class="fas fa-tag"></i>', "Is there a price", "pet_price", "", "")?>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success">Description</span>
                            </div>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name=" pet_description"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i> Add Data", "create", "dat-toggle='tooltip' data-placement='bottom' title='create'")?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contrainer-fluid p-3">
        <div class="row d-flex justify-content-around">
            <?php

if (isset($_POST['read']) && (isset($_SESSION['user']))) {
    $result = getData();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo cardElement($row['pet_name'], $row['pet_img'], $row['pet_size'], $row['pet_animal'], $row['pet_age'], $row['pet_description'], $row['pet_location'], $row['pet_price'], ['pet_id']);
        }
    }
}

if (isset($_POST['read']) && (isset($_SESSION['admin']))) {
    $result = getData();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo cardElementAdmin($row['pet_name'], $row['pet_img'], $row['pet_size'], $row['pet_animal'], $row['pet_age'], $row['pet_description'], $row['pet_location'], $row['pet_price'], $row['pet_id']);
        }
    }
}

?>
            <!-- <div class="col-5 bg-dark py-4 row">
                <div class="col-6 my-auto">
                    <img class="img-fluid " src="https://i.insider.com/5ef39abd3f737017f94f3255?width=750&format=jpeg&auto=webp
                " alt="">
                </div>
                <div class="col-6">
                    <ul class="list-group bg-dark">
                        <li class="list-group-item">
                            <h1>Niko</h1>
                        </li>
                        <li class="list-group-item">Redriver</li>
                        <li class="list-group-item">Large</li>
                        <li class="list-group-item">Age: 12</li>
                        <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
                            magni perspiciatis accusamus beatae iure a aperiam eum possimus culpa numquam excepturi
                            laboriosam repellat natus eos atque, et, laborum impedit voluptates.</li>
                        <li class="list-group-item">Location: </li>
                        <li class="list-group-item">Price: 120 €</li>
                    </ul>
                </div>
            </div>
            <div class="col-5 bg-dark py-4 row">
                <div class="col-6">
                    <img class="img-fluid" src="https://i.insider.com/5ef39abd3f737017f94f3255?width=750&format=jpeg&auto=webp
                " alt="">
                </div>
                <div class="col-6">
                    <ul class="list-group bg-dark">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>