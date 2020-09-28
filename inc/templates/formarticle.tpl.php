<article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="index.php?page=article&id=<?= $id; ?>"><?= $article->title; ?></a></h2>
            <p class="card-text"><?= $article->content; ?></p>
            <p class="infos">
              Posté par <span class="text-dark" ><?= $article->author; ?></span> le <span class="text-dark" ><?= $article->getDate('fr') ?></span> dans<a href="#" class="card-link-ml"> #<?= $article->category; ?></a>
            </p>
          </div>
    </article>