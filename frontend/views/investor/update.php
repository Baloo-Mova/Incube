<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestor */

$this->title = 'Оновити завку інвестора. Ідентифікаційний номер: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Investors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-offer-investor-update">
<div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
