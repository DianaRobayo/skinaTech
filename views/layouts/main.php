<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;


$baseUrl =  Url::home();

// Seccion de los items
$items = [
  ['label' => 'Inicio', 'url' => ['/site/index'], 'options' => ['class' => 'clase-nueva']],
  ['label' => 'Acerca de', 'url' => ['/site/about']],
  ['label' => 'Registrar', 'url' => ['/site/contact']]
];

if(Yii::$app->user->isGuest){
  $items[] = ['label' => 'Iniciar Sesion', 'url' => ['/site/login']];

} else {  
  //$items[] = ['label' => 'Logout', 'url' => [$baseUrl . 'users/update?id=' .  Yii::$app->user->identity->id]];
  
  if(Yii::$app->user->identity->rol == 2){
    $items[] = ['label' => 'Editar Perfil', 'url' => ['/users/update?id=' .  Yii::$app->user->identity->id]];
    $items[] = ['label' => 'Categorias', 'url' => ['/vista-tablas']];
    
  } else {
    $items[] = ['label' => 'Categorias', 'url' => ['/category']];
    $items[] = ['label' => 'Subcategorias', 'url' => ['/subcategory']];
    $items[] = ['label' => 'Productos', 'url' => ['/product']];
    $items[] = ['label' => 'Usuarios', 'url' => ['/users']];
  }

  $items[] = Html::beginForm(['/site/logout'], 'post');
  $items[] = Html::submitButton(
    'Cerrar Sesion (' . Yii::$app->user->identity->name . ')', //Retorna el nombre del usuario al iniciar sesion
    ['class' => 'btn btn-link logout', 'id' => 'logout']
  );
  $items[] = Html::endForm();

  /* echo '<pre>';
  print_r(Yii::$app->name);
  exit;
 */
}


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <?php
    NavBar::begin([
        'brandLabel' => 'NEW TECH', //Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark fixed-top',
            //navbar navbar-light bg-light
            //navbar-inverse navbar-fixed-top
        ],
    ]); 
    echo Nav::widget([
        'items' => $items /* [
            
            ['label' => 'Home', 'url' => ['/site/index'],'options' => ['class'=>'clase-nueva']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'.
                    '<a href="/skinatech/web/users/update?id='.  Yii::$app->user->identity->id .'">'.
                    'Editar Perfil</a>'.
                '</li>'.
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')', //Retorna el nombre del usuario al iniciar sesion
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ] */,
        'options' => ['class' => 'navbar navbar-dark bg-dark'],
        //navbar navbar-dark bg-dark
        //navbar-nav navbar-left
        
    ]);
    NavBar::end();
  ?>

  <div class="container">
      <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>
  </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Diana Robayo <?= date('Y') ?></p>
       <!--  <p class="pull-right"><?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
