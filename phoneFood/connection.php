<?php
    $SERVERNAME = "mysql.comp.polyu.edu.hk";
    $USERNAME = "16094653d";
    $PASSWORD = "bkatnpka";
    $SCHEMA = "16094653d";
 
    $con = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $SCHEMA);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
        echo("Please contact the admin");
    }
?>