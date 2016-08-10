<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-investor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false, ['style' => 'display:none']) ?>

    <?= $form->field($model, 'publisher_id')->hiddenInput(['value' => NULL])->label(false, ['style' => 'display:none']) ?>

    <?= $form->field($model, 'investor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'investor_contacts')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stage_project')->textarea(['rows' => 6]) ?> 
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
    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'investor_cost')->textInput() ?>

    <?= $form->field($model, 'duration_project')->textInput() ?>

    <?= $form->field($model, 'term_refund')->textInput() ?>

    <?= $form->field($model, 'plan_rent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'logo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
        //'uploadUrl' => Url::to(['../web/img/']),
        'showUpload' => true,
        ],
    ])
   
            ?>


    <?=
    $form->field($model, 'date_create')->widget(DatePicker::classname(), [
        'value'=> Yii::$app->formatter->asDatetime(date('Y-d-m')),
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
           'todayHighlight' => true
        ]
    ]);
    ?>


    <?=
    $form->field($model, 'date_publish')->hiddenInput()->label(false, ['style' => 'display:none']) 
    ?> 

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
