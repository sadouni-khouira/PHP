
<?php
// Question 1
function helloWorld(){
return "helloWorld"."<br/>";

 }
 echo helloWorld();

 // Question 2
 function quiEstMeilleurProf(){
    return "Mon super formateur de dev web"."<br/>";
 }
 echo quiEstMeilleurProf();
 // Question 3
 function jeRetourneMonArgument($b){
      return $b."<br/>";
 }
 
 echo jeRetourneMonArgument(123);
 
 // Question 4
function concatenation($str1,$str2){
return $str1.$str2."<br/>";
}
echo concatenation("Kingsley","Coman");



 // Question 5
 function concatenationAvecEspace($str1,$str2){
    return $str1." ".$str2."<br/>";
    }
    echo concatenationAvecEspace("Kingsley","Coman");
 ?>
