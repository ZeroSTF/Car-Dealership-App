<?php

include_once '../../config.php';
require_once '../../Model/Vente.php';

class VenteC{
    // CRUD
    public function afficher_vente(){
        $sql="SELECT * FROM vente" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

    function ajouter_vente(Vente $vente){
        $sql="INSERT INTO vente (id_user, id_voiture, date) 
				VALUES (:id_user, :id_voiture, :date)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'id_user' => $vente->getIdUser(),
                'id_voiture' => $vente->getIdVoiture(),
                'date' => $vente->getDate()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimer_vente($id){
        $sql="DELETE FROM vente WHERE id= :id";
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

    function modifier_vente(vente $vente, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE vente SET 
						id_user = :id_user, 
						id_voiture = :id_voiture, 
						date = :date
					WHERE id = :id"
            );

            $query->execute([
                'id_user' => $vente->getIdUser(),
                'id_voiture' => $vente->getIdVoiture(),
                'date' => $vente->getDate(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getventebyId($id)
    {
        $requete = "select * from vente where id= '".$id."'";
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