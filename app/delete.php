<?php
require "dbase.php";
$id=$_POST['id'];

$deleteqry="DELETE from  item_list where id ='$id'";
$result = mysqli_query($conn,$deleteqry);
echo "Item has been Removed";
?>