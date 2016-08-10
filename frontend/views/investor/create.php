<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferInvestor */

$this->title = 'Подача заявки на Інвестування';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Investors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-investor-create">
<div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
