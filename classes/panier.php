<?php
/**
 * Created by PhpStorm.
 * User: gblain
 * Date: 2018-09-12
 * Time: 17:58
 */
class Panier
{
    public $idUser;
    public $idProd;
    public $qte;

    public function __construct($idUser, $idProd, $qte)
    {
        $this->idUser = $idUser;
        $this->idProd = $idProd;
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getIdProd()
    {
        return $this->idProd;
    }

    /**
     * @param mixed $idProd
     */
    public function setIdProd($idProd)
    {
        $this->idProd = $idProd;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

}
