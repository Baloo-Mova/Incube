<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormOrderInPr */

$this->title = 'Create Form Order In Pr';
$this->params['breadcrumbs'][] = ['label' => 'Form Order In Prs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-order-in-pr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'vik' => $vik,
        'cha' => $cha,
    ]) ?>

</div>
