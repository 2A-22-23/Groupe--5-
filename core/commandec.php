<?php
require_once '../config.php';
class commandec
{
     public function Addcommande($ascc)
    {
        $sql = "INSERT INTO commande (idpanier,idclient) SELECT idpanier, idclient FROM pan where idclient = $ascc";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function listcommande($azer)
    {
     $sql = "SELECT commande.idcommande,pan.idproduit,pan.idpanier,produits.nom_prod,pan.quantite,produits.prix From pan,produits,commande where pan.idproduit = produits.id_prod and pan.idclient = $azer and commande.idclient = $azer";
     $db = config::getConnexion();
     try {
         $liste = $db->query($sql);
         return $liste;
     } catch (Exception $e) {
         die('Error:' . $e->getMessage());
     }       
    }
    public function deletecommande($azerty,$qwerty) {
        $sql = "DELETE FROM commande where idcommande = $azerty and idclient = $qwerty";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
?>