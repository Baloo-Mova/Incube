<?php
/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use common\models\EconomicActivities;
?>

<br/>



<div id="content" class="project-viewer-content">

    <?php
    $eco = EconomicActivities::find()->where(['id' => $model["economic_activities_id"]])->all();
    ?>


    <!--<?php var_dump($model); ?>-->
 <div class="panel panel-primary">
     <div class="panel-heading text-center"><h4>Назва проекту</h4></div>
     <div class="panel-body"><h3 class="text-center" style="color: #00aeef" ><?= $model["project_name"] ?></h3>
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

        <div class="container service1-items col-sm-2 col-md-2 pull-left">
            <center>
                <a id="item-1" class="service1-item">
                    <img src="../img/projects_img/<?= $model["id"] ?>.jpg" alt=""></img>
                </a>
                <a id="item-2" class="service1-item">
                    <img src="../img/projects_img/<?= $model["id"] ?>.jpg" alt=""></img>
                </a>
                <a id="item-3" class="service1-item">
                    <img src="../img/projects_img/<?= $model["id"] ?>.jpg" alt=""></img>
                </a>
            </center>
        </div>

        <div class="container col-md-12">
            
        </div>
    </div>


    <div class="col-md-6">
       
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Сфера діяльності</div>
            <div class="panel-body"><?php
                foreach ($eco as $key) {
                    echo "$key->name";
                }
                ?>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading text-center">Загальна вартість проекту</div>
            <div class="panel-body product-price"><?= number_format($model["project_cost"], 0, '.', '.') ?> $
            </div>
        </div>
       <div class="panel panel-primary">
                <div class="panel-heading text-center">Країна реєстрації проекту</div>
                <div class="panel-body product-price"><?= $model["country"] ?>
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
                Інвестувати 
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
        <ul id="myTab" class="nav nav-tabs nav_tabs">

            <li class="active"><a href="#service-one" data-toggle="tab">Короткий опис</a></li>
            <li><a href="#service-two" data-toggle="tab">Коментарі</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="service-one">

                <section class="container product-info">
                    <h3>Основна ідея проекту:</h3>
                    <p><?= $model["project_goal"] ?></p>
                    <h3>Регіон (у якому функціонуватиме проект):</h3>
                    <p><?= $model["region"] ?></p>
                    <h3>Наявне фінансування:</h3>
                    <p><?= $model["available_funding"] ?> </p>
                    <h3>Стадія розробки:</h3>
                    <p><?= $model["stage_work"] ?> </p>
                    <h3>Строки виконання:</h3>
                    <div class="row">
                        <div class="col-lg-2"><h4>Початок: </h4> <p><?= $model["date_b"] ?> </p></div>
                        <div class="col-lg-2"> <h4>Кінець: </h4> <p> <?= $model["date_e"] ?> </p></div>
                    </div>
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



<div style="height: 200px"></div>