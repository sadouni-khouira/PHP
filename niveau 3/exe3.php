<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'w+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);// on peut remplacer fputs() par fread()
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites sur cette page.';
?>