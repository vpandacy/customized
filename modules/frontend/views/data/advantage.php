<?php
use app\components\GlobalUrlService;
$advantage_info =$advantage_type[$type] ??[];
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
                    <?php if ($advantage_type):?>
                    <?php foreach ($advantage_type as $key =>$item):?>
                            <li <?php if ($type == $key):?>class="on"<?php endif;?>>
                                <a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>$key])?>"><?=$item['name']?></a>
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
                    <h3><?=$advantage_info['name']?></h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/advantage')?>">项目优势</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>$type])?>"><?=$advantage_info['name']?></a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <img class="bigImage" src="images/<?=$advantage_info['image']?>.png" alt="" />
            </div>
            
        </div>
    </div>
    <!-- 内容结束 -->

