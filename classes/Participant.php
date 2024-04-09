<?php

class Participant
{
    private $id_part;
    private $nom_part;
    private $email_part;

    /**
     * __construct
     *
     * @param  mixed l'identifiant du participant
     * @param  mixed nom du participant
     * @param  mixed email du participant
     * @return void rien
     */
    public function __construct($id_part, $nom_part, $email_part)
    {
        $this->id_part = $id_part;
        $this->nom_part = $nom_part;
        $this->email_part = $email_part;
    }

    /**
     * récuperer l'identifiant du participant
     *
     * @param  mixed $this-
     * @return void
     */
    public function getIdPart()
    {
        return $this->id_part;
    }

    /**
     * récuperer Nom  du participant
     *
     * @param  mixed $this-
     * @return void
     */
    public function getNomPart()
    {
        return $this->nom_part;
    }

    /**
     * récuperer Email du participant
     *
     * @param  mixed $this-
     * @return void
     */
    public function getEmailPart()
    {
        return $this->email_part;
    }


    /**
     * Modifie l'identifiant du participant
     *
     * @param  mixed $id_part
     * @param  mixed $this-
     * @param  mixed $id_part
     * @return void rien
     */
    public function setIdPart($id_part): void
    {
        $this->id_part = $id_part;
    }

    /**
     * Modifie Nom  du participant
     *
     * @param  mixed $nom_part
     * @param  mixed $this-
     * @param  mixed $nom_part
     * @return void rien
     */
    public function setNomPart($nom_part): void
    {
        $this->nom_part = $nom_part;
    }

    /**
     * Modifie Email du participant
     *
     * @param  mixed $email_part
     * @param  mixed $this-
     * @param  mixed $email_part
     * @return void rien
     */
    public function setEmailPart($email_part): void
    {
        $this->email_part = $email_part;
    }


}