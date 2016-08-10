<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOfferProblem */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список поданних проблем';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-problem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Подати проблему', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author_id',
            'publisher_id',
            'economic_activities_id',
            'problem_name',
            // 'problem_description:ntext',
            // 'region',
            // 'other:ntext',
            // 'logo',
            // 'date_create',
            // 'date_publish',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
