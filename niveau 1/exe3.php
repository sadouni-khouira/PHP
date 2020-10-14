<?php
// Question 1
function estILMajeur($age){
    if ($age>=18) {return "true";
       
    }
    else {return "false";}
 }
 echo "<p>".estILMajeur(19)."</p>";

 // Question 2
function plusgrand($nbr1,$nbr2){
    if ($nbr1>$nbr2) {echo $nbr1." est supérieur à ".$nbr2."<br/>";
    
    }
    
 }
 plusgrand(17,1);

 // Question 3
 function pluspetit($nbr1,$nbr2){
    if ($nbr1<$nbr2) {echo $nbr1." est inférieur à ".$nbr2."<br/>";
    
    }
    
 }
 pluspetit(17,19);

  // Question 4
  function Lepluspetit($nbr1,$nbr2,$nbr3){
    
    if ($nbr1<$nbr2 && $nbr1<$nbr3) { echo $nbr1." est le plus petit"."<br/>";}
    elseif 
    ($nbr2<$nbr1 && $nbr2<$nbr3) { echo $nbr2." est le plus peti"."<br/>";} 
    elseif ($nbr3<$nbr1 && $nbr3<$nbr2) { echo $nbr3." est le plus petit"."<br/>";}   
 }
 Lepluspetit(1,11,2);
 ?>