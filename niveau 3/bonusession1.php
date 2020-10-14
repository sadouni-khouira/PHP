<?php
session_start();
if (isset($_POST['note']) and !empty($_POST['note'])) {
                                                            $_SESSION['note']=$_POST['note'];
                                                    }
                                                   else session_destroy();

                                                         


print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>le formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>



  <body>
  <div>
        <h2> Bonus Exercice 2</h2>
        <h3>Créez un système de notation de jeu vidéo : </h3>
        <div class="card fortnite" style="width: 18rem;">
            <img class="card-img-top" src="fortnite.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fortnite</h5>
                <p class="card-text">multi</p>
                <p>Donner une note</p>
                <form method="post" action="bonusession1.php">
                <select name="note">
                    <option value=" "></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" class="btn btn-primary" name="submit"/>
                </form>
       </div>
            <?php

    if(isset($_POST['submit'])){
        switch ($_POST["note"]){
            case "1" : echo "<div class='card-footer text-muted'>Note: <strong>*</strong></div>";
            break;
            case "2" : echo "<div class='card-footer text-muted'>Notes: <strong>**</strong></div>";
            break;
            case "3" : echo "<div class='card-footer text-muted'>Note: <strong>***</strong></div>";
            break;
            case "4" : echo "<div class='card-footer text-muted'>Note: <strong>****</strong></div>";
            break;
            case "5" : echo "<div class='card-footer text-muted'>Note: <strong>*****</strong></div>";
            break;
            default : echo "<div class='card-footer text-muted'>Note: Pas encore noté.</div>";

        }
    }
    ?>
        </div>
</div>
<br><br>
<a href="bonusession2.php" target="_blank">SESSION</a>
</body>
</html>