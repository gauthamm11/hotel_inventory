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
    </head>
    <body>
    	<br>

    	<div class="container">
    		<h2>Inventory Management</h2>
    		<br>
    		<!-- Nav tabs -->
    		<ul class="nav nav-tabs nav-justified" role="tablist">
    			<li class="nav-item">
    				<a class="nav-link active" data-toggle="tab" href="#dashboard`">Dashboard</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" data-toggle="tab" href="#inventory">Inventory</a>
    			</li>
    		</ul>

    		<!-- Tab panes -->
    		<div class="tab-content">
    			<div id="dashboard" class="container tab-pane active"><br>
    				<?php
    				include "dashboard.php";
    				?>
    			</div>
    			<div id="inventory" class="container tab-pane fade"><br>
    				<?php
    				include "inventory.php";
    				?>
    			</div>
    		</div>
    	</div>

    </body>
    </html>
