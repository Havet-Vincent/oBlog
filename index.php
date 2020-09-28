<?php

// Inclusion des fichiers nécessaires
require __DIR__.'/inc/classes/Article.php';
require __DIR__.'/inc/classes/Data.php';


// utilisation d'un objet de la classe Data
$dataObject = new Data();
$articlesList = $dataObject->getArticles();


// valeur par défaut pour la page d'accueil
$page = 'home';

// On teste qu'on a bien une valeur dans $_GET['page']
if (isset($_GET['page'])) {
    // Si on a une valeur, on la récupère dans $page
    $page = $_GET['page'];
    // Pour afficher la bonne en fonction du paramètre d'url page
    if ($page == 'article') {
        // Récupération de l'id de l'article fourni en paramètre d'url
        if (isset($_GET['id'])) {
            // Je récupère le paramètre id et je transtype en entier
            // pour m'assurer que j'ai bien une valeur numérique
            $articleId = (int) $_GET['id'];
        } else {
            $articleId = 0;
        }

        $currentArticle = $dataObject->getArticle($articleId);       
    }  
}


// Affichage


require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/'.$page.'.tpl.php';

if($page == 'home') {
    require __DIR__.'/inc/templates/suivantprecedent.tpl.php';
} else {
    require __DIR__.'/inc/templates/acceuil.tpl.php';
}
require __DIR__.'/inc/templates/aside.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';