<?php
include_once '../../Model/Utilisateur.php';
include_once '../../Controller/UtilisateurC.php';
session_start() ;
if (isset($_SESSION["username"]))
{
    if ($_SESSION["role_user"] == "ADMIN_ROLE")
        header("location:../back/utilisateurs.php") ;
    else if ($_SESSION["role_user"] == "USER_ROLE")
        header("location:browse1.php") ;
}

$utilisateurC = new UtilisateurC();

if (
    isset($_POST["nom_user"]) &&
    isset($_POST["prenom_user"]) &&
    isset($_POST["email_user"]) &&
    isset($_POST["tel_user"]) &&
    isset($_POST["adresse_user"]) &&
    isset($_POST["username"]) &&
    isset($_POST["password_user"])
) {

    if (
        !empty($_POST["nom_user"]) &&
        !empty($_POST["prenom_user"]) &&
        !empty($_POST["email_user"]) &&
        !empty($_POST["tel_user"]) &&
        !empty($_POST["adresse_user"]) &&
        !empty($_POST["username"]) &&
        !empty($_POST["password_user"])
    ){
        $nom_user = $_POST['nom_user'] ;
        $prenom_user = $_POST['prenom_user'] ;
        $email_user = $_POST['email_user'] ;
        $tel_user = $_POST['tel_user'] ;
        $adresse_user = $_POST['adresse_user'] ;
        $username = $_POST['username'] ;
        $password_user = md5($_POST['password_user']) ;
        $role_user = 'USER_ROLE';

        $utilisateur = new Utilisateur($nom_user,
            $prenom_user,
            $email_user,
            $tel_user,
            $adresse_user,
            $username,
            $password_user,
            $role_user
        );

        $utilisateurC->ajouter_Utilisateur($utilisateur);
        header('Location: browse1.php');
    }




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
    <title>Contact</title>
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
		</header>


<section class="container">
    <div class="row">
        <div class="col-sm-5 contactbox">
            <h3>Creer Votre Compte</h3>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-7 contactbox">
            <form id="contact-form" method="POST">
                <div class="row">
                    <div class="col-sm-6 name-input">
                        <label>nom</label><br>
                        <input type="text" name="nom_user" placeholder="Your Name" required>
                    </div>
                    <div class="col-sm-6 email-input">
                        <label>prenom</label><br>
                        <input type="text" name="prenom_user"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="message-input col-sm-12">
                        <label>username</label><br>
                        <input type="text" name="username"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="message-input col-sm-12">
                        <label>email</label><br>
                        <input type="email" name="email_user"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="message-input col-sm-12">
                        <label>tel</label><br>
                        <input type="tel" name="tel_user"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="message-input col-sm-12">
                        <label>adresse</label><br>
                        <input type="text" name="adresse_user"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="message-input col-sm-12">
                        <label>password</label><br>
                        <input type="password" name="password_user"  required>
                    </div>
                </div>
                <input type="submit" id="submitform" name="Submit" value="Sign Up">
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



<script type="text/javascript" src="assets/js/nav-toggler.js"></script>
<script type="text/javascript" src="assets/js/topsearch.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
</body>
</html>