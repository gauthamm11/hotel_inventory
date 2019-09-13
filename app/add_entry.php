<?php 
require "dbase.php";

is_null($_POST['vendorname'] ? "" : $_POST['vendorname'] ); 

 $vendorname=$_POST['vendorname'] ; 
  $vendoraddress=$_POST['vendoraddress'] ;
  $vendorno=$_POST['vendorno'] ;  
  $quantity=$_POST['entryquantity'];
  $type=$_POST['entrytype'];
  $id=$_POST['id'];

//echo $vendorname . $quantity. $vendoraddress.  $vendorno.$type.$id ;
$select= "SELECT current_status from item_list where id='$id'";
 $selectresult = mysqli_query($conn,$select);

 while($rows = mysqli_fetch_assoc($selectresult)) {
 $curstatus=0;
if($type==1)
$curstatus=($rows['current_status']+$quantity);
else
$curstatus=($rows['current_status']-$quantity);

$updatesql="UPDATE item_list set current_status='$curstatus' where id='$id'";
$updateteresult = mysqli_query($conn,$updatesql);
$historysql="INSERT INTO  item_history (id,quantity,type,vendor_name,vendor_mob,vendor_adr) VALUES ('$id','$quantity','$type','$vendorname','$vendorno','$vendoraddress')";
  $historyresult = mysqli_query($conn,$historysql);
  echo "Data has been entered Successfully";
}
?>