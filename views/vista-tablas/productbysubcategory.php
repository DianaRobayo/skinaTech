<?php
/* echo '<pre>';
echo 'hola'; 
print_r($products);
exit; 
 */
?>
<h1 align="center" class="titulo">PRODUCTOS</h1>

<?php foreach ($products as $i => $product) { ?>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?php echo $product->image; ?>" alt="Producto" style="width: 100%;" class="img-rounded">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="<?php echo $base_url; ?>vista-tablas/product?id_product=<?php echo $product->id; ?>">
            <h5 class="card-title"><?php echo $product->name; ?></h5>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php
} ?>