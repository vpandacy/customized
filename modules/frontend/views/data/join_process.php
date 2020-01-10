<?php

use app\components\GlobalUrlService;

?>
<!-- banner开始 -->
<div class="banner">
    <img src="/images/joinProcess-banner.png" alt=""/>
</div>
<!-- banner结束 -->

<!-- 内容开始 -->
<div class="main wrap clearfix">
    <div class="main-l fl">
        <div class="main-l-hd">
            <img src="/images/hzgy.png" alt=""/>
        </div>
        <div class="main-l-bd">
            <ul>
                <li <?php if ($type == 1): ?>class="on"<?php endif; ?>><a
                            href="<?= GlobalUrlService::buildAppUrl('/join-process',
                                ['type' => 1]) ?>">加盟流程</a></li>
                <li <?php if ($type == 2): ?>class="on"<?php endif; ?>><a
                            href="<?= GlobalUrlService::buildAppUrl('/join-process', ['type' => 2]) ?>">合作模式</a>
                </li>
                <li <?php if ($type == 3): ?>class="on"<?php endif; ?>><a
                            href="<?= GlobalUrlService::buildAppUrl('/join-process', ['type' => 3]) ?>">投资优势</a>
                </li>
                <li <?php if ($type == 4): ?>class="on"<?php endif; ?>><a
                            href="<?= GlobalUrlService::buildAppUrl('/join-process',
                                ['type' => 4]) ?>">加盟支持</a></li>
            </ul>
            <img class="main-l-ft" src="/images/joinProcessft.png" alt=""/>
        </div>
    </div>
    <div class="main-r fr">
        <div class="main-r-hd clearfix">
            <div class="main-r-hd-l fl">
                <h3>加盟流程</h3>
            </div>
            <div class="main-r-hd-r fr">
                <span>您目前所在页面：<a href="<?=GlobalUrlService::buildAppUrl('/')?>">首页</a> > <a href="<?= GlobalUrlService::buildAppUrl('/join-process') ?>">合作共赢</a> > <a
                            href="<?= GlobalUrlService::buildAppUrl('/join-process', ['type'=>$type]) ?>"><?=$page_name?></a></span>
            </div>
        </div>
        <div class="main-r-bd">
            <img class="bigImage" src="/images/<?= $images ?>.png" alt=""/>
        </div>

    </div>
</div>
<!-- 内容结束 -->

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script> 