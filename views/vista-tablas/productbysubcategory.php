<?php
/* echo '<pre>';
echo 'hola'; 
print_r($products);
exit; 
 */
?>
<?php foreach ($products as $i => $product) { ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="<?php echo $base_url; ?>vista-tablas/product?id_product=<?php echo $product->id; ?>">
            <h5 class="card-title"><?php echo $product->name; ?></h5>
          </a>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <?php
} ?>