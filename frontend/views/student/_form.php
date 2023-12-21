<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'mentor_id')->dropDownList($teacher, ['prompt' => ' ']) ?>
    <?= $form->field($model, 'dob')->widget(
        DatePicker::className(),
        [
            'name' => 'check_issue_date',
            'value' => date('yyyy-mm-dd', strtotime('+2 days')),
            'options' => ['placeholder' => 'Select issue date ...'],
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pickerIcon' => '<i class="fas fa-calendar-alt text-primary"></i>',
            'removeIcon' => '<i class="fas fa-trash text-danger"></i>',
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>