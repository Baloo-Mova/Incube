<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FormOfferInvestorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Offer Investors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-investor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Offer Investor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_author',
            'id_publisher',
            'investor_name',
            'investor_contacts:ntext',
            // 'stage_project:ntext',
            // 'economic_activities',
            // 'region',
            // 'investor_cost',
            // 'duration_project',
            // 'term_refund',
            // 'plan_rent',
            // 'other',
            // 'logo',
            // 'date_create',
            // 'date_publish',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
