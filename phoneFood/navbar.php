<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
<link rel="stylesheet" href="css/glyphicon.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- navigation bar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Phone Food</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Menu </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="food.php">Food</a>
                <a class="dropdown-item" href="drink.php">Drink</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php
            if(!isset($_SESSION['userID'])){
                #code
                echo('<li class="nav-item"><a href="signup.php" class="nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>');
                echo('<li class="nav-item"><a href="login.php" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>');
            }
            else{
                echo('<li class="nav-item"><a href="logout.php" class="nav-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>');
                echo('<li class="nav-item"><a href="checkout.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>');
            }
        ?>
    </ul>
</nav>
<script>
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeIn(200);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(10).fadeOut(200);
    });
</script>