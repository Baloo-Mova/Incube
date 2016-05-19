<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormCandVacEmpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Cand Vac Emps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-cand-vac-emp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Cand Vac Emp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_f',
            'surname',
            'name_s',
            'date_birth',
            // 'work_info:ntext',
            // 'education:ntext',
            // 'trainee:ntext',
            // 'projects:ntext',
            // 'skills:ntext',
            // 'more_info:ntext',
            // 'adress:ntext',
            // 'phone',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
