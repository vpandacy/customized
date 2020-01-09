<?php

use app\components\GlobalUrlService;

?>
<!-- 底部导航开始 -->
<div class="navbg ftNav">
    <div class="nav wrap">
        <ul class="nav-ul clearfix">
            <li class="nav-firstLi navli"><a href="<?= GlobalUrlService::buildAppUrl('/')?>">网站首页</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/about')?>">关于我们</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/trend')?>">市场先机</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/product')?>">产品中心</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/advantage')?>">项目优势</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/joinProcess')?>">合作共赢</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="navli"><a href="<?= GlobalUrlService::buildAppUrl('/news')?>">新闻资讯</a><img src="/images/navbg.png"  alt="" /></li>
            <li class="nav-lastLi navli"><a href="<?= GlobalUrlService::buildAppUrl('/contactUs')?>">联系我们</a></li>
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