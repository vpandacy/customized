<?php
use app\components\GlobalUrlService;
?>
 <!-- 轮播图开始 -->
    <div class="banner" aos="fade-up">
        <div class="swiper-container banner-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/banner.png" alt="" /></div>
                <div class="swiper-slide"><img src="images/banner.png" alt="" /></div>
                <div class="swiper-slide"><img src="images/banner.png" alt="" /></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination banner-pagination"></div>
        </div>
        <script>
            var swiper = new Swiper('.banner-container', {
                loop: true,
                pagination: {
                    el: '.banner-pagination',
                },
            });
        </script>
    </div>
    <!-- 轮播图结束 -->

    <!-- 内容1开始 -->
    <div class="main01 wrap clearfix">
        <div class="main01-l fl" aos="fade-right">
            <img src="images/aboutUs.png"  alt="" />
            <h3><b>皇家首府</b>一站式全屋定制整装方案供应商</h3>
            <p>皇家首府隶属广东缔造者新型材料有限公司旗下整装品牌，致力于打造<b>全屋整装一站定制</b>的新型装修模式，多年来以高品质、低价位、健康环保理念，为装修行业提供不计其数的居家方案。同时，凭借成熟的连锁加盟管理体系，全面掀起<span>“大众创新、万众创业”</span>的时代商潮。</p>
            <div class="main01-l-video">
                <video class="video" src=""></video>
                <div class="video-bg"></div>
                <a class="main01-l-video-btn" href="##">点击浏览全景视频</a>
            </div>
        </div>
        <div class="main01-r fr" aos="fade-left">
            <img src="images/main01-r.png"   alt="" />
            <div class="main01-more">
                <a href="<?=GlobalUrlService::buildAppUrl('/about')?>">查看详情</a>
            </div>
        </div>
    </div>
    <!-- 内容1结束 -->

    <!-- 内容2开始 -->
    <div class="main02" aos="zoom-in"></div>
    <!-- 内容2结束 -->
    <!-- 内容3开始 -->
    <div class="main03 wrap clearfix">
        <div class="main03-l fl" aos="fade-up-right">
            <img src="images/product.png"  alt="" />
            <ul class="main03-l-ul">
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>1])?>">集成墙板</a></li>
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>2])?>">个性定制画</a></li>
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>3])?>">地板系列</a></li>
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>4])?>">罗马系列</a></li>
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>5])?>">智能家居</a></li>
                <li><a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>6])?>">艺术窗帘</a></li>
            </ul>
        </div>
        <div class="main03-r fr" aos="fade-up-left">
            <h3><span>引入先进工艺技术</span>   打造高端定制典范</h3>
            <div class="banner2">
                <div class="swiper-container banner2-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/banner2.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner2.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner2.png" alt="" /></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination banner2-pagination"></div>
                </div>
                <script>
                    var swiper = new Swiper('.banner2-container', {
                        loop: true,
                        pagination: {
                            el: '.banner2-pagination',
                        },
                    });
                </script>
            </div>
            <div class="banner3">
                <div class="swiper-container banner3-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                        <div class="swiper-slide"><img src="images/banner3.png" alt="" /></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination banner3-pagination"></div>
                </div>
                <script>
                    var swiper = new Swiper('.banner3-container', {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        freeMode: true,
                        loop: true,
                        pagination: {
                        el: '.banner3-pagination',
                            clickable: true,
                        },
                    });
                </script>
                <!-- <div class="magnifier"></div> -->
            </div>
        </div>
    </div>
    <div class="main03-ft" aos="zoom-in">
        <ul class="clearfix">
            <li class="main03-ft-li1"></li>
            <li class="main03-ft-li2"></li>
            <li class="main03-ft-li3"></li>
            <li class="main03-ft-li4"></li>
            <li class="main03-ft-li5"></li>
            <li class="main03-ft-li6"></li>
            <li class="main03-ft-li7"></li>
            <li class="main03-ft-li8"></li>
        </ul>
    </div>
    <!-- 内容3结束 -->

    <!-- 内容4开始 -->
    <div class="main04" aos="fade-up">
        <img class="main04-hd" src="images/space.png" alt="" />
        <div class="main04-bd">
            <div class="banner4">
                <div class="banner4Bg"></div>
                <div class="swiper-container banner4-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/banner4.png" alt="" /><span class="banner4-title">客厅</span></div>
                        <div class="swiper-slide"><img src="images/banner4.png" alt="" /><span class="banner4-title">餐厅</span></div>
                        <div class="swiper-slide"><img src="images/banner4.png" alt="" /><span class="banner4-title">卧室</span></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination banner4-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next banner4-button-next"></div>
                    <div class="swiper-button-prev banner4-button-prev"></div>
                </div>
                <script>
                    var swiper = new Swiper('.banner4-container', {
                        loop: true,
                        pagination: {
                            el: '.banner4-pagination',
                        },
                        navigation: {
                            nextEl: '.banner4-button-next',
                            prevEl: '.banner4-button-prev',
                        },
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- 内容4结束 -->

    <!-- 内容5开始 -->
    <div class="main05" aos="zoom-in-up">
        <div class="banner5">
            <div class="swiper-container banner5-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/banner5.png" alt="" /></div>
                    <div class="swiper-slide"><img src="images/banner5.png" alt="" /></div>
                    <div class="swiper-slide"><img src="images/banner5.png" alt="" /></div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next banner5-button-next"></div>
            <div class="swiper-button-prev banner5-button-prev"></div>
            <script>
                var swiper = new Swiper('.banner5-container', {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    freeMode: true,
                    loop: true,
                    pagination: {
                    el: '.banner3-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.banner5-button-next',
                        prevEl: '.banner5-button-prev',
                    },
                });
            </script>
        </div>
    </div>
    <!-- 内容5结束 -->

    <!-- 内容6开始 -->
    <div class="main06 wrap" aos="zoom-in-down">
        <img class="main06-hd" src="images/news.png" alt="" />
        <div class="main06-bd clearfix">
            <div class="main06-bd-l fl">
                <a href="detail.html">
                    <img src="images/img1.png" alt="" />
                    <h3>皇家首府智享云端整装 装修化繁为简</h3>
                    <p>皇家首府拥有由量房设计师、室内设计师、家具设计师、软装设计师组成的强大设计团队，一对一专属服务，实现全屋整装个性定制！</p>
                </a>
            </div>
            <div class="main06-bd-r fr">
                <ul>
                    <li>
                        <a href="detail.html" class="main06-item clearfix">
                            <img class="main06-item-l fl" src="images/img2.png" alt="" />
                            <span class="main06-item-r fr">
                                <h6>皇家首府智享云端整装 装修化繁为简</h6>
                                <!-- 两行文本显示省略号 -->
                                <span class="main06-item-abstract">
                                    <p>皇家首府拥有由量房设计师、室内设计师、家具设计师、软装设计师组成的强大设计团队</p>
                                </span>
                                <span class="main06-item-date">2020-01-03</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="main06-item clearfix">
                            <img class="main06-item-l fl" src="images/img2.png" alt="" />
                            <span class="main06-item-r fr">
                                <h6>皇家首府智享云端整装 装修化繁为简</h6>
                                <!-- 两行文本显示省略号 -->
                                <span class="main06-item-abstract">
                                    <p>皇家首府拥有由量房设计师、室内设计师、家具设计师、软装设计师组成的强大设计团队，一对一专属服务，实现全屋整装个性定制！</p>
                                </span>
                                <span class="main06-item-date">2020-01-03</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="main06-item clearfix">
                            <img class="main06-item-l fl" src="images/img2.png" alt="" />
                            <span class="main06-item-r fr">
                                <h6>皇家首府智享云端整装 装修化繁为简</h6>
                                <!-- 两行文本显示省略号 -->
                                <span class="main06-item-abstract">
                                    <p>皇家首府拥有由量房设计师、室内设计师、家具设计师、软装设计师组成的强大设计团队，一对一专属服务，实现全屋整装个性定制！</p>
                                </span>
                                <span class="main06-item-date">2020-01-03</span>
                            </span>
                        </a>
                    </li>
                </ul>
<!--                <script type="text/javascript">-->
<!--                    // 两行文本显示省略号-->
<!--                    $(function () {  -->
<!--                        $(".main06-item-abstract").each(function (i) {  -->
<!--                            var divH = $(this).height();  -->
<!--                            var $p = $("p", $(this)).eq(0);  -->
<!--                            while ($p.outerHeight() > divH) {  -->
<!--                                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));  -->
<!--                            };  -->
<!--                        });  -->
<!--                    });-->
<!--                </script>-->
            </div>
        </div>
    </div>
    <!-- 内容6结束 -->

    <!-- 内容7开始 -->
    <a href="contactUs.html"><div class="main07" aos="zoom-in"></div></a>
    <!-- 内容7结束 -->