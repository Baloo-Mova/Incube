<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\EconomicActivities;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Project Fulls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="form-offer-project-full-view">

    <div class="row page-title text-center">
        <h2>Проект. Ідентифікаційний номер: <?= Html::encode($this->title) ?></h2>
    </div>
    <div id="content" class="project-viewer-content">

        <?php
        $eco = EconomicActivities::find()->where(['id' => $model["economic_activities_id"]])->all();
        ?>


        <!--<?php var_dump($model); ?>-->
        <div class="panel panel-primary">

            <div class="panel-body"><h3 class="text-center" style="color: #00aeef" ><?= $model["project_name"] ?></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="product">
                <table class="table table-striped">
                    <tbody>
                        <tr class="col-md-12">
                            <td class="col-md-10"> <a href="##">Logo.png</a></td>
                            <td class="col-md-1 text-center">
                                <a href="#"><i class="fa fa-edit"></i> </a>
                            </td>
                            <td class="col-md-1 text-center">
                                <input type="checkbox"> 
                            </td>
                        </tr>
                        <tr class="col-md-12">
                            <td class="col-md-10"> <a href="##">Present.ptt</a></td>
                            <td class="col-md-1 text-center">
                                <a href="#"><i class="fa fa-edit"></i> </a>
                            </td>
                            <td class="col-md-1 text-center">

                            </td>
                        </tr>


                    </tbody>

                </table>

            </div>


            <div class="container col-md-12">

            </div>
        </div>


        <div class="col-md-6">

            <div class="panel panel-primary">
                <div class="panel-heading text-center">Галузь</div>
                <div class="panel-body product-price"><?php
                    foreach ($eco as $key) {
                        echo "$key->name";
                    }
                    ?>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading text-center">Географія(Регіон) проекту</div>
                <div class="panel-body product-price"><?= $model["region"] ?>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Вартість проекту</div>
                <div class="panel-body product-price"><?= number_format($model["project_cost"], 0, '.', '.') ?> USD
                </div>
            </div>



            <div class="btn-group cart">
                <a href="#" class="btn btn-primary">
                    <i class="glyphicon glyphicon-euro"></i> Інвестувати
                </a>
            </div>
            <div class="btn-group wishlist">
                <a href="#" class="btn btn-primary">
                    <i class="glyphicon glyphicon-user"></i> Прийняти участь
                </a>

            </div>
        </div>
    </div>
    <div class="row">		
        <div class="col-md-12 product-info ">


            <div class="text-center page-title">
                <h3>Опис заявки</h3>
            </div>
            <hr/>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="service-one">

                    <section class="container product-info">

                        <p><?= $model["description"] ?></p>
                        <?php
                        if ($model["project_goal"] != '') {
                            echo "<h3>Мета проекту:</h3>"
                            . "<p> {$model["project_goal"]} </p>";
                        }
                        if ($model["project_aspects"] != '') {
                            echo "<h3>Іноваційні аспекти та переваги проекту:</h3>"
                            . "<p> {$model["project_aspects"]} </p>";
                        }
                        if ($model["project_beneficaries"] != '') {
                            echo "<h3>Отримувачі вигоди:</h3>"
                            . "<p> {$model["project_beneficaries"]}</p>";
                        }
                        if ($model["project_duration"] != '') {
                            echo "<h3>Період реалізації проекту:</h3>"
                            . "<p>{$model["project_duration"]}</p>";
                        }
                        if ($model["project_stage"] != '') {
                            echo "<h3>Стадія проекту:</h3>"
                            . "<p> {$model["project_stage"]} </p>";
                        }
                        if ($model["available_funding"] != '') {
                            echo "<h3>Джерела фінансування:</h3>"
                            . "<p> {$model["available_funding"]}</p>";
                        }
                        if ($model["other"] != '') {
                            echo "<h3>Інше:</h3>"
                            . "<p> {$model["other"]}</p>";
                        }
                        ?>

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


    
    <div class="btn-group">
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="btn-group"> 
        <?=
        Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </div>




</div>
