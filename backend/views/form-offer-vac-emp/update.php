<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FormOfferVacEmp */

$this->title = 'Update Form Offer Vac Emp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Vac Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-offer-vac-emp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelVac' => $modelVac
    ]) ?>

</div>
