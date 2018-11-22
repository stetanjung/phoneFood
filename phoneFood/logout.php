<?php
    session_start();
    unset($_SESSION['users_id']);
    if(!isset($_SESSION['users_id'])){
        session_destroy();
        header( "Location: /comp2121/assignment2/phoneFood" );
    }
?>