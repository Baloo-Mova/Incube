<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormCandVacEmp */

$this->title = 'Create Form Cand Vac Emp';
$this->params['breadcrumbs'][] = ['label' => 'Form Cand Vac Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-cand-vac-emp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
