<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */

$this->title = 'Заповніть форму для подачі проекту';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Project Fulls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-full-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
