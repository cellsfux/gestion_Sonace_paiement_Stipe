<?php 

namespace App\Models;

class AssurenceModel extends Model{
//NumPolice,Nom,Echéance,Montant,Validité,#IdCateg,#IdCatalog

    protected $id;
    protected $nom_assurence;
    protected $description;
    protected $eheance;
    protected $montant;
    protected $validite;


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
     * Get the value of nom_assurence
     */
    public function getNomAssurence()
    {
        return $this->nom_assurence;
    }

    /**
     * Set the value of nom_assurence
     */
    public function setNomAssurence($nom_assurence): self
    {
        $this->nom_assurence = $nom_assurence;

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
     * Get the value of eheance
     */
    public function getEheance()
    {
        return $this->eheance;
    }

    /**
     * Set the value of eheance
     */
    public function setEheance($eheance): self
    {
        $this->eheance = $eheance;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     */
    public function setMontant($montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of validite
     */
    public function getValidite()
    {
        return $this->validite;
    }

    /**
     * Set the value of validite
     */
    public function setValidite($validite): self
    {
        $this->validite = $validite;

        return $this;
    }
}
