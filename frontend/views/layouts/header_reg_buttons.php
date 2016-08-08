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
    <a href="" class="btn navbar-btn nav-button" data-wow-delay="0.8s" data-toggle="modal" data-target="#myModal">Реєстрація</a>
    <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/login') ?>" class="btn navbar-btn nav-button login" data-wow-delay="0.6s">Вхід</a>
</div>



