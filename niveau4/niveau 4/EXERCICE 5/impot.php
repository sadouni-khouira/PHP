
<?php 
  class impot
  {
   
    public $nom;
    public $revenu;
    public const  const1=15;
    public const  const2=20;
    
   
    public function __construct($nom,$revenu) {
        $this->nom=$nom;
        $this->revenu=$revenu;
       
                                             }
  

    public function calculeImpôt($revenu)   {
        if ($revenu > 15000)     {    
          $taux=($revenu*impot::const2)/100;
          echo"Le pourcentage est de".impot::const2."%"."<br><br>";
          echo" Votre impôt est de ".$taux." euros";
          }
            else { 
              
              $taux=($revenu*impot::const1)/100;
              echo"Le pourcentage est de".impot::const1."%"."<br><br>";
              echo"Votre taux est de ".$taux." euros";
            

                                          }
                                        
                                         return $this->taux= $taux;
                                        }
  
  public function afficheImpot()
    {
      echo("Monsieur,Madame, $this->nom <br><br> Votre revenu  est de $this->revenu.<br><br>");
    }
   
}
 
?>
