<?php

use yii\helpers\Html;
// Con un hasFlash se busca el mensaje del sucess, 
// Con el getFlash se obtiene el mensaje enviado por el setFlash del SiteController

?>

<!-- Mensaje Valido -->
<?php if (Yii::$app->session->hasFlash('success')) : ?>
  <div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Usuario Registrado</h4>
    <?= Yii::$app->session->getFlash('success') ?>
  </div>
<?php endif; ?>


<!-- Mensaje de Error -->
<?php if (Yii::$app->session->hasFlash('error')) : ?>
  <div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Usuario no registrado</h4>
    <?= Yii::$app->session->getFlash('error') ?>
  </div>
<?php endif; ?>