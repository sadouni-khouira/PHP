<?php
session_start();
 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>le formulaire</title>
   
  </head>

  <body>

Le nom : <?php echo $_SESSION['nom']; ?> 
Le prénom : <?php echo $_SESSION['prenom'];echo"<br>" ?> 
la ville de naissance :  <?php echo $_SESSION['ville']; ?>
                  <?php echo $_POST["note"]; ?>


</body>
</html>