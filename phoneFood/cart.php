<?php
    session_start();
    
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $_GET['menuID']);
    echo("<script>alert('Your menu is added to the cart.');history.back();</script>");
?>