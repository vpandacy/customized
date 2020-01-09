<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::jsFile('/js/jquery.js') ?>
<div class="products-index">

    <p>
        <?= Html::a('添加产品', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'image',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 10 ? "正常使用" : "已删除";
                },
            ],
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return $model->type == 1 ? "PC" : "WAP";
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
