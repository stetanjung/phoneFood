<?php
    session_start();
    include('connection.php');

    //required field names
    $required = array('menuName', 'category', 'price');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }
    //path to store the uploaded images
    $location= "images/";

    if($error){
        echo("<script>alert('Please fill the form that has (*)');window.location.href='addMenu.php';</script>");
    }
    else{
        $menuname = $_POST['menuName'];
        $category = $_POST['category'];
        $subCategory = (empty($_POST['subCategory']) ? null : $_POST['subCategory']);
        $price = $_POST['price'];
        $foodDesc = (empty($_POST['foodDesc']) ? null : $_POST['foodDesc']);
        $image = $_FILES['foodImage']['name'];
        $tmp_image = $_FILES['foodImage']['name'];
        $temp_image = $_FILES['foodImage']['tmp_name'];
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
            echo("<script>alert('The menu image must be in gif/png/jpg/jpeg extension.');window.location.href='addMenu.php';</script>");
        }

        $food = "select menuID from menu where foodname='$menuname'";
        $existFood = mysqli_fetch_array(mysqli_query($con, $food), MYSQLI_ASSOC);
        if($existFood == null){
            $insertFood = "insert into menu (foodname, category, subcategory, price, images, food_description, availability) values ('$menuname', '$category', '$subCategory', '$price', '$tmp_image', '$foodDesc', 'T')";
            mysqli_query($con, $insertFood);
            move_uploaded_file($temp_image, $location.$tmp_image);
        }
    }

    include("connectionclose.php");
    echo("<script>alert('Menu is successfully inputted.');window.location.href='addMenu.php';</script>");
?>