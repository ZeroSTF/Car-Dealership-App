<?php

include_once '../../Controller/VoitureC.php';
$voitureC = new VoitureC();
if (isset($_GET['id'])){
    $voitureC->supprimer_Voiture($_GET['id']);
    header('Location: voitures.php');
}
header('Location: voitures.php');