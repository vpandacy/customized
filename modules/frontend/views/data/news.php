<?php

use app\components\GlobalUrlService;
use yii\helpers\Html;

?>
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
                    <h3><?php if ($source == "品牌新闻"):?>品牌新闻<?php else:?>行业动态<?php endif;?></h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> > <a href="/news">新闻资讯</a> > <a href="/news">品牌新闻</a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <ul class="news-list-ul">
                    <?php foreach ($list as $item): ?>
                    <li>
                        <a href="<?= GlobalUrlService::buildAppUrl('/details', ['id' => $item['id']]) ?>"
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

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>