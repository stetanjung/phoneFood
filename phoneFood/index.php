<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Homepage</title>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/comp2121/assignment2/phoneFood">Phone Food</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/comp2121/assignment2/phoneFood">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Drink</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <?php
                    if(!isset($_SESSION['users_id'])){
                        #code
                        echo('<li><a href="/comp2121/assignment2/phoneFood/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>');
                        echo('<li><a href="/comp2121/assignment2/phoneFood/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>');
                    }
                    else{
                        echo('<li><a href="/comp2121/assignment2/phoneFood/profiles.php"><span class="glyphicon glyphicon-user"></span> Profiles</a></li>');
                        echo('<li><a href="/comp2121/assignment2/phoneFood/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>');
                    }
                ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>My First Bootstrap Page</h1>
        <p>This is some text.</p>
    </div>

    <script>
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeOut(200);
        });
    </script>
</body>

</html>