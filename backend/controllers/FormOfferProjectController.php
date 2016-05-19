<?php

namespace backend\controllers;

use Yii;
use common\models\FormOfferProject;
use common\models\search\FormOfferProjectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Html;

/**
 * FormOfferProjectController implements the CRUD actions for FormOfferProject model.
 */
class FormOfferProjectController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all FormOfferProject models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new FormOfferProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormOfferProject model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FormOfferProject model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new FormOfferProject();

        if ($model->load(Yii::$app->request->post())) {

            $files = UploadedFile::getInstances($model, 'file'); 
            $model->file = UploadedFile::getInstances($model, 'file');
            if ($model->save()) { 
                foreach ($model->file as $key => $file) { 
                    $file->saveAs('upload' . DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension); //Upload files to server
                    $fileModel = new \common\models\FilesForFormOfferProject();
                    $fileModel->name = 'upload' .  DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension;
                    $fileModel->pid = $model->id;
                    $fileModel->save(); 
                } 
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FormOfferProject model.  
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post())) {
            
            $files = UploadedFile::getInstances($model, 'file'); 
            $model->file = UploadedFile::getInstances($model, 'file');
            if ($model->save()) {
                foreach ($model->file as $key => $file) {
                    $file->saveAs('upload' . DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension); //Upload files to server
                    $fileModel = new \common\models\FilesForFormOfferProject();
                    $fileModel->name = 'upload' . DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension;
                    $fileModel->pid = $model->id;
                    $fileModel->save(); 
                } 
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model, 
            ]);
        }
    }
    
    public function actionDelpic() {
        if (Yii::$app->request->isAjax) {
            $post = \Yii::$app->request->post();
            $model = \common\models\FilesForFormOfferProject::find()->where(['id' => $post['id']])->one();
            if (isset($model)) {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $model->delete();
                return \yii\helpers\Json::encode($post);
            }
        }
    }

    /**
     * Deletes an existing FormOfferProject model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        
        \common\models\FilesForFormOfferProject::deleteAll(['pid'=>$id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormOfferProject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormOfferProject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = FormOfferProject::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
