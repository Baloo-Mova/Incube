<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOrderInPrEmpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Order In Prs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-order-in-pr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Order In Pr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'in_direction',
            'patents:ntext',
            'date_b',
            // 'date_e',
            // 'cost_period',
            // 'key_perf_ind:ntext',
            // 'key_market:ntext',
            // 'coast',
            // 'coast_direction:ntext',
            // 'tax_coast_direction:ntext',
            // 'info_spec:ntext',
            // 'rating_effective:ntext',
            // 'another_effects:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
