<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/24
 * Time: 17:56
 */

namespace app\modules\frontend\controllers;

use app\components\UtilHelper;
use app\components\ValidateHelper;
use app\models\Lybook;
use app\models\News;
use app\models\Products;
use app\modules\frontend\controllers\common\BaseController;
use Yii;

class DataController extends BaseController
{
    protected $type = [

    ];

    //首页
    public function actionIndex()
    {
        $products = Products::find()
            ->where(['status' => Products::STATUS_ACTIVE,])
            ->orderBy(['id' => SORT_DESC])
            ->limit(9)
            ->asArray()
            ->all();
        $news = News::find()
            ->where(['status' => News::STATUS_USING])
            ->orderBy(['id' => SORT_DESC])
            ->limit(4)
            ->asArray()
            ->all();
        return $this->render('index', ['products' => $products, 'news' => $news]);
    }

    //品牌新闻
    public function actionNews()
    {
        $p = $this->get('p', 1);
        $source = $this->get('source', "品牌新闻");
        $query = News::find()->select("*")
            ->where(['source' => $source])
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

    public function actionProducts()
    {
        $type = intval($this->get('type', 1));
        $p = intval($this->get('p', 1));

        $query = Products::find()->where(['status' => Products::STATUS_ACTIVE, 'type' => $type]);
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
                'list' => $list,
                'product_type' => Yii::$app->params['product_type'],
                'type' => $type,
                'pages' => $pages,
            ]);
    }

    //项目优势
    public function actionAdvantage()
    {

        $type = intval($this->get('type', 1));
        $advantage_type = [
            1 => ['name' => '品牌魅力', 'image' => 'advantageR'],
            2 => ['name' => '产品卖点', 'image' => 'sellingPoint'],
            3 => ['name' => '加盟优势', 'image' => 'joinAdv'],
        ];
        return $this->render('advantage', ['type' => $type, 'advantage_type' => $advantage_type]);
    }


    //关于我们
    public function actionAbout()
    {
        $type = intval($this->get('type', 1));
        if ($type < 0 || $type > 3) {
            $type = 1;
        }
        return $this->render('about' . $type);

    }

    //市场先机
    public function actionTrend()
    {
        $type = intval($this->get('type', 1));

        return $this->render('trend' . $type);
    }

    public function actionJoinProcess()
    {
        $type = $this->get('type', 1);
        switch ($type) {
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

        return $this->render('join_process', ['type' => $type, 'images' => $images, 'page_name' => $page_name]);
    }

    //联系我们
    public function actionContactUs()
    {
        if (Yii::$app->request->isPost){
            $name = trim($this->post('name',''));
            $mobile = intval($this->post('mobile',''));
            $email = trim($this->post('email',''));
            $content=$this->post('content','');

            //验证
            //验证员工姓名
            if(!ValidateHelper::validLength($name,2,10)){
                return $this->renderErrJSON("姓名不能小于2个字或者大于10个字~~");
            }

            //验证手机号码
            if(!ValidateHelper::validPhone($mobile)){
                return $this->renderErrJSON("请输入合法的手机号码~~");
            }
            //验证邮箱
            if(!ValidateHelper::validEmail($email)){
                return $this->renderErrJSON("请输入合法的邮箱~~");
            }
            //验证内容
            if(ValidateHelper::validIsEmpty($content)){
                return $this->renderErrJSON("留言内容不能为空~~");
            }
            $tmp_lybook =new Lybook();
            $tmp_lybook->name = $name;
            $tmp_lybook->mobile = $mobile;
            $tmp_lybook->email = $email;
            $tmp_lybook->content =$content;
            $tmp_lybook->status = 10;
            $tmp_lybook->created_time=date('Y-m-d H:i:s');
            $tmp_lybook->updated_time=date('Y-m-d H:i:s');

            return $tmp_lybook->save(0) ?$this->renderJSON() :$this->renderErrJSON();


        }
        return $this->render('contact_us');
    }

    //新闻详情页
    public function actionDetails()
    {
        $id =intval($this->get('id',0));
        $info = News::find()
            ->where(['status' => News::STATUS_USING,'id'=>$id])
            ->asArray()
            ->one();

        return $this->render('details',[
            'info' =>$info
        ]);
    }


}