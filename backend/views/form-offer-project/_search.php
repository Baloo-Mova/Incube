<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOfferProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'project_goal') ?>

    <?= $form->field($model, 'project_aspects') ?>

    <?= $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web_site') ?>

    <?php // echo $form->field($model, 'incube_help') ?>

    <?php // echo $form->field($model, 'economic_activities') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'stage_work') ?>

    <?php // echo $form->field($model, 'project_cost') ?>

    <?php // echo $form->field($model, 'available_funding') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'date_b') ?>

    <?php // echo $form->field($model, 'date_e') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
