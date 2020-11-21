<?php

require_once "db.php";
require_once "component.php";

$con = createdb();

// Textfield For User Interaction
function textNode($classname, $msg)
{
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

// Button Calls
// button create Data
if (isset($_POST['create'])) {
    // echo "Hello";
    createData();
}

// Check TextBox
function textboxValue($value)
{
    $textbox = mysqli_real_escape_string($GLOBALS['con'], $_POST[$value]);
    if (empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}

// ########## Insert Data to DataBase Start ##########

// Insert Data in SQL
function createData()
{
    $petName = textboxValue('pet_name');
    $petImg = textboxValue('pet_img');
    $petSize = textboxValue('pet_size');
    $petSpecies = textboxValue('pet_species');
    $petAnimal = textboxValue('pet_animal');
    $petAge = textboxValue('pet_age');
    $petLocation = textboxValue('pet_location');
    $petPrice = textboxValue('pet_price');
    $petDescription = textboxValue('pet_description');

    if ($petName && $petImg && $petSize && $petSpecies && $petAnimal && $petAge && $petLocation && $petPrice && $petDescription) {
        $sql = "INSERT INTO `pets`(`pet_img`, `pet_size`, `pet_name`, `pet_animal`, `pet_species`, `pet_age`, `pet_description`, `pet_location`, `pet_price`) VALUES ('$petImg','$petSize','$petName','$petAnimal','$petSpecies','$petAge','$petDescription','$petLocation','$petPrice')";

        if (mysqli_query($GLOBALS['con'], $sql)) {
            textNode("success", "Successfully inserted!");
        } else {
            textNode("error", "Something went wrong... Call the Police! Error: " . mysqli_error($GLOBALS['con']));
        }
    } else {
        textNode("error", "Fill the text box!");
    }
}
// ########## Insert Data to DataBase End ##########

// ########## Get Data from DataBase Start ##########

function getData()
{
    $sql = "select * from pets";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

// ########## Get Data from DataBase End ##########