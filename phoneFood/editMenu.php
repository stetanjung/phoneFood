<?php
    session_start();
    include("connection.php");
    $menuID = $_GET['menuID'];
    $menuQuery = "select * from menu where menuID='$menuID'";
    $menu = mysqli_query($con, $menuQuery);
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
                <?php 
                    while($row = mysqli_fetch_array($menu, MYSQLI_ASSOC)){
                ?>
                <form method="POST" action="editMenuProcess.php" enctype="multipart/form-data">
                    <input type="hidden" name='menuID' value="<?php echo($menuID);?>">
                    <div class="form-group">
                        <label for="menuName">Menu Name ( * )</label>
                        <input type="text" class="form-control" id="menuName" name="menuName" placeholder="E.g.: Xiao Long Bao" value="<?php echo($row['foodname']);?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCategory">Category ( * )</label>
                            <select id="inputState" name="category" class="form-control">
                                <?php
                                    if($row['category'] == 'food'){
                                        echo('<option>Choose...</option>');
                                        echo('<option value="food" selected>Food</option>');
                                        echo('<option value="drink">Drink</option>');
                                    }
                                    else{
                                        echo('<option>Choose...</option>');
                                        echo('<option value="food">Food</option>');
                                        echo('<option value="drink" selected>Drink</option>');
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="menuName">Sub Category</label>
                            <input type="text" class="form-control" id="subCategory" name="subCategory" placeholder="E.g.: DimSum" value="<?php echo($row['subcategory']);?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price">Price ( * )</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="E.g.: 2400" value="<?php echo($row['price']);?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price">Availability</label>
                            <select id="inputState" name="avail" class="form-control">
                                <?php
                                    if($row['availability'] == 'T'){
                                        echo('<option>Choose...</option>');
                                        echo('<option value="true" selected>Available</option>');
                                        echo('<option value="false">Not Available</option>');
                                    }
                                    else{
                                        echo('<option>Choose...</option>');
                                        echo('<option value="true">Available</option>');
                                        echo('<option value="false" selected>Not Available</option>');
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foodDesc">Food Description</label>
                        <input type="text" class="form-control" id="foodDesc" name="foodDesc" placeholder="The Description about the food" maxlength="150" value="<?php echo($row['food_description']);?>">
                    </div>
                    <?php
                        }
                    ?>
                    <input type="submit" value="Edit Menu" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php
        include('connectionclose.php');
    ?>
</body>

</html>