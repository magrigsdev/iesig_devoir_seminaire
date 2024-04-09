<?php

/**
 * classe Annonce
 * identifiant de l'intervenant
 * identifiant de l'evenement
 * date de la publication de l'intervention
 * date de la mise à jour de l'evenement
 */
class Annonce
{
    private $id_inter;
    private $id_event;
    private $date_inter;
    private $date_mise_a_jour;

    public function __construct($id_inter, $id_event, $date_inter, $date_mise_a_jour)
    {
        $this->id_inter = $id_inter;
        $this->id_event = $id_event;
        $this->date_inter = $date_inter;
        $this->date_mise_a_jour = $date_mise_a_jour;
    }

    /**
     * recupère l'identifiant de l'intervenant
     *
     * @param  mixed $this-
     * @return void l'identifiant de l'intervenant
     */
    public function getIdInter()
    {
        return $this->id_inter;
    }

    /**
     * recupère l'identifiant de l'evenement
     *
     * @param  mixed $this-
     * @return void l'identifiant de l'evenement
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * recupère date de l'intervenant
     *
     * @param  mixed $this-
     * @return void date de l'intervenant
     */
    public function getDateInter()
    {
        return $this->date_inter;
    }

    /**
     * recupère date de la mise à jour 
     *
     * @param  mixed $this-
     * @return void date de la mise à jour 
     */
    public function getDateMiseAJour()
    {
        return $this->date_mise_a_jour;
    }

    public function setIdInter( $id_inter): void {$this->id_inter = $id_inter;}

	public function setIdEvent( $id_event): void {$this->id_event = $id_event;}

	public function setDateInter( $date_inter): void {$this->date_inter = $date_inter;}

	public function setDateMiseAJour( $date_mise_a_jour): void {$this->date_mise_a_jour = $date_mise_a_jour;}

	


}
