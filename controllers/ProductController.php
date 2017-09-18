<?php
/**
 * Created by PhpStorm.
 * User: Shchipa
 * Date: 09.06.17
 * Time: 12:26
 */

namespace app\controllers;
use Yii;
use app\models\Category;
use app\models\Product;
use yii\web\HttpException;

class ProductController extends AppController
{
    public function actionView($id){
//        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);   //ленивая загрузка
//        $product = Product::find()->with('category')->where(['id' => $id])->one();  //жадная загрузка

        if (empty($product))
            throw new HttpException('404', 'Данного товара нет в базе');


//        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $hits = Product::find()->where(['hit' => '1'])->all();

        $this->setMeta('E-SHOPPER | '.$product->category->name . ' | '. $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product', 'hits'));
    }
}