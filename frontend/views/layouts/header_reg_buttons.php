<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$model = new \frontend\models\SignupForm();
?>


<!--\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/signup')-->
<div class="button navbar-right">
    <a href="" class="btn navbar-btn nav-button wow fadeInRight" data-wow-delay="0.8s" data-toggle="modal" data-target="#myModal">Реєстрація</a>
    <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/login') ?>" class="btn navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.6s">Вхід</a>
</div>



<div id="myModal" class="modal fade">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <div class="row-fluid user-row">
                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                </div>
                <h3 style="text-align: center;">Реєстрація</h3> 
            </div>



            <div class='modal-body panel-body'>
                    <?php $form = ActiveForm::begin(['id' => 'form-signup','action'=>'signup']); ?>
                   

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group center">
                       
                    <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <!--<?php Yii::$app->view->render('@app/views/site/signup.php', ['model' => $model]); ?>-->
                    
                          </div>   
        </div>
    </div>
</div>
