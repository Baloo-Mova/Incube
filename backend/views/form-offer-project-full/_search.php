<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\FormOfferProjectFullSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-project-full-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'publisher_id') ?>

    <?= $form->field($model, 'economic_activities_id') ?>

   
    <?php // echo $form->field($model, 'project_manager') ?>

    <?php // echo $form->field($model, 'project_contacts') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web_site') ?>

    <?php // echo $form->field($model, 'project_name') ?>

    <?php // echo $form->field($model, 'project_goal') ?>

    <?php // echo $form->field($model, 'project_aspects') ?>

    <?php // echo $form->field($model, 'project_beneficaries') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'project_cost') ?>

    <?php // echo $form->field($model, 'project_duration') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'project_stage') ?>

    <?php // echo $form->field($model, 'available_funding') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'project_files') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_publish') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
