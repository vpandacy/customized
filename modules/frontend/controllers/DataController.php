<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/24
 * Time: 17:56
 */

namespace app\modules\frontend\controllers;
use app\components\UtilHelper;
use app\models\News;
use app\models\Products;
use app\modules\frontend\controllers\common\BaseController;
use Yii;

class DataController extends BaseController
{

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

    //品牌新闻
    public function actionNews()
    {
        $p = $this->get('p',1);
        $source = $this->get('source',"品牌新闻");
        $query = News::find()->select("*")
            ->where(['source'=>"品牌新闻"])
            ->andWhere(['status' => News::STATUS_USING]);
        $offset = ($p - 1) * $this->page_size;
        $pages = UtilHelper::ipagination([
            'total_count' => $query->count(),
            'page_size' => $this->page_size,
            'page' => $p,
            'display' => 4
        ]);
        $list = $query->orderBy([ 'id' => SORT_DESC ])
            ->offset($offset)
            ->limit($this->page_size)
            ->all();
        return $this->render('news', [
            'list' => $list,
            'pages'=>$pages
        ]);
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