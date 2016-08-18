<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */

$this->title = 'Оновлення даних проекту. Ідентифікаційний номер: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Project Fulls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-offer-project-full-update">

    <div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
