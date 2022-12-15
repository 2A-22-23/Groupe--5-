<?php
include "../../config.php";


  class LivreurC
  {
    function afficherLivreur($Livreur){

echo "Idlivreur: ".$Livreur->getIdlivreur()."<br>";        
echo "Idlivraison: ".$Livreur->getIdlivraison()."<br>";
        echo "nom: ".$Livreur->getnom()."<br>";
        echo "prenom: ".$Livreur->getprenom()."<br>";
        echo "email: ".$Livreur->getemail()."<br>";
                              }
    

    function ajouterLivreur($Livreur){
        $sql="INSERT INTO Livreur (Idlivreur,Idlivraison,nom,prenom,email) VALUES (:Idlivreur,:Idlivraison,:nom,:prenom,:email)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
$Idlivreur=$Livreur->getIdlivreur();                     
$Idlivraison=$Livreur->getIdlivraison();
                     $nom=$Livreur->getnom();
                     $prenom=$Livreur->getprenom();
                     $email=$Livreur->getemail();


             
$req->bindVAlue(':Idlivreur',$Idlivreur);                            
$req->bindVAlue(':Idlivraison',$Idlivraison);
                            $req->bindVAlue(':nom',$nom);
                            $req->bindVAlue(':prenom',$prenom);
                            $req->bindVAlue(':email',$email);

          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherLivreurs(){
        $sql = "SElECT * From Livreur ORDER BY Idlivreur";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerLivreur($Idlivreur)
    {
        $sql = "DELETE FROM Livreur WHERE Idlivreur= :Idlivreur";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idlivreur', $Idlivreur);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererLivreur($Idlivreur){
        $sql="SELECT * from Livreur where Idlivreur=$Idlivreur";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierLivreur($Livreur,$Idlivreur){
        $sql="UPDATE Livreur SET Idlivreur=:Idlivreur,Idlivraison=:Idlivraison, nom=:nom,prenom=:prenom,email=:email WHERE Idlivreur=:Idlivreur";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
$Idlivraison=$Livreur->getIdlivraison();
       $Idlivraison=$Livreur->getIdlivraison();
       $nom=$Livreur->getnom();
       $prenom=$Livreur->getprenom();
       $email=$Livreur->getemail();

        $datas=array(':Idlivreur'=>$Idlivreur,':Idlivraison'=>$Idlivraison, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email);
$req->bindValue(':Idlivreur',$Idlivreur);         
$req->bindValue(':Idlivraison',$Idlivraison);
         $req->bindVAlue(':nom',$nom);
         $req->bindVAlue(':prenom',$prenom);
         $req->bindVAlue(':email',$email);

         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

        // la fonction list permet de lister les donnee du table livreur avec le tri par nom
        function trinom(){
            $sql="SELECT * FROM livreur ORDER BY nom ASC";
        $db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}        

  // la fonction list permet de lister les donnee du table livreur avec le tri par nom
        function triprenom(){
            $sql="SELECT * FROM livreur ORDER BY prenom ASC";
        $db = config::getConnexion();
              try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
}     

}

?>

    


    