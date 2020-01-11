<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = '产品名称:' . $model->name;
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
                'confirm' => '确定要删除当前产品吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    [
                            'attribute' => 'image',
                        'format' =>'raw',
                        'value' =>$model->getImage()
                    ],
                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            return $model->status == 10 ? "正常" : "已删除";
                        }
                    ],
                    [
                        'attribute' => 'type',
                        'value' => function ($model) {
                            return  Yii::$app->params['product_type'][$model->type] ?? '';
                        }
                    ]
                ],
            ]) ?>


</div>
