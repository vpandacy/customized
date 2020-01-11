<?php

use yii\helpers\Console;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="news-index">

    <p>
        <?= Html::a('新增新闻', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
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
//            'brief',
//            'content:ntext',
            'author',
//            'source',
            'write_at',
            //'keywords',
            //'description',
            //'created_time',
            //'updated_time',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return ($model->status == 10) ? '启用' : '停用';
                },
                'filter' =>[10=>'启用',5=>'停用']
            ],

            ['class' => 'yii\grid\ActionColumn',
//                'template' => '{view}{update}{resetpwd}{privilege}',
                'template' => '{view}{update}{using}{delete}',
                'buttons' => [
                    'using' => function ($url, $model, $key) {
                        if ($model->status == 10) {
                            return Html::a('<span class="glyphicon glyphicon-pause"></span>', Url::toRoute(['news/using', 'id' => $model->id, 'status' => 5]), [
                                'title' => '停止使用',
                                'class' => 'btn-view',
                                'method' => 'get'
                            ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-play"></span>', Url::toRoute(['news/using', 'id' => $model->id, 'status' => 10]), [
                                'title' => '开始启用',
                                'class' => 'btn-view',
                                'method' => 'get'
                            ]);
                        }
                    },
                ],
            ],
        ],
    ]); ?>


</div>
