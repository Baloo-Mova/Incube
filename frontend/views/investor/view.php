<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Investors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-investor-view">

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
            'author_id',
            'publisher_id',
            'investor_name',
            'investor_contacts:ntext',
            'stage_project:ntext',
            'economic_activities_id',
            'region',
            'investor_cost',
            'duration_project',
            'term_refund',
            'plan_rent',
            'other',
            'logo',
            'date_create',
            'date_publish',
            'status',
        ],
    ]) ?>

</div>
