<?php

include_once '../../config.php';
require_once '../../Model/Commande.php';

class CommandeC{

    public function afficher_Commandes(){
        $sql="SELECT * FROM commande" ;
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


    function ajouter_Commande(Commande $commande){
        $sql="INSERT INTO commande (date,prix,nom) 
				VALUES (:date,:prix,:nom)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'date' => $commande->getDate(),
                'prix' => $commande->getPrix(),
                'nom' => $commande->getNom()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function supprimer_commande($id){
        $sql="DELETE FROM commande WHERE reference= :id";
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


    function modifier_commande(Commande $commande, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE commande SET 
						nom = :nom, 
						prix = :prix, 
						date = :date
					WHERE reference = :reference"
            );

            $query->execute([
                'nom' => $commande->getNom(),
                'prix' => $commande->getPrix(),
                'date' => $commande->getDate(),
                'reference' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getCommandebyId($id)
    {
        $requete = "select * from commande where reference= '".$id."'";
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