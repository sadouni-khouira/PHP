<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>le formulaire</title>
   
  </head>

  <?php 
/*if (isset($_POST["nom"]))   {   echo htmlentities( $_POST["nom"]);
  //  htmlentitie : permet de protéger les données.
                                if (strlen($_POST["nom"]) > 15) { echo"le nom ne doit pas dépassé 15 caracteres"; }    
                            }
                             echo " ";
if (isset($_POST["prenom"]))   {  echo $_POST["prenom"];}  echo " ";
if (isset($_POST["ville"]))  {  echo $_POST["ville"];}   echo "<br>";*/

if (isset($_GET["nom"]))   {   echo htmlentities( $_GET["nom"]);
  //  htmlentitie : permet de protéger les données.
                                if (strlen($_GET["nom"]) > 15) { echo"le nom ne doit pas dépassé 15 caracteres"; }    
                            }
                             echo " ";
if (isset($_GET["prenom"]))   {  echo $_GET["prenom"];}  echo " ";
if (isset($_GET["ville"]))  {  echo $_GET["ville"];}   echo "<br>";


  ?>

  <body>
  <form action="bonusNiv3.PHP" method="get">
  Nom :<input type="text" name="nom" placeholder="Tapez votre nom"    required /><br><br>
  Prénom :<input type="text" name="prenom" placeholder="Tapez votre prénom"    required /><br><br>
  Ville :<input type="text" name="ville" placeholder="Tapez Votre ville de naissance"    required /><br><br>
 <p><input type="submit" value="Envoyer"></p>
</form> 

</body>
</html>