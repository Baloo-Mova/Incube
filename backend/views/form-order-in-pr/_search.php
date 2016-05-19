<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOrderInPrEmpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-order-in-pr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'in_direction') ?>

    <?= $form->field($model, 'patents') ?>

    <?= $form->field($model, 'date_b') ?>

    <?php // echo $form->field($model, 'date_e') ?>

    <?php // echo $form->field($model, 'cost_period') ?>

    <?php // echo $form->field($model, 'key_perf_ind') ?>

    <?php // echo $form->field($model, 'key_market') ?>

    <?php // echo $form->field($model, 'coast') ?>

    <?php // echo $form->field($model, 'coast_direction') ?>

    <?php // echo $form->field($model, 'tax_coast_direction') ?>

    <?php // echo $form->field($model, 'info_spec') ?>

    <?php // echo $form->field($model, 'rating_effective') ?>

    <?php // echo $form->field($model, 'another_effects') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
