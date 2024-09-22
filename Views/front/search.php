<html>
    <head>
        <title>Moteur de Recherche</title>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container ">
         
        <?php
     
    
     // Ouvre une connexion au serveur MySQL
     include 'database.php';
     $pdo = DatabaseConnect::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if ( isset($_POST['requete']) )
     $requete = htmlentities(trim($_POST['requete']));
 
 
  
     if (!empty($requete))
     {
         $req = "SELECT * FROM product WHERE nom LIKE '%$requete%'"; 
         $exec = $pdo->query($req);     
                       
 // exécuter la requête
         $nb_resultats = $exec->rowCount();              // compter les résultats
 
        
     if($nb_resultats != 0) 
     {
        echo '<center>';   
        echo '
            <form action="" method="Post" class="m-1">
            <input type="text" name="requete" size="60px">
            <input type="submit" value="Ok">
            </form>';
       echo '</center>';
       echo '<font color="blue">Résultat de votre recherche </font><br/>
             <font size="2px">'.$nb_resultats.'</font>';
 
 
     if($nb_resultats > 1)
     {
         echo ' <font size="2px" color="red">résultats</font> ';
     }
         else
         {
             echo ' <font size="2px" color="red">résultats trouvé</font>  ';
         } 
 
        echo  '<font size="2px">dans notre base de données :</font><br/><br/>';
 
 
 
     while($donnees =$exec->fetch(PDO::FETCH_ASSOC) )
     {
     ?>
    <div class="d-flex justify-content-center">

     <?php
           echo ' <div class="card" style="width: 18rem;">
             <img src="' . $donnees['bin'] .'"  style="width: 200px;height: 200px;"/> 
           <div class="card-body">
             <h5 class="card-title">'.$donnees['nom'].'</h5>
             <p class="card-text">'.$donnees['description'].'</p>
             <a href="#" class="btn btn-primary"> Prix :'.$donnees['prix'].'</a>
           </div>
         </div>';
         
           echo '</span>';
     ?>
 
     <?php
     } // fin de la boucle
     ?>
 
 
     <?php
     }
 
 
     else {
         echo '<center>';   
         echo '
            <form action="" method="Post">
            <input type="text" name="requete" size="60px">
            <input type="submit" value="Ok">
            </form>';
         echo '</center>';
         echo '<h5>Pas de résultats</h3>';
         echo '<pre>Nous n avons trouver aucun résultats pour votre requête
               <font color="blue">' .$_POST['requete'].'</font></pre>';
       
      }
     }
 
     else
     { 
 
 
      echo '<center>';   
      echo '
            <form action="" method="Post">
            <input type="text" name="requete" size="60px">
            <input type="submit" value="Ok">
            </form>';
      echo '</center>';      
 
     }
     DatabaseConnect::disconnect();
 ?>
            </div>

        </div>
    </body>
</html>