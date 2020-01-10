<?php
use app\components\GlobalUrlService;
?>
    <!-- banner开始 -->
    <div class="banner">
        <img src="images/about-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/about.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>1]);?>">公司简介</a></li>
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>2]);?>">企业文化</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>3]);?>">现代工厂</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>4]);?>">荣誉资质</a></li>
                </ul>
                <img class="main-l-ft" src="images/aboutft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>企业文化</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/about');?>">关于我们</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>2]);?>">企业文化</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <h6>汇聚前沿科技 承袭匠心本色</h6>

                <p>皇家首府为实现每一个家庭的理想安居而生。运用现代智慧概念打造未来生活，新型建材，一站式整装整配，简单轻装修，省时省心省钱省事。</p>
                <div class="culture-txt">
                    <h5>品牌定位:</h5>
                    <span>一站式生态整装专家</span>
                </div>
                <div class="culture-txt">
                    <h5>风格定位:</h5>
                    <span>时尚、前卫、生态、舒适</span>
                </div>
                <div class="culture-txt">
                    <h5>企业使命:</h5>
                    <span>让装修无忧 让时尚更简单</span>
                </div>
                <div class="culture-txt">
                    <h5>企业精神:</h5>
                    <span>创新务实 超越自我 追求卓越</span>
                </div>
                <div class="culture-txt culture-txt2">
                    <h5>行为准则:</h5>
                    <span>以结果思维为导向，以客户需求为己任，营造快捷省心装修体验</span>
                </div>
                <div class="culture-txt culture-txt2">
                    <h5>发展理念:</h5>
                    <span>科技创新、管理创新、营销创新</span>
                </div>
                <div class="culture-txt culture-txt2">
                    <h5>服务理念:</h5>
                    <span>一切为了客户，为了客户一切，为了一切客户</span>
                </div>
            </div>
            
        </div>
    </div>
    <!-- 内容结束 -->