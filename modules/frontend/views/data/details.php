<?php
use app\components\GlobalUrlService;
use yii\helpers\Html;
?>
    <!-- banner开始 -->
    <div class="banner">
        <img src="images/joinProcess-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/xwzx.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/news',['source'=>'品牌新闻'])?>">品牌新闻</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/news',['source'=>'行业动态'])?>">行业动态</a></li>
                </ul>
                <img class="main-l-ft" src="images/joinProcessft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>新闻资讯</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/news')?>">新闻资讯</a> >详情</span>
                </div>
            </div>
            <div class="main-r-bd">
                <div class="detail-hd">
                    <h3 class="detail-title"><?=Html::encode($info['title']);?></h3>
                    <span class="detail-date"><?=Html::encode($info['write_at']);?></span>
                </div>
                <p>
                    <?=$info['content']?>
                </p>
                <button class="detail-button">返回列表</button>
                <script type="text/javascript">
                    $(function(){
                        $(".detail-button").click(function(){
                            window.history.go(-1);
                        })
                    })
                </script>
            </div>
        </div>
    </div>
    <!-- 内容结束 -->
