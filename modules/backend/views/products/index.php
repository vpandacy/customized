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

<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            [
                    'label'=>'图片',
                'format'=>[
                        'image',
                    [
                            "width"=>"84",
                            "height"=>"84"
                    ]
                ],
                'value'=>function($model){
                return $model->image;
                }

            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 10 ? "正常" : "已删除";
                },
                'filter' =>[10 =>'正常',0=>'删除']
            ],
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return Yii::$app->params['product_type'][$model->type] ??'';
                },
                'filter' => Yii::$app->params['product_type']
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
