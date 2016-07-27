<?php
/* @var $this yii\web\View */

$this->title = 'Incube';

use common\models\FormOfferProject;
?>
<?= $this->render('//layouts/slider.php') ?> 
<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInLeft" data-wow-delay="1s">
            <h2>Про нас</h2>
        </div>
        <div class="row how-it-work text-center">


            <div class="board"> 
                <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                        <div class="liner"></div>
                        <li class="active">
                            <a href="#home" data-toggle="tab" title="welcome">
                                <span class="round-tabs one">
                                    <i class="glyphicon glyphicon-home"></i>
                                </span> 
                            </a></li>

                        <li><a href="#profile" data-toggle="tab" title="profile">
                                <span class="round-tabs two">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span> 
                            </a>
                        </li>
                        <li><a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                                <span class="round-tabs three">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                </span> </a>
                        </li>

                        <li><a href="#settings" data-toggle="tab" title="blah blah">
                                <span class="round-tabs four">
                                    <i class="glyphicon glyphicon-comment"></i>
                                </span> 
                            </a></li>

                        <li><a href="#doner" data-toggle="tab" title="completed">
                                <span class="round-tabs five">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span> </a>
                        </li>

                    </ul></div>

                <div class="tab-content row">
                    <div class="tab-pane fade in active" id="home">

                        <h3 class="head text-center">Вас вітає <span style="color:#f48260;"></span></h3>
                        <h3 class="text-center">Відкрита регіональна платформа науково виробничого партнерства</h3>
                        <h1 class="text-center"><span style='color: #D30072; font-weight: bold;'>In</span><span style="color:#00AEEF; font-weight: bold;">Cube</span></h1>


                        <h4 class="narrow text-center">
                            Дана платформа розрахована на реалізацію молодіжних наукових розробок, актуальних для промислових і сільськогосподарських підприємств Запорізького регіону.

                        </h4>

                        <p class="text-center">
                            <a href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/about')?>" class="btn btn-success btn-outline-rounded green"> Детальніше <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <h3 class="head text-center">Зареєструйте свій аккаунт</h3>
                        <h4 class="narrow text-center">
                            Для того, щоб почати роботу - зареєструйтесь
                        </h4>

                        <p class="text-center">
                            <a href="../site/signup" class="btn btn-success btn-outline-rounded green"> Створити свій аккаунт <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                        </p>

                    </div>
                    <div class="tab-pane fade" id="messages">
                        <h3 class="head text-center">Подайте свій проект</h3>
                        <h4 class="narrow text-center">
                            Розмістіть на платформі свій проект
                        </h4>

                        <p class="text-center">
                            <a href="" class="btn btn-success btn-outline-rounded green"> Подати заявку <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <h3 class="head text-center">Слідкуйте за проектом</h3>
                        <h4 class="narrow text-center">
                            Для подальшого розвинення проекта спілкуйтесь з іншими учасниками платформи для отримання інвестицій, плану роботи, потрібних фахівців, тощо.
                        </h4>

                        <p class="text-center">
                           <!-- <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>-->
                        </p>
                    </div>
                    <div class="tab-pane fade" id="doner">
                        <div class="text-center">
                            <i class="img-intro icon-checkmark-circle"></i>
                        </div>
                        <h3 class="head text-center">Дякуємо</h3>
                        <h4 class="narrow text-center">
                            Дякуємо за те, що ви берете участь у роботі платформи.
                        </h4>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>




        </div>


        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Оберіть вашу роль</h2>
        </div>
        <div class="row how-it-work text-center">
            <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/index') ?>">
                <div class="col-md-3">
                    <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                        <img src="../img/how-work3.png" alt="">
                        <h3>Замовник</h3>
                        <p>Подає питання, що потрібно вирішити</p>
                    </div>
                </div>
            </a>
            <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/investor/index') ?>">
            <div class="col-md-3">
                <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                    <img src="../img/investor_desc_logo.png" alt="">
                    <h3>Інвестор</h3>
                    <p>Юридичні та фізичні особи, які можуть вкладувати кошти у інноваційний проект</p>
                </div>
            </div>
            </a>
            <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/designer/index') ?>">
            <div class="col-md-3">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="../img/how-work1.png" alt="">
                    <h3>Проектант</h3>
                    <p>Розробник інноваційного проекту</p>
                </div>
            </div>
            </a>
            <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/executor/index') ?>">
            <div class="col-md-3">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="../img/how-work2.png" alt="">
                    <h3>Виконавець</h3>
                    <p>Фахівець певної галузі, який бажає взяти участь у проекті</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    <hr>
</div>
<div class="container">
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Дійсні проекти</h5>
        <h2><span><?= FormOfferProject::find()->count() ?></span> Проекти для вас</h2>

    </div>
    <?php
    $tmp = FormOfferProject::find()->orderBy([
                'id' => SORT_ASC,
            ])->limit(5)->all();
    ?>


    <div id="custom_carousel" class="carousel slide odd wow fadeInUp" data-wow-delay="1s" data-ride="carousel" data-interval="9999999999999">

        <div class="carousel-inner">
            <?php
            foreach ($tmp as $i => $key) {
                ?>
                <div class="item <?php if ($key->id - 1 == 0) echo 'active'; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3"><img src="../img/projects_img/<?= $key->id ?>.jpg" class="img-responsive">   <!--http://placehold.it/350x250-->

                            </div>
                            <div class="col-md-9">
                                <h3 class="text-center"><a href="#" class=""><?= $key->project_name; ?></a></h3>
                                <hr/>
                                <h4 class="text-center"><?= $key->economicActivities->name; ?></h4>
                                <hr/>
                                <p class="text-left"><?= $key->project_goal; ?></p>
                            </div>
                        </div>
                    </div>            
                </div> 
            <?php } ?>

        </div>

        <div class="controls">
            <ul class="nav">
                <?php
                foreach ($tmp as $i => $key) {
                    ?>
                    <li data-target="#custom_carousel" data-slide-to="<?= $key->id - 1 ?>" class="<?php if ($key->id - 1 == 0) echo 'active'; ?>"><a href="#"><img src="http://placehold.it/50x50"><small><?= $key->project_name; ?></small></a></li>
                <?php } ?>


            </ul>
        </div>
    </div>
</div>


    <div class="homeSection-categories homeSection-subSection">


        <div class="row page-title text-center wow bounce animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: bounce;">

            <h2>Оберіть сферу діяльності</h2>
        </div>



        <div class="container odd wow fadeInLeft" data-wow-delay="1s">    
            <div class="row">

                <?php
                $counter = 1;
                foreach ($economicActivities as $key) {
                    //if($key->pid==NULL){
                    ?>

                    <a class="homeTile ng-isolate-scope" href="/explore/technology" ga-event-on="click" ga-event-category="Homepage" ga-event-action="Explore" ga-event-label="Technology">
                        <div class="homeTile-content" style="background-image: url('../img/eco_category/e<?= $counter ?>.png')">
                            <div class="homeTile-background"></div>
                            <div class="homeTile-icon">    <svg class=""><use xmlns:xlink="" xlink:href="#icon-icon-technology"></use></svg>
                            </div>
                            <div class="homeTile-title">
                                <?= $key->name ?>
                            </div>
                        </div>
                    </a>
                    <?php
                    $counter++;
//}
                }
                ?> 
            </div>

        </div>
    </div>
