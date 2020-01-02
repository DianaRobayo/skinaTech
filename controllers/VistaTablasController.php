<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Subcategory;
use yii\helpers\Url;

class VistaTablasController extends \yii\web\Controller
{
  public function actionIndex()  {
    //Se consulta todas las categorias de la D.B
    $categorys = Category::findAll(['state' => '1']);
    /* echo '<pre>';
    print_r(Url::home());
    exit; */
    //renderiza la vista con sus parametros, la info de categorias y su URL
  return $this->render('index', ['categorys' => $categorys, 'base_url' => Url::home()]);

  }

  public function actionSubcategory($id_category){
      
    $subcategorys = Subcategory::findAll(['id_category' => $id_category, 'state' => '1']);
    return $this->render('subcategorys', ['subcategorys' => $subcategorys, 'base_url' => Url::home()]);      
  }


  public function actionProducts($id_subcategory)  {

    $products = Product::findAll(['id_subcategory' => $id_subcategory]);
    return $this->render('productbysubcategory', ['products' => $products, 'base_url' => Url::home()]);
  }

  public function actionProduct($id_product) {

    $detailproduct = Product::findOne(['id' => $id_product]);
    return $this->render('detailproduct', ['detailproduct' => $detailproduct, 'base_url' => Url::home()]);
  }

}
