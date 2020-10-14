<?php
$note=array(
         "Roger"=>12,
         "Monica"=>15,
         "Najat"=>11,
);

//print_r($note);
echo"<h4> QUESTION 1 afficher le tableau associatif <H4>"."<br>"."<br>";
foreach($note as $clef => $valeur){
    echo $clef. ' a ' .$valeur. '<br>';
                        }



echo"<br>";
echo"<hr>";
echo"<h4> QUESTION 2 ajouter Anton <H4>"."<br>"."<br>";
// AJOUTER Anton
$pushArr=array("Anton"=>10);
$nouvnote= array_merge($note,$pushArr);
print_r($nouvnote);
echo"<br>";

// suprimer la note de MONICA
echo"<hr>";
echo"<h4> QUESTION 3 supprimer Monica  <H4>"."<br>"."<br>";
 
foreach($note as $index =>$value)
{
   if ($index== "Monica")
   {  
    unset($note[$index]);

   }
} 
echo"<pre>";  
print_r($note);
echo"</pre>";  
echo"<br>";
echo"<hr>";
echo"<h4> QUESTION 4 déterminer la note maximale et la note minimale du groupe et la moyenne <H4>"."<br>"."<br>";

// déterminer la note maximale , la note minimale du groupe et la moyenne
$i=0;
echo"<pre>";  
print_r($nouvnote);
echo"</pre>"; 
foreach($nouvnote as $clef => $valeur){
    
         $tab[$i]=$valeur;
         $i=$i+1;
                               
     }
     echo"<pre>";  
     print_r ($tab);
     echo"</pre>";
    $maximum=max($tab);
    echo "la note maximale est ".$maximum."<br>";
    $minimum=min($tab);
    echo "la note minimale est ".$minimum."<br>";
    // calculer la moyenne
    $somme = 0;
    $nbr= count($tab); 
    for ($i = 0; $i < $nbr; $i++)
     { $somme = $somme + $tab[$i];}
 $moy=$somme/$nbr;
echo "la moyenne est ".$moy."<br>";
 //                 note décroissante
 /******************************************************** */ 
 
echo"<hr>";
echo"<h4> QUESTION 5  notes croissantes <H4>"."<br>"."<br>";
//$fruits = array("d" => "citron", "a" => "orange", "b" => "banane", "c" => "pomme");
$fruitArrayObject = new ArrayObject($nouvnote);
$fruitArrayObject->asort();

foreach ($fruitArrayObject as $key => $val) {
   echo "$key  $val\n";
    echo"<br>";
  }
  
 /****************************************************************** */
  /*   trier par ordre alphabétique     */
  echo"<hr>";
  echo"<h4> QUESTION 6  trier par ordre alphabétique  <H4>"."<br>"."<br>";
  $fruitArrayObject = new ArrayObject($nouvnote);
$fruitArrayObject->asort();

foreach ($fruitArrayObject as $key => $index) {
   echo "$key  $index\n";
    echo"<br>";
  }



?>