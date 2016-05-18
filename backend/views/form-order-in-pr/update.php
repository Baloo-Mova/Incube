<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FormOrderInPr */

$this->title = 'Update Form Order In Pr: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Form Order In Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-order-in-pr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'vik' => $vik,
        'cha' => $cha,
    ]) ?>

</div>
