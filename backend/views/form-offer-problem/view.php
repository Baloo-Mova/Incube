<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProblem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-problem-view">

    <h1>Проблема(питання). Ідентифікаційний номер: <?= Html::encode($this->title) ?></h1>

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
            'problem_name',
            'problem_description:ntext',
            'region',
            'other:ntext',
            'logo',
            'date_create',
            'date_publish',
            'status',
        ],
    ]) ?>

</div>
