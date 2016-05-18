<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOrderInPr */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Form Order In Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-order-in-pr-view">

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
            'name',
            'in_direction',
            'patents:ntext',
            'date_b',
            'date_e',
            'cost_period',
            'key_perf_ind:ntext',
            'key_market:ntext',
            'coast',
            'coast_direction:ntext',
            'tax_coast_direction:ntext',
            'info_spec:ntext',
            'rating_effective:ntext',
            'another_effects:ntext',
        ],
    ]) ?>

</div>
