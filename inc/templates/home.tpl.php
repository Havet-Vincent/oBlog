<!-- boucle sur les tous les articles  -->

<?php foreach($articlesList as $id => $article): 

 require 'articleCard.tpl.php'; ?>

 <p class="infos">
 Posté par 
 <a class="text-dark" href="index.php?page=author&id=<?= $article->author; ?>">
     <?= $article->author; ?>
 </a>
 le 
 <span class="text-dark" >
      <?= $article->getDate('fr') ?>
 </span> 
 dans
 <a href="#" class="card-link-ml"> 
   <a class="text-dark" href="index.php?page=category&id=<?= $article->category; ?>">
      #<?= $article->category; ?>
   </a>
</p>
</div>
</article>
    
 <?php endforeach; ?>



