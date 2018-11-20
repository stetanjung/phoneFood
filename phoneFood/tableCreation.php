<?php
    include("connection.php");

    $user = "CREATE TABLE user (
        userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(90) NOT NULL,

    )";

    $menu = "CREATE TABLE menu(
        menuID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        foodname VARCHAR(30) NOT NULL,
        category VARCHAR(30) NOT NULL,
        price INT NOT NULL,
        food_description VARCHAR(90) NOT NULL,

    )";

    $order = "CREATE TABLE order(
        orderID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        menuID INT UNSIGNED, 
    )";

    $createTable = array();

    array_push($createTable, "hello world");

    for($i = 0; $i < count($createTable); $i++){
        if(mysqli_query($con, $createTable[$i]) === TRUE){
            echo("Table"+$i+" is created.");
        }
        else{
            echo("Error creating table"+$i+": " . mysqli_error($con));
            break;
        }
    }
?>