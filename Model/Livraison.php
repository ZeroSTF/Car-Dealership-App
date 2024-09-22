<?php

class Livraison
{
    private $id;
    private $date_livraison;
    private $id_livreur;
    private $adresse_livraison;
    private $id_commande;

    /**
     * @param $id
     * @param $date_livraison
     * @param $id_livreur
     * @param $adresse_livraison
     * @param $id_commande
     */
    public function __construct($date_livraison, $id_livreur, $adresse_livraison, $id_commande)
    {
        $this->date_livraison = $date_livraison;
        $this->id_livreur = $id_livreur;
        $this->adresse_livraison = $adresse_livraison;
        $this->id_commande = $id_commande;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateLivraison()
    {
        return $this->date_livraison;
    }

    /**
     * @param mixed $date_livraison
     */
    public function setDateLivraison($date_livraison)
    {
        $this->date_livraison = $date_livraison;
    }

    /**
     * @return mixed
     */
    public function getIdLivreur()
    {
        return $this->id_livreur;
    }

    /**
     * @param mixed $id_livreur
     */
    public function setIdLivreur($id_livreur)
    {
        $this->id_livreur = $id_livreur;
    }

    /**
     * @return mixed
     */
    public function getAdresseLivraison()
    {
        return $this->adresse_livraison;
    }

    /**
     * @param mixed $adresse_livraison
     */
    public function setAdresseLivraison($adresse_livraison)
    {
        $this->adresse_livraison = $adresse_livraison;
    }

    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->id_commande;
    }

    /**
     * @param mixed $id_commande
     */
    public function setIdCommande($id_commande)
    {
        $this->id_commande = $id_commande;
    }






}