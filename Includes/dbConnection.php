<?php

if(isset($_POST['submit']))
{
$item_title = $_POST['item_title'];
$item_quantity =$_POST['item_quantity'];
$item_remarks=$_POST['item_remarks'];
$item_last_updated=$_POST['item_last_updated'];
$item_inOffice=$_POST['item_inOffice'];
$item_onField=$_POST['item_onField'];
$item_notWorking=$_POST['item_notWorking'];
$item_total=$_POST['item_total'];

if($item_title == "" || empty($item_title))
{ 
echo "Please fill the below Field";
}else
{
$query = "INSERT INTO Items(item_title,item_quantity,item_remarks,item_last_updated,item_inOffice,item_onField,item_notWorking,item_total)";
$query .= "VALUE('{$item_title}','{$item_quantity}','{$item_remarks}','{$item_last_updated}','{$item_inOffice}','{$item_onField}',
'{$item_notWorking}','{$item_total}')";
}
$create_item_query = mysqli_query($connection,$query);
if(!$create_item_query)
{
die('Query Failed' .mysqli_error($connection));
}

/*

{
    $query = "INSERT INTO Items(item_quantity)";
    $query .= "VALUE('{$item_quantity}')";
}
$create_item_query = mysqli_query($connection,$query);
if(!$create_item_query)
{
die('Query Failed' .mysqli_error($connection));
}*/




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