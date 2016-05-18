<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Vacancy;
use common\models\LoginForm;
use yii\base\Model;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'create', 'test', 'delpic'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTest() {
        $modelsAddress = [new Vacancy];
        
        if (Model::loadMultiple($modelsAddress, Yii::$app->request->post())) {

            $modelsAddress = Model::createMultiple(Vacancy::classname());
            
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress)
                );
            } 
             
            $valid = Model::validateMultiple($modelsAddress);

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelCustomer->save(false)) {
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->customer_id = $modelCustomer->id;
                            if (! ($flag = $modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelCustomer->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('test', [ 
            'modelsAddress' => (empty($modelsAddress)) ? [new Address] : $modelsAddress
        ]);
    }
    
            public function actionYourActionAdd()
        { 
            $model = new ModelName;
            $model->save(false);
            return $this->actionIndex();
        }

/**
 * Delete model.
 * @param int $id
 */
        public function actionYourActionRemove($id)
        {
            ModelName::findOne($id)->delete();
            return $this->actionIndex();
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

}
