<?php
/* @var $this yii\web\View */
/* echo '<pre>';
echo 'hola'; */
//print_r($category);
/* exit; */

?>

<!-- CATEGORIAS -->

<div class="card" style="width: 30rem;">

  <!-- <div class="card-deck">
    <div class="card">
      <img src="..." alt="..." class="img-circle">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

  </div> -->

  <div class="card-header">
    Categoria
  </div>
  <ul class="list-group list-group-flush">
    <?php foreach ($categorys as $i => $category) { ?>
      <li class="list-group-item">
        <a href="<?php echo $base_url; ?>vista-tablas/subcategory?id_category=<?php echo $category->id; ?>">
          <?php echo $category->name; ?>
        </a>
      </li>
    <?php
    } ?>
  </ul>
</div>