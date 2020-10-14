
 
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Inscrire un titre ici</title>
   
  </head>
  <body>
                  
  <h1>Le formulaire HTML</h1>
  <div style="width:80%;margin:0 auto;">
 <form action="f2.php" method="POST">
 <label for="nameUser" >Nom</label>
  <input type="text" name="nom"  placeholder="khouira"   required /><br>
 
 
 
  <p>
 <label >Téléphone
  <input name="tel1" type="tel" pattern="[0-9]{2}" placeholder="##" aria-label="2-digit area code" size="1"/>-
   <input name="tel2" type="tel" pattern="[0-9]{2}" placeholder="##" aria-label="2-digit prefix" size="1"/> - 
   <input name="tel3" type="tel" pattern="[0-9]{2}" placeholder="##" aria-label="2-digit prefix" size="1"/> -
   <input name="tel4" type="tel" pattern="[0-9]{2}" placeholder="##" aria-label="2-digit prefix" size="1"/> -
   <input name="tel5" type="tel" pattern="[0-9]{2}" placeholder="##" aria-label="2-digit number" size="1"/>
 </label>
</p>



<br>
 <label for="emailUser"  >Email</label>
  <input type="email" name="email"  placeholder="kadsad112@outloo.fr" required /><br>
 <label for="adressUser" >Adresse</label>
  <input type="text" name="adresse"  placeholder="avenue pierre semard grasse" required/><br>
 <label for="postcodeUser" >Code postal</label>
  <input type="text"  pattern="[0-9]{5}"  name="number"  placeholder="06370" required /><br>
 <p><input type="submit" value="OK"></p>
</form> 
</div>
</body>
</html>
