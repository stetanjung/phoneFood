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
        <form action="testingProcess.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="submit" name="submit">
        </form>
</body>
</html>