<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'name_En') ?>

    <?= $form->field($model, 'advantage_1') ?>

    <?= $form->field($model, 'advantage_2') ?>

    <?php // echo $form->field($model, 'advantage_3') ?>

    <?php // echo $form->field($model, 'description_1') ?>

    <?php // echo $form->field($model, 'description_2') ?>

    <?php // echo $form->field($model, 'description_3') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
