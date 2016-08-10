<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProblem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-problem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'publisher_id')->textInput() ?>

    <!-- <?= $form->field($model, 'economic_activities_id')->textInput() ?>-->
    <?=
    $form->field($model, 'economic_activities_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(common\models\EconomicActivities::find()->all(), 'id', 'name'),
        'language' => 'ru',
        'options' => ['placeholder' => 'Оберіть'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])
    ?>
    <?= $form->field($model, 'problem_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'problem_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other')->textarea(['rows' => 6]) ?>

    <!--<?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>-->
    <?=
    $form->field($model, 'logo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            //'uploadUrl' => Url::to(['../web/img/']),
            'showUpload' => true,
        ],
    ])
    ?>

    <!--<?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_publish')->textInput() ?>-->
    <?=
    $form->field($model, 'date_create')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>


    <?=
    $form->field($model, 'date_publish')->widget(DatePicker::classname(), [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
