<?php

class Commande
{
    private $reference;
    private $prix;
    private $nom;
    private $date;

    /**
     * @param $reference
     * @param $prix
     * @param $nom
     * @param $date
     */
    public function __construct($reference, $prix, $nom, $date)
    {
        $this->reference = $reference;
        $this->prix = $prix;
        $this->nom = $nom;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }



}