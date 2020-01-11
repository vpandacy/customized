<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = '新闻：' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="news-view">


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
            'title',
            [
                    'attribute' =>'image',
                'format' =>'raw',
                'value' =>$model->getImage()
            ],
            'brief',
            'content:ntext',
            'author',
            'source',
            'keywords',
            'description',
            'created_at',
            'updated_at',
            'write_at',
            [
                'label' => 'status',
                'value' => function ($model) {
                    return $model->getStatus($model->status);
                }
            ]
        ],
    ]) ?>

</div>
