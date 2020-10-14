<?php 
function  conjuguer($verbe) {
    // La chaîne passée en paramètre ne doit pas dépasser 15 caractères ni contenir d'espaces.
    $long=strlen($verbe);
    if ($long > 15 || (stristr($verbe, ' ') == true) ){  echo "Le verbe  ne doit pas dépasser 15 caractères ni contenir d'espaces.";}
    else {
  echo" <h3>  conjuguer le verbe programmer au présent de l'indicatif  </h3>"."<br>";
     
    $termin= substr($verbe, -2);
   
    if ($termin=="er" || "ER") {  $nbr = 2;
                                 echo "Je ".substr($verbe, 0, -$nbr)."e"."<br>";
                                 echo"<br>";
                                 echo "Tu ".substr($verbe, 0, -$nbr)."es"."<br>";
                                 echo"<br>";
                                 echo "Il ".substr($verbe, 0, -$nbr)."e"."<br>";
                                 echo"<br>";
                                 echo "Elle ".substr($verbe, 0, -$nbr)."e"."<br>";
                                 echo"<br>";
                                 if (substr($verbe, -3)=="ger" || (substr($verbe, -3)=="GER"))  echo "Nous ".substr($verbe, 0, -$nbr)."eons"."<br>";
                                  else    echo "Nous ".substr($verbe, 0, -$nbr)."ons"."<br>";  
                               
                                 echo"<br>";
                                 echo "Vous ".substr($verbe, 0, -$nbr)."ez"."<br>";
                                 echo"<br>";
                                 echo "Ils ".substr($verbe, 0, -$nbr)."ent"."<br>";
                                 echo"<br>";
                                 echo "Elles ".substr($verbe, 0, -$nbr)."ent"."<br>";
                                }
                    }                                                                                        
                                }
                            
 echo "<div style= text-align:center>"; 
 conjuguer("programmer");
 conjuguer("manger");
 echo "</div>";

?>