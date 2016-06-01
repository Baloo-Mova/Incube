<?php

namespace frontend\controllers;

use Yii;

class ProjectViewerController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionShow() {
        $get = Yii::$app->request->get();

        if ($get['type'] == "FormAppProject") {
            $model = \common\models\FormApplicationForTheProject::find()->where(['id' => $get['id']])->one();
            return $this->render('form-app-project', ['model' => $model]);
        }

        if ($get['type'] == "FormOfferProject") {
            $model = \common\models\FormOfferProject::find()->where(['id' => $get['id']])->one();
            return $this->render('form-offer-project', ['model' => $model]);
        }
        if ($get['type'] == "FormOfferVacEmp") {
            $model = \common\models\FormOfferVacEmp::find()->where(['id' => $get['id']])->one();
            return $this->render('form-offer-vac-emp', ['model' => $model]);
        }
        if ($get['type'] == "FormOrderInPr") {
            $model = \common\models\FormOrderInPr::find()->where(['id' => $get['id']])->one();
            return $this->render('form-order-in-pr', ['model' => $model]);
        }
    }

    public function actionLoad($id) {

        if (\Yii::$app->request->isAjax) {

            $result = " ";

            $form1 = \common\models\FormApplicationForTheProject::find()->where(['status' => 1, 'economic_activities_id' => $id])->all();

            foreach ($form1 as $key) {



                $result .= "
                   <div class=\"project-viewer-item\">
                 
                
                
                        <a href=\"" . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/project-viewer/show?id=' . $key->id . '&type=FormAppProject') . "\">" . $key->project_name . "</a>
                        <spa>
                              " . $key->project_goal . "
                        </spa>
                        </div
                    </div>";
            }

            $form1 = \common\models\FormOfferProject::find()->where(['status' => 1, 'economic_activities_id' => $id])->all();

            foreach ($form1 as $key) {
                $result .= "<div class=\"project-viewer-item\">
                   
        <div class=\"item  col-xs-4 col-lg-4\">
            <div class=\"thumbnail\">
                <img class=\"group list-group-image\" src=\"http://placehold.it/400x250/000/fff\" alt=\"\" />
                <div class=\"caption\">
                    <h4 class=\"group inner list-group-item-heading text-center\">
                        <a href=\"" . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/project-viewer/show?id=' . $key->id . '&type=FormOfferProject') . "\">" . $key->project_name . "</a></h4>
                    <hr/>
                     <p class=\"group inner list-group-item-text\">
                        " . $key->project_goal . "</p>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-6\">
                            <p class=\"lead\">
                                $ " . number_format($key->project_cost, 0, '.', '.') . "</p>
                        </div>
                        <div class=\"col-xs-12 col-md-6\">
                            <a class=\"btn btn-success\" href=\"" . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/project-viewer/show?id=' . $key->id . '&type=FormOfferProject') . "\">Детальніше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                       
                    </div>";
            }

            $form1 = \common\models\FormOfferVacEmp::find()->where(['status' => 1, 'economic_activities_id' => $id])->all();

            foreach ($form1 as $key) {
                $result .= "<div class=\"project-viewer-item\">
                        <a href=\"" . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/project-viewer/show?id=' . $key->id . '&type=FormOfferVacEmp') . "\">" . $key->name_org . "</a>
                        <spa>
                              " . $key->info_org . "
                        </spa>
                    </div>";
            }

            $form1 = \common\models\FormOrderInPr::find()->where(['status' => 1, 'economic_activities_id' => $id])->all();

            foreach ($form1 as $key) {

                $result .= "<div class=\"project-viewer-item\">
                        <a href=\"" . \yii\helpers\Url::to(Yii::$app->urlManager->baseUrl . '/project-viewer/show?id=' . $key->id . '&type=FormOrderInPr') . "\">" . $key->name . "</a>
                        <spa>
                              " . $key->charInPr->name . "
                             <br/>
                             " . $key->charInPr->st_level . "
                             <br/>
                             " . $key->charInPr->type . "
                             <br/>
                             " . $key->charInPr->newness . "
                             <br/>
                            " . $key->charInPr->result . "
                             <br/>
                        </spa>
                    </div>";
            }



            return $result;
        }
    }

}
