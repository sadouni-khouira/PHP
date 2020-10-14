
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le calcul de l’impôt</title>
    <?php  
            include('impot.php');
    ?>
</head>

<body>

   <?php
  
   $exemple = new impot($_GET["nom"],$_GET["revenu"]);
   $exemple->afficheImpot();
   $exemple->calculeImpôt($_GET["revenu"]);   
    echo '<br/><br/>';  
    echo '<br/><br/>';
    ?>
    </body>
    
    </html>   
 