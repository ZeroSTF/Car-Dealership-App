<?php

include_once '../../Controller/VenteC.php';
$venteC = new VenteC();
if (isset($_GET['id'])){
    $venteC->supprimer_vente($_GET['id']);
    header('Location: ventes.php');
}
header('Location: ventes.php');