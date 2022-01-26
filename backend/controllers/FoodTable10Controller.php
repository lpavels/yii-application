<?php

namespace backend\controllers;

use Yii;
use common\models\FoodTable10;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FoodTable10Controller implements the CRUD actions for FoodTable10 model.
 */
class FoodTable10Controller extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'create',
                            'doc-food-table-10',
                        ],
                        'allow' => true,
                        'roles' => [
                            'admin',
                            'director_school',
                            'food_organizer',
                            'rospotrebnadzor',
                        ],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    Yii::$app->session->setFlash(
                        "error",
                        "У Вас нет доступа к этой  странице, пожалуйста, обратитесь к администратору!"
                    );
                    if (Yii::$app->user->isGuest)
                    {
                        return $this->goHome();
                    }
                    else
                    {
                        return $this->redirect(Yii::$app->request->referrer);
                    }
                },
            ],
        ];
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actiondDocFoodTable10()
    {
        return $this->render('doc-food-table-10');
    }
}