<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Food</title>
</head>
<body>
    <?php
        require('adminnavbar.php');
        $food = "select * from menu where category='food'";
        $foodQuery = mysqli_query($con, $food);
    ?>
    <br>
    <div class="container">
        <h1>Food List</h1>
        <br>
        <a href="addMenu.php" class="btn btn-primary">Add Menu</a>
        <br><br><br>
        <?php
            $i = 0;
            while($row = mysqli_fetch_array($foodQuery, MYSQLI_ASSOC)){
                if ($i%4==0) {
                    echo('<div class="card-group">');
                    echo('<div class="card">');
                    echo('<img class="card-img-top" src="images/'.$row["images"].'" alt="Card image cap" height="160px" width="282px">');
                    echo('<div class="card-body">');
                    echo('<h5 class="card-title">'.$row["foodname"].'</h5>');
                    echo('<p class="card-text">'.$row["food_description"].'</p>');
                    echo('<a href="editMenu.php?menuID='.$row["menuID"].'" class="btn btn-primary">Edit Menu</a>');
                    echo('</div></div>');
                }
                elseif ($i%4 == 3) {
                    echo('<div class="card">');
                    echo('<img class="card-img-top" src="images/'.$row["images"].'" alt="Card image cap" height="160px" width="282px">');
                    echo('<div class="card-body">');
                    echo('<h5 class="card-title">'.$row["foodname"].'</h5>');
                    echo('<p class="card-text">'.$row["food_description"].'</p>');
                    echo('<a href="editMenu.php?menuID='.$row["menuID"].'" class="btn btn-primary">Edit Menu</a>');
                    echo('</div></div></div><br>');
                }
                else {
                    echo('<div class="card">');
                    echo('<img class="card-img-top" src="images/'.$row["images"].'" alt="Card image cap" height="160px" width="282px">');
                    echo('<div class="card-body">');
                    echo('<h5 class="card-title">'.$row["foodname"].'</h5>');
                    echo('<p class="card-text">'.$row["food_description"].'</p>');
                    echo('<a href="editMenu.php?menuID='.$row["menuID"].'" class="btn btn-primary">Edit Menu</a>');
                    echo('</div></div>');
                }
                $i++;
            }
            while($i % 4 != 0){
                echo('<div class="card">');
                echo('</div>');
                $i++;
            }
        ?>
        <br>
    </div>
    <?php
        include('connectionclose.php');
    ?>
</body>
</html>