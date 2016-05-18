<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferVacEmp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Vac Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-vac-emp-view">

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
            'name_org',
            'info_org:ntext',
            'info_org_s:ntext',
            'type_org',
            'sector_org',
            'adress:ntext',
            'phone',
            'email:email',
            'web_site',
        ],
    ]) ?>

</div>
