<?php

// Question 1
function verificationpassword($str){
    if (strlen($str) >= 8) {  
        echo"Le password fait 8 caractères ou plus"."<br>";
        return "TRUE";  }
    else
    {   echo"Le password fait moins de  8 caractères)"."<br>";
        return "FALSE";}

                                    }
                                
 // Question 2

function verificationPassword2($str){
    $test = "/[0-9]/";
    if (strlen($str) >= 8 && strtolower($str) != $str && preg_match($test, $str)){
        echo" Le mot de pass est ";
       return "True";}
    else {
        echo" Le mot de pass est ";
        return "False";
    }
}

// Question 3
function capital($str){
switch ($str) {
        case "France":
            echo "France =======> Paris";
            break;
        case "Allemagne":
            echo " Allemagne =======> Berlin";
            break;
        case "Italie":
            echo " Italie =======> Rome";
            break;
        case "Maroc":
                echo "Maroc =======> Rabat";
             break;    
         case "ESPAGNE":
             echo "ESPAGN =======> Madrid";
             break;
          case "Portugal":
             echo "Portugal =======> Lisbonne";
              break;
          case "Angleterre":
                 echo "Angleterre =======> Londres";
                  break;
         case "ALGERIE":
                echo "ALGERIE =======> ALGER";
                 break;
           default: echo "Inconnu";
                }
}
// Question 4

function ListHTML($name,$arrayéléments){
    if ($name)   echo "<h3>".$name."</h3><ul>";
    else  echo"le titre  est vide !";
    if (strlen('$arrayéléments')>0) {
                  $arr1 = str_split($arrayéléments);
   
                   $size = sizeof($arr1);
                   for ($i = 0; $i < $size ; $i++){
                                          echo"<li>".$arr1[$i]."</li>";
                                                     } //echo"/ul";
                          }              
    else echo" array est vide !";
 }


// Question 5

function remplacerLesLettres($str){
    echo $str."<br>";
    for ($i = 0; $i <strlen($str) ; $i++){
             if ($str[$i]=="e")  {$str[$i]=3; }
            elseif 
              ($str[$i]=="i")  {$str[$i]=1; }
           elseif ($str[$i]=="o")  {$str[$i]=0; }
                              }
                              echo $str;
    }           
    
 
// Question 6

function quelleAnnee(){
echo "Année :".date("y")."<br/>";
                      }


// Question 7
function quelleDate(){
    echo "Date :".date("d/m/y")."<br>";
                    }
//*********************** */
verificationpassword("mot");
echo '<p>'.verificationPassword2('ZML154HJGDHJSGJfrdg').'</p>';

echo"<br/>";
capital("ALGERIE");
echo"<br/>";
ListHTML("capitale",("paris,Berlin,Moscou"));
quelleAnnee();
quelleDate();
remplacerLesLettres("Bonjour les amis");
?>