<script>



  $(document).ready(function(){

    $(document).on('click', '.modelid', function () {
      
  //  $(".modelid").click(function(){
     $id = $(this).data('id')
      $name = $(this).data('name')
     $("#txtHidden").text($id);
     $("#txtname").text($name);

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

///////

$('#addform').on('submit', function (e) {
                //Stop the form from submitting itself to the server.
                e.preventDefault();
                var name = $('#itemname').val();
                var quantity = $('#quantity').val();
                var treshold = $('#treshold').val();
                var metric = $('#metric').val();
                
                $.ajax({
                  type: "POST",
                  url: 'add_new.php',
                  data:  new FormData(this),
                  contentType: false,
                  cache: false,
                  processData:false,
                  //data: { name: name, quantity: quantity, treshold: treshold, metric: metric },
                  success: function (data) {
                    $('#itemlist').prepend(data);
                   $('#itemname,#quantity,#treshold,#metric').val('');
                   alert("Item has been added Successully");
                  
                        $("#addnew").modal('hide');
                    
                  }
                });
              });


//////
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
  function deletefun(){
    $id =$("#txtHidden").text();
     $.ajax({
      type: "POST",
      data: {"id":$id},
      url: "delete.php",
      success: function (result)
      {         
      $("#data"+ $id).remove();        
        alert(result);
         $("#datamodel").modal('hide');
                  
      }
    });
  }
// function addnew(){
//   $itemname=$("#itemname").val();$quantity=$("#quantity").val();$treshold=$("#treshold").val();
//   $metric=$("#metric").val(); 
//   // $pic =new FormData();
//   // $pic.append('file',$("#pic")[0].files[0]);
//    $.ajax({
//                 type: "POST",
//                 data: {"itemname":$itemname,"quantity":$quantity,"treshold":$treshold,"metric":$metric},
//                 url: "add_new.php",
//                // contentType:false,
//                 enctype:"multipart/form-data",
//                 success: function (result)
//                  {                 
//                 alert(result);
//               }
//             });
// }



            </script>
            <div class="pb-4">
              <div class="row flex-column-reverse flex-lg-row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="input-group">
                    <input type="text" id ="textsearch"class="form-control" onkeyup="searchmenu()" placeholder="Product Search">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="https://image.flaticon.com/icons/svg/321/321830.svg" width="20" height="20" class="img-fluid" alt="search">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                  <button type="button" id="btnaddnew" data-toggle="modal" data-target="#addnew"class="btn btn-success btn-block">Add Product <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <!-- modal -->
            <div class="modal fade" data-backdrop="static" id="datamodel">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"> <span id="txtname"> </span> - Stock History <i class="fa fa-calendar" aria-hidden="true"></i></h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                     <p  style="display: none"; id="txtHidden"></p>
                    <div id ="currentdata">

                    </div>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" onclick="deletefun()" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                  </div>

                </div>
              </div>
            </div>
            <!-- ./modal -->
            <!-- modal -->
            <div class="modal fade" data-backdrop="static" id="addnew">
              <div class="modal-dialog">
                <div class="modal-content">
                 <form id="addform" enctype="multipart/form-data">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Stock Details <i class="fa fa-shopping-cart" aria-hidden="true"></i></h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <!--  <p id="txtHidden"></p> -->


                    Name : <input type="text" autocomplete="off" name="itemname" required id="itemname" class="form-control"><br>
                    Stock : <input type="text" autocomplete="off" name="quantity" required id="quantity" onkeypress="return ValidateDecimalOnly(event)" class="form-control"><br>
                    Minimum Value : <input type="text" autocomplete="off" name="treshold" required id="treshold" onkeypress="return ValidateDecimalOnly(event)" class="form-control"><br>
                    Metric :<select id="metric" name="metric" class="form-control" required>
                      <option value="" disabled selected>---select Metric---</option>
                      <option value="kg">Kilogram</option>
                      <option value="ltr">Litre</option>
                    </select><br>
                    Picture : <input type="file" name="pic" id="pic" required accept="image/x-png, image/gif, image/jpeg, image/jpg"><br>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-info pull-right">Add <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                  </div>
                </form>
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
              <div id = "data'.$row['id'].'"class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 pb-3">

              <!-- item card -->
              <div class="card" style="">
              <img class="card-img-top" width="100" height="100" src="images\inv1\\'.$row['pic'].'" alt="'.$row['name'].'">
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

            echo '<button data-id="'.$row['id'].' " data-name="'.$row['name'].' " class="modelid btn btn-info btn-block">View Details <i class="fa fa-eye" aria-hidden="true"></i></button>
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