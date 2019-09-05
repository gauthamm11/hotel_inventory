    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Inventory Software</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <br>

      <div class="container">
        <h2>Inventory Software</h2>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Inventory</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="home" class="container tab-pane active"><br>
            <h3>DASHBOARD</h3>
            <p>Graphs using artificial intelligence are exectued here.</p>
          </div>
          <div id="menu1" class="container tab-pane fade"><br>
            <!-- b1 -->
            <div class="pb-4">
              <div class="row flex-column-reverse flex-lg-row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Item Search">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="https://image.flaticon.com/icons/svg/321/321830.svg" width="20" height="auto" class="img-fluid">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                  <button type="button" class="btn btn-success btn-block">Add New</button>
                </div>
              </div>
            </div>
            <!-- ./b1 -->
            <!-- inventory -->
            <div id="ItemList">
              
            </div>

            <!-- ./inventory -->
          </div>
        </div>
      </div>

    </body>
    </html>

<script type="text/javascript">
    $(document).ready(function () {
    $.ajax({
                type: "POST",
                data: {"display":1},
                url: "/inventory/app/inventory.php",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (result) {
                  
                     $("#ItemList").html(result);
              

            }
            });

    })
</script>