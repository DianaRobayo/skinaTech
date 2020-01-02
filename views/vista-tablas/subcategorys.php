<?php
/* echo '<pre>';
echo 'hola'; 
print_r($subcategorias);
exit; 
 */
?>

<?php foreach ($subcategorys as $i => $subcategory) {  ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="<?php echo $base_url; ?>vista-tablas/products?id_subcategory=<?php echo $subcategory->id; ?>">
            <h5 class="card-title"><?php echo $subcategory->name; ?></h5>
          </a>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <?php
} ?>