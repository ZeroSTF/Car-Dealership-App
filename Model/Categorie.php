<?php

class Categorie
{
    private $id;
    private $nom;
    private $nb_portes;
    private $nb_places;
    private $poid_max;

    /**
     * @param $id
     * @param $nom
     * @param $nb_portes
     * @param $nb_places
     * @param $poid_max
     */
    public function __construct($id, $nom, $nb_portes, $nb_places, $poid_max)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->nb_portes = $nb_portes;
        $this->nb_places = $nb_places;
        $this->poid_max = $poid_max;
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
    public function getNbPortes()
    {
        return $this->nb_portes;
    }

    /**
     * @param mixed $nb_portes
     */
    public function setNbPortes($nb_portes)
    {
        $this->nb_portes = $nb_portes;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nb_places;
    }

    /**
     * @param mixed $nb_places
     */
    public function setNbPlaces($nb_places)
    {
        $this->nb_places = $nb_places;
    }

    /**
     * @return mixed
     */
    public function getPoidMax()
    {
        return $this->poid_max;
    }

    /**
     * @param mixed $poid_max
     */
    public function setPoidMax($poid_max)
    {
        $this->poid_max = $poid_max;
    }




}