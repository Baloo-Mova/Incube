<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\EconomicActivities;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProblem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-problem-view">
    <div class="row page-title text-center">
        <h2>Проблема(питання). Ідентифікаційний номер: <?= Html::encode($this->title) ?></h2>
    </div>

    <div id="content" class="project-viewer-content">

        <?php
        $eco = EconomicActivities::find()->where(['id' => $model["economic_activities_id"]])->all();
        ?>


        <!--<?php var_dump($model); ?>-->
        <div class="panel panel-primary">
            <div class="panel-heading text-center"><h4>Назва проблеми</h4></div>
            <div class="panel-body"><h3 class="text-center" style="color: #00aeef" ><?= $model["problem_name"] ?></h3>
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
                <div class="panel-body"><?php
        foreach ($eco as $key) {
            echo "$key->name";
        }
        ?>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading text-center">Регіон, для якого подається питання</div>
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

                        <p><?= $model["problem_description"] ?></p>
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
        <?=
        Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви дійсно хочете видалити дану заявку?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
</div>



</div>
