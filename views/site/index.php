<?php

use yii\helpers\Html;
use yii\helpers\Url;



$baseUrl =  Url::home();
/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>

<!-- Body -->
<div class="site-index">

  <!-- Header -->
  <div class="jumbotron">
    <h2>DISPOSITIVOS ELECTRÓNICOS</h2>
    <div class="container">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php echo Html::img('@web/img/inicio.jpg', ["width" => "450px", "height" => '250px']) ?>
          </div>
          <div class="carousel-item">
            <?php echo Html::img('@web/img/red.jpg', ["width" => "450px", "height" => '250px']) ?>
          </div>
          <div class="carousel-item">
            <?php echo Html::img('@web/img/electrodomestico.jpg', ["width" => "450px", "height" => '250px']) ?>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" style="background-color:darkcyan" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" style="background-color:darkcyan" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="body-content">
    <h2 class='categorias'>Categorias</h2>
    <div class="row">

      <!-- Redes -->
      <div class="col-lg-4">
        <h2>Redes</h2>

        <div class="card" style="width: 21rem;">
          <a href=" <?php echo $baseUrl . '?r=vista-tablas/subcategory&id_category=1'; ?>">
            <?php echo Html::img('@web/img/red2.jpg', ["width" => "250px"]) ?>
          </a>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Productos de buena calidad</li>
            <li class="list-group-item">Marca Cisco</li>
            <li class="list-group-item">Un año de garantia</li>
          </ul>
        </div>

      </div>

      <!-- Movil -->
      <div class="col-lg-4">
        <h2>Movil</h2>

        <div class="card" style="width: 21rem;">
          <a href=" <?php echo $baseUrl . '?r=vista-tablas/subcategory&id_category=2'; ?>">
            <?php echo Html::img('@web/img/movil.jpg', ["width" => "250PX", "height" => "165px"]) ?>
          </a>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Accesorios y partes para moviles</li>
            <li class="list-group-item">La marca de diferentes proveedores</li>
            <li class="list-group-item">3 meses de garantia</li>
          </ul>
        </div>

      </div>

      <!-- Computación -->
      <div class="col-lg-4">
        <h2>Computación</h2>

        <div class="card" style="width: 21rem;">
          <a href=" <?php echo $baseUrl . '?r=vista-tablas/subcategory&id_category=3'; ?>">
            <?php echo Html::img('@web/img/computacion.jpg', ["width" => "250PX"]) ?>
          </a>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Accesorios y partes para computadores</li>
            <li class="list-group-item">La marca de diferentes proveedores</li>
            <li class="list-group-item">10 meses de garantia</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</div>