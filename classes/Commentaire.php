<?php

class Commentaire
{
    private $id_event;
    private $id_part;
    private $com;

    /**
     * __construct
     *
     * @param  int identifiant de l'événement
     * @param  int l'identifiant du participant
     * @param  string commentaire
     * @return void rien
     */
    public function __construct($id_event, $id_part, $com)
    {
        $this->id_event = $id_event;
        $this->id_part = $id_part;
        $this->com = $com;
    }

    /**
     * récupère identifiant de l'événement
     *
     * @return int identifiant de l'événement
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * récupère l'identifiant du participant
     *
     * @return int l'identifiant du participant
     */
    public function getIdPart()
    {
        return $this->id_part;
    }

    /**
     * récupère commentaire
     *
     * @return string commentaire
     */
    public function getCom()
    {
        return $this->com;
    }
    
    /**
     * Modifie identifiant de l'événement
     *
     * @param  mixed $id_event
     * @return void
     */
    public function setIdEvent($id_event): void
    {
        $this->id_event = $id_event;
    }
    
    /**
     * Modifie l'identifiant du participant
     *
     * @param  mixed $id_part
     * @return void rien
     */
    public function setIdPart($id_part): void
    {
        $this->id_part = $id_part;
    }
    
    /**
     * Modifie commentaire
     *
     * @param  mixed $com
     * @return void rien
     */
    public function setCom($com): void
    {
        $this->com = $com;
    }






}