<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProblem */

$this->title = 'Форма подачі проблеми';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-problem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
