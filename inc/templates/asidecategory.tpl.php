<div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">

           <?php 
           $categoriesList = $dataObject->getAllCategories();

           // boucle sur nombre de catégories       
           foreach($categoriesList as $id => $category): ?>
            <li class="list-group-item">
            <a href="index.php?page=category&id=<?= str_replace(' ','',$category); ?>"><?= $category; ?></a>
            </li>
            <?php endforeach ?>
            </ul>
            </div>