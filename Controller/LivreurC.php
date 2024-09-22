<?php

include_once '../../config.php';
require_once '../../Model/Livreur.php';

class LivreurC{

    public function afficher_Livreurs(){
        $sql="SELECT * FROM livreur" ;
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
        $sql="SELECT * FROM livreur" ;
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


    function ajouter_Livreur(Livreur $Livreur){
        $sql="INSERT INTO livreur (nom, prenom, email, etat) 
				VALUES (:nom, :prenom, :email, :etat)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $Livreur->getNom(),
                'prenom' => $Livreur->getPrenom(),
                'email' => $Livreur->getEmail(),
                'etat' => $Livreur->getEtat()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function supprimer_Livreur($id){
        $sql="DELETE FROM livreur WHERE id= :id";
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


    function modifier_Livreur(Livreur $Livreur, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE livreur SET 
						nom = :date_Livreur, 
						prenom = :id_livreur, 
						email = :adresse_Livreur,
						etat = :id_commande
					WHERE id = :id"
            );

            $query->execute([
                'date_Livreur' => $Livreur->getNom(),
                'id_livreur' => $Livreur->getPrenom(),
                'adresse_Livreur' => $Livreur->getEmail(),
                'id_commande' => $Livreur->getEtat(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getLivreurbyId($id)
    {
        $requete = "select * from livreur where id= '".$id."'";
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