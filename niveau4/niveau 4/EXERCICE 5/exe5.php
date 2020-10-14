<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire exercice 5</title>
    <?php
    include('exeTest5.php');
    ?>
</head>

<body>
    <?php
    $myform = new impot("exe5.php", "Accès au site", "post");
    $myform->settext("nom", "Votre nom :  ");
    $myform->settext("revenu", 12000);
    $myform->setsubmit();
    $myform->getform();
    $calculeImpôt(12000);
    $afficheImpot();
    ?>
</body>
