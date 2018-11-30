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
    <title>User List</title>
</head>

<body>
    <?php
        require('adminnavbar.php');
        $user = "select * from user where userID>1";
        $userQuery = mysqli_query($con, $user);
    ?>
    <br>
    <div class="container">
        <h1>User List</h1>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($userQuery, MYSQLI_ASSOC)){        
                        echo("<tr>");
                        echo("<th scope='row'>{$i}</th>");
                        echo("<td>".$row['username']."</td>");
                        echo("<td>".$row['fullname']."</td>");
                        echo("<td>".$row['email']."</td>");
                        echo("<td>".$row['phonenumber']."</td>");
                        echo("</tr>");
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        include('connectionclose.php');
    ?>
</body>

</html>