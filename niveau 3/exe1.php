<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> PHP Script using Cookies </title>
    <style>
        h1 {
            font-size: 80px;
            color: red;
            text-align:center;
        }
        
        li {
       font-size: 30px;
        }
        p {
            padding-left: 50px;
            font-family:Arial;
            font-size:35px;
        }
    </style>
</head>

<body>
<?php

$date =date('l j F Y, H:i:s');

echo"<br>";echo"<br>";
echo $date;
if (!isset($_COOKIE["visited"])) { 
    $temps = 38;// on définit une durée de vie de notre cookie .
    $tab = $date;
    setcookie("visited", $tab, time() + $temps);  // on envoie un cookie de nom visited portant la date .
    echo "<p>  C'est votre première visite : " . $date . "</p>";
} else {
    $tab= explode(";", $_COOKIE["visited"]); // ajouter le cookie dans le tableau .

    echo "<p>  Vous avez visité ce site ".(sizeof($tab) + 1)." fois.Voici les détails : </p>";
   
    foreach($tab as $elt) {
       echo "<li>" . $elt . "</li>";
    }
    echo "<li>" . $date . "</li>";


    array_push($tab, $date);// Empile un ou plusieurs éléments à la fin d'un tableau .
    $tab = implode(";", $tab);// séparer les élements du tableaux avec un ";" .
    setcookie("visited", $tab, time() + 38);
}
?>

</body>

</html>