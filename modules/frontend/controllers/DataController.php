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
        $p = $this->get('p', 1);
        $source = $this->get('source', "品牌新闻");
        $query = News::find()->select("*")
            ->where(['source' => "品牌新闻"])
            ->andWhere(['status' => News::STATUS_USING]);
        $offset = ($p - 1) * $this->page_size;
        $pages = UtilHelper::ipagination([
            'total_count' => $query->count(),
            'page_size' => $this->page_size,
            'page' => $p,
            'display' => 4
        ]);
        $list = $query->orderBy(['id' => SORT_DESC])
            ->offset($offset)
            ->limit($this->page_size)
            ->all();
        return $this->render('news', [
            'source' => $source,
            'list' => $list,
            'pages' => $pages,
            'search_conditions' => [
                'source' => $source
            ]
        ]);
    }

    //产品中心

    public function actionProducts(){
        $type = intval($this->get('type',1));
        $p = intval($this->get('p',1));


        $query = Products::find()->where(['status' => Products::STATUS_ACTIVE,'type' => $type]);
        $offset = ($p - 1) * $this->page_size;
        $pages = UtilHelper::ipagination([
            'total_count' => $query->count(),
            'page_size' => $this->page_size,
            'page' => $p,
            'display' => 4
        ]);

        $list = $query->offset($offset)->limit($this->page_size)->asArray()->all();

        return $this->render('products',
            [
                'list' =>$list,
                'product_type' => Yii::$app->params['product_type'],
                'type' =>$type,
                'pages'=>$pages
            ]);
    }
    
    //项目优势
    public function actionAdvantage()
    {
        $product_advantage = [
            1=>'品牌魅力',
            2=>'产品卖点',
            3=>'加盟优势',
        ];

        $advan_type = intval($this->get('type',1));
        return $this->render('advantage',[
            'product_advantage'=>$product_advantage,
            'advan_type' =>$advan_type
        ]);
    }

    public function actionJoinProcess(){
        $type = $this->get('type',1);
        switch ($type){
            case 2:
                $images = 'coMode';
                $page_name = '合作模式';
                break;
            case 3:
                $images = 'investmentAdv';
                $page_name = '投资优势';
                break;
            case 4:
                $images = 'joinSupport';
                $page_name = '加盟支持';
                break;
            default:
                $images = 'joinProcess';
                $page_name = '加盟流程';
                break;
        }

        return $this->render('join_process',['type'=>$type,'images'=>$images,'page_name'=>$page_name]);
    }

    public function actionContactUs(){
        return $this->render('contact_us');
    }

}