<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferExecutor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Executors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-executor-view">
    <div class="row page-title text-center">
        <h2> Резюме. Ідентифікаційний номер: <?= Html::encode($this->title) ?></h2>
    </div>

    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">

            <br>
            <p class=" text-info"><?= $model->date_create ?> </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($model->executor_firstname) ?> <?= Html::encode($model->executor_secondname) ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../img/250n300.png" class="img-circle img-responsive"> </div>

                        <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                               <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                          </dl>
                        </div>-->
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>День народження</td>
                                        <td><?= $model["date_birth"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Досвід роботи</td>
                                        <td><?= $model["experience"] ?></td>
                                    </tr>
                                                                        
                                    <tr>
                                        <td>Освіта</td>
                                        <td><?= $model["education"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Практики та стажування</td>
                                        <td><?= $model["internship"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Участь у проектах</td>
                                        <td><?= $model["participation_projects"] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Здібності та уміння</td>
                                        <td><?= $model["description"] ?></td>
                                    </tr>
                                    <tr style="display:none">
                                        <td>Контактні дані(адреса, телефон,ел.пошта)</td>
                                        <td><?= $model["contacts"] ?></td>
                                    </tr>
                                    
                                    

                                </tbody>
                            </table>

                            <!--<a href="#" class="btn btn-primary">My Sales Performance</a>
                            <a href="#" class="btn btn-primary">Team Sales Performance</a>-->
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Надіслати повідомлення" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
                    </span>
                </div>

            </div>
        </div>
    </div>


    


</div>