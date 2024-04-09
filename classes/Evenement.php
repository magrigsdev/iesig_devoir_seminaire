<?php


class Evenement
{
    private $id_event;
    private $type_event;
    private $resume;
    private $lieu;
    private $titre;
    private $fk_id_org;
    
    /**
     * __construct de l'événement
     *
     * @param  mixed identifiant de l'événement
     * @param  mixed type de l'événement ex: (seminaire ou conference)
     * @param  mixed resume de l'événement
     * @param  mixed lieu de l'événement
     * @param  mixed titre de l'événement
     * @param  mixed identifiant de l'organisation
     * @return void rien
     */
    public function __construct($id_event, $type_event, $resume, $lieu, $titre, $fk_id_org)
    {
        $this->id_event = $id_event;
        $this->type_event = $type_event;
        $this->resume = $resume;
        $this->lieu = $lieu;
        $this->titre = $titre;
        $this->fk_id_org = $fk_id_org;
    }
    
    /**
     * récupère l'identifiant de l'événement
     *
     * @param  mixed $this-
     * @return void
     */
    public function getIdEvent() {return $this->id_event;}
	
	/**
	 * récupère Type de l'événement
	 *
	 * @param  mixed $this-
	 * @return void Type de l'événement
	 */
	public function getTypeEvent() {return $this->type_event;}
	
	/**
	 * récupère Resume de l'événement
	 *
	 * @param  mixed $this-
	 * @return void Resume de l'événement
	 */
	public function getResume() {return $this->resume;}
	
	/**
	 * récupère Lieu  de l'événement
	 *
	 * @param  mixed $this-
	 * @return void Lieu  de l'événement
	 */
	public function getLieu() {return $this->lieu;}
	
	/**
	 * récupère Titre de l'événement
	 *
	 * @param  mixed $this-
	 * @return void Titre de l'événement
	 */
	public function getTitre() {return $this->titre;}
	
	/**
	 * récupère l'identifiant de l'organisation
	 *
	 * @param  mixed $this-
	 * @return void l'identifiant de l'organisation
	 */
	public function getFkIdOrg() {return $this->fk_id_org;}
    
    /**
     * Modifie l'identifiant de l'événement
     *
     * @param  mixed $id_event
     * @param  mixed $this-
     * @param  mixed $id_event
     * @return void rien
     */
    public function setIdEvent( $id_event): void {$this->id_event = $id_event;}
	
	/**
	 * Modifie Type de l'événement
	 *
	 * @param  mixed $type_event
	 * @param  mixed $this-
	 * @param  mixed $type_event
	 * @return void rien
	 */
	public function setTypeEvent( $type_event): void {$this->type_event = $type_event;}
	
	/**
	 * Modifie Resume
	 *
	 * @param  mixed $resume
	 * @param  mixed $this-
	 * @param  mixed $resume
	 * @return void rien
	 */
	public function setResume( $resume): void {$this->resume = $resume;}
	
	/**
	 * Modifie Lieu
	 *
	 * @param  mixed $lieu
	 * @param  mixed $this-
	 * @param  mixed $lieu
	 * @return void rien
	 */
	public function setLieu( $lieu): void {$this->lieu = $lieu;}
	
	/**
	 * Modifie Titre
	 *
	 * @param  mixed $titre
	 * @param  mixed $this-
	 * @param  mixed $titre
	 * @return void rien
	 */
	public function setTitre( $titre): void {$this->titre = $titre;}
	
	/**
	 * Modifie l'identifiant de l'organisation
	 *
	 * @param  mixed $fk_id_org
	 * @param  mixed $this-
	 * @param  mixed $fk_id_org
	 * @return void rien
	 */
	public function setFkIdOrg( $fk_id_org): void {$this->fk_id_org = $fk_id_org;}

	

	


}