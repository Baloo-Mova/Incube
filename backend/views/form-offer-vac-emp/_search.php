<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOfferVacEmpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-vac-emp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_org') ?>

    <?= $form->field($model, 'info_org') ?>

    <?= $form->field($model, 'info_org_s') ?>

    <?= $form->field($model, 'type_org') ?>

    <?php // echo $form->field($model, 'sector_org') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web_site') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
