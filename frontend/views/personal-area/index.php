<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

?>

<br/><br/><br/>

<div class="container">
    <div class="row well">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked well"> 
                <li class="active"><a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/personal-area/index') ?>"><i class="fa fa-home"></i> Кабінет</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-key"></i> Security</a></li>
                <li><a href="<?= \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/site/logout') ?>" class="btn btn-navbar login"><i class="fa fa-sign-out"></i> Вихід</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="panel">
                <img class="pic img-circle" src="../img/man-profile.jpg" alt="...">
                <div class="name"><small>Терн Володимир, Україна</small></div>
                <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>
            </div>

            <br><br><br>
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#inbox" data-toggle="tab"><i class="fa fa-file-archive-o"></i> Заявки</a></li>
          <!--      <li><a href="#sent" data-toggle="tab"><i class="fa fa-reply-all"></i> Sent</a></li>
                <li><a href="#assignment" data-toggle="tab"><i class="fa fa-file-text-o"></i> Assignment</a></li>
                <li><a href="#event" data-toggle="tab"><i class="fa fa-clock-o"></i> Event</a></li>-->
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="inbox">
                    <?php Pjax::begin(); ?>    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'summary'=>'',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            
                            'project_name',
                            'project_cost',
                            'date_b',
                            'date_e',
                          
                        ],
                    ]);
                    ?>
                    <?php Pjax::end(); ?>
                </div>




            </div>

        </div>
    </div>


</div>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"><br/><br/>
            <form class="form-horizontal">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="body">Body :</label>  
                        <div class="col-md-8">
                            <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="message">Message :</label>
                        <div class="col-md-8">                     
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="send"></label>
                        <div class="col-md-8">
                            <button id="send" name="send" class="btn btn-primary">Send</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>
<br/><br/><br/>
