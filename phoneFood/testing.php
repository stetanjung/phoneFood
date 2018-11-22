<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    <?php
        $pass = 'ste';
        $repass = 'ste';
        $password = ($pass == $repass ? $pass : false);
        if(!$password){
            echo('password beda');
        }
        else{
            echo $pass;
        }
    ?>
</body>
</html>