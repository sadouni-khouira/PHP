<?php 
  class Voiture
  {
    // Attributs
    public $marque;
    public $couleur;
    protected $moteur;//modificateur "protected" les classes enfants peuvent lire /modifier la propriété sans qu'elle soit public .
    private $portes; // spécifie qu'une propriété ne peut étre touchée que depuis la classe elle-meme.
    public $boite_de_vitesse;

    // Méthodes  
    public function __construct($marque,$couleur,$moteur,$portes,$boite_de_vitesse) {
        $this->marque=$marque;
        $this->couleur=$couleur;
        $this->moteur=$moteur;
        $this->setPortes($portes);
        $this->boite_de_vitesse=$boite_de_vitesse;
     }
    public function __destruct(){
        echo '<br>Cet objet va être détruit !';    
    }
//    Accesseurs et mutateurs
    public function setPortes($portes){//
        if ((is_int($portes) && ($portes > 1))){
            return $this->portes= $portes;
        }
     } 
     public function getPortes() {
        return $this->portes;
    }

    public function presentation()
    {
      echo("La voiture $this->marque de couleur $this->couleur son moteur $this->moteur elle contient $this->portes portes  et une boite de vitesse $this->boite_de_vitesse ");
    }
}
 
// Attributs de la mini
	$mini = new Voiture('Mini','bleu','Diesel',5,'Automatique');
	/*$mini->couleur = 'bleu';
	$mini->portes = '5';
	$mini->carburant = 'Diesel';
	$mini->boite_de_vitesse = 'Automatique';*/

	// Attributs de la clio
	$clio = new Voiture('Clio','rouge','Essence',3,'Manuelle');
	

	// Attributs de la golf
    $golf = new Voiture('Golf','noir','Essence',3,'Manuelle');
    //          Héritage
    class sousClass extends Voiture
    {
      // Attributs
      public $ville;
    
      // Méthodes  
      public function __construct($marque,$couleur,$moteur,$portes,$boite_de_vitesse,$ville) {
       parent:: __construct($marque,$couleur,$moteur,$portes,$boite_de_vitesse);
        $this->ville=$ville;
        
     }
     public function presentation()
     {
       echo("La voiture $this->marque de couleur $this->couleur son moteur $this->moteur elle contient {$this->getPortes()} portes et une boite de vitesse $this->boite_de_vitesse $this->ville");
     }
   
    }
	$sousClass= new sousClass('Mercédes','rose','Essence',3, 'Manuelle','Grasse');
    

    echo '<br/><br/>';
    $mini->presentation();
    echo '<br/><br/>';
    $clio->presentation();
    echo '<br/><br/>';
    $golf->presentation();
    echo '<br/><br/>';
    $sousClass->presentation();
    echo '<br/><br/>';
    $mini->setPortes(6);
    $mini->presentation(); 
?>