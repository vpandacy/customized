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
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>1])?>">市场趋势</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>2])?>">市场前景</a></li>
                </ul>
                <img class="main-l-ft" src="images/trendft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>市场趋势</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="index.html">首页</a> > <a href="trend.html">市场先机</a> > <a href="trend.html">市场趋势</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <h6>家装4.0时代大势所趋</h6>

                
                <img class="bigImage" src="images/trend.png" alt="" />

                <p>家装4.0时代涵盖了前三个时代的优势特点，同时整合了装修材料、基础施工、软装配饰设计安装、定制家具设计安装以及入住前开荒保洁等一站式整装服务，从产品材质、品牌建设、独特设计和体验服务上全方位、多维度的满足消费者更高层次的需求。</p>

                <img src="images/trendRft.png" class="trendRft" alt="" />
            </div>

            
            
        </div>
    </div>
    <!-- 内容结束 -->