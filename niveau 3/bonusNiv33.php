<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>le formulaire</title>
   
  </head>
  <body>
                  
  
 <form action="bonusNiv33.php" method="POST">
 
 Saisir le nom
  <input type="text" name="nom" placeholder="Tapez votre nom"    required /><br><br>
  <br><br>
  
  saisir le prénom
  <input type="text" name="prenom" placeholder="Tapez votre prénom"    required /><br><br>
  <br><br>
  
  Votre ville de naissance
  <input type="text" name="ville" placeholder="Tapez Votre ville de naissance"    required /><br><br>

  <br><br>
  
  Numéro de Téléphone
  <input type="tel" name="téléphone"    required /><br><br>
  <br><br>
 
  Tapez Votre Email
  <input type="email" name="Email"    required /><br><br>
  <br><br>
 
  Genre <br><br>
  <input type="radio" name="genre"  value="F"  required />Femme
  <input type="radio" name="genre"  value="H"  required />Homme
  <br><br>
  
  <h4> raison de prise de contact   </h4>
  <select name="monselect">
  <option value="Simple information">Simple information</option> 
  <option value="Problem technique">Problem technique</option>
  <option value="Proposition de projet">Proposition de projet</option>
</select>

 <br><br>
<br><br>
  <label for="méssage" >Méssage</label>
  <input type="text" name="méssage"    required /><br><br>
  
 <p><input type="submit" value="Valider"></p>
</form> 

</body>
</html>