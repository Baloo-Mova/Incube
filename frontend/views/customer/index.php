<?php
/* @var $this yii\web\View */

use common\models\FormOfferProblem;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => FormOfferProblem::find()->where(['visibility' => 1])->orderBy('date DESC'),
    'pagination' => [
        'pageSize' => 20,
    ],
        ]);
$problems = FormOfferProblem::find()->where(['!=', 'status', 0])->all();
?>
<div class="row page-title text-center">
    <h2>Замовникам</h2>
</div>
<hr/>

<p><span> Замовник</span> - це користувач, что подає питання(проблему) для вирішення.</p>

<ul class="nav"> Замовником можуть виступати:   

    <li class="nav-pills-stacked-example"> 1) </li>
    <li class="nav-pills-stacked-example"> 2) </li>
    <li class="nav-pills-stacked-example"> 3) </li>
    <li class="nav-pills-stacked-example"> 4) </li>
</ul>    

<p>Якщо ви хочете подати проблему - заповніть наступну форму: </p>
<div class="text-center">
    <a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/create') ?>" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<hr/>
<div class="row">
    <div class="well well-sm">

        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm" onclick="changeView('list')"><span class="glyphicon glyphicon-th-list">
                </span> Список</a> <a href="#" id="grid" class="btn btn-default btn-sm" onclick="changeView('grid')"><span
                    class="glyphicon glyphicon-th"></span> Сітка</a>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <select>
                    <option>Filter</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row page-title text-center">
    <h2>Дійсні проблеми</h2>
    <!--<h5>Ви також можете переглянути вже опублікованні питання(проблеми), що потребують вирішення</h5>-->
</div>

<section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Питання(проблеми) для вирішення</a></li>
                                  
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start popular problems -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    
                     <?php
                     
                    foreach ($problems as $i) {
                         
                         ?>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="../img/250n300.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/view?id='.$i->id)?>"><span class="glyphicon glyphicon-arrow-right"></span>Продивитись</a>
                         <figcaption>
                          <h4 class="aa-product-title"><?=$i->problem_name?></h4>
                          <!--<span class="aa-product-price">$<?=number_format(rand(60,662000),0,'.','.')?></span><span class="aa-product-price"><del>$65.50</del></span>-->
                        </figcaption>
                      </figure>                     
                     
                      <!-- product id -->
                      <span class="aa-badge aa-sale" href="#"><?=$i->id?></span>
                    </li>
                     <?php } ?>                                
                  </ul>
                  <a class="btn btn-success btn-lg" href="#">Усі питання <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular problem category -->
                
                             
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->


