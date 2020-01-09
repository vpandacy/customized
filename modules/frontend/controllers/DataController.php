<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/24
 * Time: 17:56
 */

namespace app\modules\frontend\controllers;


use app\models\News;
use app\models\Products;
use app\modules\frontend\controllers\common\BaseController;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class DataController extends BaseController
{
    public $layout = false;

    //首页
    public function actionIndex()
    {
        $products = Products::find()
            ->where([
                'status' => Products::STATUS_ACTIVE,
                'type' => 1
            ])
            ->limit(20)
            ->select("*")
            ->all();
        $news = News::find()
            ->where(['status' => News::STATUS_USING])
            ->limit(5)->select("*")
            ->all();
        return $this->render('index', ['products' => $products, 'news' => $news]);
    }

    //新闻资讯
    public function actionNews()
    {
//        $news = News::find()
    }













    //产品中心
    public function actionProducts(){
        $type = intval($this->get('type',1));
        $p = intval($this->get('p',1));
        $list = Products::find()
            ->where(['status' => Products::STATUS_ACTIVE,'type' => $type])
            ->asArray()
            ->all();
        return $this->render('products',
            [
                'info' =>$list,
                'type' => Yii::$app->params['product_type']
            ]);
    }


}