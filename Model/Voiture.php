<?php

class Voiture
{
    private $matricule;
    private $marque;
    private $etat;
    private $kilometrage;
    private $prix;
    private $consommation;
    private $transmission;
    private $idC;

    /**
     * @param $matricule
     * @param $marque
     * @param $etat
     * @param $kilometrage
     * @param $prix
     * @param $consommation
     * @param $transmission
     */
    public function __construct($matricule, $marque, $etat, $kilometrage, $prix, $consommation, $transmission)
    {
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->etat = $etat;
        $this->kilometrage = $kilometrage;
        $this->prix = $prix;
        $this->consommation = $consommation;
        $this->transmission = $transmission;
    }

    /**
     * @return mixed
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * @param mixed $idC
     */
    public function setIdC($idC)
    {
        $this->idC = $idC;
    }


    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * @param mixed $kilometrage
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }




}