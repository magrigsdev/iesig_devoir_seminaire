<?php
class Organisateurs
{
    private $id_org;
    private $intitule_org;

    /**
     * __construct
     *
     * @param  mixed identifiant de l'organisateurs
     * @param  mixed nom de l'organisateurs
     * @return void rien
     */
    public function __construct($id_org, $intitule_org)
    {
        $this->id_org = $id_org;
        $this->intitule_org = $intitule_org;
    }

    /**
     *  recupère l'identifiant de l'organisateurs
     *
     * @param  mixed $this-
     * @return void l'identifiant de l'organisateurs
     */
    public function getIdOrg()
    {
        return $this->id_org;
    }

    /**
     * recupère le nom de l'organisateurs
     *
     * @param  mixed $this-
     * @return void
     */
    public function getIntituleOrg()
    {
        return $this->intitule_org;
    }
    
    /**
     * Modifie l'identifiant de l'organisateurs
     *
     * @param  mixed $id_org
     * @return void rien 
     */
    public function setIdOrg($id_org): void
    {
        $this->id_org = $id_org;
    }
    
    /**
     * Modifie le nom de l'organisateurs
     *
     * @param  mixed $intitule_org
     * @return void rien
     */
    public function setIntituleOrg($intitule_org): void
    {
        $this->intitule_org = $intitule_org;
    }






}