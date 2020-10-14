<?php
class impot
{
	private $code; // code complet du formulaire
	private $codeinit; // code de l'entete du formulaire : balises form + fielset + legend
	private $codetext ; // code de chaque input
	private $codesubmit; // code du bouton submit

	public function __construct($action, $titre, $method="post")
	{
		$this->codeinit = "<form action=\"".$action."\" method=\"".$method."\">
								<fieldset>
								<legend><span>".$titre."</span></legend>";
		
		
	}

	//********************************************
	public function settext($name, $revenu)
	{
		$this->codetext.="<span>".$name." </span><input type=\"number\" name=\"". $revenu."\" /><br /><br />";
		// notez que si vous appelez plusieurs fois la fonction settext, les input se concatènent
	}

	//************************************************
	public function setsubmit($name="envoi", $value="OK")
	{
		$this->codesubmit= "<input type=\"submit\" name=\"".$name."\" value=\"".$value."\"/><br />";
	}
	
	//**************************
	public function getform()
	{
		$this->code="";
		$this->code.=$this->codeinit;
		$this->code.=$this->codetext ;
		$this->code.=$this->codesubmit;
		echo $this->code;
	
    }
    public function afficheImpot(){
           echo" << Monsieur Durant votre impôt est de 600 euros  >>";         
                                }

    public function calculeImpôt($revenu){
    /*  Le taux de l’impôt est de 15% pour des revenus 
    inférieurs à 15 000 euros et de 20 % pour des revenus supérieurs à 15 000. */  
    if ($revenu<15000){ echo"Le taux de l’impôt est de 15% ";} 
    else   { echo"Le taux de l’impôt est de 20% ";}           
                                         }
                                         

}
?>



