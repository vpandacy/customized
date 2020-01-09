<?php


namespace app\modules\wap\controllers;


use app\models\Products;
use yii\web\Controller;

class WapController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $products = Products::find()->where(['status' => Products::STATUS_ACTIVE, 'type' => 2])->limit(20)->select("*")->all();
        return $this->render('index', ['products' => $products]);
    }


}