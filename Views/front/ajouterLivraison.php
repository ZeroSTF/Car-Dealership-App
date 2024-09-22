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
<script src="assets/js/carousel.js"></script>
<script src="assets/js/nav-toggler.js"></script>
<script src="assets/js/nav-toggler.js"></script>
<script src="assets/js/tabs.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,800%7CPlayfair+Display:400,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css" />
	<title>Cars for rent</title>
	<style>
	
		.lead{
  font-size:16.px;
}
.card {
	border: 0;
	margin: 10px;
	outline: none;
	cursor: pointer;
}

.slick-dots li button:before{
  color:#991B1E!important;
  font-size: 18px;
}
.card-body h3{
  color:#000;
  align-items:left;
  font-weight:600;
  margin:40px 0px 0px 0px;
  
}
.cust_card_btn_div{
  margin:0px 0px 50px;
  
}
.cust_card_btn{
  color:#fff;
  Background:#ffc859
;
  padding:16px 40px; 
  position:absolute;
  right:0px;
}
.card-body span{
  background:#991B1E;
  border-radius:4px;
  padding:10px 15px;
color:#fff;
  position:relative;
  float:right;
  margin-bottom:50px;
  
} 
	</style>
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
						<a href="index.html"><img src="logo.png" alt="AUTOlead Logo" width="100" height="100"></a>
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
			<body>

</div>
				<p>
				
				<br />
				<div class="container">
				
				<br />
				<div class="row">
				
				<br />
				<p>
				
				</div>
			
				
				
				<br />
			
				<section class="container">
    <div class="row">
        <div class="col-sm-5 contactbox">
            <h3>Ajouter livraison</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-7 contactbox">
            <form id="contact-form" method="POST">
                <div class="row">
                    <div class="col-sm-6 name-input">
                        <label>date</label><br>
                        <input type="date" name="date_livraison"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 name-input">
                        <label>adresse</label><br>
                        <input type="text" name="adresse_livraison"  required>
                    </div>
                </div>



                <input type="submit" id="submitform" name="Submit" value="ajouter">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 googlemap">
            <div id="map">
                <script>
                    function myMap() {
                        var mapCanvas = document.getElementById("map");
                        var myLatLng = {lat: 50 , lng: 20};
                        var mapOptions = {
                            center: myLatLng,
                            zoom: 4
                        }
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'Enter title here'});
                    }
                </script>
            </div>
        </div>
    </div>
</section>




















				<script>
	 $(document).ready(function(){
      $('.items').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

        ]
      });
    });
</script>
<script type="text/javascript" src="assets/js/nav-toggler.js"></script>
<script type="text/javascript" src="assets/js/topsearch.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
					</body>
				</html>