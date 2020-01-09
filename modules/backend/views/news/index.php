<?php

use yii\helpers\Console;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="news-index">

    <p>
        <?= Html::a('创建News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'image',
//            'brief',
//            'content:ntext',
            'author',
//            'source',
            'write_at',
            //'keywords',
            //'description',
            //'created_time',
            //'updated_time',
//            'status',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{using}',
                'header' => '操作',
                'buttons' => [
                    'using' => function ($url, $model, $key) {
                        if ($model->status == 10) {
                            return Html::a('开启使用', Url::toRoute(['news/using', 'id' => $model->id, 'status' => 5]), [
                                'title' => '栏目信息',
                                'class' => 'btn-view',
                                'method' => 'get'
                            ]);
                        } else {
                            return Html::a('停止使用', Url::toRoute(['news/using', 'id' => $model->id, 'status' => 10]), [
                                'title' => '栏目信息',
                                'class' => 'btn-view',
                                'method' => 'get'
                            ]);
                        }
                    },
                ]
            ],
            ['class' => 'yii\grid\ActionColumn']
        ],
    ]); ?>


</div>
