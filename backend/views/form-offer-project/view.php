<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProject */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'project_name',
            'project_goal:ntext',
            'project_aspects:ntext',
            'adress:ntext',
            'phone',
            'email:email',
            'web_site',
            'incube_help:ntext',
            'economic_activities_id',
            'region',
            'stage_work',
            'project_cost',
            'available_funding',
            'country',
            'date_b',
            'date_e',
        ],
    ]) ?>

</div>
