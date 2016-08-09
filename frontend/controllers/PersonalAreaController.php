<?php

namespace frontend\controllers;

use Yii; 
use common\models\search\FormApplicationForTheProjectSearch;

class PersonalAreaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new FormApplicationForTheProjectSearch();
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
