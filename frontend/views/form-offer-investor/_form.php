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

    <?= $form->field($model, 'id_author')->textInput(['value'=>Yii::$app->user->id])?>
    
    <?= $form->field($model, 'id_publisher')->textInput() ?>
    

    <?= $form->field($model, 'investor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'investor_contacts')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stage_project')->textarea(['rows' => 6]) ?>

    <!--<?= $form->field($model, 'economic_activities')->textInput() ?>-->
    <?=
    $form->field($model, 'economic_activities')->widget(Select2::classname(), [
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

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>


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
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
