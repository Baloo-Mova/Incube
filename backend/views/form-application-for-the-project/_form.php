<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\FormApplicationForTheProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-application-for-the-project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_f')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_s')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_release')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_goal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_result')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'date_b')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    
   <?= $form->field($model, 'date_e')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'project_cost')->textInput() ?>

    <?= $form->field($model, 'project_info')->textarea(['rows' => 6]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
