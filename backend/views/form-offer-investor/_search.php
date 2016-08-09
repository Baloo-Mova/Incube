<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-investor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_author') ?>

    <?= $form->field($model, 'id_publisher') ?>

    <?= $form->field($model, 'investor_name') ?>

    <?= $form->field($model, 'investor_contacts') ?>

    <?php // echo $form->field($model, 'stage_project') ?>

    <?php // echo $form->field($model, 'economic_activities') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'investor_cost') ?>

    <?php // echo $form->field($model, 'duration_project') ?>

    <?php // echo $form->field($model, 'term_refund') ?>

    <?php // echo $form->field($model, 'plan_rent') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_publish') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
