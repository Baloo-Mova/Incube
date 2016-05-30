<?php

namespace frontend\controllers;

use Yii;

class ProjectViewerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow()
    {
        $get = Yii::$app->request->get();
       
        if($get['type'] == "FormAppProject"){
            $model = \common\models\FormApplicationForTheProject::find()->where(['id'=>$get['id']])->one();
            return $this->render('form-app-project',['model'=>$model]);
        }
        
        if($get['type'] == "FormOfferProject"){
            $model = \common\models\FormOfferProject::find()->where(['id'=>$get['id']])->one();
            return $this->render('form-offer-project',['model'=>$model]);
        }
         if($get['type'] == "FormOfferVacEmp"){
            $model = \common\models\FormOfferVacEmp::find()->where(['id'=>$get['id']])->one();
            return $this->render('form-offer-vac-emp',['model'=>$model]);
        }
         if($get['type'] == "FormOrderInPr"){
            $model = \common\models\FormOrderInPr::find()->where(['id'=>$get['id']])->one();
            return $this->render('form-order-in-pr',['model'=>$model]);
        }
         
    }
    
    public function actionLoad($id){
        
        if(\Yii::$app->request->isAjax){
            
            $result = " ";
           
           $form1 = \common\models\FormApplicationForTheProject::find()->where(['status'=>1,'economic_activities_id'=>$id])->all();
          
           foreach($form1 as $key){
               $result .= "<div class=\"project-viewer-item\">
                        <a href=\"".\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/project-viewer/show?id='.$key->id.'&type=FormAppProject')."\">".$key->project_name."</a>
                        <spa>
                              ".$key->project_goal."
                        </spa>
                    </div>";
           }
           
           $form1 = \common\models\FormOfferProject::find()->where(['status'=>1,'economic_activities_id'=>$id])->all();
          
           foreach($form1 as $key){
               $result .= "<div class=\"project-viewer-item\">
                        <a href=\"".\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/project-viewer/show?id='.$key->id.'&type=FormOfferProject')."\">".$key->project_name."</a>
                        <spa>
                              ".$key->project_goal."
                        </spa>
                    </div>";
           }
           
           $form1 = \common\models\FormOfferVacEmp::find()->where(['status'=>1,'economic_activities_id'=>$id])->all();
          
           foreach($form1 as $key){
               $result .= "<div class=\"project-viewer-item\">
                        <a href=\"".\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/project-viewer/show?id='.$key->id.'&type=FormOfferVacEmp')."\">".$key->name_org."</a>
                        <spa>
                              ".$key->info_org."
                        </spa>
                    </div>";
           }
           
           $form1 = \common\models\FormOrderInPr::find()->where(['status'=>1,'economic_activities_id'=>$id])->all();
          
           foreach($form1 as $key){
                
               $result .= "<div class=\"project-viewer-item\">
                        <a href=\"".\yii\helpers\Url::to(Yii::$app->urlManager->baseUrl.'/project-viewer/show?id='.$key->id.'&type=FormOrderInPr')."\">".$key->name."</a>
                        <spa>
                              ".$key->charInPr->name."
                             <br/>
                             ".$key->charInPr->st_level."
                             <br/>
                             ".$key->charInPr->type."
                             <br/>
                             ".$key->charInPr->newness."
                             <br/>
                            ".$key->charInPr->result."
                             <br/>
                        </spa>
                    </div>";
           }
           
           
             
            return $result;
       }
        
    }

}
