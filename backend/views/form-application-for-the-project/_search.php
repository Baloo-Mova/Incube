<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormApplicationForTheProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-application-for-the-project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_f') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name_s') ?>

    <?= $form->field($model, 'Adress') ?>

    <?php // echo $form->field($model, 'project_name') ?>

    <?php // echo $form->field($model, 'project_release') ?>

    <?php // echo $form->field($model, 'project_goal') ?>

    <?php // echo $form->field($model, 'project_result') ?>

    <?php // echo $form->field($model, 'date_b') ?>

    <?php // echo $form->field($model, 'date_e') ?>

    <?php // echo $form->field($model, 'project_cost') ?>

    <?php // echo $form->field($model, 'project_info') ?>

    <?php // echo $form->field($model, 'date_reg_proj') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
