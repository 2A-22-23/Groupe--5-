<?php
class Panierr
{
    private ?int $idpanier = null;
    private ?int $idclient = null;
    private ?int $idproduit = null;
    private ?int $quantite = null;

    public function __construct($idp = NULL , $idc, $idpp,$qu)
    {
        $this->idpanier = $idp;
        $this->idclient = $idc;
        $this->idproduit = $idpp;
        $this->quantite = $qu;
    }

    public function getidpanier()
    {
        return $this->idpanier;
    }

    /**
     * Get the value of lastName
     */
    public function getidclient()
    {
        return $this->idclient;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setidclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getidproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set the value of firstName
     *
     * 
     */

}
