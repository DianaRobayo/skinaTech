<?php
/* echo '<pre>';
echo 'hola'; 
print_r($subcategorias);
exit; 
 */
?>
<h1 align="center" class="titulo">SUBCATEGORIAS</h1>

<?php foreach ($subcategorys as $i => $subcategory) {  ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?php echo $subcategory->image; ?>" alt="Subcategoria" style="width: 100%;" class="img-rounded">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="<?php echo $base_url.'?r=vista-tablas/products&id_subcategory='.$subcategory->id; ?>">
            <h5 class="card-title"><?php echo $subcategory->name; ?></h5>
          </a>
          <p class="card-text">Revisa nuestros productos y disponibilidad.</p>
        </div>
      </div>
    </div>
  </div>
<?php
} ?>
