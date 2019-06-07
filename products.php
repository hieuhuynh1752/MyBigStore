<?php 
	include_once('shop_admin/function.php');
	include_once('shop_admin/function_product.php');
	include_once('shop_admin/function_index.php');
	$categoryID = $_GET['categoryID'];
	$get_product_by_categoryid = get_product_by_categoryid($categoryID);
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Kitchen :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="#"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="#" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="#" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="#" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li ><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Kitchen<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
												<li><a href="products.php?categoryID=1"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
												<li><a href="products.php?categoryID=1"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=2"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
												<li><a href="products.php?categoryID=2"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Household<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
												<li><a href="products.php?categoryID=3"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/me2.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li><a href="#" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
           <a href="products.php"><img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="products.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
           <a href="products.php"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
<div class="kic-top ">
	<div class="container ">
	<div class="kic ">
			<h3>Popular Categories</h3>
			
		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="images/ki.jpg" class="img-responsive" alt="">
			</a>
			<h6>Dal</h6>
			<p>Nam libero tempore</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="images/ki1.jpg" class="img-responsive" alt="">
			</a>
			<h6>Snacks</h6>
			<p>Nam libero tempore</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="#">
				<img src="images/ki2.jpg" class="img-responsive" alt="">
			</a>
			<h6>Spice</h6>
			<p>Nam libero tempore</p>
		</div>
	</div>
</div>

<!--content-->
		<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l agileinf">
					<?php foreach($get_product_by_categoryid as $key => $value) { ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="single.php?productID=<?php echo $value['productID']?>" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="shop_admin/images/products/<?php echo $value['image']?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php?productID=<?php echo $value['productID']?>"><?php echo $value['productName']?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>$<?php echo 2*$value['price']?></label><em class="item_price">$<?php echo $value['price']?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="#" method="post">
											<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="<?php echo $value['productName']?>" />
											<input type="hidden" name="amount" value="<?php echo $value['price'] ?>" />
											<input type="hidden" name="discount_amount" value=" " />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<button type="submit" name="submit" class="mid-2 btn btn-danger my-cart-btn my-cart-b">Add to cart</button>
											</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Nam libero tempore, cum soluta nobis est eligendi 
				optio cumque nihil impedit quo minus id quod maxime 
				placeat facere possimus.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Kitchen</a></li>
				<li><a href="products.php">Personal Care</a></li>
				<li><a href="products.php">Household</a></li>						 
				<li><a href="#">Short Codes</a></li> 
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="#">Shipping</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Faqs</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="#">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
				<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
</body>
</html>