<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = '产品添加';
$this->params['breadcrumbs'][] = ['label' => '产品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="products-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
