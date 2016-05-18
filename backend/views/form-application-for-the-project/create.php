<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FormApplicationForTheProject */

$this->title = 'Create Form Application For The Project';
$this->params['breadcrumbs'][] = ['label' => 'Form Application For The Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-application-for-the-project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
