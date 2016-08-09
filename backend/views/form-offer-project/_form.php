<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-offer-project-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_goal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_aspects')->textarea(['rows' => 6]) ?>
    
    
  
    <?= $form->field($model, 'adress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'incube_help')->textarea(['rows' => 6]) ?>

    <!--<?= $form->field($model, 'economic_activities_id')->textInput() ?>-->
    <?=$form->field($model, 'economic_activities_id')->widget(Select2::classname(), [
    'data' =>  ArrayHelper::map(common\models\EconomicActivities::find()->all(),'id','name'),
    'language' => 'ru',
    'options' => ['placeholder' => 'Оберіть'],
    'pluginOptions' => [
        'allowClear' => true
    ],
])?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stage_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_cost')->textInput() ?>

    <?= $form->field($model, 'available_funding')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'date_b')->textInput() ?>-->
    <?= $form->field($model, 'date_b')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
   
    <!--<?= $form->field($model, 'date_e')->textInput() ?>-->
   <?= $form->field($model, 'date_e')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    <?= $form->field($model, 'file[]')->widget(FileInput::classname(), [
                'options' => ['multiple' => 'true'],
                'language'=>'ru',
                'pluginOptions'=>['previewFileType' => 'any',
                'maxFileCount'=>'6',
                'showUpload' => false, 
                 ]
    ]) ?>
    
   <?php if(!$model->isNewRecord) {
      $text = "";
                    $test = \common\models\FilesForFormOfferProject::find()->where(['pid'=>$model->id])->all();
                    $id = 0;
                    foreach ($test as $key){
                        $id++;
                       $text .= '<div class="form-group" id="candelete-'.$id.'">
                                   <div class="col-lg-8"><input disabled class="form-control"  value="'.$key->name.'" ></div> <input type="button" data-url="'.Yii::getAlias("@web")."\\".$key->name.'" class="show_me btn btn-primary" id="download" value="Скачати"> <input type="button" class="delete_me_formoffer btn btn-danger" data-id="'.$key->id.'" data-candel="candelete-'.$id.'" style="margin-left: 10px;" id="delete" value="Видалити">
                              </div>';
                        
                    }
   
       echo '
    <div class="container" style="width: 100%;height: 400px; background: lightgrey;">  
        <h3>
            Текущие приложенные файлы
        </h3>
        
        <div  style="width:100%;height: 80%; position: inherit;">
            <div class="form-horizontal">
                 ';
       echo $text;
        
    echo "
            </div>
        </div>
    </div>";
   } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

 