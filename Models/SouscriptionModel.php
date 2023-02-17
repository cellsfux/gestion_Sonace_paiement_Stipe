<?php 

namespace App\Models;

class SouscriptionModel extends Model{
    //CodeSouscript,Descript, DateSouscript,ModePaie#IdClient,#Matricule, #NumPolice
    protected $id;
    protected $description;
    protected $date_Scouscription;
    protected $mode_paiement;
    protected $id_assurence;
    protected $id_client;


    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date_Scouscription
     */
    public function getDateScouscription()
    {
        return $this->date_Scouscription;
    }

    /**
     * Set the value of date_Scouscription
     */
    public function setDateScouscription($date_Scouscription): self
    {
        $this->date_Scouscription = $date_Scouscription;

        return $this;
    }

    /**
     * Get the value of mode_paiement
     */
    public function getModePaiement()
    {
        return $this->mode_paiement;
    }

    /**
     * Set the value of mode_paiement
     */
    public function setModePaiement($mode_paiement): self
    {
        $this->mode_paiement = $mode_paiement;

        return $this;
    }

    /**
     * Get the value of id_client
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * Set the value of id_client
     */
    public function setIdClient($id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Get the value of id_assurence
     */
    public function getIdAssurence()
    {
        return $this->id_assurence;
    }

    /**
     * Set the value of id_assurence
     */
    public function setIdAssurence($id_assurence): self
    {
        $this->id_assurence = $id_assurence;

        return $this;
    }
}