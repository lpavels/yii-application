<?php

namespace backend\controllers;

use common\models\OrganizationSearch;
use Yii;
use common\models\Organization;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class OrganizationsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            //'create',
                            //'update',
                            //'view',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'rospotrebnadzor',
                            'food_organizer',
                            //'user',
                        ],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    Yii::$app->session->setFlash(
                        "error",
                        "У Вас нет доступа к этой  странице, пожалуйста, обратитесь к администратору!"
                    );
                    if (Yii::$app->user->isGuest) {
                        return $this->goHome();
                    } else {
                        return $this->redirect(Yii::$app->request->referrer);
                    }
                },
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new OrganizationSearch();
        $search = Yii::$app->request->queryParams;

        if ($search) {
            $post = $search['OrganizationSearch'];
            if ($post['federal_district_id']){
                $region_items = Yii::$app->myComponent->RegionItems($post['federal_district_id']);
            }
            if ($post['region_id']){
                $municipality_items = Yii::$app->myComponent->MunicipalityItems($post['region_id']);
            }
        }

        $dataProvider = $searchModel->search($search);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'region_items' => $region_items,
            'municipality_items' => $municipality_items,
        ]);
    }

    /*public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }*/

    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }*/

    protected function findModel($id)
    {
        if (($model = Organization::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
