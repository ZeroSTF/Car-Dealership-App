<?php
session_start();
if (isset($_SESSION["username"]))
{
    if ($_SESSION["role_user"] == "ADMIN_ROLE")
        header("location:../back/utilisateurs.php") ;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive-style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-light.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,800%7CPlayfair+Display:400,700" rel="stylesheet">
	<title>Accueil</title>
</head>
	<body>
		<header>
			<?php 
				if (isset($_SESSION['username'])) {
			?>
			<div id="mySidenav" class="sidenav">
				<div class="freedelivery">
					
					<h3>FREE DELIVERY</h3>
					<p class="bolder">On All Orders Over $100</p>
				</div>
			  	<a href="#" class="closebtn">&times;</a>
			  	<ul id="pagesmenu">
			  		<li class="boldest">Main Navigation</li>
					  <li><a href="browse1.php">Accueil</a></li>
			  		<li><a href="browse10.php">Product for rent</a></li>
					  <li><a href="browse11.php">Reservations</a></li>
					  <li><a href="browseArticle.php">Articles</a></li>
<li><a href="ajouterLivraison.php">Livraisons</a></li>				
			</div>
			<?php
				}
			?>
			<div id="overlay"></div>
			<section class="container-fluid">
				<div class="row" id="topbar">
					<div class="col-sm-5">
						<ul id="topleft">
							<li><h4>AUTOlead</h4></li>
							
							<li><h5>Awesome cars</h5></li>
						</ul>
					</div>
					<div class="col-sm-7">
						<ul id="topright">
							<li>MILLE POUVOIRS, ZERO DEVOIR</li>
							<li>&nbsp;|&nbsp;</li>
							<li id="searchlink" class="searchlink withpopup"><a href="search.php" class="search"><img src="search.jpeg" alt="Search" width="25" height="25"></a>
								<div class="popup" id="searchform">
		      						<form id="search">
		        						<input type="text" class="s" id="s" placeholder="Search...">
		        						<button type="submit" class="sbtn"><i class="fa fa-search"></i>Search</button>
		      						</form>
      							</div>
							</li>
							<li>&nbsp;|&nbsp;</li>
							<li id="userlink" class="userlogin withpopup"><a href="#"><img src="user.jpeg" alt="User" width="25" height="25"></a>
								<div class="popup" id="usermenu">
		      						<?php
                                        //session_start();
                                            if (isset($_SESSION['username'])) {

                                                echo ' <li><a href="">'. $_SESSION['nom_prenom_user'].'</a></li>';
                                        echo '<li><a href="logout.php">Sign out</a></li>';


                                            }  else {

                                        echo ' <li><a href="login.php">Sign in</a></li>';
                                        echo ' <li><a href="signup.php">Sign up</a></li>';
                                        //echo ' <li><a href="logout.php">Sign out</a></li>';


                                        }
                                        ?>
      							</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row pagehead">
					<div class="col-sm-2 col-xs-2">
						<div id="nav-toggle">
							<a href="#"><img src="menu.jpg" width="50" height="50" alt="menu"></a>
						</div>
					</div>
					<div class="col-sm-8 col-xs-8" id="logo">
						<a href="browse1.php"><img src="logo.png" alt="AUTOlead Logo" width="100" height="100"></a>
					</div>
					<div class="col-sm-1 col-sm-offset-1 col-xs-2">
						<div id="cart">
							<div id="cartitems">
								<span>&nbsp;3</span>
							</div>
							<a href="#"><img src="card.png" alt="Cart" width="30" height="30">Card</a>
						</div>
						<div id="cartpopup">
							<h3>YOUR SHOPPING CARD</h3><span class="bolder">3 ITEMS</span>
							<!-- /<div class="cartitem">
								<img src="http://placehold.it/100x100" alt="Cart item 1" width="100" height="100"><p class="boldest"><a href="#">&times;&nbsp;</a><a href="#">Cleon Lounge Chair</a></p>	
								<p class="bolder">$1,199.00</p>
							</div>
							<div class="cartitem">
								<img src="http://placehold.it/100x100" alt="Cart item 1" width="100" height="100"><p class="boldest"><a href="#">&times;&nbsp;</a><a href="#">Cleon Mono Chair</a></p>	
								<p class="bolder">$299.00</p>
							</div>
							<div class="cartitem">
								<img src="http://placehold.it/100x100" alt="Cart item 1" width="100" height="100"><p class="boldest"><a href="#">&times;&nbsp;</a><a href="#">Cleon Lounge Chair</a></p>	
								<p class="bolder">$899.00</p>
							</div> 
						    -->
							<p class="boldest">TOTAL IN YOUR CART &nbsp;<span class="bolder">&nbsp; $2397</span></p>
							<a class="boldest" href="">VIEW CART</a><a class="boldest" href="">CHECKOUT</a>
						</div>
					</div>
				</div>
			</section>
			<section class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 ">
							<div id="head-container">
								<h1>Need a car!</h1>
								<h5>Big or Small ! <strong> We have them all</strong></h5>
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>

<!--MAIN BODY-->
<!-- 

		<div id="main-browser" class="marged-cont withaddtocart">
			<div class="container-fluid">
				<div class="row options">
					<div class="col-sm-8">
						<select>
	 						<option value="allbrands">All Brands</option>
	 						<option value="brand1">Brand 1</option>
	 						<option value="brand2">Brand 2</option>
	 						<option value="brand3">Brand 3</option>
	 					</select>
						<select>
	 						<option value="loungechaires">Lounge Chaires</option>
	 						<option value="living">Living</option>
	 						<option value="bedroom">Bedroom</option>
	 					</select>
						<select>
	 						<option value="10-100">$10 to $100</option>
	 						<option value="200-500">$200 to $500</option>
	 						<option value="500-1000">$500 to $1000</option>
	 						<option value="1000">over $1000</option>
	 					</select>
						<select>
	 						<option value="white">White</option>
	 						<option value="red">Red</option>
	 						<option value="black">Black</option>
	 						<option value="blue">Blue</option>
	 						<option value="pink">Pink</option>
	 					</select>
						<ul class="opts">
							<li class="active"><img src="http://placehold.it/33x33" alt="Layout 1" width="33" height="33"></li>
							<li><a href="browse2.html#main-browser"><img src="http://placehold.it/33x33" alt="Layout 2" width="33" height="33"></a></li>
							<li><a href="browse3.html#main-browser"><img src="http://placehold.it/33x33" alt="Layout 3" width="33" height="33"></a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<div class="floater">
							<span class="bolder">Showing 1-12 of 24 items</span>
							<select>
		 						<option value="16items">16 Items</option>
		 					</select>
		 				</div>
					</div>
				</div>
				<div class="row prod-grid-6">
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/33x33" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/33x33" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/33x33" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
						<p>$899.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
						<p>$299.00</p>
					</div>
				</div>
				<div class="row prod-grid-6 pro-grid-6-next">
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
						<p>$899.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
						<p>$299.00</p>
					</div>
				</div>
				<div class="row prod-grid-6 pro-grid-6-next">
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
						<p>$899.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
						<p>$299.00</p>
					</div>
				</div>
				<div class="row prod-grid-6 pro-grid-6-next">
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
						<p>$899.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
						<p>$1,199.00</p>
					</div>
					<div class="col-sm-3">
						<div class="addtocart">
							<ul>
								<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
								</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
								</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
							</ul>
						</div>
						<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
						<p>$299.00</p>
					</div>
				</div>
			</div>
				





				<div class="showmore">
					<div class="row prod-grid-6">
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
							<p>$899.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
							<p>$299.00</p>
						</div>
					</div>
					<div class="row prod-grid-6 pro-grid-6-next">
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
							<p>$899.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
							<p>$299.00</p>
						</div>
					</div>
					<div class="row prod-grid-6 pro-grid-6-next">
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
							<p>$899.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
							<p>$299.00</p>
						</div>
					</div>
					<div class="row prod-grid-6 pro-grid-6-next">
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Mono Lounge Chair</a>
							<p>$899.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Cleon Lounge Chair</a>
							<p>$1,199.00</p>
						</div>
						<div class="col-sm-3">
							<div class="addtocart">
								<ul>
									<li><a href="#"><img src="http://placehold.it/21x20" alt="Add to cart" width="21" height="20"></a>
									</li><li><a href="#"><img src="http://placehold.it/19x17" alt="Wishlist" width="19" height="17"></a>
									</li><li><a href="#"><img src="http://placehold.it/17x17" alt="Fullscreen" width="17" height="17"></a></li>
								</ul>
							</div>
							<a href="#"><img src="http://placehold.it/345x345" alt="Product">Hot Mesh Lounge Chair</a>
							<p>$299.00</p>
						</div>
					</div>
					


				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<a href="#showmoretrigger" id="showmoretrigger" class="linethrough">VIEW MORE PRODUCTS</a>
					</div>
				</div>
			</div>
		</div>

	-->



		<footer>
			<div class="jumbotron hidden-xs">
				<div class="container">
					<div class="row" id="logos">
						<div class="col-sm-12">
							<ul>
								<li><a><img src="mercedes.png" width="80" height="80" alt="Footer-logo"></a></li>
								<li><a><img src="audi.png" width="80" height="80" alt="Footer-logo"></a></li>
								<li><a><img src="bmw.png" width="80" height="80" alt="Footer-logo"></a></li>
								<li><a><img src="dodge.png" width="80" height="80" alt="Footer-logo"></a></li>
								<li><a><img src="porshe.png" width="80" height="80" alt="Footer-logo"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<section class="container">
				<div class="row">
					<div class="col-sm-8">
						<h2>Get <span>70% Off</span> On Home Furnishing</h2>
						<p>AUTOlead for new cars furniture </p>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<a href="#">GET MORE OFFERS</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<h3>ABOUT US</h3>
						<p>"The ultimate goal of an automobile company is to showcase the vehicles on the website and thus create awareness about the new models and cars to be launched."</p>
						<p> So here we have an awesome collection of cars, just as an inspiration for an automobile website</p>
					</div>
					<div class="col-sm-4">
						<h3>CONNECT WITH US</h3>
						<p><img src="location.jpeg" alt="Location" width="20" height="20"> Raoued. Ariana, Tunisia.</p>
						<p><img src="mail.jpeg" alt="E-mail" width="20" height="20"> autoLead@Gmail.com</p>
						<p><img src="tel.jpeg" alt="Telephone" width="20" height="20">	(+216) 54 650 034</p>
					</div>
					<div class="col-sm-4">
						<h3>NEWSLETTER</h3>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain count of the system.</p>
						<form id="subscribe-form" action="action.php" method="POST">
							<input type="text" name="e-mail" placeholder="Enter Email Address...">
							<input type="submit" name="Submit" value="">
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p>&copy;2022 AUTOlead. All Rights Reserved</p>
					</div>
				</div>
			</section>
		</footer>
		<script type="text/javascript" src="assets/js/nav-toggler.js"></script>
		<script type="text/javascript" src="assets/js/tabs.js"></script>
		<script type="text/javascript" src="assets/js/quantity-handler.js"></script>
		<script	type="text/javascript" src="assets/js/hovers.js"></script>
		<script type="text/javascript" src="assets/js/showmore.js"></script>
		<script type="text/javascript" src="assets/js/topsearch.js"></script>
	</body>
</html>