<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" contect="width=device-width, initial-scale=1"> 
	<title>My Store</title>
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div id="top"><!-- Top - start -->
	<div class="container"><!-- Container - start -->
		<div class="col-md-6 offer"><!-- col-md-6 offer - start -->
			<a href="" class="btn btn-success btn-sm">Welcome</a>
			<a href="checkout.php">2 Items In Your Cart | Total Price: $400</a>
		</div><!-- col-md-6 offer - end -->
		<div class="col-md-6"><!-- col-md-6  - start -->
			<ul class="menu">
				<li>
					<a href="cutomer_register.php">Register</a>
				</li>
				<li>
					<a href="checkout.php">My Account</a>
				</li>
				<li>
					<a href="cart.php">Go To Cart</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
			</ul>
		</div><!-- col-md-6  - end -->
	</div><!-- Container - end -->
</div><!-- Top - end -->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default start -->
	<div class="container"><!-- Container - start -->
		<div class="navbar-header"><!-- navbar-header - start -->
			<a href="index.php" class="navbar-brand home"><!-- navbar-brand home - start -->
				<img src="images/ecom-store-logo.png" alt="store" class="hidden-xs"><!--to be hidden when xs size-->
				<img src="images/ecom-store-logo-mobile.php" alt="store" class="visible-xs"><!-- to be shown when xs size -->
			</a><!-- navbar-brand home - end -->
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
				<span class="sr-only">
					Toggle Navigation
				</span>
				<i class="fa fa-align-justify"></i>
			</button>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
				<span class="sr-only">
					Toggle Navigation
				</span>
				<i class="fa fa-search"></i>
			</button>			
		</div><!-- navbar-header - end -->
		<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start --><div class="padding-nav"><!-- padding-nav start -->
			<ul class="nav navbar-nav left">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="shop.php">Shop</a>
				</li>
				<li>
					<a href="checkout.php">My Account</a>
				</li>
				<li>
					<a href="contact.php">Contact Us</a>
				</li>
			</ul>
		</div><!-- padding-nav end -->
		<a href="cart.php" class="btn navbar-btn btn-primary right">
			<i class="fa fa-shopping-cart"></i>
			<span>4 Items In Your Cart</span>
		</a>
		<div class="navbar-collapse collapse right">
			<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
				<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i>
			</button>
		</div>		
		<div class="collapse clearfix" id="search">
			<form method="get" action="results.php" class="navbar-form">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="user_query" required>
					<span class="input-group-btn">	
					<button type="submit" name="search" value="search" class="btn btn-primary">
						<i class="fa fa-search"></i>
					</button>
					</span>
				</div>
			</form>
		</div>
		</div><!-- navbar-collapse collapse end -->
	</div><!-- Container - end -->
</div><!-- navbar navbar-default end -->

	<div class="content">
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Shop
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php
					include('includes/sidebar.php')
				?>
			</div>

			<div class="col-md-9"><!-- col-md-9 start -->
				<div class="box">
					<h1>Shop</h1>
					<p>Random text</p>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 center-responsive">
						<div class="product">
							<a href="details.php">
								<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="product 1">
							</a>
							<div class="text">
								<h3>
								<a href="deatils.php">
									T-Shirt
								</a>
								</h3>
								<p class="price">$30</p>
								<p class="button">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary">
										<i class="fa fa-shopping-cart">Add to Cart</i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<center>
					<ul class="pagination">
						<li><a href="">First Page</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">Last Page</a></li>
					</ul>
				</center>
			</div><!-- col-md-9 end -->

		</div>
	</div>

	<?php
		include('includes/footer.php')
	?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>