
<?php
class ville
{
	private $nom;
	private $departement;


	public function __construct($nom,$departement) 
	{
		$this->nom=$nom;
		$this->departement=$departement;
	}

	public function getinfo()
	{
        echo("La ville de $this->nom est dans le département : $this->departement");  
       
	}
}

$ville1 = new ville('Nantes','Loire Atlantique');
$ville2 = new ville('Lyon',' RhÃ´ne');

echo $ville1->getinfo();
echo"<br>";
echo $ville2->getinfo();
?>