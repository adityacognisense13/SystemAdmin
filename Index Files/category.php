<?php 

include "../includes/db.php";


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../StyleSheet/style.css">
    <!-- Boot Strap Code -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <div class="row">
        <div class="col-sm-3">
            <h1 class="page header">Welcome to Admin Pannel</h1>
        </div>

        <?php

                            include "../Includes/dbConnection.php";

                        ?>
        <form action="" method="POST">
        <div class="container">
            
            <div class="form-group">
            <div class="row">
                <div class="col-sm">
                    <label for="category_title" class="title">Add Category</label>
                    <input type="text" class="form-control" name="category_title">
                </div>
            </div>
            
            <!-- Submit Button 
                            <div class="form-group">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                                    </div> -->
            <!-- Item List Box -->
            <div class="form-group">
                <div class="col-sm">
                    <label for="item_title" class="title">Add Items</label>
                    <input type="text" class="form-control" name="item_title">
                </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Add Items">
            </div>
            </div><!-- end of row tag div -->

        </form>
    </div> <!-- End of form Div tag -->
    </div>
    <!-- Displaying the Data From Backend table -->

    <?php

                        $query = "SELECT * FROM Items";
                        $select_items=mysqli_query($connection , $query);

                    ?>

    <!-- Creation of table -->
    <div class="col-sm-2">
    <div class="tab">

    <table class="tab table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Title</th>
            </tr>
        </thead>
        <tbody>
        <!-- While Loop -->

        <?php 
        while($row=mysqli_fetch_assoc($select_items))
        {
            $item_id=$row['item_id'];
            $item_title=$row['item_title'];

            echo "<tr>";
            echo "<td> {$item_id}</td>";
            echo "<td> {$item_title}</td>";
            echo "</tr>";

        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
 <!-- Displaying the Categories Table -->

                    <?php

                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection,$query);

                    ?>

            
              <!-- Creation of table -->
<div class="col-sm-2">
<div class="tab">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Title</th>
            </tr>
        </thead>
        <tbody>
        <!-- While Loop -->

        <?php 
        while($row=mysqli_fetch_assoc($select_categories))
        {
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];

            echo "<tr>";
            echo "<td> {$category_id}</td>";
            echo "<td> {$category_title}</td>";
            echo "</tr>";

        }
        ?>
        
        </tbody>
    </table>
</div>
</div>


    <script src="" async defer></script>
    <!-- Boot Strap Code  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>