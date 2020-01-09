<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
?>


<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget(\manks\FileInput::className(), []); ?>

    <?= $form->field($model, 'brief')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'minHeight' => '300px',
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'counter', 'definedlinks', 'filemanager', 'fontcolor', 'fontfamily', 'fontsize', 'fullscreen', 'imagemanager', 'limiter', 'table', 'textdirection', 'textexpander',]
        ]
    ]) ?>
    
    <?= $form->field($model, 'write_at')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => '选择时间'],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
