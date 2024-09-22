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
	<title>Read reservations</title>
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
            <br />

<?php require 'database.php'; 
$code_reservation = null;
 if ( !empty($_GET['id'])) { $code_reservation = $_REQUEST['id']; } 
if ( null==$code_reservation ) { header("Location: browse1.php"); }
 


              $pdo = DatabaseConnect::connect();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "SELECT * FROM voitures_a_louer where code_reservation = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($code_reservation));
             $data = $q->fetch(PDO::FETCH_ASSOC);
             $code_reservation = $data['code_reservation'];
             $date_reservation = $data['date_reservation'];
             $nb_jours = $data['nb_jours'];
             $heure_res = $data['heure_res'];
             $prix_res = $data['prix_res'];
          
             DatabaseConnect::disconnect();
      
     ?>

<br />
<div class="container mx-auto">

<br />
<div class="row">

<br />
<h1>Read reservation </h1>
<p>

</div>
<p>

<br />


<br />
<div class="control-group <?php echo !empty( $code_reservationErrr)?'error':'';?>">
                        <label class="control-label">Code reservation</label>

<br />
<div class="controls">
                            <input name="code_reservation" type="text"  placeholder="code_reservation" value="<?php echo !empty($code_reservation)?$code_reservation:'';?>">
                            <?php if (!empty($code_reservationErrr)): ?>
                                <span class="help-inline"><?php echo $code_reservationErrr;?></span>
                            <?php endif; ?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group<?php echo !empty($nb_joursErr)?'error':'';?>">
                    <label class="control-label">Number of days</label>

<br />
<div class="controls">
                            <input type="number" name="nb_jours" value="<?php echo !empty($nb_jours)?$nb_jours:''; ?>">
                            <?php if(!empty($nb_joursErr)):?>
                            <span class="help-inline"><?php echo $nb_joursErr ;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>


<br />
<div class="control-group<?php echo !empty($date_reservationErr)?'error':'';?>">
                    <label class="control-label">Date</label>

<br />
<div class="controls">
                            <input type="date" name="date_reservation" value="<?php echo !empty($date_reservation)?$date_reservation:''; ?>">
                            <?php if(!empty($date_reservationErr)):?>
                            <span class="help-inline"><?php echo $date_reservationErr ;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                 

<br />
<div class="control-group <?php echo !empty($heure_resErr)?'error':'';?>">
                        <label class="control-label">Hour of reservation </label>

<br />
<div class="controls">
                            <input name="heure_res" type="time" placeholder="Email Address" value="<?php echo !empty($heure_res)?$heure_res:'';?>">
                            <?php if (!empty($heure_resErr)): ?>
                                <span class="help-inline"><?php echo $heure_resErr;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group <?php echo !empty($prix_resErr)?'error':'';?>">
                        <label class="control-label">Prix</label>

<br />
<div class="controls">
                            <input name="prix_res" type="text" placeholder="Prix" value="<?php echo !empty($prix_res) ? $prix_res:'';?>">
                            <?php if (!empty($prix_resErr)): ?>
                                <span class="help-inline"><?php echo $prix_resErr;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                

<br />


                 

<br />

<p>

</div>
<p>


<br />
<div class="form-actions">
             
                 <a class="btn" href="browse11.php">Get back</a>
</div>
<p>

    
<p>



</div>
<p>


 </body>
</html>