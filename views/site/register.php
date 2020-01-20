<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Inicia Sesión';
/* $this->params['breadcrumbs'][] = $this->title; */
?>
<div class="site-register">
  <h1><?= Html::encode($this->title) ?></h1>

  <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Nombre Completo')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'email')->label('Correo')->input('email') ?>

    <div class="form-group">
      <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

  <?php ActiveForm::end(); ?>

</div>