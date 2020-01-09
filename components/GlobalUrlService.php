<?php

namespace app\components;
use yii\helpers\Url;

class GlobalUrlService
{
    /**
     * Author: apanly
     * 页面空链接
     */
    public static function buildNullUrl()
    {
        return "javascript:void(0);";
    }

    public static function buildAppUrl($uri, $params = []){
        $path = "";

        if( $uri ){
            $path   = Url::toRoute(array_merge([$uri], $params));
        }

        $domain = \Yii::$app->params['domain'];
        if (UtilHelper::is_SSL()) {
            $domain = str_replace("http://", "https://", $domain.$path);
        }
        return $domain . $path;
    }


}
