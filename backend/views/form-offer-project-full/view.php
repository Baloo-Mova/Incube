<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Project Fulls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-full-view">

    <h1>Проект: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
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
            'economic_activities_id',
            'project_manager:ntext',
            'project_contacts:ntext',
            'phone',
            'email:email',
            'web_site',
            'project_name',
            'project_goal:ntext',
            'project_aspects:ntext',
            'project_beneficaries:ntext',
            'description:ntext',
            'project_cost',
            'project_duration',
            'region',
            'project_stage:ntext',
            'available_funding:ntext',
            'other:ntext',
            'logo',
            'project_files',
            'date_create',
            'date_publish',
            'status',
        ],
    ]) ?>

</div>
