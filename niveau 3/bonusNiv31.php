<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le formulaire</title>
  
</head>

<body>

<?php  

class person
  {
   
    public $nom;
    public $prenom;
    public $ville;
   
    public function __construct($nom,$prenom,$ville) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->ville=$ville;
                                             }
  public function afficher()
  {
    echo("Bonjour $this->nom  $this->prenom  ,Vous êtes né à $this->ville");
  }
 
}
$personne = new person("sadouni","khouira","Grasse");
$personne->afficher();

?>
 </body>
    
    </html>  