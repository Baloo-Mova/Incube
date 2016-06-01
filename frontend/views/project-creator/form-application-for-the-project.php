<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\FormApplicationForTheProject */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="row page-title text-center">

        <h2>Форма бланку-заявки на реалізацію проекту</h2>
    </div>
    <hr/>
    <div class="form-application-for-the-project-form">

        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'name_f')->textInput(['maxlength' => true, 'placeholder' => 'Іванов']) ?>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'surname')->textInput(['maxlength' => true, 'placeholder' => 'Іван']) ?>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'name_s')->textInput(['maxlength' => true, 'placeholder' => 'Іванович']) ?>
                </div>
            </div>
        </div>


        <?= $form->field($model, 'Adress')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'project_release')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'project_goal')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'project_result')->textarea(['rows' => 6]) ?>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
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
            </div>
        </div>
        <div class="row">

            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?=
                    $form->field($model, 'date_b')->widget(DatePicker::classname(), [
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]);
                    ?>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <?=
                    $form->field($model, 'date_e')->widget(DatePicker::classname(), [
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-xs-4 col-sm-4 col-md-4">
               <div class="input-group">
                <?= $form->field($model, 'project_cost')->textInput() ?> 
                  <!--<span class="input-group-addon">$</span>-->
               </div>
            </div>
        </div>

        <div class="form-group">
           
            <?= $form->field($model, 'project_info')->textarea(['rows' => 6]) ?>
            
            
        </div>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Подати' : 'Оновити', ['class' => $model->isNewRecord ? 'btn navbar-btn nav-button login' : 'btn navbar-btn nav-button login']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>