<?PHP
               
    class Livraison{
        private  $Idlivraison;
        private  $prix;
        private  $date;
        private  $destinataire;
	private  $codepostal;


        
        
        function __construct($Idlivraison,$prix,$date,$destinataire,$codepostal){
            
            $this->Idlivraison=$Idlivraison;
            $this->prix=$prix;
            $this->date=$date;
            $this->destinataire=$destinataire;
	    $this->codepostal=$codepostal;

            
        }
        
      function getIdlivraison() {
            return $this->Idlivraison;
        }
       function getprix() {
            return $this->prix;
        }
        function getdate() {
            return $this->date;
        }
         function getdestinataire() {
            return $this->destinataire;
        }
 function getcodepostal() {
            return $this->codepostal;
        }
        

        
       function setIdlivraison($Idlivraison) {
            $this->Idlivraison=$Idlivraison;
        }
       function setprix($prix) {
            $this->prix=$prix;
        }
       function setdate($date) {
            $this->date=$date;
        }
       function setdestinataire($destinataire) {
            $this->destinataire=$destinataire;
        }
 function setcodepostal($codepostal) {
            $this->codepostal=$codepostal;
        }


        
    }
?>