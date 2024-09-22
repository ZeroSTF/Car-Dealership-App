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
	<title>Add article</title>
</head>
	<body>
		<header>
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
			  		<!-- <li><a href="index3.html">Homepage 3</a></li>
			  		<li><a href="browse1.html">Portfolio Grid 1</a></li>
			  		<li><a href="browse2.html">Portfolio Grid 2</a></li>
			  		<li><a href="browse3.html">Portfolio Grid 3</a></li>
			  		<li><a href="product-page.html">Product Page</a></li>
			  		<li><a href="cart.html">Cart</a></li>
			  		<li><a href="contact.html">Contact</a></li>
			  	</ul>
			
			 	<ul>
				  	<li><a href="browse1.html"><img src="http://placehold.it/20x20" alt="New" width="20" height="20">New</a></li>
				  	<li><a href="browse2.html"><img src="http://placehold.it/20x20" alt="Living" width="20" height="20">Living</a></li>
				  	<li><a href="browse3.html"><img src="http://placehold.it/20x20" alt="Bedroom" width="20" height="20">Bedroom</a></li>
				  	<li><a href="browse1.html"><img src="http://placehold.it/20x20" alt="Dining" width="20" height="20">Dining</a></li>
				  	<li><a href="browse2.html"><img src="http://placehold.it/20x20" alt="Storage" width="20" height="20">Storage</a></li>
				  	<li><a href="browse3.html"><img src="http://placehold.it/20x20" alt="Study" width="20" height="20">Study</a></li>
				  	<li><a href="browse1.html"><img src="http://placehold.it/20x20" alt="Mattresses" width="20" height="20">Mattresses</a></li>
				  	<li><a href="browse2.html"><img src="http://placehold.it/20x20" alt="Kitchens" width="20" height="20">Kitchens</a></li>
				  	<li><a href="browse3.html"><img src="http://placehold.it/20x20" alt="Wardrobes" width="20" height="20">Wardrobes</a></li>
				  	<li><a href="browse1.html"><img src="http://placehold.it/20x20" alt="Interiors" width="20" height="20">Interiors</a></li>
				  	<li><a href="browse2.html"><img src="http://placehold.it/20x20" alt="Decor" width="20" height="20">Decor</a></li>
				</ul>
				-->
			</div>
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
<div class="container">

<?php require 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
   


    $nomErr = "";
    $descriptionErr = "";
    $prixErr = "";
    $binErr = "";
    $valid = true;

    $nom = htmlentities(trim($_POST['nom']));
    $description = htmlentities(trim($_POST['description']));
    $prix = htmlentities(trim($_POST['prix']));




    if (empty($nom)) {
        $nomErr = 'Please Enter name ';
        $valid = false;
    }

    if (empty($description)) {
        $descriptionErr = 'Please Enter cars description ';
        $valid = false;
    }
    if (empty($prix)) {
        $prixErr = 'Please Enter price ';
        $valid = false;
    }





    if ($valid) {

        $target_dir = "uploads/";
        $target_file = $target_dir .uniqid(). basename($_FILES["bin"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        move_uploaded_file($_FILES["bin"]["tmp_name"],$target_file);
        $check = getimagesize($_FILES["bin"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["bin"]["tmp_name"],$target_file)) {

            echo "Image uploaded successfully";

        }else{

            echo "Failed to upload image";

    }
        $pdo = DatabaseConnect::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        $sql = "INSERT INTO product (nom,description,prix,bin) values( ?, ?, ? , ? )";
        $q = $pdo->prepare($sql);
        $q->execute(array($nom, $description, $prix,   $target_file));
        DatabaseConnect::disconnect();
        header("Location: browseArticle.php");
    }
}
?>

    <br />
    <div class="container">

        <br />
        <div class="row">

            <br />
            <h1>Add article</h1>
            <p>

        </div>
        <p>

            <br />
        <form method="post" action="browse12.php" enctype="multipart/form-data">

            <br />

            <p>

    </div>
    <p>



        <br />
    <div class="control-group<?php echo !empty($nomErr) ? 'error' : ''; ?>">
        <label class="control-label">article name</label>

        <br />
        <div class="controls">
            <input type="text" name="nom" value="<?php echo !empty($nom) ? $nom : ''; ?>">
            <?php if (!empty($nomErr)) : ?>
                <span class="help-inline"><?php echo $nomErr; ?></span>
            <?php endif; ?>
        </div>
        <p>

    </div>
    <p>


        <br />
    <div class="control-group<?php echo !empty($descriptionErr) ? 'error' : ''; ?>">
        <label class="control-label">article description</label>

        <br />
        <div class="controls">
            <input type="text" name="description" value="<?php echo !empty($description) ? $description : ''; ?>">
            <?php if (!empty($descriptionErr)) : ?>
                <span class="help-inline"><?php echo $descriptionErr; ?></span>
            <?php endif; ?>
        </div>
        <p>

    </div>
    <p>


        <br />
    <div class="control-group <?php echo !empty($prix) ? 'error' : ''; ?>">
        <label class="control-label">Price</label>

        <br />
        <div class="controls">
            <input name="prix" type="text" placeholder="Price" value="<?php echo !empty($prix) ? $prix : ''; ?>">
            <?php if (!empty($prixErr)) : ?>
                <span class="help-inline"><?php echo $prixErr; ?></span>
            <?php endif; ?>
        </div>
        <p>

    </div>
    <p>

        <br />
    <div class="control-group <?php echo !empty($binErr) ? 'error' : ''; ?>">
        <label class="control-label">article picture </label>

        <br />
        <div class="controls">
            <input type="file" name="bin" id="bin" value="<?php echo !empty($bin) ? $bin : ''; ?>">
            <?php if (!empty($binErr)) : ?>
                <span class="help-inline"><?php echo $binErr; ?></span>
            <?php endif; ?>
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
        <input type="submit" class="btn btn-warning" name="submit" value="submit">
        <a class="btn" href="browseArticle.php">Retour</a>
    </div>
    <p>

        </form>
    <p>



        </div>
    <p>


</body>

</html>