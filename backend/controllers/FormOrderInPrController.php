<?php

namespace backend\controllers;

use Yii;
use common\models\FormOrderInPr;
use common\models\search\FormOrderInPrEmpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\PerformerProject;
use yii\web\UploadedFile;
use common\models\CharInPr;
/**
 * FormOrderInPrController implements the CRUD actions for FormOrderInPr model.
 */
class FormOrderInPrController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FormOrderInPr models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormOrderInPrEmpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormOrderInPr model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FormOrderInPr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        
        $model = new FormOrderInPr();
        $vikonavec = new PerformerProject();
        $harakter = new CharInPr(); 

        if ($model->load(Yii::$app->request->post())&&$model->save()) {
            
            $files = UploadedFile::getInstances($model, 'file'); 
            $model->file = UploadedFile::getInstances($model, 'file');
            
           $vikonavec->load(Yii::$app->request->post());
           
           $vikonavec->ipid = $model->id;
           $vikonavec->save();
            
           $harakter->load(Yii::$app->request->post());
           $harakter->ipid = $model->id;
           $harakter->save();
           
           foreach ($model->file as $key => $file) { 
                    $file->saveAs('upload' . DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension); //Upload files to server
                    $fileModel = new \common\models\AnotherFilesInPr();
                    $fileModel->name = 'upload' .  DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension;
                    $fileModel->in_pr_id = $model->id;
                    $fileModel->save(); 
                } 
            
           return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'vik' => $vikonavec,
                'cha' => $harakter,
            ]);
        }
    }
    
    public function actionDelpic() {
        if (Yii::$app->request->isAjax) {
            $post = \Yii::$app->request->post();
            $model = \common\models\AnotherFilesInPr::find()->where(['id' => $post['id']])->one();
            if (isset($model)) {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $model->delete();
                return \yii\helpers\Json::encode($post);
            }
        }
    }

    /**
     * Updates an existing FormOrderInPr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $vikonavec = $model->performerProjects;
        $harakter =  $model->charInPrs;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            
             $files = UploadedFile::getInstances($model, 'file'); 
            $model->file = UploadedFile::getInstances($model, 'file');
            
           $vikonavec->load(Yii::$app->request->post());
           $vikonavec->ipid = $model->id;
           $vikonavec->save();
            
           $harakter->load(Yii::$app->request->post());
           $harakter->ipid = $model->id;
           $harakter->save();
            
            
            foreach ($model->file as $key => $file) { 
                    $file->saveAs('upload' . DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension); //Upload files to server
                    $fileModel = new \common\models\AnotherFilesInPr();
                    $fileModel->name = 'upload' .  DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension;
                    $fileModel->in_pr_id = $model->id;
                    $fileModel->save(); 
                } 
            
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'vik' => $vikonavec,
                'cha' => $harakter,
            ]);
        }
    }

    /**
     * Deletes an existing FormOrderInPr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        PerformerProject::deleteAll(['ipid'=>$id]);
        CharInPr::deleteAll(['ipid'=>$id]);
        \common\models\AnotherFilesInPr::deleteAll(['in_pr_id'=>$id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormOrderInPr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormOrderInPr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormOrderInPr::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
