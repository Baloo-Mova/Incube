<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOfferProblem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-problem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'publisher_id') ?>

    <?= $form->field($model, 'economic_activities_id') ?>

    <?= $form->field($model, 'problem_name') ?>

    <?php // echo $form->field($model, 'problem_description') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_publish') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Пошук', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
