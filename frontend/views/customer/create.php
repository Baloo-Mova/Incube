<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProblem */

$this->title = 'Форма подачі проблеми';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-problem-create">
<div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
