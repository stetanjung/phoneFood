<?php
    include('connection.php');
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
            echo("<script>alert('Invalid email format.');window.location.href='/comp2121/assignment2/phoneFood/signup.php';</script>");
        }
        else if(!$password){
            echo("<script>alert('Password does not match.');window.location.href='/comp2121/assignment2/phoneFood/signup.php';</script>");
        }
        $existUserQuery = "select userID from user where username = '$username'";
        $existUser = mysqli_fetch_array(mysqli_query($con, $existUserQuery), MYSQLI_ASSOC);

        if($existUser == null){
            $insertUser = "insert into user (username, fullname, email, password, phonenumber) values ('$username', '$fullname', '$email', '$password', '$phone')";
            mysqli_query($con, $insertUser);
        }
        include('connectionclose.php');
        echo("<script>alert('User is successfully created.');window.location.href=' /comp2121/assignment2/phoneFood'</script>");
    }
?>