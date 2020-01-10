<?php
use app\components\GlobalUrlService;
?>
    <!-- banner开始 -->
    <div class="banner">
        <img src="images/trend-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/scxj.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>1])?>">市场趋势</a></li>
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>2])?>">市场前景</a></li>
                </ul>
                <img class="main-l-ft" src="images/trendft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>市场前景</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="index.html">首页</a> > <a href="trend.html">市场先机</a> > <a href="prospect.html">市场前景</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <h6>大市场</h6>

                
                <img class="bigImage" src="images/prospect.png" alt="" />

                
            </div>

            
            
        </div>
    </div>
    <!-- 内容结束 -->
