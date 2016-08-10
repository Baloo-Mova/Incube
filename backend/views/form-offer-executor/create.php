<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferExecutor */

$this->title = 'Подати резюме';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Executors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-executor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
