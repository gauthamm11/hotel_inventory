<?php
require "dbase.php";
if(isset($_POST['btnsubmit'])){
  // $name=$_POST['itemname'];
  // $quantity=$_POST['quantity'];
  // $treshold=$_POST['treshold'];
  // $metric=$_POST['metric'];
  
  // $filetmp=$_FILES['pic']['tmp_name'];$filename=$_FILES['pic']['name'];$filetype=$_FILES['pic']['type'];
  // $filepath="images\inv"."\\".uniqid().$filename;
  // move_uploaded_file($filename, $filepath);
  
  // $sql="INSERT INTO item_list (id,name,metric,current_status,threshold,pic) VALUES (18,'$name','$metric','$quantity','$treshold','$filepath')";
  // $result = mysqli_query($conn,$sql);
  // //echo "Data submitted successfully";
  // $forignid = mysqli_insert_id( $conn );
  // // mysql_free_result( $results );
  // $datenow = (new DateTime('now'));
  // $insert="INSERT INTO item_history (id,date,quantity,type) VALUES ('$forignid','$datenow','$quantity',1)";
  // $result2 = mysqli_query($conn,$insert);
  // echo "Data submitted successfully";
}
{
	$name=$_POST['itemname'];
  $quantity=$_POST['quantity'];
  $treshold=$_POST['treshold'];
  $metric=$_POST['metric'];
  
  $filetmp=$_FILES['pic']['tmp_name'];$filename=$_FILES['pic']['name'];$filetype=$_FILES['pic']['type'];
  $filepath="images\inv\\".uniqid().$filename;
  move_uploaded_file($filename, $filepath);
  
  $sql="INSERT INTO item_list (id,name,metric,current_status,threshold,pic) VALUES (24,'$name','$metric','$quantity','$treshold','$filepath')";
  $result = mysqli_query($conn,$sql);

 
 //$forignid = mysqli_insert_id( $conn );

 //$datenow = (new DateTime('now'));
 $sql ="INSERT INTO item_history (id,date,quantity,type) VALUES (24,'2019-08-09 02:00:00','$quantity',1)";
  $result = mysqli_query($conn,$sql);
  echo "Data submitted successfully";
}
?>
