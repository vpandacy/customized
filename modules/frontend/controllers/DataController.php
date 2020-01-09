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
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class DataController extends Controller
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
        $news = News::find()
            ->wh
    }


}