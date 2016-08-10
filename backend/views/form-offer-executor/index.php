<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOfferExecutorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подані резюме виконавців';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-executor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Подати нове резюме', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author_id',
            'publisher_id',
            'executor_firstname',
            'executor_secondname',
            // 'date_birth',
            // 'experience:ntext',
            // 'education:ntext',
            // 'internship:ntext',
            // 'participation_projects:ntext',
            // 'description:ntext',
            // 'contacts:ntext',
            // 'other:ntext',
            // 'logo',
            // 'file_resume',
            // 'date_create',
            // 'date_publish',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
