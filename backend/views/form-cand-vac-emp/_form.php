<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\FormCandVacEmp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-cand-vac-emp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_f')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_s')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_birth')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'work_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trainee')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'projects')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'skills')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'more_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
