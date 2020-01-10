<?php
use  app\components\GlobalUrlService;
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
                    <li class="on"><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>1]);?>">公司简介</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>2]);?>">企业文化</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>3]);?>">现代工厂</a></li>
                    <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>4]);?>">荣誉资质</a></li>
                </ul>
                <img class="main-l-ft" src="images/aboutft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>公司简介</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/about');?>">关于我们</a> > <a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>1]);?>">公司简介</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <h6>一站式全屋定制整装方案供应商</h6>
                <p>皇家首府隶属广东缔造者新型材料有限公司旗下整装品牌，致力于打造全屋整装一站定制的新型装修模式，多年来以<span class="red">高品质、低价位、健康环保理念，</span>为装修行业解决不计其数的居家方案。</p>
                <p>皇家首府全屋整装以环保集成墙板为核心主材，秉承“绿色环保家居”理念，用“技术展现艺术” 推进制造技术深度融合，以“多维功能、全屋应用”实现“私人定制”，促进制造业朝高端、智能、绿色、服务方向发展，为消费者提供全屋整装一站式供货平台，全面掀起“大众创新、万众创业”的时代商潮。</p>
                <p>公司实力雄厚，拥有占地面积<b>数万平方米</b>的规模化生产工厂，集成墙板、吊顶，集成地板、线条，集成家居、5D背景墙等<b>几十条专业生产线，</b>以及大型仓储库房，自建各类功能性产品应用体验展厅及专业设计师团队，引进行业前沿的三维虚拟现实技术，创新性地将工业化、智能化、信息化完美融合，成功探索了颠覆传统装饰制造业的全屋整装定制发展道路！</p>
                <p>心怀梦想，砥砺前行。皇家首府秉承“科技创新、管理创新、营销创新”的发展理念，坚持专业、专注、专一的经营理念，始终把“出新品，出精品”作为品牌的发展之魂，不断推陈出新，引导潮流风向，以成熟的营销模式，简易透明的运营手法，完善的客服机制，帮助全国各地区域合作伙伴打造一个全新的创业平台！</p>
            </div>
            
        </div>
    </div>
    <!-- 内容结束 -->

