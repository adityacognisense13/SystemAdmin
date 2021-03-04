<?php

if(isset($_GET['delete']))
{
   $the_item_id= $_GET['delete'];
   $the_category_id = $_GET['delete'];
   $query = "DELETE FROM Items WHERE item_id = {$the_item_id}";
   
   $delete_query = mysqli_query($connection,$query);
   header("Location:category.php");
}

?>

<!-- Deletion of categories -->

<?php

if(isset($_GET['delete_categories']))
{
   
   $the_category_id = $_GET['delete_categories'];
  
   $query ="DELETE FROM categories WHERE category_id={$the_category_id}";
   $delete_query = mysqli_query($connection,$query);
   header("Location:category.php");
}

?>