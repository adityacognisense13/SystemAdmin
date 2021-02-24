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
                     <th>Item Quantity</th>
                     <th>Item Remarks</th>
                     <th>Last Updated</th>
                     <th>In Office</th>
                     <th>On Field</th>

                     <!--<th>In Office</th> -->
                 </tr>
             </thead>
             <tbody>
                 <!-- While Loop -->

                 <?php 
while($row=mysqli_fetch_assoc($select_items))
{
$item_id=$row['item_id'];
$item_title=$row['item_title'];
$item_quantity=$row['item_quantity'];
$item_remarks=$row['item_remarks'];
$item_last_updated=$row['item_last_updated'];
$item_inOffice=$row['item_inOffice'];
$item_onField=$row['item_onField'];

//$item_inOffice=$row['item_inOffice'];

echo "<tr>";
echo "<td> {$item_id}</td>";
echo "<td> {$item_title}</td>";
echo "<td>{$item_quantity}</td>";
echo "<td>{$item_remarks}</td>";
echo "<td>{$item_last_updated}</td>";
echo "<td>{$item_inOffice}</td>";
echo "<td>{$item_onField}</td>";
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