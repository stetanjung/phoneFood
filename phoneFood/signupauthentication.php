<?php
    session_start();
    //required field names
    $required = array('fullname', 'username', 'email', 'phone', 'pass', 're_pass');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }

    if($error){
        echo("<script>alert('All fields are required.');window.location.href='/comp2121/assignment2/phoneFood/signup.php';</script>");
    }
    else{
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = ($_POST['pass'] == $_POST['re_pass'] ? $_POST['pass'] : false);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("<script>alert('Invalid email format');window.location.href='/comp2121/assignment2/phoneFood/signup.php';</script>");
        }
        if(!$password){
            echo("<script>alert('Password doesn't match');window.location.href='/comp2121/assignment2/phoneFood/signup.php';</script>");
        }
        echo($password);
        //header( "Location: /comp2121/assignment2/phoneFood" );
    }
?>