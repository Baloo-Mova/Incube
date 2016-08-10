<?php
/* @var $this yii\web\View */
use common\models\FormOfferProblem;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => FormOfferProblem::find()->where(['visibility'=>1])->orderBy('date DESC'),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
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
    <a href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/create')?>" class="btn btn-lg btn-danger center">Подати заявку <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<hr/>
<div class="row page-title text-center">
    <h2>Дійсні проблеми</h2>
    <h5>Ви також можете переглянути вже опублікованні питання(проблеми), що потребують вирішення</h5>
</div>
<br>

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
<div class="product-grid row">
 
    <?php 
    $problems = FormOfferProblem::find()->where(['status'=>1])->all();
    
    
    foreach ($problems as $i) { ?>


        <div class="col-lg-4 col-sm-6">
            <div class="thumbnail">
                <a href="#" class="post-image-link">
                    <p><img src="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/img/')?>250n300.png" class="img-responsive" alt=""></p>

                </a>
                <div class="caption">
                    <h3 class="text-center"><?=
            $i->problem_name;
            ?> 
                    </h3>
                    
                    <a href="<?=\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/customer/view?id='.$i->id)?>" class="btn btn-primary">Продивитись</a>
                    
                </div>
            </div>
        </div>
    <?php } ?>


</div>
