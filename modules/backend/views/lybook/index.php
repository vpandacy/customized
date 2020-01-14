<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LybookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lybook-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'mobile',
            'email:email',
            ['attribute' => 'content', 'value' => 'begining'],
            ['attribute' => 'searchTime', 'value' => 'created_time', 'label' => '留言时间',
                'format' => ['date', 'php:Y-m-d H:i']],
            [
                'attribute' => 'is_read',
                'value' => function ($model) {
                    return $model->is_read ? '已读' : '未读';
                },
                'filter' => [0 => '未读', 1 => '已读'],
                'filterInputOptions' => [
                    'prompt' => '请选择状态',
                    'class' => 'form-control',
                    'id' => null,
                ],
                'contentOptions' => function ($model) {
                    return ($model->is_read == 0) ? ['class' => 'bg-danger'] : [];
                },
            ],
            //'status',
            //'created_time',
            //'updated_time',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}',],
        ],
    ]); ?>


</div>
