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
 function searchmenu(){
$text=$("#textsearch").val();
$filter = $text.toLowerCase();
    $("#itemlist div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf($filter) > -1)
    });
}
 function ValidateDecimalOnly(evt) {
    $charCode = (evt.which) ? evt.which : evt.keyCode;
    if ($charCode != 46 && $charCode > 31
      && ($charCode < 48 || $charCode > 57))
        return false;

    return true;
}
</script>
 <div class="pb-4">
              <div class="row flex-column-reverse flex-lg-row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="input-group">
                    <input type="text" id ="textsearch"class="form-control" onkeyup="searchmenu()" placeholder="Item Search">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="https://image.flaticon.com/icons/svg/321/321830.svg" width="20" height="20" class="img-fluid" alt="search">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                  <button type="button" id="btnaddnew" data-toggle="modal" data-target="#addnew"class="btn btn-success btn-block">Add New</button>
                </div>
              </div>
            </div>
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
  <!-- modal -->
  <div class="modal fade" data-backdrop="static" id="addnew">
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
        <form action="add_new.php" method="post" enctype="multipart/form-data">
 
        Name : <input type="text" name="itemname" class="form-control"><br>
        Stock : <input type="text" name="quantity" onkeypress="return ValidateDecimalOnly(event)" class="form-control"><br>
         Threshold : <input type="text" name="treshold" onkeypress="return ValidateDecimalOnly(event)" class="form-control"><br>
        Metric :<select name="metric" class="form-control">
          <option >---select Metric---</option>
          <option value="kg">Kilogram</option>
          <option value="ltr">Litre</option>
           </select>
           Picture : <input type="file" name="pic" ><br>
          <input type="submit" id="btnsubmit" class="btn btn-primary pull-right">
        </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-info">Close</button>
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
    echo "<div class='row' id='itemlist'>";
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