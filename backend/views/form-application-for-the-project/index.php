<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormApplicationForTheProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Форма бланку-заявки на реалізацію проекту';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-application-for-the-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Форма бланку-заявки на реалізацію проекту', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name_f',
            'surname',
            'name_s',
            'Adress:ntext',
             'project_name',
            // 'project_release:ntext',
            // 'project_goal:ntext',
            // 'project_result:ntext',
            // 'date_b',
            // 'date_e',
            // 'project_cost',
            // 'project_info:ntext',
            // 'date_reg_proj',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
