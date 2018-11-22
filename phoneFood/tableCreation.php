<?php
    include("connection.php");

    $user = "CREATE TABLE user(
        userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(90) NOT NULL,
        password VARCHAR(30) NOT NULL,
        phonenumber VARCHAR(30) NOT NULL
    )";

    $menu = "CREATE TABLE menu(
        menuID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        foodname VARCHAR(30) NOT NULL,
        category VARCHAR(30) NOT NULL,
        price INT NOT NULL,
        food_description VARCHAR(90) NOT NULL
    )";

    $order = "CREATE TABLE order(
        orderID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        menuID INT UNSIGNED,
        userID INT UNSIGNED,
        FOREIGN KEY (userID) REFERENCES user(userID),
        FOREIGN KEY (menuID) REFERENCES menu(menuID)
    )";

    $createTable = array();

    array_push($createTable, $user, $menu, $order);

    for($i = 0; $i < count($createTable); $i++){
        if(mysqli_query($con, $createTable[$i]) === TRUE){
            echo("Table"+$i+" is created.");
        }
        else{
            echo("Error creating table"+$i+": " . mysqli_error($con));
            break;
        }
    }

    $username = 'admin';
    $fullname = 'admin';
    $email = 'admin@admin.com';
    $password = 'root';
    $phone = '2364623646';
    $insertAdmin = "insert into user (username, fullname, email, password, phonenumber) values ('$username', '$fullname', '$email', '$password', '$phone')";
    $admin = mysqli_query($con, $insertAdmin);
    if($admin === false){
        echo("Admin cannot be inserted ".$mysqli_error($con));
    }

    include('connectionclose.php');
?>