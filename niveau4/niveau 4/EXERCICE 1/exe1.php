<?php
class ville
{  public $nom;
   public $departement;
   public function  getinfo(){  
    echo("La ville de $this->nom est dans le département : $this->departement");   
                            }
}
//$ville1 = new ville ("Nantes",'Loire Atlantique');
 $ville1=new ville ();

 $ville1->nom="Nantes"; // on lui donne son nom
 $ville1->departement='Loire Atlantique';
 $ville2 = new ville();
 $ville2->nom="Lyon"; // on lui donne son nom
 $ville2->departement= ('Rhône'); 
 echo $ville1->getinfo();
 echo"<br>";
 echo $ville2->getinfo();
?>