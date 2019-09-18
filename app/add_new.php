<?php
require "dbase.php";

 $name=$_POST['itemname'];
  $quantity=$_POST['quantity'];
  $treshold=$_POST['treshold'];
  $metric=$_POST['metric'];
  
  $maxid="SELECT MAX(sno) as id from item_list";
   $idresult = mysqli_query($conn,$maxid);
    while($row = mysqli_fetch_assoc($idresult)) 
    {
    	$id=$row['id'];
  $filetmp=$_FILES['pic']['tmp_name'];$filename=$_FILES['pic']['name'];$filetype=$_FILES['pic']['type'];
// $filepath="images\inv1\\".uniqid().$filename;
   $filepath="images/inv1/".$filename;
   //echo=$filepath;
  move_uploaded_file($filetmp, $filepath);
  
  $sql="INSERT INTO item_list (id,name,metric,current_status,threshold,pic) VALUES ('$id','$name','$metric','$quantity','$treshold','$filename')";
  $result = mysqli_query($conn,$sql);

$historysql="INSERT INTO  item_history (id,quantity,type) VALUES ('$id','$quantity',1)";
  $historyresult = mysqli_query($conn,$historysql);
  $data="SELECT * from item_list where id='$id'";
    $resultqry = mysqli_query($conn,$data);
     while($resultrow = mysqli_fetch_assoc($resultqry)) 
    {

   echo '
              <div id = "data'.$resultrow['id'].'" class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 pb-3">

              <!-- item card -->
              <div class="card" style="">
              <img class="card-img-top" width="100" height="100" src="images\inv1\\'.$resultrow['pic'].'" alt="'.$resultrow['name'].'">
              <div class="card-body text-center p-0">
              <h4 class="card-title">'.$resultrow['name'].'</h4><p  style="display: none"; id ="hiddenstatus">'.$resultrow['current_status'].'</p><p  style="display: none"; id ="hiddenmetric">'.$resultrow['metric'].'</p><p  style="display: none"; id ="hiddenthreshold">'.$resultrow['threshold'].'</p>';
              if($resultrow['current_status']< $resultrow['threshold'])
              {

               echo '<p class="card-text bg-danger"> In Stock :'.$resultrow['current_status'].' '.$resultrow['metric'].'</p>';
             }
             else
             {
              echo '<p class="card-text"> In Stock :'.$resultrow['current_status'].' '.$resultrow['metric'].'</p>';
            }

            echo ' <span class="btn-group btn-block">
            <button data-id="'.$resultrow['id'].' " data-name="'.$resultrow['name'].' " class="modelid btn btn-success">View <i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-id="'.$resultrow['id'].' " data-name="'.$resultrow['name'].' "  class="entrybtn btn btn-warning">Entry <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </span>
            </div>
            </div>
            <!-- ./item card -->

            </div>
            ';

  }
}
?>
