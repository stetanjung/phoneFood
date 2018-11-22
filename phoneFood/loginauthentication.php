<?php
    include('connection.php');
    session_start();
    $_SESSION['usersID'] = 'xxx';

    echo("<script>window.location.href=' /comp2121/assignment2/phoneFood'</script>");
    include('connectionclose.php');
?>