<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOfferVacEmp */

$this->title = 'Create Form Offer Vac Emp';
$this->params['breadcrumbs'][] = ['label' => 'Form Offer Vac Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-vac-emp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelVac' => $modelVac
    ]) ?>

</div>
