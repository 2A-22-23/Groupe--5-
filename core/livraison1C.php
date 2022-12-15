<?php
include "../config.php";


  class Livraison1C
  {
    function afficherLivraison($Livraison){

        echo "Idlivraison: ".$Livraison->getIdlivraison()."<br>";
        echo "date: ".$Livraison->getdate()."<br>";
        echo "destinataire: ".$Livraison->getdestinataire()."<br>";
	echo "codepostal: ".$Livraison->getcodepostal()."<br>";
                              }
    

    function ajouterLivraison($Livraison){
        $sql="INSERT INTO Livraison (Idlivraison,date,destinataire,codepostal) VALUES (:Idlivraison,:date,:destinataire,:codepostal)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $Idlivraison=$Livraison->getIdlivraison();
                     $date=$Livraison->getdate();
                     $destinataire=$Livraison->getdestinataire();
			$codepostal=$Livraison->getcodepostal();


             
                            $req->bindVAlue(':Idlivraison',$Idlivraison);
                            $req->bindVAlue(':date',$date);
                            $req->bindVAlue(':destinataire',$destinataire);
			    $req->bindVAlue(':codepostal',$codepostal);

          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherLivraisons(){
        $sql = "SElECT * From Livraison ORDER BY Idlivraison";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerLivraison($Idlivraison)
    {
        $sql = "DELETE FROM Livraison WHERE Idlivraison= :Idlivraison";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idlivraison', $Idlivraison);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererLivraison($Idlivraison){
        $sql="SELECT * from Livraison where Idlivraison=$Idlivraison";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      
  


        function tridestinataire(){
            $sql="SELECT * FROM livraison ORDER BY destinataire ASC";
$db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}  

        function tricodepostal(){
            $sql="SELECT * FROM livraison ORDER BY codepostal ASC";
$db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}  


public function AfficherlivraisonFiltre($codepostal){
        $sql="SELECT * FROM livraison where 1=1 ";
        if($codepostal != '')
            $sql .='  and codepostal like :codepostal' ;
       
        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		
        if($codepostal != '')
			$req->bindValue(':codepostal', $codepostal);
		
       
		
        try{
            $req->execute();
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}


?>
    


    