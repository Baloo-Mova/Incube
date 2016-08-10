<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\EconomicActivities;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Зявка інвестора', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-investor-view">
<div class="row page-title text-center">
    <h2>Заявка інвестора. Ідентифікаційний номер: <?= Html::encode($this->title) ?></h2>
</div>
    
    
    <br/>



<div id="content" class="project-viewer-content">

    <?php
    $eco = EconomicActivities::find()->where(['id' => $model["economic_activities_id"]])->all();
    ?>


    <!--<?php var_dump($model); ?>-->
 <div class="panel panel-primary">
     <div class="panel-heading text-center"><h4>Інвестор</h4></div>
     <div class="panel-body"><h3 class="text-center" style="color: #00aeef" ><?= $model["investor_name"] ?></h3>
            </div>
        </div>
</div>




<div class="row show-grid">
    <div class="col-md-6">
        <div class="product col-md-9 service-image-left">

            <center>
                <img id="item-display" src="../img/projects_img/<?= $model["id"] ?>.jpg" alt=""></img>
            </center>
        </div>

        
        <div class="container col-md-12">
            
        </div>
    </div>


    <div class="col-md-6">
       
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Галузь</div>
            <div class="panel-body"><?php
                foreach ($eco as $key) {
                    echo "$key->name";
                }
                ?>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading text-center">Сума, яку готові інвестувати</div>
            <div class="panel-body product-price"><?= number_format($model["investor_cost"], 0, '.', '.') ?> $
            </div>
        </div>
       <div class="panel panel-primary">
                <div class="panel-heading text-center">Регіон інвестування</div>
                <div class="panel-body product-price"><?= $model["region"] ?>
                </div>
            </div>

        <!--<div class="product-title">Corsair GS600 600 Watt PSU</div>
        <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>

        <hr>
        <div class="product-price">$ 1234.00</div>
        <div class="product-stock">In Stock</div>-->
        <hr>
        <div class="btn-group cart">
            <button type="button" class="btn btn-success glyphicon glyphicon-euro">
                Запропонувати  проект
            </button>
        </div>
        <div class="btn-group wishlist">
            <button type="button" class="btn btn-primary glyphicon glyphicon-user">
                Прийняти участь
            </button>
        </div>
    </div>
</div>
<div class="container-fluid">		
    <div class="col-md-12 product-info">
        <ul id="myTab" class="nav nav-tabs nav_tabs text-center">

            <li class="active"><a href="#service-one" data-toggle="tab">Опис заявки</a></li>
            
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="service-one">

                <section class="container product-info">
                    

                    <h3>Інвестор:</h3>
                    <p><?= $model["investor_name"] ?></p>
                    <h3>Контактні дані:</h3>
                    <p><?= $model["investor_contacts"] ?></p>
                    <h3>Етап проекту:</h3>
                    <p><?= $model["stage_project"] ?></p>
                    
                    <h3>Регіон інвестування:</h3>
                    <p><?= $model["region"] ?> </p>
                    <h3>Період реалізації інвестиційного проекту(у міс.):</h3>
                    <p><?= $model["duration_project"] ?> </p>
                    <h3>Термін повернення вкладених коштів(у міс.):</h3>
                    <p> <?= $model["term_refund"] ?> </p>
                    <h3>Планована рентабельність проекту:</h3>
                    <p> <?= $model["plan_rent"] ?> </p>
                    <h3>Інше:</h3>
                    <p> <?= $model["other"] ?> </p>
                    
                   
                </section>

            </div>
            <div class="tab-pane fade" id="service-two">

                <section class="container">

                </section>

            </div>
            <div class="tab-pane fade" id="service-three">

            </div>
        </div>
        <hr/>
    </div>
</div>
      
<p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви дійсно хочете видалити дану заявку?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
