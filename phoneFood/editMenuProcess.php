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
    };

    if($error){
        echo("<script>alert('Please fill the form that has (*)');window.location.href='editMenu.php?menuID=$menuID';</script>");
    }
    else{
        $menuID = $_POST['menuID'];
        $menuname = $_POST['menuName'];
        $category = $_POST['category'];
        $subCategory = (empty($_POST['subCategory']) ? null : $_POST['subCategory']);
        $price = $_POST['price'];
        $foodDesc = (empty($_POST['foodDesc']) ? null : $_POST['foodDesc']);
        $avail = ($_POST['avail'] == 'true' ? 'T' : 'F');
        $updateFood = "update menu set foodName='$menuname', category='$category', subcategory='$subCategory', price='$price', food_description='$foodDesc', availability='$avail' where menuID=$menuID";
        mysqli_query($con, $updateFood);
    }

    include("connectionclose.php");
    echo("<script>alert('Menu is successfully updated.');window.location.href='editMenu.php?menuID=$menuID';</script>");
?>