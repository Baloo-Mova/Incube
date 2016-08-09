<?php

namespace frontend\controllers;

use Yii;
use common\models\FormApplicationForTheProject;

class ProjectCreatorController extends \yii\web\Controller
{
    public function actionFormCandVacEmp()
    {
        return $this->render('form-cand-vac-emp');
    }

    public function actionFormApplicationForTheProject(){
        
        $model = new FormApplicationForTheProject();

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post()['FormApplicationForTheProject']; 
            $model->date_reg_proj = date("yyyy-mm-dd"); 
            if($model->save()){
            return $this->redirect('../personal-area/index');
            }else{
                return $this->render('form-application-for-the-project', [
                'model' => $model,
            ]);
            }
        } else {
            return $this->render('form-application-for-the-project', [
                'model' => $model,
            ]);
        }
    }
}
