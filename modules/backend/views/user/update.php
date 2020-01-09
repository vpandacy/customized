<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update : ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update'; ?>
<?=Html::jsFile('/js/jquery.js')?>

<div class="user-update">
    <div class="row">
        <div class="col-lg-5">
            <?php
            $form = ActiveForm::begin([
                'id' => 'update-form',
                'options' => ['class' => 'form-horizontal'],
                'enableAjaxValidation' => true,
                'action' => Url::toRoute('update'),
                'validationUrl' => Url::toRoute(['validate-form'])
            ]); ?>
            <?= $form->field($model,'id')->hiddenInput()->label(false)?>
            <?= $form->field($model, 'username')->label('用户名') ?>
            <?= $form->field($model, 'old_password')->passwordInput()->label('旧密码') ?>
            <?= $form->field($model, 'new_password')->label('新密码')->passwordInput() ?>
            <?= $form->field($model, 'confirm_password')->label('确认密码')->passwordInput() ?>
            <div class="form-group">
                <div class=" col-lg-11">
                    <?= Html::submitButton('确定', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>
