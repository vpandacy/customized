<?php

use app\components\GlobalUrlService;
use yii\helpers\Html;

?>
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
    <?=Html::jsFile('/js/jquery-1.11.3.min.js')?>
    <?=Html::jsFile('/js/aos.js')?>
</head>
<body>
    <!-- 头部开始 -->
    <div class="headerbg">
        <div class="wrap clearfix">
            <div class="header-l fl">
                <img class="logo" src="/images/logo.png" alt="" />
                <img src="/images/header-l.png" alt="" />
            </div>
            <div class="header-r fr">
                <img src="/images/header-r.png" alt="" />
            </div>
        </div>
    </div>
    <!-- 头部结束 -->

    <!-- 导航开始 -->
    <div class="navbg">
        <div class="nav wrap">
            <ul class="nav-ul clearfix">
                <li class="nav-firstLi navli">
                    <a href="index.html">网站首页</a>
                    <img src="/images/navbg.png"  alt="" />
                </li>
                <li class="navli">
                    <a href="about.html">关于我们</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="about.html">公司简介</a></li>
                            <li><a href="culture.html">企业文化</a></li>
                            <li><a href="factory.html">现代工厂</a></li>
                            <li><a href="honor.html">荣誉资质</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="trend.html">市场先机</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="trend.html">市场趋势</a></li>
                            <li><a href="prospect.html">市场前景</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="<?=GlobalUrlService::buildAppUrl('/products')?>">产品中心</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="product.html">集成墙板</a></li>
                            <li><a href="product2.html">艺术背景墙</a></li>
                            <li><a href="product3.html">生态地板</a></li>
                            <li><a href="product4.html">智能家居</a></li>
                            <li><a href="product5.html">集成吊顶</a></li>
                            <li><a href="product6.html">装饰线条</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="advantage.html">项目优势</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="advantage.html">品牌魅力</a></li>
                            <li><a href="sellingPoint.html">产品卖点</a></li>
                            <li><a href="joinAdv.html">加盟优势</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="joinProcess.html">合作共赢</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="joinProcess.html">加盟流程</a></li>
                            <li><a href="coMode.html">合作模式</a></li>
                            <li><a href="investmentAdv.html">投资优势</a></li>
                            <li><a href="joinSupport.html">加盟支持</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="navli">
                    <a href="news.html">新闻资讯</a>
                    <img src="/images/navbg.png"  alt="" />
                    <div class="downNav clearfix">
                        <ol class="downNav-l fl">
                            <li><a href="news.html">品牌新闻</a></li>
                            <li><a href="newsIndustry.html">行业动态</a></li>
                        </ol>
                        <div class="downNav-r fr">
                            <img src="/images/nav2.png" alt="" />
                        </div>
                    </div>
                </li>
                <li class="nav-lastLi navli">
                    <a href="contactUs.html">联系我们</a>
                </li>
            </ul>
            <img class="nav-firstLiBg" src="/images/navbg1.png" alt="" />
        </div>
    </div>
    <!-- 导航结束 -->

    <!-- banner开始 -->
    <div class="banner">
        <img src="/images/joinProcess-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="/images/xwzx.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <li class="<?php if ($source == '品牌新闻'):?>on<?php endif;?>"><a href="<?= GlobalUrlService::buildAppUrl('/news', ['source' => '品牌新闻']) ?>">品牌新闻</a></li>
                    <li class="<?php if ($source == '行业动态'):?>on<?php endif;?>"><a href="<?= GlobalUrlService::buildAppUrl('/news', ['source' => '行业动态']) ?>">行业动态</a></li>
                </ul>
                <img class="main-l-ft" src="/images/joinProcessft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3>品牌新闻</h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="/news">新闻资讯</a> > <a href="/news">品牌新闻</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <ul class="news-list-ul">
                    <?php foreach ($list as $item): ?>
                    <li>
                        <a href="<?= GlobalUrlService::buildAppUrl('/detail', ['id' => $item['id']]) ?>"
                           class="news-list clearfix">
                            <img class="news-list-l fl" src="<?= $item['image'] ?>" alt=""/>
                            <span class="news-list-r fr">
                                <h6><?= $item['title'] ?></h6>
                                <!-- 两行文本显示省略号 -->
                                <span class="news-list-abstract">
                                    <p><?= $item['brief'] ?></p>
                                </span>
                                <span class="news-list-date"><?= $item['write_at']?></span>
                            </span>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
                <script type="text/javascript">
                    // 两行文本显示省略号
                    $(function () {  
                        $(".news-list-abstract").each(function (i) {  
                            var divH = $(this).height();  
                            var $p = $("p", $(this)).eq(0);  
                            while ($p.outerHeight() > divH) {  
                                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));  
                            };  
                        });  
                    });
                </script>
            </div>
            
            <!-- 分页开始 -->
            <div class="fenye">
                <ul class="clearfix">
                    <?php echo \Yii::$app->view->renderFile("@app/modules/frontend/views/common/pagination.php", [
                        'pages' => $pages,
                        'url' => '/news',
                        'search_conditions'=> $search_conditions
                    ]); ?>
                </ul>
            </div>
            <!-- 分页结束 -->
            
        </div>
    </div>
    <!-- 内容结束 -->

    <!-- 底部开始 -->
    <?php echo \Yii::$app->view->renderFile("@app/modules/frontend/views/common/footer.php"); ?>
    <!-- 底部结束 -->
</body>
</html>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script> 