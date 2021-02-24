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
            <!--<div class="container"> -->

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

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_quantity" class="quantity">Add Item Quantity</label>
                            <input type="int" class="form-control" name="item_quantity">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_remarks" class="remarks">Item Remarks</label>
                            <input type="text" class="form-control" name="item_remarks">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_last_updated" class="remarks">Last Updated</label>
                            <input type="text" class="form-control" name=" item_last_updated">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_inOffice" class="remarks">In Office</label>
                            <input type="text" class="form-control" name="item_inOffice">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_onField" class="remarks">On_Field</label>
                            <input type="text" class="form-control" name="item_onField">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_notWorking" class="remarks">Not Working</label>
                            <input type="text" class="form-control" name="item_notWorking">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <label for="item_total" class="remarks">Total</label>
                            <input type="text" class="form-control" name="item_total">
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


    <?php

    include "../Includes/displaydata.php"

    ?>




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