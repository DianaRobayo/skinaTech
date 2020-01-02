<?php
/* echo '<pre>';
echo 'hola'; 
print_r($products);
exit; 
 */
?>

<h1 align="center" class="titulo">DETALLE DEL PRODUCTO</h1>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $detailproduct->image; ?>" alt="Producto" style="width: 100%;" class="img-rounded">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $detailproduct->name; ?></h5>
        <p class="card-text"><?php echo $detailproduct->description; ?></p>
        <p class="card-text"><medium class="text-muted"><?php echo 'CANTIDAD DISPONIBLE:  '.$detailproduct->quantity; ?></medium></p>
      </div>
    </div>
  </div>
</div>