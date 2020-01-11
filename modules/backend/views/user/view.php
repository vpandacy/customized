<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = '用户名称:'.$model->username;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?= Html::jsFile('/js/jquery.js') ?>
<div class="user-view">

    <p>
        <?php if (Yii::$app->user->identity->id == $model->id || Yii::$app->user->identity->username =='admin'):?>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除当前用户吗?',
                'method' => 'post',
            ],
        ]) ?>
        <?php endif;?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
//            'auth_key',
//            'password_hash',
            'created_at',
            'updated_at',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 10 ? "正常使用" : "禁用";
                }
            ]
        ],
    ]) ?>

</div>
