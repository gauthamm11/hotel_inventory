<script>
$(document).ready(function(){
  $(".modelid").click(function(){
     $id = $(this).data('id')
        $("#txtHidden").text($id);
        $.ajax({
                type: "GET",
                data: {"id":$id},
                url: "list_detail.php",
                success: function (result)
                 {                 
                $("#currentdata").html(result);
                $("#datamodel").modal('toggle');
              }
            });
      
});
});
</script>
 <!-- modal -->
  <div class="modal fade" data-backdrop="static" id="datamodel">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Stock Details</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <!--  <p id="txtHidden"></p> -->
         <div id ="currentdata">
          
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
        
      </div>
    </div>
  </div>
 <!-- ./modal -->

<?php
require "dbase.php";
//include "includes/header.php";
$sql = "SELECT * FROM item_list";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<div class='row'>";
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo '
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 pb-3">
                <!-- item card -->
                <div class="card" style="">
                  <img class="card-img-top" width="250" height="250" src="'.$row['pic'].'" alt="'.$row['name'].'">
                  <div class="card-body text-center p-0">
                    <h4 class="card-title">'.$row['name'].'</h4>';
                    if($row['current_status']< $row['threshold'])
                    {
                      
                   echo '<p class="card-text bg-danger"> In Stock :'.$row['current_status'].' '.$row['metric'].'</p>';
                    }
                    else
                      {
                      echo '<p class="card-text"> In Stock :'.$row['current_status'].' '.$row['metric'].'</p>';
                      }
                      
                  echo '<a  href="#!" data-id="'.$row['id'].' " class="modelid btn btn-info btn-block">View Details</a>
                  </div>
                </div>
                <!-- ./item card -->
              </div>
        ';
    }
    echo "</div>";
} else {
    echo "0 results";
}
?>