<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\FormOfferExecutor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-executor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false, ['style' => 'display:none']) ?>

    <?= $form->field($model, 'publisher_id')->hiddenInput(['value' => NULL])->label(false, ['style' => 'display:none']) ?>

    <?= $form->field($model, 'executor_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'executor_secondname')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'date_birth')->textInput() ?>-->
    <?=
    $form->field($model, 'date_birth')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>
    <?= $form->field($model, 'experience')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'internship')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'participation_projects')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contacts')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other')->textarea(['rows' => 6]) ?>

    <?=
    $form->field($model, 'logo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            //'uploadUrl' => Url::to(['../web/img/']),
            'showUpload' => true,
        ],
    ])
    ?>

    <!--<?= $form->field($model, 'file_resume')->textInput(['maxlength' => true]) ?>-->
     <?=
    $form->field($model, 'file_resume')->widget(FileInput::classname(), [
        'options' => ['accept' => 'files/*'],
        'pluginOptions' => [
            //'uploadUrl' => Url::to(['../web/upload/']),
            'showUpload' => true,
        ],
    ])
    ?>
     <!--<?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_publish')->textInput() ?>-->
    <?=
    $form->field($model, 'date_create')->widget(DatePicker::classname(), [
        'options' =>['value' => date('Y-m-d')],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>

    

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
