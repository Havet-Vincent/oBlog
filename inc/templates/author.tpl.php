
<?php 

// recupere id envoyé 'Nom Auteur'
$auth = $_GET['id'];?>
<h1 class="display-3 text-info font-weight-bold"><?= $auth; ?></h1>

<!-- boucle sur les articles de l'auteur' -->
<?php
foreach($articlesList as $id => $article): 

            if($article->author == $auth){ 

            require 'articleCard.tpl.php'; ?>

            <p class="infos">
              Posté par 
              <span class="text-dark" ><?= $article->author; ?></span> 
              le 
              <span class="text-dark" ><?= $article->getDate('fr') ?></span> 
              dans
              <a href="#" class="card-link-ml"> <a class="text-dark" href="index.php?page=category&id=<?= $article->category; ?>">#<?= $article->category; ?></a>
            </p>
          </div>
    </article>

   <?php } 
   

 endforeach; ?>
