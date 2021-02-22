<?php

if(isset($_POST['submit']))
{
$item_title = $_POST['item_title'];

if($item_title == "" || empty($item_title))
{
echo "Please fill the below Field";
}else
{
$query = "INSERT INTO Items(item_title)";
$query .= "VALUE('{$item_title}')";
}
$create_item_query = mysqli_query($connection,$query);
if(!$create_item_query)
{
die('Query Failed' .mysqli_error($connection));
}

$category_title = $_POST['category_title'];

if($category_title == "" || empty($category_title))
{
echo "Please fill the below Field";
}else
{
$query = "INSERT INTO categories(category_title)";
$query .= "VALUE('{$category_title}')";
$create_category_query = mysqli_query($connection,$query);
if(!$create_category_query)
{
die('Query Failed' .mysqli_error($connection));
}
}
}
?>