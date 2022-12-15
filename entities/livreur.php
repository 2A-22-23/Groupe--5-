<?PHP
               
    class Livreur{
        private  $Idlivreur;
        private  $Idlivraison;
        private  $nom;
        private  $prenom;
private  $email;


        
        
        function __construct($Idlivreur,$Idlivraison,$nom,$prenom,$email){
            
            $this->Idlivreur=$Idlivreur;
            $this->Idlivraison=$Idlivraison;
            $this->nom=$nom;
            $this->prenom=$prenom;
$this->email=$email;

            
        }
        
      function getIdlivreur() {
            return $this->Idlivreur;
        }
       function getIdlivraison() {
            return $this->Idlivraison;
        }
        function getnom() {
            return $this->nom;
        }
         function getprenom() {
            return $this->prenom;
        }
 function getemail() {
            return $this->email;
        }

        

        
       function setIdlivreur($Idlivreur) {
            $this->Idlivreur=$Idlivreur;
        }
       function setIdlivraison($Idlivraison) {
            $this->Idlivraison=$Idlivraison;
        }
       function setnom($nom) {
            $this->nom=$nom;
        }
       function setprenom($prenom) {
            $this->prenom=$prenom;
        }
function setemail($email) {
            $this->email=$email;
        }

        
    }
?>