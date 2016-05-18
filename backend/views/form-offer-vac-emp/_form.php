<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferVacEmp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-vac-emp-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'name_org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info_org')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'info_org_s')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type_org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sector_org')->textInput(['maxlength' => true]) ?>
    
    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelVac[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'name', 
        ],
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-envelope"></i> Вакансии
                <button type="button" class="add-item btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
            </h4>
        </div>
        <div class="panel-body">
            <div class="container-items"><!-- widgetBody -->
            <?php foreach ($modelVac as $i => $vac): ?>
                <div class="item panel panel-default"><!-- widgetItem -->
                    <div class="panel-heading"> 
                        <div class="pull-right">
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $vac->isNewRecord) {
                                echo Html::activeHiddenInput($vac, "[{$i}]id");
                            }
                        ?>
                        <?= $form->field($vac, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                        
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div><!-- .panel -->
    <?php DynamicFormWidget::end(); ?>

    <?= $form->field($model, 'adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_site')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
