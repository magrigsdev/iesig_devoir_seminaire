<?php

/**
 * Intervenant
 * nom de l'intervenant
 * prenom de l'intervenant
 * affection de l'intervenant
 * addresse web  du site  de l'intervenant
 * l'identifiant de l'organisation
 */
class Intervenant
{
    private $nom;
    private $prenom;
    private $affection;
    private $url;
    private $fk_id_org;

    /**
     * __construct
     *
     * @param  string ex: Madzou
     * @param  string  ex: delsan
     * @param  string pompiste
     * @param  string ex: www.gerinaud.com 
     * @param  int identifiant de l'organisation
     * @return void rien
     */
    public function __construct($nom, $prenom, $affection, $url, $fk_id_org)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->affection = $affection;
        $this->url = $url;
        $this->fk_id_org = $fk_id_org;
    }

    /**
     * recupère Nom
     *
     * @param  mixed $this-
     * @return string nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * recupère Prenom
     *
     * @param  mixed $this-
     * @return string Prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * recupère Affection
     *
     * @param  mixed $this-
     * @return string Affection
     */
    public function getAffection()
    {
        return $this->affection;
    }

    /**
     * recupère Url
     *
     * @param  mixed $this-
     * @return string address web
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * recupère l'identifiant de l'organisation
     *
     * @param  mixed $this-
     * @return string l'identifiant de l'organisation
     */
    public function getFkIdOrg()
    {
        return $this->fk_id_org;
    }

    /**
     * Modifie Nom
     *
     * @param  mixed $nom
     * @param  mixed $this-
     * @param  mixed $nom
     * @return void rien
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * Modifie Prenom
     *
     * @param  mixed $prenom
     * @param  mixed $this-
     * @param  mixed $prenom
     * @return void rien
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * Modifie Affection
     *
     * @param  mixed $affection
     * @param  mixed $this-
     * @param  mixed $affection
     * @return void rien
     */
    public function setAffection($affection): void
    {
        $this->affection = $affection;
    }

    /**
     * Modifie Url
     *
     * @param  mixed string
     * @param  mixed $this-
     * @param  mixed $url
     * @return void rien 
     */

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * Modifie l'identifiant de l'organisation
     *
     * @param  mixed $fk_id_org
     * @param  mixed $this-
     * @param  mixed $fk_id_org
     * @return void rien
     */
    public function setFkIdOrg($fk_id_org): void
    {
        $this->fk_id_org = $fk_id_org;
    }




}