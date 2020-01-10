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
$this->registerJs($js);
?>
