<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model = new \frontend\models\SignupForm();

use common\models\FormOfferProject;
?>

<!--navbar-fixed-top-->

<div class="navbar-fixed-top">
    <div class="header-connect">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-8 col-xs-8">
                    <div class="header-half header-call">
                        <p>
                            <span><i class="icon-cloud"></i>+777 7777 7777</span>
                            <span><i class="icon-mail"></i>incube.zp@gmail.com</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                    <div class="header-half header-social">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vine"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">  <!--navbar-fixed-top-->
        <div class="container-fuild">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/index') ?>"><img src="../img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <?= Yii::$app->user->isGuest ? $this->render('//layouts/header_reg_buttons.php') : '' ?> 

            <div class="collapse navbar-collapse js-navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="main-nav nav navbar-nav navbar-center">
                    <li class="wow fadeInDown" data-wow-delay="0s"><a class="<?php if( \yii\helpers\Url::to('')=='/frontend/web/site/index'){  echo "active";}?>" href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/index') ?>">Головна</a></li>
                    <!--  <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="#">Проекти</a></li>-->
                    <li class=" dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle wow fadeInDown <?php if( \yii\helpers\Url::to('')=='/frontend/web/project-viewer/index'){  echo "active";}?>" data-wow-delay="0s" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Проекти <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="col-sm-2">
                                <ul>
                                    <li class="dropdown-header">Нові проекти</li>                            
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">

                                            <?php
                                            $new_orders = FormOfferProject::find()->orderBy([
                                                        'rand()' => SORT_DESC,
                                                    ])->limit(5)->all();

                                            foreach ($new_orders as $i => $key1) {
                                                ?>
                                                <div class="item  <?php if ($key1->id == 1) echo 'active'; ?>">
                                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product <?= $key1->id; ?>"></a>
                                                    <div class="layer">
                                                    <h4><small><?= $key1->project_name; ?></small></h4>   
                                                    </div>
                                                    <a class="btn navbar-btn nav-button login" type="button" href="###">Детальніше</a>       
                                                </div><!-- End Item -->
                                            <?php } ?>                               
                                        </div><!-- End Carousel Inner -->
                                    </div><!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/project-viewer/index')?>">Усі проекти</a></li>

                                </ul>

                            </li>

                            <li class="col-sm-3">
                                <ul>
                                    <li><a class="dropdown-header">Сільське господарство, лісове господарство та рибне господарство</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Переробна промисловість (Виробництво)</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Водопостачання, каналізація, поводження з відходами</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Будівництво</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li><a class="dropdown-header">Транспорт, складське господарство, поштова та кур'єрська діяльність</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Професійна, наукова та технічна діяльність</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Діяльність у сфері адміністративного та допоміжного обслуговування</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Державне управління й оборона, обов'язкове соціальне страхування</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li><a class="dropdown-header">Освіта</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Охорона здоров'я та надання соціальної допомоги</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Мистецтво, спорт, розваги та відпочинок</a></li>
                                    <li class="divider"></li>
                                    <li><a class="dropdown-header">Надання інших видів послуг (інші види діяльності) </a></li>
                                    <li class="divider"></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Інвестору</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Замовнику</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Проектанту</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">Виконавцю</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Контакти</a></li>

                </ul>
                <div class="button navbar-right">
                    <?= Yii::$app->user->isGuest ? '' : '<a href="' . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/personal-area/index') . '" class="btn navbar-btn nav-button wow bounceInRight login"><span class="glyphicon glyphicon-home"></span> Особистий кабінет</a>' ?>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
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
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'action' => \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/signup')]); ?>


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

