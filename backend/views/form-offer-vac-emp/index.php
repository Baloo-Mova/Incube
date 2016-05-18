<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FormOfferVacEmpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Offer Vac Emps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-offer-vac-emp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form Offer Vac Emp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_org',
            'info_org:ntext',
            'info_org_s:ntext',
            'type_org',
            // 'sector_org',
            // 'adress:ntext',
            // 'phone',
            // 'email:email',
            // 'web_site',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
