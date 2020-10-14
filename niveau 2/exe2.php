<?php 

function reverse_string($str){
                     $str1="";
                      echo $str."<br>";                                        
                    
                     for ($i = strlen($str)-1; $i>=0 ; $i--){ 
                        $str1.=$str[$i]; 
                       
                     
                        }  echo $str1."<br>";
                            }
 
echo "<div style= text-align:center>";               
reverse_string("abcdef GHI") ;                   
echo "</div>";
?>