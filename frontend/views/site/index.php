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
                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
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
                                                <i class="glyphicon glyphicon-gift"></i>
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

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">

                                    <h3 class="head text-center">Welcome to Bootsnipp<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                                    <p class="narrow text-center">
                                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                    </p>

                                    <p class="text-center">
                                        <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h3 class="head text-center">Create a Bootsnipp<sup>™</sup> Profile</h3>
                                    <p class="narrow text-center">
                                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                    </p>

                                    <p class="text-center">
                                        <a href="" class="btn btn-success btn-outline-rounded green"> create your profile <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h3 class="head text-center">Bootsnipp goodies</h3>
                                    <p class="narrow text-center">
                                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                    </p>

                                    <p class="text-center">
                                        <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h3 class="head text-center">Drop comments!</h3>
                                    <p class="narrow text-center">
                                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                    </p>

                                    <p class="text-center">
                                        <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="doner">
                                    <div class="text-center">
                                        <i class="img-intro icon-checkmark-circle"></i>
                                    </div>
                                    <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
                                    <p class="narrow text-center">
                                        Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
               
            


        </div>


        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Оберіть вашу роль</h2>
        </div>
        <div class="row how-it-work text-center">
            <div class="col-md-3">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                    <img src="../img/how-work3.png" alt="">
                    <h3>Замовник</h3>
                    <p>Подає питання, що потрібно вирішити</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                    <img src="../img/investor_desc_logo.png" alt="">
                    <h3>Інвестор</h3>
                    <p>Юридичні та фізичні особи, які можуть вкладувати кошти у інноваційний проект</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="../img/how-work1.png" alt="">
                    <h3>Проектант</h3>
                    <p>Розробник інноваційного проекту</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="../img/how-work2.png" alt="">
                    <h3>Виконавець</h3>
                    <p>Фахівець певної галузі, який бажає взяти участь у проекті</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container">
    <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
        <h5>Дійсні проекти</h5>
        <h2><span><?= FormOfferProject::find()->count() ?></span> Проекти для вас</h2>
    </div>
    <div class="row jobs">
        <div class="col-md-9">
            <div class="job-posts table-responsive">
                <table class="table">
                    <?php
                    $tmp = FormOfferProject::find()->orderBy([
                                'rand()' => SORT_DESC,
                            ])->limit(5)->all();

                    foreach ($tmp as $i => $key) {
                        ?>
                        <tr class="odd wow fadeInUp" data-wow-delay="1s">
                            <td class="tbl-logo"><img src="../img/job-logo1.png" alt=""></td>
                            <td class="tbl-title"><h4>
                                    <?=
                                    $key->project_name;
                                    ?>
                                    <br><span class="job-type" style="overflow: hidden">
                                        <?= $key->economicActivities->name; ?>
                                    </span></h4></td>
                            <td><p>
                                    <?= $key->project_goal; ?>


                                </p></td> 
                            <td><p><i class="icon-location"></i>
                                    <?= $key->country ?>
                                </p></td>
                            <td><p>&dollar;
                                    <?= $key->project_cost;
                                    ?>

                                </p></td><td class="tbl-apply"><a href="#">Перейти</a></td>
                        </tr>

                    <?php }
                    ?>



                </table>
            </div>
            <div class="more-jobs">

                <a href="" id="logo">Більше</a>
            </div>
        </div>
        <div class="col-md-3 hidden-sm">
            <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                <h2 style="background-image: url(../img/job-add.png); font-size:20px"></h2>
                <a href="">Створити аккаунт</a>
            </div>
        </div>
    </div>
</div>
<hr>  

<!--<div class="i-tools">

    <div class="row page-title text-center wow bounce animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: bounce;">
        <h5>Оберіть потрібну категорію</h5>
        <h2>Дійсні категорії</h2>
    </div>


    <div class="i-tools-container">
        <div class="row">
<?php for ($ii = 1; $ii <= 8; $ii++) { ?>
                    <div class="i-tools-card ng-scope myBlock">
                        <a href="##"></a>
                        <div class="i-tools-logo center"> <img src="../img/job-logo5.png"></img>
                            <hr>
                            <h3> категорія 1</h3>
                            <div>Опис катеогорії 1 </div>
                        </div>



                    </div>

<?php } ?>


        </div>
    </div>
</div>        
<hr>-->
<div class="homeSection-categories homeSection-subSection">


    <div class="row page-title text-center wow bounce animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: bounce;">

        <h2>Оберіть сферу діяльності</h2>
    </div>



    <div class="container">    
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
