<?php 
function display_triangle($int) {

    $tab = [0,1];
    $suite = 0;
    print_r($tab[0]); //On peut utiliser var_dump():afficher le contenu de la variable et son type 
    echo'<br>';
    print_r($tab[1]); 
    echo'<br>';
     for($i = 1; $i < $int; $i++) {
        $suite = $tab[$i] + $tab[$i -1];
        array_push($tab, $suite);
        echo $suite;
        echo'<br>';
    }
 };
 echo "<div style= text-align:center>"; 
 display_triangle(12);
 echo "</div>";
?>
