<?php
use yii\helpers\Html;
use app\components\GlobalUrlService;
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>皇家首府官网</title>
    <?=Html::cssFile('/css/common.css')?>
    <?=Html::cssFile('/css/swiper.min.css')?>
    <?=Html::cssFile('/css/aos.css')?>
    <?=Html::cssFile('/css/list.css')?>
    <?=Html::cssFile('/css/index.css')?>
    <?=Html::jsFile('/js/jquery-1.11.3.min.js')?>
    <?=Html::jsFile('/js/swiper.min.js')?>
    <?=Html::jsFile('/js/aos.js')?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- 头部开始 -->
<div class="headerbg">
    <div class="wrap clearfix">
        <div class="header-l fl">
            <img class="logo" src="images/logo.png" alt="" />
            <img src="images/header-l.png" alt="" />
        </div>
        <div class="header-r fr">
            <img src="images/header-r.png" alt="" />
        </div>
    </div>
</div>
<!-- 头部结束 -->

<!-- 导航开始 -->
<div class="navbg">
    <div class="nav wrap">
        <ul class="nav-ul clearfix">
            <li class="nav-firstLi navli">
                <a href="/">网站首页</a>
                <img src="images/navbg.png"  alt="" />
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/about');?>">关于我们</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>1]);?>">公司简介</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>2]);?>">企业文化</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/about',['type'=>3]);?>">现代工厂</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/about.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/trend');?>">市场先机</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>1]);?>">市场趋势</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/trend',['type'=>2]);?>">市场前景</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/trend.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/products');?>">产品中心</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>1]);?>">集成墙板</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>2]);?>">艺术背景墙</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>3]);?>">生态地板</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>4]);?>">智能家居</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>5]);?>">集成吊顶</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>6]);?>">装饰线条</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/products.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/advantage');?>">项目优势</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>1]);?>">品牌魅力</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>2]);?>">产品卖点</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('/advantage',['type'=>3]);?>">加盟优势</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/advantage.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/join-process');?>">合作共赢</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?= GlobalUrlService::buildAppUrl('/join-process',
                                ['type' => 1]) ?>">加盟流程</a></li>
                        <li><a href="<?= GlobalUrlService::buildAppUrl('/join-process', ['type' => 2]) ?>">合作模式</a></li>
                        <li><a href="<?= GlobalUrlService::buildAppUrl('/join-process', ['type' => 3]) ?>">投资优势</a></li>
                        <li><a href="<?= GlobalUrlService::buildAppUrl('/join-process',
                                ['type' => 4]) ?>">加盟支持</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/join-process.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/news');?>">新闻资讯</a>
                <img src="images/navbg.png"  alt="" />
                <div class="downNav clearfix">
                    <ol class="downNav-l fl">
                        <li><a href="<?=GlobalUrlService::buildAppUrl('news',['source'=>'品牌新闻'])?>">品牌新闻</a></li>
                        <li><a href="<?=GlobalUrlService::buildAppUrl('news',['source'=>'行业动态'])?>">行业动态</a></li>
                    </ol>
                    <div class="downNav-r fr">
                        <img src="images/navigation_img/news.jpg" alt="" />
                    </div>
                </div>
            </li>
            <li class="nav-lastLi navli">
                <a href="<?=GlobalUrlService::buildAppUrl('/contact-us');?>">联系我们</a>
            </li>
        </ul>
        <img class="nav-firstLiBg" src="images/navbg1.png" alt="" />
    </div>
</div>
<!-- 导航结束 -->


<!-- 内容开始 -->
<?=$content?>
<!-- 内容结束 -->

<div class="navbg ftNav">
    <div class="nav wrap">
        <ul class="nav-ul clearfix">
            <li class="nav-firstLi navli"><a href="<?= GlobalUrlService::buildAppUrl('/')?>">网站首页</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/about')?>">关于我们</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/trend')?>">市场先机</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/products')?>">产品中心</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/advantage')?>">项目优势</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/join-process')?>">合作共赢</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/news')?>">新闻资讯</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="nav-lastLi navli"><a href="<?= GlobalUrlService::buildAppUrl('/contact-us')?>">联系我们</a></li>
        </ul>
        <img class="nav-firstLiBg" src="/images/navbg1.png" alt="" />
    </div>
</div>
<!-- 底部导航结束 -->

<!-- 底部信息开始 -->
<div class="footerbg">
    <div class="footer wrap">
        <div class="footer-hd clearfix">
            <div class="footer-hd-l fl">
                <img src="/images/footer-l.png"  alt="" />
                <span>广东缔造者新型材料有限公司</span>
            </div>
            <div class="footer-hd-m fl">
                <img src="/images/footer-m.png"  alt="" />
                <span>佛山市南海区西樵镇联新革新村一队8号厂房</span>
            </div>
            <div class="footer-hd-r fr">
                <img src="/images/footer-r.png"  alt="" />
                <span>0731-81833333</span>
            </div>
        </div>
        <div class="footer-bd clearfix">
            <img class="footer-logo fl" src="/images/logo.png" height="114" width="100" alt="" />
            <div class="footer-erweima fl">
                <img src="/images/img3.png" alt="" />
                <div>公众号二维码</div>
            </div>
        </div>
        <p class="footer-copy">copyright@2020-2021版权所有广东缔造者新型材料有限公司      粤ICP备20010233号-1  /  技术支持： 好商汇</p>
    </div>
</div>
<!-- 底部信息结束 -->
<!-- 底部结束 -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>