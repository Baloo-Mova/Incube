<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FormApplicationForTheProject */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Application For The Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-application-for-the-project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'Adress:ntext',
            'project_name',
            'project_release:ntext',
            'project_goal:ntext',
            'project_result:ntext',
            'date_b',
            'date_e',
            'project_cost',
            'project_info:ntext',
            'date_reg_proj',
        ],
    ]) ?>

</div>
