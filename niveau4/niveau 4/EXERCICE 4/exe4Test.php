<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <?php
    include('exe4.php');
    ?>
</head>

<body>
    <?php
    $myform = new form("exe4Test.php", "Accès au site", "post");
    $myform->settext("nom", "Votre nom :  ");
    $myform->settext("code", "Votre code : ");
    $myform->setsubmit();
    $myform->getform();
    ?>
</body>

</html>