<?php
use yii\helpers\Html;
use app\components\GlobalUrlService;
$type_name = Yii::$app->params['product_type'][$type] ??'';
?>


    <!-- banner开始 -->
    <div class="banner">
        <img src="images/product-banner.png" alt="" />
    </div>
    <!-- banner结束 -->

    <!-- 内容开始 -->
    <div class="main wrap clearfix">
        <div class="main-l fl">
            <div class="main-l-hd">
                <img src="images/product2.png"  alt="" />
            </div>
            <div class="main-l-bd">
                <ul>
                    <?php if ($product_type):?>
                    <?php foreach ($product_type as $key  =>$item):?>
                            <li <?php if ($key ==$type):?>class="on"<?php endif;?>>
                                <a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>$key])?>"><?=$item?></a>
                            </li>
                    <?php endforeach;?>
                    <?php endif;?>

                </ul>
                <img class="main-l-ft" src="images/productft.png" alt="" />
            </div>
        </div>
        <div class="main-r fr">
            <div class="main-r-hd clearfix">
                <div class="main-r-hd-l fl">
                    <h3><?=$type_name;?></h3>
                </div>
                <div class="main-r-hd-r fr">
                    <span>您目前所在页面：<a href="/">首页</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/products')?>">产品中心</a> >
                        <a href="<?=GlobalUrlService::buildAppUrl('/products',['type'=>$type])?>"><?=$type_name?></a></span>
                </div>
            </div>
            <div class="main-r-bd">
                <ul class="product-ul clearfix">
                    <?php if ($list):?>
                    <?php foreach ($list as $item):?>
                    <li>
                        <a href="javascript:;">
                            <img src="<?=$item['image']?>" alt="" class="pimg"/>
                            <div class="product-txt clearfix">
                                <span class="product-txt-l fl"><?=$item['name']?></span>
                                <span class="product-txt-r fr"></span>
                            </div>
                        </a>
                    </li>

                    <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <!-- 点击图片放大开始 -->
                <div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:2;width:100%;height:100%;display:none;">
                    <div id="innerdiv" style="position:absolute;">
                        <img id="bigimg" style="border:5px solid #fff;" src="" />
                    </div>
                </div>
                <!-- 点击图片放大结束 -->
                <script type="text/javascript">
                    $(function(){
                        for(var i=0; i<20; i++){
                            var n = 3*i+1;
                            $(".product-ul li").eq(n).addClass('jiange');
                        }
                    })
                </script>
            </div>

            <!-- 分页开始 -->
            <div class="fenye">
                <ul class="clearfix">
                    <?php echo \Yii::$app->view->renderFile("@app/modules/frontend/views/common/pagination.php", [
                        'pages' => $pages,
                        'url' => '/products',
                    ]); ?>
                </ul>
            </div>
            <!-- 分页结束 -->
            
        </div>
    </div>
    <!-- 内容结束 -->