<?php
/* @var $this yii\web\View */
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
  
?>

<br/>

<?= Select2::widget([
    'name' => 'kv-state-250',
    'data' => ArrayHelper::map(common\models\EconomicActivities::find()->all(), 'id', 'name'),
    'size' => Select2::MEDIUM,
    'options' => ['placeholder' => 'Оберыть категорыю', 'multiple' => false],
    'pluginOptions' => [
        'allowClear' => true,
        
    ],
    'pluginEvents'=>[
        "select2:select" => "function() {   
            $.ajax({
                url: 'load?id='+$(this).val(), 
                beforeSend: function() {
                        var tt  = '<center>Тут типо лейбл загрузки, сам придумаеш</center>';
                        $('#content').html(tt);
                },
                success: function(result){
                        $('#content').html(result);
                }
            });  }",
    ],
]);?>



<div id="content" class="project-viewer-content">
     
</div>

