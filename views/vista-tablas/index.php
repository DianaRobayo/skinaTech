<?php

/* @var $this yii\web\View */
/* echo '<pre>';
echo 'hola';
print_r($base_url);
exit; */
//print_r($category);


?>

<!-- CATEGORIAS -->
<h1 align="center" class="titulo">CATEGORIAS</h1>

<div class="row">
  <?php foreach ($categorys as $i => $category) { ?>

    <div class="col">
      <a href="<?php echo $base_url.'?r=vista-tablas/subcategory&id_category='.$category->id; ?>">
        <img src="<?php echo $category->image; ?>" alt="Categoria" style="width: 100%;" class="img-circle">
      </a>
      <h5> <?php echo $category->name; ?></h5>
    </div>
  <?php
  } ?>
</div>
