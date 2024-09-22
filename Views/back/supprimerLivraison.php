<?PHP
include_once "../../Controller/LivraisonC.php";


$livraisonC = new LivraisonC();


if (isset($_GET["id"])){
    $livraisonC->supprimer_livraison($_GET["id"]);
    header('Location: livraisons.php');
}

?>