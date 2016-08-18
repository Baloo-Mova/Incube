<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferProjectFull */

$this->title = 'Заповніть форму для подачі проекту';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Project Fulls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-full-create">

<div class="row page-title text-center">
    <h2><?= Html::encode($this->title) ?></h2>
</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
