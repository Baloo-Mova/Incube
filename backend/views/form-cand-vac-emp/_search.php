<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormCandVacEmpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-cand-vac-emp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_f') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name_s') ?>

    <?= $form->field($model, 'date_birth') ?>

    <?php // echo $form->field($model, 'work_info') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'trainee') ?>

    <?php // echo $form->field($model, 'projects') ?>

    <?php // echo $form->field($model, 'skills') ?>

    <?php // echo $form->field($model, 'more_info') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
