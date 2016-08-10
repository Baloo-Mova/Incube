<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormCandVacEmp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Cand Vac Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-cand-vac-emp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_f',
            'surname',
            'name_s',
            'date_birth',
            'work_info:ntext',
            'education:ntext',
            'trainee:ntext',
            'projects:ntext',
            'skills:ntext',
            'more_info:ntext',
            'adress:ntext',
            'phone',
            'email:email',
        ],
    ]) ?>

</div>
