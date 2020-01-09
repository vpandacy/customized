<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = '更新News: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?=Html::jsFile('/js/jquery-1.11.3.min.js')?>
<?=Html::jsFile('/js/Ecalendar.jquery.min.js')?>
<?=Html::jsFile('/js/iconfont.js')?>
<?=Html::cssFile('/css/Ecalendar.css')?>

<div class="news-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>


<?php
$js = <<<JS
 $(function () {
        // $("#ECalendar_date1").ECalendar({
        //     type:'time'
        // });
        $("#ECalendar_date1").ECalendar({
            type: "time",   //模式，time: 带时间选择; date: 不带时间选择;
            stamp: false,   //是否转成时间戳，默认true;
            offset: [0, 2],   //弹框手动偏移量;
            format: "yyyy-mm-dd",   //时间格式 默认 yyyy-mm-dd hh:ii;
            skin: 3,   //皮肤颜色，默认随机，可选值：0-8,或者直接标注颜色值;
            step: 10,   //选择时间分钟的精确度;
            callback: function (v, e) {
            } //回调函数
        });
    });
$("#ECalendar_date1").on('change',function() {
  console.log($(this).val());
})
JS;
$this->registerJs($js);
?>
