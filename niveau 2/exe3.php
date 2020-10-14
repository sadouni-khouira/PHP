<?php 

function display_triangle($haut){
                     $str="**"; 
                     echo $str."<br>";

                    for ($i = 0; $i <=$haut ; $i++){ 
                        $str="*".$str."*"; 
                        echo $str."<br>"; }
                                }
 
echo "<div style= text-align:center>";               
display_triangle(10) ;                    
echo "</div>";
?>