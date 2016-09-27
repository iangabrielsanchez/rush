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
						<p class="product">Fashionable Trench Coat</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
          		<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
        		</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/jeans2.jpg" class="img-circle" width="200" height="200">
						<p class="product">Trendy Jeans</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/cpolo2.jpg" class="img-circle" width="200" height="200">
						<p class="product">Charles' Stylish Polo</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/coat3.jpg" class="img-circle" width="200" height="200">
						<p class="product">Marco's Classy Tee</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/ma2.jpg" class="img-circle" width="200" height="200">
						<p class="product">Nike Never Stop Shirt</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/polo.jpg" class="img-circle" width="200" height="200">
						<p class="product">Niko's Cool Simple Shirt</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/poloshir1.jpg" class="img-circle" width="200" height="200">
						<p class="product">White Poloshirt With Accents</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
					<div class='col-md-3 text-center cart-item'>
						<img src = "img/spolo3.jpg" class="img-circle" width="200" height="200">
						<p class="product">Television Star Striped Shirt</p>
						<p><span>Php </span><span class="price">999.00</span></p>
						<a href="#" class="btn btn-info">
							<span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart
						</a>
					</div>
				</div>
			</div>

			<!-- POP UP PANEL -->
			<div id="popupPanel" class="popup container">
					<div class=" popup-content overflowauto" style="position:relative;">
						<span onclick="closePopup()" class="close-popup" style="position: absolute;top: 0;right: 0;padding-right:.5em;">×</span>
						<div class="black-text" id="pcontent" style="margin-right:2em;margin-left:2em;margin-bottom:0em;"></div>
				</div>
			</div>

		</div>	<!-- /container -->

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
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/order.js"></script>
	<script src="js/popup.js"></script>
	</body>
</html>
