<?php
class commandee{
    private ?int $idcommande = null;
    private ?int $idpanier = null;
    private ?int $idclient = null;
   // private ?DateTime $datecommande = null;
    public function __construct($id = null, $k, $p /*$d*/){
        $this->idcommande = $id;
        $this->idpanier = $k;
        $this->idclient = $p;
       // $this->datecommande = $d;
    }

   /**
     * Get the value of idClient
     */
    public function getidcommande()
    {
        return $this->idcommande;
    }

    /**
     * Get the value of lastName
     */
    public function getidpanier()
    {
        return $this->idpanier;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setidpanier($idpanier)
    {
        $this->lastName = $idpanier;

        return $this;
    }
    public function getidclient()
    {
        return $this->idclient;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setidclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }
    public function getdatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setdatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }


}
?>