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
		<div class = 'container-fluid'>
			<div class="well">
				<h1 class = 'text-center'>Our Products</h1>
				<hr>
				<div class = 'row'>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/coat3.jpg" class="img-circle" width="200" height="200">
						<p>Fashionable Trench Coat</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
          		<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
        		</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/jeans2.jpg" class="img-circle" width="200" height="200">
						<p>Trendy Jeans</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/cpolo2.jpg" class="img-circle" width="200" height="200">
						<p>Charles' Stylish Polo</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/coat3.jpg" class="img-circle" width="200" height="200">
						<p>Marco's Classy Tee</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/ma2.jpg" class="img-circle" width="200" height="200">
						<p>Nike Never Stop Shirt</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/polo.jpg" class="img-circle" width="200" height="200">
						<p>Niko's Cool Simple Shirt</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/poloshir1.jpg" class="img-circle" width="200" height="200">
						<p>White Poloshirt With Accents</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/spolo3.jpg" class="img-circle" width="200" height="200">
						<p>Television Star Striped Shirt</p>
						<p>Php 999.00</p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
				</div>
			</div>
		</div>





		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
					var openCtrl = el.querySelector( '.checkout__button' ),
						closeCtrls = el.querySelectorAll( '.checkout__cancel' );
					openCtrl.addEventListener( 'click', function(ev) {
						ev.preventDefault();
						classie.add( el, 'checkout--active' );
					} );
					[].slice.call( closeCtrls ).forEach( function( ctrl ) {
						ctrl.addEventListener( 'click', function() {
							classie.remove( el, 'checkout--active' );
						} );
					} );
				} );
			})();
		</script>
				<script type="text/javascript" src="js/popup.js"></script>
        <script>
				var total = 0;
				var items = new Array();
				var prices = new Array();

         $('button.checkout').click(function(){
                var name = jQuery(this).data('item');
								var price = 999;

								items.push(name);
								prices.push(price);


								total += price;
								var output = '<tr><td>'+name+'</td><td>'+price+'.00</td></tr>';
								$("#checkout tbody").append(output);
							  $("span.checkout__total").text("Php " + total + ".00");

          });
					$('button.checkout__option').click(function(){
							var type = jQuery(this).data('item');



				  });
        </script>
		<script src="js/jquery-1.10.2.min.js"></script>
	</body>
</html>
