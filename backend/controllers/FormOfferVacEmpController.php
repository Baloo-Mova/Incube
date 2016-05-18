<?php

namespace backend\controllers;

use Yii;
use common\models\FormOfferVacEmp;
use common\models\search\FormOfferVacEmpSearch;
use yii\web\Controller;
use common\models\Vacancy;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * FormOfferVacEmpController implements the CRUD actions for FormOfferVacEmp model.
 */
class FormOfferVacEmpController extends Controller {

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
     * Lists all FormOfferVacEmp models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new FormOfferVacEmpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormOfferVacEmp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FormOfferVacEmp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new FormOfferVacEmp();
        $modelsVac[] = new Vacancy();
        $postData = Yii::$app->request->post();

        if ($model->load($postData)) {

            $valid = $model->validate();

            foreach ($postData['Vacancy'] as $i => $single) {
                $modelsVac[$i] = new Vacancy();
            }

            Model::loadMultiple($modelsVac, Yii::$app->request->post());

            $valid = Model::validateMultiple($modelsVac) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsVac as $modelAddress) {
                            $modelAddress->fid = $model->id;
                            if (!($flag = $modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'modelVac' => (empty($modelsVac)) ? [new Vacancy] : $modelsVac
            ]);
        }
    }

    /**
     * Updates an existing FormOfferVacEmp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $modelVac = $model->vacancies; 
        $postData = Yii::$app->request->post();
        
       
        
        if ($model->load($postData)) { 
            
            $oldIDs = ArrayHelper::map($modelVac, 'id', 'id');
            
            foreach ($postData['Vacancy'] as $i => $single) {
                $modelVac[$i] = new Vacancy();
            } 
            
            Model::loadMultiple($modelVac, Yii::$app->request->post());
            
           
           
             $valid = $model->validate();
            $valid = Model::validateMultiple($modelVac) && $valid;
            
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($oldIDs)) {
                            Vacancy::deleteAll(['id' => $oldIDs]);
                        }
                        foreach ($modelVac as $vac) {
                            $vac->fid = $model->id;
                            if (! ($flag = $vac->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

        }else {
            return $this->render('create', [
                        'model' => $model,
                        'modelVac' => (empty($modelVac)) ? [new Vacancy] : $modelVac
            ]);
        }
    }

    /**
     * Deletes an existing FormOfferVacEmp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        
        Vacancy::deleteAll(['fid'=>$id]);
        
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormOfferVacEmp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormOfferVacEmp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = FormOfferVacEmp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
