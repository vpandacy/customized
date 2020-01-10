<?php
use app\components\GlobalUrlService;
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
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>1])?>">品牌魅力</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>2])?>">产品卖点</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>3])?>">加盟优势</a></li>
                </ul>
                <img class="main-l-ft" src="images/productft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>品牌魅力</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/advantage')?>">项目优势</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>1])?>">品牌魅力</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <img class="bigImage" src="images/advantageR.png" alt="" />
            </div>
            
        </div>
    </div>
    <!-- 内容结束 -->

