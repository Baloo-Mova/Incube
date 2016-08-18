<?php
/* @var $this yii\web\View */

use common\models\FormOfferProjectFull;
use common\models\FormOfferInvestor;


$projects = FormOfferProjectFull::find()->where(['!=', 'status', 0])->all();
$investors_offers = FormOfferInvestor::find()->where(['!=', 'status', 0])->all();
?>
<div class="row page-title text-center">
    <h2>Виконацям</h2>
</div>
<hr/>
<div class="row content">
    <p><span> Виконавець </span> - фахівець у певній галузі, що хоче прийняти участь у проекті або знайти роботу у межах проекту.</p>

    <ul class="nav">

    </ul>    

    <p>Якщо Ви шукаєте роботу - запонвіть наступну форму: </p>
    <div class="text-center">
        <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/executor/create')?>" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    
</div>
<hr/>
<div class="row">
    <div class="well well-sm">

        <div class="btn-group">
          
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            
                <select>
                    <option>Filter</option>
                </select>
           
        </div>
    </div>
</div>
<hr/>
<div class="row page-title text-center">
    
    <h2>Запропонуйте свою участь у вже опублікованих проектах</h2>
    
</div>
<br/>


 <div class="row">
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Подані проекти</a></li>
                                <li><a href="#inv_offers" data-toggle="tab">Інвестиційні проекти</a></li>



                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start popular problems -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                       
                                        <?php foreach ($projects as $project) { ?> 
                                            <li>
                                                <figure>
                                                  <!--<a class="aa-product-img" href="#"><img src="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/img/projects_img/' . $project->id . '.jpg') ?>" alt="polo shirt img"></a>-->
                                                    <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/designer/view?id=' . $project->id) ?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"> <?= $project->project_name ?></h4>
                                                        <!--<span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>-->
                                                    </figcaption>
                                                </figure>                     

                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#"><?= $project->id ?></span>
                                            </li>
                                        <?php } ?>      
                           
                                    </ul>
                                    <a class="btn btn-success btn-lg" href="#">Усі проекти <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular project category -->
                                
                                <!-- start iunvesors-offer category -->
                                <div class="tab-pane fade" id="inv_offers">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product item -->
                                        <?php foreach ($investors_offers as $inv_off) { ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/investor/view?id=' . $inv_off->id) ?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><?= $inv_off->investor_name ?></h4>
                                                        <!--<span class="aa-product-price">$<?= number_format(rand(60, 662000), 0, '.', '.') ?></span><span class="aa-product-price"><del>$65.50</del></span>-->
                                                    </figcaption>
                                                </figure>                     

                                                <!-- product id -->
                                                <span class="aa-badge aa-sale" href="#"><?= $i->id ?></span>
                                            </li>
                                        <?php } ?>        

                                    </ul>
                                    <div class="text-center">
                                        <a class="btn btn-success btn-lg" href="#">Усі інвестиційні проекти <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                                <!-- / realiz-projects category --> 

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
</div>