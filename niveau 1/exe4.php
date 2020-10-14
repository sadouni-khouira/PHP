<?php
// Question 1
function premierElementTableau($tableau){
    if ($tableau)  {
              echo'<pre>';
              print_r($tableau);
              echo'</pre>';
              echo "Le premier élément du tableau est   ".$tableau[0]."<br/>";}
              else echo " LE TABLEAU EST VIDE !"."<br/>";
        }
 


 // Question 2
 function dernierElementTableau($tableau){
    if ($tableau)  {
                  $b=count($tableau);
                   echo "le dernier élément du tableau est   ".$tableau[$b-1]."<br/>";}
                   else echo " LE TABLEAU EST VIDE !"."<br/>";
}
// Question 3


	function plusgrand($tableau)
	{    if ($tableau)  {
	                	$size = sizeof($tableau);
	                	$max = $tableau[0];
		                for ($i = 0; $i < $size - 1; $i++)
		            	if ($tableau[$i] < $tableau[$i + 1] && $tableau[$i + 1] > $max)
			            	$max = $tableau[$i + 1];
	                    	echo"Le plus grand élément du tableau est ".$max."<br/>";}
                            else echo " LE TABLEAU EST VIDE !"."<br/>";          
}
  
// Question 4
function plusPetit($tableau){
    if ($tableau)  {
                     $size = sizeof($tableau);
		             $min = $tableau[0];
		             for ($i = 0; $i < $size - 1; $i++)
			         if ($tableau[$i] > $tableau[$i + 1] && $tableau[$i + 1] < $min)
			         	$min = $tableau[$i + 1];
                         echo "Le plus petit élément du tableau est ".$min;}
                        else echo " LE TABLEAU EST VIDE !"."<br/>";

}


$tableau=array(5,8,4);

premierElementTableau($tableau);
dernierElementTableau($tableau);
plusgrand($tableau)."<br/>";
plusPetit($tableau);


?>