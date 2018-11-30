<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Menu</title>
</head>

<body>
    <?php
        require('adminnavbar.php');
    ?>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Menu</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="addMenuProcess.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="menuName">Menu Name ( * )</label>
                        <input type="text" class="form-control" id="menuName" name="menuName" placeholder="E.g.: Xiao Long Bao">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCategory">Category ( * )</label>
                            <select id="inputState" name="category" class="form-control">
                                <option selected>Choose...</option>
                                <option value="food">Food</option>
                                <option value="drink">Drink</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="menuName">Sub Category</label>
                            <input type="text" class="form-control" id="subCategory" name="subCategory" placeholder="E.g.: DimSum">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price">Price ( * )</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="E.g.: 2400">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foodDesc">Food Description</label>
                        <input type="text" class="form-control" id="foodDesc" name="foodDesc" placeholder="The Description about the food" maxlength="150">
                    </div>
                    <div class="form-group">
                        <label for="foodImage">Food Image ( * )</label>
                        <input type="file" class="form-control" id="foodImage" name="foodImage">
                    </div>
                    <input type="submit" value="Add Menu" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php
        include('connectionclose.php');
    ?>
</body>

</html>