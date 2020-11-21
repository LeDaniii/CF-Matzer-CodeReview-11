<?php
function inputElement($icon, $placeholder, $name, $value, $display)
{
    $element = "
        <div class=\"input-group\" style=\"display: $display \">
        <div class=\"input-group-prepend\">
        <div class=\"input-group-text bg-success\">$icon</div>
        </div>
        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\">
        </div>
        ";
    echo $element;
}

// Buttons
function buttonElement($btnid, $styleclass, $text, $name, $attr)
{
    $btn = "
<button name = '$name' '$attr' class='$styleclass' id='$btnid'>$text</button>";
    echo $btn;
}

// ########### Cards ###########
// ----------- User Card -----------

function cardElement($name, $img, $size, $animal, $age, $description, $location, $price, $id)
{
    $card = "   <div class=\"col-5 bg-dark py-4 my-2 row\">
                <div class=\"col-6 my-auto\">
                    <img class=\"img-fluid \" src=\"$img\" alt=\"\">
                </div>
                <div class=\"col-6\">
                    <ul class=\"list-group bg-dark\">
                        <li class=\"list-group-item\">
                            <h1>$name</h1>
                        </li>
                        <li class=\"list-group-item\" style=\"display:none;\">$id</li>
                        <li class=\"list-group-item\">$animal</li>
                        <li class=\"list-group-item\">$size</li>
                        <li class=\"list-group-item\">Age: $age</li>
                        <li class=\"list-group-item\">$description</li>
                        <li class=\"list-group-item\">Location: $location</li>
                        <li class=\"list-group-item\">Price: $price €</li>
                    </ul>
                </div>
            </div>
    ";
    echo $card;
}

// ----------- Admin Card -----------
function cardElementAdmin($name, $img, $size, $animal, $age, $description, $location, $price, $id)
{
    $card = "   <div class=\"col-5 bg-dark py-4 my-2 row\">
                <div class=\"col-6 my-auto\">
                    <img class=\"img-fluid \" src=\"$img\" alt=\"\">
                </div>
                <div class=\"col-6\">
                    <ul class=\"list-group bg-dark\">
                        <li class=\"list-group-item\">
                            <h1>$name</h1>
                        </li>
                        <li class=\"list-group-item\" >ID: $id</li>
                        <li class=\"list-group-item\">$animal</li>
                        <li class=\"list-group-item\">$size</li>
                        <li class=\"list-group-item\">Age: $age</li>
                        <li class=\"list-group-item\">$description</li>
                        <li class=\"list-group-item\">Location: $location</li>
                        <li class=\"list-group-item\">Price: $price €</li>
                        <li class=\"list-group-item\"><a href=\"update.php?id=$id\" class=\"btn btn-secondary col-12\" role=\"button\" aria-pressed=\"true\">Edit</a></li>
                        <li class=\"list-group-item\"><a href=\"delete.php?id=$id\" class=\"btn btn-danger col-12\" role=\"button\" aria-pressed=\"true\">Delete</a></li>
                    </ul>
                </div>
            </div>
    ";
    echo $card;
}