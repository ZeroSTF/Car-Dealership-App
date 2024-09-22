<?PHP
include_once "../../Controller/LivreurC.php";


$livreurC = new LivreurC();


if (isset($_GET["id"])){
    $livreurC->supprimer_Livreur($_GET["id"]);
    header('Location: livreurs.php');
}

?>