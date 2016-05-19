<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
use kartik\file\FileInput;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\FormOrderInPr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-order-in-pr-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($vik, 'name')->textInput() ?>
    
    <?= $form->field($vik, 'adress')->textInput() ?>
    
    <?= $form->field($cha, 'name')->textInput() ?>
    <?= $form->field($cha, 'type')->textInput() ?>
    <?= $form->field($cha, 'st_level')->textInput() ?>
    <?= $form->field($cha, 'newness')->textInput() ?>
    <?= $form->field($cha, 'nat_imp')->textInput() ?>
    <?= $form->field($cha, 'result')->textInput() ?>
    
    <?= $form->field($model, 'in_direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patents')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'date_b')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

     <?= $form->field($model, 'date_e')->widget(DatePicker::classname(), [ 
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'cost_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key_perf_ind')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'key_market')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'coast')->textInput() ?>

    <?= $form->field($model, 'coast_direction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tax_coast_direction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'info_spec')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rating_effective')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'another_effects')->textarea(['rows' => 6]) ?>
    
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
                    $test = \common\models\AnotherFilesInPr::find()->where(['in_pr_id'=>$model->id])->all();
                    $id = 0;
                    foreach ($test as $key){
                        $id++;
                       $text .= '<div class="form-group" id="candelete-'.$id.'">
                                   <div class="col-lg-8"><input disabled class="form-control"  value="'.$key->name.'" ></div> <input type="button" data-url="'.Yii::getAlias("@web")."\\".$key->name.'" class="show_me btn btn-primary" id="download" value="Скачати"> <input type="button" class="delete_me_inpr btn btn-danger" data-id="'.$key->id.'" data-candel="candelete-'.$id.'" style="margin-left: 10px;" id="delete" value="Видалити">
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
