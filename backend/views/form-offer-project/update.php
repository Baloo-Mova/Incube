<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProject */

$this->title = 'Update Form Offer Project: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-offer-project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 
    ]) ?>

</div>
