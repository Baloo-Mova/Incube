<?php
//use Yii;

namespace frontend\controllers;
use common\models\FormOfferProblem;


use Yii;



class CustomerController extends \yii\web\Controller
{
    
    
    public function actionIndex()
    {
       // $searchModel = new FormOfferProblemSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       // return $this->render('index', [
         //   'searchModel' => $searchModel,
       //     'dataProvider' => $dataProvider,
       // ]);
        return $this->render('index');
    }

    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

   
    public function actionCreate()
    {
        $model = new FormOfferProblem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

   
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    protected function findModel($id)
    {
        if (($model = FormOfferProblem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}
