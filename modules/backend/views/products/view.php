<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = '产品' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?= Html::jsFile('/js/jquery.js') ?>
<div class="products-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'image',
            [
                'label' => 'status',
                'value' => function ($model) {
                    return $model->status == 10 ? "正常使用" : "已删除";
                }
            ],
            [
                'label' => 'type',
                'value' => function ($model) {
                    return $model->type == 1 ? "PC" : "WAP";
                }
            ]
        ],
    ]) ?>

</div>
