<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Rush Store!</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css"/>
		<link rel="stylesheet" type="text/css" href="css/checkout-cornerflat.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/styles.css"/>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>

    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>
    <?php
      include('header.php');
    ?>
    <div class = 'container'>
			<h1 class='text-right'>
				Admin Dashboard
			</h1>
			<div class="panel panel-default">
			  <div class="panel-heading" style="font-size:18px;">Orders</div>
			  <div class="panel-body">
					<!--ITEM-->
					<div class="panel-group">
					 <div class="panel panel-default">
						 <div class="panel-heading">
							 <h4 class="panel-title">
								 <a data-toggle="collapse" href="#collapse1">>Order Summary Here<</a>
							 </h4>
						 </div>
						 <div id="collapse1" class="panel-collapse collapse">
							 <div class="panel-body">
								 Panel Body
							 </div>
						 </div>
					 </div>
					</div>

					<!--ANOTHER ITEM-->
					<div class="panel-group">
					 <div class="panel panel-default">
						 <div class="panel-heading">
							 <h4 class="panel-title">
								 <a data-toggle="collapse" href="#collapse2">>Order Summary Here<</a>
							 </h4>
						 </div>
						 <div id="collapse2" class="panel-collapse collapse">
							 <div class="panel-body"><!--ITEM HERE-->

							 </div><!--TO HERE-->
						 </div>
					 </div>
				 </div><!--ITEM END -->

				</div>
			</div>
		</div>
	</body>

</html>
