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

    <h1><?= Html::encode($this->title) ?></h1>

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
            'executor_firstname',
            'executor_secondname',
            'date_birth',
            'experience:ntext',
            'education:ntext',
            'internship:ntext',
            'participation_projects:ntext',
            'description:ntext',
            'contacts:ntext',
            'other:ntext',
            'logo',
            'file_resume',
            'date_create',
            'date_publish',
            'status',
        ],
    ]) ?>

</div>
