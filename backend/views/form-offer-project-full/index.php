<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOfferProjectFullSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подані проекти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-full-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Подати заявку проекту', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'project_manager:ntext',
            // 'project_contacts:ntext',
            // 'phone',
            // 'email:email',
            // 'web_site',
             'project_name',
            // 'project_goal:ntext',
            // 'project_aspects:ntext',
            // 'project_beneficaries:ntext',
            // 'description:ntext',
            // 'project_cost',
            // 'project_duration',
            // 'region',
            // 'project_stage:ntext',
            // 'available_funding:ntext',
            // 'other:ntext',
            // 'logo',
            // 'project_files',
            // 'date_create',
            // 'date_publish',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
