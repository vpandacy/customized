<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = '更新产品: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="products-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
