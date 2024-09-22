<?php

include_once '../../config.php';
require_once '../../Model/Categorie.php';

class CategorieC{
    // CRUD
    public function afficher_categorie(){
        $sql="SELECT * FROM categorie" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

    function ajouter_categorie(Categorie $categorie){
        $sql="INSERT INTO categorie (nom,nb_portes,nb_places,poid_max) 
				VALUES (:nom,:nb_portes,:nb_places,:poid_max)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $categorie->getNom(),
                'nb_portes' => $categorie->getNbPortes(),
                'nb_places' => $categorie->getNbPlaces(),
                'poid_max' => $categorie->getPoidMax()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimer_categorie($id){
        $sql="DELETE FROM categorie WHERE id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifier_categorie(Categorie $categorie, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE categorie SET 
						nom = :nom, 
						nb_portes = :nb_portes, 
						nb_places = :nb_places, 
						poid_max = :poid_max
					WHERE id = :id"
            );

            $query->execute([
                'nom' => $categorie->getNom(),
                'nb_portes' => $categorie->getNbPortes(),
                'nb_places' => $categorie->getNbPlaces(),
                'poid_max' => $categorie->getPoidMax(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getVoiturebyMatricule($id)
    {
        $requete = "select * from categorie where id= '".$id."'";
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