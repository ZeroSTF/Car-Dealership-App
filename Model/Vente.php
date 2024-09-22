<?php

class Vente
{
    private $id;
    private $id_user;
    private $id_voiture;
    private $date;

    /**
     * @param $id
     * @param $id_user
     * @param $id_voiture
     * @param $date
     */
    public function __construct($id, $id_user, $id_voiture, $date)
    {
        $this->id = $id;
        $this->id_user = $id_user;
        $this->id_voiture = $id_voiture;
        $this->date = $date;
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
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdVoiture()
    {
        return $this->id_voiture;
    }

    /**
     * @param mixed $id_voiture
     */
    public function setIdVoiture($id_voiture)
    {
        $this->id_voiture = $id_voiture;
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