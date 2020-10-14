<?php 

function teste($nombre){
                if ($nombre==0) { echo " Le nombre est nul ";}
                else
                echo"$nombre"." ";
                while ($nombre!=1)                          {           
                {if ($nombre%2 == 1)
                   {// echo "$nombre est impair";
                    $nombre=$nombre*3+1;
                    echo"$nombre"." ";
                   }
                   else
                   { //echo "$nombre est pair";
                    $nombre=$nombre/2;
                    echo"$nombre"." ";
                   }
                }                                               }                
                     }//fonction
 
echo "<div style= text-align:center>";               
teste(25) ;                    
echo "</div>";

?>