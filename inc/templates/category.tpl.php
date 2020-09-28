
<?php 

// recupere id envoyé 'Nom catégorie'
$cat = $_GET['id']; ?>

<h1 class="display-3 text-info font-weight-bold"><?= $cat; ?></h1>

<!-- boucle sur les articles de la catégorie -->
<?php
foreach($articlesList as $id => $article): 

            if($article->category == $cat){ 

             require 'articleCard.tpl.php'; ?>
            
            <p class="infos">
              Posté par 
              <a class="text-dark" href="index.php?page=author&id=<?= $article->author; ?>"><?= $article->author; ?></a> 
              le 
              <span class="text-dark" ><?= $article->getDate('fr') ?></span> 
              dans
              <span class="text-dark" >#<?= $article->category; ?></span>
            </p>
          </div>
    </article>

   <?php } 
   ?>

<?php endforeach; ?>

