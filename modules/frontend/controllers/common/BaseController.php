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
use yii\web\Response;

class BaseController extends Controller
{
    public $page_size = 4;
    public function post($key, $default = "")
    {
        return Yii::$app->request->post($key, $default);
    }


    public function get($key, $default = "")
    {
        return Yii::$app->request->get($key, $default);
    }

    protected function renderJSON($data = [], $msg = "操作成功~~", $code = 200)
    {
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $response->data   = [
            'msg'    => $msg,
            'code'   => $code,
            'data'   => $data,
        ];

        return $response;
    }

    protected function renderErrJSON($msg = "操作失败~~", $data = [])
    {
        return $this->renderJSON($data, $msg, -1);
    }
}