<?php 
  class Voiture
  {
    // Attributs
    public $couleur;
    public $moteur;
    public $portes;
    public $boite_de_vitesse;

    // Méthodes  
    public function __construct() { }

 
    public function rouler()
    {
      echo 'La voiture roule à 90km/h.<br>';
    }
 
    public function stationner()
    {
      echo 'La voiture est stationnée sur un parking.<br>';
    }
  }
  /**************************************************** */
  //use Voiture;
	// Attributs de la mini
	$mini = new Voiture();
	$mini->couleur = 'bleu';
	$mini->portes = '5';
	$mini->carburant = 'Diesel';
	$mini->boite_de_vitesse = 'Automatique';

	// Attributs de la clio
	$clio = new Voiture();
	$clio->couleur = 'rouge';
	$clio->portes = '3';
	$clio->carburant = 'Essence';
	$clio->boite_de_vitesse = 'Manuelle';

	// Attributs de la golf
	$golf = new Voiture();
	$golf->couleur = 'noir';
	$golf->portes = 3;
	$golf->carburant = 'Essence';
    $golf->boite_de_vitesse = 'Manuelle';	
    /******************************************************* */
    echo 'Clio :<br/><br/>';
    echo 'Couleur : ' .$clio->couleur. '<br/>';
    echo 'Portes : ' .$clio->portes. '<br/>';
    echo 'Carburant : ' .$clio->carburant. '<br/>';
    echo 'Boîte de vitesse : ' .$clio->boite_de_vitesse. '<br/>'.'<br/>';
    
    echo 'Golf :<br/><br/>';
    echo 'Couleur : ' .$golf->couleur. '<br/>';
    echo 'Portes : ' .$golf->portes. '<br/>';
    echo 'Carburant : ' .$golf->carburant. '<br/>';
    echo 'Boîte de vitesse : ' .$golf->boite_de_vitesse. '<br/>'.'<br/>';
      
    echo 'Mini :<br/><br/>';
    echo 'Couleur : ' .$mini->couleur. '<br/>';
    echo 'Portes : ' .$mini->portes. '<br/>';
    echo 'Carburant : ' .$mini->carburant. '<br/>';
    echo 'Boîte de vitesse : ' .$mini->boite_de_vitesse. '<br/>';
    /********************************************************* */
    echo '<br/><br/>';
    class fille extends Voiture
    {
      // Attributs
      public $pays;
      
  
      // Méthodes  
      //public function __construct() { }
   
      public function freiner()
      {
        echo 'La nouvelle fonction.<br>';
      }
   
    }
    // Attributs de la golf
	$fille= new fille();
	$fille->couleur = 'noir';
	$fille->portes = 3;
	$fille->carburant = 'Essence';
  $fille->boite_de_vitesse = 'Manuelle';
  $fille->pays = 'france';

    /******************************************************* */
    echo 'MERCEDES:<br/><br/>';
    echo 'Couleur : ' .$fille->couleur. '<br/>';
    echo 'Portes : ' .$fille->portes. '<br/>';
    echo 'Carburant : ' .$fille->carburant. '<br/>';
    echo 'Boîte de vitesse : ' .$fille->boite_de_vitesse. '<br/>';
    echo 'Pays : ' .$fille->pays. '<br/>';
    /********************************************************* */
    echo '<br/><br/>';
    $mini->rouler();
	  $clio->stationner();
    $golf->rouler();
    $fille->freiner();
?>