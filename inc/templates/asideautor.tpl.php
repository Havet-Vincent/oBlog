<div class="card">
            <h3 class="card-header">Auteurs</h3>
            <ul class="list-group list-group-flush">

            <?php 
            $auteursList = $dataObject->getAllAuthors();

            // boucle sur nombre de catégories       
            foreach($auteursList as $id => $autors): ?>
              <li class="list-group-item">
                  <a href="index.php?page=author&id=<?= $autors; ?>"><?= $autors; ?></a>
              </li>
              <?php endforeach ?>
            </ul>
          </div>