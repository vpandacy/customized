<?php
/**
 * Created by PhpStorm.
 * User: TEM
 * Date: 2019/8/21
 * Time: 15:17
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = '添加新用户';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::jsFile('/js/jquery.js')?>
<div class="site-signup">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup',
                'options' => ['class' => 'form-horizontal'],
                'enableAjaxValidation' => true,
                'action' => Url::toRoute('signup'),
                'validationUrl' => Url::toRoute(['validate-signup'])
            ]); ?>
            <?= $form->field($model, 'username')->label('登陆名')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->label('密码')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton('添加', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
