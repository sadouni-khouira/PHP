
<?php
class personne
{
	private $nom;
	private $prenom;
	private $adresse;

	//Constructeur
	public function __construct($nom, $prenom, $adresse)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	}

	//Destructeur
	public function __destruct()
	{
		echo "<script type=\"text/javascript\">alert('La personne nommÃ©e $this->prenom $this->nom \\n est supprimÃ©e de vos contacts')</script>";
	}

	/** renvoie une représentation de la personne sous la forme d'une chaine de caractÃ¨re.*/
	//Vous pouvez choisir d'afficher le prÃ©nome, puis le nom suivi de l'adresse par exemple*/
	public function getPersonne()
	{
        echo("Le nom est  $this->prenom <br> le prénom est  $this->nom <br> l'adresse est $this->adresse <br>");  
        //return ..... ;
	}

	public function setadresse($adresse)
	{
		return $this->adresse = $adresse;;
	}
}

//CrÃ©ation d'objets
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getPersonne();

//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
echo $client->getPersonne();

// Le destructeur est appelÃ© Ã  2 moments
// - soit lorsque vous supprimez vous-mÃªme une variable avec l'usage de "unset" qui dÃ©salliue l'espace mÃ©moire occupÃ© par la variable en appelant le destructeur
// - soit de maniÃ¨re automatique lorsque le garbage collector passe pour nettoyer la mÃ©moire de ce qui n'est plus utilisÃ© (par exemple en fin de script php)

// pour bien comprendre quand le destructeur est appelÃ© amusez-vous Ã  passer le boolÃ©en suivant Ã  vrai ou faux et exÃ©cutez le script 
$explicit_destruct = false ;

if ($explicit_destruct)
{
	//Suppression explicite du client avec unset, donc appel implicite au destructeur
	unset($client);
	echo '$client unset, appel au destructeur pour libÃ©rer la mÃ©moire occupÃ©e par $client<br>';
}

if (isset($client)) 
{
	echo '$client existe encore, il va Ãªtre nettoyÃ© par le garbage collector en faisant appel Ã  son destructeur<br>' ;
}

echo "Fin du script";
//Fin du script, le destructeur est appelÃ© sur tous les objects encore vivants. Si $explicit_destruct est Ã  false et donc si $client existe encore Ã  ce stade du script, alors le destructeur sera appelÃ© sur $client. 
//$client->presentation();

?>