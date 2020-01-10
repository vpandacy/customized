<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lybook */

$this->title = 'Create Lybook';
$this->params['breadcrumbs'][] = ['label' => 'Lybooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lybook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
