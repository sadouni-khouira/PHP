<?php
session_start();

?>
<html>
<head>
    <meta charset="utf-8">
    <title>le formulaire</title>
   
  </head>

  <body>  
  Le nombre d'étoile : <?php echo $_SESSION['note']; ?> 

          
</body>
</html>
