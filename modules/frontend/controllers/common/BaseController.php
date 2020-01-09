<?php
/**
 * Created by PhpStorm.
 * User: vpanda
 * Date: 2020/1/9
 * Time: 15:47
 */
namespace app\modules\frontend\controllers\common;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    public function post($key, $default = "")
    {
        return Yii::$app->request->post($key, $default);
    }


    public function get($key, $default = "")
    {
        return Yii::$app->request->get($key, $default);
    }
}