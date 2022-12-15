<?php
require_once '../config.php';
//include_once '../model/panier.php';

class Panierc
{
    public function listpanier($abs)
    {
        $sql = "SELECT * FROM pan where idclient = $abs";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    

   public function deletepanier($azerty,$qwerty,$swerty) {
        $sql = "DELETE FROM pan where idproduit = $azerty and idclient = $qwerty and idpanier = $swerty";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

     /*  public function addpanier($idc,$idp,$np,$pr) {
        $sql = "INSERT INTO pan (idpanier, idclient, idproduit, nomproduit, prix ,quantite)  
        VALUES ( :idpp, :idc, :idp, :np, :pr, :qu) WHERE idpanier= $idc ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'ipp' => Null,
                'idc' => $idc,
                'idp' => $idp,
                'np' => $np,
                'pr' => $pr,
                'qu' => '1'
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }*/
  /*  public function addpanier($idc,$idp,$np,$pr) {
        $sql = "INSERT INTO pan (idpanier, idclient, idproduit, nomproduit, prix ,quantite)  
        VALUES ( Null, :idc, :idp, :np, :pr, 1) WHERE idclient= $idc ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idc' => $idc,
                'idp' => $idp,
                'np' => $np,
                'pr' => $pr
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }*/
    function Addpanier($panier)
    {
        $sql = "INSERT INTO pan  
        VALUES (NULL, :idc,:idp,'1')";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idc' => $panier->getidclient(),
                'idp' => $panier->getidproduit(),
                ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
 /*

    function updatePanier($paniers)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE panier SET 
                    idpanier = :idp, 
                    idclient = :idc, 
                    idproduit = :idpp, 
                    quantite = :quu
                WHERE idpanier= :idp'
            );
            $query->execute([
                'idp' => $paniers->getidpanier(),
                'idc' => $paniers->getidclient(),
                'idpp' => $paniers->getidproduit(),
                'quu' => $paniers->getquantite()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }*/
    public function rechercherr($aka,$ka)
    {
        $sql = "SELECT * FROM pan where idproduit = $aka and idclient = $ka";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

public function listproduit()
{
    $sql = "SELECT * FROM produits";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}
public function updatepanier($pk,$lm) {

    $sql = "UPDATE pan SET quantite = $pk WHERE idpanier = $lm";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}

}
