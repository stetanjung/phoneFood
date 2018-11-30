<?php
    include('connection.php');
    session_start();

    //required field names
    $required = array('username', 'password');
    //go through each field names, make sure each one exists and not empty;
    $error = false;
    foreach($required as $field){
        if(empty($_POST[$field])){
            $error = true;
        }
    }
    if($error){
        echo("<script>alert('All fields are required.');window.location.href='login.php';</script>");
    }
    else{
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result=mysqli_query($con,"SELECT userID FROM user WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result) == 0) {
            echo("<script>alert('User is not exist.');window.location.href='login.php';</script>");
        }
        else{
            $array=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($array['userID'] == '1'){
                $_SESSION['userID']=$array['userID'];
                echo("<script>window.location.href=' admin.php'</script>");            
            }
            $_SESSION['userID']=$array['userID'];
        }
    }

    echo("<script>window.location.href=' index.php'</script>");
    include('connectionclose.php');
?>