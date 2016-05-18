<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOfferProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Форма бланку-пропозиції проекту';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Offer Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'project_name',
            'project_goal:ntext',
            'project_aspects:ntext',
            'adress:ntext',
            // 'phone',
            // 'email:email',
            // 'web_site',
            // 'incube_help:ntext',
            // 'economic_activities',
            // 'region',
            // 'stage_work',
            // 'project_cost',
            // 'available_funding',
            // 'country',
            // 'date_b',
            // 'date_e',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
