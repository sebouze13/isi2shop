<?php
class Produit
{
    public $id;
    public $id_cat;
    public $libelle;
    public $description;
    public $img;
    public $prix;
    public $qte_dispo;

    public function __construct($id, $id_cat, $libelle, $description, $img, $prix, $qte_dispo)
    {
        $this->id = $id;
        $this->id_cat = $id_cat;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->img = $img;
        $this->prix = $prix;
        $this->qte_dispo = $qte_dispo;
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
    public function getIdCat()
    {
        return $this->id_cat;
    }

    /**
     * @param mixed $id_cat
     */
    public function setIdCat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getQteDispo()
    {
        return $this->qte_dispo;
    }

    /**
     * @param mixed $qte_dispo
     */
    public function setQteDispo($qte_dispo)
    {
        $this->qte_dispo = $qte_dispo;
    }


}