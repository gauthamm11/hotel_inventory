    <!DOCTYPE html>
    <html lang="en">
    <head>
    	<title>Inventory Management</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" type="image/png" sizes="32x32" href="images/icon32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="images/icon16.png">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    	<div class="container">
    		<br>
            <h2 class="bg-light text-center">Inventory Management</h2><br>
    		<!-- Nav tabs -->
    		<ul class="nav nav-tabs nav-justified" role="tablist">
    			<li class="nav-item">
    				<a class="nav-link active" data-toggle="tab" href="#dashboard"><strong>Dashboard</strong> <i class="fa fa-snowflake-o" aria-hidden="true"></i></a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" data-toggle="tab" href="#inventory"><strong>Inventory</strong> <i class="fa fa-cubes" aria-hidden="true"></i></a>
    			</li>
    		</ul>

    		<!-- Tab panes -->
    		<div class="tab-content bg-light">
    			<div id="dashboard" class="container tab-pane active"><br>
                    <div class="min-vh-100">
    				<?php
    				include "dashboard.php";
    				?>
                    </div>
    			</div>
    			<div id="inventory" class="container tab-pane fade"><br>
                    <div class="min-vh-100">
    				<?php
    				include "inventory.php";
    				?>
                    </div>
    			</div>
    		</div>
    	</div>

    </body>
    </html>
