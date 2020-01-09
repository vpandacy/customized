<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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

    <div class="form-group">
        <label for="ECalendar_date1" style="width: 100%">选择时间</label>
        <div class="calendarWarp">
            <input type="text" name="write_at" class='ECalendar' id="ECalendar_date1" value="<?= $model->write_at?>"
                   placeholder="开始日期"/>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
