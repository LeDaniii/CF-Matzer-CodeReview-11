<!-- ############### Dumping Area ############### -->

http: //localhost/projects/CF-CR11/phpRegistrationPages/register.php


<div class="py-2">
    <?php inputElement("", "Id", "pet_id", "$media", "")?>
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