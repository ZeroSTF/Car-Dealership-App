<?php

include_once '../../config.php';
require_once '../../Model/Voiture.php';

class VoitureC{
    // CRUD
    public function afficher_Voiture(){
        $sql="SELECT * FROM voiture" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

    function ajouter_Voiture(Voiture $Voiture){
        $sql="INSERT INTO voiture (matricule,marque,etat,kilometrage,prix,consommation,transmission,id_categorie) 
				VALUES (:matricule,:marque,:etat,:kilometrage,:prix,:consommation,:transmission,:id_categorie)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'matricule' => $Voiture->getMatricule(),
                'marque' => $Voiture->getMarque(),
                'etat' => $Voiture->getEtat(),
                'kilometrage' => $Voiture->getKilometrage(),
                'prix' => $Voiture->getPrix(),
                'consommation' => $Voiture->getConsommation(),
                'transmission' => $Voiture->getTransmission(),
                'id_categorie' => $Voiture->getIdC()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimer_Voiture($matricule){
        $sql="DELETE FROM voiture WHERE matricule= :matricule";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':matricule',$matricule);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifier_Voiture($Voiture, $matricule){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE voiture SET 
						matricule = :matricule, 
						marque = :marque, 
						etat = :etat, 
						kilometrage = :kilometrage,
						prix = :prix, 
						consommation = :consommation, 
						transmission = :transmission,
						id_categorie = :id_categorie
						
               
					WHERE matricule = :matricule"
            );

            $query->execute([
                'matricule' => $Voiture->getMatricule(),
                'marque' => $Voiture->getMarque(),
                'etat' => $Voiture->getEtat(),
                'kilometrage' => $Voiture->getKilometrage(),
                'prix' => $Voiture->getPrix(),
                'consommation' => $Voiture->getConsommation(),
                'transmission' => $Voiture->getTransmission(),
                'id_categorie' => $Voiture->getIdC()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getVoiturebyMatricule($id)
    {
        $requete = "select * from voiture where matricule= '".$id."'";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
           echo $th->getMessage();
        }
    }




}
?>