<?php
use yii\helpers\Html;
use app\components\GlobalUrlService;
?>
<?=Html::jsFile('/js/lybook/index.js');?>

<!-- banner开始 -->
<div class="banner">
    <img src="/images/contactUs-banner.png" alt=""/>
</div>
<!-- banner结束 -->

<!-- 内容开始 -->
<div class="main wrap clearfix">
    <div class="main-l fl">
        <div class="main-l-hd">
            <img src="/images/contactUs.png" alt=""/>
        </div>
        <div class="main-l-bd">
            <ul class="lxwm-ul">
                <li>
                    <img src="/images/lxwm1.png" alt=""/>
                    <span class="lxwm-ul-txt">广东缔造者新型材料有限公司</span>
                </li>
                <li>
                    <img src="/images/lxwm2.png" alt=""/>
                    <span class="lxwm-ul-txt">0731-81833333</span>
                </li>
                <li>
                    <img src="/images/lxwm3.png" alt=""/>
                    <span class="lxwm-ul-txt">佛山市南海区西樵镇联新革新村 一队8号厂房</span>
                </li>
            </ul>
            <img class="main-l-ft" src="/images/joinProcessft.png" alt=""/>
        </div>
    </div>
    <div class="main-r fr">
        <div class="main-r-hd clearfix">
            <div class="main-r-hd-l fl">
                <h3>联系我们</h3>
            </div>
            <div class="main-r-hd-r fr">
                <span>您目前所在页面：<a href="<?=GlobalUrlService::buildAppUrl('/')?>">首页</a> > <a href="<?=GlobalUrlService::buildAppUrl('/contact-us')?>">联系我们</a></span>
            </div>
        </div>
        <div class="main-r-bd">
            <h3 class="lxwm-r-title">留言板</h3>
            <form id="lybook-from" method="post">
                <div class="lxwm-r-hd">
                    <span class="lxwm-r-item">姓名:</span>
                    <input class="lxwm-r-input" name="name" type="text"/>

                    <span class="lxwm-r-item">电话:</span>
                    <input class="lxwm-r-input" name="mobile" type="text"/>

                    <span class="lxwm-r-item">邮箱:</span>
                    <input class="lxwm-r-input" name="email" type="text"/>
                </div>
                <div class="lxwm-r-bd">
                    <span class="lxwm-r-item fl">内容:</span>
                    <textarea class="lxwm-r-textarea" name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
                <div class="lxwm-btn" style="text-align:center">提交</div>
            </form>
            <img src="/images/lxwmft.png" height="51" width="877" alt=""/>
        </div>


    </div>
</div>
