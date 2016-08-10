<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferExecutor */

$this->title = 'Подати резюме';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Executors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-executor-create">
<div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
