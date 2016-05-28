<?php

namespace frontend\controllers;

use Yii;
use common\models\FormOfferProject;
use common\models\search\FormOfferProjectSearch;

class PersonalAreaController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $searchModel = new FormOfferProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSettings()
    {
        return $this->render('settings');
    }

}
