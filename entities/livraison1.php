<?PHP
               
    class Livraison{
        private  $Idlivraison;
        private  $date;
        private  $destinataire;
	private  $codepostal;


        
        
        function __construct($Idlivraison,$date,$destinataire,$codepostal){
            
            $this->Idlivraison=$Idlivraison;
            $this->date=$date;
            $this->destinataire=$destinataire;
	    $this->codepostal=$codepostal;

            
        }
        
      function getIdlivraison() {
            return $this->Idlivraison;
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