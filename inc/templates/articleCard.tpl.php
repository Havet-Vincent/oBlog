<article class="card">
          <div class="card-body">
              <h2 class="card-title">
                  <a href="index.php?page=article&id=<?= $id; ?>">
                      <?= $article->title; ?>
                  </a>
              </h2>
              <p class="card-text">
                  <?= $article->content; ?>
              </p>
