<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>中工南科</title>
    <link rel="stylesheet" href="/wap/css/index.css">
    <link rel="stylesheet" href="/wap/css/swiper.min.css">
    <link rel="stylesheet" href="/wap/css/common.css">
    <script type="text/javascript" src="/wap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/wap/js/swiper.min.js"></script>
</head>
<body>
<div class="container">
    <div class="top" id="ico-top">
        <img src="/wap/images/top.png"/>
    </div>
    <div class="banner">
        <img src="/wap/images/banner.jpg"/>
    </div>
    <div class="gsjj">
        <img src="/wap/images/gsjj.jpg"/>
        <h3 class="bt">公司简介</h3>
        <p>湖北中工南科智能机械有限公司（以下简称中工南科），集科研、生产、销售于一体，先后引进欧美先进技术和工艺，率先研发制造环保矿山机械产品——制砂机，
            产品品类型号丰富，可根据客户需求量身定制，力求替客户高效解决制砂作业问题。</p>
        <p>中工南科背靠稳立行业40多年的实力雄厚总部——湖北中工南方科技有限公司（原湖北南方煤矿机械厂），公司占地面积200余亩，其中厂房面积30000多平方米，
            设备齐全，有完善的机械加工和检测能力，并具有较强的产品设计、制造及研发能力，是国家安全生产监督管理局《煤矿矿用产品安全标志证书》认证企业。
            公司产品均已通过 ISO900l质量体系认证，并全部通过国家安全生产矿用设备检测检验中心的检测验收，荣登国家安监局《中华安全榜》，产品行销全国20
            多个省（市）、自治区，并出口到东南亚等国家。</p>
        <p>中工南科顺应国家环境政策，将主力放在各类型制砂机、破碎机及传输带等配套系统设备的研发生产上，致力于为行业带来高效、节能、环保的制砂设备。我公司
            以“重诚守信、质量第一”为企业宗旨，努力把企业做强、做精、做优，竭诚为广大用户提供优质的产品和服务。</p>
    </div>

    <div class="qyry">
        <h3>企业荣誉</h3>
        <ul>
            <li><img src="/wap/images/qyry-01.jpg"/></li>
            <li><img src="/wap/images/qyry-02.jpg"/></li>
            <li><img src="/wap/images/qyry-03.jpg"/></li>
            <li><img src="/wap/images/qyry-04.jpg"/></li>
        </ul>
    </div>
    <div class="cpzx">
        <h3 class="bt">产品中心</h3>
        <div class="index-list1">
            <div class="swiper-container swiper-list1">
                <div class="swiper-wrapper">
                    <?php foreach ($products as $value) { ?>
                        <div class="swiper-slide"><img src="<?= $value->image?>" alt=""/>
                            <p><?= $value->name?></p></div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next swiper-btnnext1"></div>
                <div class="swiper-button-prev swiper-btnprev1"></div>
            </div>
        </div>
    </div>
    <div class="spzx">
        <h3 class="bt">视频中心</h3>
        <div class="spzx-m">
            <ul>
                <li class="spzx-main spzx-main-b">宣传视频</li>
                <li class="spzx-main">产品视频</li>
                <li class="spzx-main">应用视频</li>
            </ul>
        </div>
        <div class="spzx-s">
            <div class="spzx-son show">video1</div>
            <div class="spzx-son">video2</div>
            <div class="spzx-son">video3</div>
        </div>
    </div>
    <div class="hyfx">
        <h3 class="bt">行业分析</h3>
        <div class="index-list2">
            <div class="swiper-container swiper-list2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hyfx-lb">
                            <img src="/wap/images/hyfx-01.jpg"/>
                            <div><h3>国家政策</h3>
                                <p>限挖河沙 限开采天然砂</p></div>
                        </div>
                        <p>国家政策明令限制挖河沙及开采天然砂，但全国建筑工程量极大，天然砂作为建筑行业混凝土的主要配料，不可或缺，目前，砂石市场供不应求。</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="hyfx-lb">
                            <img src="/wap/images/hyfx-02.jpg"/>
                            <div><h3>制砂商机</h3>
                                <p>人工制砂难度大 效率低</p></div>
                        </div>
                        <p>由于国家政策的限制和人工制砂难度大，制砂机凭借应用性广，可破碎石料种类多，机械化程度高，制砂效率高等多项优点突围而出，成为制砂行业先锋。</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="hyfx-lb">
                            <img src="/wap/images/hyfx-03.jpg"/>
                            <div><h3>中工南科制砂机</h3>
                                <p>可移动 制砂量大 制砂成本低</p></div>
                        </div>
                        <p>中工南科移动制砂机，设备精良、运行不卡顿、破碎比大、产能巨大、经久耐用。一体化智能操作，可破碎超过200种石料，广泛应用于建筑、矿山、煤矿等数十个行业。</p>
                    </div>
                </div>
                <div class="swiper-button-next swiper-btnnext2">下一页</div>
                <div class="swiper-button-prev swiper-btnprev2">上一页</div>
            </div>
        </div>
    </div>
    <div class="kc">
        <img src="/wap/images/cont.jpg"/>
    </div>

    <iframe src="/wap/map.html" width="100%" height="340px" frameborder="0" scrolling="no"></iframe>

    <div class="cont">

        <ul>
            <li>
                <h3>湖北中工南科智能机械有限公司</h3>
                <p>湖北省鄂州市鄂城区樊川大道13号</p>
            </li>
            <li>
                <img src="/wap/images/cont-ewm.png"/>
            </li>
        </ul>

    </div>


    <div class="banquan">
        中工南科智能机械有限公司 版权所有 2019 粤ICP备1111111111号
    </div>
    <div class="ico-top">
        <a href="#ico-top"><img src="/wap/images/ico-top.png"/></a>

    </div>
</div>


<script>
    //轮播
    var swiper1 = new Swiper('.swiper-list1', {
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-btnnext1',
            prevEl: '.swiper-btnprev1',
        },
    });


    var swiper2 = new Swiper('.swiper-list2', {
        observer: true,
        centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-btnnext2',
            prevEl: '.swiper-btnprev2',
        },
    });


    //视频中心-滑动
    $(function () {
        $(".spzx-main").click(function () {
            $(this).addClass("spzx-main-b").siblings().removeClass("spzx-main-b");
            var idx = $(this).index();
            $(".spzx-son").eq(idx).addClass("show").siblings().removeClass("show");
        });
        if (!/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            window.location.href = "/";
        }
    });

</script>
</body>
</html>
