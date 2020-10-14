<?php
class form
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

	
	public function settext($name, $libelle)
	{
		$this->codetext.="<span>".$name." </span><input type=\"text\" name=\"". $libelle."\" /><br /><br />";
		
		
	}

	public function setsubmit($name="envoi", $value="Envoyer")
	{
		$this->codesubmit= "<input type=\"submit\" name=\"".$name."\" value=\"".$value."\"/><br />";
	}
	
	
	public function getform()
	{
		$this->code="";
		$this->code.=$this->codeinit;
		$this->code.=$this->codetext ;
		$this->code.=$this->codesubmit;
		echo $this->code;
	
	}
}
?>