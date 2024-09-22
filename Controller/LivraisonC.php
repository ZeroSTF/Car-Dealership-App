<?php

include_once '../../config.php';
require_once '../../Model/Livraison.php';

class LivraisonC{

    public function afficher_Livraisons(){
        $sql="SELECT * FROM livraison" ;
        $db = config::getConnexion() ;//db connection
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            echo $e->getMessage();
            die('Erreur:' .$e->getMessage()) ;
        }
    }



    public function recherche($a){
        $sql="SELECT * FROM livraison" ;
        $db = config::getConnexion() ;//db connection
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            echo $e->getMessage();
            die('Erreur:' .$e->getMessage()) ;
        }
    }


    function ajouter_Livraison(Livraison $livraison){
        $sql="INSERT INTO livraison (date_livraison,id_livreur,adresse_livraison,id_commande) 
				VALUES (:date_livraison,:id_livreur,:adresse_livraison,:id_commande)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'date_livraison' => $livraison->getDateLivraison(),
                'id_livreur' => $livraison->getIdLivreur(),
                'adresse_livraison' => $livraison->getAdresseLivraison(),
                'id_commande' => $livraison->getIdCommande()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function supprimer_livraison($id){
        $sql="DELETE FROM livraison WHERE id= :id";
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


    function modifier_livraison($livraison, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE livraison SET 
						date_livraison = :date_livraison, 
						id_livreur = :id_livreur, 
						adresse_livraison = :adresse_livraison,
						id_commande = :id_commande
					WHERE id = :id"
            );

            $query->execute([
                'date_livraison' => $livraison->getDate(),
                'id_livreur' => $livraison->getIdLivreur(),
                'adresse_livraison' => $livraison->getAdresse(),
                'id_commande' => $livraison->getIdCommande(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getLivraisonbyId($id)
    {
        $requete = "select * from livraison where id= '".$id."'";
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

    function getLivreurRand()
    {
        $requete = "select * from livreur ORDER BY rand() LIMIT 1";
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