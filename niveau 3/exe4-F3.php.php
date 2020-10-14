<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $Téléphone = $Adresse = $Codepostal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nom"]);  
  $Téléphone = test_input($_POST["Téléphone"]);
  $email = test_input($_POST["email"]);
  $Adresse = test_input($_POST["adresse"]); 
  $Codepostal = test_input($_POST["number"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <label for="nameUser" >Nom</label>
  <input type="text" name="nom"  placeholder="khouira"   required /><br>
 <label for="numberPhoneUser" >Téléphone</label>
  <input type="tel" name="Téléphone" placeholder="00 00 00 00 00" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"   required />
<br>
 <label for="emailUser" >Email</label>
  <input type="email" name="email"  placeholder="kadsad112@outloo.fr" required /><br>
 <label for="adressUser" >Adresse</label>
  <input type="text" name="adresse"  placeholder="avenue pierre semard grasse" required/><br>
 <label for="postcodeUser" >Code postal</label>
  <input type="text"  pattern="[0-9]{5}"  name="number"  placeholder="06370" required /><br>
 <p><input type="submit" value="OK"></p>
</form> 

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $Téléphone;
echo "<br>";
echo $email;
echo "<br>";
echo $Adresse;
echo "<br>";
echo $Codepostal;

?>

</body>
</html>