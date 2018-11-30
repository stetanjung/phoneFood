<?php
    // $SERVERNAME = "mysql.comp.polyu.edu.hk";
    // $USERNAME = "16094653d";
    // $PASSWORD = "mbnjwyhb";
    // $SCHEMA = "16094653d";

    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $SCHEMA = "phoneFood";
 
    $con = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $SCHEMA);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
        echo("Please contact the admin");
    }
?>