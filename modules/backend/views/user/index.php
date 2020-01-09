<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="user-index">

    <p>
        <?= Html::a('添加新用户', ['signup'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
//            'auth_key',
//            'password_hash',
            'created_at',
            'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
