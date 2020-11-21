<?php
createdb();

function createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cr11_matzer_petadoption";

    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    // check Connection
    if (!$con) {
        die("Connection Failed:" . mysqli_connect_error());
    }

    // create database
    $sql = "create database if not exists $dbname";

    // create tables

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "
            create table if not exists users(
            userId int auto_increment primary key,
            userName varchar(50),
            userEmail varchar(50),
            userPassword varchar(200),
            userType enum('admin', 'user'))
            ";

        if (mysqli_query($con, $sql)) {
            // echo "users created";
            // return $con;
        } else {
            echo "cannnot create table users!" . mysqli_error($con);
        }
    }

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "
        create table if not exists pets(
            pet_id int auto_increment primary key,
            pet_img varchar(150),
            pet_size enum('Large', 'Medium', 'Small'),
            pet_name varchar(30),
            pet_animal varchar(200),
            pet_species enum('Fish', 'Dog', 'Cat', 'Rodent', 'Horse', 'Bird', 'Reptile'),
            pet_age int,
            pet_description varchar(500),
            pet_location varchar(200),
            pet_price float
            )
    ";

        if (mysqli_query($con, $sql)) {
            // echo "pets created";
            return $con;
        } else {
            echo "cannnot create table pets!" . mysqli_error($con);
        }

    }

}