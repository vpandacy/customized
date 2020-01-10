<?php
use yii\helpers\Html;
use app\components\GlobalUrlService;
$advan_name = $product_advantage[$advan_type]??'';
?>
    <!-- banner开始 -->
    <div class="banner">
        <img src="images/product-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/advantage.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <?php if ($product_advantage):?>
                        <?php foreach ($product_advantage as $key  =>$item):?>
                            <li <?php if ($key ==$advan_type):?>class="on"<?php endif;?>>
                                <a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>$key])?>"><?=$item?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>

                </ul>
                <img class="main-l-ft" src="images/productft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3><?=$advan_name?></h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/advantage')?>">项目优势</a> > <a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>$advan_type])?>"><?=$advan_name?></a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <img class="bigImage" src="images/advantageR.png" alt="" />
            </div>
            
        </div>
    </div>
    <!-- 内容结束 -->

