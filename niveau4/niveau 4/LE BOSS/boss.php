<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>NEWS</title>
   
  </head>
  <body>
                  
  
 <form action="FORMULAIRE.PHP" method="GET">
 <label for="nom" >channel</label>
  <input type="text" name="channel" placeholder="Channel"    required /><br><br>
 
  <label for="titre" >Saisir le prénom</label>
  <input type="text" name="titre" placeholder="Titre de la NEWS"    required /><br><br>
 
  <label for="link" >lien vers la news</label>
  <input type="url" name="link" placeholder="https://example.com"  pattern="https://.*"   required /><br><br>
 
  <label for="image" >image associée à la news</label>
  <input type="url" name="img" placeholder="ou se trouve l'image" required /><br><br>

  <label for="description" >text de  la news</label>
  <input type="text" name="img" placeholder="image"    required /><br><br>
 
  <label for="date" >date de la news</label>
  <input type="date" name="date" placeholder="link"    required /><br><br>
  
  <p><input type="submit" value="Envoyer"></p>
</form> 

<?php

function loadrss($url)
{
    
    $xmlDoc = new DOMDocument(); // ça vous rappelle quelque chose ? un flux RSS, c'est du XML et il se trouve que tous les document XML (dont le HTML est une forme particulière) sont navigable via un DOM
    $xmlDoc->load($url); // on initialise ce DOM avec l'url de notre flux

    // Récupération des infos du flux dans la balise "<channel>"
    $channel = $xmlDoc->getElementsByTagName('channel')->item(0); 
    // notez la notation fléchée (php objet). On navigue dans ce DOM comme vous avez appris à le faire en javascript
    
    // récupération du titre du flux
    $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    
    // récupération du lien du flux
    $channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    
    // récupération de la description du flux
    $channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

    // génération du contenu à partir des infos du flux dans "<channel>"
    echo("<p><a href='" . $channel_link . "'>Bienvenue sur le flux RSS de " . $channel_title . "</a>");
    echo("<br>");
    echo("Description : " . $channel_desc . "</p>");

    // on va ensuite afficher les 3 premiers éléments du flux et les récupérant manuellement
    $x = $xmlDoc->getElementsByTagName('item');
    echo ("<p>Titre de la news 1 : ". $x->item(0)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue . "</p>");
    echo ("<p>Titre de la news 2 : ". $x->item(1)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue . "</p>");
    echo ("<p>Titre de la news 3 : ". $x->item(2)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue . "</p>");

    /* vous devrez faire une boucle pour itérer sur tous les éléments
     * à chaque élément vous pourrez récupérer les infos suivantes :
     * - titre de la news
     * - lien vers la news complète
     * - image associée à la news
     * - texte de la news
     * - date de la news
     *
     * C'est à partie de toutes ces infos que vous générerez le code HTML */   
}

// on appelle la fonction qu'on a écrite sur le flux RSS de notre choix
loadrss("https://www.jeuxvideo.com/rss/rss.xml");
?>
</body>
</html>       